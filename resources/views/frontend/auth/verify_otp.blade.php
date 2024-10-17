@extends('frontend.layouts.app')
 @section('content')
   <!--Body Content-->
   @if(Session::has('incorrect-otp'))
   <p class="alert alert-danger" id="wakoo">{{ Session::get('incorrect-otp') }}</p>
@endif
@if(Session::has("success-mail"))
<p class="alert alert-info" id="wakoo">{{ Session::get('success-mail')}}</p>
@endif
<script>
    // Function to hide the alert after 3 seconds
    setTimeout(function() {
        var alert = document.getElementById('wakoo');
        if (alert) {
            alert.style.display = 'none';
        }
    }, 3000); // 3000 milliseconds = 3 seconds
</script> 
   <div id="page-content" class="register">
            <div class="container-fluid">
                <div class="loginRegister-section">
                    <div class="row">
                        <div class="register-banner">
                            <div class="register-banner-img forget">
                                <img src="{{ asset('./assets/images/banners/register-banner2.png') }}" alt="Banner" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="row formRow update">
                        <div class="col-md-7 col-lg-7 register-tabSection">

                            <div class="card">
                                <div class="card-body" style="text-align: center">
                                    <form  action="{{ route('submit_verify_otp') }}"  id="verifyOtpForm">
                                     @csrf   
                                        
                                     <h2>Enter your OTP</h2>
                                     <h5>Verify it’s you</h5>
                                     <p>Enter verification code</p>

                                        <div class="form-group">
                                            <div class="d-flex justify-content-center" style="gap:20px">
                                                <input type="hidden" value="" name="mainotp" id="main_otp">
                                                <input type="text" id="otp1" class="form-control verification-input" maxlength="1" pattern="[0-9]*" placeholder="-">
                                                <input type="text" id="otp2" class="form-control verification-input" maxlength="1" pattern="[0-9]*" placeholder="-">
                                                <input type="text" id="otp3" class="form-control verification-input" maxlength="1" pattern="[0-9]*" placeholder="-">
                                                <input type="text" id="otp4" oninput="otp(this)" class="form-control verification-input" maxlength="1" pattern="[0-9]*" placeholder="-">
                                                <input type="hidden" name="user_id" value="{{ $user->id }}">
                                            </div>
                                           
                                            <div>
                                                <span class="text-danger validation-class"
                                                    id="mainotp-verify_otp_errors"></span>
                                            </div>
                                            
                                        </div>
                                        <div class="form-group saveBtn text-center">
                                            <p>A verification code has been sent to your email, please also check your junk folder.</p>
                                            <button type="submit" class="btn btn-primary" >Verify</button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
 

@endsection
@section('js')
  <!-- Including Jquery -->
  <script src="{{ asset('assets/js/vendor/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/modernizr-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery.cookie.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/wow.min.js') }}"></script>
    <!-- Including Javascript -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/lazysizes.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <!--Instagram Js-->
    <script src="{{ asset('assets/js/vendor/jquery.instagramFeed.min.js') }}"></script>
    <script>
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
    <!--End Instagram Js-->
    <!--For Newsletter Popup-->
    <script>
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
            if (jQuery.cookie('noShowWelcome')) { jQuery('#popup-container').hide(); jQuery('#active-popup').hide(); }
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
          -------------------------------------- */
        if (Cookies.get('promotion') != 'true') {
            $(".notification-bar").show();
        }
        $(".close-announcement").on('click', function () {
            $(".notification-bar").slideUp();
            Cookies.set('promotion', 'true', { expires: 1 });
            return false;
        });
    </script>
    <!--End For Newsletter Popup-->

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
           
            // Password visibility toggle
            document.querySelectorAll('.password-visibility-toggle').forEach(toggle => {
                toggle.addEventListener('click', function() {
                    const input = this.previousElementSibling;
                    const type = input.type === 'password' ? 'text' : 'password';
                    input.type = type;
                    this.querySelector('i').classList.toggle('fa-eye', type === 'password');
                    this.querySelector('i').classList.toggle('fa-eye-slash', type === 'text');
                });
            });


        });
        function otp(data){
            var otp = $('#otp1').val() + $('#otp2').val() + $('#otp3').val() + $('#otp4').val();
            $("#main_otp").val(otp);
            
        }
    </script>


<script>
    $(document).ready(function() {

        $('#verifyOtpForm').on('submit', function(e) {
            e.preventDefault(); // Prevent the default form submission
            var $form = $('#verifyOtpForm');
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
                    // location.reload();
                    window.location.href = res;
                },
                error: function(res) {
                    if (res.status == 400 || res.status == 422) {
                        if (res.responseJSON && res.responseJSON.errors) {
                            var error = res.responseJSON.errors
                            $.each(error, function(key, value) {
                                $("#" + key + "-verify_otp_errors").text(value[0]);
                            });
                        }
                    }
                }
            });
        });
    });
</script>

@endsection