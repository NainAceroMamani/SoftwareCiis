<?php

    class usuarioModel extends Model{

        public $id;
        public $name;
        public $sur_name;
        public $email;
        public $role;
        public $type_id;
        public $numero_type;
        public $telefono;
        public $password;
        public $imagen;
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
            $sql = 'INSERT INTO usuarios(name,sur_name,role,email,type_id,numero_type,telefono,password) 
                        VALUES(:name,:sur_name,:role,:email,:type_id,:numero_type,:telefono,:password)';

            $data =
            [
                'name'        =>  $this->name,
                'sur_name'    =>  $this->sur_name,
                'email'       =>  $this->email,
                'role'        =>  $this->role,
                'type_id'     =>  $this->type_id,
                'numero_type' =>  $this->numero_type,
                'telefono'    =>  $this->telefono,
                'password'    =>  $this->password
            ];

            try{
                return ($this->id = parent::query($sql, $data)) ? $this->id : false;
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

        public function oneID(){
            $sql = 'SELECT name, sur_name, email, numero_type, telefono, imagen FROM usuarios WHERE id = :id LIMIT 1';
            try{
                return ($rows = parent::query($sql , ['id' => $this->id])) ? $rows[0] : false;
            } catch(Exception $e) {
                throw $e;
            }
        }

        /**
         * Actualizar un Usuario
         */
        public function update(){
            $sql = 'UPDATE usuarios SET name=:name, sur_name=:sur_name, role=:role, email=:email, 
                    type_id=:type_id, numero_type=:numero_type, telefono=:telefono, imagen=:imagen WHERE id=:id';
            $data =
            [
                'id'            =>  $this->id,
                'name'          =>  $this->name,
                'email'         =>  $this->email,
                'sur_name'      =>  $this->sur_name,
                'role'          =>  $this->role,
                'type_id'       =>  $this->type_id,
                'numero_type'   =>  $this->numero_type,
                'telefono'      =>  $this->telefono,
                'imagen'        =>  $this->imagen
            ];
            try{
                return (parent::query($sql, $data)) ? true : false;
            } catch (Exception $e) {
                throw $e;
            }
        }

        public function updatePublico(){
            $sql = 'UPDATE usuarios SET name=:name, sur_name=:sur_name, email=:email, 
                    numero_type=:numero_type, telefono=:telefono, imagen=:imagen WHERE id=:id';
            $data =
            [
                'id'            =>  $this->id,
                'name'          =>  $this->name,
                'email'         =>  $this->email,
                'sur_name'      =>  $this->sur_name,
                'numero_type'   =>  $this->numero_type,
                'telefono'      =>  $this->telefono,
                'imagen'        =>  $this->imagen
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
