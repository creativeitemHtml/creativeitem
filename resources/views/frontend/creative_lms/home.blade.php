@extends('global.index')
@section('content')

@include('frontend.creative_lms.lms_header')

@php
use App\Models\SaasCompany;

@endphp

<!-- Start Signup Form Area -->
<section class="lms-signup-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="d-flex justify-content-center justify-content-md-start">
                    <!-- Left -->
                    <div class="max-w-507px w-100">
                        <h5 class="text-18 mb-12px lh-normal skin-color">Creative LMS</h5>
                        <h1 class="text-58 mb-30px">The Pathfinder of your <span class="skin-color">Success</span></h1>
                        <p class="mb-30px ci-left-border-notice">A leading LMS that empowers you to <a href="#" class="text-dark-link">learn</a>, <a href="#" class="text-dark-link">manage</a>, and <a href="#" class="text-dark-link">earn</a> wisely. </p>
                        <a href="#" class="btn btn-primary-ci1 py-28px mb-3">Free Sign Up</a>
                        <div class="creator-website d-flex align-items-center">
                            <div class="creator-profile d-flex align-items-center">
                                <img src="{{ asset('assets/img/new-icons-images/creator-1.svg') }}" alt="creator">
                                <img src="{{ asset('assets/img/new-icons-images/creator-2.svg') }}" alt="creator">
                                <img src="{{ asset('assets/img/new-icons-images/creator-3.svg') }}" alt="creator">
                            </div>
                            <p>150,000+ creators have their websites live</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="d-flex justify-content-center justify-content-md-end">
                    @if(Auth::check())
                        @php
                            $lms_company = SaasCompany::where('user_id', auth()->user()->id)
                                                    ->where('saas_id', 1)
                                                    ->first();
                            $check_verification = auth()->user()->email_verified_at;
                        @endphp
                    @endif

                    @include('frontend.creative_lms.company_registration')

                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Signup Form Area -->


<!-- Start LMS Problem Solve Area -->
<section class="problem-solve-section padding-bottom-110">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Section Title -->
                <div class="section-title-landing">
                    <h2 class="title-42"><span>Creative LMS</span> is the Best problem solver for Everyone! </h2>
                </div>
            </div>
        </div>
        <!-- Problem Solve Card Area -->
        <div class="row mcg-30 mrg-30 justify-content-center">
            <!-- Single Card -->
            <div class="col-lg-4 col-md-6">
                <div class="problem-solve-card">
                    <div class="solve-img-wrap">
                        <div class="solve-card-img">
                            <img src="{{ asset('assets/img/new-icons-images/problem-solve-1.svg') }}" alt="">
                        </div>
                        <h3 class="text-28">Individual</h3>
                    </div>
                    <div class="solve-card-list">
                        <ul>
                            <li>Student</li>
                            <li>Lawyer</li>
                            <li>Musician</li>
                            <li>Disabled Person</li>
                            <li>Housewife</li>
                            <li>Woman Empowerment</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Single Card -->
            <div class="col-lg-4 col-md-6">
                <div class="problem-solve-card">
                    <div class="solve-img-wrap">
                        <div class="solve-card-img">
                            <img src="{{ asset('assets/img/new-icons-images/problem-solve-2.svg') }}" alt="">
                        </div>
                        <h3 class="text-28">Training</h3>
                    </div>
                    <div class="solve-card-list">
                        <ul>
                            <li>Athlete</li>
                            <li>Chef</li>
                            <li>Doctor</li>
                            <li>Teacher</li>
                            <li>Freelancer</li>
                            <li>Carrier Buildup</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Single Card -->
            <div class="col-lg-4 col-md-6">
                <div class="problem-solve-card">
                    <div class="solve-img-wrap">
                        <div class="solve-card-img">
                            <img src="{{ asset('assets/img/new-icons-images/problem-solve-3.svg') }}" alt="">
                        </div>
                        <h3 class="text-28">Schools</h3>
                    </div>
                    <div class="solve-card-list">
                        <ul>
                            <li>Business Owner</li>
                            <li>Entrepreneur</li>
                            <li>Consultant</li>
                            <li>Company</li>
                            <li>Business Organization</li>
                            <li>Government</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="problem-solve-learn">
                    <p>People have changed their lifestyle, its your turn, grab it...</p>
                    <a href="#" class="learn-btn">Learn More <img src="{{ asset('assets/img/new-icons-images/right-arrow-white.svg') }}" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End LMS Problem Solve Area -->

<!-- Start Success Journey Area -->
<section>
    <div class="container">
        <div class="row padding-bottom-110">
            <div class="col-md-12">
                <div class="success-journey-wrap">
                    <h2 class="text-42">Journey of our success</h2>
                    <div class="success-counter-wrap d-flex">
                        <!-- Single -->
                        <div class="single-success-wrap">
                            <div class="single-success-item">
                                <p>Learners</p>
                                <h2 class="text-46"><span class="counter circle">10</span>M+</h2>
                            </div>
                        </div>
                        <!-- Single -->
                        <div class="single-success-wrap">
                            <div class="single-success-item">
                                <p>Top Courses</p>
                                <h2 class="text-46"><span class="counter circle">150</span>+</h2>
                            </div>
                        </div>
                        <!-- Single -->
                        <div class="single-success-wrap">
                            <div class="single-success-item">
                                <p>Best Award</p>
                                <h2 class="text-46"><span class="counter circle">45</span>+</h2>
                            </div>
                        </div>
                        <!-- Single -->
                        <div class="single-success-wrap">
                            <div class="single-success-item">
                                <p>Online Courses</p>
                                <h2 class="text-46"><span class="counter circle">5</span>k+</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Success Journey Area -->

