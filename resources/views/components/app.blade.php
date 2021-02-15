<!doctype html>

<html class="no-js" lang="{{ app()->getLocale() }}">
    <head>
          {{ $meta ?? "" }}

        
         {{ $css ?? "" }}
               <style type="text/css">

    .float{

  position:fixed;

  width:60px;

  height:60px;

  bottom:20px;

  left:20px;

  background-color:#25d366;

  color:#FFF;

  border-radius:50px;

  text-align:center;

  font-size:30px;

  box-shadow: 2px 2px 2px #686666;

  z-index:100;

}



.my-float{

  margin-top:16px;

}

</style>
         
         <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-177863907-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
        
          gtag('config', 'UA-177863907-1');
        </script>

        <!-- Facebook Pixel Code -->
        <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js%27);
        fbq('init', '2614107995545982');
        fbq('track', 'PageView');
        </script>
        <noscript><img height="1" width="1" style="display:none"
        src="https://www.facebook.com/tr?id=2614107995545982&ev=PageView&noscript=1"
        /></noscript>
        <!-- End Facebook Pixel Code -->
    </head>
    <body>
    <x-header :page="$page" :post="$post ?? '' "/>
    <div id="app">
       {{ $slot }}
    </div>
    <x-footer />
        <!-- start scroll to top -->
        <a class="scroll-top-arrow" href="javascript:void(0);"><i class="fas fa-arrow-circle-up" style="    font-size: 27px;"></i></a>
          <a href="https://api.whatsapp.com/send?phone=212644812420" class="float" target="_blank">

<!-- <i class="fa fa-whatsapp my-float"></i> -->
<i class="fab fa-whatsapp my-float"></i>

