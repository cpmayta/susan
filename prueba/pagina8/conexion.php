<?php
$conexion = mysqli_connect("localhost","root","root","comentarios");

if (!$conexion) {
	die("Error de conexión (".mysqli_connect_errno().")".mysqli_connect_error());
} 
?>