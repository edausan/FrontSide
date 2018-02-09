$(function() {

    $(document).on('click', '#img-wrapper', function() {

        $('#fileToUpload').click();

        if ($('#upimg').attr('src')) {
            $('#img-wrapper').children('span.fs-icon').addClass('sendToBack');
        } else {
            $('#img-wrapper').children('span.fs-icon').removeClass('sendToBack');
        }

    });

    $(document).on('mouseover', '#img-wrapper', function() {
        $(this).children('span').removeProp('hidden');
    });

    $('.nav-list').hide();


    $(document).on('click', '.navbar-item', function() {

        var id = $(this).attr('id');

        $(this).toggleClass('active notActive');

        if ($(this).hasClass('active')) {

            $(this).children('#'+id+'').show();
            $(this).children('#'+id+'').addClass('show');
            

            setTimeout(function() {
                $(document).find('ul#'+id+'').find('button').removeAttr('disabled');
            }, 300);
            
            
        } else {

            $(this).children('#'+id+'').removeClass('show');

            setTimeout(function () {
                $(document).find('ul#'+id+'').hide();
            }, 260);
        }

    });

    $('.fs-row').click(function() {

        if ($('.navbar-item').hasClass('active')) {
            $('.nav-list').removeClass('show');
            
            

            setTimeout(function () {
                $(document).find('ul.nav-list').hide();
                $(document).find('.navbar-item').removeClass('active').addClass('notActive');
            }, 250);
        }
    });

    

});