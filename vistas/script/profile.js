$("#title").html("Perfil");
function dataUser(){
    $.post("../ajax/profile.php?op=getProfile",function(data){
	    	if(isJSON(data)){
	    		datos=JSON.parse(data);
	    		let user = datos['user'];
	    		let student = datos['student'];
	    		$("#user").text(user['user_login']);
	    		$("#name").text(student['student_firstname']+" "+student['student_lastname']);

	    		$("#student_firstname").val(student['student_firstname']);
	    		$("#student_lastname").val(student['student_lastname']);
	    		$("#student_dob").val(student['student_dob']);
	    		$("#student_nric").val(student['student_nric']);
	    		$("#student_bc").val(student['student_bc']);
	    		$("#student_gender").val(student['student_gender']);
	    		$("#student_remarks").val(student['student_remarks']);

	    		$("#user_login").val(user['user_login']);
	    		$("#user_id").val(user['user_id']);
	    		$("#user_password").val("");
	    	}else{
	    		alert(data['error']);
	    	}

	    });
}

dataUser();