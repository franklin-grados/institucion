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
	                    <div class="cuadro-curso" onclick="reportesCurso(${item['class_id']})" style="background: url('../librari/images/courses/${item['image']}') no-repeat center center fixed;">
	                    	
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



document.addEventListener('DOMContentLoaded', function () {
    const calendarContainer = document.getElementById('calendario_general');
    const nombreMes = document.getElementById('nombre-mes');
    const botonAnterior = document.getElementById('anterior');
    const botonSiguiente = document.getElementById('siguiente');

    let mesActual = new Date().getMonth();
    let anioActual = new Date().getFullYear();

    function generarCalendario(anio, mes) {
        const primerDia = new Date(anio, mes, 1);
        const ultimoDia = new Date(anio, mes + 1, 0);

        const diasEnMes = ultimoDia.getDate();
        const primerDiaSemana = primerDia.getDay();

        let tablaHTML = '<table>';
        tablaHTML += '<tr><th>Domingo</th><th>Lunes</th><th>Martes</th><th>Miércoles</th><th>Jueves</th><th>Viernes</th><th class="sabado">Sábado</th></tr>';
        
        let dia = 1;

        for (let i = 0; i < 6; i++) {
            tablaHTML += '<tr>';

            for (let j = 0; j < 7; j++) {
                if ((i === 0 && j < primerDiaSemana) || dia > diasEnMes) {
                    tablaHTML += '<td></td>';
                } else {
                    // Añade la clase 'celeste' al día 26
                    const claseCeleste = dia === 25 ? 'celeste' : '';
                    tablaHTML += `<td class="${claseCeleste}">${dia}</td>`;
                    dia++;
                }
            }

            tablaHTML += '</tr>';
            
            if (dia > diasEnMes) {
                break;
            }
        }

        tablaHTML += '</table>';

        return tablaHTML;
    }

    function actualizarCalendario() {
        calendarContainer.innerHTML = generarCalendario(anioActual, mesActual);
        nombreMes.textContent = obtenerNombreMes(mesActual) + ' ' + anioActual;
    }

    function obtenerNombreMes(mes) {
        const nombresMeses = [
            'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio',
            'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
        ];

        return nombresMeses[mes];
    }

    // Inicializa el calendario
    actualizarCalendario();

    // Agrega la capacidad de cambiar de mes con los botones "Anterior" y "Siguiente"
    botonAnterior.addEventListener('click', function () {
        mesActual--;
        if (mesActual < 0) {
            mesActual = 11;
            anioActual--;
        }

        actualizarCalendario();
    });

    botonSiguiente.addEventListener('click', function () {
        mesActual++;
        if (mesActual > 11) {
            mesActual = 0;
            anioActual++;
        }

        actualizarCalendario();
    });
});
