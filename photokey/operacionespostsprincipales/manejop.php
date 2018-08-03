<?php
include_once('obtenerp.php');

class manejop{
  private $conexion;

  public function __construct ($conexion) {

$this->setConexion($conexion);

  }

  public function setConexion(PDO $conexion){
    $this->conexion=$conexion;
  }

  public function getContenidoPorFecha(){
    $matriz=array();
    $contador=0;
    $resultado=$this->conexion->query("SELECT * FROM posts ORDER BY fecha");
    while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
      $blog=new obtenerp();
      $blog->setUsuariopost($registro["usuariopost"]);
      $blog->setComentario($registro["comentario"]);
      $blog->setFecha($registro["fecha"]);
      $blog->setImgposts($registro["imgposts"]);
      $blog->setLikescount($registro["likescount"]);

      $matriz[$contador]=$blog;
      $contador++;
    }
    return $matriz;

  }

}


 ?>
