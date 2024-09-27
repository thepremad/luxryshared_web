@extends('frontend.layouts.app')
@section('content')
    <!--Body Content-->
    <div id="page-content">        
        <!-- Lookbook Start -->
        <div class="container">
        	<div class="row">
            	<div class="col-12 col-sm-12 col-md-12 col-lg-12">	
        			<div class="empty-page-content text-center">
                        <h1>404 Page Not Found</h1>
                        <p>The page you requested does not exist.</p>
                        <p><a href="http://annimexweb.com/" class="btn btn--has-icon-after">Continue shopping <i class="fa fa-caret-right" aria-hidden="true"></i></a></p>
                      </div>
        		</div>
        	</div>
        </div>
        <!-- Lookbook Start -->
    </div>
    <!--End Body Content-->
    
    <!--Footer-->
   
    <!--End Footer-->
    <!--Scoll Top-->
    <span id="site-scroll"><i class="icon anm anm-angle-up-r"></i></span>
    <!--End Scoll Top-->
    
     <!-- Including Jquery -->
     <script src="{{asset('assets/js/vendor/jquery-3.3.1.min.js')}}"></script>
     <script src="{{asset('assets/js/vendor/jquery.cookie.js')}}"></script>
     <script src="{{asset('assets/js/vendor/modernizr-3.6.0.min.js')}}"></script>
     <script src="{{asset('assets/js/vendor/wow.min.js')}}"></script>
     <script src="{{asset('assets/js/vendor/masonry.js')}}" type="text/javascript"></script>
     <!-- Including Javascript -->
     <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
     <script src="{{asset('assets/js/plugins.js')}}"></script>
     <script src="{{asset('assets/js/popper.min.js')}}"></script>
     <script src="{{asset('assets/js/lazysizes.js')}}"></script>
     <script src="{{asset('assets/js/main.js')}}"></script>
</div>
@endsection