<?php

require_once "controladores/plantilla.controlador.php";
require_once "controladores/usuarios.controlador.php";
require_once "controladores/embajadoras.controlador.php";
require_once "modelos/embajadora.modelo.php";
require_once "modelos/usuarios.modelo.php";
require_once "modelos/departamento.modelo.php";



$plantilla = new ControladorPlantilla();
$plantilla -> ctrPlantilla();
