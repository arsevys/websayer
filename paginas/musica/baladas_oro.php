<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, use-scalable=no,initial-scale=1.0, maximum-scale=1,minimun-scale=1.0">

	<link rel="stylesheet" type="text/css" href="../css/style.css">

  <link rel="stylesheet" type="text/css" href="../css/tumusica.css">

	<script type="text/javascript" src="../js/tumusica.js"></script>
	 
	<title>Tus Musicas</title>

  <style type="text/css">
  @media screen and (max-width: 768px) {

    .detalles {
         min-height: 50%;
    }
  </style>

</head>
<body id="body_tumusica" onLoad="avanza()">
<div id="cuerpomusica" class="container-fluid">



	 <div class="detalles container-fluid">

 <center>
		<div class="descripcion_detalle col-md-7 col-sm-7 col-xs-12">
       	 <div class="decrip">
            <h4>Baladas de Oro</h4>

            <strong>Descripcion:</strong>
        
           

            <p>En esta época de oro, que duró hasta mediados de los 1980, desde España artistas como Rocío Jurado, José José, Juan Gabriel, Julio Iglesias, Sandro, Camilo Sesto, Raphael, Roberto Carlos, Rocío Dúrcal entre otros, sacaron al mercado grandes éxitos mundiales.</p>
          </div>
               <div class="input-group busca col-md-4 col-sm-4 col-xs-10 col-md-offset-4 col-sm-offset-4 col-xs-offset-1">
               <span class="input-group-addon"><span class="icon-search"></span></span>
              <input type="text" id="buscador" class="form-control" data-tabla="baladas_oro">
              <script type="text/javascript" src="buscador/buscador.js" ></script>
            </div>
    </div>
       </center>

	</div>






	<div class="lista table-responsive container-fluid"  id="resultado">

<?php 

include('../sesiones/conect.php');
$sql=$conexion->query("SELECT * FROM baladas_oro");
$contador=0;
echo "<table class='table'>";
echo "<thead>";
     echo "<tr>";
     echo "<td>Numero</td>";
     echo "<td>Titulo</td>";
     echo "<td>Album</td>";
     echo "<td>Banda</td>";
     echo "<td>Tiempo</td>";
     echo "<td>Precio</td>";
     echo "<td >Reproducir</td>";
       echo "<td >Comprar</td>";
     echo "</thead><tbody>";
while ($a=mysqli_fetch_array($sql)) {
  echo "<tr class='cor'>";
  
  $contador++;


     echo "<td width=100 id='m'>$a[1]</td>";
      echo "<td width=150 id='t'>$a[2]</td>";
       echo "<td width=100 id='b'>$a[3]</td>";
        echo "<td width=100 id='a'>$a[4]</td>";
        echo "<td width=100 id='e'>$a[5]</td>";
     echo "<td width=100 id='es' style='padding:10px;'><img <img src='../imagenes/iconos/MONEDAS.png' width=30 height=30 > &nbsp; $a[precio]</td>";
     $id=$a[0];
     $titulo="\"$a[2]\"" ;
     $banda="\"$a[3]\"" ;
     $album="\"$a[4]\"" ;
     $ruta="\"$a[7]\"" ;
     $cover="\"$a[8]\"" ;
     $precio=$a['precio'];
     $tabla="\"$a[tabla]\"";
       echo "<td class='botones'> &nbsp<button  value='escuchar' onclick='reprod($id,$titulo,$banda,$album,$ruta,$cover,$contador)' class='cantidadmusic btn-primary btn ' id='player'><p class='icon-play3'></p></button></td>"; //la clase de cantidad music para saer el total de musica
       echo "<td class='botones'> &nbsp<button onclick='comprarmusica($id,$tabla,$precio)' class='btn-warning btn'><p class=' icon-cart'></p></button></td>";  //  enviamos  el precio , id y la tabla para hacer la consulta
   //echo " <input type='hidden' onclick='reprod($id,$titulo,$banda,$album,$ruta,$cover)'>";
     

  echo "</tr>";}


echo "</tbody></table>";

$u=1;


 ?>


		
	</div>

	</div>
</body>
</html>