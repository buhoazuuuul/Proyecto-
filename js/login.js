var usuario = $('#nomusuario').val();
var pass = $('#passususario').val();

$(document).ready(function () {

    console.log('Documento login.js cargado');

    $('#btnLogin').on('click', function () {

        verifyLogin();

    });

});

function verifyLogin() {
    $.ajax({
        url: "php/login.php",
        method: "POST",
        data: { usuario: usuario, pass: pass },
        success: function (data) {
            console.log(data);

        }

    });
}