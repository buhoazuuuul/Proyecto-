$(document).ready(function() {

    selectDepartamentos();
    $("#departamento").change(function() {
        var combo = document.getElementById("departamento");
        var selected = combo.options[combo.selectedIndex].text;
        selectMunicipiosPorDep(selected);
    });

});


function selectMunicipiosPorDep(departamento) {

    $('#municipio').empty();

    $.getJSON("https://www.datos.gov.co/resource/xdk5-pm3f.json?departamento=" + departamento, function(result) {
        $.each(result, function(i, field) {
            $('#municipio').append($('<option>', {
                value: field.municipio,
                text: field.municipio
            }));
        });

    });

}

function selectDepartamentos() {

    $.getJSON("https://www.datos.gov.co/resource/xdk5-pm3f.json?$query=select distinct departamento", function(result) {
        $.each(result, function(i, field) {
            $('#departamento').append($('<option>', {
                value: field.departamento,
                text: field.departamento
            }));
        });
    });

}