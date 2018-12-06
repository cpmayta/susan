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
<title>Anamsys</title>
<link href="css/style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>

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
				<h2 class="title">Directorio de Personal de Salud</h2>
				<div style="clear: both;">&nbsp;</div>
				<div align="center" class="entry">
				<form name="fe" action="" method="post">
				<center>
				<?php
				 mysql_connect("localhost", "root", "Redhat@2015") or die(mysql_error());
				 mysql_select_db("orion") or die(mysql_error());
				  
                 $data=mysql_query("SELECT dni_per,nom_per,pat_per,mat_per,tel_per,nombre_est FROM personal")  ;
                 Print "<table border cellpadding=3>";
                 
                 	Print  "<tr>"; Print "<th>DNI:</th>";
					Print "<th>Nombre:</th>";
					Print "<th>Paterno:</th>";
					Print "<th>Materno:</th>";
					Print "<th>Teléfono:</th>";
					Print "<th>Establecimiento:</th> </tr>";

					while($info = mysql_fetch_array($data)){   

					Print "<tr>";  Print "<td>".$info['dni_per'] . "</td> ";
					Print "<td>".$info['nom_per'] . "</td> ";
					Print "<td>".$info['pat_per'] . "</td> ";
					Print "<td>".$info['mat_per'] . "</td> ";
					Print "<td>".$info['tel_per'] . "</td> ";
					Print "<td>".$info['nombre_est'] . " </td></tr>";

				}  Print "</table>";
				

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
					<div>
					
					<form style="background-color:white" >
						<div>
						<p id ="title">Bievenido al C.S. San Agustín de Cajas
    							<?php
    								echo $_SESSION['nom_per'] ;
    								echo " " ;
    								echo $_SESSION['pat_per'];
   								?>
   								<a href ="index.php" class = "dos">Cerrar Sesion...</a>
    					</p>

    					</div>
					</form>
					</div>
					<div style="clear: both;">&nbsp;</div>
				</li>
				<li>
					<h2>Mantenimiento</h2>					<ul>
						<li><a href="pac_buscar.php">Buscar Pacientes</a></li>
						<li><a href="pac_crear.html">Registrar Pacientes</a></li>
						<li><a href="buscar.php">Actualizar Pacientes</a></li>
						<li><a href="buscar.php">Eliminar Pacientes</a></li>
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