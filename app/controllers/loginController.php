<?php 
    use Firebase\JWT\JWT;
    require_once BIBLIOTECA.'/php-jwt-master/src/JWT.php';

    class loginController extends Controller{
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
            View::render('Login', $data);
        }

        /**
         * Iniciar Sesión
         */
        public function iniciar(){

            if(isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "POST"){
                if(isset($_POST["email"]) && $_POST["password"]) {
                    $datos = array(
                        "email" => $_POST["email"],
                        "password" => $_POST["password"]
                    );
                    
                    $usuario = new usuarioModel();
                    $usuario->email = $datos["email"];

                    if($data = $usuario->one()):
                        if($data->action != 0){
                            $json = array(
                                "ok" => false,
                                "status" => 410,
                                "error" => 'Gone',
                                "errores" => [
                                    "message" => 'Su cuenta ha sido cancelada temporalmente.'
                                ]
                            );
                            echo json_encode($json, true);
                            return;
                        }
                        if(password_verify($datos["password"], $data->password)){
                            $data->password = '';
                            $key = SEMILLA;
                            $time = time();
                            $payload = array(
                                "usuario" => $data,
                                "iat" => $time,
                                // "exp" => $time + (0.5 * 60 * 60)
                                "exp" => $time + (30 * 24 * 60 * 60)
                            );
                            /**
                             * IMPORTANT:
                             * You must specify supported algorithms for your application. See
                             * https://tools.ietf.org/html/draft-ietf-jose-json-web-algorithms-40
                             * for a list of spec-compliant algorithms.
                             */
                            $jwt = JWT::encode($payload, $key);
                            
                            $json = array(
                                "ok" => true,
                                "status" => 200,
                                "usuario" => $data,
                                "token" => $jwt
                            );
                            echo json_encode($json, true);
                            return;
                        }else{
                            $json = array(
                                "ok" => false,
                                "status" => 400,
                                "error" => 'Bad Request',
                                "errores" => [
                                    "message" => 'Credenciales incorrectas'
                                ]
                            );
                            echo json_encode($json, true);
                            return;
                        }
                    endif;

                    $json = array(
                        "ok" => false,
                        "status" => 400,
                        "error" => 'Bad Request',
                        "errores" => [
                            "message" => 'Credenciales incorrectas'
                        ]
                    );
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