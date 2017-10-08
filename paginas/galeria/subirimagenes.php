<?php 
session_start();
$usu=$_SESSION['ide'];



for ($x=0; $x <count($_FILES['imagenes']['name']) ; $x++) { 

$foto=$_FILES['imagenes'];


$directorio="../../imagenes/galeria/";
$fotoname=$_FILES['fotoperfil']['name'];
$fototemp=$_FILES['fotoperfil']['tmp_name'];
 $dimensiones = getimagesize($fototemp);
 $width = $dimensiones[0];
 $height = $dimensiones[1];
 $tipo=$foto["type"];
 $size=$foto["size"];
$exe=substr($fotoname,strrpos($fotoname,'.'));

move_uploaded_file()
}











 ?>