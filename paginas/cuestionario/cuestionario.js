var guardarpregunta=[];

var cantidadNumeros = 15; //aqui es la cantidad de numeros aleatorios
var ale = [];//aqui se van a guardar los numeros aleatorios
var  p=0;//aqui va ser el recorrido del array de numeros generados
var marcar;




function cambiarpregunta(){
	p++;
guardarpre();
if(marcar){
var preguntas=['pregunta1.php',
                'pregunta2.php'];
var j= Math.ceil(Math.random()*1);
var preenviar=preguntas[0];
var numero={
'num':ale[p]
};
$.ajax({
	url: preenviar,
	data: numero,
	type:'POST',

success: function(data){
$('#contenedorpregunta').html(data);
}
});

}
 else {
 	alert('marcar una de las opciones');
 }

}







function empesar(){
	aleatorio();
	var preguntas=['pregunta1.php',
                'pregunta2.php'];
var j= Math.ceil(Math.random()*1);

var preenviar=preguntas[0];
var numero={ 
'num': ale[p]
};
$.ajax({
	url: preenviar,
	data: numero,
	type:'POST',


success: function(data){
$('#contenedorpregunta').html(data);
}
});

}


function guardarpre(){

var input_radio=document.formulario.a;
for(x=0;x<input_radio.length;x++){
	if(input_radio[x].checked){
		var tuopcion=input_radio[x].value;
		guardarpregunta.push(tuopcion);
	 return marcar=true;
	 
	}

	else {
 marcar=false;
		
	}
}
}






function resultados(){
	guardarpre();
	if(marcar){
	var jsonString = JSON.stringify(guardarpregunta);
$.ajax({
	url: 'resultados.php',
	type: 'POST',
	data: {data : jsonString},
	success: function(data){
$('#contenedorpregunta').html(data);

	}
});
}

else {
	alert("Elige una de las opciones");
}

}


//generaa en un array 10 numeros ramdon sin repetir
function aleatorio(){


while(ale.length < cantidadNumeros ){
  var numeroAleatorio = Math.ceil(Math.random()*21);
  var existe = false;
  for(var i=0;i<ale.length;i++){
	if(ale [i] == numeroAleatorio){
        existe = true;
        break;
    }
  }
  if(!existe){
    ale[ale.length] = numeroAleatorio;
  }



}
		
}


setTimeout(function(){

console.log(ale);
},2000);