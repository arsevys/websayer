window.onload = function (){
    
}

 
 function cambiarcolor(x){
  for (var i = Things.length - 1; i >= 0; i--) {
    Things[i]
  }
 }





function apliar(){
  window.stop();
    document.getElementById("modal_aviso").style.display="block";
    setTimeout(function() {
       document.getElementById("aviso").style.transform="scale(1) rotateY(230deg) rotateX(230deg)";
    },100);
     setTimeout(function() {
       document.getElementById("aviso").style.transform="scale(1) ";
    },400)
}

function apla(){
    document.getElementById("modal_aviso").style.display="none";
    setTimeout(function() {
       document.getElementById("aviso").style.transform="scale(4)";
    },100);
}

 function menu(){
      var ide = document.getElementById('icono');
  ide.classList.remove('icon-paragraph-justify');
        ide.classList.add('icon-paragraph-center');
    document.getElementById("opciones").style.transform="translateX(0%)";
    document.getElementsByClassName("menosopcion").item(0).style.transform="translateX(0%)";
  }

  function menumenos(){
        var ide = document.getElementById('icono');
    ide.classList.remove('icon-paragraph-center');
         ide.classList.add('icon-paragraph-justify');
    document.getElementById("opciones").style.transform="translateX(-100%)";
     document.getElementsByClassName("menosopcion").item(0).style.transform="translateX(100%)";
  }



var auxi=2;
var opacidad = 10;
var opacidad2 = 0 ;
var entrar = true;
var desaparece,aparece;
var fondos = ["imagenes/fondos/fondo-login.jpg","imagenes/fondos/fondo-registrate.jpg","imagenes/fondos/fondo-principal.jpg","imagenes/fondos/fondo-info.jpg"];
var entra = true;

function cambio(x){
if (entra) {
    entra = false;
     var cor = auxi
      var este = document.getElementsByClassName('alt');
      
     for (var i = 0; i < este.length; i++) {
        var se = este.item(i);
        se.classList.add("borde");
        se.classList.remove("borde2");
        if (i == x) {
               se.classList.remove("borde");
           se.classList.add("borde2")
        }
       }
       
      var body = document.getElementsByTagName("body")[0];
       
      body.style.backgroundImage="url('"+fondos[x]+"')";

      body.style.overflow="hidden";
      if (x == 1) {
        body.style.overflowY="auto";
        body.style.overflowX="hidden";
      }


   if (entrar && opacidad == 10 && opacidad2 == 0) {
    
    entrar=false;
      
    desaparece = setInterval(function (){
        
     var auxiliar = document.getElementsByClassName('suite').item(cor);
   

        opacidad--;
        
         auxiliar.style.opacity="" + opacidad/10;

        if (opacidad == 0) {
      
            opacidad=10;

             

                 clearInterval(desaparece);
}
    },100);
     var div = document.getElementsByClassName('suite').item(x);
      var auxiliar = document.getElementsByClassName('suite').item(cor);
       auxiliar.style.display="none";
             div.style.display="block";

    aparece = setInterval(function(){
    
     var div = document.getElementsByClassName('suite').item(x);

     


        opacidad2++;

        div.style.opacity="" + opacidad2/10;

        if (opacidad2 == 10) {
       
        opacidad2=0;
       
        entrar = true;

        clearInterval(aparece);

}
    },100);
    

         auxi = x;
   };
   setTimeout(function(){
    entra = true
   },1000);
 }

}


