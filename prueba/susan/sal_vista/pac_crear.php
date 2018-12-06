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
    			<!--ul class="nav navbar-nav">
      				
      				<!--li><a href="#">Servicios</a></li>
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
              <li role="Presentation"><a href="pac_buscar.php">Buscar Paciente</a></li>
            </ul>
          </div>
          <div class="col-md-8">
          <div class="row">
            <div class="col-xs-12">
                <h1 class="page-header">Formulario
                    <small>de registro de datos de pacientes</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="per_directorio.php">Directorio</a>
                    </li>
                    <li class="active">Formulario de Registro</li>
                </ol>
            </div>
          </div>

            <form action="../sal_controladores/registrar_pac.php" method="post" class="form-horizontal">
              
                <div class="form-group has-success has-feedback">
                <label class="control-label col-xs-3">DNI:</label>
                <div class="col-xs-9">
                    <input class="form-control input-sm" name="dni_pac" type="text" placeholder="DNI" required>
                    <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
                    <span id="inputSuccess2Status" class="sr-only">(success)</span>
                </div>
                </div>


                <div class="form-group has-success has-feedback">
                <label class="control-label col-xs-3">Historia Clínica:</label>
                <div class="col-xs-9">
                    <input class="form-control input-sm" name="his_clinica" type="text" onKeyUp="this.value=this.value.toUpperCase();" placeholder="Historia Clínica" required>
                    <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
                    <span id="inputSuccess2Status" class="sr-only">(success)</span>
                </div>
                </div>

                <div class="form-group has-success has-feedback">
                <label class="control-label col-xs-3">Nombre(s):</label>
                <div class="col-xs-9">
                    <input class="form-control input-sm" name="nom_pac" type="text" onKeyUp="this.value=this.value.toUpperCase();" placeholder="Nombres" required>
                    <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
                    <span id="inputSuccess2Status" class="sr-only">(success)</span>
                </div>
                </div>

                <div class="form-group has-success has-feedback">
                <label class="control-label col-xs-3">Apellido Paterno:</label>
                <div class="col-xs-9">
                    <input class="form-control input-sm" name="pat_pac" type="text" onKeyUp="this.value=this.value.toUpperCase();" placeholder="Apellido" required>
                    <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
                    <span id="inputSuccess2Status" class="sr-only">(success)</span>
                </div>
                </div>

                <div class="form-group has-success has-feedback">
                <label class="control-label col-xs-3">Apellido Materno:</label>
                <div class="col-xs-9">
                    <input class="form-control input-sm" name="mat_pac" type="text" onKeyUp="this.value=this.value.toUpperCase();" placeholder="Apellido" required>
                    <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
                    <span id="inputSuccess2Status" class="sr-only">(success)</span>
                </div>
                </div>

                <div class="form-group has-success has-feedback">
                <label class="control-label col-xs-3">Fecha de Nacimiento:</label>
                <div class="col-xs-9">
                    <input class="form-control input-sm" name="fecnac_pac" type="date" required>
                    <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
                    <span id="inputSuccess2Status" class="sr-only">(success)</span>
                </div>
                </div>

                <div class="form-group has-success has-feedback">
                      <label class="control-label col-xs-3">Género:</label>
                      <div class="col-xs-9">
                        <select  class="form-control input-sm" required name="sexo_pac" class ="pass">
                                <option value="">Género</option>
                                <option value="M">M</option>
                                <option value="F" >F</option>
                        </select>
                      </div>         
                </div>

                <div class="form-group has-success has-feedback">
                <label class="control-label col-xs-3">Lugar de Nacimiento:</label>
                <div class="col-xs-9">
                    <input class="form-control input-sm" name="lugnac_pac" type="text" onKeyUp="this.value=this.value.toUpperCase();" placeholder="Lugar de nacimiento" required>
                    <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
                    <span id="inputSuccess2Status" class="sr-only">(success)</span>
                </div>
                </div>

                <div class="form-group has-success has-feedback">
                      <label class="control-label col-xs-3">Estado Civil:</label>
                      <div class="col-xs-9">
                        <select  class="form-control input-sm" required name="estcivil_pac" class ="pass">
                                <option value="">Estado Civil</option>
                                <option value="C">C</option>
                                <option value="S">S</option>
                                <option value="V">V</option>
                                <option value="D">D</option>
                                <option value="CN">CN</option>
                        </select>
                      </div>         
                </div>

                <div class="form-group has-success has-feedback">
                <label class="control-label col-xs-3">Dirección:</label>
                <div class="col-xs-9">
                    <input class="form-control input-sm" name="domicilio_pac" type="text" onKeyUp="this.value=this.value.toUpperCase();" placeholder="Dirección" required>
                    <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
                    <span id="inputSuccess2Status" class="sr-only">(success)</span>
                </div>
                </div>

                <div class="form-group has-success has-feedback">
                <label class="control-label col-xs-3">Referencia:</label>
                <div class="col-xs-9">
                    <input class="form-control input-sm" name="ref_pac" type="text" onKeyUp="this.value=this.value.toUpperCase();" placeholder="Referencia" required>
                    <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
                    <span id="inputSuccess2Status" class="sr-only">(success)</span>
                </div>
                </div>

                <div class="form-group has-success has-feedback">
                      <label class="control-label col-xs-3">Tipo de Seguro:</label>
                      <div class="col-xs-9">
                        <select  class="form-control input-sm" required name="seguro_pac" class ="pass">
                                <option value="">Tipo de Seguro</option>
                                <option value="SIS">SIS</option>
                                <option value="ESSALUD" >ESSALUD</option>
                                <option value="SOAT">SOAT</option>
                                <option value="SANIDAD FAP" >SANIDAD FAP</option>
                                <option value="SANIDAD NAVAL" >SANIDAD NAVAL</option>
                                <option value="SANIDAD EP">SANIDAD EP</option>
                                <option value="SANIDAD PNP" >SANIDAD PNP</option>
                                <option value="PRIVADOS">PRIVADOS</option>
                                <option value="OTROS" >OTROS</option>
                                <option value="EXONERADO" >EXONERADO</option>

                        </select>
                      </div>         
                </div>

                <div class="form-group has-success has-feedback">
                <label class="control-label col-xs-3">Número de Teléfono:</label>
                <div class="col-xs-9">
                    <input class="form-control input-sm" name="tel_pac" type="text" placeholder="Número de Telefono">
                    <!--span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
                    <span id="inputSuccess2Status" class="sr-only">(success)</span-->
                </div>
                </div>

                <div class="form-group has-success has-feedback">
                <label class="control-label col-xs-3">Email:</label>
                <div class="col-xs-9">
                    <input class="form-control input-sm" name="email_pac" type="text" onKeyUp="this.value=this.value.toUpperCase();" placeholder="Email">
                    <!--span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
                    <span id="inputSuccess2Status" class="sr-only">(success)</span-->
                </div>
                </div>
                
                <div class="form-group has-success has-feedback">
                <label class="control-label col-xs-3">Facebook:</label>
                <div class="col-xs-9">
                    <input class="form-control input-sm" name="face_pac" type="text" onKeyUp="this.value=this.value.toUpperCase();" placeholder="Facebook...">
                    <!--span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
                    <span id="inputSuccess2Status" class="sr-only">(success)</span-->
                </div>
                </div>

                <div class="form-group has-success has-feedback">
                      <label class="control-label col-xs-3">Establecimiento:</label>
                      <div class="col-xs-9">
                        <select  class="form-control input-sm" required name="nombre_est" class ="pass">
                                <option value="">Establecimiento</option>
                                <option value="C.S. SAN AGUSTIN DE CAJAS">C.S. SAN AGUSTIN DE CAJAS</option>
                        </select>
                      </div>         
                </div>


                <div class="form-group has-success has-feedback">
                      <label class="control-label col-xs-3">Barrio:</label>
                      <div class="col-xs-9">
                        <select  class="form-control input-sm" required name="barrio_pac" class ="pass">
                                <option value="">Barrio</option>
                                <option value="NINGUNO">NINGUNO</option>
                                <option value="BARRIO I" >BARRIO I</option>
                                <option value="BARRIO II">BARRIO II</option>
                                <option value="BARRIO III" >BARRIO III</option>
                                <option value="BARRIO IV" >BARRIO IV</option>
                                <option value="BARRIO V-YAULI">BARRIO V-YAULI</option>
                                <option value="BELLA VISTA" >BELLAVISTA</option>
                                <option value="VISTA ALEGRE">VISTA ALEGRE</option>
                                <option value="POR VENIR" >PORVENIR</option>
                                <option value="COILLOR" >COILLOR</option>

                        </select>
                      </div>         
                </div>


                <div class="form-group">
                    <div class="col-xs-offset-3 col-xs-9">
                      <button class="btn btn-primary btn-xs">Registrar Paciente</button>
                    </div>
                </div>


            </form>
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