@extends('frontend.layouts.app')
@section('content')

<style>
    #dateInput,
#depositDateInput {
border: none;
box-shadow: none;
background: #57110c;
font-family: 'proxima nova', sans-serif;
font-size: 16px;
font-weight: 600;
line-height: 1.2;
color: #ffffff;
text-align: left;
}

#dateInput:focus,
#depositDateInput:focus,
#dateInput:hover,
#depositDateInput:hover {
border: none;
box-shadow: none;
}

.product-single .productDetails .d-flex .ms-auto i {
font-size: 22px;
margin-right: 5px;
}

.product-single .productDetails .product-rent-price h4,
.product-single .productDetails .product-sell-price h4,
.product-single .productDetails .productSize-avl,
.product-single .productDetails .product-divider {
font-family: 'proxima nova', sans-serif;
font-size: 16px;
font-weight: 500;
line-height: 1.3;
color: #3C4242;
margin-bottom: 15px !important;
}

.product-single .productDetails .size-options h5 {
font-family: 'proxima nova', sans-serif;
font-size: 16px;
font-weight: 600;
line-height: 1.3;
color: #3C4242;
}

.product-single .productDetails .product-divider {
background-color: #F4C87E;
font-weight: 500;
padding: 10px 0;
}

.product-single .productDetails .plan-outer {
padding: 5px;
border: 1px solid;
}

.product-single .productDetails .plan-outer input {
opacity: 0;
}

.product-single .productDetails #rentNowBtn,
.product-single .productDetails #buyNowBtn {
font-family: 'proxima nova', sans-serif;
font-size: 14px;
font-weight: 500;
line-height: 1.2;
width: 100%;
max-width: 198px;
height: 40px;
border: 1px solid #000000;
}

.product-single .productDetails #rentNowBtn {
background: #000000;
color: #ffffff;
}

.product-single .productDetails #buyNowBtn {
background: #ffffff;
color: #000000;
}

.ui-datepicker .ui-datepicker-month{
display: block !important;
display: flex;
justify-content: center;
align-items: center;
}

.ui-datepicker .ui-datepicker-title{
line-height: 3em !important;
justify-content: center;
}

@media (max-width: 1024px) {
.product-single .productDetails h4,
.product-single .productDetails h5 {
    font-size: 16px;
}

.product-single .productDetails #rentNowBtn,
.product-single .productDetails #buyNowBtn {
    font-size: 14px;
}

.singleProduct .breadcrumb-item {
    font-size: 14px;
}
}

@media (max-width: 768px) {
.product-single .productDetails h4,
.product-single .productDetails h5 {
    font-size: 16px;
}

.product-single .productDetails #rentNowBtn,
.product-single .productDetails #buyNowBtn {
    font-size: 14px;
}

.product-single  .productDetails{
    padding: 20px 30px !important;
}
}

@media (max-width: 576px) {
.product-single .productDetails h4,
.product-single .productDetails h5 {
    font-size: 16px;
}

.product-single .productDetails #rentNowBtn,
.product-single .productDetails #buyNowBtn {
    font-size: 14px;
}
}