<!-- Start How To Area -->
<section>
    <div class="container">
        <div class="row padding-bottom-110 align-items-center justify-content-center">
            <!-- left -->
            <div class="col-lg-6 col-md-8">
                <div class="how-to-banner-area d-flex justify-content-start">
                    <div class="how-to-banner">
                        <img src="{{ asset('assets/img/new-icons-images/how-to-banner.webp') }}" alt="banner">
                        <!-- Item 1 -->
                        <div class="how-to-banner-item-1 d-flex align-items-center">
                            <div class="banner-win-img">
                                <img src="{{ asset('assets/img/new-icons-images/win-cup.svg') }}" alt="cup">
                            </div>
                            <div class="banner-win-details">
                                <h4>No <span>1</span></h4>
                                <p>Best LMS Website</p>
                            </div>
                        </div>
                        <!-- Item 2 -->
                        <div class="how-to-banner-item-2">
                            <p>100% Satisfied Students</p>
                            <div class="banner-item-profiles d-flex align-items-center justify-content-center">
                                <img src="{{ asset('assets/img/new-icons-images/creator-1.svg') }}" alt="creator">
                                <img src="{{ asset('assets/img/new-icons-images/creator-2.svg') }}" alt="creator">
                                <img src="{{ asset('assets/img/new-icons-images/creator-3.svg') }}" alt="creator">
                                <img src="{{ asset('assets/img/new-icons-images/creator-4.svg') }}" alt="creator">
                                <h4 class="more-profiles">4+</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Right -->
            <div class="col-lg-6 col-md-8">
                <div class="how-to-details">
                    <div class="how-to-title">
                        <h2 class="text-42">How Creative LMS works to make you <span>Successful</span></h2>
                    </div>
                    <!-- Accordion -->
                    <div class="course-accordion">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" data-img-src="{{ asset('assets/img/new-icons-images/accordion-banner-1.svg') }}" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Create
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>We’ve made it easier than ever to create, manage, and grow a profitable coaching business that achieves.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" data-img-src="{{ asset('assets/img/new-icons-images/accordion-banner-2.svg') }}" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Delivery
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>We’ve made it easier than ever to create, manage, and grow a profitable coaching business that achieves.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" data-img-src="{{ asset('assets/img/new-icons-images/accordion-banner-1.svg') }}" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Manage
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>We’ve made it easier than ever to create, manage, and grow a profitable coaching business that achieves.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" data-img-src="{{ asset('assets/img/new-icons-images/accordion-banner-2.svg') }}" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Monetize
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>We’ve made it easier than ever to create, manage, and grow a profitable coaching business that achieves.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="success-signup-form">
                        <form action="">
                            <input type="email" class="form-control" id="" placeholder="Enter your email address">
                            <button type="submit">Free Sign up <img src="{{ asset('assets/img/new-icons-images/right-angle.svg') }}" alt=""></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End How To Area -->

<!-- Start Why Creative LMS Area -->
<section>
    <div class="container padding-bottom-110">
        <div class="why-lms-section">
            <div class="row">
                <div class="col-md-12">
                    <!-- Section Title -->
                    <div class="section-title-landing">
                        <h2 class="title-42">Why <span>Creative LMS</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="lms-topic-wrap">
                        <div class="single-advice-topic">
                            <img src="{{ asset('assets/img/new-icons-images/topic-1.svg') }}" alt="">
                            <p>Budget Friendly</p>
                        </div>
                        <div class="single-advice-topic">
                            <img src="{{ asset('assets/img/new-icons-images/topic-2.svg') }}" alt="">
                            <p>Easy Payment Options</p>
                        </div>
                        <div class="single-advice-topic">
                            <img src="{{ asset('assets/img/new-icons-images/topic-3.svg') }}" alt="">
                            <p>Integration & Compatibility</p>
                        </div>
                        <div class="single-advice-topic">
                            <img src="{{ asset('assets/img/new-icons-images/topic-4.svg') }}" alt="">
                            <p>Online Certification & Badges</p>
                        </div>
                        <div class="single-advice-topic">
                            <img src="{{ asset('assets/img/new-icons-images/topic-5.svg') }}" alt="">
                            <p>Trendy</p>
                        </div>
                        <div class="single-advice-topic">
                            <img src="{{ asset('assets/img/new-icons-images/topic-6.svg') }}" alt="">
                            <p>Advanced Features & Functionality</p>
                        </div>
                        <div class="single-advice-topic">
                            <img src="{{ asset('assets/img/new-icons-images/topic-7.svg') }}" alt="">
                            <p>Free Customization & Flexibility</p>
                        </div>
                        <div class="single-advice-topic">
                            <img src="{{ asset('assets/img/new-icons-images/topic-8.svg') }}" alt="">
                            <p>User’s Feedbacks Evaluation</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Why Creative LMS Area -->

<!-- Start What’s New LMS Area -->
<section>
    <div class="container padding-bottom-110">
        <div class="row">
            <div class="col-md-12">
                <!-- Section Title -->
                <div class="section-title-landing">
                    <h2 class="title-42">Creative LMS - <span>What’s New</span></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="lms-new-topic">
                    <div class="new-advice-topic">
                        <img src="{{ asset('assets/img/new-icons-images/topic-9.svg') }}" alt="">
                        <p>Subscription Based Pricing Plans</p>
                    </div>
                    <div class="new-advice-topic">
                        <img src="{{ asset('assets/img/new-icons-images/topic-10.svg') }}" alt="">
                        <p>AI Powered</p>
                    </div>
                    <div class="new-advice-topic">
                        <img src="{{ asset('assets/img/new-icons-images/topic-11.svg') }}" alt="">
                        <p>Cloud Based LMS</p>
                    </div>
                    <div class="new-advice-topic">
                        <img src="{{ asset('assets/img/new-icons-images/topic-12.svg') }}" alt="">
                        <p>Free Access to the ocean of content library</p>
                    </div>
                    <div class="new-advice-topic">
                        <img src="{{ asset('assets/img/new-icons-images/topic-13.svg') }}" alt="">
                        <p>Online Certification</p>
                    </div>
                    <div class="new-advice-topic">
                        <img src="{{ asset('assets/img/new-icons-images/topic-14.svg') }}" alt="">
                        <p>Continuous Update</p>
                    </div>
                    <div class="new-advice-topic">
                        <img src="{{ asset('assets/img/new-icons-images/topic-15.svg') }}" alt="">
                        <p>Free for small users - Forever</p>
                    </div>
                    <div class="new-advice-topic">
                        <img src="{{ asset('assets/img/new-icons-images/topic-16.svg') }}" alt="">
                        <p>All in one LMS</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End What’s New LMS Area -->

