<?php
include_once('obtenerperfilpropio.php');
include_once('manejopostes.php');
include_once('obtenerpostes.php');

class manejoperfilpropio{
  private $conexionb;




  public function __construct ($conexionb) {

$this->setConexionb($conexionb);

  }

  public function setConexionb(PDO $conexionb){
    $this->conexionb=$conexionb;
  }

  public function getContenidoPorPost(){
    $matrizb=array();
    $contadorb=0;
    $v2=$_GET['variable2'];
    $resultadob=$this->conexionb->query("SELECT * FROM usuarios WHERE usuario LIKE '%$v2%'");

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


  public function getContenidoPorLoger(){
    $matrizb=array();
    $contadorb=0;
    $logueadotrue= "1";
    $resultadob=$this->conexionb->query("SELECT * FROM usuarios WHERE logeado LIKE '%$logueadotrue%'");

    while($registro=$resultadob->fetch(PDO::FETCH_ASSOC)){
      $blo=new obtenerperfilpropio();
      $blo->setUsuario($registro["usuario"]);


      $matrizb[$contadorb]=$blo;
      $contadorb++;
    }
    return $matrizb;

  }





}


 ?>
