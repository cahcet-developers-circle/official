$(window).on('scroll',function(){
    if ($(window).scrollTop()){
        $('nav').addClass('colour');
    }
    else {
        $('nav').removeClass('colour');
    }
});