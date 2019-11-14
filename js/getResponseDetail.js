var reporte_id = getParameterByName('id_report');
var username = getParameterByName('userName');
const urlPerfil = 'profile.php?userName=' + username;
const urlOutbox = 'outbox_user.php?userName=' + username;
const urlInbox = 'inbox_user.php?userName=' + username;
const urlsendReport = 'mail_compose_user.php?userName=' + username;
var report;
var simpleReport;
var datos;
$(document).ready(function () {
    console.warn('Get report detail loaded!');
    var dialog = bootbox.dialog({
        title: 'Obteniendo la respuesta',
        message: '<p><i class="fa fa-spin fa-spinner"></i> Cargando...</p>'
    });
    dialog.init(function () {
        setTimeout(function () {
            dialog.find('.bootbox-body').html('Listo!');
        }, 3000);
    });

    setTimeout(function () { dialog.modal('hide') }, 2000);
    getReportDetail();
    getUser();
    setHrefs();
});

function setHrefs() {

    $("#btnInicio").attr("href", urlPerfil);
    $("#btnEditarPerfil").attr("href", urlPerfil);
    $("#home").attr("href", urlPerfil);
    $("#enviarReporte").attr("href", urlsendReport);
    $("#inbox").attr("href", urlInbox);
    $("#inbox_user").attr("href", urlInbox);
    $("#report").attr("href", urlsendReport);
    $("#outbox").attr("href", urlOutbox);

}
function getReportDetail() {
    $.ajax({
        url: 'php/getResponseDetail.php',
        type: 'POST',
        data: { username: username, id_report: reporte_id },
        beforeSend: function () {
            console.log('Obteniendo reporte');
        },
        success: function (response) {
            report = JSON.parse(response);
            simpleReport = report[0];
            console.log(simpleReport);

            //Show info
            $('#report_asunto').text(report[0].report_asunto);
            $('#response_asunto').text(report[0].response_asunto);
            $('#nombreSecretario').text(report[0].secretario);
            $('#response_fecha').text(report[0].response_fecha);
            $('#departamento').text(report[0].report_departement);
            $('#municipio').text(report[0].report_municipio);
            $('#categoria').text(report[0].categoria);
            $('#prioridad').text(report[0].prioridad);
            $('#confidencialidad').text(report[0].confidencialidad);
            $('#response_text').text(report[0].response_text);
            $('#response_adjunto').attr("src", report[0].response_adjunto);
            $('#report_text').text(report[0].report_text);
            $('#report_adjunto').attr("src", report[0].report_adjunto);
            $('#fotoSecretario').attr("src", report[0].img);
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
        url: 'php/getUser.php',
        type: 'POST',
        data: { userName: username },
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