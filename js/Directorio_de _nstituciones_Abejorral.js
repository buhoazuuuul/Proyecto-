var selected;
var combo;
var num_doc;
var tipo_doc = "Cedula de ciudadania";
var nombre;
var apellido;
var cargo;
var dependencia;
var departamento;
var municipio;
var telefono;
var email;
var usuario;
var pass;
var sexo;
var img = 'php/upload/742.png';

$(document).ready(function () {

    console.log('Instituciones de Abejorral Cargado');
    getDependencias();
    getCargos();
    selectDepartamentos();

    $("#departamento").change(function () {
        combo = document.getElementById("departamento");
        selected = combo.options[combo.selectedIndex].text;
        departamento = selected;
        selectMunicipiosPorDep(selected);
    });
    $('#tipo_doc').change(function (e) {
        e.preventDefault();
        tipo_doc = e.target.options[event.target.selectedIndex].text;
    });
    $('#cargo').change(function (e) {
        e.preventDefault();
        cargo = e.target.options[event.target.selectedIndex].text;
    });
    $('#dependencia').change(function (e) {
        e.preventDefault();
        dependencia = e.target.options[event.target.selectedIndex].text;
        console.log(dependencia);
    });
    $('#municipio').change(function (e) {
        e.preventDefault();
        municipio = e.target.options[event.target.selectedIndex].text;
        console.log(municipio);
    });
    $('#btn_guardar').click(function (e) {
        e.preventDefault();
        registrarSecretario();

    });
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
        setTimeout(function () {
            console.log('esperando..');
            combo = document.getElementById("departamento");
            selected = combo.options[combo.selectedIndex].text;
            selectMunicipiosPorDep(selected);
        }, 1000, "JavaScript");
    });
    $("#departamento")[0].selectedIndex = 0;
}

function getData() {
    num_doc = $('#num_doc').val();
    nombre = $('#nombre').val();
    apellido = $('#apellido').val();
    telefono = $('#telefono').val();
    email = $('#email').val();
    pass = $('#pass').val();
    sexo = $("input[name='sexo']:checked").val();
    usuario = $('#usuario').val();
}

function registrarSecretario() {
    getData();
    $.ajax({
        type: "POST",
        url: "php/createSecretario.php",
        data: {
            num_doc: num_doc,
            tipo_doc: tipo_doc,
            nombre: nombre,
            apellido: apellido,
            cargo: cargo,
            dependencia: dependencia,
            departamento: departamento,
            municipio: municipio,
            telefono: telefono,
            email: email,
            usuario: usuario,
            pass: pass,
            sexo: sexo,
            img: img
        },
        success: function (response) {

            if (response == 'successfully') {
                Swal.fire({
                    position: 'center',
                    type: 'success',
                    title: 'Se he registrado satisfactoriamente',
                    showConfirmButton: false,
                    timer: 1500
                });

            } else {
                Swal.fire({
                    position: 'center',
                    type: 'error',
                    title: 'Ocurrio un error, intenta de nuevo. ' + response,
                    showConfirmButton: false,
                    timer: 1500,
                    onAfterClose: location.reload()
                });
            }
        }
    });
}


