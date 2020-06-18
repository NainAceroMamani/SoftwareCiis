<?php

    class estudianteController extends Controller{
        public function __construct(){
        }

        /**
         * Vista Principal Estudiantes
         */
        public function index(){
            $data =
            [
                'title' => 'Software Ciis',
                'bg'    =>  'dark'
            ];
            View::render('Estudiante', $data);
        }

        /**
         * Mostrar Todos los Estudiantes
         */
        public function all(){
            if(isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "GET"){
                if(isset($_GET['token'])){
                    $jwt = $_GET['token'];
                    if(autenticationAdmin($jwt)){
                        $estudiantes = new estudianteModel();
                        $data = $estudiantes->all();
                        if($data) {
                            $json = [
                                "ok" => true,
                                "status"=>200,
                                "total_registros"=>count($data),
                                "estudiantes" => $data,
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
         * Crear Estudiantes
         */
        public function createUser() {
            if(isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "POST"){
                if(isset($_GET['token'])){
                    $jwt = $_GET['token'];
                    if(!$role = role($jwt)){

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

                    if($role != 'USER_ROLE'){
                        
                        $json = array(
                            "ok" => false,
                            "status" =>403,
                            "error" => 'Method Not Allowed.',
                            "errores" => [
                                "message" => 'Acceso Denegado.'
                            ]
                        );
        
                        echo json_encode($json, true);
                        return;
                    }

                    if(autentication($jwt)){
                        if(!$id = id($jwt)){
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

                        if(isset($_POST["anio"]) && isset($_POST["institucion_id"]) && isset($_POST["ciudad_id"])) {
                            $datos = array(
                                "anio" => $_POST["anio"],
                                "institucion_id" => $_POST["institucion_id"],
                                "ciudad_id" => $_POST["ciudad_id"],
                                "usuario_id" => $id
                            );

                            if($datos["anio"] <= 0 || $datos["anio"] > 5) {
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

                            $estudiante = new estudianteModel();
                            $estudiante->anio = $datos["anio"];
                            $estudiante->institucion_id = $datos["institucion_id"];
                            $estudiante->ciudad_id = $datos["ciudad_id"];
                            $estudiante->usuario_id = $datos["usuario_id"];

                            if($estudiante->oneID()) {
                                $json = array(
                                    "ok" => false,
                                    "status" => 403,
                                    "error" => 'El Usuario ya existe!',
                                    "errores" => [
                                        "message" => 'No se creo el Estudiante'
                                    ]
                                );
                                echo json_encode($json, true);
                                return;
                            }

                            if(!$id = $estudiante->add()):
                                $json = array(
                                    "ok" => false,
                                    "status" => 500,
                                    "error" => 'Internal Server Error',
                                    "errores" => [
                                        "message" => 'No se creo el Estudiante'
                                    ]
                                );
                            else :
                                $json = array(
                                    "ok" => true,
                                    "status" => 200,
                                    "estudiante" => $datos,
                                    "message" => "El Estudiante fue Creado Correctamente."
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

        public function one(){
            if(isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "GET"){
                if(isset($_GET['token'])){
                    $jwt = $_GET['token'];
                    if($id = id($jwt)){
                        $estudiante = new EstudianteModel();
                        $estudiante->usuario_id = $id;
                        if($data = $estudiante->oneID()){
                            $json = array(
                                "ok" => true,
                                "status" =>403,
                                "estudiante" => $data
                            );
                        }else{
                            $json = array(
                                "ok" => false,
                                "status" =>403,
                                "error" => 'Forbidden.',
                                "errores" => [
                                    "message" => 'No esta authorizado.'
                                ]
                            );
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
         * Actualizar Estudiantes
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
         * Eliminar un Estudiantes
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
