var username = getParameterByName('userName');
const urlPerfil = 'profile_secretary.php?userName=' + username;
const urlRecibidos = 'inbox_secretary.php?userName=' + username;
const urlEnviados = 'outbox_secretary.php?userName=' + username;
var datos;
var reportes = [];

$(document).ready(function () {
    console.log('Outbox loaded!');
    setHrefs();
    getUser();

});
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
            getReports();
        },
    });

}

function setHrefs() {

    $("#btnInicio").attr("href", urlPerfil);
    $("#btnCorreo").attr("href", urlRecibidos);
    $("#btnRecibidos").attr("href", urlRecibidos);
    $("#btnRespuestasEnviadas").attr("href", urlEnviados);

}
function simpleTemplating(data) {
    var html;
    $.each(data, function (index, item) {
        if (item.prioridad == 'Muy prioritario') {
            let url = 'answer_view_secretary.php?userName=' + username + '&id_resp=' + item.idRespuesta;
            html += '<tr><td class="inbox-small-cells"><input type="checkbox" class="mail-checkbox"></td>\
                    <td class="inbox-small-cells"><i style="color:red;" style class="fa fa-star"></i></td>\
                    <td id = "nombreUsuario" class= "view-message  dont-show" > <a>'+ item.nombre + '</a></td>\
                    <td id="asunto" class="view-message "><a href='+ url + '>' + item.asunto_respuesta + '</a></td>\
                    <td id="" class="view-message  inbox-small-cells"><i class="fa fa-paperclip"></i></td>\
                    <td id="fecha_hora" class="view-message  text-right">'+ item.fecha_hora + '</td>c';
        } else {
            let url = 'answer_view_secretary.php?userName=' + username + '&id_resp=' + item.idRespuesta;
            html += '<tr href=' + url + '><td class="inbox-small-cells"><input type="checkbox" class="mail-checkbox"></td>\
                    <td class="inbox-small-cells"><i style="color:green;" style class="fa fa-star"></i></td>\
                    <td id = "nombreUsuario" class= "view-message  dont-show" > <a>'+ item.nombre + '</a></td>\
                    <td id="asunto" class="view-message "><a href='+ url + '> ' + item.asunto_respuesta + '</a ></td >\
            <td id="" class="view-message  inbox-small-cells"><i class="fa fa-paperclip"></i></td>\
            <td id="fecha_hora" class="view-message text-right">'+ item.fecha_hora + '</td>v';
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
        url: 'php/getOutBoxSecretary.php',
        type: 'POST',
        data: { id_secretario: datos[0].id },
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