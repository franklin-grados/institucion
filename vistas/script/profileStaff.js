$("#title").html("Perfil");
function dataUser(){
    $.post("../ajax/profileStaff.php?op=getProfile",function(data){
	    	if(isJSON(data)){
	    		datos=JSON.parse(data);
	    		let user = datos['user'];
	    		let student = datos['student'];
	    		$("#user").text(user['user_login']);
	    		$("#name").text(student['guardian_name'];

	    		$("#guardian_id").val(student['guardian_id']);
	    		$("#guardian_name").val(student['guardian_name']);
	    		$("#guardian_nric").val(student['guardian_nric']);
	    		$("#guardian_phone_home").val(student['guardian_phone_home']);
	    		$("#guardian_phone_office").val(student['guardian_phone_office']);
	    		$("#guardian_phone_mobile").val(student['guardian_phone_mobile']);

	    		$("#user_login").val(user['user_login']);
	    		$("#user_id").val(user['user_id']);
	    		$("#user_password").val("");
	    	}else{
	    		alert(data['error']);
	    	}

	    });
}

dataUser();