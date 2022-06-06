
$(document).ready(function () {
  getCategoria();
  getProducto();
  obtenerProducto();
  enviarProducto();
});


function clean() {
  $("#id").val("");
  $("#pro_precio").val("");
  $("#pro_tamano").val("");
  $("#pro_nombre").val("");
  $("#pro_color").val("");
}

function getCategoria() {
  /*
  const select = document.querySelector("#filtro_categoria");
  $.ajax({
    type: "GET",
    url: "/producto/getCategoria",
    success: function (e) {
      let json = JSON.parse(e);
      const lists = json.listCat; // creo que borro esta linea
      lists.forEach((list) => {
        const { cat_activo, cat_nombre, id } = list;
        console.log(list);
        if (cat_activo == 1) {
          console.log("impreso");
          select.innerHTML +=  // IMPRIME EL BOTON //EXTENDER Y SACAR FONDO NEGRO
          `<ul class="categoriaList w-100 bg-black p-0 text-center">
          <button class="btn-inline btn-dark" data-idcategoria="${id}" id="categoria" > ${cat_nombre}</button>
            </ul>`
          ;
        }
      });
    },
  });
  */
}


function getProducto() {
  const select = document.querySelector("#productoimprimir");
  $.ajax({
    type: "GET",
    url: "/producto/conseguirproducto",
    success: function (e) {
      let json = JSON.parse(e);
      const lists = json.listPro;
      console.log(lists)
      lists.forEach((list) => {
        const { id, cat_id, pro_nombre, pro_imagen, pro_activo, pro_precio, pro_tamano, pro_color} = list;
        if (pro_activo == 1) {
          select.innerHTML +=  // IMPRIME EL BOTON //EXTENDER Y SACAR FONDO NEGRO // ID EN IMAGEN //texto borrar
          `         
          <div class="card2">         
            <p>${pro_nombre}</p>
            
            <button class="bg-black border-0" " id="promodal" data-bs-toggle="modal" data-bs-target="#modalProductos"> 
              <img data-idpro="${id}" src="/build/img/landingPage/lp-hogar/dormitoriokid.webp"> 
            </button>                                       
          </div>
          ` 
          ;
        }
      });
    },
  });
}

function obtenerProducto() {
  $(document).on("click", "#promodal", function (e) {
    clean(); //crear un clean que vacie el modal
    let id = e.target.dataset.idpro;
    const data = {
      id: id,
    };
    $.ajax({
      type: "POST",
      url: "/producto/getProForm",
      data: data ,
      success: function (e) {
        const { data } = JSON.parse(e);
        precioMulti = data.pro_precioMulti; //precioMulti => variable global, para otras func.
        //precioEstand = data.pro_precio;
        //console.log(color)

        $("#id").val(data.id);// para input 
        document.getElementById("pro_precio").innerHTML = "Precio estandar en color "+data.pro_color+": S/."+data.pro_precio;
        document.getElementById("pro_precioMulti").innerHTML = `<i class="fa-solid fa-tags"></i> Precio multicolor: S/.`+data.pro_precioMulti;
        document.getElementById("pro_tamano").innerHTML = "Tamaño: "+data.pro_tamano+ ` (cm)<sup>2</sup>`;
        document.getElementById("pro_nombre").innerHTML = data.pro_nombre;
        //document.getElementById("pro_color").innerHTML = data.pro_color;
      },
    });
  });
}


function enviarProducto() {
  $(document).on("click", "#productodet", function (e) {
    let id = $("#id").val();
    const data = {
      id: id,
    };
  $.ajax({
    url: "/producto/vermas",
    data: data,
    type: 'POST',
    success: function(response){
    let json = JSON.parse(response);
    console.log(json.mensaje);
    //  $_SESSION['pro_vermas'] es la variable que creo
    window.location.href ="/ProductoDetallado"; 
        },
     });
  });
}


// valor del volumen
/*
var slider = document.getElementById('Rango');
var output = document.getElementById('value');

output.innerHTML = slider.value;

slider.oninput = function() {
    output.innerHTML = this.value;
} */


// function seleccionarColor(){
//   let selectColor = document.getElementById('selectColor');
//   let color = selectColor.value;
// console.log(precioMulti);
//   if(color == "Multicolor"){
//     document.getElementById("pro_precio").innerHTML = `<i class="fa-solid fa-tags"></i> Precio Multicolor: S/.${precioMulti}`;
//     //document.getElementById('lblColorSeleccionado').innerHTML = `<i class="fa-solid fa-tags"></i> Precio Multicolor: S/.${precioMulti}`;
//   }
//   else{
//     // document.getElementById('lblColorSeleccionado').innerHTML = $color ;
//     document.getElementById("pro_precio").innerHTML = `Precio Estandar: S/.${precioEstand}`;
//   }
  
// }

