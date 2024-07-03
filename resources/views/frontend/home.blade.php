@extends('global.index')
@section('content')

<!-- Start Banner Area -->
<section class="pt-5">
    <div class="container">
        <div class="row align-items-center mb-100px">
            <div class="col-md-6">
                <div class="ci-banner-details1">
                    <p class="mb-12px skin-sm-highlight">
                        {{ get_phrase('Creative Elements') }}</p>
                    <h1 class="mb-20px es-title-1 ci-top-banner-title1"><span class="ci-text-secondary">Unlock your creativity With</span> <span class="ci-title-gradient">Fre<span class="ci-title-gradient-italic">e</span> Premiu<span class="ci-title-gradient-italic">m</span></span> UI Components</h1>
                    <p class="man-subtitle-1">Lorem Ipsum available, but the majority have  suffered alteration in some form, by injected humor.</p>
                    <div class="d-flex align-items-center g-30px flex-wrap">
                        <a href="{{ route('elements') }}" class="btn btn-primary-ci1 d-flex align-items-center gap-1">
                            <span>{{ get_phrase('Explore Components') }}</span>
                            <img src="{{ asset('assets/img/home-2/arrow-right-white-24.svg') }}" alt="icon">
                        </a>
                        <a href="{{ route('elements_package_pricing') }}" class="btn btn-underline-ci1">{{ get_phrase('Subscribe') }}</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="d-flex flex-column align-items-center justify-content-center">
                    <div class="ci-home-banner-wrap1">
                        <div class="ci-home-banner1 wow bounceInRight" data-wow-duration="2s">
                            <img src="{{ asset('assets/img/home-2/ci-home-banner-1.svg') }}" alt="banner">
                        </div>
                        <div class="ci-home-banner-shape1 wow bounceInUp" data-wow-duration="2s">
                            <img src="{{ asset('assets/img/home-2/ci-home-banner-shape1.svg') }}" alt="shape">
                        </div>
                        <div class="ci-home-banner-shape2 wow bounceInDown" data-wow-duration="2s">
                            <img src="{{ asset('assets/img/home-2/ci-home-banner-shape2.svg') }}" alt="shape">
                        </div>
                        <div class="ci-home-banner-shape3 wow bounceInLeft" data-wow-duration="2s">
                            <img src="{{ asset('assets/img/home-2/ci-home-banner-shape3.svg') }}" alt="shape">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->

<!-- Start Counter Area -->
<section class="ci-counter-section mb-100px">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="es-title-1 ci-counter-section-title text-center">Trusted by <span class="text-red-gradient1">27,000</span> Individuals <br> Agencies &Enterprises all over the world</h1>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4">
            <div class="col">
                <div class="ci-single-counter text-center">
                    <h1 class="es-title-1 mb-12px"><span class="counter">64</span>+</h1>
                    <p class="man-subtitle-2 lh-1 fw-semibold">Awesome Products</p>
                </div>
            </div>
            <div class="col">
                <div class="ci-single-counter text-center">
                    <h1 class="es-title-1 mb-12px"><span class="counter">27</span>k+</h1>
                    <p class="man-subtitle-2 lh-1 fw-semibold">Happy Customers</p>
                </div>
            </div>
            <div class="col">
                <div class="ci-single-counter text-center">
                    <h1 class="es-title-1 mb-12px"><span class="counter">13</span>+</h1>
                    <p class="man-subtitle-2 lh-1 fw-semibold">Years of Experience</p>
                </div>
            </div>
            <div class="col">
                <div class="ci-single-counter text-center">
                    <h1 class="es-title-1 mb-12px"><span class="counter">1500</span>+</h1>
                    <p class="man-subtitle-2 lh-1 fw-semibold">5 Star Reviews</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Counter Area -->

