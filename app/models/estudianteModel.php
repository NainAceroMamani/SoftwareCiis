<?php

    class estudianteModel extends Model{

        public $id;
        public $anio;
        public $institucion_id;
        public $ciudad_id;
        public $usuario_id;
        public $action;

        /**
         *
         * Model Estudiantes
         * @return @id
         */

        public function __construct(){
        }
        
        /**
         * Return Todos los Estudiantes
         */
        public function all(){
            $sql = 'SELECT usuarios.name, usuarios.sur_name, usuarios.email, estudiantes.anio, usuarios.id,
                          estudiantes.ciudad_id, usuarios.type_id, usuarios.role, usuarios.numero_type, usuarios.imagen,
                          estudiantes.institucion_id, ciudad.name as ciudad_name
                    FROM estudiantes INNER JOIN usuarios on estudiantes.usuario_id = usuarios.id 
                    INNER JOIN ciudad on estudiantes.ciudad_id = ciudad.id WHERE usuarios.action = 0';
    
            try{
                return ($rows = parent::query($sql)) ? $rows : false;
            } catch(Exception $e) {
                throw $e;
            }
        }

        /**
         * Agrega un Estudiantes
         */
        public function add(){
            $sql = 'INSERT INTO estudiantes(anio,institucion_id,ciudad_id,usuario_id) 
                    VALUES(:anio,:institucion_id,:ciudad_id,:usuario_id)';

            $data =
            [
                'anio'          =>  $this->anio,
                'institucion_id'=>  $this->institucion_id,
                'ciudad_id'     =>  $this->ciudad_id,
                'usuario_id'    =>  $this->usuario_id
            ];

            try{
                return ($this->id = parent::query($sql, $data)) ? $this->id : false;
            }catch(Exception $e){
                throw $e;
            }
        }

        /**
         * Busca un Estudiantes
         */
        public function one(){
            $sql = 'SELECT usuarios.name, usuarios.sur_name, usuarios.email, estudiantes.anio, usuarios.id,
                          estudiantes.ciudad_id, usuarios.type_id, usuarios.role, usuarios.numero_type, usuarios.imagen,
                          estudiantes.institucion_id
                    FROM estudiantes INNER JOIN usuarios on estudiantes.usuario_id = usuarios.id  WHERE id = :id LIMIT 1';
            try{
                return ($rows = parent::query($sql , ['id' => $this->id])) ? $rows[0] : false;
            } catch(Exception $e) {
                throw $e;
            }
        }

        public function oneID(){
            $sql = 'SELECT * FROM estudiantes WHERE usuario_id = :usuario_id LIMIT 1';
            try{
                return ($rows = parent::query($sql , ['usuario_id' => $this->usuario_id])) ? $rows[0] : false;
            } catch(Exception $e) {
                throw $e;
            }
        }

        /**
         * Actualizar un Estudiantes
         */
        public function update(){
            $sql = 'UPDATE estudiantes SET anio=:anio,institucion_id=:institucion_id ,ciudad_id=:ciudad_id WHERE id=:id';
            $data =
            [
                'id'            =>  $this->id,
                'institucion_id'=>  $this->institucion_id,
                'ciudad_id'     =>  $this->ciudad_id
            ];
            try{
                return (parent::query($sql, $data)) ? true : false;
            } catch (Exception $e) {
                throw $e;
            }
        }

        /**
         * Eliminar un Estudiantes
         */
        public function delete(){
            $sql = 'UPDATE estudiantes SET action=:action WHERE id=:id';

            try{
                return (parent::query($sql, ['action' => 1, 'id' => $this->id])) ? true : false;
            } catch (Exception $e) {
                throw $e;
            }
        }
    }
