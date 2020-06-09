<?php

    class usuarioModel extends Model{

        public $id;
        public $name;
        public $sur_name;
        public $email;
        public $role;
        public $password;
        public $action;

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
            $sql = 'INSERT INTO usuarios(name,sur_name,role,email,password) VALUES(:name,:sur_name,:role,:email,:password)';

            $user =
            [
                'name'      =>  $this->name,
                'sur_name'  =>  $this->sur_name,
                'email'     =>  $this->email,
                'role'      =>  $this->role,
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

        /**
         * Actualizar un Usuario
         */
        public function update(){
            $sql = 'UPDATE usuarios SET name=:name, sur_name=:sur_name, role=:role, email=:email WHERE id=:id';
            $data =
            [
                'id'            =>  $this->id,
                'name'          =>  $this->name,
                'email'         =>  $this->email,
                'sur_name'      =>  $this->sur_name,
                'role'          =>  $this->role
            ];
            try{
                return (parent::query($sql, $data)) ? true : false;
            } catch (Exception $e) {
                throw $e;
            }
        }

        /**
         * Eliminar un Usuario
         */
        public function delete(){
            $sql = 'UPDATE usuarios SET action=:action WHERE id=:id';

            try{
                return (parent::query($sql, ['action' => 1, 'id' => $this->id])) ? true : false;
            } catch (Exception $e) {
                throw $e;
            }
        }
    }
