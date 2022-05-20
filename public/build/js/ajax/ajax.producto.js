//posiblemente lo borre
const img = document.querySelector("#pro_img");

/** DataTables  */

$(document).ready(function () {
  tableAll();
  getCategoria();
  obtenerData();
  cleanForm();
  saveProduct();
  updateStatus();
  deleteProduct();
});

function tableAll() {
  const table = $("#tablaproducto").DataTable({
    destroy: true,
    ajax: {
      method: "GET",
      url: "/producto/listar",
    },
    columns: [
      { data: "cat_id" },
      { data: null,
        render: function (data, type, row) {
          return `${data.pro_nombre} : ${data.pro_descripcion}`;
        },},
      { data: "pro_precio"},
      { data: "pro_precioMulti"},
      { data: "pro_tamano"},
      {
        data: null,
        render: function (data, type, row) {
          return `<button data-idpro="${data.id}" class="btn ${
            data.pro_activo == "1" ? "btn-success" : "btn-danger"
          }" id="btnEstado">${data.pro_activo}</button>`;
        },
      },
      { data: "pro_color"},
      { data: "pro_imagen1"}, //aqui la imagen esta blob
      { data: "pro_imagen2"}, //aqui la imagen
      { data: "pro_imagen3"}, //aqui la imagen
      {
        data: null,
        render: function (data, type, row) {
          return `<button class="btn-inline btn-warning" data-idpro="${data.id}" id="edit" data-bs-toggle="modal" data-bs-target="#modalProducto" >edit</button>
            <button class="btn-inline btn-danger" data-idpro="${data.id}" id="delete">del</button>`;
        },
      },
    ],
  });
}

function cleanForm() {
  $(document).on("click", "#model-register", function () {
    clean();
  });
}

function obtenerData() {
  $(document).on("click", "#edit", function (e) {
    clean();
    let idpro = e.target.dataset.idpro;
    $.ajax({
      type: "POST",
      url: "/producto/getProForm",
      data: { id: idpro },
      success: function (e) {
        const { data } = JSON.parse(e);

        $("#id").val(data.id);
        $("#pro_categoria").val(data.cat_id);
        console.log(data.cat_id);
        $("#pro_nombre").val(data.pro_nombre);
        $("#pro_descripcion").val(data.pro_descripcion);
        $("#pro_color").val(data.pro_color);
        $("#pro_precio").val(data.pro_precio);
        $("#pro_precioMulti").val(data.pro_precioMulti);
        $("#pro_activo").val(data.pro_activo);
        const tmn = data.pro_tamano.split("X");
        $("#t-1").val(tmn[0]);
        $("#t-2").val(tmn[1]);

        // Mostrar imagen por ahora no sirve
        img.src = `/imagenes/${data.pro_imagen1}`;
        img.src = `/imagenes/${data.pro_imagen2}`;
        img.src = `/imagenes/${data.pro_imagen3}`;
        img.classList.add("w-100", "imgCP");

        $("#title").text("Actualizar Productos");
        $("#save").text("Actualizar");
      },
    });
  });
}

function deleteProduct() {
  $(document).on("click", "#delete", function (e) {
    let idpro = e.target.dataset.idpro;
    swal({
      title: "¿Estas seguro de eliminar este producto?",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    }).then(function (e) {
      if (e) {
        $.ajax({
          url: "/producto/eliminar",
          type: "POST",
          data: { id: idpro },
          success: function () {
            tableAll();
          },
        });
      }
    });
  });
}

function clean() {
  $("#id").val("");
  $("#pro_categoria").val("");
  $("#pro_nombre").val("");
  $("#pro_descripcion").val("");
  $("#pro_color").val("");
  $("#pro_precio").val("");
  $("#pro_precioMulti").val("");
  
  $("#t-1").val("");
  $("#t-2").val("");
  img.src = "";

  $("#title").text("Registrar Productos");
  $("#save").text("Guardar");
}

//Consigue la lista de categorias del producto y lo imprime en un selector
function getCategoria() {
  const proestado = document.querySelector("#pro_categoria");
  $.ajax({
    type: "GET",
    url: "/producto/getCategoria",
    success: function (e) {
      let json = JSON.parse(e);
      const lists = json.listCat;
      console.log(lists);
      lists.forEach((list) => {
        const { cat_activo, cat_nombre, id } = list;
        if (cat_activo == "1") {
          proestado.append(new Option(cat_nombre,id));
          /*proestado.innerHTML += `
            <option value="${id}">${cat_nombre}</option>
          `;*/
        }
      });
    },
  });
} 

// conseguir las imagenes
$(document).on("change", "#pro_imagen1", function () {
  console.log(this.files);
});

