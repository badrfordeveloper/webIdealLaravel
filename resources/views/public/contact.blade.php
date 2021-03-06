<x-app page="contact" > 
    <?php
define('SITE_KEY', '6LcagDQaAAAAABNAMX7vIJCvh-wSqIJ5LXYihO1I');
define('SECRET_KEY', '6LcagDQaAAAAACuEQvYpjqFzv2KbjYcYkqQkrJMf');

?>

    <x-slot name="meta">
               <!-- title -->
        <title>{{ __('messages.title-Contact') }}</title>  
        <!-- description -->
        <meta name="description" content="{{ __('messages.description-Contact') }}">
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="url" content="{{ url('/') }}">
        <meta name="author" content="Website Ideal">
        <!-- keywords -->
        <meta name="keywords" content="création des sites web , création des applications web, référencement google, création des sites web à Casablanca, création des applications web à Casablanca, conception et la création des sites Internet, WebIdeal">
                <!-- favicon -->
        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.webp') }}">
        <link rel="apple-touch-icon" href="{{ asset('assets/images/apple-touch-icon-57x57.png') }}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/images/apple-touch-icon-72x72.png') }}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets/images/apple-touch-icon-114x114.png') }}">



    </x-slot>

 <x-slot name="css"> 

   <!--  <link rel="stylesheet" href="{{asset('assets/css/et-line-icons.css')}}" /> -->
        <link rel="stylesheet" href="{{asset('assets/css/ServicesCss/mergeAnimateBootstrapStyleResponsive.css')}}" />
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
        <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}" />
        <style type="text/css">
            .fa.x5,.fas.x5{
                font-size: 30px !important
            }
        </style>
        <!--[if IE]>
            <script src="{{ asset('assets/js/html5shiv.js') }}"></script>
        <![endif]-->
    <script type="application/ld+json">
    {
      "@context": "http://schema.org/",
      "@type": "ContactPage",
        "description":"{{ __('messages.ContactPageDescrption') }}",
        "image":"https://www.websites-ideal.com/assets/images/examples/contact-us-2993000_1920.webp",
        "name":"{{ __('messages.ContactPageName') }} ",
        "url":"{{(app()->getLocale() == 'en') ? route('contactEn', ['locale' => app()->getLocale()]) : route('contact')}}",
          "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "+212 615 564 741",
        "contactType": "customer service",
        "contactOption": ["TollFree","HearingImpairedSupported"],
        "areaServed": "MA",
        "availableLanguage": ["fr","en","Arabic"]
      },
      "sameAs": [
        "https://web.facebook.com/WebIdealTech/",
        "https://twitter.com/webideal1",
        "https://www.instagram.com/web_ideal/",
        "https://www.linkedin.com/in/web-ideal-ab71251a6/"
      ]
    }
    </script>

    <script src="https://www.google.com/recaptcha/api.js?render=<?php echo SITE_KEY; ?>"></script>
</x-slot>

<!-- start page title section --> <section class="wow fadeIn cover-background background-position-top top-space" style="background-image:url('{{ asset('assets/images/examples/contact4.webp') }}');">
    <div class="opacity-medium bg-extra-dark-gray"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 d-flex flex-column text-center justify-content-center page-title-large padding-30px-tb">
                <!-- start sub title -->
                <!-- <span class="d-block text-white-2 opacity6 alt-font margin-5px-bottom">We are awesome designer</span> -->
                <!-- end sub title -->
                <!-- start page title -->
                <h1 class="alt-font text-white-2 font-weight-600 mb-0" style="margin-top: 19px; font-size: 27pt;">{{ __('messages.breadcrumbs-contact-title') }}</h1>
                <!-- end page title -->
            </div>
        </div>
    </div>
