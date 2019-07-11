var depMunicipios;
var returnData;


$(document).ready(function () {

    getData();

});

function getData() {

    $.getJSON("js/Datos_abiertos/departamentos_municipios.json?departamento=Antioquia", function (data) {
        llenarDep(data);
    });


}
//Revisar departamentos
function llenarDep(array) {

    for (let index = 0; index < array.length; index++) {

        $('#departamento').append($('<option>', {
            value: index,
            text: array[index]['departamento']
        }));
        $('#municipio').append($('<option>', {
            value: index,
            text: array[index]['municipio']
        }));


    }
}