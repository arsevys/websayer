<?php 
//aqui recibe los datos del metodo post enviados del ajax registrar() del archivo js/ajax/ajaxindex.js
    $nom=$_POST['nom'];
	$ape=$_POST['ape'];
	$email=$_POST['email'];
	$fecha=$_POST['fecha'];
	$telef=$_POST['telef'];
	$usu=$_POST['usuar'];
	$com=$_POST['com'];

	include ('conect.php');

$veri=mysqli_query($conexion,"SELECT nick FROM usuario WHERE nick=$usu ");
if(empty($nom))
{
		echo "<script> document.getElementById('bienve').innerHTML='Error en el nombre';apliar();</script>";
}


else if(empty($ape)){
	echo "<script> document.getElementById('bienve').innerHTML='Error en el Apellido';apliar();</script>";
}

else if(empty($email)){
	echo "<script> document.getElementById('bienve').innerHTML='Error en el Email';apliar();</script>";
}

else if(empty($fecha)){
	echo "<script> document.getElementById('bienve').innerHTML='Error en la Fecha';apliar();</script>";
}

else if(empty($telef)){
		echo "<script> document.getElementById('bienve').innerHTML='Error en el Telefono';apliar();</script>";
}

else if(empty($usu)){	echo "<script> document.getElementById('bienve').innerHTML='Error en el Usuario';apliar();</script>";
}

else if(empty($com)){
	echo "<script> document.getElementById('bienve').innerHTML='Error en La Comtraseña';apliar();</script>";
}




else if($veri)
{

	echo "<script> document.getElementById('bienve').innerHTML='Error en el Usuario';apliar();</script>";
}


else {
/* explicacion aqui si todo las condicionales son falso eso quiere decir q el formulario estar rellenado correctamente primero en este se procede los siguientes pasos
- se hace un insert into par guardar los datos
-aparecemos una ventan con el dato de los nombres
-y en la funcion loding  limpiamos el formulario y nos dirigimos ala opcion de login
*/
	$regis=mysqli_query( $conexion,"INSERT INTO usuario(nombre,apellido,email,fecha,telefono,nick,comtra,monedas,foto) VALUES ('$nom','$ape','$email','$fecha','$telef','$usu','$com','10','perfildemo.jpg')");
		echo "<script> document.getElementById('bienve').innerHTML='Registrado Correctamente ".$usu."';apliar();document.getElementById('btnaceptar').addEventListener('click',loding);
		function loding(){
			 	$('#dlogin').click();
			 	$('#nom').val('');
			 	$('#fec').val('');
 		$('#ape').val('');
 		$('#ema').val('');
 		$('#tel').val('');
 		$('#usua').val('');
 		$('#contra').val('');
 		
		}</script>";
}



 ?>