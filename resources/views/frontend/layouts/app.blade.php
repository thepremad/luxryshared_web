<!DOCTYPE html>
<html class="no-js" lang="en">

<!-- Mirrored from annimexweb.com/items/belle/home8-jewellery.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 22 Jun 2023 11:20:36 GMT -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>LXRY</title>
    <meta name="description" content="description">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" />
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins.css') }}">
    <!-- Bootstap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style2.css') }}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    
    <!-- Slider Link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@latest/swiper-bundle.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    

 <!-- Page CSS -->
 <link rel="stylesheet" href="{{ asset('assets/css/login-register.css') }}">

{{--
</head>

 <body class="template-index home8-jewellery belle">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lxry Shared</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/responsive.css')}}">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- Owl Carousel CSS CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
  <!-- Owl Carousel JS CDN -->
  <link rel="stylesheet" type="text/css"
  href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
   --}}
  {{-- <style>
        p.clearfix.mb-0 {
            float: right !important;
            display: none
        }

        .alert.alert-success {
            width: fit-content;
            padding: 15px;
            position: absolute;
            top: 66px;
            z-index: 999;
            right: 0;
        }

        .alert.alert-warning {
            width: fit-content;
            padding: 15px;
            position: absolute;
            top: 66px;
            z-index: 999;
            right: 0;
        }

        .Active {
            color: green;
            font-weight: 900;
        }

        .Inactive {
            color: red;
            font-weight: 900;
        }
    </style> --}}
    <style>
        .alert-info {
    color: #ffffff;
    background-color: #51ca51;
    border-color: #bee5eb;
    width: 20%;
    position: absolute;
    top: 14px;
    border-radius: 9px;
    right: 14px;
}
     .alert-danger{
    color: #ffffff;
    background-color: #ca7751;
    border-color: #bee5eb;
    width: 20%;
    position: absolute;
    top: 14px;
    border-radius: 9px;
    right: 14px;
}
    </style>

</head>
<body class="template-index home8-jewellery belle">
    <div id="pre-loader">
        <img src="{{ asset('assets/images/loader.gif')}}" alt="Loading..." />
    </div>
    <div class="pageWrapper">
        <!--Search Form Drawer-->
        <div class="search">
            <div class="search__form">
                <form class="search-bar__form" action="#">
                    <button class="go-btn search__button" type="submit"><i class="icon anm anm-search-l"></i></button>
                    <input class="search__input" type="search" name="q" value placeholder="Search entire store..."
                        aria-label="Search" autocomplete="off">
                </form>
                <button type="button" class="search-trigger close-btn"><i class="anm anm-times-l"></i></button>
            </div>
        </div>
        <!--End Search Form Drawer-->

        @include('frontend.layouts.header')

        @yield('content')

        @include('frontend.layouts.footer')
    </div>
        @yield('js')
{{-- {!! HTML::script(asset('/backend/vendors/js/extensions/toastr.min.js')) !!}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
    var message = localStorage.getItem('message');
    localStorage.removeItem('message');
    if (message) {
        toastr.success(message);
    }
    </script> --}}
    @include('frontend.layouts.js')

</body>

<!-- Mirrored from annimexweb.com/items/belle/home8-jewellery.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 22 Jun 2023 11:21:41 GMT -->

</html>