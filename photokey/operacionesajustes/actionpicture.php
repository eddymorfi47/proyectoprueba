<?php
  include_once("obtenerusuario.php");
  include_once("manejousuario.php");

    try{
      $miconexion=new PDO('mysql:host=localhost; dbname=photokey', 'root', '');
      $miconexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $manejo=new manejousuario($miconexion);

      $manejo->actualizarpicture();
      echo "<script type='text/javascript'>window.location.href='../perfil.php';</script>";
}
catch(Exception $e){
  die("Error:" . $e->getMessage());
}
 ?>
