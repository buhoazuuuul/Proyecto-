var username = getParameterByName('userName');
var datos;
var lastDoc;
var url = 'profile.php?userName=' + username;
var urlCorreo = 'mail_compose_user.php?userName=' + username;

$(document).ready(function () {

    console.log('Documento fill Secretary cargado');
    getUser();
    selectDepartamentos();
    setTimeout(function () {
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

function linkar() {

    Swal.fire({
        title: 'Estas seguro?',
        text: "Salir, voy a regresar luego a gestionar los regiesgos!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, salir!'
    }).then((result) => {
        if (result.value) {
            window.location.href = 'logout.php';
        }
    })

}

function getLocation(datos) {

    buscarDepartamento(datos[0].departamento);
    buscarMunicipio(datos[0].municipio);
    buscarTipoDocumento(datos[0].tipo_doc);
}

function setHrefs() {

    $("#btnEditarPerfil").attr("href", url);
    $("#btnCorreo").attr("href", urlCorreo);
    $("#btnLogout").hover(function () {
        $(this).fadeOut(100);
        $(this).fadeIn(500);
    });

}

function getUser() {

    $.ajax({
        url: 'php/getSecretary.php',
        type: 'POST',
        data: { user: username },
        beforeSend: function () {
            console.log('Enviando..');
        },
        success: function (response) {
            datos = JSON.parse(response);
            setUserName_img(datos);
            getLocation(datos);
            filluserForm(datos);
            getTiposDeDocumentos();
        },
    });

}

function setUserName_img(array) {

    $('#userName').text(array[0].nombre + ' ' + array[0].apellido);
    $('#profileImage').attr('src', array[0].img);
    $('#mainImgProile').attr('src', array[0].img);

}

function getParameterByName(name) {
    name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
        results = regex.exec(location.search);
    return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
}

function buscarTipoDocumento(tipo_doc) {

    let select = document.getElementById("tipo_doc");

    for (var i = 1; i < select.length; i++) {
        console.log('Documento buscando');
        if (select.options[i].text == tipo_doc) {
            select.selectedIndex = i;
            console.log(select.options[i]);
        }
    }
}

function buscarDepartamento(dep) {
    console.log('buscando departamento' + dep);
    // creamos un variable que hace referencia al select
    let select = document.getElementById("departamento");

    // obtenemos el valor a buscar
    let buscar = dep;

    // recorremos todos los valores del select
    for (var i = 1; i < select.length; i++) {
        console.log(i);
        if (select.options[i].text == buscar) {
            // seleccionamos el valor que coincide
            select.selectedIndex = i;
            console.log(select.options[i].text);
        }
    }
}

function buscarMunicipio(municipio) {
    // creamos un variable que hace referencia al select
    console.log('buscando municipio');
    let select = document.getElementById("municipio");
    // obtenemos el valor a buscar
    let buscar = municipio;
    // recorremos todos los valores del select
    for (var i = 1; i < select.length; i++) {
        if (select.options[i].text == buscar) {
            // seleccionamos el valor que coincide
            select.selectedIndex = i;
            console.log(select.options[i].text);
        }
    }
}


function filluserForm(datos) {

    var dialog = bootbox.dialog({
        title: 'Este es tu perfil de Innexu',
        message: '<p><i class="fa fa-spin fa-spinner"></i> Cargando tu perfil...</p>'
    });
    lastDoc = datos[0].num_doc;
    //Datos al principio del form
    $('#secondUserName').text(datos[0].nombre + ' ' + datos[0].apellido);
    $('#nomUser').text(datos[0].usuario);
    $('#documento').text(datos[0].num_doc);
    $("#pMunicipio").append("<strong>" + datos[0].municipio + ' - ' + datos[0].departamento + "</strong>");
    $("#cargo_sec").append("<strong>" + datos[0].cargo + "</strong>");
    $("#dependencia_sec").append("<strong>" + datos[0].dependencia + "</strong>");
    $("#mail_sec").append(datos[0].email);
    //Datos del form
    $('#num_doc').val(datos[0].num_doc);
    $('#nombre').val(datos[0].nombre);
    $('#apellido').val(datos[0].apellido);
    $('#cargo').val(datos[0].cargo);
    $('#dependencia').val(datos[0].dependencia);
    $('#telefono').val(datos[0].telefono);
    $('#email').val(datos[0].email);
    $('#usuario').val(datos[0].usuario);


    //Vereda
    dialog.init(function () {
        setTimeout(function () {
            dialog.find('.bootbox-body').html('Estas listo para reportar un riesgo!');
        }, 1000);
    });
    setTimeout(function () { dialog.modal('hide') }, 1000);



}

function getTiposDeDocumentos() {

    $('#tipo_doc').empty();
    $.getJSON("https://www.datos.gov.co/resource/shc6-n6i6.json?$select=nomtipodocumento", function (result) {
        $.each(result, function (i, field) {
            $('#tipo_doc').append($('<option>', {
                value: i,
                text: field.nomtipodocumento
            }));
        });
    });

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
    });
    $("#departamento")[0].selectedIndex = 0;
}
