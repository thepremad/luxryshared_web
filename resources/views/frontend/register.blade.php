@extends('frontend.layouts.app')

@section('content')
    <style>
        #map {
            height: 200px;
            width: 100%;
        }
    </style>

<style>
    /* Custom styles for suggestions */
    #autocomplete-results {
        border: 1px solid #ccc;
        max-height: 200px;
        overflow-y: auto;
        width: 300px;
        background-color: white;
        position: absolute;
        z-index: 1000;
    }

    .suggestion-item {
        padding: 10px;
        cursor: pointer;
    }

    .suggestion-item:hover {
        background-color: #f0f0f0;
    }
</style>
    <div class="register">
        <!--Body Content-->
        <div id="page-content">
            <div class="container-fluid">
                <div class="loginRegister-section">
                    <div class="row">
                        <div class="register-banner">
                            <div class="register-banner-img">
                                <img src="{{ asset('./assets/images/banners/register-banner.png') }}" alt="Banner"
                                    class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="row formRow">
                        <div class="col-md-7 col-lg-7 register-tabSection">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="login-tab" data-toggle="tab" href="#login"
                                        role="tab" aria-controls="login" aria-selected="true">Login</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="register-tab" data-toggle="tab" href="#register" role="tab"
                                        aria-controls="register" aria-selected="false">Register</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">

                                <div class="tab-pane fade show active" id="login" role="tabpanel"
                                    aria-labelledby="login-tab">
                                    <div class="form-section login-section">
                                        <form class="loginForm" action="{{ route('login') }}" method="post" id="loginForm">
                                            @csrf
                                            <div class="form-group">
                                                @if (Session::has('email-password'))
                                                    <p class="alert alert-danger" id="wakoo">
                                                        {{ Session::get('email-password') }}</p>
                                                @endif

                                                <label for="loginEmail">Your email</label>
                                                <div class="input-group">
                                                    <input type="email" class="form-control" name="email"
                                                        id="loginEmail" placeholder="Enter email">
                                                </div>


                                                <div>
                                                    <span class="text-danger validation-class"
                                                        id="email-login_errors"></span>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="loginPassword">Password</label>
                                                <div class="input-group">
                                                    <input type="password" class="form-control" name="password"
                                                        id="loginPassword" placeholder="Password">


                                                    <div class="input-group-append" id="togglePassword">
                                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                                    </div>

                                                </div>
                                                <div>
                                                    <span class="text-danger validation-class"
                                                        id="password-login_errors"></span>
                                                </div>
                                            </div>

                                    </div>
                                    <script>
                                        // Function to hide the alert after 3 seconds
                                        setTimeout(function() {
                                            var alert = document.getElementById('wakoo');
                                            if (alert) {
                                                alert.style.display = 'none';
                                            }
                                        }, 5000); // 3000 milliseconds = 3 seconds
                                    </script>
                                    <a href="{{ route('forget_password') }}" class="d-block text-right">Forgot Password?</a>
                                    <div class="loginButton">
                                        <button type="submit" class="btn btn-primary sign-btn">Sign In</button>
                                        <!-- <button type="button" class="btn btn-secondary mt-3 sign-google">Google</button> -->
                                    </div>
                                    </form>
                                </div>



                                <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
                                    <div class="form-section register-section">
                                        <h3>Register With LXRY Shared</h3>

                                        <form class="registerForm" action="{{ route('register') }}" method="post"
                                            enctype="multipart/form-data" id="registerForm">

                                            @csrf
                                            <div class="form-group">
                                                <label for="registerEmail">Email Address <span>*</span></label>
                                                <input type="email" name="email"
                                                    class="form-control @error('email') is-invalid @enderror"
                                                    id="registerEmail" placeholder="Enter email"
                                                    value="{{ old('email') }}">
                                                <span class="invalid-feedback">{{ $errors->first('email') }}</span>

                                                <span class="text-danger validation-class"
                                                    id="email-register_errors"></span>
                                            </div>

                                            <div class="form-group">
                                                <label for="firstName">First Name <span>*</span></label>
                                                <input type="text" name="first_name"
                                                    class="form-control @error('first_name') is-invalid @enderror"
                                                    id="firstName" placeholder="First Name"
                                                    value="{{ old('first_name') }}">
                                                <span class="invalid-feedback">{{ $errors->first('first_name') }}</span>
                                                <span class="text-danger validation-class"
                                                    id="first_name-register_errors"></span>
                                            </div>

                                            <div class="form-group">
                                                <label for="lastName">Last Name <span>*</span></label>
                                                <input type="text" name="last_name"
                                                    class="form-control @error('last_name') is-invalid @enderror"
                                                    id="lastName" placeholder="Last Name"
                                                    value="{{ old('last_name') }}">
                                                <span class="invalid-feedback">{{ $errors->first('last_name') }}</span>
                                                <span class="text-danger validation-class"
                                                    id="last_name-register_errors"></span>
                                            </div>

                                            <div class="form-group">
                                                <label for="registerPassword">Password</label>
                                                <input type="password" name="password"
                                                    class="form-control @error('password') is-invalid @enderror"
                                                    id="registerPassword" placeholder="Enter Password">
                                                <span class="invalid-feedback">{{ $errors->first('password') }}</span>
                                                <span class="text-danger validation-class"
                                                    id="password-register_errors"></span>
                                            </div>

                                            <div class="form-group">
                                                <label for="confirmPassword">Confirm Password</label>
                                                <input type="password" name="password_confirmation"
                                                    class="form-control @error('password_confirmation') is-invalid @enderror"
                                                    id="confirmPassword" placeholder="Enter Your Password Again">
                                                <span
                                                    class="invalid-feedback">{{ $errors->first('password_confirmation') }}</span>

                                                <span class="text-danger validation-class"
                                                    id="password_confirmation-register_errors"></span>
                                            </div>

                                            <div class="form-group">
                                                <label for="mobileNumber">Mobile Number <span>*</span></label>
                                                <input type="text" name="number"
                                                    class="form-control @error('number') is-invalid @enderror"
                                                    id="mobileNumber" placeholder="Enter Mobile Number"
                                                    value="{{ old('number') }}">
                                                <span class="invalid-feedback">{{ $errors->first('number') }}</span>
                                                <span class="text-danger validation-class"
                                                    id="number-register_errors"></span>
                                            </div>

                                            <div class="form-group">
                                                <label for="referralCode">Referral Code</label>
                                                <input type="text" name="referralCode" class="form-control"
                                                    id="referralCode" placeholder="Referral Code">
                                            </div>

                                            <div class="form-group">
                                                <label for="address">Address <span>*</span></label>
                                                <input type="text" name="address" autocomplete="off"
                                                    class="form-control @error('address') is-invalid @enderror"
                                                    id="google_address_id" placeholder="Enter Address"
                                                    value="{{ old('address') }}" >
                                                <span class="invalid-feedback">{{ $errors->first('address') }}</span>
                                                <span class="text-danger validation-class"
                                                    id="address-register_errors"></span>
                                            </div>

                                            {{-- <input id="google_address_id" type="text" placeholder="Search for a place" /> --}}
                                            

                                            <div id="autocomplete-results"></div> 

                                            <input id="lantitude" name="latitude" type="hidden" placeholder="Latitude" readonly />
                                            <input id="longitude" name="longitude" type="hidden" placeholder="Longitude" readonly />

                                            
                                            <div id="map" style="height: 400px; width: 100%;"></div>

                                            {{-- <div id="map" style="height: 400px;"></div>
                                            
                                            <input type="hidden" name="latitude" id="lantitude">
                                            <input type="hidden" name="longitude" id="longitude"> --}}


                                            <div class="form-group" style="margin-top: 20px">
                                                <label for="idVerificationn">Upload EID <span>*</span></label>
                                                <input type="file" name="id_image"
                                                    class="form-control-file @error('id_image') is-invalid @enderror"
                                                    id="idVerificationn" accept="image/*, application/pdf">

                                                <span class="invalid-feedback">{{ $errors->first('id_image') }}</span>
                                                <span class="text-danger validation-class"
                                                    id="id_image-register_errors"></span>
                                            </div>

                                            <div class="form-check">
                                                <input type="checkbox"
                                                    class="form-check-input mt-0 @error('terms') is-invalid @enderror"
                                                    id="terms" name="terms">
                                                <label class="form-check-label" for="terms">I AGREE TO THE TERMS OF
                                                    SERVICES AND

                                                    <a href="{{ route('privacy_policy') }}" target="_blank">PRIVACY POLICY.</a>

                                                    </label>
                                                <span class="invalid-feedback">{{ $errors->first('terms') }}</span>
                                                <span class="text-danger validation-class"
                                                    id="terms-register_errors"></span>
                                            </div>

                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input mt-0" id="terms2"
                                                    name="terms2">
                                                <label class="form-check-label" for="terms2">I AGREE TO RECEIVE
                                                    MARKETING EMAILS FROM LXRY.</label>
                                            </div>



                                            <div class="registerForm-btnSection mt-3">
                                                <button type="submit"
                                                    class="btn btn-primary mt-3 btn-register">Register</button>
                                            </div>
                                        </form>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Body Content-->
        <!--Scoll Top-->
        <span id="site-scroll"><i class="icon anm anm-angle-up-r"></i></span>
        <!--End Scoll Top-->

        <!--Quick View popup-->
        <div class="modal fade quick-view-popup" id="content_quickview">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div id="ProductSection-product-template" class="product-template__container prstyle1">
                            <div class="product-single">
                                <!-- Start model close -->
                                <a href="javascript:void()" data-dismiss="modal" class="model-close-btn pull-right"
                                    title="close"><span class="icon icon anm anm-times-l"></span></a>
                                <!-- End model close -->
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="product-details-img">
                                            <div class="pl-20">
                                                <img src="assets/images/product-detail-page/camelia-reversible-big1.jpg"
                                                    alt />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="product-single__meta">
                                            <h2 class="product-single__title">Product
                                                Quick View Popup</h2>
                                            <div class="prInfoRow">
                                                <div class="product-stock">
                                                    <span class="instock ">In
                                                        Stock</span> <span class="outstock hide">Unavailable</span>
                                                </div>
                                                <div class="product-sku">SKU:
                                                    <span class="variant-sku">19115-rdxs</span>
                                                </div>
                                            </div>
                                            <p class="product-single__price product-single__price-product-template">
                                                <span class="visually-hidden">Regular
                                                    price</span>
                                                <s id="ComparePrice-product-template"><span
                                                        class="money">$600.00</span></s>
                                                <span
                                                    class="product-price__price product-price__price-product-template product-price__sale product-price__sale--single">
                                                    <span id="ProductPrice-product-template"><span
                                                            class="money">$500.00</span></span>
                                                </span>
                                            </p>
                                            <div class="product-single__description rte">
                                                Belle Multipurpose Bootstrap
                                                4 Html Template that will
                                                give you and your customers
                                                a smooth shopping experience
                                                which can be used for
                                                various kinds of stores such
                                                as fashion,...
                                            </div>

                                            <form method="post" action="http://annimexweb.com/cart/add"
                                                id="product_form_10508262282" accept-charset="UTF-8"
                                                class="product-form product-form-product-template hidedropdown"
                                                enctype="multipart/form-data">
                                                <div class="swatch clearfix swatch-0 option1" data-option-index="0">
                                                    <div class="product-form__item">
                                                        <label class="header">Color:
                                                            <span class="slVariant">Red</span></label>
                                                        <div data-value="Red" class="swatch-element color red available">
                                                            <input class="swatchInput" id="swatch-0-red" type="radio"
                                                                name="option-0" value="Red">
                                                            <label class="swatchLbl color medium rectangle"
                                                                for="swatch-0-red"
                                                                style="background-image:url(assets/images/product-detail-page/variant1-1.jpg);"
                                                                title="Red"></label>
                                                        </div>
                                                        <div data-value="Blue"
                                                            class="swatch-element color blue available">
                                                            <input class="swatchInput" id="swatch-0-blue" type="radio"
                                                                name="option-0" value="Blue">
                                                            <label class="swatchLbl color medium rectangle"
                                                                for="swatch-0-blue"
                                                                style="background-image:url(assets/images/product-detail-page/variant1-2.jpg);"
                                                                title="Blue"></label>
                                                        </div>
                                                        <div data-value="Green"
                                                            class="swatch-element color green available">
                                                            <input class="swatchInput" id="swatch-0-green" type="radio"
                                                                name="option-0" value="Green">
                                                            <label class="swatchLbl color medium rectangle"
                                                                for="swatch-0-green"
                                                                style="background-image:url(assets/images/product-detail-page/variant1-3.jpg);"
                                                                title="Green"></label>
                                                        </div>
                                                        <div data-value="Gray"
                                                            class="swatch-element color gray available">
                                                            <input class="swatchInput" id="swatch-0-gray" type="radio"
                                                                name="option-0" value="Gray">
                                                            <label class="swatchLbl color medium rectangle"
                                                                for="swatch-0-gray"
                                                                style="background-image:url(assets/images/product-detail-page/variant1-4.jpg);"
                                                                title="Gray"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swatch clearfix swatch-1 option2" data-option-index="1">
                                                    <div class="product-form__item">
                                                        <label class="header">Size:
                                                            <span class="slVariant">XS</span></label>
                                                        <div data-value="XS" class="swatch-element xs available">
                                                            <input class="swatchInput" id="swatch-1-xs" type="radio"
                                                                name="option-1" value="XS">
                                                            <label class="swatchLbl medium rectangle" for="swatch-1-xs"
                                                                title="XS">XS</label>
                                                        </div>
                                                        <div data-value="S" class="swatch-element s available">
                                                            <input class="swatchInput" id="swatch-1-s" type="radio"
                                                                name="option-1" value="S">
                                                            <label class="swatchLbl medium rectangle" for="swatch-1-s"
                                                                title="S">S</label>
                                                        </div>
                                                        <div data-value="M" class="swatch-element m available">
                                                            <input class="swatchInput" id="swatch-1-m" type="radio"
                                                                name="option-1" value="M">
                                                            <label class="swatchLbl medium rectangle" for="swatch-1-m"
                                                                title="M">M</label>
                                                        </div>
                                                        <div data-value="L" class="swatch-element l available">
                                                            <input class="swatchInput" id="swatch-1-l" type="radio"
                                                                name="option-1" value="L">
                                                            <label class="swatchLbl medium rectangle" for="swatch-1-l"
                                                                title="L">L</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Product Action -->
                                                <div class="product-action clearfix">
                                                    <div class="product-form__item--quantity">
                                                        <div class="wrapQtyBtn">
                                                            <div class="qtyField">
                                                                <a class="qtyBtn minus" href="javascript:void(0);"><i
                                                                        class="fa anm anm-minus-r"
                                                                        aria-hidden="true"></i></a>
                                                                <input type="text" id="Quantity" name="quantity"
                                                                    value="1" class="product-form__input qty">
                                                                <a class="qtyBtn plus" href="javascript:void(0);"><i
                                                                        class="fa anm anm-plus-r"
                                                                        aria-hidden="true"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-form__item--submit">
                                                        <button type="button" name="add"
                                                            class="btn product-form__cart-submit">
                                                            <span>Add to
                                                                cart</span>
                                                        </button>
                                                    </div>
                                                </div>
                                                <!-- End Product Action -->
                                            </form>
                                            <div class="display-table shareRow">
                                                <div class="display-table-cell">
                                                    <div class="wishlist-btn">
                                                        <a class="wishlist add-to-wishlist" href="#"
                                                            title="Add to Wishlist"><i class="icon anm anm-heart-l"
                                                                aria-hidden="true"></i>
                                                            <span>Add to
                                                                Wishlist</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--End-product-single-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Quick View popup-->

        <!-- Newsletter Popup -->
        <div class="newsletter-wrap" id="popup-container">
            <div id="popup-window">
                <a class="btn closepopup"><i class="icon icon anm anm-times-l"></i></a>
                <!-- Modal content-->
                <div class="display-table splash-bg">
                    <div class="display-table-cell width40"><img src="assets/images/newsletter-img.jpg"
                            alt="Join Our Mailing List" title="Join Our Mailing List" /> </div>
                    <div class="display-table-cell width60 text-center">
                        <div class="newsletter-left">
                            <h2>Join Our Mailing List</h2>
                            <p>Sign Up for our exclusive email list and be
                                the first to know about new products and
                                special offers</p>
                            <form action="#" method="post">
                                <div class="input-group">
                                    <input type="email" class="input-group__field newsletter__input" name="EMAIL"
                                        value placeholder="Email address" required>
                                    <span class="input-group__btn">
                                        <button type="submit" class="btn newsletter__submit" name="commit"
                                            id="subscribeBtn">
                                            <span class="newsletter__submit-text--large">Subscribe</span>
                                        </button>
                                    </span>
                                </div>
                            </form>
                            <ul class="list--inline site-footer__social-icons social-icons">
                                <li><a class="social-icons__link" href="#" title="Facebook"><i
                                            class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
                                <li><a class="social-icons__link" href="#" title="Twitter"><i
                                            class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a class="social-icons__link" href="#" title="Pinterest"><i
                                            class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                <li><a class="social-icons__link" href="#" title="Instagram"><i
                                            class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                <li><a class="social-icons__link" href="#" title="YouTube"><i
                                            class="fa fa-youtube" aria-hidden="true"></i></a></li>
                                <li><a class="social-icons__link" href="#" title="Vimeo"><i class="fa fa-vimeo"
                                            aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Newsletter Popup -->
