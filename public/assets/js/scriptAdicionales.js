$(document).ready(function() {
    $( ".datepicker" ).datepicker({
        dateFormat: "yy-mm-dd",
        changeMonth: true,
        changeYear: true,
    });
});

$(document).ready(function() {
    $('#datatable').DataTable( {
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.12/i18n/Spanish.json"
        }
    } );
});