@media (max-width: 481px) {
.product-single .productDetails h4,
.product-single .productDetails h5 {
    font-size: 16px;
}

.product-single .productDetails #rentNowBtn,
.product-single .productDetails #buyNowBtn {
    font-size: 14px;
}
}

        .product-divider {
            border-bottom: 1px solid #ddd;
        }
        .plan-outer {
            cursor: pointer;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .plan-outer:hover {
            background-color: #f8f9fa;
        }
        .date-section {
            display: none; /* Initially hidden */
        }
        .selected-range {
            background-color: #d1e7dd !important; /* Light green for selected range */
        }


</style>
<!--Body Content-->
<div id="page-content">
    <!--MainContent-->
    <div id="MainContent" class="main-content py-4" role="main">

        <div id="ProductSection-product-template" class="product-template__container prstyle1 container">
            <!-- product-single -->
            <div class="product-single">
                <div class="row">
                    <div class="col-lg-7 col-md-7 col-sm-12 col-12">
                        <div class="position-relative">
                            <img id="mainImage" src="{{asset('uploads/item/' . $item->mainImag)}}"
                                alt="Main Product Image" class="product-image">                                    
                        </div>
                        <div class="slider">

                            @foreach ($item->itemImage as $val)

                                <img src="{{asset('uploads/item/' . $val->image)}}" alt="Product Image 1"
                                class="slider-image">    

                            @endforeach
                            
                        </div>
                    </div>

                    <div class="col-lg-5 col-md-5 col-sm-12 col-12 productDetails pl-0 px-sm-3 px-md-3">
                        <nav class="breadcrumb">
                            <a class="breadcrumb-item" href="#">Shop</a>
                            <a class="breadcrumb-item" href="#">Women</a>
                            <span class="breadcrumb-item active" aria-current="page">Top</span>
                        </nav>

                        <h1 class="product-single__title">Product Name</h1>

                        <div class="d-flex align-items-center">
                            <h5 class="mb-0">@John Richerd</h5>
                            <div class="ms-auto">
                                <i class="fas fa-star" style="color: #E3C01C;"></i>
                                <i class="fas fa-star" style="color: #E3C01C;"></i>
                                <i class="fas fa-star" style="color: #E3C01C;"></i>
                                <i class="fas fa-star" style="color: #E3C01C;"></i>
                                <i class="fas fa-star" style="color: #E3C01C;"></i>
                            </div>
                        </div>

                        <div class="prInfoRow">
                            <div class="product-rent-price d-block">
                                <h4>50.99 $ / 4 Days</h4>
                            </div>
                            <div class="product-sell-price d-block">
                                <h4>$399.00 BUY NOW</h4>
                            </div>
                        </div>

                        <label for="size" class="form-label productSize-avl">Available Size</label>
                        <div class="size-options mb-3 d-flex justify-content-between">
                            <div class="size-container">
                                <h5>XL</h5>                               
                            </div>
                            <a href="#" class="size-guide-link">Size Guide</a>
                        </div>

                        <label for="rentalPeriod" class="form-label">Rental Period</label>
                        <h3 class="text-center py-4 product-divider">
                            Longer rental means lower daily rates and bigger savings.
                        </h3>

                        <div class="rental-plans mb-3 d-flex justify-content-between py-3">
                            <div class="plan-outer">
                                <input type="radio" id="plan1" name="plan" value="4" class="plan-radio" data-days="4">
                                <label for="plan1" class="plan">
                                    <h5>4 Days</h5>
                                    <h6 class="price">$62.30</h6>
                                    <h6 class="price-per-day">$15.57/day</h6>
                                </label>
                            </div>
                            <div class="plan-outer">
                                <input type="radio" id="plan2" name="plan" value="7" class="plan-radio" data-days="7">
                                <label for="plan2" class="plan">
                                    <h5>7 Days</h5>
                                    <h6 class="price">$85.00</h6>
                                    <h6 class="price-per-day">$12.14/day</h6>
                                </label>
                            </div>
                            <div class="plan-outer">
                                <input type="radio" id="plan3" name="plan" value="10" class="plan-radio" data-days="10">
                                <label for="plan3" class="plan">
                                    <h5>10 Days</h5>
                                    <h6 class="price">$120.00</h6>
                                    <h6 class="price-per-day">$12.00/day</h6>
                                </label>
                            </div>
                            <div class="plan-outer">
                                <input type="radio" id="plan4" name="plan" value="14" class="plan-radio" data-days="14">
                                <label for="plan4" class="plan">
                                    <h5>14 Days</h5>
                                    <h6 class="price">$150.00</h6>
                                    <h6 class="price-per-day">$10.71/day</h6>
                                </label>
                            </div>
                        </div>

                        <!-- New Section for Dates -->
                        <div class="date-section">
                            <h4 class="mt-4">Dates*</h4>
                            <p>Tap to select Start Date, preferably 1-2 days before you plan to wear it.</p>

                            <div class="row py-3">
                                <div class="col-12 mb-3">
                                    <input type="text" id="dateInput" class="form-control" readonly>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-lg-4 col-md-4 col-6">
                                <button class="btn btn-dark btn-block" id="rentNowBtn">RENT NOW</button>
                            </div>
                            <div class="col-lg-4 col-md-4 col-6">
                                <button class="btn btn-light btn-block" id="buyNowBtn">BUY NOW</button>
                            </div>
                        </div>

                        <p id="dateWarning" class="text-danger" style="display:none;">Please select exactly <span id="maxDays"></span> dates.</p>
                    </div>

                    
                    
                    
                </div>
            </div>
        </div>

        <!-- Magnifier Popup -->
        <div id="magnifierPopup" class="magnifier-popup">
            <span class="close-popup" id="closePopup">&times;</span>
            <img id="popupImage" src="" alt="Product Image">
        </div>
        <!--End-product-single-->

        <!-- Start Product Description -->
        <div class="container-fluid productDesc mt-5 mb-4">
            <div class="row justify-content-start">
                <div class="col-lg-6 col-md-6 col-sm-6 col-12 desc-col1">
                    <h4>Product Description</h4>
                     <!-- Nav tabs -->
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="description-tab" data-bs-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">Description</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="reviews-tab" data-bs-toggle="tab" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false">Reviews <span Class="productReview-num">4</span></a>
                            </li>
                        </ul>

                        <!-- Tab content -->
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                                <p>100% Bio-washed Cotton – makes the fabric extra soft & silky. Flexible ribbed crew neck. Precisely stitched with no pilling & no fading. Provide  all-time comfort. Anytime, anywhere. Infinite range of matte-finish HD prints.</p>
                            </div>
                            <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                                <p>100% Bio-washed Cotton – makes the fabric extra soft & silky. Flexible ribbed crew neck. Precisely stitched with no pilling & no fading. Provide  all-time comfort. Anytime, anywhere. Infinite range of matte-finish HD prints.</p>
                            </div>
                        </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-12 desc-col2">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                            <span class="img-outer">
                                <img src="./assets/images/icons/credit card.png" alt="">
                            </span>
                            <h4>Secure payment</h4>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                            <span class="img-outer">
                                <img src="./assets/images/icons/Size & Fit.png" alt="">
                            </span>
                            <h4>Size & Fit</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Product Description -->

        <div class="section collection-box-style1 productDesc mt-3">
            <div class="container-fluid">
                <div class="row justify-content-start">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-12 desc-col1">
                        <h4>Product Description</h4>
                    </div>
                <div class="row">
                    <div class="col-6 col-sm-6 col-md-3 col-lg-3">
                        <div class="collection-grid-item text-center">
                            <a href="collection-page.html" class="collection-grid-item__link">
                                <img data-src="assets/img/Rectangle 26.png" src="assets/img/Rectangle 26.png" alt="Hot" class="blur-up ls-is-cached lazyloaded">
                                <h3 class="mt-4">PARTY WEAR</h3>
                            </a>
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-3 col-lg-3">
                        <div class="collection-grid-item text-center">
                            <a href="collection-page.html" class="collection-grid-item__link">
                                <img data-src="assets/img/Rectangle 26.png" src="assets/img/Rectangle 26.png" alt="Denim" class="blur-up blur-active ls-is-cached lazyloaded">
                                <h3 class="mt-4">EVENING WEAR</h3>
                            </a>
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-3 col-lg-3">
                        <div class="collection-grid-item text-center">
                            <a href="collection-page.html" class="collection-grid-item__link">
                                <img data-src="assets/img/Rectangle 26.png" src="assets/img/Rectangle 26.png" alt="Summer" class="blur-up ls-is-cached lazyloaded">
                                <h3 class="mt-4">BUSINESS</h3>
                            </a>
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-3 col-lg-3">
                        <div class="collection-grid-item text-center">
                            <a href="collection-page.html" class="collection-grid-item__link">
                                <img data-src="assets/img/Rectangle 26.png" src="assets/img/Rectangle 26.png" alt="Summer" class="blur-up ls-is-cached lazyloaded">
                                <h3 class="mt-4">BIRTHDAY</h3>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <!--#ProductSection-product-template-->
</div>


<!--End Body Content-->

<!--End Footer-->
<!--Scoll Top-->
<span id="site-scroll"><i class="icon anm anm-angle-up-r"></i></span>
<!--End Scoll Top-->




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
<!-- Photoswipe Gallery -->
<script src="{{asset('assets/js/vendor/photoswipe.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/photoswipe-ui-default.min.js')}}"></script>



<script>
    $(function () {
        var $pswp = $('.pswp')[0],
            image = [],
            getItems = function () {
                var items = [];
                $('.lightboximages a').each(function () {
                    var $href = $(this).attr('href'),
                        $size = $(this).data('size').split('x'),
                        item = {
                            src: $href,
                            w: $size[0],
                            h: $size[1]
                        }
                    items.push(item);
                });
                return items;
            }
        var items = getItems();

        $.each(items, function (index, value) {
            image[index] = new Image();
            image[index].src = value['src'];
        });
        $('.prlightbox').on('click', function (event) {
            event.preventDefault();

            var $index = $(".active-thumb").parent().attr('data-slick-index');
            $index++;
            $index = $index - 1;

            var options = {
                index: $index,
                bgOpacity: 0.9,
                showHideOpacity: true
            }
            var lightBox = new PhotoSwipe($pswp, PhotoSwipeUI_Default, items, options);
            lightBox.init();
        });
    });
</script>
</div>

<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="pswp__bg"></div>
    <div class="pswp__scroll-wrap">
        <div class="pswp__container">
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
        </div>
        <div class="pswp__ui pswp__ui--hidden">
            <div class="pswp__top-bar">
                <div class="pswp__counter"></div><button class="pswp__button pswp__button--close"
                    title="Close (Esc)"></button><button class="pswp__button pswp__button--share"
                    title="Share"></button><button class="pswp__button pswp__button--fs"
                    title="Toggle fullscreen"></button><button class="pswp__button pswp__button--zoom"
                    title="Zoom in/out"></button>
                <div class="pswp__preloader">
                    <div class="pswp__preloader__icn">
                        <div class="pswp__preloader__cut">
                            <div class="pswp__preloader__donut"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                <div class="pswp__share-tooltip"></div>
            </div><button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button><button
                class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
            <div class="pswp__caption">
                <div class="pswp__caption__center"></div>
            </div>
        </div>
    </div>
</div>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<!-- Bootstrap JS and dependencies -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
<!-- Slick Slider JS -->
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<!-- Custom JS -->
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


<script>
    $(document).ready(function () {
        // Initialize Slick Slider
        $('.slider').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            infinite: true,
            arrows: true,
            dots: false,
        });

        // Handle image change on slider click
        $('.slider-image').on('click', function () {
            var fullImageUrl = $(this).attr('src');
            $('#mainImage').attr('src', fullImageUrl);
        });

        // Close magnifier popup
        $('#closePopup').on('click', function () {
            $('#magnifierPopup').hide();
        });

        $('#magnifierPopup').on('click', function (event) {
            if (event.target === this) {
                $(this).hide();
            }
        });
    });
