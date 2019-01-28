(function($){
    $.fn.scrollingTo = function( opts ) {
        var defaults = {
            animationTime : 1000,
            easing : '',
            callbackBeforeTransition : function(){},
            callbackAfterTransition : function(){}
        };

        var config = $.extend( {}, defaults, opts );

        $(this).click(function(e){
            var eventVal = e;
            e.preventDefault();

            var $section = $(document).find( $(this).data('section') );
            if ( $section.length < 1 ) {
                return false;
            };

            if ( $('html, body').is(':animated') ) {
                $('html, body').stop( true, true );
            };

            var scrollPos = $section.offset().top;

            if ( $(window).scrollTop() == scrollPos ) {
                return false;
            };

            config.callbackBeforeTransition(eventVal, $section);

            $('html, body').animate({
                'scrollTop' : (scrollPos+'px' )
            }, config.animationTime, config.easing, function(){
                config.callbackAfterTransition(eventVal, $section);
            });
        });
    };
}(jQuery));



jQuery(document).ready(function(){
	"use strict";
	new WOW().init();


    (function(){
     jQuery('.smooth-scroll').scrollingTo();
    }());
    $('[data-submenu]').submenupicker();

    $('#main-contact-formx').submit(function(e) {
        e.preventDefault();
        var postdata = $('#main-contact-formx').serialize();
        requestw.send_email_purchace(postdata);
      });
    $('.tesreadmore').on('click', function(){
        $(this).parents('.item').find('.moretes').removeClass('hide');
        $(this).addClass('hide');
    });

    $('.navbar-nav .scroll a').on('click', function(){
        $('.scroll').removeClass('active');
        $(this).parent('.scroll').addClass('active');
    });

    $('.modal-body').on('click', function(){
        alert();
    });
    // $('#cnt-me').on('click', function(){
    //     $('.meshim_widget_widgets_BorderOverlay').click();
    //     $('.meshim_widget_widgets_BorderOverlay').trigger( "click" );
    // });


    $(".nav").find(".scroll").on("click", "a", function () {
        $('.navbar-collapse.in').collapse('hide');
    });
    $('.nav .dropdown').on('click', function(){
        setTimeout(function(){ 
            var dx = $('.navbar-collapse');
            dx.scrollTop(dx.prop("scrollHeight"));
         }, 10);
    });
    $('.dropdown-submenu a').on('click', function(){
        setTimeout(function(){ 
            var dx = $('.navbar-collapse');
            dx.scrollTop(dx.prop("scrollHeight"));
         }, 10);
    });
});




$(document).ready(function(){

    $(window).scroll(function () {
        if ($(window).scrollTop() > 50) {
            $(".navbar-brand a").css("color","#fff");
            $("#top-bar").removeClass("animated-header");
        } else {
            $(".navbar-brand a").css("color","inherit");
            $("#top-bar").addClass("animated-header");
        }
    });

    $("#clients-logo").owlCarousel({
 
        itemsCustom : false,
        pagination : false,
        items : 5,
        autoplay: true,

    })

});



// fancybox
$(".fancybox").fancybox({
    padding: 0,

    openEffect : 'elastic',
    openSpeed  : 450,

    closeEffect : 'elastic',
    closeSpeed  : 350,

    closeClick : true,
    helpers : {
        title : { 
            type: 'inside' 
        },
        overlay : {
            css : {
                'background' : 'rgba(0,0,0,0.8)'
            }
        }
    }
});






 




