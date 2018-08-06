<?php
  include_once("manejoposts.php");

    try{
      $miconexion=new PDO('mysql:host=localhost; dbname=photokey', 'root', '');
      $miconexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $manejo=new manejoposts($miconexion);
      $manejo->actualizarlikes();
      echo "<script type='text/javascript'>window.location.href='../index.php';</script>";
}
catch(Exception $e){
  die("Error:" . $e->getMessage());
}
 ?>
