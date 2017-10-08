<?php 
header("Content-type: text/html;charset=utf-8");
session_start();

if(empty($_SESSION['usuario']) && empty($_SESSION['comtra']) )
{
	session_start();
	session_destroy();
header("Location:../index.php");

}




include('sesiones/conect.php');
$id=$_SESSION['ide'];
$consulta="SELECT * FROM usuario where ID='$id' ";
$consu=mysqli_query($conexion , $consulta);
while($row=mysqli_fetch_row($consu))
{
$nom=$row[1];
$ape=$row[2];
$usu=$row[4];
$foto=$row[9];
$comtra=$row[5];
}




 ?>



<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
	<title><?php echo $nom; ?></title>
  
    	<meta name="viewport" content="width=device-width, use-scalable=no,initial-scale=1.0, maximum-scale=1,minimun-scale=1.0">
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/foro.css">
	<link rel="stylesheet" type="text/css" href="../css/chat_atajos.css">

	<link rel="stylesheet" type="text/css" href="../css/style.css" >
<script type="text/javascript" src="../js/jquery.js"></script>

	<script type="text/javascript" src="../js/foro.js"></script>
	<script type="text/javascript" src="../js/fotosusuario.js"></script>



	
	<script type="text/javascript" src="../js/ajax/ajaxchat.js"></script>
	<script type="text/javascript" src="../js/ajax/usuario.js"></script>

<script type="text/javascript" src="../js/bootstrap.min.js"></script>
        <link rel="icon" type="image/png" href="../imagenes/IMÁGENES WEBSAYER/icono-websayer.png">
</head>
<body>

                	 
			 <div class="modal fade" id="perfil" role="dialog">
				    <div class="modal-dialog modal-md">
				      <div class="modal-content">
				        <div class="modal-header">
				          <button type="button" class="close" data-dismiss="modal">&times;</button>
				          <h4 class="modal-title">Foto de Perfil :</h4>
				        </div>
				
                         <script type="text/javascript" src="../js/ajax/fotoperfil.js"></script>

				            <div id="mods" class="modal-body">
				                 <div class="formul">

				        	       <form method="POST" id="fperfil" enctype="multipart/form-data">
                                   <input type="file" id="subirimagen" class="form-control" name="fotoperfil" > 
                                    </form>                         
                              </div>
                                   <div id="img_per" class="container">

                                   	<img id="img_perfil" src="../imagenes/perfil/<?php echo $foto; ?>"><!--Foto de perfil de l container -no es el de muestra-->

                                   </div>
                               

                       		</div>

						        <div class="modal-footer">
						        	<button type="button" class="btn btn-default" onclick="agregarfoto()">Agregar Cambios</button>
						          <button type="button" class="btn btn-default" data-dismiss="modal" onclick="borrardir()">Close</button>
						          <p id="muestra" style="display: none;">   </p>
						        </div>
						      </div>
						    </div>
						  </div>




<div id="cerrar_paralax" class="hidden-xs">
	<span class="icon-cross" title="cerrar vision" onclick="opacar()" ></span>
</div>

<div class="paralax item_uno hidden-xs"></div>
<div class="paralax item_dos hidden-xs"></div>
<div class="paralax item_tres hidden-xs"></div>
<div class="paralax item_cuatro hidden-xs"></div>

<div id="body">


<div class="navegador_mini visible-xs">
	 <div class="logo_div">
           	 <img src="../imagenes/logo/logo-websayer-para-fondo-negro.png" alt="">
     </div>

           	   <div class="desplazar">
           	   	<p id="icono_des" class="icon-paragraph-justify" onclick="menu()"></p>
           	   </div>
</div>

<div class="menosopcion visible-xs" onclick="menumenos()">
	
</div>






  



				<div id="navegador" class="nav col-md-2 col-sm-3">

				<div class="logo">
					<img src="../imagenes/logo/logo-websayer-para-fondo-negro.png" alt="">
				</div>

				<div class="foto"> <!--Foto de perfil en responsi-->
					<img id="foto_cambio" src="../imagenes/perfil/<?php echo $foto; ?>">
				</div>
					
				<div class="usuario">

				<div class="nombres">
					<strong><?php echo $nom?></strong>
					<p><?php echo $ape?></p>
					<a href="" data-toggle="modal" data-target="#perfil" onclick="cambiarfoto()">Cambiar foto</a><br>
					<br class="visible-xs">
					<a href="sesiones/cerrar.php">Cerrar Seccion</a>
				</div>


				</div>


               <center>
               	 <hr/>
               </center>
               <br>
               <div class="nav_multi">
               <div class="musica">
               	<img src="../imagenes/iconos/MUSICA-OLNINE.png" alt="">
               	<span onClick="dirmusica()">Música Online</span>
               </div>
               <div class="musica">
               	<img src="../imagenes/iconos/GANA-MONEDAS.png" alt="">
               	<span onClick="dircuestionario()">Gana Monedas</span>
               </div>
               <div class="musica">
               	<img src="../imagenes/iconos/VIDEOS.png" alt="">
               	<span>Videos</span>
               </div>
               <div class="fondo">
               	   <span  onClick="mostrar()" class="hidden-xs">Mostrar Fondos</span><br>
               	   <span class="hidden-xs" onClick="scroll()">Ajustar Fondos</span><br>
               	   <span class="hidden-xs fijar" onClick="fijar()">Fijar Fondo</span><br>
               	    <p class="visible-xs" onClick="notifi()" id="secciones">Notificaciones</p>
               </div>
            </div>
            <div class="mini visible-xs">
               	  <p>© 2016 sitio web websayer</p>
               </div>


				</div>






