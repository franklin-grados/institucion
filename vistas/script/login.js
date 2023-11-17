
$("#form_login").on('submit', function(e)
{
	e.preventDefault();
	email=$("#email").val();
	pass=$("#pass").val();

	$.post("ajax/login.php",
	    {"email":email,"pass":pass},
	    function(data)
	    {
	    	if(isJSON(data)){
	    		datos=JSON.parse(data);
	    		$(location).attr("href",'vistas/'+datos.ruta_inicio);	
	    	}else{
	    		$("#respuesta").text(data);
	    		$("#respuesta").removeAttr("hidden");
	    	}

	    });
});

function isJSON(str){
	try { 
		JSON.parse(str); 
	} catch (e) { 
		return false; 
	}
	return true;
}