<?php
//require' conexion.php'
session_start();
error_reporting(0);
$varsesionUsuarioFis=$_SESSION['clavefis'];
if($varsesionUsuarioFis == null || $varsesionUsuarioFis = ''){
echo'Usted no tiene autorizacion';
die();
} ?>



<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
  <title>Fisica</title>
	<link href="css/estilos_fisica.css" rel="stylesheet" type="text/css">
</head>
<body>
<header>

<style type="text/css">
		#unidad, #unidad2, #unidad3, #unidad4, #unidad5{
			display: none;
		}
	</style>
<script type="text/javascript">
		function mostrarUNIDAD() {
			document.getElementById('unidad').style.display = 'block';
		}

		function mostrarUNIDAD2() {
			document.getElementById('unidad2').style.display = 'block';
		}
		function mostrarUNIDAD3() {
			document.getElementById('unidad3').style.display = 'block';
		}
		function mostrarUNIDAD4() {
			document.getElementById('unidad4').style.display = 'block';
		}

		function mostrarUNIDAD5() {
			document.getElementById('unidad5').style.display = 'block';
		}


		function ocultarUNIDAD() {
			document.getElementById('unidad').style.display = 'none';
			document.getElementById('unidad2').style.display = 'none';
			document.getElementById('unidad3').style.display = 'none';
			document.getElementById('unidad4').style.display = 'none';
			document.getElementById('unidad5').style.display = 'none';
		}
	</script>



	<h1> Fisica </h1>
  <img class="centro" src="iconos/fisica.png" height="150" width="150">
	<nav class="navegacion">
		<ul class="menu">
			 <li><a href="terFisica.php">Inicio</a></li>
			  <li><a type="submit" name="unidad1"  onclick="mostrarUNIDAD();">Unidad 1</a>
				 <ul class="submenu1" >
				 </ul>
			 </li>

			 <li><a  type="submit" name="unidad2" onclick="mostrarUNIDAD2();">Unidad 2 </a>
				 <ul class="submenu2">
					</ul>
			 </li>


			 <li><a type="submit" name="unidad3" onclick="mostrarUNIDAD3();">Unidad 3</a>
				 <ul class="submenu3">
					</ul>
			 </li>

			 <li><a type="submit" name="unidad4" onclick="mostrarUNIDAD4();">Unidad 4</a>
				 <ul class="submenu4">
					</ul>
			 </li>

			 <li><a type="submit" name="calificacion" onclick="mostrarUNIDAD5();">calificacion</a>
				 <ul class="submenu6">

					</ul>
			 </li>
		</ul>
	</nav>
</header>

<div id="unidad">
 <table class="tabla" style="margin: auto;">
            <tr >
                <td>Unidad  </td>
                <td>Practica  </td>
                <td>Titulo  </td>
                <td>Descripcion  </td>
                <td>Tamaño archivo   </td>
                <td>Tipo  </td>
                <td>Nombre  </td>
            </tr>
<?php
      include 'config.inc.php';
       $idMateria = "1";
        $db=new Conect_MySql();
            $sql = "select*from pdf WHERE  idMateriaNumero = '$idMateria' AND numero_unidad = 1 ";
            $query = $db->execute($sql);
            while($datos=$db->fetch_row($query)){?>
            <tr>
                <td><?php echo $datos['numero_unidad'];?></td>
                <td><?php echo $datos['numero_practica'];?></td>
                <td><?php echo $datos['Titulo']; ?></td>
                <td><?php echo $datos['Descripcion']; ?></td>
                <td><?php echo $datos['Tamanio']; ?></td>
                <td><?php echo $datos['Tipo']; ?></td>
                <td><a href="archivo.php?id=<?php echo $datos['idPDF']?>"><?php echo $datos['Nombre_Archivo']; ?></a></td>
            </tr>
          <?php  } ?>
        </table>
        <br>
<a style="margin:auto; margin-left: 600px;" href="javascript:void(0);"  onclick="ocultarUNIDAD();">Debera limpiar la pantalla antes de imprimir una UNIDAD!</a>
	</div>

<br>
<br>
<br>
<div id="unidad2">
 <table class="tabla"  style="margin: auto;">
            <tr >
                <td>Unidad  </td>
                <td>Practica  </td>
                <td>Titulo  </td>
                <td>Descripcion  </td>
                <td>Tamaño archivo   </td>
                <td>Tipo  </td>
                <td>Nombre  </td>
            </tr>
<?php
    //  include 'config.inc.php';
       $idMateria = "1";
        $db=new Conect_MySql();
            $sql = "select*from pdf WHERE  idMateriaNumero = '$idMateria' AND numero_unidad = 2 ";
            $query = $db->execute($sql);
            while($datos=$db->fetch_row($query)){?>
            <tr>
                <td><?php echo $datos['numero_unidad'];?></td>
                <td><?php echo $datos['numero_practica'];?></td>
                <td><?php echo $datos['Titulo']; ?></td>
                <td><?php echo $datos['Descripcion']; ?></td>
                <td><?php echo $datos['Tamanio']; ?></td>
                <td><?php echo $datos['Tipo']; ?></td>
                <td><a href="archivo.php?id=<?php echo $datos['idPDF']?>"><?php echo $datos['Nombre_Archivo']; ?></a></td>
            </tr>
          <?php  } ?>
        </table>
        <br>
