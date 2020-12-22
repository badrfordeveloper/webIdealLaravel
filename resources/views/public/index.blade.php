<x-app page="index" > 
    <x-slot name="meta">
        <!-- title -->
        <title>{{ __('messages.title-index') }}</title>  
        <!-- description -->
        <meta name="description" content="{{ __('messages.description-index') }}">

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

<!-- animation -->
        <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}" />
       
        <!-- et line icon --> 
        <link rel="stylesheet" href="{{ asset('assets/css/et-line-icons.css') }}" />
        <!-- font-awesome icon -->
        <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}" />
        
        <!-- magnific popup -->
        <!--<link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}" />-->
        <!-- revolution slider --> 
<!--        <link rel="stylesheet" type="text/css" href="{{ asset('assets/revolution/css/settings.css') }}" media="screen" />
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/revolution/css/layers.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/revolution/css/navigation.css') }}">-->
        
        <link rel="stylesheet" href="{{asset('assets/css/ServicesCss/popupRevolution.css')}}" />

       <!-- <link rel="stylesheet" href="{{asset('assets/css/ServicesCss/mergeAnimateBootstrapStyleResponsive.css')}}" />-->
         <!-- bootstrap -->
       <!-- <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />-->
        
        <!--<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />-->
        <!-- responsive css -->
        <!--<link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}" />-->
        <!--[if IE]>
            <script src="{{ asset('assets/js/html5shiv.js') }}"></script>
        <![endif]-->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "WEB IDEAL",
  "alternateName": "{{ __('messages.alternateNameOrganization') }}",
  "url": "https://www.websites-ideal.com/",
  "logo": "https://www.websites-ideal.com/assets/images/logo-white.webp",
  "contactPoint": {
    "@type": "ContactPoint",
    "telephone": "+212 615-564-741",
    "contactType": "customer service",
    "contactOption": "TollFree",
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

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "ProfessionalService",
  "name": "{{ __('messages.ProfessionalServiceName') }}",
  "image": "https://www.websites-ideal.com/assets/images/logo-white.webp",
  "@id": "https://www.websites-ideal.com",
  "url": "https://www.websites-ideal.com",
  "telephone": "+212 615-564-741",
  "priceRange": "2500-25000",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "El baraka rue 45 casablanca",
    "addressLocality": "casablanca",
    "postalCode": "20630",
    "addressCountry": "MA"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": 33.592312,
    "longitude": -7.594227
  },
  "openingHoursSpecification": {
    "@type": "OpeningHoursSpecification",
    "dayOfWeek": [
      "Monday",
      "Tuesday",
      "Wednesday",
      "Thursday",
      "Friday",
      "Saturday",
      "Sunday"
    ],
    "opens": "00:00",
    "closes": "23:59"
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



<!-- start slider section --> <section class="wow fadeIn example no-padding no-transition"> <article class="content"> 

<div id="rev_slider_1078_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="classic4export" data-source="gallery" style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;"> 
<!-- start revolution slider 5.4.1 fullwidth mode --> 

<div id="rev_slider_1078_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.1"> 
<ul>
<!-- slide --> 
<li data-index="rs-3045" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="200"  data-thumb="{{ asset('assets/images/slides/img3.webp') }}"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="100" data-fsslotamount="0" data-saveperformance="off"  data-title="" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">


	<div class="opacity-extra-medium bg-black position-relative z-index-1">
	</div> 
	<!-- main image --> <img src="{{ asset('assets/images/slides/img3.webp') }}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1" class="rev-slidebg" data-no-retina> 
	<!-- layer nr. 3 --> 

	<div class="tp-caption NotGeneric-Title tp-resizeme" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-115','-110','-90','-90']" data-fontsize="['12','12','12','12']" data-lineheight="['20','20','20','20']" data-width="none" data-height="none" data-whitespace="nowrap" data-visibility="['on', 'on', 'on', 'on']" data-type="text" data-color="['#FFF']" data-responsive_offset="on" data-responsive="on" data-frames='[{"from":"y:50px;opacity:0;","speed":1000,"to":"o:1;","delay":300,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[175%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);bw:2px 2px 2px 2px;"}]' data-textAlign="['inherit', 'inherit', 'right', 'center']" data-paddingtop="[10,10,10,10]" data-paddingright="[30,30,30,30]" data-paddingbottom="[10,10,10,10]" data-paddingleft="[30,30,30,30]" data-basealign="slide" style="z-index: 7; white-space: nowrap; text-transform: uppercase; font-family:'Montserrat', sans-serif !important; font-weight: 500; letter-spacing:2px;"> {{ __('messages.slide1-part1') }}
	</div> 
	<!-- layer nr. 4 --> 

	<div class="tp-caption NotGeneric-SubTitle tp-resizeme " data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-fontsize="['50','50','40','30']" data-lineheight="['75','75','60','60']" data-width="none" data-height="none" data-whitespace="nowrap" data-visibility="['on', 'on', 'on', 'on']" data-type="button" data-color="['#FFF']" data-responsive_offset="on" data-responsive="on" data-frames='[{"from":"y:50px;opacity:0;","speed":1500,"to":"o:1;","delay":600,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[175%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);bw:2px 2px 2px 2px;"}]' data-textAlign="['center', 'center', 'center', 'center']" data-paddingtop="[10,10,10,10]" data-paddingright="[30,30,30,30]" data-paddingbottom="[10,10,10,10]" data-paddingleft="[30,30,30,30]" data-basealign="slide" style="z-index: 8; white-space: nowrap; font-family:'Montserrat', sans-serif !important; font-weight: 600; letter-spacing: -1px;">
	<!-- Chaque entreprise 
	<br> a besoin d'un site web --> {{ __('messages.slide1-part2') }} <br/> {{ __('messages.slide1-part3') }} 
	</div> 
	<!-- layer nr. 5 --> 
	<!-- layer nr. 5 --> <a href="{{ (app()->getLocale() == 'en') ? route('servicesEn', ['locale' => app()->getLocale()]) : route('services') }}" class="tp-caption btn btn-transparent-white btn-medium border-radius-4 z-index-5" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['130','130','110','110']" data-fontsize="['12','14','14','14']" data-whitespace="['nowrap','nowrap','nowrap','normal']" data-visibility="['on', 'on', 'on', 'on']" data-type="text" data-color="['#FFFFFF']" data-responsive_offset="on" data-responsive="on" data-frames='[{"from":"y:150px;opacity:0;","speed":1500,"to":"o:1;","delay":900,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[175%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0, 0, 0, 1.00);bc:rgba(255, 255, 255, 1.00);bw:2px 2px 2px 2px;"}]' data-textAlign="['inherit', 'inherit', 'right', 'center']" data-paddingtop="[6,6,6,6]" data-paddingright="[26,26,26,26]" data-paddingbottom="[6,6,6,6]" data-paddingleft="[26,26,26,26]" data-basealign="slide">{{ __('messages.slide1-our-services') }}</a> 
	<!-- layer nr. 6 --> 
</li> 
<li data-index="rs-2" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="200" data-thumb="{{ asset('assets/images/slides/img1.webp') }}" data-rotate="0" data-fstransition="fade" data-fsmasterspeed="100" data-fsslotamount="0" data-saveperformance="off" data-title="" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description=""> 

	<div class="opacity-extra-medium bg-black position-relative z-index-1">
	</div> 
	<!-- main image --> <img src="{{ asset('assets/images/slides/img1.webp') }}" alt="Ocean" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1" class="rev-slidebg"> 
	<!-- layer nr. 3 --> 

	<div class="tp-caption NotGeneric-Title tp-resizeme" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-115','-110','-90','-90']" data-fontsize="['12','12','12','12']" data-lineheight="['20','20','20','20']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames='[{"from":"y:50px;opacity:0;","speed":1000,"to":"o:1;","delay":300,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[175%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);bw:2px 2px 2px 2px;"}]' data-textAlign="['center','center','center','center']" data-paddingtop="[10,10,10,10]" data-paddingright="[0,0,0,0]" data-paddingbottom="[10,10,10,10]" data-paddingleft="[0,0,0,0]" style="z-index: 7; white-space: nowrap; text-transform: uppercase; font-family:'Montserrat', sans-serif !important; font-weight: 500; letter-spacing:2px;">{{ __('messages.slide2-part1') }}
	</div> 
	<!-- layer nr. 4 --> 

	<div class="tp-caption NotGeneric-SubTitle tp-resizeme " data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-fontsize="['50','50','40','30']" data-lineheight="['75','75','60','60']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames='[{"from":"y:50px;opacity:0;","speed":1000,"to":"o:1;","delay":600,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[175%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);bw:2px 2px 2px 2px;"}]' data-textAlign="['center','center','center','center']" data-paddingtop="[10,10,10,10]" data-paddingright="[0,0,0,0]" data-paddingbottom="[10,10,10,10]" data-paddingleft="[0,0,0,0]" style="z-index: 8; white-space: nowrap; font-family:'Montserrat', sans-serif !important; font-weight: 600; letter-spacing: -1px;"> {{ __('messages.slide2-part2') }} <br/> {{ __('messages.slide2-part3') }} 
	</div> 
	<!-- layer nr. 5 --> <a href="{{ (app()->getLocale() == 'en') ? route('servicesEn', ['locale' => app()->getLocale()]) : route('services') }}" class="tp-caption btn btn-transparent-white btn-medium border-radius-4 z-index-5" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['130','130','110','110']" data-fontsize="['12','14','14','14']" data-whitespace="['nowrap','nowrap','nowrap','normal']" data-visibility="['on', 'on', 'on', 'on']" data-type="text" data-color="['#FFFFFF']" data-responsive_offset="on" data-responsive="on" data-frames='[{"from":"y:150px;opacity:0;","speed":1500,"to":"o:1;","delay":900,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[175%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0, 0, 0, 1.00);bc:rgba(255, 255, 255, 1.00);bw:2px 2px 2px 2px;"}]' data-textAlign="['inherit', 'inherit', 'right', 'center']" data-paddingtop="[6,6,6,6]" data-paddingright="[26,26,26,26]" data-paddingbottom="[6,6,6,6]" data-paddingleft="[26,26,26,26]" data-basealign="slide">{{ __('messages.slide1-our-services') }}</a> 
	<!-- LAYER NR. 6 --> 
