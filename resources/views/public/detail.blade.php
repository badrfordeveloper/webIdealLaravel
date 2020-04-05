<x-app page="detail-article" >

	 <!-- start page title section -->
        <section class="wow fadeIn cover-background background-position-top top-space" style="background-image:url('{{ asset('assets/images/examples/blog2.jpg') }}');">
            <div class="opacity-medium bg-extra-dark-gray"></div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 d-flex justify-content-center flex-column text-center page-title-large padding-30px-tb">
                        <!-- start sub title -->
                        <span class="text-white-2 opacity6 alt-font margin-10px-bottom d-block text-uppercase text-small">{{ date('Y-m-d', strtotime($post->created_at)) }}&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="blog-masonry.html" class="text-white-2">{{ $post->categorie->libelle }}</a></span>
                        <!-- end sub title -->
                        <!-- start page title -->
                        <h1 class="text-white-2 alt-font font-weight-600 margin-10px-bottom">{{$post->titre}}</h1>
                        <!-- end page title -->
                    </div>
                </div>
            </div>
        </section>
        <!-- end page title section -->
        <!-- start section -->
        <section class="wow fadeIn padding-20px-tb border-bottom border-color-extra-light-gray">
            <div class="container">
                <div class="row">
                    <div class="col-12 breadcrumb alt-font text-small">
                        <!-- breadcrumb -->
                        <ul>
                            <li><a href="{{ url('/')}}" class="text-medium-gray">Accueil</a></li>
                            <li><a href="{{ url('blog')}}" class="text-medium-gray">Blog</a></li>
                            <li class="text-medium-gray">{{ $post->titre }}</li>
                        </ul>
                        <!-- end breadcrumb -->
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
          <!-- start blog content section -->
        <section class="wow fadeIn" style="padding: 50px 0!important">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-10 mx-auto text-center last-paragraph-no-margin">
                        <img src="@if($post->photo) {{asset('storage/'.$post->photo)}} @else {{asset('assets/images/default.png')}} @endif" alt="{{ $post->titre }}" class="width-100 margin-40px-tb md-margin-30px-tb">
                       {!! $post->content !!}
                    </div>
                </div>
            </div>
        </section>
        <!-- end blog content section -->

</x-app>
