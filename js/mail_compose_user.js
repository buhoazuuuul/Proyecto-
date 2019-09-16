
const userName = getParameterByName('userName');

$(document).ready(function () {
    console.log('Get small user loaded!');
    var dialog = bootbox.dialog({
        title: 'Cargando tu perfil',
        message: '<p><i class="fa fa-spin fa-spinner"></i> Cargando...</p>'
    });

    dialog.init(function () {
        setTimeout(function () {
            dialog.find('.bootbox-body').html('I was loaded after the dialog was shown!');
        }, 3000);
    });
    getUser(userName);
    setTimeout(function () { dialog.modal('hide') }, 2000);
    setTimeout(setUserName, 500);
    $(function () {
        $('#demo-form').parsley().on('field:validated', function () {
            var ok = $('.parsley-error').length === 0;
            $('.bs-callout-info').toggleClass('hidden', !ok);
            $('.bs-callout-warning').toggleClass('hidden', ok);
        })
            .on('form:submit', function () {
                console.log('Enviado reporte');
                return false; // Don't submit form for this demo
            });
    });

});

function setUserName() {

    $('#userName').text(datos[0].nombre + ' ' + datos[0].apellido);
    $('#profileImage').attr('src', datos[0].img);

}