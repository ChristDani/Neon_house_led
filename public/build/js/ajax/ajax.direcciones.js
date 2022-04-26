$(document).ready(function () {
  tableAll();
  saveDireccion()
  obtenerData();
});

function tableAll(){
  const table = $('#tabladirecciones').DataTable({
    "destroy":true,
    "ajax":{
      "method":"GET",
      "url":"/direcciones/listar"
    }, 
    columns: [
      // {data:"id"},
      {data:"url_tiktok"},
      {data:"url_instagram"},
      {data:"url_pinterest"},
      {data:"url_facebook"},
      {data:"url_whatsap"},  
      {data:"url_correoempresa"}, 
      {data:"url_correoemisor"},  
      {data: null,
        render: function(data,type,row){
          return `<button class="btn-inline btn-warning" data-iddireccion="${data.id}" id="edit" data-bs-toggle="modal" data-bs-target="#modalDirecciones">Edit</button>`;

        }
      }
    ]
  }); 

}

function saveDireccion(){
  $("#formDirecciones").submit(function(e){
    e.preventDefault();

    let id = $("#id").val();
    let url_tiktok = $("#url_tiktok").val();
    let url_instagram = $("#url_instagram").val();
    let url_pinterest = $("#url_pinterest").val();
    let url_facebook = $("#url_facebook").val();
    let url_whatsap = $("#url_whatsap").val();
    let url_correoempresa = $("#url_correoempresa").val();
    let url_correoemisor = $("#url_correoemisor").val();
    
   
    const data = {
      id: id,
      url_tiktok: url_tiktok,
      url_instagram: url_instagram,
      url_pinterest: url_pinterest,
      url_facebook: url_facebook,
      url_whatsap: url_whatsap,
      url_correoempresa: url_correoempresa,
      url_correoemisor: url_correoemisor
    };
    console.log(id);
    if (id=="") {
      if (url_tiktok == "" || url_instagram == "" || url_pinterest == "" || url_facebook == "" || url_whatsap == "" || url_correoempresa == "" || url_correoemisor == ""){
        swal({
          title:"Completar los campos requeridos",
          icon: "error"
        });

      } 
      // else {
      //   // Call method create product
      //   create(data);
      // } 

    } 
      else {

      update(data);
    }
  });
}



function update(data) {
  $.ajax ({
    url: "/direcciones/update",
    type: "POST",
    data: data,
    success: function(e) {
      console.log(e);
      $('#modalDirecciones').modal('hide');
      tableAll();
      swal({
        title: "URL Editado Correctamente",
        icon: "success"
      });
    }

  });
}



function clean() {
  $("#id").val("");
  $("#url_tiktok").val("");
  $("#url_instagram").val("");
  $("#url_pinterest").val("")
  $("#url_facebook").val("")
  $("#url_whatsap").val("");
  $("#url_correoempresa").val("");
  $("#url_correoemisor").val("");
}



function obtenerData() {
  $(document).on("click", "#edit", function (e) {
    clean();

    let id = e.target.dataset.iddireccion; 
    const data = {
      id: id,
    };
    $.ajax({
      type: "POST",
      url: "/direcciones/getDireccion",
      data: data,
      success: function (e) {
        console.log(e); 
        const { data } = JSON.parse(e); 
        $("#id").val(data.id);
        $("#url_tiktok").val(data.url_tiktok);
        $("#url_instagram").val(data.url_instagram);
        $("#url_pinterest").val(data.url_pinterest);
        $("#url_facebook").val(data.url_facebook);
        $("#url_whatsap").val(data.url_whatsap)
        $("#url_correoempresa").val(data.url_correoempresa)
        $("#url_correoemisor").val(data.url_correoemisor)
      },
    });
  });
}

