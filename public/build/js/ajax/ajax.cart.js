$(document).ready(function(){
  tableAll();
  sendCart();
});

function tableAll()
{

  const table = $('#tablecart').DataTable({


    
  }); 

}
function sendCart() 
{
    console.log("funciona");

    $.ajax({
        url: '/producto/getdataCart',
        type: 'GET',
        success: function(e){
            var { data , colorV} = JSON.parse(e);
            console.log(data);
            console.log(colorV);
            precioMulti = data.pro_precioMulti; //precioMulti => variable global, para otras func

            if(colorV == "Multicolor"){

                $(document).ready(function() {
                    $('#id').text(data.id);
                    $('#nombre').text(data.pro_nombre);
                    $('#precio').append("S/.",data.pro_precioMulti);
                    $('#color').append("Multicolor");
                    //$('#precioMulti').append("S/.",data.pro_precioMulti);
                    $('#detalles').text(data.pro_descripcion);
                    $('#tamano').append("Dimensiones: ",data.pro_tamano);
                });

            }

            else{

                $(document).ready(function() {
                    $('#id').text(data.id);
                    $('#nombre').text(data.pro_nombre);
                    $('#precio').append("S/.",data.pro_precio);
                    $('#color').append(data.pro_color);
                    //$('#precioMulti').append("S/.",data.pro_precioMulti);
                    $('#detalles').text(data.pro_descripcion);
                    $('#tamano').append("Dimensiones: ",data.pro_tamano);
                });

            }

        }   
    });
    /*console.log("funciona");
    $(document).on("click", "#addcart", function (e) 
    {
        let selectColor = document.getElementById('selectColor');
        let color = selectColor.value;
        const data = { pro_color : color };
        console.log(data);
        //tiene que capturar el valor del color
        $.ajax({
        url:"/cart/aggCart",
        data:data,
        type:'POST',
            success: function(e)
            {
                console.log(e);
                let json = JSON.parse(e);
                console.log("ya funciona");
                window.location.href ="cart"; 
            }
        });    
    })*/
}

// $(document).ready( function () {
//   $('#tablecart').DataTable();
// } );