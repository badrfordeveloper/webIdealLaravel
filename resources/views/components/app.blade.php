<!doctype html>
<html class="no-js" lang="{{ app()->getLocale() }}">

    <head>
        <!-- title -->
        <title>WEBIDEAL – Creative Agency, Corporate and Portfolio Multi-purpose Template</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="url" content="{{ url('/') }}">

        <meta name="author" content="ThemeZaa">
        <!-- description -->
        <meta name="description" content="POFO is a highly creative, modern, visually stunning and Bootstrap responsive multipurpose agency and portfolio HTML5 template with 25 ready home page demos.">
        <!-- keywords -->
        <meta name="keywords" content="creative, modern, clean, bootstrap responsive, html5, css3, portfolio, blog, agency, templates, multipurpose, one page, corporate, start-up, studio, branding, designer, freelancer, carousel, parallax, photography, personal, masonry, grid, coming soon, faq">
        <!-- favicon -->
        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}">
        <link rel="apple-touch-icon" href="{{ asset('assets/images/apple-touch-icon-57x57.png') }}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/images/apple-touch-icon-72x72.png') }}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets/images/apple-touch-icon-114x114.png') }}">
        <!-- animation -->
        <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}" />
        <!-- bootstrap -->
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
        <!-- et line icon --> 
        <link rel="stylesheet" href="{{ asset('assets/css/et-line-icons.css') }}" />
        <!-- font-awesome icon -->
        <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}" />
        <!-- themify icon -->
        <link rel="stylesheet" href="{{ asset('assets/css/themify-icons.css') }}">
        <!-- swiper carousel -->
        <link rel="stylesheet" href="{{ asset('assets/css/swiper.min.css') }}">
        <!-- justified gallery  -->
        <link rel="stylesheet" href="{{ asset('assets/css/justified-gallery.min.css') }}">
        <!-- magnific popup -->
        <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}" />
        <!-- revolution slider --> 
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/revolution/css/settings.css') }}" media="screen" />
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/revolution/css/layers.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/revolution/css/navigation.css') }}">
        <!-- bootsnav -->
        <link rel="stylesheet" href="{{ asset('assets/css/bootsnav.css') }}">
        <!-- style -->
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
        <!-- responsive css -->
        <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}" />
        <!--[if IE]>
            <script src="{{ asset('assets/js/html5shiv.js') }}"></script>
        <![endif]-->
    </head>
    <body>
   
    <x-header :page="$page"/>

    <div id="app">

       {{ $slot }}

    </div>

   
    <x-footer />
    
        <!-- start scroll to top -->
        <a class="scroll-top-arrow" href="javascript:void(0);"><i class="ti-arrow-up"></i></a>
        <!-- end scroll to top  -->
        <!-- javascript libraries -->
        <script type="text/javascript" src="{{ asset('assets/js/jquery.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/modernizr.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/bootstrap.bundle.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/jquery.easing.1.3.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/skrollr.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/smooth-scroll.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/jquery.appear.js') }}"></script>
        <!-- menu navigation -->
        <script type="text/javascript" src="{{ asset('assets/js/bootsnav.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/jquery.nav.js') }}"></script>
        <!-- animation -->
        <script type="text/javascript" src="{{ asset('assets/js/wow.min.js') }}"></script>
        <!-- page scroll -->
        <script type="text/javascript" src="{{ asset('assets/js/page-scroll.js') }}"></script>
        <!-- swiper carousel -->
        <script type="text/javascript" src="{{ asset('assets/js/swiper.min.js') }}"></script>
        <!-- counter -->
        <script type="text/javascript" src="{{ asset('assets/js/jquery.count-to.js') }}"></script>
        <!-- parallax -->
        <script type="text/javascript" src="{{ asset('assets/js/jquery.stellar.js') }}"></script>
        <!-- magnific popup -->
        <script type="text/javascript" src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
        <!-- portfolio with shorting tab -->
        <script type="text/javascript" src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
        <!-- images loaded -->
        <script type="text/javascript" src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
        <!-- pull menu -->
        <script type="text/javascript" src="{{ asset('assets/js/classie.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/hamburger-menu.js') }}"></script>
        <!-- counter  -->
        <script type="text/javascript" src="{{ asset('assets/js/counter.js') }}"></script>
        <!-- fit video  -->
        <script type="text/javascript" src="{{ asset('assets/js/jquery.fitvids.js') }}"></script>
        <!-- skill bars  -->
        <script type="text/javascript" src="{{ asset('assets/js/skill.bars.jquery.js') }}"></script> 
        <!-- justified gallery  -->
        <script type="text/javascript" src="{{ asset('assets/js/justified-gallery.min.js') }}"></script>
        <!--pie chart-->
        <script type="text/javascript" src="{{ asset('assets/js/jquery.easypiechart.min.js') }}"></script>
        <!-- instagram -->
        <script type="text/javascript" src="{{ asset('assets/js/instafeed.min.js') }}"></script>
        <!-- retina -->
        <script type="text/javascript" src="{{ asset('assets/js/retina.min.js') }}"></script>
        <!-- revolution -->
        <script type="text/javascript" src="{{ asset('assets/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
        <!-- revolution slider extensions (load below extensions JS files only on local file systems to make the slider work! The following part can be removed on server for on demand loading) -->
        <script type="text/javascript" src="{{ asset('assets/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
        <!-- setting -->
        <script type="text/javascript" src="{{ asset('assets/js/main.js') }}"></script>

</body>
</html>
