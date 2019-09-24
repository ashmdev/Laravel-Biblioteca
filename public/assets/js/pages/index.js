$(document).ready(function() {
    $('.eliminar-general').on('click', function(event){
        event.preventDefault();
        const url = $(this).attr('href');
        swal({
            title: '¿ Está seguro que desea eliminar el registro ?',
            text: "Esta acción no se puede deshacer!",
            icon: 'warning',
            buttons: {
                cancel: "Cancelar",
                confirm: "Aceptar"
            },
        }).then((value) => {
            if (value) {
                window.location.href = url;
            }
        });
    });
});
