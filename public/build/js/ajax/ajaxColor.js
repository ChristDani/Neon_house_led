$(document).ready(function () {
  tableColor();
  cleanForm();
  saveColor();
  obtenerData();
  deleteColor();
});

function tableColor() {
  const table = $("#tablacolor").DataTable({
    destroy: true,
    ajax: {
      method: "GET",
      url: "/color/listar",
    },
    columns: [
      { data: "nombre" },
      { data: "rgb" },
      {
        data: null,
        render: function (data, type, row) {
          return `<button class="btn-inline btn-warning" data-idcolor="${data.id}" id="edit" data-bs-toggle="modal" data-bs-target="#modalColor">edit</i></button>
          <button class="btn-inline btn-danger" data-idcolor="${data.id}" id="delete">del</i></button>`;
        },
      },
    ],
  });
}

function obtenerData() {
  $(document).on("click", "#edit", function (e) {
    clean();

    let id = e.target.dataset.idcolor;

    $.ajax({
      type: "POST",
      url: "/color/getColor",
      data: { id: id },
      success: function (e) {
        const { data } = JSON.parse(e);
        $("#id").val(data.id);
        $("#nombreColor").val(data.nombre);
        $("#rgb").val(data.rgb);

        $("#title").text("Actualizar Color");
        $("#save").text("Actualizar");
      },
    });
  });
}

function clean() {
  $("#id").val("");
  $("#nombreColor").val("");
  $("#rgb").val("");

  $("#title").text("Guardar Color");
  $("#save").text("Guardar");
}

function cleanForm() {
  $(document).on("click", "#model-register", function () {
    clean();
  });
}

function saveColor() {
  $("#formColor").submit(function (e) {
    e.preventDefault();

    let rgb = $("#rgb").val();
    let nombre = $("#nombreColor").val();
    let id = $("#id").val();

    const data = {
      id: id,
      nombre: nombre,
      rgb: rgb,
    };
    if (id == "") {
      createColor(data);
    } else {
      updateColor(data);
    }
  });
}

function createColor(data) {
  $.ajax({
    url: "/color/guardar",
    data: data,
    type: "POST",
    success: function (response) {
      let json = JSON.parse(response);
      switch (json.STATUS) {
        case 1:
          tableColor();
          $("#modalColor").modal("hide");
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
        case 3:
          swal({
            title: json.mensaje,
            icon: "error",
          });
          break;
      }
    },
  });
}

function updateColor(data) {
  $.ajax({
    url: "/color/editar",
    data: data,
    type: "POST",
    success: function (response) {
      let json = JSON.parse(response);
      console.log(json);
      if (json) {
        tableColor();
        $("#modalColor").modal("hide");
        swal({
          title: "Se edito correctamente",
          icon: "success",
        });
      } else {
        swal({
          title: "Error al editar",
          icon: "error",
        });
      }
    },
  });
}

function deleteColor() {
  $(document).on("click", "#delete", function (e) {
    let idpro = e.target.dataset.idcolor;
    console.log(idpro);
    swal({
      title: "¿Estas seguro de eliminar este color?",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    }).then(function (e) {
      if (e) {
        $.ajax({
          url: "/color/eliminar",
          data: { id: idpro },
          type: "POST",
          success: (e) => {
            if (e) {
              tableColor();
              swal("Color eliminado correctamente!", {
                icon: "success",
              });
            }
          },
        });
      }
    });
  });
}
