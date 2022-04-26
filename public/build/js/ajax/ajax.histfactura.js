$(document).ready(function () {
  tableAll();
  conseguirproductos();
});

function tableAll(){
  const table = $('#clientecompraver').DataTable({
    "destroy":true,
    "ajax":{
      "method":"GET",
      "url":"/compra/clienteverFactura"
    }, 
    columns: [
      {data:"com_fecha"},
      {data:"precio_total"},
      {data: null,
        render: function(data,type,row){
          return `<button class="btn-inline btn-info" data-idcodigo="${data.id}" id="categoriaPro" >Ver Detalle</button>`;
        }
      }
    ]
  }); 

}

function conseguirproductos(){
  $(document).on("click", "#categoriaPro", function (e) {
    let cod_id = e.target.dataset.idcodigo;
  const table = $('#CompraDetalle').DataTable({
    "destroy":true,
    "ajax":{
      "data": { cod_id: cod_id }, //esto talvez me cause problemas
      "method":"POST",
      "url":"/compra/clientefactura" //  clientefactura
    }, 
    columns: [
      {data:"id"},
      {data:"cod_id"},
      {data:"det_cantidad"}, 
      {data: "pro_id"},
      {data: "det_color"}
       // es total lo enmascare como color
    ]
  }); 
  }); 
  }

