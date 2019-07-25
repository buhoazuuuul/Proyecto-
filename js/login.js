var usuario;
var pass;
var url;
var depMunicipios;

$(document).ready(function() {

    $('#btnLogin').on('click', function() {
        usuario = $('#nomUsuario').val();
        pass = $('#passUsuario').val();
        url = 'profile.php?userName=' + usuario;
        submitForm();

    });
    console.log('Documento login.js cargado');


});


function submitForm() {

    var data = $("#login-form").serialize();

    $.ajax({
        url: 'php/login.php',
        type: 'POST',
        data: data,
        beforeSend: function() {
            console.log('Enviando...');
        },
        success: function(response) {
            if (response == "Password Matches") {

                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000
                });

                Toast.fire({
                    type: 'success',
                    title: 'Datos de inicio de sesion correctos'
                })

                //Redireccionamos
                setTimeout(function() { window.location = url; }, 3000);


            } else {

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

function getSecretarios() {

    $.ajax({
        url: 'php/getSecretarios.php',
        type: 'GET',
        data: "",
        beforeSend: function() {
            console.log('Enviando...');
        },
        success: function(response) {
            console.log(response);
        },
    });
}