<?php

    class typeController extends Controller{
        public function __construct(){
        }

        /**
         * Vista Principal Paises
         */
        public function index(){
            $data =
            [
                'title' => 'Software Ciis',
                'bg'    =>  'dark'
            ];
            View::render('Type', $data);
        }

        /**
         * Mostrar Todos los Paises
         */
        public function all(){
            if(isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "GET"){
                if(isset($_GET['token'])){
                    $jwt = $_GET['token'];
                    if(autenticationAdmin($jwt)){
                        $types = new typeModel();
                        $data = $types->all();
                        if($data) {
                            $json = [
                                "ok" => true,
                                "status"=>200,
                                "total_registros"=>count($data),
                                "types" => $data,
                            ];
                        }else{
                            $json = [
                                "ok" => true,
                                "status"=>200,
                                "types" => null,
                            ];
                        }
                        echo json_encode($json, false);
                        return;
                    }else{
                        return;
                    }
                }else {
                    $json = array(
                        "ok" => false,
                        "status" =>403,
                        "error" => 'Forbidden.',
                        "errores" => [
                            "message" => 'No esta authorizado.'
                        ]
                    );

                    echo json_encode($json, true);
                    return;
                }
            }else{
                $json = array(
                    "ok" => false,
                    "status" =>405,
                    "error" => 'Method Not Allowed.',
                    "errores" => [
                        "message" => 'No se permite el uso de ese método.'
                    ]
                );

                echo json_encode($json, true);
                return;
            }
        }

        /**
         * Crear Pais
         */
        public function create() {
            if(isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "POST"){
                if(isset($_GET['token'])){
                    $jwt = $_GET['token'];
                    if(autenticationAdmin($jwt)){
                        if(isset($_POST["name"]) && isset($_POST["description"])) {
                            $datos = array(
                                "name" => $_POST["name"],
                                "description" => $_POST["description"]
                            );

                            $type = new typeModel();
                            $type->name = $datos["name"];
                            $type->description = $datos["description"];

                            if(!$id = $type->add()):
                                $json = array(
                                    "ok" => false,
                                    "status" => 500,
                                    "error" => 'Internal Server Error',
                                    "errores" => [
                                        "message" => 'No se creo el Tipo de Documento'
                                    ]
                                );
                            else :
                                $json = array(
                                    "ok" => true,
                                    "status" => 200,
                                    "type" => $datos,
                                    "message" => "Tipo de Documento fue Creado Correctamente."
                                );
                            endif;
                            
                            echo json_encode($json, true);
                            return;
                        }else{
                            $json = array(
                                "ok" => false,
                                "status" =>415,
                                "error" => 'Unsupported Media Typ.',
                                "errores" => [
                                    "message" => 'El tipo de archivo que se ha recibido es distinto al que se esperaba.'
                                ]
                            );
        
                            echo json_encode($json, true);
                            return;
                        }
                    }else{
                        return;
                    }
                }else {
                    $json = array(
                        "ok" => false,
                        "status" =>403,
                        "error" => 'Forbidden.',
                        "errores" => [
                            "message" => 'No esta authorizado.'
                        ]
                    );

                    echo json_encode($json, true);
                    return;
                }
            }else{
                $json = array(
                    "ok" => false,
                    "status" =>405,
                    "error" => 'Method Not Allowed.',
                    "errores" => [
                        "message" => 'No se permite el uso de ese método.'
                    ]
                );

                echo json_encode($json, true);
                return;
            }
         }

         /**
         * Actualizar Pais
         */
        public function update() {
            if(isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "POST"){
                if(isset($_GET['token'])){
                    if(isset($_GET['id'])){
                        $id = $_GET['id'];
                    }else{
                        $json = array(
                            "ok" => false,
                            "status" =>405,
                            "error" => 'Method Not Allowed.',
                            "errores" => [
                                "message" => 'No se permite el uso de ese método.'
                            ]
                        );
        
                        echo json_encode($json, true);
                        return;
                    }
                    $jwt = $_GET['token'];
                    if(autenticationAdmin($jwt)){
                        
                        if(isset($_POST["name"]) && isset($_POST["description"])) {

                            $datos = array(
                                "name" => $_POST["name"],
                                "description" => $_POST["description"]
                            );

                            $type = new typeModel();
                            $type->id = $id;
                            $type->name = $datos["name"];
                            $type->description = $datos["description"];

                            if(!$type->one()):
                                $json = array(
                                    "ok" => false,
                                    "status" => 406,
                                    "error" => 'Not Acceptable',
                                    "errores" => [
                                        "message" => 'No existe el Tipo de Documento'
                                    ]
                                );
                                echo json_encode($json, true);
                                return;
                            endif;
                            
                            if($type->update()){
                                $json = array(
                                    "ok" => true,
                                    "status" => 200,
                                    "type" => $datos,
                                    "message" => "Tipo de Documento ".$datos["name"]." actualizado correctamente."
                                );
                            }else{
                                $json = array(
                                    "ok" => false,
                                    "status" => 500,
                                    "error" => 'Internal Server Error',
                                    "errores" => [
                                        "message" => 'No se pudo actualizar el Tipo de Documento'
                                    ]
                                );
                            }
                            
                            echo json_encode($json, true);
                            return;

                        }else{
                            $json = array(
                                "ok" => false,
                                "status" =>415,
                                "error" => 'Unsupported Media Typ.',
                                "errores" => [
                                    "message" => 'El tipo de archivo que se ha recibido es distinto al que se esperaba.'
                                ]
                            );
        
                            echo json_encode($json, true);
                            return;
                        }
                    }else{
                        return;
                    }
                }else {
                    $json = array(
                        "ok" => false,
                        "status" =>403,
                        "error" => 'Forbidden.',
                        "errores" => [
                            "message" => 'No esta authorizado.'
                        ]
                    );

                    echo json_encode($json, true);
                    return;
                }
            }else{
                $json = array(
                    "ok" => false,
                    "status" =>405,
                    "error" => 'Method Not Allowed.',
                    "errores" => [
                        "message" => 'No se permite el uso de ese método.'
                    ]
                );

                echo json_encode($json, true);
                return;
            }
         }
        
        /**
         * Eliminar un Usuario
         */
        public function delete() {
            if(isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "DELETE"){
                if(isset($_GET['token'])){
                    $jwt = $_GET['token'];
                    if(autenticationAdmin($jwt)){
                        if(isset($_GET['id'])){
                            $id = $_GET['id'];
                        }else{
                            $json = array(
                                "ok" => false,
                                "status" =>405,
                                "error" => 'Method Not Allowed.',
                                "errores" => [
                                    "message" => 'No se permite el uso de ese método.'
                                ]
                            );
                            echo json_encode($json, true);
                            return;
                        }
                        
                        $type = new typeModel();
                        $type->id = $id;

                        if(!$type->one()):
                            $json = array(
                                "ok" => false,
                                "status" => 406,
                                "error" => 'Not Acceptable',
                                "errores" => [
                                    "message" => 'No existe el Tipo de Documento'
                                ]
                            );
                            echo json_encode($json, true);
                            return;
                        endif;
                        
                        if($type->delete()){
                            $json = array(
                                "ok" => true,
                                "status" => 200,
                                "message" => "El Tipo de Documento fue Borrado Correctamente."
                            );
                            echo json_encode($json, true);
                            return;
                        }else{
                            $json = array(
                                "ok" => false,
                                "status" => 500,
                                "error" => 'Internal Server Error',
                                "errores" => [
                                    "message" => 'No se borro el Tipo de Documento'
                                ]
                            );
                            echo json_encode($json, true);
                            return;
                        }

                    }else{
                        return;
                    }
                }else {
                    $json = array(
                        "ok" => false,
                        "status" =>403,
                        "error" => 'Forbidden.',
                        "errores" => [
                            "message" => 'No esta authorizado.'
                        ]
                    );

                    echo json_encode($json, true);
                    return;
                }
            }else{
                $json = array(
                    "ok" => false,
                    "status" =>405,
                    "error" => 'Method Not Allowed.',
                    "errores" => [
                        "message" => 'No se permite el uso de ese método.'
                    ]
                );

                echo json_encode($json, true);
                return;
            }
         }
    }
