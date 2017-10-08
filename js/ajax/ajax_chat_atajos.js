function limpiar() {

$("input[name=mensaje]").val('');

}

//Aquiiiiiii es para q cuando presionamos enter en el input de mensajes se envie el mensaje y se limpie//
function keyCode(event) {
    var x = event.keyCode;
    if (x == 13) {
        mensajear();
        limpiar();
    }
}

function envia(){
	  mensajear();
        limpiar();
}
			



function enviarlinkyoutube(){
  var str = document.getElementById('video').value;//este es el id del input donde se envia  link de youtube
  var aux2 = str.search("youtube");
  if (aux2 > 0) {//verifica si es un link de youtube
var aux = str.search("index");


if(aux > 0){alert("inserte otro link ya que este pertenece al de una lista de reproduccion ");}

else {



  var gold = "https://www.youtube.com/embed/"+str.substr(32,100000);

    var aux='<iframe class="iframe_chat" src="' + gold + '" ></iframe>';
var linkyoutube = {
   'mensaje' : aux ,
   'usuario' : k   // este k es la variable q esta en foros.php donde se saca el nombre del usuario
}; 
$.ajax({
   data : linkyoutube,
      type :"POST",
      url : 'chat/mensajes.php', // los datos van al archivo mensajes.php
      success: function (dato) {
      $('#mensajero').append(dato);   //recibe los datos y lo inserta en la div de mensajes

$("#mensajero").animate({ scrollTop: $('#mensajero')[0].scrollHeight}, 0);
      }


});


$("input[name=youtube]").val('');



}

}



else{
  alert("Esto pertenmence a otra fuente")
}

}


function enviarimg(){
  var str = document.getElementById('fotos').value;
  var imagenenvio='<img class="img_chat" src="'+str+'" />';
var imagenenviar={
	'mensaje' : imagenenvio ,
   'usuario' : k 
}

$.ajax({
   data : imagenenviar,
      type :"POST",
      url : 'chat/mensajes.php', // los datos van al archivo mensajes.php
      success: function (dato) {
      $('#mensajero').append(dato);   //recibe los datos y lo inserta en la div de mensajes

$("#mensajero").animate({ scrollTop: $('#mensajero')[0].scrollHeight}, 0);
      }


});


$("input[name=imagenlink]").val('');



}

function keyCodesYoutube(event) {
    var x = event.keyCode;
    if (x == 13) {
        enviarlinkyoutube();
    }
}

function keyCodesimagen(event) {
    var x = event.keyCode;
    if (x == 13) {
        enviarimg();
    }
}
