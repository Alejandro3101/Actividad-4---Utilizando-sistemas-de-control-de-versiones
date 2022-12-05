<?php

class ControladorUsuarios{

/*=========================================
Ingreso Usuario
==========================================*/

 static public function ctrIngresoUsuario (){

    if(isset($_POST["ingUsuario"])) {

        if(preg_match('/^[a-zA-Z0-9]+$/', $_POST["ingUsuario"])&&
           preg_match('/^[a-zA-Z0-9]+$/', $_POST["ingPassword"])){


            $tabla = "usuario";

            $item = "Usuario";
            $valor =$_POST["ingUsuario"];

            $respuesta = ModeloUsuarios::mdlMostrarUsuarios($tabla,$item,$valor);

            if ($respuesta["Usuario"] == $_POST["ingUsuario"] && $respuesta["Contraseña"] == $_POST["ingPassword"]){

                $_SESSION["iniciarSesion"]= "ok";

                echo '<script>

                window.location = "inicio";

                </script>';
        

            }else{
               

                echo ' <br>
                <div class="alert-danger">Error al ingresar, vuelve a intentarlo</div>';
        
			}
		}
	}
}

}










    

/*=========================================
CREAR USUARIO
==========================================
    static public function ctrCrearUsuario(){

        if(isset($_POST["nuevoUsuario"])){
            
            if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]$/', $_POST["nuevoNombre"])&&
            preg_match('/^[a-zA-Z0-9]$/', $_POST["nuevoUsuario"]) &&
            preg_match('/^[a-zA-Z0-9]$/', $_POST["nuevaContraseña"])){

            $tabla ="usuario";

            $datos = array("Nombre" => $_POST["nuevoNombre"],
            "Usuario" => $_POST["nuevoUsuario"],
            "Contraseña" => $_POST["nuevaContraeña"]);

            $respuesta = ModeloUsuarios::mdlIngresarUsuario($tabla, $datos);
                if($respuesta  == "ok"){


                }else {

                }
             }
        }

    }
	*/
