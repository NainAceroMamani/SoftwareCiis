<?php

    class paisController extends Controller{
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
            View::render('Pais', $data);
        }

        /**
         * Mostrar Todos los Paises
         */
        public function all(){
            if(isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "GET"){
                if(isset($_GET['token'])){
                    $jwt = $_GET['token'];
                    if(autenticationAdmin($jwt)){
                        $paises = new paisModel();
                        $data = $paises->all();
                        if($data) {
                            $json = [
                                "ok" => true,
                                "status"=>200,
                                "total_registros"=>count($data),
                                "paises" => $data,
                            ];
                        }else{
                            $json = [
                                "ok" => true,
                                "status"=>200,
                                "paises" => null,
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
                                "description" => $_POST["description"],
                                "imagen" => ""
                            );
                            if(isset($_FILES["imagen"])){
                                $imagen = $_FILES["imagen"];
                            }else{
                                $imagen = null;
                            }

                            $pais = new paisModel();
                            $pais->name = $datos["name"];
                            $pais->description = $datos["description"];

                            if(!$id = $pais->add()):
                                $json = array(
                                    "ok" => false,
                                    "status" => 500,
                                    "error" => 'Internal Server Error',
                                    "errores" => [
                                        "message" => 'No se creo el Pais'
                                    ]
                                );
                            else :
                                if($imagen != null){
                                    if(guardarImagen($id, "paises", "imagen")){
                                        $datos["imagen"] = $_FILES["imagen"]['name'];
                                        $pais->id = $id;
                                        $pais->imagen = $datos["imagen"];

                                        if($pais->update()){
                                            
                                        }
                                        $json = array(
                                            "ok" => true,
                                            "status" => 200,
                                            "pais" => $datos,
                                            "message" => "Pais Creado Correctamente."
                                        );
                                    }else{
                                        $json = array(
                                            "ok" => true,
                                            "status" => 200,
                                            "pais" => $datos,
                                            "message" => "Pais Creado Correctamente."
                                        );
                                    }
                                }else{
                                    $json = array(
                                        "ok" => true,
                                        "status" => 200,
                                        "pais" => $datos,
                                        "message" => "Pais Creado Correctamente."
                                    );
                                }
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
                                "description" => $_POST["description"],
                                "imagen" => ""
                            );
                            if(isset($_FILES["imagen"])){
                                $imagen = $_FILES["imagen"];
                            }else{
                                $imagen = null;
                            }

                            $pais = new paisModel();
                            $pais->id = $id;
                            $pais->name = $datos["name"];
                            $pais->description = $datos["description"];

                            if(!$pais->one()):
                                $json = array(
                                    "ok" => false,
                                    "status" => 406,
                                    "error" => 'Not Acceptable',
                                    "errores" => [
                                        "message" => 'No existe el Pais'
                                    ]
                                );
                                echo json_encode($json, true);
                                return;
                            endif;

                            if($imagen != null){
                                if(guardarImagen($id, "paises", "imagen")){
                                    $datos["imagen"] = $_FILES["imagen"]['name'];
                                    $pais->imagen = $datos["imagen"];
                                }
                            }
                            
                            if($pais->update()){
                                $json = array(
                                    "ok" => true,
                                    "status" => 200,
                                    "pais" => $datos,
                                    "message" => "Pais ".$datos["name"]." actualizado correctamente."
                                );
                            }else{
                                $json = array(
                                    "ok" => false,
                                    "status" => 500,
                                    "error" => 'Internal Server Error',
                                    "errores" => [
                                        "message" => 'No se pudo actualizar el Pais'
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
                        
                        $pais = new paisModel();
                        $pais->id = $id;

                        if(!$pais->one()):
                            $json = array(
                                "ok" => false,
                                "status" => 406,
                                "error" => 'Not Acceptable',
                                "errores" => [
                                    "message" => 'No existe el Pais'
                                ]
                            );
                            echo json_encode($json, true);
                            return;
                        endif;
                        
                        if($pais->delete()){
                            $json = array(
                                "ok" => true,
                                "status" => 200,
                                "message" => "Pais Borrado Correctamente."
                            );
                            echo json_encode($json, true);
                            return;
                        }else{
                            $json = array(
                                "ok" => false,
                                "status" => 500,
                                "error" => 'Internal Server Error',
                                "errores" => [
                                    "message" => 'No se borro el Pais'
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
