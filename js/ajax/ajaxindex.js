/*if (window.XMLHttpRequest) {

	xmlhttp = new XMLHttpRequest();
}
else
{
	xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
}


//sacamos valores del login




function consulta(){
var usu =document.getElementById('usu').value;
var com=document.getElementById('con').value;
data="usu="+usu+"&com="+com;
url="paginas/sesiones/validar.php";
peticion(data,url);


}

function peticion (datos,url){
	xmlhttp.onreadystatechange=visualiza;
xmlhttp.open("POST",url,true);
xmlhttp.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
xmlhttp.send(datos);

}

function visualiza(){
	if(xmlhttp.readyState==4 && xmlhttp.status==200)
	{
		document.getElementById('respuesta').innerHTML=xmlhttp.responseText;
	}
}*/

function consulta(){
	var nom=$('#usu').val();
	var com=$('#con').val();
	var valores ={
  "usu" : nom,
  "com" : com
	};

$.ajax({
	data : valores,
	url : 'paginas/sesiones/validar.php' ,
	type : 'POST',
	success : function (data){

		$('#respuesta').html(data);

	}

}

	);
}


function registrar() {
	var nom =$('#nom').val();
	var ape=$('#ape').val();
	var email=$('#ema').val();
	var fecha=$('#fec').val();
	var telef=$('#tel').val();
	var usuar=$('#usua').val();
	var com=$('#contra').val();

var valores = {
	"nom" : nom,
	"ape" : ape,
	"email" : email,
	"fecha" : fecha,
	"telef" : telef,
	"usuar"   : usuar,
	"com"   : com

};

 $.ajax({
 	data : valores,
 	type : 'POST',
 	url  : 'paginas/sesiones/registrar.php',
 	success : function (data) {
 		$('#respuesta').html(data);
 		var an='<script>alert(41);</script>';
 		$('#apa').innerHTML=an;
 		

 	}

 });

}


/////mostrar base de datos
function ders() {
$.ajax({
  
	url :'basedatos.php',

  success :function (data) {
  	$('#are').html(data);
  }

});

}

///modificar un usuario de la base datos
function modificar(a) {


	var b = {
		"as" : a
	};
$.ajax({
       data: b,
       type : 'POST',
       url  :'modificar.php',
       success : function(data){
       	$('#era').html(data);
       }
    



});
}


//actualizar los datos del usuario 
function actualizar() {
	var id=$("input[name=id]").val();
var nom =$("input[name=nom]").val();
var ape =$("input[name=ape]").val();
var edad =$("input[name=edad]").val();
var usu =$("input[name=nick]").val();
var com=$("input[name=com]").val();
var telef =$("input[name=tele]").val();
var fech =$("input[name=fech]").val();
var email =$("input[name=email]").val();
var dat = {
	"id" : id,
   "nom" : nom,
   "ape" : ape,
   "edad" : edad,
   "usu" :usu,
   "com" : com,
   "telef" : telef,
   "fech" :fech,
   "email" : email
   
};

$.ajax({ 
	data : dat,
	type :'POST',
	url : 'actualisardatos.php',
	success : function(data) {
$('#ac').html(data);
	}





});
}



//eliminar un usuario
function eliminar(id){

var ide={
	"id" :id
};

$.ajax({
	data :ide,
	type : 'POST',
	url:'eliminarusuarios.php',
	success : function(data){
		$('#eli').html(data);
		ders();
	}

});


}