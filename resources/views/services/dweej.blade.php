@extends('layout.master')

@section('content')

<section id="content">
    <div class="content-wrap pt-0">
        
        <section id="slider" class="slider-element swiper_wrapper min-vh-60 min-vh-md-100">
			<div class="slider-inner">

				<div class="swiper-container swiper-parent">
					<div class="swiper-wrapper">
						<div class="swiper-slide dark">
							<div class="container">
								<div class="slider-caption slider-caption-center">
									<h2 data-animate="fadeInUp">Welcome to Canvas</h2>
									<p class="d-none d-sm-block" data-animate="fadeInUp" data-delay="200">Create just what you need for your Perfect Website. Choose from a wide range of Elements &amp; simply put them on our Canvas.</p>
								</div>
							</div>
							<div class="swiper-slide-bg" style="background-image: url('https://trikayaretreat.com/wp-content/uploads/2020/05/img1-1.jpg');"></div>
						</div>
					
						<div class="swiper-slide dark">
							<div class="container">
								<div class="slider-caption">
									<h2 data-animate="fadeInUp">Great Performance</h2>
									<p class="d-none d-sm-block" data-animate="fadeInUp" data-delay="200">You'll be surprised to see the Final Results of your Creation &amp; would crave for more.</p>
								</div>
							</div>
							<div class="swiper-slide-bg" style="background-image: url('https://trikayaretreat.com/wp-content/uploads/2020/05/img2-1.jpg'); background-position: center top;"></div>
                        </div>
                        <div class="swiper-slide dark">
							<div class="container">
								<div class="slider-caption">
									<h2 data-animate="fadeInUp">Great Performance</h2>
									<p class="d-none d-sm-block" data-animate="fadeInUp" data-delay="200">You'll be surprised to see the Final Results of your Creation &amp; would crave for more.</p>
								</div>
							</div>
							<div class="swiper-slide-bg" style="background-image: url('https://trikayaretreat.com/wp-content/uploads/2020/05/img3-1.jpg'); background-position: center top;"></div>
						</div>
					</div>
					<div class="slider-arrow-left"><i class="icon-angle-left"></i></div>
					<div class="slider-arrow-right"><i class="icon-angle-right"></i></div>
					<div class="slide-number"><div class="slide-number-current"></div><span>/</span><div class="slide-number-total"></div></div>
				</div>

			</div>
        </section>
        


        <div id="section-about" class="center page-section mt-5 pt-5" data-onepage-settings="{&quot;offset&quot;:65,&quot;speed&quot;:&quot;1250&quot;,&quot;easing&quot;:&quot;easeInOutExpo&quot;}">

            <div class="container clearfix">
        
                <h2 class="mx-auto bottommargin font-body mt-5" style="max-width: 700px; font-size: 40px;">Dweej - The ECO Villa</h2>
        
                <p class="text-left">Dweej takes you back in time where homes were built using materials and technology that blend into the welcoming arms of Mother Nature. The villa is built using wood, mud, lime, jaggery and other natural made to order eco friendly materials. It is ideal for those who are trying to escape the cement jungle of urban life and yet enjoy all the comforts of it in the real jungle. A stay in the villa will ensure that you and your family rejuvenate your mind, body and soul. We provide food packages inclusive of all the four meals. It includes a vegetarian lunch, High tea with snacks, Dinner with barbecue (vegetarian and non vegetarian) and a dessert. Breakfast menu is egg and vegetarian in its offerings.</p>
                
                <p class="text-left">Please Note: The food package has to be ordered in advance and paid for separately at the time of villa booking.</p>

                <p class="text-left">The kitchen does not follow a conformist pattern; you can be assured of an eclectic choice in the limited a la carte menu available at site. The choice will be limited by what is available at site. In case of any special requirements, please ensure that we are forewarned adequately, since the closest convenient store is a good 15 kms from here.</p>
               
        
                <div class="clear"></div>
        
                
            </div>
        
        </div>


        <section>

            <div class="container clearfix">

                <div class="row col-mb-50">
                 
                    <!-- Portfolio Single Content
                    ============================================= -->
                    <div class="col-md-12 col-lg-12 portfolio-single-content">

                        <!-- Portfolio Single - Description
                        ============================================= -->
                        <div class="fancy-title title-border">
                            <h2>AMENITIES:</h2>
                        </div>

                        <div class="row col-mb-30">


                            <div class="col-md-12">
                                <div id="oc-portfolio" class="owl-carousel portfolio-carousel carousel-widget" data-pagi="false" data-items-xs="1" data-items-sm="2" data-items-md="6" data-items-lg="5">

                                    <div class="portfolio-item">
                                        <div class="portfolio-image">
                                            <a href="portfolio-single.html">
                                                <img src="{{asset('public/theme/images/dweej/icon1.jpg')}}" alt="Open Imagination">
                                            </a>
                                        </div>
                                        <div class="portfolio-desc">
                                            <h3><a href="portfolio-single.html">Upper lounge with glass windows</a></h3>
                                        </div>
                                    </div>

                                    <div class="portfolio-item">
                                        <div class="portfolio-image">
                                            <a href="portfolio-single.html">
                                                <img src="{{asset('public/theme/images/dweej/icon2.jpg')}}" alt="Open Imagination">
                                            </a>
                                        </div>
                                        <div class="portfolio-desc">
                                            <h3><a href="portfolio-single.html">Balcony with a swing</a></h3>
                                        </div>
                                    </div>

                                    <div class="portfolio-item">
                                        <div class="portfolio-image">
                                            <a href="portfolio-single.html">
                                                <img src="{{asset('public/theme/images/dweej/icon3.jpg')}}" alt="Open Imagination">
                                            </a>
                                        </div>
                                        <div class="portfolio-desc">
                                            <h3><a href="portfolio-single.html">Hall </a></h3>
                                        </div>
                                    </div>

                                    <div class="portfolio-item">
                                        <div class="portfolio-image">
                                            <a href="portfolio-single.html">
                                                <img src="{{asset('public/theme/images/dweej/icon4.jpg')}}" alt="Open Imagination">
                                            </a>
                                        </div>
                                        <div class="portfolio-desc">
                                            <h3><a href="portfolio-single.html">Bathtub in one bedroom </a></h3>
                                        </div>
                                    </div>

                                    <div class="portfolio-item">
                                        <div class="portfolio-image">
                                            <a href="portfolio-single.html">
                                                <img src="{{asset('public/theme/images/dweej/icon5.jpg')}}" alt="Open Imagination">
                                            </a>
                                        </div>
                                        <div class="portfolio-desc">
                                            <h3><a href="portfolio-single.html">Attached toilet</a></h3>
                                        </div>
                                    </div>

                                    <div class="portfolio-item">
                                        <div class="portfolio-image">
                                            <a href="portfolio-single.html">
                                                <img src="{{asset('public/theme/images/dweej/icon6.jpg')}}" alt="Open Imagination">
                                            </a>
                                        </div>
                                        <div class="portfolio-desc">
                                            <h3><a href="portfolio-single.html">Hot and cold water purifier</a></h3>
                                        </div>
                                    </div>

                                    <div class="portfolio-item">
                                        <div class="portfolio-image">
                                            <a href="portfolio-single.html">
                                                <img src="{{asset('public/theme/images/dweej/icon7.jpg')}}" alt="Open Imagination">
                                            </a>
                                        </div>
                                        <div class="portfolio-desc">
                                            <h3><a href="portfolio-single.html">Fridge</a></h3>
                                        </div>
                                    </div>

                                    <div class="portfolio-item">
                                        <div class="portfolio-image">
                                            <a href="portfolio-single.html">
                                                <img src="{{asset('public/theme/images/dweej/icon8.jpg')}}" alt="Open Imagination">
                                            </a>
                                        </div>
                                        <div class="portfolio-desc">
                                            <h3><a href="portfolio-single.html">Induction cook top and electric kettle</a></h3>
                                        </div>
                                    </div>

                                    <div class="portfolio-item">
                                        <div class="portfolio-image">
                                            <a href="portfolio-single.html">
                                                <img src="{{asset('public/theme/images/dweej/icon9.jpg')}}" alt="Open Imagination">
                                            </a>
                                        </div>
                                        <div class="portfolio-desc">
                                            <h3><a href="portfolio-single.html">Campfire</a></h3>
                                        </div>
                                    </div>
            
                            
                                </div>
                            </div>



                            
                        </div>
                        <!-- Portfolio Single - Description End -->

                    </div><!-- .portfolio-single-content end -->


                    <div class="col-md-12 col-lg-12 portfolio-single-content">
                        <div class="fancy-title title-border">
                            <h2>Reservation & Cancellation Policy:</h2>
                        </div>
                        <ul class="ul-list">
                            <li>Confirmation of Reservation will be effective only after the full payment is made in advance.</li>
                            <li>Food Package will have to be purchased separately along with villa stay option booking.</li>
                            <li>Rates include all that is explicitly mentioned above and nothing else. Food ordered from the ‘a la carte’ menu does not form part of the package and will have to be paid in cash at the time of check out. Connectivity could be a problem and hence we can’t assure card swipe facility.</li>
                            <li>Check in and Checkout times are as given against the different packages. Early check in / late checkout can only be with prior agreement and is the sole prerogative of the management. Early check in / Late checkout may entail additional charges. Please enquire at the time of booking itself. </li>
                            <li>Guests have to submit valid government ID’s at the time of checking in. Expats / NRI’s have to give passport and visa details in advance, at the time of booking.</li>
                        </ul>
                    </div>


                    <div class="col-md-12 col-lg-12 portfolio-single-content">
                        <div class="fancy-title title-border">
                            <h2>Cancellation and Date change:</h2>
                        </div>
                        <ul class="ul-list">
                            <li>7 days or more before the check in date – No cancellation charge.</li>
                            <li>6 days or less – 100% forfeiture charges apply.</li>
                            <li>Refund amounts will be processed within 10 days of the date of the original check in date.</li>
                            <li>4Reservation blackout dates” and “No cancellation dates” will be announced from time to time.</li>
                        </ul>
                    </div>


                    <div class="col-md-12 col-lg-12 portfolio-single-content">
                        <div class="fancy-title title-border">
                            <h2>Additional Information:</h2>
                        </div>
                        <ul class="ul-list">
                          <li>Since we are located close to the forest area and we do not have veterinary doctor available at the resort, we do not allow pets on the property.</li>
                          <li>We do not serve alcohol. Any one carrying alcohol with them is required to have individual permits for possession and consumption of alcohol. We do not charge corkage.</li>
                          <li>We have a strict non – negotiable “No Drug” use policy. Any one found indulging in use of any psychotropic substance will be immediately and summarily asked to vacate the premises. No refunds are applicable in such cases.</li>
                        </ul>
                    </div>

                    <div class="col-md-12 col-lg-12 portfolio-single-content">
                        <div class="fancy-title title-border">
                            <h2>What to carry with you:</h2>
                        </div>
                        <ul class="ul-list">
                         <li>While we strive to have insect repellents on hand, in case you have preference for any brand or application, please carry your preferred lotions / balms / sunscreens with you</li>
                         <li>All specific medications that you may require. We maintain a first aid kit for normal minor cuts / pains / sprains / discomforts etc.</li>
                         <li>Binoculars</li>
                         <li>Music instruments like Guitar or any other for music lovers.</li>
                         <li>Get a book which you have been planning to read for a while.</li>
                         <li>Wear comfortable and forest stay suitable clothes. Also make sure you have good pair of sports shoes for trek and sunset point visit. You can carry extra floaters or flip flops to move around in the resort. We strive to keep the surroundings litter free and we expect you to help us maintain it that way.</li>
                         <li>Last but not the least an open mind to embrace beauty of the nature and soak in all the precious experiences nature has to offer.</li>
                        </ul>
                    </div>


                    <div class="col-md-12 col-lg-12 portfolio-single-content">
                        <div class="fancy-title title-border">
                            <h2>Itinerary:</h2>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <h2>Day One:</h2>
                                <div class="history-tl-container">
                                    <ul class="tl">
                                      <li class="tl-item" ng-repeat="item in retailer_history">
                                        <div class="timestamp">
                                            12.00 Hrs
                                        </div>
                                        <div class="item-title">Check in with a welcome non alcoholic drink.</div>
                                      </li>
                                      <li class="tl-item" ng-repeat="item in retailer_history">
                                        <div class="timestamp">
                                            12.00 Hrs <br> 13.30 Hrs
                                        </div>
                                        <div class="item-title">waterfall (Monsoon)</div>
                                      </li>
                                      <li class="tl-item" ng-repeat="item in retailer_history">
                                        <div class="timestamp">
                                            13.30 Hrs<br> 15:00 Hrs
                                        </div>
                                        <div class="item-title">Lunch (Simple veg)</div>
                                      </li>


                                      <li class="tl-item" ng-repeat="item in retailer_history">
                                        <div class="timestamp">
                                            16.00 Hrs<br> 18.30 Hrs
                                        </div>
                                        <div class="item-title">Visit Kondeshwar shiv temple & sunset Valley point</div>
                                      </li>
                                      <li class="tl-item" ng-repeat="item in retailer_history">
                                        <div class="timestamp">
                                            18.30 Hrs<br> 19:30 Hrs
                                        </div>
                                        <div class="item-title">Enjoy your evening tea with snacks</div>
                                      </li>
                                      <li class="tl-item" ng-repeat="item in retailer_history">
                                        <div class="timestamp">
                                            20.00 Hrs
                                        </div>
                                        <div class="item-title">Set up a bonfire / fire up the barbeque</div>
                                      </li>
                                      <li class="tl-item" ng-repeat="item in retailer_history">
                                        <div class="timestamp">
                                            20.30 Hrs<br> 23:00 Hrs
                                        </div>
                                        <div class="item-title">Dinner with barbecue</div>
                                      </li>
                                  
                                    </ul>
                                  
                                  </div>
                            </div>

                            <div class="col-md-6">
                                <h2>Day Two:</h2>
                                <div class="history-tl-container">
                                    <ul class="tl">
                                      <li class="tl-item" ng-repeat="item in retailer_history">
                                        <div class="timestamp">
                                            7:30 Hrs <br> 9:30 Hrs
                                        </div>
                                        <div class="item-title">Trek in the Shirota forest (Summer, Winter)</div>
                                      </li>
                                      <li class="tl-item" ng-repeat="item in retailer_history">
                                        <div class="timestamp">
                                            09.30 Hrs <br> 10.30 Hrs
                                        </div>
                                        <div class="item-title"> Breakfast</div>
                                      </li>
                                      <li class="tl-item" ng-repeat="item in retailer_history">
                                        <div class="timestamp">
                                            10.30 Hrs
                                        </div>
                                        <div class="item-title">Check out</div>
                                      </li>
                                    </ul>
                                  
                                  </div>
                            </div>
                        </div>

                        
                    </div>


                    <div class="col-md-12">
                        <div class="promo promo-light p-4 p-md-5 ">
                            <div class="row align-items-center">
                                <div class="col-12 col-lg">
                                    <h3>Try Premium Free for <span>30 Days</span> and you'll never regret it!</h3>
                                    <span>Starts at just <em>$9.99/month</em> afterwards. No Ads, No Gimmicks and No SPAM. Just Real Content.</span>
                                </div>
                                <div class="col-12 col-lg-auto mt-4 mt-lg-0">
                                    <a href="https://www.asiatech.in/booking_engine/index3.php?token=MjYyOA==" target="_blank" class="button button-large button-circle button-black m-0">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-12">
                        <div class="fancy-title title-border mb-3">
                            <h2>Gallery:</h2>
                        </div>
                        <div class="section p-0 m-0 pt-5 bg-white">
                            <div class="masonry-thumbs grid-container grid-2 grid-sm-3 grid-md-4" data-lightbox="gallery">
                                <a class="grid-item" href="{{asset('public/theme/images/resort/gallery/1.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('public/theme/images/resort/gallery/1.jpg')}}" alt="Gallery Thumb 1"></a>
                                <a class="grid-item" href="{{asset('public/theme/images/resort/gallery/2.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('public/theme/images/resort/gallery/2.jpg')}}" alt="Gallery Thumb 2"></a>
                                <a class="grid-item" href="{{asset('public/theme/images/resort/gallery/3.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('public/theme/images/resort/gallery/3.jpg')}}" alt="Gallery Thumb 3"></a>
                                <a class="grid-item" href="{{asset('public/theme/images/resort/gallery/4.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('public/theme/images/resort/gallery/4.jpg')}}" alt="Gallery Thumb 4"></a>
                                <a class="grid-item" href="{{asset('public/theme/images/resort/gallery/5.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('public/theme/images/resort/gallery/4.jpg')}}" alt="Gallery Thumb 5"></a>
                                <a class="grid-item" href="{{asset('public/theme/images/resort/gallery/6.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('public/theme/images/resort/gallery/6.jpg')}}" alt="Gallery Thumb 6"></a>
                                <a class="grid-item" href="{{asset('public/theme/images/resort/gallery/7.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('public/theme/images/resort/gallery/7.jpg')}}" alt="Gallery Thumb 7"></a>
                                <a class="grid-item" href="{{asset('public/theme/images/resort/gallery/8.jpg')}}" data-lightbox="gallery-item"><img src="{{asset('public/theme/images/resort/gallery/8.jpg')}}" alt="Gallery Thumb 8"></a>
                               
                            </div>
                        </div>
                    </div>






                </div>

            </div>

        </section>


    

    </div>
</section>
@endsection