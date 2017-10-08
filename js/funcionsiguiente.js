

function reprod(id,titulo,banda,album,ruta,cover,contador){
contadordemusica=contador;

var r='../imagenes/BD_musica/';
$('#titulo').html(titulo);
$('#banda').html(banda);
$('#album').html(album);
$('#cover').attr('src',r+cover);
$('#musica').attr('src','../musica/'+ruta);
var mus = document.getElementById('musica');
mus.load();
gar=true;

play();
}

function atrasmusica(){
  
 if(contadordemusica<=1)
 {
  var cantidaddemusica= document.getElementsByClassName('cantidadmusic').length;
  x=contadordemusica+=cantidaddemusica-2;
  var idmusica=document.getElementsByClassName('cantidadmusic').item(x);
idmusica.click();

 }
else {
  x=contadordemusica-=2;
   var idmusica=document.getElementsByClassName('cantidadmusic').item(x);
idmusica.click();
}
}

function siguiente(){

var cantidaddemusica= document.getElementsByClassName('cantidadmusic').length;
//debugger;
//alert(contadordemusica);


 if(contadordemusica==cantidaddemusica)
 {
  x=contadordemusica=0;
  var idmusica=document.getElementsByClassName('cantidadmusic').item(x);
idmusica.click();

 }
else {
  x=contadordemusica++;
   var idmusica=document.getElementsByClassName('cantidadmusic').item(x);
idmusica.click();
}
}





//este era un codigo antiguo
/*function siguiente() {
  if(contadordemusica==10){contadordemusica=0;}
  var u= contadordemusica+=1;
  /*resaltar=u;
 var it=document.getElementsByClassName('cor');
 if (resaltar==u){
  it.item(u-1).style.background="red";
  
 }
  if(resaltar>=2){
    it.item(u-2).style.background="none";
  }
  if(resaltar>9)
  {
    it.item(u+1).style.background="none";

  
  console.log(resaltar);
var valor = {
  "ed" :u
}

  $.ajax({
         data :valor,
         url :'musica/siguiente.php',
         type : 'POST',
         dataType : 'json',
         success : function (data){
          $('#titulo').html(data.titulo);
          $('#banda').html(data.album);
          $('#album').html(data.banda);
          $('#titulo').html(data.titulo);
          var r='../imagenes/BD_musica/coldplay/cover/';
          $('#cover').attr('src',r+data.cover);
          $('#musica').attr('src','../musica/'+data.ruta);
          var mus = document.getElementById('musica');
            mus.load();
            gar=true;
            play();

         }



  });
}



function atrasmusica() {
  if(contadordemusica==0 || contadordemusica==1){contadordemusica=11;}

  var u=contadordemusica-=1;
  console.log(contadordemusica);
var valor = {
  "ed" :u
}
  $.ajax({
         data :valor,
         url :'musica/siguiente.php',
         type : 'POST',
         dataType : 'json',
         success : function (data){
          $('#titulo').html(data.titulo);
          $('#banda').html(data.album);
          $('#album').html(data.banda);
          $('#titulo').html(data.titulo);
          var r='../imagenes/BD_musica/coldplay/cover/';
          $('#cover').attr('src',r+data.cover);
          $('#musica').attr('src','../musica/'+data.ruta);
          var mus = document.getElementById('musica');
            mus.load();
            gar=true;
            play();

         }



  });




}*/