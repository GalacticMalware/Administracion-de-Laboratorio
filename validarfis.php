<?php
// require 'conexion.php';
error_reporting(0);
session_start();
//$_SESSION['clave'] = $clave;

$conexionUsuarioFis=mysqli_connect("localhost","root","","mydb");
$conexionAdminFis=mysqli_connect("localhost","root","","mydb");

$clavefis = $_POST['clavefis'];
$fis=$_POST['fis'];

$_SESSION['fis'] = $fis;
$_SESSION['clavefis'] = $clavefis;

$materia = "fisica";

$consultaUsuarioFis="SELECT * FROM usuario WHERE Contrasena='$clavefis' AND Nombre_Materia = '$materia'";
$consultaAdminFis="SELECT * FROM administrador WHERE Contrasena='$fis' AND Nombre_Materia = '$materia'";


$resultadoUsuarioFis=mysqli_query($conexionUsuarioFis, $consultaUsuarioFis);
$resultadoAdminFis=mysqli_query($conexionAdminFis, $consultaAdminFis);

$filasUsuarioFis=mysqli_num_rows($resultadoUsuarioFis);
$filasAdminFis=mysqli_num_rows($resultadoAdminFis);

if($filasUsuarioFis>0){
	header("location:fisica.php");
}if($filasAdminFis>0){
	header("location:laboratorista_fisica.php");
}else{
	echo"Error en la contraseña";
}

 ?>
