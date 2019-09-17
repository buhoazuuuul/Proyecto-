
const userName = getParameterByName('userName');
const urlPerfil = 'profile.php?userName=' + userName;
const urlCorreo = 'mail_compose_user.php?userName=' + userName;
$(document).ready(function () {
    console.log('Get small user loaded!');
    var dialog = bootbox.dialog({
        title: 'Cargando tu perfil',
        message: '<p><i class="fa fa-spin fa-spinner"></i> Cargando...</p>'
    });

    getVeredas();
    getUser(userName);
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
    $("#btnCorreo").attr("href", urlCorreo);

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
