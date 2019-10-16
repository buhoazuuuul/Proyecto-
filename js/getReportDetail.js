var reporte_id = getParameterByName('id_report');
var username = getParameterByName('userName');
var report;
var datos;
$(document).ready(function () {
    console.warn('Get report detail loaded!');
    getReportDetail();
    getUser();

});

function getReportDetail() {
    $.ajax({
        url: 'php/getReportDetail.php',
        type: 'POST',
        data: { reporte_id: reporte_id },
        beforeSend: function () {
            console.log('Obteniendo reporte');
        },
        success: function (response) {
            report = JSON.parse(response);
            let urlResponse = "answer_compose_secretary.php?userName=" + username + "&id_report=" + reporte_id;
            console.log(report[0]);
            //Show info
            $('#asunto').text(report[0].asunto);
            $('#nombreUsuario').text(report[0].nombre + '  ' + report[0].apellido);
            $('#fecha_hora').text(report[0].fecha_hora);
            $('#departamento').text(report[0].departamento);
            $('#municipio').text(report[0].municipio);
            $('#categoria').text(report[0].categoria);
            $('#prioridad').text(report[0].prioridad);
            $('#confidencialidad').text(report[0].confidencialidad);
            $('#texto').text(report[0].texto);
            $('#adjunto').attr("src", report[0].adjunto);
            $('#fotoSecretario').attr("src", report[0].img);
            $("#responder_reporte").attr("href", urlResponse);
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

    $.ajax({
        url: 'php/getSecretary.php',
        type: 'POST',
        data: { user: username },
        beforeSend: function () {
            console.log('Enviando..');
        },
        success: function (response) {
            datos = JSON.parse(response);
            $('#userName').text(datos[0].nombre + ' ' + datos[0].apellido);
            $('#profileImage').attr('src', datos[0].img);

        },
    });

}