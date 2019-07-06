var datos;

$(document).ready(function () {

    console.log('Documento sendUserMessage.js cargado');
    getSecretarios();

});

function getSecretarios() {

    $.ajax({
        url: 'php/getSecretarios.php',
        type: 'GET',
        data: "",
        beforeSend: function () {
            console.log('Enviando..');
        },
        success: function (response) {
            datos = JSON.parse(response);

            $.each(datos, function (i, item) {
                $('#secetrariosSelect').append($('<option>', {
                    value: item.num_doc,
                    text: item.nombre + ' ' + item.apellido + '' + 'De la dependencia de ' + item.dependencia
                }));
            });

        },
    });

}