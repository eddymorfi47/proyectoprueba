<?php
  include_once("obtenerpost.php");
  include_once("manejopost.php");

    try{
      $miconexion=new PDO('mysql:host=localhost; dbname=photokey', 'root', '');
      $miconexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $manejopost=new manejopost($miconexion);
      $po=new obtenerpost();

      $tabla_us=$manejopost->getUserLog();

      foreach($tabla_us as $valorb){
          $temporal = $valorb->getUsuariopost();
        }


      
      $po->setUsuariopost($temporal);
      $po->setImgposts(addslashes(file_get_contents($_FILES['picture']['tmp_name'])));
      $po->setComentario(htmlentities(addslashes($_POST["comentario"]), ENT_QUOTES));
      $po->setFecha(Date("Y-m-d H:i:s"));
      $manejopost->insertarpost($po);




      echo "<script type='text/javascript'>alert('Su post se ha publicado correctamente.');</script>";
      echo "<script type='text/javascript'>window.location.href='../principal.php';</script>";


}
catch(Exception $e){
  die("Error:" . $e->getMessage());
}





 ?>
