var id;
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
var sexo;
var img;

$(document).ready(function () {

    console.log('Documento editProfile.js loaded');
    $('#btnUpdateUser').on('click', function () {
        saveDataForm();
        updateProfile();
    });
    getTiposDeDocumentos();

});

function saveDataForm() {

    id = $('#id').val();
    vereda_id = $('#vereda_id').val();
    num_doc = $('#num_doc').val();
    tipo_doc = $('#tipo_doc').val();
    nombre = $('#nombre').val();
    apellido = $('#apellido').val();
    telefono = $('#telefono').val();
    email = $('#email').val();
    departamento = $('#departamento').val();
    municipio = $('#municipio').val();
    fecha = $('#fecha').val();
    usuario = $('#usuario').val();
    pass = $('#pass').val();
    sexo = $('#sexo').val();
    img = $('#img').val();

}

function updateProfile() {

    if (imgPath != '') {

        $.ajax({
            url: "php/updateUser.php",
            method: "POST",
            data: {
                last_doc: lastDoc, id: id, vereda_id: vereda_id, num_doc: num_doc, tipo_doc: tipo_doc, nombre: nombre,
                apellido: apellido,
                telefono: telefono,
                email: email,
                departamento: departamento,
                municipio: municipio,
                fecha: fecha,
                usuario: usuario,
                pass: pass,
                sexo: sexo,
                img: imgPath
            },
            success: function (data) {
                console.log(data);
                if (data == "successfully") {
                    Swal.fire({
                        position: 'center',
                        type: 'success',
                        title: 'Se he actualizado satisfactoriamente tu perfil',
                        showConfirmButton: false,
                        timer: 1500
                    });
                    location.reload();

                }
                else {
                    Swal.fire({
                        position: 'center',
                        type: 'error',
                        title: 'Error al actualizar tu perfil',
                        showConfirmButton: false,
                        timer: 1500
                    });

                }


            }

        });

    } else {

        $.ajax({
            url: "php/updateUser.php",
            method: "POST",
            data: {
                last_doc: lastDoc, id: id, vereda_id: vereda_id, num_doc: num_doc, tipo_doc: tipo_doc, nombre: nombre,
                apellido: apellido,
                telefono: telefono,
                email: email,
                departamento: departamento,
                municipio: municipio,
                fecha: fecha,
                usuario: usuario,
                pass: pass,
                sexo: sexo,
                img: imgPath
            },
            success: function (data) {
                console.log(data);
                if (data == "successfully") {
                    Swal.fire({
                        position: 'center',
                        type: 'success',
                        title: 'Se he actualizado satisfactoriamente tu perfil',
                        showConfirmButton: false,
                        timer: 1500
                    });
                    location.reload();

                }
                else {
                    Swal.fire({
                        position: 'center',
                        type: 'error',
                        title: 'Error al actualizar tu perfil',
                        showConfirmButton: false,
                        timer: 1500
                    });

                }


            }

        });

    }
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