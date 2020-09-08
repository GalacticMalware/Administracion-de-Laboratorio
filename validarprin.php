<?php
// require 'conexion.php';
error_reporting(0);
session_start();
//$_SESSION['clave'] = $clave;

$conexionUsuarioPrincipios=mysqli_connect("localhost","root","","mydb");
$conexionAdminPrincipios=mysqli_connect("localhost","root","","mydb");

$clavePrin = $_POST['claveprin'];
$prin= $_POST ['prin'];

$_SESSION['claveprin'] = $clavePrin;
$_SESSION['prin'] = $prin;

$materia = "principios electricos";
 
$consultaUsuarioPrincipios="SELECT * FROM usuario WHERE Contrasena='$clavePrin' AND Nombre_Materia= '$materia'";
$consultaAdminPrincipios="SELECT * FROM administrador WHERE Contrasena='$prin' AND Nombre_Materia = '$materia'";

$resultadoUsuarioPrincipios=mysqli_query($conexionUsuarioPrincipios, $consultaUsuarioPrincipios);
$resultadoAdminPrincipis=mysqli_query($conexionAdminPrincipios, $consultaAdminPrincipios);

$filasUsuarioPrincipios=mysqli_num_rows($resultadoUsuarioPrincipios);
$filasAdminPrincipios=mysqli_num_rows($resultadoAdminPrincipis);

if($filasUsuarioPrincipios>0){
	header("location:circuito.php");
}if($filasAdminPrincipios>0){
	header("location:laboratorista_principios.php");
}else{
	echo"Error en la contraseña";
}

 ?>
