<?php

$contrasena = $_POST['password'];
$contrasenarep = $_POST['password2'];
include_once("manejousuario.php");

			try{
				$miconexion=new PDO('mysql:host=localhost; dbname=photokey', 'root', '');

				$miconexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

				$manejo=new manejousuario($miconexion);

				$tabla_us=$manejo->getUserRep();

				if(empty($tabla_us)){
          if ($contrasena==$contrasenarep) {
            include_once("insertarusuario.php");
          }
          else {
            echo "<script type='text/javascript'>alert('Las contraseñas no coinciden');</script>";
            echo "<script type='text/javascript'>window.location.href='../registro.php';</script>";
          }
        }

				else{
          echo "<script type='text/javascript'>alert('El usuario ya existe, por favor use otro usuario, o inicie sesión con el usuario existente.');</script>";
          echo "<script type='text/javascript'>window.location.href='../registro.php';</script>";
					}
				}

			catch(Exception $e){
				die("Error:" . $e->getMessage());
			}



 ?>
