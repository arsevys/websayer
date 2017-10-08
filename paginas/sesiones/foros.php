<?php 
header("Content-type: text/html;charset=utf-8");
session_start();
$_SESSION['mensajes']=0;//aqui vamos utilizar para guardar el tiempo de los mensajes
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

	<link rel="stylesheet" type="text/css" href="../css/foro.css">
	<link rel="stylesheet" type="text/css" href="../css/chat_atajos.css">

	<link rel="stylesheet" type="text/css" href="../css/style.css" >
<script type="text/javascript" src="../js/jquery.js"></script>

	<script type="text/javascript" src="../js/foro.js"></script>
	<script type="text/javascript" src="../js/fotosusuario.js"></script>


<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	
	<script type="text/javascript" src="../js/ajax/ajaxchat.js"></script>
	<script type="text/javascript" src="../js/ajax/usuario.js"></script>

<script type="text/javascript" src="../js/bootstrap.min.js"></script>
      
</head>
<body>






<div id="body" class="container-fluid">


<div class="navegador_mini">
	 <div class="logis col-xs-5">
           	   	WEBSAYER
           	   </div>

           	   <div class="desplazar pull-right">
           	   	<p id="icono_des" class="icon-paragraph-justify" onclick="menu()"></p>
           	   </div>

</div>


<div id="opciones">
	 

	           <h3>Menu</h3>
						    <ul class="list-group">
							   <li class="list-group-item" onClick="dirmusica()">Musica Online<span class="badge">New</span></li>
							   <li class="list-group-item">Galeria<span class="badge">Proximo</span></li>
							    <li class="list-group-item">Videos<span class="badge">proximo</span></li>
							    <li class="list-group-item" onClick="notifi()" id="secciones">Notificaciones</li>
							    <li class="list-group-item" data-toggle="modal" data-target="#perfil" onclick="cambiarfoto()">Foto de perfil<span class="badge">New</span></li>
							    <li class="list-group-item" onclick="cerrarseccion()">Cerrar Sección</li>
						    </ul>	

                             <div class="no_min">
						    <strong class="nom_min"><?php echo $nom." ".$ape ; ?></strong>
                           </div>
						    <div class="img_min">
						    	<img class="usu img-thumbnail" src="../imagenes/perfil/<?php echo $foto; ?>" alt="" onclick="cas()" id="pfoto">
						    </div>


</div>
<div class="menosopcion" onclick="menumenos()">
	
</div>






  



				<div id="navegador" class="navcol-md-3 col-sm-3 hidden-xs ">
					
				<div class="usuario">


				<div class="usuario_img col-lg-6 col-md-5 col-sm-4 ">

					<img class="usu img-thumbnail" src="../imagenes/perfil/<?php echo $foto; ?>" alt="" onclick="cas()" id="pfoto">

				</div>


				<div class="usu_non container col-lg-6 col-md-7 col-sm-8 ">
					<center>
					<p id="nombre"> <?php echo $nom." ".$ape ; ?></p>
					<a href="" data-toggle="modal" data-target="#perfil" onclick="cambiarfoto()">Cambiar foto</a>
					<a href="sesiones/cerrar.php">Cerrar Seccion</a>
				    </center>
				</div>

				</div>



                 <br>
				<div id="navegador_option">
					




				<nav id="nav" >
                             <!--------espacio de navegacion---->
					 	<div class="grupo_usu">

						<div class="intro_grupo"  onclick="despliege(0,160)">
							<span class="ini_grupo">Multimedia</span>
							<span class="icomon icon-flickr"></span>
						</div>

						 <div class="cuerpo_grupo">
						    <ul class="list-group">
							   <li class="list-group-item" onClick="dirmusica()">Musica Online<span class="badge">New</span></li>
							   <li class="list-group-item" onClick="despla()">Galeria<span class="badge">12</span></li>
							    <li class="list-group-item" onClick="despla()">Videos<span class="badge">proximo</span></li>
						    </ul>	
						 </div>

					  </div>
					
					    <!--------final de espacio de navegacion---->
					</nav>










				</div>


				</div>






