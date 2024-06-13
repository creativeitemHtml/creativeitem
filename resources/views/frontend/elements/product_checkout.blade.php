<div class="modal-header">
    <h1 class="modal-title">Element product checkout</h1>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body">
    <form class="cForm-wrap" id="checkout-form" action="{{ route('purchase_product', ['product_id' => $selected_product->id]) }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-12">
                <h1 class="modal-title pb-3">Billing Address</h1>
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
                            <label class="form-check-label" for="createAccount">Create an account</label>
                        </div>
                    </div>
                @endif
            </div>
            <div class="col-lg-2 col-md-12"></div>
            <div class="col-lg-4 col-md-12">
                <h1 class="modal-title pb-3">Order Summary</h1>

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
                                        <p>${{ $selected_product->price }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mr-25 py-20 d-flex justify-content-between align-items-center flex-wrap g-10">
                    <h4 class="fz-18-sb-black">Total</h4>
                    <h4 class="fz-18-sb-black" id="selected-package-price"> ${{ $selected_product->price }}</h4>
                </div>

                <div class="pb-20 mr-25">
                    <div class="content">
                        <div class="cForm-wrap">
                            <button type="submit" class="checkout-order-btn">Complete order</button>
                        </div>
                    </div>
                </div>

                <div class="elitem-allFile mb-10">
                    <img src="https://creativeitem.com/public/assets/img/icon/lock.svg" alt="">
                    <p>Secure Checkout</p>
                </div>

            </div>
        </div>
    </form>
</div>