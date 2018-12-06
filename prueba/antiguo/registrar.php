<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Anamsys</title>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<!--SCRIPT language=Javascript>
      
     function validar(e) { // 1
    		tecla = (document.all) ? e.keyCode : e.which; 
    		if (tecla==8) return true; 
    		patron =/[A-Za-zñÑ\s]/; 
    		te = String.fromCharCode(tecla); 
    		return patron.test(te); 
	} 
</SCRIPT-->

</head>
<body>

<!--codigo php -->
<?php

//session_start();
//if(isset($_SESSION['u_usurio'])){
//   echo "Sesion Exitosa\n Bienvenido";
//}else{
//   header("Location: index.html");
//}


 if(isset($_POST["btn1"])){
         $btn=$_POST["btn1"];
	 $fecnac_pac = $_POST["fecnac_pac"];
         if($btn=="Buscar"){
                 require('conexion.php');

                 //$his_clinica=$_GET['his_clinica'];

                 $query="SELECT his_clinica,nom_pac,pat_pac,mat_pac,sexo_pac,fecnac_pac,lugnac_pac,dni_pac,estcivil_pac,domicilio_pac,ref_pac,seguro_pac,tel_pac,email_pac,face_pac,nom_dep,nom_prov,nom_dist,barrio_pac FROM paciente WHERE his_clinica='$his_clinica'";

                 $resultado=$mysqli-> query($query);

               $row=$resultado->fetch_assoc();
                         }
        if($btn=="Agregar"){
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
	$establecimiento   = $_POST['nombre_est'];
        $barrio         = $_POST['barrio_pac'];

        $query="INSERT INTO paciente (his_clinica,dni_pac,nom_pac,pat_pac,mat_pac,sexo_pac,fecnac_pac,lugnac_pac,estcivil_pac,domicilio_pac,ref_pac,seguro_pac,tel_pac,email_pac,face_pac,nombre_est,barrio_pac) VALUES ('$historia','$dni','$nombre','$paterno','$materno','$sexo','$fechanacimiento','$lugar','$estadocivil','$domicilio','$referencia','$seguro','$telefono','$email','$face','$establecimiento','$barrio')";

        $resultado=$mysqli->query($query);

        if ($resultado){
            echo"<script>alert('Paciente Registrado Click en Aceptar por Favor')</script>";
        }else{
            echo"<script>alert('Paciente ya está registrado vuelva a intentarlo por favor')</script>";
        }
                }

		if($btn=="calcular_edad"){
		   //<inicio>
			date_default_timezone_set("America/Lima");
			//date_default_timezone_set("America/New_York");
			//$actual = date_default_timezone_get();
			$fechaactual=date ("Y-m-d");
			//$time = time();
			$form1 = explode ("-", $fecnac_pac);
			$form2 = explode ("-", $fechaactual);
			$edad = $form2[0] - $form1[0];
			$meses = $form2[1] - $form1[1];
			$dias = $form2[2] - $form1[2];
			echo "hoy es $fechaactual";
			if ($dias < 0){
				--$meses;
				switch ($form2[1]) {
     			       case 1:     $dias_mes_anterior=31; break;
			       case 2:     $dias_mes_anterior=31; break;
			       case 3: 
                			if (($form2[0])/4==0)
                			{
                			    $dias_mes_anterior=29; break;
						$dias=$dias + $dias_mes_anterior+1;	
               				 } else {
                    				$dias_mes_anterior=28; break;
                			}
           			case 4:     $dias_mes_anterior=31; break;
           			case 5:     $dias_mes_anterior=30; break;
			        case 6:     $dias_mes_anterior=31; break;
           			case 7:     $dias_mes_anterior=30; break;
           			case 8:     $dias_mes_anterior=31; break;
           			case 9:     $dias_mes_anterior=31; break;
           			case 10:     $dias_mes_anterior=30; break;
           			case 11:     $dias_mes_anterior=31; break;
           			case 12:     $dias_mes_anterior=30; break;
   				 }
				
				if ($form1[1]==2 && $form1[2]>15 && $form1[2]<30){
					$dias=$dias + $dias_mes_anterior + 1;
				}else{
					$dias=$dias + $dias_mes_anterior;
				}

			}
			if ($meses < 0){
    				--$edad;
    				$meses=$meses + 12;
			}
			 
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
				<h2 class="title">Registro de Pacientes</h2>
				<div style="clear: both;">&nbsp;</div>
				<div align="center" class="entry">
				<form name="fe" action="" method="post">
				<center>
				<table >
				<tr>
                                        <td><b>DNI</b></td>
					<td COLSPAN=3><input maxlength="8" type="text" name="dni_pac" size="25" required /></td>
                                </tr>
				<tr>
                                        <td><b>Historia Clinica</b></td>
					<td COLSPAN=3><input type="text" name="his_clinica" size="25"  onKeyUp="this.value=this.value.toUpperCase();" required /></td>
                                </tr>
				<tr>
                                        <td ><b>Nombre</b></td>
                                        <td COLSPAN=3><input type="text" name="nom_pac" size="25" onKeyUp="this.value=this.value.toUpperCase();"  required /></td>
                                </tr>
                                <tr>
                                        <td><b>Apellido Paterno</b></td>
                                        <td COLSPAN=3><input type="text" name="pat_pac" size="25" onKeyUp="this.value=this.value.toUpperCase();"  required /></td>
                                </tr>
                                <tr>
                                        <td><b>Apellido Materno</b></td>
                                        <td COLSPAN=3><input type="text" name="mat_pac" size="25" onKeyUp="this.value=this.value.toUpperCase();" required/></td>
                                </tr>
				<tr>
                                        <td><b>Fecha de Nacimiento</b></td>
                                        <td><input type="date" name="fecnac_pac" id="fecnac_pac" size="25" required/></td>
				</tr>
				<tr>
                                        <td><b>Sexo</b></td>
                                        <td COLSPAN=3>
                                                <select name="sexo_pac" >
                                                <option value=" "> </option>
                                                <option value="M"   >M</option>
                                                <option value="F"  >F</option>
                                                </select>
                                        </td>
                                </tr>

                                <tr>
                                        <td><b>Lugar de Nacimiento</b></td>
                                        <td COLSPAN=3><input type="text" name="lugnac_pac" size="25" onKeyUp="this.value=this.value.toUpperCase();" required/></td>
                                </tr>
				<tr>
                                        <td><b>Estado Civil</b></td>
                                        <td COLSPAN=3>
                                                <select name="estcivil_pac">
                                                <option value="C" >C</option>
                                                <option value="S" >S</option>
                                                <option value="V" >V</option>
                                                <option value="D" >D</option>
                                                <option value="CN" >CN</option>
                                                </select>
                                        </td>
                                </tr>
                                <tr>
                                        <td><b>Direccion</b></td>
                                        <td COLSPAN=3><input type="text" name="domicilio_pac" size="25" onKeyUp="this.value=this.value.toUpperCase();" required/></td>
                                </tr>
                                <tr>
                                        <td><b>Referencia</b></td>
                                        <td COLSPAN=3><input type="text" name="ref_pac" size="25" onKeyUp="this.value=this.value.toUpperCase();" required/></td>
                                </tr>
				<tr>
                                        <td><b>Tipo de Seguro</b></td>
                                        <td COLSPAN=3>
                                                <select name="seguro_pac">
                                                <option value="NINGUNO"  >NINGUNO </option>
                                                <option value="SIS" >SIS</option>
                                                <option value="ESSALUD">ESSALUD</option>
                                                <option value="SOAT">SOAT</option>
                                                <option value="SANIDAD FAP">SANIDAD FAP</option>
                                                <option value="SANIDAD NAVAL">SANIDAD NAVAL</option>
                                                <option value="SANIDAD EP">SANIDAD EP</option>
                                                <option value="SANIDAD PNP">SANIDAD PNP</option>
                                                <option value="PRIVADOS">PRIVADOS</option>
                                                <option value="OTROS">OTROS</option>
                                                <option value="EXONERADO">EXONERADO</option>
                                                </select>
                                         </td>
                                </tr>
				<tr>
                                        <td><b>Telefono</b></td>
                                        <td COLSPAN=3><input maxlength="10" type="text" name="tel_pac" size="25"/></td>
                                </tr>
                                <tr>
                                        <td><b>E-mail</b></td>
                                        <td COLSPAN=3><input type="text" name="email_pac" size="25" onKeyUp="this.value=this.value.toUpperCase();"/></td>
                                </tr>


                                <tr>
                                        <td><b>Facebook</b></td>
                                        <td COLSPAN=3><input type="text" name="face_pac" size="25" onKeyUp="this.value=this.value.toUpperCase();" /></td>
                                </tr>
                                <tr>
                                        <td><b>Establecimiento</b></td>
                                        <td COLSPAN=3><input type="text" name="nombre_est" size="25" onKeyUp="this.value=this.value.toUpperCase();" required/></td>
                                </tr>
				<tr>
                                        <td><b>Barrio</b></td>
                                        <td COLSPAN=3>
                                                <select name="barrio_pac">
                                                <option value="NINGUNO" >NINGUNO</option>
                                                <option value="BARRIO I">BARRIO I</option>
                                                <option value="BARRIO II">BARRIO II</option>
                                                <option value="BARRIO III">BARRIO III</option>
                                                <option value="BARRIO IV">BARRIO IV</option>
                                                <option value="BARRIO V-YAULI">BARRIO V-YAULI</option>
                                                <option value="BELLA VISTA">BELLA VISTA</option>
                                                <option value="VISTA ALEGRE">VISTA ALEGRE</option>
                                                <option value="POR VENIR">POR VENIR</option>
                                                <option value="COILLOR">COILLOR</option>
                                                </select>
                                         </td>
                                </tr>
				
				
				</center>
						<tr align="center">
                                                </tr>
                                                <tr align="center" ><td colspan="4">
                                                <input type="submit" name="btn1"value="Agregar"/></td></tr>
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
					<h2>Mantenimiento</h2>					
					<ul>
						<li><a href="buscar.php">Buscar Pacientes</a></li>
						<li><a href="actualizar.php">actualizar Pacientes</a></li>
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
		<p><a href="#">ANAMSYS</a>.</p>
	</div>
	<!-- end #footer -->
</body>
</html>
