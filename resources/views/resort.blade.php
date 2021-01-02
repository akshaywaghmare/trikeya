
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
                    <p>Assertively leverage existing integrated communities after turnkey quality vectors. Assertively coordinate sustainable quality.</p>
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
                    <p>Assertively leverage existing integrated communities after turnkey quality vectors. Assertively coordinate sustainable quality.</p>
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
                    <p>Assertively leverage existing integrated communities after turnkey quality vectors. Assertively coordinate sustainable quality.</p>
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
                    <p>Assertively leverage existing integrated communities after turnkey quality vectors. Assertively coordinate sustainable quality.</p>
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
                <div class="testi-image">
                    <a href="#"><img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Customer Testimonails"></a>
                </div>
                <div class="testi-content">
                    <p>Incidunt deleniti blanditiis quas aperiam recusandae consequatur ullam quibusdam cum libero illo rerum!</p>
                    <div class="testi-meta">
                        John Doe
                        <span>XYZ Inc.</span>
                    </div>
                </div>
            </div>
        </li>
        <li class="grid-item">
            <div class="testimonial">
                <div class="testi-image">
                    <a href="#"><img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Customer Testimonails"></a>
                </div>
                <div class="testi-content">
                    <p>Natus voluptatum enim quod necessitatibus quis expedita harum provident eos obcaecati id culpa corporis molestias.</p>
                    <div class="testi-meta">
                        Collis Ta'eed
                        <span>Envato Inc.</span>
                    </div>
                </div>
            </div>
        </li>
        <li class="grid-item">
            <div class="testimonial">
                <div class="testi-image">
                    <a href="#"><img src="https://randomuser.me/api/portraits/men/97.jpg" alt="Customer Testimonails"></a>
                </div>
                <div class="testi-content">
                    <p>Fugit officia dolor sed harum excepturi ex iusto magnam asperiores molestiae qui natus obcaecati facere sint amet.</p>
                    <div class="testi-meta">
                        Mary Jane
                        <span>Google Inc.</span>
                    </div>
                </div>
            </div>
        </li>
        <li class="grid-item">
            <div class="testimonial">
                <div class="testi-image">
                    <a href="#"><img src="https://randomuser.me/api/portraits/women/47.jpg" alt="Customer Testimonails"></a>
                </div>
                <div class="testi-content">
                    <p>Similique fugit repellendus expedita excepturi iure perferendis provident quia eaque. Repellendus, vero numquam?</p>
                    <div class="testi-meta">
                        Steve Jobs
                        <span>Apple Inc.</span>
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