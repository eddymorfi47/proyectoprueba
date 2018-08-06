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


public function actualizardesc(){
$logueadotrue = "1";
$re = $_POST["desc"];
  $sql="UPDATE usuarios set descripcion='$re' WHERE logeado LIKE '%$logueadotrue%'";
  $this->conexion->exec($sql);
}

public function actualizarname(){
$logueadotrue = "1";
$re = $_POST["name"];
  $sql="UPDATE usuarios set nombre='$re' WHERE logeado LIKE '%$logueadotrue%'";
  $this->conexion->exec($sql);
}

public function actualizaremail(){
$logueadotrue = "1";
$re = $_POST["email"];
  $sql="UPDATE usuarios set email='$re' WHERE logeado LIKE '%$logueadotrue%'";
  $this->conexion->exec($sql);
}

public function actualizarpw(){
$logueadotrue = "1";
$re = $_POST["pwnew"];
  $sql="UPDATE usuarios set contrasena='$re' WHERE logeado LIKE '%$logueadotrue%'";
  $this->conexion->exec($sql);
}

public function evaluarpw(){
    $matrizb=array();
    $contadorb=0;
    $logueadotrue = "1";
    $resultado=$this->conexion->query("SELECT * FROM usuarios WHERE logeado LIKE '%$logueadotrue%'");

    while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
      $us=new obtenerusuario();
      $us->setContrasena($registro["contrasena"]);
      $matrizb[$contadorb]=$us;
      $contadorb++;
    }
    return $matrizb;

  }

public function actualizarpicture(){
$logueadotrue = "1";
$re = addslashes(file_get_contents($_FILES['picture']['tmp_name']));
  $sql="UPDATE usuarios set perfipic='$re' WHERE logeado LIKE '%$logueadotrue%'";
  $this->conexion->exec($sql);
}



}


 ?>
