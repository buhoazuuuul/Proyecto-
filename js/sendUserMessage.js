var arraySecretarios;
var categoria;
var id_vereda;
var adjunto;
var asunto;
var departamento;
var municipio;
var fecha_hora;
var confidencialidad;
var texto;
var isValidated = false;

$(document).ready(function () {

    console.log('Documento sendUserMessage.js cargado');
    getSecretarios();

    $("#btn-validar").click(function () {
        isValidated = true;
    });
    $("#btn-enviar").click(function () {
        if (isValidated) {
            sendUserMessage();
        } else {
            Swal.fire({
                type: 'error',
                title: 'Oops...',
                text: 'Debes validar la informacion primero!',
                footer: '<a href>Oprime el boton validar antes</a>'
            })
        }
    });

    //Validacion del formulario
    $(function () {
        $('#demo-form').parsley().on('field:validated', function () {
            var ok = $('.parsley-error').length === 0;
            $('.bs-callout-info').toggleClass('hidden', !ok);
            $('.bs-callout-warning').toggleClass('hidden', ok);
        })
            .on('form:submit', function () {
                return false; // Don't submit form for this demo
            });
    });


});

function getMailFields() {

    categoria = $('#emergencia').val();
    id_vereda = $('#vereda').val();
    adjunto = imgPath;
    asunto = $('#asunto').val();
    departamento = datos[0].departamento;
    municipio = datos[0].municipio;
    fecha_hora = $('#timepicker-actions-exmpl').val();
    prioridad = $("#prioridad option:selected").text();
    confidencialidad = $("#confidencialidad option:selected").text();
    mensaje = $('#mensaje').val();

}

function getSecretarios() {

    $.ajax({
        url: 'php/getSecretariosReporte.php',
        type: 'GET',
        data: "",
        beforeSend: function () {
            console.log('Enviando..');
        },
        success: function (response) {
            arraySecretarios = JSON.parse(response);
            $.each(arraySecretarios, function (i, item) {
                $('#secetrariosSelect').append($('<option>', {
                    value: item.id,
                    text: item.nombre + ' ' + item.apellido + '' + ' De la dependencia de ' + item.dependencia
                }));
            });

        },
    });

}

function sendUserMessage() {
    getMailFields();
    $.ajax({
        url: 'php/createMenssage.php',
        method: "POST",
        data: {
            categoria: categoria,
            id_vereda: id_vereda,
            adjunto: adjunto,
            asunto: asunto,
            departamento: departamento,
            municipio: municipio,
            fecha_hora: fecha_hora,
            prioridad: prioridad,
            confidencialidad: confidencialidad,
            texto: mensaje,
        },
        success: function (data) {

            if (data == 'successfully') {
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
