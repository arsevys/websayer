window.onresize = function(){
    var dre = window.outerWidth;
if (dre < 768 && entras == false) {
       entras = true;
}

if (dre > 768 && entras) {
  entras = false;

  menu();
}


}

var entras = true;

function mostrar(){
  var aux = document.getElementsByClassName('paralax');
  document.getElementById('cerrar_paralax').style.zIndex="2";
  for (var i = 0; i < aux.length; i++) {
    aux.item(i).style.zIndex=1;
  }  
}
function opacar(){
  var aux = document.getElementsByClassName('paralax')
  for (var i = 0; i < aux.length; i++) {
    aux.item(i).style.zIndex=0;
  }
   document.getElementById('cerrar_paralax').style.zIndex="-1";
}


 var cos = 0 ;
 var fondo = ["../imagenes/fon1.jpg","../imagenes/fon2.jpg" ,"../imagenes/fon3.jpg" ,"../imagenes/fon4.jpg" ,"../imagenes/fon5.jpg" ,"../imagenes/fon6.jpg" ,"../imagenes/fon7.jpg" ,"../imagenes/fon8.jpg" ];


var contadorheight=0;
var bolean = [true,true,true] ;
var bolean2 = [false,false,false] ;
var dar = 0;
var pix = 0;
var contadorheight2 = 250;
var resta;
var trud ;
var opaci = 0 ;
var opaci2 = 10 ;



function despliege (w,p){

    var ico= document.getElementsByClassName('icomon').item(w).classList;
	var seccions = document.getElementsByClassName('intro_grupo').item(w) ;
   if (bolean[w] && contadorheight == 0 && contadorheight2 == 250) {
    ico.remove("icon-flickr");
    ico.add("icon-flickr2")
	dar = w;
	pix = p;
	seccions.style.background="rgba(200,0,0,0.3)";
	der = setInterval("bajar(der,dar,pix)",1);
}

if (bolean2[w] && contadorheight2 == 250 && contadorheight == 0) {
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

function color(){
  var fre = document.getElementById('colo').value;
  var fra = document.getElementById('tear');
  fra.style.color=""+fre;
}



  function dirmusica(){
                    window.open("../paginas/musica.php",'_self');}

  
  function abrir(){
    var aux = document.getElementById('emoticones');
    aux.style.visibility="visible";
    aux.style.opacity="1";
  }

   function cerrar(){
    var aux = document.getElementById('emoticones');
    aux.style.visibility="hidden";
    aux.style.opacity="0";
  }

   function abrirvideo(){
    var aux = document.getElementById('mo_vi');
    aux.style.visibility="visible";
    aux.style.opacity="1";
  }

   function cerrarvideo(){
    var aux = document.getElementById('mo_vi');
    aux.style.visibility="hidden";
    aux.style.opacity="0";
  }

  function abririmagen(){
    var aux = document.getElementById('mo_img');
    aux.style.visibility="visible";
    aux.style.opacity="1";
  }

   function cerrarimagen(){
    var aux = document.getElementById('mo_img');
    aux.style.visibility="hidden";
    aux.style.opacity="0";
  }

var entrad= 0;

  function desaparece(x){
    debugger;
    if (entrad == 0) {

    x.style.display="none";
  }
 else{

 }

  entrad = 0;
    
  }

    function aparece(){


   entrad = 1;

  }






  function cerrarseccion(){
    window.open("sesiones/cerrar.php",'_self');
  }


  
  function menu(){
    var ide = document.getElementById('icono_des');
      ide.classList.remove('icon-paragraph-justify');
        ide.classList.add('icon-paragraph-center');
    document.getElementById("navegador").style.transform="translateX(0%)";
    document.getElementsByClassName("menosopcion").item(0).style.transform="translateX(0%)";
  }

  function menumenos(){
     var ide = document.getElementById('icono_des');
    ide.classList.remove('icon-paragraph-center');
         ide.classList.add('icon-paragraph-justify');
    document.getElementById("navegador").style.transform="translateX(-100%)";
     document.getElementsByClassName("menosopcion").item(0).style.transform="translateX(100%)";
  }

  function notifi(){
    debugger;
    var aux = document.getElementById("notificaciones");
     var aux2 = document.getElementById("mensajes");
      var aux3 = document.getElementById("secciones");
    aux3.innerHTML = "Chat";

    aux.classList.remove("hidden-xs");
    aux2.classList.remove("col-xs-12");
    aux2.classList.add("hidden-xs");
    aux.classList.add("col-xs-12");

      aux3.removeEventListener("click",notifi);
          aux3.addEventListener("click",notifimenos);
  }

    function notifimenos(){
    var aux = document.getElementById("notificaciones");
     var aux2 = document.getElementById("mensajes");
      var aux3 = document.getElementById("secciones");
         aux3.innerHTML = "Notificaciones";
    aux2.classList.remove("hidden-xs");
    aux.classList.remove("col-xs-12");
    aux.classList.add("hidden-xs");
    aux2.classList.add("col-xs-12");
    aux3.removeEventListener("click",notifimenos);
      aux3.addEventListener("click",notifi);
  }


function scroll(){
  var y = window.pageYOffset;
  var paralax = document.getElementsByClassName("paralax");
  var aux = Math.floor(window.outerHeight * 1.5);
  var aux2 = 0;
  var en = 0;
  for (var i = 0; i < paralax.length ; i++) {
        if ( y <= Math.floor((aux * i)-(aux/2))  && en == 0) {
          aux2 = i + 5;
          en = 1;
        }
        if ( y <= aux * i  && en == 0) {
          aux2 = i;
          en = 1;
        }
  }

switch(aux2){
case 0: scrollTo(0,0); break;
  case 1 : scrollTo(0,aux*1);break;
    case 2 : scrollTo(0,aux*2);break;
      case 3 : scrollTo(0,aux*3);break;
         case 6: scrollTo(0,0); break;
            case 7 : scrollTo(0,aux*1);break;
              case 8 : scrollTo(0,aux*2);break;
                case 9 : scrollTo(0,aux*3);break;
      default : scroll(0,aux*4);
}


}

var wer = 0 ;
function fijar(){
  debugger;
  var aux = document.getElementsByClassName('fijar');
   var aux2 = document.getElementsByTagName("body")[0];
     if (wer == 0) {
      aux.item(0).innerHTML="Soltar Fondo";
      aux2.style.overflow="hidden";
      wer = 1;
      return;
     }
     if (wer == 1) {
         aux.item(0).innerHTML="Fijar Fondo";
      aux2.style.overflow="auto";
      wer = 0;
      return;
     }
}



