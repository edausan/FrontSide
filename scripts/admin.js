$(function() {

    $(document).on('focus', '.field-wrapper input', function() {
        $(this).parent('.field-wrapper').addClass('focus');
    })
    
    $(document).on('blur', '.field-wrapper input', function() {
        $(this).parent('.field-wrapper').removeClass('focus');
    });

});