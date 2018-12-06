<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php
session_start();
if(isset ($_SESSION['dni_per'])) {
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Anamsis</title>
<link href="css/style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>

<!--codigo php -->

<!--fin -->


<div id="wrapper">
	<div id="menu">
		<ul>
			<li><a href="index.php">Inicio</a></li>
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
				
					<select required name="list">
						<option value="APELLIDO PATERNO">APELLIDO PATERNO</option>
                        <option value="HISTORIA CLINICA">HISTORIA CLINICA</option>
                </select>

                                	<tr>
                                		<td><b>Buscar_HC</b></td>
                                		<td><input type="search" name="pat_pac"/></td>
                                		<td><input type="submit" name="btn1"  value="Buscar"  /></td>
                                	</tr>
                
                </table>

				<?php

				switch ($_POST['list']){
					
                	case 'APELLIDO PATERNO':
					include ("../sal_modelo/controlador.php");
					$pat_pac = $_POST['pat_pac'];
					$controlador = new controlador(); 
					$controlador->pac_buscar_pat($pat_pac);
					break;

					case 'HISTORIA CLINICA':
					include ("../sal_modelo/controlador.php");
					$pat_pac = $_POST['pat_pac'];
					$controlador = new controlador(); 
					$controlador->pac_buscar_hc($pat_pac);
					break;
                }

                ?>

				</center>
				
				
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
<?php
}else{echo "Debes iniciar sesion antes de acceder a esta pagina"; } ?>