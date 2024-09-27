@extends('frontend.layouts.app')
@section('content')
    <div id="page-content">
    	<!--Page Title-->
    	<div class="page section-header text-center">
			<div class="page-title">
        		<div class="wrapper"><h1 class="page-width">Wish List</h1></div>
      		</div>
		</div>
        <!--End Page Title-->
        
        <div class="container">
        	<div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 main-col">
                	<form action="#">
                        <div class="wishlist-table table-content table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                    	<th class="product-name text-center alt-font">Remove</th>
                                        <th class="product-price text-center alt-font">Images</th>
                                        <th class="product-name alt-font">Product</th>
                                        <th class="product-price text-center alt-font">Unit Price</th>
                                        <th class="stock-status text-center alt-font">Stock Status</th>
                                        <th class="product-subtotal text-center alt-font">Add to Cart</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($wishlist as $val)
                                    
                                    <tr>
                                    	<td class="product-remove text-center" valign="middle"><a href="{{route('remove_wishlist',$val->id)}}"><i class="icon icon anm anm-times-l"></i></a></td>
                                        <td class="product-thumbnail text-center">
                                            <a href="#"><img src="{{asset('uploads/item/'.$val->mainImag)}}" alt="" title="" /></a>
                                        </td>
                                        <td class="product-name"><h4 class="no-margin"><a href="#">{{$val->products->item_title ?? ''}}</a></h4></td>
                                        <td class="product-price text-center"><span class="amount">{{$val->products->rrp_price ?? ''}}</span></td>
                                        <td class="stock text-center">
                                            <span class="in-stock">in stock</span>
                                        </td>
                                        <td class="product-subtotal text-center"><a href="{{route('add_to_cart',$val->item_id)}}" class="btn btn-small">Add To Cart</a></td>
                                    </tr>
                                    @endforeach
                                   
                                </tbody>
                            </table>
                        </div>
                    </form>                   
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
