
@extends('layout.master')



@section('content')

<section id="content">
    <div class="content-wrap">

<section id="slider" class="slider-element min-vh-70 include-header mb-5" style="margin-top: -80px;">
    <div class="slider-inner" style="background-image: url('public/theme/images/resort/hero-bg.jpg');">
        <div class="vertical-middle">
            <div class="container">
                <div class="row align-items-center justify-content-start text-left h-80">
                    <div class="col-md-9">
                        <div class="emphasis-title dark bottommargin">
                            <h2 data-animate="fadeInUp faster" class="mb-0 fadeInUp faster animated" style="font-size: 70px; font-weight: 700; line-height: 1.2">A magical paradise
                                on the mountain top.</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <img src="{{asset('public/theme/images/hero.svg')}}" alt="Image" style="position: absolute; bottom: -1px;">
    </div>
</section>


<div id="section-about" class="center page-section mt-5 pt-5" data-onepage-settings="{&quot;offset&quot;:65,&quot;speed&quot;:&quot;1250&quot;,&quot;easing&quot;:&quot;easeInOutExpo&quot;}">

    <div class="container clearfix">

        <h2 class="mx-auto bottommargin font-body mt-5" style="max-width: 700px; font-size: 40px;">Welcome To Trikaya Retreat - Kamshet</h2>

        <p class="lead mx-auto bottommargin" >Trikaya Retreat- Kamshet is an ideal holiday destination, nestled in the foothills of the Shirota forests, last of the mighty hills amidst the Sahyadri ranges. Built on a hill top at an altitude of 2226ft above sea level, deep in the western ghats overlooking the Kundali Dam, we offer you an abode in the clouds. Trikaya Retreat is a home for the restless and the young at heart to blend with nature, listen to the sounds of the forest, live the nomad’s life, shoot some DSLR preys – before getting back to one’s own steel and glass world. Mesmerising misty hills, private waterfalls, possibility of treks in the hills instead of the boring treadmill, have different birds each day as your morning alarm, catch the sunrise from your bed , savor the beauty of the sunset lying on a hammock, lie on your back by the campfire waiting to catch the occasional shooting star across a crystal clear sky – a typical wish list of anyone who is on the lookout for his well earned holiday. In addition, if you have a kitchen with staff who remembers the way you like your egg served on a Sunday morning, sets up your barbeque complete with the marinated goodies, wouldn’t you be tempted to change your FB status to “Life is Good”?</p>

       

        <div class="clear"></div>

        
    </div>

</div>



<div class="container clearfix mt-5 pt-5">

   
    <!-- Portfolio Items
    ============================================= -->
    <div id="portfolio" class="portfolio row grid-container gutter-30" data-layout="fitRows">

        <article class="portfolio-item col-sm-6 col-12 pf-media pf-icons">
            <div class="grid-inner">
                <div class="portfolio-image">
                    <a href="{{route('dweej')}}">
                        <img src="{{asset('public/theme/images/resort/service-1.jpg')}}" alt="Open Imagination" style="height: 437px;">
                    </a>
                    <div class="bg-overlay">
                        <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                            <a href="{{route('dweej')}}" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
                        </div>
                        <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                    </div>
                </div>
                <div class="portfolio-desc">
                    <h3><a href="{{route('dweej')}}"> Dweej - The ECO Villa </a></h3>
                    <p>Dweej takes you back in time where homes were built using materials and technology that blend
                        into the welcoming arms of Mother Nature.</p>
                </div>
            </div>
        </article>


        <article class="portfolio-item col-sm-6 col-12 pf-media pf-icons">
            <div class="grid-inner">
                <div class="portfolio-image">
                    <a href="{{route('yahvi')}}">
                        <img src="{{asset('public/theme/images/resort/service-2.jpg')}}" alt="Open Imagination" style="height: 437px;">
                    </a>
                    <div class="bg-overlay">
                        <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                            <a href="{{route('yahvi')}}" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
                        </div>
                        <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                    </div>
                </div>
                <div class="portfolio-desc">
                    <h3><a href="{{route('yahvi')}}">Yahvi - The Forest Abode  </a></h3>
                    <p>Yahvi is a two-bedroom abode overlooking the Shirota forest. Both bedrooms have access to private
                        sitting areas and lush green lawns with gardens.</p>
                </div>
            </div>
        </article>

        <article class="portfolio-item col-sm-6 col-12 pf-media pf-icons">
            <div class="grid-inner">
                <div class="portfolio-image">
                    <a href="{{route('camping-in-the-clouds')}}">
                        <img src="{{asset('public/theme/images/resort/service-3.jpg')}}" alt="Open Imagination" style="height: 437px;">
                    </a>
                    <div class="bg-overlay">
                        <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                            <a href="{{route('camping-in-the-clouds')}}" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
                        </div>
                        <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                    </div>
                </div>
                <div class="portfolio-desc">
                    <h3><a href="{{route('camping-in-the-clouds')}}">Camping In The Clouds</a></h3>
                    <p>Camping @ Trikaya Retreat is for nature lovers who would like to take a day or two off from the daily
                        rigors and surrender to the lure of forest life.</p>
                </div>
            </div>
        </article>

        <article class="portfolio-item col-sm-6 col-12 pf-media pf-icons">
            <div class="grid-inner">
                <div class="portfolio-image">
                    <a href="{{route('day-in-the-woods')}}">
                        <img src="{{asset('public/theme/images/resort/service-4.jpg')}}" alt="Open Imagination" style="height: 437px;">
                    </a>
                    <div class="bg-overlay">
                        <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                            <a href="{{route('day-in-the-woods')}}" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
                        </div>
                        <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                    </div>
                </div>
                <div class="portfolio-desc">
                    <h3><a href="{{route('day-in-the-woods')}}">Days In The Woods</a></h3>
                    <p>Proximity to Pune and Mumbai makes Trikaya Retreat an ideal destination to spend a day amidst the
                        enticing woods of the Western Ghats.</p>
                </div>
            </div>
        </article>


    </div><!-- #portfolio end -->

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





			</div>
</section>    
@endsection

@section('style')
{{-- <link rel="stylesheet" href="{{asset('public/assets/onepage.css')}}" type="text/css" /> --}}

@endsection