</a>
        <!-- end scroll to top  -->
        <!-- javascript libraries -->
     


       {{ $script ?? "" }}
       <script type="text/javascript">
         !function(r){"use strict";var a={initialize:function(){this.event(),this.hoverDropdown(),this.navbarSticky(),this.navbarScrollspy()},event:function(){var n,a,s,o,e,t,i,l,d=r("nav.navbar.bootsnav");d.hasClass("navbar-sticky")&&d.wrap("<div class='wrap-sticky'></div>"),d.hasClass("brand-center")&&(n=new Array,s=(a=r("nav.brand-center")).find("ul.navbar-nav"),a.prepend("<span class='storage-name' style='display:none;'></span>"),a.find("ul.navbar-nav > li").each(function(){var a;r(this).hasClass("active")&&(a=r("a",this).eq(0).text(),r(".storage-name").html(a)),n.push(r(this).html())}),o=n.splice(0,Math.round(n.length/2)),e=n,t="",(i=function(a){t="";for(var n=0;n<a.length;n++)t+="<li>"+a[n]+"</li>"})(o),s.html(t),a.find("ul.nav").first().addClass("navbar-left"),i(e),s.after('<ul class="nav navbar-nav"></ul>').next().html(t),a.find("ul.nav").last().addClass("navbar-right"),a.find("ul.nav.navbar-left").wrap("<div class='col-half left'></div>"),a.find("ul.nav.navbar-right").wrap("<div class='col-half right'></div>"),a.find("ul.navbar-nav > li").each(function(){var a=r("ul.dropdown-menu",this),n=r("ul.simple-dropdown",this),s=r("ul.megamenu-content",this);a.closest("li").addClass("dropdown"),n.closest("li").addClass("simple-dropdown"),s.closest("li").addClass("megamenu-fw")}),""==!(l=r(".storage-name").html())&&r("ul.navbar-nav > li:contains('"+l+"')").addClass("active")),d.hasClass("navbar-sidebar")?(r("body").addClass("wrap-nav-sidebar"),d.wrapInner("<div class='scroller'></div>")):r(".bootsnav").addClass("on"),d.find("ul.nav").hasClass("navbar-center")&&d.addClass("menu-center"),d.hasClass("navbar-full")?(r("nav.navbar.bootsnav").find("ul.nav").wrap("<div class='wrap-full-menu'></div>"),r(".wrap-full-menu").wrap("<div class='nav-full'></div>"),r("ul.nav.navbar-nav").prepend("<li class='close-full-menu'><a href='#'><i class='fa fa-times'></i></a></li>")):d.hasClass("navbar-mobile")?d.removeClass("no-full"):d.addClass("no-full"),d.hasClass("navbar-mobile")&&(r(".navbar-collapse").on("shown.bs.collapse",function(){r("body").addClass("side-right")}),r(".navbar-collapse").on("hide.bs.collapse",function(){r("body").removeClass("side-right")}),r(window).on("resize",function(){r("body").removeClass("side-right")})),d.hasClass("no-background")&&r(window).on("scroll",function(){34<r(window).scrollTop()?r(".navbar-fixed").removeClass("no-background"):r(".navbar-fixed").addClass("no-background")}),d.hasClass("navbar-transparent")&&r(window).on("scroll",function(){34<r(window).scrollTop()?r(".navbar-fixed").removeClass("navbar-transparent"):r(".navbar-fixed").addClass("navbar-transparent")}),r(".btn-cart").on("click",function(a){a.stopPropagation()}),r("nav.navbar.bootsnav .attr-nav").each(function(){r("li.search > a",this).on("click",function(a){a.preventDefault(),r(".top-search").slideToggle()})}),r(".input-group-addon.close-search").on("click",function(){r(".top-search").slideUp()}),r("nav.navbar.bootsnav .attr-nav").each(function(){r("li.side-menu > a",this).on("click",function(a){a.preventDefault(),r("nav.navbar.bootsnav > .side").toggleClass("on"),r("body").toggleClass("on-side")})}),r(".side .close-side").on("click",function(a){a.preventDefault(),r("nav.navbar.bootsnav > .side").removeClass("on"),r("body").removeClass("on-side")})},hoverDropdown:function(){var a,n,s,o=r("nav.navbar.bootsnav"),e=r(window).width(),t=r(window).height(),i=o.find("ul.nav").data("in"),l=o.find("ul.nav").data("out");e<991?(r(".scroller").css("height","auto"),r("nav.navbar.bootsnav ul.nav").find("li.dropdown").off("mouseenter"),r("nav.navbar.bootsnav ul.nav").find("li.dropdown").off("mouseleave"),r("nav.navbar.bootsnav ul.nav").find(".title").off("mouseenter"),r("nav.navbar.bootsnav ul.nav").off("mouseleave"),r(".navbar-collapse").removeClass("animated"),r("nav.navbar.bootsnav ul.nav").each(function(){r(".dropdown-menu",this).addClass("animated"),r(".dropdown-menu",this).removeClass(l),r("a.dropdown-toggle",this).off("click"),r("a.dropdown-toggle",this).on("click",function(a){return a.stopPropagation(),r(this).closest("li.dropdown").find(".dropdown-menu").first().stop().fadeToggle().toggleClass(i),r(this).closest("li.dropdown").first().toggleClass("on"),!1}),r("li.dropdown",this).each(function(){return r(this).find(".dropdown-menu").stop().fadeOut("fast"),r(this).on("hidden.bs.dropdown",function(){r(this).find(".dropdown-menu").stop().fadeOut("fast")}),!1}),r(".megamenu-fw",this).each(function(){r(".col-menu",this).each(function(){r(".content",this).addClass("animated"),r(".content",this).stop().fadeOut(),r(".title",this).off("click"),r(".title",this).on("click",function(){return r(this).closest(".col-menu").find(".content").stop().fadeToggle("fast").addClass(i),r(this).closest(".col-menu").toggleClass("on"),!1}),r(".content",this).on("click",function(a){a.stopPropagation()})})})}),a=function(){r("li.dropdown",this).removeClass("on"),r(".dropdown-menu",this).stop().fadeOut("fast"),r(".dropdown-menu",this).removeClass(i),r(".col-menu",this).removeClass("on"),r(".col-menu .content",this).stop().fadeOut("fast"),r(".col-menu .content",this).removeClass(i)},r("nav.navbar.bootsnav").on("mouseleave",function(){a()}),r("nav.navbar.bootsnav .attr-nav").each(function(){r(".dropdown-menu",this).removeClass("animated"),r("li.dropdown",this).off("mouseenter"),r("li.dropdown",this).off("mouseleave"),r("a.dropdown-toggle",this).off("click"),r("a.dropdown-toggle",this).on("click",function(a){a.stopPropagation(),r(this).closest("li.dropdown").find(".dropdown-menu").first().stop().fadeToggle(),r(".navbar-toggle").each(function(){r(".fa",this).removeClass("fa-times"),r(".fa",this).addClass("fa-bars"),r(".navbar-collapse").removeClass("in"),r(".navbar-collapse").removeClass("on")})}),r(this).on("mouseleave",function(){return r(".dropdown-menu",this).stop().fadeOut(),r("li.dropdown",this).removeClass("on"),!1})}),r(".navbar-toggle").each(function(){r(this).off("click"),r(this).on("click",function(){r(".fa",this).toggleClass("fa-bars"),r(".fa",this).toggleClass("fa-times"),a()})})):991<e&&(r(".scroller").css("height",t+"px"),o.hasClass("navbar-sidebar")?r("nav.navbar.bootsnav ul.nav").each(function(){r("a.dropdown-toggle",this).off("click"),r("a.dropdown-toggle",this).on("click",function(a){a.stopPropagation()}),r(".dropdown-menu",this).addClass("animated"),r("li.dropdown",this).on("mouseenter",function(){return r(".dropdown-menu",this).eq(0).removeClass(l),r(".dropdown-menu",this).eq(0).stop().fadeIn("fast").addClass(i),r(this).addClass("on"),!1}),r(".col-menu").each(function(){r(".content",this).addClass("animated"),r(".title",this).on("mouseenter",function(){return r(this).closest(".col-menu").find(".content").stop().fadeIn("fast").addClass(i),r(this).closest(".col-menu").addClass("on"),!1})}),r(this).on("mouseleave",function(){return r(".dropdown-menu",this).stop().removeClass(i),r(".dropdown-menu",this).stop().addClass(l).fadeOut("fast"),r(".col-menu",this).find(".content").stop().fadeOut("fast").removeClass(i),r(".col-menu",this).removeClass("on"),r("li.dropdown",this).removeClass("on"),!1})}):(navigator.userAgent.match(/Version\/[\d\.]+.*Safari/),r("nav.navbar.bootsnav ul.nav").each(function(){r("a.dropdown-toggle",this).off("click"),r("a.dropdown-toggle",this).on("click",function(a){a.stopPropagation()}),r(".megamenu-fw",this).each(function(){r(".title",this).off("click"),r("a.dropdown-toggle",this).off("click"),r(".content").removeClass("animated")}),r(".dropdown-menu",this).addClass("animated"),(0<r(".navbar-left-sidebar").length||0<r(".left-nav-sidebar").length)&&(r("li:not(.dropdown)",this).on("mouseenter",function(){r(this).parent().find(".dropdown-menu").stop().fadeOut("fast")}),r(document).on("click",".side-left-menu-close.active",function(a){r(this).removeClass("active")})),r("li.dropdown",this).on("mouseenter",function(){var a,n;return r(".side-left-menu-close").addClass("active"),(0<r(".navbar-left-sidebar").length||0<r(".left-nav-sidebar").length)&&(r(this).parent().find(".dropdown").removeClass("on"),0<r(this).parents(".dropdown-menu").length?r(this).parents(".dropdown-menu").find(".dropdown-menu").not(r(".dropdown-menu",this)).stop().fadeOut("fast"):(r(this).parents(".bootsnav .nav").find(".dropdown-menu").not(r(".dropdown-menu",this)).stop().fadeOut("fast"),r(":not(.second-level)",this).find(".third-level").stop().fadeOut("fast")),r(this).parent().hasClass("second-level")?r(this).parents(".navbar-nav").addClass("enter"):r(this).parent().hasClass("enter")&&r(".navbar-nav").removeClass("enter")),r(".dropdown-menu",this).eq(0).removeClass(l),r(".dropdown-menu",this).eq(0).stop().fadeIn("fast").addClass(i),r(this).addClass("on"),(0<r(".navbar-left-sidebar").length||0<r(".left-nav-sidebar").length)&&(0<r(".left-nav-sidebar").length?(a=r(".sidebar-part1").outerWidth(),a+=20,a+=r(".left-nav-on .navbar-nav").outerWidth()):a=r(".navbar-nav").outerWidth(),n=r(window).width(),setTimeout(function(){r(".dropdown").each(function(){r(this).hasClass("on")&&(a+=r(".dropdown-menu li",this).outerWidth())}),r(".side-left-menu-close").width(n-a)},300)),!1}),r("li.dropdown",this).on("mouseleave",function(){var a,n;r(".dropdown-menu",this).eq(0).removeClass(i),"none"!=r(".dropdown-menu",this).css("display")&&(0<r(".navbar-left-sidebar").length||0<r(".left-nav-sidebar").length)&&!r(this).parents(".bootsnav .nav").hasClass("enter")||(r(".dropdown-menu",this).eq(0).stop().fadeOut("fast").addClass(l),r(this).removeClass("on")),(0<r(".navbar-left-sidebar").length||0<r(".left-nav-sidebar").length)&&(r(".side-left-menu-close").addClass("active"),0<r(".left-nav-sidebar").length?(a=r(".sidebar-part1").outerWidth(),a+=20,a+=r(".left-nav-on .navbar-nav").outerWidth()):a=r(".navbar-nav").outerWidth(),n=r(window).width(),setTimeout(function(){r(".dropdown").each(function(){r(this).hasClass("on")&&(a+=r(".dropdown-menu li",this).outerWidth())}),r(".side-left-menu-close").width(n-a)},300))}),r(this).on("mouseleave",function(){return r(".dropdown-menu",this).removeClass(i),r(".side-left-menu-close").removeClass("active"),r(".dropdown-menu",this).eq(0).stop().fadeOut("fast").addClass(l),r("li.dropdown",this).removeClass("on"),(0<r(".navbar-left-sidebar").length||0<r(".left-nav-sidebar").length)&&(r(".bootsnav .nav").hasClass("enter")?r(".bootsnav .nav").removeClass("enter"):r(".bootsnav .nav").find(".dropdown-menu").fadeOut("fast")),!1})})),r("nav.navbar.bootsnav .attr-nav").each(function(){r("a.dropdown-toggle",this).off("click"),r("a.dropdown-toggle",this).on("click",function(a){a.stopPropagation()}),r(".dropdown-menu",this).addClass("animated"),r("li.dropdown",this).on("mouseenter",function(){return r(".dropdown-menu",this).eq(0).removeClass(l),r(".dropdown-menu",this).eq(0).stop().fadeIn("fast").addClass(i),r(this).addClass("on"),!1}),r("li.dropdown",this).on("mouseleave",function(){r(".dropdown-menu",this).eq(0).removeClass(i),r(".dropdown-menu",this).eq(0).stop().fadeOut("fast").addClass(l),r(this).removeClass("on")}),r(this).on("mouseleave",function(){return r(".dropdown-menu",this).removeClass(i),r(".dropdown-menu",this).eq(0).stop().fadeOut("fast").addClass(l),r("li.dropdown",this).removeClass("on"),!1})})),o.hasClass("navbar-full")&&(n=r(window).height(),s=r(window).width(),r(".nav-full").css("height",n+"px"),r(".wrap-full-menu").css("height",n+"px"),r(".wrap-full-menu").css("width",s+"px"),r(".navbar-collapse").addClass("animated"),r(".navbar-toggle").each(function(){var n=r(this).data("target");r(this).off("click"),r(this).on("click",function(a){return a.preventDefault(),r(n).removeClass(l),r(n).addClass("in"),r(n).addClass(i),!1}),r("li.close-full-menu").on("click",function(a){return a.preventDefault(),r(n).addClass(l),setTimeout(function(){r(n).removeClass("in"),r(n).removeClass(i)},500),!1})}))},navbarSticky:function(){var a,n,s=r("nav.navbar.bootsnav");s.hasClass("navbar-sticky")&&(a=s.height(),r(".wrap-sticky").height(a),n=r(".wrap-sticky").offset().top,r(window).on("scroll",function(){var a=r(window).scrollTop();n<a?s.addClass("sticked"):s.removeClass("sticked")}))},navbarScrollspy:function(){var n,a=r(".navbar-scrollspy"),s=r("body"),d=r("nav.navbar.bootsnav"),o=d.outerHeight();a.length&&(s.scrollspy({target:".navbar",offset:o}),r(".scroll").on("click",function(a){a.preventDefault(),r(".scroll").removeClass("active"),r(this).addClass("active"),r(".navbar-collapse").removeClass("in"),r(".navbar-toggle").each(function(){r(".fa",this).removeClass("fa-times"),r(".fa",this).addClass("fa-bars")});r(window).scrollTop();var n,s=r(this).find("a"),o=r(s.attr("href")).offset().top,e=r(window).width(),t=d.data("minus-value-desktop"),i=d.data("minus-value-mobile"),l=d.data("speed");n=992<e?o-t:o-i,r("html, body").stop().animate({scrollTop:n},l)}),n=function(){var a=s.data("bs.scrollspy");a&&(o=d.outerHeight(),a.options.offset=o,s.data("bs.scrollspy",a),s.scrollspy("refresh"))},r(window).on("resize",function(){clearTimeout(a);var a=setTimeout(n,200)}))}};r(document).ready(function(){a.initialize()}),r(window).on("resize",function(){a.hoverDropdown(),setTimeout(function(){a.navbarSticky()},500),r(".navbar-toggle").each(function(){r(".fa",this).removeClass("fa-times"),r(".fa",this).addClass("fa-bars"),r(this).removeClass("fixed")}),r(".navbar-collapse").removeClass("in"),r(".navbar-collapse").removeClass("on"),r(".navbar-collapse").removeClass("bounceIn")})}(jQuery);
       </script>
    
</body>

</html>

