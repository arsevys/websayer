<?php 	


sleep(1);
$dato =$_POST['palabra'];
$tabla=$_POST['tabla'];

if (!empty($dato))
{
	buscar($dato,$tabla);
}

//else {

//$sql=$conexion->query("SELECT * FROM alumnos ");
	/*echo "<table>";
	while($a=mysqli_fetch_array($sql)){
echo "<tr style='border:1px solid black;'>";
echo "<td style='border:1px solid black;'>".$a['id']."</td>";
echo "<td style='border:1px solid black;'>".$a['nombre']."</td>";
echo "<td style='border:1px solid black;'>".$a['apellidos']."</td>";
echo "<td style='border:1px solid black;'>".$a['edad']."</td>";
echo "<td style='border:1px solid black;'>".$a['curso']."</td>";


echo "</tr>";
}

echo "</table>";
}*/


else {


include('../sesiones/conect.php');
//$conexion=mysqli_connect("localhost",'root','','mensajes');
$sql=$conexion->query("SELECT * FROM $tabla");

$contador=0;
echo "<table class='table'>";
echo "<thead>";
     echo "<tr>";
     echo "<td class='hidden-sm hidden-xs'>Numero</td>";
     echo "<td>Titulo</td>";
     
     echo "<td class='hidden-xs'>Album</td>";
     echo "<td>Banda</td>";
     echo "<td class='hidden-sm hidden-xs'>Tiempo</td>";
     echo "<td>Precio</td>";
     echo "<td >Reproducir</td>";
       echo "<td >Comprar</td>";
     echo "</thead><tbody>";
	while($a=mysqli_fetch_array($sql)){
echo "<tr class='cor'>";
  
  $contador++;


  echo "<td class='hidden-sm hidden-xs'>$a[1]</td>";
      echo "<td>$a[2]</td>";
       echo "<td class='hidden-xs'>$a[3]</td>";
        echo "<td>$a[4]</td>";
        echo "<td class='hidden-xs'>$a[5]</td>";
     echo "<td width=100 id='es' style='padding:10px;'><img src='../imagenes/monedas.png' width=30 height=30 > &nbsp; $a[precio]</td>";
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
     

  echo "</tr>";
}

echo "</table>";







}








function buscar($b,$a)  {

include('../sesiones/conect.php');
//$conexion=mysqli_connect("localhost",'root','','mensajes');
$sql=$conexion->query("SELECT * FROM $a WHERE titulo LIKE '%".$b."%' ");

$contar=mysqli_num_rows($sql);
if($contar==0){
	echo "No hay resultados";
}

else {
	

$contador=0;
echo "<table class='table'>";
echo "<thead>";
    echo "<tr>";
     echo "<td class='hidden-sm hidden-xs'>Numero</td>";
     echo "<td>Titulo</td>";
     
     echo "<td class='hidden-xs'>Album</td>";
     echo "<td>Banda</td>";
     echo "<td class='hidden-sm hidden-xs'>Tiempo</td>";
     echo "<td>Precio</td>";
     echo "<td >Reproducir</td>";
       echo "<td >Comprar</td>";
    
     echo "</thead><tbody>";
	while($a=mysqli_fetch_array($sql)){
echo "<tr class='cor'>";
  
  $contador++;


    echo "<td class='hidden-sm hidden-xs'>$a[1]</td>";
      echo "<td>$a[2]</td>";
       echo "<td class='hidden-xs'>$a[3]</td>";
        echo "<td>$a[4]</td>";
        echo "<td class='hidden-xs'>$a[5]</td>";
     echo "<td width=100 id='es' style='padding:10px;'><img src='../imagenes/monedas.png' width=30 height=30 > &nbsp; $a[precio]</td>";
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
     

  echo "</tr>";
}

echo "</table>";




}



} 






 ?>

