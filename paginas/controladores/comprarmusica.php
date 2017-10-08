<?php 

session_start();

$idusuario=$_SESSION['ide'];
$id=$_POST['id'];
$tabla=$_POST['tabla'];
$precio=$_POST['precio'];
$enviar=array();


include('../sesiones/conect.php');

$preciosql="SELECT * FROM usuario where ID='$idusuario'";
$consulta=mysqli_query($conexion,$preciosql);
while ($saca=mysqli_fetch_array($consulta)) {

	$pre_usu=$saca['monedas']; // sacamos las monedas que tiene el usuario
}

///sacamos los datos de la cancion que vamos a comprar y lo insertamos en una nueva tabla
$con=$conexion->query("SELECT * FROM $tabla where id='$id'");
while ($cancion=mysqli_fetch_array($con)) {
	$idp=$cancion['id'];
	$titulo=$cancion['titulo'];
	$album=$cancion['album'];
	$banda=$cancion['banda'];
	$tiempo=$cancion['tiempo'];
    $ruta=$cancion['ruta'];
	$cover=$cancion['cover'];
	$tab=$cancion['tabla'];
}




if($pre_usu >=  $precio ){ //aqui el precio tiene que ser igual o mayor que las monedas del usuario para continuar con la compra

$descontar=$pre_usu - $precio;
$exito=$conexion->query("UPDATE usuario set monedas='$descontar' where ID='$idusuario'");


//aqui se inserta en la tabla bs de musica el usuario que lo compro
$trasladar=$conexion->query("INSERT INTO bd_musica(usuario,numero,titulo,album,banda,tiempo,ruta,cover,tabla) values($idusuario,$idp,'$titulo','$album','$banda','$tiempo','$ruta','$cover','$tab')");


if($exito){
$preciosql="SELECT * FROM usuario where ID='$idusuario'";

$consulta=mysqli_query($conexion,$preciosql);
while ($saca=mysqli_fetch_array($consulta)) {

	$mone=$saca['monedas']; // sacamos las monedas que tiene el usuario
}


$enviar['moneda']= $mone; //una ves que sacamos las monedas lo guardamos en un array tipo json
$enviar['validar']=true;
}

}

else {

	$error="<script>alert('Error no tienes monedas suficientes');</script>";
	$enviar['error']=$error;
     $enviar['moneda']= $pre_usu;
	$enviar['validar']=false;
	
}


$r =json_encode($enviar);
echo $r;

?>