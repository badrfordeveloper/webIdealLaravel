<x-app page="portfolio" >

<!-- start page title section -->
<section class="wow fadeIn cover-background background-position-top top-space" style="background-image:url('{{ asset('assets/images/examples/businessman-3213659_1920.jpg') }}');">
            <div class="opacity-medium bg-extra-dark-gray"></div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 d-flex flex-column text-center justify-content-center page-title-large padding-30px-tb">
                        <!-- start sub title -->
                        <span class="d-block text-white-2 opacity6 alt-font margin-5px-bottom">We are awesome designer</span>
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
                        <ul class="portfolio-filter nav nav-tabs justify-content-center border-0 portfolio-filter-tab-1 font-weight-600 alt-font text-uppercase text-center margin-80px-bottom text-small md-margin-40px-bottom sm-margin-20px-bottom">
                            <li class="nav active"><a href="javascript:void(0);" data-filter="*" class="light-gray-text-link text-very-small">Tous</a></li>
                            <li class="nav"><a href="javascript:void(0);" data-filter=".vitrine" class="light-gray-text-link text-very-small">Vitrine</a></li>
                            <li class="nav"><a href="javascript:void(0);" data-filter=".catalogue" class="light-gray-text-link text-very-small">Catalogue</a></li>
                            <li class="nav"><a href="javascript:void(0);" data-filter=".ecommerce" class="light-gray-text-link text-very-small">E-commerce</a></li>
                            <li class="nav"><a href="javascript:void(0);" data-filter=".application" class="light-gray-text-link text-very-small">Application Web</a></li>
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
                                        <div class="portfolio-img bg-black"><img src="{{ asset('assets/images/portfolio/imageportfoliocatalogue1.jpg') }}" alt=""/></div>
                                        <figcaption>
                                            <div class="portfolio-hover-main">
                                                <div class="portfolio-hover-box align-middle">
                                                    <div class="portfolio-icon">
                                                        <!--<a href="single-project-page-01.html"><i class="fas fa-link" aria-hidden="true"></i></a>-->
                                                        <a class="gallery-link" title="IMAGE TITLE" href="{{ asset('assets/images/portfolio/imageportfoliocatalogue1.jpg') }}"><i class="fas fa-search" aria-hidden="true"></i></a>
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
                                        <div  class="portfolio-img bg-black"><img src="{{ asset('assets/images/portfolio/imageportfoliositevitrine4.jpg') }}" alt=""/></div>
                                        <figcaption>
                                            <div class="portfolio-hover-main">
                                                <div class="portfolio-hover-box align-middle">
                                                    <div class="portfolio-icon">
                                                        <!-- <a href="single-project-page-02.html"><i class="fas fa-link" aria-hidden="true"></i></a>  -->
                                                        <a class="gallery-link" title="IMAGE TITLE" href="{{ asset('assets/images/portfolio/imageportfoliositevitrine4.jpg') }}"><i class="fas fa-search" aria-hidden="true"></i></a>  
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
                                <li class="grid-item vitrine  wow zoomIn portflioShadow" data-wow-delay="0.4s">
                                    <figure>
                                        <div  class="portfolio-img bg-black"><img src="{{ asset('assets/images/portfolio/imageportfoliositevitrine3.jpg') }}" alt=""/></div>
                                        <figcaption>
                                            <div class="portfolio-hover-main">
                                                <div class="portfolio-hover-box align-middle">
                                                    <div class="portfolio-icon">                
                                                       <!--  <a href="single-project-page-03.html"><i class="fas fa-link" aria-hidden="true"></i></a>  -->
                                                        <a class="gallery-link" title="IMAGE TITLE" href="{{ asset('assets/images/portfolio/imageportfoliositevitrine3.jpg') }}"><i class="fas fa-search" aria-hidden="true"></i></a>   
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
                                        <div  class="portfolio-img bg-black"><img src="{{ asset('assets/images/portfolio/imageportfoliocommandeenligne.jpg') }}" alt=""/></div>
                                        <figcaption>
                                            <div class="portfolio-hover-main">
                                                <div class="portfolio-hover-box align-middle">
                                                    <div class="portfolio-icon">         
                                                       <!--  <a href="single-project-page-04.html"><i class="fas fa-link" aria-hidden="true"></i></a>   -->    
                                                        <a class="gallery-link" title="IMAGE TITLE" href="{{ asset('assets/images/portfolio/imageportfoliocommandeenligne.jpg') }}"><i class="fas fa-search" aria-hidden="true"></i></a>   
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
                                        <div  class="portfolio-img bg-black"><img src="{{ asset('assets/images/portfolio/imageportfoliositevitrine2.jpg') }}" alt=""/></div>
                                        <figcaption>
                                            <div class="portfolio-hover-main">
                                                <div class="portfolio-hover-box align-middle">
                                                    <div class="portfolio-icon">                              
                                                        <!-- <a href="single-project-page-05.html"><i class="fas fa-link" aria-hidden="true"></i></a>  -->  
                                                        <a class="gallery-link" title="IMAGE TITLE" href="{{ asset('assets/images/portfolio/imageportfoliositevitrine2.jpg') }}"><i class="fas fa-search" aria-hidden="true"></i></a>   
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
                                        <div  class="portfolio-img bg-black"><img src="{{ asset('assets/images/portfolio/imageportfolioecommerce3.jpg') }}" alt=""/></div>
                                        <figcaption>
                                            <div class="portfolio-hover-main">
                                                <div class="portfolio-hover-box align-middle">
                                                    <div class="portfolio-icon">                            
                                                        <!--<a href="single-project-page-01.html"><i class="fas fa-link" aria-hidden="true"></i></a>-->     
                                                        <a class="gallery-link" title="IMAGE TITLE" href="{{ asset('assets/images/portfolio/imageportfolioecommerce3.jpg') }}"><i class="fas fa-search" aria-hidden="true"></i></a>  
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
                                        <div  class="portfolio-img bg-black"><img src="{{ asset('assets/images/portfolio/imageportfolioecommerce1.jpg') }}" alt=""/></div>
                                        <figcaption>
                                            <div class="portfolio-hover-main">
                                                <div class="portfolio-hover-box align-middle">
                                                    <div class="portfolio-icon">                                           
                                                        <!-- <a href="single-project-page-02.html"><i class="fas fa-link" aria-hidden="true"></i></a>  -->      
                                                        <a class="gallery-link" title="IMAGE TITLE" href="{{ asset('assets/images/portfolio/imageportfolioecommerce1.jpg') }}"><i class="fas fa-search" aria-hidden="true"></i></a> 
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
                                        <div  class="portfolio-img bg-black"><img src="{{ asset('assets/images/portfolio/imageportfolioecommerce4.jpg') }}" alt=""/></div>
                                        <figcaption>
                                            <div class="portfolio-hover-main">
                                                <div class="portfolio-hover-box align-middle">
                                                    <div class="portfolio-icon">                                              
                                                        <!-- <a href="single-project-page-03.html"><i class="fas fa-link" aria-hidden="true"></i></a>   -->  
                                                        <a class="gallery-link" title="IMAGE TITLE" href="{{ asset('assets/images/portfolio/imageportfolioecommerce4.jpg') }}"><i class="fas fa-search" aria-hidden="true"></i></a>  
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
                                        <div  class="portfolio-img bg-black"><img src="{{ asset('assets/images/portfolio/imageportfoliositevitrine5.jpg') }}" alt=""/></div>
                                        <figcaption>
                                            <div class="portfolio-hover-main">
                                                <div class="portfolio-hover-box align-middle">
                                                    <div class="portfolio-icon">                                              
                                                       <!--  <a href="single-project-page-03.html"><i class="fas fa-link" aria-hidden="true"></i></a>  -->   
                                                        <a class="gallery-link" title="IMAGE TITLE" href="{{ asset('assets/images/portfolio/imageportfoliositevitrine5.jpg') }}"><i class="fas fa-search" aria-hidden="true"></i></a>  
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
                                        <div  class="portfolio-img bg-black"><img src="{{ asset('assets/images/portfolio/imageportfoliocommandeenligne2.jpg') }}" alt=""/></div>
                                        <figcaption>
                                            <div class="portfolio-hover-main">
                                                <div class="portfolio-hover-box align-middle">
                                                    <div class="portfolio-icon">                                              
                                                       <!--  <a href="single-project-page-03.html"><i class="fas fa-link" aria-hidden="true"></i></a>  -->   
                                                        <a class="gallery-link" title="IMAGE TITLE" href="{{ asset('assets/images/portfolio/imageportfoliocommandeenligne2.jpg') }}"><i class="fas fa-search" aria-hidden="true"></i></a>  
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
                                        <div  class="portfolio-img bg-black"><img src="{{ asset('assets/images/portfolio/imageportfolioecommerce2.jpg') }}" alt=""/></div>
                                        <figcaption>
                                            <div class="portfolio-hover-main">
                                                <div class="portfolio-hover-box align-middle">
                                                    <div class="portfolio-icon">                                              
                                                        <!-- <a href="single-project-page-03.html"><i class="fas fa-link" aria-hidden="true"></i></a>   -->  
                                                        <a class="gallery-link" title="IMAGE TITLE" href="{{ asset('assets/images/portfolio/imageportfolioecommerce2.jpg') }}"><i class="fas fa-search" aria-hidden="true"></i></a>  
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
                                        <div  class="portfolio-img bg-black"><img src="{{ asset('assets/images/portfolio/imageportfoliositevitrine1.jpg') }}" alt=""/></div>
                                        <figcaption>
                                            <div class="portfolio-hover-main">
                                                <div class="portfolio-hover-box align-middle">
                                                    <div class="portfolio-icon">                                              
                                                       <!--  <a href="single-project-page-03.html"><i class="fas fa-link" aria-hidden="true"></i></a>   -->  
                                                        <a class="gallery-link" title="IMAGE TITLE" href="{{ asset('assets/images/portfolio/imageportfoliositevitrine1.jpg') }}"><i class="fas fa-search" aria-hidden="true"></i></a>  
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
                                        <div  class="portfolio-img bg-black"><img src="{{ asset('assets/images/portfolio/imageportfoliocatalogue2.jpg') }}" alt=""/></div>
                                        <figcaption>
                                            <div class="portfolio-hover-main">
                                                <div class="portfolio-hover-box align-middle">
                                                    <div class="portfolio-icon">                                              
                                                        <!-- <a href="single-project-page-03.html"><i class="fas fa-link" aria-hidden="true"></i></a>  -->   
                                                        <a class="gallery-link" title="IMAGE TITLE" href="{{ asset('assets/images/portfolio/imageportfoliocatalogue2.jpg') }}"><i class="fas fa-search" aria-hidden="true"></i></a>  
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
                                        <div  class="portfolio-img bg-black"><img src="{{ asset('assets/images/portfolio/imageportfoliositeannonce.jpg') }}" alt=""/></div>
                                        <figcaption>
                                            <div class="portfolio-hover-main">
                                                <div class="portfolio-hover-box align-middle">
                                                    <div class="portfolio-icon">                                              
                                                        <!-- <a href="single-project-page-03.html"><i class="fas fa-link" aria-hidden="true"></i></a>    --> 
                                                        <a class="gallery-link" title="IMAGE TITLE" href="{{ asset('assets/images/portfolio/imageportfoliositeannonce.jpg') }}"><i class="fas fa-search" aria-hidden="true"></i></a>  
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
</x-app>