<?php

    class institucionController extends Controller{
        public function __construct(){
        }

        /**
         * Vista Principal Instituciones
         */
        public function index(){
            $data =
            [
                'title' => 'Software Ciis',
                'bg'    =>  'dark'
            ];
            View::render('Institucion', $data);
        }

        /**
         * Mostrar Todos las Instituciones
         */
        public function all(){
            if(isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "GET"){
                if(isset($_GET['token'])){
                    $jwt = $_GET['token'];
                    if(autentication($jwt)){
                        $instituciones = new institucionModel();
                        $data = $instituciones->all();
                        if($data) {
                            $json = [
                                "ok" => true,
                                "status"=>200,
                                "total_registros"=>count($data),
                                "instituciones" => $data,
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
         * Crear las Instituciones
         */
        public function create() {
            if(isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "POST"){
                if(isset($_GET['token'])){
                    $jwt = $_GET['token'];
                    if(autenticationAdmin($jwt)){
                        if(isset($_POST["name"]) && isset($_POST["description"]) && isset($_POST["type_inst_id"]) &&isset($_POST["ciudad_id"])) {
                            $datos = array(
                                "name" => $_POST["name"],
                                "description" => $_POST["description"],
                                "type_inst_id" => $_POST["type_inst_id"],
                                "ciudad_id" => $_POST["ciudad_id"],
                                "imagen" => "",
                            );
                            if(isset($_FILES["imagen"])){
                                $imagen = $_FILES["imagen"];
                            }else{
                                $imagen = null;
                            }

                            $institucion = new institucionModel();
                            $institucion->name = $datos["name"];
                            $institucion->description = $datos["description"];
                            $institucion->type_inst_id = $datos["type_inst_id"];
                            $institucion->ciudad_id = $datos["ciudad_id"];

                            if(!$id = $institucion->add()):
                                $json = array(
                                    "ok" => false,
                                    "status" => 500,
                                    "error" => 'Internal Server Error',
                                    "errores" => [
                                        "message" => 'No se creo la Institución'
                                    ]
                                );
                            else :
                                if($imagen != null){
                                    if(guardarImagen($id, "instituciones", "imagen")){
                                        $datos["imagen"] = $_FILES["imagen"]['name'];
                                        $institucion->id = $id;
                                        $institucion->imagen = $datos["imagen"];

                                        if($institucion->update()){
                                            
                                        }
                                        $json = array(
                                            "ok" => true,
                                            "status" => 200,
                                            "institucion" => $datos,
                                            "message" => "La Institución fue Creado Correctamente."
                                        );
                                    }else{
                                        $json = array(
                                            "ok" => true,
                                            "status" => 200,
                                            "pais" => $datos,
                                            "message" => "La Institución fue Creado Correctamente."
                                        );
                                    }
                                }else{
                                    $json = array(
                                        "ok" => true,
                                        "status" => 200,
                                        "institucion" => $datos,
                                        "message" => "La Institución fue Creado Correctamente."
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
         * Actualizar las Instituciones
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
                        
                        if(isset($_POST["name"]) && isset($_POST["description"]) && isset($_POST["type_inst_id"]) &&isset($_POST["ciudad_id"])) {
                        
                            $datos = array(
                                "name" => $_POST["name"],
                                "description" => $_POST["description"],
                                "type_inst_id" => $_POST["type_inst_id"],
                                "ciudad_id" => $_POST["ciudad_id"],
                                "imagen" => "",
                            );
                            if(isset($_FILES["imagen"])){
                                $imagen = $_FILES["imagen"];
                            }else{
                                $imagen = null;
                            }

                            $institucion = new institucionModel();
                            $institucion->id = $id;
                            $institucion->name = $datos["name"];
                            $institucion->description = $datos["description"];
                            $institucion->type_inst_id = $datos["type_inst_id"];
                            $institucion->ciudad_id = $datos["ciudad_id"];

                            if(!$institucion->one()):
                                $json = array(
                                    "ok" => false,
                                    "status" => 406,
                                    "error" => 'Not Acceptable',
                                    "errores" => [
                                        "message" => 'No existe la Institución'
                                    ]
                                );
                                echo json_encode($json, true);
                                return;
                            endif;

                            if($imagen != null){
                                if(guardarImagen($id, "instituciones", "imagen")){
                                    $datos["imagen"] = $_FILES["imagen"]['name'];
                                    $institucion->imagen = $datos["imagen"];
                                }
                            }
                            
                            if($institucion->update()){
                                $json = array(
                                    "ok" => true,
                                    "status" => 200,
                                    "pais" => $datos,
                                    "message" => "La Institución ".$datos["name"]." fue actualizado correctamente."
                                );
                            }else{
                                $json = array(
                                    "ok" => false,
                                    "status" => 500,
                                    "error" => 'Internal Server Error',
                                    "errores" => [
                                        "message" => 'No se pudo actualizar la Institución'
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
         * Eliminar las Instituciones
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
                        
                        $institucion = new institucionModel();
                        $institucion->id = $id;

                        if(!$institucion->one()):
                            $json = array(
                                "ok" => false,
                                "status" => 406,
                                "error" => 'Not Acceptable',
                                "errores" => [
                                    "message" => 'No existe la Institución'
                                ]
                            );
                            echo json_encode($json, true);
                            return;
                        endif;
                        
                        if($institucion->delete()){
                            $json = array(
                                "ok" => true,
                                "status" => 200,
                                "message" => "La Institución fue Borrado Correctamente."
                            );
                            echo json_encode($json, true);
                            return;
                        }else{
                            $json = array(
                                "ok" => false,
                                "status" => 500,
                                "error" => 'Internal Server Error',
                                "errores" => [
                                    "message" => 'No se borro la Institución'
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
