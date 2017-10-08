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
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	
      <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="../css/musica.css">
	   <script type="text/javascript" src="../js/jquery.js"></script>
	   <script type="text/javascript" src="../js/funcionsiguiente.js"></script>
	   <script type="text/javascript" src="../js/comprarmusica.js"></script>
	   <script type="text/javascript" src="../js/ajax/seccionmusica.js"></script>



  <script type="text/javascript" src="../js/musica.js"></script>

<script type="text/javascript" src="../js/bootstrap.min.js"></script>
     <link rel="icon" type="image/png" href="../imagenes/IMÁGENES WEBSAYER/icono-websayer.png">



</head>
<body>
	<div id="cuerpo">

           <div class="navegador_mini visible-xs">
                 <div class="logis">
              <img src="../imagenes/logo/logo-websayer-para-fondo-negro.png" alt="">
               </div>

               <div class="desplazar">
                <p id="icono_des" class="icon-paragraph-justify" onclick="menu()"></p>
               </div>

        </div>


<div id="opciones" class="visible-xs">
   

                <div class="logo_mini">
              		<img src="../imagenes/logo/logo-websayer-para-fondo-negro.png" alt="">
               </div> 
		          	

               <div class="detalles_perfil">
	               	<div class="detalle_foto">
	               		 <img class="imgs" src="../imagenes/perfil/<?php echo $foto; ?>" />
	               	</div>
	               	<div class="detalle_nombre">
	               		<strong><?php echo $nom; ?></strong>

			            	<p><?php echo $ape; ?></p>
	               	</div>
	               	<div class="mini_monedas">
			    	 <img src="../imagenes/iconos/MONEDAS.png" alt="">
	          		<span id="moneda"><?php echo $moneda; ?></span>
	          		</div>
		          		<div class="mini_config">
		          	<img src="../imagenes/iconos/CONFIGURAR.png" alt="">
                     <span>Configurar</apan>
                    </div>
             </div>
              

              <div class="naver_mini">
              	<div class="li_naver" >
              		<img src="../imagenes/iconos/MUSICA.png" alt="" >
              		<span onclick="galeriamusica()">Musica</span>
              	</div>
              	<div class="li_naver" >
              		<img src="../imagenes/iconos/TUS-MUSICA.png" alt="" >
              		<span onclick="vertumusica()">Tu Musica</span>
              	</div>
              	<div class="li_naver" >
              		<img src="../imagenes/iconos/DESCUBRE.png" alt="" >
              		<span onclick="regalo()">Descubre</span>
              	</div>
              	<div class="li_naver" >
              		<img src="../imagenes/iconos/REGRESAR.png" alt="" >
              		<span onclick="galeriamusica()">Regresar</span>
              	</div>
              </div>




</div>
<div class="menosopcion" onclick="menumenos()">
  
</div>


		<div id="perfil" class="col-md-1 col-sm-2 hidden-xs">
		
			<div id="logo">
			<img src="../imagenes/logo/icono-websayer.png" alt="">
            </div>

             <div class="perfil">
                     <div class="img_perfil">
       
		          	  <img class="imgs" src="../imagenes/perfil/<?php echo $foto; ?>" />
		     
		          	  </div>
		          	  <div class="nom_perfil">
		          	  <strong><?php echo $nom; ?></strong>
		            	<p><?php echo $ape; ?></p>
                      </div>

                       
		     </div>

		     <div class="monedas">
		     <img src="../imagenes/iconos/MONEDAS.png" alt="">
          		<span id="monedamini"><?php echo $moneda; ?></span>
          	</div>

          	<div class="config">
          	<img src="../imagenes/iconos/CONFIGURAR.png" alt="">
                       	  <span>Configurar</apan>
             </div>
             
             <center><hr clasS="order"></center>
             

            <div class="ico">



			<div class="ic"  id="musical" onclick="galeriamusica()">
			<div class="efe">
				<p class="des">Musicas</p>
			</div>
			<div class="icono_nav">
			<img src="../imagenes/iconos/MUSICA.png" alt="">
			</div>
			</div>

            <div class="ic">
			<div class="efe" onclick="vertumusica()">
				<p class="des" >Tus Musicas</p>
			</div>
			<div class="icono_nav">
			<img src="../imagenes/iconos/TUS-MUSICA.png" alt="">
			</div>
			</div>

			<div class="ic">
			<div class="efe">
				<p class="des" onclick="regalo()">Descubre</p>
			</div>
			<div class="icono_nav">
			<img src="../imagenes/iconos/DESCUBRE.png" alt="">
			</div>
			</div>

			<div class="ic">
			<div class="efe">
				<p class="des" onclick="galeriamusica()">Regresar</p>
			</div>
			<div class="icono_nav">
			<img src="../imagenes/iconos/REGRESAR.png" alt="">
			</div>
			</div>
            
          </div>





          </div>







        <div id="navegar" class="container col-md-9 col-sm-7 col-xs-12">
	   	  <?php 
        include('musica/artistas.php');
		    ?>
		   </div>




		<div id="reproductor" class="col-md-2 col-sm-3 reproductor">
			
          <div id="reprodu" class="repro">


		            <div class="repro_img">
		             <img  id="cover" src="../imagenes/fondos/fondo-reproductor.png" onClick="apli()">
		          	</div>
                   <div class="br">
                 <br>
          
                 </div>
		         
                          <div class="des">
                    	<marquee id="titulo">----</marquee>
                    	<p id="banda">-----------</p>
                      <span class="gion">-</span>
                    	<p id="album">--------</p>
                    </div>
                 
                    <div class="avance">

                    <input id="range" type="range" slep="0.1" min="0" max="100" value="0" name="" onmouseup="mueve()">
                    <progress id="progre" value="0" max="100">
                   
                   
                    </div>
                    <div class="br">
                 <br>
    
                 </div>
		          	<div class="contro">
		          	<audio id="musica" src=""></audio>
		          	       
		          		<img class="btn_control" src="../imagenes/iconos/anterior.png" alt="" onClick="atrasmusica()">
		          	
<span id="pla" onclick="play()" class="ico_play icon-play3"></span>
		          	   

		          	    <img id="sigue" class="btn_control" src="../imagenes/iconos/siguiente.png" alt="" onClick="siguiente()">

		 
		          	</div>
		          	 <div class="br">
                     <br>
                    </div>
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
                    

                         <img class="btn_control" src="../imagenes/iconos/volumen.png" alt=""  onclick="apavol()" >

		          	    <img class="btn_control" src="../imagenes/iconos/agrandar-pantalla.png" alt="" onClick="apli()" >
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