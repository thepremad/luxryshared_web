@extends('frontend.layouts.app')
@section('content')
        <div id="page-content">
            <div class="container-fluid cart-checkOut confirmation">
                <div class="row my-5 align-items-md-start">
                    <!-- Col-lg-9 -->
                    <div class="col-lg-8 col-md-8 col-sm-12">

                        <div class="row justify-content-start">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12 text-center mb-3">
                                <img src="{{asset('assets/images/icons/check.png')}}" alt="" class="img-fluid mb-4">
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12 text-center mb-3">
                                <h2 class="text-center mb-4">Your Order is Confirmed</h2>
                            </div>
                            <div class="row justify-content-center mb-3">
                                <button class="btn btn-lg mb-4">Message Lender</button>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12 text-center mb-3">
                                <p class="text-center">LUXRY Shared Refer a friend & Earn some credit towards your next purchase.</p>
                            </div>
                        </div>


                    </div>
        
                    <!-- Col-lg-3 -->
                    <div class="col-lg-4 col-md-4 col-sm-12 col-12 me-sm-5 mt-3 mt-sm-0">
                        <div class="order-summary">
                            <h6>Order Summary</h6>
                            <div class="order-item">
                                <div class="row">
                                    <div class="col-4 col-sm-3 col-md-2 p-0">
                                        <img src="{{asset('assets/images/products/Rectangle 741.png')}}" alt="Product Image" class="img-fluid">
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
                                        <img src="{{asset('assets/images/products/Rectangle 741.png')}}" alt="Product Image" class="img-fluid">
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
                                        <img src="{{asset('assets/images/products/Rectangle 741.png')}}" alt="Product Image" class="img-fluid">
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
                            <!-- Repeat above block for each product -->
        
                            <div class="subtotal mt-3">
                                <h6>Subtotal (3 items)</h6>
                                <span>$513.00</span>
                            </div>
                            <div class="savings mt-2">
                                <h6>Savings</h6>
                                <span>-$30.00</span>
                            </div>
                            <div class="shipping mt-2">
                                <h6>Shipping</h6>
                                <span>$5.00</span>
                            </div>
                            <div class="total mt-2">
                                <h6>Total</h6>
                                <span>$478.00</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        


            <!-- Start Footer -->
            <footer id="footer" class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-12 footer-column" id="footer-col1">
                            <h4 class="footerLinks-heading">Sign up to our newsletter</h4>
                            <p>Sign up to our newsletter and receive exclusive news, offers, and discounts:</p>
                            <form action="" class="footer-subscriber">
                                <input type="email" class="form-control" placeholder="Enter Your Email">
                            </form>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-4 footer-column" id="footer-col2">
                            <h4 class="footerLinks-heading">Your Community</h4>
                            <ul class="footer-links" id="commuityLink-1">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Community</a></li>
                                <li><a href="#">Sustainability</a></li>
                                <li><a href="#">Blog</a></li>
                            </ul>
                            <ul class="footer-links" id="commuityLink-2">
                                <li><a href="#">LXRY Shared APP</a></li>
                                <li><a href="#">Discount Codes</a></li>
                                <li><a href="#">Partnerships</a></li>
                                <li><a href="#">Press</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-4 footer-column" id="footer-col3">
                            <h4 class="footerLinks-heading">Customer Service</h4>
                            <ul class="footer-links" id="commuityLink-3">
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">FAQ’s</a></li>
                                <li><a href="#">Delivery & Returns</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-4 footer-column" id="footer-col4">
                            <h4 class="footerLinks-heading">Legal</h4>
                            <ul class="footer-links" id="commuityLink-4">
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Terms of Service</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-12 footer-column" id="footer-col5">
                            <h4 class="footerLinks-heading">Keep Sharing</h4>
                            <ul class="footer-links" id="socialLinks">
                                <li><a href="#" target="_blank"><img src="{{asset('assets/images/social-icon/instagram.png')}}"
                                            alt="Instagram"></a></li>
                                <li><a href="#" target="_blank"><img src="{{asset('assets/images/social-icon/facebook.png')}}"
                                            alt="Facebook"></a></li>
                                <li><a href="#" target="_blank"><img src="{{asset('assets/images/social-icon/twitter.png')}}"
                                            alt="Twitter"></a></li>
                                <li><a href="#" target="_blank"><img src="{{asset('assets/images/social-icon/Pintraste.png')}}"
                                            alt="Pinterest"></a></li>
                                <li><a href="#" target="_blank"><img src="{{asset('assets/images/social-icon/tiktok.png')}}"
                                            alt="TikTok"></a></li>
                                <li><a href="#" target="_blank"><img src="{{asset('assets/images/social-icon/youtube.png')}}"
                                            alt="YouTube"></a></li>
                            </ul>
                            <h4 class="footerLinks-heading" id="footerLinks-heading2">Download Our App</h4>
                            <ul id="application-link">
                                <li><a href="#" target="_blank"><img src="{{asset('assets/images/social-icon/image 36.png')}}"
                                            alt="App Download"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="row copyrigt-row">
                        <p>Copyright © 2021 <a href="#">LXRY Shared</a>. All Rights Reserved. Created by CreateME</p>
                    </div>
                </div>
            </footer>
            <!-- End Footer -->


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
                                                    <img src="{{asset('assets/images/product-detail-page/camelia-reversible-big1.jpg')}}"
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
                                                            <div data-value="Red"
                                                                class="swatch-element color red available">
                                                                <input class="swatchInput" id="swatch-0-red"
                                                                    type="radio" name="option-0" value="Red">
                                                                <label class="swatchLbl color medium rectangle"
                                                                    for="swatch-0-red"
                                                                    style="background-image:url(assets/images/product-detail-page/variant1-1.jpg')}});"
                                                                    title="Red"></label>
                                                            </div>
                                                            <div data-value="Blue"
                                                                class="swatch-element color blue available">
                                                                <input class="swatchInput" id="swatch-0-blue"
                                                                    type="radio" name="option-0" value="Blue">
                                                                <label class="swatchLbl color medium rectangle"
                                                                    for="swatch-0-blue"
                                                                    style="background-image:url(assets/images/product-detail-page/variant1-2.jpg')}});"
                                                                    title="Blue"></label>
                                                            </div>
                                                            <div data-value="Green"
                                                                class="swatch-element color green available">
                                                                <input class="swatchInput" id="swatch-0-green"
                                                                    type="radio" name="option-0" value="Green">
                                                                <label class="swatchLbl color medium rectangle"
                                                                    for="swatch-0-green"
                                                                    style="background-image:url(assets/images/product-detail-page/variant1-3.jpg')}});"
                                                                    title="Green"></label>
                                                            </div>
                                                            <div data-value="Gray"
                                                                class="swatch-element color gray available">
                                                                <input class="swatchInput" id="swatch-0-gray"
                                                                    type="radio" name="option-0" value="Gray">
                                                                <label class="swatchLbl color medium rectangle"
                                                                    for="swatch-0-gray"
                                                                    style="background-image:url(assets/images/product-detail-page/variant1-4.jpg')}});"
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
                                                                <label class="swatchLbl medium rectangle"
                                                                    for="swatch-1-xs" title="XS">XS</label>
                                                            </div>
                                                            <div data-value="S" class="swatch-element s available">
                                                                <input class="swatchInput" id="swatch-1-s" type="radio"
                                                                    name="option-1" value="S">
                                                                <label class="swatchLbl medium rectangle"
                                                                    for="swatch-1-s" title="S">S</label>
                                                            </div>
                                                            <div data-value="M" class="swatch-element m available">
                                                                <input class="swatchInput" id="swatch-1-m" type="radio"
                                                                    name="option-1" value="M">
                                                                <label class="swatchLbl medium rectangle"
                                                                    for="swatch-1-m" title="M">M</label>
                                                            </div>
                                                            <div data-value="L" class="swatch-element l available">
                                                                <input class="swatchInput" id="swatch-1-l" type="radio"
                                                                    name="option-1" value="L">
                                                                <label class="swatchLbl medium rectangle"
                                                                    for="swatch-1-l" title="L">L</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Product Action -->
                                                    <div class="product-action clearfix">
                                                        <div class="product-form__item--quantity">
                                                            <div class="wrapQtyBtn">
                                                                <div class="qtyField">
                                                                    <a class="qtyBtn minus"
                                                                        href="javascript:void(0);"><i
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
                        <div class="display-table-cell width40"><img src="{{asset('assets/images/newsletter-img.jpg')}}"
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
                                    <li><a class="social-icons__link" href="#" title="Twitter"><i class="fa fa-twitter"
                                                aria-hidden="true"></i></a></li>
                                    <li><a class="social-icons__link" href="#" title="Pinterest"><i
                                                class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                    <li><a class="social-icons__link" href="#" title="Instagram"><i
                                                class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                    <li><a class="social-icons__link" href="#" title="YouTube"><i class="fa fa-youtube"
                                                aria-hidden="true"></i></a></li>
                                    <li><a class="social-icons__link" href="#" title="Vimeo"><i class="fa fa-vimeo"
                                                aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Newsletter Popup -->

            <!-- Including Jquery -->
            <script src="{{asset('assets/js/vendor/jquery-3.3.1.min.js')}}"></script>
            <script src="{{asset('assets/js/vendor/modernizr-3.6.0.min.js')}}"></script>
            <script src="{{asset('assets/js/vendor/jquery.cookie.js')}}"></script>
            <script src="{{asset('assets/js/vendor/wow.min.js')}}"></script>
            <!-- Including Javascript -->
            <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
            <script src="{{asset('assets/js/plugins.js')}}"></script>
            <script src="{{asset('assets/js/popper.min.js')}}"></script>
            <script src="{{asset('assets/js/lazysizes.js')}}"></script>
            <script src="{{asset('assets/js/main.js')}}"></script>
            <!--Instagram Js-->
            <script src="{{asset('assets/js/vendor/jquery.instagramFeed.min.js"></script>
            <!-- Swiper JS CDN -->
            <script src="https://cdn.jsdelivr.net/npm/swiper@latest/swiper-bundle.min.js"></script>
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
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


        </div>
</body>
@endsection

