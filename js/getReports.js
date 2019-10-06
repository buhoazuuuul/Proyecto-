var username = getParameterByName('userName');
var datos;

$(document).ready(function () {
    console.warn('Get reports loaded!')
    getUser();
    setTimeout(() => { getReports() }, 1000);
});

function getReports() {

    $.ajax({
        url: 'php/getReportsUser.php',
        type: 'POST',
        data: { id_usuario: datos[0].id },
        beforeSend: function () {

            console.log('Enviando..');
        },
        success: function (response) {
            let reports = JSON.parse(response);
            console.log(reports);
            reports.forEach(element => {
                $('#send_reports').append('<tr>\
                    <td class="inbox-small-cells"><input type="checkbox" class="mail-checkbox"></td>\
                    <td class="inbox-small-cells"><i class="fa fa-star"></i></td>\
                    <td id = "nombreUsuario" class= "view-message  dont-show" > <a href="detalle_reporte_usuario.php">'+ element.nombre + '</a></td>\
                    <td id="asunto" class="view-message "><a href="detalle_reporte_usuario.php">'+ element.asunto + '</a></td>\
                    <td id="" class="view-message  inbox-small-cells"><i class="fa fa-paperclip"></i></td>\
                    <td id="fecha_hora" class="view-message  text-right">'+ element.fecha_hora + '</td>\
                    </tr > ');
            });




        },
    });

}
function getParameterByName(name) {
    name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
        results = regex.exec(location.search);
    return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
}

function getUser() {

    let dataString = 'userName=' + username;
    let data;
    $.ajax({
        url: 'php/getUser.php',
        type: 'POST',
        data: dataString,
        beforeSend: function () {
            console.log('Enviando..');
        },
        success: function (response) {
            datos = JSON.parse(response);
        }
    });

}

