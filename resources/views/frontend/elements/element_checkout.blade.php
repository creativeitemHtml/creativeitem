<div class="modal-header">
    <h1 class="modal-title">Element subscription checkout page</h1>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body">
    <form id="checkout-form" action="{{ route('purchase_subscription', ['package_id' => $selected_package->id]) }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-lg-8">
                <div class="billing-address bd-all bd-r-5 px-25 py-25">
                    <h4 class="fz-24-b-black pb-30">Billing Address</h4>
                    @if(isset(auth()->user()->id) && auth()->user()->id !='')
                    <input type="hidden" id="user_id" name="user_id" value="{{ auth()->user()->id }}">
                    <div class="cFormInput-wrap">
                        <label for="name" class="eForm-label">Name</label>
                        <input type="text" class="form-control eForm-control" id="name" name="name" value="{{ auth()->user()->name }}" disabled />
                    </div>
                    <div class="cForm-wrap">
                        <div class="cFormInput-wrap">
                            <label for="email" class="eForm-label">Email</label>
                            <input type="email" class="form-control eForm-control" id="email" name="email" value="{{ auth()->user()->email }}" disabled />
                        </div>
                    </div>
                    @else
                    <div v-if="!$page.props.auth.user" class="cForm-wrap">
                        <div class="cFormInput-wrap">
                            <label for="yourEmail" class="eForm-label">Email</label>
                            <input type="email" class="form-control eForm-control" id="email" name="email" placeholder="Your Email" aria-label="Your Email" required />
                        </div>
                    </div>
                    @endif
                    @if(empty(auth()->user()->id))
                    <div class="eCheckbox eCheckbox-2 d-flex flex-column g-20 pt-11">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="createAccount" checked disabled />
                            <label class="form-check-label" for="createAccount">Create an account</label>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
            <div class="col-lg-4">
                <div class="order-summary pt-24 pb-20 box-shadow-13 bg-white bd-r-10">
                    <h4 class="os-header pl-24 pr-25 pb-20 mb-24 bd-b-1 fz-18-sb-black">Order Summary</h4>
                    <div class="p-20 ml-24 mr-25 bd-all bd-r-10">
                        <div class="eCheckbox planCheck-wrap">
                            <div class="nav flex-column nav-pills planCheck" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            @foreach($packages as $package)
                                @php
                                if($package->interval == 'monthly'){
                                    $per = '/m';
                                    $interval = 'Month';

                                    if($package->interval_period > 1){
                                    $interval_period_text = $package->interval_period.' '.$interval.'s'.' Access';
                                    } else {
                                    $interval_period_text = $package->interval_period.' '.$interval.' Access';
                                    }
                                } else {
                                    $per = '';
                                    $interval = '';
                                    $interval_period_text = 'Lifetime access';
                                }


                                $prices = json_decode($package->price, true);
                                $dis_price = json_decode($package->discounted_price, true);
                                $currency = strtoupper(session('session_currency'));
                                $price = collect($prices)->firstWhere('currency', $currency)['amount'];
                                $dis_price = collect($dis_price)->firstWhere('currency', $currency)['amount'];

                                @endphp
                                <button
                                    class="nav-link checkThis @if($package->id == $selected_package->id) active @endif"
                                    id="v-pills-{{ $package->name }}-tab"
                                    data-bs-toggle="pill"
                                    data-bs-target="#v-pills-{{ $package->name }}"
                                    type="button"
                                    role="tab"
                                    aria-controls="v-pills-{{ $package->name }}"
                                    aria-selected="{{ $package->id == $selected_package->id ? 'true' : 'false' }}"
                                    data-package-price="{{ $dis_price }}"
                                    data-interval-period="{{ $package->interval_period }}"
                                    data-package-id="{{ $package->id }}"
                                >
                                    <div class="form-check">
                                        <div class="col-auto">
                                            <input class="form-check-input planCheck-input" type="checkbox" value="{{ $package->id }}" id="flexCheckBasic-{{ $package->id }}" @if($package->id == $selected_package->id) checked @endif />
                                        </div>
                                        <div class="col-auto">
                                            <label class="form-check-label" for="flexCheckBasic">{{ get_phrase('Creative elements').' - '.$package->name }}</label>
                                            <p>
                                                {{ currency($dis_price.$per) }} ( {{ $interval_period_text }} )
                                            </p>
                                        </div>
                                    </div>
                                </button>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="ml-24 mr-25 py-20 d-flex justify-content-between align-items-center flex-wrap g-10">
                        <h4 class="fz-18-sb-black">Total</h4>
                        @php

                        $selected_dis_price = json_decode($selected_package->discounted_price, true);
                        $currency = strtoupper(session('session_currency'));
                        $selected_dis_price = collect($selected_dis_price)->firstWhere('currency', $currency)['amount'];

                        @endphp
                        <h4 class="fz-18-sb-black" id="selected-package-price">
                            {{ $selected_package->interval == 'lifetime' ? currency().(double)$selected_dis_price : currency().(double)$selected_dis_price * (double)$selected_package->interval_period }}
                        </h4>
                    </div>
                    <div class="bd-all bd-r-10 pt-16 pb-20 ml-24 mr-25">
                        <div class="content px-20">
                            <div class="cForm-wrap">
                                <button type="submit" class="checkout-order-btn">Complete order</button>
                            </div>
                        </div>
                    </div>
                    <div class="elitem-allFile mt-20">
                        <img src="{{ asset('assets/img/icon/lock.svg') }}" alt="" />
                        <p>Secure Checkout</p>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<script>
  $(".checkThis").on("click", function () {
    // Uncheck all checkboxes
    $(".planCheck-input").prop("checked", false);

    // Check the clicked checkbox
    $(this).find(".planCheck-input").prop("checked", true);

    // Get the selected package's price and interval period from the data attributes
    var selectedPackagePrice = parseFloat($(this).data("package-price"));
    var selectedIntervalPeriod = parseFloat($(this).data("interval-period"));
    var selectedPackageId = $(this).data("package-id");

    // Update form action with the selected package ID
    var newAction = "{{ route('purchase_subscription', ['package_id' => ':id']) }}";
    newAction = newAction.replace(':id', selectedPackageId);
    $('#checkout-form').attr('action', newAction);

    // Calculate the total price based on the interval period
    var totalSelectedPackagePrice = selectedIntervalPeriod ? selectedPackagePrice * selectedIntervalPeriod : selectedPackagePrice;

    // Update the displayed price with $ sign
    $("#selected-package-price").text("<?= currency(); ?>" + totalSelectedPackagePrice.toFixed(2));
  });

  document.getElementById("checkout-form").addEventListener("submit", function(event) {
      // Get the input field value
      var inputValue = document.getElementById("email").value;

      // Check if the input field is empty
      if (inputValue.trim() === "") {
          // Prevent the form from being submitted
          event.preventDefault();

          // Optionally, you can provide feedback to the user
          // toastr.error("Input field cannot be empty.");
          $('.custom_error').addClass('active');
          $('.custom_error p').text('Input field cannot be empty.');
          setTimeout(function() {
              $('.custom_error').removeClass('active'); 
          }, 5000);
      }
  });
</script>
