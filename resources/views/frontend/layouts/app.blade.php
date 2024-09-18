@include('frontend.layouts.header')
        <!--End Desktop Menu-->

        @yield('content')
        
            @include('frontend.layouts.footer')


            <script src="{{asset('frontend/assets/js/vendor/jquery-3.3.1.min.js')}}"></script>
            <script src="{{asset('frontend/assets/js/vendor/modernizr-3.6.0.min.js')}}"></script>
            <script src="{{asset('frontend/assets/js/vendor/jquery.cookie.js')}}"></script>
            <script src="{{asset('frontend/assets/js/vendor/wow.min.js')}}"></script>
            <!-- Including Javascript -->
            <script src="{{asset('frontend/assets/js/bootstrap.min.js')}}"></script>
            <script src="{{asset('frontend/assets/js/plugins.js')}}"></script>
            <script src="{{asset('frontend/assets/js/popper.min.js')}}"></script>
            <script src="{{asset('frontend/assets/js/lazysizes.js')}}"></script>
            <script src="{{asset('frontend/assets/js/main.js')}}"></script>
            <!--Instagram Js-->
            <script src="{{asset('frontend/assets/js/vendor/jquery.instagramFeed.min.js')}}"></script>
            <!-- Swiper JS CDN -->
            <script src="https://cdn.jsdelivr.net/npm/swiper@latest/swiper-bundle.min.js"></script>
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
            @yield('js')
            <!-- Initialize Swiper -->
            
        </div>
</body>

<!-- Mirrored from annimexweb.com/items/belle/home8-jewellery.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 22 Jun 2023 11:21:41 GMT -->

</html>