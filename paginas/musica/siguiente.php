<?php 

$u=$_POST['ed'];
include('../sesiones/conect.php');
$sqln=$conexion->query("SELECT * FROM parachutes where id='$u'");
while ($an=mysqli_fetch_row($sqln)) {
	  $t="$an[2]";
     $ban="$an[3]";
     $alt="$an[4]";
     $rut="$an[6]";
     $co="$an[7]";
     }

$ara = array(
      'titulo'=>$t,
      'album'=>$ban,
      'banda'=>$alt,
      'ruta'=> $rut,
      'cover'=>$co
	);

$af=json_encode($ara);
print $af;

 ?>