<x-app page="blog" >
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
</x-slot>
        <!-- start page title section -->
        <section class="wow fadeIn cover-background background-position-top top-space" style="background-image:url('{{ asset('assets/images/examples/blog2.webp') }}');">
            <div class="opacity-medium bg-extra-dark-gray"></div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 d-flex flex-column text-center justify-content-center page-title-large padding-30px-tb">
                        <!-- start sub title -->
                        <!-- <span class="d-block text-white-2 opacity6 alt-font margin-5px-bottom">We are awesome designer</span> -->
                        <!-- end sub title -->
                        <!-- start page title -->
                        <h1 class="alt-font text-white-2 font-weight-600 mb-0" style="margin-top: 19px;font-size: 27pt;">Blog</h1>
                        <!-- end page title -->
                    </div>
                </div>
            </div>
        </section>
        <!-- end page title section -->
<!-- start blog content section --> 
<section>
            <div class="container">
                <div class="row">
                    <main class="col-12 col-lg-9 right-sidebar md-margin-60px-bottom sm-margin-40px-bottom md-padding-15px-lr">
                        <?php /*$posts  = array();*/ ?>
                        @forelse($posts as $post)
                        <!-- start post item --> 
                        <div class="blog-post-content d-flex align-items-center flex-wrap margin-60px-bottom padding-60px-bottom border-bottom border-color-extra-light-gray md-margin-30px-bottom md-padding-30px-bottom text-center text-md-left md-no-border">
                            <div class="col-12 col-lg-5 blog-image p-0 md-margin-30px-bottom sm-margin-20px-bottom margin-45px-right md-no-margin-right">
                                <a href="{{ (app()->getLocale() == 'en') ? route('detailArticleEn', ['id'=>$post->id,'titre' =>$post->titre,'locale' => app()->getLocale()]) : route('detailArticle', ['locale' => app()->getLocale(),'id'=>$post->id,'titre' =>$post->titre]) }}"><img src="@if($post->photo) {{asset('storage/'.$post->photo)}} @else {{asset('assets/images/default.png')}} @endif" alt="{{ $post->titre }}" ></a>
                            </div>
                            <div class="col-12 col-lg-6 blog-text p-0">
                                <div class="content margin-20px-bottom md-no-padding-left ">
                                    <a href="{{ (app()->getLocale() == 'en') ? route('detailArticleEn', ['id'=>$post->id,'titre' =>$post->titre,'locale' => app()->getLocale()]) : route('detailArticle', ['locale' => app()->getLocale(),'id'=>$post->id,'titre' =>$post->titre]) }}" class="text-extra-dark-gray margin-5px-bottom alt-font text-extra-large font-weight-600 d-inline-block">{{ $post->titre }}</a>
                                    <div class="text-medium-gray text-extra-small margin-15px-bottom text-uppercase alt-font"><span>{{ date('Y-m-d', strtotime($post->created_at)) }}</span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="blog-grid.html" class="text-medium-gray">{{ $post->categorie->libelle }}</a></div>
                                    <p class="m-0 width-95">{{ substr($post->description,0,155).'...' }}</p>
                                </div>
                                <a class="btn btn-very-small btn-dark-gray text-uppercase" href="{{url('blog/'.$post->id.'/'.$post->titre)}}">Voir Plus</a>
                            </div>
                        </div>
                        <!-- end post item -->  
                        @empty
                        <p>Aucun Article existe</p>
                        @endforelse
                      
                    </main>
                    <aside class="col-12 col-lg-3">
                        <div class="d-inline-block width-100 margin-45px-bottom sm-margin-25px-bottom">
                            <form method="get" action="{{ url('blog')}}">
                                <div class="position-relative">
                                    <input type="text" name="search" class="bg-transparent text-small m-0 border-color-extra-light-gray medium-input float-left" value="{{ request()->get('search') }}" placeholder="Chercher...">
                                    <button type="submit" class="bg-transparent  btn position-absolute right-0 top-1"><i class="fas fa-search ml-0"></i></button>
                                </div>   
                            </form>
                        </div>
                        
                        <div class="margin-50px-bottom">
                            <div class="text-extra-dark-gray margin-20px-bottom alt-font text-uppercase font-weight-600 text-small aside-title"><span>Suivez Nous</span></div>
                            <div class="social-icon-style-1 text-center">
                                <ul class="extra-small-icon">
                                    <li><a class="facebook" href="https://www.facebook.com/WEB-IDEAL-112485187066689" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a class="twitter" href="https://twitter.com/webideal1" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                    <li><a class="instagram" href="https://www.instagram.com/web_ideal" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                    
                                    <li><a class="linkedin" href="https://www.linkedin.com/in/web-ideal-ab71251a6/" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                     
                                </ul>
                            </div>
                        </div>
                        <div class="margin-45px-bottom sm-margin-25px-bottom">
                            <div class="text-extra-dark-gray margin-20px-bottom alt-font text-uppercase font-weight-600 text-small aside-title"><span>Categories</span></div>
                            <ul class="list-style-6 margin-50px-bottom text-small">
                                @forelse ($categories as $cat)
                                <li><a href="{{ url('blog?cat='.$cat->libelle)}}">{{ $cat-> libelle }}</a><span>{{ count($cat->posts) }}</span></li>
                                @empty
                                <li>Aucun Catégorie existe !</li>
                                @endforelse
                                
                            </ul>   
                        </div>
                        <div class="bg-deep-pink padding-30px-all text-white-2 text-center margin-45px-bottom sm-margin-25px-bottom">
                            <i class="fas fa-quote-left icon-small margin-15px-bottom d-block"></i>
                            <span class="text-extra-large font-weight-300 margin-20px-bottom d-block">The future belongs to those who believe in the beauty of their dreams.</span>
                            <a class="btn btn-very-small btn-transparent-white border text-uppercase" href="{{ url('portfolio')}}">Explore Portfolio</a>
                        </div>
                        <div class="margin-45px-bottom sm-margin-25px-bottom">
                            <div class="text-extra-dark-gray margin-25px-bottom alt-font text-uppercase font-weight-600 text-small aside-title"><span>tags</span></div>
                            <div class="tag-cloud">
                                @forelse ($tags as $tag)
                                <a href="{{ url('blog?tag='.$tag->libelle)}}">{{ strtoupper($tag->libelle) }}</a>
                                @empty
                                <li>Aucun Catégorie existe !</li>
                                @endforelse

                            </div>
                        </div>
                        <div class="margin-45px-bottom sm-margin-25px-bottom">
                            <div class="text-extra-dark-gray margin-25px-bottom alt-font text-uppercase font-weight-600 text-small aside-title"><span>Archive</span></div>
                            <ul class="list-style-6 margin-20px-bottom text-small">
                                <?php 
                                    $currentDate = Carbon\Carbon::now();
                                    $cpt = $currentDate->month;
                                    while ( $cpt >= 1) {
                                        $dateWithMonth = $currentDate->year."-".$cpt.'-01';
                                        echo "<li><a href='". url('blog?date='.$currentDate->year."-".$cpt)."'>". ucfirst(Carbon\Carbon::parse($dateWithMonth)->isoFormat('MMMM')) .' '.$currentDate->year."</a></li>";
                                       $cpt -- ;
                                    }
                                ?>
                            </ul>   
                        </div>
                    </aside>
                </div>
            </div>
        </section>
        <!-- end blog content section -->  
        
