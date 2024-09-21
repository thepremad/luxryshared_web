@extends('frontend.layouts.app')
@section('content')
<!--Body Content-->
<div id="page-content">
    <div class="container-fluid">
        <div class="listItem-section">
            <div class="row justify-content-center">
                <div class="col-lg-9 col-md-9 col-sm-9 col-9">
                    <form id="multi-step-form" action="{{route('save_item')}}" method="post">
                        <!-- Step 1 -->
                        @csrf
                        <div class="step-form active" id="step-1">
                            <h2 class="text-center">List an Item</h2>
                            <h4 class="text-center">ITEM DETAILS</h4>
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="category">Category</label>
                                    <select name="category_id" id="moku" onchange="getSubCateogry(this)" class="form-control">
                                    <option value=""></option>
                                        @foreach($category as $val)
                                    
                                            <option value="{{$val->id}}">{{ $val->name }}</option>
                                        @endforeach
                                    </select>
                                    <span class="text text-danger" >{{ $errors->first('category_id') }}</span>
                                </div>
                                <div class="col-md-6">
                                    <label for="sub-category">Sub Category</label>
                                    <select name="sub_category_id" id="toku" class="form-control">
                                        <!-- Add options here -->
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="brand">Brand</label>
                                    <select id="brand" name="brand_id" class="form-control">
                                        @foreach ($brand as $val)
                                            <option value="{{$val->id}}">{{ $val->name }}</option>
                                            <!-- Add options here -->
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="item-title">Item Title</label>
                                    <input type="text" name="item_title" class="form-control" id="item-title"
                                        placeholder="Enter Item Name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="color">Color</label>
                                    <select id="color" name="color_id" class="form-control">
                                        @foreach ($color as $val)

                                            <option value="{{$val->id}}">{{ $val->name}}</option>
                                            <!-- Add options here -->
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-6 row-half-width">
                                    <div>
                                        <label for="size">Size</label>
                                        <select id="size" name="size_id" class="form-control">
                                            @foreach ($size as $val)

                                                <option value="{{$val->id}}">{{$val->name}}</option>
                                                <!-- Add options here -->
                                            @endforeach
                                        </select>
                                        <!-- <i class="fas fa-question-circle info-icon"></i> -->
                                        <div class="info-tooltip">Size description goes here.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="main-image">Upload Main Image for your Item <span>*</span> </label>
                                        <div class="custom-file-upload" id="main-image-container">
                                            <div class="upload-button">
                                                <img src="{{ asset('./assets/images/icons/cloud.png') }}" alt="">
                                            </div>
                                            <input type="file" name="mainImag" class="custom-file-input" id="imgInp"
                                                accept="image/*">
                                        </div>
                                        <img style="width:50px" id="blah" src="#" alt="your image" />
                                    </div>
                                    <script>
                                        imgInp.onchange = evt => {
                                            const [file] = imgInp.files
                                            if (file) {
                                                blah.src = URL.createObjectURL(file)
                                            }
                                        }
                                    </script>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="additional-images">Upload 4 More Item Images: <span>*</span></label>
                                        <div class="custom-file-upload" id="additional-images-container">
                                            <div class="upload-button">
                                                <img src="{{ asset('./assets/images/icons/cloud.png') }}" alt="">
                                            </div>
                                            <input type="file" class="custom-file-input" id="additional-images"
                                                accept="image/*" multiple>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="description">Item Description <span>*</span></label>
                                <textarea class="form-control" name="image_description" id="description" rows="5"
                                    placeholder="Describe your item and include fitting notes eg. perfect sizing, or item comes longer in length"></textarea>
                            </div>
                            <div class="button-container">
                                <button type="button" class="btn btn-primary" onclick="nextStep(1)">Next</button>
                            </div>
                        </div>

                        <!-- Step 2 -->
                        <div class="step-form" id="step-2">
                            <h2 class="text-center">List an Item</h2>
                            <h4 class="text-center">PRICE DETAILS</h4>
                            <div class="form-group row row-half-width">
                                <div class="form-group">
                                    <label for="rrp-price">RRP PRICE</label>
                                    <input type="number" name="rrp_price" class="form-control" id="rrp-price"
                                        onInput="rrpInput(this)">
                                </div>
                                <div class="form-group">
                                    <label for="day-price">Day Price</label>
                                    <input type="number" name="suggested_day_price" class="form-control" id="day-price">
                                </div>
                            </div>
                            <div class="form-group row row-half-width" id="additional">
                                <div class="form-group" id="additional-deposit">
                                    <label for="additional-deposit-input">Additional Deposit</label>
                                    <input type="number" class="form-control" id="additional-deposit-input">
                                </div>
                                <div class="form-group">
                                    <label for="security-deposit">Security Deposit (optional)</label>
                                    <input type="number" class="form-control" id="security-deposit">
                                    <!-- <i class="fas fa-question-circle info-icon"></i> -->
                                    <div class="info-tooltip">Security deposit description goes here.</div>
                                </div>
                            </div>
                            <a href="#" class="d-block">PRICES & INCOME</a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua.</p>
                            <div class="price-plans">
                                <div>
                                    <label class="label-rent">Rent Price</label>
                                    <div class="plan-row">
                                        <button type="button" class="btn btn-secondary btn-sm">
                                            <div class="plan-heading">
                                                <h5>4-6 Days</h5>
                                                <input type="hidden" name="fourDaysPrice" class="form-control"
                                                    id="4--6day">
                                                <p><span id="4-6day"></span> AED/day</p>
                                            </div>
                                        </button>
                                        <button type="button" class="btn btn-secondary btn-sm">
                                            <div class="plan-heading" id="">
                                                <h5>7-29 Days</h5>
                                                <input type="hidden" name="sevenToTwentyNineDayPrice"
                                                    class="form-control" id="7--29day">
                                                <p><span id="7-29day"></span> AED/day</p>
                                            </div>
                                        </button>
                                        <button type="button" class="btn btn-secondary btn-sm">
                                            <div class="plan-heading" id="30+day">
                                                <h5>30+ Days</h5>
                                                <input type="hidden" name="thirtyPlusDayPrice" class="form-control"
                                                    id="30--day">
                                                <p><span id="30-day"></span> AED/day</p>
                                                <input type="hidden" name="buy" value="false">
                                            </div>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="earnings-plans">
                                <div>
                                    <label class="label-rent">Your Earning</label>
                                    <div class="plan-row">
                                        <button type="button" class="btn btn-secondary btn-sm">
                                            <div class="plan-heading">
                                                <h5>4 Days</h5>

                                                <p><span id="46day"></span> AED/day</p>
                                            </div>
                                        </button>
                                        <button type="button" class="btn btn-secondary btn-sm">
                                            <div class="plan-heading">
                                                <h5>7-29 Days</h5>

                                                <p><span id="729day"></span> AED/day</p>
                                            </div>
                                        </button>
                                        <button type="button" class="btn btn-secondary btn-sm">
                                            <div class="plan-heading">
                                                <h5>30+ Days</h5>

                                                <p><span id="300day"></span> AED/day</p>
                                            </div>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group check-box-label">
                                <input type="checkbox" id="enable-purchase">
                                <label for="enable-purchase">ENABLE THIS OPTION, IF YOUR PRODUCT IS AVAILABLE FOR
                                    PURCHASE.</label>
                            </div>
                            <div class="form-group" id="additional-deposit-group">
                                <!-- Additional input for security deposit, hidden by default -->
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <p>Size:</p>
                                    <p id="selected-size">Size selected in Step 1</p>
                                </div>
                                <div class="col-md-6">
                                    <p>Price:</p>
                                    <p>AED 100</p>
                                </div>
                            </div>
                            <div class="button-container">
                                <button type="button" class="btn btn-secondary" onclick="prevStep(2)">Previous</button>
                                <button type="submit" class="btn btn-primary">Next</button>
                            </div>
                        </div>


                        <!-- Step 3 -->
                        <div class="step-form" id="step-3">
                            <h1 class="text-center">Your Item is been uploaded successfully.</h1>
                            <h5 class="text-center">Your Item will be LIVE upon approval from LXRY Shared admin</h5>
                            <div class="text-center">
                                <a href="#" class="btn btn-primary" onclick="goToStep1()">Back to Home</a>
                            </div>
                        </div>
                    </form>

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
                                        <img src="{{ asset('assets/images/product-detail-page/camelia-reversible-big1.jpg') }}"
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
                                        <s id="ComparePrice-product-template"><span class="money">$600.00</span></s>
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
                                                    <label class="swatchLbl color medium rectangle" for="swatch-0-red"
                                                        style="background-image:url(assets/images/product-detail-page/variant1-1.jpg);"
                                                        title="Red"></label>
                                                </div>
                                                <div data-value="Blue" class="swatch-element color blue available">
                                                    <input class="swatchInput" id="swatch-0-blue" type="radio"
                                                        name="option-0" value="Blue">
                                                    <label class="swatchLbl color medium rectangle" for="swatch-0-blue"
                                                        style="background-image:url(assets/images/product-detail-page/variant1-2.jpg);"
                                                        title="Blue"></label>
                                                </div>
                                                <div data-value="Green" class="swatch-element color green available">
                                                    <input class="swatchInput" id="swatch-0-green" type="radio"
                                                        name="option-0" value="Green">
                                                    <label class="swatchLbl color medium rectangle" for="swatch-0-green"
                                                        style="background-image:url(assets/images/product-detail-page/variant1-3.jpg);"
                                                        title="Green"></label>
                                                </div>
                                                <div data-value="Gray" class="swatch-element color gray available">
                                                    <input class="swatchInput" id="swatch-0-gray" type="radio"
                                                        name="option-0" value="Gray">
                                                    <label class="swatchLbl color medium rectangle" for="swatch-0-gray"
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
                                                                class="fa anm anm-minus-r" aria-hidden="true"></i></a>
                                                        <input type="text" id="Quantity" name="quantity" value="1"
                                                            class="product-form__input qty">
                                                        <a class="qtyBtn plus" href="javascript:void(0);"><i
                                                                class="fa anm anm-plus-r" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-form__item--submit">
                                                <button type="button" name="add" class="btn product-form__cart-submit">
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
                                                <a class="wishlist add-to-wishlist" href="#" title="Add to Wishlist"><i
                                                        class="icon anm anm-heart-l" aria-hidden="true"></i>
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
            <div class="display-table-cell width40"><img src="{{ asset('assets/images/newsletter-img.jpg') }}"
                    alt="Join Our Mailing List" title="Join Our Mailing List" /> </div>
            <div class="display-table-cell width60 text-center">
                <div class="newsletter-left">
                    <h2>Join Our Mailing List</h2>
                    <p>Sign Up for our exclusive email list and be
                        the first to know about new products and
                        special offers</p>
                    <form action="#" method="post">
                        <div class="input-group">
                            <input type="email" class="input-group__field newsletter__input" name="EMAIL" value
                                placeholder="Email address" required>
                            <span class="input-group__btn">
                                <button type="submit" class="btn newsletter__submit" name="commit" id="subscribeBtn">
                                    <span class="newsletter__submit-text--large">Subscribe</span>
                                </button>
                            </span>
                        </div>
                    </form>
                    <ul class="list--inline site-footer__social-icons social-icons">
                        <li><a class="social-icons__link" href="#" title="Facebook"><i class="fa fa-facebook-official"
                                    aria-hidden="true"></i></a></li>
                        <li><a class="social-icons__link" href="#" title="Twitter"><i class="fa fa-twitter"
                                    aria-hidden="true"></i></a></li>
                        <li><a class="social-icons__link" href="#" title="Pinterest"><i class="fa fa-pinterest"
                                    aria-hidden="true"></i></a></li>
                        <li><a class="social-icons__link" href="#" title="Instagram"><i class="fa fa-instagram"
                                    aria-hidden="true"></i></a></li>
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
<!--End Instagram Js-->
<!--For Newsletter Popup-->
<script>
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
        if (jQuery.cookie('noShowWelcome')) { jQuery('#popup-container').hide(); jQuery('#active-popup').hide(); }
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
      -------------------------------------- */
    if (Cookies.get('promotion') != 'true') {
        $(".notification-bar").show();
    }
    $(".close-announcement").on('click', function () {
        $(".notification-bar").slideUp();
        Cookies.set('promotion', 'true', { expires: 1 });
        return false;
    });
