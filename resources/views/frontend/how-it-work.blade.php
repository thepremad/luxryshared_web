@extends('frontend.layouts.app')
 @section('content')
<!-- Body Content -->
<div id="page-content">
    <!-- Collection Banner -->
    <div class="collection-header">
        <div class="collection-hero"></div>
    </div>
    <!-- End Collection Banner -->

    <div class="container-fluid how-it-work">
        <div class="row mt-5 align-items-start">
            <!-- Community Section -->
            <div class="section community">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-xl-3 col-lg-4 col-md-5 col-sm-6 p-0">
                            <div class="text-center">
                                <button class="btn btn-link toggle-button bg-green" data-target="how-it-works">
                                    HOW TO RENT
                                </button>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-5 col-sm-6 p-0">
                            <div class="text-center">
                                <button class="btn btn-link toggle-button bg-cream" data-target="how-to-lead">
                                    HOW TO LEND
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="content-container align-content-center mt-4">
                        <div id="how-it-works" class="content-item active">
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <img src="{{asset('/assets/images/parallax-banners/Potrait-fashion-photo-980x662 1.png')}}" alt="How to Rent" class="img-fluid">
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <h2>RENTING MADE EASY</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea.</p>
                                </div>
                            </div>
                        </div>
                        <div id="how-to-lead" class="content-item">
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <img src="{{asset('/assets/images/parallax-banners/Potrait-fashion-photo-980x662 1.png')}}" alt="How to Lend" class="img-fluid">
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <h2>How to Lend</h2>
                                    <p>This is the content for COMMUNITY.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Community -->

            <!-- Benefits Section -->
            <div class="section benefits mt-5">
                <div class="container-fluid">
                    <h3 class="text-center mb-5">BENEFITS OF RENTING</h3>
                    <div class="row py-5 px-5">
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                            <h4>MODEST PRICE TAGS</h4>
                            <p>Get the best designer clothes at a fraction of their MRP.</p>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                            <h4>FASHION FREEDOM</h4>
                            <p>Explore fashion and styles with the best designer clothes.</p>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                            <h4>BEST QUALITY</h4>
                            <p>Experience quality that makes you feel royal.</p>
                        </div>
                    </div>
                    <div class="row justify-content-center align-content-center pb-5">
                        <button class="btn btn-md">Start Renting</button>
                    </div>
                </div>
            </div>
            <!-- End Benefits -->

            <!-- How Renting Works Section -->
            <div class="section rating-works">
                <div class="container-fluid">
                    <h3 class="text-center mb-5">HOW RENTING WORKS</h3>
                    <div class="row justify-content-between bg-white">
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 rating-card">
                            <img src="{{asset('/assets/images/parallax-banners/rating-card.png')}}" alt="Step 1" class="img-fluid">
                            <div class="rating-card-content">
                                <p>Filter, browse and scroll our wardrobes, then select the pieces you love.</p>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 rating-card">
                            <img src="{{asset('/assets/images/parallax-banners/rating-card.png')}}" alt="Step 2" class="img-fluid">
                            <div class="rating-card-content">
                                <p>Filter, browse and scroll our wardrobes, then select the pieces you love.</p>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 rating-card">
                            <img src="{{asset('/assets/images/parallax-banners/rating-card.png')}}" alt="Step 3" class="img-fluid">
                            <div class="rating-card-content">
                                <p>Return the rental package in its original packaging and condition.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center align-content-center pb-5 mt-5 bg-white">
                        <button class="btn btn-md">Start Renting</button>
                    </div>
                </div>
            </div>
            <!-- End Rating Works -->
        </div>
    </div>
