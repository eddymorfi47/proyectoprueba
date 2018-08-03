<?php

include_once("manejologout.php");

			try{
				$miconexion=new PDO('mysql:host=localhost; dbname=photokey', 'root', '');

				$miconexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

				$manejologout=new manejologout($miconexion);
          	$manejologout->logearusuario();
						echo "<script type='text/javascript'>alert('Sesión cerrada');</script>";
						echo "<script type='text/javascript'>window.location.href='../login.php';</script>";

			}catch(Exception $e){
				die("Error:" . $e->getMessage());
			}



 ?>
