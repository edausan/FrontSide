$(function() {

    $(document).on('click', '#nav-btn-trig', function() {
        $('#nav-btn').click();
    });


    $(document).on('change', '#nav-btn', function() {

        if ($(this).is(':checked')) {
            $('nav.fs-nav').addClass('open-nav');
            $('ul.fs-navlist').addClass('fs-nav-translate');
            $('.fs-container-fluid').addClass('nav-opened');
            
        } else {
            $('nav.fs-nav').removeClass('open-nav');
            $('ul.fs-navlist').removeClass('fs-nav-translate');
            $('.fs-container-fluid').removeClass('nav-opened');
            
        }

        

    });


});