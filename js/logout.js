
function linkar() {

    Swal.fire({
        title: 'Estas seguro?',
        text: "Salir, voy a regresar luego a gestionar los regiesgos!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, salir!'
    }).then((result) => {
        if (result.value) {
            window.location.href = 'logout.php';
        }
    })

}
