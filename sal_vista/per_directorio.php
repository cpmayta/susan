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
  			<div class="collapse navbar-collapse navbar-ex1-collapse">

        				<p  class="navbar-text">BIENVENIDO AL
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

        </div>
          </nav>
      </div>
</div>

<div class="container">

        <div class="row">
           <div class="col-md-4">
            <ul class="nav nav-pills nav-stacked">
              <li role="Presentation" class="active"><a href="../sal_vista/per_directorio.php">Directorio Personal de Salud</a></li>
              <li role="Presentation"><a href="pac_buscar.php">Buscar Pacientes</a></li>
              <li role="Presentation"><a href="pac_crear.php">Registrar Pacientes</a></li>
            </ul>
            <!--prueba-->
              <?php
              //  mysql_connect("localhost", "root", "Redhat@2015") or die(mysql_error());
              //  mysql_select_db("orion") or die(mysql_error());
              //  $data=mysql_query("SELECT * FROM paciente");
              //  $num_filas=mysql_num_rows($data);
              //  echo "$num_filas Registros"
               ?>
            <!--termino prueba-->

          </div>
          <div class="col-md-8">
            <div class="table-responsive">
              <?php
              include ("../sal_modelo/controlador.php");
              $controlador = new controlador();
              $controlador->directorio();
              ?>
            </div>
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
