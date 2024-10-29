@extends('frontend.layouts.app')
@section('content')

<style>
    #preview img {
        max-width: 50px;
        max-height: 50px;
        margin: 10px;
    }

    .listItem-section .switch.form-group {
    position: relative;
}

.check-box-label {
    display: flex;
    align-items: center;
}

.listItem-section .switch.form-group input[type="checkbox"] {
    display: none; /* Hide the default checkbox */
}

.check-box-label input {
    margin-right: 10px;
}

.listItem-section .switch.form-group label {
    display: flex;
    align-items: center;
    cursor: pointer;
    padding: 10px;
    background-color: #f8f8f8;
    border-radius: 20px;
    transition: background-color 0.3s;
    padding-left: 70px;
}

.listItem-section .switch.form-group .slider {
    width: 40px;
    height: 20px;
    background-color: #f8f8f8;
    border-radius: 20px;
    position: relative;
    margin-left: 10px;
    box-shadow: 0 0 2px rgba(0, 0, 0, 0.2);
    transition: background-color 0.3s;
    position: absolute;
    left: 0;
}

.listItem-section .switch.form-group .slider:before {
    content: '';
    width: 16px;
    height: 16px;
    background: white;
    border-radius: 50%;
    position: absolute;
    top: 2px;
    left: 2px;
    transition: transform 0.3s;
}

.listItem-section .switch.form-group input[type="checkbox"]:checked + label .slider {
    background-color: #4caf50; /* Green background when checked */
}

.listItem-section .switch.form-group input[type="checkbox"]:checked + label .slider:before {
    transform: translateX(20px); /* Move slider when checked */
}

#additional-deposit-group {
    display: none; /* Initially hide the additional deposit group */
}

.listItem-section .row .step-form .form-group.row {
    margin: 20px 0 30px;
}

.container-fluid .row, .container-fluid .container {
    width: 100%;
    max-width: 1347px;
    margin: 0 auto;
    box-sizing: border-box;
}

.listItem-section .row .step-form p {
    font-family: 'poppins', sans-serif;
    font-size: 18px;
    line-height: 1.3;
    color: #383838;
    margin-bottom: 30px;
}

.btn-secondary.active {
    background-color: #007bff; /* Change this to your desired color */
    color: white; /* Change text color if needed */
    border-color: #007bff; /* Match border color to background */
}

.info-icon {
    display: inline-block;
    background-color: black;
    color: white;
    border-radius: 50%;
    width: 20px;
    height: 20px;
    text-align: center;
    line-height: 20px;
    cursor: pointer;
    margin-left: 5px;
    position: absolute;
    right: 40px;
    top: 57%;
}

.info-icon a{
    color: white;
}

.info-icon.update{
    right: 25px;
} 

.info-tooltip {
    display: none;
    position: absolute;
    background-color: black;
    color: white;
    padding: 5px;
    border-radius: 5px;
    z-index: 1000;
    white-space: wrap;
    right: -290px;
    top: 41px;
    width: 100%;
}

.info-icon:hover + .info-tooltip,
.info-icon:focus + .info-tooltip {
    display: block;
}

.form-group{
    position: relative;
}

.listItem-section .row .form-group a {
    font-family: 'poppins', sans-serif;
    font-size: 1.125rem;
    line-height: 1.3;
    color: #383838;
    margin-bottom: 0.5rem;
    width: 100%;
    text-decoration: underline;
}

.info-tooltip.img{
    background: #e1e1e1;
    right: -285px;
    width: auto !important;
    padding: 10px 20px;
}

.info-tooltip.img img{
    width: 250px;
    height: 250px;
    object-fit: contain;
}

#size-guide{
    cursor: pointer;
    color: #4a3838;
    float: right;
    font-size: 13px;
    text-decoration: underline;
}

.info-icon.img4{
    left: 230px;
    top: 0%;
}

@media (max-width: 1100px) {
    .info-icon.img4{
        left: 190px;
    }
}

@media (max-width: 481px) {
    .info-icon.img4{
        right: 0px;
        left: unset;
    }
}

@media (max-width: 360px) {
    .info-icon.img4{
        left: 170px;
    }
}

