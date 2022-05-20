$(document).ready(function() {
    datapro();
});
function datapro() {
    console.log("funciona");
    $.ajax({
        url: '/producto/getdata',
        type: 'GET',
        success: function(e){
            var {data} = JSON.parse(e);
            console.log(data);
            precioMulti = data.pro_precioMulti; //precioMulti => variable global, para otras func

            $(document).ready(function() {
                $('#nombre').text(data.pro_nombre);
                $('#precio').append("Precio: S/.",data.pro_precio);
                $('#detalles').text(data.pro_descripcion);
                $('#tamano').append("Dimensiones: ",data.pro_tamano);
                $('#color').append("Color: ",data.pro_color);
            });
        }   
    });
}


function seleccionarColor2(){
    let selectColor = document.getElementById('selectColor');
    let color = selectColor.value;
  console.log(precioMulti);
    if(color == "MULTICOLOR"){
  
      document.getElementById('lblColorSeleccionado').innerHTML = `<i class="fa-solid fa-tags"></i> Precio Multicolor: S/.${precioMulti}`;
    }
    else{
      document.getElementById('lblColorSeleccionado').innerHTML = $color;
    }
    
  }

