(function($) {
    "use strict";

    jQuery(document).ready(function($) {

        /*====  couneter active =====*/
        $('.homepage-sec1, .home_right_admin').on('inview', function(event, visible, visiblePartX, visiblePartY) {
            if (visible) {
                $(this).find('.single-count, .s_count').each(function() {
                    var $this = $(this);
                    $({
                        Counter: 0
                    }).animate({
                        Counter: $this.text()
                    }, {
                        duration: 5000,
                        easing: 'swing',
                        step: function() {
                            $this.text(Math.ceil(this.Counter));
                        }
                    });
                });
                $(this).off('inview');
            }
        });

        /*====  Navbar custom js =====*/
        // Variables All
        var dnl = $(".dash-navbar-left"),
            marLft282     = $(".mar_lft_282, .footer-area"),
            alerPrimary   = $(".alert-close, .foo-table td i"),
            dnlBtnToggle  = $(".dnl-btn-toggle"),
            dnlBtnCollapse = $(".dnl-btn-collapse"),
            contentWrap    = $(".content-wrap"),
            btnNiceSelect  = $(".btn-nice-select"),
            perfectScrollVertical = $(".scrollbar-active, .scrolbar-horizontal"),
            panelPageBtnswitch = $(".panel-right-sec4 input"),
            contentWrapEffect = contentWrap.data("effect"),
            windowHeight = $(window).height() - 61,
            windowWidth = $(window).width() < 767;

        // Functions
        var htmlBody = $('html, body');
        function cwShowOverflow() {
            if (windowWidth) {
                contentWrap.css({
                    height: windowHeight,
                    overflow: 'hidden'
                });
                htmlBody.css('overflow', 'inherit');
            }
        }

        function cwHideOverflow() {
            if (windowWidth) {
                contentWrap.css({
                    height: 'auto',
                    overflow: 'auto'
                });
                htmlBody.css('overflow', 'auto');
            }
        }

        function dnlShow() {
            dnl.addClass("dnl-show").removeClass("dnl-hide");
            contentWrap.addClass(contentWrapEffect);
            cwShowOverflow();
            dnlBtnToggle.find("span").removeClass("fa-bars").addClass("fa-arrow-left");
        }

        function dnlHide() {
            dnl.removeClass("dnl-show").addClass("dnl-hide");
            contentWrap.removeClass(contentWrapEffect);
            cwHideOverflow();
            dnlBtnToggle.find("span").removeClass("fa-arrow-left").addClass("fa-bars");
        }

        // Toggle the edge navbar left
        dnl.addClass("dnl-hide");
        dnlBtnToggle.on('click',function() {
            if (dnl.hasClass("dnl-hide")) {
                dnlShow();
            } else {
                dnlHide();
            }
        });

        // Collapse the dash navbar left subnav
        dnlBtnCollapse.on('click',function(e) {
            e.preventDefault();
            if (dnl.hasClass("dnl-collapsed")) {
                dnl.removeClass("dnl-collapsed");
                contentWrap.removeClass("dnl-collapsed");
                $(this).find(".dnl-link-icon").removeClass("fa-arrow-right").addClass("fa-arrow-left");
            } else {
                dnl.addClass("dnl-collapsed");
                contentWrap.addClass("dnl-collapsed");
                $(this).find(".dnl-link-icon").removeClass("fa-arrow-left").addClass("fa-arrow-right");
            }
        });

        // Close left navbar when top navbar opens
        var navbarToggle = $('.navbar-toggle');
        var navbarCollapse = $('.navbar-collapse');
        
        navbarToggle.on('click',function() {
            if ($(this).hasClass('collapsed')) {
                dnlHide();
            }
        });

        // Close top navbar when left navbar opens
        dnlBtnToggle.on('click',function() {
            navbarToggle.addClass('collapsed');
            navbarCollapse.removeClass('in');
        });

        // Code credit: https://tr.im/CZzf4
        function isMobile() {
            try { document.createEvent("TouchEvent"); return true; } catch (e) { return false; }
        }

        // Swipe the navbar
        if (isMobile() == true) {
            $(window).swipe({
                swipeRight: function() {
                    dnlShow();
                    navbarCollapse.removeClass('in');
                },
                swipeLeft: function() {
                    dnlHide();
                },
                threshold: 75
            });
        }

        // Collapse navbar on content click
        contentWrap.on('click',function() {
            dnlHide();
        });

        //responsive maincontent and side navbar
        dnlBtnToggle.on('click', function () {
            marLft282.toggleClass('right');
        })

        //nice select button active
        if ($.fn.niceSelect) {
            btnNiceSelect.niceSelect();
        }

        // perfect scrollbar vertical
        if ($.fn.perfectScrollbar) {
            perfectScrollVertical.perfectScrollbar();
        }

        // panel page btn switch toggle class
        panelPageBtnswitch.on('click', function(){
            $('.panel-right-sec4-item p').toggleClass('hide');
        })

        alerPrimary.on('click', function(){
            $(this).closest('.alert-single-item, .foo-table tr').toggleClass('close');
        })



    }); // document ready function end

    /*====  Window Load Function =====*/
    jQuery(window).on('load',function() {
    /*====  preloader js =====*/
      setTimeout(function() {
            $('body').addClass('loaded');
        }, 500);
    });

}(jQuery));