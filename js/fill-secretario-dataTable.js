var data;

$(document).ready(function() {
    console.log('Documento cargado');
    fillsecretarios();
});

function fillsecretarios() {

    var editor = new $.fn.dataTable.Editor({
        ajax: "php/getSecretariosEditor.php",
        table: "#userTable",
        fields: [{
                "label": "num_doc:",
                "name": "num_doc"
            },
            {
                "label": "tipo_doc:",
                "name": "tipo_doc"
            },
            {
                "label": "nombre:",
                "name": "nombre"
            },
            {
                "label": "apellido:",
                "name": "apellido"
            },
            {
                "label": "dependencia:",
                "name": "dependencia"
            },
            {
                "label": "telefono:",
                "name": "telefono"
            },
            {
                "label": "email:",
                "name": "email"
            },
            {
                "label": "usuario:",
                "name": "usuario"
            },
            {
                "label": "pass:",
                "name": "pass"
            }
        ]
    });

    var table = $('#userTable').dataTable({
        dom: "Bfrtip",
        ajax: "php/getSecretariosEditor.php",
        columns: [{
                "data": "num_doc"
            },
            {
                "data": "tipo_doc"
            },
            {
                "data": "nombre"
            },
            {
                "data": "apellido"
            },
            {
                "data": "dependencia"
            },
            {
                "data": "telefono"
            },
            {
                "data": "email"
            },
            {
                "data": "usuario"
            },
            {
                "data": "pass"
            }
        ],
        select: true,
        select: {
            style: 'os',
            selector: 'td:first-child'
        },
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
        keys: {
            editor: editor,
            editOnFocus: true
        },
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

    $('#remove').on('click', 'tbody tr', function() {
        table.row(this).delete();
    });
    // Activate an inline edit on click of a table cell
    $('#userTable').on('click', 'tbody td:not(:first-child)', function(e) {
        editor.inline(this);
    });
    // Seleccion de filas
    $('#userTable').on('click', 'tr', function() {
        if ($(this).hasClass('selected')) {
            $(this).removeClass('selected');
        } else {
            table.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
        }
    });



}