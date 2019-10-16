var reporte_id = getParameterByName('id_report');
var username = getParameterByName('userName');
var datos;
$(document).ready(function () {
    console.warn('Answers compose secretary loaded!');
    $("#btnEnviar").click(function (e) {
        e.preventDefault();
        sendResponse();

    });
    getUser();
});

function sendResponse() {
    var asunto = $("#asunto").val();
    var msm = $("#mensaje").val();
    $.ajax({
        url: 'php/createAnswer.php',
        type: 'POST',
        data: { mensaje: msm, asunto: asunto, adjunto: imgPath, reporte_id: reporte_id },
        beforeSend: function () {
            console.log('Enviando..');
        },
        success: function (response) {
            if (response == 'successfully') {
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
        },
    });
}

function getUser() {

    $.ajax({
        url: 'php/getSecretary.php',
        type: 'POST',
        data: { user: username },
        beforeSend: function () {
            console.log('Enviando..');
        },
        success: function (response) {
            datos = JSON.parse(response);
            $('#userName').text(datos[0].nombre + ' ' + datos[0].apellido);
            $('#profileImage').attr('src', datos[0].img);

        },
    });

}
function getParameterByName(name) {
    name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
        results = regex.exec(location.search);
    return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
}