<!-- Start Product details and banner Area -->
<section>
    <div class="container">
        <div class="row align-items-center mb-100px">
            <div class="col-md-6">
                <div class="ci-product-short-details">
                    <div class="d-flex align-items-center flex-wrap gap-2 mb-12px">
                        <div class="product-logo-sm">
                            <img src="{{ asset('assets/img/home-2/ci-product-logo1.svg') }}" alt="logo">
                        </div>
                        <p class="product-logo-sm-name">{{ get_phrase('Academy LMS') }}</p>
                    </div>
                    <h2 class="es-title-3 mb-20px">Explore Limitless Learning with <span class="text-red-gradient2">Academy LMS</span></h2>
                    <p class="man-subtitle-2 mb-40px">{{ get_phrase('Create, Manage, and sell your courses in one place. Academy LMS allows you to create courses and earn money by selling them to your students. Your students can browse through the options and select the best course for them') }}.</p>
                    <div class="d-flex align-items-center g-30px flex-wrap">
                        <a href="https://1.envato.market/jGqOZ" target="_blank" class="btn btn-outline-primary-ci1 d-flex align-items-center gap-1">
                            <span>Buy Now</span>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14.4297 5.92993L20.4997 11.9999L14.4297 18.0699" stroke="#0A7EFB" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M3.5 12H20.33" stroke="#0A7EFB" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                        <a href="{{ route('product_academy') }}" class="btn btn-underline-ci1">{{  get_phrase('Learn More') }}</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="ci-product-short-banner d-flex flex-column align-items-center align-items-md-end wow bounceInRight" data-wow-duration="2s">
                    <img src="{{ asset('assets/img/home-2/product-illustration-1.webp') }}" alt="banner">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Product details and banner Area -->

<!-- Start Product 2 details and banner Area -->
<section>
    <div class="container">
        <div class="row align-items-center mb-100px">
            <div class="col-md-6">
                <div class="ci-product-short-details">
                    <div class="d-flex align-items-center flex-wrap gap-2 mb-12px">
                        <div class="product-logo-sm">
                            <img src="{{ asset('assets/img/home-2/ci-product-logo2.svg') }}" alt="logo">
                        </div>
                        <p class="product-logo-sm-name">{{ get_phrase('Locus') }}</p>
                    </div>
                    <h2 class="es-title-3 mb-20px">Explore Property, List, and Connect Seamlessly with <span class="text-red-gradient2">Locus</span></h2>
                    <p class="man-subtitle-2 mb-40px">{{ get_phrase('Locus is a directory listing website for your real estate business. Create subscription-based packages for your agents and they can list their properties to sell. Buyers can visit properties to buy or rent and contact the agent') }}.</p>
                    <div class="d-flex align-items-center g-30px flex-wrap">
                        <a href="https://1.envato.market/locus_creativeitem" target="_blank" class="btn btn-outline-primary-ci1 d-flex align-items-center gap-1">
                            <span>Buy Now</span>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14.4297 5.92993L20.4997 11.9999L14.4297 18.0699" stroke="#0A7EFB" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M3.5 12H20.33" stroke="#0A7EFB" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                        <a href="#" class="btn btn-underline-ci1">{{  get_phrase('Learn More') }}</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="ci-product-short-banner d-flex flex-column align-items-center align-items-md-end wow bounceInRight" data-wow-duration="2s">
                    <img src="{{ asset('assets/img/home-2/product-illustration-2.webp') }}" alt="banner">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Product 2 details and banner Area -->

