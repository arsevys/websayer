window.onload = function(){
  setInterval("cas()",10);
  canciones();

}


 var cos = 0 ;
 var fondo = ["../imagenes/fon1.jpg","../imagenes/fon2.jpg" ,"../imagenes/fon3.jpg" ,"../imagenes/fon4.jpg" ,"../imagenes/fon5.jpg" ,"../imagenes/fon6.jpg" ,"../imagenes/fon7.jpg" ,"../imagenes/fon8.jpg" ];


var contadorheight=0;
var bolean = [true,true,true,true,true] ;
var bolean2 = [false,false,false,false,false] ;
var dar = 0;
var pix = 0;
var contadorheight2 = 160;
var resta;
var trud ;
var opaci = 0 ;
var opaci2 = 10 ;



function despliege (w,p){

    var ico= document.getElementsByClassName('icomon').item(w).classList;
	var seccions = document.getElementsByClassName('intro_grupo').item(w) ;
   if (bolean[w] && contadorheight == 0 && contadorheight2 == 160) {
    ico.remove("icon-flickr");
    ico.add("icon-flickr2")
	dar = w;
	pix = p;
	seccions.style.background="rgba(200,0,0,0.3)";
	der = setInterval("bajar(der,dar,pix)",1);
}

if (bolean2[w] && contadorheight2 == 160 && contadorheight == 0) {
	 ico.remove("icon-flickr2");
    ico.add("icon-flickr")
	dar = w;
	pix = p;
	seccions.style.background="";
	dera = setInterval("subir(dera,dar,pix)",1);
}
}




function bajar(x,y,z){

    var seccion = document.getElementsByClassName('cuerpo_grupo') ;

    if (bolean[y]) {
   contadorheight+=2;
   seccion.item(y).style.height = contadorheight + "px";
  
   if(contadorheight == 2){
   	resta = Math.floor(z/10);
   	trud = resta;
   }
   

   if(contadorheight == trud){
   	trud+=resta;
   	opaci++;
   	seccion.item(y).style.opacity=""+ opaci/10;
   }


   if (contadorheight == z) {
   	clearInterval(x);
   	bolean[y]=false;
   	bolean2[y]=true;
   	contadorheight=0;
   	opaci = 0;
   }
}
}


function subir(x,y,z){

  var seccion = document.getElementsByClassName('cuerpo_grupo') ;


if (bolean2[y]) {
   contadorheight2-=2;
   seccion.item(y).style.height = contadorheight2 + "px";
}


  if(contadorheight2 == z -2){
   	resta = Math.floor(z/10);
   	trud = z - resta;
   }
   

   if(contadorheight2 == trud){
   	trud-=resta;
   	opaci2--;
   	seccion.item(y).style.opacity=""+ opaci2/10;
   }


   if (contadorheight2 == 0) {
   	clearInterval(x);
   	bolean[y]=true;
   	bolean2[y]=false;
   	contadorheight2 = z;
   	opaci2=10;
   }

}





function cas(){
  var dre = document.getElementById('row').offsetHeight;
  var dra = document.getElementById('usuario').offsetHeight;
    var fre = document.getElementById('nav');
  var galva = dre - dra - 40
   fre.style.height=galva +"px" ;

}



function color(){
  var fre = document.getElementById('colo').value;
  var fra = document.getElementById('tear');
  fra.style.color=""+fre;
}
function enviar(){
   var fra = document.getElementById('tear').value;
    var fre = document.getElementById('colo').value;
   var mes = document.getElementById('mensaje');
   mes.innerHTML= "<p style='color=" + fre + "'>"  + fra + "</p>";
}

function canciones(){
  var mus = document.getElementsByClassName('cancion').length;
  var csn =document.getElementsByClassName('canciones').item(0);
  csn.innerHTML="" + mus ;
}



var entr = false;
function despla(){
  var ds = document.getElementById('galeria');
  var gol = document.getElementById('body');
  ds.style.display="block";

if (entr) {
  ds.classList.remove('desplasa2');
  gol.classList.remove('desplasa');
};

  ds.classList.add('desplasa');
  gol.classList.add('desplasa2');
}


function regre(){
  var ds = document.getElementById('galeria');
  var gol = document.getElementById('body');
  gol.style.display="block";
  ds.classList.remove('desplasa');
  gol.classList.remove('desplasa2');
  ds.classList.add('desplasa2');
  gol.classList.add('desplasa');
  if (entr == false) {
    entr = true;
  };
}



var entrada = true;

function play(){
  var video=document.getElementById('media');
  var ico = document.getElementById('play');
  if (entrada) {
   video.play();
   ico.classList.remove('icon-play3');
   ico.classList.add('icon-pause2');
   entrada = false
 }
 else{
   video.pause();
   ico.classList.remove('icon-pause2');
   ico.classList.add('icon-play3');
   entrada = true;
 }
}


function avance(){
  var video=document.getElementById('media');
  video.PlaybackRate = 4;
}

function atras(){
  var video=document.getElementById('media');
  video.PlaybackRate = -4.0;
}

function normal(){
    var video=document.getElementById('media');
    video.playbackRate = 1;
}

function setPlaySpeed() {
  var video=document.getElementById('media');
    video.playbackRate = 4;
}


var entrad = true;

function dal(){
  entrad = true;
  var video=document.getElementById('media');
  var pross=document.getElementById('progre');
  var rang=document.getElementById('range');
  var num=document.getElementById('num');

  video.ontimeupdate = function(){
      
    pross.max=video.duration;
    rang.max=video.duration;
    pross.value=video.currentTime;

   if(Math.floor(video.duration) == Math.floor(video.currentTime)){
    pross.value=0;
    rang.value=0;
    video.load();
    play();
     }
      }
}


function conti(){
  
  entrad = false;
  var video=document.getElementById('media');
  var pross=document.getElementById('progre');
  var rang=document.getElementById('range');
  video.currentTime = rang.value;
  pross.value=rang.value;

}

function obte(){
  var video=document.getElementById('media');
  var mar=document.getElementById('marquee');
  mar.innerHTML=video.title;
}



