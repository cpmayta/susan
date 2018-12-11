<?php
include 'conexion.php';
class controlador extends conexion {

private $dni, $nombre, $paterno, $materno, $profesion, $nombreest;

public function controlador(){
  	$conect = new conexion();
  	$this->conexion = $conect -> conectar();
  	$conect -> seleccion_db();
	}

  public function registrar($dni, $nom, $pat, $mat, $prof, $est, $pass, $estado) {
    $this->dni          = $dni;
    $this->nombre       = $nom;
    $this->paterno           = $pat;
    $this->materno           = $mat;
    $this->profesion        = $prof;
    $this->nombreest       = $est;
    $this->password         = $pass;
    $this->estado       = $estado;

    $this->verificar = mysql_query("SELECT dni_per FROM personal where dni_per = '".$this->dni."' " ,  $this->conexion );
    if($this->row = mysql_fetch_array($this->verificar)){
      echo "<h1>EL USUARIO QUE ACABA DE INGRESAR YA EXISTE</h1>";
    }else if(!$this->row = mysql_fetch_array($this->verificar)){
      mysql_query("INSERT INTO personal(dni_per, nom_per, pat_per, mat_per, prof_per, nombre_est, pass_per, estado_per) values('$this->dni', '$this->nombre' , '$this->paterno', '$this->materno', '$this->profesion', '$this->nombreest', '$this->password','$this->estado')", $this->conexion );
      header("location: ../index.html");
    }

  }
}
 ?>
