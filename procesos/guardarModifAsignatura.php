<?php
    require_once '../controladores/cAsignaturas.php';

    $modelo = new MAsignaturas($conexion);
    $controlador = new Controlador($modelo);

    $controlador->guardarModifAsignatura($_POST["id"], $_POST["nombre"], $_POST["codhex"]);
?>