<!-- Start Product 3 details and banner Area -->
<section>
    <div class="container">
        <div class="row align-items-center mb-100px">
            <div class="col-md-6">
                <div class="ci-product-short-details">
                    <div class="d-flex align-items-center flex-wrap gap-2 mb-12px">
                        <div class="product-logo-sm">
                            <img src="{{ asset('assets/img/home-2/ci-product-logo3.svg') }}" alt="logo">
                        </div>
                        <p class="product-logo-sm-name">{{ get_phrase('Sociopro') }}</p>
                    </div>
                    <h2 class="es-title-3 mb-20px">Empowering Connections, Ensuring Privacy, and Monetizing Content Safely with <span class="text-red-gradient2">Sociopro</span></h2>
                    <p class="man-subtitle-2 mb-40px">{{ get_phrase('Utilize Sociopro to create a private, secure social network. Sociopro allows you to build a safe social environment where you can choose who you connect with and can share content with your users and earn money from it') }}.</p>
                    <div class="d-flex align-items-center g-30px flex-wrap">
                        <a href="https://1.envato.market/15n2Px" target="_blank" class="btn btn-outline-primary-ci1 d-flex align-items-center gap-1">
                            <span>Buy Now</span>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14.4297 5.92993L20.4997 11.9999L14.4297 18.0699" stroke="#0A7EFB" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M3.5 12H20.33" stroke="#0A7EFB" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                        <a href="#" class="btn btn-underline-ci1">{{  get_phrase('Learn More') }}</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="ci-product-short-banner d-flex flex-column align-items-center align-items-md-end wow bounceInRight" data-wow-duration="2s">
                    <img src="{{ asset('assets/img/home-2/product-illustration-3.webp') }}" alt="banner">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Product 3 details and banner Area -->

<!-- Start Product 4 details and banner Area -->
<section>
    <div class="container">
        <div class="row align-items-center mb-100px">
            <div class="col-md-6">
                <div class="ci-product-short-details">
                    <div class="d-flex align-items-center flex-wrap gap-2 mb-12px">
                        <div class="product-logo-sm">
                            <img src="{{ asset('assets/img/home-2/ci-product-logo4.svg') }}" alt="logo">
                        </div>
                        <p class="product-logo-sm-name">Ekattor 8</p>
                    </div>
                    <h2 class="es-title-3 mb-20px">Streamlining School
                    Management, One Click at a Time with <span class="text-red-gradient2">{{ get_phrase('Ekattor 8') }}</span></h2>
                    <p class="man-subtitle-2 mb-40px">{{ get_phrase("Keep track of your school's activity with Ekattor 8 ERP.  Ekattor 8 is designed to assist your schools in administering the responsibilities on a day-to-day basis by reducing the pressure of managing a large amount of data") }}.</p>
                    <div class="d-flex align-items-center g-30px flex-wrap">
                        <a href="https://1.envato.market/gb0BLv" target="_blank" class="btn btn-outline-primary-ci1 d-flex align-items-center gap-1">
                            <span>Buy Now</span>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14.4297 5.92993L20.4997 11.9999L14.4297 18.0699" stroke="#0A7EFB" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M3.5 12H20.33" stroke="#0A7EFB" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                        <a href="#" class="btn btn-underline-ci1">{{  get_phrase('Learn More') }}</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="ci-product-short-banner d-flex flex-column align-items-center align-items-md-end wow bounceInRight" data-wow-duration="2s">
                    <img src="{{ asset('assets/img/home-2/product-illustration-4.webp') }}" alt="banner">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Product 4 details and banner Area -->

