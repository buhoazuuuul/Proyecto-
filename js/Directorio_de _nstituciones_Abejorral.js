$(document).ready(function () {

    console.log('Instituciones de Abejorral Cargado');
    getDependencias();
    getCargos();
});

function getDependencias() {

    $.getJSON("https://www.datos.gov.co/resource/ej2u-8crb.json?$select=institucion", function (result) {
        $.each(result, function (i, field) {
            $('#dependencia').append($('<option>', {
                value: i,
                text: field.institucion
            }));
        });
    });

}
function getCargos() {

    $.getJSON("https://www.datos.gov.co/resource/5hfn-b62q.json?$select=cargo",
        function (data, textStatus, jqXHR) {


            if (textStatus == 'success') {
                $.each(data, function (indexInArray, valueOfElement) {
                    $('#cargo').append($('<option>', {
                        value: indexInArray,
                        text: valueOfElement.cargo
                    }));
                });
            } else {
                $('#cargo').append($('<option>', {
                    value: indexInArray,
                    text: 'Error al cargar los datos abiertos con los cargos disponibles'
                }));

            }



        }
    );

}