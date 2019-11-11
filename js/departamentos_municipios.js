var selected;
var combo = document.getElementById("departamento");

$(document).ready(function () {

    selectDepartamentos();
    getVeredas();
    setTimeout(function () {
        console.log('esperando..');
        combo = document.getElementById("departamento");
        selected = combo.options[combo.selectedIndex].text;
        selectMunicipiosPorDep(selected);
    }, 1000, "JavaScript");

    $("#departamento").change(function () {
        combo = document.getElementById("departamento");
        selected = combo.options[combo.selectedIndex].text;
        selectMunicipiosPorDep(selected);
    });

});
function selectMunicipiosPorDep(departamento) {

    $('#municipio').empty();
    $.getJSON("https://www.datos.gov.co/resource/xdk5-pm3f.json?departamento=" + departamento, function (result) {
        $.each(result, function (i, field) {
            $('#municipio').append($('<option>', {
                value: field.municipio,
                text: field.municipio
            }));
        });

    });

}
function selectDepartamentos() {

    $.getJSON("https://www.datos.gov.co/resource/xdk5-pm3f.json?$query=select distinct departamento", function (result) {
        $.each(result, function (i, field) {
            $('#departamento').append($('<option>', {
                value: field.departamento,
                text: field.departamento
            }));
        });
    });
    $("#departamento")[0].selectedIndex = 0;
}
function getVeredas() {

    $.getJSON("php/getVeredas.php", function (result) {
        $.each(result, function (i, field) {
            $('#vereda').append($('<option>', {
                value: field.id,
                text: field.vereda
            }));
        });
    });
    $("#vereda")[0].selectedIndex = 0;
}
