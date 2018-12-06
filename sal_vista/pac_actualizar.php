<!DOCTYPE html>
<?php
session_start();
if(isset ($_SESSION['dni_per'])) {
?>
<html>
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Anamsys</title>
  <link href="/css/bootstrap.min.css" rel="stylesheet" media="screen">
</head>
<body>
<div class="container-fluid">
      <div>
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
        <!--div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav">
              
              <li><a href="#">Servicios</a></li>
              <li><a href="#">Establecimientos</a></li>
              <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  Menú #1 <b class="caret"></b>
              </a>
              <ul class="dropdown-menu">
                  <li><a href="#">Acción #1</a></li>
                  <li><a href="#">Acción #2</a></li>
                  <li><a href="#">Acción #3</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Acción #4</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Acción #5</a></li>
              </ul>
            </li>
          </ul-->
 
          <!--form class="navbar-form navbar-left" action="../sal_controladores/login.php" method="post">
              <div class="form-group"-->

                <p  class="navbar-text">Bievenido al C.S. San Agustín de Cajas
                <a href="#" class="navbar-link">
                  <?php
                    echo $_SESSION['nombre_est'];
                    echo " " ;
                    echo $_SESSION['nom_per'] ;
                    echo " " ;
                    echo $_SESSION['pat_per'];
                  ?>
                </a>
                </p>

              <!--/div>
          </form-->
 
        <!--ul class="nav navbar-nav navbar-right">
              <li><a href="../index.php">Cerrar Sesión</a></li-->
              <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Acciones<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="../index.php">Salir</a></li>
                    <li><a href="#">Administracion</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">Ayuda</a></li>
                  </ul>
                </li>
              </ul>
              
        </ul>
  </div>
</nav>
      </div>
</div>

<div class="container">

        <div class="row">
          <div class="col-md-8">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Formulario
                        <small>de actualización</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="pac_buscar.php">Búsqueda</a>
                        </li>
                        <li class="active">Actualización de Paciente</li>
                    </ol>
                </div>
            </div>
            <form action="../sal_controladores/pac_actualizar.php" method="post" class="form-horizontal">              
                <?php
                      include ("../sal_modelo/controlador.php");
                      $his_clinica      = $_REQUEST['his_clinica'];
                      $controlador = new controlador(); 
                      $controlador->actualizapaciente($his_clinica, $dni_pac, $nom_pac, $pat_pac, $mat_pac, $sexo_pac, $fecnac_pac, $lugnac_pac, $estcivil_pac, $domicilio_pac, $ref_pac, $seguro_pac, $tel_pac, $email_pac, $face_pac, $nombre_est, $barrio_pac);
                ?>
            </form>
          </div>
          <div class="col-md-4">
            <ul class="nav nav-pills nav-stacked">
              <li role="Presentation" class="active"><a href="../sal_vista/per_directorio.php">Directorio Personal de Salud</a></li>
              <li role="Presentation"><a href="pac_crear.php">Registrar Paciente</a></li>
              <li role="Presentation"><a href="pac_buscar.php">Buscar Paciente</a></li>
            </ul>
            
          </div>
        </div>
  
</div>

  

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!--script src="js/jquery.js"></script-->
  <script src="/js/bootstrap.min.js"></script>
</body>
</html>
<?php
}else{echo "Debes iniciar sesion antes de acceder a esta pagina"; } ?>