      <!-- start header -->
      <?php $lang = (app()->getLocale() == "en") ? "en" : ""; ?>

      <style type="text/css">
          @media screen and (min-width: 768px)
          {
                .hidden-lg{
                    display: none !important;
                }
          }
      </style>

  <header title="{{ $page }}" >

            <!-- start navigation -->

            <nav class="navbar navbar-default bootsnav navbar-top header-dark background-transparent  navbar-expand-lg <?=($page == '' || $page == 'index') ? 'white-link' : '' ?> " >

                <div class="container nav-header-container">

                    <!-- start logo -->

                    <div class="col-auto pl-lg-0">

                        <a href="{{ url('/'.$lang) }}" title="Web Ideal" class="logo"><img src="{{ asset('assets/images/logo-white.webp') }}" data-rjs="{{ asset('assets/images/logo-white@2x.webp') }}" alt="Web Ideal" class="logo-light default"></a>

                    </div>

                    <!-- end logo -->

                    <div class="col accordion-menu pr-0 pr-md-3">

                        <button type="button" class="navbar-toggler collapsed" data-toggle="collapse" data-target="#navbar-collapse-toggle-1">

                            <span class="sr-only">toggle navigation</span>

                            <span class="icon-bar"></span>

                            <span class="icon-bar"></span>

                            <span class="icon-bar"></span>

                        </button>

                        <div class="navbar-collapse collapse justify-content-end" id="navbar-collapse-toggle-1">

                            <ul id="accordion" class="nav navbar-nav no-margin alt-font text-normal">

                                <!-- start menu  -->

                                 <li class=" megamenu-fw">

                                    <a href="<?=($lang != "") ? route('homeEn', ['locale' => $lang]) : route('home') ?>">{{ __('messages.home') }}</a>

                                </li>

                                <li class="megamenu-fw">

                                    <a href="<?=($lang != "") ? route('aboutEn', ['locale' => $lang]) : route('about') ?>">{{ __('messages.about') }}</a>

                                </li>

                                <li class="dropdown simple-dropdown">

                                    <a title="Services" href="<?=($lang != "") ? route('servicesEn', ['locale' => $lang]) : route('services') ?>">{{ __('messages.services') }}</a><i class="fas fa-angle-down dropdown-toggle" data-toggle="dropdown" aria-hidden="true"></i>
                                    <ul class="dropdown-menu">
                                        <li><a href="<?=($lang != "") ? route('sites_webEn', ['locale' => $lang]) : route('sites_web') ?>">{{ __('messages.websites') }}</a></li>
                                        <li><a href="<?=($lang != "") ? route('web_applicationEn', ['locale' => $lang]) : route('web_application') ?>">{{ __('messages.application_web') }}</a></li>
                                    </ul>

                                </li>

                                <li class="megamenu-fw">

                                    <a href="<?=($lang != "") ? route('portfolioEn', ['locale' => $lang]) : route('portfolio') ?>">{{ __('messages.portfolio') }}</a>

                                </li>

                                <li class="megamenu-fw">

                                    <a href="<?=($lang != "") ? route('contactEn', ['locale' => $lang]) : route('contact') ?>">{{ __('messages.contact') }}</a>

                                </li>

                                <li class="nav-item dropdown hidden-lg">
                                  @if(app()->getLocale() == "en")
                                    <a class="nav-link dropdown-toggle" href="#" id="dropdown09" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" title="English"><img width="20" alt="English" src="{{asset('assets/images/us.webp')}}">  English</a>
                                    <div class="dropdown-menu" aria-labelledby="dropdown09">
                                        <a class="dropdown-item" title="French" style="color: white" href="<?php  echo route(substr( Request::route()->getName(),0, -2 )); ?>"><img width="20px" src="{{asset('assets/images/fr.webp')}}">French</a>
                                        
                                    </div>
                                  @else
                                    <a class="nav-link dropdown-toggle" href="#" id="dropdown09" title="Francais" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img width="20" alt="Francais" src="{{asset('assets/images/fr.webp')}}"> Francais</a>
                                    <div class="dropdown-menu" aria-labelledby="dropdown09">
                                        <a class="dropdown-item" title="Anglais" style="color: white" href="<?php $route=Request::route()->getName().'En'; echo  route($route, ['locale' => "en"]); ?>"><img width="20" alt="Anglais" src="{{asset('assets/images/us.webp')}}"> Anglais</a>
                                        
                                    </div>
                                  @endif
                                </li>
                                @if(1==2)

                                <li class="megamenu-fw">

                                    <a href="<?=($lang != "") ? route('blogEn', ['locale' => $lang]) : route('blog') ?>">{{ __('messages.blog') }}</a>

                                </li>
                                @endif

                                <!-- start menu -->

                            </ul>

                        </div>

                    </div>

                    <div class="col-auto pr-lg-0">

                        <!-- <div class="header-searchbar">
                        
                            <a href="#search-header" class="header-search-form"><i class="fas fa-search search-button"></i></a>
                        
                            search input
                        
                            <form id="search-header" method="post" action="search-result.html" name="search-header" class="mfp-hide search-form-result">
                        
                                <div class="search-form position-relative">
                        
                                    <button type="submit" class="fas fa-search close-search search-button"></button>
                        
                                    <input type="text" name="search" class="search-input" placeholder="Enter your keywords..." autocomplete="off">
                        
                                </div>
                        
                            </form>
                        
                        </div> -->

                        <div class="header-social-icon d-none d-md-inline-block">

                            <a href="https://www.facebook.com/WEB-IDEAL-112485187066689" title="Facebook" target="_blank"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>

                            <a href="https://twitter.com/webideal1" title="Twitter" target="_blank"><i class="fab fa-twitter"></i></a>

                            <a href="https://www.linkedin.com/in/web-ideal-ab71251a6/" title="linkdin" target="_blank"><i class="fab fa-linkedin-in"></i></a>  

                            <a href="https://www.instagram.com/web_ideal/" title="instagram" target="_blank"><i class="fab fa-instagram no-margin-right"></i></a>                      

                        </div>

                        <div class="header-social-icon d-none d-md-inline-block">
                            <ul class="navbar-nav mr-auto">
                        
                            <li class="nav-item dropdown">
                              @if(app()->getLocale() == "en")
                                <a class="nav-link dropdown-toggle" href="{{ url('/en') }}" id="dropdown09" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" title="English"><img width="20" alt="English" src="{{asset('assets/images/us.webp')}}">  English</a>
                                <div class="dropdown-menu" aria-labelledby="dropdown09">
                                    <a class="dropdown-item" title="French" style="color: #000" href="<?php  echo route(substr( Request::route()->getName(),0, -2 )); ?>"><img width="20px" src="{{asset('assets/images/fr.webp')}}"> French</a>
                                    
                                </div>
                              @else
                                <a class="nav-link dropdown-toggle" href="{{ url('/fr') }}" id="dropdown09" title="Francais" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img width="20" alt="Francais" src="{{asset('assets/images/fr.webp')}}"> Francais</a>
                                <div class="dropdown-menu" aria-labelledby="dropdown09">
                                    <a class="dropdown-item" title="Anglais" style="color: #000" href=" <?php $route=Request::route()->getName().'En'; echo  route($route, ['locale' => "en"]); ?>"><img width="20" alt="Anglais" src="{{asset('assets/images/us.webp')}}">  
                                    Anglais</a>
                                    
                                </div>
                              @endif
                            </li>
                    </ul>

                        </div>

                    </div>

                </div>

            </nav>

            <!-- end navigation --> 

        </header>

        <!-- end header -->