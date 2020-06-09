<?php
    use Firebase\JWT\JWT;
    require_once BIBLIOTECA.'/php-jwt-master/src/JWT.php';
    require_once BIBLIOTECA.'/php-jwt-master/src/ExpiredException.php';
    require_once BIBLIOTECA.'/php-jwt-master/src/BeforeValidException.php';
    require_once BIBLIOTECA.'/php-jwt-master/src/SignatureInvalidException.php';
    
    function en_custom(){
        return 'en_custom FUNCTION';
    }

    function autentication($jwt){
        try {
            /*
            NOTE: This will now be an object instead of an associative array. To get
            an associative array, you will need to cast it as such:
            */
            $key = SEMILLA;
            $decoded = JWT::decode($jwt, $key, array('HS256'));
            return true;

        } catch (Exception $e) { // Also tried JwtException
            $json = array(
                "ok" => false,
                "status" => 401,
                "error" => 'Bad Request',
                "errores" => [
                    "message" => 'Token Incorrecto'
                ]
            );
            echo json_encode($json, true);
            return false;
        }
    }

    function autenticationAdmin($jwt){
        try {
            /*
            NOTE: This will now be an object instead of an associative array. To get
            an associative array, you will need to cast it as such:
            */
            $key = SEMILLA;
            $decoded = JWT::decode($jwt, $key, array('HS256'));
            if($decoded->usuario->role == 'ADMIN_ROLE') {
                return true;
            }else{
                $json = array(
                    "ok" => false,
                    "status" => 403,
                    "error" => 'Bad Request',
                    "errores" => [
                        "message" => 'Token Incorrecto , No tiene Autorización.'
                    ]
                );
                echo json_encode($json, true);
                return false;
            }
            return $decoded;

        } catch (Exception $e) { // Also tried JwtException
            $json = array(
                "ok" => false,
                "status" => 401,
                "error" => 'Bad Request',
                "errores" => [
                    "message" => 'Token Incorrecto.'
                ]
            );
            echo json_encode($json, true);
            return false;
        }
    }
