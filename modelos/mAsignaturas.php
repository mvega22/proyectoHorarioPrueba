<?php
    require_once __DIR__ . '/../config/conexionBD.php';

    class MAsignaturas extends Conexion{
        protected $conexion;

        public function obtenerAsignaturas(){
            $consulta = 'SELECT * FROM asignaturas';
            $resultado = $this->conexion->query($consulta);
            return $resultado->fetch_all(MYSQLI_ASSOC);
        }

        public function obtenerAsignatura($id){
            $consulta = 'SELECT * from asignaturas WHERE idAsignatura='.$id;
            $resultado = $this->conexion->query($consulta);
            return $resultado;
        }

        public function modificarAsignatura($id, $nombre, $codhex){
            $consulta = "UPDATE asignaturas SET nombre='".$nombre."', codhex='".$codhex."' WHERE idAsignatura=".$id;
            $resultado = $this->conexion->query($consulta);
            return $resultado;
        }

        public function crearAsignatura($nombre, $codhex){
            $consulta = "INSERT INTO asignaturas (nombre, codhex) VALUES ('$nombre', '$codhex')";
            $resultado = $this->conexion->query($consulta);
            return $resultado;
        }

        public function eliminarAsignatura($id){
            $consulta = 'DELETE FROM asignaturas WHERE idAsignatura='.$id;
            $resultado = $this->conexion->query($consulta);
            return $resultado;
        }
    }
?>