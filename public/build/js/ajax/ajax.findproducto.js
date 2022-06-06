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
            precioMulti = data.pro_precioMulti; //precioMulti => variable global, para otras funciones
            precioEstand = data.pro_precio; //precioEstand => variable global, para otras funciones
            

            $(document).ready(function() {
                $('#nombre').text(data.pro_nombre);
                $('#precio').append("Precio Estandar: S/.",data.pro_precio);
                $('#detalles').text(data.pro_descripcion);
                $('#tamano').append("Dimensiones: ",data.pro_tamano);
                //$('#color').append("Color: ",data.pro_color);
                $('#proColor').append(data.pro_color);
            });

            //console.log(color)
        }   
    });
}

function agregarCarritoColor() {
  $(document).on("click", "#productodet1", function (e) {
    let colorV = $("#selectColor").val();
    const data = {
      colorV: colorV,
    };
  $.ajax({
    url: "/producto/agregarCarritoColor",
    data: data,
    type: 'POST',
    success: function(response){
    let json = JSON.parse(response);
    console.log(json.colorV);
    //  $_SESSION['pro_vermas'] es la variable que creo
    window.location.href ="/cart"; 
        },
     });
  });
}

  function seleccionarColor2(){
    let selectColor = document.getElementById('selectColor');
    let color = selectColor.value;
    console.log(precioMulti);
    //console.log(color);
    if(color == "Multicolor"){
      document.getElementById("precio").innerHTML = `<i class="fa-solid fa-tags"></i> Precio Multicolor: S/.${precioMulti}`;
      //document.getElementById('lblColorSeleccionado').innerHTML = `<i class="fa-solid fa-tags"></i> Precio Multicolor: S/.${precioMulti}`;
      // (document).ready(function() {
      // $('#precio').append(precioMulti);
      // session_start();
      // $_SESSION['colorV'] = color;
      // })
      //console.log(color);
    }
    else{
      // document.getElementById('lblColorSeleccionado').innerHTML = $color ;
      document.getElementById("precio").innerHTML = `Precio Estandar: S/.${precioEstand}`;
      // (document).ready(function() {
      //   $('#precio').append(precioEstand);
      // session_start();
      // $_SESSION['colorV'] = color;
      //   })
      //console.log(color);
    }
    
  }

// function seleccionarColor2(){
//     let selectColor = document.getElementById('selectColor');
//     let color = selectColor.value;
//   console.log(precioMulti);
//     if(color == "MULTICOLOR"){
  
//       document.getElementById('lblColorSeleccionado').innerHTML = `<i class="fa-solid fa-tags"></i> Precio Multicolor: S/.${precioMulti}`;
//     }
//     else{
//       document.getElementById('lblColorSeleccionado').innerHTML = $color;
//     }
    
//   }

