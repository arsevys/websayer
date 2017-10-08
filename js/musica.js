


window.onload = function () {
	  colors();
	  mueve();
}




var color = ["#E2671D","#24DB2A","#2374DC","#8327D8","#D02F43","#D2CA2D","#2BD470","#5DD42B","#D22DB1","#2433DB"];
function colors(){

    var aux = document.getElementsByClassName('efe');
    for (var i = 0; i < aux.length; i++) {
       var aux2 = Math.floor((color.length -1)*Math.random() + 1);
        aux.item(i).style.background=color[aux2];
    }

    setTimeout("colors()",5000);
}




function musica(){
	var mus = document.getElementById('musica');
	var progre = document.getElementById('range');
	var range = document.getElementById('progre');

	mus.ontimeupdate = function sigue() {
		if(mus.duration == mus.currentTime){
			siguiente();
	       /* play();
	        mus.currentTime = 0;
	        play();*/
		}

	progre.max=mus.duration;
	range.max=mus.duration;
	range.value=mus.currentTime;
		
     }

}

var gar = true;
function play (){
	var mus = document.getElementById('musica');
	var pla = document.getElementsByClassName('ico_play');
	if (gar == true) {
		gar=false;
		pla.item(0).classList.remove('icon-play3');
		pla.item(0).classList.add('icon-pause2');
		mus.play();
	}

	else{
		gar=true;
		pla.item(0).classList.remove('icon-pause2');
		pla.item(0).classList.add('icon-play3');
		mus.pause();
	}

}


function mueve (){
    var mus = document.getElementById('musica');
    var progre = document.getElementById('range');
    mus.currentTime = progre.value;
   musica();
}



var entrares = true;
function apli (){
	var va = document.getElementById('reprodu');
	if (entrares == true) {
		document.getElementsByClassName("reproductor").item(0).setAttribute("id","reproductordos");
      

    entrares = false;
    
   }
   else{


	document.getElementsByClassName("reproductor").item(0).setAttribute("id","reproductor");

   	entrares = true;
   }
}



var xan = 10;
function volumen(y){
    clearInterval(fra);
	 var mus = document.getElementById('musica');
	  if (xan < 10 && y == 1) {
    xan++;
    mus.volume = xan /10;
    continuo();
}
	 if (xan > 0 && y == 0) {
    xan--;

    mus.volume = xan /10;
    continuo();
}
fra = setInterval('foc()',3000);
}

var fra;
function apavol(){
	clearInterval(fra);
	var ico = document.getElementById('icomos');
	var fre = document.getElementsByClassName('con').item(0);
	fre.style.visibility= 'visible';
	fre.style.display= 'block';
	ico.style.display='none';
	fra = setInterval('foc()',3000);
}




function foc(){
	var fre = document.getElementsByClassName('con').item(0);
	var ico = document.getElementById('icomos');
	fre.style.visibility= 'hidden';
	fre.style.display= 'none';
	ico.style.display='block';
}




function continuo(x){
	
	var mus = document.getElementById('musica');
	var musa = document.getElementById('rang_vo');
	var muse = document.getElementById('pros_vo');
	if (x==0) {
		clearInterval(fra);
     mus.volume = musa.value / 10;
     fra = setInterval('foc()',3000);
	}
	muse.value= mus.volume * 10; 
}


  function masdespliega(y){
    y.style.height="50%";
     y.removeEventListener("click",masdespliega);
    y.addEventListener("click",menosdespliega);
  }

  function menosdespliega(y){
     y.removeEventListener("click",menosdespliega);
    y.addEventListener("click",masdespliega);
    y.style.height="20%";
  }
  
  function menu(){
    var ide = document.getElementById('icono_des');
      ide.classList.remove('icon-paragraph-justify');
        ide.classList.add('icon-paragraph-center');
    document.getElementById("opciones").style.transform="translateX(0%)";
    document.getElementsByClassName("menosopcion").item(0).style.transform="translateX(0%)";
  }

  function menumenos(){
     var ide = document.getElementById('icono_des');
    ide.classList.remove('icon-paragraph-center');
         ide.classList.add('icon-paragraph-justify');
    document.getElementById("opciones").style.transform="translateX(-100%)";
     document.getElementsByClassName("menosopcion").item(0).style.transform="translateX(100%)";
  }