@extends('frontend.layouts.app')
@section('content')
 <!--Body Content-->
 <div id="page-content">
    <!--Collection Banner-->
    <div class="collection-header">
        <div class="collection-hero"></div>
    </div>
    <!--End Collection Banner-->

    <div class="container-fluid allProducts">
        <div class="row mt-5 align-items-start">
            <!-- Sidebar -->
            <div class="col-md-3 col-lg-3 sidebar filterbar">
                <div class="collapse show" id="sidebarContent">
                    <div class="sidebar_tags">
                        <!-- Categories Section -->
                        <div class="sidebar_widget categories filter-widget top">
                            <div class="widget-title">
                                <h4 id="filterTItle">Categories</h4>
                            </div>
                            <div class="widget-content py-4">
                                <ul class="sidebar_categories">
                                    @foreach($categories as $val)
                                    <li class="level1 sub-level">
                                        <a href="#;" class="site-nav">{{ $val->name }}</a>
                                        <ul class="sublinks">
                                            @foreach($val->subCategory as $val)
                                            <li class="level2">
                                                <a href="{{ route('product_list_categories',$val->id) }}" class="site-nav">{{ $val->name }}</a>
                                            </li>
                                            @endforeach
                                            {{-- <li class="level2">
                                                <a href="#;" class="site-nav">Women</a>
                                            </li> --}}
                                        </ul>
                                    </li>
                                    @endforeach
                                    {{-- <li class="level1 sub-level">
                                        <a href="#;" class="site-nav">Printed T-shirts</a>
                                        <ul class="sublinks">
                                            <li class="level2">
                                                <a href="#;" class="site-nav">Jeans</a>
                                            </li>
                                            <li class="level2">
                                                <a href="#;" class="site-nav">Shorts</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="level1 sub-level">
                                        <a href="#;" class="site-nav">Plain T-shirts</a>
                                        <ul class="sublinks">
                                            <li class="level2">
                                                <a href="#;" class="site-nav">Jackets</a>
                                            </li>
                                            <li class="level2">
                                                <a href="#;" class="site-nav">Hoodies</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="level1 sub-level">
                                        <a href="#;" class="site-nav">Plain T-shirts</a>
                                        <ul class="sublinks">
                                            <li class="level2">
                                                <a href="#;" class="site-nav">Jackets</a>
                                            </li>
                                            <li class="level2">
                                                <a href="#;" class="site-nav">Hoodies</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="level1 sub-level">
                                        <a href="#;" class="site-nav">Kurti</a>
                                        <ul class="sublinks">
                                            <li class="level2">
                                                <a href="#;" class="site-nav">Jackets</a>
                                            </li>
                                            <li class="level2">
                                                <a href="#;" class="site-nav">Hoodies</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="level1 sub-level">
                                        <a href="#;" class="site-nav">Boxers</a>
                                        <ul class="sublinks">
                                            <li class="level2">
                                                <a href="#;" class="site-nav">Jackets</a>
                                            </li>
                                            <li class="level2">
                                                <a href="#;" class="site-nav">Hoodies</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="level1 sub-level">
                                        <a href="#;" class="site-nav">Full sleeve T-shirts</a>
                                        <ul class="sublinks">
                                            <li class="level2">
                                                <a href="#;" class="site-nav">Jackets</a>
                                            </li>
                                            <li class="level2">
                                                <a href="#;" class="site-nav">Hoodies</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="level1 sub-level">
                                        <a href="#;" class="site-nav">Joggers</a>
                                        <ul class="sublinks">
                                            <li class="level2">
                                                <a href="#;" class="site-nav">Jackets</a>
                                            </li>
                                            <li class="level2">
                                                <a href="#;" class="site-nav">Hoodies</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="level1 sub-level">
                                        <a href="#;" class="site-nav">Payjamas</a>
                                        <ul class="sublinks">
                                            <li class="level2">
                                                <a href="#;" class="site-nav">Jackets</a>
                                            </li>
                                            <li class="level2">
                                                <a href="#;" class="site-nav">Hoodies</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="level1 sub-level">
                                        <a href="#;" class="site-nav">Jeans</a>
                                        <ul class="sublinks">
                                            <li class="level2">
                                                <a href="#;" class="site-nav">Jackets</a>
                                            </li>
                                            <li class="level2">
                                                <a href="#;" class="site-nav">Hoodies</a>
                                            </li>
                                        </ul>
                                    </li> --}}

                                </ul>
                            </div>
                        </div>
    
                        <!-- Price Filter Section -->
                        <div class="sidebar_widget filterBox filter-widget">
                            <div class="widget-title widget-before">
                                <h4 id="filterTItle">Price</h4>                                        
                            </div>
                            <form action="#" method="post" class="price-filter mt-4">
                                <div id="slider-range" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"></div>
                                <div class="row justify-content-between">
                                    <div class="col-6 p-0" style="flex: 0 0 41.6%; max-width: 41.6%;">
                                        <p class="no-margin">
                                            <input id="min-price" type="text" placeholder="Min Price" readonly />
                                        </p>
                                    </div>
                                    <div class="col-6 p-0" style="flex: 0 0 41.6%; max-width: 41.6%;">
                                        <p class="no-margin">
                                            <input id="max-price" type="text" placeholder="Max Price" readonly />
                                        </p>
                                    </div>
                                </div>
                            </form>
                        </div>
    
                        <!-- Color Filter Section -->
                        <div class="sidebar_widget filterBox filter-widget">
                            <div class="widget-title widget-before">
                                <h4 id="filterTItle">Color</h4>
                            </div>
                            <div class="filter-color swatch-list clearfix mt-4">
                                <div class="filter-color swatch-list clearfix mt-4">
                                    @foreach($color as $val)
                                    <div class="color-item">
                                        <span class="swatch-btn" style="background-color: {{ $val->code }};"></span>
                                        <span class="color-name">{{ $val->name }}</span>
                                    </div>
                                    @endforeach
                                    {{-- <div class="color-item">
                                        <span class="swatch-btn" style="background-color: #252525;"></span>
                                        <span class="color-name">Black</span>
                                    </div>
                                    <div class="color-item">
                                        <span class="swatch-btn" style="background-color: #F35528;"></span>
                                        <span class="color-name">Red</span>
                                    </div>
                                    <div class="color-item">
                                        <span class="swatch-btn" style="background-color: #F16F2B;"></span>
                                        <span class="color-name">Orange</span>
                                    </div>
                                    <div class="color-item">
                                        <span class="swatch-btn" style="background-color: #345EFF;"></span>
                                        <span class="color-name">Navy</span>
                                    </div>
                                    <div class="color-item">
                                        <span class="swatch-btn" style="background-color: #F4F1F1;"></span>
                                        <span class="color-name">White</span>
                                    </div>
                                    <div class="color-item">
                                        <span class="swatch-btn" style="background-color: #D67E3B;"></span>
                                        <span class="color-name">Broom</span>
                                    </div>
                                    <div class="color-item">
                                        <span class="swatch-btn" style="background-color: #48BC4E;"></span>
                                        <span class="color-name">Green</span>
                                    </div>
                                    <div class="color-item">
                                        <span class="swatch-btn" style="background-color: #FDC761;"></span>
                                        <span class="color-name">Yellow</span>
                                    </div>
                                    <div class="color-item">
                                        <span class="swatch-btn" style="background-color: #E4E5E8;"></span>
                                        <span class="color-name">Grey</span>
                                    </div>
                                    <div class="color-item">
                                        <span class="swatch-btn" style="background-color: #E08D9D;"></span>
                                        <span class="color-name">Pink</span>
                                    </div> 
                                    <div class="color-item">
                                        <span class="swatch-btn" style="background-color: #3FDEFF;"></span>
                                        <span class="color-name">Blue</span>
                                    </div>--}}
                                </div>                                        
                            </div>
                        </div>
    
                        <!-- Size Filter Section -->
                        <div class="sidebar_widget categories filterBox filter-widget">
                            <div class="widget-title widget-before">
                                <h4 id="filterTItle">Size</h4>
                            </div>
                            <div class="sizebutton-group mt-4 pt-3">
                                @foreach( $size as $val )
                                <label class="checkbox-item">
                                    <input type="checkbox" value="{{ $val->name }}" id="check1" />
                                    <span>{{ $val->name }}</span>
                                </label>
                                @endforeach
                                {{-- <label class="checkbox-item">
                                    <input type="checkbox" value="XS" id="check2" />
                                    <span>XS</span>
                                </label>
                                <label class="checkbox-item">
                                    <input type="checkbox" value="S" id="check3" />
                                    <span>S</span>
                                </label>
                                <label class="checkbox-item">
                                    <input type="checkbox" value="M" id="check4" />
                                    <span>M</span>
                                </label>
                                <label class="checkbox-item">
                                    <input type="checkbox" value="L" id="check5" />
                                    <span>L</span>
                                </label>
                                <label class="checkbox-item">
                                    <input type="checkbox" value="XL" id="check6" />
                                    <span>XL</span>
                                </label>
                                <label class="checkbox-item">
                                    <input type="checkbox" value="XXL" id="check7" />
                                    <span>XXL</span>
                                </label>
                                <label class="checkbox-item">
                                    <input type="checkbox" value="3XL" id="check8" />
                                    <span>3XL</span>
                                </label>
                                <label class="checkbox-item">
                                    <input type="checkbox" value="4XL" id="check9" />
                                    <span>4XL</span>
                                </label> --}}
                            </div>
                        </div>

                        <!-- Occasions Section -->
                        <div class="sidebar_widget categories occasions filter-widget">
                            <div class="widget-title widget-before">
                                <h4 id="filterTItle">Occasions</h4>
                            </div>
                            <div class="widget-content py-4">
                                <ul class="sidebar_categories">
                                    @foreach($occasions as $val)
                                    <li class="level1 sub-level">
                                        <a href="#;" class="site-nav">{{$val->name}}</a>
                                    </li>
                                    @endforeach
                                    {{-- <li class="level1 sub-level">
                                        <a href="#;" class="site-nav">Casual</a>
                                        <ul class="sublinks">
                                            <li class="level2">
                                                <a href="#;" class="site-nav">T-shirts</a>
                                            </li>
                                            <li class="level2">
                                                <a href="#;" class="site-nav">Shorts</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="level1 sub-level">
                                        <a href="#;" class="site-nav">Business</a>
                                        <ul class="sublinks">
                                            <li class="level2">
                                                <a href="#;" class="site-nav">Dress Shirts</a>
                                            </li>
                                            <li class="level2">
                                                <a href="#;" class="site-nav">Trousers</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="level1 sub-level">
                                        <a href="#;" class="site-nav">Sport</a>
                                        <ul class="sublinks">
                                            <li class="level2">
                                                <a href="#;" class="site-nav">Activewear</a>
                                            </li>
                                            <li class="level2">
                                                <a href="#;" class="site-nav">Sneakers</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="level1 sub-level">
                                        <a href="#;" class="site-nav">Elegant</a>
                                        <ul class="sublinks">
                                            <li class="level2">
                                                <a href="#;" class="site-nav">Evening Gowns</a>
                                            </li>
                                            <li class="level2">
                                                <a href="#;" class="site-nav">Cocktail Dresses</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="level1 sub-level">
                                        <a href="#;" class="site-nav">Formal (evening)</a>
                                        <ul class="sublinks">
                                            <li class="level2">
                                                <a href="#;" class="site-nav">Tuxedos</a>
                                            </li>
                                            <li class="level2">
                                                <a href="#;" class="site-nav">Formal Suits</a>
                                            </li>
                                        </ul>
                                    </li> --}}
                                </ul>
                            </div>
                        </div>

                        <!-- Branded Section -->
                        <div class="sidebar_widget categories brands filter-widget">
                            <div class="widget-title widget-before">
                                <h4 id="filterTtle">Brands</h4>
                            </div>
                            <div class="widget-content py-4">
                                <ul class="sidebar_categories">
                                    @foreach($brand as $val)
                                    
                                    <li class="level1 sub-level">
                                        <a href="#;" class="site-nav">{{$val->name}}</a>
                                        
                                    </li>
                                    @endforeach
                                    <li class="level1 sub-level">
                                        <a href="#;" class="site-nav">Casual</a>
                                        <ul class="sublinks">
                                            <li class="level2">
                                                <a href="#;" class="site-nav">T-shirts</a>
                                            </li>
                                            <li class="level2">
                                                <a href="#;" class="site-nav">Shorts</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="level1 sub-level">
                                        <a href="#;" class="site-nav">Business</a>
                                        <ul class="sublinks">
                                            <li class="level2">
                                                <a href="#;" class="site-nav">Dress Shirts</a>
                                            </li>
                                            <li class="level2">
                                                <a href="#;" class="site-nav">Trousers</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        

                    
                    </div>
                </div>
            </div>
    
            <!-- Main Content Area -->
            <div class="col-lg-9 col-md-12 col-sm-12 col-12 main-col p-0">
                <!-- NEAR ME Checkbox -->
                <div class="outer-container d-flex justify-content-between align-items-start mb-3">
                    <div class="inner-container d-flex align-items-center">
                        <span class="label-text mr-2">NEAR ME</span>
                        <label class="switch">
                            <input type="checkbox" id="nearMeCheckbox">
                            <span class="slider"></span>
                        </label>
                    </div>
                </div>
            
                <!-- Products Row -->
                <div class="row justify-content-start">
                    <!-- Product Card Start -->
                    {{-- <div class="col-lg-4 col-md-4 col-sm-6 col-6 product">
                        <div class="product-card">
                            <div class="product-image">
                                <img src="{{ asset('./assets/images/product-images/product-image1-1.jpg') }}" alt="Product 1">
                                <button class="buy-now">Buy Now</button>
                                <div class="icons">
                                    <span class="icon heart-icon"><i class="fas fa-heart"></i></span>
                                    <span class="icon cart-icon"><i class="fas fa-shopping-cart"></i></span>
                                </div>
                            </div>
                            <div class="product-details">
                                <div class="product-name">
                                    <span>Product 1</span>
                                    <button class="rent-now">RENT NOW</button>
                                </div>
                                <div class="product-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="product-price">AED 250</div>
                            </div>
                        </div>
                    </div> --}}
                    <!-- Product Card Start -->
                    @foreach($item as $val)
                    <div class="col-lg-4 col-md-4 col-sm-6 col-6 product">
                        <div class="product-card">
                            <div class="product-image">
                                <img src="{{ asset('./assets/images/product-images/product-image1-1.jpg') }}" alt="Product 1">
                                <button class="buy-now">Buy Now</button>
                                <div class="icons">
                                    <span class="icon heart-icon"><i class="fas fa-heart"></i></span>
                                    <span class="icon cart-icon"><i class="fas fa-shopping-cart"></i></span>
                                </div>
                            </div>
                            <div class="product-details">
                                <div class="product-name">
                                    <span>Product 1</span>
                                    <button class="rent-now">RENT NOW</button>
                                </div>
                                <div class="product-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="product-price">AED 250</div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- Product Card Start -->
                    {{-- <div class="col-lg-4 col-md-4 col-sm-6 col-6 product">
                        <div class="product-card">
                            <div class="product-image">
                                <img src="{{ asset('./assets/images/product-images/product-image1-1.jpg') }}" alt="Product 1">
                                <button class="buy-now">Buy Now</button>
                                <div class="icons">
                                    <span class="icon heart-icon"><i class="fas fa-heart"></i></span>
                                    <span class="icon cart-icon"><i class="fas fa-shopping-cart"></i></span>
                                </div>
                            </div>
                            <div class="product-details">
                                <div class="product-name">
                                    <span>Product 1</span>
                                    <button class="rent-now">RENT NOW</button>
                                </div>
                                <div class="product-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="product-price">AED 250</div>
                            </div>
                        </div>
                    </div> --}}
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
                             background-image: url(assets/images/product-detail-page/variant1-1.jpg);
                           " title="Red"></label>
                                                 </div>
                                                 <div data-value="Blue"
                                                     class="swatch-element color blue available">
                                                     <input class="swatchInput" id="swatch-0-blue" type="radio"
                                                         name="option-0" value="Blue" />
                                                     <label class="swatchLbl color medium rectangle"
                                                         for="swatch-0-blue" style="
                             background-image: url(assets/images/product-detail-page/variant1-2.jpg);
                           " title="Blue"></label>
                                                 </div>
                                                 <div data-value="Green"
                                                     class="swatch-element color green available">
                                                     <input class="swatchInput" id="swatch-0-green" type="radio"
                                                         name="option-0" value="Green" />
                                                     <label class="swatchLbl color medium rectangle"
                                                         for="swatch-0-green" style="
                             background-image: url(assets/images/product-detail-page/variant1-3.jpg);
                           " title="Green"></label>
                                                 </div>
                                                 <div data-value="Gray"
                                                     class="swatch-element color gray available">
                                                     <input class="swatchInput" id="swatch-0-gray" type="radio"
                                                         name="option-0" value="Gray" />
                                                     <label class="swatchLbl color medium rectangle"
                                                         for="swatch-0-gray" style="
                             background-image: url(assets/images/product-detail-page/variant1-4.jpg);
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
@endsection
@section('js')
<!-- Including Jquery -->
<script src="{{ asset('assets/js/vendor/jquery-3.3.1.min.js')}}"></script>
<script src="{{ asset('assets/js/vendor/jquery.cookie.js')}}"></script>
<script src="{{ asset('assets/js/vendor/modernizr-3.6.0.min.js')}}"></script>
<script src="{{ asset('assets/js/vendor/wow.min.js')}}"></script>
<!-- Including Javascript -->
<script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('assets/js/plugins.js')}}"></script>
<script src="{{ asset('assets/js/popper.min.js')}}"></script>
<script src="{{ asset('assets/js/lazysizes.js')}}"></script>
<script src="{{ asset('assets/js/main.js')}}"></script>


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
@endsection