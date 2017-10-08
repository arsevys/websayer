function comprarmusica(id,tablas,precio){
var envia = {
"id":id,
'tabla':tablas,
"precio" : precio


};




$.ajax({
     data: envia,
     type: 'POST' ,
     dataType : 'json',
     url : 'controladores/comprarmusica.php' ,

     success : function(data){
if(data.validar){
$('#moneda').html(data.moneda);
$('#monedamini').html(data.moneda);
$('.badge').html(data.moneda); // este es para ver las monedas nuevas del modo responsi
}
else {
	$('#resultadomoneda').html(data.error);
	$('#monedas').html(data.moneda);
}
     }






});






}