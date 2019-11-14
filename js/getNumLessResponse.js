var username = getParameterByName('userName');
$(document).ready(function () {
    setTimeout(getNum, 500);
});

function getNum() {

    $.ajax({
        url: 'php/getNumReportsWithoutRes.php',
        type: 'POST',
        data: { id_secretario: datos[0].id },
        beforeSend: function () {
            console.log('Enviando..');
        },
        success: function (response) {
            var data = JSON.parse(response);
            console.log(data);
            var num_reports = 0;
            data.forEach(element => {
                num_reports += 1;
                let url = 'detalle_reporte_secretary.php?userName=' + username + '&id_report=' + element.id;
                $("#list_reports").append('<li>\
                    <a href = '+ url + '>\
                    <span class="photo"><img alt="avatar" src='+ element.img + '></span>\
                        <span class="subject">\
                            <span class="from">'+ element.nombre + '</span>\
                            <span class="time">'+ element.fecha_hora + '</span>\
                        </span>\
                        <span class="message">'+ element.asunto + '</span>\
                  </a>\
              </li >');
            });

            let text = "Tiene " + num_reports + "  nuevos reportes";
            $("#num_reports").text(num_reports);
            $("#num_reports_text").text(text);


        },
    });


}
function getParameterByName(name) {
    name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
        results = regex.exec(location.search);
    return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
}