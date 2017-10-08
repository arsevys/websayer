<?php 	
session_start();

sleep(1);
$dato =$_POST['palabra'];
$tabla=$_POST['tabla'];

$idusuario=$_SESSION['ide'];
if (!empty($dato))
{
	buscar($dato,$tabla,$idusuario);
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
$sql=$conexion->query("SELECT * FROM $tabla where usuario=$idusuario");

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
	while($a=mysqli_fetch_array($sql)){
echo "<tr class='cor'>";
  
  $contador++;


  echo "<td class='hidden-sm hidden-xs'>$a[1]</td>";
      echo "<td class='t'>$a[2]</td>";
       echo "<td class='b'>$a[4]</td>";
        echo "<td class='hidden-xs'>$a[3]</td>";
        echo "<td class='hidden-sm hidden-xs'>$a[5]</td>";
    
     $id=$a[0];
     $titulo="\"$a[2]\"" ;
     $banda="\"$a[3]\"" ;
     $album="\"$a[4]\"" ;
     $ruta="\"$a[ruta]\"" ;
     $cover="\"$a[cover]\"" ;
   
     $tabla="\"$a[tabla]\"";
       echo "<td class='botones'> &nbsp<button  value='escuchar' onclick='reprod($id,$titulo,$banda,$album,$ruta,$cover,$contador)' class='cantidadmusic btn-primary btn ' id='player'><p class='icon-play3'></p></button></td>"; //la clase de cantidad music para saer el total de musica
       
     

  echo "</tr>";
}

echo "</table>";







}








function buscar($b,$a,$id)  {

include('../sesiones/conect.php');
//$conexion=mysqli_connect("localhost",'root','','mensajes');
$sql=$conexion->query("SELECT * FROM $a WHERE usuario='$id' and titulo LIKE '%".$b."%' ");

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
     
     echo "<td>Album</td>";
     echo "<td class='hidden-xs'>Banda</td>";
     echo "<td class='hidden-sm hidden-xs'>Tiempo</td>";
 
     echo "<td >Reproducir</td>";
    
     echo "</thead><tbody>";
	while($a=mysqli_fetch_array($sql)){
echo "<tr class='cor'>";
  
  $contador++;


     echo "<td class='hidden-sm hidden-xs'>$a[1]</td>";
      echo "<td class='t'>$a[2]</td>";
       echo "<td class='b'>$a[4]</td>";
        echo "<td class='hidden-xs'>$a[3]</td>";
        echo "<td class='hidden-sm hidden-xs'>$a[5]</td>";

     $id=$a[0];
     $titulo="\"$a[2]\"" ;
     $banda="\"$a[3]\"" ;
     $album="\"$a[4]\"" ;
     $ruta="\"$a[ruta]\"" ;
     $cover="\"$a[cover]\"" ;
     
     $tabla="\"$a[tabla]\"";
      echo "<td class='botones'> &nbsp<button  value='escuchar' onclick='reprod($id,$titulo,$banda,$album,$ruta,$cover,$contador)' class='cantidadmusic btn-primary btn ' id='player'><p class='icon-play3'></p></button></td>";  //la clase de cantidad music para saer el total de musica
   

  echo "</tr>";
}

echo "</table>";




}



} 






 ?>

