<?php
//require' conexion.php'
session_start();
error_reporting(0);
$varsesionAminFis=$_SESSION['fis'];
if($varsesionAminFis == null || $varsesionAminFis = ''){
echo'Usted no tiene autorizacion';
die();
}
include_once 'config.inc.php';
if (isset($_POST['subir'])) {
    $nombre = $_FILES['archivo']['name'];
    $tipo = $_FILES['archivo']['type'];
    $tamanio = $_FILES['archivo']['size'];
    $ruta = $_FILES['archivo']['tmp_name'];
    $destino = "archivos/" . $nombre;
    if ($nombre != "") {
        if (copy($ruta, $destino)) {
            $titulo= $_POST['titulo'];
            $descri= $_POST['descripcion'];
            $db=new Conect_MySql();


             $NombreUnidad = $_POST['Unidad'];
            $idMateria = "1";
            $Numero_practica=$_POST['Practica'];


            $sql = "INSERT INTO pdf(idMateriaNumero,numero_unidad,numero_practica,Titulo,Descripcion,Tamanio,Tipo,Nombre_Archivo) VALUES('$idMateria','$NombreUnidad','$Numero_practica','$titulo','$descri','$tamanio','$tipo','$nombre')";

            $query = $db->execute($sql);
            if($query){
                echo "Se guardo correctamente";
            }
        } else {
            echo "Error";
        }
    }
}

include_once 'config.inc.php';
if (isset($_POST['subir_calf'])) {
    $nombre = $_FILES['archivo']['name'];
    $tipo = $_FILES['archivo']['type'];
    $tamanio = $_FILES['archivo']['size'];
    $ruta = $_FILES['archivo']['tmp_name'];
    $destino = "archivos/" . $nombre;
    if ($nombre != "") {
        if (copy($ruta, $destino)) {
            $titulo= $_POST['titulo'];
            $descri= $_POST['descripcion'];
            $db1=new Conect_MySql();

            $Numerogrupo = $_POST['calf'];
            $idMateria = "1";
            $Numeroca=$_POST['Grupo'];

            $sql1= "INSERT INTO calificacion(Materia_idMateria,numero_grupo,numero_calificacion,Titulo,Descripcion,Tamanio,Tipo,Nombre_Archivo)  VALUES('$idMateria','$Numerogrupo','$Numeroca','$titulo','$descri','$tamanio','$tipo','$nombre')";

            $query = $db1->execute($sql1);
            if($query){
                echo "Se guardo correctamente";
            }
        } else {
            echo "Error";
        }
    }
}

include_once 'config.inc.php';
if (isset($_POST['eliminar'])) {
            $db2=new Conect_MySql();

            $NombreUnidad = $_POST['Unidad'];
            $idMateria = "1";
            $Numero_practica=$_POST['Practica'];

            $sql2= "DELETE FROM pdf WHERE numero_unidad='$NombreUnidad' && numero_practica='$Numero_practica' && idMateriaNumero= '$idMateria'";


            $query = $db2->execute($sql2);
            if($query){
                echo "Se elimino correctamente";
            }
}

include_once 'config.inc.php';
if (isset($_POST['eliminar_calf'])) {
            $db3=new Conect_MySql();

            $NombreUnidad = $_POST['calf'];
            $idMateria = "1";
            $Numero_practica=$_POST['Grupo'];

            $sql3= "DELETE FROM calificacion WHERE numero_calificacion='$NombreUnidad' && numero_grupo='$Numero_practica' && Materia_idMateria='$idMateria'";


            $query = $db3->execute($sql3);
            if($query){
                echo "Se elimino correctamente";
            }
}

 ?>


<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
  <title>Fisica</title>
	<link href="css/estilos_fisica.css" rel="stylesheet" type="text/css">
</head>
<body>
<header>
	<h1> Fisica </h1>
  <img class="centro" src="iconos/fisica.png" height="150" width="150">
	<nav class="navegacion">
		<ul class="menu">
			 <li><a href="terFisica.php">Inicio</a></li>
		</ul>
	</nav>
