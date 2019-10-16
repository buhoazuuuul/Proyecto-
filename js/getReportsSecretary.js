$(document).ready(function () {


});
function getReports() {

    $.ajax({
        url: 'php/getReportsSecreatry.php',
        type: 'POST',
        data: { id_secretario: 3 },
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