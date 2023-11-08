console.log("hola");

function listar(){
    $.ajax({url: "../ajax/",type: "POST",data:{ key1: "valor1",key2: "valor2"},success: function (response) {
          console.log("Solicitud POST exitosa", response);
        },
        error: function (error) {
          // Esta función se ejecutará si hay un error en la solicitud POST
          console.error("Error en la solicitud POST", error);
        }
      });
}