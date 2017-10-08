function vertumusica(){


	$.ajax({
		url: 'musica/tumusica.php',
		data:null,
	
		success:function(data){
			$('#navegar').fadeOut(0).html(data).fadeIn(1000);
		}
	 });
	
}
var con = 0 ;
//este es para q visualiza la lista de musica para comprar
function galeriamusica(){

	$.ajax({
		url: 'musica/artistas.php',
		data:null,
	
		success:function(data){
			
					 $('#navegar').fadeOut(0).html(data).fadeIn(2000);
			

		}
	 });
       
	  
	
}