<?php
// require 'conexion.php';
error_reporting(0);
session_start();
//$_SESSION['clave'] = $clave;

$conexionUsuarioArqui=mysqli_connect("localhost","root","","mydb");
$conexionAdminArqui=mysqli_connect("localhost","root","","mydb");

$claveArqui = $_POST['clavearq'];
$arqui = $_POST ['arqui'];

$_SESSION['arqui'] = $arqui;
$_SESSION['clavearq'] = $claveArqui;

$materia = "arquitectura de computadora";

$consultaUsuarioArqui="SELECT * FROM usuario WHERE Contrasena='$claveArqui' AND Nombre_Materia='$materia'";
$consultaAdminArqui="SELECT * FROM administrador WHERE Contrasena='$arqui' AND Nombre_Materia='$materia'";

$resultadoUsuarioArqui=mysqli_query($conexionUsuarioArqui, $consultaUsuarioArqui);
$resultadoAdminArqui=mysqli_query($conexionAdminArqui, $consultaAdminArqui);

$filasUsuarioArqui=mysqli_num_rows($resultadoUsuarioArqui);
$filasAdminArqui=mysqli_num_rows($resultadoAdminArqui);

if($filasUsuarioArqui>0){
	header("location:arquitectura.php");
}if($filasAdminArqui>0){
	header("location:laboratorita_arquitectura.php");
}else{
	echo"Error en la contraseña";
}

 ?>
