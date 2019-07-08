var arraySecretarios;
var asunto;
var lugar;
var fecha_hora;
var confidencialidad;
var mensaje;
var categoria;
var prioridad;
var adjunto = '/Admin/img/404.png';

$(document).ready(function () {

    console.log('Documento sendUserMessage.js cargado');
    getSecretarios();
    setButtonsFunctions();

});

function getMailFields() {

    asunto = $('#asunto').val();
    lugar = $('#lugar').val();
    fecha_hora = $('#timepicker-actions-exmpl').val();
    confidencialidad = $('#confidencialidad').val();
    mensaje = $('#mensaje').val();
    categoria = "";
    prioridad = $('#prioridad').val();

}

function getSecretarios() {

    $.ajax({
        url: 'php/getSecretarios.php',
        type: 'GET',
        data: "",
        beforeSend: function () {
            console.log('Enviando..');
        },
        success: function (response) {
            arraySecretarios = JSON.parse(response);
            $.each(arraySecretarios, function (i, item) {
                $('#secetrariosSelect').append($('<option>', {
                    value: item.num_doc,
                    text: item.nombre + ' ' + item.apellido + '' + ' De la dependencia de ' + item.dependencia
                }));
            });

        },
    });

}

function sendUserMessage() {

    $.ajax({
        url: 'php/createMenssage.php',
        method: "POST",
        data: {
            categoria: categoria, asunto: asunto, lugar: lugar, fecha_hora: fecha_hora,
            prioridad: prioridad,
            confidencialidad: confidencialidad,
            mensaje: mensaje,
            adjunto: adjunto
        },
        success: function (data) {
            console.log(data);

            if (data > 0) {
                Swal.fire({
                    position: 'center',
                    type: 'success',
                    title: 'Se he enviado satisfactoriamente',
                    showConfirmButton: false,
                    timer: 1500
                });


            } else {

                Swal.fire({
                    position: 'center',
                    type: 'error',
                    title: 'Error al enviar el mensaje',
                    showConfirmButton: false,
                    timer: 1500
                });

            }


        }

    });
}

function setButtonsFunctions() {

    // Eventos del click
    $('#btnEnviarMsm').on('click', function () {
        getMailFields();
        sendUserMessage();
    });

    // Propiedades href

}