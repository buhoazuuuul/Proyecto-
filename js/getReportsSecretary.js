var username = getParameterByName('userName');
const urlPerfil = 'profile_secretary.php?userName=' + username;
const urlRecibidos = 'inbox_secretary.php?userName=' + username;
const urlEnviados = 'outbox_secretary.php?userName=' + username;
var datos;
var reportes = [];

$(document).ready(function () {
    console.warn('Get reports loaded!')
    getUser();
    setHrefs();
    var dialog = bootbox.dialog({
        title: 'Obteniendo tus reportes recibidos',
        message: '<p><i class="fa fa-spin fa-spinner"></i> Cargando...</p>'
    });
    dialog.init(function () {
        setTimeout(function () {
            dialog.find('.bootbox-body').html('Listo!');
        }, 3000);
    });

    setTimeout(function () { dialog.modal('hide') }, 2000);
    setTimeout(() => { getReports() }, 1000);
    demo();
    var myVar = setInterval(getReports, 1000);
});



function sleep(milliseconds) {
    var start = new Date().getTime();
    for (var i = 0; i < 1e7; i++) {
        if ((new Date().getTime() - start) > milliseconds) {
            break;
        }
    }
}

function demo() {

    sleep(2000);
}



function setHrefs() {

    $("#btnInicio").attr("href", urlPerfil);
    $("#btnRecibidos").attr("href", urlRecibidos);
    $("#btnRespuestasEnviadas").attr("href", urlEnviados);
    $("#correo").attr("href", urlRecibidos);

}

function simpleTemplating(data) {
    var html;
    $.each(data, function (index, item) {
        if (item.prioridad == 'Muy prioritario') {
            let url = 'detalle_reporte_secretary.php?userName=' + username + '&id_report=' + item.reporte_id;
            if (item.adjunto != "") {
                html += '<tr><td class="inbox-small-cells"><input type="checkbox" class="mail-checkbox"></td>\
                    <td class="inbox-small-cells"><i style="color:red;" style class="fa fa-star"></i></td>\
                    <td id = "nombreUsuario" class= "view-message  dont-show" > <a>'+ item.nombre + '</a></td>\
                    <td id="asunto" class="view-message "><a href='+ url + '>' + item.asunto + '</a></td>\
                    <td id="" class="view-message  inbox-small-cells"><i class="fas fa-paperclip"></i></td>\
                    <td id="fecha_hora" class="view-message  text-right">'+ item.fecha_hora + '</td>c';
            } else {
                html += '<tr><td class="inbox-small-cells"><input type="checkbox" class="mail-checkbox"></td>\
                    <td class="inbox-small-cells"><i style="color:red;" style class="fa fa-star"></i></td>\
                    <td id = "nombreUsuario" class= "view-message  dont-show" > <a>'+ item.nombre + '</a></td>\
                    <td id="asunto" class="view-message "><a href='+ url + '>' + item.asunto + '</a></td>\
                    <td id="" class="view-message  inbox-small-cells"><i class="fas fa-unlink"></i></td>\
                    <td id="fecha_hora" class="view-message  text-right">'+ item.fecha_hora + '</td>c';

            }
        } else {
            let url = 'detalle_reporte_secretary.php?userName=' + username + '&id_report=' + item.reporte_id;
            if (item.adjunto != "") {
                html += '<tr href=' + url + '><td class="inbox-small-cells"><input type="checkbox" class="mail-checkbox"></td>\
            <td class="inbox-small-cells"><i style="color:green;" style class="fa fa-star"></i></td>\
            <td id = "nombreUsuario" class= "view-message  dont-show" > <a>'+ item.nombre + '</a></td>\
            <td id="asunto" class="view-message "><a href='+ url + '> ' + item.asunto + '</a ></td >\
            <td id="" class="view-message  inbox-small-cells"><i class="fas fa-paperclip"></i></td>\
            <td id="fecha_hora" class="view-message text-right">'+ item.fecha_hora + '</td>v';

            } else {
                html += '<tr href=' + url + '><td class="inbox-small-cells"><input type="checkbox" class="mail-checkbox"></td>\
            <td class="inbox-small-cells"><i style="color:green;" style class="fa fa-star"></i></td>\
            <td id = "nombreUsuario" class= "view-message  dont-show" > <a>'+ item.nombre + '</a></td>\
            <td id="asunto" class="view-message "><a href='+ url + '> ' + item.asunto + '</a ></td >\
            <td id="" class="view-message  inbox-small-cells"><i class="fas fa-unlink"</td>\
            <td id="fecha_hora" class="view-message text-right">'+ item.fecha_hora + '</td>v';
            }

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
            var html = simpleTemplating(data);
            $('#data-container').html(html);

        }
    })


}

function getReports() {

    $.ajax({
        url: 'php/getInboxReportsSecretary.php',
        type: 'POST',
        data: { id_secretario: 6 },
        beforeSend: function () {

            console.log('Enviando..');
        },
        success: function (response) {
            let reports = JSON.parse(response);
            simpleTemplating(reports);
            reports.forEach(element => {
                reportes.push(element);
            });
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