<!--------------------------chat-->


				<div id="mensajes" class="base container col-md-6 col-sm-6 col-xs-12">
					
				<div class="conter container-fluid">

					<div id="mensajero" class="mensajeria container-fluid" style="">
						<!---es div de chat-->

                  <center><img src="../imagenes/chat/cargar.gif" ></center>

                      </div>
               </div>

					<div class="escritura container-fluid">
						<div class="textarea">
                   	
                   	<input type="text" class="form-control" name="mensaje" maxlength="150" id="tear" onkeydown="keyCode(event)">
                   </div>


                		   <div class="inputs">
				   	       <img src="../imagenes/enviar.png" onClick="envia()" alt="">

				         <script type="text/javascript">
				         	function limpiar() {

$("input[name=mensaje]").val('');

}
function keyCode(event) {
    var x = event.keyCode;
    if (x == 13) { // 13 es el codigo del enter
        mensajear();
        limpiar();
    }
}

function envia(){//es del boton enviar 
	  mensajear();
        limpiar();
}
				         </script>
				

				   </div>


                   <div class="emoti">
                   	 <span class="icon-grin" onclick="abrir()">
				  	
				  </span>

                   </div>
				 


				  <div class="emoticones" id="emoticones">
				  <div class="list_emoticones">
				  <a onClick="emoji(0)">
				  	<img src="../imagenes/chat/e-smile.png" width="60" alt="" height="60">
				
				  </a>
				   <a onClick="emoji(1)">
				  	<img src="../imagenes/chat/e-risa.png" width="60" alt="" height="60">
				
				  </a>
				   <a onClick="emoji(2)">
				  	<img src="../imagenes/chat/e-sor.png" width="60" alt="" height="60">
				
				  </a>
				   <a onClick="emoji(3)">
				  	<img src="../imagenes/chat/e-tris.png" width="60" alt="" height="60">
				
				  </a>
				   <a onClick="emoji(4)">
				  	<img src="../imagenes/chat/e-mo.png" width="60" alt="" height="60">
				
				  </a>
				  <a onClick="emoji(5)">
				  	<img src="../imagenes/chat/like.png" width="50" alt="" height="50">
				
				  </a>
				  </div>

				  <div class="salir" >
				  	<span class="icon-cross" onclick="cerrar()"></span>		
				  </div>
                  </div>

					</div>
            </div>

<!--termina chat-->

				<div id="notificaciones" class="base container col-md-3 col-sm-3 hidden-xs">

				   

				   <div class="title_noticia" >
				   	<h2>Notificaciones</h2>
				   </div>


                   <div class="contenedor_noticias">
				   <!--lista de noticias-->

				   <div class="nueva_noticia" onclick="desaparece(this)">

				   <div class="ayuda"  onclick="aparece()">
				   	
                   <div class="img_noticia">
                   	  <img src="../imagenes/fon1.jpg" alt="">
                   </div>

                   <div class="titulo_noticia">
                   	  <h4>proximamente......</h4>
                   </div>

                   <div class="detalle_noticia">
                   	<p>proximamente....... en websayer encuentra todo lo que imaginas y mas opciones para la creacion de paginas websayer</p>
                   </div>

                   </div>


				   </div>

				   <!--cierre de noticia-->

		

				 
				 
				    <!--lista de noticias-->

				  

				   <!--cierre de noticia-->

			

				     

				</div>

       


                         	  <!-- Modal -->
				  <div class="modal fade" id="perfil" role="dialog">
				    <div class="modal-dialog modal-md">
				      <div class="modal-content">
				        <div class="modal-header">
				          <button type="button" class="close" data-dismiss="modal">&times;</button>
				          <h4 class="modal-title">Foto de Perfil :</h4>
				        </div>
				        <!----------Foto perfil-->
                         <script type="text/javascript" src="../js/ajax/fotoperfil.js"></script>
				            <div id="mods" class="modal-body">
				        	<form method="POST" id="fperfil" enctype="multipart/form-data">
                                   <input type="file" id="subirimagen" class="form-control" name="fotoperfil" > 
                                </form>                         
                                   <center>
                                   <div id="img_per" class="container col-md-12 col-sm-12">

                                   	<img id="img_perfil" class="col-md-8 col-sm-8 col-xs-8 col-md-offset-2 col-sm-offset-2 col-xs-offset-2" src="../imagenes/perfil.jpeg">

                                   </div>
                                    </center>

                       		</div>

						        <div class="modal-footer">
						        	<button type="button" class="btn btn-default" onclick="agregarfoto()">Agregar Cambios</button>
						          <button type="button" class="btn btn-default" data-dismiss="modal" onclick="borrardir()">Close</button>
						          <p id="muestra" style="display: none;">   </p>
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