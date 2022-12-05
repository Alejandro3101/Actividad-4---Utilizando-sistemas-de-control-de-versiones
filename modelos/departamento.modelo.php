<?php

require_once "conexion.php";


class ModeloDepartamentos{

   

    static public function mdlFiltroDepartamento ($tabla){
    
        $stmt = Conexion:: conectar ()-> prepare("SELECT Nombre From $tabla");

    $stmt -> execute();

			return $stmt -> fetch();

        $stmt->close();
        $stmt= null;

    }
}