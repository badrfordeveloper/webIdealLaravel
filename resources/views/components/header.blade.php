      <!-- start header -->
  <header title="{{ $page }}">
            <!-- start navigation -->
            <nav class="navbar navbar-default bootsnav navbar-top header-dark background-transparent  navbar-expand-lg <?=($page == '' || $page == 'index') ? 'white-link' : '' ?> ">
                <div class="container nav-header-container">
                    <!-- start logo -->
                    <div class="col-auto pl-lg-0">
                        <a href="{{ url('/') }}" title="Pofo" class="logo"><img src="{{ asset('assets/images/logo-white.png') }}" data-rjs="{{ asset('assets/images/logo-white@2x.png') }}" alt="Pofo" class="logo-light default"></a>
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
                                    <a href="{{ url('/') }}">Accueil</a>
                                </li>
                                <li class="megamenu-fw">
                                    <a href="{{ url('a-propos') }}">A propos</a>
                                </li>
                                <li class="megamenu-fw">
                                    <a href="{{ url('services') }}">Services</a>
                                </li>
                                <li class="megamenu-fw">
                                    <a href="{{ url('portfolio') }}">Portfolio</a>
                                </li>
                                <li class="megamenu-fw">
                                    <a href="{{ url('contact') }}">Contact</a>
                                </li>
                                <li class="megamenu-fw">
                                    <a href="{{ url('blog') }}">Blog</a>
                                </li>
                                <!-- start menu -->
                            </ul>
                        </div>
                    </div>
                    <div class="col-auto pr-lg-0">
                        <div class="header-searchbar">
                            <a href="#search-header" class="header-search-form"><i class="fas fa-search search-button"></i></a>
                            <!-- search input-->
                            <form id="search-header" method="post" action="search-result.html" name="search-header" class="mfp-hide search-form-result">
                                <div class="search-form position-relative">
                                    <button type="submit" class="fas fa-search close-search search-button"></button>
                                    <input type="text" name="search" class="search-input" placeholder="Enter your keywords..." autocomplete="off">
                                </div>
                            </form>
                        </div>
                        <div class="header-social-icon d-none d-md-inline-block">
                            <a href="https://www.facebook.com/WEB-IDEAL-112485187066689" title="Facebook" target="_blank"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                            <a href="https://twitter.com/webideal1" title="Twitter" target="_blank"><i class="fab fa-twitter"></i></a>
                            <a href="https://www.linkedin.com/in/web-ideal-ab71251a6/" title="linkdin" target="_blank"><i class="fab fa-linkedin-in"></i></a>  
                            <a href="https://www.instagram.com/web_ideal/" title="instagram" target="_blank"><i class="fab fa-instagram no-margin-right"></i></a>                      
                        </div>
                    </div>
                </div>
            </nav>
            <!-- end navigation --> 
        </header>
        <!-- end header -->