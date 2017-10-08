<?php 
include('../sesiones/conect.php');
$sql=$conexion->query("SELECT * FROM parachutes");
$contador=0;
echo "<table style='border : 1px solid white ; color:blue;'>";
echo "<thead>";
     echo "<tr>";
     echo "<td>Numero</td>";
     echo "<td>Titulo</td>";
     echo "<td>Banda</td>";
     echo "<td>Album</td>";
     echo "<td>Tiempo</td>";
     echo "<td>Precio</td>";
     echo "<td>Reproducir</td>";
    
     echo "</thead><tbody>";
while ($a=mysqli_fetch_array($sql)) {
	echo "<tr class='cor'>";
	
	$contador++;


     echo "<td width=100 id='m'>$a[1]</td>";
      echo "<td width=150 id='t'>$a[2]</td>";
       echo "<td width=100 id='b'>$a[3]</td>";
        echo "<td width=100 id='a'>$a[4]</td>";
        echo "<td width=100 id='e'>$a[5]</td>";
     echo "<td width=100 id='es' style='padding:10px;'><img src='../imagenes/monedas.png' width=30 height=30 > &nbsp; $a[precio]</td>";
     $id=$a[0];
     $titulo="\"$a[2]\"" ;
     $banda="\"$a[3]\"" ;
     $album="\"$a[4]\"" ;
     $ruta="\"$a[6]\"" ;
     $cover="\"$a[7]\"" ;
     $precio=$a['precio'];
     $tabla="\"$a[tabla]\"";
       echo "<td><input type='button' value='escuchar' onclick='reprod($id,$titulo,$banda,$album,$ruta,$cover,$contador)' class='cantidadmusic'></td>"; //la clase de cantidad music para saer el total de musica
       echo "<td><input type='button' value='Comprar' onclick='comprarmusica($id,$tabla,$precio)'></td>";  //  enviamos  el precio , id y la tabla para hacer la consulta
   //echo " <input type='hidden' onclick='reprod($id,$titulo,$banda,$album,$ruta,$cover)'>";
     

	echo "</tr>";}


echo "</tbody></table>";

$u=1;

 ?>

