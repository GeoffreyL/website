;(function($) {
    "use strict";

    var nav_offset_top = $('.header_area').offset().top;
    function stickyHeader() {
        if ($('.header_area').length) {
            var strickyScrollPos = nav_offset_top;
            if($(window).scrollTop() > strickyScrollPos) {
                $('.header_area').removeClass('fadeIn animated');
                $('.header_area').addClass('stricky-fixed fadeInDown animated')
            }
            else if($(window).scrollTop() <= strickyScrollPos) {
                $('.header_area').removeClass('stricky-fixed fadeInDown animated');
                $('.header_area').addClass('slideIn animated')
            }
        }
    }

    $(window).on('scroll', function () {
        stickyHeader()
    });

    $(".skill_item_inner").each(function() {
        $(this).waypoint(function() {
            var progressBar = $(".progress-bar");
            progressBar.each(function(indx){
                $(this).css("width", $(this).attr("aria-valuenow") + "%")
            })
        }, {
            triggerOnce: true,
            offset: 'bottom-in-view'

        });
    });

    function our_gallery(){
        if ( $('.portfolio_area').length ){
            $(".portfolio_list_inner").imagesLoaded( function() {
                $(".portfolio_list_inner").isotope({
                    itemSelector: ".col-md-4",
                });
            });
            $(".porfolio_menu ul li").on('click',function(){
                $(".porfolio_menu ul li").removeClass("active");
                $(this).addClass("active");

                var selector = $(this).attr("data-filter");
                $(".portfolio_list_inner").isotope({
                    filter: selector,
                    animationOptions: {
                        duration: 450,
                        easing: "linear",
                        queue: false,
                    }
                });
                return false;
            });
        }
    }
    our_gallery();

    $('a[href*="#"]')
        .not('[href="#"]')
        .not('[href="#0"]')
        .click(function(event) {
            if (
                location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
                &&
                location.hostname == this.hostname
            ) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    event.preventDefault();
                    $('html, body').animate({
                        scrollTop: target.offset().top
                    }, 1000, function() {});
                }
            }
        });

    $(window).load(function() {
        $('#preloader_spinner').fadeOut();
        $('#preloader').delay(150).fadeOut('slow');
        $('body').delay(150).css({'overflow':'visible'})
    })

    // $('.portfolio_item').click(function() {
    //     var $modal = $('#portfolio_modal');
    //     $modal.find('.modal-title').html($(this).data('title'));
    //     $modal.find('.portfolio_modal_content').hide();
    //     $modal.find('.'+$(this).data('selector')).show();
    //     $modal.modal('show');
    // });

})(jQuery)