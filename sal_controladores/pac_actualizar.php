<?php

include ("../sal_modelo/controlador.php");


$his_clinica    	= $_POST['his_clinica'];
$dni    			= $_POST['dni_pac'];
$nombre         	= $_POST['nom_pac'];
$paterno        	= $_POST['pat_pac'];
$materno        	= $_POST['mat_pac'];
$sexo    			= $_POST['sexo_pac'];
$fecnac      		= $_POST['fecnac_pac'];
$lugarnac      		= $_POST['lugnac_pac'];
$estcivil          	= $_POST['estcivil_pac'];
$domicilio          = $_POST['domicilio_pac'];
$referencia      	= $_POST['ref_pac'];
$seguro       		= $_POST['seguro_pac'];
$telefono    		= $_POST['tel_pac'];
$email    			= $_POST['email_pac'];
$face      			= $_POST['face_pac'];
$establecimiento   	= $_POST['nombre_est'];
$barrio				= $_POST['barrio_pac'];


$controlador = new controlador(); 
 
$controlador->pac_actualizar($his_clinica, $dni, $nombre, $paterno, $materno, $sexo, $fecnac, $lugarnac, $estcivil, $domicilio, $referencia, $seguro, $telefono, $email, $face, $establecimiento, $barrio);

?>