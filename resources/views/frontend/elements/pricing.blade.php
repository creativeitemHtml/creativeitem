@extends('global.index')
@section('content')

@include('frontend.elements.header')

<!-- Start Breadcrumb -->
<section class="breadcrumb-section pricing-breadcrumb">
    <div class="breadcrumb-one-graphic-1">
        <img src="{{ asset('assets/img/banner-graphic-1.png') }}" alt="" />
    </div>
    <div class="breadcrumb-one-graphic-2">
        <img src="{{ asset('assets/img/banner-graphic-2.png') }}" alt="" />
    </div>
</section>
<!-- End Breadcrumb -->

<!-- Start Pricing -->
<section class="pricing-n-section padding-bottom-110">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="pricing-n-title">
                    <h1 class="text-52">Our Pricing is simple with no hidden fees</h1>
                    <p class="text-22">We provide you with clarity in pricing with our transparent cost approach</p>
                </div>
            </div>
            @foreach($packages as $key => $package)
            @php
            if($package->interval == 'monthly'){
                $interval = 'month';

                if($package->interval_period == 6){
                    $interval_period_text = 'Billed 1/2 yearly';
                } else if($package->interval_period == 12){
                    $interval_period_text = 'Billed yearly';
                } else {
                    $interval_period_text = 'Access for'.' '.$package->interval_period.' '.$interval;
                }
            } else {
                $interval = 'one time';
                $interval_period_text = 'Lifetime access';
            }
            @endphp
            <div class="col-lg-4 col-md-6">
                <div class="single-n-pricing @if($key == 1) active @endif">
                    <div class="pricing-n-popular d-flex align-items-center justify-content-between">
                        <h4 class="text-22">{{ $package->name }}</h4>
                        @if($key == 1)
                        <p class="text-15">Popular</p>
                        @endif
                    </div>
                    <div class="pricing-n-price d-flex">
                        <h2 class="pricing-price-l d-flex"><span>$</span><span>{{ $package->discounted_price }}</span></h2>
                        <h3 class="pricing-price-r d-flex"><span>{{ currency($package->price) }}</span><span>/ {{ $interval }}</span></h3>
                    </div>
                    <p class="text-15 pricing-n-batch">{{ $interval_period_text }}</p>
                    @php
                        $packages_features = json_decode($package->feature_list);  
                    @endphp
                    <div class="pricing-n-list">
                        <ul>
                            @foreach ($packages_features as $packages_feature)
                                <li>{{ $packages_feature }}</li>
                            @endforeach
                        </ul>
                    </div>
                    <a href="javascript:;" class="pricing-n-btn text-18" onclick="commonModal('{{ route('element_checkout', ['id' => $package->id]) }}')">{{ get_phrase('Upgrade Plan') }}</a>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- End Pricing -->

<!-- Start Faqs -->
<section class="pb-110">
    <div class="container">
        <!-- Title -->
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="text-center pb-60">
                    <h2 class="fz-34-sb-black pb-15">Faqs</h2>
                    <p class="fz-16-m-black-2">Here are some helpful answers to your common questions and queries regarding our products</p>
                </div>
            </div>
        </div>
        <!-- Faqs Items -->
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="faq-wrap">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Can I use Creative elements templates for my clients?</button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">Absolutely! Our templates are made to be flexible and adaptable for your clients, enabling you to develop customized solutions that satisfy the unique needs of your customers and produce your anticipated results.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Do you provide documentation and support?</button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">Yes, we provide thorough documentation and first-rate assistance. Our devoted team is ready to help you with any queries or problems you encounter to make your seamless experience with Creative Elements.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">How long do I have support access?</button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">As long as your package is paid for, you have access to help. Throughout your membership, we're available to help and ensure you always have access to our resources.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">What payment methods do you accept?</button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                <div class="accordion-body">We mainly accept Visa and MasterCard as forms of payment. We do not currently accept PayPal or any other forms of payment.</div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">What happens after my subscription runs out?</button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                <div class="accordion-body">You can only access the products you purchased during the active membership period after your subscription expires. After that, access to any items or upgrades will need to be renewed or purchased separately.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Faqs -->

<!-- Start Ask Questions -->
<section class="pb-82">
    <div class="container">
        <div class="contact-one-wrap d-flex justify-content-between align-items-center flex-wrap g-20">
            <div class="content">
                <h4 class="fz-28-eb-black pb-20">Any questions you can ask us</h4>
                <p class="fz-16-m-black">
                    If you have any more queries, don't hesitate to ask us anything - We're here to help you throughout your journey with us!
                </p>
            </div>
            <a href="" class="btn-main btn-contact-one">Contact Us</a>
        </div>
    </div>
</section>
<!-- End Ask Questions -->

@endsection