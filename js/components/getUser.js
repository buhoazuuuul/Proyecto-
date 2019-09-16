var datos;
function getUser(user) {
    var dataString = 'userName=' + user;
    $.ajax({
        url: 'php/getUser.php',
        type: 'POST',
        data: dataString,
        beforeSend: function () {
            console.log('Enviando..');
        },
        success: function (response) {
            datos = JSON.parse(response);
        },
    });
}
