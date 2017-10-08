<?php 
session_start();
sleep(2);
include('../sesiones/conect.php');
$vis="SELECT * FROM mensajes";

$mostrar=mysqli_query($conexion,$vis);
/*$contarmensajes=mysqli_num_rows($mostrar);//aqui se vamos a saber cuantos mensajes hay
$_SESSION['mensajes']=$contarmensajes;*/
while ($row=mysqli_fetch_array($mostrar)) {


echo "<p><b>".$row['usuario']." :</b>" ." ". $row['mensaje'] ." <a id=hora_chat>".$row['tiempo']."</a></p><br>";


}


$ultimahora=$conexion->query("SELECT tiempo from mensajes order by id desc limit 1");
while ($b=mysqli_fetch_row($ultimahora)) {
	$tiempoguardado=$b[0];
	$_SESSION['mensajes']=$tiempoguardado; // guardamos el ultimo tiempo guardado
}




 ?>
