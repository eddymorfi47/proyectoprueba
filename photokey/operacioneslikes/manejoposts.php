<?php

class manejoposts{
  private $conexion;

  public function __construct ($conexion) {

$this->setConexion($conexion);

  }

  public function setConexion(PDO $conexion){
    $this->conexion=$conexion;
  }


public function actualizarlikes(){
  $v5=$_GET['variable'];
  $v4=$_GET['variable2'];
  $v4++;
  $v6=$v4;
  $sql="UPDATE posts set likescount='$v6' WHERE usuariopost LIKE '%$v5%'";
  $this->conexion->exec($sql);
}

public function actualizartoques(){
  $v8=$_GET['variable4'];
  $v9=$_GET['variable5'];
  $v9++;
  $v10=$v9;
  $sql="UPDATE usuarios set seguidorescount='$v10' WHERE usuario LIKE '%$v8%'";
  $this->conexion->exec($sql);
}







}


 ?>
