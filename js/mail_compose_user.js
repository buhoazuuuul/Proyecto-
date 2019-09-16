
const userName = getParameterByName('userName');

$(document).ready(function () {
    console.log('Get small user loaded!');
    var dialog = bootbox.dialog({
        title: 'Cargando tu perfil',
        message: '<p><i class="fa fa-spin fa-spinner"></i> Cargando...</p>'
    });

    getVeredas();
    getUser(userName);

    dialog.init(function () {
        setTimeout(function () {
            dialog.find('.bootbox-body').html('I was loaded after the dialog was shown!');
        }, 3000);
    });

    setTimeout(function () { dialog.modal('hide') }, 2000);
    setTimeout(setUserName, 500);

});

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
