$(document).ready(function () {
  tableAll();
  conseguirproductos();


});

function tableAll(){
  const table = $('#compratabla').DataTable({
    "destroy":true,
    "ajax":{
      "method":"GET",
      "url":"compra/listar"
    }, 
    columns: [
      {data:"id"},
      {data:"com_fecha"},
      {data: null,
        render: function(data,type,row){
          return `<button class="btn-inline btn-info" data-idcodigo="${data.id}" id="categoriaPro">${data.precio_total}</button>`;
        }
      },
      {data: "cli_id"}
    ]
  }); 

}


function   conseguirproductos(){
  $(document).on("click", "#categoriaPro", function (e) {
  let cod_id = e.target.dataset.idcodigo;
  const table = $('#productoCategoria').DataTable({
    "destroy":true,
    "ajax":{
      "data": { cod_id: cod_id }, //esto talvez me cause problemas
      "method":"POST",
      "url":"/compra/conseguirproductos"
    }, 
    columns: [
      {data:"id"},
      {data:"cod_id"},
      {data:"det_cantidad"}, 
      {data: "pro_id"}
    ]
  }); 
  }); 
  }
