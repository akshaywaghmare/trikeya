@extends('layout.master')

@section('content')

<!-- Slider
		============================================= -->
		<section id="slider" class="slider-element swiper_wrapper min-vh-100" data-effect="fade">
			<div class="slider-inner">

				<div class="swiper-container swiper-parent">
					<div class="swiper-wrapper">
						<!-- Slide 1 -->
						<div class="swiper-slide  dark bg-color" style="background:  url('public/theme/images/resort/hero-bg.jpg') no-repeat center center; background-position: bottom; background-size: cover;">
							<div class="container" style="z-index: 2;">
								<div class="row h-100 align-items-center py-5">
									<div class="col-md-6">
										<div class="heading-block border-bottom-0 bottommargin-sm">
										
											<h2 class="font-weight-bold nott ls0" data-animate="fadeInUp" data-delay="200" style="font-size: 46px;">A magical paradise on the mountain top.</h2>
										</div>
										<p class="mb-5 font-weight-normal lead" data-animate="fadeInUp" data-delay="400" style="line-height: 1.6;">A calm place to make your mind happy and relaxed amidst soulful natural surroundings.</p>
										<a href="https://www.asiatech.in/booking_engine/index3.php?token=MjYyOA==" target="_blank" data-offset="70"  data-animate="fadeInUp" data-delay="600" class="btn rounded bg-white color text-uppercase font-weight-semibold ls1 py-3 px-4">Book Now <i class="icon-line-arrow-right"></i></a>
									</div>
								</div>
							</div>
						</div>

						<!-- Slide 2 -->
						<div class="swiper-slide dark bg-color" style="background:  url('public/theme/images/resort/hero-bg-3.jpg') no-repeat center center; background-position: bottom; background-size: cover;">
							<div class="container" style="z-index: 2;">
								<div class="row h-100 align-items-center py-5">
									<div class="col-md-6">
										<div class="heading-block border-bottom-0 bottommargin-sm">
											<h5 class="text-uppercase ls4 font-weight-light mb-2 text-white-50" data-animate="fadeInUp" data-delay="100">Yoga &amp; Meditation</h5>
											<h2 class="font-weight-bold nott ls0" data-animate="fadeInUp" data-delay="200" style="font-size: 42px;">Yoga is the perfect opportunity to be curious about who you are.</h2>
										</div>
										<p class="mb-5 font-weight-normal lead" data-animate="fadeInUp" data-delay="400" style="line-height: 1.6;">Monotonectally pursue intuitive catalysts for change for extensible materials. Intrinsicly fabricate principle-centered web-readiness with virtual.</p>
										<a href="#" data-scrollto="#section-about" data-offset="70"  data-animate="fadeInUp" data-delay="600" class="btn rounded bg-white color text-uppercase font-weight-semibold ls1 py-3 px-4">Get Started <i class="icon-line-arrow-right"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="slider-arrow-left"><i class="icon-angle-left"></i></div>
					<div class="slider-arrow-right"><i class="icon-angle-right"></i></div>
					<div class="slide-number"><div class="slide-number-current"></div><span>/</span><div class="slide-number-total"></div></div>
				</div>

			</div>
		</section>

		<!-- Content
		============================================= -->
		<section id="content" class="bg-white">
            <div class="content-wrap pt-0 pb-0" style="overflow: visible">


                <div id="" class="section center border-top-0 m-0 bg-white" >

					<div class="container clearfix">

						<h2 class="mx-auto bottommargin" style="max-width: 700px; font-size: 40px;">Welcome To Trikaya Retreat - Kamshet</h2>

						<p class="lead mx-auto bottommargin" style="max-width: 800px;">Trikaya is an ideal holiday destination, nestled in the foothills of the Shirota forests, last of the mighty hills amidst the Sahyadri ranges, built on a hilltop at an altitude of 2226ft above sea level, deep in the western ghats overlooking the Kundali Dam, we offer you an abode in the clouds.</p>
						<div class=" text-center  pb-5">
							<img src="{{asset('public/theme/images/sign.png')}}" alt="" width="16%">
						</div>

						<div class="clear"></div>

						<div class="row  mx-auto" style="max-width: 1000px;">
							

						<div class="col-md-12">
							<iframe width="760" height="450" src="https://www.youtube.com/embed/OK_PoSgmSUU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</div>
						
						

						</div>

					</div>

				</div>


			
				


                

                <div class="section  my-0 pb-1 bg-white ">
					<div class="container">
						<div class="heading-block" style="max-width: 500px">
							<h3 class="font-weight-bold nott mb-4" style="font-size: 42px; letter-spacing: -1px;">Stay Options</h3>
							<p>I took a walk in the woods and came out taller than the trees</p>
						</div>
					</div>
					<div  class="section bg-white mb-0 pb-0">
                        <div class="row no-gutters">
                            <div class="col-md-3">
                                <div class="oc-item">
                                    <div class="offer-section jumbotron m-0 dark d-flex justify-content-center align-items-md-end flex-column" style="height: 600px; border-radius: 0;background: linear-gradient(to bottom, rgba(0,0,0,0.1), rgba(0,0,0, 0.8)), url('public/theme/images/resort/service-1.jpg') no-repeat center center / cover;">
										<div class="offer-section-outer p-5 ">
											<a href="{{route('dweej')}}" class="view-button">View</a>
											<div class="jumbotron-text mt-0 mt-md-auto row align-items-center">
												<div class="col-md-12">
													<div class="testimonial bg-transparent shadow-none border-0 p-0">
														<h2 class="mb-1"> Dweej - The ECO Villa </h2>
														<div class="testi-content">
															<p>Dweej takes you back in time where homes were built using materials and technology that blend
																into the welcoming arms of Mother Nature.</p>
														</div>
													</div>
												
												</div>
											</div>
										</div>
									</div>
                                </div>
							</div>
							
							<div class="col-md-3">
                                <div class="oc-item">
                                    <div class="offer-section jumbotron m-0 dark d-flex justify-content-center align-items-md-end flex-column" style="height: 600px; border-radius: 0;background: linear-gradient(to bottom, rgba(0,0,0,0.1), rgba(0,0,0, 0.8)), url('public/theme/images/resort/service-2.jpg') no-repeat center center / cover;">
										<div class="offer-section-outer p-5 ">
											<a href="{{route('yahvi')}}" class="view-button">View</a>
											<div class="jumbotron-text mt-0 mt-md-auto row align-items-center">
												<div class="col-md-12">
													<div class="testimonial bg-transparent shadow-none border-0 p-0">
														<h2 class="mb-1">Yahvi - The Forest Abode </h2>
														<div class="testi-content">
															<p>Yahvi is a two-bedroom abode overlooking the Shirota forest. Both bedrooms have access to private
																sitting areas and lush green lawns with gardens.</p>
														</div>
													</div>
												
												</div>
											</div>
										</div>
									</div>
                                </div>
							</div>
							
							<div class="col-md-3">
                                <div class="oc-item">
                                    <div class="offer-section jumbotron m-0 dark d-flex justify-content-center align-items-md-end flex-column" style="height: 600px; border-radius: 0;background: linear-gradient(to bottom, rgba(0,0,0,0.1), rgba(0,0,0, 0.8)), url('public/theme/images/resort/service-3.jpg') no-repeat center center / cover;">
										<div class="offer-section-outer p-5 ">
											<a href="{{route('camping-in-the-clouds')}}" class="view-button">View</a>
											<div class="jumbotron-text mt-0 mt-md-auto row align-items-center">
												<div class="col-md-12">
													<div class="testimonial bg-transparent shadow-none border-0 p-0">
														<h2 class="mb-1">Camping In The Clouds</h2>
														<div class="testi-content">
															<p>Camping @ Trikaya Retreat is for nature lovers who would like to take a day or two off from the daily
																rigors and surrender to the lure of forest life.</p>
														</div>
													</div>
												
												</div>
											</div>
										</div>
									</div>
                                </div>
							</div>
							
							<div class="col-md-3">
                                <div class="oc-item">
                                    <div class="offer-section jumbotron m-0 dark d-flex justify-content-center align-items-md-end flex-column" style="height: 600px; border-radius: 0;background: linear-gradient(to bottom, rgba(0,0,0,0.1), rgba(0,0,0, 0.8)), url('public/theme/images/resort/service-4.jpg') no-repeat center center / cover;">
										<div class="offer-section-outer p-5 ">
											<a href="{{route('day-in-the-woods')}}" class="view-button">View</a>
											<div class="jumbotron-text mt-0 mt-md-auto row align-items-center">
												<div class="col-md-12">
													<div class="testimonial bg-transparent shadow-none border-0 p-0">
														<h2 class="mb-1"> Dweej - The ECO Villa </h2>
														<div class="testi-content">
															<p>Proximity to Pune and Mumbai makes Trikaya Retreat an ideal destination to spend a day amidst the
																enticing woods of the Western Ghats.</p>
														</div>
													</div>
												
												</div>
											</div>
										</div>
									</div>
                                </div>
                            </div>
                            
                        </div>
						
				
					</div>
				</div>




				






				<div class="section  mt-0 clearfix   bg-white">
					<div class="container">
						<div class="heading-block" style="max-width: 800px">
							<h3 class="font-weight-bold nott mb-4" style="font-size: 42px; letter-spacing: -1px;">Refreshing Experience <span>An abode in the clouds</span>.</h3>
						</div>
					</div>
					<div class="container clearfix">

						<div class="row justify-content-center col-mb-50">
							<div class="col-sm-6 col-lg-4">
								<div class="feature-box fbox-plain">
									<div class="fbox-icon">
										<a href="#"><img src="{{asset('public/theme/images/resort/icon-1.svg')}}" alt="Image"></a>
									</div>
									<div class="fbox-content">
										<h3 class="nott font-weight-semibold ls0">Aligned with Nature</h3>
										<p>once in a while and climb a mountain or spend a week in the woods. Align your spirit with the
											bounties of nature.</p>
									</div>
								</div>
							</div>

							<div class="col-sm-6 col-lg-4">
								<div class="feature-box fbox-plain">
									<div class="fbox-icon">
										<a href="#"><img src="{{asset('public/theme/images/resort/icon-2.svg')}}" alt="Image"></a>
									</div>
									<div class="fbox-content">
										<h3 class="nott font-weight-semibold ls0">Relax with Your Time</h3>
										<p>Relaxation is who you are.</p>
									</div>
								</div>
							</div>

							<div class="col-sm-6 col-lg-4">
								<div class="feature-box fbox-plain">
									<div class="fbox-icon">
										<a href="#"><img src="{{asset('public/theme/images/resort/icon-3.svg')}}" alt="Image"></a>
									</div>
									<div class="fbox-content">
										<h3 class="nott font-weight-semibold ls0">Tents in Starry Night</h3>
										<p>“You will find that the night is more alive and richly coloured than the day.</p>
									</div>
								</div>
							</div>

							<div class="col-sm-6 col-lg-4">
								<div class="feature-box fbox-plain">
									<div class="fbox-icon">
										<a href="#"><img src="{{asset('public/theme/images/resort/icon-4.svg')}}" alt="Image"></a>
									</div>
									<div class="fbox-content">
										<h3 class="nott font-weight-semibold ls0">Meditate with Music</h3>
										<p>Meditation is the art of hearing the music of silence</p>
									</div>
								</div>
							</div>

							<div class="col-sm-6 col-lg-4">
								<div class="feature-box fbox-plain">
									<div class="fbox-icon">
										<a href="#"><img src="{{asset('public/theme/images/resort/icon-5.svg')}}" alt="Image"></a>
									</div>
									<div class="fbox-content">
										<h3 class="nott font-weight-semibold ls0">Delicacies You Like</h3>
										<p>All happiness depends on a leisurely eaten meal.</p>
									</div>
								</div>
							</div>

							<div class="col-sm-6 col-lg-4">
								<div class="feature-box fbox-plain">
									<div class="fbox-icon">
										<a href="#"><img src="{{asset('public/theme/images/resort/icon-6.svg')}}" alt="Image"></a>
									</div>
									<div class="fbox-content">
										<h3 class="nott font-weight-semibold ls0">Prompt Service</h3>
										<p>We always strive to meet our customer’s expectations.</p>
									</div>
								</div>
							</div>

						</div>

					
					</div>
				</div>
				

				<div class="section  my-0 pb-1 bg-white mb-5 pb-5 pt-0">
					<div class="container">
						<div class="heading-block" style="max-width: 500px">
							<h3 class="font-weight-bold nott mb-4" style="font-size: 42px; letter-spacing: -1px;">Upcoming events</h3>
							<p>Experience The unique and magical events at different times of the year. We welcome you at The
								Trikaya to experience each season at its best.</p>
						</div>
					</div>
					<div class="container">
						<div class="row">
							<div class="entry event col-12">
								<div class="grid-inner row align-items-center no-gutters p-4">
									<div class="entry-image col-md-4 mb-md-0">
										<a href="#">
											<img src="{{asset('public/theme/images/resort/service-1.jpg')}}" alt="Inventore voluptates velit totam ipsa tenetur">
											<div class="entry-date">10<span>Apr</span></div>
										</a>
									</div>
									<div class="col-md-8 pl-md-4">
										<div class="entry-title title-sm">
											<h2><a href="#">Inventore voluptates velit totam ipsa tenetur</a></h2>
										</div>
										<div class="entry-meta">
											<ul>
												<li><a href="#"><i class="icon-time"></i> 11:00 - 19:00</a></li>
												<li><a href="#"><i class="icon-map-marker2"></i> Melbourne, Australia</a></li>
											</ul>
										</div>
										<div class="entry-content">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, voluptatem, dolorem animi nisi autem blanditiis enim culpa reiciendis et explicabo tenetur voluptate rerum molestiae eaque possimus exercitationem eligendi fuga.</p>
										</div>
									</div>
								</div>
							</div>
							<div class="entry event col-12">
								<div class="grid-inner row align-items-center no-gutters p-4">
									<div class="entry-image col-md-4 mb-md-0">
										<a href="#">
											<img src="{{asset('public/theme/images/resort/service-2.jpg')}}" alt="Inventore voluptates velit totam ipsa tenetur">
											<div class="entry-date">10<span>Apr</span></div>
										</a>
									</div>
									<div class="col-md-8 pl-md-4">
										<div class="entry-title title-sm">
											<h2><a href="#">Inventore voluptates velit totam ipsa tenetur</a></h2>
										</div>
										<div class="entry-meta">
											<ul>
												<li><a href="#"><i class="icon-time"></i> 11:00 - 19:00</a></li>
												<li><a href="#"><i class="icon-map-marker2"></i> Melbourne, Australia</a></li>
											</ul>
										</div>
										<div class="entry-content">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, voluptatem, dolorem animi nisi autem blanditiis enim culpa reiciendis et explicabo tenetur voluptate rerum molestiae eaque possimus exercitationem eligendi fuga.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 text-center">
								<a href="demo-yoga-login.html" class="btn rounded bg-theme text-white shadow text-uppercase font-weight-semibold ls1 py-3 px-4"><div>View All Events</div></a>
							</div>
						</div>
					</div>

				</div>










            


				<div class="section bg-transparent my-0 pb-1">
					<div class="container">
						<div class="heading-block" style="max-width: 500px">
							<h3 class="font-weight-bold nott mb-4" style="font-size: 42px; letter-spacing: -1px;"><span>Trikaya</span> You and your mind.</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta nesciunt tenetur iste odit animi mollitia amet autem alias ea dicta!</p>
						</div>
					</div>
					<div class="container">
						<div class="row">
							<div class="col-md-4">
								<div class="jumbotron m-0 dark p-5 d-flex justify-content-center align-items-md-end flex-column" style="background: linear-gradient(to bottom, rgba(0,0,0,0.1), rgba(0,0,0, 0.8)), url('https://images.unsplash.com/photo-1504886985223-7b2cad64c3ca?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1389&q=80') no-repeat center center / cover;">
									<div class="jumbotron-text mt-0 mt-md-auto row align-items-center">
										<div class="col-md-12">
											<div class="testimonial bg-transparent shadow-none border-0 p-0">
												<h2 class="mb-5">Welcome to Trikaya</h2>
											</div>
										</div>
										<div class="col-md-12 d-flex  mt-3 mt-md-0">
											<a href="https://trikayaretreat.com/wp-content/uploads/2020/05/Creating-A-Honest-Mind.mp3" data-lightbox="iframe" class="play-icon"><i class="icon-play1"></i></a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="jumbotron m-0 dark p-5 d-flex justify-content-center align-items-md-end flex-column" style="background: linear-gradient(to bottom, rgba(0,0,0,0.1), rgba(0,0,0, 0.8)), url('https://images.unsplash.com/photo-1519799478955-1c5b789a6bfb?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80') no-repeat center center / cover;">
									<div class="jumbotron-text mt-0 mt-md-auto row align-items-center">
										<div class="col-md-12">
											<div class="testimonial bg-transparent shadow-none border-0 p-0">
												<h2 class="mb-5">Mind Relaxation Music</h2>
											</div>
										</div>
										<div class="col-md-12 d-flex  mt-3 mt-md-0">
											<a href="https://trikayaretreat.com/wp-content/uploads/2020/05/Mind-Relaxation-Music.mp3" data-lightbox="iframe" class="play-icon"><i class="icon-play1"></i></a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="jumbotron m-0 dark p-5 d-flex justify-content-center align-items-md-end flex-column" style="background: linear-gradient(to bottom, rgba(0,0,0,0.1), rgba(0,0,0, 0.8)), url('https://images.unsplash.com/photo-1517363898874-737b62a7db91?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1258&q=80') no-repeat center center / cover;">
									<div class="jumbotron-text mt-0 mt-md-auto row align-items-center">
										<div class="col-md-12">
											<div class="testimonial bg-transparent shadow-none border-0 p-0">
												<h2 class="mb-5">Sahyadri’s Forest Sound</h2>
											</div>
										</div>
										<div class="col-md-12 d-flex  mt-3 mt-md-0">
											<a href="https://trikayaretreat.com/wp-content/uploads/2020/05/Sound-of-Sahyadri-Deep-Forest.mpeg" data-lightbox="iframe" class="play-icon"><i class="icon-play1"></i></a>
										</div>
									</div>
								</div>
							</div>
							
						</div>
					</div>

                </div>
                
                
				<div class="section mb-0 p-md-0">
					<div class="container">
						<div class="row align-items-center justify-content-between">

							<div class="col-lg-5 col-md-5 col-sm-6">
								<div class="heading-block border-bottom-0">
									<h2 class="font-weight-normal ls0 nott mb-0 font-primary" style="font-size: 44px; line-height: 1.3">A mind relaxing app</h2>
								</div>
								<p>Progressively strategize just in time scenarios and compelling results. Intrinsicly parallel task extensive systems whereas distinctive catalysts for scenarios and compelling results change.</p>
								<div>
									<a href="https://trikayaretreat.com/trikaya-wellness-app-free-trial" target="_blank"><img src="public/theme/images/appstore.png" alt="Image" height="54" class="mt-3"></a>
									<a href="https://trikayaretreat.com/trikaya-wellness-app-free-trial" target="_blank"><img src="public/theme/images/googleplay.png" alt="Image" class="ml-xl-3 ml-lg-1 mt-3 ml-0 " height="54"></a>
								</div>
							</div>

							<div class="col-lg-6 col-md-7 col-sm-6 mt-5 mt-sm-0">
								<div class="d-none d-lg-flex">
									<img src="public/theme/images/iphone-1.png" class="fast fadeInDown animated" alt="Image" style="height: 600px" data-animate="fadeInDown">
									<img src="public/theme/images/iphone-2.png" class="fast fadeInUp animated" alt="Image" style="height: 600px" data-animate="fadeInUp">
								</div>
								<img src="public/theme/images/iphone.png" alt="Image" class="d-block d-lg-none px-5 px-sm-0 p-md-5">
							</div>

						</div>
					</div>
				</div>





				<div class="container mt-5">
					<h3>What Client Says</h3>
				
					<ul class="testimonials-grid grid-1 grid-md-2 resort">
						<li class="grid-item">
							<div class="testimonial">
								<div class="testi-content">
									<p>This is very exotic place we had recently visited . This place has its own heritage where one can enjoy their selves with colleagues. And the food serve here is really good specially the breakfast. They serve healthy breakfast. We really enjoyed a lot.	</p>
									<div class="testi-meta">
										Santosh joshi 
										<span>Google.com</span>
									</div>
								</div>
							</div>
						</li>
						<li class="grid-item">
							<div class="testimonial">
								<div class="testi-content">
									<p>Excellent place for one day picnic, Near Pune, Drive from Pune to Kamshet is wonderful, Full of scenic beauty, We were glued to that place. lush green carpet around the earth with rain, breeze and so many waterfalls around. Special thanks to Mr. Anil and Mrs. Archana. Raghu and his staff.</p>
									<div class="testi-meta">
										MridulaJ3 
										<span>Tripadvisor</span>
									</div>
								</div>
							</div>
						</li>
						<li class="grid-item">
							<div class="testimonial">
								<div class="testi-content">
									<p>The place the management is awesome. At Trikaya you will be treated very well, humble people with amazing service. Nice barbeque and Personal camp fire. Weekend well spent with an amazing trek and another small trek to sunset point. Thank you guys. </p>
									<div class="testi-meta">
										purushotamp2015 
										<span>Tripadvisor</span>
									</div>
								</div>
							</div>
						</li>
						<li class="grid-item">
							<div class="testimonial">
								<div class="testi-content">
									<p>The property is tastefully done, with attention to every little aspect. The staff was absolutely brilliant and ensured that every little requirement was looked after. The food had a rustic authentic touch to it, which is rarely found in the city life we lead. Special thanks to the owners, Mr & Mrs. Pillai for taking special care of us, right from the time of booking to our checkout.</p>
									<div class="testi-meta">
										Akshay
										<span>Booking.com</span>
									</div>
								</div>
							</div>
						</li>
					</ul>
				</div>
				

                



				<div class="section bg-transparent  mb-0">
					<div class="container">
						<div class="d-flex justify-content-between align-items-center">
							<div class="heading-block border-bottom-0 mb-0" style="max-width: 700px">
								<div class="fancy-title title-border mb-3"><h5 class="font-weight-normal color font-body text-uppercase ls1">Beautiful Captured</h5></div>
								<h2 class="font-weight-bold mb-2 nott" style="font-size: 42px; letter-spacing: -1px">Our Gallery.</h2>
								<p class="lead mb-0">Energistically syndicate team building synergy after efficient human capital. Assertively underwhelm sticky solutions.</p>
							</div>
						
						</div>
					</div>
				</div>
				<div class="section p-0 m-0">
					<div class="masonry-thumbs grid-container grid-2 grid-sm-3 grid-md-4" data-lightbox="gallery">
						<a class="grid-item" href="{{asset('public/theme/images/resort/gallery/1.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('public/theme/images/resort/gallery/1.jpg')}}" alt="Gallery Thumb 1"></a>
						<a class="grid-item" href="{{asset('public/theme/images/resort/gallery/2.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('public/theme/images/resort/gallery/2.jpg')}}" alt="Gallery Thumb 2"></a>
						<a class="grid-item" href="{{asset('public/theme/images/resort/gallery/3.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('public/theme/images/resort/gallery/3.jpg')}}" alt="Gallery Thumb 3"></a>
						<a class="grid-item" href="{{asset('public/theme/images/resort/gallery/4.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('public/theme/images/resort/gallery/4.jpg')}}" alt="Gallery Thumb 4"></a>
						<a class="grid-item" href="{{asset('public/theme/images/resort/gallery/5.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('public/theme/images/resort/gallery/4.jpg')}}" alt="Gallery Thumb 5"></a>
						<a class="grid-item" href="{{asset('public/theme/images/resort/gallery/6.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('public/theme/images/resort/gallery/6.jpg')}}" alt="Gallery Thumb 6"></a>
						<a class="grid-item" href="{{asset('public/theme/images/resort/gallery/7.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('public/theme/images/resort/gallery/7.jpg')}}" alt="Gallery Thumb 7"></a>
						<a class="grid-item" href="{{asset('public/theme/images/resort/gallery/8.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('public/theme/images/resort/gallery/8.jpg')}}" alt="Gallery Thumb 8"></a>
						<a class="grid-item" href="{{asset('public/theme/images/resort/gallery/9.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('public/theme/images/resort/gallery/9.jpg')}}" alt="Gallery Thumb 9"></a>
						<a class="grid-item" href="{{asset('public/theme/images/resort/gallery/10.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('public/theme/images/resort/gallery/10.jpg')}}" alt="Gallery Thumb 10"></a>
						<a class="grid-item" href="{{asset('public/theme/images/resort/gallery/11.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('public/theme/images/resort/gallery/11.jpg')}}" alt="Gallery Thumb 11"></a>
						<a class="grid-item" href="{{asset('public/theme/images/resort/gallery/12.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('public/theme/images/resort/gallery/12.jpg')}}" alt="Gallery Thumb 12"></a>
					</div>
                </div>
                
                

				<div class="section mb-0 bg-transparent pb-0 mb-0 pt-0">
					<div class="container">
						<div class="heading-block" style="max-width: 500px">
							<h3 class="font-weight-bold nott mb-4" style="font-size: 42px; letter-spacing: -1px;">Locate Us</h3>
							
						</div>
					</div>
					<div id="google-map5" style="height: 400px;" class="gmap" data-address="New York, USA" data-zoom="7"></div>
				</div>

			</div>

		</section><!-- #content end -->
    
@endsection