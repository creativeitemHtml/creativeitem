
<div class="modal-header">
    <h1 class="modal-title">{{ get_phrase('Element product checkout') }}</h1>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body">
    
    <form class="cForm-wrap" id="checkout-form" action="{{ route('purchase_product', ['product_id' => $selected_product->id]) }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-12">
                <h1 class="modal-title pb-3">{{ get_phrase('Billing Address') }}</h1>
                @if(Auth::check())
                    <div class="cFormInput-wrap">
                        <input type="text" class="form-control eForm-control checkout" id="name" name="name" value="{{ Auth::user()->name }}" disabled />
                    </div>
                    <div class="cForm-wrap">
                        <div class="cFormInput-wrap">
                            <input type="email" class="form-control eForm-control checkout" id="email" name="email" value="{{ Auth::user()->email }}" disabled />
                        </div>
                    </div>
                @else
                    <div class="cForm-wrap">
                        <div class="cFormInput-wrap">
                            <input type="email" class="form-control eForm-control checkout" id="email" name="email" placeholder="Your Email" aria-label="Your Email" required />
                        </div>
                    </div>
                    <div class="eCheckbox eCheckbox-2 d-flex flex-column g-20 pt-11">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="createAccount" checked disabled />
                            <label class="form-check-label" for="createAccount">{{ get_phrase('Create an account') }}</label>
                        </div>
                    </div>
                @endif
                

                @if(session('location') == "Bangladesh")
                
                @php
                    $selectedPaymentMethod = 'bkash'; // This should be dynamically set based on your logic
                @endphp
                <div class="paymethod_choose">
                    <div class="row">
                        <div class="col-4">
                            <div class="form-check payment_method_body">
                                <input class="form-check-input payment_method" type="radio" name="payment_method" id="bkash" value="bkash" {{ $selectedPaymentMethod == 'bkash' ? 'checked' : '' }}>
                                <label class="form-check-label" for="bkash">
                                    <img src="{{ asset('assets/image/bks.png') }}" width="80px" height="37px" alt="">
                                </label>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-check payment_method_body">
                                <input class="form-check-input payment_method" type="radio" name="payment_method" id="nagad" value="nagad" {{ $selectedPaymentMethod == 'nagad' ? 'checked' : '' }}>
                                <label class="form-check-label" for="nagad">
                                    <img src="{{ asset('assets/image/nagad.png') }}" width="80px" height="37px" alt="">
                                </label>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-check payment_method_body">
                                <input class="form-check-input payment_method" type="radio" name="payment_method" id="stripe" value="stripe" {{ $selectedPaymentMethod == 'stripe' ? 'checked' : '' }}>
                                <label class="form-check-label" for="stripe">
                                    <img src="{{ asset('assets/image/stripe.png') }}" width="80px" height="37px" alt="">
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                @else
                
                <div class="col-4">
                    <div class="form-check payment_method_body">
                        <input class="form-check-input payment_method" type="radio" name="payment_method" id="stripe" value="stripe" checked>
                        <label class="form-check-label" for="stripe">
                            <img src="{{ asset('assets/image/stripe.png') }}" width="80px" height="37px" alt="">
                        </label>
                    </div>
                </div>
                @endif
                <div class="bkash_form" id="bkash_form">
                    <div class="input-wrap mt-2">
                        <label class="eForm-label">{{ get_phrase('Your Bkash Account Number') }}</label>
                        <input type="text" class="form-control eForm-control checkout" name="bkash_account_number" placeholder="01XXXXXXXX" id="bkash_account_number">
                    </div>
                    <div class="input-wrap mt-2">
                        <label class="eForm-label">{{ get_phrase('Bkash Transaction ID') }}</label>
                        <input type="text" class="form-control eForm-control checkout" name="bkash_trans_id" id="bkash_trans_id" placeholder="5B7A9">
                    </div>
                </div>
                
                <div class="nagad_form" id="nagad_form" style="display:none;">
                    <div class="input-wrap mt-2">
                        <label class="eForm-label">{{ get_phrase('Your Nagad Account Number') }}</label>
                        <input type="text" class="form-control eForm-control checkout" name="nagad_account_number" placeholder="01XXXXXXXX" id="nagad_account_number">
                    </div>
                    <div class="input-wrap mt-2">
                        <label class="eForm-label">{{ get_phrase('Nagad Transaction ID') }}</label>
                        <input type="text" class="form-control eForm-control checkout" name="nagad_trans_id" placeholder="5N7A9" id="nagad_trans_id">
                    </div>
                </div>
                
                <!-- Hidden fields to ensure data is submitted correctly -->
                <input type="hidden" name="account_number" id="hidden_account_number">
                <input type="hidden" name="trans_id" id="hidden_trans_id">
                    
                </div>
            
            <div class="col-lg-2 col-md-12"></div>
            @php
                try {
                    $prices = json_decode($selected_product->price, true);
                    $currency = strtoupper(session('session_currency'));
                    $price = collect($prices)->firstWhere('currency', $currency)['amount'];
                    $isJson = (json_last_error() == JSON_ERROR_NONE);
                } catch (\Exception $e) {
                    $isJson = false;
                }
            @endphp
            <div class="col-lg-4 col-md-12">
                <h1 class="modal-title pb-3">{{ get_phrase('Order Summary') }}</h1>

                <div class="mr-25 bd-all bd-r-10">
                    <div class="eCheckbox planCheck-wrap">
                        <div class="nav flex-column nav-pills planCheck" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <div class="form-check p-3">
                                <div class="row">
                                    <img src="{{ element_server_url($selected_product->product_id, $selected_product->product_to_elementCategory->slug).$selected_product->thumbnail }}" alt="">
                                    <div class="col-auto">
                                        <label class="eForm-label" for="flexCheckBasic">
                                        {{ $selected_product->title }}
                                        </label>
                                        @if ($isJson)
                                            <p>{{ currency($price) }}</p>
                                        @else
                                            <p>{{ currency($selected_product->price) }}</p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mr-25 py-20 d-flex justify-content-between align-items-center flex-wrap g-10">
                    <h4 class="fz-18-sb-black">{{ get_phrase('Total') }}</h4>
                    @if ($isJson)
                        <h4 class="fz-18-sb-black" id="selected-package-price"> {{ currency($price) }}</h4>
                    @else
                        <h4 class="fz-18-sb-black" id="selected-package-price"> {{ currency($selected_product->price) }}</h4>
                    @endif
                </div>
                <div class="pb-20 mr-25">
                    <div class="content">
                        <div class="cForm-wrap">
                            <button type="submit" class="checkout-order-btn">{{ get_phrase('Complete order') }}</button>
                        </div>
                    </div>
                </div>
                <div class="elitem-allFile mb-10">
                    <img src="https://creativeitem.com/public/assets/img/icon/lock.svg" alt="">
                    <p>{{ get_phrase('Secure Checkout') }}</p>
                </div>
            </div>
        </div>
    </form>
