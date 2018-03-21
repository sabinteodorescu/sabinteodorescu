$(function() {
    $('a[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top
                }, 1000);
                return false;
            }
        }
    });

    $(".lmbutton").click(function(e) {
        e.preventDefault();
        $("body").toggleClass("lightMode");
        if($("body").hasClass("lightMode")) {
            $.cookie('theme', 'white');
        } else {
            $.cookie('theme', 'dark');
        }
    });

    $(".enbutton").click(function(e) {
        e.preventDefault();
        $("body").toggleClass("en");
        if($("body").hasClass("en")) {
            $.cookie('language', 'en');
        } else {
            $.removeCookie('language', 'en');
        }
        location.reload();
    });

    $(".toggle-menu").click(function() {
        $(".nav").toggleClass("open");
    })

    if($.cookie('theme') == 'white') {
        $('body').addClass('lightMode');
    }

    if($.cookie('language') != undefined && $.cookie('language') == 'en') {
        $('body').addClass('en');
    }

    $('body').addClass('loaded');
});

$(window).scroll(function(){
    if ($(window).scrollTop() > 300) {
        setTimeout(function() {
            $('.up').show();
            $(".up").addClass("wow lightSpeedIn");
        },10);
    } else {
        setTimeout(function() {
            $('.up').hide();
            $(".up").removeClass("wow lightSpeedIn");
        },10);
    }
});