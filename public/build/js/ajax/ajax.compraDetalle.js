$(document).ready(function () {
  tableAll();
  updateStatus();

});

function tableAll(){
  const table = $('#CompraDetalle').DataTable({
    "destroy":true,
    "ajax":{
      "method":"GET",
      "url":"compraDetalle/listar"
    }, 
    columns: [
      {data:"id"},
      {data:"cod_id"},
      {data:"pro_id"},
      {data:"det_cantidad"}, 
      {data: "det_color"}
    ]
  }); 

}