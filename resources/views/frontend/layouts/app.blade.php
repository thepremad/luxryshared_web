<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lxry Shared</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="{{asset('luxury-shared/public/frontend/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('luxury-shared/public/frontend/css/responsive.css')}}">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- Owl Carousel CSS CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
  <!-- Owl Carousel JS CDN -->
  <link rel="stylesheet" type="text/css"
  href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  
  <style>
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
    </style>

</head>
<body>

    @include('frontend.layouts.header')

    @yield('content')

    @include('frontend.layouts.footer')
{!! HTML::script(asset('/backend/vendors/js/extensions/toastr.min.js')) !!}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
    var message = localStorage.getItem('message');
    localStorage.removeItem('message');
    if (message) {
        toastr.success(message);
    }
    </script>
    @include('backend.layouts.js')

</body>
</html>