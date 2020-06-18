<?php 
    use Firebase\JWT\JWT;
    require_once BIBLIOTECA.'/php-jwt-master/src/JWT.php';

    class usuariosController extends Controller{
        public function __construct(){
        }

        /**
         * Vista Principal Usurios
         */
        public function index(){
            $data =
            [
                'title' => 'Software Ciis',
                'bg'    =>  'dark'
            ];
            View::render('Usuarios', $data);
        }

        /**
         * Mostrar Todos los Usuarios
         */
        public function all(){
            if(isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "GET"){
                if(isset($_GET['token'])){
                    $jwt = $_GET['token'];
                    if(autenticationAdmin($jwt)){
                        $usuarios = new usuarioModel();
                        $data = $usuarios->all();

                        $json = [
                            "ok" => true,
                            "status"=>200,
                            "total_registros"=>count($data),
                            "usuarios" => $data,
                        ];
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
         * Crear Usuario
         */
         public function create() {
            if(isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "POST"){
                if(isset($_GET['token'])){
                    $jwt = $_GET['token'];
                    if(autenticationAdmin($jwt)){
                        if(isset($_POST["name"]) && isset($_POST["sur_name"]) && isset($_POST["role"]) && isset($_POST["email"]) && isset($_POST["password"])) {
                            $datos = array(
                                "name" => $_POST["name"],
                                "sur_name" => $_POST["sur_name"],
                                "role" => $_POST["role"],
                                "email" => $_POST["email"],
                                "password" => password_hash($_POST["password"], PASSWORD_BCRYPT)
                            );

                            $usuario = new usuarioModel();
                            $usuario->name = $datos["name"];
                            $usuario->sur_name = $datos["sur_name"];
                            $usuario->role = $datos["role"];
                            $usuario->email = $datos["email"];
                            $usuario->password = $datos["password"];

                            if($usuario->one()):
                                $json = array(
                                    "ok" => false,
                                    "status" => 403,
                                    "error" => 'Forbidden',
                                    "errores" => [
                                        "message" => 'El email ya existe para este usuario'
                                    ]
                                );
                                echo json_encode($json, true);
                                return;
                            endif;

                            if(!$id = $usuario->add()):
                                $json = array(
                                    "ok" => false,
                                    "status" => 500,
                                    "error" => 'Internal Server Error',
                                    "errores" => [
                                        "message" => 'No se creo el Usuario'
                                    ]
                                );
                            else :
                                $datos["password"] = '';
                                $json = array(
                                    "ok" => true,
                                    "status" => 200,
                                    "usuario" => $datos,
                                    "message" => "El Usuario fue Creado Correctamente."
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
                        $usuario = new usuarioModel();
                        $usuario->id = $id;
                        if($data = $usuario->oneID()){
                            $json = array(
                                "ok" => true,
                                "status" =>403,
                                "usuario" => $data
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
         * UPDATE Usuario
         */
        public function update() {
            if(isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "POST"){
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
                        if(isset($_POST["name"]) && isset($_POST["sur_name"]) && isset($_POST["email"]) && isset($_POST["role"])) {

                            $usuario = new usuarioModel();
                            $usuario->id = $id;
                            $usuario->name = $_POST["name"];
                            $usuario->sur_name = $_POST["sur_name"];
                            $usuario->role = $_POST["role"];
                            $usuario->email = $_POST["email"];

                            if(!$usuario->one()):
                                $json = array(
                                    "ok" => false,
                                    "status" => 406,
                                    "error" => 'Not Acceptable',
                                    "errores" => [
                                        "message" => 'No existe el Usuario'
                                    ]
                                );
                                echo json_encode($json, true);
                                return;
                            endif;
                            
                            try {
                                if($usuario->update()){
                                    $json = array(
                                        "ok" => true,
                                        "status" => 200,
                                        "usuario" => $usuario,
                                        "message" => "El Usuario fue Actualizado Correctamente."
                                    );
                                    echo json_encode($json, true);
                                    return;
                                }
                            } catch (Exception $e) { // Also tried JwtException
                                $json = array(
                                    "ok" => false,
                                    "status" => 403,
                                    "error" => 'Bad Request',
                                    "errores" => [
                                        "message" => 'El email ya existe.'
                                    ]
                                );
                                echo json_encode($json, true);
                                return false;
                            }

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

         public function updateUser() {
            if(isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "POST"){
                if(isset($_GET['token'])){

                    $jwt = $_GET['token'];
                    
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
                    if(autenticationValidate($jwt, $id)){
                        
                        if(isset($_POST["name"]) && isset($_POST["sur_name"]) && isset($_POST["email"]) 
                                                 && isset($_POST["numero_type"]) && isset($_POST["telefono"])) {
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

                            $usuario = new usuarioModel();
                            $usuario->id = $id;
                            $usuario->name = $_POST["name"];
                            $usuario->sur_name = $_POST["sur_name"];
                            $usuario->email = $_POST["email"];
                            $usuario->numero_type = $_POST["numero_type"];
                            $usuario->telefono = $_POST["telefono"];

                            if(isset($_FILES["imagen"])){
                                $imagen = $_FILES["imagen"];
                            }else{
                                $imagen = null;
                                if(isset($_POST["imagen"])){
                                    $usuario->imagen = $_POST["imagen"];
                                }
                            }

                            if($imagen != null){
                                if(guardarImagen($id, "usuarios", "imagen")){
                                    $usuario->imagen = $_FILES["imagen"]['name'];
                                }
                            }

                            if(!$usuario->one()):
                                $json = array(
                                    "ok" => false,
                                    "status" => 406,
                                    "error" => 'Not Acceptable',
                                    "errores" => [
                                        "message" => 'No existe el Usuario'
                                    ]
                                );
                                echo json_encode($json, true);
                                return;
                            endif;
                            
                            try {
                                if($usuario->updatePublico()){
                                    $json = array(
                                        "ok" => true,
                                        "status" => 200,
                                        "usuario" => $usuario,
                                        "message" => "El Usuario fue Actualizado Correctamente."
                                    );
                                    echo json_encode($json, true);
                                    return;
                                }
                            } catch (Exception $e) { // Also tried JwtException
                                $json = array(
                                    "ok" => false,
                                    "status" => 403,
                                    "error" => 'Bad Request',
                                    "errores" => [
                                        "message" => 'El email ya existe.'
                                    ]
                                );
                                echo json_encode($json, true);
                                return false;
                            }

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
                        
                        $usuario = new usuarioModel();
                        $usuario->id = $id;

                        if(!$usuario->one()):
                            $json = array(
                                "ok" => false,
                                "status" => 406,
                                "error" => 'Not Acceptable',
                                "errores" => [
                                    "message" => 'No existe el Usuario'
                                ]
                            );
                            echo json_encode($json, true);
                            return;
                        endif;

                        if($usuario->delete()){
                            $json = array(
                                "ok" => true,
                                "status" => 200,
                                "message" => "El Usuario fue Borrado Correctamente."
                            );
                            echo json_encode($json, true);
                            return;
                        }else{
                            $json = array(
                                "ok" => false,
                                "status" => 500,
                                "error" => 'Internal Server Error',
                                "errores" => [
                                    "message" => 'No se Borro el Usuario'
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