</li> 
<!-- slide --> 
<li data-index="rs-3" data-transition="fade" data-slotamount="3" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="500" data-thumb="{{ asset('assets/images/slides/img2.webp') }}" data-rotate="0" data-saveperformance="off" data-title="" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description=""> 

	<div class="opacity-extra-medium bg-black position-relative z-index-1">
	</div> 
	<!-- main image --> <img src="{{ asset('assets/images/slides/img2.webp') }}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1" class="rev-slidebg" data-no-retina> 
	<!-- layer nr. 3 --> 

	<div class="tp-caption NotGeneric-Title tp-resizeme" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-115','-110','-90','-90']" data-fontsize="['12','12','12','12']" data-lineheight="['20','20','20','20']" data-width="none" data-height="none" data-whitespace="nowrap" data-visibility="['on', 'on', 'on', 'on']" data-type="text" data-color="['#FFF']" data-responsive_offset="on" data-responsive="on" data-frames='[{"from":"y:50px;opacity:0;","speed":1000,"to":"o:1;","delay":300,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[175%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);bw:2px 2px 2px 2px;"}]' data-textAlign="['inherit', 'inherit', 'right', 'center']" data-paddingtop="[10,10,10,10]" data-paddingright="[30,30,30,30]" data-paddingbottom="[10,10,10,10]" data-paddingleft="[30,30,30,30]" data-basealign="slide" style="z-index: 7; white-space: nowrap; text-transform: uppercase; font-family:'Montserrat', sans-serif !important; font-weight: 500; letter-spacing:2px;">{{ __('messages.slide3-part1') }}
	</div> 
	<!-- layer nr. 4 --> 

	<div class="tp-caption NotGeneric-SubTitle tp-resizeme " data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-fontsize="['50','50','40','30']" data-lineheight="['75','75','60','60']" data-width="none" data-height="none" data-whitespace="nowrap','now" data-visibility="['on', 'on', 'on', 'on']" data-type="button" data-color="['#FFF']" data-responsive_offset="on" data-responsive="on" data-frames='[{"from":"y:50px;opacity:0;","speed":1500,"to":"o:1;","delay":600,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[175%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);bw:2px 2px 2px 2px;"}]' data-textAlign="['center', 'center', 'center', 'center']" data-paddingtop="[10,10,10,10]" data-paddingright="[30,30,30,30]" data-paddingbottom="[10,10,10,10]" data-paddingleft="[30,30,30,30]" data-basealign="slide" style="z-index: 8; white-space: nowrap; font-family:'Montserrat', sans-serif !important; font-weight: 600; letter-spacing: -1px;"> {{ __('messages.slide3-part2') }} <br/> {{ __('messages.slide3-part3') }} 
	</div> 
	<!-- layer nr. 5 --> <a href="{{ (app()->getLocale() == 'en') ? route('servicesEn', ['locale' => app()->getLocale()]) : route('services') }}" class="tp-caption btn btn-transparent-white btn-medium border-radius-4 z-index-5" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['130','130','110','110']" data-fontsize="['12','14','14','14']" data-whitespace="['nowrap','nowrap','nowrap','normal']" data-visibility="['on', 'on', 'on', 'on']" data-type="text" data-color="['#FFFFFF']" data-responsive_offset="on" data-responsive="on" data-frames='[{"from":"y:150px;opacity:0;","speed":1500,"to":"o:1;","delay":900,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[175%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0, 0, 0, 1.00);bc:rgba(255, 255, 255, 1.00);bw:2px 2px 2px 2px;"}]' data-textAlign="['inherit', 'inherit', 'right', 'center']" data-paddingtop="[6,6,6,6]" data-paddingright="[26,26,26,26]" data-paddingbottom="[6,6,6,6]" data-paddingleft="[26,26,26,26]" data-basealign="slide">{{ __('messages.slide1-our-services') }}</a> 
	<!-- layer nr. 6 --> 
</li> 
</ul> 
</div> 
</div> 
<!-- end revolution slider --> </article> </section> 
<!-- end slider section --> 
<!-- start about section --> <section class="wow fadeIn cover-background md-no-background-img bg-medium-light-gray" style="background-image: url('{{ asset('assets/images/banner-bg1.webp')}}')"> 

<div class="container"> 

<div class="row"> 

<div class="col-12 col-lg-6 offset-lg-6 wow fadeIn"> 

<div class="row m-0"> 

<div class="col-12 text-center text-lg-left sm-no-padding-lr last-paragraph-no-margin margin-60px-bottom md-margin-30px-bottom"> 

<span class="text-medium text-deep-pink alt-font margin-10px-bottom d-inline-block">
</span> <h1 class="alt-font text-extra-dark-gray font-weight-600 h3">{{__('messages.section-about-title') }}</h1> 

<p> {!! __('messages.section-about-p1') !!} </p> 

<p> {{__('messages.section-about-p2') }} </p> 
</div> 
<!-- star feature box item --> 

<div class="col-12 col-md-6 sm-margin-30px-bottom last-paragraph-no-margin sm-no-padding-lr text-center "> <i class="icon-browser text-deep-pink icon-extra-medium margin-20px-bottom md-margin-15px-bottom "></i> 

<div class="feature-content"> 

<h2 class="alt-font font-weight-600 text-extra-dark-gray margin-5px-bottom h6">{!! __('messages.section-about-service1') !!}
</h2> 
</div> 
</div> 
<!-- end feature box item --> 
<!-- star feature box item --> 

<div class="col-12 col-md-6 last-paragraph-no-margin sm-no-padding-lr text-center "> <i class="icon-laptop text-deep-pink icon-extra-medium margin-20px-bottom md-margin-15px-bottom"></i> 

<div class="feature-content"> 

<h2 class="alt-font font-weight-600 text-extra-dark-gray margin-5px-bottom h6">{!!  __('messages.section-about-service2') !!}
</h2> 
</div> 
</div> 
<!-- end feature box item --> 
</div> 
</div> 
</div> 
</div> </section> 
<!-- end about section --> 
<!-- start services section --> 
<section class="wow fadeIn"> 

<div class="container"> 

<div class="row justify-content-center"> 

<div class="col-12 col-lg-8 margin-eight-bottom text-center last-paragraph-no-margin"> <h1 class="alt-font text-extra-dark-gray font-weight-600 h3">{{ __('messages.section-services-title') }}</h1> 
</div> 

<div class="row"> 
<!-- start services item --> 

<div class="col-12 col-lg-3 col-md-6 md-margin-four-bottom sm-margin-eight-bottom wow fadeInUp last-paragraph-no-margin" style="visibility: visible; animation-name: fadeInUp;"> 

<div class="bg-white box-shadow-light text-center padding-eighteen-tb feature-box-8 position-relative z-index-5"> 

<div class="d-inline-block margin-20px-bottom"><i class="icon-desktop text-white-2 icon-round-small bg-deep-pink"></i>
</div> 

<h2 class="alt-font text-extra-dark-gray font-weight-600 margin-10px-bottom h6">{!! __('messages.section-services-part1-title') !!}
</h2> 

<p class="width-75 lg-width-90 mx-auto">{!! __('messages.section-services-part1-p') !!}</p> 

<div class="feature-box-overlay bg-deep-pink">
</div> 
</div> 
</div> 
<!-- end services item --> 
<!-- start services item --> 

<div class="col-12 col-lg-3 col-md-6 md-margin-four-bottom sm-margin-eight-bottom wow fadeInUp last-paragraph-no-margin" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;"> 

<div class="bg-white box-shadow-light text-center padding-eighteen-tb feature-box-8 position-relative z-index-5"> 

<div class="d-inline-block margin-20px-bottom"><i class="icon-browser text-white-2 icon-round-small bg-deep-pink"></i>
</div> 

<h2 class="alt-font text-extra-dark-gray font-weight-600 margin-10px-bottom h6">{!! __('messages.section-services-part2-title') !!}
</h2> 

<p class="width-75 lg-width-90 mx-auto">{!! __('messages.section-services-part2-p') !!}</p> 

<div class="feature-box-overlay bg-deep-pink">
</div> 
</div> 
</div> 
<!-- end services item --> 
<!-- start services item --> 

<div class="col-12 col-lg-3 col-md-6 sm-margin-eight-bottom wow fadeInUp last-paragraph-no-margin" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;"> 

<div class="bg-white box-shadow-light text-center padding-eighteen-tb feature-box-8 position-relative z-index-5"> 

<div class="d-inline-block margin-20px-bottom"><i class="icon-presentation text-white-2 icon-round-small bg-deep-pink"></i>
</div> 

<h2 class="alt-font text-extra-dark-gray font-weight-600 margin-10px-bottom h6 ">{{ __('messages.section-services-part3-title') }}
</h2> 

<p class="width-75 lg-width-90 mx-auto">{!! __('messages.section-services-part3-p') !!}</p> 

<div class="feature-box-overlay bg-deep-pink">
</div> 
</div> 
</div> 
<!-- end services item --> 
<!-- start services item --> 

<div class="col-12 col-lg-3 col-md-6 wow fadeInUp last-paragraph-no-margin" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;"> 

<div class="bg-white box-shadow-light text-center padding-eighteen-tb feature-box-8 position-relative z-index-5"> 

<div class="d-inline-block margin-20px-bottom"><i class="icon-tools text-white-2 icon-round-small bg-deep-pink"></i>
</div> 

<h2 class="alt-font text-extra-dark-gray font-weight-600 margin-10px-bottom h6">{{ __('messages.section-services-part4-title') }}
</h2> 

<p class="width-75 lg-width-90 mx-auto">{!! __('messages.section-services-part4-p') !!}</p> 

<div class="feature-box-overlay bg-deep-pink">
</div> 
</div> 
</div> 
<!-- end services item --> 
</div> 
</div> 
</div> 
</section> 
<!-- end services section --> 
<!-- start section --> <section class="p-0 wow fadeIn"> 

<div class="container-fluid"> 

<div class="row"> 
<!-- start features item --> 

<div class="col-12 col-lg-3 p-0 cover-background position-relative md-height-500px sm-height-300px wow fadeIn" style="background: transparent url('{{ asset('assets/images/examples/equipe.webp') }}')">
</div> 
<!-- end features item --> 
<!-- start features item --> 

<div class="col-12 col-lg-3 p-0 d-flex align-items-center position-relative bg-extra-dark-gray text-center text-lg-left wow fadeIn" data-wow-delay="0.2s"> 

<div class="padding-fifteen-all lg-padding-ten-all sm-padding-30px-all width-100"> 

<div class="alt-font text-medium-gray margin-10px-bottom">
</div> 

<h1 class="alt-font text-extra-large margin-20px-bottom text-white-2 width-90 lg-width-100 sm-margin-15px-bottom h3">{{ __('messages.section-competence-part1-title') }}
</h1> 

<p>{!! __('messages.section-competence-part1-p') !!}</p> 
<!-- <a href="about-us-simple.html" class="btn btn-transparent-white btn-small border-radius-4"><i class="fas fa-play-circle icon-very-small margin-5px-right ml-0" aria-hidden="true"></i>Read More</a> --> 
</div> 
</div> 
<!-- end features item --> 
<!-- start features item --> 

