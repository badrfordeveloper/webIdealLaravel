			<!--topline section visible only on small screens|-->
			<div class="header_absolute s-pb-30">
				<header class="page_header ds">
					<div class="container-fluid">
						<div class="row align-items-center">
							<div class="col-xl-2 col-lg-3 col-11">
								<a href="index.html" class="logo text-center">
									<img src="{{ asset('assets/images/logo.png') }}" alt="">
								</a>
							</div>
							<div class="col-xl-8 col-lg-6 col-1 text-sm-center">
								<!-- main nav start -->
								<nav class="top-nav">
									<ul class="nav sf-menu">

										<li class="active">
											<a href="{{ url('/') }}">Accueil</a>
										</li>

										<li>
											<a href="{{ url('agence') }}">Agence</a>
										</li>

										<li>
											<a href="{{ url('nos-expertises') }}">Nos Expertises</a>
											<ul>
												<li>
													<a href="{{ url('nos-expertises/formation-accompagne') }}">Formation & Accompagne</a>
												</li>
												<li>
													<a href="{{ url('nos-expertises/design') }}">Design</a>
												</li>
												<li>
													<a href="{{ url('nos-expertises/impression') }}">Impression</a>
												</li>
												<li>
													<a href="{{ url('nos-expertises/creation-web') }}">Création Web</a>
												</li>
												<li>
													<a href="{{ url('nos-expertises/e-marketing') }}">E-Marketing </a>
												</li>
												<li>
													<a href="{{ url('nos-expertises/evenementiel') }}">Événementiel</a>
												</li>
											</ul>
										</li>

										<li>
											<a href="{{ url('references') }}">Références</a>
										</li>

										<li>
											<a href="{{ url('contact') }}">Contact</a>
											
										</li>

										<li>
											<a href="{{ url('blog') }}">Blog</a>
										</li>

									</ul>


								</nav>
								<!-- eof main nav -->
							</div>
							<div class="col-xl-2 col-lg-3 text-lg-left text-xl-right d-none d-lg-block">
								<div class="header_phone">
									<h6>
										<span>1-800</span>-123-4567
									</h6>
								</div>
							</div>
							<div class="search-box">
								<input type="text" name="search" placeholder="Chercher" class="search-text">
								<a href="#" class="search-btn">
									<i class="fa fa-search"></i>
								</a>
							</div>
						</div>
					</div>
					<!-- header toggler -->
					<span class="toggle_menu">
						<span></span>
					</span>
				</header>
			</div>