</div>


<script>
    $(document).ready(function() {
    // Initially hide both forms
    $('#bkash_form').hide();
    $('#nagad_form').hide();

    // Function to update hidden fields
    function updateHiddenFields() {
        const selectedMethod = $('input[name="payment_method"]:checked').val();
        if (selectedMethod === 'bkash') {
            $('#hidden_account_number').val($('#bkash_account_number').val()).attr('name', 'account_number');
            $('#hidden_trans_id').val($('#bkash_trans_id').val()).attr('name', 'trans_id');
        } else if (selectedMethod === 'nagad') {
            $('#hidden_account_number').val($('#nagad_account_number').val()).attr('name', 'account_number');
            $('#hidden_trans_id').val($('#nagad_trans_id').val()).attr('name', 'trans_id');
        } else {
            $('#hidden_account_number').val('').removeAttr('name');
            $('#hidden_trans_id').val('').removeAttr('name');
        }
    }

    // Function to validate form fields
    function validateFields() {
        let isValid = true;
        const selectedMethod = $('input[name="payment_method"]:checked').val();
        
        if (selectedMethod === 'bkash') {
            if ($('#bkash_account_number').val().length === 0 ){
                toastr.error("Please enter a valid Bkash account number.");
                isValid = false;
            }
            if ($('#bkash_trans_id').val().length === 0) {
                toastr.error("Please enter a Bkash transaction ID.");
                isValid = false;
            }
        } else if (selectedMethod === 'nagad') {
            if ($('#nagad_account_number').val().length === 0 ) {
                toastr.error("Please enter a valid Nagad account number.");
                isValid = false;
            }
            if ($('#nagad_trans_id').val().length === 0) {
                toastr.error("Please enter a Nagad transaction ID.");
                isValid = false;
            }
        }
        
        return isValid;
    }

    // Show the correct form based on the initially selected payment method
    if ($('#bkash').is(':checked')) {
        $('#bkash_form').show();
    } else if ($('#nagad').is(':checked')) {
        $('#nagad_form').show();
    }

    // Add a change event listener to the payment method radio buttons
    $('input[name="payment_method"]').change(function() {
        if (this.value === 'bkash') {
            $('#bkash_form').show();
            $('#nagad_form').hide();
        } else if (this.value === 'nagad') {
            $('#nagad_form').show();
            $('#bkash_form').hide();
        } else {
            $('#nagad_form').hide();
            $('#bkash_form').hide();
        }
        updateHiddenFields();
    });

    // Update hidden fields initially
    updateHiddenFields();

    // Update hidden fields when input fields change
    $('#bkash_account_number, #bkash_trans_id, #nagad_account_number, #nagad_trans_id').on('input', updateHiddenFields);

    // Add form submission event listener
    $('form').on('submit', function(event) {
        if (!validateFields()) {
            event.preventDefault();
        }
    });
});
</script>
    





