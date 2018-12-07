<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.html">S.U.S.A.N.</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="about.html">Nosotros</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="services.html">Servicios</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contacto</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Portafolio
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                <a class="dropdown-item" href="portfolio-1-col.html">1 Column Portfolio</a>
                <a class="dropdown-item" href="portfolio-2-col.html">2 Column Portfolio</a>
                <a class="dropdown-item" href="portfolio-3-col.html">3 Column Portfolio</a>
                <a class="dropdown-item" href="portfolio-4-col.html">4 Column Portfolio</a>
                <a class="dropdown-item" href="portfolio-item.html">Single Portfolio Item</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Blog
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                <a class="dropdown-item" href="blog-home-1.html">Blog Home 1</a>
                <a class="dropdown-item" href="blog-home-2.html">Blog Home 2</a>
                <a class="dropdown-item" href="blog-post.html">Blog Post</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Other Pages
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                <a class="dropdown-item" href="full-width.html">Full Width Page</a>
                <a class="dropdown-item" href="sidebar.html">Sidebar Page</a>
                <a class="dropdown-item" href="faq.html">FAQ</a>
                <a class="dropdown-item" href="404.html">404</a>
                <a class="dropdown-item" href="pricing.html">Pricing Table</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php">Registro</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Services
        <small>Subheading</small>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.html">Inicio</a>
        </li>
        <li class="breadcrumb-item active">Registro</li>
      </ol>

      <!-- Image Header -->
      <!--img class="img-fluid rounded mb-4" src="http://placehold.it/1200x300" alt=""-->
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
      <!-- Marketing Icons Section -->
      <div class="row">
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header">Card Title</h4>
            <div class="card-body">
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Learn More</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header">Card Title</h4>
            <div class="card-body">
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis ipsam eos, nam perspiciatis natus commodi similique totam consectetur praesentium molestiae atque exercitationem ut consequuntur, sed eveniet, magni nostrum sint fuga.</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Learn More</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header">Card Title</h4>
            <div class="card-body">
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Learn More</a>
            </div>
          </div>
        </div>
      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
