var username = getParameterByName('userName');
var datos;
var url = 'profile.php?userName=' + username;
var dialog = bootbox.dialog({
    message: '<p class="text-center mb-0"><i class="fa fa-spin fa-cog"></i>Cargando tu perfil...</p>',
    closeButton: false
});

$(document).ready(function () {

    console.log('Documento filluserProfile cargado');
    fillUser();
    setHrefs();

});

function setHrefs() {

    document.getElementById("btnLogout").style.cursor = "pointer";
    $("#btnEditarPerfil").attr("href", url);
    $("#btnLogout").hover(function () {
        $(this).fadeOut(100);
        $(this).fadeIn(500);
    });

}
function fillUser() {

    var dataString = 'userName=' + username;

    $.ajax({
        url: 'php/getUser.php',
        type: 'POST',
        data: dataString,
        beforeSend: function () {
            console.log('Enviando..');
        },
        success: function (response) {
            //console.log(response);
            datos = JSON.parse(response);
            llenarPerfil();
        },
    });

}
function llenarPerfil() {

    console.log('llenando perfil');
    $('#userName').text(datos[0].nombre + ' ' + datos[0].apellido);
    filluserForm();



}
function getParameterByName(name) {
    name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
        results = regex.exec(location.search);
    return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
}
function filluserForm() {


    console.log('usando bootbox.js');

    var btnEditarPerfil = $("#btnEditarPerfil").attr("class");

    if (btnEditarPerfil == "active") {

        //Datos al principio del form
        $('#secondUserName').text(datos[0].nombre + ' ' + datos[0].apellido);
        $('#Nacimiento').text(datos[0].fecha);
        $('#nomUser').text(datos[0].usuario);
        $('#documento').text(datos[0].num_doc);
        $("#pMunicipio").append("<strong>" + datos[0].residencia + "</strong>");

        //Datos del form
        $('#num_doc').val(datos[0].num_doc);
        $('#tipo_doc').val(datos[0].tipo_doc);
        $('#nombre').val(datos[0].nombre);
        $('#apellido').val(datos[0].apellido);
        $('#telefono').val(datos[0].telefono);
        $('#email').val(datos[0].email);
        $('#residencia').val(datos[0].residencia);
        $('#fecha').val(datos[0].fecha);
        $('#usuario').val(datos[0].usuario);
        $('#pass').val("Encriptada");

        dialog.modal('hide');

    }



}
function logout() {

    $.ajax({
        url: 'php/logout.php',
        type: 'POST',
        data: "",
        beforeSend: function () {
            console.log('Saliendo..');
        },
        success: function (response) {
            //console.log(response);

        },
    });


}




