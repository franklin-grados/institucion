$("#title").html("Perfil");
function dataUser(){
    $.post("../ajax/profile.php?op=getProfile",function(data){
	    	if(isJSON(data)){
	    		datos=JSON.parse(data);
	    		console.log(datos);
	    	}else{
	    		$("#respuesta").text(data);
	    		$("#respuesta").removeAttr("hidden");
	    	}

	    });
}

dataUser();