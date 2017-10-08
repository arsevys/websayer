<?php 

session_start();
$id=$_POST['id'];
include('conect.php');
$eli=$conexion->query("DELETE FROM usuario where ID='$id'");
echo "<script type='text/javascript'>alert('Usuario Eliminado');</script>";





 ?>