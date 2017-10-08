$(document).ready(function(){

$("input[name='galeria']").change(function(){
	
});

});




function subirimagenes(){
//var formData=
	var archivos=document.getElementById('files').files;
	var navegador=window.URL;

	for (i = 0; i < archivos.length; i++) {
	 	var size=archivos[i].size;
	 	var type=archivos[i].type;
	 	var name =archivos[i].name;

	 	if(size>1024*1024)
	 	{
	 		$('#vistar').append("<p>El archivo" +name+ "esta muy grande</p>");
	 	}

         else if(type != 'image/jpg' && type != 'image/jpeg' && type != 'image/png' && type != 'image/gif')
         {
         	$('#vistar').append("<p>El archivo" +name+ "no es una imagen</p>");
         }
      else {

      	var objeto_url=window.URL.createObjectURL(archivos[i]);
         $('#vistar').append("<img src="+objeto_url+" width='250' height='250'>");
         alert(objeto_url);
	 } 

      }




}



function subirimagenes() {
	var formData=new formData(document.getElementById('imagenes'));
	$.$.ajax({
		url: 'galeria/subirimagenes.php',
		type: 'POST',
		contentType:false,
		processData:false,
		data: formData,
	
	success: function() {
		console.log("success");
	});
	
	
}