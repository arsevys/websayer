<?php 
session_start();
$usu=$_SESSION['ide'];
$foto=$_FILES['fotoperfil'];
$fotoname=$_FILES['fotoperfil']['name'];
$fototemp=$_FILES['fotoperfil']['tmp_name'];
 $dimensiones = getimagesize($fototemp);
 $width = $dimensiones[0];
 $height = $dimensiones[1];
 $tipo=$foto["type"];
 $size=$foto["size"];
$exe=substr($fotoname,strrpos($fotoname,'.'));



$directorio="../../imagenes/perfil/";

include('../sesiones/conect.php');

move_uploaded_file($fototemp,$directorio.$fotoname);
	
$consulta=$conexion->query("UPDATE usuario set foto='$fotoname' WHERE ID='$usu' ");
$_SESSION['visual']=$fotoname;

echo "<script>alert('Foto De Perfil Actualizado');</script>";



 ?>