<?php

    class ciudadModel extends Model{

        public $id;
        public $name;
        public $description;
        public $imagen;
        public $action;
        public $pais_id;

        /**
         *
         * Model Usuario
         * @return @id
         */

        public function __construct(){
        }
        
        /**
         * Return Todos las ciudades
         */
        public function all(){
            $sql = 'SELECT c.id as id_ciudad, c.name as name_ciudad, c.description as description_ciudad, c.imagen as imagen_ciudad,
                p.id as pais_id , p.name as name_pais
                FROM ciudad as c INNER JOIN pais as p ON c.pais_id = p.id WHERE c.action = 0';
    
            try{
                return ($rows = parent::query($sql)) ? $rows : false;
            } catch(Exception $e) {
                throw $e;
            }
        }

        /**
         * Agrega una ciudad
         */
        public function add(){
            $sql = 'INSERT INTO ciudad(name,description,imagen,pais_id) VALUES(:name,:description,:imagen,:pais_id)';

            $data =
            [
                'name'          =>  $this->name,
                'description'   =>  $this->description,
                'imagen'        =>  $this->imagen,
                'pais_id'       =>  $this->pais_id
            ];

            try{
                return ($this->id = parent::query($sql, $data)) ? $this->id : false;
            }catch(Exception $e){
                throw $e;
            }
        }

        /**
         * Busca una Ciudad
         */
        public function one(){
            $sql = 'SELECT * FROM ciudad WHERE id = :id LIMIT 1';
            try{
                return ($rows = parent::query($sql , ['id' => $this->id])) ? $rows[0] : false;
            } catch(Exception $e) {
                throw $e;
            }
        }

        /**
         * Actualizar una ciudad
         */
        public function update(){
            $sql = 'UPDATE ciudad SET name=:name,description=:description ,imagen=:imagen, pais_id=:pais_id WHERE id=:id';
            $data =
            [
                'id'            =>  $this->id,
                'name'          =>  $this->name,
                'description'   =>  $this->description,
                'imagen'        =>  $this->imagen,
                'pais_id'       =>  $this->pais_id
            ];
            try{
                return (parent::query($sql, $data)) ? true : false;
            } catch (Exception $e) {
                throw $e;
            }
        }

        /**
         * Eliminar una Ciudad
         */
        public function delete(){
            $sql = 'UPDATE ciudad SET action=:action WHERE id=:id';

            try{
                return (parent::query($sql, ['action' => 1, 'id' => $this->id])) ? true : false;
            } catch (Exception $e) {
                throw $e;
            }
        }
    }