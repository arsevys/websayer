<?php 
error_reporting (0);//desactiva todos los notice y wraning de php
include('sesiones/conect.php');
//websayer es ->  d2Vic2F5ZXI=
//YmFsYWRhcw==
$websayer="d2Vic2F5ZXI=";
$album=$_GET["ajr"];//recibe parametro

$buscarwebsayer=strpos($album, $websayer);

if($buscarwebsayer){//este if es para que si osi tiene q estar puesto el base64 de websayer


$deco=str_replace($websayer,"",$album);//busca ese codigo "d2Vic2F5ZXI=" para eliminar y poner en blanko
	$link=base64_decode($deco);//desencripta ese codigo

}



$sql=$conexion->query("SELECT * FROM $link");

if(!$sql){//si ocurre un error que te regrese al inicio
?>

<script type="text/javascript">
window.location.href="../index.php"
</script>
<?php

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
	
	 


  <script type="text/javascript" src="../js/musica.js"></script>

<script type="text/javascript" src="../js/bootstrap.min.js"></script>
     <link rel="icon" type="image/png" href="../imagenes/IMÁGENES WEBSAYER/icono-websayer.png">

<script type="text/javascript">
	//direccionar al inicio
	
	function direini(){

		window.location.href="../index.php"
	}
</script>

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
	               		 <img class="imgs" src="../imagenes/BD_notificacion/vender.jpg" />
	               	</div>
	               	<div class="detalle_nombre">
	               		<strong>Usuario</strong>

			            	<p>Directo</p>
	               	</div>
	               	<div class="mini_monedas">
			    	 <img src="../imagenes/iconos/MONEDAS.png" alt="">
	          		<span id="moneda">--</span>
	          		</div>
		          		<div class="mini_config">
		          	<img src="../imagenes/iconos/CONFIGURAR.png" alt="">
                     <span>Configurar</apan>
                    </div>
             </div>
              

              <div class="naver_mini">
              	<div class="li_naver" >
              		<img src="../imagenes/iconos/MUSICA.png" alt="" >
              		<span onclick="direini()">Musica</span>
              	</div>
              	<div class="li_naver" >
              		<img src="../imagenes/iconos/TUS-MUSICA.png" alt="" >
              		<span onclick="direini()">Tu Musica</span>
              	</div>
              	<div class="li_naver" >
              		<img src="../imagenes/iconos/DESCUBRE.png" alt="" >
              		<span onclick="direini()">Descubre</span>
              	</div>
              	<div class="li_naver" >
              		<img src="../imagenes/iconos/REGRESAR.png" alt="" >
              		<span onclick="direini()">Regresar</span>
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
       
		          	  <img class="imgs" src="../imagenes/BD_notificacion/vender.jpg" />
		     
		          	  </div>
		          	  <div class="nom_perfil">
		          	  <strong>Usuario</strong>
		            	<p>Directo</p>
                      </div>

                       
		     </div>

		     <div class="monedas">
		     <img src="../imagenes/iconos/MONEDAS.png" alt="">
          		<span id="monedamini">--</span>
          	</div>

          	<div class="config">
          	<img src="../imagenes/iconos/CONFIGURAR.png" alt="">
                       	  <span>Configurar</apan>
             </div>
             
             <center><hr clasS="order"></center>
             

            <div class="ico">



			<div class="ic"  id="musical" onclick="direini()">
			<div class="efe">
				<p class="des">Musicas</p>
			</div>
			<div class="icono_nav">
			<img src="../imagenes/iconos/MUSICA.png" alt="">
			</div>
			</div>

            <div class="ic">
			<div class="efe" >
				<p class="des" onclick="direini()">Tus Musicas</p>
			</div>
			<div class="icono_nav">
			<img src="../imagenes/iconos/TUS-MUSICA.png" alt="">
			</div>
			</div>

			<div class="ic">
			<div class="efe">
				<p class="des" onclick="direini()">Descubre</p>
			</div>
			<div class="icono_nav">
			<img src="../imagenes/iconos/DESCUBRE.png" alt="">
			</div>
			</div>

			<div class="ic">
			<div class="efe">
				<p class="des" onclick="direini()">Regresar</p>
			</div>
			<div class="icono_nav">
			<img src="../imagenes/iconos/REGRESAR.png" alt="">
			</div>
			</div>
            
          </div>





          </div>







        <div id="navegar" class="container col-md-9 col-sm-7 col-xs-12">
	   	  





<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, use-scalable=no,initial-scale=1.0, maximum-scale=1,minimun-scale=1.0">

	<link rel="stylesheet" type="text/css" href="../css/style.css">


	<script type="text/javascript" src="../js/tumusica.js"></script>
	 
  <link rel="stylesheet" type="text/css" href="../css/tumusica.css">
	<title>Tus Musicas</title>
</head>
<body id="body_tumusica" onLoad="avanza()">
<div id="cuerpomusica">



	 <div class="detalles">

     <center>
		<div class="descripcion_detalle col-md-7 col-sm-7 col-xs-12">
       	
         <div class="decrip">
            <h4>Disfrutalo!!</h4>

 
           

            <p>Descubre  a cada momento de nuestras canciones gracias a "WEBSAYER" , para escuchar mas <br> canciones registrate y se parte de nosotros <a href="../index.php">Aqui</a></p>
          </div>
               <div class="input-group busca col-md-4 col-sm-4 col-xs-10 col-md-offset-4 col-sm-offset-4 col-xs-offset-1">
               <span class="input-group-addon"><span class="icon-search"></span></span>
              <input type="text" id="buscadoraccesodirecto" class="form-control" data-tabla="<?php echo $link; ?>">
              <script type="text/javascript" src="buscador/buscador.js" ></script>
            </div>
    </div>
        </center>

	</div>






	<div class="lista table-responsive container-fluid"  id="resultado">

<?php 


$contador=0;
echo "<table class='table'>";
echo "<thead>";
     echo "<tr>";
     echo "<td class='hidden-sm hidden-xs'>Numero</td>";
     echo "<td>Titulo</td>";
     
     echo "<td>Album</td>";
     echo "<td class='hidden-xs'>Banda</td>";
     echo "<td class='hidden-sm hidden-xs'>Tiempo</td>";
 
     echo "<td >Reproducir</td>";
   
     echo "</thead><tbody>";
while ($a=mysqli_fetch_array($sql)) {
  echo "<tr class='cor'>";
  
  $contador++;


     echo "<td class='hidden-sm hidden-xs'>$a[1]</td>";
      echo "<td class='t'>$a[2]</td>";
       echo "<td class='b'>$a[4]</td>";
        echo "<td class='hidden-xs'>$a[3]</td>";
        echo "<td class='hidden-sm hidden-xs'>$a[5]</td>";
  
        $id=$a[1];
     $titulo="\"$a[2]\"" ;
     $banda="\"$a[4]\"" ;
     $album="\"$a[3]\"" ;
     $tiempo="\"$a[5]\"" ;
     $ruta="\"$a[6]\"" ;
     $cover="\"$a[cover]\"" ;

     $tabla="\"$a[8]\"";
       echo "<td class='botones'> &nbsp<button  value='escuchar' onclick='reprod($id,$titulo,$banda,$album,$ruta,$cover,$contador)' class='cantidadmusic btn-primary btn ' class='player'><p class='icon-play3'></p></button></td>"; //la clase de cantidad music para saer el total de musica
 //  enviamos  el precio , id y la tabla para hacer la consulta
   //echo " <input type='hidden' onclick='reprod($id,$titulo,$banda,$album,$ruta,$cover)'>";
     

  echo "</tr>";}


echo "</tbody></table>";

$u=1;


 ?>


		
	</div>

	</div>
</body>
</html>






































































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