<?php

    class ciudadController extends Controller{
        public function __construct(){
        }

        public function index(){
            $data =
            [
                'title' => 'Software Ciis',
                'bg'    =>  'dark'
            ];
            View::render('Ciudad', $data);
        }

        /**
         * Mostrar Todos los Paises
         */
        public function all(){
            if(isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "GET"){
                if(isset($_GET['token'])){
                    $jwt = $_GET['token'];
                    if(autentication($jwt)){
                        $ciudades = new ciudadModel();
                        $data = $ciudades->all();
                        if($data) {
                            $json = [
                                "ok" => true,
                                "status"=>200,
                                "total_registros"=>count($data),
                                "ciudades" => $data,
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
         * Crear Ciudad
         */
        public function create() {
            if(isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "POST"){
                if(isset($_GET['token'])){
                    $jwt = $_GET['token'];
                    if(autenticationAdmin($jwt)){
                        if(isset($_POST["name"]) && isset($_POST["description"]) && isset($_POST["pais_id"])) {
                            $datos = array(
                                "name" => $_POST["name"],
                                "description" => $_POST["description"],
                                "pais_id" => $_POST["pais_id"],
                                "imagen" => ""
                            );
                            if(isset($_FILES["imagen"])){
                                $imagen = $_FILES["imagen"];
                            }else{
                                $imagen = null;
                            }

                            $ciudad = new ciudadModel();
                            $ciudad->name = $datos["name"];
                            $ciudad->description = $datos["description"];
                            $ciudad->pais_id = $datos["pais_id"];

                            if(!$id = $ciudad->add()):
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
                                    if(guardarImagen($id, "ciudades", "imagen")){
                                        $datos["imagen"] = $_FILES["imagen"]['name'];
                                        $ciudad->id = $id;
                                        $ciudad->imagen = $datos["imagen"];

                                        if($ciudad->update()){
                                            
                                        }
                                        $json = array(
                                            "ok" => true,
                                            "status" => 200,
                                            "pais" => $datos,
                                            "message" => "La Ciudad Creada fue Correctamente."
                                        );
                                    }else{
                                        $json = array(
                                            "ok" => true,
                                            "status" => 200,
                                            "pais" => $datos,
                                            "message" => "La Ciudad fue Creada Correctamente."
                                        );
                                    }
                                }else{
                                    $json = array(
                                        "ok" => true,
                                        "status" => 200,
                                        "pais" => $datos,
                                        "message" => "La Ciudad fue Creada Correctamente."
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
         * Actualizar Ciudad
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
                        
                        if(isset($_POST["name"]) && isset($_POST["description"]) && isset($_POST["pais_id"])) {
                            $datos = array(
                                "name" => $_POST["name"],
                                "description" => $_POST["description"],
                                "pais_id" => $_POST["pais_id"],
                                "imagen" => ""
                            );
                            if(isset($_FILES["imagen"])){
                                $imagen = $_FILES["imagen"];
                            }else{
                                $imagen = null;
                            }

                            $ciudad = new ciudadModel();
                            $ciudad->id = $id;
                            $ciudad->name = $datos["name"];
                            $ciudad->description = $datos["description"];
                            $ciudad->pais_id = $datos["pais_id"];

                            if(!$ciudad->one()):
                                $json = array(
                                    "ok" => false,
                                    "status" => 406,
                                    "error" => 'Not Acceptable',
                                    "errores" => [
                                        "message" => 'No existe la Ciudad'
                                    ]
                                );
                                echo json_encode($json, true);
                                return;
                            endif;

                            if($imagen != null){
                                if(guardarImagen($id, "ciudades", "imagen")){
                                    $datos["imagen"] = $_FILES["imagen"]['name'];
                                    $ciudad->imagen = $datos["imagen"];
                                }
                            }
                            
                            if($ciudad->update()){
                                $json = array(
                                    "ok" => true,
                                    "status" => 200,
                                    "pais" => $datos,
                                    "message" => "LA Ciudad ".$datos["name"]." fue actualizado correctamente."
                                );
                            }else{
                                $json = array(
                                    "ok" => false,
                                    "status" => 500,
                                    "error" => 'Internal Server Error',
                                    "errores" => [
                                        "message" => 'No se pudo actualizar la Ciudad'
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
         * Eliminar un Ciudad
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
                        
                        $ciudad = new ciudadModel();
                        $ciudad->id = $id;

                        if(!$ciudad->one()):
                            $json = array(
                                "ok" => false,
                                "status" => 406,
                                "error" => 'Not Acceptable',
                                "errores" => [
                                    "message" => 'No existe la Ciudad'
                                ]
                            );
                            echo json_encode($json, true);
                            return;
                        endif;
                        
                        if($ciudad->delete()){
                            $json = array(
                                "ok" => true,
                                "status" => 200,
                                "message" => "La Ciudad fue Borrada Correctamente."
                            );
                            echo json_encode($json, true);
                            return;
                        }else{
                            $json = array(
                                "ok" => false,
                                "status" => 500,
                                "error" => 'Internal Server Error',
                                "errores" => [
                                    "message" => 'No se borro la Ciudad'
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