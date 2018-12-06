<?php

include ("../sal_modelo/controlador.php");

$user = $_POST['dni_per'];
$pass = $_POST['pass_per'];
$permiso  = $_POST['permiso'];
$estable  = $_POST['nombre_est'];

$salud = new controlador(); 
$salud -> login($user , $pass, $permiso, $estable); 
 
?>