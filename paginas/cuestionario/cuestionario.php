<?php 
session_start();
$_SESSION['cuestionario']=[];
$_SESSION['cantidaddepreguntas']=0;
include('../sesiones/conect.php');
$id=$_SESSION['ide'];
$consulta="SELECT * FROM usuario where ID='$id' ";
$consu=mysqli_query($conexion , $consulta);
while($row=mysqli_fetch_array($consu))
{
$nom=$row['nombre'];
$ape=$row['apellido'];
$edad=$row['edad'];
$foto=$row['foto'];
$monedas=$row['monedas'];
}

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<script type="text/javascript" src="jquery.js"></script>
	
	<title>Cuestionario</title>
	<link rel="stylesheet" type="text/css" href="cuestionario.css">
	<link rel="icon" type="image/png" href="../../imagenes/IMÁGENES WEBSAYER/icono-websayer.png">
</head>
<body>
<div id="usuario">
<center><img src="../../imagenes/perfil/<?php echo $foto; ?>" height=200 width=200></center>
<center><p><strong><?php echo $nom." ".$ape ;?></strong></p></center>
<br>

<div id="imgmonedas"><img src="../../imagenes/iconos/MONEDAS.png" width="60" height="60"></div>
<p id="mone"><?php echo $monedas; ?></p>
<center><table>
	<tr><td colspan="3">Premios Y Perdidas :</td></tr>
	<tr>
		<td>Acertas las 10 preguntas :</td>
		<td><img src="../../imagenes/iconos/MONEDAS.png" width="30" height="30"></td>
		<td>5</td>
	</tr>
	<tr>
		<td>Acertas de 8 o 9 preguntas :</td>
		<td><img src="../../imagenes/iconos/MONEDAS.png" width="30" height="30"></td>
		<td>4</td>
	</tr>
	<tr>
		<td>Acertas de 6 o 7 :</td>
		<td><img src="../../imagenes/iconos/MONEDAS.png" width="30" height="30"></td>
		<td>2</td>
	</tr>
	<tr>
		<td>Acertas menos de 6:</td>
		<td><img src="../../imagenes/iconos/MONEDAS.png" width="30" height="30"></td>
		<td>-3</td>
	</tr>

</table></center>

</div>



	<div id="contenedorpregunta">
		<div id="presentacion">
			<img src="../../imagenes/BD_cuestionario/bienvenidos.png" width="460" height="130"><br>
			<img  class="empe" src="../../imagenes/BD_cuestionario/empesar.png" width="250" height="100" onclick="empesar()">
		</div>
	</div>

<div id="as"></div>







</body>
<script type="text/javascript" src="cuestionario.js"></script>
</html>