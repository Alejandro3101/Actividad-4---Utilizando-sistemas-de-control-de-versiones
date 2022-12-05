<?php

require_once "conexion.php";


class ModeloMunicipios{

    static public function mdlFiltroMunicipio ($tabla1, $tabla2,$IdDepartamento ){

        $stmt = Conexion:: conectat ()-> prepare("SELECT $tabla1.Nombre, $tabla2.Nombre  From tabla1 inner join tabla2 on ($tabla1.Id = $tabla2.IdDepartamento) where $tabla1.Id=$IdDepartamento ");

 
        if($stmt->execute()){
            return $stmt;
        }else{
            return "error";
        }

        $stmt->close();
        $stmt= null;

    }
}
