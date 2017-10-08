$(document).ready(function(){
$("#buscador").focus();
  $("#buscador").keyup(function(e){
$('#resultado').html('<center><img src="buscador/buscamusica.gif" style="margin:auto"></center>');

 buscando();

});
///busca tu muusica
  $("#buscandomusica").keyup(function(e){
$('#resultado').html('<center><img src="buscador/buscamusica.gif" style="margin:auto"></center>');

 buscartumusica();

});


$("#buscadoraccesodirecto").keyup(function(e){
$('#resultado').html('<center><img src="buscador/buscamusica.gif" style="margin:auto"></center>');

buscaraccesodirecto();

});


});

function buscaraccesodirecto() {

var data=$('#buscadoraccesodirecto').val();
var tabla=$('#buscadoraccesodirecto').data('tabla');
var as={
'palabra': data,
'tabla':tabla
};

$.ajax({



    url :'buscador/consultaraccesodirecto.php',
    data : as,
    type :'POST',
    success:function(data){

        $('#resultado').html(data);
    }
}



    );


}







function buscartumusica(){
var data=$('#buscandomusica').val();
var tabla=$('#buscandomusica').data('tabla');
var as={
'palabra': data,
'tabla' : tabla
};


$.ajax({
     data : as,
     type : 'POST',
     url :  'buscador/consultartumusica.php' ,
     success: function(data){
$('#resultado').html(data);



     }


});



}



function buscando(){
var data=$('#buscador').val();
var tabla=$('#buscador').data('tabla');
var as={
'palabra': data,
'tabla' : tabla
};


$.ajax({
     data : as,
     type : 'POST',
     url :  'buscador/consultar.php' ,
     success: function(data){
$('#resultado').html(data);



     }



});


}