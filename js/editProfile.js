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

//Siempre que salgamos de un campo de texto, se chequeará esta función
$("#form input").keyup(function() {
    var form = $(this).parents("#form");
    var check = checkCampos(form);
    if (check) {
        console.log('campos completos');
        let user = $('#login').val();
        let mail = $('#email').val();
        validarRegistro(mail, user);
    }
});

//Función para comprobar los campos de texto
function checkCampos(obj) {
    var camposRellenados = true;
    obj.find("input").each(function() {
        var $this = $(this);
        if ($this.val().length <= 0) {
            camposRellenados = false;
            return false;
        }
    });
    if (camposRellenados == false) {
        return false;
    } else {
        return true;
    }
}

function validarRegistro(mail, user) {

    $.ajax({
        type: "GET",
        url: "php/checkRegistrer.php",
        data: { mail: mail, user: user },
        success: function(response) {
            console.log(response);
        }
    });

}

function guardarDatosRegistro() {

    // kvereda_id = $('#vereda_id').val();
    vereda_id = 1;
    num_doc = $('#num_doc').val();
    tipo_doc = $("#tipo_doc option:selected").text();
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