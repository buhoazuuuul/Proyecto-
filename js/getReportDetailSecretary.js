var reporte_id = getParameterByName('id_report');
var username = getParameterByName('userName');
const urlPerfil = 'profile_secretary.php?userName=' + username;
const urlOutbox = 'outbox_secretary.php?userName=' + username;
const urlInbox = 'inbox_secretary.php?userName=' + username;
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
    $("#inbox").attr("href", urlInbox);
    $("#outbox").attr("href", urlOutbox);

}
function getReportDetail() {
    $.ajax({
        url: 'php/getReportDetailSecretary.php',
        type: 'POST',
        data: { reporte_id: reporte_id },
        beforeSend: function () {
            console.log('Obteniendo reporte');
        },
        success: function (response) {
            report = JSON.parse(response);
            let urlResponse = "answer_compose_secretary.php?userName=" + username + "&id_report=" + reporte_id;
            $('#asunto').text(report[0].asunto);
            $('#nombreUsuario').text(report[0].nombre + '  ' + report[0].apellido);
            $('#fecha_hora').text(report[0].fecha_hora);
            $('#departamento').text(report[0].departamento);
            $('#municipio').text(report[0].municipio);
            $('#categoria').text(report[0].categoria);
            $('#vereda').text(report[0].vereda);
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