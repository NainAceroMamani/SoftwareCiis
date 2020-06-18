<?php

    class typeModel extends Model{

        public $id;
        public $name;
        public $description;
        public $action;

        /**
         *
         * Model Type
         * @return @id
         */

        public function __construct(){
        }
        
        /**
         * Return Todos los type
         */
        public function all(){
            $sql = 'SELECT * FROM type WHERE action = 0';
    
            try{
                return ($rows = parent::query($sql)) ? $rows : false;
            } catch(Exception $e) {
                throw $e;
            }
        }

        /**
         * Agrega un type
         */
        public function add(){
            $sql = 'INSERT INTO type(name,description) VALUES(:name,:description)';

            $data =
            [
                'name'          =>  $this->name,
                'description'   =>  $this->description
            ];

            try{
                return ($this->id = parent::query($sql, $data)) ? $this->id : false;
            }catch(Exception $e){
                throw $e;
            }
        }

        /**
         * Busca un type
         */
        public function one(){
            $sql = 'SELECT * FROM type WHERE id = :id LIMIT 1';
            try{
                return ($rows = parent::query($sql , ['id' => $this->id])) ? $rows[0] : false;
            } catch(Exception $e) {
                throw $e;
            }
        }

        /**
         * Actualizar un type
         */
        public function update(){
            $sql = 'UPDATE type SET name=:name,description=:description  WHERE id=:id';
            $data =
            [
                'id'            =>  $this->id,
                'name'          =>  $this->name,
                'description'   =>  $this->description
            ];
            try{
                return (parent::query($sql, $data)) ? true : false;
            } catch (Exception $e) {
                throw $e;
            }
        }

        /**
         * Eliminar un type
         */
        public function delete(){
            $sql = 'UPDATE type SET action=:action WHERE id=:id';

            try{
                return (parent::query($sql, ['action' => 1, 'id' => $this->id])) ? true : false;
            } catch (Exception $e) {
                throw $e;
            }
        }
    }
