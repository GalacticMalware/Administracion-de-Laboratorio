<?php
//require' conexion.php'
session_start();
error_reporting(0);

$varsesionAdminPrincipos=$_SESSION['claveprin'];
if($varsesionAdminPrincipos == null || $varsesionAdminPrincipos = ''){
echo'Usted no tiene autorizacion';
header("location:index.php");
die();
}
session_destroy();
header("location:index.php");

$varsesionUsuarioPrincipios=$_SESSION['prin'];
if($varsesionUsuarioPrincipios == null || $varsesionUsuarioPrincipios = ''){
echo'Usted no tiene autorizacion';
header("location:index.php");
die();
}
session_destroy();
header("location:index.php");

?>