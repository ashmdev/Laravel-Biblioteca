$(document).ready(function () {
    $('#nestable').nestable('expandAll').on('change', function () {
        const data = {
            menu: window.JSON.stringify($('#nestable').nestable('serialize')),
            _token: $('input[name=_token]').val()
        };
        $.ajax({
            url: '/admin/menu/guardar-orden',
            type: 'POST',
            dataType: 'JSON',
            data: data,
            success: function (respuesta) {
            }
        });
    });

    $('.eliminar-menu').on('click', function (event) {
        event.preventDefault();
        let condition;
        const regex = /(\d+)/g,
            url = $(this).attr('href'),
            id = parseInt(url.match(regex)),
            nt = $('#nestable').nestable('serialize').find(function (element) {
                return element.id === id;
            });

        try {
            condition = Object.prototype.hasOwnProperty.call(nt, 'children');
        } catch (e) {
            condition = false;
        }

        if (condition) {
            swal({
                title: 'Restricción de sistema',
                text: "Este elemento no se puede borrar por que tiene elementos hijos",
                icon: 'warning',
                buttons: {
                    confirm: "Aceptar"
                },
            });
        } else {
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
        }
    });

});
