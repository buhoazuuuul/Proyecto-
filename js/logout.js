$(document).ready(function () {

    console.log('Documento logout cargado');
    $("#btnLogout").click(function () {
        logout();
    });


});

function logout() {


    $.ajax({
        url: 'php/logout.php',
        type: 'POST',
        data: "",
        beforeSend: function () {
            console.log('Saliendo..');
        },
        success: function (response) {

            window.location = response;

        },
    });


}
