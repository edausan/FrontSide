$(function() {

    var nav    = $('nav.fs-nav');
    var navbar = $('nav.fs-nav ul');
    var subNav = $('nav.fs-nav .sub-nav');

    $(window).scroll(function() {
        var winScroll = $(this).scrollTop();

        if (winScroll >= 1) {
            nav.addClass('fixed');
        } else {
            nav.removeClass('fixed');
        }
    });



});