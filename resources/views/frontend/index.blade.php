@extends('frontend.layouts.app')

@section('content')
<nav class="belowlogo" id="AccessibleNav">
            <div class="row mr-0">
                <div class="col-md-10">
                    <ul id="siteNav" class="site-nav medium center hidearrow">
                        @foreach ($menu as $val)
                        
                        <li class="lvl1 parent megamenu"><a target="_blank" href="{{$val->link}}">{{$val->name}} <i class="anm anm-angle-down-l"></i></a>
                        
                    </li>
                    @endforeach
                        </ul>
                </div>
                <div class="col-md-2"><span class="header-search"><input type="text" placeholder="Search"></span></div>
            </div>

        </nav>
<section class="bg-red text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <span class="bg-red-txt">MIDDLE EAST FIRST PEER TO PEER FASHION
                            SHARING COMMUNITY</span>
                    </div>
                </div>
            </div>
        </section>
        <!--End Header-->
        <!--Mobile Menu-->
        

        <!--Body Content-->
        <div id="page-content">

            <!--Home slider-->
            


            <!-- Start Home Banner -->
            <div class="section home-banner">
                <div class="container-fluid">

                    <div class="container banner-container">
                        <div id="banner" class="banner-content row">
                            <div class="col-md-12">
                                <img id="banner-image"
                                    src="{{asset('frontend/assets/images/parallax-banners/priscilla-du-preez-dlxLGIy-2VU-unsplash 4.png')}}"
                                    alt="Banner Image" class="img-fluid">
                            </div>
                            <div id="banner-text" class="banner-details">
                                <p>This is the content for the first button.</p>
                            </div>
                        </div>
                        <div class="banner-buttons-row text-center d-flex justify-content-center">
                            <div class="banner-button" id="banner-btn-1">
                                <button class="btn btn-block btn-lg" onclick="changeContent(1)">List An item</button>
                            </div>
                            <div class="banner-button" id="banner-btn-2">
                                <button class="btn btn-block btn-lg" onclick="changeContent(2)">Rent</button>
                            </div>
                            <div class="banner-button" id="banner-btn-3">
                                <button class="btn btn-block btn-lg" onclick="changeContent(3)">Resale</button>
                            </div>
                        </div>
                    </div>


                </div>
                <!-- End Home Banner -->


                <!-- Category -->
                <div class="section logo-section">
                    <div class="container-fluid">

                        <div class="row justify-content-space-between">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="section-header">
                                    <div class="row">
                                        <div class="col-6 col-sm-6 col-md-12 col-lg-6">
                                            <h4 class="text-start">
                                                <a href="" class="text-decoration-none">Categories</a>
                                            </h4>
                                        </div>
                                        <div class="col-6 col-sm-6 col-md-12 col-lg-6">
                                            <h4 class="text-end">
                                                <a href="" class="text-decoration-none">View All</a>
                                            </h4>
                                        </div>
                                    </div>
                                    <h2 class="h2"></h2>
                                </div>
                                <div class="logo-bar">
                                    <div class="logo-bar__item text-center">
                                        <img src="{{asset('frontend/assets/img/Group 18399.png')}}" alt="" title="" />
                                        <h4 class="logo-bar__heading">All</h4>
                                    </div>
                                    @foreach ($allData['category'] as $val)
                                    <div class="logo-bar__item text-center">
                                        <img src="{{asset('uploads/category/'.$val->image)}}" alt="" title="" />
                                        <h4 class="logo-bar__heading">{{$val->name}}</h4>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- End Category -->

                <!-- community -->
                <div class="section community">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="bg-green">
                                    <div class="p-3 text-center">
                                        <h3>HOW IT WORKS</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="bg-cream">
                                    <div class="text-center p-3">
                                        <h3> COMMUNITY</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- End Community -->

                <!-- occasions -->

                <div class="section collection-box-style1">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                                <div class="section-header">
                                    <h2 class="h2">Occasions</h2>
                                </div>
                            </div>
                            <div class="col-6 col-sm-6 col-md-6 col-lg-6 text-right">
                                <a href="">View All</a>
                            </div>
                        </div>
                    </div>

                    <div class="container-fluid">
                        <div class="row">
                            @foreach ($allData['occassion'] as $val)
                            
                            <div class="col-6 col-sm-6 col-md-3 col-lg-3">
                                <div class="collection-grid-item text-center">
                                    <a href="collection-page.html" class="collection-grid-item__link">
                                        <img data-src="{{asset('uploads/occasion/'.$val->image)}}" src="{{asset('uploads/occasion/'.$val->image)}}"
                                        alt="Hot" class="blur-up lazyload" />
                                        <h3 class="mt-4">{{$val->name}}</h3>
                                    </a>
                                </div>
                            </div>
                            @endforeach
                            
                        </div>
                    </div>
                </div>

                <!-- End occasions -->

                <!--Hot picks-->
                <div class="section hot-picks">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                                <div class="section-header">
                                    <h2 class="h2 heading-font">Just Landed</h2>

                                </div>
                            </div>

                            <div class="col-6 col-sm-6 col-md-6 col-lg-6 text-right">
                                <a href="">View All</a>
                            </div>
                        </div>
                    </div>
                    <div class="productSlider-style2 grid-products">
                        @foreach ($allData['just_landed'] as $val)
                        
                        <div class="col-12 item">
                            <!-- start product image -->
                            <div class="product-image">
                                <!-- start product image -->
                                <a href="product-layout-1.html" class="grid-view-item__link">
                                    <!-- image -->
                                    <img class="primary blur-up lazyload" data-src="{{asset('uploads/item/'.$val->mainImag)}}"
                                        src="{{asset('uploads/item/'.$val->mainImag)}}" alt="image" title="product">
                                    <!-- End image -->
                                    <!-- Hover image -->
                                    <img class="hover blur-up lazyload" data-src="{{asset('uploads/item/'.$val->mainImag)}}"
                                        src="{{asset('uploads/item/'.$val->mainImag)}}" alt="image" title="product">
                                    <!-- End hover image -->
                                </a>
                                <!-- end product image -->
                                <!-- Start product button -->
                                <form class="variants add" action="#" method="post">
                                    <div class="d-flex btn-background" style="">
                                        <button class="btn btn-green mx-1" type="button" tabindex="0">Rent Now</button>

                                        <button class="btn btn-white mx-1" type="button" tabindex="0">Buy Now</button>
                                    </div>
                                </form>
                                <div class="button-set">
                                    <div class="wishlist-btn">
                                        <a class="wishlist add-to-wishlist" href="wishlist.html">
                                            <i class="icon anm anm-heart-l"></i>
                                        </a>
                                    </div>
                                </div>
                                <!-- end product button -->
                            </div>
                            <div class="product-details text-center">
                                <!-- product name -->
                                <div class="product-name">
                                    <a href="product-layout-1.html">{{$val->item_title}}</a>
                                </div>
                                <!-- End product name -->
                                <div class="star text-center">
                                    <ul class="list-unstyled" style="display: inline-flex;">
                                        <li><i class="fa fa-star px-2 star"></i></li>
                                        <li><i class="fa fa-star px-2 star"></i></li>
                                        <li><i class="fa fa-star px-2 star"></i></li>
                                        <li><i class="fa fa-star px-2 star"></i></li>
                                        <li><i class="fa fa-star px-2 star"></i></li>
                                    </ul>
                                </div>
                                <!-- product price -->
                                <div class="product-price">
                                    <span class="price">AED {{$val->rrp_price}}</span>
                                </div>
                                <a href="#" class="product_link">{{$val->item_title}}</a>
                                <!-- End Product Link -->
                            </div>
                            <!-- End product details -->
                        </div>
                        @endforeach
                        

                    </div>
                </div>
                <!--End Hot picks-->

                <!-- Divider button -->
                <div class="section divider-btn">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-6 col-sm-6 col-md-6 col-lg-6 ">
                                <a href="" class="how-to-rent btn-block btn-dark">HOW TO RENT</a>
                            </div>
                            <div class="col-6 col-sm-6 col-md-6 col-lg-6 ">
                                <a href="" class="how-to-lend btn-block">HOW TO LEND</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Divider button -->

                <!--Hot picks-->
                @foreach ($allData['category_product'] as $val)
                
                <div class="section hot-picks">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                                <div class="section-header">
                                    <h2 class="h2 heading-font">{{$val->name}}</h2>

                                </div>
                            </div>

                            <div class="col-6 col-sm-6 col-md-6 col-lg-6 text-right">
                                <button>View All</button>
                            </div>
                        </div>
                    </div>
                    <div class="productSlider-style2 grid-products">
                        @foreach ($val->products as $product)                 
                        <div class="col-12 item">
                            <!-- start product image -->
                            <div class="product-image">
                                <!-- start product image -->
                                <a href="product-layout-1.html" class="grid-view-item__link">
                                    <!-- image -->
                                    <img class="primary blur-up lazyload" data-src="{{asset('uploads/item/'.$product->mainImag)}}"
                                        src="{{asset('uploads/item/'.$product->mainImag)}}" alt="image" title="product">
                                    <!-- End image -->
                                    <!-- Hover image -->
                                    <img class="hover blur-up lazyload" data-src="{{asset('uploads/item/'.$product->mainImag)}}"
                                        src="{{asset('uploads/item/'.$product->mainImag)}}" alt="image" title="product">
                                    <!-- End hover image -->
                                </a>
                                <!-- end product image -->
                                <!-- Start product button -->
                                <form class="variants add" action="#" method="post">
                                    <div class="d-flex btn-background" style="">
                                        <button class="btn btn-green mx-1" type="button" tabindex="0">Rent Now</button>

                                        <button class="btn btn-white mx-1" type="button" tabindex="0">Buy Now</button>
                                    </div>
                                </form>
                                <div class="button-set">
                                    <div class="wishlist-btn">
                                        <a class="wishlist add-to-wishlist" href="wishlist.html">
                                            <i class="icon anm anm-heart-l"></i>
                                        </a>
                                    </div>
                                </div>
                                <!-- end product button -->
                            </div>
                            <!-- end product image -->
                            <!--start product details -->
                            <div class="product-details text-center">
                                <!-- product name -->
                                <div class="product-name">
                                    <a href="product-layout-1.html">{{$product->item_title}}</a>
                                </div>
                                <!-- End product name -->
                                <div class="star text-center">
                                    <ul class="list-unstyled" style="display: inline-flex;">
                                        <li><i class="fa fa-star px-2 star"></i></li>
                                        <li><i class="fa fa-star px-2 star"></i></li>
                                        <li><i class="fa fa-star px-2 star"></i></li>
                                        <li><i class="fa fa-star px-2 star"></i></li>
                                        <li><i class="fa fa-star px-2 star"></i></li>
                                    </ul>
                                </div>
                                <!-- product price -->
                                <div class="product-price">
                                    <span class="price">AED {{$product->rrp_price}}</span>
                                </div>
                                <!-- End product price -->
                                <!-- product Link -->
                                <a href="#" class="product_link">Dresses</a>
                                <!-- End Product Link -->
                            </div>
                            <!-- End product details -->
                        </div>
                        @endforeach

                    </div>
                </div>
                @endforeach

                <!--End Hot picks-->

                <!-- Start Top Products -->
                <div class="section top-product">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                                <div class="section-header">
                                    <h2 class="h2 heading-font top-brands">Top Brands</h2>
                                </div>
                            </div>
                            <div class="col-6 col-sm-6 col-md-6 col-lg-6 text-right">
                                <button class="topBrands-btn">View All</button>
                            </div>
                        </div>
                        <div class="swiper-container top-product-slider">
                            <div class="swiper-wrapper">
                                @foreach ($allData['brands'] as $val)
                                
                                <div class="swiper-slide top-product-slide">
                                    <div class="topProduct-img">
                                        <img src="{{asset('uploads/brand/'.$val->image)}}" alt="">
                                    </div>
                                    <div class="topProduct-name">
                                        <h4>{{$val->name}}</h4>
                                    </div>
                                </div>
                                @endforeach
                                
                            </div>

                            <!-- Add Pagination -->
                            <div class="swiper-pagination"></div>

                            <!-- Add Navigation -->

                        </div>
                    </div>
                </div>
                <!-- End Top Products -->

                <!-- Start Discount Divider -->
                <div class="section discount-divider">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-8 col-sm-8 col-md-8 col-8">
                                <h2>Give 50 Get 50</h2>
                                <p>Introduce a friend to LXRY Shared and you both will get AED 50 credit.</p>
                            </div>
                            <div class="col-lg-4 col-sm-4 col-md-4 col-4">
                                <a href="#" class="refer-btn">Refer Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Discount Divider -->

                <div class="section get-the-look">
                    <div class="container-fluid">
                        <div class="row getTheLook-heading">
                            <div class="get-look-heading">
                                <h2>GET THE LOOK</h2>
                                <p>#sharingiscaring #LXRYshared</p>
                            </div>
                        </div>
                        <div class="row get-card-row">
                            @foreach ($allData['get_the_look'] as $val)
                            
                            <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                                <a href="#">
                                    <img src="{{asset('uploads/looks/'.$val->image)}}" alt="">
                                </a>
                            </div>
                            @endforeach
                            
                        </div>
                    </div>
                </div>

                <div class="section lxry-shared">
                    <div class="container-fluid">
                        <div class="lxryShared-row">
                            <div class="row">
                                <div class="outer-border">
                                    <div class="col-lg-7 col-md-7 col-sm-7 col-7 lxry-shared-img">
                                        <!-- <img src="{{asset('frontend/assets/images/helena-lopes-e3OUQGT9bWU-unsplash 1.png')}}" alt=""> -->
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-5 col-5 lxry-shared-contant">
                                        <h2>LXRY Shared Gives Back</h2>
                                        <p>Our community gives back! This information will be provided to you later. The
                                            current
                                            artwork
                                            is not suitable, please update this picture to be more relatable to Sharing
                                            is
                                            Caring,
                                            lets
                                            discuss this.</p>
                                        <a href="">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endsection

            @section('js')
            
            <script>
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

            <script>
                const contentData = {
                    1: {
                        image: '{{asset('frontend/assets/images/parallax-banners/priscilla-du-preez-dlxLGIy-2VU-unsplash 4.png')}}',
                        title: 'JOIN THE BIGGEST FASHION SHARING COMMUNITY IN THE MIDDLE EAST',
                    },
                    2: {
                        image: '{{asset('frontend/assets/images/parallax-banners/priscilla-du-preez-dlxLGIy-2VU-unsplash 4.png')}}',
                        title: 'JOIN THE BIGGEST FASHION SHARING COMMUNITY IN THE MIDDLE EAST2',
                    },
                    3: {
                        image: '{{asset('frontend/assets/images/parallax-banners/priscilla-du-preez-dlxLGIy-2VU-unsplash 4.png')}}',
                        title: 'JOIN THE BIGGEST FASHION SHARING COMMUNITY IN THE MIDDLE EAST3',
                    }
                };

                function changeContent(buttonId) {
                    const data = contentData[buttonId];
                    document.getElementById('banner-image').src = data.image;
                    document.getElementById('banner-text').innerHTML = `
                        <p>${data.title}</p>
                    `;
                }

                // Set default content
                changeContent(1);

            </script>
            @endsection
