
var registro = document.getElementById('registro');s
var login = document.getElementById('login');

    var contadorwidth=0
	var contador = 0;
	var entrada = true;
	var multiplicador=0;

function opacidad( y , z ){

	var registro = document.getElementById('registro');
     contadorwidth++;
     registro.style.width=contadorwidth+"px";

	if (entrada) {
	 resul = y / 10 ;
	 multiplicador+=resul;
	 entrada=false;
	}

	if (contadorwidth == multiplicador) {
		multiplicador+=resul;
		contador++;
		registro.style.opacity=""+contador/10;
		if (y == contadorwidth) {
			clearInterval(z);
		}

	}


	
}
var con = 0 ;
function aparece(){
	  var registro = document.getElementById('registro');
      registro.style.display="block";
      

      if (con == 0) {
      apare = setInterval("opacidad(260 , apare)",1);
      con++;
}
  }

