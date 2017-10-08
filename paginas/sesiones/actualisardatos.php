<?php 
$id=$_POST['id'];
$nom=$_POST['nom'];
$ape=$_POST['ape'];
$edad=$_POST['edad'];
$usu=$_POST['usu'];
$com=$_POST['com'];
$telef=$_POST['telef'];
$fech=$_POST['fech'];
$email=$_POST['email'];


include('conect.php');
$actu=$conexion->query("UPDATE usuario set nombre='$nom',apellido='$ape',edad='$edad',nick='$usu',comtra='$com',telefono='$telef',fecha='$fech',email='$email' where ID='$id'");


if($actu==null)
{
echo '<script>alert("ERROR EN PROCESAMIENTO NO SE ACTUALIZARON LOS DATOS")</script> ';
}
else {
	echo '<script>alert("REGISTRO ACTUALIZADO")</script> ';
}

 ?>