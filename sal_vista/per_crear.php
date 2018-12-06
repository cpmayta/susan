<!DOCTYPE html>

<html>
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Anamsys</title>
  <link href="/css/bootstrap.min.css" rel="stylesheet" media="screen">
  <link rel="stylesheet" href="/css/estilosh.css">
</head>

<body>

<div class="container-fluid">
 
 
      <div >
        <nav class="navbar navbar-inverse" role="navigation">
  <!-- El logotipo y el icono que despliega el menú se agrupan
       para mostrarlos mejor en los dispositivos móviles -->
        <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse"
              data-target=".navbar-ex1-collapse">
            <span class="sr-only">Desplegar navegación</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
          <a class="navbar-brand" href="">ANAMSYS</a>

      </div>
 
  <!-- Agrupar los enlaces de navegación, los formularios y cualquier
       otro elemento que se pueda ocultar al minimizar la barra -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav">
              <li class="active"><a href="../index.php">Inicio</a></li>
              <li><a href="/contacto.php">Contacto</a></li>
              <li><a href="#">Establecimientos</a></li>
          </ul>
 
          <form class="navbar-form navbar-left" action="../sal_controladores/login.php" method="post">
              <div class="form-group">
                <input class="form-control input-sm" type="text"  name="dni_per" placeholder="Usuario">
                <input class="form-control input-sm" type="password"  name="pass_per" placeholder="Contraseña">
              </div>
              <button class="btn btn-primary btn-sm" type="submit">Inciar Sesion</button>
          </form>
 
        <ul class="nav navbar-nav navbar-right">
              <li><a href="../sal_vista/per_crear.php">Crear Cuenta</a></li>
              
        </ul>
          </div>
        </nav>
      </div>
