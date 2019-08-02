var data;

$(document).ready(function() {
    console.log('Documento cargado');

});

function fillsecretarios() {

    var table = $('#userTable').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax": "php/getSecretarios.php",
        "columns": [
            { "data": "num_doc" },
            { "data": "tipo_doc" },
            { "data": "nombre" },
            { "data": "apellido" },
            { "data": "cargo" },
            { "data": "dependencia" },
            { "data": "municipio" },
            { "data": "telefono" },
            { "data": "email" },
            { "data": "usuario" },
            { "data": "pass" },
            { "data": "sexo" },
            { "data": "img" }
        ]
    });


}