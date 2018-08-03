<?php
include_once('obtenerpost.php');
include_once('../operacionesreg/obtenerusuario.php');

class manejopost{
  private $conexion;


  public function __construct ($conexion) {

$this->setConexion($conexion);

  }

  public function setConexion(PDO $conexion){
    $this->conexion=$conexion;
  }

  public function getUserLog(){
      $matrizb=array();
      $contadorb=0;
      $logeval= "1";
      $resultado=$this->conexion->query("SELECT * FROM usuarios WHERE Logeado LIKE '%$logeval%'");

      while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
        $po=new obtenerpost();
        $po->setUsuariopost($registro["usuario"]);
        $matrizb[$contadorb]=$po;
        $contadorb++;


      }
      return $matrizb;

    }


public function insertarpost(obtenerpost $po){

  $sql="INSERT INTO posts (usuariopost, comentario, fecha, imgposts) VALUES ('" . $po->getUsuariopost() . "','" . $po->getComentario() . "','" . $po->getFecha() . "','" . $po->getImgposts() . "')";
  $this->conexion->exec($sql);
}







}


 ?>
