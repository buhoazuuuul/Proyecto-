var num_doc ;
var tipo_doc ;
var nombre ;
var apellido ;
var telefono ;
var email ;
var residencia ;
var fecha ;
var usuario ;
var pass ;

$(document).ready(function() {

    console.log('Documento usuario.js cargado');

	$('#btnRegistrarse').on('click', function() {
       
        guardarDatosRegistro();
        InsertarDatosBD();


	});
});


function guardarDatosRegistro(){

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

function InsertarDatosBD(){

    $.ajax({
        url:"php/usuarios.php",
        method:"POST",
        data:{num_doc: num_doc,tipo_doc: tipo_doc,nombre: nombre,apellido: apellido,telefono: telefono,email: email,
            residencia: residencia,
            fecha: fecha,
            usuario: usuario, 
            pass : pass	},
        success:function(data)
        {
         alert("Se Registro el usuario");
        }
        
       });
}