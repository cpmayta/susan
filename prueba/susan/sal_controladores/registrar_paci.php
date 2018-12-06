<?php
include ("../sal_modelo/controlador.php");

$his_clinica    	= $_REQUEST['his_clinica'];
$dni    			= $_REQUEST['dni_pac'];
$nombre         	= $_REQUEST['nom_pac'];
$paterno        	= $_REQUEST['pat_pac'];
$materno        	= $_REQUEST['mat_pac'];
$sexo    			= $_REQUEST['sexo_pac'];
$fecnac      		= $_REQUEST['fecnac_pac'];
$lugarnac      		= $_REQUEST['lugnac_pac'];
$estcivil          	= $_REQUEST['estcivil_pac'];
$domicilio          = $_REQUEST['domicilio_pac'];
$referencia      	= $_REQUEST['ref_pac'];
$seguro       		= $_REQUEST['seguro_pac'];
$telefono    		= $_REQUEST['tel_pac'];
$email    			= $_REQUEST['email_pac'];
$face      			= $_REQUEST['face_pac'];
$establecimiento   	= $_REQUEST['nombre_est'];
$barrio				= $_REQUEST['barrio_pac'];
$controlador=new controlador;

$controlador->pac_registrar($his_clinica, $dni, $nombre, $paterno, $materno, $sexo, $fecnac, $lugarnac, $estcivil, $domicilio, $referencia, $seguro, $telefono, $email, $face, $establecimiento, $barrio);
?>