"use strict";



var lastScroll = 0;



//check for browser os



var isMobile = false;



var isiPhoneiPad = false;



if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {

    isMobile = true;


}


if (/iPhone|iPad|iPod/i.test(navigator.userAgent)) {

    isiPhoneiPad = true;
}


function pad(d) {



    return (d < 10) ? '0' + d.toString() : d.toString();

}

function isIE() {



    var ua = window.navigator.userAgent;



    var msie = ua.indexOf("MSIE ");



    if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./))  // If Internet Explorer, return version number



    {



        return true;



    } else  // If another browser, return 0



    {



        return false;



    }

}


$(window).on("scroll", init_scroll_navigate);



function init_scroll_navigate() {


    /*==============================================================



     One Page Main JS - START CODE



     =============================================================*/



    var menu_links = $(".navbar-nav li a");



    var scrollPos = $(document).scrollTop();



    scrollPos = scrollPos + 60;



    menu_links.each(function () {



        var currLink = $(this);



        var hasPos = currLink.attr("href").indexOf("#");



        if (hasPos > -1) {



            var res = currLink.attr("href").substring(hasPos);



            if ($(res).length > 0) {



                var refElement = $(res);



                if (refElement.offset().top <= scrollPos && refElement.offset().top + refElement.height() > scrollPos) {



                    menu_links.not(currLink).removeClass("active");



                    currLink.addClass("active");



                } else {



                    currLink.removeClass("active");



                }



            }



        }



    });







    /*==============================================================*/



    //background color slider Start



    /*==============================================================*/



    var $window = $(window),



            $body = $('.bg-background-fade'),



            $panel = $('.color-code');



    var scroll = $window.scrollTop() + ($window.height() / 2);



    $panel.each(function () {



        var $this = $(this);



        if ($this.position().top <= scroll && $this.position().top + $this.height() > scroll) {



            $body.removeClass(function (index, css) {



                return (css.match(/(^|\s)color-\S+/g) || []).join(' ');



            });



            $body.addClass('color-' + $(this).data('color'));



        }



    });







    /* ===================================



     sticky nav Start



     ====================================== */



    var headerHeight = $('nav').outerHeight();



    if (!$('header').hasClass('no-sticky')) {



        if ($(document).scrollTop() >= headerHeight) {



            $('header').addClass('sticky');







        } else if ($(document).scrollTop() <= headerHeight) {



            $('header').removeClass('sticky');



            setTimeout(function () {



                setPageTitleSpace();



            }, 500);



        }



        SetMegamenuPosition();



    }







    /* ===================================



     header appear on scroll up



     ====================================== */



    var st = $(this).scrollTop();



    if (st > lastScroll) {



        $('.sticky').removeClass('header-appear');



        //  $('.dropdown.on').removeClass('on').removeClass('open').find('.dropdown-menu').fadeOut(100);



    } else



        $('.sticky').addClass('header-appear');



    lastScroll = st;



    if (lastScroll <= headerHeight)



        $('header').removeClass('header-appear');

}


/*==============================================================*/



//Search - START CODE



/*==============================================================*/



function ScrollStop() {



    return false;

}



function ScrollStart() {



    return true;

}

















/* ===================================



 START READY



 ====================================== */



