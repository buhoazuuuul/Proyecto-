var depMunicipios;
var departamentos = [];
var municipios = [];
var returnData;

$(document).ready(function () {

    getData();
    $("#departamento").change(function () {
        var combo = document.getElementById("departamento");
        var selected = combo.options[combo.selectedIndex].text;
        filtrarMunicipios(selected, depMunicipios);
    });

});

function getData() {

    $.getJSON("js/Datos_abiertos/departamentos_municipios.json", function (data) {
        llenarDep(data);
        depMunicipios = data;
    });


}
//Revisar departamentos
function llenarDep(array) {

    for (let index = 0; index < array.length; index++) {

        if (departamentos.indexOf(array[index]['departamento']) == -1) {

            departamentos.push(array[index]['departamento']);
            $('#departamento').append($('<option>', {
                value: index,
                text: array[index]['departamento']
            }));
        }

        $('#municipio').append($('<option>', {
            value: index,
            text: array[index]['municipio']
        }));

    }
}

function filtrarMunicipios(dep, array) {

    $('option', '#municipio').remove();

    for (let index = 0; index < array.length; index++) {

        if (array[index]['departamento'] == dep) {

            $('#municipio').append($('<option>', {
                value: index,
                text: array[index]['municipio']
            }));

        }
    }

}