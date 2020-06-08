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
            $usuarios = new usuarioModel();
            $data = $usuarios->all();

            $respuesta = [
                "ok" => true,
                "status"=>200,
                "total_registros"=>count($data),
                "usuarios" => $data
            ];
            echo json_encode($respuesta, false);
            return;
        }

        /**
         * Crear Usuario
         */

         public function create() {
            $key = SEMILLA;
            $time = time();
            $usuario = [
                "id" => 1,
                "name" => "Nain",
                "sur_name" => "Acero Mamani",
                "email" => "nain.acero24@gmail.com",
                "password" => "123456"
            ];
            $payload = array(
                "usuario" => $usuario,
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
            $decoded = JWT::decode($jwt, $key, array('HS256'));

            /*
            NOTE: This will now be an object instead of an associative array. To get
            an associative array, you will need to cast it as such:
            */
            $decoded_array = (array) $decoded;
            JWT::$leeway = 60; // $leeway in seconds
            $decoded = JWT::decode($jwt, $key, array('HS256'));
            
            echo json_encode($decoded);
         }

    }