$(document).ready(function () {


    "use strict";


    // Active class to current menu for only html



    var pgurl = window.location.href.substr(window.location.href.lastIndexOf("/") + 1);



    var $hash = window.location.hash.substring(1);


    if ($hash) {



        $hash = "#" + $hash;



        pgurl = pgurl.replace($hash, "");



    } else {



        pgurl = pgurl.replace("#", "");



    }


    $(".nav li a").each(function () {



        if ($(this).attr("href") == pgurl || $(this).attr("href") == pgurl + '.html') {



            $(this).parent().addClass("active");



            $(this).parents('li.dropdown').addClass("active");



        }


    });



    $(window).scroll(function () {



        if ($(this).scrollTop() > 150)



            $('.scroll-top-arrow').fadeIn('slow');



        else



            $('.scroll-top-arrow').fadeOut('slow');



    });



    //Click event to scroll to top



    $(document).on('click', '.scroll-top-arrow', function () {



        $('html, body').animate({scrollTop: 0}, 800);



        return false;



    });


    $("ul.mega-menu-full").each(function (idx, elm) {



        var megaMenuWidth = 0;



        $(this).children('li').each(function (idx, elm) {



            var LIheight = 0;



            megaMenuWidth += $(this).outerWidth();



        });



        $(this).width(megaMenuWidth + 95);



        megaMenuWidth = 0;



    });


    /* ===================================

     left nav

     ====================================== */



    $(document).on('click', '.right-menu-button', function (e) {



        $('body').toggleClass('left-nav-on');



    });





    /*==============================================================*/



    //    hamburger menu 



    /*==============================================================*/



    $(document).on('click', '.btn-hamburger', function () {



        $('.hamburger-menu').toggleClass('show-menu');



        $('body').removeClass('show-menu');



    });



    /*==============================================================*/



    //sidebar nav open



    /*==============================================================*/



    $(document).on('click', '#mobileToggleSidenav', function () {



        $(this).closest('nav').toggleClass('sidemenu-open');



    });



    $('.atr-nav').on("click", function () {



        $(".atr-div").append("<a class='close-cross' href='#'>X</a>");



        $(".atr-div").animate({



            width: "toggle"



        });



    });



    $('.close-cross').on("click", function () {



        $(".atr-div").hide();



    });



    var menuRight = document.getElementById('cbp-spmenu-s2'),



            showRightPush = document.getElementById('showRightPush'),



            body = document.body;



    if (showRightPush) {



        showRightPush.onclick = function () {



            classie.toggle(this, 'active');



            if (menuRight)



                classie.toggle(menuRight, 'cbp-spmenu-open');



        };



    }





    var test = document.getElementById('close-pushmenu');



    if (test) {



        test.onclick = function () {



            classie.toggle(this, 'active');



            if (menuRight)



                classie.toggle(menuRight, 'cbp-spmenu-open');



        };



    }







    //blog page header animation



    $(".blog-header-style1 li").hover(function () {



        $('.blog-header-style1 li.blog-column-active').removeClass('blog-column-active');



        $(this).addClass('blog-column-active');



    }, function () {



        $(this).removeClass('blog-column-active');



        $('.blog-header-style1 li:first-child').addClass('blog-column-active');



    });







    /*==============================================================*/



    //big menu open close start



    /*==============================================================*/



    $('.big-menu-open').on("click", function () {



        $('.big-menu-right').addClass("open");



    });







    $('.big-menu-close').on("click", function () {



        $('.big-menu-right').removeClass("open");



    });





    $("input.search-input").on("keypress", function (event) {



        if (event.which == 13 && !isMobile) {



            $("button.search-button").trigger("click");



            event.preventDefault();



        }



    });





    $("input.search-input").on("keyup", function (event) {



        if ($(this).val() == null || $(this).val() == "") {



            $(this).css({"border": "none", "border-bottom": "2px solid red"});



        } else {



            $(this).css({"border": "none", "border-bottom": "2px solid rgba(255,255,255,0.5)"});



        }



    });


    $(document).on("click", '.navbar .navbar-collapse a.dropdown-toggle, .accordion-style1 .panel-heading a, .accordion-style2 .panel-heading a, .accordion-style3 .panel-heading a, .toggles .panel-heading a, .toggles-style2 .panel-heading a, .toggles-style3 .panel-heading a, a.carousel-control, .nav-tabs a[data-toggle="tab"], a.shopping-cart', function (e) {



        e.preventDefault();



    });



    $(document).on('touchstart click', 'body', function (e) {



        if ($(window).width() < 992) {



            if (!$('.navbar-collapse').has(e.target).is('.navbar-collapse') && $('.navbar-collapse').hasClass('show') && !$(e.target).hasClass('navbar-toggle')) {



                $('.navbar-collapse').collapse('hide');



            }



        } else {



            if (!$('.navbar-collapse').has(e.target).is('.navbar-collapse') && $('.navbar-collapse').hasClass('show')) {



                $('.navbar-collapse').find('a.dropdown-toggle').addClass('collapsed');



                $('.navbar-collapse').find('ul.dropdown-menu').removeClass('show');



                $('.navbar-collapse a.dropdown-toggle').removeClass('active');



            }



        }



    });



    $('.navbar-collapse a.dropdown-toggle').on('touchstart', function (e) {



        $('.navbar-collapse a.dropdown-toggle').not(this).removeClass('active');



        if ($(this).hasClass('active'))



            $(this).removeClass('active');



        else



            $(this).addClass('active');



    });



    $('button.navbar-toggle').on("click", function (e) {



        if (isMobile) {



            $(".cart-content").css('opacity', '0');



            $(".cart-content").css('visibility', 'hidden');



        }



    });



    $('a.dropdown-toggle').on("click", function (e) {



        if (isMobile) {



            $(".cart-content").css('opacity', '0');



            $(".cart-content").css('visibility', 'hidden');



        }



    });



    $(document).on('touchstart click', '.navbar-collapse [data-toggle="dropdown"]', function (event) {







        var $innerLinkLI = $(this).parents('ul.navbar-nav').find('li.dropdown a.inner-link').parent('li.dropdown');



        if (!$(this).hasClass('inner-link') && !$(this).hasClass('dropdown-toggle') && $innerLinkLI.hasClass('show')) {



            $innerLinkLI.removeClass('show');



        }



        var target = $(this).attr('target');



        if ($(window).width() <= 991 && $(this).attr('href') && $(this).attr('href').indexOf("#") <= -1 && !$(event.target).is('i')) {



            if (event.ctrlKey || event.metaKey) {



                window.open($(this).attr('href'), "_blank");



                return false;



            } else if (!target)



                window.location = $(this).attr('href');



            else



                window.open($(this).attr('href'), target);







        } else if ($(window).width() > 991 && $(this).attr('href').indexOf("#") <= -1) {



            if (event.ctrlKey || event.metaKey) {



                window.open($(this).attr('href'), "_blank");



                return false;



            } else if (!target)



                window.location = $(this).attr('href');



            else



                window.open($(this).attr('href'), target);



        } else if ($(window).width() <= 991 && $(this).attr('href') && $(this).attr('href').length > 1 && $(this).attr('href').indexOf("#") >= 0 && $(this).hasClass('inner-link')) {



            $(this).parents('ul.navbar-nav').find('li.dropdown').not($(this).parent('.dropdown')).removeClass('show');



            if ($(this).parent('.dropdown').hasClass('show')) {



                $(this).parent('.dropdown').removeClass('show');



            } else {



                $(this).parent('.dropdown').addClass('show');



            }



            $(this).toggleClass('active');



        }



    });




    /*==============================================================*/



    //Set Resize Header Menu - START CODE



    /*==============================================================*/



    $('nav.full-width-pull-menu ul.panel-group li.dropdown a.dropdown-toggle').on("click", function (e) {



        if ($(this).parent('li').find('ul.dropdown-menu').length > 0) {



            if ($(this).parent('li').hasClass('show')) {



                $(this).parent('li').removeClass('show');



            } else {



                $(this).parent('li').addClass('show');



            }



        }



    });



    /*==============================================================*/



    //accordion  - START CODE



    /*==============================================================*/



    $('.accordion-style1 .collapse').on('show.bs.collapse', function () {



        var id = $(this).attr('id');



        $('a[href="#' + id + '"]').closest('.panel-heading').addClass('active-accordion');



        $('a[href="#' + id + '"] .panel-title span').html('<i class="ti-minus"></i>');



    });



    $('.accordion-style1 .collapse').on('hide.bs.collapse', function () {



        var id = $(this).attr('id');



        $('a[href="#' + id + '"]').closest('.panel-heading').removeClass('active-accordion');



        $('a[href="#' + id + '"] .panel-title span').html('<i class="ti-plus"></i>');



    });



    $(document).on('click', '.nav.navbar-nav a.inner-link', function (e) {



        $(this).parents('ul.navbar-nav').find('a.inner-link').removeClass('active');



        var $this = $(this);



        $(this).parents('.navbar-collapse').collapse('hide');







        setTimeout(function () {



            $this.addClass('active');



        }, 1000);



    });



    $('.accordion-style2 .collapse').on('show.bs.collapse', function () {



        var id = $(this).attr('id');



        $('a[href="#' + id + '"]').closest('.panel-heading').addClass('active-accordion');



        $('a[href="#' + id + '"] .panel-title').find('i').addClass('fa-angle-up').removeClass('fa-angle-down');



    });



    $('.accordion-style2 .collapse').on('hide.bs.collapse', function () {



        var id = $(this).attr('id');



        $('a[href="#' + id + '"]').closest('.panel-heading').removeClass('active-accordion');



        $('a[href="#' + id + '"] .panel-title').find('i').removeClass('fa-angle-up').addClass('fa-angle-down');



    });



    $('.accordion-style3 .collapse').on('show.bs.collapse', function () {



        var id = $(this).attr('id');



        $('a[href="#' + id + '"]').closest('.panel-heading').addClass('active-accordion');



        $('a[href="#' + id + '"] .panel-title').find('i').addClass('fa-angle-up').removeClass('fa-angle-down');



    });



    $('.accordion-style3 .collapse').on('hide.bs.collapse', function () {



        var id = $(this).attr('id');



        $('a[href="#' + id + '"]').closest('.panel-heading').removeClass('active-accordion');



        $('a[href="#' + id + '"] .panel-title').find('i').removeClass('fa-angle-up').addClass('fa-angle-down');



    });





    /*==============================================================*/



    //demo button  - START CODE



    /*==============================================================*/



    /*var $buythemediv = '<div class="buy-theme alt-font md-display-none"><a href="https://themeforest.net/item/pofo-creative-agency-corporate-and-portfolio-multipurpose-template/20645944?ref=themezaa" target="_blank"><i class="ti-shopping-cart"></i><span>Buy Theme</span></a></div><div class="all-demo alt-font md-display-none"><a href="mailto:info@themezaa.com?subject=POFO - Creative Agency, Corporate and Portfolio Multi-purpose Template - Quick Question"><i class="ti-email"></i><span>Quick Question?</span></a></div>';



    $('body').append($buythemediv);*/







    $(document).on("touchstart", ".sidebar-wrapper", function () {



        clearOpen();



    });



    var getNav = $("nav.navbar.bootsnav"), getIn = getNav.find("ul.nav").data("in"), getOut = getNav.find("ul.nav").data("out");



    function clearOpen() {



        $('li.dropdown').removeClass("on").removeClass("show");



        $(".dropdown-menu").stop().fadeOut('fast');



        $(".dropdown-menu").removeClass(getIn);



        $(".dropdown-menu").addClass(getOut);



    }



});



/* ===================================



 END READY



 ====================================== */