<div class="col-12 col-lg-3 p-0 cover-background position-relative md-height-500px sm-height-300px wow fadeIn" data-wow-delay="0.4s" style="background: transparent url('{{ asset('assets/images/examples/productivite.webp') }}')">
</div> 
<!-- end features item --> 
<!-- start features item --> 

<div class="col-12 col-lg-3 p-0 d-flex align-items-center position-relative bg-extra-dark-gray text-center text-lg-left wow fadeIn" data-wow-delay="0.6s"> 

<div class="padding-fifteen-all lg-padding-ten-all sm-padding-30px-all width-100"> 

<div class="alt-font text-medium-gray margin-10px-bottom">
</div> 

<h1 class="alt-font text-extra-large margin-20px-bottom text-white-2 width-90 lg-width-100 sm-margin-15px-bottom">{{ __('messages.section-competence-part2-title') }}
</h1> 

<p>{!! __('messages.section-competence-part2-p') !!}</p> 
<!-- <a href="about-us-classic.html" class="btn btn-transparent-white btn-small border-radius-4"><i class="fas fa-play-circle icon-very-small margin-5px-right ml-0" aria-hidden="true"></i>Read More</a> --> 
</div> 
</div> 
<!-- end features item --> 
</div> 
</div> </section> 
<!-- end section --> 
<!-- start portfolio section --> 
<!-- start portfolio section --> <section class="wow fadeIn padding-90px-top md-padding-50px-top sm-padding-30px-top"> 

<div class="container"> 

<div class="row"> 

<div class="col-12"> 
<!-- start filter navigation --> 
<ul class="portfolio-filter nav nav-tabs justify-content-center border-0 portfolio-filter-tab-1 font-weight-600 alt-font text-uppercase text-center margin-80px-bottom text-small md-margin-40px-bottom sm-margin-20px-bottom"> 
<li class="nav active"><a href="javascript:void(0);" data-filter="*" class="light-gray-text-link text-very-small">{{ __('messages.section-portfolio-title1') }}</a></li> 
<li class="nav"><a href="javascript:void(0);" data-filter=".vitrine" class="light-gray-text-link text-very-small">{{ __('messages.section-portfolio-title2') }}</a></li> 
<li class="nav"><a href="javascript:void(0);" data-filter=".catalogue" class="light-gray-text-link text-very-small">{{ __('messages.section-portfolio-title3') }}</a></li> 
<li class="nav"><a href="javascript:void(0);" data-filter=".ecommerce" class="light-gray-text-link text-very-small">{{ __('messages.section-portfolio-title4') }}</a></li> 
<li class="nav"><a href="javascript:void(0);" data-filter=".application" class="light-gray-text-link text-very-small">{{ __('messages.section-portfolio-title5') }}</a></li> 
</ul> 
<!-- end filter navigation --> 
</div> 
</div> 
</div> 

<div class="container"> 

<div class="row"> 

<div class="col-12 px-0 sm-padding-15px-lr"> 

<div class="filter-content overflow-hidden"> 
<ul class="portfolio-grid work-4col gutter-medium hover-option10 lightbox-portfolio"> 
<li class="grid-sizer"></li> 
<!-- start portfolio item --> 
<li class="grid-item catalogue wow zoomIn"> <figure> 

<div class="portfolio-img bg-black"><img src="{{ asset('assets/images/portfolio275/imageportfoliocatalogue1.webp') }}" alt=""/>
</div> <figcaption> 

<div class="portfolio-hover-main"> 

<div class="portfolio-hover-box align-middle"> 

<div class="portfolio-icon"> 
<!--<a href="single-project-page-01.html"><i class="fas fa-link" aria-hidden="true"></i></a>--> <a class="gallery-link" title="IMAGE TITLE" href="{{ asset('assets/images/portfolio/imageportfoliocatalogue1.webp') }}"><i class="fas fa-search" aria-hidden="true"></i></a> 
</div> 

<div class="portfolio-hover-content"> 

<span class="font-weight-600 line-height-normal alt-font text-white-2 text-uppercase margin-5px-bottom d-block">Herbal Beauty Salon
</span> 
<!-- 

<p class="text-medium-gray text-uppercase text-extra-small mb-0">Branding and Brochure</p> --> 
</div> 
</div> 
</div> </figcaption> </figure> </li> 
<!-- end portfolio item --> 
<!-- start portfolio item --> 
<li class="grid-item vitrine wow zoomIn" data-wow-delay="0.2s"> <figure> 

<div class="portfolio-img bg-black"><img src="{{ asset('assets/images/portfolio275/imageportfoliositevitrine4.webp') }}" alt=""/>
</div> <figcaption> 

<div class="portfolio-hover-main"> 

<div class="portfolio-hover-box align-middle"> 

<div class="portfolio-icon"> 
<!-- <a href="single-project-page-02.html"><i class="fas fa-link" aria-hidden="true"></i></a> --> <a class="gallery-link" title="IMAGE TITLE" href="{{ asset('assets/images/portfolio/imageportfoliositevitrine4.webp') }}"><i class="fas fa-search" aria-hidden="true"></i></a> 
</div> 

<div class="portfolio-hover-content"> 

<span class="font-weight-600 line-height-normal alt-font text-white-2 text-uppercase margin-5px-bottom d-block">Tailoring Interior
</span> 
<!-- 

<p class="text-medium-gray text-uppercase text-extra-small mb-0">Branding and Identity</p> --> 
</div> 
</div> 
</div> </figcaption> </figure> </li> 
<!-- end portfolio item --> 
<!-- start portfolio item --> 
<li class="grid-item application wow zoomIn"> <figure> 

<div class="portfolio-img bg-black"><img src="{{ asset('assets/images/portfolio275/imageportfoliocommandeenligne.webp') }}" alt=""/>
</div> <figcaption> 

<div class="portfolio-hover-main"> 

<div class="portfolio-hover-box align-middle"> 

<div class="portfolio-icon"> 
<!-- <a href="single-project-page-04.html"><i class="fas fa-link" aria-hidden="true"></i></a> --> <a class="gallery-link" title="IMAGE TITLE" href="{{ asset('assets/images/portfolio/imageportfoliocommandeenligne.webp') }}"><i class="fas fa-search" aria-hidden="true"></i></a> 
</div> 

<div class="portfolio-hover-content"> 

<span class="font-weight-600 line-height-normal alt-font text-white-2 text-uppercase margin-5px-bottom d-block">HardDot Stone
</span> 
<!-- 

<p class="text-medium-gray text-uppercase text-extra-small mb-0">Branding and Identity</p> --> 
</div> 
</div> 
</div> </figcaption> </figure> </li> 
<!-- end portfolio item --> 
<!-- start portfolio item --> 
<li class="grid-item vitrine wow zoomIn" data-wow-delay="0.2s"> <figure> 

<div class="portfolio-img bg-black"><img src="{{ asset('assets/images/portfolio275/imageportfoliositevitrine2.webp') }}" alt=""/>
</div> <figcaption> 

<div class="portfolio-hover-main"> 

<div class="portfolio-hover-box align-middle"> 

<div class="portfolio-icon"> 
<!-- <a href="single-project-page-05.html"><i class="fas fa-link" aria-hidden="true"></i></a> --> <a class="gallery-link" title="IMAGE TITLE" href="{{ asset('assets/images/portfolio/imageportfoliositevitrine2.webp') }}"><i class="fas fa-search" aria-hidden="true"></i></a> 
</div> 

<div class="portfolio-hover-content"> 

<span class="font-weight-600 line-height-normal alt-font text-white-2 text-uppercase margin-5px-bottom d-block">Crop Identity
</span> 
<!-- 

<p class="text-medium-gray text-uppercase text-extra-small mb-0">Branding and Brochure</p> --> 
</div> 
</div> 
</div> </figcaption> </figure> </li> 
<!-- end portfolio item --> 
<!-- start portfolio item --> 
<li class="grid-item ecommerce wow zoomIn"> <figure> 

<div class="portfolio-img bg-black"><img src="{{ asset('assets/images/portfolio275/imageportfolioecommerce3.webp') }}" alt=""/>
</div> <figcaption> 

<div class="portfolio-hover-main"> 

<div class="portfolio-hover-box align-middle"> 

<div class="portfolio-icon"> 
<!--<a href="single-project-page-01.html"><i class="fas fa-link" aria-hidden="true"></i></a>--> <a class="gallery-link" title="IMAGE TITLE" href="{{ asset('assets/images/portfolio/imageportfolioecommerce3.webp') }}"><i class="fas fa-search" aria-hidden="true"></i></a> 
</div> 

<div class="portfolio-hover-content"> 

<span class="font-weight-600 line-height-normal alt-font text-white-2 text-uppercase margin-5px-bottom d-block">Violator Series
</span> 
<!-- 

<p class="text-medium-gray text-uppercase text-extra-small mb-0">Web and Photography</p> --> 
</div> 
</div> 
</div> </figcaption> </figure> </li> 
<!-- end portfolio item --> 
<!-- start portfolio item --> 
<li class="grid-item ecommerce wow zoomIn" data-wow-delay="0.4s"> <figure> 

<div class="portfolio-img bg-black"><img src="{{ asset('assets/images/portfolio275/imageportfolioecommerce1.webp') }}" alt=""/>
</div> <figcaption> 

<div class="portfolio-hover-main"> 

<div class="portfolio-hover-box align-middle"> 

<div class="portfolio-icon"> 
<!-- <a href="single-project-page-02.html"><i class="fas fa-link" aria-hidden="true"></i></a> --> <a class="gallery-link" title="IMAGE TITLE" href="{{ asset('assets/images/portfolio/imageportfolioecommerce1.webp') }}"><i class="fas fa-search" aria-hidden="true"></i></a> 
</div> 

<div class="portfolio-hover-content"> 

<span class="font-weight-600 line-height-normal alt-font text-white-2 text-uppercase margin-5px-bottom d-block">Jeremy Dupont
</span> 
<!-- 

<p class="text-medium-gray text-uppercase text-extra-small mb-0">Branding and Identity</p> --> 
</div> 
</div> 
</div> </figcaption> </figure> </li> 
<!-- end portfolio item --> 
<!-- start portfolio item --> 
<li class="grid-item ecommerce wow zoomIn" data-wow-delay="0.4s"> <figure> 

<div class="portfolio-img bg-black"><img src="{{ asset('assets/images/portfolio275/imageportfolioecommerce4.webp') }}" alt=""/>
</div> <figcaption> 

<div class="portfolio-hover-main"> 

<div class="portfolio-hover-box align-middle"> 

<div class="portfolio-icon"> 
<!-- <a href="single-project-page-03.html"><i class="fas fa-link" aria-hidden="true"></i></a> --> <a class="gallery-link" title="IMAGE TITLE" href="{{ asset('assets/images/portfolio/imageportfolioecommerce4.webp') }}"><i class="fas fa-search" aria-hidden="true"></i></a> 
</div> 

