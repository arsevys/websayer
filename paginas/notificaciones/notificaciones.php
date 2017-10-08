<?php 

include('../sesiones/conect.php');



$a=rand(1,13);
$sql=$conexion->query("SELECT * FROM notificaciones where id='$a'");

while ($noti=mysqli_fetch_array($sql)) {
	$titulo=$noti['titulo'];
	$noticia=$noti['noticia'];
	$img=$noti['img'];
}







 ?>




 <div class="nueva_noticia" onclick="desaparece(this)" style="" >

				
				   	
                   <div class="img_noticia">
                   	  <img src="../imagenes/BD_notificacion/<?php echo $img ;?>" alt="">
                   </div>

                   <div class="titulo_noticia">
                   	  <h4><?php echo $titulo; ?></h4>
                   </div>

                   <div class="detalle_noticia">
                   	<p><?php echo $noticia; ?></p>
                   </div>

                      <div class="ayuda"  onclick="aparece()">

                   </div>


				   </div>

