var username = getParameterByName('userName');
var datos;
var reportes = [];

$(document).ready(function () {
    console.warn('Get reports loaded!')
    getUser();
    setTimeout(() => { getReports() }, 1000);
});

function simpleTemplating(data) {
    var html;
    $.each(data, function (index, item) {
        if (item.prioridad == 'Muy prioritario') {

            html += '<tr><td class="inbox-small-cells"><input type="checkbox" class="mail-checkbox"></td>\
                    <td class="inbox-small-cells"><i style="color:red;" style class="fa fa-star"></i></td>\
                    <td id = "nombreUsuario" class= "view-message  dont-show" > <a href="detalle_reporte_usuario.php">'+ item.nombre + '</a></td>\
                    <td id="asunto" class="view-message "><a href="detalle_reporte_usuario.php">'+ item.asunto + '</a></td>\
                    <td id="" class="view-message  inbox-small-cells"><i class="fa fa-paperclip"></i></td>\
                    <td id="fecha_hora" class="view-message  text-right">'+ item.fecha_hora + '</td>c';
        } else {
            html += '<tr><td class="inbox-small-cells"><input type="checkbox" class="mail-checkbox"></td>\
                    <td class="inbox-small-cells"><i style="color:green;" style class="fa fa-star"></i></td>\
                    <td id = "nombreUsuario" class= "view-message  dont-show" > <a href="detalle_reporte_usuario.php">'+ item.nombre + '</a></td>\
                    <td id="asunto" class="view-message "><a href="detalle_reporte_usuario.php">'+ item.asunto + '</a></td>\
                    <td id="" class="view-message  inbox-small-cells"><i class="fa fa-paperclip"></i></td>\
                    <td id="fecha_hora" class="view-message  text-right">'+ item.fecha_hora + '</td>v';
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
            // $("li").css("display", "inline");
            // $("paginationjs-page").css("class", "page-item");
        }
    })


}

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

