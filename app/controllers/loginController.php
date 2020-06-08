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
                $datos = array(
                    "email" => $_POST["email"],
                    "password" => $_POST["password"]
                );

            }else {
                $json = array(
                    "ok" => true,
                    "status" =>405,
                    "error" => 'no se permite el uso de ese método',
                    "errores" => [
                        "message" => 'no se permite el uso de ese método'
                    ]
                );
                echo json_encode($json, true);
            }

            $usuario->id = $id;
            $datos["password"] = '';
            $key = SEMILLA;
            $time = time();
            $payload = array(
                "usuario" => $datos,
                "iat" => $time,
                "exp" => $time + (4 * 60 * 60)
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
                "usuario" => $datos,
                "token" => $jwt
            );
        }

    }