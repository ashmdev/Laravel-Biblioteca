$(document).ready(function () {
    Biblioteca.validacionGeneral('form-general');
    $('.icp-auto').iconpicker({
        title: 'Selecciona un icono',
        icons: faicons
    });
    $('.icp').on('iconpickerSelected', function (e) {
        $('.picker-target').get(0).className = 'picker-target fa-2x ' +
            e.iconpickerInstance.options.iconBaseClass + ' ' +
            e.iconpickerInstance.options.fullClassFormatter(e.iconpickerValue);
    });
});