<a style="margin: auto; margin-left: 600px;" href="javascript:void(0);"  onclick="ocultarUNIDAD();">Debera limpiar la pantalla antes de imprimir una UNIDAD!</a>
	</div>


<br>
<br>
<br>
<div id="unidad3">
 <table class="tabla"  style="margin: auto;">
            <tr >
                <td>Unidad  </td>
                <td>Practica  </td>
                <td>Titulo  </td>
                <td>Descripcion  </td>
                <td>Tamaño archivo   </td>
                <td>Tipo  </td>
                <td>Nombre  </td>
            </tr>
<?php
    //  include 'config.inc.php';
       $idMateria = "1";
        $db=new Conect_MySql();
            $sql = "select*from pdf WHERE  idMateriaNumero = '$idMateria' AND numero_unidad = 3 ";
            $query = $db->execute($sql);
            while($datos=$db->fetch_row($query)){?>
            <tr>
                <td><?php echo $datos['numero_unidad'];?></td>
                <td><?php echo $datos['numero_practica'];?></td>
                <td><?php echo $datos['Titulo']; ?></td>
                <td><?php echo $datos['Descripcion']; ?></td>
                <td><?php echo $datos['Tamanio']; ?></td>
                <td><?php echo $datos['Tipo']; ?></td>
                <td><a href="archivo.php?id=<?php echo $datos['idPDF']?>"><?php echo $datos['Nombre_Archivo']; ?></a></td>
            </tr>
          <?php  } ?>
        </table>
        <br>
<a style="margin: auto; margin-left: 600px;" href="javascript:void(0);"  onclick="ocultarUNIDAD();">Debera limpiar la pantalla antes de imprimir una UNIDAD!</a>
	</div>


<br>
<br>
<br>
<div id="unidad4">
 <table class="tabla" style="margin: auto;">
            <tr >
                <td>Unidad  </td>
                <td>Practica  </td>
                <td>Titulo  </td>
                <td>Descripcion  </td>
                <td>Tamaño archivo   </td>
                <td>Tipo  </td>
                <td>Nombre  </td>
            </tr>
<?php
    //  include 'config.inc.php';
       $idMateria = "1";
        $db=new Conect_MySql();
            $sql = "select*from pdf WHERE  idMateriaNumero = '$idMateria' AND numero_unidad = 4 ";
            $query = $db->execute($sql);
            while($datos=$db->fetch_row($query)){?>
            <tr>
                <td><?php echo $datos['numero_unidad'];?></td>
                <td><?php echo $datos['numero_practica'];?></td>
                <td><?php echo $datos['Titulo']; ?></td>
                <td><?php echo $datos['Descripcion']; ?></td>
                <td><?php echo $datos['Tamanio']; ?></td>
                <td><?php echo $datos['Tipo']; ?></td>
                <td><a href="archivo.php?id=<?php echo $datos['idPDF']?>"><?php echo $datos['Nombre_Archivo']; ?></a></td>
            </tr>
          <?php  } ?>
        </table>
        <br>
<a style="margin: auto; margin-left: 600px;" href="javascript:void(0);"  onclick="ocultarUNIDAD();">Debera limpiar la pantalla antes de imprimir una UNIDAD!</a>
	</div>

<div id="unidad5">
 <table  class="tabla" style="margin: auto;">
            <tr >
                <td>Titulo  </td>
                <td>Descripcion  </td>
                <td>Tamaño archivo   </td>
                <td>Tipo  </td>
                <td>Nombre  </td>
            </tr>
<?php
    //  include 'config.inc.php';
       $idMateria = "1";
        $db=new Conect_MySql();
            $sql = "select*from calificacion WHERE  Materia_idMateria  = '$idMateria' ";
            $query = $db->execute($sql);
            while($datos=$db->fetch_row($query)){?>
            <tr>
                <td><?php echo $datos['Titulo']; ?></td>
                <td><?php echo $datos['Descripcion']; ?></td>
                <td><?php echo $datos['Tamanio']; ?></td>
                <td><?php echo $datos['Tipo']; ?></td>
                <td><a href="archivo1.php?id=<?php echo $datos['idPdf']?>"><?php echo $datos['Nombre_Archivo']; ?></a></td>
            </tr>
          <?php  } ?>
        </table>
        <br>
<a style="margin: auto; margin-left: 600px;" href="javascript:void(0);"  onclick="ocultarUNIDAD();">Debera limpiar la pantalla antes de imprimir una UNIDAD!</a>
	</div>

</body>
</html>
