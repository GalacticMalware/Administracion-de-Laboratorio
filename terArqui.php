<?php
require 'conexion.php';

session_start();
error_reporting(0);
$varsesionUsuarioArquitectura=$_SESSION['clavearq'];
if($varsesionUsuarioArquitectura == null || $varsesionUsuarioArquitectura = ''){
echo'Usted no tiene autorizacion';
die();
}
session_destroy();
header("location:index.php");

$varsesionAdminArquitectura=$_SESSION['clavearq'];
if($varsesionAdminArquitectura == null || $varsesionAdminArquitectura = ''){
echo'Usted no tiene autorizacion';
die();
}
session_destroy();
header("Location:index.php");	

?>