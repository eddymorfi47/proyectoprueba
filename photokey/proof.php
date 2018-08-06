<?php
include_once("loginverif/manejologin.php");

      try{
        $miconexion=new PDO('mysql:host=localhost; dbname=photokey', 'root', '');

        $miconexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $manejo=new manejologin($miconexion);

        $tabla_us=$manejo->evaluarpw();

        foreach($tabla_us as $valorb){
          }
        if(empty($tabla_us)){

          echo "<script type='text/javascript'>window.location.href='login.php';</script>";
        }

        else{
          
          echo "<script type='text/javascript'>window.location.href='principal.php';</script>";
          }
        }

      catch(Exception $e){
        die("Error:" . $e->getMessage());
      }



 ?>
