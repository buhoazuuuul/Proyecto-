var reporte_id = getParameterByName('id_report');

$(document).ready(function () {
    console.warn('Get report detail loaded!');
    getReportDetail();
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
            let report = JSON.parse(response);
            console.log(report[0]);
            //Show info
            $('#asunto').text(report[0].asunto);
            $('#nombreUsuario').text(report[0].nombre + '  ' + report[0].apellido);
            $('#fecha_hora').text(report[0].fecha_hora);
            $('#departamento').text(report[0].departamento);
            $('#municipio').text(report[0].municipio);
            $('#categoria').text(report[0].categoria);
            $('#confidencialidad').text(report[0].confidencialidad);
            $('#texto').text(report[0].texto);
            $('#adjunto').attr("src", report[0].adjunto);
        },
    });
}
function getParameterByName(name) {
    name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
        results = regex.exec(location.search);
    return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
}