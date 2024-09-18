@extends('frontend.layouts.app')
@section('content')
 <!--Body Content-->
 <div id="page-content" class="listingProduct">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-md-10 col-sm-10 col-12">
                <div id="multiStepForm">
                    <!-- Step 1 -->
                    <div class="step active" id="step1">
                        <div class="form-header">
                            <h2>List an Item</h2>
                            <h4>ITEM DETAILS</h4>
                        </div>
                        <div class="form-content">
                            <form>
                                <div class="form-row justify-content-between">
                                    <div class="form-group col-md-6">
                                        <label for="category">Category</label>
                                        <select id="category" class="form-control">
                                            <option>Select Category</option>
                                            <!-- Add your options here -->
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="subCategory">Sub Category</label>
                                        <select id="subCategory" class="form-control">
                                            <option>Select Sub-Category</option>
                                            <!-- Add your options here -->
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="brand">Brand</label>
                                        <select id="brand" class="form-control">
                                            <option>Select Brand</option>
                                            <!-- Add your options here -->
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="itemTitle">Item Title</label>
                                        <input type="text" id="itemTitle" class="form-control"
                                            placeholder="Enter Item Name">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="color">Color</label>
                                        <select id="color" class="form-control">
                                            <option>Select Color</option>
                                            <option value="#FF5733" style="background-color: #FF5733;">Color 1
                                            </option>
                                            <option value="#33FF57" style="background-color: #33FF57;">Color 2
                                            </option>
                                            <option value="#5733FF" style="background-color: #5733FF;">Color 3
                                            </option>
                                            <!-- Add more colors as needed -->
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="size">Size</label>
                                        <div class="d-flex">
                                            <select id="size" class="form-control">
                                                <option>Select Size</option>
                                                <!-- Add your options here -->
                                            </select>
                                            <div class="tooltip ml-2">
                                                <i class="fas fa-question-circle"></i>
                                                <span class="tooltiptext">Size Information</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6 img-Imput">
                                        <label for="mainImage">Upload Main Image for your Item
                                            <span>*</span></label>
                                        <div class="upload-box">
                                            <div class="upload-icon">
                                                <i class="fas fa-upload"></i>
                                            </div>
                                            <input type="file" id="mainImage" accept="image/*" required>
                                        </div>
                                        <a href="#" class="img-suggestion">Image Suggestion</a>
                                    </div>
                                    <div class="form-group col-md-6 img-Imput">
                                        <label for="itemImages">Upload 4 More Item Images <span>*</span></label>
                                        <div class="upload-box">
                                            <div class="upload-icon">
                                                <i class="fas fa-upload"></i>
                                            </div>
                                            <input type="file" id="itemImages" accept="image/*" multiple
                                                required>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="itemDescription">Item Description <span>*</span></label>
                                        <textarea id="itemDescription" class="form-control"
                                            placeholder="Describe your item and include fitting notes e.g., perfect sizing, or item comes longer in length"
                                            required></textarea>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-primary"
                                    onclick="nextStep(2)">Next</button>
                            </form>
                        </div>
                    </div>

                    <!-- Step 2 -->
                    <div class="step" id="step2">
                        <div class="form-header">
                            <h2>List an Item</h2>
                            <h4>PRICE DETAILS</h4>
                        </div>
                        <div class="form-content">
                            <form>
                                <div class="form-row justify-content-between">
                                    <div class="form-group col-md-6">
                                        <label for="price">PRICE</label>
                                        <input type="number" id="price" class="form-control" placeholder="AED">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="dayPrice">Day Price</label>
                                        <input type="number" id="dayPrice" class="form-control"
                                            placeholder="AED">
                                    </div>
                                    <div class="form-group col-md-6" id="suggestedPriceContainer">
                                        <label for="suggestedPrice">Suggested Price</label>
                                        <input type="number" id="suggestedPrice" class="form-control"
                                            placeholder="AED">
                                        <div class="tooltip ml-2">
                                            <i class="fas fa-question-circle"></i>
                                            <span class="tooltiptext">Suggested Price Information</span>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="securityDeposit">Security Deposit (optional)</label>
                                        <input type="number" id="securityDeposit" class="form-control"
                                            placeholder="AED">
                                        <div class="tooltip ml-2">
                                            <i class="fas fa-question-circle"></i>
                                            <span class="tooltiptext">Security Deposit Information</span>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <h5><a href="">PRICES & INCOME</a></h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                            eiusmod
                                            tempor
                                            incididunt ut labore et dolore magna aliqua.</p>
                                    </div>
                                    <div class="form-group col-md-12 rent-plan">
                                        <label>RENT PRICE</label>
                                        <div class="btn-group btn-group-toggle d-flex" data-toggle="buttons">
                                            <label class="btn btn-outline-primary flex-fill">
                                                <input type="radio" name="rentPrice" autocomplete="off"> <span
                                                    class="price-text">4 Days</span><br><span
                                                    class="currency-text">AED</span>
                                            </label>
                                            <label class="btn btn-outline-primary flex-fill">
                                                <input type="radio" name="rentPrice" autocomplete="off"> <span
                                                    class="price-text">7-29 Days</span><br><span
                                                    class="currency-text">AED</span>
                                            </label>
                                            <label class="btn btn-outline-primary flex-fill">
                                                <input type="radio" name="rentPrice" autocomplete="off"> <span
                                                    class="price-text">30+</span><br><span
                                                    class="currency-text">AED</span>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="form-group col-md-12 rent-plan">
                                        <label>YOUR EARNINGS</label>
                                        <div class="btn-group btn-group-toggle d-flex" data-toggle="buttons">
                                            <label class="btn btn-outline-primary flex-fill">
                                                <input type="radio" name="earnings" autocomplete="off"> 4
                                                Days<br>AED
                                            </label>
                                            <label class="btn btn-outline-primary flex-fill">
                                                <input type="radio" name="earnings" autocomplete="off"> 7-29
                                                Days<br>AED
                                            </label>
                                            <label class="btn btn-outline-primary flex-fill">
                                                <input type="radio" name="earnings" autocomplete="off">
                                                30+<br>AED
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-12 check-buyNow">
                                        <label for="buyNow" class="form-check-label">
                                            <input type="checkbox" id="buyNow" class="form-check-input"
                                                onclick="toggleSellOptions()">
                                            <span id="checkBox-btn"><i></i></span>
                                        </label>
                                        <span>ENABLE THIS OPTION, IF YOUR PRODUCT IS AVAILABLE FOR PURCHASE.
                                        </span>
                                        <p id="returnPolicy" class="mt-2" style="display: none;">It's up to you
                                            to
                                            specify
                                            your
                                            return policy, however we suggest doing so in the item description.
                                            You are
                                            bound by
                                            law to provide a return and refund if an item is not as represented.
                                            Therefore,
                                            kindly make sure that your images and description are up to date and
                                            include
                                            any
                                            wear or damage.</p>
                                        <div id="additionalDetails" style="display: none;">
                                            <div class="buyAdditionalHeading">
                                                <h6><a href="#">Size</a></h6>
                                                <h6><a href="#">PRICE</a></h6>
                                            </div>
                                            <div class="buyAdditionalTxt">
                                                <p><a href="">UK 4</a></p>
                                                <p>AED</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-primary"
                                    onclick="nextStep(3)">Next</button>
                                <button type="button" class="btn btn-secondary btn-previous"
                                    onclick="previousStep(1)">Previous</button>
                            </form>
                        </div>
                    </div>

                    <!-- Step 3 -->
                    <div class="step" id="step3">
                        <div class="form-header">
                            <img src="{{ asset('./assets/images/icons/check.png')}}" alt="">
                            <h2>Your Item has been uploaded successfully.</h2>
                            <h3>Your Item will be LIVE upon approval from LXRY Shared admin.</h3>
                        </div>
                        <div class="text-center">
                            <a href="#" class="btn btn-primary" onclick="showStep(1)">Back to Home</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

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
                                            <img src="{{ asset('assets/images/product-detail-page/camelia-reversible-big1.jpg')}}"
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
                                                            style="background-image:url(assets/images/product-detail-page/variant1-1.jpg);"
                                                            title="Red"></label>
                                                    </div>
                                                    <div data-value="Blue"
                                                        class="swatch-element color blue available">
                                                        <input class="swatchInput" id="swatch-0-blue"
                                                            type="radio" name="option-0" value="Blue">
                                                        <label class="swatchLbl color medium rectangle"
                                                            for="swatch-0-blue"
                                                            style="background-image:url(assets/images/product-detail-page/variant1-2.jpg);"
                                                            title="Blue"></label>
                                                    </div>
                                                    <div data-value="Green"
                                                        class="swatch-element color green available">
                                                        <input class="swatchInput" id="swatch-0-green"
                                                            type="radio" name="option-0" value="Green">
                                                        <label class="swatchLbl color medium rectangle"
                                                            for="swatch-0-green"
                                                            style="background-image:url(assets/images/product-detail-page/variant1-3.jpg);"
                                                            title="Green"></label>
                                                    </div>
                                                    <div data-value="Gray"
                                                        class="swatch-element color gray available">
                                                        <input class="swatchInput" id="swatch-0-gray"
                                                            type="radio" name="option-0" value="Gray">
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
                <div class="display-table-cell width40"><img src="{{ asset('assets/images/newsletter-img.jpg')}}"
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

