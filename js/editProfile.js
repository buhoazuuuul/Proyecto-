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
var new_pass = ' ';
var tipo_usuario = 0;
var sexo;
var img;

$(document).ready(function () {

    $('#btnUpdateUser').on('click', function () {
        obtenerDatos();
        updateUser();
    });


});



function obtenerDatos() {

    vereda_id = $("#vereda :selected").val();
    num_doc = $('#num_doc').val();
    tipo_doc = $("#tipo_doc option:selected").text();
    nombre = $('#nombre').val();
    apellido = $('#apellido').val();
    telefono = $('#telefono').val();
    email = $('#email').val();
    departamento = $('#departamento').val();
    municipio = $('#municipio').val();
    fecha = $('#fecha').val();
    usuario = $('#usuario').val();
    sexo = $("input[name='sexo']:checked").val();
    pass = $('#pass').val();
    if (isNewPass()) {
        new_pass = $("#new_pass").val();
    } else {

        new_pass = '';
    }
    if (imgPath == " ") {
        if (sexo == "Hombre") {
            img = 'img/male.png';
        } else {
            img = 'img/female.png';
        }
        img = 'img/INNEXU1.png';

    } else {
        img = imgPath;
    }

}
function updateUser() {
    let data;
    if (isNewPass()) {
        data = {
            id: datos[0].id,
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
            new_pass: new_pass,
            sexo: sexo,
            img: img
        };
    } else {

        data = {
            id: datos[0].id,
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
            sexo: sexo,
            img: img
        };

    }


    $.ajax({
        url: "php/updateUser.php",
        method: "POST",
        data: data,
        success: function (data) {

            if (data === '1') {
                Swal.fire({
                    position: 'center',
                    type: 'success',
                    title: 'Se he actualizado satisfactoriamente su perfil',
                    showConfirmButton: false,
                    timer: 1500
                });

            } else {
                Swal.fire({
                    position: 'center',
                    type: 'error',
                    title: 'Ocurrio un error, intenta de nuevo. ' + data,
                    showConfirmButton: false,
                    timer: 1500
                });

            }

        }

    });
}

function isNewPass() {
    if ($('#new_pass').val().length == 0) {
        return false;
    } else {
        return true;
    }
}