<div class="portfolio-hover-content"> 

<span class="font-weight-600 line-height-normal alt-font text-white-2 text-uppercase margin-5px-bottom d-block">The Aparthotel
</span> 
<!-- 

<p class="text-medium-gray text-uppercase text-extra-small mb-0">Web and Photography</p> --> 
</div> 
</div> 
</div> </figcaption> </figure> </li> 
<!-- end portfolio item --> 
<!-- start portfolio item --> 
<li class="grid-item application wow zoomIn" data-wow-delay="0.4s"> <figure> 

<div class="portfolio-img bg-black"><img src="{{ asset('assets/images/portfolio275/imageportfolioecommerce2.webp') }}" alt=""/>
</div> <figcaption> 

<div class="portfolio-hover-main"> 

<div class="portfolio-hover-box align-middle"> 

<div class="portfolio-icon"> 
<!-- <a href="single-project-page-03.html"><i class="fas fa-link" aria-hidden="true"></i></a> --> <a class="gallery-link" title="IMAGE TITLE" href="{{ asset('assets/images/portfolio/imageportfolioecommerce2.webp') }}"><i class="fas fa-search" aria-hidden="true"></i></a> 
</div> 

<div class="portfolio-hover-content"> 

<span class="font-weight-600 line-height-normal alt-font text-white-2 text-uppercase margin-5px-bottom d-block">The Aparthotel
</span> 
<!-- 

<p class="text-medium-gray text-uppercase text-extra-small mb-0">Web and Photography</p> --> 
</div> 
</div> 
</div> </figcaption> </figure> </li> 
<!-- end portfolio item --> 
</ul> 
</div> 
</div> 
</div> 
</div> </section> 
<!-- end portfolio section --> 
<!-- start parallax section --> <section class="parallax bg-extra-dark-gray" data-stellar-background-ratio="0.6" > 

<div class="opacity-medium bg-extra-dark-gray">
</div> 

<div class="container-fluid position-relative"> 

<div class="row align-items-center"> 

<div class="col-12 col-lg-6 text-center md-margin-50px-bottom sm-margin-30px-bottom wow fadeIn"> <img src="{{ asset('assets/images/homepage-option15-image-3.webp') }}" alt="" class="w-100"> 
</div> 

<div class="col-12 col-lg-6 wow fadeIn" data-wow-delay="0.2s"> 

<div class="width-75 lg-width-100 padding-three-lr sm-no-padding-lr"> <h1 class="alt-font text-white-2 font-weight-600 h4">{{ __('messages.section-quality-title') }}</h1> 
<ul class="p-0 list-style-4 margin-30px-bottom list-style-color"> 
<li>{{ __('messages.section-quality-li1') }}</li> 
<li>{{ __('messages.section-quality-li2') }}</li> 
<li>{{ __('messages.section-quality-li3') }}</li> 
<li>{{ __('messages.section-quality-li4') }}</li> 
<li>{{ __('messages.section-quality-li5') }}</li> 
</ul> <a href="{{ (app()->getLocale() == 'en') ? route('portfolioEn', ['locale' => app()->getLocale()]) : route('portfolio') }}" class="btn btn-dark-gray btn-small text-extra-small border-radius-4 margin-20px-top"><i class="fas fa-play-circle icon-very-small margin-5px-right ml-0" aria-hidden="true"></i> {{ __('messages.section-quality-btn') }}</a> 
</div> 
</div> 
</div> 
</div> </section> 
<!-- end parallax section --> 
<!-- start parallax feature box --> <section class="p-0 wow fadeIn bg-light-gray"> 

<div class="container-fluid"> 

<div class="row"> 

<div class="col-12 col-lg-6 wow fadeInLeft padding-four-all md-padding-eight-all md-padding-15px-lr sm-padding-50px-tb"> 

<div class="row m-0"> 

<div class="col-12 col-xl-10 margin-six-bottom lg-margin-six-bottom md-margin-30px-bottom sm-no-margin-bottom"> <h1 class="alt-font text-extra-dark-gray font-weight-600 text-center text-lg-left md-width-70 mx-auto mx-lg-0 sm-width-100 sm-margin-30px-bottom h4">{{ __('messages.section-value-title') }}</h1> 
</div> 
<!-- start feature box item --> 

<div class="col-12 col-xl-6 col-lg-12 col-md-6 margin-six-bottom md-margin-30px-bottom last-paragraph-no-margin"> 

<div class="feature-box-5 position-relative"> <i class="icon-desktop text-medium-gray icon-medium"></i> 

<div class="feature-content"> 

<h2 class="text-extra-dark-gray margin-5px-bottom alt-font font-weight-600 h6">{{ __('messages.section-value-part1-title') }}
</h2> 

<p class="width-95 sm-width-100">{{ __('messages.section-value-part1-p') }}</p> 
</div> 
</div> 
</div> 
<!-- end feature box item --> 
<!-- start feature box item --> 

<div class="col-12 col-xl-6 col-lg-12 col-md-6 lg-margin-six-bottom md-no-margin-bottom sm-margin-30px-bottom last-paragraph-no-margin"> 

<div class="feature-box-5 position-relative"> <i class="icon-wallet text-medium-gray icon-medium"></i> 

<div class="feature-content"> 

<h2 class="text-extra-dark-gray margin-5px-bottom alt-font font-weight-600 h6">{{ __('messages.section-value-part2-title') }}
</h2> 

<p class="width-95 sm-width-100">{{ __('messages.section-value-part2-p') }}</p> 
</div> 
</div> 
</div> 
<!-- end feature box item --> 
<!-- start feature box item --> 

<div class="col-12 col-xl-6 col-lg-12 col-md-6 margin-six-bottom md-margin-30px-bottom last-paragraph-no-margin"> 

<div class="feature-box-5 position-relative"> <i class="icon-book-open text-medium-gray icon-medium"></i> 

<div class="feature-content"> 

<h2 class="text-extra-dark-gray margin-5px-bottom alt-font font-weight-600 h6">{{ __('messages.section-value-part3-title') }}
</h2> 

<p class="width-95 sm-width-100">{{ __('messages.section-value-part3-p') }}</p> 
</div> 
</div> 
</div> 
<!-- end feature box item --> 
<!-- start feature box item --> 

<div class="col-12 col-xl-6 col-lg-12 col-md-6 last-paragraph-no-margin"> 

<div class="feature-box-5 position-relative "> <i class="icon-camera text-medium-gray icon-medium"></i> 

<div class="feature-content"> 

<h2 class="text-extra-dark-gray margin-10px-bottom alt-font font-weight-600 h6">{{ __('messages.section-value-part4-title') }}
</h2> 

<p class="width-95 sm-width-100">{{ __('messages.section-value-part4-p') }}</p> 
</div> 
</div> 
</div> 
<!-- end feature box item --> 
</div> 
</div> 

<div class="col-12 col-lg-6 cover-background md-height-400px wow fadeInRight" style="background-image:url('{{ asset('assets/images/examples/beautifuldigital.webp') }}');">
</div> 
</div> 
</div> </section> 
<!-- end parallax feature box --> 
<!-- start video section http://placehold.it/1920x1100--> <section class="parallax" data-stellar-background-ratio="0" style="background-image:url('{{ asset('assets/images/examples/internet-4463031_1920.webp') }}');"> 

<div class="opacity-full bg-extra-dark-gray">
</div> 

<div class="container position-relative"> 

<div class="row justify-content-center"> 

<div class="col-12 col-xl-9 col-lg-10 text-center wow fadeIn last-paragraph-no-margin"> <img src="{{ asset('assets/images/icon-play-white.png') }}" class="width-10 sm-width-50px margin-30px-bottom" alt=""/> <h1 class="alt-font text-white-2 h4">{{ __('messages.section-interface-title') }}</h1> 

<p class="width-75 mx-auto text-medium-gray lg-width-90 sm-width-100 sm-margin-30px-bottom">{!! __('messages.section-interface-p') !!}</p> <a href="{{ (app()->getLocale() == 'en') ? route('aboutEn', ['locale' => app()->getLocale()]) : route('about') }}" class="btn btn-white btn-small text-extra-small border-radius-4 margin-45px-top sm-no-margin-top"><i class="fas fa-play-circle icon-very-small margin-5px-right ml-0" aria-hidden="true"></i> {{ __('messages.section-interface-btn') }}</a> 
</div> 
</div> 
</div> </section> 
<!-- end video section --> 
<!-- start testimonial slider section --> <section class="bg-light-gray wow fadeIn"> 

<div class="container"> 

<div class="row"> 

<div class="col-12 text-center wow fadeIn"> <h1 class="text-uppercase alt-font text-extra-dark-gray margin-20px-bottom font-weight-700 md-width-100 h5">{{ __('messages.section-Testimonials-title') }}</h1> 

<span class="separator-line-horrizontal-medium-light2 bg-deep-pink d-table mx-auto width-100px">
</span> 
</div> 
</div> 

<div class="row"> 

<div class="col-12 col-lg-4 md-margin-two-bottom wow fadeIn last-paragraph-no-margin testimonial-style3"> 

<div class="testimonial-content-box padding-twelve-all bg-white border-radius-6 box-shadow arrow-bottom md-padding-seven-all sm-padding-eight-all"> {{ __('messages.section-Testimonials-part1-p') }} 
</div> 
<!-- start testimonials item --> 

<div class="testimonial-box padding-25px-all sm-padding-20px-all"> 

<div class="image-box width-20"><img src="{{ asset('assets/images/user.png') }}" class="rounded-circle" alt="">
</div> 

<div class="name-box padding-20px-left"> 

<div class="alt-font font-weight-600 text-small text-uppercase text-extra-dark-gray"> {{ __('messages.section-Testimonials-part1-user') }}
</div> 

<p class="text-extra-small text-uppercase text-medium-gray"> {{ __('messages.section-Testimonials-part1-job') }}</p> 
</div> 
</div> 
</div> 
<!-- end testimonials item --> 
<!-- start testimonials item --> 

<div class="col-12 col-lg-4 sm-margin-two-bottom wow fadeIn last-paragraph-no-margin testimonial-style3" data-wow-delay="0.2s"> 

<div class="testimonial-content-box padding-twelve-all bg-white border-radius-6 box-shadow arrow-bottom md-padding-seven-all sm-padding-eight-all"> {{ __('messages.section-Testimonials-part2-p') }} 
</div> 

<div class="testimonial-box padding-25px-all sm-padding-20px-all"> 

<div class="image-box width-20"><img src="{{ asset('assets/images/user.png') }}" class="rounded-circle" alt="">
</div> 

