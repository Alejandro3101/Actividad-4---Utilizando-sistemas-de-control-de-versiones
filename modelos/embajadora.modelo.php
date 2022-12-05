<?php

require_once "conexion.php";


class ModeloEmbajadoras{

    static public function mdlIngresarEmbajadora ($tabla, $datos){

        $stmt = Conexion:: conectar ()-> prepare("INSERT INTO $tabla (Nombre,Cedula,Telefono,Departamento,Municipio,Direccion,FechaIngreso,FechaNacimiento,
        Banco,TipoCuenta,NumeroCuenta,Estado,CantidadHijos) VALUES (:Nombre, :Cedula, :Telefono, :Departamento, :Municipio, :Direccion, :FechaIngreso,
        :FechaNacimiento, :Banco, :TipoCuenta, :NumeroCuenta, :Estado, :CantidadHijos)");

        $stmt->bindParam(":Nombre", $datos["Nombre"], PDO::PARAM_STR);
        $stmt->bindParam(":Cedula", $datos["Cedula"], PDO::PARAM_STR);
        $stmt->bindParam(":Telefono", $datos["Telefono"], PDO::PARAM_STR);
        $stmt->bindParam(":Departamento", $datos["Departamento"], PDO::PARAM_STR);
        $stmt->bindParam(":Municipio", $datos["Municipio"], PDO::PARAM_STR);
        $stmt->bindParam(":FechaIngreso", $datos["FechaIngreso"], PDO::PARAM_STR);
        $stmt->bindParam(":FechaNacimiento", $datos["FechaNacimiento"], PDO::PARAM_STR);
        $stmt->bindParam(":Banco", $datos["Banco"], PDO::PARAM_STR);
        $stmt->bindParam(":TipoCuenta", $datos["TipoCuenta"], PDO::PARAM_STR);
        $stmt->bindParam(":NumeroCuenta", $datos["NumeroCuenta"], PDO::PARAM_STR);
        $stmt->bindParam(":Estado", $datos["Estado"], PDO::PARAM_STR);
        $stmt->bindParam(":CantidadHijos", $datos["CantidadHijos"], PDO::PARAM_STR);

        if($stmt->execute()){
            return "ok";
        }else{
            return "error";
        }

        $stmt->close();
        $stmt= null;

    }
}
