$('#pagination-demo').twbsPagination({
    totalPages: 9,
    // la página actual que se muestra al inicio
    startPage: 1,
    
    // páginas máximas visibles
    visiblePages: 5,
    
    initiateStartPageClick: true,
    
    // plantilla para enlaces de paginación
    href: false,
    
    // nombre de la variable en la plantilla href para el número de página
    hrefVariable: '{{number}}',
    
    // Text labels
    first: '« ',
    prev: '<',
    next: '>',
    last: '»',
    
    // carrusel estilo de la paginacion
    loop: false,
    
    // función de devolución de llamada
    onPageClick: function (event, page) {
        $('.page-active').removeClass('page-active');
      $('#page'+page).addClass('page-active');
    },
    
    // clases de paginacion 
    paginationClass: 'pagination',
    nextClass: 'next',
    prevClass: 'prev',
    lastClass: 'last',
    firstClass: 'first',
    pageClass: 'page',
    activeClass: 'active',
    disabledClass: 'disabled'
    
    });
    