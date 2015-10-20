$(document).ready(function() {

    ///////////// Home page What We Do Toggle  /////////////
    $(".what-we-do span.arrow").on('click', function() {
        if ($(this).hasClass("up-arrow")) {
            $(this).removeClass("up-arrow").addClass("arrow");
            $("#what-wedo-wrapper").slideToggle();
        } else {
            $(this).removeClass("arrow").addClass("up-arrow");
            $("#what-wedo-wrapper").slideToggle();
            $(".we-do a.close").on('click', function() {
                $("#what-wedo-wrapper").slideUp();
                $(".what-we-do span").removeClass("up-arrow").addClass("arrow");
            });
        }
    });
    ///end///


    ///////////// Home and Contact Us pages Bullets show/hide /////////////
    $(".icon,.pointer").on('click', function(e) {
        $(".icon,.pointer").not(this).next().fadeOut();
        $(".icon,.pointer").not(this).removeClass("minusIcon");
        $(this).next().fadeToggle();
        e.stopPropagation();
    });

    $('.icon').hover(function(e) {
        $(this).next().fadeIn();
        $(this).addClass("minusIcon");

    }, function() {

    });

    $(".location").hover(function() {
        $(this).children('.address').fadeIn();

    }, function() {
        $(this).children('.address').fadeOut();
    });

    /*    $('.location').mouseenter(function(){
        $(this).parent().children('.address').show();
        
    });

   
    $(".location").mouseout(function(){
        $(this).children(".address").fadeOut();
    });
*/




    $('.services').hover(function() {}, function(e) {
        $(".services-wrapper,.address").fadeOut();
        $(".pointer").removeClass("minusIcon");
        $(".icon").removeClass("minusIcon");

    });


    $(document).click(function() {
        $(".services-wrapper,.address").fadeOut();
        $(".pointer").removeClass("minusIcon");
        $(".icon").removeClass("minusIcon");

    });

    $(".services-wrapper, .location").click(function(e) {
        e.stopPropagation();
    });

    // Escape Key code  
    $(document).keyup(function(e) {
        if (e.keyCode == 27) {
            $(".services-wrapper, .address").fadeOut();
            $(".icon, .pointer").removeClass("minusIcon");
            //event.preventDefault();
        }
    });

    $(".icon,.pointer").not(".head-quarter").on('click', function(e) {
        $(this).toggleClass("minusIcon");
        e.stopPropagation();
    });
    $(".closeIcon").click(function(e) {
        $(".services-wrapper, .address").fadeOut();
        $(".icon,.pointer").removeClass("minusIcon");
        e.stopPropagation();
    });

    ///end///


    ///////////// Scroll down for header & footer sticky /////////////
    $(window).scroll(function() {
        var winHeight = $(window).height();
        var topScroll = $(window).scrollTop();
        var navPadding = $('header ul.navbar-nav > li > a');
        //alert(topScroll);
        if (topScroll > 10) {
            $('header').addClass("header-small");
            $('header a.logo1').removeClass("logo1").addClass("logo-small");
            $(navPadding).addClass("nav-padding");
            $('footer').addClass("footer-fixed");
        } else {
            $('header').removeClass("header-small");
            $('header a.logo-small').removeClass("logo-small").addClass("logo1");
            $(navPadding).removeClass("nav-padding");
            $('footer').removeClass("footer-fixed");
        }

    });
    ///end///


    ///////////// Scroll down for more /////////////
    $("#docDown").on('click', function() {
        $(".scroll-up").show();
        //$(this).css(top: "20px");
        var h = $("#bottomCarouselWrapper").offset().top - 200;
        $("body,html").animate({
            scrollTop: h
        }, 1000);
    });
    $(document).scroll(function() {
        var scroller = $("#docDown");
        var docPos = $(document).scrollTop();
        docPos > 50 ? scroller.fadeOut(400) : scroller.fadeIn(400);
    });
    ///end///

    /*$(".scroll-up").on('click', function() {
        $(".scroll-down").show();
        $(this).hide();
        $("body,html").animate({
            scrollTop: '0'
        }, 1000);
    });*/

    $(".location ").click(function() {
        $(".location ").css("z-index", "100");
        $(this).css("z-index", "99");
    });


    ///////////// Team page Crousal script /////////////
    var defaultCss = {
        marginTop: 40,
        marginRight: -5,
        marginLeft: -5,
        opacity: 0.5
    };
    var selectedCss = {
        marginTop: 0,
        marginRight: 50,
        opacity: 1
    };
    var aniOpts = {
        queue: false,
        duration: 1500
        //easing: 'elastic'
    };
    var $car = $('#slideInnerContainer');
    $car.find('img').css('zIndex', 1).css(defaultCss);
    $car.find('img').eq(3).css('zIndex', 2).css(selectedCss);
    $car.carouFredSel({
        circular: true,
        infinite: false,
        width: '100%',
        height: '500',
        items: 7,
        prev: '#prev',
        next: '#next',
        auto: true,
        scroll: {
            items: 1,
            duration: 1000,
            //easing: 'elastic',
            onBefore: function(data) {
                data.items.old.eq(3).find('img').css('zIndex', 1).animate(defaultCss, aniOpts);
                data.items.old.eq(3).find('img').next().hide();
                data.items.visible.eq(3).find('img').css('zIndex', 2).animate(selectedCss, aniOpts);
                data.items.visible.eq(3).find('img').next().show();
            }
        }
    });
    ///end///


    ///////////// Home page Bottom Slider script /////////////
    function openItem($item) {
        $item.find('img[src*="-grey"]').stop().fadeTo(1500, 0);
        $item.addClass('selected');
        $item.stop().animate({
            height: 363
        });
        $('body').css('backgroundColor', $item.css('backgroundColor'));
    }
    $(function() {
        $('#carousel').carouFredSel({
            circular: true,
            infinite: false,
            width: '100%',
            height: 330,
            items: 4,
            auto: false,
            prev: '#prev',
            next: '#next',
            scroll: {
                items: 2,
                duration: 1000,
                easing: 'quadratic',
                onBefore: function(data) {
                    //   data.items.old.removeClass( 'selected' );
                    data.items.old.css("opacity", "0.3");
                    openItem(data.items.visible.eq(2).css("opacity", "1"));
                    openItem(data.items.visible.eq(1).css("opacity", "1"));
                    openItem(data.items.visible.eq(3).css("opacity", "0.3"));
                },
                onAfter: function(data) {
                    //   openItem( data.items.visible.eq( 3 ).css("opacity","0.3") );
                }
            },
            onCreate: function(data) {
                openItem(data.items.css("opacity", "0.3"));
                openItem(data.items.eq(1).css("opacity", "1"));
                openItem(data.items.eq(2).css("opacity", "1"));
            }
        });
    });
    //Loader functionality on home page//
    /*$('.big-slide, .medium-slide').addClass('loader');
    $('.services').addClass('loader');
    $('.slider-titles').addClass('loader');
    if ($('.big-slide, .medium-slide').width() < 768) {
        $('.loadingIcon').addClass('hide');
    }
    $(window).load(function() {
        $('.big-slide,.medium-slide').removeClass('loader');
        if (true) {
            $('.loadingIcon').addClass('hide');
        }
        $('.services').removeClass('loader');
        $('.slider-titles').removeClass('loader');
    });*/
    //end of loader//
    ///end///
});