</script>
<!--End For Newsletter Popup-->

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



<script>
    let currentStep = 1;

    function showStep(step) {
        document.querySelectorAll('.step-form').forEach((form, index) => {
            form.classList.toggle('active', index === step - 1);
        });
        currentStep = step;
        if (step === 2) {
            document.getElementById('selected-size').textContent = document.getElementById('size').value;
        }
    }

    function nextStep(step) {
        showStep(step + 1);
    }

    function prevStep(step) {
        showStep(step - 1);
    }

    function goToStep1() {
        showStep(1);
    }


    document.getElementById('main-image-container').addEventListener('click', function () {
        document.getElementById('main-image').click();
    });

    document.getElementById('additional-images-container').addEventListener('click', function () {
        document.getElementById('additional-images').click();
    });

    document.getElementById('main-image').addEventListener('change', function (event) {
        const file = event.target.files[0];
        if (file) {
            if (file.size > 2 * 1024 * 1024) {
                alert('File size should be less than 2MB.');
                event.target.value = '';
            } else if (!file.type.startsWith('image/')) {
                alert('Please upload a valid image file.');
                event.target.value = '';
            }
        }
    });

    document.getElementById('additional-images').addEventListener('change', function (event) {
        const files = event.target.files;
        for (let i = 0; i < files.length; i++) {
            const file = files[i];
            if (file.size > 2 * 1024 * 1024) {
                alert('Each file should be less than 2MB.');
                event.target.value = '';
                break;
            } else if (!file.type.startsWith('image/')) {
                alert('Please upload valid image files only.');
                event.target.value = '';
                break;
            }
        }
    });

    document.getElementById('enable-purchase').addEventListener('change', function (event) {
        const additionalDepositGroup = document.getElementById('additional-deposit-group');
        if (event.target.checked) {
            document.querySelector('#additional-deposit').style.display = 'block';
            document.querySelector('#enable-purchase').nextElementSibling.textContent = 'YOU CAN NOW SELL YOUR PRODUCT';
            additionalDepositGroup.innerHTML = `
                    <div class="form-group">
                        <label for="additional-deposit">Additional Deposit</label>
                        <input type="number" class="form-control" id="additional-deposit">
                    </div>`;
        } else {
            document.querySelector('#additional-deposit').style.display = 'none';
            document.querySelector('#enable-purchase').nextElementSibling.textContent = 'ENABLE THIS OPTION, IF YOUR PRODUCT IS AVAILABLE FOR PURCHASE.';
            additionalDepositGroup.innerHTML = '';
        }
    });

    showStep(currentStep); // Show initial step
