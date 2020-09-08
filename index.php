<?php
  require 'conexion.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<title>Sistema de practicas</title>
	<meta charset="utf-8" http-equiv="Content-Type">
	<link rel="stylesheet" href="css/estilos.css">
	<script type="js/principal.js"></script>
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/main.js"></script>


</head>

<style>
*{margin:0px; padding:0px; font-family:Helvetica, Arial, sans-serif;}
</style>



<div id="StyloQuimica" class="modal">  
  <form class="modal-content animate" action="validarqui.php" method="POST">
   
    <div class="imgcontainer">
      <span onclick="document.getElementById('StyloQuimica').style.display='none'" class="close" title="Quimica">&times;</span>
      <img src="img/quimica.png" alt="" class="avatar">
      <h1 style="text-align:center">QUIMICA</h1 >
    </div>
    <div class="container">
      <input type="password" placeholder="INGRESE LA CONTRASENA" name="quimi" name="clave" >        
      <button type="submit" <?php $v=1;?> >INGRESAR</button>
    </div>
   
  </form>
</div>

<div id="StyloFisica" class="modal">  
  <form class="modal-content animate" action="validarfis.php" method="POST"> 
    <div class="imgcontainer">
      <span onclick="document.getElementById('StyloFisica').style.display='none'" class="close" title="Fisica">&times;</span>
      <img src="img/fisica.png" alt="" class="avatar">
      <h1 style="text-align:center">FISICA</h1 >
    </div>
    <div class="container">
      <input type="password" placeholder="INGRESE LA CONTRASENA" name="fis" name="clavefis">        
      <button type="submit"<?php $v=2;?> >INGRESAR</button>
    </div>
  </form> 
</div>


<div id="StyloPrincipios" class="modal">  
  <form class="modal-content animate" action="validarprin.php" method="POST"> 
    <div class="imgcontainer">
      <span onclick="document.getElementById('StyloPrincipios').style.display='none'" class="close" title="Principios">&times;</span>
      <img src="img/circuito.png" alt="" class="avatar">
      <h1 style="text-align:center">PRICIPIOS ELECTRONICOS</h1 >
    </div>
    <div class="container">
      <input type="password" placeholder="INGRESE LA CONTRASENA" name="claveprin" name="prin">        
      <button type="submit">INGRESAR</button>
    </div>
  </form> 
</div>


<div id="StyloArquitectura" class="modal">  
  <form class="modal-content animate" action="verificararq.php" method="POST"> 
    <div class="imgcontainer">
      <span onclick="document.getElementById('StyloArquitectura').style.display='none'" class="close" title="Aruitectura">&times;</span>
      <img src="img/electronico.png" alt="" class="avatar">
      <h1 style="text-align:center">ARQUITECTURA DE COMPUTADORAS</h1 >
    </div>
    <div class="login">
      <input type="password" placeholder="INGRESE LA CONTRASENA" name="clavearq" name="arqui">        
      <button type="submit">INGRESAR</button>
    </div>
  </form> 
</div>
</body>




<body>
<div id="LogoTec">
</div>
<div class="Bienvenido">
	<font id="letra" size="5">
	Bienvenido al sistema consulta de practicas
	</font>	
</div>

<header class="Linea1">
	 <div class="Contenedor" id="uno" onclick="document.getElementById('StyloQuimica').style.display='block'">
		<img src="img/quimica.png" class="icono">
		<p class="Letra">Quimica</p>
		<p id="LAB">Laboratorista:</p>
		<p class="Laboratorista">Juanito come frijoles :v</p>

	</div>

	 <div class="Contenedor" id="dos" onclick="document.getElementById('StyloFisica').style.display='block'">
		<img src="img/fisica.png" class="icono">
		<p class="Letra">Fisica</p>
		<p id="LAB">Laboratorista:</p>
		<p class="Laboratorista">El macho :v</p>
	</div>

	<div class="Contenedor" id="tres" onclick="document.getElementById('StyloPrincipios').style.display='block'">
		<img src="img/circuito.png" class="icono">
		<p class="Letra">Principios electronicos</p>
		<p id="LAB">Laboratorista:</p>
		<p class="Laboratorista">Pecho peludo :v</p>
	</div>

	<div class="Contenedor" id="cuatro" onclick="document.getElementById('StyloArquitectura').style.display='block'">
		<img src="img/electronico.png" class="icono">
		<p class="Letra">Aruitectura de COM/CPU</p>
		<p id="LAB">Laboratorista:</p>
		<p class="Laboratorista">EL RIFADO :v</p>
	</div>
		
</header>
		
</body>
</html>