<div class="name-box padding-20px-left"> 

    <div class="alt-font font-weight-600 text-small text-uppercase text-extra-dark-gray"> {{ __('messages.section-Testimonials-part2-user') }}
    </div> 

    <p class="text-extra-small text-uppercase text-medium-gray"> {{ __('messages.section-Testimonials-part2-job') }}</p> 
</div> 
</div> 
</div> 
<!-- end testimonials item --> 
<!-- start testimonials item --> 

<div class="col-12 col-lg-4 wow fadeIn last-paragraph-no-margin testimonial-style3" data-wow-delay="0.4s"> 

<div class="testimonial-content-box padding-twelve-all bg-white border-radius-6 box-shadow arrow-bottom md-padding-seven-all sm-padding-eight-all"> {{ __('messages.section-Testimonials-part3-p') }} 
</div> 

<div class="testimonial-box padding-25px-all sm-padding-20px-all"> 

<div class="image-box width-20"><img src="{{ asset('assets/images/user.png') }}" class="rounded-circle" alt="">
</div> 

<div class="name-box padding-20px-left"> 

<div class="alt-font font-weight-600 text-small text-uppercase text-extra-dark-gray"> {{ __('messages.section-Testimonials-part3-user') }}
</div> 

<p class="text-extra-small text-uppercase text-medium-gray"> {{ __('messages.section-Testimonials-part3-job') }}</p> 
</div> 
</div> 
</div> 
<!-- end testimonials item --> 
</div> 
</div> </section> 
<!-- end testimonial slider section -->

    <x-slot name="script"> 

       <!--  <script  src="{{ asset('assets/js/aboutJs/merge.js') }}"></script> -->
        <script  src="{{ asset('assets/js/jquery.js') }}"></script>

        <script  src="{{ asset('assets/js/bootstrap.bundle.js') }}"></script>
        

        <script  src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
        <script type="text/javascript">
             /*==============================================================

                     lightbox gallery

                     ==============================================================*/

                     $('.lightbox-gallery').magnificPopup({

                        delegate: 'a',

                        type: 'image',

                        tLoading: 'Loading image #%curr%...',

                        mainClass: 'mfp-fade',

                        fixedContentPos: true,

                        closeBtnInside: false,

                        gallery: {

                            enabled: true,

                            navigateByImgClick: true,

                            preload: [0, 1] // Will preload 0 - before current, and 1 after the current image

                        }

                    });

                    /* for group gallery */

                    var lightboxgallerygroups = {};

                    $('.lightbox-group-gallery-item').each(function () {

                        var id = $(this).attr('data-group');

                        if (!lightboxgallerygroups[id]) {

                            lightboxgallerygroups[id] = [];

                        }

                        lightboxgallerygroups[id].push(this);

                    });

                    $.each(lightboxgallerygroups, function () {

                        $(this).magnificPopup({

                            type: 'image',

                            closeOnContentClick: true,

                            closeBtnInside: false,

                            gallery: {enabled: true}

                        });

                    });



                    $('.lightbox-portfolio').magnificPopup({

                        delegate: '.gallery-link',

                        type: 'image',

                        tLoading: 'Loading image #%curr%...',

                        mainClass: 'mfp-fade',

                        fixedContentPos: true,

                        closeBtnInside: false,

                        gallery: {

                            enabled: true,

                            navigateByImgClick: false,

                            preload: [0, 1] // Will preload 0 - before current, and 1 after the current image

                        }

                    });

                    /*==============================================================

                     single image lightbox - zoom animation

                     ==============================================================*/

                    $('.single-image-lightbox').magnificPopup({

                        type: 'image',

                        closeOnContentClick: true,

                        fixedContentPos: true,

                        closeBtnInside: false,

                        mainClass: 'mfp-no-margins mfp-with-zoom', // class to remove default margin from left and right side

                        image: {

                            verticalFit: true

                        },

                        zoom: {

                            enabled: true,

                            duration: 300 // don't foget to change the duration also in CSS

                        }

                    });

                    /*==============================================================

                     zoom gallery

                     ==============================================================*/

                    $('.zoom-gallery').magnificPopup({

                        delegate: 'a',

                        type: 'image',

                        mainClass: 'mfp-with-zoom mfp-img-mobile',

                        fixedContentPos: true,

                        closeBtnInside: false,

                        image: {

                            verticalFit: true,

                            titleSrc: function (item) {

                                return item.el.attr('title');

                            }

                        },

                        gallery: {

                            enabled: true

                        },

                        zoom: {

                            enabled: true,

                            duration: 300, // don't foget to change the duration also in CSS

                            opener: function (element) {

                                return element.find('img');

                            }

                        }

                    });
                    /*==============================================================*/

                    //Modal popup - START CODE

                    /*==============================================================*/

                    $('.modal-popup').magnificPopup({

                        type: 'inline',

                        preloader: false,

                        // modal: true,

                        blackbg: true,

                        callbacks: {

                            open: function () {

                                $('html').css('margin-right', 0);

                            }

                        }

                    });

                    $(document).on('click', '.popup-modal-dismiss', function (e) {

                        e.preventDefault();

                        $.magnificPopup.close();

                    });



                    /*==============================================================*/

                    //Modal popup - zoom animation - START CODE

                    /*==============================================================*/

                    $('.popup-with-zoom-anim').magnificPopup({

                        type: 'inline',

                        fixedContentPos: false,

                        fixedBgPos: true,

                        overflowY: 'auto',

                        closeBtnInside: true,

                        preloader: false,

                        midClick: true,

                        removalDelay: 300,

                        blackbg: true,

                        mainClass: 'my-mfp-zoom-in'

                    });



                    $('.popup-with-move-anim').magnificPopup({

                        type: 'inline',

                        fixedContentPos: false,

                        fixedBgPos: true,

                        overflowY: 'auto',

                        closeBtnInside: true,

                        preloader: false,

                        midClick: true,

                        removalDelay: 300,

                        blackbg: true,

                        mainClass: 'my-mfp-slide-bottom'

                    });



                    /*==============================================================

                     popup with form

                     ==============================================================*/

                    $('.popup-with-form').magnificPopup({

                        type: 'inline',

                        preloader: false,

                        closeBtnInside: false,

                        fixedContentPos: true,

                        focus: '#name',

                        callbacks: {

                            beforeOpen: function () {

                                if ($(window).width() < 700) {

                                    this.st.focus = false;

                                } else {

                                    this.st.focus = '#name';

                                }

                            }

                        }

                    });

                    /*==============================================================

                     video magnific popup

                     ==============================================================*/



                    $('.popup-youtube, .popup-vimeo, .popup-googlemap').magnificPopup({

                        disableOn: 700,

                        type: 'iframe',

                        mainClass: 'mfp-fade',

                        removalDelay: 160,

                        preloader: false,

                        fixedContentPos: "auto",

                        closeBtnInside: false

                    });
                     /*==============================================================

                     ajax magnific popup for onepage portfolio

                     ==============================================================*/

                    $('.ajax-popup').magnificPopup({

                        type: 'ajax',

                        alignTop: true,

                        fixedContentPos: true,

                        overflowY: 'scroll', // as we know that popup content is tall we set scroll overflow by default to avoid jump

                        callbacks: {

                            open: function () {

                                $('.navbar .collapse').removeClass('show');

                                $('.navbar a.dropdown-toggle').addClass('collapsed');

                            }

                        }

                    });
                    /*==============================================================*/

                    //magnificPopup Start 

                    /*==============================================================*/

                    $('.header-search-form').magnificPopup({

                        mainClass: 'mfp-fade',

                        closeOnBgClick: true,

                        preloader: false,

                        // for white backgriund

                        fixedContentPos: false,

                        closeBtnInside: false,

                        callbacks: {

                            open: function () {

                                setTimeout(function () {

                                    $('.search-input').focus();

                                }, 500);

                                $('#search-header').parent().addClass('search-popup');

                                if (!isMobile) {

                                    $('body').addClass('overflow-hidden');

                                    //$('body').addClass('position-fixed');

                                    $('body').addClass('width-100');

                                    document.onmousewheel = ScrollStop;

                                } else {

                                    $('body, html').on('touchmove', function (e) {

                                        e.preventDefault();

                                    });

                                }

                            },

                            close: function () {

                                if (!isMobile) {

                                    $('body').removeClass('overflow-hidden');

                                    //$('body').removeClass('position-fixed');

                                    $('body').removeClass('width-100');

                                    $('#search-header input[type=text]').each(function (index) {

                                        if (index == 0) {

                                            $(this).val('');

                                            $("#search-header").find("input:eq(" + index + ")").css({"border": "none", "border-bottom": "2px solid rgba(255,255,255,0.5)"});

                                        }

                                    });

                                    document.onmousewheel = ScrollStart;

                                } else {

                                    $('body, html').unbind('touchmove');

                                }

                            }

                        }

                    });
        </script> 

        <script  src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>

        <script  src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
        <script type="text/javascript">
            
                    /*==============================================================

                     portfolio filter

                     ==============================================================*/

                    var $portfolio_filter = $('.portfolio-grid');

                    $portfolio_filter.imagesLoaded(function () {

                        $portfolio_filter.isotope({

                            layoutMode: 'masonry',

                            itemSelector: '.grid-item',

                            percentPosition: true,

                            masonry: {

                                columnWidth: '.grid-sizer'

                            }

                        });

                        $portfolio_filter.isotope();

                    });



                    // Default filter selector start code



                    var $active_grid_selector = $('.portfolio-filter > li.active > a');

                    var selector = $active_grid_selector.attr('data-filter');

                    $portfolio_filter.find('.grid-item').removeClass('animated').css("visibility", ""); // avoid problem to filter after sorting

                    $portfolio_filter.isotope({filter: selector});



                    // Default filter selector end code



                    var $grid_selectors = $('.portfolio-filter > li > a');

                    $grid_selectors.on('click', function () {

                        $grid_selectors.parent().removeClass('active');

                        $(this).parent().addClass('active');

                        var selector = $(this).attr('data-filter');

                        $portfolio_filter.find('.grid-item').removeClass('animated').css("visibility", ""); // avoid problem to filter after sorting

                        $portfolio_filter.find('.grid-item').each(function () {

                            /* remove perticular element from WOW array when you don't want animation on element after DOM lead */

                            wow.removeBox(this);

                            $(this).css("-webkit-animation", "none");

                            $(this).css("-moz-animation", "none");

                            $(this).css("-ms-animation", "none");

                            $(this).css("animation", "none");

                        });

                        $portfolio_filter.isotope({filter: selector});

                        return false;

                    });

                    $(window).resize(function () {

                        if (!isMobile && !isiPhoneiPad) {

                            $portfolio_filter.imagesLoaded(function () {

                                setTimeout(function () {

                                    $portfolio_filter.find('.grid-item').removeClass('wow').removeClass('animated'); // avoid problem to filter after window resize

                                    $portfolio_filter.isotope('layout');

                                }, 300);

                            });

                        }

                    });

                    var $blog_filter = $('.blog-grid');

                    $blog_filter.imagesLoaded(function () {

                        $blog_filter.isotope({

                            layoutMode: 'masonry',

                            itemSelector: '.grid-item',

                            percentPosition: true,

                            masonry: {

                                columnWidth: '.grid-sizer'

                            }

                        });

                    });

                    $(window).resize(function () {

                        setTimeout(function () {

                            $blog_filter.find('.grid-item').removeClass('wow').removeClass('animated'); // avoid problem to filter after window resize

                            $blog_filter.isotope('layout');

                        }, 300);

                    });

                    /* ===================================

                     START Page Load

                     ====================================== */


                    $(document).on('load', function () {



                        var hash = window.location.hash.substr(1);



                        if (hash != "") {



                            setTimeout(function () {



                                $(document).imagesLoaded(function () {



                                    var scrollAnimationTime = 1200,



                                            scrollAnimation = 'easeInOutExpo';



                                    var target = '#' + hash;



                                    if ($(target).length > 0) {







                                        $('html, body').stop()



                                                .animate({



                                                    'scrollTop': $(target).offset().top



                                                }, scrollAnimationTime, scrollAnimation, function () {



                                                    window.location.hash = target;



                                                });

                                    }



                                });



                            }, 500);



                        }

                        fullScreenHeight();

                    });


                    /*=================================

                     //justified Gallery

                     =================================*/


                    $(document).imagesLoaded(function () {



                        if ($(".justified-gallery").length > 0) {



                            $(".justified-gallery").justifiedGallery({



                                rowHeight: 400,



                                maxRowHeight: false,



                                captions: true,



                                margins: 10,



                                waitThumbnailsLoad: true



                            });

                        }

                    });
        </script>

        <script  src="{{ asset('assets/js/wow.min.js') }}"></script>
        <script type="text/javascript">
            /*==============================================================

             wow animation - on scroll

            ==============================================================*/

            var wow = new WOW({

                boxClass: 'wow',

                animateClass: 'animated',

                offset: 0,

                mobile: false,

                live: true

            });

            $(window).imagesLoaded(function () {

                wow.init();

            });
        </script>


        <!-- parallax -->
        <script  src="{{ asset('assets/js/jquery.stellar.js') }}"></script>
        <script type="text/javascript">
            function SetMegamenuPosition() {

                if ($(window).width() > 991) {



                    setTimeout(function () {



                        var totalHeight = $('nav.navbar').outerHeight();



                        $('.mega-menu').css({top: totalHeight});



                        if ($('.navbar-brand-top').length === 0)



                            $('.dropdown.simple-dropdown > .dropdown-menu').css({top: totalHeight});



                    }, 200);



                } else {



                    $('.mega-menu').css('top', '');



                    $('.dropdown.simple-dropdown > .dropdown-menu').css('top', '');



                }
            }
                //page title space

                function setPageTitleSpace() {



                    if ($('.navbar').hasClass('navbar-top') || $('nav').hasClass('navbar-fixed-top')) {



                        if ($('.top-space').length > 0) {



                            var top_space_height = $('.navbar').outerHeight();



                            if ($('.top-header-area').length > 0) {



                                top_space_height = top_space_height + $('.top-header-area').outerHeight();



                            }



                            $('.top-space').css('margin-top', top_space_height + "px");



                        }



                    }

                }

                //swiper button position in auto height slider

                function setButtonPosition() {



                    if ($(window).width() > 767 && $(".swiper-auto-height-container").length > 0) {



                        var leftPosition = parseInt($('.swiper-auto-height-container .swiper-slide').css('padding-left'));



                        var bottomPosition = parseInt($('.swiper-auto-height-container .swiper-slide').css('padding-bottom'));



                        var bannerWidth = parseInt($('.swiper-auto-height-container .slide-banner').outerWidth());



                        $('.navigation-area').css({'left': bannerWidth + leftPosition + 'px', 'bottom': bottomPosition + 'px'});



                    } else if ($(".swiper-auto-height-container").length > 0) {



                        $('.navigation-area').css({'left': '', 'bottom': ''});



                    }

                }

                /*==============================================================

                 full screen START CODE

                 ==============================================================*/

                function fullScreenHeight() {



                    var element = $(".full-screen");



                    var $minheight = $(window).height();



                    element.parents('section').imagesLoaded(function () {



                        if ($(".top-space .full-screen").length > 0) {



                            var $headerheight = $("header nav.navbar").outerHeight();



                            $(".top-space .full-screen").css('min-height', $minheight - $headerheight);



                        } else {



                            element.css('min-height', $minheight);



                        }



                    });



                    var minwidth = $(window).width();



                    $(".full-screen-width").css('min-width', minwidth);



                    var sidebarNavHeight = $('.sidebar-nav-style-1').height() - $('.logo-holder').parent().height() - $('.footer-holder').parent().height() - 10;



                    $(".sidebar-nav-style-1 .nav").css('height', (sidebarNavHeight));



                    var style2NavHeight = parseInt($('.sidebar-part2').height() - parseInt($('.sidebar-part2 .sidebar-middle').css('padding-top')) - parseInt($('.sidebar-part2 .sidebar-middle').css('padding-bottom')) - parseInt($(".sidebar-part2 .sidebar-middle .sidebar-middle-menu .nav").css('margin-bottom')));



                    $(".sidebar-part2 .sidebar-middle .sidebar-middle-menu .nav").css('height', (style2NavHeight));

                }
                
                /*==============================================================

                 parallax text - START CODE

                 ==============================================================*/

                function parallax_text() {

                    var window_width = $(window).width();

                    if (window_width > 1024) {

                        if ($('.swiper-auto-slide .swiper-slide').length !== 0) {

                            $(document).on("mousemove", ".swiper-auto-slide .swiper-slide", function (e) {

                                var positionX = e.clientX;

                                var positionY = e.clientY;

                                positionX = Math.round(positionX / 10) - 80;

                                positionY = Math.round(positionY / 10) - 40;

                                $(this).find('.parallax-text').css({'transform': 'translate(' + positionX + 'px,' + positionY + 'px)', 'transition-duration': '0s'});

                            });



                            $(document).on("mouseout", ".swiper-auto-slide .swiper-slide", function (e) {

                                $('.parallax-text').css({'transform': 'translate(0,0)', 'transition-duration': '0.5s'});

                            });

                        }

                    }

                }
                /*==============================================================

                 //Parallax - START CODE

                 ==============================================================*/

                function stellarParallax() {

                    if ($(window).width() > 1024) {

                        $.stellar();

                    } else {

                        $.stellar('destroy');

                        $('.parallax').css('background-position', '');

                    }

                }

                function SetResizeContent() {


                    //    all function call



                    SetMegamenuPosition();



                    setPageTitleSpace();



                    setButtonPosition();



                    parallax_text();



                    stellarParallax();



                    fullScreenHeight();
                    //    navClick();
                }

            /* ===================================

             START RESIZE

             ====================================== */

            $(window).resize(function (event) {


                setTimeout(function () {

                    SetResizeContent();

                }, 500);


                $('.menu-back-div').each(function () {



                    $(this).attr('style', '');



                });



                $('.navbar-collapse').collapse('hide');







                event.preventDefault();

            });


                /*==============================================================*/

                //toggles  - START CODE

                /*==============================================================*/

                $('.toggles .collapse').on('show.bs.collapse', function () {



                    var id = $(this).attr('id');



                    $('a[href="#' + id + '"]').closest('.panel-heading').addClass('active-accordion');



                    $('a[href="#' + id + '"] .panel-title span').html('<i class="ti-minus"></i>');


                });


                $('.toggles .collapse').on('hide.bs.collapse', function () {


                    var id = $(this).attr('id');



                    $('a[href="#' + id + '"]').closest('.panel-heading').removeClass('active-accordion');



                    $('a[href="#' + id + '"] .panel-title span').html('<i class="ti-plus"></i>');


                });



                $('.toggles-style2 .collapse').on('show.bs.collapse', function () {



                    var id = $(this).attr('id');



                    $('a[href="#' + id + '"]').closest('.panel-heading').addClass('active-accordion');



                    $('a[href="#' + id + '"] .panel-title span').html('<i class="fa fa-angle-up"></i>');



                });



                $('.toggles-style2 .collapse').on('hide.bs.collapse', function () {



                    var id = $(this).attr('id');



                    $('a[href="#' + id + '"]').closest('.panel-heading').removeClass('active-accordion');



                    $('a[href="#' + id + '"] .panel-title span').html('<i class="fas fa-angle-down"></i>');



                });



                /* ===================================

                 blog hover box

                 ====================================== */


                $(document).on("mouseenter", ".blog-post-style4 .grid-item", function (e) {


                    $(this).find("figcaption .blog-hover-text").slideDown(300);


                });

                $(document).on("mouseleave", ".blog-post-style4 .grid-item", function (e) {


                    $(this).find("figcaption .blog-hover-text").slideUp(300);

                });


                SetResizeContent();


                var $allNonRatinaImages = $("img:not([data-rjs])");


                $allNonRatinaImages.attr('data-no-retina', '');
        </script>

        <!-- revolution -->
        <script  src="{{ asset('assets/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
        <script  src="{{ asset('assets/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
        <!-- revolution slider extensions (load below extensions JS files only on local file systems to make the slider work! The following part can be removed on server for on demand loading) -->

        <script  src="{{ asset('assets/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>

        <script  src="{{ asset('assets/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>

        <script  src="{{ asset('assets/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>

        <script  src="{{ asset('assets/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>

        <script  src="{{ asset('assets/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>

        <script  src="{{ asset('assets/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>

        <script  src="{{ asset('assets/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
        <script type="text/javascript">
            

            /*==============================================================*/

            //revolution Start 

            /*==============================================================*/

            /* ================================

             home-creative-studio

             ================================*/

            if ($("#rev_slider_151_1").revolution == undefined) {

                revslider_showDoubleJqueryError("#rev_slider_151_1");

            } else {

                $("#rev_slider_151_1").show().revolution({

                    sliderType: "standard",

                    jsFileLocation: "revolution/js/",

                    sliderLayout: "fullscreen",

                    dottedOverlay: "none",

                    delay: 9000,

                    navigation: {

                        keyboardNavigation: "off",

                        keyboard_direction: "vertical",

                        mouseScrollNavigation: "off",

                        mouseScrollReverse: "default",

                        onHoverStop: "off",

                        touch: {

                            touchenabled: "on",

                            swipe_threshold: 75,

                            swipe_min_touches: 1,

                            swipe_direction: "horizontal",

                            drag_block_vertical: false

                        },

                        arrows: {

                            style: "uranus",

                            enable: true,

                            hide_onmobile: false,

                            hide_over: 479,

                            hide_onleave: false,

                            tmp: '',

                            left: {

                                h_align: "left",

                                v_align: "center",

                                h_offset: 0,

                                v_offset: 0

                            },

                            right: {

                                h_align: "right",

                                v_align: "center",

                                h_offset: 0,

                                v_offset: 0

                            }

                        }

                    },

                    responsiveLevels: [1240, 1024, 778, 480],

                    visibilityLevels: [1240, 1024, 778, 480],

                    gridwidth: [1240, 1024, 778, 480],

                    gridheight: [868, 768, 960, 720],

                    lazyType: "none",

                    scrolleffect: {

                        blur: "on",

                        maxblur: "20",

                        on_slidebg: "on",

                        direction: "top",

                        multiplicator: "2",

                        multiplicator_layers: "2",

                        tilt: "10",

                        disable_on_mobile: "off"

                    },

                    parallax: {

                        type: "scroll",

                        origo: "slidercenter",

                        speed: 400,

                        levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 51, 55]

                    },

                    shadow: 0,

                    spinner: "spinner3",

                    stopLoop: "off",

                    stopAfterLoops: -1,

                    stopAtSlide: -1,

                    shuffle: "off",

                    autoHeight: "off",

                    fullScreenAutoWidth: "off",

                    fullScreenAlignForce: "off",

                    fullScreenOffsetContainer: "",

                    fullScreenOffset: "0px",

                    hideThumbsOnMobile: "off",

                    hideSliderAtLimit: 0,

                    hideCaptionAtLimit: 0,

                    hideAllCaptionAtLilmit: 0,

                    debugMode: false,

                    fallbacks: {

                        simplifyAll: "off",

                        nextSlideOnWindowFocus: "off",

                        disableFocusListener: false

                    }

                });

            }



            /* ================================

             home-classic-web-agency

             ================================*/

            if ($("#rev_slider_1174_1").revolution == undefined) {

                revslider_showDoubleJqueryError("#rev_slider_1174_1");

            } else {

                $("#rev_slider_1174_1").show().revolution({

                    sliderType: "hero",

                    jsFileLocation: "revolution/js/",

                    sliderLayout: "fullscreen",

                    dottedOverlay: "none",

                    delay: 9000,

                    navigation: {

                    },

                    responsiveLevels: [1240, 1024, 778, 480],

                    visibilityLevels: [1240, 1024, 778, 480],

                    gridwidth: [1240, 1024, 778, 480],

                    gridheight: [868, 768, 960, 720],

                    lazyType: "none",

                    parallax: {

                        type: "scroll",

                        origo: "slidercenter",

                        speed: 400,

                        levels: [10, 15, 20, 25, 30, 35, 40, -10, -15, -20, -25, -30, -35, -40, -45, 55]

                    },

                    shadow: 0,

                    spinner: "off",

                    autoHeight: "off",

                    fullScreenAutoWidth: "off",

                    fullScreenAlignForce: "off",

                    fullScreenOffsetContainer: "",

                    disableProgressBar: "on",

                    hideThumbsOnMobile: "off",

                    hideSliderAtLimit: 0,

                    hideCaptionAtLimit: 0,

                    hideAllCaptionAtLilmit: 0,

                    debugMode: false,

                    fallbacks: {

                        simplifyAll: "off",

                        disableFocusListener: false

                    }

                });

            }



            /* ================================

             home-classic-corporate

             ================================*/

            if ($("#rev_slider_1078_1").revolution == undefined) {

                revslider_showDoubleJqueryError("#rev_slider_1078_1");

            } else {

                $("#rev_slider_1078_1").show().revolution({

                    sliderType: "standard",

                    jsFileLocation: "revolution/js/",

                    sliderLayout: "fullscreen",

                    dottedOverlay: "none",

                    delay: 9000,

                    navigation: {

                        keyboardNavigation: "on",

                        keyboard_direction: "horizontal",

                        mouseScrollNavigation: "off",

                        mouseScrollReverse: "default",

                        onHoverStop: "off",

                        touch: {

                            touchenabled: "on",

                            swipe_threshold: 75,

                            swipe_min_touches: 1,

                            swipe_direction: "horizontal",

                            drag_block_vertical: false

                        }

                        ,

                        arrows: {

                            style: "zeus",

                            enable: true,

                            hide_onmobile: true,

                            hide_under: 600,

                            hide_onleave: true,

                            hide_delay: 200,

                            hide_delay_mobile: 1200,

                            tmp: '<div class="tp-title-wrap">   <div class="tp-arr-imgholder"></div> </div>',

                            left: {

                                h_align: "left",

                                v_align: "center",

                                h_offset: 30,

                                v_offset: 0

                            },

                            right: {

                                h_align: "right",

                                v_align: "center",

                                h_offset: 30,

                                v_offset: 0

                            }

                        }

                        ,

                        bullets: {

                            enable: true,

                            hide_onmobile: false,

                            hide_under: 300,

                            style: "hermes",

                            hide_onleave: false,

                            hide_delay: 200,

                            hide_delay_mobile: 1200,

                            direction: "horizontal",

                            h_align: "center",

                            v_align: "bottom",

                            h_offset: 0,

                            v_offset: 30,

                            space: 8,

                            tmp: '<span class="tp-bullet-img-wrap">  <span class="tp-bullet-image"></span></span><span class="tp-bullet-title">@{{title}}</span>'

                        }

                    },

                    viewPort: {

                        enable: true,

                        outof: "pause",

                        visible_area: "80%",

                        presize: false

                    },

                    responsiveLevels: [1240, 1024, 778, 480],

                    visibilityLevels: [1240, 1024, 778, 480],

                    gridwidth: [1240, 1024, 778, 480],

                    gridheight: [600, 600, 500, 400],

                    lazyType: "none",

                    parallax: {

                        type: "mouse",

                        origo: "slidercenter",

                        speed: 2000,

                        levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 50, 46, 47, 48, 49, 50, 55]

                    },

                    shadow: 0,

                    spinner: "off",

                    stopLoop: "off",

                    stopAfterLoops: -1,

                    stopAtSlide: -1,

                    shuffle: "off",

                    autoHeight: "off",

                    hideThumbsOnMobile: "off",

                    hideSliderAtLimit: 0,

                    hideCaptionAtLimit: 0,

                    hideAllCaptionAtLilmit: 0,

                    debugMode: false,

                    fallbacks: {

                        simplifyAll: "off",

                        nextSlideOnWindowFocus: "off",

                        disableFocusListener: false

                    }

                });

            }



            /* ================================

             home-creative-minimalist-portfolio

             ================================*/



            if ($("#rev_slider_26_1").revolution == undefined) {

                revslider_showDoubleJqueryError("#rev_slider_26_1");

            } else {

                $("#rev_slider_26_1").show().revolution({

                    sliderType: "standard",

                    jsFileLocation: "revolution/js/",

                    sliderLayout: "fullscreen",

                    dottedOverlay: "none",

                    delay: 9000,

                    navigation: {

                        keyboardNavigation: "on",

                        keyboard_direction: "horizontal",

                        mouseScrollNavigation: "off",

                        mouseScrollReverse: "default",

                        onHoverStop: "off",

                        touch: {

                            touchenabled: "on",

                            touchOnDesktop: "on",

                            swipe_threshold: 75,

                            swipe_min_touches: 1,

                            swipe_direction: "horizontal",

                            drag_block_vertical: false

                        }

                        ,

                        arrows: {

                            style: "uranus",

                            enable: false,

                            hide_onmobile: true,

                            hide_under: 778,

                            hide_onleave: false,

                            tmp: '',

                            left: {

                                h_align: "left",

                                v_align: "center",

                                h_offset: 15,

                                v_offset: 0

                            },

                            right: {

                                h_align: "right",

                                v_align: "center",

                                h_offset: 15,

                                v_offset: 0

                            }

                        }

                        ,

                        bullets: {

                            enable: true,

                            hide_onmobile: false,

                            style: "hermes",

                            hide_onleave: false,

                            direction: "horizontal",

                            h_align: "center",

                            v_align: "bottom",

                            h_offset: 0,

                            v_offset: 30,

                            space: 6,

                            tmp: ''

                        }

                    },

                    responsiveLevels: [1240, 1025, 778, 480],

                    visibilityLevels: [1240, 1025, 778, 480],

                    gridwidth: [1240, 1025, 778, 480],

                    gridheight: [868, 768, 960, 720],

                    lazyType: "none",

                    parallax: {

                        type: "scroll",

                        origo: "slidercenter",

                        speed: 2000,

                        levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 51, 55],

                    },

                    shadow: 0,

                    spinner: "off",

                    stopLoop: "off",

                    stopAfterLoops: -1,

                    stopAtSlide: -1,

                    shuffle: "off",

                    autoHeight: "off",

                    fullScreenAutoWidth: "off",

                    fullScreenAlignForce: "off",

                    fullScreenOffsetContainer: "",

                    fullScreenOffset: "0px",

                    hideThumbsOnMobile: "off",

                    hideSliderAtLimit: 0,

                    hideCaptionAtLimit: 0,

                    hideAllCaptionAtLilmit: 0,

                    debugMode: false,

                    fallbacks: {

                        simplifyAll: "off",

                        nextSlideOnWindowFocus: "off",

                        disableFocusListener: false,

                    }

                });

            }
        </script>

        <!-- setting -->
        <script  src="{{ asset('assets/js/main.js') }}"></script>

        <!-- contact script-->
        <!-- <script type="text/javascript">

          function validationSearchForm() {

            var error = true;

            $('#search-header input[type=text]').each(function (index) {



                if (index === 0) {



                    if ($(this).val() === null || $(this).val() === "") {



                        $("#search-header").find("input:eq(" + index + ")").css({"border": "none", "border-bottom": "2px solid red"});



                        error = false;



                    } else {



                        $("#search-header").find("input:eq(" + index + ")").css({"border": "none", "border-bottom": "2px solid #000"});



                    }



                }



            });



            return error;

          }

          $("form.search-form, form.search-form-result").submit(function (event) {



              var error = validationSearchForm();



              if (error) {



                  var action = $(this).attr('action');



                  action = action == '#' || action == '' ? 'blog-grid-3columns.html' : action;



                  action = action + '?' + $(this).serialize();



                  window.location = action;



              }



              event.preventDefault();



          });

            
            /*==============================================================

             form to email

             ==============================================================*/

                    $("#success-subscribe-newsletter").hide();

                    $("#success-subscribe-newsletter2").hide();

                    $("#success-contact-form").hide();

                    $("#success-project-contact-form").hide();

                    $("#success-contact-form-2").hide();

                    $("#success-contact-form-3").hide();

                    $("#success-project-contact-form-4").hide();



                    //Subscribe newsletter form

                    $(document).on("click", '#button-subscribe-newsletter', function () {

                        var error = ValidationsubscribenewsletterForm();

                        if (error) {

                            $.ajax({

                                type: "POST",

                                url: "email-templates/subscribe-newsletter.php",

                                data: $("#subscribenewsletterform").serialize(),

                                success: function (result) {

                                    // Un-comment below code to redirect user to thank you page.

                                    //window.location.href="thank-you.html";



                                    $('input[type=text],textarea').each(function () {

                                        $(this).val('');

                                    });

                                    $("#success-subscribe-newsletter").html(result);

                                    $("#success-subscribe-newsletter").fadeIn("slow");

                                    $('#success-subscribe-newsletter').delay(4000).fadeOut("slow");

                                }

                            });

                        }

                    });



                    function ValidationsubscribenewsletterForm() {

                        var error = true;

                        $('#subscribenewsletterform input[type=text]').each(function (index) {

                            if (index == 0) {

                                if (!(/(.+)@(.+){2,}\.(.+){2,}/.test($(this).val()))) {

                                    $("#subscribenewsletterform").find("input:eq(" + index + ")").addClass("required-error");

                                    error = false;

                                } else {

                                    $("#subscribenewsletterform").find("input:eq(" + index + ")").removeClass("required-error");

                                }

                            }



                        });

                        return error;

                    }



                    $(document).on("click", '#button-subscribe-newsletter2', function () {

                        var error = ValidationsubscribenewsletterForm2();

                        if (error) {

                            $.ajax({

                                type: "POST",

                                url: "email-templates/subscribe-newsletter.php",

                                data: $("#subscribenewsletterform2").serialize(),

                                success: function (result) {

                                    // Un-comment below code to redirect user to thank you page.

                                    //window.location.href="thank-you.html";



                                    $('input[type=text],textarea').each(function () {

                                        $(this).val('');

                                    });

                                    $("#success-subscribe-newsletter2").html(result);

                                    $("#success-subscribe-newsletter2").fadeIn("slow");

                                    $('#success-subscribe-newsletter2').delay(4000).fadeOut("slow");





                                }

                            });

                        }

                    });



                    function ValidationsubscribenewsletterForm2() {

                        var error = true;

                        $('#subscribenewsletterform2 input[type=text]').each(function (index) {

                            if (index == 0) {

                                if (!(/(.+)@(.+){2,}\.(.+){2,}/.test($(this).val()))) {

                                    $("#subscribenewsletterform2").find("input:eq(" + index + ")").addClass("required-error");

                                    error = false;

                                } else {

                                    $("#subscribenewsletterform2").find("input:eq(" + index + ")").removeClass("required-error");

                                }

                            }

                        });

                        return error;

                    }



                    //Contact us form

                    $(document).on("click", '#contact-us-button', function () {

                        var error = ValidationContactForm();

                        if (error) {

                            $.ajax({

                                type: "POST",

                                url: "email-templates/contact.php",

                                data: $("#contact-form").serialize(),

                                success: function (result) {

                                    // Un-comment below code to redirect user to thank you page.

                                    //window.location.href="thank-you.html";



                                    $('input[type=text],textarea').each(function () {

                                        $(this).val('');

                                    });

                                    $("#success-contact-form").html(result);

                                    $("#success-contact-form").fadeIn("slow");

                                    $('#success-contact-form').delay(4000).fadeOut("slow");

                                }

                            });

                        }

                    });

                    function ValidationContactForm() {

                        var error = true;

                        $('#contact-form input[type=text]').each(function (index) {

                            if (index == 0) {

                                if ($(this).val() == null || $(this).val() == "") {

                                    $("#contact-form").find("input:eq(" + index + ")").addClass("required-error");

                                    error = false;

                                } else {

                                    $("#contact-form").find("input:eq(" + index + ")").removeClass("required-error");

                                }

                            } else if (index == 1) {

                                if (!(/(.+)@(.+){2,}\.(.+){2,}/.test($(this).val()))) {

                                    $("#contact-form").find("input:eq(" + index + ")").addClass("required-error");

                                    error = false;

                                } else {

                                    $("#contact-form").find("input:eq(" + index + ")").removeClass("required-error");

                                }

                            }



                        });

                        return error;

                    }



                    //Contact us form 2

                    $('#contact-us-button-2').on("click", function () {

                        var error = ValidationContactForm2();

                        if (error) {

                            $.ajax({

                                type: "POST",

                                url: "email-templates/contact.php",

                                data: $("#contact-form-2").serialize(),

                                success: function (result) {

                                    // Un-comment below code to redirect user to thank you page.

                                    //window.location.href="thank-you.html";



                                    $('input[type=text],textarea').each(function () {

                                        $(this).val('');

                                    });

                                    $("#success-contact-form-2").html(result);

                                    $("#success-contact-form-2").fadeIn("slow");

                                    $('#success-contact-form-2').delay(4000).fadeOut("slow");

                                }

                            });

                        }

                    });

                    function ValidationContactForm2() {

                        var error = true;

                        $('#contact-form-2 input[type=text]').each(function (index) {

                            if (index == 0) {

                                if ($(this).val() == null || $(this).val() == "") {

                                    $("#contact-form-2").find("input:eq(" + index + ")").addClass("required-error");

                                    error = false;

                                } else {

                                    $("#contact-form-2").find("input:eq(" + index + ")").removeClass("required-error");

                                }

                            } else if (index == 1) {

                                if (!(/(.+)@(.+){2,}\.(.+){2,}/.test($(this).val()))) {

                                    $("#contact-form-2").find("input:eq(" + index + ")").addClass("required-error");

                                    error = false;

                                } else {

                                    $("#contact-form-2").find("input:eq(" + index + ")").removeClass("required-error");

                                }

                            }

                        });

                        return error;

                    }



                    //Contact us form 3



                    $(document).on("click", '#contact-us-button-3', function () {

                        var error = ValidationContactForm3();

                        if (error) {

                            $.ajax({

                                type: "POST",

                                url: "email-templates/contact.php",

                                data: $("#contact-form-3").serialize(),

                                success: function (result) {

                                    // Un-comment below code to redirect user to thank you page.

                                    //window.location.href="thank-you.html";

                                    $('input[type=text],textarea').each(function () {

                                        $(this).val('');

                                    });

                                    $("#success-contact-form-3").html(result);

                                    $("#success-contact-form-3").fadeIn("slow");

                                    $('#success-contact-form-3').delay(4000).fadeOut("slow");

                                }

                            });

                        }

                    });

                    function ValidationContactForm3() {

                        var error = true;

                        $('#contact-form-3 input[type=text]').each(function (index) {

                            if (index == 0) {

                                if ($(this).val() == null || $(this).val() == "") {

                                    $("#contact-form-3").find("input:eq(" + index + ")").addClass("required-error");

                                    error = false;

                                } else {

                                    $("#contact-form-3").find("input:eq(" + index + ")").removeClass("required-error");

                                }

                            } else if (index == 1) {

                                if (!(/(.+)@(.+){2,}\.(.+){2,}/.test($(this).val()))) {

                                    $("#contact-form-3").find("input:eq(" + index + ")").addClass("required-error");

                                    error = false;

                                } else {

                                    $("#contact-form-3").find("input:eq(" + index + ")").removeClass("required-error");

                                }

                            }



                        });

                        return error;

                    }


                //Project Contact us form

                $(document).on("click", '#project-contact-us-button', function (e) {

                    e.preventDefault();

                    var error = ValidationProjectContactForm();

                    if (error) {

                        $.ajax({

                            type: "POST",

                            url: "email-templates/project-contact.php",

                            data: $("#project-contact-form").serialize(),

                            success: function (result) {

                                // Un-comment below code to redirect user to thank you page.

                                //window.location.href="thank-you.html";



                                $('input[type=text],textarea').each(function () {

                                    $(this).val('');

                                });

                                $("#success-project-contact-form").html(result);

                                $("#success-project-contact-form").fadeIn("slow");

                                $('#success-project-contact-form').delay(4000).fadeOut("slow");

                            }

                        });

                    }

                });

                function ValidationProjectContactForm() {

                    var error = true;

                    $('#project-contact-form input[type=text]').each(function (index) {

                        if (index == 0) {

                            if ($(this).val() == null || $(this).val() == "") {

                                $("#project-contact-form").find("input:eq(" + index + ")").addClass("required-error");

                                error = false;

                            } else {

                                $("#project-contact-form").find("input:eq(" + index + ")").removeClass("required-error");

                            }

                        } else if (index == 2) {

                            if (!(/(.+)@(.+){2,}\.(.+){2,}/.test($(this).val()))) {

                                $("#project-contact-form").find("input:eq(" + index + ")").addClass("required-error");

                                error = false;

                            } else {

                                $("#project-contact-form").find("input:eq(" + index + ")").removeClass("required-error");

                            }

                        }



                    });

                    return error;

                }

                //Project Contact us form 2

                $(document).on("click", '#project-contact-us-4-button', function () {

                    var error = ValidationProjectContactForm4();

                    if (error) {

                        $.ajax({

                            type: "POST",

                            url: "email-templates/project-contact.php",

                            data: $("#project-contact-form-4").serialize(),

                            success: function (result) {

                                // Un-comment below code to redirect user to thank you page.

                                //window.location.href="thank-you.html";



                                $('input[type=text],textarea').each(function () {

                                    $(this).val('');

                                });

                                $("#success-project-contact-form-4").html(result);

                                $("#success-project-contact-form-4").fadeIn("slow");

                                $('#success-project-contact-form-4').delay(4000).fadeOut("slow");

                            }

                        });

                    }

                });

                function ValidationProjectContactForm4() {

                    var error = true;

                    $('#project-contact-form-4 input[type=text]').each(function (index) {

                        if (index == 0) {

                            if ($(this).val() == null || $(this).val() == "") {

                                $("#project-contact-form-4").find("input:eq(" + index + ")").addClass("required-error");

                                error = false;

                            } else {

                                $("#project-contact-form-4").find("input:eq(" + index + ")").removeClass("required-error");

                            }

                        } else if (index == 2) {

                            if (!(/(.+)@(.+){2,}\.(.+){2,}/.test($(this).val()))) {

                                $("#project-contact-form-4").find("input:eq(" + index + ")").addClass("required-error");

                                error = false;

                            } else {

                                $("#project-contact-form-4").find("input:eq(" + index + ")").removeClass("required-error");

                            }

                        }

                    });

                    return error;

                }
        </script> -->
        
        </x-slot>



</x-app>