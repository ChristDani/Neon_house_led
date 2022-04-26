$(document).ready(function () {
  tableAll();
  saveCliente();
  cleanForm();
  obtenerData();
  deleteCliente();
  updateStatus();
  verificarcontra();
});

function tableAll(){
  const table = $('#tablacliente').DataTable({
    "destroy":true,
    "ajax":{
      "method":"GET",
      "url":"cliente/listar"
    }, 
    columns: [
      {data:"cli_nombre"},
      {data:"cli_apellidos"},
      {data:"cli_email"},
      //{data:"cli_clave"}, // si quiero ver calve descomentar cliente.php linea 19
      {data:"cli_telefono"},  
      { data: null,
          render: function(data, type, row){
            return `<button data-idcliente="${data.id}" class="btn ${data.cli_estado == "1"? 'btn-success' : 'btn-danger'}" id="btnEstado">${data.cli_estado}</button>`;
          }
      },
      {data:"cli_verificado"},
      {data:"cli_rol"},  
      {data: null,
        render: function(data,type,row){ //agrege un div botones[id]
          return `
          <div class=" ${data.cli_rol == "1"? 'd-none' : ''}" id="botones${data.id}">
          <button class="btn-inline btn-warning"
          data-idcliente="${data.id}" id="edit" data-bs-toggle="modal" data-bs-target="#modalCliente" >Edit</button>
          <button class="btn-inline btn-danger" 
          data-idcliente="${data.id}" id="delete">Del</button>
          </div>`;
        }
      },
      {data: null,
        render: function(data,type,row){
          return `<form>
          <input class="${data.cli_rol == "2"? 'd-none' : ''} form-control" style="width: 100px;"
          data-idcliente="${data.id}" input-lg w-20 p-3 " placeholder="pass" type="password"  id ="pass${data.id}">
          </form>`;
        }
      },
      {data: null,
        render: function(data,type,row){
          return `
          <button class="btn-inline btn-info ${data.cli_rol == "2"? 'd-none' : ''}" data-idcliente="${data.id}" id="verificar">ver</button>
          `;
        }
      }
    ]
  }); 
  
}




function saveCliente(){
  $("#formCliente").submit(function(e){
    e.preventDefault();

    let id = $("#id").val();
    let cli_nombre = $("#cli_nombre").val();
    let cli_apellidos = $("#cli_apellidos").val();
    let cli_email = $("#cli_email").val();
    let cli_clave = $("#cli_clave").val();
    let cli_telefono = $("#cli_telefono").val();
    let cli_estado = $("#cli_estado").val(); 
    let cli_rol= $("#cli_rol").val();
    let cli_verificado= $("#cli_verificado").val();
    
    const data = {
      id: id,
      cli_nombre: cli_nombre,
      cli_apellidos: cli_apellidos,
      cli_email: cli_email,
      cli_clave: cli_clave,
      cli_telefono: cli_telefono,
      cli_estado: cli_estado,
      cli_rol: cli_rol,
      cli_verificado: cli_verificado,
    };
    let validador = true; // para verificar que todo este bien
    if (id=="") {
      if (cli_nombre == "" || cli_apellidos == "" || cli_email == "" || cli_clave == ""  || cli_telefono == "" || cli_estado == "" || cli_rol == "" || cli_verificado == ""){
        swal({
          title:"Completar los campos requeridos",
          icon: "error"
        });
      } else {
            if(!(/^\d{9}$/.test(cli_telefono))) {
              swal({
              title:"Completar con solo números", 
              icon: "error"
            }); validador = false;
          } ;
          // fin de las validaciones
          //CREA SI TODO VA BIEN
            if(validador) {
              console.log(data);
              create(data)
            } else {
              // no pasa nada ya envio un swal
            }
        }
      } else {
      update(data);
      
    }
  });
} 