</div>

  <div class="container">
    <div class="row">

            <div class="col-xs-12">
                <h1 class="page-header">Formulario
                    <small>de registro de datos del personal de salud</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="../index.php">Inicio</a>
                    </li>
                    <li class="active">Formulario de Registro</li>
                </ol>
            </div>
    </div>
    <div class="row">

            <form action="../sal_controladores/crear.php" method="post" class="form-horizontal">
        
        <div class="form-group has-success has-feedback">

            <label class="control-label col-xs-3">DNI:</label>
            <div class="col-xs-9">
              <input class="form-control input-sm" maxlength="8" name="dni_per" type="text" placeholder="DNI" required>
              <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
              <span id="inputSuccess2Status" class="sr-only">(success)</span>
            </div>

        </div>
        
        <div class="form-group has-success has-feedback">

          <label class="control-label col-xs-3">Nombre(s):</label>
          <div class="col-xs-9">
            <input class="form-control input-sm" name="nom_per" type="text" placeholder="Nombre" onKeyUp="this.value=this.value.toUpperCase();" aria-describedby="inputSuccess2Status" required>
            <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
            <span id="inputSuccess2Status" class="sr-only">(success)</span>
          </div>

        </div>
        
        <div class="form-group has-success has-feedback">
          <label class="control-label col-xs-3">Apellido paterno:</label>
          <div class="col-xs-9">
            <input class="form-control input-sm" type="text" name="pat_per" class ="pass"  placeholder="Apellido" onKeyUp="this.value=this.value.toUpperCase();"  required>
            <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
            <span id="inputSuccess2Status" class="sr-only">(success)</span>
          </div>
        </div>
        
        <div class="form-group has-success has-feedback">
          <label class="control-label col-xs-3">Apellido materno:</label>
          <div class="col-xs-9">
            <input class="form-control input-sm" type="text" name="mat_per" class ="pass"  placeholder="Apellido" onKeyUp="this.value=this.value.toUpperCase();"  required>
            <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
            <span id="inputSuccess2Status" class="sr-only">(success)</span>
          </div>
        </div>
        
        <div class="form-group has-success has-feedback">
          <label class="control-label col-xs-3">Número de colegiatura:</label>
          <div class="col-xs-9">
            <input class="form-control input-sm" type="text" name="coleg_per" class ="pass"  placeholder="Colegiatura" onKeyUp="this.value=this.value.toUpperCase();">
          </div>
        </div>
        
        <div class="form-group has-success has-feedback">
          <label class="control-label col-xs-3">Elige tu profesión:</label>
          <div class="col-xs-3">
            <select class="form-control input-sm" required name="prof_per" class ="pass">
                      <option value=""> Profesión</option>
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
                      <option value="ASISTENTA SOCIAL">ASISTENTA SOCIAL </option>
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
          </div>
          <label class="control-label col-xs-3">Condición de trabajo:</label>
          <div class="col-xs-3">
            <select class="form-control input-sm" required name="condi_per" class ="pass" >
                        <option value=" "> Condición</option>
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
          </div>
        </div>
        
        
        <div class="form-group has-success has-feedback">
          <label class="control-label col-xs-3">Email:</label>
          <div class="col-xs-9">
            <input class="form-control input-sm" type="email" name="email_per" class ="pass"  placeholder="Email" onKeyUp="this.value=this.value.toUpperCase();" required>
            <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
            <span id="inputSuccess2Status" class="sr-only">(success)</span>
          </div>
          
        </div>
        
        <div class="form-group has-success has-feedback">
          <label class="control-label col-xs-3">Facebook:</label>
          <div class="col-xs-9">
            <input class="form-control input-sm" type="text" name="face_per" class ="pass"  placeholder="Facebook" onKeyUp="this.value=this.value.toUpperCase();">
          </div>
          
        </div>
        
        <div class="form-group has-success has-feedback">
          <label class="control-label col-xs-3">Dirección:</label>
          <div class="col-xs-9">
            <input class="form-control input-sm" type="text" name="dir_per" class ="pass"  placeholder="Dirección" onKeyUp="this.value=this.value.toUpperCase();">
          </div>
          
        </div>
        
        <div class="form-group has-success has-feedback">
          <label class="control-label col-xs-3">Número de Teléfono:</label>
          <div class="col-xs-9">
            <input class="form-control input-sm" type="text" name="tel_per" class ="pass"  placeholder="Teléfono" onKeyUp="this.value=this.value.toUpperCase();" required>
            <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
            <span id="inputSuccess2Status" class="sr-only">(success)</span>
          </div>
          
        </div>
        
        <div class="form-group has-success has-feedback">
          <label class="control-label col-xs-3">Cargo:</label>
          <div class="col-xs-9">
            <input class="form-control input-sm" type="text" name="enc_per" class ="pass"  placeholder="Qué cargo tiene?" onKeyUp="this.value=this.value.toUpperCase();" required>
            <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
            <span id="inputSuccess2Status" class="sr-only">(success)</span>
          </div>
          
        </div>
        
        <div class="form-group has-success has-feedback">
          <label class="control-label col-xs-3">Fecha de Inicio de Contrato:</label>
          <div class="col-xs-3">
            <input class="form-control input-sm" type="date" name="fecin_per" class ="pass" >
            <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
            <span id="inputSuccess2Status" class="sr-only">(success)</span>
          </div>
          
          <label class="control-label col-xs-3">Fecha Final de Contrato:</label>
          <div class="col-xs-3">
            <input class="form-control" type="date" name="fecba_per" class ="pass" >
            <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
            <span id="inputSuccess2Status" class="sr-only">(success)</span>
          </div>
        </div>
        
        <!--div class="form-group has-success has-feedback">
          
          <div class="col-md-12">
            <input class="form-control" type="date" name="fecba_per" class ="pass" >
            <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
            <span id="inputSuccess2Status" class="sr-only">(success)</span>
          </div>
        </div-->
        
        <div class="form-group has-success has-feedback">
          <label class="control-label col-xs-3">Lugar de Trabajo:</label>
          <div class="col-xs-9">
            <select  class="form-control input-sm" required name="nombre_est" class ="pass">
                    <option value=""> Establecimiento</option>
                    <option value="C.S. SAN AGUSTIN DE CAJAS">C.S. SAN AGUSTIN DE CAJAS</option>
                    <option value="P.S. HUALHUAS" >P.S. HUALHUAS</option>
                    <option value="P.S. COILLOR" >P.S. COILLOR</option>
            </select>
          </div>
          
        </div>
        
        <!--div class="form-group has-success has-feedback" >
          <label class="control-label col-xs-3">Password:</label>
          <div class="col-xs-9">
            <input class="form-control input-sm" type="password" name="pass_per" class ="pass" placeholder="password" required>
            <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
            <span id="inputSuccess2Status" class="sr-only">(success)</span>
          </div>
          
        </div>

        <div class="form-group has-success has-feedback">
          <label class="control-label col-xs-3">Verificar Password:</label>
          <div class="col-xs-9">
            <input class="form-control input-sm" type="password" name="pass2" class ="pass" size="25" placeholder="verificar password" required/>
            <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
            <span id="inputSuccess2Status" class="sr-only">(success)</span>
          </div>
        </div-->
        
        <div class="form-group has-success has-feedback">
          <label class="control-label col-xs-3">Estado:</label>
          <div class="col-xs-9">
            <input class="form-control input-sm" type="text" readonly="readonly" name="estado_per" class="pass"  value="ACTIVO" required>
            
          </div>
          
        </div>
        
        <div class="form-group">
          <div class="col-xs-offset-3 col-xs-9">
            <button class="btn btn-primary btn-xs">Crear Cuenta</button>
          </div>
        </div>

          
      </form>

    </div>
      
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!--script src="js/jquery.js"></script-->
  <script src="js/bootstrap.min.js"></script>
</body>
</html>