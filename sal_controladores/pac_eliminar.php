<?php
include ("../sal_modelo/controlador.php");
$his_clinica = $_POST['his_clinica'];
$controlador = new controlador();
$controlador->pac_eliminar($his_clinica);
?>