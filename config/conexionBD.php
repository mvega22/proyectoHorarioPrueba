<?php

    Class Conexion{

        protected $conexion; 

        public function __construct(){
            $servidor = 'localhost';
            $usuario = 'root';
            $pw = '';
            $basedatos = 'horario';
    
            $this->conexion = new mysqli($servidor, $usuario, $pw, $basedatos);
        }
        
    }
    
?>