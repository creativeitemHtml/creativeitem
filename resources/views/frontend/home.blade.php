@extends('global.index')
@section('content')


<!-- Start Banner Area -->
<section class="pt-5">
    <div class="container">
        <div class="row align-items-center mb-100px">
            <div class="col-md-6">
                <div class="ci-banner-details1">
                    <p class="mb-12px skin-sm-highlight">{{get_phrase('Creative Elements')}}</p>
                    <h1 class="mb-20px es-title-1 ci-top-banner-title1"><span class="ci-text-secondary">Unlock your creativity With</span> <span class="ci-title-gradient">Fre<span class="ci-title-gradient-italic">e</span> Premiu<span class="ci-title-gradient-italic">m</span></span> UI Components</h1>
                    <p class="man-subtitle-1">Lorem Ipsum available, but the majority have  suffered alteration in some form, by injected humor.</p>
                    <div class="d-flex align-items-center g-30px flex-wrap">
                        <a href="#" class="btn btn-primary-ci1 d-flex align-items-center gap-1">
                            <span>Explore Components</span>
                            <img src="{{ asset('assets/img/home-2/arrow-right-white-24.svg') }}" alt="icon">
                        </a>
                        <a href="#" class="btn btn-underline-ci1">Subscribe</a>
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
<section class="ci-counter-section">
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
    
<section class="top-sticky-main-section">
    <!-- Start Product details and banner Area -->
    <div class="top-sticky-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="ci-product-short-details">
                        <div class="d-flex align-items-center flex-wrap gap-2 mb-12px">
                            <div class="product-logo-sm">
                                <img src="{{ asset('assets/img/home-2/ci-product-logo1.svg') }}" alt="logo">
                            </div>
                            <p class="product-logo-sm-name">Ekattor 8</p>
                        </div>
                        <h2 class="es-title-3 mb-20px">Explore Limitless Learning with <span class="text-red-gradient2">Academy LMS</span></h2>
                        <p class="man-subtitle-2 mb-40px">Lorem Ipsum available, but the majority have  suffered alteration in some form, by injected humor.</p>
                        <div class="d-flex align-items-center g-30px flex-wrap">
                            <a href="#" class="btn btn-outline-primary-ci1 d-flex align-items-center gap-1">
                                <span>Buy Now</span>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14.4297 5.92993L20.4997 11.9999L14.4297 18.0699" stroke="#0A7EFB" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M3.5 12H20.33" stroke="#0A7EFB" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                            <a href="{{ route('product_academy') }}" class="btn btn-underline-ci1">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="ci-product-short-banner d-flex flex-column align-items-center align-items-md-end wow bounceInRight" data-wow-duration="2s">
                        <img src="{{ asset('assets/img/home-2/ci-product-banner1.svg') }}" alt="banner">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Product details and banner Area -->
    
    <!-- Start Product 2 details and banner Area -->
    <div class="top-sticky-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="ci-product-short-details">
                        <div class="d-flex align-items-center flex-wrap gap-2 mb-12px">
                            <div class="product-logo-sm">
                                <img src="{{ asset('assets/img/home-2/ci-product-logo2.svg') }}" alt="logo">
                            </div>
                            <p class="product-logo-sm-name">Locus</p>
                        </div>
                        <h2 class="es-title-3 mb-20px">Explore Property, List, and Connect Seamlessly with <span class="text-red-gradient2">Locus</span></h2>
                        <p class="man-subtitle-2 mb-40px">Lorem Ipsum available, but the majority have  suffered alteration in some form, by injected humor.</p>
                        <div class="d-flex align-items-center g-30px flex-wrap">
                            <a href="#" class="btn btn-outline-primary-ci1 d-flex align-items-center gap-1">
                                <span>Buy Now</span>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14.4297 5.92993L20.4997 11.9999L14.4297 18.0699" stroke="#0A7EFB" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M3.5 12H20.33" stroke="#0A7EFB" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                            <a href="#" class="btn btn-underline-ci1">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="ci-product-short-banner d-flex flex-column align-items-center align-items-md-end wow bounceInRight" data-wow-duration="2s">
                        <img src="{{ asset('assets/img/home-2/ci-product-banner2.svg') }}" alt="banner">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Product 2 details and banner Area -->

    <!-- Start Product 3 details and banner Area -->
    <div class="top-sticky-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="ci-product-short-details">
                        <div class="d-flex align-items-center flex-wrap gap-2 mb-12px">
                            <div class="product-logo-sm">
                                <img src="{{ asset('assets/img/home-2/ci-product-logo3.svg') }}" alt="logo">
                            </div>
                            <p class="product-logo-sm-name">Sociopro</p>
                        </div>
                        <h2 class="es-title-3 mb-20px">Empowering Connections, Ensuring Privacy, and Monetizing Content Safely with <span class="text-red-gradient2">Sociopro</span></h2>
                        <p class="man-subtitle-2 mb-40px">Lorem Ipsum available, but the majority have  suffered alteration in some form, by injected humor.</p>
                        <div class="d-flex align-items-center g-30px flex-wrap">
                            <a href="#" class="btn btn-outline-primary-ci1 d-flex align-items-center gap-1">
                                <span>Buy Now</span>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14.4297 5.92993L20.4997 11.9999L14.4297 18.0699" stroke="#0A7EFB" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M3.5 12H20.33" stroke="#0A7EFB" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                            <a href="#" class="btn btn-underline-ci1">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="ci-product-short-banner d-flex flex-column align-items-center align-items-md-end wow bounceInRight" data-wow-duration="2s">
                        <img src="{{ asset('assets/img/home-2/ci-product-banner1.svg') }}" alt="banner">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Product 3 details and banner Area -->

    <!-- Start Product 4 details and banner Area -->
    <div class="top-sticky-section">
        <div class="container">
            <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="ci-product-short-details">
                            <div class="d-flex align-items-center flex-wrap gap-2 mb-12px">
                                <div class="product-logo-sm">
                                    <img src="{{ asset('assets/img/home-2/ci-product-logo4.svg') }}" alt="logo">
                                </div>
                                <p class="product-logo-sm-name">Ekattor 8</p>
                            </div>
                            <h2 class="es-title-3 mb-20px">Streamlining School
                                Management, One Click at a Time with <span class="text-red-gradient2">Ekattor 8</span></h2>
                            <p class="man-subtitle-2 mb-40px">Lorem Ipsum available, but the majority have  suffered alteration in some form, by injected humor.</p>
                            <div class="d-flex align-items-center g-30px flex-wrap">
                                <a href="#" class="btn btn-outline-primary-ci1 d-flex align-items-center gap-1">
                                    <span>Buy Now</span>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14.4297 5.92993L20.4997 11.9999L14.4297 18.0699" stroke="#0A7EFB" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M3.5 12H20.33" stroke="#0A7EFB" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>
                                <a href="#" class="btn btn-underline-ci1">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="ci-product-short-banner d-flex flex-column align-items-center align-items-md-end wow bounceInRight" data-wow-duration="2s">
                            <img src="{{ asset('assets/img/home-2/ci-product-banner2.svg') }}" alt="banner">
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <!-- End Product 4 details and banner Area -->
</section>

@endsection