<?php
include_once('obtenerp.php');
include_once('principalsearch.php');

class manejopbus{
  private $conexionb;

  public function __construct ($conexionb) {

$this->setConexionb($conexionb);

  }

  public function setConexionb(PDO $conexionb){
    $this->conexionb=$conexionb;
  }

  public function getContenidoPorBus(){
    $matrizb=array();
    $contadorb=0;
    $busbus = $_POST['palabrabus'];
    $resultadob=$this->conexionb->query("SELECT * FROM posts WHERE usuariopost LIKE '%$busbus%' ORDER BY fecha");

    while($registro=$resultadob->fetch(PDO::FETCH_ASSOC)){
      $blogs=new obtenerp();
      $blogs->setUsuariopost($registro["usuariopost"]);
      $blogs->setComentario($registro["comentario"]);
      $blogs->setFecha($registro["fecha"]);
      $blogs->setImgposts($registro["imgposts"]);
      $blogs->setLikescount($registro["likescount"]);

      $matrizb[$contadorb]=$blogs;
      $contadorb++;
    }
    return $matrizb;

  }





}


 ?>
