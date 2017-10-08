<?php 
session_start();
$tm=$_SESSION['mensajes'];
$usu = $_POST['usuario'];
$men = $_POST['mensaje'];
include('../sesiones/conect.php');




switch ($men) {


	///////////abuelo :)///////////////////

case '/.abuelo': /// caso abuelo :)

$mn="<img src=../imagenes/chat/abuelo.jpg width=180 height=180>";

$consulta="INSERT INTO mensajes(usuario,mensaje) values('$usu','$mn')";
mysqli_query($conexion , $consulta);

$vis="SELECT * FROM mensajes where tiempo >'$tm' ";

$mostrar=mysqli_query($conexion,$vis); 

//$nuevafecha = strtotime ( '+30 second' , strtotime ( $tiempo) ) ;
while ($row=mysqli_fetch_array($mostrar)) {
	echo "<p><b>".$row['usuario']." :</b>" ." ". $row['mensaje'] ." <a id=hora_chat>".$row['tiempo']."</a></p><br>";

}

$ultimahora=$conexion->query("SELECT tiempo from mensajes order by id desc limit 1");
while ($b=mysqli_fetch_row($ultimahora)){ 
	$tiempoguardado=$b[0];
}

$_SESSION['mensajes']=$tiempoguardado;

break;
	
////////////////////////////cibertec/////////////////////////////////////////
case '/.cibertec': /// caso abuelo :)

$mn="<img src=../imagenes/chat/cibertec.jpg width=280 height=100>";

$consulta="INSERT INTO mensajes(usuario,mensaje) values('$usu','$mn')";
mysqli_query($conexion , $consulta);
$vis="SELECT * FROM mensajes where tiempo >'$tm' ";

$mostrar=mysqli_query($conexion,$vis);
//$nuevafecha = strtotime ( '+30 second' , strtotime ( $tiempo) ) ;
while ($row=mysqli_fetch_array($mostrar)) {
echo "<p><b>".$row['usuario']." :</b>" ." ". $row['mensaje'] ." <a id=hora_chat>".$row['tiempo']."</a></p><br>";

}
$ultimahora=$conexion->query("SELECT tiempo from mensajes order by id desc limit 1");
while ($b=mysqli_fetch_row($ultimahora)) {
	$tiempoguardado=$b[0];
}

$_SESSION['mensajes']=$tiempoguardado;

break;
	

///////////////descripcion/////////////////////////////////////




case '/.descri': /// caso abuelo :)

$mn="<div id=descri><table >
		<tr><td><b>Descripcion :</b></td></tr>
		<tr><td><b>Integrantes</b><ul><li>Andy Robers Javier Reyes</li><li>Jhonatan Kevin Javier Reyes</li></ul></td>
		</tr>
		<tr>
			<td><b>Proyecto:</b>WebSayer 2016</td>
		</tr>
		<tr>
			<td><b>Profesor:</b> DAmazo Lopez Aragon</td>
		</tr>		
	</table></div>";

$consulta="INSERT INTO mensajes(usuario,mensaje) values('$usu','$mn')";
mysqli_query($conexion , $consulta);
$vis="SELECT * FROM mensajes where tiempo >'$tm' ";

$mostrar=mysqli_query($conexion,$vis);
//$nuevafecha = strtotime ( '+30 second' , strtotime ( $tiempo) ) ;
while ($row=mysqli_fetch_array($mostrar)) {
echo "<p><b>".$row['usuario']." :</b>" ." ". $row['mensaje'] ." <a id=hora_chat>".$row['tiempo']."</a></p><br>";

}
$ultimahora=$conexion->query("SELECT tiempo from mensajes order by id desc limit 1");
while ($b=mysqli_fetch_row($ultimahora)) {
	$tiempoguardado=$b[0];
}

$_SESSION['mensajes']=$tiempoguardado;

break;
	

	









	default:
			$consulta="INSERT INTO mensajes(usuario,mensaje) values('$usu','$men')";
mysqli_query($conexion , $consulta);

/*$hora=$conexion->query("SELECT now()");

while ($a=mysqli_fetch_row($hora)) {
	$tiempo=$a[0];
}*/


$vis="SELECT * FROM mensajes where tiempo >'$tm' ";  // comparamos el tiempo de eelultimo mensaje q se guardo para asi visualisar los nuevos msg

$mostrar=mysqli_query($conexion,$vis);
//$nuevafecha = strtotime ( '+30 second' , strtotime ( $tiempo) ) ;
while ($row=mysqli_fetch_array($mostrar)) {
echo "<p><b>".$row['usuario']." :</b>" ." ". $row['mensaje'] ." <a id=hora_chat>".$row['tiempo']."</a></p><br>";

}
$ultimahora=$conexion->query("SELECT tiempo from mensajes order by id desc limit 1");
while ($b=mysqli_fetch_row($ultimahora)) {
	$tiempoguardado=$b[0];
}

$_SESSION['mensajes']=$tiempoguardado;

		break;
}










 ?>