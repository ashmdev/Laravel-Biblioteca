$(document).ready(function() {
    $('.eliminar-general').on('click', function(){
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
                ajaxRequest($(this));
            }
        });
    });

    function ajaxRequest(etiqueta) {
        const url = etiqueta.data('url');
        const method = etiqueta.data('method');
        const data = {
            _token: $('input[name=_token]').val()
        };
        $.ajax({
            url: url,
            type: method,
            dataType: 'JSON',
            data: data,
            success: function (respuesta) {
                if (respuesta.status === '200') {
                    etiqueta.parents('tr').remove();
                    Biblioteca.notificaciones('El registro fue eliminado correctamente', 'Biblioteca', 'success');
                } else {
                    Biblioteca.notificaciones('El registro no pudo ser eliminado, hay recursos usandolo', 'Biblioteca', 'error');
                }
            },
            error: function () {

            }
        });
    }



});
