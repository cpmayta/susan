<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Anamsys</title>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<SCRIPT language=Javascript>
      
      function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
 
         return true;
      }
      
   </SCRIPT>

</head>
<body>

<!--codigo php -->
<?php

//echo $_POST['fecnac_pac'];

 if(isset($_POST["btn1"])){
         $btn=$_POST["btn1"];
         $his_clinica=$_POST["txtbus"];
	 $fecnac_pac = $_POST["fecnac_pac"];
         if($btn=="Buscar"){
                 require('conexion.php');

                 //$his_clinica=$_GET['his_clinica'];

                 $query="SELECT his_clinica,dni_pac,nom_pac,pat_pac,mat_pac,sexo_pac,fecnac_pac,lugnac_pac,estcivil_pac,domicilio_pac,ref_pac,seguro_pac,tel_pac,email_pac,face_pac,nombre_est,barrio_pac FROM paciente WHERE his_clinica='$his_clinica'";

                 $resultado=$mysqli-> query($query);

               $row=$resultado->fetch_assoc();
                         }
        if($btn=="Actualizar"){
                require('conexion.php');
                $historia       = $_POST['his_clinica'];
		$dni            = $_POST['dni_pac'];
                $nombre         = $_POST['nom_pac'];
                $paterno        = $_POST['pat_pac'];
                $materno        = $_POST['mat_pac'];
                $sexo           = $_POST['sexo_pac'];
                $fechanacimiento = $_POST['fecnac_pac'];
                $lugar          = $_POST['lugnac_pac'];
                $estadocivil    = $_POST['estcivil_pac'];
                $domicilio      = $_POST['domicilio_pac'];
                $referencia     = $_POST['ref_pac'];
                $seguro         = $_POST['seguro_pac'];
                $telefono       = $_POST['tel_pac'];
                $email          = $_POST['email_pac'];
                $face           = $_POST['face_pac'];
		$establecimiento= $_POST['nombre_est'];
                //$departamento   = $_POST['nom_dep'];
                //$provincia      = $_POST['nom_prov'];
                //$distrito       = $_POST['nom_dist'];
                $barrio           = $_POST['barrio_pac'];

$query="UPDATE paciente SET dni_pac='$dni',nom_pac='$nombre',pat_pac='$paterno',mat_pac='$materno',sexo_pac='$sexo',fecnac_pac='$fechanacimiento',lugnac_pac='$lugar',estcivil_pac='$estadocivil',domicilio_pac='$domicilio',ref_pac='$referencia',seguro_pac='$seguro',tel_pac='$telefono',email_pac='$email',face_pac='$face',nombre_est='$establecimiento',barrio_pac='$barrio' where his_clinica='$historia'";
                $resultado=$mysqli->query($query);
                }
                if($btn=="Eliminar"){
                        require('conexion.php');


                        $historia=$_POST['his_clinica'];

                        $query="DELETE FROM paciente WHERE his_clinica='$historia'";

                        $resultado=$mysqli->query($query);

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
				<h2 class="title">Actualizar datos de Pacientes</h2>
				<div style="clear: both;">&nbsp;</div>
				<div align="center" class="entry">
				<form name="fe" action="" method="post">
				<center>
				<table >
                                	<tr>
                                		<td><b>Buscar</b></td>
                                		<td><input type="search" name="txtbus"/></td>
                                		<td><input type="submit" name="btn1"  value="Buscar"  /></td>
                                	</tr>
                        	</table>
				<table >
				<tr>
                                        <td><b>Historia Clinica</b></td>
					<td COLSPAN=3><input type="text" name="his_clinica" readonly="readonly" size="25" value="<?php echo $row['his_clinica']; ?>" /></td>
                                </tr>
				<tr>
                                         <td><b>DNI</b></td>
                                         <td COLSPAN=3><input maxlength="8" type="text" name="dni_pac" size="25" value="<?php echo $row['dni_pac']; ?>" /></td>
                                </tr>
				<tr>

                                        <td ><b>Nombre</b></td>
                                        <td COLSPAN=3><input type="text" name="nom_pac" size="25" value="<?php echo $row['nom_pac']; ?>" /></td>
                                </tr>
                                <tr>
                                        <td><b>Apellido Paterno</b></td>
                                        <td COLSPAN=3><input type="text" name="pat_pac" size="25" value="<?php echo $row['pat_pac']; ?>"  /></td>
                                </tr>
                                <tr>
                                        <td><b>Apellido Materno</b></td>
                                        <td COLSPAN=3><input type="text" name="mat_pac" size="25" value="<?php echo $row['mat_pac']; ?>" /></td>
                                </tr>
				<tr>
                                        <td><b>Fecha de Nacimiento</b></td>
                                        <td><input type="date" name="fecnac_pac" id="fecnac_pac" size="25"  value="<?php echo $row['fecnac_pac']; ?>" /></td>
				</tr>
				<tr>
                                        <td><b>Sexo</b></td>
                                        <td COLSPAN=3>
                                                <select name="sexo_pac" >
                                                <option value=" "> </option>
                                                <option value="M" <?php $row['sexo_pac']=='M' ? print "selected":"";?> >M</option>
                                                <option value="F" <?php $row['sexo_pac']=='F' ? print "selected":"";?> >F</option>
                                                </select>
                                        </td>
                                </tr>

                                <tr>
                                        <td><b>Lugar de Nacimiento</b></td>
                                        <td COLSPAN=3><input type="text" name="lugnac_pac" size="25" value="<?php echo $row['lugnac_pac']; ?>" /></td>
                                </tr>
				<tr>
                                        <td><b>Estado Civil</b></td>
                                        <td COLSPAN=3>
                                                <select name="estcivil_pac">
                                                <option value="C" <?php $row['estcivil_pac']=='C' ? print "selected":"";?>>C</option>
                                                <option value="S" <?php $row['estcivil_pac']=='S' ? print "selected":"";?>>S</option>
                                                <option value="V" <?php $row['estcivil_pac']=='V' ? print "selected":"";?>>V</option>
                                                <option value="D" <?php $row['estcivil_pac']=='D' ? print "selected":"";?>>D</option>
                                                <option value="CN" <?php $row['estcivil_pac']=='CN' ? print "selected":"";?>>CN</option>
                                                </select>
                                        </td>
                                </tr>
                                <tr>
                                        <td><b>Direccion</b></td>
                                        <td COLSPAN=3><input type="text" name="domicilio_pac" size="25" value="<?php echo $row['domicilio_pac']; ?>" /></td>
                                </tr>
                                <tr>
                                        <td><b>Referencia</b></td>
                                        <td COLSPAN=3><input type="text" name="ref_pac" size="25" value="<?php echo $row['ref_pac']; ?>" /></td>
                                </tr>
				<tr>
                                        <td><b>Tipo de Seguro</b></td>
                                        <td COLSPAN=3>
                                                <select name="seguro_pac">
                                                <option value="NINGUNO" <?php $row['seguro_pac']=='NINGUNO' ? print "selected":"";?> >NINGUNO </option>
                                                <option value="SIS" <?php $row['seguro_pac']=='SIS' ? print "selected":"";?> >SIS</option>
                                                <option value="ESSALUD" <?php $row['seguro_pac']=='ESSALUD' ? print "selected":"";?>>ESSALUD</option>
                                                <option value="SOAT" <?php $row['seguro_pac']=='SOAT' ? print "selected":"";?>>SOAT</option>
                                                <option value="SANIDAD FAP" <?php $row['seguro_pac']=='SANIDAD FAP' ? print "selected":"";?>>SANIDAD FAP</option>
                                                <option value="SANIDAD NAVAL" <?php $row['seguro_pac']=='SANIDAD NAVAL' ? print "selected":"";?>>SANIDAD NAVAL</option>
                                                <option value="SANIDAD EP" <?php $row['seguro_pac']=='SANIDAD EP' ? print "selected":"";?>>SANIDAD EP</option>
                                                <option value="SANIDAD PNP" <?php $row['seguro_pac']=='SANIDAD PNP' ? print "selected":"";?>>SANIDAD PNP</option>
                                                <option value="PRIVADOS" <?php $row['seguro_pac']=='PRIVADOS' ? print "selected":"";?>>PRIVADOS</option>
                                                <option value="OTROS" <?php $row['seguro_pac']=='OTROS' ? print "selected":"";?>>OTROS</option>
                                                <option value="EXONERADO" <?php $row['seguro_pac']=='EXONERADO' ? print "selected":"";?>>EXONERADO</option>
                                                </select>
                                         </td>
                                </tr>
				<tr>
                                        <td><b>Telefono</b></td>
                                        <td COLSPAN=3><input type="text" name="tel_pac" size="25" value="<?php echo $row['tel_pac']; ?>"/></td>
                                </tr>
                                <tr>
                                        <td><b>E-mail</b></td>
                                        <td COLSPAN=3><input type="text" name="email_pac" size="25" value="<?php echo $row['email_pac']; ?>" /></td>
                                </tr>


                                <tr>
                                        <td><b>Facebook</b></td>
                                        <td COLSPAN=3><input type="text" name="face_pac" size="25" value="<?php echo $row['face_pac']; ?>" /></td>
                                </tr>
                                <tr>
                                        <td><b>Establecimiento</b></td>
                                        <td COLSPAN=3><input type="text" name="nombre_est" size="25" value="<?php echo $row['nombre_est']; ?>" /></td>
                                </tr>
				<tr>
                                        <td><b>Barrio</b></td>
                                        <td COLSPAN=3>
                                                <select name="barrio_pac">
                                                <option value="NINGUNO" <?php $row['barrio_pac']=='NINGUNO' ? print "selected":"";?>>NINGUNO</option>
                                                <option value="BARRIO I" <?php $row['barrio_pac']=='BARRIO I' ? print "selected":"";?>>BARRIO I</option>
                                                <option value="BARRIO II" <?php $row['barrio_pac']=='BARRIO II' ? print "selected":"";?>>BARRIO II</option>
                                                <option value="BARRIO III" <?php $row['barrio_pac']=='BARRIO III' ? print "selected":"";?>>BARRIO III</option>
                                                <option value="BARRIO IV" <?php $row['barrio_pac']=='BARRIO IV' ? print "selected":"";?>>BARRIO IV</option>
                                                <option value="BARRIO V-YAULI" <?php $row['barrio_pac']=='BARRIO V-YAULI' ? print "selected":"";?>>BARRIO V-YAULI</option>
                                                <option value="BELLA VISTA" <?php $row['barrio_pac']=='BELLA VISTA' ? print "selected":"";?>>BELLA VISTA</option>
                                                <option value="VISTA ALEGRE" <?php $row['barrio_pac']=='VISTA ALEGRE' ? print "selected":"";?>>VISTA ALEGRE</option>
                                                <option value="POR VENIR" <?php $row['barrio_pac']=='POR VENIR' ? print "selected":"";?>>POR VENIR</option>
                                                <option value="COILLOR" <?php $row['barrio_pac']=='COILLOR' ? print "selected":"";?>>COILLOR</option>
                                                </select>
                                         </td>
                                </tr>
				
				
				</center>
						<tr align="center">
                                                </tr>
                                                <tr align="center" ><td colspan="4"><input type="submit" name="btn1" value="Actualizar"/><input type="submit" name="btn1"value="Eliminar"/>
                                                </td></tr>
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
						<li><a href="buscar.php">Buscar Pacientes</a></li>
					</ul>
				</li>
				<li>
					<h2>Archivos</h2>
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
		<p><a href="http://www.norfipc.com/">ANAMSYS</a></p>
	</div>
	<!-- end #footer -->
</body>
</html>
