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

    function admin() {
        if (window.location.href == 'http://localhost:7883/frontside.com/' || window.location.href == 'http://localhost:7883/frontside.com/home') {
            window.location.href = 'http://localhost:7883/frontside.com/admin_fs';
        } else {
            window.location.href = 'http://frontside.ml/admin_fs';
        }
    }

    $(document).bind('keydown.Alt_a',function (evt){
        admin();
    });

});