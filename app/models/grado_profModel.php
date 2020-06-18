<?php

    class grado_profModel extends Model{

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
         * Return Todos los Grados Profesionales
         */
        public function all(){
            $sql = 'SELECT * FROM grado_profesional WHERE action = 0';
    
            try{
                return ($rows = parent::query($sql)) ? $rows : false;
            } catch(Exception $e) {
                throw $e;
            }
        }

        /**
         * Agrega un Grados Profesionales
         */
        public function add(){
            $sql = 'INSERT INTO grado_profesional(name,description) VALUES(:name,:description)';

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
         * Busca un Grados Profesionales
         */
        public function one(){
            $sql = 'SELECT * FROM grado_profesional WHERE id = :id LIMIT 1';
            try{
                return ($rows = parent::query($sql , ['id' => $this->id])) ? $rows[0] : false;
            } catch(Exception $e) {
                throw $e;
            }
        }

        /**
         * Actualizar un Grados Profesionales
         */
        public function update(){
            $sql = 'UPDATE grado_profesional SET name=:name,description=:description  WHERE id=:id';
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
         * Eliminar un Grados Profesionales
         */
        public function delete(){
            $sql = 'UPDATE grado_profesional SET action=:action WHERE id=:id';

            try{
                return (parent::query($sql, ['action' => 1, 'id' => $this->id])) ? true : false;
            } catch (Exception $e) {
                throw $e;
            }
        }
    }
