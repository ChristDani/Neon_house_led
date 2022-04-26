$(function () {
    $('#js-basic-example').DataTable({
        responsive: true
    });

    //Exportable table
    $('#js-basic-example').DataTable({
        dom: 'Bfrtip',
        responsive: true,
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
});