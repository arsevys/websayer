$(document).ready(function(){

$("input[name='fotoperfil']").change(function(){
visualiza();
});

});

function visualiza(){
var formData=new FormData(document.getElementById('fperfil'));
var dire="personalisar/fotoperfil.php";
$.ajax({
url: dire ,
type : 'POST',
data : formData ,
contentType : false,
processData :false ,

success : function(datas){

	$('#img_per').html(datas);
}

});
}



function agregarfoto() {
var url="personalisar/estableserfoto.php";
var formData=new FormData(document.getElementById('fperfil'));
$.ajax({
   url : url,
   type :'POST',
data : formData,
contentType : false,
processData :false ,

success : function(data){
$('#muestra').html(data);
setTimeout(actualisarp(),100);

}
});
}
//esta funcion es para 
function actualisarp(){

	$.ajax({
      url : "personalisar/actualisar.php",
      data : null,
      success : function(data){
      	$('#foto_cambio').attr('src',data);
      }



	});
}


