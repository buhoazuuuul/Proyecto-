var reporte_id = getParameterByName('id_report');

$(document).ready(function () {
    console.warn('Get report detail loaded!');
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
            //Show info
            jq
        },
    });
}
function getParameterByName(name) {
    name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
        results = regex.exec(location.search);
    return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
}