function create(data) {
  $.ajax ({
    url: "cliente/create",
    data: data,
    type: "POST",
    success: function(e) {
      let json = JSON.parse(e);
      switch (json.STATUS) {
        case 1:
          tableAll();
          $("#modalCliente").modal("hide");
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

function update(data) {
  let data2 = data;
  console.log(typeof data2);
  if(data2.cli_clave=="") {
    console.log("no actualiza la contraseña");
    delete data2.cli_clave;
  }
  console.log(data2);
  $.ajax ({
    url: "cliente/update",
    type: "POST",
    data: data2,
    success: function(e) {
      $('#modalCliente').modal('hide');
      tableAll();
      swal({
        title: "Editado Correctamente",
        icon: "success"
      });
    }

  });
}

function clean() {
  $("#id").val("");
  $("#cli_nombre").val("");
  $("#cli_apellidos").val("");
  $("#cli_email").val("")
  $("#cli_clave").val("")
  $("#cli_telefono").val("")
  $("#cli_estado").val("")
  $("#cli_rol").val("")
  $("#cli_verificado").val("")
}

function cleanForm() {
  $(document).on("click", "#model-cliente", function () {

    clean();
  });
}

function obtenerData() {
  $(document).on("click", "#edit", function (e) {
    clean();

    let id = e.target.dataset.idcliente;
    const data = {
      id: id,
    };
    $.ajax({
      type: "POST",
      url: "/cliente/getCliente",
      data: data,
      success: function (e) {
        console.log(e); 
        const { data } = JSON.parse(e); 
        $("#id").val(data.id);
        $("#cli_nombre").val(data.cli_nombre);
        $("#cli_apellidos").val(data.cli_apellidos);
        $("#cli_email").val(data.cli_email)
        //$("#cli_clave").val(data.cli_clave)
        $("#cli_telefono").val(data.cli_telefono)
        $("#cli_estado").val(data.cli_estado)
        $("#cli_rol").val(data.cli_rol)
        $("#cli_verificado").val(data.cli_verificado)
      },
    });
  });
}

function deleteCliente() {
  $(document).on("click", "#delete", function (e) {
    let id = e.target.dataset.idcliente;
    swal({
      title: "¿Estas seguro de eliminar este cliente?",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    }).then(function (e) {
      if (e) {
        $.ajax({
          url: "/cliente/delete",
          data: { id: id },
          type: "POST",
          success: (e) => {
          let json = JSON.parse(e);
            if (json.res) {
              tableAll();
              swal("Cliente eliminado correctamente!", {
                icon: "success",
              });
            } else {
              tableAll();
              swal("No se pudo eliminar pues tiene relacion con otros campos", {
                icon: "error",
              });
            }
          },
        });
      }
    });
  });
}

function updateStatus(){
  $(document).on("click","#btnEstado",function(e){
    const id = e.target.dataset.idcliente;
    const estadoText = e.target.textContent;    
    const data = { id: id, cli_estado: estadoText};
    
    $.ajax({
      url: "/cliente/estado",
      type: "POST",
      data: data,
      success: function(ec){
        console.log(ec)
        const data = JSON.parse(ec);
        const { cli_estado, resultado } = data;
        e.target.textContent = cli_estado;
        if(cli_estado == "1"){
          e.target.classList.remove("btn-danger");
          e.target.classList.add("btn-success");
        }else {
          e.target.classList.remove("btn-success");
          e.target.classList.add("btn-danger");
        }
      }
    });
  })
}

function verificarcontra() {
  $(document).on("click", "#verificar", function (e) {
    const id = e.target.dataset.idcliente;
    let id_pass =  "#pass"+id;
    let botones = "#botones"+id;
    console.log(botones);
    let pass = $(id_pass).val();
      const data = {
        passwordV: pass,
        id: id,
      };
    console.log(data);
     $.ajax({
       type: "POST",
       url: "/configuracion/verificar",
       data: data,
       success: function (e) {
       const data = JSON.parse(e);
       console.log(data.res);
       if (data.res) {
        const respuesta = document.querySelector(botones);
        respuesta.classList.remove('d-none');
        respuesta.classList.add('d-block')
       }
       },
     });
  });
}