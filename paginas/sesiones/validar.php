<?php 
session_start();


//aqui recibe los datos del metodo posy enviados del ajax consulta() del archivo js/ajax/ajaxindex.js
$usu=$_POST['usu'];
$com=$_POST['com'];

//query para administrador
include('conect.php');
$padm=$conexion->query("SELECT * FROM admin where usu='$usu'"); //validar administrador
/*validar un usuario*/
$usua=$conexion->query("SELECT * FROM usuario where nick='$usu' ");



////-----------primera verificacion---/////////////////


if ($o=mysqli_fetch_array($padm)) {

	if ($com==$o['comtra']) {
		$_SESSION['usuario']=$usu;
		$_SESSION['c_tra']=$com;



		
	?>
	<script>

 document.getElementById('bienve').innerHTML="Bienvenido administrador";
 document.getElementById("btnaceptar").addEventListener("click",novas);

    apliar();

  	function novas() {
  	  	window.location.href="paginas/sesiones/admin.php";
  	}

	</script>
	<?php

	}
	else {

		?>
	<script>
		document.getElementById('bienve').innerHTML="comtraseña del administrador incorrecta";
	 apliar();

	</script>
	<?php
	}
}






////-----------segunda  verificacion---/////////////////


/*validar un usuario*/
else if ($per=mysqli_fetch_array($usua))
{
   if ($com==$per['comtra']) {
   	$_SESSION['usuario']=$usu;
   	$_SESSION['comtra']=$com; //ponemos es session el dato de la comtraseña
     $_SESSION['ide']=$per['ID']; //sacamos id
   	?>
  <script type="text/javascript">
   apliar();
    
 document.getElementById('bienve').innerHTML="Bienvenido  <?php echo $per['nombre']; ?>";
 document.getElementById("btnaceptar").addEventListener("click",nova);

    

  	function nova() {
  	  	window.location.href="paginas/foros.php";
  	}


  </script>

   	<?php

   	//echo 'window.location.href="paginas/foros.html";';
   }

else
	{  
      ?> 
<script type="text/javascript">
   
	document.getElementById('bienve').innerHTML="Comtraseña de <?php echo $per['nombre']; ?> incorrecta";
	 apliar();


</script>

      <?php
	}

}











////-----------tercera   verificacion   ese concluye en q ningun usuario existe---/////////////////







else {
	      ?> 
<script type="text/javascript">
	document.getElementById('bienve').innerHTML="no existe este usuario";
	 apliar();
</script>

      <?php
}


 ?>
