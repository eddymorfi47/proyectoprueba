<?php
$pw = $_POST['pw'];
  include_once("obtenerusuario.php");
  include_once("manejousuario.php");
  include_once("inputs/actpw.php");

    try{
      $miconexion=new PDO('mysql:host=localhost; dbname=photokey', 'root', '');
      $miconexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $manejo=new manejousuario($miconexion);

      $tabla_us=$manejo->evaluarpw();

      foreach($tabla_us as $valorb){
          $contrasenaserv = $valorb->getContrasena();
        }


        if($pw==$contrasenaserv){
          $manejo->actualizarpw();
          echo "<script type='text/javascript'>alert('La contraseña ha sido actualizada.');</script>";
          echo "<script type='text/javascript'>window.location.href='../perfil.php';</script>";
        }
        else{
          echo "<script type='text/javascript'>alert('No se puede actualizar la contraseña, ya que la contraseña anterior no coincide.');</script>";
          echo "<script type='text/javascript'>window.location.href='../perfil.php';</script>";
        }








      echo "<script type='text/javascript'>window.location.href='../perfil.php';</script>";
}
catch(Exception $e){
  die("Error:" . $e->getMessage());
}
 ?>
