<?php
include ("../sal_modelo/controlador.php");

$his_clinica	=$_POST['his_clinica'];
$dni_pac		=$_POST['dni_pac'];
$nom_pac		=$_POST['nom_pac'];
$pat_pac		=$_POST['pat_pac'];
$mat_pac		=$_POST['mat_pac'];
$sexo_pac		=$_POST['sexo_pac'];
$fecnac_pac		=$_POST['fecnac_pac'];
$lugnac_pac		=$_POST['lugnac_pac'];
$estcivil_pac	=$_POST['estcivil_pac'];
$domicilio_pac	=$_POST['domicilio_pac'];
$ref_pac		=$_POST['ref_pac'];
$seguro_pac		=$_POST['seguro_pac'];
$tel_pac		=$_POST['tel_pac'];
$email_pac		=$_POST['email_pac'];
$face_pac		=$_POST['face_pac'];
$nombre_est		=$_POST['nombre_est'];
$barrio_pac		=$_POST['barrio_pac'];
$controlador = new controlador(); 
$controlador->verpaciente($his_clinica, $dni_pac, $nom_pac, $pat_pac, $mat_pac, $sexo_pac, $fecnac_pac, $lugnac_pac, $estcivil_pac, $domicilio_pac, $ref_pac, $seguro_pac, $tel_pac, $email_pac, $face_pac, $nombre_est, $barrio_pac);
?>
