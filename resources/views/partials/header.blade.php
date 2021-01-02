

		<!-- Header
		============================================= -->
		<header id="header" class="border-full-header header-size-custom" data-sticky-shrink="false" data-sticky-offset="52">
			<div id="header-wrap">
				<div class="container">
					<div class="header-row justify-content-lg-between">

						<!-- Logo
						============================================= -->
						<div id="logo" class="order-lg-2 col-auto px-0 mr-lg-0">
                        <a href="{{route('home')}}"  class="standard-logo" data-dark-logo="{{asset('public/theme/images/logo-trikeya.png')}}"><img src="{{asset('public/theme/images/logo-trikeya.png')}}" alt="Canvas Logo"></a>
							<a href="{{route('home')}}" class="retina-logo" data-dark-logo="{{asset('public/theme/images/logo-trikeya.png')}}"><img src="{{asset('public/theme/images/logo-trikeya.png')}}" alt="Canvas Logo"></a>
						</div><!-- #logo end -->

						<div class="header-misc order-lg-3 col-auto col-lg-5 px-0 justify-content-end">
							<a href="https://www.asiatech.in/booking_engine/index3.php?token=MjYyOA==" target="_blank" class="button-link  font-weight-semibold ls1 py-3 px-4"><div>Book Now</div></a>
							<a href="https://www.facebook.com/semicolonweb/" target="_blank" class="social-icon si-facebook si-small si-light mb-0"><i class="icon-facebook"></i><i class="icon-facebook"></i></a>
							<a href="https://www.instagram.com/semicolonweb/" target="_blank" class="social-icon si-instagram si-small si-light mb-0"><i class="icon-instagram"></i><i class="icon-instagram"></i></a>
							<a href="https://twitter.com/__SemiColon" target="_blank" class="social-icon si-paypal si-small si-light mb-0"><i class="icon-paypal"></i><i class="icon-paypal"></i></a>
						</div>

						<div id="primary-menu-trigger">
							<svg class="svg-trigger" viewBox="0 0 100 100"><path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path><path d="m 30,50 h 40"></path><path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path></svg>
						</div>

						<!-- Primary Navigation
						============================================= -->
						<nav class="primary-menu order-lg-1 col-lg-5 px-0">

							<!-- Menu Left -->
							<ul class="menu-container">
								<li class="current menu-item"><a class="menu-link" href="{{route('home')}}"><div>Home</div></a></li>
								<li class="menu-item"><a class="menu-link" href="{{route('resort')}}"><div>Resort</div></a></li>
                                <li class="menu-item"><a class="menu-link" href="#!"><div>We Offer</div></a>
									<ul class="sub-menu-container">
									<li class="menu-item"><a class="menu-link" href="{{route('dweej')}}"><div>Dweej - The ECO Villa</div></a></li>
										<li class="menu-item"><a class="menu-link" href="{{route('yahvi')}}"><div>Yahvi - The Forest Abode </div></a></li>
										<li class="menu-item"><a class="menu-link" href="{{route('camping-in-the-clouds')}}"><div>Camping In The Clouds</div></a></li>
										<li class="menu-item"><a class="menu-link" href="{{route('day-in-the-woods')}}"><div>Days In The Woods</div></a></li>
									</ul>
								</li>
							<li class="menu-item"><a class="menu-link" href="{{route('gallery')}}"><div>Gallery</div></a></li>
							<li class="menu-item"><a class="menu-link" href="{{route('contact-us')}}"><div>Contact Us</div></a></li>
								
							</ul>

						</nav><!-- #primary-menu end -->

					</div>
				</div>
			</div>
			<div class="header-wrap-clone"></div>
		</header><!-- #header end -->