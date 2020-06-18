<?php

    class type_instController extends Controller{
        public function __construct(){
        }

        /**
         * Vista Principal Tipo de Instituciones
         */
        public function index(){
            $data =
            [
                'title' => 'Software Ciis',
                'bg'    =>  'dark'
            ];
            View::render('Tipo_Inst', $data);
        }

        /**
         * Mostrar Todos los Tipo de Instituciones
         */
        public function all(){
            if(isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "GET"){
                if(isset($_GET['token'])){
                    $jwt = $_GET['token'];
                    if(autenticationAdmin($jwt)){
                        $type_instS = new type_instModel();
                        $data = $type_instS->all();
                        if($data) {
                            $json = [
                                "ok" => true,
                                "status"=>200,
                                "total_registros"=>count($data),
                                "type_instS" => $data
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
         * Crear Tipo de Instituciones
         */
        public function create() {
            if(isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "POST"){
                if(isset($_GET['token'])){
                    $jwt = $_GET['token'];
                    if(autenticationAdmin($jwt)){
                        if(isset($_POST["name"])) {
                            $datos = array(
                                "name" => $_POST["name"]
                            );

                            $type_inst = new type_instModel();
                            $type_inst->name = $datos["name"];

                            if(!$id = $type_inst->add()):
                                $json = array(
                                    "ok" => false,
                                    "status" => 500,
                                    "error" => 'Internal Server Error',
                                    "errores" => [
                                        "message" => 'No se creo el Tipo de Institución'
                                    ]
                                );
                            else :
                                $json = array(
                                    "ok" => true,
                                    "status" => 200,
                                    "type_inst" => $datos,
                                    "message" => "El Tipo de Institución fue Creado Correctamente."
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
         * Actualizar Tipo de Instituciones
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
                        
                        if(isset($_POST["name"])) {

                            $datos = array(
                                "name" => $_POST["name"]
                            );

                            $type_inst = new type_instModel();
                            $type_inst->id = $id;
                            $type_inst->name = $datos["name"];

                            if(!$type_inst->one()):
                                $json = array(
                                    "ok" => false,
                                    "status" => 406,
                                    "error" => 'Not Acceptable',
                                    "errores" => [
                                        "message" => 'No existe el Tipo de Tipo de Institución'
                                    ]
                                );
                                echo json_encode($json, true);
                                return;
                            endif;
                            
                            if($type_inst->update()){
                                $json = array(
                                    "ok" => true,
                                    "status" => 200,
                                    "type_inst" => $datos,
                                    "message" => "Tipo de Institución ".$datos["name"]." actualizado correctamente."
                                );
                            }else{
                                $json = array(
                                    "ok" => false,
                                    "status" => 500,
                                    "error" => 'Internal Server Error',
                                    "errores" => [
                                        "message" => 'No se pudo actualizar el Tipo de Institución'
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
         * Eliminar un Tipo de Instituciones
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
                        
                        $type_inst = new type_instModel();
                        $type_inst->id = $id;

                        if(!$type_inst->one()):
                            $json = array(
                                "ok" => false,
                                "status" => 406,
                                "error" => 'Not Acceptable',
                                "errores" => [
                                    "message" => 'No existe el Tipo de Institución'
                                ]
                            );
                            echo json_encode($json, true);
                            return;
                        endif;
                        
                        if($type_inst->delete()){
                            $json = array(
                                "ok" => true,
                                "status" => 200,
                                "message" => "Tipo de Institución fue Borrado Correctamente."
                            );
                            echo json_encode($json, true);
                            return;
                        }else{
                            $json = array(
                                "ok" => false,
                                "status" => 500,
                                "error" => 'Internal Server Error',
                                "errores" => [
                                    "message" => 'No se borro el Tipo de Institución'
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
