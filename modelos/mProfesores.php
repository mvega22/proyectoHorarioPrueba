<?php
    require_once __DIR__ . '../config/conexionBD.php';

    class MProfesores extends Conexion{
        protected $conexion;

        public function obtenerProfesores(){
            $consulta = 'SELECT * FROM profesores';
            $resultado = $this->conexion->query($consulta);
            return $resultado;
        }

        public function obtenerProfesor($id){
            $consulta = 'SELECT * from profesores WHERE idProfesor='.$id;
            $resultado = $this->conexion->query($consulta);
            return $resultado;
        }
    }
?>