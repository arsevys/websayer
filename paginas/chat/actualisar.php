 <?php 
session_start();
$tm=$_SESSION['mensajes'];
include('../sesiones/conect.php');
$vis="SELECT * FROM mensajes where tiempo >'$tm'";

$mostrar=mysqli_query($conexion,$vis);

while ($row=mysqli_fetch_array($mostrar)) {


echo "<p><b>".$row['usuario']." :</b>" ." ". $row['mensaje'] ." <a id=hora_chat>".$row['tiempo']."</a></p><br>";

}


$ultimahora=$conexion->query("SELECT tiempo from mensajes order by id desc limit 1");
while ($b=mysqli_fetch_row($ultimahora)) {
	$tiempoguardado=$b[0];
	$_SESSION['mensajes']=$tiempoguardado; /// guardamos la ultima hora de un msg para asi despues visualisar los ultimos msg
}




 ?>
