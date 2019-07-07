var arraySecretarios;
var asunto;
var lugar;
var fechaHora;
var confidencialidad;
var mensaje;
var categoria;
var prioridad;
var adjunto;

$(document).ready(function () {

    console.log('Documento sendUserMessage.js cargado');
    getSecretarios();

});

function getMailFields() {

    asunto = $('#asunto').val();
    lugar = $('#lugar').val();
    fechaHora = $('#timepicker-actions-exmpl').val();
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
                    text: item.nombre + ' ' + item.apellido + '' + 'De la dependencia de ' + item.dependencia
                }));
            });

        },
    });

}

function sendUserMessage() {

    $.ajax({
        url: "php/sendMail.php",
        method: "POST",
        data: {
            num_doc: num_doc, tipo_doc: tipo_doc, nombre: nombre, apellido: apellido, telefono: telefono, email: email,
            residencia: residencia,
            fecha: fecha,
            usuario: usuario,
            pass: pass
        },
        success: function (data) {
            console.log(data);

            if (data > 0) {
                Swal.fire({
                    position: 'center',
                    type: 'success',
                    title: 'Se he registrado satisfactoriamente',
                    showConfirmButton: false,
                    timer: 1500
                });
                //window.location = "http://localhost/Proyecto-/index.php"

            } else {

                Swal.fire({
                    position: 'center',
                    type: 'error',
                    title: 'Error al registrarse',
                    showConfirmButton: false,
                    timer: 1500
                });
                //window.location = "http://localhost/Proyecto-/index.php"
                // $('#modalNoRegistro').modal('show');

            }


        }

    });
}