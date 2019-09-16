var username = getParameterByName('userName');
var datos;
var lastDoc;
var url = 'profile.php?userName=' + username;
var urlCorreo = 'sendMail.php?userName=' + username;

$(document).ready(function () {

    console.log('Documento filluserProfile cargado');
    setHrefs();
    getTiposDeDocumentos();
    getUser();
});

function getLocation() {

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

    var dataString = 'userName=' + username;

    $.ajax({
        url: 'php/getUser.php',
        type: 'POST',
        data: dataString,
        beforeSend: function () {
            console.log('Enviando..');
        },
        success: function (response) {
            datos = JSON.parse(response);
            setUserName(datos);
            getLocation(datos);

        },
    });

}

function setUserName(array) {

    $('#userName').text(array[0].nombre + ' ' + array[0].apellido);
    $('#profileImage').attr('src', array[0].img);
    $('#mainImgProile').attr('src', array[0].img);
    filluserForm();
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
    console.log('buscando departamento');
    // creamos un variable que hace referencia al select
    let select = document.getElementById("departamento");

    // obtenemos el valor a buscar
    let buscar = dep;

    // recorremos todos los valores del select
    for (var i = 1; i < select.length; i++) {
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


function filluserForm() {

    var dialog = bootbox.dialog({
        title: 'Este es tu perfil de Innexu',
        message: '<p><i class="fa fa-spin fa-spinner"></i> Cargando tu perfil...</p>'
    });
    lastDoc = datos[0].num_doc;
    //Datos al principio del form
    $('#secondUserName').text(datos[0].nombre + ' ' + datos[0].apellido);
    $('#Nacimiento').text(datos[0].fecha);
    $('#nomUser').text(datos[0].usuario);
    $('#documento').text(datos[0].num_doc);
    $("#pMunicipio").append("<strong>" + datos[0].municipio + "</strong>");

    //Datos del form
    $('#num_doc').val(datos[0].num_doc);
    $('#tipo_doc').val(datos[0].tipo_doc);
    $('#nombre').val(datos[0].nombre);
    $('#apellido').val(datos[0].apellido);
    $('#telefono').val(datos[0].telefono);
    $('#email').val(datos[0].email);
    $('#fecha').val(datos[0].fecha);
    $('#usuario').val(datos[0].usuario);

    //Vereda
    dialog.init(function () {
        setTimeout(function () {
            dialog.find('.bootbox-body').html('Estas listo para reportar un riesgo!');
        }, 1000);
    });



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
