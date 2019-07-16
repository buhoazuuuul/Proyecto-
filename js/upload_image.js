var imgPath;
$(document).ready(function () {
    $(document).on('change', '#file', function () {
        var name = document.getElementById("file").files[0].name;
        var form_data = new FormData();
        var ext = name.split('.').pop().toLowerCase();
        if (jQuery.inArray(ext, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
            alert("Archivo de imagen no valido");
        }
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("file").files[0]);
        var f = document.getElementById("file").files[0];
        var fsize = f.size || f.fileSize;
        if (fsize > 2000000) {
            alert("Imagen demasiado grande");
        }
        else {
            form_data.append("file", document.getElementById('file').files[0]);
            $.ajax({
                url: "php/upload.php",
                method: "POST",
                data: form_data,
                contentType: false,
                cache: false,
                processData: false,
                beforeSend: function () {
                    $('#uploaded_image').html("<label class='text-success'>Subiendo..</label>");
                },
                success: function (data) {
                    $('#uploaded_image').html('Se subio tu foto de perfil');
                    imgPath = data;
                    console.log(imgPath);
                }
            });
        }
    });
});