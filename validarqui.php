<?php
//require 'conexion.php';
error_reporting(0);
session_start();
//$_SESSION['clave'] = $clave;

$conexionUsuarioQuimica=mysqli_connect("localhost","root","","mydb");
$conexionAdminQuimica=mysqli_connect("localhost","root","","mydb");

$clave = $_POST['clave'];
$quimi = $_POST ['quimi'];

$_SESSION['quimi']=$quimi;
$_SESSION['clave'] = $clave;


$materi = "quimica";

$consultaUsuarioQuimica="SELECT * FROM usuario WHERE Contrasena='$clave' AND Nombre_Materia = '$materi'";
$consultaAdminQuimica="SELECT * FROM administrador WHERE Contrasena='$quimi' AND Nombre_Materia = '$materi'";

$resultadoUsuarioQuimica=mysqli_query($conexionUsuarioQuimica, $consultaUsuarioQuimica);
$resultadoAdminQuimica=mysqli_query($conexionAdminQuimica, $consultaAdminQuimica);

$filasUsuarioQuimica=mysqli_num_rows($resultadoUsuarioQuimica);
$filasAdminQuimica=mysqli_num_rows($resultadoAdminQuimica);

if($filasUsuarioQuimica>0){
	header("location:quimica.php");
}if($filasAdminQuimica>0){
	header("location:laboratorista_quimica.php");
}else{
	echo"Error en la contraseña";
}

 ?>
