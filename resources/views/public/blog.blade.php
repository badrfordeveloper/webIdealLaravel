<x-app page="blog" >
        <!-- start page title section -->
        <section class="wow fadeIn cover-background background-position-top top-space" style="background-image:url('{{ asset('assets/images/examples/blog2.jpg') }}');">
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
                        @forelse($posts as $post)
                        <!-- start post item --> 
                        <div class="blog-post-content d-flex align-items-center flex-wrap margin-60px-bottom padding-60px-bottom border-bottom border-color-extra-light-gray md-margin-30px-bottom md-padding-30px-bottom text-center text-md-left md-no-border">
                            <div class="col-12 col-lg-5 blog-image p-0 md-margin-30px-bottom sm-margin-20px-bottom margin-45px-right md-no-margin-right">
                                <a href="{{url('blog/'.$post->id.'/'.$post->titre)}}"><img src="@if($post->photo) {{asset('storage/'.$post->photo)}} @else {{asset('assets/images/default.png')}} @endif" alt="{{ $post->titre }}" ></a>
                            </div>
                            <div class="col-12 col-lg-6 blog-text p-0">
                                <div class="content margin-20px-bottom md-no-padding-left ">
                                    <a href="{{url('blog/'.$post->id.'/'.$post->titre)}}" class="text-extra-dark-gray margin-5px-bottom alt-font text-extra-large font-weight-600 d-inline-block">{{ $post->titre }}</a>
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
</x-app>