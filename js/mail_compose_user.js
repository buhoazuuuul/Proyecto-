
const userName = getParameterByName('userName');
const urlPerfil = 'profile.php?userName=' + userName;
const urlCorreo = 'mail_compose_user.php?userName=' + userName;
const urlEnviados = 'outbox_user.php?userName=' + userName;
const urlInbox = 'inbox_user.php?userName=' + userName;
var datos;
$(document).ready(function () {
    var dialog = bootbox.dialog({
        title: 'Cargando tu perfil',
        message: '<p><i class="fa fa-spin fa-spinner"></i> Cargando...</p>'
    });

    getVeredas();
    getUser();
    setHrefs();

    dialog.init(function () {
        setTimeout(function () {
            dialog.find('.bootbox-body').html('Listo!');
        }, 3000);
    });

    setTimeout(function () { dialog.modal('hide') }, 2000);
    setTimeout(setUserName, 500);

});


function setHrefs() {

    $("#btnEditarPerfil").attr("href", urlPerfil);
    $("#btnEnviados").attr("href", urlEnviados);
    $("#btnCorreo").attr("href", urlCorreo);
    $("#btnRecibidos").attr("href", urlInbox);

}
function setUserName() {

    $('#userName').text(datos[0].nombre + ' ' + datos[0].apellido);
    $('#profileImage').attr('src', datos[0].img);

}

function getVeredas() {

    $.getJSON("php/getVeredas.php", function (result) {
        $.each(result, function (i, field) {
            $('#vereda').append($('<option>', {
                value: field.id,
                text: field.vereda
            }));
        });
    });
    $("#vereda")[0].selectedIndex = 0;
}
function getUser() {

    let dataString = 'userName=' + userName;
    $.ajax({
        url: 'php/getUser.php',
        type: 'POST',
        data: dataString,
        beforeSend: function () {
            console.log('Enviando..');
        },
        success: function (response) {
            datos = JSON.parse(response);
            console.log(datos);
            $("#userName").text(datos[0].nombre);
            $("#profileImage").attr("src", datos[0].img);
        }
    });

}
