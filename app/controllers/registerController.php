<?php 

    class registerController extends Controller{
        public function __construct(){
        }

        /**
         * Pagina de Login
         */
        public function index(){
            $data =
            [
                'title' => 'Software Ciis',
                'bg'    =>  'dark'
            ];
            View::render('Register', $data);
        }

        /**
         * Registro Público de Usuarios
         */
        public function create(){

            if(isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "POST"){
                if(isset($_POST["name"]) && isset($_POST["sur_name"]) && isset($_POST["email"]) && $_POST["password"]) {
                    $datos = array(
                        "name" => $_POST["email"],
                        "sur_name" => $_POST["sur_name"],
                        "email" => $_POST["email"],
                        "password" => password_hash($_POST["password"], PASSWORD_BCRYPT)
                    );
                    
                    $usuario = new usuarioModel();
                    $usuario->name = $datos["name"];
                    $usuario->sur_name = $datos["sur_name"];
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
                            "usuario" => $datos
                        );

                    endif;

                    echo json_encode($json, true);
                    return;

                }else {
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
            }else {
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