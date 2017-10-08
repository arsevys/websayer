
<html lang="en">

<body>
<style type="text/css" >
	#contencold {
width: 100%;
height: 500px;
background: red;

	}
	.al {
width: 20%;
height: 200px;
background-color: white;
display: inline-block;
margin-left: 2%;

	}

img {
	width: 100%;
	height: 100%;
	box-sizing: border-box;
}
</style>
	
<div id="contencold">
	
<h1><center>Coldplay</center></h1>
<br>
<div class="al">
<img src="../imagenes/BD_musica/coldplay/cover/parachutes.jpg" onclick="listarp()">
	
</div>
<div class="al">
	<img src="../imagenes/BD_musica/coldplay/cover/arus.jpg">
</div>
<div class="al">
	<img src="../imagenes/BD_musica/coldplay/cover/ghoststories.jpg" onclick="stories()">
</div>
<div class="al">
	<img src="../imagenes/BD_musica/coldplay/cover/Vi.jpg">
</div>



</div>

<script type="text/javascript">
	function listarp() {
	$.ajax({
        url: 'musica/parachutes.php',
        success: function(data){
       $('#navegar').html(data);
        }


	});
	}

	function stories() {
	$.ajax({
        url: 'musica/stories.php',
        success: function(data){
       $('#navegar').html(data);
        }


	});
	}

</script>

</body>
</html>