<!-- Start LMS Best 3 Factor Area -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Section Title -->
                <div class="section-title-landing">
                    <h2 class="title-42">3 Factors that made us <span>The BEST</span></h2>
                </div>
            </div>
        </div>
        <div class="row mcg-30 justify-content-center padding-bottom-110">
            <!-- Single -->
            <div class="col-lg-4 col-md-6">
                <div class="single-factor-new">
                    <div class="factor-img-wrap">
                        <img src="{{ asset('assets/img/new-icons-images/factor-new-1.svg') }}" alt="">
                        <h3 class="text-24">Innovation</h3>
                    </div>
                    <p>Our commitment to innovation has made us an industry-leading company. A dedicated R&D (Research and Development ) team constantly pushes the boundaries of what is possible, relentlessly seeking new and better ways to serve our customers.</p>
                </div>
            </div>
            <!-- Single -->
            <div class="col-lg-4 col-md-6">
                <div class="single-factor-new">
                    <div class="factor-img-wrap">
                        <img src="{{ asset('assets/img/new-icons-images/factor-new-2.svg') }}" alt="">
                        <h3 class="text-24">Quality</h3>
                    </div>
                    <p>Creative LMS ensures the best service and top-notch products. Sound technology with a flawless operating system provides the best customer experience.</p>
                </div>
            </div>
            <!-- Single -->
            <div class="col-lg-4 col-md-6">
                <div class="single-factor-new">
                    <div class="factor-img-wrap factor-img-wrap-2">
                        <img src="{{ asset('assets/img/new-icons-images/factor-new-3.svg') }}" alt="">
                        <h3 class="text-24">Expertise</h3>
                    </div>
                    <p>Our team of experts is the backbone of our industry-leading status. The unique combination of fresh talents and experienced professionals can efficiently tackle complicated challenges and deliver smart solutions. Our trendy yet updated specialization enables all our users to be one step ahead in the E-Learning platform.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End LMS Best 3 Factor Area -->

<!-- Start Downloadable LMS vs Creative LMS Area -->
<section class="padding-bottom-110">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Section Title -->
                <div class="section-title-landing">
                    <h2 class="title-42">Downloadable LMS vs <span>Creative LMS</span></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="lms-difference-wrap">
                    <div class="lms-difference-single d-flex align-items-center">
                        <p class="info info-left">One-tme Purchase</p>
                        <div class="img"><img src="{{ asset('assets/img/lms/difference-1.webp') }}" alt="icon"></div>
                        <p class="info info-right">Recurring Payments</p>
                    </div>
                    <div class="lms-difference-single d-flex align-items-center">
                        <p class="info info-left">Fixed Features</p>
                        <div class="img"><img src="{{ asset('assets/img/lms/difference-2.webp') }}" alt="icon"></div>
                        <p class="info info-right">Scalable Features</p>
                    </div>
                    <div class="lms-difference-single d-flex align-items-center">
                        <p class="info info-left">Self-hosting</p>
                        <div class="img"><img src="{{ asset('assets/img/lms/difference-3.webp') }}" alt="icon"></div>
                        <p class="info info-right">Cloud-Based</p>
                    </div>
                    <div class="lms-difference-single d-flex align-items-center">
                        <p class="info info-left">Upfront Installation</p>
                        <div class="img"><img src="{{ asset('assets/img/lms/difference-4.webp') }}" alt="icon"></div>
                        <p class="info info-right">Easy Setup</p>
                    </div>
                    <div class="lms-difference-single d-flex align-items-center">
                        <p class="info info-left">Customization</p>
                        <div class="img"><img src="{{ asset('assets/img/lms/difference-5.webp') }}" alt="icon"></div>
                        <p class="info info-right">Standardized Features</p>
                    </div>
                    <div class="lms-difference-single d-flex align-items-center">
                        <p class="info info-left">Limited Support</p>
                        <div class="img"><img src="{{ asset('assets/img/lms/difference-6.webp') }}" alt="icon"></div>
                        <p class="info info-right">Full Support</p>
                    </div>
                    <div class="lms-difference-single d-flex align-items-center">
                        <p class="info info-left">Licensing Fees</p>
                        <div class="img"><img src="{{ asset('assets/img/lms/difference-7.webp') }}" alt="icon"></div>
                        <p class="info info-right">Predictable Costs</p>
                    </div>
                    <div class="lms-difference-single d-flex align-items-center">
                        <p class="info info-left">High Upfront Cost</p>
                        <div class="img"><img src="{{ asset('assets/img/lms/difference-8.webp') }}" alt="icon"></div>
                        <p class="info info-right">Low Upfront Cost</p>
                    </div>
                    <div class="lms-difference-single d-flex align-items-center">
                        <p class="info info-left">Paid Latest Version</p>
                        <div class="img"><img src="{{ asset('assets/img/lms/difference-9.webp') }}" alt="icon"></div>
                        <p class="info info-right">Free Latest Version</p>
                    </div>
                    <div class="lms-difference-single d-flex align-items-center">
                        <p class="info info-left">Paid Dedicated Expert Support</p>
                        <div class="img"><img src="{{ asset('assets/img/lms/difference-10.webp') }}" alt="icon"></div>
                        <p class="info info-right">Free Dedicated Expert Support</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Downloadable LMS vs Creative LMS Area -->

