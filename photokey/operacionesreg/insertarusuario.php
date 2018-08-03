<?php
  include_once("obtenerusuario.php");
  include_once("manejousuario.php");

    try{
      $miconexion=new PDO('mysql:host=localhost; dbname=photokey', 'root', '');
      $miconexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $manejo=new manejousuario($miconexion);
      $us=new obtenerusuario();

      $us->setNombre(htmlentities(addslashes($_POST["name"]), ENT_QUOTES));
      $us->setUsuario(htmlentities(addslashes($_POST["username"]), ENT_QUOTES));
      $us->setEmail(htmlentities(addslashes($_POST["email"]), ENT_QUOTES));
      $us->setContrasena(htmlentities(addslashes($_POST["password"]), ENT_QUOTES));

      $manejo->insertarUsuario($us);

      echo "<script type='text/javascript'>alert('Su cuenta se ha creado correctamente.');</script>";
      echo "<script type='text/javascript'>window.location.href='../index.php';</script>";


}
catch(Exception $e){
  die("Error:" . $e->getMessage());
}
 ?>
