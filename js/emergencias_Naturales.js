
$(document).ready(function () {

    getEmergencias('emergencia');

});



function getEmergencias(selector) {
    selector = '#' + selector;
    $.getJSON("https://www.datos.gov.co/resource/a3er-k5e4.json?$select= distinct evento",
        function (data, textStatus, jqXHR) {
            if (textStatus == 'success') {
                $.each(data, function (indexInArray, valueOfElement) {
                    $(selector).append($('<option>', {
                        value: indexInArray,
                        text: valueOfElement.evento
                    }));
                });
            } else {
                $(selector).append($('<option>', {
                    value: 0,
                    text: 'Error al cargar los datos abiertos con los Emergencias naturales posibles'
                }));

            }

        }
    );

}