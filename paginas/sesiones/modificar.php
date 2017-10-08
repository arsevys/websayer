<?php 
session_start();
if (@!$_SESSION['usuario']) {
header("Location:../index.php");
}
?>

<?php
$id=$_POST['as'];
include('conect.php');
$sql=$conexion->query("SELECT * FROM usuario where ID='$id'");

while ($row=@mysqli_fetch_array($sql)) {
	$id=$row[0];
	$nom=$row[1];
	$ape=$row[2];
	$edad=$row[3];
	$nick=$row[4];
	$com=$row[5];
	$telef=$row[6];
	$fecha=$row[7];
	$email=$row[8];
	
}



 ?>
 <form  method="POST" class="formu container-fluid">
 	<div class="freee container col-md-12 col-sm-6 col-xs-12">
 	<div class="input-groud">
 	Codigo ID <br>
 	<input type="text" class="form-control" name="id"  value="<?php echo $id; ?>" readonly="readonly"><br>
 	</div>
 	<div class="input-groud">
 	Nombre <br>
 	<input type="text" class="form-control" name="nom" value="<?php echo $nom; ?>"><br>
    </div>
 	<div class="input-groud">
    Apellido<br>
 	<input type="text" class="form-control" name="ape" value="<?php echo $ape; ?>"><br>
 	</div>
 	<div class="input-groud">
 	Edad <br>
 	<input type="text" class="form-control" name="edad" value="<?php echo $edad ?>"><br>
 	</div>
 	<div class="input-groud">
 	Nick <br>
 	<input type="text" class="form-control" name="nick" value="<?php echo $nick ?>"> <br>
 	</div>
 	</div>


     <div class="fraaa container col-md-12 col-sm-6 col-xs-12">
 	<div class="input-groud">
 	Contraseña <br>
 	<input type="text" class="form-control" name="com" value="<?php echo $com ?>"><br>
 	</div>
 	<div class="input-groud">
 	Telefono<br>
 	<input type="text" class="form-control" name="tele" value="<?php echo $telef?>"><br>
 	</div>
 	<div class="input-groud">
 	Fecha de nacimiento <br>
 	<input type="date" class="form-control" name="fech" value="<?php echo $fecha ?>"><br>
 	</div>
 	<div class="input-groud">
 	Email <br>
 	<input type="text" class="form-control" name="email" value="<?php echo $email ?>"><br>
 	</div>
 	<center>
 	<input type="button" class="btn btn-primary" name="" value="Guardar" onclick="actualizar()">
 	<p id="ac"></p>
 	</center>
 	</div>
</form>
