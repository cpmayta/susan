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
require('conexion.php');

                 //$his_clinica=$_GET['his_clinica'];

                 $query="SELECT his_clinica,dni_pac,nom_pac,pat_pac,mat_pac FROM paciente ";

                 $resultado=$mysqli-> query($query);

               $row=$resultado->fetch_assoc();

 if(isset($_POST["btn1"])){
         $btn=$_POST["btn1"];
         $his_clinica=$_POST["txtbus"];
        // $pat_pac=$_POST["txtbusa"];
         if($btn=="Buscar"){
                 
                }
  //      if($btn=="BuscarAPE"){
  //      			require('conexion.php');
  //      		 $query="SELECT his_clinica,dni_pac,nom_pac,pat_pac,mat_pac FROM paciente WHERE pat_pac='$pat_pac'";

  //      		 $resultado=$mysqli-> query($query);

  //      		 $row=$resultado->fetch_assoc();
  //              }

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
				<h2 class="title">Directorio de Personal de Salud</h2>
				<div style="clear: both;">&nbsp;</div>
				<div align="center" class="entry">
				<form name="fe" action="" method="post">
				<center>
				<table >
                                	<tr>
                                		<td><b>Buscar por Historia Clínica</b></td>
                                		<td><input type="search" name="txtbus"/></td>
                                		<td><input type="submit" name="btn1"  value="Buscar"  /></td>
                                	</tr>
                </table>
                <!--table >
                                	<tr>
                                		<td><b>Buscar por Apellido Paterno</b></td>
                                		<td><input type="search" name="txtbusa"/></td>
                                		<td><input type="submit" name="btn1"  value="BuscarAPE"  /></td>
                                	</tr>
                </table-->
				<table border=1 >
				<tr>
                    
					<td><b>H. Clinica</b></td>
					<td><b>DNI</b></td>
					<td><b>Ap. Paterno</b></td>
					<td><b>Ap. Materno</b></td>
					<td><b>Nombre</b></td>
                </tr>
				<tbody>
				<tbody>
					 <?php while($row=$resultado->fetch_assoc()){ ?>
						<tr>
							<td>
								<?php echo $row['his_clinica'];?>
                            </td>
                            <td>
								<?php echo $row['dni_pac'];?>
                            </td>
							<td>
                           		<?php echo $row['pat_pac'];?>
                            </td>
							<td>
                                <?php echo $row['mat_pac'];?>
                            </td>
							<td>
                            	<?php echo $row['nom_pac'];?>
                            </td>
						</tr>
					<?php } ?>
				</tbody>
				
				
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
						<li><a href="index.html">Inicio</a></li>
						<li><a href="reg_persalud.php">Registrar</a></li>
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
