'

<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description" content="Vuexy backend is super flexible, powerful, clean &amp; modern responsive bootstrap 4 backend template with unlimited possibilities.">
    <meta name="keywords" content="backend template, Vuexy backend template, dashboard template, flat backend template, responsive backend template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Lxry-Shared</title>
    <link rel="apple-touch-icon" href="{{url('public/backend/images/ico/apple-icon-120.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{url('public/backend/images/ico/favicon.ico')}}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{url('public/backend/vendors/css/vendors.min.css')}}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{url('public/backend/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('public/backend/css/bootstrap-extended.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('public/backend/css/colors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('public/backend/css/components.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('public/backend/css/themes/dark-layout.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('public/backend/css/themes/bordered-layout.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('public/backend/css/themes/semi-dark-layout.css')}}">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{url('public/backend/css/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('public/backend/css/plugins/forms/form-validation.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('public/backend/css/pages/authentication.css')}}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{url('public/backend/css/style.css')}}">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern blank-page navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="blank-page">
    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <div class="auth-wrapper auth-basic px-2">
                    <div class="auth-inner my-2">
                        <!-- Register basic -->
                        <div class="card mb-0">
                            <div class="card-body">
                                <a href="#" class="brand-logo">
                                    
                                    <img src="{{url('public/backend/logo/logo.png')}}" alt="">
                                </a>
                                <form class="auth-register-form mt-2" id="frmLogin" action="{{ route('admin.login.post') }}" method="post">
                                    @csrf
                                    <div id="error" class="text-danger"></div>
                                    <div class="mb-1">
                                        <label for="register-email" class="form-label">Email</label>
                                        <input type="text" class="form-control" id="register-email" name="email" placeholder="john@example.com" aria-describedby="register-email" tabindex="2" />
                        <span class="text-danger validation-class" id="email-error"></span>

                                    </div>

                                    <div class="mb-1">
                                        <label for="register-password" class="form-label">Password</label>

                                        <div class="input-group input-group-merge form-password-toggle">
                                            <input type="password" class="form-control form-control-merge" id="register-password" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="register-password" tabindex="3" />
                                            <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                        <span class="text-danger validation-class" id="password-error"></span>

                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary w-100" tabindex="5">Login</button>
                                </form>  
                            </div>
                        </div>
                        <!-- /Register basic -->
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- END: Content-->


    <!-- BEGIN: Vendor JS-->
    <script src="{{url('backend/vendors/js/vendors.min.js')}}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{url('backend/vendors/js/forms/validation/jquery.validate.min.js')}}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{url('backend/js/core/app-menu.js')}}"></script>
    <script src="{{url('backend/js/core/app.js')}}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{url('backend/js/scripts/pages/auth-register.js')}}"></script>
    <!-- END: Page JS-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })
    </script>
     <script>
        $(document).ready(function () {
            $('#frmLogin').on('submit', function (e) {
                e.preventDefault();
    
                var $form = $(this);
                var url = $form.attr('action');
                var formData = new FormData($form[0]);
    
                $.ajax({
                    url: url,
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    beforeSend: function() {
                $('.spinner-loader').css('display', 'block');
                },
                    success: function (res) {
                $('.spinner-loader').css('display', 'none');

                        if (res.status === 200) {
                            // Redirect or perform other actions upon successful login
                            window.location.href="{{route('admin.dashboard')}}";
                        } else {
                            // Handle error (display error message, etc.)
                            $('#error').show().html(res.message);
                        }
                    },
                    error: function () {
                $('.spinner-loader').css('display', 'none');
                        $('#error').show().html('Oops... Something went wrong. Please try again.');
                    }
                });
            });
        });
    </script>
</body>
<!-- END: Body-->

</html>'