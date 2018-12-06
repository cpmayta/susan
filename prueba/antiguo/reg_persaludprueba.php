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
				<h2 class="title">Registro de Personal de Salud</h2>
				<div style="clear: both;">&nbsp;</div>
				<div align="center" class="entry">
				<form name="fe" action="" method="post">
				<center>
				<table >
				<tr>
                                        <td><b>DNI</b></td>
					<td COLSPAN=3><input maxlength="8" type="text" name="dni_per" size="25" placeholder="Num. de DNI..." required /></td>
					<td><h6>*</h6></td>
                                </tr>
				<tr>
                                        <td ><b>Nombre</b></td>
                                        <td COLSPAN=3><input type="text" name="nom_per" size="25" placeholder="Nombre..." onKeyUp="this.value=this.value.toUpperCase();"  required /></td>
					<td><h6>*</h6></td>
                                </tr>
                                <tr>
                                        <td><b>Apellido Paterno</b></td>
                                        <td COLSPAN=3><input type="text" name="pat_per" size="25" placeholder="Ap. paterno..." onKeyUp="this.value=this.value.toUpperCase();"  required /></td>
					<td><h6>*</h6></td>
                                </tr>
                                <tr>
                                        <td><b>Apellido Materno</b></td>
                                        <td COLSPAN=3><input type="text" name="mat_per" size="25" placeholder="Ap. Materno..." onKeyUp="this.value=this.value.toUpperCase();" required/></td>
					<td><h6>*</h6></td>
                                </tr>
                                <tr>
                                        <td><b>Colegiatura</b></td>
                                        <td COLSPAN=3><input type="text" name="coleg_per" size="25" placeholder="Num. de colegiatura..." onKeyUp="this.value=this.value.toUpperCase();" /></td>
                                </tr>
                                <tr>
					<td><b>Profesión</b></td>	
					<td COLSPAN=3>
						<select required name="prof_per">
								<option value=""></option>
        							<option value="MEDICO GENERAL">MEDICO GENERAL</option>
							        <option value="MEDICO NEUMOLOGO">MEDICO NEUMOLOGO</option>
							        <option value="MEDICO CARDIOLOGO">MEDICO CARDIOLOGO</option>
							        <option value="MEDICO NEUROLOGO">MEDICO NEUROLOGO</option>
							        <option value="MEDICO GASTROENTEROLOGO">MEDICO GASTROENTEROLOGO</option>
							        <option value="MEDICO DERMATOLOGO">MEDICO DERMATOLOGO</option>
							        <option value="MEDICO NEFROLOGO">MEDICO NEFROLOGO</option>
							        <option value="MEDICO ONCOLOGO">MEDICO ONCOLOGO</option>
							        <option value="MEDICO PSIQUITRA">MEDICO PSIQUITRA</option>
							        <option value="MEDICO CIRUJANO GENERAL">MEDICO CIRUJANO GENERAL</option>
							        <option value="MEDICO TRAUMATOLOGO ORTOPEDISTA">MEDICO TRAUMATOLOGO ORTOPEDISTA</option>
							        <option value="MEDICO OTORRINOLARINGOLOGO">MEDICO OTORRINOLARINGOLOGO</option>
							        <option value="MEDICO OFTALMOLOGO">MEDICO OFTALMOLOGO</option>
							        <option value="MEDICO UROLOGO">MEDICO UROLOGO</option>
							        <option value="MEDICO CIRUJANO ONCOLOGO">MEDICO CIRUJANO ONCOLOGO</option>
							        <option value="MEDICO PATOLOGO">MEDICO PATOLOGO</option>
							        <option value="MEDICO OTROS CIRUGIA">MEDICO OTROS CIRUGIA</option>
							        <option value="MEDICO PEDIATRIA">MEDICO PEDIATRIA</option>
							        <option value="MEDICO GINECO-OBSTETRA">MEDICO GINECO-OBSTETRA</option>
							        <option value="MEDICO EPIDEMIOLOGO">MEDICO EPIDEMIOLOGO</option>
							        <option value="MEDICO RADIOLOGO">MEDICO RADIOLOGO</option>
							        <option value="MEDICO OTRAS ESPECIALIDADES">MEDICO OTRAS ESPECIALIDADES</option>
							        <option value="OBSTETRIZ">OBSTETRIZ</option>
							        <option value="NUTRICIONISTA">NUTRICIONISTA</option>
							        <option value="ODONTOLOGO">ODONTOLOGO</option>
							        <option value="QUIMICO FARMACEUTICO">QUIMICO FARMACEUTICO</option>
							        <option value="RADIOTERAPEUTA">RADIOTERAPEUTA</option>
							        <option value="PSICOLOGO">PSICOLOGO</option>
							        <option value="ENFERMERA(O)">ENFERMERA(O)</option>
							        <option value="TECNOLOGO MEDICO">TECNOLOGO MEDICO</option>
							        <option value="BIOLOGO">BIOLOGO</option>
							        <option value="VETERINARIO">VETERINARIO</option>
							        <option value="ASISTENTA SOCIAL">ASISTENTA SOCIAL	</option>
							        <option value="TECNICOS DE SALUD">TECNICOS DE SALUD</option>
							        <option value="TECNICAS DE ENFERMERIA">TECNICAS DE ENFERMERIA</option>
							        <option value="TECNICO DE LOBORATORIO">TECNICO DE LOBORATORIO</option>
							        <option value="TECNICO RADIOLOGO">TECNICO RADIOLOGO</option>
							        <option value="TECNICO DENTAL">TECNICO DENTAL</option>
							        <option value="TECNICO SANEAMIENTO AMBIENTAL">TECNICO SANEAMIENTO AMBIENTAL</option>
							        <option value="AUXILIARES DE SALUD">AUXILIARES DE SALUD</option>
							        <option value="OTROS TECNICOS Y AUXILIARES">OTROS TECNICOS Y AUXILIARES</option>
							        <option value="INTERNO DE MEDICINA">INTERNO DE MEDICINA</option>
							        <option value="INTERNOS NO MEDICOS">INTERNOS NO MEDICOS</option>
							        <option value="SERUMISTA MEDICO">SERUMISTA MEDICO</option>
							        <option value="SERUMISTA EFERMERA(O)">SERUMISTA EFERMERA(O)</option>
							        <option value="SERUMISTA ODONTOLOGO">SERUMISTA ODONTOLOGO</option>
							        <option value="SERUMISTA OBSTETRIZ">SERUMISTA OBSTETRIZ</option>
							        <option value="SERUMISTA SERVICIO SOCIAL">SERUMISTA SERVICIO SOCIAL</option>
							        <option value="SERUMISTA PSICOLOGO">SERUMISTA PSICOLOGO</option>
							        <option value="MEDICO RESIDENTE">MEDICO RESIDENTE</option>
							        <option value="AGENTE COMUNITARIO">AGENTE COMUNITARIO</option>
							        <option value="ESTADISTICO">ESTADISTICO</option>
						</select>		
					</td>	
					<td><h6>*</h6></td>
                                </tr>
                                <tr>
                                        <td><b>Condición</b></td>
					<td COLSPAN=3>
                                                <select required name="condi_per" >
                                                <option value=" "> </option>
                                                <option value="NOMBRADO(A)">NOMBRADO(A)</option>
                                                <option value="CONTRATADO(A)" >CONTRATADO(A)</option>
						<option value="SERUM" >SERUM</option>
						<option value="RESIDENTE" >RESIDENTE</option>
						<option value="INTERNO(A)" >INTERNO(A)</option>
						<option value="ALUMNO(A)" >ALUMNO(A)</option>
						<option value="AGENTE COMUNITARIO" >AGENTE COMUNITARIO</option>
						<option value="DESTACADO" >DESTACADO</option>
						<option value="OTROS" >OTROS</option>
                                                </select>
                                        </td>
					<td><h6>*</h6></td>
                                </tr>

                                <tr>
                                        <td><b>E-mail</b></td>
                                        <td COLSPAN=3><input type="email" name="email_per" size="25" placeholder="Email@..." onKeyUp="this.value=this.value.toUpperCase(); required"/></td>
					<td><h6>*</h6></td>
                                </tr>

				<tr>
                                        <td><b>Facebook</b></td>
                                        <td COLSPAN=3><input type="text" name="face_per" size="25" placeholder="mi facebook..." onKeyUp="this.value=this.value.toUpperCase();" /></td>
                                </tr>
                                <tr>
                                        <td><b>Dirección</b></td>
                                        <td COLSPAN=3><input type="text" name="dir_per" size="25" placeholder="Dirección..." onKeyUp="this.value=this.value.toUpperCase();" /></td>
					<td><h6>*</h6></td>
                                </tr>
				<tr>
                                        <td><b>Teléfono</b></td>
                                        <td COLSPAN=3><input type="text" name="tel_per" size="25" placeholder="Teléfono..." onKeyUp="this.value=this.value.toUpperCase();" required /></td>
					<td><h6>*</h6></td>
                                </tr>
				<tr>
                                        <td><b>Encargatura</b></td>
                                        <td COLSPAN=3><input type="text" name="enc_per" size="25" placeholder="Qué cargo tiene?..." onKeyUp="this.value=this.value.toUpperCase();" required /></td>
					<td><h6>*</h6></td>
                                </tr>
				<tr>
                                        <td><b>Fecha de Inicio del Contrato</b></td>
                                        <td COLSPAN=3><input type="date" name="fecin_per" size="25" /></td>
					<td><h6>*</h6></td>
                                </tr>
				<tr>
                                        <td><b>Fecha de Baja de Contrato</b></td>
                                        <td COLSPAN=3><input type="date" name="fecba_per" size="25"  /></td>
					<td><h6>*</h6></td>
                                </tr>
				<tr>
					 <td><b>Establecimiento</b></td>
                                        <td COLSPAN=3>
                                                <select required name="nombre_est">
						<option value=""></option>
                                                <option value="C.S. SAN AGUSTIN DE CAJAS">C.S. SAN AGUSTIN DE CAJAS</option>
                                                <option value="P.S. HUALHUAS" >P.S. HUALHUAS</option>
                                                <option value="P.S. COILLOR" >P.S. COILLOR</option>
                                                </select>
                                        </td>
                                        <td><h6>*</h6></td>	
				</tr>
                                <tr>
                                        <td><b>Password</b></td>
                                        <td COLSPAN=3><input type="password" name="pass_per" size="25" placeholder="password..." onKeyUp="this.value=this.value.toUpperCase();" required/></td>
					<td><h6>*</h6></td>
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
					<h2></h2>					
					<ul>
						<li><a href="recomendaciones.html"><font color="#FFFFFF">Recomendaciones</font></a></li>
						<li><a href="#"><font color="#FFFFFF">Iniciar Sesión</font></a></li>
                                                <li><a href="reg_persalud.php"><font color="#FFFFFF">Registrarse</font></a></li>
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
		
	<!-- end #footer -->
