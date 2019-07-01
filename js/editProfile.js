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

$(document).ready(function () {

    console.log('Documento editProfile.js loaded');
    $('#btnUpdateUser').on('click', function () {
        saveDataForm();
        updateProfile();
    });

});

function saveDataForm() {

    num_doc = $('#num_doc').val();
    tipo_doc = $('#tipo_doc').val();
    nombre = $('#nombre').val();
    apellido = $('#apellido').val();
    telefono = $('#telefono').val();
    email = $('#email').val();
    residencia = $('#residencia').val();
    fecha = $('#fecha').val();
    usuario = $('#usuario').val();
    pass = $('#pass').val();

}

function updateProfile() {

    $.ajax({
        url: "php/updateUser.php",
        method: "POST",
        data: {
            num_doc: num_doc, tipo_doc: tipo_doc, nombre: nombre, apellido: apellido, telefono: telefono, email: email,
            residencia: residencia,
            fecha: fecha,
            usuario: usuario,
            pass: pass
        },
        success: function (data) {
            console.log(data);

            // if (data > 0) {
            //     Swal.fire({
            //         position: 'center',
            //         type: 'success',
            //         title: 'Se he registrado satisfactoriamente',
            //         showConfirmButton: false,
            //         timer: 1500
            //     });
            //     //window.location = "http://localhost/Proyecto-/index.php"

            // } else {

            //     Swal.fire({
            //         position: 'center',
            //         type: 'error',
            //         title: 'Error al registrarse',
            //         showConfirmButton: false,
            //         timer: 1500
            //     });
            //     //window.location = "http://localhost/Proyecto-/index.php"
            //     // $('#modalNoRegistro').modal('show');

            // }


        }

    });
}