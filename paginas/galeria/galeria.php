<?php 
session_start();














 ?>

 <!DOCTYPE html>
 <html>
 <head>
 <script type="text/javascript" src="../../js/jquery.js"></script>
 <script type="text/javascript" src="../../js/ajax/galeria.js"></script>

 </head>
 <body>
 <form id="imagenes" method="POST" enctype="multipart/form-data" >

 <input type="file" id="files" name="galeria" multiple>


</form>
<button onclick="subirimagenes()">Subir Imagenes multiples</button>

<div id="vistar"></div>
 </body>
 </html>