var data ;

$(document).ready(function () {
    console.log('Documento cargado');
    fillsecretarios90;
});

function fillsecretarios(){

    $.ajax({
        type: "GET",
        url: "php/getSecretarios.php",
        data: "",
        success: function (response) {
        
         data = JSON.parse(response);
         console.log(data);
        }
    });
    
}