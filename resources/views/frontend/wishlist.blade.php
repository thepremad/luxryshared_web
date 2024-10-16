@extends('frontend.layouts.app')
@section('content')
    <div id="page-content" class="aboutUs wishlist">
        <div class="container">
                <div class="aboutUs-Heading">
                    <h4>Wishlist</h4>
                    <h5 class="text-center"></h5>                  
                </div>
                <div class="row wishlist-item">

                    @foreach ($wishlist as $item)
                        @if (!empty($item->products))
                            <div class="col-lg-3 col-md-3 col-sm-6 col-6" id="item_withlist_{{ $item->products->id }}">
                                <img class="primary blur-up lazyloaded" data-src="{{asset('uploads/item/' . $item->products->mainImag)}}" src="{{asset('uploads/item/' . $item->products->mainImag)}}" alt="image" title="product">
                                <div class="product-Heading">
                                    <h4>{{ $item->products->item_title ?? '' }}</h4>
                                </div>
                                <ul class="list-unstyled" style="display: inline-flex;">
                                    <li><i class="fa fa-star px-2 star"></i></li>
                                    <li><i class="fa fa-star px-2 star"></i></li>
                                    <li><i class="fa fa-star px-2 star"></i></li>
                                    <li><i class="fa fa-star px-2 star"></i></li>
                                    <li><i class="fa fa-star px-2 star"></i></li>
                                </ul>
                                <div class="product-pricewish">
                                    <h5>AED {{ $item->products->rrp_price ?? '' }}</h5>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <button class="btn btn-dark btn-block" id="rentNowBtn">RENT NOW</button>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <form action="{{ route('list_item.add_to_Cart') }}" method="POST" id="add_to_cart_form{{ $item->id }}">
                                            @csrf
                                            <input type="hidden" name="item_id" value="{{ $item->products->id }}">
                                            <input type="hidden" name="days" value="1">
                                            <button class="btn btn-light btn-bloxk" id="buyNowBtn">Add To Cart</button>
                                        </form>
                                    </div>
                                </div>
                                
                                
                            </div>   
                            
                            <script>
                                $(document).ready(function() {
                                $('#add_to_cart_form{{ $item->id }}').on('submit', function(e) {
                                    e.preventDefault(); // Prevent the default form submission
                                    var $form = $('#add_to_cart_form{{ $item->id }}');
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
                                            updateCartCount();
                                            $('#item_withlist_'+res.item_id).hide();
                                            // window.location.href = res;
                                            // showStep(step + 1);
                                            // $('#step_id').val(2);
                                            Toastify({
                                                text: res.message,
                                                className: "success",
                                                style: {
                                                    background: "linear-gradient(to right, #00b09b, #96c93d)",
                                                }
                                            }).showToast();
                                        },
                                        error: function(res) {
                                            if (res.status == 400 || res.status == 422) {
                                                if (res.responseJSON && res.responseJSON.error) {
                                                    var error = res.responseJSON.error
                                                    $.each(error, function(key, value) {
                                                        Toastify({
                                                            text: value,
                                                            className: "error",
                                                            style: {
                                                                background: "linear-gradient(to right, #a01515, #a01515)",
                                                            }
                                                        }).showToast();
                                                        // alert(value);
                                                    });
                                                }
                                            }
                                        }
                                    });
                                });
                            });
                            </script>
                        @endif
                    @endforeach
                    

                    {{-- <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                        <img class="primary blur-up lazyloaded" data-src="assets/img/Rectangle 27.png" src="assets/img/Rectangle 27.png" alt="image" title="product">
                        <div class="product-Heading">
                            <h4>Buttons tweed blazer</h4>
                        </div>
                        <ul class="list-unstyled" style="display: inline-flex;">
                            <li><i class="fa fa-star px-2 star"></i></li>
                            <li><i class="fa fa-star px-2 star"></i></li>
                            <li><i class="fa fa-star px-2 star"></i></li>
                            <li><i class="fa fa-star px-2 star"></i></li>
                            <li><i class="fa fa-star px-2 star"></i></li>
                        </ul>
                        <div class="product-pricewish">
                            <h5>AED 250</h5>
                        </div>
                        <button class="btn btn-block bg-white">BUY NOW</button>
                        <button class="btn btn-block bg-dark">Add to cart</button>

                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                        <img class="primary blur-up lazyloaded" data-src="./public/assets/img/Rectangle 27.png" src="assets/img/Rectangle 27.png" alt="image" title="product">
                        <div class="product-Heading">
                            <h4>Buttons tweed blazer</h4>
                        </div>
                        <ul class="list-unstyled" style="display: inline-flex;">
                            <li><i class="fa fa-star px-2 star"></i></li>
                            <li><i class="fa fa-star px-2 star"></i></li>
                            <li><i class="fa fa-star px-2 star"></i></li>
                            <li><i class="fa fa-star px-2 star"></i></li>
                            <li><i class="fa fa-star px-2 star"></i></li>
                        </ul>
                        <div class="product-pricewish">
                            <h5>AED 250</h5>
                        </div>
                        <button class="btn btn-block bg-white">BUY NOW</button>
                        <button class="btn btn-block bg-dark">Add to cart</button>

                    </div>
                    
                    <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                        <img class="primary blur-up lazyloaded" data-src="./public/assets/img/Rectangle 27.png" src="assets/img/Rectangle 27.png" alt="image" title="product">
                        <div class="product-Heading">
                            <h4>Buttons tweed blazer</h4>
                        </div>
                        <ul class="list-unstyled" style="display: inline-flex;">
                            <li><i class="fa fa-star px-2 star"></i></li>
                            <li><i class="fa fa-star px-2 star"></i></li>
                            <li><i class="fa fa-star px-2 star"></i></li>
                            <li><i class="fa fa-star px-2 star"></i></li>
                            <li><i class="fa fa-star px-2 star"></i></li>
                        </ul>
                        <div class="product-pricewish">
                            <h5>AED 250</h5>
                        </div>
                        <button class="btn btn-block bg-white">BUY NOW</button>
                        <button class="btn btn-block bg-dark">Add to cart</button>

                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                        <img class="primary blur-up lazyloaded" data-src="./public/assets/img/Rectangle 27.png" src="assets/img/Rectangle 27.png" alt="image" title="product">
                        <div class="product-Heading">
                            <h4>Buttons tweed blazer</h4>
                        </div>
                        <ul class="list-unstyled" style="display: inline-flex;">
                            <li><i class="fa fa-star px-2 star"></i></li>
                            <li><i class="fa fa-star px-2 star"></i></li>
                            <li><i class="fa fa-star px-2 star"></i></li>
                            <li><i class="fa fa-star px-2 star"></i></li>
                            <li><i class="fa fa-star px-2 star"></i></li>
                        </ul>
                        <div class="product-pricewish">
                            <h5>AED 250</h5>
                        </div>
                        <button class="btn btn-block bg-white">BUY NOW</button>
                        <button class="btn btn-block bg-dark">Add to cart</button>

                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                        <img class="primary blur-up lazyloaded" data-src="./public/assets/img/Rectangle 27.png" src="assets/img/Rectangle 27.png" alt="image" title="product">
                        <div class="product-Heading">
                            <h4>Buttons tweed blazer</h4>
                        </div>
                        <ul class="list-unstyled" style="display: inline-flex;">
                            <li><i class="fa fa-star px-2 star"></i></li>
                            <li><i class="fa fa-star px-2 star"></i></li>
                            <li><i class="fa fa-star px-2 star"></i></li>
                            <li><i class="fa fa-star px-2 star"></i></li>
                            <li><i class="fa fa-star px-2 star"></i></li>
                        </ul>
                        <div class="product-pricewish">
                            <h5>AED 250</h5>
                        </div>
                        <button class="btn btn-block bg-white">BUY NOW</button>
                        <button class="btn btn-block bg-dark">Add to cart</button>

                    </div>
                    </div> --}}

                </div>
            </div>
        </div>
    </div>
    <!--End Body Content-->
    @section('js')
    
    @endsection
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
</div>



@endsection
