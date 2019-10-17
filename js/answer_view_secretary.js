var username = getParameterByName('userName');
const urlPerfil = 'profile_secretary.php?userName=' + username;
const urlRecibidos = 'inbox_secretary.php?userName=' + username;
const urlEnviados = 'outbox_secretary.php?userName=' + username;
var datos;

$(document).ready(function () {
    console.warn('Answer view loaded!');
    getUser();
});

function setHrefs() {

    $("#btnInicio").attr("href", urlPerfil);
    $("#btnCorreo").attr("href", urlRecibidos);
    $("#btnRecibidos").attr("href", urlRecibidos);
    $("#btnRespuestasEnviadas").attr("href", urlEnviados);

}

function getParameterByName(name) {
    name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
        results = regex.exec(location.search);
    return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
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