</section>
<!-- end page title section -->
<!-- start contact info -->
<section class="wow fadeIn" data-aos="fade-up" data-aos-delay="500">
    <div class="container px-0">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-6 col-md-8 margin-eight-bottom md-margin-40px-bottom sm-margin-30px-bottom text-center last-paragraph-no-margin">
                <h5 class="alt-font font-weight-700 text-extra-dark-gray text-uppercase mb-0">{{ __('messages.contact-section-info-title') }}</h5>
            </div>
        </div>
        <div class="row">
            <!-- start contact info item -->
            <div class="col-12 col-lg-4 col-md-6 text-center md-margin-eight-bottom sm-margin-30px-bottom wow fadeInUp last-paragraph-no-margin">
                <div class="d-inline-block margin-20px-bottom">
                    <div class="bg-extra-dark-gray icon-round-medium"><i class="fa fa-map-marker-alt x5 text-white-2"></i></div>
                </div>
                <div class="text-extra-dark-gray text-uppercase text-small font-weight-600 alt-font margin-5px-bottom">{{ __('messages.contact-section-info-part1-title') }}</div>
                <p class="mx-auto">{{ __('messages.contact-section-info-part1-p') }}</p>
            </div>
            <!-- end contact info item -->
            <!-- start contact info item -->
            <div class="col-12 col-lg-4 col-md-6 text-center md-margin-eight-bottom sm-margin-30px-bottom wow fadeInUp last-paragraph-no-margin" data-wow-delay="0.2s">
                <div class="d-inline-block margin-20px-bottom">
                    <div class="bg-extra-dark-gray icon-round-medium"><i class="fas fa-phone-square x5 text-white-2"></i></div>
                </div>
                <div class="text-extra-dark-gray text-uppercase text-small font-weight-600 alt-font margin-5px-bottom">{{ __('messages.contact-section-info-part2-title') }}</div>
                <p class="mx-auto">{{ __('messages.contact-section-info-part2-p') }}</p>
            </div>
            <!-- end contact info item -->
            <!-- start contact info item -->
            <div class="col-12 col-lg-4 col-md-6 text-center sm-margin-30px-bottom wow fadeInUp last-paragraph-no-margin" data-wow-delay="0.4s">
                <div class="d-inline-block margin-20px-bottom">
                    <div class="bg-extra-dark-gray icon-round-medium"><i class="fa fa-envelope x5 text-white-2"></i></div>
                </div>
                <div class="text-extra-dark-gray text-uppercase text-small font-weight-600 alt-font margin-5px-bottom">{{ __('messages.contact-section-info-part3-title') }}</div>
                <p class="mx-auto"><a href="mailto:web.ideal.maroc@gmail.com">{!! __('messages.contact-section-info-part3-p') !!}</a></p>
            </div>
            <!-- end contact info item -->
        </div>
    </div>
</section>
<!-- end contact info section -->
<!-- start contact form -->
<section id="contact" class="wow fadeIn p-0 bg-extra-dark-gray">
    <div class="container-fluid">
        <div class="row">
            <div
                class="col-12 col-lg-6 cover-background md-height-450px sm-height-350px wow fadeIn"
                data-aos="fade-right"
                data-aos-delay="300"
                style="background: url('{{ asset('assets/images/examples/contact-us-2993000_1920.webp') }}')"
            ></div>
            <div data-aos="fade-left" data-aos-delay="300" class="col-12 col-lg-6 text-center padding-six-lr padding-five-half-tb md-padding-ten-half-tb md-padding-twelve-half-lr sm-padding-15px-lr wow fadeIn">
                <div class="text-medium-gray alt-font text-small text-uppercase margin-5px-bottom sm-margin-three-bottom">{{ __('messages.contact-section-form-subtitle') }}</div>
                <h5 class="margin-55px-bottom text-white-2 alt-font font-weight-700 text-uppercase sm-margin-ten-bottom">{{ __('messages.contact-section-form-title') }}</h5>
                <form id="project-contact-form" action="{{ (app()->getLocale() == 'en') ? route('send-formEn', ['locale' => app()->getLocale()]) : route('send-form') }}" method="post">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-12"><div id="success-project-contact-form" class="mx-0"></div></div>
                        <div class="col-12 col-lg-6"><input type="text" name="name" id="name" placeholder="{{ __('messages.contact-section-form-name') }}" class="bg-transparent border-color-medium-dark-gray medium-input" /></div>
                        <div class="col-12 col-lg-6"><input type="text" name="subject" id="subject" placeholder="{{ __('messages.contact-section-form-subject') }}" class="bg-transparent border-color-medium-dark-gray medium-input" /></div>
                        <div class="col-12 col-lg-6"><input type="text" name="phone" id="phone" placeholder="{{ __('messages.contact-section-form-phone') }}" class="bg-transparent border-color-medium-dark-gray medium-input" /></div>
                        <div class="col-12 col-lg-6"><input type="text" name="email" id="email" placeholder="{{ __('messages.contact-section-form-email') }}" class="bg-transparent border-color-medium-dark-gray medium-input" /></div>
                        <div class="col-12">
                            <textarea name="comment" id="comment" placeholder="{{ __('messages.contact-section-form-comment') }}" rows="7" class="bg-transparent border-color-medium-dark-gray medium-textarea"></textarea>
                        </div>

                        <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response" />
                        <div class="col-12 text-center"><button id="project-contact-us-button" type="submit" class="btn btn-deep-pink btn-medium margin-15px-top">{{ __('messages.contact-section-form-btn') }}</button></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- end contact form -->
