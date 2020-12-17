
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
                            <h2 data-animate="fadeInUp faster" class="mb-0 fadeInUp faster animated" style="font-size: 70px; font-weight: 700; line-height: 1.2">Pet Lovers?<br>Find the Right Companion.</h2>
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

        <h2 class="mx-auto bottommargin font-body mt-5" style="max-width: 700px; font-size: 40px;">A digital web studio creating stunning &amp; engaging online experiences</h2>

        <p class="lead mx-auto bottommargin" style="max-width: 800px;">Ford Foundation reduce child mortality fight against oppression refugee disruption pursue these aspirations effect. Free-speech Nelson Mandela change liberal; challenges of our times sustainability institutions.</p>

       

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
                    <a href="portfolio-single.html">
                        <img src="{{asset('public/theme/images/resort/service-1.jpg')}}" alt="Open Imagination" style="height: 437px;">
                    </a>
                    <div class="bg-overlay">
                        <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                            <a href="portfolio-single.html" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
                        </div>
                        <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                    </div>
                </div>
                <div class="portfolio-desc">
                    <h3><a href="portfolio-single.html"> Dweej - The ECO Villa </a></h3>
                    <p>Assertively leverage existing integrated communities after turnkey quality vectors. Assertively coordinate sustainable quality.</p>
                </div>
            </div>
        </article>


        <article class="portfolio-item col-sm-6 col-12 pf-media pf-icons">
            <div class="grid-inner">
                <div class="portfolio-image">
                    <a href="portfolio-single.html">
                        <img src="{{asset('public/theme/images/resort/service-2.jpg')}}" alt="Open Imagination" style="height: 437px;">
                    </a>
                    <div class="bg-overlay">
                        <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                            <a href="portfolio-single.html" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
                        </div>
                        <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                    </div>
                </div>
                <div class="portfolio-desc">
                    <h3><a href="portfolio-single.html">Yahvi - The Forest Abode  </a></h3>
                    <p>Assertively leverage existing integrated communities after turnkey quality vectors. Assertively coordinate sustainable quality.</p>
                </div>
            </div>
        </article>

        <article class="portfolio-item col-sm-6 col-12 pf-media pf-icons">
            <div class="grid-inner">
                <div class="portfolio-image">
                    <a href="portfolio-single.html">
                        <img src="{{asset('public/theme/images/resort/service-3.jpg')}}" alt="Open Imagination" style="height: 437px;">
                    </a>
                    <div class="bg-overlay">
                        <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                            <a href="portfolio-single.html" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
                        </div>
                        <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                    </div>
                </div>
                <div class="portfolio-desc">
                    <h3><a href="portfolio-single.html">Camping In The Clouds</a></h3>
                    <p>Assertively leverage existing integrated communities after turnkey quality vectors. Assertively coordinate sustainable quality.</p>
                </div>
            </div>
        </article>

        <article class="portfolio-item col-sm-6 col-12 pf-media pf-icons">
            <div class="grid-inner">
                <div class="portfolio-image">
                    <a href="portfolio-single.html">
                        <img src="{{asset('public/theme/images/resort/service-4.jpg')}}" alt="Open Imagination" style="height: 437px;">
                    </a>
                    <div class="bg-overlay">
                        <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                            <a href="portfolio-single.html" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
                        </div>
                        <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                    </div>
                </div>
                <div class="portfolio-desc">
                    <h3><a href="portfolio-single.html">Days In The Woods</a></h3>
                    <p>Assertively leverage existing integrated communities after turnkey quality vectors. Assertively coordinate sustainable quality.</p>
                </div>
            </div>
        </article>


    </div><!-- #portfolio end -->

</div>





			</div>
</section>    
@endsection

@section('style')
{{-- <link rel="stylesheet" href="{{asset('public/assets/onepage.css')}}" type="text/css" /> --}}

@endsection