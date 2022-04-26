
$(document).ready(function() {
  
    data();
 
});

function data() {
    $.ajax({
        url: '/configuracion/getData',
        type: 'GET',
        success: function(e){
            const {data} = JSON.parse(e);
            document.querySelector("#admi").value = data.cli_nombre;
            $("#mail").val(data.cli_email); //para input
            // document.querySelector("#cli_email").value = data.cli_email;  etiqueta
            
           
        }   
    });
}