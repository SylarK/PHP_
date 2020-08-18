$(function(){
    $('nav.mobile').click(function(){
        //navmobile
        //https://api.jquery.com/category/events/

        let lista = $('nav.mobile ul');
        var icone = $('.mobile-menu i');
        /*Menu fadein
        (lista.is(':hidden') == true) ? lista.fadeIn() : lista.fadeOut()*/

        /*Menu without effects
        (lista.is(':hidden') == true) ? lista.show() : lista.hide()*/

        /*Menu slide*/
        if (lista.is(':hidden') == true) {
            icone.removeClass('fa-bars');
            icone.addClass('fa-times');
            lista.slideToggle();

        } else {
            icone.addClass('fa-bars');
            icone.removeClass('fa-times');
            lista.slideToggle();
        }
        

    });

    if($('target').length > 0){
        var el = '#'+$('target').attr('target');
        var divScroll = $(el).offset().top
        $('html, body').animate({'scrollTop':divScroll}, 2000)
    }

    

})