<x-slot name="script"> <script src="{{asset('assets/js/mergeAbout.js')}}"></script><!-- <script src="{{asset('assets/js/jquery.js')}}"></script> <script src="{{asset('assets/js/bootstrap.bundle.js')}}"></script> --> <script type="text/javascript">function SetMegamenuPosition(){if ($(window).width() > 991){setTimeout(function (){var totalHeight=$("nav.navbar").outerHeight(); $(".mega-menu").css({top: totalHeight}); if ($(".navbar-brand-top").length===0) $(".dropdown.simple-dropdown > .dropdown-menu").css({top: totalHeight});}, 200);}else{$(".mega-menu").css("top", ""); $(".dropdown.simple-dropdown > .dropdown-menu").css("top", "");}}function setPageTitleSpace(){if ($(".navbar").hasClass("navbar-top") || $("nav").hasClass("navbar-fixed-top")){if ($(".top-space").length > 0){var top_space_height=$(".navbar").outerHeight(); if ($(".top-header-area").length > 0){top_space_height=top_space_height + $(".top-header-area").outerHeight();}$(".top-space").css("margin-top", top_space_height + "px");}}}function SetResizeContent(){SetMegamenuPosition(); setPageTitleSpace();}SetResizeContent(); </script> <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> <script>AOS.init(); </script> <script>"use strict"; var lastScroll=0; var isMobile=false; var isiPhoneiPad=false; if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)){isMobile=true;}if (/iPhone|iPad|iPod/i.test(navigator.userAgent)){isiPhoneiPad=true;}function pad(d){return d < 10 ? "0" + d.toString() : d.toString();}function isIE(){var ua=window.navigator.userAgent; var msie=ua.indexOf("MSIE "); if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv:11./)){return true;}else{return false;}}$(window).on("scroll", init_scroll_navigate); function init_scroll_navigate(){var menu_links=$(".navbar-nav li a"); var scrollPos=$(document).scrollTop(); scrollPos=scrollPos + 60; menu_links.each(function (){var currLink=$(this); var hasPos=currLink.attr("href").indexOf("#"); if (hasPos > -1){var res=currLink.attr("href").substring(hasPos); if ($(res).length > 0){var refElement=$(res); if (refElement.offset().top <=scrollPos && refElement.offset().top + refElement.height() > scrollPos){menu_links.not(currLink).removeClass("active"); currLink.addClass("active");}else{currLink.removeClass("active");}}}}); var $window=$(window), $body=$(".bg-background-fade"), $panel=$(".color-code"); var scroll=$window.scrollTop() + $window.height() / 2; $panel.each(function (){var $this=$(this); if ($this.position().top <=scroll && $this.position().top + $this.height() > scroll){$body.removeClass(function (index, css){return (css.match(/(^|s)color-S+/g) || []).join(" ");}); $body.addClass("color-" + $(this).data("color"));}}); var headerHeight=$("nav").outerHeight(); if (!$("header").hasClass("no-sticky")){if ($(document).scrollTop() >=headerHeight){$("header").addClass("sticky");}else if ($(document).scrollTop() <=headerHeight){$("header").removeClass("sticky"); setTimeout(function (){setPageTitleSpace();}, 500);}SetMegamenuPosition();}var st=$(this).scrollTop(); if (st > lastScroll){$(".sticky").removeClass("header-appear");}else $(".sticky").addClass("header-appear"); lastScroll=st; if (lastScroll <=headerHeight) $("header").removeClass("header-appear");}function ScrollStop(){return false;}function ScrollStart(){return true;}$(document).ready(function (){"use strict"; var pgurl=window.location.href.substr(window.location.href.lastIndexOf("/") + 1); var $hash=window.location.hash.substring(1); if ($hash){$hash="#" + $hash; pgurl=pgurl.replace($hash, "");}else{pgurl=pgurl.replace("#", "");}$(".nav li a").each(function (){if ($(this).attr("href")==pgurl || $(this).attr("href")==pgurl + ".html"){$(this).parent().addClass("active"); $(this).parents("li.dropdown").addClass("active");}}); $(window).scroll(function (){if ($(this).scrollTop() > 150) $(".scroll-top-arrow").fadeIn("slow"); else $(".scroll-top-arrow").fadeOut("slow");}); $(document).on("click", ".scroll-top-arrow", function (){$("html, body").animate({scrollTop: 0}, 800); return false;}); $(document).on("click", ".right-menu-button", function (e){$("body").toggleClass("left-nav-on");}); $(document).on("click", "#mobileToggleSidenav", function (){$(this).closest("nav").toggleClass("sidemenu-open");}); $(".atr-nav").on("click", function (){$(".atr-div").append("<a class='close-cross' href='#'>X</a>"); $(".atr-div").animate({width: "toggle"});}); $(".close-cross").on("click", function (){$(".atr-div").hide();}); var menuRight=document.getElementById("cbp-spmenu-s2"), showRightPush=document.getElementById("showRightPush"), body=document.body; if (showRightPush){showRightPush.onclick=function (){classie.toggle(this, "active"); if (menuRight) classie.toggle(menuRight, "cbp-spmenu-open");};}var test=document.getElementById("close-pushmenu"); if (test){test.onclick=function (){classie.toggle(this, "active"); if (menuRight) classie.toggle(menuRight, "cbp-spmenu-open");};}$(".big-menu-open").on("click", function (){$(".big-menu-right").addClass("open");}); $(".big-menu-close").on("click", function (){$(".big-menu-right").removeClass("open");}); $(document).on( "click", '.navbar .navbar-collapse a.dropdown-toggle, .accordion-style1 .panel-heading a, .accordion-style2 .panel-heading a, .accordion-style3 .panel-heading a, .toggles .panel-heading a, .toggles-style2 .panel-heading a, .toggles-style3 .panel-heading a, a.carousel-control, .nav-tabs a[data-toggle="tab"], a.shopping-cart', function (e){e.preventDefault();}); $(document).on("touchstart click", "body", function (e){if ($(window).width() < 992){if (!$(".navbar-collapse").has(e.target).is(".navbar-collapse") && $(".navbar-collapse").hasClass("show") && !$(e.target).hasClass("navbar-toggle")){$(".navbar-collapse").collapse("hide");}}else{if (!$(".navbar-collapse").has(e.target).is(".navbar-collapse") && $(".navbar-collapse").hasClass("show")){$(".navbar-collapse").find("a.dropdown-toggle").addClass("collapsed"); $(".navbar-collapse").find("ul.dropdown-menu").removeClass("show"); $(".navbar-collapse a.dropdown-toggle").removeClass("active");}}}); $(".navbar-collapse a.dropdown-toggle").on("touchstart", function (e){$(".navbar-collapse a.dropdown-toggle").not(this).removeClass("active"); if ($(this).hasClass("active")) $(this).removeClass("active"); else $(this).addClass("active");}); $("button.navbar-toggle").on("click", function (e){if (isMobile){$(".cart-content").css("opacity", "0"); $(".cart-content").css("visibility", "hidden");}}); $("a.dropdown-toggle").on("click", function (e){if (isMobile){$(".cart-content").css("opacity", "0"); $(".cart-content").css("visibility", "hidden");}}); $(document).on("touchstart click", '.navbar-collapse [data-toggle="dropdown"]', function (event){var $innerLinkLI=$(this).parents("ul.navbar-nav").find("li.dropdown a.inner-link").parent("li.dropdown"); if (!$(this).hasClass("inner-link") && !$(this).hasClass("dropdown-toggle") && $innerLinkLI.hasClass("show")){$innerLinkLI.removeClass("show");}var target=$(this).attr("target"); if ($(window).width() <=991 && $(this).attr("href") && $(this).attr("href").indexOf("#") <=-1 && !$(event.target).is("i")){if (event.ctrlKey || event.metaKey){window.open($(this).attr("href"), "_blank"); return false;}else if (!target) window.location=$(this).attr("href"); else window.open($(this).attr("href"), target);}else if ($(window).width() > 991 && $(this).attr("href").indexOf("#") <=-1){if (event.ctrlKey || event.metaKey){window.open($(this).attr("href"), "_blank"); return false;}else if (!target) window.location=$(this).attr("href"); else window.open($(this).attr("href"), target);}else if ($(window).width() <=991 && $(this).attr("href") && $(this).attr("href").length > 1 && $(this).attr("href").indexOf("#") >=0 && $(this).hasClass("inner-link")){$(this).parents("ul.navbar-nav").find("li.dropdown").not($(this).parent(".dropdown")).removeClass("show"); if ($(this).parent(".dropdown").hasClass("show")){$(this).parent(".dropdown").removeClass("show");}else{$(this).parent(".dropdown").addClass("show");}$(this).toggleClass("active");}}); $("nav.full-width-pull-menu ul.panel-group li.dropdown a.dropdown-toggle").on("click", function (e){if ($(this).parent("li").find("ul.dropdown-menu").length > 0){if ($(this).parent("li").hasClass("show")){$(this).parent("li").removeClass("show");}else{$(this).parent("li").addClass("show");}}}); $(document).on("touchstart", ".sidebar-wrapper", function (){clearOpen();}); var getNav=$("nav.navbar.bootsnav"), getIn=getNav.find("ul.nav").data("in"), getOut=getNav.find("ul.nav").data("out"); function clearOpen(){$("li.dropdown").removeClass("on").removeClass("show"); $(".dropdown-menu").stop().fadeOut("fast"); $(".dropdown-menu").removeClass(getIn); $(".dropdown-menu").addClass(getOut);}}); </script>
   

 </x-slot>
</x-app>