<?php 
session_start();
$random=$_POST['num'];

include('conect.php');

$sql=$conexion->query("SELECT * FROM pregunta1 where id='$random'");

while($a=mysqli_fetch_array($sql)){

$pregunta=$a['pregunta'];
$opcion1=$a['opcion1'];
$opcion2=$a['opcion2'];
$opcion3=$a['opcion3'];
$opcion4=$a['opcion4'];
$opcion5=$a['opcion5'];
$imagen=$a['imagen'];
$respuesta=$a['respuesta'];

}
//echo $random+1;
array_push($_SESSION['cuestionario'],$respuesta);
//print_r ($_SESSION['cuestionario']);
$_SESSION['cantidaddepreguntas']+=1;
?>
<div id="preguntauno" >

	<p><?php echo $pregunta; ?></p>

<form name="formulario" style="float: left;width: 55%;">
<label for="a"></label>
<input type="radio" name="a" value="opcion1" id="a"><strong>a) <?php echo $opcion1; ?></strong><br>

<label for="b"></label>
<input type="radio" name="a" value="opcion2" id="b"><strong>b) <?php echo $opcion2; ?></strong><br>
<input type="radio" name="a" value="opcion3"><strong>c) <?php echo $opcion3; ?></strong><br>
<input type="radio" name="a" value="opcion4"><strong>d) <?php echo $opcion4; ?></strong><br>
<input type="radio" name="a" value="opcion5"><strong>e) <?php echo $opcion5; ?></strong><br></form>


<?php if ($_SESSION['cantidaddepreguntas']>=10){
       ?>

<img src="../../imagenes/BD_cuestionario/revision.png" onclick="resultados()" width="80" height="80">
<?php
       
}

else {
	?>


<img src="../../imagenes/BD_cuestionario/siguiente.png" onclick="cambiarpregunta()" width="80" height="80" >
<?php
}

	?>

	<br clear="all"><br>
<center><div><img src="../../imagenes/<?php  echo $imagen;?>" width='200' height=200></div></center>

<p>Pregunta N° :<?php echo $_SESSION['cantidaddepreguntas'] ?> </p>
	
</div>




<?php





 ?>