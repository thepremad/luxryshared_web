@extends('frontend.layouts.app')
@section('content')

<style>
    #dateInput,
#depositDateInput {
border: none;
box-shadow: none;
background: transparent;
font-family: 'proxima nova', sans-serif;
font-size: 14px;
font-weight: 500;
line-height: 1.2;
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
        font-weight: 600;
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
        background-color: #9FC560;
        font-weight: 500;
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

    @media (max-width: 1024px) {
        .product-single .productDetails h4,
        .product-single .productDetails h5 {
            font-size: 16px;
        }

        .product-single .productDetails #rentNowBtn,
        .product-single .productDetails #buyNowBtn {
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
                            <img id="mainImage" src="assets/images/product-detail-page/cape-dress-1.jpg"
                                alt="Main Product Image" class="product-image">                                    
                        </div>
                        <div class="slider">
                            <img src="assets/images/product-detail-page/cape-dress-1.jpg" alt="Product Image 1"
                                class="slider-image">
                            <img src="assets/images/product-detail-page/cape-dress-1.jpg" alt="Product Image 2"
                                class="slider-image">
                            <img src="assets/images/product-detail-page/cape-dress-1.jpg" alt="Product Image 3"
                                class="slider-image">
                            <img src="assets/images/product-detail-page/cape-dress-1.jpg" alt="Product Image 4"
                                class="slider-image">
                            <img src="assets/images/product-detail-page/cape-dress-1.jpg" alt="Product Image 5"
                                class="slider-image">
                            <img src="assets/images/product-detail-page/cape-dress-1.jpg" alt="Product Image 6"
                                class="slider-image">
                            <img src="assets/images/product-detail-page/cape-dress-1.jpg" alt="Product Image 7"
                                class="slider-image">
                            <img src="assets/images/product-detail-page/cape-dress-1.jpg" alt="Product Image 8"
                                class="slider-image">
                        </div>
                    </div>

                    <div class="col-lg-5 col-md-5 col-sm-12 col-12 productDetails pl-0">
                        <!-- Breadcrumb Navigation -->
                        <nav class="breadcrumb">
                            <a class="breadcrumb-item" href="#">Shop</a>
                            <a class="breadcrumb-item" href="#">Women</a>
                            <span class="breadcrumb-item active" aria-current="page">Top</span>
                        </nav>
                
                        <!-- Product Title -->
                        <h1 class="product-single__title">Product Name</h1>
                
                        <!-- product owner -->
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
                        
                        <!-- Don't forget to include Font Awesome in your HTML -->
                        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
                        

                        <!-- Product Info Row -->
                        <div class="prInfoRow">
                            <div class="product-rent-price d-block">
                                <h4>50.99 $ / 4 Days</h4>
                            </div>
                            <div class="product-sell-price d-block">
                                <h4>$399.00 BUY NOW</h4>
                            </div>
                        </div>
                
                        <!-- Select Size -->
                        <label for="size" class="form-label productSize-avl">Available Size</label>
                        <div class="size-options mb-3 d-flex justify-content-between">
                            <div class="size-container">
                                <h5>XL</h5>                               
                            </div>
                            <a href="#" class="size-guide-link">Size Guide</a>
                        </div>
                
                        <!-- Rental Period -->
                        <label for="rentalPeriod" class="form-label">Rental Period</label>
                        <h3 class="text-center py-4 product-divider">
                            Longer rental means lower daily rates and bigger savings.
                        </h3>
                
                        <!-- Rental Plans -->
                        <div class="rental-plans mb-3 d-flex justify-content-between py-3">
                            <div class="plan-outer">
                                <input type="radio" id="plan1" name="plan" value="4days" class="plan-radio" data-days="4">
                                <label for="plan1" class="plan">
                                    <h5>4 Days</h5>
                                    <h6 class="price">$62.30</h6>
                                    <h6 class="price-per-day">$15.57/day</h6>
                                </label>
                            </div>
                            <div class="plan-outer">
                                <input type="radio" id="plan2" name="plan" value="7days" class="plan-radio" data-days="7">
                                <label for="plan2" class="plan">
                                    <h5>7 Days</h5>
                                    <h6 class="price">$85.00</h6>
                                    <h6 class="price-per-day">$12.14/day</h6>
                                </label>
                            </div>
                            <div class="plan-outer">
                                <input type="radio" id="plan3" name="plan" value="10days" class="plan-radio" data-days="10">
                                <label for="plan3" class="plan">
                                    <h5>10 Days</h5>
                                    <h6 class="price">$120.00</h6>
                                    <h6 class="price-per-day">$12.00/day</h6>
                                </label>
                            </div>
                            <div class="plan-outer">
                                <input type="radio" id="plan4" name="plan" value="14days" class="plan-radio" data-days="14">
                                <label for="plan4" class="plan">
                                    <h5>14 Days</h5>
                                    <h6 class="price">$150.00</h6>
                                    <h6 class="price-per-day">$10.71/day</h6>
                                </label>
                            </div>
                        </div>
                
                        <!-- Calendar for Rent -->
                        <div class="row py-3">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="rent-calendar d-none">
                                    <label for="calendar" class="form-label">Select Rent Date</label>
                                    <input type="text" id="dateInput" class="form-control" readonly>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12">    
                                <label for="depositDateInput" class="form-label" id="depositLabel" style="display: none;">Deposit Date</label>
                                <input type="text" id="depositDateInput" class="form-control" readonly style="display: none;"> 
                            </div>
                        </div>
                
                        <!-- Buttons for Actions -->
                        <div class="row mt-3">
                            <div class="col-4">
                                <button class="btn btn-dark btn-block" id="rentNowBtn">RENT NOW</button>
                            </div>
                            <div class="col-4">
                                <button class="btn btn-light btn-bloxk" id="buyNowBtn">BUY NOW</button>
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
    </div>
    <!--MainContent-->
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

        // Handle magnifier popup
        $('#magnifierIcon').on('click', function () {
            var fullImageUrl = $('#mainImage').attr('src');
            $('#popupImage').attr('src', fullImageUrl);
            $('#magnifierPopup').show();
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

<script>
    document.querySelectorAll('.plan-radio').forEach(radio => {
        radio.addEventListener('change', function () {
            document.querySelectorAll('.plan-card').forEach(card => {
                card.classList.remove('selected');
            });
            this.parentElement.classList.add('selected');
        });
    });

</script>


<script>
    document.querySelectorAll('.plan-radio').forEach(plan => {
            plan.addEventListener('change', function() {
                const calendar = document.querySelector('.rent-calendar');
                calendar.classList.remove('d-none');
                
                // Logic to handle calendar date selection
                const selectedPlan = this.value;
                // Logic for auto-selecting dates based on selected plan
                // Show the calendar using a library like Flatpickr, jQuery UI, etc.
                initializeCalendar(selectedPlan);
            });
        });
    
        function initializeCalendar(plan) {
            // Assuming you're using a library like Flatpickr
            const calendarEl = document.getElementById('calendar');
            const startDate = new Date();
            
            // Show calendar with custom logic to select multiple dates
            // For example, if 4 days are selected, set up the calendar to allow selection of 4 days
            // Use library features to handle date range selection
            // Example: Flatpickr configuration
            flatpickr(calendarEl, {
                mode: "range",
                dateFormat: "Y-m-d",
                minDate: "today",
                onChange: function(selectedDates) {
                    if (selectedDates.length === 2) {
                        const from = selectedDates[0];
                        const to = selectedDates[1];
                        // Logic to automatically select the next dates based on the selected range
                    }
                }
            });
        }
    </script>
    
    <script>
        $(document).ready(function() {
        let maxDays = 0;
    
        // Initialize the date picker with minimum date
        $("#dateInput").datepicker({
            dateFormat: 'dd-mm-yy',
            minDate: 0, // Aaj se pehle ki date disable karne ke liye
            onSelect: function(dateText) {
                const selectedDate = $(this).datepicker('getDate');
                const depositDate = new Date(selectedDate);
                depositDate.setDate(selectedDate.getDate() + maxDays);
    
                $('#depositDateInput').val($.datepicker.formatDate('dd-mm-yy', depositDate)); // Set deposit date
                $('#depositLabel').show(); // Show the label for deposit date
                $('#depositDateInput').show(); // Show the deposit date input
            }
        });
    
        // Handle rental plan selection
        $('input[name="plan"]').change(function() {
            maxDays = parseInt($(this).data('days'));
            $('.rent-calendar').removeClass('d-none').show();
            $("#dateInput").val('').focus(); // Clear and focus the date input
            $("#dateInput").datepicker("show"); // Show the datepicker
            $('#depositLabel').hide(); // Hide the label initially
            $('#depositDateInput').hide(); // Hide the deposit date input initially
        });
    
        // Handle RENT NOW button click
        $('#rentNowBtn').click(function() {
            const selectedDate = $("#dateInput").val();
            if (!selectedDate) {
                alert('Please select a rental date.');
            } else {
                alert('You have selected the rent date: ' + selectedDate);
            }
        });
    });
    
    </script>

@endsection