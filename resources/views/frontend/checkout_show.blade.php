@extends('frontend.layouts.app')
@section('content')
 <!--Body Content-->
 <div id="page-content">
            <div class="container-fluid cart-checkOut">
                <div class="row my-5 align-items-md-start">
                    <!-- Col-lg-9 -->
                    <div class="col-lg-8 col-md-8 col-sm-12">
                        <!-- Form and other sections as before -->
                        <div class="checkout-heading">
                            <h4>Check Out</h4>
                            <h6>Billing Details</h6>
                        </div>

                        <div class="row justify-content-start">
                            <div class="col-lg-11 col-md-11 col-sm-11 col-12 p-0">
                                <form class="checkOut-form" id="checkoutForm" action="{{ route('cart_checkout') }}">
                                    @csrf
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="firstName">First Name*</label>
                                            <input type="text" class="form-control" id="firstName" placeholder="First Name" name="first_name">
                                            <span class="text-danger validation-class" id="first_name-submit_errors"></span>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="lastName">Last Name*</label>
                                            <input type="text" class="form-control" id="lastName" placeholder="Last Name" name="last_name">
                                            <span class="text-danger validation-class" id="last_name-submit_errors"></span>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="country">Country / Region*</label>
                                            <select id="state" class="form-control" name="country">
                                                <option value="">Choose...</option>
                                                @foreach ($countary as $countary)
                                                    <option value="{{ $countary->name }}">{{ $countary->name }}</option>
                                                @endforeach
                                            </select>
                                            <span class="text-danger validation-class" id="country-submit_errors"></span>

                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="company">Company Name</label>
                                            <input type="text" class="form-control" id="company" placeholder="Company (optional)" name="company_name">
                                            <span class="text-danger validation-class" id="company_name-submit_errors"></span>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="streetAddress">Street Address*</label>
                                            <input type="text" class="form-control" id="streetAddress" placeholder="House number and street name" name="street_address">
                                            <span class="text-danger validation-class" id="street_address-submit_errors"></span>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="aptSuiteUnit">Apt, suite, unit</label>
                                            <input type="text" class="form-control" id="aptSuiteUnit" placeholder="Apartment, suite, unit, etc. (optional)" name="arp_suit_unit">
                                            <span class="text-danger validation-class" id="arp_suit_unit-submit_errors"></span>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="city">City*</label>
                                            <select id="city" class="form-control" name="city">
                                                <option value="">Choose...</option>
                                                @foreach ($cities as $city)
                                                    <option value="{{ $city->id }}">{{ $city->name }}</option>
                                                @endforeach
                                            </select>
                                            <span class="text-danger validation-class" id="city-submit_errors"></span>
                                        </div>

                                        {{-- <div class="form-group col-md-4">
                                            <label for="state">State*</label>
                                            <select id="state" class="form-control">
                                                <option>Choose...</option>
                                                <option>State 1</option>
                                                <option>State 2</option>
                                            </select>
                                        </div> --}}

                                        <div class="form-group col-md-6">
                                            <label for="postalCode">Postal Code*</label>
                                            <input type="number" class="form-control" id="postalCode" placeholder="Postal Code" name="postal_code">
                                            <span class="text-danger validation-class" id="postal_code-submit_errors"></span>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="phone">Phone*</label>
                                            <input type="tel" class="form-control" id="phone" placeholder="Phone" name="mobile_number">
                                            <span class="text-danger validation-class" id="mobile_number-submit_errors"></span>
                                        </div>
                                    </div>
                                    {{-- <button type="submit" class="btn btn-primary mt-4">Continue to delivery</button> --}}
                                    <div class="form-check mt-3">
                                        <input class="form-check-input" type="checkbox" id="saveInfo">
                                        <label class="form-check-label" for="saveInfo">Save my information for a faster checkout</label>
                                    </div>
                                

                                <div class="shipping-address mt-4">
                                    <h6>Shipping Address</h6>
                                    <p>Select the address that matches your card or payment method.</p>
                                    <div class="form-check-outer mt-5">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="shippingAddress" id="sameBilling" checked>
                                            <label class="form-check-label" for="sameBilling">Same as Billing address</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="shippingAddress">
                                            <label class="form-check-label" for="differentAddress">Use a different shipping address</label>
                                        </div>
                                    </div>

                                </div>
                
                                {{-- <div class="shipping-methods mt-4">
                                    <h6>Shipping Method</h6>

                                    <div class="row justify-content-start mb-4">
                                        <div class="col-sm-2 col-md-1 col-6 p-0">
                                            <img src="./assets/images/products/Rectangle 741.png" alt="Product Image" class="img-fluid">
                                        </div>
                                        <div class="col-sm-6 col-md-3 col-6 p-0">
                                            <p>Product Name x 1</p>
                                            <p>Color: Yellow</p>
                                        </div>
                                        <div class="col-sm-3 col-md-2 col-6">                                 
                                            <p>Price: $29.00</p>
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-6 p-0">
                                            <p>LXRY Shared Guaranteed Delivery | Arrives by Monday, June 7</p>
                                        </div>
                                    </div>
                                    
                                    <div class="row justify-content-start mb-4">
                                        <div class="col-sm-2 col-md-1 col-6 p-0">
                                            <img src="./assets/images/products/Rectangle 741.png" alt="Product Image" class="img-fluid">
                                        </div>
                                        <div class="col-sm-6 col-md-3 col-6 p-0">
                                            <p>Product Name x 1</p>
                                            <p>Color: Yellow</p>
                                        </div>
                                        <div class="col-sm-3 col-md-2 col-6">                                 
                                            <p>Price: $29.00</p>
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-6 p-0">
                                            <p>LXRY Shared Guaranteed Delivery | Arrives by Monday, June 7</p>
                                        </div>
                                    </div>
                                    
                                    <div class="row justify-content-start mb-4">
                                        <div class="col-sm-2 col-md-1 col-6 p-0">
                                            <img src="./assets/images/products/Rectangle 741.png" alt="Product Image" class="img-fluid">
                                        </div>
                                        <div class="col-sm-6 col-md-3 col-6 p-0">
                                            <p>Product Name x 1</p>
                                            <p>Color: Yellow</p>
                                        </div>
                                        <div class="col-sm-3 col-md-2 col-6">                                 
                                            <p>Price: $29.00</p>
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-6 p-0">
                                            <p>LXRY Shared Guaranteed Delivery | Arrives by Monday, June 7</p>
                                        </div>
                                    </div>
                                    
                                    <!-- Repeat above block for each product -->
                                </div> --}}

                                <div class="payment-methods mt-4">
                                    <h6>Payment Method</h6>
                                    <p>All transactions are secure and encrypted.</p>
                                    <div class="paymenForm-outer">                                        
                                        <div class="form-check">
                                            {{-- <input class="form-check-input" type="radio" name="paymentMethod" id="creditCard"> --}}
                                            <label class="form-check-label" for="creditCard" >
                                                Credit Card
                                                <p>We accept all major credit cards.</p>
                                                <div class="payment-details">
                                                    <img src="{{ url('public/assets/images/logo/GPay.png')}}" alt="Gpay">
                                                    <img src="{{ url('public/assets/images/logo/Visa.png')}}" alt="Visa">
                                                    <div class="paymentForm mt-sm-3 py-sm-3">
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6 col-12">
                                                                <!-- <label for="cardNumber">Card Number</label> -->
                                                                <input type="text" class="form-control" id="cardNumber" placeholder="Card Number" name="card_no">
                                                                <span class="text-danger validation-class" id="card_no-submit_errors"></span>
                                                            </div>
                                                            <div class="form-group col-md-6 col-12">
                                                                <!-- <label for="nameOnCard">Name on Card</label> -->
                                                                <input type="text" class="form-control" id="nameOnCard" placeholder="Name on Card" name="card_holder_name">
                                                                <span class="text-danger validation-class" id="card_holder_name-submit_errors"></span>
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6 col-12">
                                                                <!-- <label for="expirationDate">Expiration Date</label> -->
                                                                <input type="text" class="form-control" id="expirationDate" placeholder="MM/YY" name="exp_date">
                                                                <span class="text-danger validation-class" id="exp_date-submit_errors"></span>
                                                            </div>
                                                            <div class="form-group col-md-6 col-12 cvv-container ">
                                                                <!-- <label for="securityCode">Security Code</label> -->
                                                                <input type="password" class="form-control" id="securityCode" placeholder="Security Code" name="cvv">
                                                                <span class="toggle-icon" id="toggleCVV"><i class="fa fa-eye"></i></span>
                                                                <span class="text-danger validation-class" id="cvv-submit_errors"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                        {{-- <div class="form-check">
                                            <input class="form-check-input" type="radio" name="paymentMethod" id="cashOnDelivery">
                                            <label class="form-check-label" for="cashOnDelivery">Cash on delivery
                                                <p>Pay with cash upon delivery.</p>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="paymentMethod" id="paypal">
                                            <label class="form-check-label" for="paypal">Paypal</label>
                                        </div> --}}
                                    </div>
                                </div>

                            </div>
                        </div>


        
                        <button type="submit" class="btn btn-primary mt-5">Pay Now</button>
                        </form>
                    </div>
        
                    <!-- Col-lg-3 -->
                    <div class="col-lg-4 col-md-4 col-sm-12 col-12 me-sm-5 mt-3 mt-sm-0">
                        <div class="order-summary">
                            <h6>Order Summary</h6>

                            @foreach ($cart as $val)
                                <div class="order-item">
                                    <div class="row">
                                        <div class="col-4 col-sm-3 col-md-2 p-0">
                                            <img src="{{asset('uploads/item/' . $val->products->mainImag)}}" alt="Product Image" class="img-fluid">
                                        </div>
                                        <div class="col-6 col-sm-6 col-md-7">
                                            <p>{{$val->products->item_title}}</p>
                                            <p>Color: <span>{{$val->products->color->name ?? ''}}</span></p>
                                        </div>
                                        <div class="col-2 col-sm-3 col-md-3 p-0">
                                            <p class="text-end">AED {{ $val->products->rrp_price }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            
                            {{-- <div class="order-item">
                                <div class="row">
                                    <div class="col-4 col-sm-3 col-md-2 p-0">
                                        <img src="./assets/images/products/Rectangle 741.png" alt="Product Image" class="img-fluid">
                                    </div>
                                    <div class="col-6 col-sm-6 col-md-7">
                                        <p>Product Name x <span>1</span></p>
                                        <p>Color: <span>Yellow</span></p>
                                    </div>
                                    <div class="col-2 col-sm-3 col-md-3 p-0">
                                        <p class="text-end">$29.00</p>
                                    </div>
                                </div>
                            </div>

                            <div class="order-item">
                                <div class="row">
                                    <div class="col-4 col-sm-3 col-md-2 p-0">
                                        <img src="./assets/images/products/Rectangle 741.png" alt="Product Image" class="img-fluid">
                                    </div>
                                    <div class="col-6 col-sm-6 col-md-7">
                                        <p>Product Name x <span>1</span></p>
                                        <p>Color: <span>Yellow</span></p>
                                    </div>
                                    <div class="col-2 col-sm-3 col-md-3 p-0">
                                        <p class="text-end">$29.00</p>
                                    </div>
                                </div>
                            </div> --}}
                            <!-- Repeat above block for each product -->
        
                            <div class="subtotal mt-3">
                                <h6>Subtotal ({{ $cart_values['total_item'] }} items)</h6>
                                <span>AED {{ $cart_values['sub_total_amount'] ?? 0 }}</span>
                            </div>

                            <div class="savings mt-2">
                                <h6>Savings</h6>
                                <span id="discount_amount">{{ $cart_values['discount_amount'] ?? '-' }}</span>
                            </div>

                            {{-- <div class="shipping mt-2">
                                <h6>Shipping</h6>
                                <span>$5.00</span>
                            </div> --}}

                            <form action="{{ route('apply_coupan') }}" method="POST" id="applyCoupanForm">
                                @csrf
                                <div class="promo-code mt-2">
                                    <h6>Enter your Promotional Code</h6>
                                    <input type="text" class="form-control" id="promoCode" placeholder="Promo Code" name="code" value="{{ $cart_values['coupon_code'] ?? '' }}">
                                    <button type="submit" class="btn btn-secondary btn-apply">Apply</button>
                                    <span class="text-danger validation-class" id="code-apply_coupon_errors"></span>
                                    <span id="discount_message" style="color: green">
                                        {{ $cart_values['discount_message'] ?? '' }}
                                    </span>
                                </div>
                            </form>

                            <div class="total mt-2">
                                <h6>Total</h6>                                                                                                                                                  
                                <span id="total_cart_amount">{{ $cart_values['total_cart_amount'] }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Including Jquery -->
            <!-- Initialize Swiper -->

            <script>
                // Initialize Swiper for carousel
                var swiper = new Swiper('.swiper-container', {
                    slidesPerView: 4.5,
                    spaceBetween: 10,
                    navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev',
                    },
                    pagination: {
                        el: '.swiper-pagination',
                        clickable: true,
                    },
                    breakpoints: {
                        1200: {
                            slidesPerView: 4.5,
                        },
                        768: {
                            slidesPerView: 2.5,
                        },
                        576: {
                            slidesPerView: 2.5,
                        },
                        480: {
                            slidesPerView: 1.2,
                        },
                    },
                });
            </script>

            <script>
                // Instagram Feed Initialization
                (function ($) {
                    $(window).on('load', function () {
                        $.instagramFeed({
                            'username': 'annimextheme',
                            'container': "#instafeed2",
                            'display_profile': false,
                            'display_biography': false,
                            'display_gallery': true,
                            'callback': null,
                            'styling': true,
                            'items': 8,
                            'items_per_row': 4,
                            'margin': 0.50
                        });
                    });
                })(jQuery);
            </script>
            <!-- End Instagram Js -->

            <script>
                // Newsletter Popup Logic
                jQuery(document).ready(function () {
                    jQuery('.closepopup').on('click', function () {
                        jQuery('#popup-container').fadeOut();
                        jQuery('#modalOverly').fadeOut();
                    });

                    var visits = jQuery.cookie('visits') || 0;
                    visits++;
                    jQuery.cookie('visits', visits, { expires: 1, path: '/' });
                    console.debug(jQuery.cookie('visits'));

                    if (jQuery.cookie('visits') > 1) {
                        jQuery('#modalOverly').hide();
                        jQuery('#popup-container').hide();
                    } else {
                        var pageHeight = jQuery(document).height();
                        jQuery('<div id="modalOverly"></div>').insertBefore('body');
                        jQuery('#modalOverly').css("height", pageHeight);
                        jQuery('#popup-container').show();
                    }

                    if (jQuery.cookie('noShowWelcome')) {
                        jQuery('#popup-container').hide();
                        jQuery('#active-popup').hide();
                    }
                });

                jQuery(document).mouseup(function (e) {
                    var container = jQuery('#popup-container');
                    if (!container.is(e.target) && container.has(e.target).length === 0) {
                        container.fadeOut();
                        jQuery('#modalOverly').fadeIn(200);
                        jQuery('#modalOverly').hide();
                    }
                });

                /*--------------------------------------
                    Promotion / Notification Cookie Bar 
                --------------------------------------*/
                if (Cookies.get('promotion') != 'true') {
                    $(".notification-bar").show();
                }

                $(".close-announcement").on('click', function () {
                    $(".notification-bar").slideUp();
                    Cookies.set('promotion', 'true', { expires: 1 });
                    return false;
                });
            </script>
            <!-- End For Newsletter Popup -->

            <script>
                // JavaScript to toggle payment details and shipping methods
                document.querySelectorAll('input[name="paymentMethod"]').forEach((elem) => {
                    elem.addEventListener("change", function() {
                        document.querySelectorAll('.payment-details').forEach((el) => el.classList.add('d-none'));
                        if (document.getElementById('creditCard').checked) {
                            document.querySelector('.payment-details').classList.remove('d-none');
                        }
                    });
                });
        
                document.querySelectorAll('input[name="shippingAddress"]').forEach((elem) => {
                    elem.addEventListener("change", function() {
                        if (document.getElementById('differentAddress').checked) {
                            document.querySelector('.shipping-methods').classList.remove('d-none');
                        } else {
                            document.querySelector('.shipping-methods').classList.add('d-none');
                        }
                    });
                });
        
                // JavaScript for CVV toggle
                document.getElementById('toggleCVV').addEventListener('click', function() {
                    const cvvInput = document.getElementById('securityCode');
                    const icon = this.querySelector('i');
                    if (cvvInput.type === 'password') {
                        cvvInput.type = 'text';
                        icon.classList.remove('fa-eye');
                        icon.classList.add('fa-eye-slash');
                    } else {
                        cvvInput.type = 'password';
                        icon.classList.remove('fa-eye-slash');
                        icon.classList.add('fa-eye');
                    }
                });
            </script>
        </div>


        <script>
            $(document).ready(function() {
                $('#checkoutForm').on('submit', function(e) {
                    e.preventDefault(); // Prevent the default form submission
                    var $form = $('#checkoutForm');
                    var url = $form.attr('action');
                    var formData = new FormData($form[0]);
                    $('.validation-class').html('');
                    $.ajax({
                        url: url,
                        type: 'POST',
                        data: formData,
                        processData: false,
                        contentType: false,
                        beforeSend: function() {
                            $('.spinner-loader').css('display', 'block');
                        },
                        success: function(res) {
                            // window.location.href = res;
                        },
                        error: function(res) {
                            if (res.status == 400 || res.status == 422) {
                                if (res.responseJSON && res.responseJSON.error) {
                                    var error = res.responseJSON.error
                                    $.each(error, function(key, value) {
                                        // alert(value);
                                        $("#" + key + "-submit_errors").text(value);
                                    });
                                }
                            }
                        }
                    });
                });
            });
        </script>


<script>
    $(document).ready(function() {
        $('#applyCoupanForm').on('submit', function(e) {
            e.preventDefault(); // Prevent the default form submission
            var $form = $('#applyCoupanForm');
            var url = $form.attr('action');
            var formData = new FormData($form[0]);
            $('.validation-class').html('');
            $.ajax({
                url: url,
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                beforeSend: function() {
                    $('.spinner-loader').css('display', 'block');
                },
                success: function(res) {
                    console.log(res);
                    if(res.discount_amount){
                        $('#discount_amount').html(res.discount_amount);
                    }

                    if(res.discount_message){
                        $('#discount_message').html(res.discount_message);
                    }

                    if(res.total_cart_amount){
                        $('#total_cart_amount').html(res.total_cart_amount);
                    }
                },
                error: function(res) {
                    
                    
                    
                    if (res.status == 400 || res.status == 422) {
                        if (res.responseJSON && res.responseJSON.errors) {
                            var error = res.responseJSON.errors
                            $.each(error, function(key, value) {
                                // alert(value[0]);
                                $("#" + key + "-apply_coupon_errors").text(value[0]);
                            });
                        }
                    }
                }
            });
        });
    });
</script>
@endsection