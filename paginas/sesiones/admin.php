
<?php 
session_start();

if(empty($_SESSION['usuario']) && empty($_SESSION['c_tra']) )
{
	session_start();
	session_destroy();
header("Location:../../index.php");

}
include('conect.php');
$p=$conexion->query("SELECT * FROM admin where usu='admin'");
$por=mysqli_fetch_array($p);
 ?>









<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="../../css/administrador1.css">	
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../../css/style.css">
	<title><?php echo $_SESSION['usuario']; ?></title>
<script type="text/javascript" src="../../js/jquery.js"></script>
<script type="text/javascript" src="../../js/ajax/ajaxindex.js"></script>
<script type="text/javascript">
	setInterval("ders();",5000);
</script>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">


<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script type="text/javascript">
  var glo = true;
	function baja(){
	var va=document.getElementById('ic');
	var vas=document.getElementById('des');
	if (glo) {
	va.classList.remove('icon-paragraph-justify');
	va.classList.add('icon-paragraph-center');
	vas.classList.remove('su');
	vas.classList.add('de');
	glo = false;
	}
	else{
	va.classList.remove('icon-paragraph-center');
	va.classList.add('icon-paragraph-justify');
	vas.classList.remove('de');
	vas.classList.add('su');
	glo = true;
      }
	}


</script>

<link rel="icon" type="image/png" href="../../imagenes/IMÁGENES WEBSAYER/icono-websayer.png" >


</head>


<body >

<div id="contenedor">

	<div class="container-fluid nax hidden-lg hidden-md ">
		<div class="container col-sm-11 col-xs-10">
		<span class="pool-left"><strong>Administrador  :</strong></span>
         <span class="pool-left"><?php echo $por['nombre']; ?></span>
         </div>
         <div class="poola col-sm-1 col-xs-1">
         <p id="ic" onclick="baja()" class="icom icon-paragraph-justify"></p>
     </div>


      
    </div>
    <div  id="des"  class="despli ">
    	   <div class="container col-sm-8 col-xs-8 ">
         	<strong>Email : </strong><p>javier@gmail.com</p><br>
         	<strong>Telefono : </strong><p>940530242</p><br>
         	<strong>Fecha de nacimiento : </strong><p>29/07/1999</p><br>
         	<strong>usuario :</strong><p>Javier</p><br>
         	<strong><a href="cerrar.php" style="color:white">cerrar Cesion</a></strong>
         	</div>
         	<div class="container col-md-4 col-xs-4">
         		<img class="img-thumbnail" src="http://scontent.cdninstagram.com/t51.2885-15/s480x480/e35/13473352_526821937505065_415797299_n.jpg?ig_cache_key=MTI3MzM1OTQwNjI3NzcwOTU0OA%3D%3D.2">
         	</div>
         </div>










       


<header class="container-fluid hidden-sm hidden-xs">
	<div class="con_per container col-md-4 col-sm-4 col-xs-5">
		<div class="imad col-md-5 col-sm-5 hidden-xs" >
	<img src="http://scontent.cdninstagram.com/t51.2885-15/s480x480/e35/13473352_526821937505065_415797299_n.jpg?ig_cache_key=MTI3MzM1OTQwNjI3NzcwOTU0OA%3D%3D.2">
	     </div>
    <center>
    	<p><strong>Administrador</strong></p>
	<p><?php echo $por['nombre']; ?></p>
	<a href="cerrar.php" style="color:white">cerrar Cesion</a>
	</center>
	</div>


	<div class="container con_per col-lg-8 col-md-8">
		    <div class="container col-lg-6 col-md-6">
		    <strong>Email : </strong><p>andyrobersjavierreyes@gmail.com</p><br>
         	<strong>Telefono : </strong><p>930695094</p><br>
         	</div>
         	<div class="container col-lg-6 col-md-6">
         	<strong>Fecha de nacimiento : </strong><p>27/08/1997</p><br>
         	<strong>usuario :</strong><p>Reaper</p><br>
         	</div>
	</div>
	
	


</header>


<div class="raw container col-md-12 col-sm-12 col-xs-12">
		<section class="container col-md-9 col-sm-12 col-xs-12">

			<article id="are" class="table-responsive container">
		
				<img class="loadin" src="../../imagenes/admin/cargar.gif">

			</article>

		</section>

		<aside id="era" class="container col-md-3 col-sm-12 col-xs-12"> </aside>

</div>

</div>
	<!--<p id="eli"></p>-->

</body>
</html>