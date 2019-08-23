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

    console.log('Documento editProfile.js cargado');
    $('#btnUpdateUser').on('click', function() {
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
    if (imgPath != '') {
        img = imgPath;
    } else {
        if (sexo == "Hombre") {
            img = 'img/male.png';
        } else {
            img = 'img/female.png';
        }
    }
    
}

function updateUser() {

    $.ajax({
        url: "php/updateUser.php",
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
                    title: 'Se he actualizado satisfactoriamente su perfil',
                    showConfirmButton: false,
                    timer: 1500
                });

            } else {

                Swal.fire({
                    position: 'center',
                    type: 'error',
                    title: 'Ocurrio un error, intenta de nuevo. Vamos a gestionar el riesgo mejor la siguiente vez...',
                    showConfirmButton: false,
                    timer: 1500
                });

            }


        }

    });
}

