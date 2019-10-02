var arraySecretarios;
var categoria;
var id_vereda;
var id_usuario;
var id_secretario;
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

    $("#btn-enviar").click(function () {
        if (isValidated) {
            sendUserMessage();
        } else {
            Swal.fire({
                type: 'error',
                title: 'Oops...',
                text: 'Debes validar la informacion primero!',
                footer: '<a href>Oprime el boton validar antes y revisa que la información este correcta</a>'
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
                isValidated = true;
                return false; // Don't submit form for this demo
            });
    });


});

function getMailFields() {
    id_secretario = $("#secetrariosSelect option:selected").val();
    id_vereda = $('#vereda').val();
    categoria = $('#emergencia').val();
    adjunto = imgPath;
    asunto = $('#asunto').val();
    departamento = datos[0].departamento;
    municipio = datos[0].municipio;
    id_usuario = datos[0].id;
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
            id_secretario: id_secretario,
            id_usuario: id_usuario,
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
