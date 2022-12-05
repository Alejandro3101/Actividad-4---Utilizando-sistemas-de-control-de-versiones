<?php
class ControladorEmbajadoras{

/*=========================================
CREAR USUARIO
==========================================*/
    static public function ctrCrearEmbajadora(){

        if(isset($_POST["nuevaEmbajadora"])){
            
            if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]$/', $_POST["nuevoNombre"])&&
            preg_match('/^[0-9]$/', $_POST["nuevaCedula"]) &&
            preg_match('/^[0-9]$/', $_POST["nuevoTelefono"])&&
            preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]$/', $_POST["nuevoDepartamento"])&&
            preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]$/', $_POST["nuevoMunicipio"])&&
            preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]$/', $_POST["nuevoBanco"])&&
            preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]$/', $_POST["nuevoTipoCuenta"])  &&
            preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]$/', $_POST["nuevoTipoCuenta"])&&
            preg_match('/^[0-9]$/', $_POST["nuevoNumeroCuenta"])&&
            preg_match('/^[0-9]$/', $_POST["numeroHijos"])){

            $tabla ="embajadora";

            $datos = array("Nombre" => $_POST["nuevoNombre"],
            "Cedula" => $_POST["nuevaCedula"],
            "Telefono" => $_POST["nuevoTelefono"] ,
            "Departamento" => $_POST["nuevoDepartamento"],
            "Municipio" => $_POST["nuevoMunicipio"],
            "Direccion" => $_POST["nuevaDireccion"],
            "FechaIngreso" => $_POST["fechaIngreso"],
            "FechaNacimiento" => $_POST["fechaNacimiento"],
            "Banco" => $_POST["nuevoBanco"],
            "TipoCuenta" => $_POST["nuevoTipoCuenta"],
            "NumeroCuenta" => $_POST["nuevoNumeroCuenta"],
            "Estado" => $_POST["1"],
            "CantidadHijos" => $_POST["numeroHijos"]);

            $respuesta = ModeloEmbajadoras::mdlIngresarEmbajadora($tabla, $datos);
                if($respuesta  == "ok"){


                }else {

                }
             }
        }

    }
}