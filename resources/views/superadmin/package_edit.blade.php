<style>
.input-row {
    display: flex;
    align-items: center;
    gap: 10px;
}

.add-field {
    cursor: pointer;
    height: 50px;
    width: 50px;
    border-radius: 5px;
    font-size: 20px;
    background: #0d6efd;
    border-color: #0d6efd;
    color: #fff !important;
    border: none;
}

.remove-field {
    cursor: pointer;
    height: 50px;
    width: 50px;
    border-radius: 5px;
    font-size: 20px;
    background: #ee406b;
    border-color: #ee406b;
    color: #fff !important;
    border: none;
}
</style>


<form method="POST" enctype="multipart/form-data" class="d-block ajaxForm" action="{{ route('superadmin.package_update', ['id' => $package_details->id]) }}">
	@csrf
    <div class="input-wrap mt-2">
        <label for="name" class="eForm-label">{{ get_phrase('Name') }}</label>
        <input type="text" class="form-control eForm-control" name="name" id="name" value="{{ $package_details->name }}" placeholder="Provide package name" required>
    </div>

    <div class="input-wrap mt-2">
        <label for="price" class="eForm-label">{{ get_phrase('Package price') }}</label>
        <div class="row m-2">
            @php
            $prices = json_decode($package_details->price, true);
            @endphp
            @foreach ($currencies as $currency)
                @php
                    $price_value = '';
                    if (is_array($prices)) {
                        foreach ($prices as $price) {
                            if ($price['currency'] === $currency->code) {
                                $price_value = $price['amount'];
                                break;
                            }
                        }
                    }
                @endphp
                <div class="col-sm-2 col-md-2 col-lg-2 pt-2">
                    <label for="{{ $currency->code }}" class="col-sm-2 enForm-label ps-5">{{ get_phrase($currency->code) }}</label>
                </div>
                <div class="col-sm-3 col-md-3 col-lg-3">
                    <input type="text" class="form-control enForm-control" id="{{ $currency->code }}" name="price[{{ $currency->code }}]" placeholder="{{ '$00' }}" aria-label="{{ '$00' }}" min="0" value="{{ $price_value }}" required/>
                </div>
            @endforeach
        </div>
    </div>

    <div class="input-wrap mt-2">
        <label for="discounted_price" class="eForm-label">{{ get_phrase('Discounted price') }}</label>
        <div class="row m-2">
            @php
            $disPrices = json_decode($package_details->discounted_price, true);
            @endphp
            @foreach ($currencies as $currency)
                @php
                    $disPrice_value = '';
                    if (is_array($disPrices)) {
                        foreach ($disPrices as $price) {
                            if ($price['currency'] === $currency->code) {
                                $disPrice_value = $price['amount'];
                                break;
                            }
                        }
                    }
                @endphp
                <div class="col-sm-2 col-md-2 col-lg-2 pt-2">
                    <label for="{{ $currency->code }}" class="col-sm-2 enForm-label ps-5">{{ get_phrase($currency->code) }}</label>
                </div>
                <div class="col-sm-3 col-md-3 col-lg-3">
                    <input type="text" class="form-control enForm-control" id="{{ $currency->code }}" name="discounted_price[{{ $currency->code }}]" placeholder="{{ '$00' }}" aria-label="{{ '$00' }}" min="0" value="{{ $disPrice_value }}" required/>
                </div>
            @endforeach
        </div>
    </div>

    <div class="input-wrap mt-2">
        <label for="stripe_package_id" class="eForm-label">{{ get_phrase('Stripe package id') }}</label>
        <input type="text" class="form-control eForm-control" id="stripe_package_id" name="stripe_package_id" value="{{ $package_details->stripe_package_id }}" placeholder="Provide stripe package id" required>
    </div>

    <div class="input-wrap mt-2">
        <label for="interval" class="eForm-label">{{ get_phrase('Interval') }}</label>
        <select name="interval" id="interval" class="form-select eForm-select eChoice-multiple-with-remove">
            <option value="monthly"  @php if($package_details->interval == 'monthly') echo 'selected' @endphp>{{ get_phrase('Monthly') }}</option>
            <option value="lifetime" @php if($package_details->interval == 'lifetime') echo 'selected' @endphp>{{ get_phrase('Lifetime') }}</option>
        </select>
    </div>

    <div class="input-wrap mt-2">
        <label for="interval_period" class="eForm-label">{{ get_phrase('Interval Period') }}</label>
        <input type="number" class="form-control eForm-control" id="interval_period" name="interval_period" value="{{ $package_details->interval_period }}" placeholder="Provide interval month">
    </div>

    <div class="input-wrap mt-2">
        <label for="visibility" class="eForm-label">{{ get_phrase('Visibility') }}</label>
        <select name="visibility" id="visibility" class="form-select eForm-select eChoice-multiple-with-remove">
            <option value="1" @php if($package_details->visibility == '1') echo 'selected' @endphp>{{ get_phrase('Yes') }}</option>
            <option value="0" @php if($package_details->visibility == '0') echo 'selected' @endphp>{{ get_phrase('No') }}</option>
        </select>
    </div>

    <!-- <div class="input-wrap mt-2" id="featureList">
        <label>{{ get_phrase('Feature List') }}</label>
        <div class="feature-list">
            <input type="text" name="features[]" class="form-control" placeholder="Feature Value">
            <button type="button" class="add-field">+</button>
        </div>
    </div> -->

    <div class="input-wrap mt-2" id="featureList">
        <label>{{ get_phrase('Feature Fields') }}</label>
        <div class="input-row mt-3">
            <input type="text" name="features[]" class="form-control eForm-control" placeholder="Feature Value">
            <button type="button" class="add-field">+</button>
        </div>
        <div class="feature-list">
            @foreach ($feature_list as $index => $feature)
                <div class="input-row mt-3">
                    <input type="text" name="features[]" class="form-control eForm-control" value="{{ $feature }}" readonly>
                    @if ($index+1 > 0) <!-- Allow removing only if there's more than one feature -->
                        <button type="button" class="remove-field">-</button>
                    @endif
                </div>
            @endforeach
            <p id="warningText" class="text-warning"></p>
        </div>
    </div>





    <div class="text-center float-end mt-4">
        <button type="submit" class="btn btn-primary" name="button">{{ get_phrase('Submit') }}</button>
    </div>
</form>

<script>
$(document).ready(function() {
    $('#interval').change(function() {
        var selectedValue = $(this).val();
        if (selectedValue === 'monthly') {
            $('#interval_period').closest('.input-wrap').show();
        } else {
            $('#interval_period').closest('.input-wrap').hide();
        }
    });

    // Trigger the change event on page load to initialize the visibility based on the initial value
    $('#interval').trigger('change');

    $('#featureList').on('click', '.add-field', function() {
        var inputValue = $(this).closest('.input-row').find('input').val();

        if (inputValue.trim() === '') {
            $('#warningText').text('Please enter a value before adding.');
            return;
        }

        $('#warningText').text(''); // Clear the warning text

        var fieldHTML = `
            <div class="input-row mt-3">
                <input type="text" name="features[]" class="form-control eForm-control" value="${inputValue}" readonly>
                <button type="button" class="remove-field">-</button>
            </div>
        `;
        $('.feature-list').append(fieldHTML);

        // Clear the input field
        $(this).closest('.input-row').find('input').val('');
        // $(this).prop('disabled', true);
    });

    $('#featureList').on('click', '.remove-field', function() {
        $(this).closest('.input-row').remove();
    });

});
</script>

