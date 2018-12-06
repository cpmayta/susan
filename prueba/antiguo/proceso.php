<?php
	session_start();
	$dni=$_POST['dni_per'];
	$password = $_POST['pass_per'];

include ("conexion.php");
$proceso=$mysqli->query("SELECT * FROM personal WHERE dni_per='$dni' AND pass_per='$password'");
if ($resultado = mysqli_fetch_array($proceso)){
	$_SESSION['u_usurio']=$dni;
	header("location:registrar.php");
	header("location:persalud_direc.php");
	//echo "Sesion exitosa";
	}
	else{
	//header("location: index.html");
	echo "Sesion no exitosa";
	}

?>
