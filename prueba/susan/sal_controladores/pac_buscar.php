<?php
include ("../sal_modelo/controlador.php");
$pat_pac = $_POST['pat_pac'];
 
$controlador = new controlador(); 
$controlador->pac_buscar_pat($pat_pac);
?>
