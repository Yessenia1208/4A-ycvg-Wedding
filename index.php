<?php
require_once "controladores/plantillaControlador.php";
require_once "controladores/formularioControlador.php";
require_once "modelos/formulariosModelos.php";



$plantilla = new ControladorPlantilla();
$plantilla -> ctrTraerPlantilla();

?>