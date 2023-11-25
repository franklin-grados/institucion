
function closeSession(){
	$.post("../ajax/close.php",function(data)
	    {
	    	if(isJSON(data)){
	    		datos=JSON.parse(data);
	    		$(location).attr("href",'../login.php');	
	    	}else{
	    		alert(data);

	    	}

	    });
}