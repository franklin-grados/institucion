var tabla_Staff
var correr=0;

function listarSelect(){
    $.ajax({url: "../ajax/staff.php?op=listarSelect",type: "POST",data:{ key1: "valor1",key2: "valor2"},success: function (response) {

          var data = JSON.parse(response);
          var cent="";
          let center=document.querySelector('#center_id');
            center.innerHTML='';
               
                for(let item1 of data['result_c']){
                cent +=`<option value="${item1['center_id']}"> ${item1['center_name']} </option>`
            }
            center.innerHTML=cent;

            var depart="";
            let department=document.querySelector('#department_id');
            department.innerHTML='';
               
                for(let item1 of data['result_d']){
                depart +=`<option value="${item1['department_id']}"> ${item1['department_name']} </option> `
            }
            department.innerHTML=depart;
        },
        error: function (error) {
          // Esta función se ejecutará si hay un error en la solicitud POST
          console.error("Error en la solicitud POST", error);
        }
      });
}

listarSelect();

function listarStalf(){
    if (correr==0) {
        var center_id = 1;
        var department_id = 1;
    }else{
        var center_id = $("#center_id").val();
        var department_id = $("#department_id").val();
    }
        
    tabla_Staff = $('#listStaff').DataTable({
        // Configuración de DataTables
        aProcessing:true,
        aSeverSide:true,
        dom: 'Bfrtip',
        ajax: {
            url: '../ajax/staff.php?op=listarStalf', // Reemplaza por la URL de tu servicio
            data:{center_id: center_id, department_id: department_id},
            type: "get",
            dataSrc: 'data' // La propiedad que contiene los datos en la respuesta JSON
        },
        "columns": [
            { data: 'center_id'},
            { data: 'staff_firstname' },
            { data: 'staff_lastname' },
            { data: 'staff_email' },
            { data: 'staff_phone_mobile' },
            { data: 'staff_phone_office' },
            { data: null, "defaultContent": '<div class="text-center"><button type="button" class="btn btn-danger btn-sm delete-row"><i class="fa fa-trash"></i></button><button  type="button" class="btn btn-warning btn-sm edit-row"><i class="bi bi-pencil-fill"></i></button></div>'}
        ],
        "columnDefs": [{"visible": false, "targets":[0]}],
        "bDestroy":true,
        "iDisplayLegth": 15,
        "order": [[0, "desc"]]
    });
    correr++;
}

$('#listStaff').on('click', '.delete-row', function() {
    var rowData = tabla_Staff.row($(this).closest('tr')).data();
    // Haz lo que necesites con los datos
    console.log('Datos de la fila:', rowData);

});

$('#listStaff').on('click', '.edit-row', function() {
    var rowData = tabla_Staff.row($(this).closest('tr')).data();
    // Haz lo que necesites con los datos
    console.log('Datos de la fila:', rowData);
});

function tableEdit(){
    $(document).ready(function(){
        $('#listStaff').Tabledit({
            deleteButton: false, // Configura si deseas mostrar un botón de eliminación
            editButton: false, // Configura si deseas mostrar un botón de edición
            columns: {
            identifier: [0, 'id'], // La columna que actúa como identificador único
            editable: [['1', 'dato2'], ['2', 'dato3'], ['3', 'dato4'], ['4', 'dato5'], ['5', 'dato6']] // Columnas editables
            },
            url: 'tu_script_de_edicion.php', // URL del script de edición en el servidor
            hideIdentifier: true,
      });
    });
}

function tables(){
    
    $(document).ready(function(){
        $('#listStaff').Tabledit({
            deleteButton: false,
            editButton: false,
            columns: {
                identifier: [-1, 'id'],
                editable: [['1', 'dato3']]
            },
            hideIdentifier: true,
            url: '../ajax/reportes.php?op=EditarCosto'
        });
    });

}

listarStalf()