@extends('frontend.layouts.app')
@section('content')
        <div id="page-content" class="aboutUs sharing-caring">
            <div class="container pb-4">
                <div class="aboutUs-Heading">
                    <h4>Sharing is Caring</h4>                                   
                </div>
            </div>

            <div class="container sharing-caring-banner mb-5">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                        <h2>We Can <br> Help The Poor</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <div class="row btn-row mt-4">
                            <div class="col-lg-4">
                                <button class="btn btn-lg donate-btn">Donate Now</button>
                            </div>
                            <div class="col-lg-4">
                                <button class="btn btn-lg aboute-btn">About Us</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6"></div>
                </div>
            </div>
            
            <div class="container sharing-caring-aboutUs mb-5 px-0 py-4">
                <div class="row align-items-start">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 caring-aboutUs-img">
                        <img src="{{asset('assets/images/banners/sharing-about.png')}}" alt="" class="img-fluid">
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 caring-aboutUs-contant">
                        <h4>About <span>Us</span></h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                        </p>

                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                        </p>
                        <a href="" class="btn btn-lg readMore mt-2">Read More</a>
                    </div>
                </div>
            </div>


            <div class="container sharing-caring-causes mt-5 pb-5">
                <h2 class="text-center">Our <span>Causes</span></h2>
                <p class="text-center">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <div class="row causes-row mt-5">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                        <div class="card causes-card border-0 p-0 shadow">
                            <div class="causes-cardImg">
                                <img src="{{asset('assets/images/banners/Causes blog 1.png')}}" alt="Fund for save poor children" class="img-fluid">
                            </div>
                            <div class="card-body p-4">
                                <h4 class="card-title">Fund for Save Poor Children</h4>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <a href="#" class="btn btn-primary readMore-btn">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                        <div class="card causes-card border-0 p-0 shadow">
                            <div class="causes-cardImg">
                                <img src="{{asset('assets/images/banners/Causes blog 1.png')}}" alt="Fund for save poor children" class="img-fluid">
                            </div>
                            <div class="card-body p-4">
                                <h4 class="card-title">Fund for Save Poor Children</h4>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <a href="#" class="btn btn-primary readMore-btn">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                        <div class="card causes-card border-0 p-0 shadow">
                            <div class="causes-cardImg">
                                <img src="{{asset('assets/images/banners/Causes blog 1.png')}}" alt="Fund for save poor children" class="img-fluid">
                            </div>
                            <div class="card-body p-4">
                                <h4 class="card-title">Fund for Save Poor Children</h4>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <a href="#" class="btn btn-primary readMore-btn">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Start Footer -->
           

          
            <!-- End Newsletter Popup -->

            <!-- Including Jquery -->
            <script src="{{asset('assets/js/vendor/jquery-3.3.1.min.js')}}"></script>
            <script src="{{asset('assets/js/vendor/modernizr-3.6.0.min.js')}}"></script>
            <script src="{{asset('assets/js/vendor/jquery.cookie.js')}}"></script>
            <script src="{{asset('assets/js/vendor/wow.min.js')}}"></script>
            <!-- Including Javascript -->
            <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
            <script src="{{asset('assets/js/plugins.js')}}"></script>
            <script src="{{asset('assets/js/popper.min.js')}}"></script>
            <script src="{{asset('assets/js/lazysizes.js')}}"></script>
            <script src="{{asset('assets/js/main.js')}}"></script>
            <!--Instagram Js-->
            <script src="{{asset('assets/js/vendor/jquery.instagramFeed.min.js"></script>
            <!-- Swiper JS CDN -->
            <script src="https://cdn.jsdelivr.net/npm/swiper@latest/swiper-bundle.min.js"></script>
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
            <!-- Initialize Swiper -->


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

        </div>
@endsection