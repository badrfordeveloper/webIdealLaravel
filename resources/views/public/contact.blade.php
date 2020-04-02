<x-app page="contact" >

<!-- start page title section -->
<section class="wow fadeIn cover-background background-position-top top-space" style="background-image:url('{{ asset('assets/images/examples/contact4.jpg') }}');">
            <div class="opacity-medium bg-extra-dark-gray"></div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 d-flex flex-column text-center justify-content-center page-title-large padding-30px-tb">
                        <!-- start sub title -->
                        <!-- <span class="d-block text-white-2 opacity6 alt-font margin-5px-bottom">We are awesome designer</span> -->
                        <!-- end sub title -->
                        <!-- start page title -->
                        <h1 class="alt-font text-white-2 font-weight-600 mb-0" style="margin-top: 19px;font-size: 27pt;">Contactez Nous</h1>
                        <!-- end page title -->
                    </div>
                </div>
            </div>
        </section>
        <!-- end page title section -->
                <!-- start contact info -->
        <section class="wow fadeIn">
            <div class="container px-0">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-6 col-md-8 margin-eight-bottom md-margin-40px-bottom sm-margin-30px-bottom text-center last-paragraph-no-margin">
                        <h5 class="alt-font font-weight-700 text-extra-dark-gray text-uppercase mb-0">Informations de Contact</h5>
                    </div>  
                </div>
                <div class="row">
                    <!-- start contact info item -->
                    <div class="col-12 col-lg-4 col-md-6 text-center md-margin-eight-bottom sm-margin-30px-bottom wow fadeInUp last-paragraph-no-margin">
                        <div class="d-inline-block margin-20px-bottom">
                            <div class="bg-extra-dark-gray icon-round-medium"><i class="icon-map-pin icon-medium text-white-2"></i></div>
                        </div>
                        <div class="text-extra-dark-gray text-uppercase text-small font-weight-600 alt-font margin-5px-bottom">Adresse</div>
                        <p class="mx-auto">Casablanca, Maroc.</p>
                        
                    </div>
                    <!-- end contact info item -->
                    <!-- start contact info item -->
                    <div class="col-12 col-lg-4 col-md-6 text-center md-margin-eight-bottom sm-margin-30px-bottom wow fadeInUp last-paragraph-no-margin" data-wow-delay="0.2s">
                        <div class="d-inline-block margin-20px-bottom">
                            <div class="bg-extra-dark-gray icon-round-medium"><i class="icon-chat icon-medium text-white-2"></i></div>
                        </div>
                        <div class="text-extra-dark-gray text-uppercase text-small font-weight-600 alt-font margin-5px-bottom">Téléphone</div>
                        <p class="mx-auto"> +212 644-812-420 / +212 615-564-741 </p>
                        
                    </div>
                    <!-- end contact info item -->
                    <!-- start contact info item -->
                    <div class="col-12 col-lg-4 col-md-6 text-center sm-margin-30px-bottom wow fadeInUp last-paragraph-no-margin" data-wow-delay="0.4s">
                        <div class="d-inline-block margin-20px-bottom">
                            <div class="bg-extra-dark-gray icon-round-medium"><i class="icon-envelope icon-medium text-white-2"></i></div>
                        </div>
                        <div class="text-extra-dark-gray text-uppercase text-small font-weight-600 alt-font margin-5px-bottom">E-mail </div>
                        <p class="mx-auto">
                            <a href="mailto:web.ideal.maroc@gmail.com">web.ideal.maroc@gmail.com</a>
                        </p>
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
                    <div class="col-12 col-lg-6 cover-background md-height-450px sm-height-350px wow fadeIn" style="background: url('{{ asset('assets/images/examples/contact-us-2993000_1920.jpg') }}')"></div>
                    <div class="col-12 col-lg-6 text-center padding-six-lr padding-five-half-tb md-padding-ten-half-tb md-padding-twelve-half-lr sm-padding-15px-lr wow fadeIn">
                        <div class="text-medium-gray alt-font text-small text-uppercase margin-5px-bottom sm-margin-three-bottom">Remplissez le formulaire et nous serons en contact bientôt !</div>
                        <h5 class="margin-55px-bottom text-white-2 alt-font font-weight-700 text-uppercase sm-margin-ten-bottom">N'hésitez pas à nous contacter</h5>
                        <form id="project-contact-form" action="javascript:void(0)" method="post">
                            <div class="row">
                                <div class="col-12">
                                    <div id="success-project-contact-form" class="mx-0"></div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <input type="text" name="name" id="name" placeholder="Nom *" class="bg-transparent border-color-medium-dark-gray medium-input">
                                </div>
                                <div class="col-12 col-lg-6">
                                    <input type="text" name="subject" id="subject" placeholder="Sujet" class="bg-transparent border-color-medium-dark-gray medium-input">
                                </div>
                                <div class="col-12 col-lg-6">
                                    <input type="text" name="phone" id="phone" placeholder="Téléphone *" class="bg-transparent border-color-medium-dark-gray medium-input">
                                </div>
                                <div class="col-12 col-lg-6">
                                    <input type="text" name="email" id="email" placeholder="E-mail *" class="bg-transparent border-color-medium-dark-gray medium-input">
                                </div>
                                <div class="col-12">
                                    <textarea name="comment" id="comment" placeholder="Message" rows="7" class="bg-transparent border-color-medium-dark-gray medium-textarea"></textarea>
                                </div>
                                <div class="col-12 text-center">
                                    <button id="project-contact-us-button" type="submit" class="btn btn-deep-pink btn-medium margin-15px-top">Envoyer</button>
                                </div>
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
                            <li><a class="facebook" href="http://facebook.com" target="_blank"><i class="fab fa-facebook-f"></i><span></span></a></li>
                            <li><a class="twitter" href="http://twitter.com" target="_blank"><i class="fab fa-twitter"></i><span></span></a></li>
                            <li><a class="google" href="http://google.com" target="_blank"><i class="fab fa-google-plus-g"></i><span></span></a></li>
                            <li><a class="dribbble" href="http://dribbble.com" target="_blank"><i class="fab fa-dribbble"></i><span></span></a></li>
                            <li><a class="linkedin" href="http://linkedin.com" target="_blank"><i class="fab fa-linkedin-in"></i><span></span></a></li>
                        </ul>
                    </div>                   
                </div>
            </div>
        </section>
        <!-- end social section -->
</x-app>