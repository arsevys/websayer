<?php 
header("Content-type: text/html;charset=utf-8");
session_start();
$usu=$_SESSION['ide'];
$directorio="../../imagenes/tempo/";
$foto=$_FILES['fotoperfil'];
$fotoname=$_FILES['fotoperfil']['name'];
$fototemp=$_FILES['fotoperfil']['tmp_name'];
 $dimensiones = getimagesize($fototemp);
 $width = $dimensiones[0];
 $height = $dimensiones[1];
 $tipo=$foto["type"];
 $size=$foto["size"];
 
$exe=substr($fotoname,strrpos($fotoname,'.'));


if ($tipo != 'image/jpg' && $tipo != 'image/jpeg' && $tipo != 'image/png' && $tipo != 'image/gif')

{
	echo "<script>alert('Error, el archivo no es una imagen');</script>";
}
else if ($size>1024*1024)
{
	echo "<script>alert('Error, el tamaño permitido es un 1mb');</script>";
}

else if ($width >1000 ||  $height>1000)
{
	echo "<script>alert('Error, la altura permitida es 500px');</script>";
}
else if ($width < 60 || $height < 60)
{
	echo "<script>alert('Error, la altura minima permitida es 60px');</script>";
}

else if (strlen($fotoname)>30){
	echo "<script>alert('Error, el nombre de la imagen es muy largo');</script>";
}
else if (strpos($fotoname,'ñ') > 0 || strpos($fotoname,'´')>0 ){
	echo "<script>alert('Error, cambie de nombre tu foto');</script>";
}
else {
	///en el primero va el nombre del archivo pero en temporisador,y en el segundo la nueva ruta a donde va a ir
move_uploaded_file($fototemp,$directorio.$fotoname);


echo "<img src=../imagenes/tempo/$fotoname width='250px' height='200px'>";

}







 ?>