<!-- start social section -->
<section class="wow fadeIn">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center social-style-1 social-icon-style-5">
                <ul class="large-icon mb-0">
                    <li>
                        <a class="facebook" href="https://www.facebook.com/WEB-IDEAL-112485187066689" target="_blank"><i class="fab fa-facebook-f"></i><span></span></a>
                    </li>
                    <li>
                        <a class="twitter" href="https://twitter.com/webideal1" target="_blank"><i class="fab fa-twitter"></i><span></span></a>
                    </li>
                    <li>
                        <a class="linkedin" href="https://www.linkedin.com/in/web-ideal-ab71251a6/" target="_blank"><i class="fab fa-linkedin-in"></i><span></span></a>
                    </li>
                    <li>
                        <a class="instagram" href="https://www.instagram.com/web_ideal/" target="_blank"><i class="fab fa-instagram"></i><span></span></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
 <!-- end social section --> 
<section class="introduction-stripe" style="position: fixed;right: 1%;bottom: 2%; z-index: 99999;width: auto; min-width: 325px;padding: 0 !important">
@if(Session::has('flash_message'))
<div class="" style="  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
<div class="alert alert-success">
<div class="">
<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
<p style="margin: 0"><b>{{ Session::get('flash_message') }}</b></p>
</div>
</div>
</div>
@endif
</section>

<x-slot name="script">
 <script>
    grecaptcha.ready(function() {
    grecaptcha.execute('<?php echo SITE_KEY; ?>', {action: 'homepage'})
    .then(function(token) {
        //console.log(token);
        document.getElementById('g-recaptcha-response').value=token;
    });
    });
