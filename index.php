<!DOCTYPE html>
<?php
session_start();
session_destroy();
?>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Anamsys</title>
	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
  <link rel="stylesheet" href="/css/estilosh.css">
</head>

<body>

<div class="container-fluid">
 
 
      <div class="col-md-12">
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
    			<a class="navbar-brand" href="anamsys.php">ANAMSYS</a>

  		</div>
 
  <!-- Agrupar los enlaces de navegación, los formularios y cualquier
       otro elemento que se pueda ocultar al minimizar la barra -->
  			<div class="collapse navbar-collapse navbar-ex1-collapse">
    			<ul class="nav navbar-nav">
              
      				<li class="active"><a href="index.php">Inicio</a></li>
      				<li><a href="contacto.php">Contacto</a></li>
    			</ul>
 
    			<form class="navbar-form navbar-left" action="../sal_controladores/login.php" method="post">
      				<div class="form-group">
              <!--select  class="form-control input-sm" required name="nombre_est" class ="pass">
                                <option value="C.S. SAN AGUSTIN DE CAJAS">C.S. SAN AGUSTIN DE CAJAS</option>
              </select-->
              <select  class="form-control input-sm" required name="nombre_est" class ="pass">
                                <option value="C.S. SAN AGUSTIN DE CAJAS">C.S. SAN AGUSTIN DE CAJAS</option>
              </select>
              <select  class="form-control input-sm" required name="permiso" class ="pass">
                                <option value="USUARIO">USUARIO</option>
                                <option value="SUPERVISOR">SUPERVISOR</option>
                                <option value="ADMINISTRADOR">ADMINISTRADOR</option>
              </select>
        				<input class="form-control input-sm"  type="text"  name="dni_per" placeholder="Usuario">
                <input class="form-control input-sm" type="password"  name="pass_per" placeholder="Contraseña">
      				</div>
              <div class="form-group">
                <button class="btn btn-primary btn-sm" type="submit">Inciar Sesión</button>
              </div>
      				
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
			<div class="col-md-12">
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  					<ol class="carousel-indicators">
    					<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    					<li data-target="#carousel-example-generic" data-slide-to="1"></li>
    					<li data-target="#carousel-example-generic" data-slide-to="2"></li>
  					</ol>
  					<div class="carousel-inner" role="listbox">
    					<div class="item active">
      						<img src="/img/imagen5.jpg" alt="First slide">
      						<div class="carousel-caption">
          						<h3>Profesionales Informáticos</h3>
          						<p>Contamos con los mejores profesionales con experiencia</p>
        					</div>
    					</div>

    					<div class="item">
      						<img src="/img/imagen3.jpg" alt="Second slide">
      						<div class="carousel-caption">
          						<h3>Soporte Técnico</h3>
          						<p>Brindamos soporte técnico de computadoras con calidad, eficiencia y garantía </p>
        					</div>
    					</div>
    					<div class="item">
      						<img src="/img/imagen2.jpg" alt="Third slide">
      						<div class="carousel-caption">
          						<h3>Sistema de Salud Anamsys</h3>
          						<p>Contamos con un sistema de registro de Historias Clínicas</p>
        					</div>
    					</div>
  					</div>
  					<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    					<span class="icon-prev" aria-hidden="true"></span>
    					<span class="sr-only">Previous</span>
  					</a>
  					<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    					<span class="icon-next" aria-hidden="true"></span>
    					<span class="sr-only">Next</span>
  					</a>
				</div>
		</div>
    </div>
	</div>

  <br>

  <div class="container">
    <div class="row">
      <div class="col-md-12">
                <h2 class="page-header">Panel de Servicios</h2>
      </div>


      <div class="col-md-4 col-sm-6">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">

                        <img src="/img/servtec.jpg" class="img-responsive thumbnail center-block" alt="">
                    </div>
                    <div class="panel-body">
                        <h4>Sporte Técnico</h4>
                        <p>Instalación, configuración y Mantenimiento de Ordenadores e Impresoras.</p>
                        <a href="servicio_tecnico.php" class="btn btn-primary">Leer Mas</a>
                    </div>
                </div>
      </div>

      <div class="col-md-4 col-sm-6">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">

                        <img src="/img/infor.jpg" class="img-responsive thumbnail center-block" alt="">
                    </div>
                    <div class="panel-body">
                        <h4>Informática</h4>
                        <p>Programación de software de escritorio y aplicaciones móviles para dispositivos.</p>
                        <a href="informatica.php" class="btn btn-primary">Leer Mas</a>
                    </div>
                </div>
      </div>


      <div class="col-md-4 col-sm-6">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <img src="/img/anamsys.jpg" class="img-responsive thumbnail center-block" alt="">
                    </div>
                    <div class="panel-body">
                        <h4>Anamsys</h4>
                        <p>Administración del sistema de registros de Historias Clínicas.</p>
                        <a href="anamsys.php" class="btn btn-primary">Leer Mas</a>
                    </div>
                </div>
      </div>
    </div>
    
  </div>
   <br>
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-4">                       
                  
          </div>
          <div class="col-md-4 text-center" >                        
                        <h6>&copy; Anamsys todos los derechos reservados 2016.</h6>
          </div>
          <div class="col-md-4">                        
                   
          </div>
        </div>
      </div>
    </footer>

    
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<!--script src="js/jquery.js"></script-->
	<script src="js/bootstrap.min.js"></script>
</body>
</html>