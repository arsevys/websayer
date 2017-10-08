<?php 
session_start();
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Websayer</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/inicio.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/inicio.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/ajax/ajaxindex.js"></script>

<link rel="icon" type="image/png" href="imagenes/IMÁGENES WEBSAYER/icono-websayer.png">
</head>
<body>
<div id="body">
<div id="modal_aviso">   
  <div id="aviso">
  <div class="img_aviso">
      <img src="imagenes/logo/logo-websayer-blanco.png" alt="">
  </div>

  <p id="bienve">Bienvenido Andy Robers</p>
      <div class="input_aviso">
           <input id="btnaceptar" type="button" onclick="apla()" name="" value="Aceptar">
      </div>
     
  </div>
</div>

	<div class="navegador">

		<div class="logo_div" onclick="apliar()">
				<img src="imagenes/logo/logo-websayer-para-fondo-negro.png">
		</div>
			



		<div class="navegador_1 hidden-xs" >
			<ul>
				<li><p  onclick="cambio(0)"  class="alt borde" id="dlogin">Login</p></li>
				<li><p onclick="cambio(1)"  class="alt borde">Registrar</p></li>
				<li><p onclick="cambio(2)" class="alt borde2">Info</p></li>
				<li><p onclick="cambio(3)" class="alt borde">acerca de</p></li>
			</ul>
		</div>

		   <div class="desplazar pull-right visible-xs">
           	   	<p id="icono" class="icono icon-paragraph-justify" onclick="menu()"></p>
           	   </div>
   </div>

<div id="opciones" class="visible-xs">
	           <div class="logo_div_mini">
				<img src="imagenes/logo/logo-websayer-para-fondo-negro.png" alt="" >
		</div>
						    <ul class="list-group">
							   <li class="list-group-item" onclick="cambio(0)">Login<span class="badge"><span class="icom_nav icon-home"></span></span></li>

							   <li class="list-group-item" onclick="cambio(1)">Registrate<span class="badge"><span class="icom_nav icon-envelop"></span></li>

							    <li class="list-group-item"  onclick="cambio(2)">Info<span class="badge"><span class="icom_nav icon-bubble"></span></span></li>

							    <li class="list-group-item"  onclick="cambio(3)">Acerca de:<span class="badge"><span class="icom_nav icon-pencil2"></span></li>

						    </ul>	

                          
                   <p class="algomas">© 2016 sitio web websayer</p>

</div>

<div class="menosopcion" onclick="menumenos()">
	
</div>




<div id="cuerpo" class="col-md-12 col-sm-12 col-xs-12">

	<div id="usuario" class="suite container col-md-4 col-sm-6 col-xs-12 col-sm-offset-3 col-md-offset-4">

		<h2 class="titulo">Login</h2>

		<form class="container-fluid" method="POST">
           

			<div class="form-groud">
				<label for="usu">Usuario :</label>
				
				<input id="usu" type="text" class="form-control" maxlength="12" name="usuario" onkeydown="keyCodeslogin(event)">

			</div>

            <br>

			<div class="form-groud">
				<label for="con" >Contraseña :</label>
				
				<input id="con" type="password" class="form-control" maxlength="12" name="comtra" onkeydown="keyCodeslogin(event)">
				
			</div>
      <script type="text/javascript">
        function keyCodeslogin(event) {
    var x = event.keyCode;
    if (x == 13) {
        consulta();
    }
}

      </script>

            <br>

			<div class="form-groud">
				<center>
				<input type="button" value="Enviar" class="bot botons"  onclick="consulta()">
				</center>
			</div>
          
     
		</form>
	
	</div>


    <div id="respuesta"></div>

     

     <div id="registro" class="suite container col-md-6 col-sm-8 col-xs-12 col-md-offset-3 col-sm-offset-2 col-xs-offset-0">
     	   <h2 class="titulo">Registro</h2>
     	  <form class="conatiner col-md-12">
     		<div class="col-md-7 col-sm-7 col-xs-12">
     	  	<div class="input-groud">
     	  		<label for="nom">Nombre :</label>
     	  		<input type="text" id="nom" class="form-control">
     	  	</div>
     	  	<br>
     	  	<div class="input-groud">
     	  		<label for="ape">Apellidos :</label>
     	  		<input type="text" id="ape" class="form-control">
     	  	</div>
     	  	<br>
     	  	<div class="input-groud">
     	  		<label for="ema">Email :</label>
     	  		<input type="email" id="ema" class="form-control">
     	  	</div>
     	  	<br>
     	  	<div class="input-groud">
     	  		<label for="fec">Fecha de Nacimiento :</label>
     	  		<input type="date" id="fec" class="form-control">
     	  	</div>
     	  	     	  	<br>
     	  	</div>



     	  	<div class="col-md-5 col-sm-5 col-xs-12">
     	  	<div class="input-groud">
     	  		<label for="tel">Telefono :</label>
     	  		<input type="text" id="tel" class="form-control">
     	  	</div>
     	  	<br>
     	  	<div class="input-groud">
     	  		<label for="usua">Usuario :</label>
     	  		<input type="text" id="usua" class="form-control">
     	  	</div>
     	  	<br>
     	  	<div class="input-groud">
     	  		<label for="contra">contraseña :</label>
     	  		<input type="password" id="contra" class="form-control">
     	  	</div>
     	  	<br>
     	  	<div class="input-groud">
     	  		<center>
     	  		<input type="button"  value="Enviar" class="bot boton" onclick="registrar()">
     	  		</center>
     	  	</div>
     	  	</div>
   	     </form>
             
  
     </div>






		<div id="presentacion" class="suite container col-md-8 col-sm-10 col-xs-12 ">	


              <h3 class="text_pre">AHORA PUEDES DISFRUTAR</h3>
              <h3 class="text_pre">DE TU MÚSICA FAVORITA</h3>
              <h2 class="text_pre">DESDE TU SMARTPHONE</h2>
              <h3 class="text_pre">de manera óptima</h3>
			

			 <div class="png_inicio animacion efectomovil">
        <img class="conten_img" src="imagenes/movil1.jpg" alt="" id="img-movil">
		<img class="png_mano" src="imagenes/Hand-Holding-Smartphone-PNG-Image3.png" alt="">
    <script type="text/javascript">
      var movil=['imagenes/movil.jpg',
      'imagenes/movil1.jpg',
      'imagenes/movil2.jpg',
      'imagenes/movil3.jpg',
      'imagenes/movil4.jpg',
      'imagenes/movil5.jpg',
      'imagenes/movil6.jpg'];

      var cmovil=0;
function cambioimgmovil(){
      var movilimg=document.getElementById("img-movil");
      
      movilimg.src=movil[cmovil];
      cmovil++;
      if(cmovil==7){cmovil=0;}
      setTimeout(function(){cambioimgmovil()}, 1000);

    }
      cambioimgmovil();
    </script>
         </div>

		</div>



      <div id="acerca" class="suite container col-md-8 col-sm-10 col-xs-12 col-md-offset-2 col-sm-offset-1">
                <h1 class="title">Acerca de :</h1>
                <p class="conatainer col-md-10 col-sm-10 col-xs-12 col-md-offset-1 col-sm-offset-1">
					Una nueva y novedosa forma de permanecer conectado con tus amigos.Sin perderte de nada.
				</p>
      </div>
     
   

    </div>


    <div class="footer">
	
	    <p>© 2016 sitio web websayer</p>

	</div>

</div>

</body>
</html>