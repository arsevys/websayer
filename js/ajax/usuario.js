

//esta funcion se encarga de verificar si la comtraseña no ha sido cambiando
function verificarcomtra(){

$.ajax({
         url : 'sesiones/verificandocomtra.php',
         success : function(data){

         	$('#pru').html(data);
         }
});

}
setInterval(verificarcomtra,3000);





//esta funcion es para las notificaciones random


function actualizarnotificaciones(){

	$.ajax({
		url : 'notificaciones/notificaciones.php',
		data :  null,
		
		success : function(data){
//document.getEl.fadeOut(0)ementById('notifi').insertAdjacentHTML('beforebegin',data);


$('.contenedor_noticias').prepend(data);


		}

	});
}

setInterval(actualizarnotificaciones,30000);

function dircuestionario(){
	window.open("cuestionario/cuestionario.php");
}

