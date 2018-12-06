<?php

include ("../sal_modelo/controlador.php");


$dni    		= $_POST['dni_per'];
$nombre         = $_REQUEST['nom_per'];
$paterno        = $_REQUEST['pat_per'];
$materno        = $_REQUEST['mat_per'];
$colegiatura    = $_REQUEST['coleg_per'];
$profesion      = $_REQUEST['prof_per'];
$condicion      = $_REQUEST['condi_per'];
$email          = $_REQUEST['email_per'];
$face           = $_REQUEST['face_per'];
$direccion      = $_REQUEST['dir_per'];
$telefono       = $_REQUEST['tel_per'];
$encargatura    = $_REQUEST['enc_per'];
$fechainicio    = $_REQUEST['fecin_per'];
$fechabaja      = $_REQUEST['fecba_per'];
$establecimiento   = $_REQUEST['nombre_est'];
$pass1			=$_REQUEST['pass_per'];
$pass2			=$_REQUEST['pass2'];
$estado			=$_REQUEST['estado_per'];

$controlador = new controlador(); 
$igual= $controlador->verificar($pass1, $pass2); 

if($igual == true){
    
   
$controlador->registrar($dni, $nombre, $paterno, $materno, $colegiatura, $profesion, $condicion, $email, $face, $direccion, $telefono, $encargatura, $fechainicio, $fechabaja, $establecimiento, $pass1, $estado); 


}else if ($igual == false){
    
    echo "<h1> LAS CONTRASEÑAS NO COINCIDEN</h1>";
    
}

 







?>