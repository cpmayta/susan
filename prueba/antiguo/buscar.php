<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Anamsis</title>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>

<!--codigo php -->
<?php

 if(isset($_POST["btn1"])){
         $btn=$_POST["btn1"];
         $his_clinica=$_POST["txtbus"];
         if($btn=="Buscar"){
                 require('conexion.php');

                 //$his_clinica=$_GET['his_clinica'];

                 $query="SELECT his_clinica,dni_pac,nom_pac,pat_pac,mat_pac,sexo_pac,fecnac_pac,lugnac_pac,estcivil_pac,domicilio_pac,ref_pac,seguro_pac,tel_pac,email_pac,face_pac,nombre_est,barrio_pac FROM paciente WHERE his_clinica='$his_clinica'";

                 $resultado=$mysqli-> query($query);

               $row=$resultado->fetch_assoc();
                         }
        if($btn=="Agregar"){
                }

         }

?>
<!--fin -->


<div id="wrapper">
	<div id="menu">
		<ul>
			<li><a href="index.html">Inicio</a></li>
			<li><a href="#">Nosotros</a></li>
			<li><a href="#">Contacto</a></li>
		</ul>
	</div>
	<!-- end #menu -->
	<div id="header">
		<div id="logo">
			<h1><a href="#">c.s. san agustín de cajas</a></h1>		
		</div>
	</div>
	<!-- end #header -->
	<div id="page">
	<div id="page-bgtop">
	<div id="page-bgbtm">
		<div id="content">
			<div class="post">
				<h2 class="title">Busqueda de Pacientes</h2>
				<div style="clear: both;">&nbsp;</div>
				<div align="center" class="entry">
				<form name="fe" action="" method="post">
				<center>
				<table >
                                	<tr>
                                		<td><b>Buscar_HC</b></td>
                                		<td><input type="search" name="txtbus"/></td>
                                		<td><input type="submit" name="btn1"  value="Buscar"  /></td>
                                	</tr>
                        	</table>
				<table >
				<tr>
                                        <td><b>DNI</b></td>
                                        <td><input type="text" name="dni_pac" readonly="readonly" size="25" value="<?php echo $row['dni_pac']; ?>" /></td>
                                </tr>
				<tr>
                                        <td><b>Historia Clinica</b></td>
                                        <td><input type="text" name="his_clinica" readonly="readonly" size="25" value="<?php echo $row['his_clinica']; ?>" /></td>
                                </tr>
				<tr>

                                        <td ><b>Nombre</b></td>
                                        <td ><input type="text" name="nom_pac" readonly="readonly" size="25" value="<?php echo $row['nom_pac']; ?>" /></td>
                                </tr>
                                <tr>
                                        <td><b>Apellido Paterno</b></td>
                                        <td><input type="text" name="pat_pac" readonly="readonly" size="25" value="<?php echo $row['pat_pac']; ?>" /></td>
                                </tr>
                                <tr>
                                        <td><b>Apellido Materno</b></td>
                                        <td><input type="text" name="mat_pac" readonly="readonly" size="25" value="<?php echo $row['mat_pac']; ?>" /></td>
                                </tr>
				<tr>
                                        <td><b>Fecha de Nacimiento</b></td>
                                        <td><input type="date" name="fecnac_pac" readonly="readonly" size="25" value="<?php echo $row['fecnac_pac']; ?>" /></td>
                                </tr>
				<tr>
                                        <td><b>Sexo</b></td>
                                        <td><input type="text" name="sexo_pac" readonly="readonly" size="25" value="<?php echo $row['sexo_pac']; ?>" /> </td>
                                </tr>

                                <tr>
                                        <td><b>Lugar de Nacimiento</b></td>
                                        <td><input type="text" name="lugnac_pac" readonly="readonly" size="25" value="<?php echo $row['lugnac_pac']; ?>" /></td>
                                </tr>
				<tr>
                                        <td><b>Estado Civil</b></td>
                                        <td><input type="text" name="estcivil_pac" readonly="readonly" size="25" value="<?php echo $row['estcivil_pac']; ?>" /> </td>
                                </tr>
                                <tr>
                                        <td><b>Direccion</b></td>
                                        <td><input type="text" name="domicilio_pac" readonly="readonly" size="25" value="<?php echo $row['domicilio_pac']; ?>" /></td>
                                </tr>
                                <tr>
                                        <td><b>Referencia</b></td>
                                        <td><input type="text" name="ref_pac" readonly="readonly" size="25" value="<?php echo $row['ref_pac']; ?>" /></td>
                                </tr>
				<tr>
                                        <td><b>Tipo de Seguro</b></td>
                                        <td><input type="text" name="seguro_pac" readonly="readonly" size="25" value="<?php echo $row['seguro_pac']; ?>"/> </td>
                                </tr>
				<tr>
                                        <td><b>Telefono</b></td>
                                        <td><input type="text" name="tel_pac" readonly="readonly" size="25" value="<?php echo $row['tel_pac']; ?>" /></td>
                                </tr>
                                <tr>
                                        <td><b>E-mail</b></td>
                                        <td><input type="text" name="email_pac" readonly="readonly" size="25" value="<?php echo $row['email_pac']; ?>" /></td>
                                </tr>


                                <tr>
                                        <td><b>Facebook</b></td>
                                        <td><input type="text" name="face_pac" readonly="readonly"  size="25" value="<?php echo $row['face_pac']; ?>" /></td>
                                </tr>
                                <tr>
                                        <td><b>Establecimiento</b></td>
                                        <td><input type="text" name="nombre_est" readonly="readonly" size="25" value="<?php echo $row['nombre_est']; ?>" /></td>
                                </tr>
				<tr>
                                        <td><b>Barrio</b></td>
                                        <td><input type="text" name="barrio_pac" readonly="readonly" size="25" value="<?php echo $row['barrio_pac']; ?>" /> </td>
                                </tr>
				
				
				</center>
						<tr align="center">
                                                </tr>
				</table>
				</form>
				</div>
			</div>




		<div style="clear: both;">&nbsp;</div>
		</div>
		<!-- end #content -->
		<div id="sidebar">
			<ul>
				<li>
					<div id="search" >
					<form method="get" action="#">
						<div>
							<input type="text" name="s" id="search-text" value="" />
							<input type="submit" id="search-submit" value="GO" />
						</div>
					</form>
					</div>
					<div style="clear: both;">&nbsp;</div>
				</li>
				<li>
					<h2>Mantenimiento</h2>					<ul>
						<li><a href="registrar.php">Registrar pacientes</a></li>
						<li><a href="actualizar.php">Actualizar pacientes</a></li>
					</ul>
				</li>
				<li>
					<h2>Archives</h2>
					<ul>
						<li><a href="#">His 2012-2015</a></li>
					</ul>
				</li>
			</ul>
		</div>
		<!-- end #sidebar -->
		<div style="clear: both;">&nbsp;</div>
	</div>
	</div>
	</div>
	<!-- end #page -->
</div>
	<div id="footer">
		<p><a href="http://www.norfipc.com/">anamsys</a>.</p>
	</div>
	<!-- end #footer -->
</body>
</html>
