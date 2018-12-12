<?php
include ("../sal-Controlador/Controlador.php");
$dni    		      = $_POST['dni_per'];
$nombre           = $_REQUEST['nom_per'];
$paterno          = $_REQUEST['pat_per'];
$materno          = $_REQUEST['mat_per'];
$profesion        = $_REQUEST['prof_per'];
$establecimiento  = $_REQUEST['nombre_est'];
$password         = $_REQUEST['pass_per'];
$estado           = $_REQUEST['estado_per'];

$controlador = new controlador();
$controlador->registrar($dni, $nombre, $paterno, $materno, $profesion, $establecimiento, $password, $estado);
?>
