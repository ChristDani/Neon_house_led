
$(document).ready(function() {
    $("#save2").val("");

    saveCliente();
});



function saveCliente(){
    $("#formDatos").submit(function(e){
      e.preventDefault();
  
      let cli_nombre = $("#per_nombre").val();
      let cli_apellidos = $("#per_apellidos").val();
      let cli_email = $("#per_email").val();
      let cli_telefono = $("#per_telefono").val(); 

      
      const data = {
        cli_nombre: cli_nombre,
        cli_apellidos: cli_apellidos,
        cli_email: cli_email,
        cli_telefono: cli_telefono,
        cli_rol: 2,
        cli_verifcado: 2,

      };
      console.log(data);
      if (cli_nombre == "" || cli_apellidos == "" || cli_email == "" || cli_telefono == "" ){
          swal({
            title:"Completar los campos requeridos",
            icon: "error"
        });

        } else {
      
              update2(data);

              }
            });
      
      }


      function update2(data) {
        let data2 = data;
        console.log(data2);

        $.ajax ({
          url: "cliente/update2",
          type: "POST",
          data: data2,
          
          success: function(e) {
            console.log(e);
          let json = JSON.parse(e);
          switch (json.STATUS) {

            case 1:
              swal({
                title: json.mensaje,
                icon: "success",
              });
              break;

            case 2:
              swal({
                title: json.mensaje,
                icon: "error",
              });
              break;
          }
            
        }
      
        });

      }