<!-- Start Why Best Product Area -->
<section class="why-best-products">
    <div class="container">
        <!-- Title -->
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="best-products">
                    <h1 class="es-title-1 mb-20px text-center text-white mx-auto">Why Our Products are the best</h1>
                    <p class="info">We work on products that matter &amp; make the product keeping in mind customers' needs. What you actually want, what's going to reduce your workload, and make your life easier is our first priority.</p>
                </div>
            </div>
        </div>
        <!-- Items -->
        <div class="why-best-items">
            <div class="why-best-item">
                <div class="title">
                    <div class="icon">
                        <img src="{{ asset('assets/img/home/search-alt.svg') }}" alt="">
                    </div>
                    <h4>Research</h4>
                </div>
                <p class="info">A depth market study is our heart of production. We focus on the solution to people's problems.</p>
            </div>
            <div class="why-best-item">
                <div class="title">
                    <div class="icon">
                        <img src="{{ asset('assets/img/home/file.svg') }}" alt="">
                    </div>
                    <h4>Documentation</h4>
                </div>
                <p class="info">We properly described every single module of our products which makes our customer's life easy</p>
            </div>
            <div class="why-best-item">
                <div class="title">
                    <div class="icon">
                        <img src="{{ asset('assets/img/home/life-ring.svg') }}" alt="">
                    </div>
                    <h4>Customer Support</h4>
                </div>
                <p class="info">Customers can ask us questions anytime, and we are committed to answering them on time.</p>
            </div>
            <div class="why-best-item">
                <div class="title">
                    <div class="icon">
                        <img src="{{ asset('assets/img/home/refresh.svg') }}" alt="">
                    </div>
                    <h4>Xontinuous Update</h4>
                </div>
                <p class="info">Our products are updated with new features and bug fixes regularly.</p>
            </div>
            <div class="why-best-item">
                <div class="title">
                    <div class="icon">
                        <img src="{{ asset('assets/img/home/shield.svg') }}" alt="">
                    </div>
                    <h4>Data Security</h4>
                </div>
                <p class="info">There is no compromise with our customer's data security, even a single bit.</p>
            </div>
            <div class="why-best-item">
                <div class="title">
                    <div class="icon">
                        <img src="{{ asset('assets/img/home/ruler-triangle.svg') }}" alt="">
                    </div>
                    <h4>Testing</h4>
                </div>
                <p class="info">Every release of our products is adequately examined with multiple levels concerning bugs and user experience.</p>
            </div>
            <div class="why-best-item">
                <div class="title">
                    <div class="icon">
                        <img src="{{ asset('assets/img/home/head-vr.svg') }}" alt="">
                    </div>
                    <h4>Technology</h4>
                </div>
                <p class="info">Most advanced technologies are used in our products and has always been updated with the latest trends.</p>
            </div>
            <div class="why-best-item">
                <div class="title">
                    <div class="icon">
                        <img src="{{ asset('assets/img/home/user.svg') }}" alt="">
                    </div>
                    <h4>Customer first</h4>
                </div>
                <p class="info">Customer satisfaction is the heart of our hard work. We do whatever it takes to make them happy.</p>
            </div>
        </div>
    </div>
</section>
<!-- End Why Best Product Area -->

