var username = getParameterByName('userName');
const urlPerfil = 'profile.php?userName=' + username;
const urlOutbox = 'outbox_user.php?userName=' + username;
const urlInbox = 'inbox_user.php?userName=' + username;
const urlsendReport = 'mail_compose_user.php?userName=' + username;
var datos;
var respuestas = [];

$(document).ready(function () {
    console.warn('Get responses loaded!')
    getUser();
    var dialog = bootbox.dialog({
        title: 'Obteniendo respuestas',
        message: '<p><i class="fa fa-spin fa-spinner"></i> Cargando...</p>'
    });
    dialog.init(function () {
        setTimeout(function () {
            dialog.find('.bootbox-body').html('Listo!');
        }, 3000);
    });

    setTimeout(function () { dialog.modal('hide') }, 2000);
    setTimeout(() => { getReports() }, 1000);
});

function setHrefs() {

    $("#btnInicio").attr("href", urlPerfil);
    $("#home").attr("href", urlPerfil);
    $("#enviarReporte").attr("href", urlsendReport);
    $("#inbox").attr("href", urlInbox);
    $("#outbox").attr("href", urlOutbox);

}

function simpleTemplating(data) {
    var html;
    $.each(data, function (index, item) {
        if (item.prioridad == 'Muy prioritario') {
            let url = 'detalle_reporte_usuario.php?id_report=' + item.report_id;
            html += '<tr><td class="inbox-small-cells"><input type="checkbox" class="mail-checkbox"></td>\
                    <td class="inbox-small-cells"><i style="color:red;" style class="fa fa-star"></i></td>\
                    <td id = "nombreUsuario" class= "view-message  dont-show" > <a>'+ item.nombre + '</a></td>\
                    <td id="asunto" class="view-message "><a href='+ url + '>' + item.report_asunto + '</a></td>\
                    <td id="" class="view-message  inbox-small-cells"><i class="fa fa-paperclip"></i></td>\
                    <td id="fecha_hora" class="view-message  text-right">'+ item.report_asunto + '</td>c';
        } else {
            let url = 'detalle_reporte_usuario.php?id_report=' + item.report_id;
            html += '<tr href=' + url + '><td class="inbox-small-cells"><input type="checkbox" class="mail-checkbox"></td>\
                    <td class="inbox-small-cells"><i style="color:green;" style class="fa fa-star"></i></td>\
                    <td id = "nombreUsuario" class= "view-message  dont-show" > <a>'+ item.nombre + '</a></td>\
                    <td id="asunto" class="view-message "><a href='+ url + '> ' + item.report_asunto + '</a ></td >\
            <td id="" class="view-message  inbox-small-cells"><i class="fa fa-paperclip"></i></td>\
            <td id="fecha_hora" class="view-message text-right">'+ item.report_asunto + '</td>v';
        }
    });

    return html;
}

function pagination(reportes) {

    $('#pagination-container').pagination({
        dataSource: reportes,
        pageSize: 8,
        pageNumber: 1,
        autoHidePrevious: true,
        autoHideNext: true,
        className: 'paginationjs-theme-blue',
        callback: function (data, pagination) {
            console.log(data);
            var html = simpleTemplating(data);
            $('#data-container').html(html);

        }
    })
}

function getReports() {

    $.ajax({
        url: 'php/getInboxUser.php',
        type: 'POST',
        data: { id_usuario: datos[0].id },
        beforeSend: function () {

            console.log('Enviando..');
        },
        success: function (response) {
            let reports = JSON.parse(response);
            console.log(reports);
            simpleTemplating(reports);
            pagination(reports);
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

