@extends('frontend.layouts.app')

@section('content')

<div id="page-content">

    <!-- Start Home Banner -->
    <div class="section home-banner">
        <div class="container-fluid">

            <div class="container banner-container">
                <div id="banner" class="banner-content row">
                    <div class="col-md-12">
                        <img id="banner-image"
                            src="{{ asset('./assets/images/parallax-banners/priscilla-du-preez-dlxLGIy-2VU-unsplash 4.png')}}"
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
                                <img src="{{ asset('assets/img/Group 18399.png')}}" alt="" title="" />
                                <h4 class="logo-bar__heading">All</h4>
                            </div>
                            @foreach ($allData['category'] as $val)
                            
                            <div class="logo-bar__item text-center">
                                <img src="{{ asset('/uploads/category/'.$val->image)}}" alt="" title="" />
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
                <div class="row justify-content-start align-items-start">
                    @foreach ($allData['occassion'] as $val)
                    
                    <div class="col-6 col-sm-6 col-md-3 col-lg-3">
                        <div class="collection-grid-item text-center">
                            <a href="collection-page.html" class="collection-grid-item__link">
                                <img data-src="{{ asset('uploads/occasion/'.$val->image)}}" src="{{ asset('assets/img/Rectangle 26.png')}}"
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
            <div class="productSlider-style2 grid-products justify-content-start align-items-start">
                @foreach ($allData['just_landed'] as $val)
                
                <div class="col-12 item">
                    <!-- start product image -->
                    <div class="product-image">
                        <!-- start product image -->
                        <a href="product-layout-1.html" class="grid-view-item__link">
                            <!-- image -->
                            <img class="primary blur-up lazyload" data-src="{{ asset('/uploads/item/'.$val->mainImag)}}"
                                src="{{ asset('/uploads/item/'.$val->mainImag)}}" alt="image" title="product">
                            <!-- End image -->
                            <!-- Hover image -->
                            <img class="hover blur-up lazyload"
                                data-src="{{ asset('/uploads/item/'.$val->mainImag)}}"
                                src="{{ asset('/uploads/item/'.$val->mainImag)}}" alt="image"
                                title="product">
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
                            <!-- <a href="javascript:void(0)"
                                    title="Quick View"
                                    class="quick-view-popup quick-view"
                                    data-toggle="modal"
                                    data-target="#content_quickview">
                                    <i
                                        class="icon anm anm-search-plus-r"></i>
                                </a> -->
                            <div class="wishlist-btn">
                                <a class="wishlist add-to-wishlist" href="wishlist.html">
                                    <i class="icon anm anm-heart-l"></i>
                                </a>
                            </div>
                            <!-- <div class="compare-btn">
                                    <a class="compare add-to-compare"
                                        href="compare.html"
                                        title="Add to Compare">
                                        <i
                                            class="icon anm anm-random-r"></i>
                                    </a>
                                </div> -->
                        </div>
                        <!-- end product button -->
                    </div>
                    <!-- end product image -->

                    <!--start product details -->
                    <div class="product-details text-center">
                        <!-- product name -->
                        <div class="product-name">
                            <a href="product-layout-1.html">Buttons tweed blazer</a>
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
                            <span class="price">AED 250</span>
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
                            <img class="primary blur-up lazyload" data-src="{{ asset('uploads/item/'.$product->mainImag)}}"
                                src="{{ asset('uploads/item/'.$product->mainImag)}}" alt="image" title="product">
                            <!-- End image -->
                            <!-- Hover image -->
                            <img class="hover blur-up lazyload" data-src="{{ asset('uploads/item/'.$product->mainImag)}}"
                                src="{{ asset('uploads/item/'.$product->mainImag)}}" alt="image" title="product">
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
                            <!-- <a href="javascript:void(0)"
                                    title="Quick View"
                                    class="quick-view-popup quick-view"
                                    data-toggle="modal"
                                    data-target="#content_quickview">
                                    <i
                                        class="icon anm anm-search-plus-r"></i>
                                </a> -->
                            <div class="wishlist-btn">
                                <a class="wishlist add-to-wishlist" href="wishlist.html">
                                    <i class="icon anm anm-heart-l"></i>
                                </a>
                            </div>
                            <!-- <div class="compare-btn">
                                    <a class="compare add-to-compare"
                                        href="compare.html"
                                        title="Add to Compare">
                                        <i
                                            class="icon anm anm-random-r"></i>
                                    </a>
                                </div> -->
                        </div>
                        <!-- end product button -->
                    </div>
                    <!-- end product image -->
                    <!--start product details -->
                    <div class="product-details text-center">
                        <!-- product name -->
                        <div class="product-name">
                            <a href="product-layout-1.html">Buttons tweed blazer</a>
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
                            <span class="price">AED 250</span>
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
                                <img src="{{ asset('uploads/brand/'.$val->image)}}" alt="">
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
                <div class="row get-card-row justify-content-start align-items-start">
                    @foreach ($allData['get_the_look'] as $val)
                    
                    <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                        <a href="#">
                            <img src="{{ asset('/uploads/looks/'.$val->image)}}" alt="">
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
                                <!-- <img src="{{ asset('./assets/images/helena-lopes-e3OUQGT9bWU-unsplash 1.png')}}" alt=""> -->
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


        <!-- <div class="section collection-box-style1">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div class="section-header text-center">
                    <h2 class="h2">Trendy necklace</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-6 col-sm-6 col-md-4 col-lg-4">
                <div class="collection-grid-item">
                    <a href="collection-page.html" class="collection-grid-item__link">
                        <img data-src="{{ asset('assets/images/collection/jewellery-collection4.jpg')}}"
                            src="{{ asset('assets/images/collection/jewellery-collection4.jpg')}}" alt="Hot"
                            class="blur-up lazyload" />
                    </a>
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-4 col-lg-4">
                <div class="collection-grid-item">
                    <a href="collection-page.html" class="collection-grid-item__link">
                        <img data-src="{{ asset('assets/images/collection/jewellery-collection5.jpg')}}"
                            src="{{ asset('assets/images/collection/jewellery-collection5.jpg')}}" alt="Denim"
                            class="blur-up lazyload" />
                    </a>
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-4 col-lg-4">
                <div class="collection-grid-item">
                    <a href="collection-page.html" class="collection-grid-item__link">
                        <img data-src="{{ asset('assets/images/collection/jewellery-collection6.jpg')}}"
                            src="{{ asset('assets/images/collection/jewellery-collection6.jpg')}}" alt="Summer"
                            class="blur-up lazyload" />
                    </a>
                </div>
            </div>
        </div>
    </div>
