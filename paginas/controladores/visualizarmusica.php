<?php 
session_start();
$idusuario=$_SESSION['ide'];
$contador=0;
include('../sesiones/conect.php');
$sql=$conexion->query("SELECT * FROM bd_musica WHERE usuario='$idusuario'");

echo "<table style='border : 1px solid white ; color:blue;'>";
echo "<thead>";
     echo "<tr>";
     echo "<td>Numero</td>";
     echo "<td>Titulo</td>";
     echo "<td>Banda</td>";
     echo "<td>Album</td>";
     echo "<td>Tiempo</td>";
    
     echo "<td>Reproducir</td>";
    
     echo "</thead><tbody>";
while ($a=mysqli_fetch_array($sql)) {
	echo "<tr class='cor'>";
	$contador++;
     echo "<td width=100 id='m'>$a[1]</td>";
      echo "<td width=150 id='t'>$a[2]</td>";
       echo "<td width=100 id='b'>$a[4]</td>";
        echo "<td width=100 id='a'>$a[3]</td>";
        echo "<td width=100 id='e'>$a[5]</td>";
   
     $id=$a[1];
     $titulo="\"$a[2]\"" ;
     $banda="\"$a[4]\"" ;
     $album="\"$a[3]\"" ;
     $tiempo="\"$a[5]\"" ;
     $ruta="\"$a[6]\"" ;
     $cover="\"$a[7]\"" ;

     $tabla="\"$a[8]\"";
       echo "<td><input type='button' value='escuchar' onclick='reprod($id,$titulo,$banda,$album,$ruta,$cover,$contador)' class='cantidadmusic'></td>"; 
      //  enviamos  el precio , id y la tabla para hacer la consulta
   //echo " <input type='hidden' onclick='reprod($id,$titulo,$banda,$album,$ruta,$cover)'>";
     

	echo "</tr>";}


echo "</tbody></table>";
?>