</div>
<!-- End Body Content -->





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
                                                    alt="" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="product-single__meta">
                                            <h2 class="product-single__title">
                                                Product Quick View Popup
                                            </h2>
                                            <div class="prInfoRow">
                                                <div class="product-stock">
                                                    <span class="instock">In Stock</span>
                                                    <span class="outstock hide">Unavailable</span>
                                                </div>
                                                <div class="product-sku">
                                                    SKU: <span class="variant-sku">19115-rdxs</span>
                                                </div>
                                            </div>
                                            <p class="product-single__price product-single__price-product-template">
                                                <span class="visually-hidden">Regular price</span>
                                                <s id="ComparePrice-product-template"><span
                                                        class="money">$600.00</span></s>
                                                <span
                                                    class="product-price__price product-price__price-product-template product-price__sale product-price__sale--single">
                                                    <span id="ProductPrice-product-template"><span
                                                            class="money">$500.00</span></span>
                                                </span>
                                            </p>
                                            <div class="product-single__description rte">
                                                Belle Multipurpose Bootstrap 4 Html Template that will
                                                give you and your customers a smooth shopping
                                                experience which can be used for various kinds of
                                                stores such as fashion,...
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
                                                            <input class="swatchInput" id="swatch-0-red" type="radio"
                                                                name="option-0" value="Red" />
                                                            <label class="swatchLbl color medium rectangle"
                                                                for="swatch-0-red" style="
                                    background-image: url(assets/images/product-detail-page/variant1-1.jpg')}});
                                  " title="Red"></label>
                                                        </div>
                                                        <div data-value="Blue"
                                                            class="swatch-element color blue available">
                                                            <input class="swatchInput" id="swatch-0-blue" type="radio"
                                                                name="option-0" value="Blue" />
                                                            <label class="swatchLbl color medium rectangle"
                                                                for="swatch-0-blue" style="
                                    background-image: url(assets/images/product-detail-page/variant1-2.jpg')}});
                                  " title="Blue"></label>
                                                        </div>
                                                        <div data-value="Green"
                                                            class="swatch-element color green available">
                                                            <input class="swatchInput" id="swatch-0-green" type="radio"
                                                                name="option-0" value="Green" />
                                                            <label class="swatchLbl color medium rectangle"
                                                                for="swatch-0-green" style="
                                    background-image: url(assets/images/product-detail-page/variant1-3.jpg')}});
                                  " title="Green"></label>
                                                        </div>
                                                        <div data-value="Gray"
                                                            class="swatch-element color gray available">
                                                            <input class="swatchInput" id="swatch-0-gray" type="radio"
                                                                name="option-0" value="Gray" />
                                                            <label class="swatchLbl color medium rectangle"
                                                                for="swatch-0-gray" style="
                                    background-image: url(assets/images/product-detail-page/variant1-4.jpg')}});
                                  " title="Gray"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swatch clearfix swatch-1 option2" data-option-index="1">
                                                    <div class="product-form__item">
                                                        <label class="header">Size: <span
                                                                class="slVariant">XS</span></label>
                                                        <div data-value="XS" class="swatch-element xs available">
                                                            <input class="swatchInput" id="swatch-1-xs" type="radio"
                                                                name="option-1" value="XS" />
                                                            <label class="swatchLbl medium rectangle" for="swatch-1-xs"
                                                                title="XS">XS</label>
                                                        </div>
                                                        <div data-value="S" class="swatch-element s available">
                                                            <input class="swatchInput" id="swatch-1-s" type="radio"
                                                                name="option-1" value="S" />
                                                            <label class="swatchLbl medium rectangle" for="swatch-1-s"
                                                                title="S">S</label>
                                                        </div>
                                                        <div data-value="M" class="swatch-element m available">
                                                            <input class="swatchInput" id="swatch-1-m" type="radio"
                                                                name="option-1" value="M" />
                                                            <label class="swatchLbl medium rectangle" for="swatch-1-m"
                                                                title="M">M</label>
                                                        </div>
                                                        <div data-value="L" class="swatch-element l available">
                                                            <input class="swatchInput" id="swatch-1-l" type="radio"
                                                                name="option-1" value="L" />
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
                                                                    value="1" class="product-form__input qty" />
                                                                <a class="qtyBtn plus" href="javascript:void(0);"><i
                                                                        class="fa anm anm-plus-r"
                                                                        aria-hidden="true"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-form__item--submit">
                                                        <button type="button" name="add"
                                                            class="btn product-form__cart-submit">
                                                            <span>Add to cart</span>
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
                                                            <span>Add to Wishlist</span></a>
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

        <!-- Including Jquery -->
        <script src="{{asset('assets/js/vendor/jquery-3.3.1.min.js')}}"></script>
        <script src="{{asset('assets/js/vendor/jquery.cookie.js')}}"></script>
        <script src="{{asset('assets/js/vendor/modernizr-3.6.0.min.js')}}"></script>
        <script src="{{asset('assets/js/vendor/wow.min.js')}}"></script>
        <!-- Including Javascript -->
        <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('assets/js/plugins.js')}}"></script>
        <script src="{{asset('assets/js/popper.min.js')}}"></script>
        <script src="{{asset('assets/js/lazysizes.js')}}"></script>
        <script src="{{asset('assets/js/main.js')}}"></script>
        

        <script>
            $(function() {
                $("#slider-range").slider({
                    range: true,
                    min: 0,
                    max: 100000,
                    values: [0, 100000],
                    slide: function(event, ui) {
                        $("#min-price").val(ui.values[0]);
                        $("#max-price").val(ui.values[1]);
                    }
                });
            
                // Initialize input fields with slider values
                $("#min-price").val($("#slider-range").slider("values", 0));
                $("#max-price").val($("#slider-range").slider("values", 1));
            });
        </script>

        <script>
            document.querySelectorAll('.toggle-button').forEach(button => {
                button.addEventListener('click', function() {
                    const target = this.getAttribute('data-target');
                    
                    document.querySelectorAll('.content-item').forEach(item => {
                        item.classList.remove('active');
                    });
                    document.getElementById(target).classList.add('active');

                    // Update button styles
                    document.querySelectorAll('.toggle-button').forEach(btn => {
                        btn.classList.remove('bg-green');
                        btn.classList.add('bg-cream');
                    });

                    this.classList.remove('bg-cream');
                    this.classList.add('bg-green');
                });
            });

            document.addEventListener('DOMContentLoaded', () => {
                document.querySelector('.toggle-button[data-target="how-it-works"]').click();
            });
        </script>
    </div>
@endsection