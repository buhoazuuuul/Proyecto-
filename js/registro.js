var vereda_id;
var num_doc;
var tipo_doc;
var nombre;
var apellido;
var telefono;
var email;
var departamento;
var municipio;
var fecha;
var usuario;
var pass;
var tipo_usuario = 0;
var sexo;
var img;

$(document).ready(function() {

    console.log('Documento usuario.js cargado');
    getTiposDeDocumentos();
    $('#btnRegistrarse').on('click', function() {
        guardarDatosRegistro();
        InsertarDatosBD();
    });

});

function guardarDatosRegistro() {

    // kvereda_id = $('#vereda_id').val();
    vereda_id = 1;
    num_doc = $('#num_doc').val();
    tipo_doc = $('#tipo_doc').val();
    nombre = $('#nombre').val();
    apellido = $('#apellido').val();
    telefono = $('#telefono').val();
    email = $('#email').val();
    departamento = $('#departamento').val();
    municipio = $('#municipio').val();
    fecha = $('#fecha').val();
    usuario = $('#login').val();
    pass = $('#password').val();
    sexo = $("input[name='sexo']:checked").val();

    if (sexo == "Hombre") {
        img = 'php/img/male.png';
    } else {
        img = 'php/img/female.png';
    }

}

function InsertarDatosBD() {

    $.ajax({
        url: "php/createUser.php",
        method: "POST",
        data: {
            vereda_id: vereda_id,
            num_doc: num_doc,
            tipo_doc: tipo_doc,
            nombre: nombre,
            apellido: apellido,
            telefono: telefono,
            email: email,
            departamento: departamento,
            municipio: municipio,
            fecha: fecha,
            usuario: usuario,
            pass: pass,
            tipo_usuario: tipo_usuario,
            sexo: sexo,
            img: img

        },
        success: function(data) {
            console.log(data);
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