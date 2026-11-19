<?php
    require_once __DIR__ . '/../modelos/mAsignaturas.php';

    class CAsignaturas{
        private $mAsignatura;
        //Variable vista para guardar su nombre y llamarla luego en el index
        public $vista;

        public function __construct(){
            $this->mAsignatura = new MAsignaturas();
        }

        public function listarAsignaturas(){
            $this->vista="vAsignaturas";
            return $this->mAsignatura->obtenerAsignaturas();
        }

        public function modificarAsignatura(){
            $this->vista="vModificarAsignatura";
            $datos = $this->mAsignatura->obtenerAsignatura($_GET["id"]);
            return $datos->fetch_assoc();
            
        }

        public function guardarModifAsignatura(){
            $id = $_POST["id"];
            $nombre = strtoupper($_POST["nombre"]);
            $codhex = $_POST["codhex"];
            $this->vista="vGuardado";
            return $resultado = $this->mAsignatura->modificarAsignatura($id, $nombre, $codhex);
        }

        public function crearAsignatura(){
            $this->vista="vCrearAsignatura";
        }

        public function guardarCrearAsignatura(){
            $nombre = strtoupper($_POST["nombre"]);
            $codhex = $_POST["codhex"];
            $this->vista="vGuardado";
            return $resultado = $this->mAsignatura->crearAsignatura($nombre, $codhex);
        }

        public function eliminarAsignatura(){
            $id = $_GET["id"];
            $this->vista="vEliminado";
            return $resultado = $this->mAsignatura->eliminarAsignatura($id);
        }
    }
?>