</div> -->

        <!--Store Feature-->
        <!-- <div class="store-feature section">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <ul class="display-table store-info">
                    <li class="display-table-cell">
                        <i class="icon anm anm-truck-l"></i>
                        <h5>Free Shipping Worldwide</h5>
                        <span class="sub-text">
                            Diam augue augue in fusce voluptatem
                        </span>
                    </li>
                    <li class="display-table-cell">
                        <i class="icon anm anm-money-bill-ar"></i>
                        <h5>Money Back Guarantee</h5>
                        <span class="sub-text">
                            Use this text to display your store
                            information
                        </span>
                    </li>
                    <li class="display-table-cell">
                        <i class="icon anm anm-comments-l"></i>
                        <h5>24/7 Help Center</h5>
                        <span class="sub-text">
                            Use this text to display your store
                            information
                        </span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div> -->
        <!--End Store Feature-->

        <!--Hero Banner With Text-->
        <!-- <div class="section hero hero--medium hero__overlay bg-size">
    <img class="bg-img" src="{{ asset('assets/images/parallax-banners/jewellery-parallax.jpg')}}" alt />
    <div class="hero__inner">
        <div class="container">
            <div class="wrap-text right text-medium font-bold">
                <h2 class="h2 mega-title">MAKE IT PERSONAL</h2>
                <div class="rte-setting mega-subtitle">Make your
                    jewels even more meaningful by <br>
                    personalizing them with a name, monogram,
                    coordinates, date,<br> or a special
                    message.</div>
                <a href="#" class="btn">personalize Now</a>
            </div>
        </div>
    </div>
</div> -->
        <!--End Hero Banner With Text-->

        <!-- Instagram Section-->
        <!-- <div class="section instagram-feed-section">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="h2 heading-font">Belle On Instagram</h2>
                <p>Phasellus lorem malesuada ligula pulvinar commodo
                    maecenas suscipit auctom.</p>
            </div>
            <div id="instafeed2" class="imlow_resolution"></div>
        </div>
    </div> -->
        <!--End Instagram Section-->

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
        <!-- Including Jquery -->
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

    <script>
        // Content Change Logic
        const contentData = {
            1: {
                image: './assets/images/parallax-banners/priscilla-du-preez-dlxLGIy-2VU-unsplash 4.png')}}',
                title: 'JOIN THE BIGGEST FASHION SHARING COMMUNITY IN THE MIDDLE EAST',
            },
            2: {
                image: './assets/images/parallax-banners/priscilla-du-preez-dlxLGIy-2VU-unsplash 4.png')}}',
                title: 'JOIN THE BIGGEST FASHION SHARING COMMUNITY IN THE MIDDLE EAST2',
            },
            3: {
                image: './assets/images/parallax-banners/priscilla-du-preez-dlxLGIy-2VU-unsplash 4.png')}}',
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

</div>


@endsection
