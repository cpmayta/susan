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
                    <div class=" alert alert-danger" >
                      <a href="index.php" class="alert-link">¡Error! El Usuario No Existe o no está Registrado si el problema persiste comuniquese con el Administrador.</a>
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