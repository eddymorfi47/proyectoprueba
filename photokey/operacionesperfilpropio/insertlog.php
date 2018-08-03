<?php
include_once("manejopostes.php");
include_once("obtenerpostes.php");
include_once("manejoperfilpropio.php");
include_once("obtenerperfilpropio.php");

$miconexion=new PDO('mysql:host=localhost; dbname=photokey', 'root', '');

$miconexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$manejoperfilpropio=new manejoperfilpropio($miconexion);

$tabla_blogs=$manejoperfilpropio->getContenidoPorLog();

foreach($tabla_blogs as $valor){
 $temporal = $valor->getUsuario();
}

session_start();
$_SESSION["tempi"]=$temporal;


 ?>
