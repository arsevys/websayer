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




 ?>