</header>

<div style="width: 500px;margin: auto;border: 1px solid blue;padding: 30px;">
            <h4>Subir PDF</h4>
            <form method="post" action="" enctype="multipart/form-data">
                <table>
                    <tr>
                        <td><label>Titulo</label></td>
                        <td><input type="text" name="titulo"></td>
                    </tr>
                    <tr>
                        <td><label>Descripcion</label></td>
                        <td><textarea name="descripcion"></textarea></td>
                    </tr>


                     <tr>
                        <label for="">Unidad</label>
                        <select class="" name="Unidad">
                            <option value="1">Unidad 1</option>
                            <option value="2">Unidad 2</option>
                            <option value="3">Unidad 3</option>
                            <option value="4">Unidad 4</option>
                        </select>
                    </tr>

                    <label for="">Practica</label>
                        <select class="" name="Practica">
                            <option value="1">Practica 1</option>
                            <option value="2">Practica 2</option>
                            <option value="3">Practica 3</option>
                            <option value="4">Practica 4</option>
                        </select>



						            <td><input type="submit" value="subir" name="subir"></td>
                        <td colspan="2"><input type="file" name="archivo"></td>
                        <td><input type="submit" value="eliminar" name="eliminar"></td>

                </table>
            </form>
        </div>


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
      // include 'config.inc.php';
        $idMateria = "1";
        $db=new Conect_MySql();
            $sql = "select*from pdf WHERE  idMateriaNumero = '$idMateria'";
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


        <div style="width: 500px;margin: auto;border: 1px solid blue;padding: 30px;">
                   <h4>Subir PDF</h4>
                   <form method="post" action="" enctype="multipart/form-data">
                       <table>
                           <tr>
                               <td><label>Nombre</label></td>
                               <td><input type="text" name="titulo"></td>
                           </tr>
                           <tr>
                               <td><label>Descripcion</label></td>
                               <td><textarea name="descripcion"></textarea></td>

                           </tr>
                           <tr>
                               <label for="">Calificacion</label>
                               <select class="" name="calf">
                                  <option value="1">Calificacion</option>
                               </select>
                           </tr>

                           <tr>

                           </tr>

                           <label for="">Grupo</label>
                               <select class="" name="Grupo">
                                  <option value="1">Grupo A</option>
                                  <option value="2">Grupo B</option>
                                  <option value="3">Grupo C</option>
                               </select>

                           <tr>
                               <td><input type="submit" value="subir_calf" name="subir_calf"></td>
                               <td colspan="2"><input type="file" name="archivo"></td>

                               <td><input type="submit" value="eliminar_calf" name="eliminar_calf"></td>

                       </table>
                   </form>
               </div>

               <table class="tabla"  style="margin: auto;">
                         <tr >
                             <td>Grupo  </td>
                             <td>Titulo  </td>
                             <td>Descripcion  </td>
                             <td>Tamaño archivo   </td>
                             <td>Tipo  </td>
                             <td>Nombre  </td>
                         </tr>
                     <?php
                   // include 'config.inc.php';
                     $idMateria = "1";
                     $db=new Conect_MySql();
                         $sql = "select*from calificacion WHERE  Materia_idMateria = '$idMateria'";
                         $query = $db->execute($sql);
                         while($datos=$db->fetch_row($query)){?>
                         <tr>
                             <td><?php echo $datos['numero_grupo'];?></td>
                             <td><?php echo $datos['Titulo']; ?></td>
                             <td><?php echo $datos['Descripcion']; ?></td>
                             <td><?php echo $datos['Tamanio']; ?></td>
                             <td><?php echo $datos['Tipo']; ?></td>
                             <td><a href="archivo1.php?id=<?php echo $datos['idPdf']?>"><?php echo $datos['Nombre_Archivo']; ?>

                         </tr>

                       <?php  } ?>

                     </table>


</body>
</html>
