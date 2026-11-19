<?php
    include 'config/rutas.php';

    //Comprobar si se ha indicado ruta de controlador, si no, dar predeterminado
    if(!isset($_GET["c"])){
        $_GET["c"] = CONTROLADOR_PREDETERMINADO;
    }

    //Comprobar si se ha indicado ruta de método, si no, dar predeterminado
    if(!isset($_GET["m"])){
        $metodo = $_GET["m"] = METODO_PREDETERMINADO;
    }else{
        $metodo = $_GET["m"];
    }
    
    //Include controlador, crear objeto del controlador
    include RUTA_CONTROLADORES . $_GET["c"] . '.php';
    $objetoC = new $_GET["c"];

    //Llamar al método y guardar retorno en datos
    if(method_exists($objetoC, $metodo)){
        $datos = $objetoC->$metodo();
    }

    //Llamar a la vista
    if($objetoC->vista != ''){
        require_once RUTA_VISTAS . $objetoC->vista . '.php';
    }
?>