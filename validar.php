<?php
// require 'conexion.php';
session_start();

$_SESSION['clave'] = $clave_session;


 $conexion=mysqli_connect("localhost","root","","prueba");

$clave = $_POST['clave'];

$consulta="SELECT * FROM login WHERE clave='$clave'";


$resultado=mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);

if($filas>0){
	header("location:quimica.php");

}else{
	echo"Error en la";
}
 
 ?>