$(document).ready(function(){
    $("#formLogin").submit(e => {
        e.preventDefault();
        const data = {
            cli_email: $('#cli_email').val(),
            cli_clave: $('#cli_clave').val(),
            cli_rol: $('#cli_rol').val()
        }
        
        // URL donde se ejecutara la verificacion
        const url="/login/verificar";

        // Primera forma de hacer POST en Ajax
        console.log(data);
        $.ajax({
            url: url,
            data: data,
            type: 'POST',
            success: function(response){
                console.log(response);
            let json = JSON.parse(response);
            console.log(json.mensaje)
            const status = json.STATUS;
                if(status == 1){
                    swal({
                        title: json.mensaje,
                        icon: "success"
                      }).then(()=>{
                        window.location.href ="/"; 
                      });                      
                }else{
                    swal({
                        title: json.mensaje,
                        icon: "error",
                    });
                }
            }
        });
        /*
        Segunda forma de hacer un POST en Ajax
        $.post(url, data, (response)=>{
            //window.location.href="http://localhost:3001/dashboard";
            let json = JSON.parse(response);
            console.log(json.mensaje)
            setTimeout(()=>{
                alert(`${json.mensaje}`);
                window.location.href="http://localhost:3001/dashboard";
            },5000);
        });*/
    })
})
