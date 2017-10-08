<?php 
session_start();
include('conect.php');
$id=$_SESSION['ide'];
$com=$_SESSION['comtra'];



$consulta="SELECT * FROM usuario where ID='$id' ";
$consu=mysqli_query($conexion , $consulta);
while($rol=mysqli_fetch_array($consu))
{

$comtra=$rol['comtra'];
}




if($com ==$comtra){ // si la comtraaseña es igual siguinos normal
	
echo "";


}

else {//pero si no es igual la pagina se destruye sesion y se direcciona
//echo "<script>	window.location.href='../index.php';</script>";
	session_start();
	session_destroy();
echo "<script>	window.location.href='../index.php';</script>";
}



 ?>