<!--------------------------chat-->


				<div id="mensajes" class="base container col-md-6 col-sm-5 col-xs-12">
					
				<div class="conter">

					<div id="mensajero" class="mensajeria container-fluid" style="">
						<!---es div de chat-->

                  <center><img src="../imagenes/chat/cargar.gif" ></center>

                      </div>
               </div>

					<div class="escritura">
						<div class="textarea">
                    	
                        	<input type="text" class="form-control" name="mensaje"    id="tear" onkeydown="keyCode(event)">
                       </div> 

                     <div class="link hidden-sm">
                     	<img src="../imagenes/iconos/YOUTUBE.png" onclick="abrirvideo()">
                     </div>
                           
                		   <div class="inputs">
				   	       <img src="../imagenes/iconos/ENVIAR.png" onClick="envia()" alt="">
				           </div>
                    

                   <div class="emoti">
                   	 <img src="../imagenes/iconos/EMOTICON.png" onclick="abrir()">

                   </div>

                   <div class="link_img hidden-sm">
                   	<img src="../imagenes/iconos/COMPARTIR-IMAGEN.png" onclick="abririmagen()">
                   </div>

                   <div class="modal_fotos" id="mo_img">
                     <div class="salir_fotos" >
				  	<span class="icon-cross" onclick="cerrarimagen()"></span>		
				  </div>
                   <label for="fotos">Inserta tu link de imagen</label><br>
                   	<input type="text" id="fotos" class="form-control" placeholder="inserta link...." onkeydown="keyCodesimagen(event)" name="imagenlink"></input>
                   </div>
				 

				    <div class="modal_video" id="mo_vi">
                     <div class="salir_video" >
				  	<span class="icon-cross" onclick="cerrarvideo()"></span>		
				  </div>
                   <label for="video">Inserta tu link de YouTube</label><br>
                   	<input type="text" id="video" class="form-control" placeholder="inserta link...." onkeydown="keyCodesYoutube(event)" name="youtube"></input>
                   </div>
<!---------------aqui el atajo de chat-->
        <script type="text/javascript" src="../js/ajax/ajax_chat_atajos.js">
	         </script>
				
				  <div class="emoticones" id="emoticones">
				  <div class="list_emoticones">
				  <span onClick="emoji(0)">
				  	<img src="../imagenes/chat/e-smile.png" width="60" alt="" height="60">
				
				  </span>
				   <span onClick="emoji(1)">
				  	<img src="../imagenes/chat/e-risa.png" width="60" alt="" height="60">
				
				  </span>
				   <span onClick="emoji(2)">
				  	<img src="../imagenes/chat/e-sor.png" width="60" alt="" height="60">
				
				  </span>
				   <span onClick="emoji(3)">
				  	<img src="../imagenes/chat/e-tris.png" width="60" alt="" height="60">
				
				  </span>
				   <span onClick="emoji(4)">
				  	<img src="../imagenes/chat/e-mo.png" width="60" alt="" height="60">
				
				  </span>
				  <span onClick="emoji(5)">
				  	<img src="../imagenes/chat/like.png" width="50" alt="" height="50">
				
				  </span>
				  </div>

				  <div class="salir" >
				  	<span class="icon-cross" onclick="cerrar()"></span>		
				  </div>
                  </div>

					</div>
            </div>

<!--termina chat-->



				<div id="notificaciones" class="base container col-md-4 col-sm-4 hidden-xs">

				   

				   <div class="title_noticia" >
				   	<h3>Notificaciones</h3>
				   </div>


                   <div class="contenedor_noticias">
			

				   <div class="nueva_noticia" onclick="desaparece(this)">

				   
				   	
                  

                   <div class="img_noticia">
                   	  <img src="../imagenes/chat/inicio.png" alt="">
                   </div>

                   <div class="titulo_noticia">
                   	  <h4>Bienvenido </h4>
                   </div>

                   <div class="detalle_noticia">
                   	<p>Muchas Gracias  <strong><?php echo $nom.' '.$ape; ?></strong> por preferir WEBSAYER No se arrepentira sientase comodo y distrute de las musicas que websayer tiene Para ti.</p>
                   </div>
                      
                  <div class="ayuda"  onclick="aparece()">
                  </div>

				   </div>


				</div>

        

         </div>
         


						  




	
                    




</div><!--body-->
<p style="display: none" id="pru"></p>

<script type="text/javascript">
		var k="<?php echo $nom ?>";

</script>
</body>

</html>