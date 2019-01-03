<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>plantilla</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
  </head>
  <body>

  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top bg-light">
    <!--div class="container"!-->
      <a class="navbar-brand" href="../index.html">anamsys</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="../susan1/sal_vista/nosotros.php">Nosotros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../susan1/sal_vista/servicios.php">Servicios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../susan1/sal_vista/contacto.php">Contacto</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../susan1/sal_vista/registro.php">Crear cuenta</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../susan1/sal_vista/login.php">Login</a>
          </li>
        </ul>
      </div>
    <!--/div!-->
  </nav>
    <div class="container">
      <div class="row">
              <div class="col-12">
                <h1 class="page-header">Formulario
                    <small>de registro de datos del personal de salud</small>
                </h1>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="../index.html">Inicio</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Registro de personal</li>
                </ol>
              </div>
      </div>

      <div class="row">
          <div class="col-2">

          </div>
          <div class="col-8">
            <form action="../sal_controladores/crear.php" method="post" class="form-horizontal">
                <div class="row form-group has-success has-feedback">
                    <label class="control-label col-3">DNI:</label>
                    <div class="col-9">
                      <input class="form-control input-sm" maxlength="8" name="dni_per" type="text" placeholder="DNI" required>
                      <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
                      <span id="inputSuccess2Status" class="sr-only">(success)</span>
                    </div>
                </div>

                <div class="row form-group has-success has-feedback">
                  <label class="control-label col-3">Nombre(s):</label>
                  <div class="col-9">
                    <input class="form-control input-sm" name="nom_per" type="text" placeholder="Nombre" onKeyUp="this.value=this.value.toUpperCase();" aria-describedby="inputSuccess2Status" required>
                    <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
                    <span id="inputSuccess2Status" class="sr-only">(success)</span>
                  </div>
                </div>

                <div class="row form-group has-success has-feedback">
                  <label class="control-label col-3">Apellido paterno:</label>
                  <div class="col-9">
                    <input class="form-control input-sm" type="text" name="pat_per" class ="pass"  placeholder="Apellido" onKeyUp="this.value=this.value.toUpperCase();"  required>
                    <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
                    <span id="inputSuccess2Status" class="sr-only">(success)</span>
                  </div>
                </div>

                <div class="row form-group has-success has-feedback">
                  <label class="control-label col-3">Apellido materno:</label>
                  <div class="col-9">
                    <input class="form-control input-sm" type="text" name="mat_per" class ="pass"  placeholder="Apellido" onKeyUp="this.value=this.value.toUpperCase();"  required>
                    <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
                    <span id="inputSuccess2Status" class="sr-only">(success)</span>
                  </div>
                </div>

                <div class="row form-group has-success has-feedback">
                  <label class="control-label col-3">Elige tu profesión:</label>
                  <div class="col-9">
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
                </div>

                <div class="row form-group has-success has-feedback">
                  <label class="control-label col-3">Email:</label>
                  <div class="col-9">
                    <input class="form-control input-sm" type="email" name="email_per" class ="pass"  placeholder="Email" onKeyUp="this.value=this.value.toUpperCase();" required>
                    <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
                    <span id="inputSuccess2Status" class="sr-only">(success)</span>
                  </div>
                </div>

                <div class="row form-group has-success has-feedback">
                  <label class="control-label col-3">Lugar de Trabajo:</label>
                  <div class="col-9">
                    <select  class="form-control input-sm" required name="nombre_est" class ="pass">
                            <option value=""> Establecimiento</option>
                            <option value="C.S. SAN AGUSTIN DE CAJAS">C.S. SAN AGUSTIN DE CAJAS</option>
                            <option value="P.S. HUALHUAS" >P.S. HUALHUAS</option>
                            <option value="P.S. COILLOR" >P.S. COILLOR</option>
                    </select>
                  </div>
                </div>

                <div class="row form-group has-success has-feedback" >
                  <label class="control-label col-3">Password:</label>
                  <div class="col-9">
                    <input class="form-control input-sm" type="password" name="pass_per" class ="pass" placeholder="password" required>
                    <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
                    <span id="inputSuccess2Status" class="sr-only">(success)</span>
                  </div>
                </div>

                <div class="row form-group has-success has-feedback">
                  <label class="control-label col-3">Estado:</label>
                  <div class="col-9">
                    <input class="form-control input-sm" type="text" readonly="readonly" name="estado_per" class="pass"  value="ACTIVO" required>
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-xs-offset-3 col-9">
                    <button class="btn btn-primary btn-xs">Crear Cuenta</button>
                  </div>
                </div>
              </form>
          </div>
          <div class="col-2">

          </div>
      </div>
    </div>


</html>
