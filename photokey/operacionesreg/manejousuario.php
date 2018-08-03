<?php
include_once('obtenerusuario.php');

class manejousuario{
  private $conexion;

  public function __construct ($conexion) {

$this->setConexion($conexion);

  }

  public function setConexion(PDO $conexion){
    $this->conexion=$conexion;
  }

public function insertarUsuario(obtenerusuario $us){

  $sql="INSERT INTO usuarios (nombre, usuario, email, contrasena) VALUES ('" . $us->getNombre() . "','" . $us->getUsuario() . "','" . $us->getEmail() . "','" . $us->getContrasena() . "')";
  $this->conexion->exec($sql);
}


public function getUserRep(){
    $matrizb=array();
    $contadorb=0;
    $evalusuario = $_POST['username'];
    $resultado=$this->conexion->query("SELECT * FROM usuarios WHERE Usuario LIKE '%$evalusuario%'");

    while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
      $us=new obtenerusuario();
      $us->setUsuario($registro["Usuario"]);
      $matrizb[$contadorb]=$us;
      $contadorb++;
    }
    return $matrizb;

  }



}


 ?>
