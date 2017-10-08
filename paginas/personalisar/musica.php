<?php 
session_start();
$id=$_SESSION['ide'];
if(empty($SESSION_['usuario'])& empty($_SESSION['comtra']))
{
	session_start();
	session_destroy();
header("Location:../index.php");
}

include('sesiones/conect.php');

$sacar=$conexion->query("SELECT * FROM usuario where ID='$id'");
while($row=mysqli_fetch_row($sacar))
{
     $nom=$row[1];
$ape=$row[2];
	$foto=$row[9];
	$moneda=$row[10];
}

 ?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Musica</title>
    <meta name="viewport" content="width=device-width, suse-scalable=no,initial-scale=1.0, maximum-scale=1,minimun-scale=1.0">

	<link rel="stylesheet" type="text/css" href="../css/musica.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
  <script type="text/javascript" src="../js/musica.js"></script>
   <script type="text/javascript" src="../js/jquery.js"></script>
   <script type="text/javascript" src="../js/funcionsiguiente.js"></script>
   <script type="text/javascript" src="../js/comprarmusica.js"></script>
   <script type="text/javascript" src="../js/ajax/seccionmusica.js"></script>
   <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">


<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
      


</head>
<body>
	<div id="cuerpo">
		<div id="perfil" class="container col-md-1 col-sm-2 hidden-xs">
		
			<div id="logo">
			<p>WEB SAYER</p>
            </div>

            <div class="ico">



			<div class="ic">
			<div class="efe"></div>
	
			<p class="icomos icon-music"></p>
			<p class="des" onclick="galeriamusica()">Musicas</p>
		
			</div>
			
			<div class="ic">
				<div class="efe"></div>
			<p class="icomos icon-folder"></p>
			<p class="des" onclick="vertumusica()">Tus musicas</p>
			</div>

            <div class="ic">
            <div class="efe"></div>
			<p class="icomos icon-gift"></p>
			<p class="des">Descubre</p>
			</div>

			<div class="ic">
				<div class="efe"></div>
			<p class="icomos icon-enter"></p>
			<p class="des">Regresar</p>
			</div>

			</div>
            
          
          <div class="min_per">

             
             <div class="money">
          	<div class="img_money bg-success">          		
          	    <img src="../imagenes/monedas.png">
          	</div>
            <div class="img_can">
          		<span id="moneda"><?php echo $moneda; ?></span>
          		<p style="display: none" id="resultadomoneda"></p>
          	</div>
          	</div>
                 <br>


                    <div class="deasa">
           
                         	
		          	<center class="gold">

		            
		          	<img class="imgs" src="../imagenes/perfil/<?php echo $foto;; ?>" />
		          	<p><?php echo $nom.' '.$ape; ?></p>
		          	</center>
		             <p class="icon-wrench"></p>
		           </div>
          </div>



		</div>





		<div id="navegar" class="container col-md-9 col-sm-7 col-xs-12">
		<?php 
         include('musica/rockes.php');

		 ?>
		</div>


		<div id="reproductor" class="container col-md-2 col-sm-3 col-xs-12">
			
          <div id="reprodu" class="repro">


		            <div class="repro_img">
		             <img  id="cover" src="../imagenes/fon3.jpg">
		          	</div>
		          	 <br>
                          <div class="des">
                    	<marquee id="titulo">Amnesia</marquee>
                    	<p id="banda">5 second of summer</p>
                    	<p id="album">She Look So Perfet</p>
                    </div>
                 
                    <div class="avance">

                    <input id="range" type="range" min="0" max="100" value="0" name="" onmouseup="mueve()">
                    <progress id="progre" value="0" max="100">
                   
                   
                    </div>
                     <br>


		          	<div class="contro">
		          	<audio id="musica" src="../musica/jon-woman.mp3"></audio>
		          	       
		          		<span class="icon-first" onClick="atrasmusica()"></span>
		          	
		          		<span id="pla" onclick="play()" class="icos icon-play3"></span>
		          		
		          		<span class="icon-last" onClick="siguiente()"></span>	
		                
		          	</div>
		          	<br>
		          	<div class="extras">

		      
		          		
                         <div class="con" >
                         <span onclick="volumen(0)">-</span>

                         <div class="vola">
                         <center>
                         
		          		 <input id="rang_vo" type="range" min="0" max="10" step="1" onmouseup="continuo(0)">
                         <progress id="pros_vo" value="10" max="10">
                         </center>

                         </div>
                        <span onclick="volumen(1)">+</span>
                         </div>

                          <div id="icomos">
                         <span class="icon-volume-high" onclick="apavol()"></span>
                         <span onClick="apli()" class="icon-enlarge"></span>
                         </div>
		          	</div>

                  <br>
          </div>


		</div>
		




	</div>
</body>
<script type="text/javascript">
	
	var contadordemusica=0;

	var resaltar=contadordemusica;
</script>
</html>