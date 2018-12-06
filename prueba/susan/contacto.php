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
    			<a class="navbar-brand" href="#">ANAMSYS</a>

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


  <br>
  <div class="container">
    <div class="row">

            <div class="col-lg-12">
                <h1 class="page-header">Sobre
                    <small>Contacto</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Inicio</a>
                    </li>
                    <li class="active">Contacto</li>
                </ol>
            </div>
    </div>
    <div class="row">
            <!-- Map Column -->
            <div class="col-md-8">
                <!-- Embedded Google Map -->
                <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3901.570829430672!2d-75.2236582854149!3d-12.073022291449826!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x910e965cd989ff53%3A0x9fb39f3637ba8abb!2sHospital+Regional+Docente+Cl%C3%ADnico+Quir%C3%BArgico+%22Daniel+Alcides+Carri%C3%B3n%22!5e0!3m2!1ses-419!2spe!4v1474862390019"></iframe>
                <!--iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3901.570829430672!2d-75.2236582854149!3d-12.073022291449826!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x910e965cd989ff53%3A0x9fb39f3637ba8abb!2sHospital+Regional+Docente+Cl%C3%ADnico+Quir%C3%BArgico+%22Daniel+Alcides+Carri%C3%B3n%22!5e0!3m2!1ses-419!2spe!4v1474862390019" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe-->
            </div>
            <!-- Contact Details Column -->
            <div class="col-md-4">
                <h3>Detalles de Contacto</h3>
                <p>
                    Jr. Callao #420 Alt. Hospital Carrión<br>Huancayo - Perú<br>
                </p>
                <p><i class="fa fa-phone"></i> 
                    <abbr title="Phone">Cel</abbr>: #963547355</p>
                <p><i class="fa fa-envelope-o"></i> 
                    <abbr title="Email">E 1</abbr>: <a href="mailto:cpmayta@anamsys.com">cpmayta@anamsys.com</a>
                </p>
                <p><i class="fa fa-envelope-o"></i> 
                    <abbr title="Email">E 2</abbr>: <a href="mailto:cpmayta@gmail.com">cpmayta@gmail.com</a>
                </p>
                <p><i class="fa fa-clock-o"></i> 
                    <abbr title="Hours">H</abbr>: Lunes - Viernes: 2:30 PM a 5:30 PM</p>
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