
var n = 1 ;
var con = -1 ,ade = 0, atra= -2;
var set;
 
setTimeout("avanza()",1);

function avanza(){
    var aux = document.getElementsByClassName('conter');
    con ++;
    
    if (con == aux.length ) {
          con = 0;
    }
     
     ade++;
 
    if (ade == aux.length) {
        ade = 0;
    }

       atra ++;
    if (atra == aux.length) {
        atra = 0;
    }

    if (atra == -1) {
        atra = aux.length-1;
    }


 for (var i = 0; i <aux.length ; i++) {
    aux.item(i).classList.remove('atra');
     aux.item(i).classList.remove('atrados');
     aux.item(i).classList.remove('atrauno');
     if (i == con) {
        aux.item(i).classList.remove('muevedos');
        aux.item(i).classList.remove('regresa');
        aux.item(con).classList.add('mueveuno');
     }
     else if(i == ade) {
        aux.item(i).classList.remove('mueveuno');
        aux.item(i).classList.remove('regresa');
         aux.item(ade).classList.add('muevedos');
     }
     else if (i == atra) {
        aux.item(i).classList.remove('mueveuno');
        aux.item(i).classList.remove('muevedos');
        aux.item(atra).classList.add('regresa');
     }
     else{
     aux.item(i).classList.remove('mueveuno');
     aux.item(i).classList.remove('muevedos');
     aux.item(i).classList.remove('regresa');
     }
 }   
    

  set =  setTimeout("avanza()", 10000);
}

function retrosede(){
    var aux = document.getElementsByClassName('conter');

 
 for (var i = 0; i < aux.length ; i++) {
        
     if (i == ade) {
        aux.item(i).classList.remove('mueveuno');
        aux.item(i).classList.remove('muevedos');
        aux.item(i).classList.remove('regresa');
        aux.item(i).classList.remove('atrados');
        aux.item(i).classList.remove('atra');
        aux.item(i).classList.add('atrauno');
     }
     else if(i == con) {
        aux.item(i).classList.remove('mueveuno');
        aux.item(i).classList.remove('muevedos');
        aux.item(i).classList.remove('regresa');
        aux.item(i).classList.remove('atrauno');
        aux.item(i).classList.remove('atra');
        aux.item(i).classList.add('atrados');
     }
     else if (i == atra) {
        aux.item(i).classList.remove('mueveuno');
        aux.item(i).classList.remove('muevedos');
        aux.item(i).classList.remove('regresa');
        aux.item(i).classList.remove('atrauno');
        aux.item(i).classList.remove('atrados');
        aux.item(i).classList.add('atra');
     }
     else{
        aux.item(i).classList.remove('mueveuno');
        aux.item(i).classList.remove('muevedos');
        aux.item(i).classList.remove('regresa');
         aux.item(i).classList.remove('atra');
         aux.item(i).classList.remove('atrados');
         aux.item(i).classList.remove('atrauno');
     }


 }   
        con --;
    
    if (con < 0 ) {
          con = aux.length -1;
    }
     
     ade--;
 
    if (ade < 0) {
        ade = aux.length-1;
    }

 atra --;
   
    if (atra < 0) {
        atra = aux.length-1;
    }


 
}

var asu = 0;

function flecha(x){
      clearTimeout(set);
      if (asu == 0) {
             asu= 33;
      if (x == 0 ) {
          setTimeout(function(){
            asu=0;
         },2000);
         avanza();
       }
       if (x == 1) {
           setTimeout(function(){
            asu=0;
              set =  setTimeout("avanza()", 10000);
         },2000);
         retrosede();
       }

       
    }
}


var afri = 0;
var ayu = 0;
function artistamas(x){
    var aux = document.getElementsByClassName('artista');

    if (afri == 0) {
            afri = 23;
      if (x == 0 && ayu == 0) {
        for (var i = 0; i < aux.length; i++) {
            aux.item(i).classList.remove('baja');
           aux.item(i).classList.add('sube');
        }
        
        setTimeout(function(){
            afri = 0;
            ayu = 1;
         },2000);
        
      }

      else if(x == 1 && ayu == 1) {
            for (var i = 0; i < aux.length; i++) {
            aux.item(i).classList.remove('sube');
           aux.item(i).classList.add('baja');
        }
         setTimeout(function(){
            afri = 0;
            ayu = 0;
         },2000);
     
      }

        else{
            afri = 0;
        }
    }
}