</script>




<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

<!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

<script>
    $(document).ready(function() {
        let maxDays = 0;
        let selectedDates = [];
        let startDate = null;

        // Initialize Flatpickr
        const datePicker = flatpickr("#dateInput", {
            mode: "single",
            dateFormat: "d-m-Y",
            minDate: "today",
            inline: true,
            onChange: function(selected) {
                if (selected.length > 0) {
                    const selectedDate = selected[0];
                    const endDate = new Date(selectedDate);
                    endDate.setDate(selectedDate.getDate() + maxDays - 1);
                    selectedDates = generateDateRange(selectedDate, endDate);

                    // Update input field
                    $('#dateInput').val(`${flatpickr.formatDate(selectedDate, "d-m-Y")} to ${flatpickr.formatDate(endDate, "d-m-Y")}`);
                    highlightDates(selectedDates);
                }
            },
            onOpen: function() {
                clearPreviousHighlights();
                if (selectedDates.length > 0) {
                    highlightDates(selectedDates); // Re-highlight previously selected dates
                }
            },
            position: 'above'
        });

        // Close date picker on outside click
        $(document).on('click', function(e) {
            if (!$(e.target).closest("#dateInput").length && !$(e.target).closest(".flatpickr-calendar").length) {
                datePicker.close();
            }
        });

        // Handle rental plan selection
        $('input[name="plan"]').change(function() {
            maxDays = parseInt($(this).data('days'));
            $(".date-section").show(); // Show date section
            datePicker.clear(); // Clear previous selections
            $('#dateInput').val(''); // Clear input field
            startDate = null; // Reset start date
            selectedDates = []; // Reset selected dates
            datePicker.open(); // Open date picker immediately
        });

        // Generate date range based on start and end date
        function generateDateRange(start, end) {
            const dates = [];
            let currentDate = new Date(start);
            while (currentDate <= end) {
                dates.push(new Date(currentDate));
                currentDate.setDate(currentDate.getDate() + 1);
            }
            return dates;
        }

        // Highlight selected dates in the calendar
        function highlightDates(dates) {
            const calendar = datePicker.calendar;
            clearPreviousHighlights(); // Clear any previous highlights
            dates.forEach(date => {
                const dateStr = flatpickr.formatDate(date, "Y-m-d");
                const dayElement = calendar.days.querySelector(`[data-date="${dateStr}"]`);
                if (dayElement) {
                    dayElement.classList.add('selected-range');
                }
            });
        }

        // Clear previous highlights
        function clearPreviousHighlights() {
            const calendar = datePicker.calendar;
            const previouslySelected = calendar.days.querySelectorAll('.selected-range');
            previouslySelected.forEach(dayElement => {
                dayElement.classList.remove('selected-range');
            });
        }

        // Handle RENT NOW button click
        $('#rentNowBtn').click(function() {
            if (!$('#dateInput').val()) {
                alert('Please select rental dates.');
            } else {
                alert('You have selected the rent dates: ' + $('#dateInput').val());
            }
        });
    });
</script>




@endsection