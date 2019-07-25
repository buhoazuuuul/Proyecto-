var num_doc;
var tipo_doc;
var nombre;
var apellido;
var telefono;
var email;
var residencia;
var fecha;
var usuario;
var pass;



$(document).ready(function() {

    console.log('Documento usuario.js cargado');
    getTiposDeDocumentos();
    $('#btnRegistrarse').on('click', function() {
        guardarDatosRegistro();
        InsertarDatosBD();
    });

});

function guardarDatosRegistro() {

    num_doc = $('#num_doc').val();
    tipo_doc = $('#tipo_doc').val();
    nombre = $('#nombre').val();
    apellido = $('#apellido').val();
    telefono = $('#telefono').val();
    email = $('#email').val();
    residencia = $('#residencia').val();
    fecha = $('#fecha').val();
    usuario = $('#login').val();
    pass = $('#password').val();

}

function InsertarDatosBD() {

    $.ajax({
        url: "php/createUser.php",
        method: "POST",
        data: {
            num_doc: num_doc,
            tipo_doc: tipo_doc,
            nombre: nombre,
            apellido: apellido,
            telefono: telefono,
            email: email,
            residencia: residencia,
            fecha: fecha,
            usuario: usuario,
            pass: pass
        },
        success: function(data) {

            if (data == "successfully") {
                Swal.fire({
                    position: 'center',
                    type: 'success',
                    title: 'Se he registrado satisfactoriamente, vaya al inicio de sesion',
                    showConfirmButton: false,
                    timer: 1500
                });

            } else {

                Swal.fire({
                    position: 'center',
                    type: 'error',
                    title: 'Error al registrarse, revise su documento de identidad',
                    showConfirmButton: false,
                    timer: 1500
                });

            }


        }

    });
}

function getTiposDeDocumentos() {

    $('#tipo_doc').empty();
    $.getJSON("https://www.datos.gov.co/resource/shc6-n6i6.json?$select=nomtipodocumento", function(result) {
        $.each(result, function(i, field) {
            $('#tipo_doc').append($('<option>', {
                value: i,
                text: field.nomtipodocumento
            }));
        });
    });

}

function validarRegistro(nombreUsuario, mail) {

    $.ajax({
        type: "GET",
        url: "php/getUserLogin.php",
        data: {},
        dataType: "dataType",
        success: function(response) {

        }
    });

}