@endsection
@section('js')
<script src="{{ asset('assets/js/vendor/jquery-3.3.1.min.js')}}"></script>
            <script src="{{ asset('assets/js/vendor/modernizr-3.6.0.min.js')}}"></script>
            <script src="{{ asset('assets/js/vendor/jquery.cookie.js')}}"></script>
            <script src="{{ asset('assets/js/vendor/wow.min.js')}}"></script>
            <!-- Including Javascript -->
            <script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
            <script src="{{ asset('assets/js/plugins.js')}}"></script>
            <script src="{{ asset('assets/js/popper.min.js')}}"></script>
            <script src="{{ asset('assets/js/lazysizes.js')}}"></script>
            <script src="{{ asset('assets/js/main.js')}}"></script>
            <!--Instagram Js-->
            <script src="{{ asset('assets/js/vendor/jquery.instagramFeed.min.js')}}"></script>
            <!-- Swiper JS CDN -->
            <script src="https://cdn.jsdelivr.net/npm/swiper@latest/swiper-bundle.min.js"></script>
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script>
    let currentStep = 1;

    function showStep(step) {
        document.querySelectorAll('.step').forEach(el => el.classList.remove('active'));
        document.getElementById(`step${step}`).classList.add('active');
        currentStep = step;
    }

    function nextStep(step) {
        showStep(step);
    }

    function previousStep(step) {
        showStep(step);
    }

    function toggleSellOptions() {
        const isChecked = document.getElementById('buyNow').checked;
        document.getElementById('suggestedPriceContainer').style.display = isChecked ? 'block' : 'none';
        document.getElementById('returnPolicy').style.display = isChecked ? 'block' : 'none';
        document.getElementById('additionalDetails').style.display = isChecked ? 'block' : 'none';
    }

    // Initialize form with the first step
    showStep(1);
</script>
@endsection