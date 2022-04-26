// const btnSave = document.querySelector("#save");
$(document).ready(function() {
    $("#pass").val("");
    // boton guardar
    // if(btnSave!=null){
    //     btnSave.disabled =true;
    // }
    // metodos
    data();
    // reset();
    // verificarKey();

});


function data() {
    $.ajax({
        url: '/configuracion/getData',
        type: 'GET',
        success: function(e){
            
            //si no esta logeado enviar un mensaje que empieza con <
            if (e[0] == "<") {
            console.log("No logeado");
            document.getElementById('Carrito').style.display = '';
            document.getElementById('Iniciar_S').style.display = '';
            } else {
            var {data} = JSON.parse(e);
                if(data.cli_rol == 1){
                    //$(document).ready(function() {
                    //    $('#Perfil').text('Admin');
                    //    $('#Perfil').append('   <i class="fas fa-user"></i>');
                    //});
                    document.getElementById('Perfil').style.display = '';
                    document.getElementById('Cerrar_S').style.display = '';
                    
                }if(data.cli_rol == 2){
                    var nombre = data.cli_nombre;
                    $(document).ready(function() {
                        nombre = nombre.toUpperCase();
                        $('#Nombre').text(nombre);
                        $('#Nombre').append('   <i class="fas fa-cog"></i>');
                    });
                    document.getElementById('Administrar').style.display = '';
                    document.getElementById('Carrito').style.display = '';
                    document.getElementById('Cerrar_S').style.display = '';
                }
            }

            if(document.getElementById('per_nombre')){
                /* guia mostrar nombre  */

                $("#per_nombre").val(data.cli_nombre);
                $("#per_apellidos").val(data.cli_apellidos);
                $("#per_email").val(data.cli_email);
                $("#per_telefono").val(data.cli_telefono);
                console.log(data);
                

                } 

        }   
        
    });
}


