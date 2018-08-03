<?php

class manejologout{
  private $conexion;
  public function __construct ($conexion) {

$this->setConexion($conexion);

  }

  public function setConexion(PDO $conexion){
    $this->conexion=$conexion;
  }

public function logearusuario(){
$logueadofalse = "0";
$logueadotrue = "1";

  $sql="UPDATE usuarios set logeado='$logueadofalse' WHERE logeado LIKE '%$logueadotrue%'";
  $this->conexion->exec($sql);
}


}


 ?>
