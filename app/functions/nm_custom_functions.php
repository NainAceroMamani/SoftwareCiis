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
            echo json_encode($json, false);
            return false;
        }
    }

    function autenticationValidate($jwt, $id){
        try {
            /*
            NOTE: This will now be an object instead of an associative array. To get
            an associative array, you will need to cast it as such:
            */
            $key = SEMILLA;
            $decoded = JWT::decode($jwt, $key, array('HS256'));
            if($decoded->usuario->id == $id){
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
                echo json_encode($json, false);
                return false;
            }

        } catch (Exception $e) { // Also tried JwtException
            $json = array(
                "ok" => false,
                "status" => 401,
                "error" => 'Bad Request',
                "errores" => [
                    "message" => 'Token Incorrecto'
                ]
            );
            echo json_encode($json, false);
            return false;
        }
    }

    function role($jwt){
        try {
            /*
            NOTE: This will now be an object instead of an associative array. To get
            an associative array, you will need to cast it as such:
            */
            $key = SEMILLA;
            $decoded = JWT::decode($jwt, $key, array('HS256'));
            return $decoded->usuario->role;

        } catch (Exception $e) { // Also tried JwtException
            return false;
        }
    }

    function id($jwt){
        try {
            /*
            NOTE: This will now be an object instead of an associative array. To get
            an associative array, you will need to cast it as such:
            */
            $key = SEMILLA;
            $decoded = JWT::decode($jwt, $key, array('HS256'));
            return $decoded->usuario->id;

        } catch (Exception $e) { // Also tried JwtException
            $json = array(
                "ok" => false,
                "status" => 401,
                "error" => 'Bad Request',
                "errores" => [
                    "message" => 'Token Incorrecto'
                ]
            );
            echo json_encode($json, false);
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
                echo json_encode($json, false);
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
            echo json_encode($json, false);
            return false;
        }
    }

    function guardarImagen($id, $name, $imagen){
        $target_path = './assets/uploads/'.$name.'/'.$id.'/';
        $tmp_name = $_FILES[$imagen]['tmp_name'];
        if (!file_exists($target_path)){
            mkdir($target_path, 0777, true);
        }

        if (is_dir($target_path) && is_uploaded_file($tmp_name)){
            $img_file = $_FILES[$imagen]['name'];
            $img_type = $_FILES[$imagen]['type'];
            if (((strpos($img_type, "gif") || strpos($img_type, "jpeg") || strpos($img_type, "jpg")) || strpos($img_type, "png")))
            {
                if (move_uploaded_file($tmp_name, $target_path . '/' . $img_file))
                {
                    return true;
                }
            }else{
                return false;
            }
        }else{
            return false;
        }
        
    }

    function methodPUT(){
        // Fetch content and determine boundary
        $raw_data = file_get_contents('php://input');
        $boundary = substr($raw_data, 0, strpos($raw_data, "\r\n"));

        // Fetch each part
        $parts = array_slice(explode($boundary, $raw_data), 1);
        $data = array();

        foreach ($parts as $part) {
            // If this is the last part, break
            if ($part == "--\r\n") break; 

            // Separate content from headers
            $part = ltrim($part, "\r\n");
            list($raw_headers, $body) = explode("\r\n\r\n", $part, 2);

            // Parse the headers list
            $raw_headers = explode("\r\n", $raw_headers);
            $headers = array();
            foreach ($raw_headers as $header) {
                list($name, $value) = explode(':', $header);
                $headers[strtolower($name)] = ltrim($value, ' '); 
            } 

            // Parse the Content-Disposition to get the field name, etc.
            if (isset($headers['content-disposition'])) {
                $filename = null;
                preg_match(
                    '/^(.+); *name="([^"]+)"(; *filename="([^"]+)")?/', 
                    $headers['content-disposition'], 
                    $matches
                );
                list(, $type, $name) = $matches;
                isset($matches[4]) and $filename = $matches[4]; 

                // handle your fields here
                switch ($name) {
                    // this is a file upload
                    case 'userfile':
                        file_put_contents($filename, $body);
                        break;

                    // default for all other files is to populate $data
                    default: 
                        $data[$name] = substr($body, 0, strlen($body) - 2);
                        break;
                } 
            }

        }
        return $data;
    }
