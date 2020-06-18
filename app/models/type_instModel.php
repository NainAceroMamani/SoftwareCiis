<?php

    class type_instModel extends Model{

        public $id;
        public $name;
        public $action;

        /**
         *
         * Model Type
         * @return @id
         */

        public function __construct(){
        }
        
        /**
         * Return Todos los type Instituciones
         */
        public function all(){
            $sql = 'SELECT * FROM type_instituciones WHERE action = 0';
    
            try{
                return ($rows = parent::query($sql)) ? $rows : false;
            } catch(Exception $e) {
                throw $e;
            }
        }

        /**
         * Agrega un type Instituciones
         */
        public function add(){
            $sql = 'INSERT INTO type_instituciones(name) VALUES(:name)';

            $data =
            [
                'name'          =>  $this->name
            ];

            try{
                return ($this->id = parent::query($sql, $data)) ? $this->id : false;
            }catch(Exception $e){
                throw $e;
            }
        }

        /**
         * Busca un type Instituciones
         */
        public function one(){
            $sql = 'SELECT * FROM type_instituciones WHERE id = :id LIMIT 1';
            try{
                return ($rows = parent::query($sql , ['id' => $this->id])) ? $rows[0] : false;
            } catch(Exception $e) {
                throw $e;
            }
        }

        /**
         * Actualizar un type Instituciones
         */
        public function update(){
            $sql = 'UPDATE type_instituciones SET name=:name WHERE id=:id';
            $data =
            [
                'id'            =>  $this->id,
                'name'          =>  $this->name
            ];
            try{
                return (parent::query($sql, $data)) ? true : false;
            } catch (Exception $e) {
                throw $e;
            }
        }

        /**
         * Eliminar un type Instituciones
         */
        public function delete(){
            $sql = 'UPDATE type_instituciones SET action=:action WHERE id=:id';

            try{
                return (parent::query($sql, ['action' => 1, 'id' => $this->id])) ? true : false;
            } catch (Exception $e) {
                throw $e;
            }
        }
    }
