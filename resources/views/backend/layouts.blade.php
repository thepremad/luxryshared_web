<!-- dashboard data start from here..................................................................... -->

<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description">
    <meta name="keywords">
    <meta name="author" content="PIXINVENT">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Lxry-Shared</title>
    <link rel="apple-touch-icon" href="{{url('/backend/images/ico/apple-icon-120.png')}}">
    <link rel="icon" href="{{url('/frontEnd/images/logo.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{url('//backend/images/ico/favicon.ico')}}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
        rel="stylesheet">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    {!! HTML::style(asset('/backend/vendors/css/vendors.min.css'))!!}
    {!! HTML::style(asset('/backend/vendors/css/extensions/toastr.min.css'))!!}
    <!-- END: Vendor CSS-->
    

    <!-- BEGIN: Theme CSS-->
    {!! HTML::style(asset('/backend/css/bootstrap.css'))!!}
    {!! HTML::style(asset('/backend/css/bootstrap-extended.css'))!!}
    {!! HTML::style(asset('/backend/css/colors.css'))!!}
    {!! HTML::style(asset('/backend/css/components.css'))!!}
    {!! HTML::style(asset('/backend/css/themes/bordered-layout.css'))!!}
    {!! HTML::style(asset('/backend/css/themes/semi-dark-layout.css'))!!}

    <!-- BEGIN: Page CSS-->
    {!! HTML::style(asset('/backend/css/core/menu/menu-types/horizontal-menu.css'))!!}
    {!! HTML::style(asset('/backend/css/plugins/extensions/ext-component-toastr.css'))!!}
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    {!! HTML::style(asset('/backend/css/pages/page-profile.css'))!!}
    {!! HTML::style(asset('/backend/vendors/css/tables/datatable/dataTables.bootstrap5.min.css'))!!}
    {!! HTML::style(asset('/backend/vendors/css/tables/datatable/responsive.bootstrap5.min.css'))!!}
    <!-- END: Custom CSS-->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

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
    @yield('style')

</head>

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click"
    data-menu="vertical-menu-modern" data-col="">

    <!-- BEGIN: Header-->
    @include('backend.layouts.header')
    <!-- END: Header-->

    <!-- BEGIN: Main Menu-->
    @include('backend.layouts.sidebar')

    @yield('content')

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>
    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
        <p class="clearfix mb-0"><span class="float-md-start d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2021<a
                    class="ms-25" href="https://1.envato.market/pixinvent_portfolio" target="_blank">Pixinvent</a><span
                    class="d-none d-sm-inline-block">, All rights Reserved</span></span><span
                class="float-md-end d-none d-md-block">Hand-crafted & Made with<i data-feather="heart"></i></span></p>
    </footer>
    <button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
    <!-- END: Footer-->

    @include('backend.layouts.js')

    <script>
        // Auto-hide flash message after 2 seconds
        setTimeout(function () {
            document.getElementById('flash-message').style.display = 'none';
        }, 2000);

        function filterAlphabets(inputField) {
            // Remove non-alphabetic characters using a regular expression
            inputField.value = inputField.value.replace(/[^a-zA-Z\s]/g, '');
        }
    </script>
    @yield('script')


</body>

</html>