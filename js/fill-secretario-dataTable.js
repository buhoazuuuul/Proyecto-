var data;

$(document).ready(function() {
    console.log('Documento cargado');
    fillsecretarios();
});

function fillsecretarios() {

    var editor = new $.fn.dataTable.Editor({
        ajax: "php/getSecretariosEditor.php",
        table: "#userTable"
    });

    var table = $('#userTable').DataTable({
        dom: "Bfrtip",
        ajax: "php/getSecretariosEditor.php",
        columns: [
            { data: "apellido" },
            { data: "dependencia" },
            { data: "email" },
            { data: "nombre" }
        ],
        select: true,
        buttons: [
            { extend: "create", editor: editor },
            { extend: "edit", editor: editor },
            {
                extend: "remove",
                editor: editor,
                formMessage: function(e, dt) {
                    var rows = dt.rows(e.modifier()).data().pluck('first_name');
                    return 'Are you sure you want to delete the entries for the ' +
                        'following record(s)? <ul><li>' + rows.join('</li><li>') + '</li></ul>';
                }
            },
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ],
        language: {
            "sProcessing": "Procesando...",
            "sLengthMenu": "Mostrar _MENU_ registros",
            "sZeroRecords": "No se encontraron resultados",
            "sEmptyTable": "Ningún dato disponible en esta tabla",
            "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
            "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
            "sInfoPostFix": "",
            "sSearch": "Buscar:",
            "sUrl": "",
            "sInfoThousands": ",",
            "sLoadingRecords": "Cargando...",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast": "Último",
                "sNext": "Siguiente",
                "sPrevious": "Anterior"
            },
            "oAria": {
                "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                "sSortDescending": ": Activar para ordenar la columna de manera descendente"
            }
        }
    });

    // Seleccion de filas
    $('#user-table tbody').on('click', 'tr', function() {
        if ($(this).hasClass('selected')) {
            $(this).removeClass('selected');
        } else {
            table.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
        }
    });



}