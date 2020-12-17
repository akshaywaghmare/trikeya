@extends('layout.master')

@section('content')

<section id="page-title">

    <div class="container">
        <h1>Gallery</h1>
        
    </div>

</section>

<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">

           

            <!-- Portfolio Items
            ============================================= -->
            <div id="portfolio" class="portfolio row grid-container gutter-20" data-layout="fitRows">

                <!-- Portfolio Item: Start -->
                <article class="portfolio-item col-lg-3 col-md-4 col-sm-6 col-12 pf-media pf-icons">
                    <!-- Grid Inner: Start -->
                    <div class="grid-inner">
                        <!-- Image: Start -->
                        <div class="portfolio-image">
                            <a href="portfolio-single.html">
                                <img src="{{asset('public/theme/images/resort/gallery/1.jpg')}}" alt="Open Imagination">
                            </a>
                            <!-- Overlay: Start -->
                            <div class="bg-overlay">
                                <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                    <a href="{{asset('public/theme/images/resort/gallery/1.jpg')}}" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="image" title="Image"><i class="icon-line-plus"></i></a>
                                </div>
                                <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                            </div>
                            <!-- Overlay: End -->
                        </div>
                        <!-- Image: End -->
                      
                    </div>
                    <!-- Grid Inner: End -->
                </article>
                <!-- Portfolio Item: End -->

                <article class="portfolio-item col-lg-3 col-md-4 col-sm-6 col-12 pf-illustrations">
                    <div class="grid-inner">
                        <div class="portfolio-image">
                            <a href="portfolio-single.html">
                                <img src="{{asset('public/theme/images/resort/gallery/2.jpg')}}" alt="Locked Steel Gate">
                            </a>
                            <div class="bg-overlay">
                                <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                    <a href="{{asset('public/theme/images/resort/gallery/2.jpg')}}" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="image" title="Image"><i class="icon-line-plus"></i></a>
                                </div>
                                <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                            </div>
                        </div>
                       
                    </div>
                </article>

                <article class="portfolio-item col-lg-3 col-md-4 col-sm-6 col-12 pf-graphics pf-uielements">
                    <div class="grid-inner">
                        <div class="portfolio-image">
                            <a href="#">
                                <img src="{{asset('public/theme/images/resort/gallery/3.jpg')}}" alt="Mac Sunglasses">
                            </a>
                            <div class="bg-overlay">
                                <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                    <a href="{{asset('public/theme/images/resort/gallery/3.jpg')}}" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="image"><i class="icon-line-plus"></i></a>
                                </div>
                                <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                            </div>
                        </div>
                    
                    </div>
                </article>


                <article class="portfolio-item col-lg-3 col-md-4 col-sm-6 col-12 pf-graphics pf-uielements">
                    <div class="grid-inner">
                        <div class="portfolio-image">
                            <a href="#">
                                <img src="{{asset('public/theme/images/resort/gallery/4.jpg')}}" alt="Mac Sunglasses">
                            </a>
                            <div class="bg-overlay">
                                <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                    <a href="{{asset('public/theme/images/resort/gallery/4.jpg')}}" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="image"><i class="icon-line-plus"></i></a>
                                </div>
                                <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                            </div>
                        </div>
                    </div>
                </article>

                <article class="portfolio-item col-lg-3 col-md-4 col-sm-6 col-12 pf-graphics pf-uielements">
                    <div class="grid-inner">
                        <div class="portfolio-image">
                            <a href="#">
                                <img src="{{asset('public/theme/images/resort/gallery/5.jpg')}}" alt="Mac Sunglasses">
                            </a>
                            <div class="bg-overlay">
                                <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                    <a href="{{asset('public/theme/images/resort/gallery/5.jpg')}}" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="image"><i class="icon-line-plus"></i></a>
                                </div>
                                <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                            </div>
                        </div>
                    </div>
                </article>

                <article class="portfolio-item col-lg-3 col-md-4 col-sm-6 col-12 pf-graphics pf-uielements">
                    <div class="grid-inner">
                        <div class="portfolio-image">
                            <a href="#">
                                <img src="{{asset('public/theme/images/resort/gallery/6.jpg')}}" alt="Mac Sunglasses">
                            </a>
                            <div class="bg-overlay">
                                <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                    <a href="{{asset('public/theme/images/resort/gallery/6.jpg')}}" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="image"><i class="icon-line-plus"></i></a>
                                </div>
                                <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                            </div>
                        </div>
                    </div>
                </article>

                <article class="portfolio-item col-lg-3 col-md-4 col-sm-6 col-12 pf-graphics pf-uielements">
                    <div class="grid-inner">
                        <div class="portfolio-image">
                            <a href="#">
                                <img src="{{asset('public/theme/images/resort/gallery/7.jpg')}}" alt="Mac Sunglasses">
                            </a>
                            <div class="bg-overlay">
                                <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                    <a href="{{asset('public/theme/images/resort/gallery/7.jpg')}}" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="image"><i class="icon-line-plus"></i></a>
                                </div>
                                <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                            </div>
                        </div>
                    </div>
                </article>

                <article class="portfolio-item col-lg-3 col-md-4 col-sm-6 col-12 pf-graphics pf-uielements">
                    <div class="grid-inner">
                        <div class="portfolio-image">
                            <a href="#">
                                <img src="{{asset('public/theme/images/resort/gallery/8.jpg')}}" alt="Mac Sunglasses">
                            </a>
                            <div class="bg-overlay">
                                <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                    <a href="{{asset('public/theme/images/resort/gallery/8.jpg')}}" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="image"><i class="icon-line-plus"></i></a>
                                </div>
                                <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                            </div>
                        </div>
                    </div>
                </article>

                <article class="portfolio-item col-lg-3 col-md-4 col-sm-6 col-12 pf-graphics pf-uielements">
                    <div class="grid-inner">
                        <div class="portfolio-image">
                            <a href="#">
                                <img src="{{asset('public/theme/images/resort/gallery/9.jpg')}}" alt="Mac Sunglasses">
                            </a>
                            <div class="bg-overlay">
                                <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                    <a href="{{asset('public/theme/images/resort/gallery/9.jpg')}}" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="image"><i class="icon-line-plus"></i></a>
                                </div>
                                <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                            </div>
                        </div>
                    </div>
                </article>

                <article class="portfolio-item col-lg-3 col-md-4 col-sm-6 col-12 pf-graphics pf-uielements">
                    <div class="grid-inner">
                        <div class="portfolio-image">
                            <a href="#">
                                <img src="{{asset('public/theme/images/resort/gallery/10.jpg')}}" alt="Mac Sunglasses">
                            </a>
                            <div class="bg-overlay">
                                <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                    <a href="{{asset('public/theme/images/resort/gallery/10.jpg')}}" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="image"><i class="icon-line-plus"></i></a>
                                </div>
                                <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                            </div>
                        </div>
                    </div>
                </article>

                <article class="portfolio-item col-lg-3 col-md-4 col-sm-6 col-12 pf-graphics pf-uielements">
                    <div class="grid-inner">
                        <div class="portfolio-image">
                            <a href="#">
                                <img src="{{asset('public/theme/images/resort/gallery/11.jpg')}}" alt="Mac Sunglasses">
                            </a>
                            <div class="bg-overlay">
                                <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                    <a href="{{asset('public/theme/images/resort/gallery/11.jpg')}}" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="image"><i class="icon-line-plus"></i></a>
                                </div>
                                <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                            </div>
                        </div>
                    </div>
                </article>

                <article class="portfolio-item col-lg-3 col-md-4 col-sm-6 col-12 pf-graphics pf-uielements">
                    <div class="grid-inner">
                        <div class="portfolio-image">
                            <a href="#">
                                <img src="{{asset('public/theme/images/resort/gallery/12.jpg')}}" alt="Mac Sunglasses">
                            </a>
                            <div class="bg-overlay">
                                <div class="bg-overlay-content dark" data-hover-animate="fadeIn">
                                    <a href="{{asset('public/theme/images/resort/gallery/12.jpg')}}" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-lightbox="image"><i class="icon-line-plus"></i></a>
                                </div>
                                <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"></div>
                            </div>
                        </div>
                    </div>
                </article>

              
            </div><!-- #portfolio end -->

        </div>
    </div>
</section><!-- #content end -->



    
@endsection