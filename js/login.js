var usuario;
var pass;

$(document).ready(function () {

    usuario = $('#nomUsuario').val();
    pass = $('#passUsuario').val();

    $('#btnLogin').on('click', function () {

        submitForm();
        console.log('click');

    });
    console.log('Documento login.js cargado');
});

function submitForm() {

    var data = $("#login-form").serialize();

    $.ajax({
        url: 'php/login.php',
        type: 'POST',
        data: data,
        beforeSend: function () {
            console.log('Enviando');
        },
        success: function (response) {
            console.log(response);
            if (response == "Password Matches") {

                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 5000
                });

                Toast.fire({
                    type: 'success',
                    title: 'Datos de inicio de sesion correctos'
                })

                setTimeout(function () { window.location = 'userProfile.php?userName=' + usuario; }, 5000);


            } else {

                console.log(response);

                Swal.fire({
                    position: 'center',
                    type: 'error',
                    title: response,
                    showConfirmButton: false,
                    timer: 1500
                })
            }
        },
    });

}

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