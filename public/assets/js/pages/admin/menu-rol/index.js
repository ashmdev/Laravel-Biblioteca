$('.menu-rol').on('change', function () {
    const data = {
        menu_id: $(this).data('menuid'),
        rol_id: $(this).val(),
        _token: $('input[name=_token]').val()
    };
    if ($(this).is(':checked')) {
        data.estado = 1;
    } else {
        data.estado = 0;
    }
    ajaxRequest('/admin/menu-rol',data)
});

function ajaxRequest(url, data) {
    $.ajax({
        url: url,
        type: 'POST',
        dataType: 'JSON',
        data: data,
        success: function (respuesta) {
            if (respuesta.status === '200')
            Biblioteca.notificaciones('El registro fue eliminado correctamente', 'Biblioteca', 'success');
        }
    })
}
