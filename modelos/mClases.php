<?php
    require_once __DIR__ . '../config/conexionBD.php';
    
    class MClases extends Conexion{
        protected $conexion;

        public function obtenerClases(){
            $consulta = 'SELECT * FROM clases';
            $resultado = $this->conexion->query($consulta);
            return $resultado;
        }

        public function obtenerClase($id){
            $consulta = 'SELECT * from clases WHERE idClase='.$id;
            $resultado = $this->conexion->query($consulta);
            return $resultado;
        }
    }
?>