</script>

 <script src="{{asset('assets/js/mergeAbout.js')}}"></script><!-- <script src="{{asset('assets/js/jquery.js')}}"></script> <script src="{{asset('assets/js/bootstrap.bundle.js')}}"></script> --> <script type="text/javascript">function SetMegamenuPosition(){if ($(window).width() > 991){setTimeout(function (){var totalHeight=$("nav.navbar").outerHeight(); $(".mega-menu").css({top: totalHeight}); if ($(".navbar-brand-top").length===0) $(".dropdown.simple-dropdown > .dropdown-menu").css({top: totalHeight});}, 200);}else{$(".mega-menu").css("top", ""); $(".dropdown.simple-dropdown > .dropdown-menu").css("top", "");}}function setPageTitleSpace(){if ($(".navbar").hasClass("navbar-top") || $("nav").hasClass("navbar-fixed-top")){if ($(".top-space").length > 0){var top_space_height=$(".navbar").outerHeight(); if ($(".top-header-area").length > 0){top_space_height=top_space_height + $(".top-header-area").outerHeight();}$(".top-space").css("margin-top", top_space_height + "px");}}}function SetResizeContent(){SetMegamenuPosition(); setPageTitleSpace();}SetResizeContent(); </script> <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> <script>AOS.init(); </script> <script>"use strict"; var lastScroll=0; var isMobile=false; var isiPhoneiPad=false; if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)){isMobile=true;}if (/iPhone|iPad|iPod/i.test(navigator.userAgent)){isiPhoneiPad=true;}function pad(d){return d < 10 ? "0" + d.toString() : d.toString();}function isIE(){var ua=window.navigator.userAgent; var msie=ua.indexOf("MSIE "); if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv:11./)){return true;}else{return false;}}$(window).on("scroll", init_scroll_navigate); function init_scroll_navigate(){var menu_links=$(".navbar-nav li a"); var scrollPos=$(document).scrollTop(); scrollPos=scrollPos + 60; menu_links.each(function (){var currLink=$(this); var hasPos=currLink.attr("href").indexOf("#"); if (hasPos > -1){var res=currLink.attr("href").substring(hasPos); if ($(res).length > 0){var refElement=$(res); if (refElement.offset().top <=scrollPos && refElement.offset().top + refElement.height() > scrollPos){menu_links.not(currLink).removeClass("active"); currLink.addClass("active");}else{currLink.removeClass("active");}}}}); var $window=$(window), $body=$(".bg-background-fade"), $panel=$(".color-code"); var scroll=$window.scrollTop() + $window.height() / 2; $panel.each(function (){var $this=$(this); if ($this.position().top <=scroll && $this.position().top + $this.height() > scroll){$body.removeClass(function (index, css){return (css.match(/(^|s)color-S+/g) || []).join(" ");}); $body.addClass("color-" + $(this).data("color"));}}); var headerHeight=$("nav").outerHeight(); if (!$("header").hasClass("no-sticky")){if ($(document).scrollTop() >=headerHeight){$("header").addClass("sticky");}else if ($(document).scrollTop() <=headerHeight){$("header").removeClass("sticky"); setTimeout(function (){setPageTitleSpace();}, 500);}SetMegamenuPosition();}var st=$(this).scrollTop(); if (st > lastScroll){$(".sticky").removeClass("header-appear");}else $(".sticky").addClass("header-appear"); lastScroll=st; if (lastScroll <=headerHeight) $("header").removeClass("header-appear");}function ScrollStop(){return false;}function ScrollStart(){return true;}$(document).ready(function (){"use strict"; var pgurl=window.location.href.substr(window.location.href.lastIndexOf("/") + 1); var $hash=window.location.hash.substring(1); if ($hash){$hash="#" + $hash; pgurl=pgurl.replace($hash, "");}else{pgurl=pgurl.replace("#", "");}$(".nav li a").each(function (){if ($(this).attr("href")==pgurl || $(this).attr("href")==pgurl + ".html"){$(this).parent().addClass("active"); $(this).parents("li.dropdown").addClass("active");}}); $(window).scroll(function (){if ($(this).scrollTop() > 150) $(".scroll-top-arrow").fadeIn("slow"); else $(".scroll-top-arrow").fadeOut("slow");}); $(document).on("click", ".scroll-top-arrow", function (){$("html, body").animate({scrollTop: 0}, 800); return false;}); $(document).on("click", ".right-menu-button", function (e){$("body").toggleClass("left-nav-on");}); $(document).on("click", "#mobileToggleSidenav", function (){$(this).closest("nav").toggleClass("sidemenu-open");}); $(".atr-nav").on("click", function (){$(".atr-div").append("<a class='close-cross' href='#'>X</a>"); $(".atr-div").animate({width: "toggle"});}); $(".close-cross").on("click", function (){$(".atr-div").hide();}); var menuRight=document.getElementById("cbp-spmenu-s2"), showRightPush=document.getElementById("showRightPush"), body=document.body; if (showRightPush){showRightPush.onclick=function (){classie.toggle(this, "active"); if (menuRight) classie.toggle(menuRight, "cbp-spmenu-open");};}var test=document.getElementById("close-pushmenu"); if (test){test.onclick=function (){classie.toggle(this, "active"); if (menuRight) classie.toggle(menuRight, "cbp-spmenu-open");};}$(".big-menu-open").on("click", function (){$(".big-menu-right").addClass("open");}); $(".big-menu-close").on("click", function (){$(".big-menu-right").removeClass("open");}); $(document).on( "click", '.navbar .navbar-collapse a.dropdown-toggle, .accordion-style1 .panel-heading a, .accordion-style2 .panel-heading a, .accordion-style3 .panel-heading a, .toggles .panel-heading a, .toggles-style2 .panel-heading a, .toggles-style3 .panel-heading a, a.carousel-control, .nav-tabs a[data-toggle="tab"], a.shopping-cart', function (e){e.preventDefault();}); $(document).on("touchstart click", "body", function (e){if ($(window).width() < 992){if (!$(".navbar-collapse").has(e.target).is(".navbar-collapse") && $(".navbar-collapse").hasClass("show") && !$(e.target).hasClass("navbar-toggle")){$(".navbar-collapse").collapse("hide");}}else{if (!$(".navbar-collapse").has(e.target).is(".navbar-collapse") && $(".navbar-collapse").hasClass("show")){$(".navbar-collapse").find("a.dropdown-toggle").addClass("collapsed"); $(".navbar-collapse").find("ul.dropdown-menu").removeClass("show"); $(".navbar-collapse a.dropdown-toggle").removeClass("active");}}}); $(".navbar-collapse a.dropdown-toggle").on("touchstart", function (e){$(".navbar-collapse a.dropdown-toggle").not(this).removeClass("active"); if ($(this).hasClass("active")) $(this).removeClass("active"); else $(this).addClass("active");}); $("button.navbar-toggle").on("click", function (e){if (isMobile){$(".cart-content").css("opacity", "0"); $(".cart-content").css("visibility", "hidden");}}); $("a.dropdown-toggle").on("click", function (e){if (isMobile){$(".cart-content").css("opacity", "0"); $(".cart-content").css("visibility", "hidden");}}); $(document).on("touchstart click", '.navbar-collapse [data-toggle="dropdown"]', function (event){var $innerLinkLI=$(this).parents("ul.navbar-nav").find("li.dropdown a.inner-link").parent("li.dropdown"); if (!$(this).hasClass("inner-link") && !$(this).hasClass("dropdown-toggle") && $innerLinkLI.hasClass("show")){$innerLinkLI.removeClass("show");}var target=$(this).attr("target"); if ($(window).width() <=991 && $(this).attr("href") && $(this).attr("href").indexOf("#") <=-1 && !$(event.target).is("i")){if (event.ctrlKey || event.metaKey){window.open($(this).attr("href"), "_blank"); return false;}else if (!target) window.location=$(this).attr("href"); else window.open($(this).attr("href"), target);}else if ($(window).width() > 991 && $(this).attr("href").indexOf("#") <=-1){if (event.ctrlKey || event.metaKey){window.open($(this).attr("href"), "_blank"); return false;}else if (!target) window.location=$(this).attr("href"); else window.open($(this).attr("href"), target);}else if ($(window).width() <=991 && $(this).attr("href") && $(this).attr("href").length > 1 && $(this).attr("href").indexOf("#") >=0 && $(this).hasClass("inner-link")){$(this).parents("ul.navbar-nav").find("li.dropdown").not($(this).parent(".dropdown")).removeClass("show"); if ($(this).parent(".dropdown").hasClass("show")){$(this).parent(".dropdown").removeClass("show");}else{$(this).parent(".dropdown").addClass("show");}$(this).toggleClass("active");}}); $("nav.full-width-pull-menu ul.panel-group li.dropdown a.dropdown-toggle").on("click", function (e){if ($(this).parent("li").find("ul.dropdown-menu").length > 0){if ($(this).parent("li").hasClass("show")){$(this).parent("li").removeClass("show");}else{$(this).parent("li").addClass("show");}}}); $(document).on("touchstart", ".sidebar-wrapper", function (){clearOpen();}); var getNav=$("nav.navbar.bootsnav"), getIn=getNav.find("ul.nav").data("in"), getOut=getNav.find("ul.nav").data("out"); function clearOpen(){$("li.dropdown").removeClass("on").removeClass("show"); $(".dropdown-menu").stop().fadeOut("fast"); $(".dropdown-menu").removeClass(getIn); $(".dropdown-menu").addClass(getOut);}}); </script>
   

 </x-slot>
  




   
    </x-app>