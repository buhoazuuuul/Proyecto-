$(document).ready(function () {

    console.log('Documento editProfile.js cargado');

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