function saveProduct() {
  $("#formProducto").submit(function (e) {
    e.preventDefault();
    // Variables
    const id = $("#id").val();
    const categoria = $("#pro_categoria").val();
    const nombre = $("#pro_nombre").val().trim();
    const descripcion = $("#pro_descripcion").val().trim();
    const color = $("#pro_color").val().trim();
    const precio = $("#pro_precio").val().trim();
    const precioMulti = $("#pro_precioMulti").val().trim();
    //imagenes, aun no terminado
                  // const imagen1 = $_FILES["#pro_imagen1"]['name'];
                  // const dirfinal1 = "../../img/".imagen1;
                  // copy($_FILES['#pro_imagen1']['tmp_name'],dirfinal1);
    //const imagen2 = $("#pro_imagen2")[0].files[0];
    //const imagen3 = $("#pro_imagen3")[0].files[0];
    //guardando dimensiones
    const tm1 = document.querySelector("#t-1").value;
    const tm2 = document.querySelector("#t-2").value;
    const tamano = tm1 + "x" + tm2;
    const estado = $("#pro_activo").val();

    const formData = {
      id: id,
      cat_id: categoria,
      pro_nombre: nombre,
      pro_descripcion: descripcion,
      pro_color: color,
      pro_precio: precio,
      pro_precioMulti: precioMulti,
      pro_tamano: tamano,
      pro_activo: estado
    };

    // const formData = new formData();
    // formData.append("pro_categoria", categoria);
    // formData.append("pro_nombre", nombre);
    // formData.append("pro_descripcion", descripcion);
    // formData.append("pro_color", color);
    // formData.append("pro_precio", precio);
    // formData.append("pro_precioMulti", precioMulti);
                            // formData.append("pro_imagen1", imagen1);
              //formData.append("pro_imagen2", imagen2);
              //formData.append("pro_imagen3", imagen3);
    // formData.append("pro_tamano", tamano);
    // formData.append("pro_activo", estado);

    if (id == "") {
      if (
        // imagen == undefined ||
        estado == "" ||
        categoria == "" ||
        nombre == "" ||
        color == "" ||
        precio == "" ||
        precioMulti == "" ||
        tm1 == "" ||
        tm2 == ""
      ) {
        swal({
          title: "Completar los campos requeridos",
          icon: "error",
        });
      } else {
        // Call method create product
        create(formData);
      }
    } else {
      formData.append("id", id);
      // Call method update producto
      update(formData);
    }
  });
}

// function create(formData) {
//   $.ajax({
//     url: "/producto/crear",
//     type: "POST",
//     data: formData,
//     processData: false, tell jQuery not to process the data
//     contentType: false,
//     success: function (e) {
//       $("#modalProducto").modal("hide");
//       tableAll();
//       swal({
//         title: "Registro Exitoso",
//         icon: "success",
//       });
//     },
//   });
// }


function create(formData) {
  $.ajax ({
    url: "producto/create",
    data: formData,
    type: "POST",
    success: function(e) {
      let json = JSON.parse(e);
      switch (json.STATUS) {
        case 1:
          tableAll();
          $("#modalProducto").modal("hide");
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
    },
  });
}



// function update(formData) {
//   $.ajax({
//     url: "/producto/editar",
//     type: "POST",
//     data: formData,
//     // processData: false, tell jQuery not to process the data
//     // contentType: false,
//     success: function (e) {
//       console.log(e);
//       const json = JSON.parse(e);
//       const resp = json.res;
//       if (resp) {
//         $("#modalProducto").modal("hide");
//         tableAll();
//         swal({
//           title: "Editado correctamente",
//           icon: "success",
//         });
//       }
//     },
//   });
// }


function update(formData) {
  let data2 = formData;
  console.log(typeof data2);
  console.log(data2);
  $.ajax ({
    url: "producto/update",
    type: "POST",
    data: data2,
    success: function(e) {
      $('#modalProducto').modal('hide');
      tableAll();
      swal({
        title: "Editado Correctamente",
        icon: "success"
      });
    }

  });
}



function updateStatus() {
  $(document).on("click", "#btnEstado", function (e) {
    const idpro = e.target.dataset.idpro;
    const estadoText = e.target.textContent;

    $.ajax({
      url: "/producto/estado",
      type: "POST",
      data: { id: idpro, pro_activo: estadoText },
      success: function (ef) {
        const json = JSON.parse(ef);
        const { pro_activo, resultado } = json;
        console.log(pro_activo, resultado);
        e.target.textContent = pro_activo;
        if (pro_activo == "1") {
          e.target.classList.remove("btn-danger");
          e.target.classList.add("btn-success");
        } else {
          e.target.classList.remove("btn-success");
          e.target.classList.add("btn-danger");
        }
      },
    });
  });
}
