(function( $ ) {
	'use strict';

	console.log('Loaded!');

    $('a.acf-fc-add').click(function(){
        console.log('clicked!');
    });

    /*if( $('.acf-fc-popup ul li').attr('data-layout') == 'conteudo_simples' ){
        $(this).find('a').text('PORRAAA!!!!');
    }*/

    var cpt = 'conteudo_simples'
    $('.acf-fc-popup ul li a').find("a[data-layout='" + cpt + "']").css('background', 'red');
    $('.acf-fc-popup ul li a:eq(1)').replaceWith('PORRRAAA')
    if( $('.acf-fc-popup').is(":visible") ){
        $('.acf-fc-popup').find('ul li a:eq(1)').text('PORRRAAA');
    }

})( jQuery );
