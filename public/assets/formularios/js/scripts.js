$(document).ready(function () {
    //Cerrar Las Alertas Automaticamente
    $('.alert[data-auto-dismiss]').each(function (index, element) {
        const $element = $(element),
            timeout = $element.data('auto-dismiss') || 5000;
        setTimeout(function () {
            $element.alert('close');
        }, timeout);
    });

    //TOOLTIPS
    $('body').tooltip({
        trigger: 'hover',
        selector: '.tooltipsC',
        placement: 'top',
        html: true,
        container: 'body'
    });

    $('#table_noticias').DataTable( {
        "lengthMenu": [[5,10, 25, 50, -1], [5,10, 25, 50, "All"]],
        ordering: false,
        language: {
            url: "//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
        }     
    } );


});
