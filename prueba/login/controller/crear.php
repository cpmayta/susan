<?php

include ("../model/wish.php");


$nombre= $_POST['nombre'];
$apellido= $_REQUEST['apellido'];
$usuario= $_REQUEST['usuario'];
$pass1= $_REQUEST['pass1'];
$pass2= $_REQUEST['pass2'];


$wish = new wish(); 
$igual= $wish->verificar($pass1, $pass2); 

if($igual == true){
    
   
$wish->registrar($nombre, $apellido, $usuario, $pass1); 


}else if ($igual == false){
    
    echo "<h1> LAS CONTRASEÑAS NO COINCIDEN</h1>";
    
}

 







?>