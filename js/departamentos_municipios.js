(document).ready(function () {

    console.log('Documento Departamentos y Municipio cargado');


});

function getData() {

    $.ajax({
        url: "https://www.datos.gov.co/resource/xdk5-pm3f.json",
        type: "GET",
        data: {
            "$limit": 5000,
            "$$app_token": "1rzkh4wgmmq2pjwtwcy2x3dtznuems377sse9cnxz4xww0641y"
        }
    }).done(function (data) {
        alert("Retrieved " + data.length + " records from the dataset!");
        console.log(data);
    });
}