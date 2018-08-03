<?php
$contrasena = $_POST['password'];
include_once("manejologin.php");
include_once("obtenerlogin.php");

			try{
				$miconexion=new PDO('mysql:host=localhost; dbname=photokey', 'root', '');

				$miconexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

				$manejo=new manejologin($miconexion);

				$tabla_us=$manejo->evaluarpw();

				foreach($tabla_us as $valorb){
						$contrasenaserv = $valorb->getContrasena();
					}
				if(empty($tabla_us)){
          echo "<script type='text/javascript'>alert('El usuario no existe.');</script>";
          echo "<script type='text/javascript'>window.location.href='../login.php';</script>";
        }

				else{
          if ($contrasena==$contrasenaserv) {
          	$manejo->logearusuario();
            echo "<script type='text/javascript'>alert('Su sesión se ha iniciado.');</script>";
            echo "<script type='text/javascript'>window.location.href='../principal.php';</script>";
          }
          else {
            echo "<script type='text/javascript'>alert('La contraseña no coincide.');</script>";
            echo "<script type='text/javascript'>window.location.href='../login.php';</script>";
          }
					}
				}

			catch(Exception $e){
				die("Error:" . $e->getMessage());
			}



 ?>
