<?php
include 'conexion.php';
class controlador extends conexion {

  private $dni, $nombre, $paterno, $materno, $profesion, $nombreest

  public function controlador(){
  	$conect = new conexion();
  	$this->conexion = $conect -> conectar();
  	$conect -> seleccion_db();
  	}

  public function registrar {

  }
}
 ?>
