<?php
include_once('obtenerlogin.php');
class manejologin{
  private $conexion;
  public function __construct ($conexion) {

$this->setConexion($conexion);

  }

  public function setConexion(PDO $conexion){
    $this->conexion=$conexion;
  }



public function evaluarpw(){
    $matrizb=array();
    $contadorb=0;
    $logueadotrue = "1";
    $resultado=$this->conexion->query("SELECT * FROM usuarios WHERE logeado LIKE '%$logueadotrue%'");

    while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
      $us=new obtenerlogin();
      $us->setUsuario($registro["usuario"]);
      $matrizb[$contadorb]=$us;
      $contadorb++;
    }
    return $matrizb;

  }



}


 ?>
