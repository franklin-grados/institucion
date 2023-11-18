$("#title").html("Courses");
function getClases(){
    $.post("../ajax/courses.php?op=getClases",function(data){
	    	if(isJSON(data)){
	    		datos=JSON.parse(data);
	    		let clases = datos['clases'];
	    		let cursos="";
	            let respuesta=document.querySelector('#cursos');
	            respuesta.innerHTML='';
	                
	            for(let item of clases){
	                cursos +=`

	                <div class="col-3">
	                    <div class="cuadro-curso" onclick="reportesCurso(${item['class_id']})">
	                    	
	                    	<div class="nombre-curso">
		                    	<h1 class="data-info">${item['class_name']}</h1>
		                	</div>
	                	</div>
	                </div>
	 
	            `
	            }

	            respuesta.innerHTML=cursos;

	    	}else{
	    		alert(data['error']);
	    	}

	    });
}

function reportesCurso(class_id){
	
	$.post("../ajax/courses.php?op=getHorarios",{class_id: class_id},function(data){
	    	if(isJSON(data)){
	    		datos=JSON.parse(data);
	    		let horarios =datos['horarios'];
	    		console.log(datos);
	    		$('#ModalPropuestaSire').modal('show');
				$("#titleCourses").html(horarios['class_name']);
	    	}else{
	    		alert(data['error']);
	    	}

	    });
}

getClases();