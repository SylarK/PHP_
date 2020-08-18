$(function(){
    
    var currentSlide = 0;
    var delay = 8; /*s*/
    var maxSlide = $('.banner-single').length - 1;


    initSlider(); 

    function initSlider(){
        $('.banner-single').hide();
        $('.banner-single').eq(0).show();

        for (let i = 0; i < maxSlide + 1; i++) {
            var content = $('.bullets').html();
            if (i == 0){
                content+='<span class="active-slider"></span>';
            } else {
                content+='<span></span>';
            }
            $('.bullets').html(content);
            
        }

    }

    changeSlide();

    function changeSlide(){

        setInterval(function(){
            $('.banner-single').eq(currentSlide).stop().fadeOut(2500);

            currentSlide++;
            if(currentSlide > maxSlide){
                currentSlide = 0;
            }
            $('.banner-single').eq(currentSlide).stop().fadeIn(2500);
            //Alterar active slider
            $('.bullets span').removeClass('active-slider');
            $('.bullets span').eq(currentSlide).addClass('active-slider');
        },delay * 1000);
        

    }

    $('body').on('click', '.bullets span', function(){
        var currentBullet = $(this);
        $('.banner-single').eq(currentSlide).stop().fadeOut(2000);
        currentSlide = currentBullet.index();
        $('.banner-single').eq(currentSlide).stop().fadeIn(2000);
        $('.bullets span').removeClass('active-slider');
        currentBullet.addClass('active-slider');
    });

})