<!-- Start testimonial slider Area -->
<section class="ci-bg-body-secondary">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4">
                <div class="me-lg-4 pt-lg-0 pt-5">
                    <h2 class="es-title-3 mb-4 me-lg-4">Thousands of users have already tired <span class="text-red-gradient2">our application</span></h2>
                    <p class="man-subtitle-2 mb-40px">Lorem Ipsum available, but the majority have  suffered alteration in some form, by injected humor.</p> 
                    <a href="#" class="btn btn-primary-ci1">View All Reviews</a>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="pb-3 pb-lg-0">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="swiper swiper-vertical-reverse">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="ci-testimonial-card mb-30px">
                                            <p class="man-subtitle-2 mb-32px">Lorem Ipsum available, but the majority have  suffered alteration in some form, by injected humor.</p>
                                            <div class="d-flex align-items-center gap-2 justify-content-between">
                                                <div class="d-flex gap-2 align-items-center">
                                                    <div class="sm-image-wrap">
                                                        <img src="{{ asset('assets/img/home-2/testi-user-1.png') }}" alt="user">
                                                    </div>
                                                    <div>
                                                        <h4 class="man-title-5 mb-1 text-break">Lara William</h4>
                                                        <p class="man-subtitle-2">@William</p>
                                                    </div>
                                                </div>
                                                <div>
                                                    <img src="{{ asset('assets/img/icon/quote-gray-60.svg') }}" alt="icon">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="ci-testimonial-card mb-30px">
                                            <p class="man-subtitle-2 mb-32px">Lorem Ipsum available, but the majority have  suffered alteration in some form, by injected humor.</p>
                                            <div class="d-flex align-items-center gap-2 justify-content-between">
                                                <div class="d-flex gap-2 align-items-center">
                                                    <div class="sm-image-wrap">
                                                        <img src="{{ asset('assets/img/home-2/testi-user-2.png') }}" alt="user">
                                                    </div>
                                                    <div>
                                                        <h4 class="man-title-5 mb-1 text-break">Michel Johnson</h4>
                                                        <p class="man-subtitle-2">@micheal</p>
                                                    </div>
                                                </div>
                                                <div>
                                                    <img src="{{ asset('assets/img/icon/quote-gray-60.svg') }}" alt="icon">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="ci-testimonial-card mb-30px">
                                            <p class="man-subtitle-2 mb-32px">Lorem Ipsum available, but the majority have  suffered alteration in some form, by injected humor.</p>
                                            <div class="d-flex align-items-center gap-2 justify-content-between">
                                                <div class="d-flex gap-2 align-items-center">
                                                    <div class="sm-image-wrap">
                                                        <img src="{{ asset('assets/img/home-2/testi-user-3.png') }}" alt="user">
                                                    </div>
                                                    <div>
                                                        <h4 class="man-title-5 mb-1 text-break">John Doe</h4>
                                                        <p class="man-subtitle-2">@John</p>
                                                    </div>
                                                </div>
                                                <div>
                                                    <img src="{{ asset('assets/img/icon/quote-gray-60.svg') }}" alt="icon">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="swiper swiper-vertical">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="ci-testimonial-card mb-30px">
                                            <p class="man-subtitle-2 mb-32px">Lorem Ipsum available, but the majority have  suffered alteration in some form, by injected humor.</p>
                                            <div class="d-flex align-items-center gap-2 justify-content-between">
                                                <div class="d-flex gap-2 align-items-center">
                                                    <div class="sm-image-wrap">
                                                        <img src="{{ asset('assets/img/home-2/testi-user-4.png') }}" alt="user">
                                                    </div>
                                                    <div>
                                                        <h4 class="man-title-5 mb-1 text-break">Jacob John</h4>
                                                        <p class="man-subtitle-2">@Jacob</p>
                                                    </div>
                                                </div>
                                                <div>
                                                    <img src="{{ asset('assets/img/icon/quote-gray-60.svg') }}" alt="icon">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="ci-testimonial-card mb-30px">
                                            <p class="man-subtitle-2 mb-32px">Lorem Ipsum available, but the majority have  suffered alteration in some form, by injected humor.</p>
                                            <div class="d-flex align-items-center gap-2 justify-content-between">
                                                <div class="d-flex gap-2 align-items-center">
                                                    <div class="sm-image-wrap">
                                                        <img src="{{ asset('assets/img/home-2/testi-user-5.png') }}" alt="user">
                                                    </div>
                                                    <div>
                                                        <h4 class="man-title-5 mb-1 text-break">Esther Howard</h4>
                                                        <p class="man-subtitle-2">@Esther</p>
                                                    </div>
                                                </div>
                                                <div>
                                                    <img src="{{ asset('assets/img/icon/quote-gray-60.svg') }}" alt="icon">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="ci-testimonial-card mb-30px">
                                            <p class="man-subtitle-2 mb-32px">Lorem Ipsum available, but the majority have  suffered alteration in some form, by injected humor.</p>
                                            <div class="d-flex align-items-center gap-2 justify-content-between">
                                                <div class="d-flex gap-2 align-items-center">
                                                    <div class="sm-image-wrap">
                                                        <img src="{{ asset('assets/img/home-2/testi-user-6.png') }}" alt="user">
                                                    </div>
                                                    <div>
                                                        <h4 class="man-title-5 mb-1 text-break">Danny Marks</h4>
                                                        <p class="man-subtitle-2">@Danny</p>
                                                    </div>
                                                </div>
                                                <div>
                                                    <img src="{{ asset('assets/img/icon/quote-gray-60.svg') }}" alt="icon">
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
    </div>
</section>
<!-- End testimonial slider Area -->

@endsection