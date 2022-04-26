$(document).ready(function () {
  tablaCategoria();
  cleanButton();
  obtenerData();
  cleanButton();
  updateStatus();
  saveCategoria();
  deleteButton();
});


function createCategoria(formData) {
  $.ajax({
    url: "/categoria/crear",
    data: formData,
    type: "POST",
    processData: false, // tell jQuery not to process the data
    contentType: false,
    success: function (resp) {
      let res = JSON.parse(resp);
      console.log(res);
      switch (res.STATUS) {
      case 2:
        swal({
          title: res.mensaje,
          icon: "error",
        });
        break;
      
      case 1:
        $("#modalCategoria").modal("hide");
        tablaCategoria();
        swal({
          title: res.mensaje,
          icon: "success",
        });
        break;
      }
    },
  });
}

function updateCategoria(formData) {
  $.ajax({
    url: "/categoria/actualizar",
    data: formData,
    type: "POST",
    processData: false,
    contentType: false,
    success: function (response) {
      console.log(response);
      let json = JSON.parse(response);
      const { resp, cat } = json;
      if (resp) {
        $("#modalCategoria").modal("hide");
        tablaCategoria();
      }
    },
  });
}

function saveCategoria() {
  $("#formCategoria").submit((e) => {
    e.preventDefault();
    //Variables del formulario
    let id = $("#id").val();
    let cat_nombre = $("#cat_nombre").val();
    let cat_activo = $("#cat_activo").val();

    const formData = new FormData();
    formData.append("cat_nombre", cat_nombre);
    formData.append("cat_activo", cat_activo);

    if (id == "") {
      if (cat_nombre == "" || cat_activo == "") {
        swal({
          title: "Completar los campos requeridos",
          icon: "error",
        });
        const data = {
          id,
          cat_nombre,
          cat_activo,
        };
        console.log(data);
      } else {
        createCategoria(formData);
      }
    } else {
      formData.append("id", id);
      updateCategoria(formData);
    }
  });
}

function updateStatus() {
  $(document).on("click", "#btnEstado", (e) => {
    let id = e.target.dataset.idcategoria;
    let estadoText = e.target.textContent;
    //es value en ves de textConten si trabajan con int
    const data = {
      id: id,
      cat_activo: estadoText,
    };
    console.log(data); // borrar luego
    $.ajax({
      url: "/categoria/estado",
      type: "POST",
      data: data,
      success: (resp) => {
        const json = JSON.parse(resp);
        const { cat_activo, resultado } = json;
        console.log(cat_activo);
        e.target.textContent = cat_activo;
        if (cat_activo == 1) {
          e.target.classList.remove("btn-danger");
          e.target.classList.add("btn-success");
        } else {
          e.target.classList.remove("btn-success");
          e.target.classList.add("btn-danger");
        }
      }
    });
  })
}

function deleteCategoria(id) {
  $.ajax({
    type: "POST",
    url: "/categoria/eliminar",
    data: { id: id },
    success: function (ef) {
      let json = JSON.parse(ef);
      if (json.res) {
        swal({
          title: "Se elimino correctamente la categoria",
          icon: "success",
        });
        tablaCategoria();
      } else {
        swal({
          title: "No se pudo eliminar, al estar alineado con otro datos",
          icon: "error",
        });
      }
    },
  });
}

function tablaCategoria() {
  const table = $("#tablacategoria").DataTable({
    destroy: true,
    ajax: {
      method: "GET",
      url: "/categoria/listar",
    },
    columns: [
      {data:  "cat_nombre"},
      {data:  null,
        render: function(data, type, row){
          return `<button data-idcategoria="${data.id}" class="btn ${data.cat_activo == "1"? 'btn-success' : 'btn-danger'}" id="btnEstado">${data.cat_activo}</button>`;
        }},
      {
        data: null,
        render: function (data, type, row) {
          return `<button class="btn-inline btn-warning" id="edit" data-bs-toggle="modal" data-idcategoria=${data.id} data-bs-target="#modalCategoria" >edi</i></button>
                    <button class="btn-inline btn-danger" id="delete" data-idcategoria=${data.id}>del</button>`;
        },
      },
    ],
  });
}

function obtenerData() {
  $(document).on("click", "#edit", function (e) {
    let id = e.target.dataset.idcategoria;
    const data = {
      id: id,
    };
    $.ajax({
      url: "/categoria/getCategoria",
      data: data,
      type: "POST",
      success: function (e) {
        console.log(e);  // borrar al terminar
        const { data } = JSON.parse(e);
        $("#id").val(data.id);
        $("#cat_nombre").val(data.cat_nombre);
        $("#cat_activo").val(data.cat_activo);
      },
    });
  });
}

function clean() {
  $("#id").val("");
  $("#cat_nombre").val("");
  $("#cat_activo").val("");
}

function deleteButton() {
  $(document).on("click", "#delete", function (e) {
    swal({
      title: "Estas seguro de eliminar esta categoria ?",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    }).then((ef) => {
      if (ef) {
        const id = e.target.dataset.idcategoria;
        deleteCategoria(id);
      }
    });
  });
}

function cleanButton() {
  $(document).on("click", "#model-register", function () {
    clean();
  });
}