</body>

	</div>
</html>
<?php

//echo $_POST['fecnac_pac'];

 if(isset($_POST["btn1"])){
         $btn=$_POST["btn1"];
         //$fecnac_pac = $_POST["fecnac_pac"];
        if($btn=="Agregar"){
                require('conexion.php');
        $dni            = $_POST['dni_per'];
        $nombre         = $_POST['nom_per'];
        $paterno        = $_POST['pat_per'];
        $materno        = $_POST['mat_per'];
        $colegiatura    = $_POST['coleg_per'];
        $profesion      = $_POST['prof_per'];
        $condicion      = $_POST['condi_per'];
        $email          = $_POST['email_per'];
        $face           = $_POST['face_per'];
        $direccion      = $_POST['dir_per'];
        $telefono       = $_POST['tel_per'];
        $encargatura    = $_POST['enc_per'];
        $fechainicio    = $_POST['fecin_per'];
        $fechabaja      = $_POST['fecba_per'];
        $establecimiento   = $_POST['nombre_est'];
        $password       =$_POST['pass_per'];

                $query="INSERT INTO personal (dni_per,nom_per,pat_per,mat_per,coleg_per,prof_per,condi_per,email_per,face_per,dir_per,tel_per,enc_per,fecin_per,fecba_per,nombre_est,pass_per) VALUES ('$dni','$nombre','$paterno','$materno','$colegiatura','$profesion','$condicion','$email','$face','$direccion','$telefono','$encargatura','$fechainicio','$fechabaja','$establecimiento','$password')";

        $resultado=$mysqli->query($query);

        if ($resultado){
        echo"<script>alert('Personal de Salud Registrado Click en Aceptar por Favor')</script>";
        }else{
        echo"<script>alert('Personal de Salud ya está registrado vuelva a intentarlo por favor')</script>";
        }
                }

                }




?>