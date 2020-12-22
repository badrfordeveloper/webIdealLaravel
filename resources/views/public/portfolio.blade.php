<x-app page="portfolio">
    
    <x-slot name="meta">
             <!-- title -->
        <title>{{ __('messages.title-portfolio') }}</title>  
        <!-- description -->
        <meta name="description" content="{{ __('messages.description-portfolio') }}">
    
    
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
        
        
        <!-- bootstrap -->
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
     
        <!-- font-awesome icon -->
        <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}" />
     
        <!-- magnific popup -->
        <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}" />

        <!-- bootsnav -->
       <!-- <link rel="stylesheet" href="{{ asset('assets/css/bootsnav.css') }}">-->
        <!-- style -->
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
        <!-- responsive css -->
        <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}" />
        <!--[if IE]>
            <script src="{{ asset('assets/js/html5shiv.js') }}"></script>
        <![endif]-->

        <script type="application/ld+json">

            {

                "@context": "http://schema.org/",

                "@type": "Service",

                "serviceType": "{{ __('messages.ServicesType') }}",

                "provider": {

                    "@type": "LocalBusiness",

                    "name": "WEB IDEAL PORTFOLIO",

                    "image": "https://www.websites-ideal.com/assets/images/examples/startup-849804_1920.webp",

                    "telephone": "+212 615-564-741",

                    "priceRange": "2500-25000",

                    "address": {

                        "@type": "PostalAddress",

                        "streetAddress": "El baraka rue 45 casablanca",

                        "addressLocality": "casablanca",

                        "postalCode": "20630",

                        "addressCountry": "MA"

                    }

                },

                "areaServed": {

                    "@type": "City",

                    "name": "Casablanca"

                },

                "hasOfferCatalog": {

                    "@type": "OfferCatalog",

                    "name": "WEB IDEAL PORTFOLIO",

                    "itemListElement": [

                        {

                            "@type": "OfferCatalog",

                            "name": "{{ __('messages.ServicesOfferCatalog') }}",

                            "itemListElement": [

                                {

                                    "@type": "Offer",

                                    "itemOffered": {

                                        "@type": "Service",

                                        "name": "{{ __('messages.Service1') }}"

                                    }

                                },

                                {

                                    "@type": "Offer",

                                    "itemOffered": {

                                        "@type": "Service",

                                        "name": "{{ __('messages.Service2') }}"

                                    }

                                },

                                {

                                    "@type": "Offer",

                                    "itemOffered": {

                                        "@type": "Service",

                                        "name": "{{ __('messages.Service3') }}"

                                    }

                                }

                            ]

                        },

                        {

                            "@type": "OfferCatalog",

                            "name": "{{ __('messages.ServicesOfferCatalog2') }}",

                            "itemListElement": [

                                {

                                    "@type": "Offer",

                                    "itemOffered": {

                                        "@type": "Service",

                                        "name": "{{ __('messages.Service4') }}"

                                    }

                                },

                                {

                                    "@type": "Offer",

                                    "itemOffered": {

                                        "@type": "Service",

                                        "name": "{{ __('messages.Service5') }}"

                                    }

                                },

                                {

                                    "@type": "Offer",

                                    "itemOffered": {

                                        "@type": "Service",

                                        "name": "{{ __('messages.Service6') }}"

                                    }

                                }

                            ]

                        }

                    ]

                }

            }

        </script>

    </x-slot>



    <!-- start page title section -->

    <section class="wow fadeIn cover-background background-position-top top-space" style="background-image:url('{{ asset('assets/images/examples/businessman-3213659_1920.webp') }}');">

        <div class="opacity-medium bg-extra-dark-gray"></div>

        <div class="container">

            <div class="row align-items-center">

                <div class="col-12 d-flex flex-column text-center justify-content-center page-title-large padding-30px-tb">

                    <!-- start sub title -->

                    <span class="d-block text-white-2 opacity6 alt-font margin-5px-bottom">{{ __('messages.breadcrumbs-portfolio-title') }}</span>

                    <!-- end sub title -->

                    <!-- start page title -->

                    <h1 class="alt-font text-white-2 font-weight-600 mb-0">Portfolio</h1>

                    <!-- end page title -->

                </div>

            </div>

        </div>

    </section>

    <!-- end page title section -->

    <!-- start portfolio section -->

    <section class="wow fadeIn padding-90px-top md-padding-50px-top sm-padding-30px-top">

        <div class="container">

            <div class="row">

                <div class="col-12">

                    <!-- start filter navigation -->

                    <ul

                        class="portfolio-filter nav nav-tabs justify-content-center border-0 portfolio-filter-tab-1 font-weight-600 alt-font text-uppercase text-center margin-80px-bottom text-small md-margin-40px-bottom sm-margin-20px-bottom"

                    >

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

                <div class="col-12 px-3 p-md-0">

                    <div class="filter-content overflow-hidden">

                        <ul class="portfolio-grid portfolio-metro-grid work-3col hover-option10 gutter-medium lightbox-portfolio">

                            <li class="grid-sizer"></li>

                            <!-- start portfolio item -->

                            <li class="grid-item catalogue wow zoomIn portflioShadow">

                                <figure>

                                    <div class="portfolio-img bg-black"><img src="{{ asset('assets/images/portfolio371/imageportfoliocatalogue1.webp') }}" alt="" /></div>

                                    <figcaption>

                                        <div class="portfolio-hover-main">

                                            <div class="portfolio-hover-box align-middle">

                                                <div class="portfolio-icon">

                                                    <!--<a href="single-project-page-01.html"><i class="fas fa-link" aria-hidden="true"></i></a>-->

                                                    <a class="gallery-link" title="IMAGE TITLE" href="{{ asset('assets/images/portfolio/imageportfoliocatalogue1.webp') }}"><i class="fas fa-search" aria-hidden="true"></i></a>

                                                </div>

                                                <div class="portfolio-hover-content">

                                                    <span class="font-weight-600 line-height-normal alt-font text-white-2 text-uppercase margin-5px-bottom d-block">Herbal Beauty Salon</span>

                                                    <p class="text-medium-gray text-uppercase text-extra-small mb-0">Branding and Brochure</p>

                                                </div>

                                            </div>

                                        </div>

                                    </figcaption>

                                </figure>

                            </li>

                            <!-- end portfolio item -->

                            <!-- start portfolio item -->

                            <li class="grid-item vitrine wow zoomIn portflioShadow" data-wow-delay="0.2s">

                                <figure>

                                    <div class="portfolio-img bg-black"><img src="{{ asset('assets/images/portfolio371/imageportfoliositevitrine4.webp') }}" alt="" /></div>

                                    <figcaption>

                                        <div class="portfolio-hover-main">

                                            <div class="portfolio-hover-box align-middle">

                                                <div class="portfolio-icon">

                                                    <!-- <a href="single-project-page-02.html"><i class="fas fa-link" aria-hidden="true"></i></a> -->

                                                    <a class="gallery-link" title="IMAGE TITLE" href="{{ asset('assets/images/portfolio/imageportfoliositevitrine4.webp') }}"><i class="fas fa-search" aria-hidden="true"></i></a>

                                                </div>

                                                <div class="portfolio-hover-content">

                                                    <span class="font-weight-600 line-height-normal alt-font text-white-2 text-uppercase margin-5px-bottom d-block">Tailoring Interior</span>

                                                    <p class="text-medium-gray text-uppercase text-extra-small mb-0">Branding and Identity</p>

                                                </div>

                                            </div>

                                        </div>

                                    </figcaption>

                                </figure>

                            </li>

                            <!-- end portfolio item -->

                            <!-- start portfolio item -->

                            <li class="grid-item vitrine wow zoomIn portflioShadow" data-wow-delay="0.4s">

                                <figure>

                                    <div class="portfolio-img bg-black"><img src="{{ asset('assets/images/portfolio371/imageportfoliositevitrine3.webp') }}" alt="" /></div>

                                    <figcaption>

                                        <div class="portfolio-hover-main">

                                            <div class="portfolio-hover-box align-middle">

                                                <div class="portfolio-icon">

                                                    <!-- <a href="single-project-page-03.html"><i class="fas fa-link" aria-hidden="true"></i></a> -->

                                                    <a class="gallery-link" title="IMAGE TITLE" href="{{ asset('assets/images/portfolio/imageportfoliositevitrine3.webp') }}"><i class="fas fa-search" aria-hidden="true"></i></a>

                                                </div>

                                                <div class="portfolio-hover-content">

                                                    <span class="font-weight-600 line-height-normal alt-font text-white-2 text-uppercase margin-5px-bottom d-block">Designblast Inc</span>

                                                    <p class="text-medium-gray text-uppercase text-extra-small mb-0">Web and Photography</p>

                                                </div>

                                            </div>

                                        </div>

                                    </figcaption>

                                </figure>

                            </li>

                            <!-- end portfolio item -->

                            <!-- start portfolio item -->

                            <li class="grid-item application grid-item-double wow zoomIn portflioShadow">

                                <figure>

                                    <div class="portfolio-img bg-black"><img src="{{ asset('assets/images/portfolio371/imageportfoliocommandeenligne.webp') }}" alt="" /></div>

                                    <figcaption>

                                        <div class="portfolio-hover-main">

                                            <div class="portfolio-hover-box align-middle">

                                                <div class="portfolio-icon">

                                                    <!-- <a href="single-project-page-04.html"><i class="fas fa-link" aria-hidden="true"></i></a> -->

                                                    <a class="gallery-link" title="IMAGE TITLE" href="{{ asset('assets/images/portfolio/imageportfoliocommandeenligne.webp') }}"><i class="fas fa-search" aria-hidden="true"></i></a>

                                                </div>

                                                <div class="portfolio-hover-content">

                                                    <span class="font-weight-600 line-height-normal alt-font text-white-2 text-uppercase margin-5px-bottom d-block">HardDot Stone</span>

                                                    <p class="text-medium-gray text-uppercase text-extra-small mb-0">Branding and Identity</p>

                                                </div>

                                            </div>

                                        </div>

                                    </figcaption>

                                </figure>

                            </li>

                            <!-- end portfolio item -->

                            <!-- start portfolio item -->

                            <li class="grid-item vitrine wow zoomIn portflioShadow" data-wow-delay="0.2s">

                                <figure>

                                    <div class="portfolio-img bg-black"><img src="{{ asset('assets/images/portfolio371/imageportfoliositevitrine2.webp') }}" alt="" /></div>

                                    <figcaption>

                                        <div class="portfolio-hover-main">

                                            <div class="portfolio-hover-box align-middle">

                                                <div class="portfolio-icon">

                                                    <!-- <a href="single-project-page-05.html"><i class="fas fa-link" aria-hidden="true"></i></a> -->

                                                    <a class="gallery-link" title="IMAGE TITLE" href="{{ asset('assets/images/portfolio/imageportfoliositevitrine2.webp') }}"><i class="fas fa-search" aria-hidden="true"></i></a>

                                                </div>

                                                <div class="portfolio-hover-content">

                                                    <span class="font-weight-600 line-height-normal alt-font text-white-2 text-uppercase margin-5px-bottom d-block">Crop Identity</span>

                                                    <p class="text-medium-gray text-uppercase text-extra-small mb-0">Branding and Brochure</p>

                                                </div>

                                            </div>

                                        </div>

                                    </figcaption>

                                </figure>

                            </li>

                            <!-- end portfolio item -->

                            <!-- start portfolio item -->

                            <li class="grid-item ecommerce wow zoomIn portflioShadow">

                                <figure>

                                    <div class="portfolio-img bg-black"><img src="{{ asset('assets/images/portfolio371/imageportfolioecommerce3.webp') }}" alt="" /></div>

                                    <figcaption>

                                        <div class="portfolio-hover-main">

                                            <div class="portfolio-hover-box align-middle">

                                                <div class="portfolio-icon">

                                                    <!--<a href="single-project-page-01.html"><i class="fas fa-link" aria-hidden="true"></i></a>-->

                                                    <a class="gallery-link" title="IMAGE TITLE" href="{{ asset('assets/images/portfolio/imageportfolioecommerce3.webp') }}"><i class="fas fa-search" aria-hidden="true"></i></a>

                                                </div>

                                                <div class="portfolio-hover-content">

                                                    <span class="font-weight-600 line-height-normal alt-font text-white-2 text-uppercase margin-5px-bottom d-block">Violator Series</span>

                                                    <p class="text-medium-gray text-uppercase text-extra-small mb-0">Web and Photography</p>

                                                </div>

                                            </div>

                                        </div>

                                    </figcaption>

                                </figure>

                            </li>

                            <!-- end portfolio item -->

                            <!-- start portfolio item -->

                            <li class="grid-item ecommerce wow zoomIn portflioShadow" data-wow-delay="0.4s">

                                <figure>

                                    <div class="portfolio-img bg-black"><img src="{{ asset('assets/images/portfolio371/imageportfolioecommerce1.webp') }}" alt="" /></div>

                                    <figcaption>

                                        <div class="portfolio-hover-main">

                                            <div class="portfolio-hover-box align-middle">

                                                <div class="portfolio-icon">

                                                    <!-- <a href="single-project-page-02.html"><i class="fas fa-link" aria-hidden="true"></i></a> -->

                                                    <a class="gallery-link" title="IMAGE TITLE" href="{{ asset('assets/images/portfolio/imageportfolioecommerce1.webp') }}"><i class="fas fa-search" aria-hidden="true"></i></a>

                                                </div>

                                                <div class="portfolio-hover-content">

                                                    <span class="font-weight-600 line-height-normal alt-font text-white-2 text-uppercase margin-5px-bottom d-block">Jeremy Dupont</span>

                                                    <p class="text-medium-gray text-uppercase text-extra-small mb-0">Branding and Identity</p>

                                                </div>

                                            </div>

                                        </div>

                                    </figcaption>

                                </figure>

                            </li>

                            <!-- end portfolio item -->

                            <!-- start portfolio item -->

                            <li class="grid-item ecommerce application wow zoomIn portflioShadow" data-wow-delay="0.4s">

                                <figure>

                                    <div class="portfolio-img bg-black"><img src="{{ asset('assets/images/portfolio371/imageportfolioecommerce4.webp') }}" alt="" /></div>

                                    <figcaption>

                                        <div class="portfolio-hover-main">

                                            <div class="portfolio-hover-box align-middle">

                                                <div class="portfolio-icon">

                                                    <!-- <a href="single-project-page-03.html"><i class="fas fa-link" aria-hidden="true"></i></a> -->

                                                    <a class="gallery-link" title="IMAGE TITLE" href="{{ asset('assets/images/portfolio/imageportfolioecommerce4.webp') }}"><i class="fas fa-search" aria-hidden="true"></i></a>

                                                </div>

                                                <div class="portfolio-hover-content">

                                                    <span class="font-weight-600 line-height-normal alt-font text-white-2 text-uppercase margin-5px-bottom d-block">The Aparthotel</span>

                                                    <p class="text-medium-gray text-uppercase text-extra-small mb-0">Web and Photography</p>

                                                </div>

                                            </div>

                                        </div>

                                    </figcaption>

                                </figure>

                            </li>

                            <!-- end portfolio item -->

                            <!-- start portfolio item -->

                            <li class="grid-item vitrine grid-item-double wow zoomIn portflioShadow" data-wow-delay="0.4s">

                                <figure>

                                    <div class="portfolio-img bg-black"><img src="{{ asset('assets/images/portfolio371/imageportfoliositevitrine5.webp') }}" alt="" /></div>

                                    <figcaption>

                                        <div class="portfolio-hover-main">

                                            <div class="portfolio-hover-box align-middle">

                                                <div class="portfolio-icon">

                                                    <!-- <a href="single-project-page-03.html"><i class="fas fa-link" aria-hidden="true"></i></a> -->

                                                    <a class="gallery-link" title="IMAGE TITLE" href="{{ asset('assets/images/portfolio/imageportfoliositevitrine5.webp') }}"><i class="fas fa-search" aria-hidden="true"></i></a>

                                                </div>

                                                <div class="portfolio-hover-content">

                                                    <span class="font-weight-600 line-height-normal alt-font text-white-2 text-uppercase margin-5px-bottom d-block">The Aparthotel</span>

                                                    <p class="text-medium-gray text-uppercase text-extra-small mb-0">Web and Photography</p>

                                                </div>

                                            </div>

                                        </div>

                                    </figcaption>

                                </figure>

                            </li>

                            <!-- end portfolio item -->

                            <!-- start portfolio item -->

                            <li class="grid-item application wow zoomIn portflioShadow" data-wow-delay="0.4s">

                                <figure>

                                    <div class="portfolio-img bg-black"><img src="{{ asset('assets/images/portfolio371/imageportfoliocommandeenligne2.webp') }}" alt="" /></div>

                                    <figcaption>

                                        <div class="portfolio-hover-main">

                                            <div class="portfolio-hover-box align-middle">

                                                <div class="portfolio-icon">

                                                    <!-- <a href="single-project-page-03.html"><i class="fas fa-link" aria-hidden="true"></i></a> -->

                                                    <a class="gallery-link" title="IMAGE TITLE" href="{{ asset('assets/images/portfolio/imageportfoliocommandeenligne2.webp') }}"><i class="fas fa-search" aria-hidden="true"></i></a>

                                                </div>

                                                <div class="portfolio-hover-content">

                                                    <span class="font-weight-600 line-height-normal alt-font text-white-2 text-uppercase margin-5px-bottom d-block">The Aparthotel</span>

                                                    <p class="text-medium-gray text-uppercase text-extra-small mb-0">Web and Photography</p>

                                                </div>

                                            </div>

                                        </div>

                                    </figcaption>

                                </figure>

                            </li>

                            <!-- end portfolio item -->

                            <!-- start portfolio item -->

                            <li class="grid-item ecommerce application wow zoomIn portflioShadow" data-wow-delay="0.4s">

                                <figure>

                                    <div class="portfolio-img bg-black"><img src="{{ asset('assets/images/portfolio371/imageportfolioecommerce2.webp') }}" alt="" /></div>

                                    <figcaption>

                                        <div class="portfolio-hover-main">

                                            <div class="portfolio-hover-box align-middle">

                                                <div class="portfolio-icon">

                                                    <!-- <a href="single-project-page-03.html"><i class="fas fa-link" aria-hidden="true"></i></a> -->

                                                    <a class="gallery-link" title="IMAGE TITLE" href="{{ asset('assets/images/portfolio/imageportfolioecommerce2.webp') }}"><i class="fas fa-search" aria-hidden="true"></i></a>

                                                </div>

                                                <div class="portfolio-hover-content">

                                                    <span class="font-weight-600 line-height-normal alt-font text-white-2 text-uppercase margin-5px-bottom d-block">The Aparthotel</span>

                                                    <p class="text-medium-gray text-uppercase text-extra-small mb-0">Web and Photography</p>

                                                </div>

                                            </div>

                                        </div>

                                    </figcaption>

                                </figure>

                            </li>

                            <!-- end portfolio item -->

                            <!-- start portfolio item -->

                            <li class="grid-item vitrine wow zoomIn portflioShadow" data-wow-delay="0.4s">

                                <figure>

                                    <div class="portfolio-img bg-black"><img src="{{ asset('assets/images/portfolio371/imageportfoliositevitrine1.webp') }}" alt="" /></div>

                                    <figcaption>

                                        <div class="portfolio-hover-main">

                                            <div class="portfolio-hover-box align-middle">

                                                <div class="portfolio-icon">

                                                    <!-- <a href="single-project-page-03.html"><i class="fas fa-link" aria-hidden="true"></i></a> -->

                                                    <a class="gallery-link" title="IMAGE TITLE" href="{{ asset('assets/images/portfolio/imageportfoliositevitrine1.webp') }}"><i class="fas fa-search" aria-hidden="true"></i></a>

                                                </div>

                                                <div class="portfolio-hover-content">

                                                    <span class="font-weight-600 line-height-normal alt-font text-white-2 text-uppercase margin-5px-bottom d-block">The Aparthotel</span>

                                                    <p class="text-medium-gray text-uppercase text-extra-small mb-0">Web and Photography</p>

                                                </div>

                                            </div>

                                        </div>

                                    </figcaption>

                                </figure>

                            </li>

                            <!-- end portfolio item -->

                            <!-- start portfolio item -->

                            <li class="grid-item catalogue wow zoomIn portflioShadow" data-wow-delay="0.4s">

                                <figure>

                                    <div class="portfolio-img bg-black"><img src="{{ asset('assets/images/portfolio371/imageportfoliocatalogue2.webp') }}" alt="" /></div>

                                    <figcaption>

                                        <div class="portfolio-hover-main">

                                            <div class="portfolio-hover-box align-middle">

                                                <div class="portfolio-icon">

                                                    <!-- <a href="single-project-page-03.html"><i class="fas fa-link" aria-hidden="true"></i></a> -->

                                                    <a class="gallery-link" title="IMAGE TITLE" href="{{ asset('assets/images/portfolio/imageportfoliocatalogue2.webp') }}"><i class="fas fa-search" aria-hidden="true"></i></a>

                                                </div>

                                                <div class="portfolio-hover-content">

                                                    <span class="font-weight-600 line-height-normal alt-font text-white-2 text-uppercase margin-5px-bottom d-block">The Aparthotel</span>

                                                    <p class="text-medium-gray text-uppercase text-extra-small mb-0">Web and Photography</p>

                                                </div>

                                            </div>

                                        </div>

                                    </figcaption>

                                </figure>

                            </li>

                            <!-- end portfolio item -->

                            <!-- start portfolio item -->

                            <li class="grid-item application wow zoomIn portflioShadow" data-wow-delay="0.4s">

                                <figure>

                                    <div class="portfolio-img bg-black"><img src="{{ asset('assets/images/portfolio371/imageportfoliositeannonce.webp') }}" alt="" /></div>

                                    <figcaption>

                                        <div class="portfolio-hover-main">

                                            <div class="portfolio-hover-box align-middle">

                                                <div class="portfolio-icon">

                                                    <!-- <a href="single-project-page-03.html"><i class="fas fa-link" aria-hidden="true"></i></a> -->

                                                    <a class="gallery-link" title="IMAGE TITLE" href="{{ asset('assets/images/portfolio/imageportfoliositeannonce.webp') }}"><i class="fas fa-search" aria-hidden="true"></i></a>

                                                </div>

                                                <div class="portfolio-hover-content">

                                                    <span class="font-weight-600 line-height-normal alt-font text-white-2 text-uppercase margin-5px-bottom d-block">The Aparthotel</span>

                                                    <p class="text-medium-gray text-uppercase text-extra-small mb-0">Web and Photography</p>

                                                </div>

                                            </div>

                                        </div>

                                    </figcaption>

                                </figure>

                            </li>

                            <!-- end portfolio item -->

                        </ul>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- end portfolio section -->
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

        <!-- setting -->
        <script  src="{{ asset('assets/js/main.js') }}"></script>
        
    </x-slot>

</x-app>