@endsection
@section('js')
    <!-- Including Jquery -->
    <script src="{{ asset('assets/js/vendor/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/modernizr-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery.cookie.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/wow.min.js') }}"></script>
    <!-- Including Javascript -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/lazysizes.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <!--Instagram Js-->
    <script src="{{ asset('assets/js/vendor/jquery.instagramFeed.min.js') }}"></script>

    <script>
        (function($) {
            $(window).on('load', function() {
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
    <!--End Instagram Js-->
    <!--For Newsletter Popup-->
    <script>
        jQuery(document).ready(function() {
            jQuery('.closepopup').on('click', function() {
                jQuery('#popup-container').fadeOut();
                jQuery('#modalOverly').fadeOut();
            });
            $('#togglePassword').on('click', function() {
                const passwordField = $('#loginPassword');
                const type = passwordField.attr('type') === 'password' ? 'text' : 'password';
                passwordField.attr('type', type);
                $(this).toggleClass('fa-eye fa-eye-slash');
            });

            var visits = jQuery.cookie('visits') || 0;
            visits++;
            jQuery.cookie('visits', visits, {
                expires: 1,
                path: '/'
            });
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

        jQuery(document).mouseup(function(e) {
            var container = jQuery('#popup-container');
            if (!container.is(e.target) && container.has(e.target).length === 0) {
                container.fadeOut();
                jQuery('#modalOverly').fadeIn(200);
                jQuery('#modalOverly').hide();
            }
        });

        /*--------------------------------------
            Promotion / Notification Cookie Bar 
        -------------------------------------- */
        if (Cookies.get('promotion') != 'true') {
            $(".notification-bar").show();
        }
        $(".close-announcement").on('click', function() {
            $(".notification-bar").slideUp();
            Cookies.set('promotion', 'true', {
                expires: 1
            });
            return false;
        });
    </script>

    <!-- <script>
        let map;

        function initMap() {
            map = new google.maps.Map(document.getElementById('map'), {
                center: {
                    lat: 26.7980,
                    lng: 75.8193
                }, // Default center
                zoom: 8,
            });

            const marker = new google.maps.Marker({
                position: {
                    lat: 26.7980,
                    lng: 75.8193
                }, // Default marker position
                map: map,
                draggable: true,
            });

            google.maps.event.addListener(marker, 'dragend', function(event) {
                const lat = event.latLng.lat();
                const lng = event.latLng.lng();
                $("#lantitude").val(lat);
                $("#longitude").val(lng);

            });
        }
    </script> -->



    <!--End For Newsletter Popup-->


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    {{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8wm2FBG5yR1sxWxhOYfZ-Hii45dAk5tQ&callback=initMap" async
        defer></script> --}}

        
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8wm2FBG5yR1sxWxhOYfZ-Hii45dAk5tQ&callback=initMap&libraries=places" async
        defer></script>

    <!-- Register Form Validation and Fillters -->


    <script>
        $(document).ready(function() {

            $('#registerForm').on('submit', function(e) {
                e.preventDefault(); // Prevent the default form submission
                var $form = $('#registerForm');
                var url = $form.attr('action');
                var formData = new FormData($form[0]);
                $('.validation-class').html('');
                $.ajax({
                    // url: "{{ url('/api/users/login') }}",
                    url: url,
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    beforeSend: function() {
                        $('.spinner-loader').css('display', 'block');
                    },
                    success: function(res) {
                        // location.reload();
                        window.location.href = res;
                    },
                    error: function(res) {
                        if (res.status == 400 || res.status == 422) {
                            if (res.responseJSON && res.responseJSON.errors) {
                                var error = res.responseJSON.errors
                                $.each(error, function(key, value) {
                                    $("#" + key + "-register_errors").text(value[0]);
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

            $('#loginForm').on('submit', function(e) {
                e.preventDefault(); // Prevent the default form submission
                var $form = $('#loginForm');
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
                        // location.reload();
                        window.location.href = res;
                    },
                    error: function(res) {
                        if (res.status == 400 || res.status == 422) {
                            if (res.responseJSON && res.responseJSON.errors) {
                                var error = res.responseJSON.errors
                                $.each(error, function(key, value) {
                                    $("#" + key + "-login_errors").text(value[0]);
                                });
                            }
                        }
                    }
                });
            });
        });
    </script>

    <script>
        let map;
        let marker;
        let placesService;
        let geocoder; // Declare geocoder

        function initMap() {
            const defaultLocation = {
                lat: 26.7980,
                lng: 75.8193
            }; // Default center

            // Initialize the map
            map = new google.maps.Map(document.getElementById('map'), {
                center: defaultLocation,
                zoom: 8,
            });

            // Initialize the draggable marker
            marker = new google.maps.Marker({
                position: defaultLocation,
                map: map,
                draggable: true,
            });

            // Initialize geocoder for reverse geocoding
            geocoder = new google.maps.Geocoder();

            // Listen for the marker being dragged and dropped
            google.maps.event.addListener(marker, 'dragend', function(event) {
                const lat = event.latLng.lat();
                const lng = event.latLng.lng();
                $("#lantitude").val(lat);
                $("#longitude").val(lng);

                // Reverse geocode to get address from lat/lng
                geocodeLatLng(lat, lng);
            });

            // Initialize PlacesService for getting place details
            placesService = new google.maps.places.PlacesService(map);

            // Initialize Places Autocomplete Service and bind to input
            const input = document.getElementById('google_address_id');
            const autocompleteService = new google.maps.places.AutocompleteService();

            // Listen to input changes to provide custom autocomplete
            input.addEventListener('input', function() {
                const query = this.value;
                if (query.length > 0) {
                    autocompleteService.getPlacePredictions({ input: query }, displaySuggestions);
                }
            });
        }

        // Function to display suggestions in a custom div
        function displaySuggestions(predictions, status) {
            const resultsContainer = document.getElementById('autocomplete-results');
            resultsContainer.innerHTML = ''; // Clear previous results

            if (status !== google.maps.places.PlacesServiceStatus.OK || !predictions) {
                resultsContainer.innerHTML = '<p>No results found</p>';
                return;
            }

            // Display each prediction
            predictions.forEach((prediction) => {
                const div = document.createElement('div');
                div.textContent = prediction.description;
                div.classList.add('suggestion-item');

                // Click handler for the suggestion
                div.addEventListener('click', function() {
                    selectPlace(prediction);
                });

                resultsContainer.appendChild(div);
            });
        }

        // Function to handle place selection
        function selectPlace(prediction) {
            // Use PlacesService to get details about the selected place
            placesService.getDetails({ placeId: prediction.place_id }, function(place, status) {
                if (status === google.maps.places.PlacesServiceStatus.OK && place) {
                    const location = place.geometry.location;

                    // Update the map center and marker position
                    map.setCenter(location);
                    map.setZoom(14); // Zoom in to the selected location
                    marker.setPosition(location);

                    // Update the latitude, longitude, and full address fields
                    $("#lantitude").val(location.lat());
                    $("#longitude").val(location.lng());
                    $("#google_address_id").val(place.formatted_address); // Set the full formatted address

                    // Clear the suggestions list
                    document.getElementById('autocomplete-results').innerHTML = '';
                }
            });
        }

        // Function to reverse geocode latitude and longitude to an address
        function geocodeLatLng(lat, lng) {
            const latlng = { lat: lat, lng: lng };
            geocoder.geocode({ location: latlng }, function(results, status) {
                if (status === 'OK') {
                    if (results[0]) {
                        const address = results[0].formatted_address;
                        $("#google_address_id").val(address); // Update address input with the full address
                    } else {
                        alert('No results found');
                    }
                } else {
                    alert('Geocoder failed due to: ' + status);
                }
            });
        }
    </script>

@endsection
</div>
