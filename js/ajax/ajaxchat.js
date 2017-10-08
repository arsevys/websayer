

function mensajear() {

var m = $('#tear').val();

var u = k;  // esta  variable contiene el nombre del usuario , esta variable esta definida en el archivo foros.php

var men = {
	'mensaje' : m ,
	'usuario' : u
};  // envia el mensaje  con el nombre del usuario


$.ajax({
	data : men,
      type :"POST",
      url : 'chat/mensajes.php', // los datos van al archivo mensajes.php
      success: function (dato) {
      $('#mensajero').append(dato);   //recibe los datos y lo inserta en la div de mensajes
$("#mensajero").animate({ scrollTop: $('#mensajero')[0].scrollHeight}, 0);

      }


});


}



//aqui van los emojis
function emoji(x) {

var emoticon=["<img src=../imagenes/chat/e-smile.png width=45 height=45>",
           "<img src=../imagenes/chat/e-risa.png width=45 height=45>",
           "<img src=../imagenes/chat/e-sor.png width=45 height=45>",
           "<img src=../imagenes/chat/e-tris.png width=45 height=45>",
           "<img src=../imagenes/chat/e-mo.png width=45 height=45>",
           "<img src=../imagenes/chat/like.png width=45 height=45>"];

var u = k;  // esta  variable contiene el nombre del usuario , esta variable esta definida en el archivo foros.php

var men = {
   'mensaje' : emoticon[x] ,
   'usuario' : u
};  // envia el mensaje  con el nombre del usuario


$.ajax({
   data : men,
      type :"POST",
      url : 'chat/mensajes.php', // los datos van al archivo mensajes.php
      success: function (dato) {
      $('#mensajero').append(dato);   //recibe los datos y lo inserta en la div de mensajes

$("#mensajero").animate({ scrollTop: $('#mensajero')[0].scrollHeight}, 0);
      }


});


}







function visualizamensaje() { // solo es para mostrar las mensajes

$.ajax({
       
      url : 'chat/mostrar.php',
      success: function (dato) {
      $('#mensajero').html(dato);
$('#mensajero').attr('scrollTop', $('#mensajero').attr('scrollHeight'));
   }
  


});


}



function verificarcomtra(){  // sirve que si se llega cmbiar la comtra la pagina se va a cerrar seccion


$.ajax({
         url : 'sesiones/verificandocomtra.php',
         
         success : function(data){

            $('#pru').html(data);
         }



});

}

function actualizarmsg() { // solo es para mostrar las mensajes

$.ajax({
       
      url : 'chat/actualisar.php',
      success: function (dato) {
      $('#mensajero').append(dato);
$('#mensajero').attr('scrollTop', $('#mensajero').attr('scrollHeight'));
   }
  


});


}
visualizamensaje();
//setTimeout(visualizamensaje,3000);//al cargar la pagina foros se van a 
// a mostrar todas los mensajes guardados
setInterval(actualizarmsg,3000); 
