<?php

    class paisModel extends Model{

        public $id;
        public $name;
        public $description;
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
         * Return Todos los paises
         */
        public function all(){
            $sql = 'SELECT * FROM pais WHERE action = 0';
    
            try{
                return ($rows = parent::query($sql)) ? $rows : false;
            } catch(Exception $e) {
                throw $e;
            }
        }

        /**
         * Agrega un pais
         */
        public function add(){
            $sql = 'INSERT INTO pais(name,description,imagen) VALUES(:name,:description,:imagen)';

            $data =
            [
                'name'          =>  $this->name,
                'description'   =>  $this->description,
                'imagen'        =>  $this->imagen
            ];

            try{
                return ($this->id = parent::query($sql, $data)) ? $this->id : false;
            }catch(Exception $e){
                throw $e;
            }
        }

        /**
         * Busca un Pais
         */
        public function one(){
            $sql = 'SELECT * FROM pais WHERE id = :id LIMIT 1';
            try{
                return ($rows = parent::query($sql , ['id' => $this->id])) ? $rows[0] : false;
            } catch(Exception $e) {
                throw $e;
            }
        }

        public function oneID(){
            $sql = 'SELECT * FROM pais WHERE id = :id LIMIT 1';
            try{
                return ($rows = parent::query($sql , ['id' => $this->id])) ? $rows[0] : false;
            } catch(Exception $e) {
                throw $e;
            }
        }

        /**
         * Actualizar un Pais
         */
        public function update(){

            if($this->imagen != null):
                $sql = 'UPDATE pais SET name=:name,description=:description ,imagen=:imagen WHERE id=:id';
                $data =
                    [ 'id' => $this->id,  'name'  => $this->name, 'description' => $this->description, 'imagen' => $this->imagen ];
            else :
                $sql = 'UPDATE pais SET name=:name,description=:description WHERE id=:id';
                $data =
                    [ 'id' => $this->id, 'name' => $this->name, 'description' => $this->description ];
            endif;
            
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
            $sql = 'UPDATE pais SET action=:action WHERE id=:id';

            try{
                return (parent::query($sql, ['action' => 1, 'id' => $this->id])) ? true : false;
            } catch (Exception $e) {
                throw $e;
            }
        }
    }