</script>

<script>

    function getSubCateogry(data) {
        let subCateogry = {!! json_encode($subCategory) !!};
        subCateogry.forEach(item => {
            $('#toku').empty();
            if (item.category_id == data.value) {
                var newRow = '<option value="' + item.id + '">' + item.name + '</option>';
                $('#toku').append(newRow);
            }
        });

    }

    function rrpInput(data) {
        let price = data.value;
        var dayprice = (price * 0.03).toFixed(2);
        var day7_29price = (dayprice * 0.65).toFixed(2);
        var day30price = (dayprice * 0.40).toFixed(2);
        var daypricecommision = (price * 0.03 * 0.80).toFixed(2);
        var day7_29pricecommision = (dayprice * 0.65 * 0.80).toFixed(2);
        var day30pricecommision = (dayprice * 0.40 * 0.80).toFixed(2);
        $("#day-price").val(dayprice);
        $("#4--6day").val(dayprice);
        $("#4-6day").html(dayprice);
        $("#7--29day").val(day7_29price);
        $("#7-29day").html(day7_29price);
        $("#30--day").val(day30price);
        $("#30-day").html(day30price);

        $("#46day").html(daypricecommision);

        $("#729day").html(day7_29pricecommision);

        $("#300day").html(day30pricecommision);


    }
</script>
@endsection