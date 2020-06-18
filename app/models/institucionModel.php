<?php

    class institucionModel extends Model{

        public $id;
        public $name;
        public $description;
        public $imagen;
        public $type_inst_id;
        public $ciudad_id;
        public $action;

        /**
         *
         * Model Institución
         * @return @id
         */

        public function __construct(){
        }
        
        /**
         * Return Todos las Institución
         */
        public function all(){
            $sql = 'SELECT * FROM instituciones WHERE action = 0';
    
            try{
                return ($rows = parent::query($sql)) ? $rows : false;
            } catch(Exception $e) {
                throw $e;
            }
        }

        /**
         * Agrega una Institución
         */
        public function add(){
            $sql = 'INSERT INTO instituciones(name,description,imagen,type_inst_id,ciudad_id) 
                    VALUES(:name,:description,:imagen,:type_inst_id,:ciudad_id)';

            $data =
            [
                'name'          =>  $this->name,
                'description'   =>  $this->description,
                'imagen'        =>  $this->imagen,
                'type_inst_id'  =>  $this->type_inst_id,
                'ciudad_id'     =>  $this->ciudad_id
            ];

            try{
                return ($this->id = parent::query($sql, $data)) ? $this->id : false;
            }catch(Exception $e){
                throw $e;
            }
        }

        /**
         * Busca una Institución
         */
        public function one(){
            $sql = 'SELECT * FROM instituciones WHERE id = :id LIMIT 1';
            try{
                return ($rows = parent::query($sql , ['id' => $this->id])) ? $rows[0] : false;
            } catch(Exception $e) {
                throw $e;
            }
        }

        /**
         * Actualizar una Institución
         */
        public function update(){
            $sql = 'UPDATE instituciones SET name=:name,description=:description ,imagen=:imagen,
                    type_inst_id=:type_inst_id,ciudad_id=:ciudad_id WHERE id=:id';
            $data =
            [
                'id'            =>  $this->id,
                'name'          =>  $this->name,
                'description'   =>  $this->description,
                'imagen'        =>  $this->imagen,
                'type_inst_id'  =>  $this->type_inst_id,
                'ciudad_id'     =>  $this->ciudad_id
            ];
            try{
                return (parent::query($sql, $data)) ? true : false;
            } catch (Exception $e) {
                throw $e;
            }
        }

        /**
         * Eliminar una Institución
         */
        public function delete(){
            $sql = 'UPDATE instituciones SET action=:action WHERE id=:id';

            try{
                return (parent::query($sql, ['action' => 1, 'id' => $this->id])) ? true : false;
            } catch (Exception $e) {
                throw $e;
            }
        }
    }
