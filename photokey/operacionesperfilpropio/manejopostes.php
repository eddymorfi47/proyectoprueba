<?php
include_once('obtenerpostes.php');
include_once('obtenerperfilpropio.php');
include_once('manejoperfilpropio.php');
include_once('insertlog.php');
class manejopostes{
  private $conexion;

  public function __construct ($conexion) {

$this->setConexion($conexion);

  }

  public function setConexion(PDO $conexion){
    $this->conexion=$conexion;
  }

  public function getContenidoPorUser(){
    $matriz=array();
    $contador=0;
    $tempi=$_SESSION["tempi"];
    $resultadopost=$this->conexion->query("SELECT * FROM posts WHERE usuariopost LIKE '%$tempi%' ORDER BY fecha");
    while($registropost=$resultadopost->fetch(PDO::FETCH_ASSOC)){
      $blogpost=new obtenerpostes();
      $blogpost->setUsuariopost($registropost["usuariopost"]);
      $blogpost->setComentario($registropost["comentario"]);
      $blogpost->setFecha($registropost["fecha"]);
      $blogpost->setImgposts($registropost["imgposts"]);
      $blogpost->setLikescount($registropost["likescount"]);

      $matriz[$contador]=$blogpost;
      $contador++;
    }
    return $matriz;

  }
}


 ?>
