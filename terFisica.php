<?php
session_start();
error_reporting(0);

$varsesionUsuarioFis=$_SESSION['clavefis'];
if($varsesionUsuarioFis == null || $varsesionUsuarioFis = ''){
echo'Usted no tiene autorizacion';
die();
}
session_destroy();
header("Location:index.php");

$varsesionAdminFis=$_SESSION['clavefis'];
if($varsesionAdminFis == null || $varsesionAdminFis = ''){
echo'Usted no tiene autorizacion';
die();
}
session_destroy();
header("Location:index.php");

//***********************************FISICA****************************************


/*
$varsesion2=$_SESSION['claveArq'];
if($varsesion2 == null || $varsesion2 = ''){
echo'Usted no tiene autorizacion';
die();
}
session_destroy();
header("Location:index.php");


$varsesion3=$_SESSION['clavePrin'];
if($varsesion3 == null || $varsesion3 = ''){
echo'Usted no tiene autorizacion';
die();
}
session_destroy();
header("Location:index.php");
*/

?>