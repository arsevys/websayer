<?php 
session_start();
$idusuario=$_SESSION['ide'];
$monedas=$_SESSION['monedas'];
include('../sesiones/conect.php');
$respuestasusuario=json_decode(stripslashes($_POST['data']));  //este variable es un array que tiene las respuestas marcadas por el usuario
$respuestas=$_SESSION['cuestionario']; // aqui esta las respuestas oficiales
/*foreach (array_combine($respuestasusuario, $_SESSION['cuestionario']) as $code => $name) {
    echo $code."->".$name."<br>";
}*/
$correctos=0;
$errores=0;
for($i=0;$i<=9;$i++) //aqui comprobamos el array que se creo guardando tus respuesta y despues lo comprobamos con las respuestas  verdaderas
{
if($respuestasusuario[$i]==$respuestas[$i]){
$correctos++;
}
else {
	$errores++;
}

}
//sacar monedas de la bd del usuario 
$saca=$conexion->query("SELECT monedas from usuario where id='$idusuario'");
while($r=mysqli_fetch_array($saca)){
$monedas=$r['monedas'];
}

if($correctos>=6 && $correctos<=7 ){
$incremento=$monedas + 2;
$conexion->query("UPDATE usuario set monedas='$incremento' where ID='$idusuario'");
?>
<script type="text/javascript">
	document.getElementById('cara').innerHTML='<img src=../../imagenes/BD_cuestionario/normal.png  width=120 height=120>';
	document.getElementById('palabras').innerHTML='No Estubo Mal Para Un Novato';
	document.getElementById('premio').innerHTML='Ganastes :<img src=../../imagenes/iconos/MONEDAS.png  width=30 height=30> 2';
</script>
<?php
}


else if ($correctos>=8 && $correctos<=9) {
	$incremento=$monedas + 4;
$conexion->query("UPDATE usuario set monedas='$incremento' where ID='$idusuario'");

?>
<script type="text/javascript">
	document.getElementById('cara').innerHTML='<img src=../../imagenes/BD_cuestionario/bien.png  width=120 height=120>';
	document.getElementById('palabras').innerHTML='Sigue Intentando!!';
	document.getElementById('premio').innerHTML='Ganastes :<img src=../../imagenes/iconos/MONEDAS.png width=30 height=30> 4';
</script>
<?php

}


else if ($correctos==10) {
	$incremento=$monedas + 5;
$conexion->query("UPDATE usuario set monedas='$incremento' where ID='$idusuario'");

?>
<script type="text/javascript">
	document.getElementById('cara').innerHTML='<img src=../../imagenes/BD_cuestionario/muybien.png  width=120 height=120>';
	document.getElementById('palabras').innerHTML='ERES UN VERDADERO ROCKERO!!';
	document.getElementById('premio').innerHTML='Ganastes :<img src=../../imagenes/iconos/MONEDAS.png  width=30 height=30> 5';
</script>
<?php


}



else {
	$incremento=$monedas - 3;
$conexion->query("UPDATE usuario set monedas='$incremento' where ID='$idusuario'");

?>
<script type="text/javascript">
	document.getElementById('cara').innerHTML='<img src=../../imagenes/BD_cuestionario/pesimo.png  width=120 height=120>';
	document.getElementById('palabras').innerHTML='No eres Rockero';
	document.getElementById('premio').innerHTML='Perdistes : <img src=../../imagenes/iconos/MONEDAS.png  width=30 height=30> 3  ';
</script>
<?php

}

 ?>
<div id="preguntauno">
	<center><h1>Resultado</h1></center>
	<center><p id="palabras"></p></center>
	<center><div id="premio"></div></center>
	
	<center><p id="bien"><strong>Correctos : <?php echo $correctos;  ?></strong></p></center>
	<center><p id="mal"><strong>Errores : <?php echo $errores;  ?></strong></p></center>
	<center><div id="cara"></div><div><img src="../../imagenes/BD_cuestionario/repetir.png" width="100" height="100" onclick="location.reload();" style="float: 
	left;"></div></center>
</div>