</style>
    <!--Body Content-->
    <div id="page-content" class="listingProduct">
        <div class="container-fluid">
            <div class="listItem-section">
                <div class="row justify-content-center">
                    <div class="col-lg-9 col-md-9 col-sm-9 col-9">
                        <form id="item_save_form" action="{{ route('save_item') }}" method="post"
                            enctype="multipart/form-data">
                            <!-- Step 1 -->
                            @csrf
                            <div class="step-form active" id="step-1">
                                <h2 class="text-center">List an Item</h2>
                                <h4 class="text-center">ITEM DETAILS</h4>

                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="category">Category</label>
                                        <select name="category_id" id="moku" onchange="getSubCateogry(this)"
                                            class="form-control">
                                            <option value="">(Select Category) </option>
                                            @foreach ($category as $val)
                                                <option value="{{ $val->id }}">{{ $val->name }}</option>
                                            @endforeach
                                        </select>
                                        <span class="text text-danger">{{ $errors->first('category_id') }}</span>
                                        <span class="text-danger validation-class" id="category_id-submit_errors"></span>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="sub-category">Sub Category</label>
                                        <select name="sub_category_id" id="toku" class="form-control">
                                            <option value=""> (Select Sub - Category) </option>
                                        </select>
                                        <span class="text text-danger">{{ $errors->first('sub_category_id') }}</span>
                                        <span class="text-danger validation-class" id="sub_category_id-submit_errors"></span>
                                    </div>
                                    
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6 mb-2">
                                        <label for="brand">Brand 
                                            <span class="info-icon" data-toggle="tooltip" data-html="true" title="If your brand isn’t listed, <a href='mailto:info@lxryshared.com'>email us</a> to add it to our list." style="cursor: pointer;">
                                                ?
                                            </span>
                                        </label>
                                        <select id="brand" name="brand_id" class="form-control">
                                            @foreach ($brand as $val)
                                                <option value="{{ $val->id }}">{{ $val->name }}</option>
                                            @endforeach
                                        </select>
                                        <span class="text text-danger">{{ $errors->first('brand_id') }}</span>
                                        <span class="text-danger validation-class" id="brand_id-submit_errors"></span>
                                    </div>
                                    

                                    <div class="col-md-6 mb-2">
                                        <label for="brand">Occasion</label>
                                        <select id="brand" name="occasion_id" class="form-control">
                                            <option value="">(Select Occasion)</option>
                                            @foreach ($occasions as $val)
                                                <option value="{{ $val->id }}">{{ $val->name }}</option>
                                                <!-- Add options here -->
                                            @endforeach
                                        </select>
                                        <span class="text text-danger">{{ $errors->first('occasion_id') }}</span>
                                        <span class="text-danger validation-class" id="occasion_id-submit_errors"></span>
                                    </div>
                                    
                                </div>


                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <label for="item-title">Item Title</label>
                                        <input type="text" name="item_title" class="form-control" id="item-title"
                                            placeholder="Enter Item Title">
                                        <span class="text-danger validation-class" id="item_title-submit_errors"></span>
                                    </div>
                                </div>

                                <input type="hidden" value="1" id="step_id" name="step">


                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="color">Colour</label>
                                        <select id="color" name="color_id" class="form-control">
                                            @foreach ($color as $val)
                                                <option value="{{ $val->id }}">{{ $val->name }}</option>
                                                <!-- Add options here -->
                                            @endforeach
                                            <span class="text text-danger">{{ $errors->first('color_id') }}</span>
                                            <span class="text-danger validation-class" id="color_id-submit_errors"></span>
                                        </select>
                                    </div>
                                    <div class="col-md-6 row-half-width">
                                        <div>
                                            <label for="size">Size <span id="size-guide" data-toggle="modal" data-target="#sizeModal">Size Guide</span></label>
                                            <select id="size" name="size_id" class="form-control" aria-required="true">
                                                @foreach ($size as $val)
                                                    <option value="{{ $val->id }}">{{ $val->name }}</option>
                                                @endforeach
                                            </select>
                                            <span class="text text-danger">{{ $errors->first('size_id') }}</span>
                                            <span class="text-danger validation-class" id="size_id-submit_errors"></span>
                                        </div>

                                        <!-- Modal -->
                                        <div class="modal fade" id="sizeModal" tabindex="-1" role="dialog" aria-labelledby="sizeModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="sizeModalLabel">Size Guide</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <img src="{{ url('public/assets/images/icons/size-chart.jpeg') }}" alt="Size chart" class="img-fluid">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>


                                <div class="form-group row align-items-start">


                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="imgInp">Upload Main Image for your Item <span>*</span> 
                                                <div class="custom-file-upload mt-3" id="main-image-container">
                                                    <div class="upload-button">
                                                        <img src="{{ asset('./assets/images/icons/cloud.png') }}" alt="" for="" class="">
                                                    </div>
                                                </div>
                                            </label>
                                            <input type="file" name="mainImag" class="form-control" id="imgInp" accept="image/*">     
                                            <span class="text-danger validation-class" id="mainImag-submit_errors"></span>
                                            <span class="text text-danger">{{ $errors->first('mainImag') }}</span>
                                        </div>
        
                                        <div id="mainImagePreview"></div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="multiple_image_file_input">Upload Upto 4 Images: <span>*</span>
                                            <span class="info-icon img4" data-toggle="tooltip" data-html="true" style="cursor: pointer;" data-bs-original-title="Upload at least one more image to improve your chances of rental or resale.   ">
                                                ?
                                            </span>
                                                <div class="custom-file-upload mt-3" id="additional-images-container">
                                                    <div class="upload-button">
                                                        <img src="{{ asset('./assets/images/icons/cloud.png') }}" alt="">
                                                    </div>
                                                </div>
                                            </label>
                                            


                                            <input type="file" name="images[]" class="form-control" id="multiple_image_file_input" accept="image/*" multiple>
                                            <span class="text-danger validation-class" id="images-submit_errors"></span>
                                            <p class="error" id="errorMsg"></p>
                                            <span class="text text-danger">{{ $errors->first('images[]') }}</span>
                                        </div>
                                        
                                        <div id="additionalImagePreview"></div> <!-- Additional Images Preview -->
                                    </div>


                                    
                                </div>




                                <div class="form-group">
                                    <label for="description">Item Description <span>*</span></label>
                                    <textarea class="form-control" name="image_description" id="description" rows="5"
                                        placeholder="Describe your item and include fitting notes eg. perfect sizing, or item comes longer in length"></textarea>
                                        <span class="text-danger validation-class" id="image_description-submit_errors"></span>
                                </div>
                                <span class="text text-danger">{{ $errors->first('image_description') }}</span>
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
                                        <label for="rrp-price">RRP Price</label>
                                        <input type="text" name="rrp_price" class="form-control" id="rrp-price" onchange="ChangerRpInput()">
                                        <span class="text-danger validation-class" id="rrp_price-submit_errors"></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="day-price">Suggested Day Price</label>
                                        <input type="text" name="suggested_day_price" class="form-control" id="day-price" onchange="rrpInput()">
                                        <span class="text-danger validation-class" id="suggested_day_price-submit_errors"></span>
                                        <span class="info-icon" tabindex="0">?</span>
                                        <div class="info-tooltip">This suggested price is based on our algorithm, designed to maximize your rentals using data from similar items.</div>
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
                                        <span class="info-icon" tabindex="0">?</span>
                                        <div class="info-tooltip">Security (For added security we recommend a 10% markup on rare items.)</div>
                                    </div>
                                </div>


                                <a href="#" class="d-block">PRICES & INCOME</a>
                                <p>Our pricing algorithm recommends rental rates based on the retail price. With a lower daily rate for longer rentals, your engagement increases, leading to higher earnings for lenders.
                                </p>
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
                                                    {{-- <span class="text-danger validation-class" id="fourDaysPrice-submit_errors"></span> --}}
                                                </div>
                                            </button>
                                            <button type="button" class="btn btn-secondary btn-sm">
                                                <div class="plan-heading" id="">
                                                    <h5>7-29 Days</h5>
                                                    <input type="hidden" name="sevenToTwentyNineDayPrice"
                                                        class="form-control" id="7--29day">
                                                    <p><span id="7-29day"></span> AED/day</p>
                                                    {{-- <span class="text-danger validation-class" id="sevenToTwentyNineDayPrice-submit_errors"></span> --}}
                                                </div>
                                            </button>
                                            <button type="button" class="btn btn-secondary btn-sm">
                                                <div class="plan-heading" id="30+day">
                                                    <h5>30+ Days</h5>
                                                    <input type="hidden" name="thirtyPlusDayPrice" class="form-control"
                                                        id="30--day">
                                                    <p><span id="30-day"></span> AED/day</p>
                                                    <input type="hidden" name="buy" value="false">
                                                    {{-- <span class="text-danger validation-class" id="thirtyPlusDayPrice-submit_errors"></span> --}}
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

                                
                                <div class="form-group">
                                    <a href="#" style="text-decoration: underline">BUY NOW</a>
                                </div>


                                <div class="form-group check-box-label switch">
                                    <input type="checkbox" id="enable-purchase" name="buy" value="true">
                                    <label for="enable-purchase">
                                        <span id="label-text">ENABLE THIS OPTION, IF YOUR PRODUCT IS AVAILABLE FOR PURCHASE.</span>
                                        <span class="slider"></span> <!-- Slider span -->
                                    </label>
                                </div>

                                <div class="form-group" id="additional-deposit-group" style="display: none;">
                                    <div class="form-group row">
                                        <div class="col-md-6">
                                            <p>Size:</p>
                                            <p id="selected-size">L</p>
                                        </div>
                                        <div class="col-md-6">
                                            <p>Price:</p>
                                            <p>
                                                <input type="text" name="buy_price" class="form-control" placeholder="AED">
                                                <span class="text-danger validation-class" id="buy_price-submit_errors"></span>
                                            </p>
                                        </div>
                                    </div>
                                </div>


                                


                                <div class="button-container">
                                    <button type="button" class="btn btn-secondary"
                                        onclick="prevStep(2)">Previous</button>
                                    <button type="submit" class="btn btn-primary">Next</button>
                                </div>
                            </div>


                            <!-- Step 3 -->
                            <div class="step-form" id="step-3">
                                <div class="success-img text-center">
                                    <img src="{{asset("assets/images/icons/check.png")}}" alt="" class="img-fluid mb-3">
                                </div>
                                <h2 class="text-center">Your item has been uploaded successfully.</h2>
                                <h3 class="text-center">Your item will be live after approval from LXRY Shared Admin</h3>                               
                                <div class="text-center">
                                    <a href="{{ route('home') }}" class="btn btn-primary" >Back to Home</a>
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
                                                        <label class="swatchLbl color medium rectangle"
                                                            for="swatch-0-blue"
                                                            style="background-image:url(assets/images/product-detail-page/variant1-2.jpg);"
                                                            title="Blue"></label>
                                                    </div>
                                                    <div data-value="Green" class="swatch-element color green available">
                                                        <input class="swatchInput" id="swatch-0-green" type="radio"
                                                            name="option-0" value="Green">
                                                        <label class="swatchLbl color medium rectangle"
                                                            for="swatch-0-green"
                                                            style="background-image:url(assets/images/product-detail-page/variant1-3.jpg);"
                                                            title="Green"></label>
                                                    </div>
                                                    <div data-value="Gray" class="swatch-element color gray available">
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
                                                                    class="fa anm anm-minus-r" aria-hidden="true"></i></a>
                                                            <input type="text" id="Quantity" name="quantity"
                                                                value="1" class="product-form__input qty">
                                                            <a class="qtyBtn plus" href="javascript:void(0);"><i
                                                                    class="fa anm anm-plus-r" aria-hidden="true"></i></a>
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
    <!-- Including Jquery -->
    
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
    <!--End For Newsletter Popup-->

    {{-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> --}}
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
                var selectElement = document.getElementById('size');
                var selectedOption = selectElement.options[selectElement.selectedIndex].text;
                // console.log(selectedOption);

                document.getElementById('selected-size').textContent = selectedOption;
            }
        }

        function nextStep(step) {
            $(document).ready(function() {
                $('#pre-loader').show();
            // $('#loginForm').on('submit', function(e) {
                // e.preventDefault(); // Prevent the default form submission
                var $form = $('#item_save_form');
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
                        $('#pre-loader').hide();
                        showStep(step + 1);
                        $('#step_id').val(2);
                    },
                    error: function(res) {
                        $('#pre-loader').hide();
                        if (res.status == 400 || res.status == 422) {
                            if (res.responseJSON && res.responseJSON.errors) {
                                var error = res.responseJSON.errors
                                $.each(error, function(key, value) {
                                    $("#" + key + "-submit_errors").text(value[0]);
                                });
                            }
                        }
                    }
                });
            // });
            });

            
        }

        function prevStep(step) {
            $('#step_id').val(1);
            showStep(step - 1);
        }

        function goToStep1() {
            $('#step_id').val(1);
            showStep(1);
        }

        document.getElementById('enable-purchase').addEventListener('change', function(event) {
            const additionalDepositGroup = document.getElementById('additional-deposit-group');
            const labelText = document.getElementById('label-text');

            if (event.target.checked) {
                additionalDepositGroup.style.display = 'block';  // Show additional deposit group
                labelText.textContent = 'YOU CAN NOW SELL YOUR PRODUCT';  // Update label text
            } else {
                additionalDepositGroup.style.display = 'none';  // Hide additional deposit group
                labelText.textContent = 'ENABLE THIS OPTION, IF YOUR PRODUCT IS AVAILABLE FOR PURCHASE.';  // Reset label text
            }
        });




        showStep(currentStep); // Show initial step
    </script>

    <script>
        function getSubCateogry(data) {
            let subCateogry = {!! json_encode($subCategory) !!};
            $('#toku').empty();
            subCateogry.forEach(item => {

                if (item.category_id == data.value) {
                    var newRow = '<option value="' + item.id + '">' + item.name + '</option>';
                    $('#toku').append(newRow);
                }
            });

        }


        function ChangerRpInput(){
            let price = $('#rrp-price').val();
            dayprice = (price * 0.03).toFixed(2);
            $('#day-price').val(dayprice);

            rrpInput();
        }

        function rrpInput() {

            
            let price = $('#rrp-price').val();
            let dayprice = $('#day-price').val();

            if (!dayprice) {
                dayprice = (price * 0.03).toFixed(2);
            }

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


<script>
    function previewImages(input, previewDivId) {
        const previewDiv = document.getElementById(previewDivId);
        previewDiv.innerHTML = ''; // Clear any existing images

        const files = input.files;
        Array.from(files).forEach(file => {
            const reader = new FileReader();
            reader.onload = function(e) {
                const img = document.createElement('img');
                img.src = e.target.result;
                img.style.width = '100px'; // Adjust size as needed
                img.style.margin = '5px';
                previewDiv.appendChild(img);
            }
            reader.readAsDataURL(file);
        });
    }

    document.getElementById('imgInp').addEventListener('change', function(event) {
        previewImages(event.target, 'mainImagePreview');
    });

    document.getElementById('multiple_image_file_input').addEventListener('change', function(event) {
        previewImages(event.target, 'additionalImagePreview');
    });
</script>



<script>
    $(document).ready(function() {

    $('#item_save_form').on('submit', function(e) {
        $('#pre-loader').show();
        e.preventDefault(); // Prevent the default form submission
        var $form = $('#item_save_form');
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
                $('#pre-loader').hide();
                showStep(3);
                
                // window.location.href = res;
                // showStep(step + 1);
                // $('#step_id').val(2);

            },
            error: function(res) {
                $('#pre-loader').hide();
                if (res.status == 400 || res.status == 422) {
                    if (res.responseJSON && res.responseJSON.errors) {
                        var error = res.responseJSON.errors
                        $.each(error, function(key, value) {
                            $("#" + key + "-submit_errors").text(value[0]);
                        });
                    }
                }
            }
        });
    });
});
</script>


<script>
    document.querySelectorAll('.btn-secondary').forEach(button => {
    button.addEventListener('click', function() {
        // Remove active class from all buttons
        document.querySelectorAll('.btn-secondary').forEach(btn => {
            btn.classList.remove('active');
        });
        // Add active class to the clicked button
        this.classList.add('active');
    });
});
</script>

<script>
    $(function () {
        $('.info-icon').tooltip({
            html: true,  
            delay: { "show": 500, "hide": 1000 } 
        });
    });
</script>

@endsection
