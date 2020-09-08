<?php

session_start();
error_reporting(0);

$varsesionUsuarioQuimica=$_SESSION['clave'];
if($varsesionUsuarioQuimica == null || $varsesionUsuarioQuimica = ''){
echo'Usted no tiene autorizacion';
die();
}
session_destroy();
header("Location:index.php");

$varsesionAdminQuimica=$_SESSION['clave'];
if($varsesionAdminQuimica == null || $varsesionAdminQuimica = ''){
echo'Usted no tiene autorizacion';
die();
}
session_destroy();
header("Location:index.php");	
?>