<!-- Start Dynamic LMS Area -->
<section>
    <div class="container">
        <div class="row justify-content-center padding-bottom-110">
            <div class="col-lg-8">
                <div class="dynamic-lms-title">
                    <h2 class="title-42">Elevate Education with Our Dynamic LMS Functionality</h2>
                    <p class="info">Create and monetize your courses simply, whether you are a professional educator or a skilled individual, and easily access both local and global audiences. Creative LMS.</p>
                </div>
            </div>
            <!-- Single LMS Functionality -->
            <div class="col-lg-4 col-md-6">
                <div class="single-lms-functionality">
                    <div class="lms-functionality-icon">
                        <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_292_660)">
                            <path d="M25.3359 49.3333C25.3359 49.3333 25.8906 60 20.0026 60H44.0026C38.1146 60 38.6693 49.3333 38.6693 49.3333M1.33594 38.6667H62.6693M58.6693 49.3333H5.33594C4.27507 49.3333 3.25766 48.9119 2.50751 48.1618C1.75736 47.4116 1.33594 46.3942 1.33594 45.3333V8C1.33594 6.93913 1.75736 5.92172 2.50751 5.17157C3.25766 4.42143 4.27507 4 5.33594 4H58.6693C59.7301 4 60.7475 4.42143 61.4977 5.17157C62.2478 5.92172 62.6693 6.93913 62.6693 8V45.3333C62.6693 46.3942 62.2478 47.4116 61.4977 48.1618C60.7475 48.9119 59.7301 49.3333 58.6693 49.3333Z" stroke="#3D4053" stroke-width="2.66667" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M32.0013 45.3332C32.7377 45.3332 33.3346 44.7362 33.3346 43.9998C33.3346 43.2635 32.7377 42.6665 32.0013 42.6665C31.2649 42.6665 30.668 43.2635 30.668 43.9998C30.668 44.7362 31.2649 45.3332 32.0013 45.3332Z" stroke="#3D4053" stroke-width="2.66667" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M32.0013 4V38.6667M59.3346 38.6667C58.6306 37.608 57.54 36.1627 56.332 35.76L54.5373 35.1627C53.5746 34.8427 52.588 34.4693 52.0226 33.6213L51.7506 33.2133H50.6066L50.1933 30.6667C51.3533 29.5067 51.908 27.7733 51.908 27.2373C52.676 27.2373 53.0493 24.256 53.0493 23.8107C53.0493 23.3653 52.8493 22.384 52.1906 22.384C52.5533 22.0213 53.0493 21.048 53.0493 19.8107L53.6226 19.2373C53.6226 17.144 51.5266 14.6667 47.908 14.6667C45.3346 14.6667 44.4786 15.8107 44.4786 15.8107C43.764 15.8107 42.1933 17.024 42.1933 18.6667C42.1933 19.904 42.116 22.0213 42.4813 22.384C41.82 22.384 41.62 23.3627 41.62 23.8107C41.62 24.2587 41.9933 27.2373 42.764 27.2373C42.764 27.7733 43.316 29.504 44.4786 30.6667L44.0626 33.2133H42.9186L42.6466 33.6213C42.0813 34.4667 41.0973 34.84 40.132 35.1627L38.3373 35.76C37.132 36.1627 36.0386 37.6107 35.3346 38.6667M28.668 38.6667C27.5361 37.5352 26.1935 36.6364 24.716 36.0213L22.2706 35.0027C21.5957 34.7215 20.9959 34.2864 20.519 33.7322C20.0421 33.178 19.7013 32.52 19.524 31.8107C19.524 31.8107 21.4013 31.4 21.812 31.8107C21.1693 30.488 21.812 30.6667 21.812 30.6667C21.812 30.6667 22.9906 31.2027 23.524 30.6667C22.884 30.0267 22.9533 28.9867 22.9533 28.3813C22.9533 26.488 24.3053 26.968 24.3053 23.3947C24.3053 20.1093 21.5026 14.6667 17.2386 14.6667C16.1453 14.6667 15.524 15.2373 15.524 15.2373H14.9533C11.74 15.2373 9.0333 20.1093 9.0333 23.3947C9.0333 26.968 10.3826 26.488 10.3826 28.3813C10.3826 28.9893 10.4546 30.024 9.81197 30.6667C10.3453 31.2027 11.524 30.6667 11.524 30.6667C11.524 30.6667 12.1693 30.488 11.524 31.8107C11.9346 31.4 13.812 31.8107 13.812 31.8107C13.452 33.2507 12.4333 34.432 11.0653 35.0027L8.61997 36.0213C7.14246 36.6364 5.79982 37.5352 4.66797 38.6667" stroke="#3D4053" stroke-width="2.66667" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            </g>
                            <defs>
                            <clipPath id="clip0_292_660">
                            <rect width="64" height="64" fill="white"/>
                            </clipPath>
                            </defs>
                        </svg>                  
                    </div>
                    <p class="info">Use digital content to improve learning and make challenging subjects more approachable.</p>
                </div>
            </div>
            <!-- Single LMS Functionality -->
            <div class="col-lg-4 col-md-6">
                <div class="single-lms-functionality">
                    <div class="lms-functionality-icon">
                        <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M18.9083 18.1335C20.7292 18.1335 22.2053 16.6574 22.2053 14.8365C22.2053 13.0157 20.7292 11.5396 18.9083 11.5396C17.0874 11.5396 15.6113 13.0157 15.6113 14.8365C15.6113 16.6574 17.0874 18.1335 18.9083 18.1335Z" stroke="#3D4053" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M13.3814 28.9938C12.2177 28.9938 11.248 28.1211 11.248 26.9574C11.248 22.6908 14.642 21.4302 18.9087 21.4302C23.1753 21.4302 26.5693 22.7878 26.5693 26.9574C26.5693 28.1211 25.5996 28.9938 24.4359 28.9938H13.3814Z" stroke="#3D4053" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M18.9083 18.1335C20.7292 18.1335 22.2053 16.6574 22.2053 14.8365C22.2053 13.0157 20.7292 11.5396 18.9083 11.5396C17.0874 11.5396 15.6113 13.0157 15.6113 14.8365C15.6113 16.6574 17.0874 18.1335 18.9083 18.1335Z" stroke="#3D4053" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M13.3814 28.9938C12.2177 28.9938 11.248 28.1211 11.248 26.9574C11.248 22.6908 14.642 21.4302 18.9087 21.4302C23.1753 21.4302 26.5693 22.7878 26.5693 26.9574C26.5693 28.1211 25.5996 28.9938 24.4359 28.9938H13.3814Z" stroke="#3D4053" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M40.4359 11.5396C44.9935 11.5396 48.1935 11.5396 52.751 11.5396M32.4844 11.5396C33.842 11.5396 35.1995 11.5396 36.5571 11.5396M47.5147 15.9032C49.2601 15.9032 51.0056 15.9032 52.751 15.9032M32.4844 15.9032C36.6541 15.9032 39.8541 15.9032 44.0238 15.9032M40.6298 20.2668C44.7026 20.2668 48.7753 20.2668 52.751 20.2668M32.4844 20.2668C34.3268 20.2668 35.1995 20.2668 37.042 20.2668M47.8056 24.6305C49.4541 24.6305 51.1026 24.6305 52.751 24.6305M32.4844 24.6305C36.751 24.6305 40.048 24.6305 44.3147 24.6305M43.6359 28.9941C46.642 28.9941 49.745 28.9941 52.751 28.9941M32.4844 28.9941C35.3935 28.9941 37.3329 28.9941 40.3389 28.9941" stroke="#3D4053" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M55.7583 38.788H8.24312C5.72191 38.788 3.68555 36.7517 3.68555 34.2305V6.30318C3.68555 3.78197 5.72191 1.74561 8.24312 1.74561H55.7583C58.2795 1.74561 60.3159 3.78197 60.3159 6.30318V34.2305C60.3159 36.7517 58.2795 38.788 55.7583 38.788Z" stroke="#3D4053" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M12.9942 51.4909C14.8151 51.4909 16.2912 50.0148 16.2912 48.1939C16.2912 46.3731 14.8151 44.897 12.9942 44.897C11.1734 44.897 9.69727 46.3731 9.69727 48.1939C9.69727 50.0148 11.1734 51.4909 12.9942 51.4909Z" stroke="#3D4053" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M7.46732 62.3517C6.30368 62.3517 5.33398 61.479 5.33398 60.3154C5.33398 56.0487 8.72792 54.7881 12.9946 54.7881C17.2613 54.7881 20.6552 56.1457 20.6552 60.3154C20.6552 61.479 19.6855 62.3517 18.5219 62.3517H7.46732Z" stroke="#3D4053" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M32.0001 51.4909C33.821 51.4909 35.2971 50.0148 35.2971 48.1939C35.2971 46.3731 33.821 44.897 32.0001 44.897C30.1792 44.897 28.7031 46.3731 28.7031 48.1939C28.7031 50.0148 30.1792 51.4909 32.0001 51.4909Z" stroke="#3D4053" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M26.4732 62.3517C25.3095 62.3517 24.3398 61.479 24.3398 60.3154C24.3398 56.0487 27.7338 54.7881 32.0004 54.7881C36.2671 54.7881 39.6611 56.1457 39.6611 60.3154C39.6611 61.479 38.6914 62.3517 37.5277 62.3517H26.4732Z" stroke="#3D4053" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M51.0079 51.4909C52.8288 51.4909 54.3049 50.0148 54.3049 48.1939C54.3049 46.3731 52.8288 44.897 51.0079 44.897C49.187 44.897 47.7109 46.3731 47.7109 48.1939C47.7109 50.0148 49.187 51.4909 51.0079 51.4909Z" stroke="#3D4053" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M45.5767 62.3517C44.4131 62.3517 43.4434 61.479 43.4434 60.3154C43.4434 56.0487 46.8373 54.7881 51.104 54.7881C55.3706 54.7881 58.7646 56.1457 58.7646 60.3154C58.7646 61.479 57.7949 62.3517 56.6312 62.3517H45.5767Z" stroke="#3D4053" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>                                   
                    </div>
                    <p class="info">Offer private or group coaching sessions for individualized learning.</p>
                </div>
            </div>
            <!-- Single LMS Functionality -->
            <div class="col-lg-4 col-md-6">
                <div class="single-lms-functionality">
                    <div class="lms-functionality-icon">
                        <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20.9104 36.0423C21.3491 36.3393 21.8279 36.6278 22.3476 36.9077C22.8671 37.1878 23.2113 37.4105 23.3799 37.5757C23.5484 37.7411 23.6329 37.9755 23.6329 38.2791C23.6329 38.495 23.5333 38.7108 23.3344 38.9268C23.1353 39.1427 22.8942 39.2507 22.6108 39.2507C22.3813 39.2507 22.1029 39.1763 21.7757 39.0281C21.4483 38.8796 21.0637 38.6637 20.6219 38.3803C20.1799 38.097 19.6958 37.7665 19.1694 37.3885C18.1909 37.8877 16.9899 38.1373 15.5662 38.1373C14.4124 38.1373 13.3783 37.9535 12.4641 37.5858C11.5497 37.2181 10.7822 36.6885 10.1614 35.9967C9.54056 35.3051 9.07344 34.4836 8.75969 33.5322C8.44594 32.5808 8.28906 31.5451 8.28906 30.425C8.28906 29.2847 8.45256 28.2388 8.77994 27.2873C9.10719 26.336 9.58106 25.5262 10.2019 24.8582C10.8227 24.1902 11.5784 23.6791 12.4691 23.3248C13.3597 22.9706 14.3718 22.7935 15.5054 22.7935C17.0438 22.7935 18.3647 23.1056 19.4679 23.7297C20.5712 24.3538 21.4062 25.2412 21.9729 26.3916C22.5398 27.5421 22.8232 28.8932 22.8232 30.4451C22.8233 32.8002 22.1857 34.6658 20.9104 36.0423ZM18.5522 34.4027C18.9704 33.9237 19.2792 33.357 19.4782 32.7023C19.6772 32.048 19.7767 31.2888 19.7767 30.4251C19.7767 29.3387 19.6012 28.3975 19.2504 27.6012C18.8996 26.8052 18.3986 26.203 17.7474 25.7946C17.0962 25.3865 16.3489 25.1822 15.5056 25.1822C14.9049 25.1822 14.3501 25.2953 13.8407 25.5213C13.3311 25.7475 12.8926 26.0765 12.5249 26.5081C12.1571 26.94 11.8671 27.4916 11.6546 28.163C11.4419 28.8345 11.3357 29.5885 11.3357 30.4251C11.3357 32.1322 11.7337 33.4463 12.5301 34.3673C13.3261 35.2883 14.3316 35.749 15.5462 35.749C16.0454 35.749 16.5583 35.6445 17.0846 35.4352C16.7673 35.1992 16.3709 34.9631 15.8953 34.7267C15.4197 34.4906 15.0941 34.3085 14.9186 34.1802C14.7431 34.0521 14.6554 33.8698 14.6554 33.6337C14.6554 33.4312 14.7398 33.2526 14.9086 33.0973C15.0771 32.9422 15.2628 32.8646 15.4652 32.8646C16.0792 32.8643 17.1082 33.3771 18.5522 34.4027ZM32.3779 36.5788V36.2246C32.0472 36.6431 31.6998 36.9938 31.3354 37.2772C30.9711 37.5606 30.5729 37.7716 30.1412 37.9098C29.7093 38.0481 29.2167 38.1173 28.6634 38.1173C27.9954 38.1173 27.3966 37.979 26.8669 37.7023C26.3372 37.4257 25.9273 37.0445 25.6372 36.5586C25.2929 35.9716 25.1209 35.1282 25.1209 34.0282V28.5526C25.1209 27.9995 25.2457 27.586 25.4954 27.3127C25.7451 27.0395 26.0757 26.9028 26.4873 26.9028C26.9056 26.9028 27.2429 27.0412 27.4994 27.3178C27.7558 27.5946 27.8841 28.0061 27.8841 28.5526V32.9756C27.8841 33.6167 27.9379 34.1547 28.0459 34.59C28.1538 35.0251 28.3478 35.366 28.6281 35.6122C28.9079 35.8586 29.2874 35.9816 29.7667 35.9816C30.2323 35.9816 30.6707 35.8433 31.0824 35.5666C31.4939 35.29 31.7943 34.929 31.9832 34.4836C32.1383 34.0923 32.2161 33.2353 32.2161 31.9127V28.5525C32.2161 28.006 32.3442 27.5943 32.6007 27.3177C32.8569 27.0411 33.1911 26.9027 33.6027 26.9027C34.0141 26.9027 34.3448 27.0393 34.5946 27.3126C34.8441 27.5858 34.9691 27.9992 34.9691 28.5525V36.5583C34.9691 37.0846 34.8492 37.4793 34.6097 37.7425C34.3701 38.0056 34.0614 38.1372 33.6837 38.1372C33.3057 38.1372 32.9937 38.0006 32.7476 37.7273C32.5009 37.4542 32.3779 37.0715 32.3779 36.5788ZM39.1186 25.6175C38.7339 25.6175 38.4049 25.4995 38.1317 25.2632C37.8584 25.0271 37.7218 24.6931 37.7218 24.2612C37.7218 23.87 37.8618 23.5477 38.1418 23.2947C38.4217 23.0416 38.7474 22.9151 39.1186 22.9151C39.4762 22.9151 39.7932 23.0298 40.0701 23.2592C40.3466 23.4887 40.4849 23.8227 40.4849 24.2612C40.4849 24.6863 40.3499 25.0187 40.0802 25.2582C39.8102 25.4977 39.4896 25.6175 39.1186 25.6175ZM40.4849 28.4717V36.4573C40.4849 37.0107 40.3534 37.429 40.0903 37.7125C39.8271 37.9958 39.4931 38.1375 39.0883 38.1375C38.6834 38.1375 38.3544 37.9923 38.1014 37.7023C37.8484 37.4123 37.7218 36.9973 37.7218 36.4575V28.5527C37.7218 28.0062 37.8484 27.5946 38.1014 27.318C38.3544 27.0413 38.6834 26.903 39.0883 26.903C39.4931 26.903 39.8271 27.0413 40.0903 27.318C40.3534 27.5946 40.4849 27.9792 40.4849 28.4717ZM50.8492 30.0708L45.7887 35.7286H51.2036C51.6421 35.7286 51.9727 35.8316 52.1954 36.0372C52.4181 36.2432 52.5294 36.5078 52.5294 36.8317C52.5294 37.1421 52.4197 37.3952 52.2004 37.5908C51.9811 37.7866 51.6489 37.8843 51.2036 37.8843H43.7137C43.1874 37.8843 42.7943 37.7697 42.5347 37.5402C42.2748 37.3108 42.1449 36.9971 42.1449 36.599C42.1449 36.3628 42.2361 36.125 42.4182 35.8855C42.6003 35.6461 42.9782 35.2057 43.5518 34.5646C44.1591 33.89 44.7107 33.2792 45.2067 32.7326C45.7026 32.1861 46.1632 31.675 46.5882 31.1992C47.0132 30.7235 47.3658 30.3203 47.6458 29.9897C47.9257 29.6592 48.1501 29.3758 48.3188 29.1396H44.2096C43.6427 29.1396 43.2142 29.089 42.9242 28.9877C42.6341 28.8865 42.4889 28.6201 42.4889 28.1882C42.4889 27.8711 42.5986 27.6181 42.8179 27.4291C43.0371 27.2402 43.3492 27.1457 43.7542 27.1457H50.1003C50.6873 27.1457 51.1377 27.2318 51.4514 27.4038C51.7652 27.5758 51.9222 27.8846 51.9222 28.33C51.9222 28.4785 51.8918 28.632 51.8311 28.7905C51.7703 28.9491 51.7028 29.0788 51.6286 29.1801C51.5542 29.2813 51.4531 29.4045 51.3249 29.5495C51.1967 29.6947 51.0381 29.8683 50.8492 30.0708Z" fill="#3D4053"/>
                            <path d="M31.3027 5.20605C15.5184 5.20605 2.72266 16.5777 2.72266 30.6054C2.72266 38.5957 6.87553 45.7228 13.3664 50.3789L11.4332 58.7943L20.3223 54.0612C23.7032 55.3127 27.4118 56.0048 31.3028 56.0048C47.0872 56.0048 59.8828 44.6332 59.8828 30.6054C59.8828 16.5777 47.087 5.20605 31.3027 5.20605Z" stroke="#3D4053" stroke-width="1.875" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>            
                    </div>
                    <p class="info">Encourage participation with interactive features like debates, quizzes, and assignments.</p>
                </div>
            </div>
            <!-- Single LMS Functionality -->
            <div class="col-lg-4 col-md-6">
                <div class="single-lms-functionality">
                    <div class="lms-functionality-icon">
                        <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_292_654)">
                            <path d="M19.6783 20.1359C18.8209 22.1631 18.4786 24.3711 18.6821 26.5628C18.8856 28.7544 19.6285 30.8616 20.8445 32.6963C22.0606 34.531 23.7119 36.0361 25.6511 37.0773C27.5904 38.1185 29.7572 38.6634 31.9583 38.6634C34.1594 38.6634 36.3263 38.1185 38.2655 37.0773C40.2048 36.0361 41.8561 34.531 43.0721 32.6963C44.2882 30.8616 45.0311 28.7544 45.2346 26.5628C45.4381 24.3711 45.0958 22.1631 44.2383 20.1359M31.9583 44.0026C23.9103 44.0026 16.5877 46.8133 11.9077 49.1359C8.67033 50.7439 6.625 53.9413 6.625 57.4613V59.1679C6.625 61.1013 8.24633 62.6693 10.2437 62.6693H53.673C55.673 62.6693 57.2917 61.1013 57.2917 59.1679V57.4613C57.2917 53.9413 55.2463 50.7413 52.009 49.1359C47.329 46.8133 40.009 44.0026 31.9583 44.0026ZM31.9583 16.0026L53.2917 8.66927L31.9583 1.33594L10.625 8.66927L31.9583 16.0026Z" stroke="#3D4053" stroke-width="2.66667" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M50.6042 16.0026V10.6693L31.9375 9.33594M50.6042 30.6693L49.2708 29.3359L50.6042 21.3359L51.9375 29.3359L50.6042 30.6693Z" stroke="#3D4053" stroke-width="2.66667" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M50.6458 21.3372C51.3822 21.3372 51.9792 20.1433 51.9792 18.6706C51.9792 17.1978 51.3822 16.0039 50.6458 16.0039C49.9095 16.0039 49.3125 17.1978 49.3125 18.6706C49.3125 20.1433 49.9095 21.3372 50.6458 21.3372Z" stroke="#3D4053" stroke-width="2.66667" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M18.625 11.9814V19.8561C18.625 19.8561 26.6757 22.7361 31.9583 22.6694C37.2383 22.6054 45.2917 19.8561 45.2917 19.8561V10.6694" stroke="#3D4053" stroke-width="2.66667" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            </g>
                            <defs>
                            <clipPath id="clip0_292_654">
                            <rect width="64" height="64" fill="white"/>
                            </clipPath>
                            </defs>
                        </svg>                                   
                    </div>
                    <p class="info">Make data-driven decisions, track student development, and determine learners' strengths and shortcomings.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Dynamic LMS Area -->

