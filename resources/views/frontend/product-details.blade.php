
@extends('frontend.layouts.app')
@section('content')
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
                                    <img id="mainImage" src="{{asset('uploads/item/'.$item->mainImag)}}"
                                        alt="Main Product Image" class="product-image">
                                    <span class="magnifier-icon" id="magnifierIcon">&#128269;</span>
                                </div>
                                <div class="slider">
                                    @foreach ($item->itemImage as $key => $val)
                                    
                                    <img src="{{asset('uploads/item/'.$val->image)}}" alt="Product Image {{$key +1}}"
                                    class="slider-image">
                                    @endforeach
                                </div>
                            </div>

                            <div class="col-lg-5 col-md-5 col-sm-12 col-12">

                                <nav class="breadcrumb">
                                    <a class="breadcrumb-item" href="#">Shop</a>
                                    <a class="breadcrumb-item" href="#">Women</a>
                                    <span class="breadcrumb-item active" aria-current="page">Top</span>
                                </nav>

                                <div class="product-single__meta">
                                    <h1 class="product-single__title">{{$item->item_title}}</h1>
                                    <div class="prInfoRow">
                                        <div class="product-sku">
                                            <span class="variant-sku">{{$item->users->first_name ?? ''}}</span>
                                        </div>
                                        <div class="product-review">
                                            <a class="reviewLink" href="#tab2">
                                                <i class="font-13 fa fa-star fs-3x"></i>
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star"></i>
                                                <i class="font-13 fa fa-star-o"></i>
                                                <span class="spr-badge-caption">3.5</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion" id="productOptions">
                                    <!-- Rent Option -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseOne" aria-expanded="true"
                                                aria-controls="collapseOne">
                                                <input type="radio" name="option" value="Rent" class="accordinonInput">
                                                <span>Rent</span>
                                                <p class="rentPrice">From {{$item->fourDaysPrice ?? ''}} / 4 days</p>
                                                <p class="rentDeposit">Retail {{$item->rrp_price ?? ''}}</p>
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse show"
                                            aria-labelledby="headingOne" data-bs-parent="#productOptions">
                                            <div class="accordion-body">
                                                <div class="rentForm-outer">
                                                    <form class="rentSize">
                                                        <div class="mb-3">
                                                            <label for="size" class="form-label">Size*</label>
                                                            <select class="form-select" id="size" name="size">
                                                                <option value="" selected>Select Size</option>
                                                                @foreach ($size as $val)
                                                                
                                                                <option value="{{$val->id}}">{{$val->name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="rentBadge">
                                                    <span class="badge bg-light text-dark">Worried about fit? <i
                                                            class="fa fa-warning"></i></span>
                                                </div>
                                                <div class="rent-package mb-3">
                                                    <p>Rental period *</p>
                                                    <h5>Longer rental mean lower daily rates and bigger savings.</h5>
                                                    <div class="row mb-5">
                                                        <div class="col-xl-3 col-lg-3 col-sm-3 col-6 plan">
                                                            <div class="plan-card">
                                                                <input type="radio" id="plan1" name="plan" value="plan1" class="plan-radio">
                                                                <label for="plan1">
                                                                    <h4 class="days">4 Days</h4>
                                                                    <h5 class="price">{{$item->fourDaysPrice ?? ''}}</h5>
                                                                    <h6 class="priceDay">$15.57/Day</h6>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-3 col-lg-3 col-sm-3 col-6 plan">
                                                            <div class="plan-card">
                                                                <input type="radio" id="plan2" name="plan" value="plan2" class="plan-radio">
                                                                <label for="plan2">
                                                                    <h4 class="days">4 Days</h4>
                                                                    <h5 class="price">{{$item->sevenToTwentyNineDayPrice ?? ''}}</h5>
                                                                    <h6 class="priceDay">$15.57/Day</h6>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-3 col-lg-3 col-sm-3 col-6 plan">
                                                            <div class="plan-card">
                                                                <input type="radio" id="plan3" name="plan" value="plan3" class="plan-radio">
                                                                <label for="plan3">
                                                                    <h4 class="days">4 Days</h4>
                                                                    <h5 class="price">{{$item->thirtyPlusDayPrice ?? ''}}</h5>
                                                                    <h6 class="priceDay">$15.57/Day</h6>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-3 col-lg-3 col-sm-3 col-6 plan">
                                                            <div class="plan-card">
                                                                <input type="radio" id="plan4" name="plan" value="plan4" class="plan-radio">
                                                                <label for="plan4">
                                                                    <h4 class="days">4 Days</h4>
                                                                    <h5 class="price">$62.50</h5>
                                                                    <h6 class="priceDay">$15.57/Day</h6>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                                <div class="rent-submit mb-4">
                                                    <button class="btn btn-dark">RENT NOW</button>
                                                </div>
                                                <div class="rent-days">
                                                    <h5>Dates*</h5>
                                                    <p>Tap to select Start Date, preferably 1-2 days before you plan to
                                                        wear it.</p>
                                                    <input type="date" name="rentDays" id="rentDays">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Buy Now Option -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingTwo">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseOne" aria-expanded="true"
                                                aria-controls="collapseOne">
                                                <input type="radio" name="option" value="Rent" class="accordinonInput">
                                                <span>Buy Now</span>
                                                <p class="rentPrice">{{$item->rrp_price}}</p>
                                                <p class="rentDeposit">Retail {{$item->rrp_price}}</p>
                                            </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse"
                                            aria-labelledby="headingTwo" data-bs-parent="#productOptions">
                                            <div class="accordion-body">
                                                <strong>This is the second item's accordion body.</strong> It is hidden
                                                by default, until the collapse plugin adds the appropriate classes that
                                                we use to style each element. These classes control the overall
                                                appearance, as well as the showing and hiding via CSS transitions. You
                                                can modify any of this with custom CSS or overriding our default
                                                variables. It's also worth noting that just about any HTML can go within
                                                the <code>.accordion-body</code>, though the transition does limit
                                                overflow.
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
                                        <p>{{$item->image_description ?? ''}}</p>
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
                                        <img src="{{asset('assets/images/icons/credit card.png')}}" alt="">
                                    </span>
                                    <h4>Secure payment</h4>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                    <span class="img-outer">
                                        <img src="{{asset('assets/images/icons/Size & Fit.png')}}" alt="">
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
                                        <img data-src="{{asset('assets/img/Rectangle 26.png')}}" src="{{asset('assets/img/Rectangle 26.png')}}" alt="Hot" class="blur-up ls-is-cached lazyloaded">
                                        <h3 class="mt-4">PARTY WEAR</h3>
                                    </a>
                                </div>
                            </div>
                            <div class="col-6 col-sm-6 col-md-3 col-lg-3">
                                <div class="collection-grid-item text-center">
                                    <a href="collection-page.html" class="collection-grid-item__link">
                                        <img data-src="{{asset('assets/img/Rectangle 26.png')}}" src="{{asset('assets/img/Rectangle 26.png')}}" alt="Denim" class="blur-up blur-active ls-is-cached lazyloaded">
                                        <h3 class="mt-4">EVENING WEAR</h3>
                                    </a>
                                </div>
                            </div>
                            <div class="col-6 col-sm-6 col-md-3 col-lg-3">
                                <div class="collection-grid-item text-center">
                                    <a href="collection-page.html" class="collection-grid-item__link">
                                        <img data-src="{{asset('assets/img/Rectangle 26.png')}}" src="{{asset('assets/img/Rectangle 26.png')}}" alt="Summer" class="blur-up ls-is-cached lazyloaded">
                                        <h3 class="mt-4">BUSINESS</h3>
                                    </a>
                                </div>
                            </div>
                            <div class="col-6 col-sm-6 col-md-3 col-lg-3">
                                <div class="collection-grid-item text-center">
                                    <a href="collection-page.html" class="collection-grid-item__link">
                                        <img data-src="{{asset('assets/img/Rectangle 26.png')}}" src="{{asset('assets/img/Rectangle 26.png')}}" alt="Summer" class="blur-up ls-is-cached lazyloaded">
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
                </div><button class="pswp__button pswp__button--arrow--left"
                    title="Previous (arrow left)"></button><button class="pswp__button pswp__button--arrow--right"
                    title="Next (arrow right)"></button>
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
            radio.addEventListener('change', function() {
                document.querySelectorAll('.plan-card').forEach(card => {
                    card.classList.remove('selected');
                });
                this.parentElement.classList.add('selected');
            });
        });

    </script>

@endsection