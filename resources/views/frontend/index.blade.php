@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@push('after-styles')
<link rel="stylesheet" href="{{ url('css/main.css') }}">
@endpush

@section('content')

    <!-- Slider -->
    <section class="section-slider" id="section-slider">
        <!-- Slider main container -->
        <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                    <div class="swiper-content">
                        <div class="inner-content">
                            <h1 class="title">Hotel & <br> Sports Venues</h1>
                            <p class="content">expertise and understanding of weather conditions and soil properties
                                helps us to match client expectations in</p>
                            <span class="more">Learn More About</span>
                            <div class="button-group">
                                <a class="button-default" href="">Root Balling</a>
                                <a class="button-default" href="">Sports Turfs</a>
                                <a class="button-default" href="">Planting Design</a>
                            </div>
                        </div>
                    </div>
                    <img src="{{ url('img/frontend/wallhaven-lq3mxp.jpg') }}" alt="">
                </div>
                <div class="swiper-slide">
                    <div class="swiper-content">
                        <div class="inner-content">
                            <h1 class="title">Elegance <br> Sustainability</h1>
                            <p class="content">is always top of our mind when we design</p>
                            <span class="more">Read More</span>
                            <div class="button-group">
                                <a class="button-default" href="">Landscape Architecture</a>
                                <a class="button-default" href="">Planting Design</a>
                            </div>
                        </div>
                    </div>
                    <img src="{{ url('img/frontend/wallhaven-rd7drw.jpg') }}" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="{{ url('img/frontend/wp6404430-valorant-4k-wallpapers.png') }}" alt="">
                </div>
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev">
                <i class="bi bi-chevron-left"></i>
            </div>
            <div class="swiper-button-next">
                <i class="bi bi-chevron-right"></i>
            </div>
        </div>
    </section>

    <!-- Section Features -->
    <section class="section-features" id="section-features">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4">
                <div class="col">
                    <div class="feature-item">
                        <i class="bi bi-globe2"></i>
                        <span class="title">Design</span>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque quae quos optio quaerat
                            eumillum. Molestias facere </p>
                    </div>
                </div>
                <div class="col">
                    <div class="feature-item">
                        <i class="bi bi-globe2"></i>
                        <span class="title">Develop</span>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque quae quos optio quaerat
                            eumillum. Molestias facere </p>
                    </div>
                </div>
                <div class="col">
                    <div class="feature-item">
                        <i class="bi bi-globe2"></i>
                        <span class="title">Maintain</span>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque quae quos optio quaerat
                            eumillum. Molestias facere </p>
                    </div>
                </div>
                <div class="col">
                    <div class="feature-item">
                        <i class="bi bi-globe2"></i>
                        <span class="title">Improve</span>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque quae quos optio quaerat
                            eumillum. Molestias facere </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section About -->
    <section class="section-about" id="section-about">
        <div class="container">
            <div class="inner-content">
                <h2 class="title">Dherana Landscape</h2>
                <p class="content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur obcaecati ipsum quos
                    quod molestias inventore repellendus deserunt quis, quaerat, cupiditate voluptatem optio molestiae
                    alias dolores esse illo! Libero, quae enim. Lorem ipsum dolor sit amet, consectetur adipisicing
                    elit. Vel asperiores quam optio sequi impedit. Excepturi molestias sed quos aliquid.</p>
                <span class="more">Read More</span>
                <div class="button-group">
                    <a class="button-border" href="">About Dherana</a>
                    <a class="button-border" href="">Recent Projects</a>
                    <a class="button-border" href="">Our Nurseries</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Projects -->
    <section class="section-projects" id="section-projects">
        <!-- Slider main container -->
        <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                    <div class="row g-0">
                        <div class="col-md-6 mobile-bottom">
                            <div class="swiper-content">
                                <div class="inner-content">
                                    <a class="button-default" href="">Latest Projects</a>
                                    <h1 class="title">Dhevanafushi <br> Hotel - Maldives</h1>
                                    <p class="content">We created beautiful garden spaces including Route Balling of
                                        coconut trees up to 20ft height</p>
                                    <span class="more">Read More</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mobile-top">
                            <img src="{{ url('img/frontend/chrome_YviZsnEuI7.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="row g-0">
                        <div class="col-md-6 mobile-bottom">
                            <div class="swiper-content">
                                <div class="inner-content">
                                    <a class="button-default" href="">Latest Projects</a>
                                    <h1 class="title">Hotel & <br> Sports Venues</h1>
                                    <p class="content">expertise and understanding of weather conditions and soil
                                        properties
                                        helps us to match client expectations in</p>
                                    <span class="more">Read More</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mobile-top">
                            <img src="{{ url('img/frontend/chrome_YviZsnEuI7.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="row g-0">
                        <div class="col-md-6 mobile-bottom">
                            <div class="swiper-content slide-1">
                                <div class="inner-content">
                                    <a class="button-default" href="">Latest Projects</a>
                                    <h1 class="title">Hotel & <br> Sports Venues</h1>
                                    <p class="content">expertise and understanding of weather conditions and soil
                                        properties
                                        helps us to match client expectations in</p>
                                    <span class="more">Read More</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mobile-top">
                            <img src="{{ url('img/frontend/chrome_YviZsnEuI7.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev">
                <i class="bi bi-chevron-left"></i>
            </div>
            <div class="swiper-button-next">
                <i class="bi bi-chevron-right"></i>
            </div>
        </div>
    </section>

    <!-- Section Testimonials -->
    <section class="section-testimonials" id="section-testimonials">
        <div class="container">
            <div class="inner-wrapper">
                <h2 class="title">What they say</h2>
                <p class="content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos deleniti ex architecto
                    nisi doloribus aperiam ea temporibus labore dolor quisquam. Quia repellat numquam sint vero deserunt
                    labore fuga, voluptas doloremque. Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit
                    impedit ipsam deserunt ducimus labore ratione asperiores nostrum,</p>

                <span class="blockquote">John Smith <span class="normal-text">- ABC Group</span></span>
            </div>
        </div>
    </section>


    <!-- Section Get In Touch -->
    <section class="section-getInTouch" id="section-getInTouch">
        <div class="container">
            <div class="inner-wrapper">
                <h2 class="title">How Can We Help You?</h2>
                <p class="content">Just drop in your details and one of our team of experts will contact you for a
                    <span class="strong">free consultation</span>.
                </p>
                <a href="" class="button-default">Get in touch</a>
            </div>
        </div>
    </section>

    <!-- Section Clients -->
    <section class="section-clients" id="section-clients">
        <div class="container">
            <h2 class="title">Our Clients</h2>

            <div class="splide">
                <div class="splide__arrows">
                    <button class="splide__arrow splide__arrow--prev">
                        <i class="bi bi-chevron-left"></i>
                    </button>
                    <button class="splide__arrow splide__arrow--next">
                        <i class="bi bi-chevron-right"></i>
                    </button>
                </div>

                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <img src="https://dummyimage.com/200x115/71dea4/2e314f.png" alt="">
                        </li>
                        <li class="splide__slide">
                            <img src="https://dummyimage.com/200x115/de7195/2e314f.png" alt="">
                        </li>
                        <li class="splide__slide">
                            <img src="https://dummyimage.com/200x115/7177de/2e314f.png" alt="">
                        </li>
                        <li class="splide__slide">
                            <img src="https://dummyimage.com/200x115/71de85/2e314f.png" alt="">
                        </li>
                        <li class="splide__slide">
                            <img src="https://dummyimage.com/200x115/deca71/2e314f.png" alt="">
                        </li>
                        <li class="splide__slide">
                            <img src="https://dummyimage.com/200x115/c9069f/2e314f.png" alt="">
                        </li>
                        <li class="splide__slide">
                            <img src="https://dummyimage.com/200x115/06c77d/2e314f.png" alt="">
                        </li>
                        <li class="splide__slide">
                            <img src="https://dummyimage.com/200x115/7ec708/2e314f.png" alt="">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

@endsection

@push('after-scripts')


@endpush