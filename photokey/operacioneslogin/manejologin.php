<?php
include_once('obtenerlogin.php');
include_once('../login.php');
class manejologin{
  private $conexion;
  public function __construct ($conexion) {

$this->setConexion($conexion);

  }

  public function setConexion(PDO $conexion){
    $this->conexion=$conexion;
  }

public function logearusuario(){
$evalusuario = $_POST['user'];
$logueadotrue = "1";
  $sql="UPDATE usuarios set logeado='$logueadotrue' WHERE Usuario LIKE '%$evalusuario%'";
  $this->conexion->exec($sql);
}


public function evaluarpw(){
    $matrizb=array();
    $contadorb=0;
    $evalusuario = $_POST['user'];
    $resultado=$this->conexion->query("SELECT * FROM usuarios WHERE Usuario LIKE '%$evalusuario%'");

    while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
      $us=new obtenerlogin();
      $us->setUsuario($registro["usuario"]);
      $us->setContrasena($registro["contrasena"]);
      $matrizb[$contadorb]=$us;
      $contadorb++;
    }
    return $matrizb;

  }



}


 ?>
