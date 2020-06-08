<?php

    class usuarioModel extends Model{

        public $id;
        public $name;
        public $sur_name;
        public $email;
        public $role;
        public $password;

        /**
         *
         * Model Usuario
         * @return @id
         */

        public function __construct(){
        }

        /**
         * Return Todos los Usuarios
         */
        public function all(){
            $sql = 'SELECT * FROM usuarios';
    
            try{
                return ($rows = parent::query($sql)) ? $rows : false;
            } catch(Exception $e) {
                throw $e;
            }
        }

        /**
         * Agrega un Usuario
         */
        public function add(){
            $sql = 'INSERT INTO usuarios(name,sur_name,email,password) VALUES(:name,:sur_name,:email,:password)';

            $user =
            [
                'name'      =>  $this->name,
                'sur_name'  =>  $this->sur_name,
                'email'     =>  $this->email,
                'password'  =>  $this->password
            ];

            try{
                return ($this->id = parent::query($sql, $user)) ? $this->id : false;
            }catch(Exception $e){
                throw $e;
            }
        }

        /**
         * Busca un Usuario
         */

        public function one(){
            $sql = 'SELECT * FROM usuarios WHERE email = :email LIMIT 1';
            try{
                return ($rows = parent::query($sql , ['email' => $this->email])) ? $rows[0] : false;
            } catch(Exception $e) {
                throw $e;
            }
        }

    }
