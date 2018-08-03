<?php
include_once('obtenerperfilpropio.php');


class manejoperfilpropio{
  private $conexionb;




  public function __construct ($conexionb) {

$this->setConexionb($conexionb);

  }

  public function setConexionb(PDO $conexionb){
    $this->conexionb=$conexionb;
  }

  public function getContenidoPorLog(){
    $matrizb=array();
    $contadorb=0;
    $logeval = "1";
    $resultadob=$this->conexionb->query("SELECT * FROM usuarios WHERE logeado LIKE '%$logeval%'");

    while($registro=$resultadob->fetch(PDO::FETCH_ASSOC)){
      $blogs=new obtenerperfilpropio();
      $blogs->setUsuario($registro["usuario"]);
      $blogs->setDescripcion($registro["descripcion"]);
      $blogs->setPerfipic($registro["perfipic"]);
      $blogs->setNombre($registro["nombre"]);
      $blogs->setSeguidorescount($registro["seguidorescount"]);

      $matrizb[$contadorb]=$blogs;
      $contadorb++;
    }
    return $matrizb;

  }






}


 ?>
