var username = getParameterByName('userName');
var datos;

$(document).ready(function () {

    console.log('Documento cargado');
    fillUser();

});

function fillUser() {

    var dataString = 'userName=' + username;

    $.ajax({
        url: 'php/getUser.php',
        type: 'POST',
        data: dataString,
        beforeSend: function () {
            console.log('Enviando..');
        },
        success: function (response) {
            console.log(response);
            datos = JSON.parse(response);
            llenarPerfil();
        },
    });

}

function llenarPerfil() {

    console.log('llenando perfil');
    $('#userName').text(datos[0].nombre + ' ' + datos[0].apellido);

}

function getParameterByName(name) {
    name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
        results = regex.exec(location.search);
    return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
}




