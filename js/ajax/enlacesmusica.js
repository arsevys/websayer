
var genero=['musica/rock_ingles.php',
             'musica/rock_castellano.php',
             'musica/rock_alternativo.php',
             'musica/baladas_ingles.php',
             'musica/baladas.php',
             'musica/baladas_oro.php',
             'musica/traducidas.php',
             'musica/pop_rock.php',
             'musica/cumbia.php',
             'musica/rap.php',
             'musica/teckno.php',
             'musica/70.php',
             'musica/salsa.php',
             'musica/anime.php',
             'musica/reguee.php'];


function eligirgenero(x){


	$.ajax({
		url: genero[x],
		data:null,
	
		success:function(data){
			$('#navegar').fadeOut(0).html(data).fadeIn(1000);
		}
	 });
}