<!-- Start How to choose LMS Area -->
<section class="howto-choose-section padding-bottom-110">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Section Title -->
                <div class="section-title-landing section-title-landing-2">
                    <h2 class="title-42">How to choose the <span>perfect LMS</span> for you</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="first-choose-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="howto-choose-lms">
                        <div class="single-choose-item">
                            <h2 class="choose-number">1</h2>
                            <h3 class="title">Training Needs Reports</h3>
                            <p class="info">When choosing an LMS, consider how well it can analyze training requirements and offer detailed reporting.</p>
                        </div>
                        <div class="single-choose-item">
                            <h2 class="choose-number">2</h2>
                            <h3 class="title">User-friendly interface</h3>
                            <p class="info">To ensure simple uptake, pick an LMS with a clear and user-friendly design.</p>
                        </div>
                        <div class="single-choose-item">
                            <h2 class="choose-number">3</h2>
                            <h3 class="title">Scalability</h3>
                            <p class="info">As your firm grows and your training requirements change, make sure the LMS can keep up.</p>
                        </div>
                        <div class="single-choose-item">
                            <h2 class="choose-number">4</h2>
                            <h3 class="title">Content Compatibility</h3>
                            <p class="info">Check to see if the LMS can handle different content formats including videos, papers, and quizzes.</p>
                        </div>
                        <!-- For Smalll Device -->
                        <div class="single-choose-item d-lg-none">
                            <h2 class="choose-number">5</h2>
                            <h3 class="title">Customization</h3>
                            <p class="info">Look for LMS customization choices that fit your branding and training needs.</p>
                        </div>
                        <div class="single-choose-item d-lg-none">
                            <h2 class="choose-number">6</h2>
                            <h3 class="title">Mobile Compatibility</h3>
                            <p class="info">To accommodate distant and mobile learners, confirm that the LMS is mobile-responsive.</p>
                        </div>
                        <div class="single-choose-item d-lg-none">
                            <h2 class="choose-number">7</h2>
                            <h3 class="title">Integration Capabilities</h3>
                            <p class="info">Make sure the LMS can work with your current resources, such as your HR and CRM systems.</p>
                        </div>
                        <div class="single-choose-item d-lg-none">
                            <h2 class="choose-number">8</h2>
                            <h3 class="title">Security Features</h3>
                            <p class="info">Set LMS security as a top priority to safeguard user and sensitive training data.</p>
                        </div>
                        <div class="single-choose-item d-lg-none">
                            <h2 class="choose-number">9</h2>
                            <h3 class="title">Support and Training</h3>
                            <p class="info">Think about the degree of training and customer service that the LMS provides.</p>
                        </div>
                        <div class="single-choose-item d-lg-none">
                            <h2 class="choose-number">10</h2>
                            <h3 class="title">User Feedback</h3>
                            <p class="info">For an assessment of the LMS's efficacy, read evaluations and ask for input from current users.</p>
                        </div>
                        <div class="single-choose-item d-lg-none">
                            <h2 class="choose-number">11</h2>
                            <h3 class="title">Budget and Pricing</h3>
                            <p class="info">Establish your spending limit and choose an LMS that complies with it.</p>
                        </div>
                        <div class="single-choose-item d-lg-none">
                            <h2 class="choose-number">12</h2>
                            <h3 class="title">Compliance Requirements</h3>
                            <p class="info">If your firm has certain compliance requirements, be sure the LMS complies.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="second-choose-section d-lg-block d-none">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="howto-choose-lms">
                        <div class="single-choose-item">
                            <h2 class="choose-number">5</h2>
                            <h3 class="title">Customization</h3>
                            <p class="info">Look for LMS customization choices that fit your branding and training needs.</p>
                        </div>
                        <div class="single-choose-item">
                            <h2 class="choose-number">6</h2>
                            <h3 class="title">Mobile Compatibility</h3>
                            <p class="info">To accommodate distant and mobile learners, confirm that the LMS is mobile-responsive.</p>
                        </div>
                        <div class="single-choose-item">
                            <h2 class="choose-number">7</h2>
                            <h3 class="title">Integration Capabilities</h3>
                            <p class="info">Make sure the LMS can work with your current resources, such as your HR and CRM systems.</p>
                        </div>
                        <div class="single-choose-item">
                            <h2 class="choose-number">8</h2>
                            <h3 class="title">Security Features</h3>
                            <p class="info">Set LMS security as a top priority to safeguard user and sensitive training data.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="first-choose-section d-lg-block d-none">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="howto-choose-lms">
                        <div class="single-choose-item">
                            <h2 class="choose-number">9</h2>
                            <h3 class="title">Support and Training</h3>
                            <p class="info">Think about the degree of training and customer service that the LMS provides.</p>
                        </div>
                        <div class="single-choose-item">
                            <h2 class="choose-number">10</h2>
                            <h3 class="title">User Feedback</h3>
                            <p class="info">For an assessment of the LMS's efficacy, read evaluations and ask for input from current users.</p>
                        </div>
                        <div class="single-choose-item">
                            <h2 class="choose-number">11</h2>
                            <h3 class="title">Budget and Pricing</h3>
                            <p class="info">Establish your spending limit and choose an LMS that complies with it.</p>
                        </div>
                        <div class="single-choose-item">
                            <h2 class="choose-number">12</h2>
                            <h3 class="title">Compliance Requirements</h3>
                            <p class="info">If your firm has certain compliance requirements, be sure the LMS complies.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End How to choose LMS Area -->

<!-- Start LMS Customer Support Area -->
<section>
    <div class="container">
        <div class="row align-items-center padding-bottom-110">
            <!-- Left -->
            <div class="col-md-7 order-2 order-md-1">
                <div class="customer-support-details">
                    <h4 class="light-text">24/7 Customer Support</h4>
                    <h2 class="text-36">Customer support and technical assistance – available worldwide, completely <span>free forever.</span></h2>
                    <div class="success-signup-form">
                        <form action="">
                            <input type="email" class="form-control" id="" placeholder="Enter your email address">
                            <button type="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Right -->
            <div class="col-md-5 order-1 order-md-2">
                <div class="customer-support-banner">
                    <img src="{{ asset('assets/img/new-icons-images/customer-support-banner.svg') }}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End LMS Customer Support Area -->

@endsection