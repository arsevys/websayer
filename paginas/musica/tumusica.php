
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
            <h4>Tus Musicas</h4>

            <strong>Descripcion :</strong>
 
           

            <p>Aqui se almacenara cada musica que compras para que puedas disfrutarla en cualkier momento.</p>
          </div>
               <div class="input-group busca col-md-4 col-sm-4 col-xs-10 col-md-offset-4 col-sm-offset-4 col-xs-offset-1">
               <span class="input-group-addon"><span class="icon-search"></span></span>
              <input type="text" id="buscandomusica" class="form-control" data-tabla="bd_musica">
              <script type="text/javascript" src="buscador/buscador.js" ></script>
            </div>
    </div>
        </center>

	</div>






	<div class="lista table-responsive container-fluid"  id="resultado">

<?php 
session_start();
$idusuario=$_SESSION['ide'];
include('../sesiones/conect.php');
$sql=$conexion->query("SELECT * FROM bd_musica WHERE usuario='$idusuario'");
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
     $cover="\"$a[7]\"" ;

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