@extends('frontend.layouts.app')

@section('content')

 <!--Body Content-->
 <div id="page-content">
    <div class="container-fluid">
        <div class="loginRegister-section">
            <div class="row">
                <div class="register-banner">
                    <div class="register-banner-img">
                        <img src="{{ asset('./assets/images/banners/register-banner.png')}}" alt="Banner" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="row formRow">
                <div class="col-md-7 col-lg-7 register-tabSection">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="login-tab" data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="true">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="register-tab" data-toggle="tab" href="#register" role="tab" aria-controls="register" aria-selected="false">Register</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">

                        <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
                            <div class="form-section login-section">
                                <form class="loginForm">
                                    <div class="form-group">
                                        <label for="loginEmail">Your email</label>
                                        <input type="email" class="form-control" id="loginEmail" placeholder="Enter email">
                                    </div>
                                    <div class="form-group">
                                        <label for="loginPassword">Password</label>
                                        <div class="input-group">
                                            <input type="password" class="form-control" id="loginPassword" placeholder="Password">
                                            <div class="input-group-append">
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="#" class="d-block text-right">Forgot Password?</a>
                                    <div class="loginButton">
                                        <button type="submit" class="btn btn-primary sign-btn">Sign In</button>
                                        <button type="button" class="btn btn-secondary mt-3 sign-google">Google</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
                            <div class="form-section register-section">
                                <h3>Register With LXRY Shared</h3>
                                <form class="registerForm">
                                    <div class="form-group">
                                        <label for="registerEmail">Email Address*</label>
                                        <input type="email" class="form-control" id="registerEmail" placeholder="Enter email">
                                        <span class="error-message" id="emailError"></span> <!-- Error message span -->
                                    </div>
                                    <div class="form-group">
                                        <label for="firstName">First Name*</label>
                                        <input type="text" class="form-control" id="firstName" placeholder="First Name">
                                        <span class="error-message" id="firstNameError"></span> <!-- Error message span -->
                                    </div>
                                    <div class="form-group">
                                        <label for="lastName">Last Name*</label>
                                        <input type="text" class="form-control" id="lastName" placeholder="Last Name">
                                        <span class="error-message" id="lastNameError"></span> <!-- Error message span -->
                                    </div>
                                    <div class="form-group">
                                        <label for="registerPassword">Password</label>
                                        <input type="password" class="form-control" id="registerPassword" placeholder="Enter Password">
                                        <span class="error-message" id="passwordError"></span> <!-- Error message span -->
                                    </div>
                                    <div class="form-group">
                                        <label for="confirmPassword">Confirm Password</label>
                                        <input type="password" class="form-control" id="confirmPassword" placeholder="Enter Your Password Again">
                                        <span class="error-message" id="confirmPasswordError"></span> <!-- Error message span -->
                                    </div>
                                    <div class="form-group">
                                        <label for="mobileNumber">Mobile Number*</label>
                                        <input type="text" class="form-control" id="mobileNumber" placeholder="Enter Mobile Number">
                                        <span class="error-message" id="mobileNumberError"></span> <!-- Error message span -->
                                    </div>
                                    <div class="form-group">
                                        <label for="referralCode">Referral Code</label>
                                        <input type="text" class="form-control" id="referralCode" placeholder="Enter your Referral code">
                                        <span class="error-message" id="referralCodeError"></span> <!-- Error message span -->
                                    </div>
                                    <div class="form-group">
                                        <label for="address">Address</label>
                                        <input type="text" class="form-control" id="address" placeholder="Enter your address">
                                        <span class="error-message" id="addressError"></span> <!-- Error message span -->
                                    </div>
                                    <div class="form-group">
                                        <label for="location">Location</label>
                                        <iframe src="" id="locationMap" style="width: 100%; height: 200px;" frameborder="0" allowfullscreen></iframe>
                                        <span class="error-message" id="locationError"></span> <!-- Error message span -->
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-3 col-sm-3 col-6">
                                                <img id="idPreview" class="img-preview mt-2" src="#" alt="ID Preview">
                                            </div>
                                            <div class="col-lg-9 col-sm-9 col-6">
                                                <label for="idVerification">Upload Emirates ID Card or Passport*</label>
                                                <span id="idDeciade">(ID verification to be decided)</span>
                                                <label class="custom-file-upload" for="idVerification"></label>
                                                <input type="file" class="form-control-file" id="idVerification" accept="image/*">
                                                <span class="error-message" id="idVerificationError"></span> <!-- Error message span -->
                                            </div>
                                        </div>
                                    </div>                                            
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="terms">
                                        <label class="form-check-label" for="terms">I AGREE TO THE TERMS OF SERVICES AND PRIVACY POLICY.</label>
                                        <span class="error-message" id="termsError"></span> <!-- Error message span -->
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="marketing">
                                        <label class="form-check-label" for="marketing">I AGREE TO RECEIVE MARKETING EMAILS FROM LXRY.</label>
                                        <span class="error-message" id="marketingError"></span> <!-- Error message span -->
                                    </div>
                                    <div class="registerForm-btnSection mt-3">
                                        <button type="submit" class="btn btn-primary mt-3 btn-register">Register</button>
                                        <p class="mt-3 dividerTxt">OR REGISTER USING</p>
                                        <button type="button" class="btn btn-google mt-2">
                                            <i class="fab fa-google"></i> Google
                                        </button>
                                    </div>
                                </form>
                            </div>                                    
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End Body Content-->
 <!--Scoll Top-->
 <span id="site-scroll"><i class="icon anm anm-angle-up-r"></i></span>
 <!--End Scoll Top-->

 <!--Quick View popup-->
 <div class="modal fade quick-view-popup" id="content_quickview">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-body">
                 <div id="ProductSection-product-template" class="product-template__container prstyle1">
                     <div class="product-single">
                         <!-- Start model close -->
                         <a href="javascript:void()" data-dismiss="modal" class="model-close-btn pull-right"
                             title="close"><span class="icon icon anm anm-times-l"></span></a>
                         <!-- End model close -->
                         <div class="row">
                             <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                 <div class="product-details-img">
                                     <div class="pl-20">
                                         <img src="assets/images/product-detail-page/camelia-reversible-big1.jpg"
                                             alt />
                                     </div>
                                 </div>
                             </div>
                             <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                 <div class="product-single__meta">
                                     <h2 class="product-single__title">Product
                                         Quick View Popup</h2>
                                     <div class="prInfoRow">
                                         <div class="product-stock">
                                             <span class="instock ">In
                                                 Stock</span> <span class="outstock hide">Unavailable</span>
                                         </div>
                                         <div class="product-sku">SKU:
                                             <span class="variant-sku">19115-rdxs</span>
                                         </div>
                                     </div>
                                     <p class="product-single__price product-single__price-product-template">
                                         <span class="visually-hidden">Regular
                                             price</span>
                                         <s id="ComparePrice-product-template"><span class="money">$600.00</span></s>
                                         <span
                                             class="product-price__price product-price__price-product-template product-price__sale product-price__sale--single">
                                             <span id="ProductPrice-product-template"><span
                                                     class="money">$500.00</span></span>
                                         </span>
                                     </p>
                                     <div class="product-single__description rte">
                                         Belle Multipurpose Bootstrap
                                         4 Html Template that will
                                         give you and your customers
                                         a smooth shopping experience
                                         which can be used for
                                         various kinds of stores such
                                         as fashion,...
                                     </div>

                                     <form method="post" action="http://annimexweb.com/cart/add"
                                         id="product_form_10508262282" accept-charset="UTF-8"
                                         class="product-form product-form-product-template hidedropdown"
                                         enctype="multipart/form-data">
                                         <div class="swatch clearfix swatch-0 option1" data-option-index="0">
                                             <div class="product-form__item">
                                                 <label class="header">Color:
                                                     <span class="slVariant">Red</span></label>
                                                 <div data-value="Red" class="swatch-element color red available">
                                                     <input class="swatchInput" id="swatch-0-red" type="radio"
                                                         name="option-0" value="Red">
                                                     <label class="swatchLbl color medium rectangle"
                                                         for="swatch-0-red"
                                                         style="background-image:url(assets/images/product-detail-page/variant1-1.jpg);"
                                                         title="Red"></label>
                                                 </div>
                                                 <div data-value="Blue" class="swatch-element color blue available">
                                                     <input class="swatchInput" id="swatch-0-blue" type="radio"
                                                         name="option-0" value="Blue">
                                                     <label class="swatchLbl color medium rectangle"
                                                         for="swatch-0-blue"
                                                         style="background-image:url(assets/images/product-detail-page/variant1-2.jpg);"
                                                         title="Blue"></label>
                                                 </div>
                                                 <div data-value="Green"
                                                     class="swatch-element color green available">
                                                     <input class="swatchInput" id="swatch-0-green" type="radio"
                                                         name="option-0" value="Green">
                                                     <label class="swatchLbl color medium rectangle"
                                                         for="swatch-0-green"
                                                         style="background-image:url(assets/images/product-detail-page/variant1-3.jpg);"
                                                         title="Green"></label>
                                                 </div>
                                                 <div data-value="Gray" class="swatch-element color gray available">
                                                     <input class="swatchInput" id="swatch-0-gray" type="radio"
                                                         name="option-0" value="Gray">
                                                     <label class="swatchLbl color medium rectangle"
                                                         for="swatch-0-gray"
                                                         style="background-image:url(assets/images/product-detail-page/variant1-4.jpg);"
                                                         title="Gray"></label>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="swatch clearfix swatch-1 option2" data-option-index="1">
                                             <div class="product-form__item">
                                                 <label class="header">Size:
                                                     <span class="slVariant">XS</span></label>
                                                 <div data-value="XS" class="swatch-element xs available">
                                                     <input class="swatchInput" id="swatch-1-xs" type="radio"
                                                         name="option-1" value="XS">
                                                     <label class="swatchLbl medium rectangle" for="swatch-1-xs"
                                                         title="XS">XS</label>
                                                 </div>
                                                 <div data-value="S" class="swatch-element s available">
                                                     <input class="swatchInput" id="swatch-1-s" type="radio"
                                                         name="option-1" value="S">
                                                     <label class="swatchLbl medium rectangle" for="swatch-1-s"
                                                         title="S">S</label>
                                                 </div>
                                                 <div data-value="M" class="swatch-element m available">
                                                     <input class="swatchInput" id="swatch-1-m" type="radio"
                                                         name="option-1" value="M">
                                                     <label class="swatchLbl medium rectangle" for="swatch-1-m"
                                                         title="M">M</label>
                                                 </div>
                                                 <div data-value="L" class="swatch-element l available">
                                                     <input class="swatchInput" id="swatch-1-l" type="radio"
                                                         name="option-1" value="L">
                                                     <label class="swatchLbl medium rectangle" for="swatch-1-l"
                                                         title="L">L</label>
                                                 </div>
                                             </div>
                                         </div>
                                         <!-- Product Action -->
                                         <div class="product-action clearfix">
                                             <div class="product-form__item--quantity">
                                                 <div class="wrapQtyBtn">
                                                     <div class="qtyField">
                                                         <a class="qtyBtn minus" href="javascript:void(0);"><i
                                                                 class="fa anm anm-minus-r"
                                                                 aria-hidden="true"></i></a>
                                                         <input type="text" id="Quantity" name="quantity" value="1"
                                                             class="product-form__input qty">
                                                         <a class="qtyBtn plus" href="javascript:void(0);"><i
                                                                 class="fa anm anm-plus-r"
                                                                 aria-hidden="true"></i></a>
                                                     </div>
                                                 </div>
                                             </div>
                                             <div class="product-form__item--submit">
                                                 <button type="button" name="add"
                                                     class="btn product-form__cart-submit">
                                                     <span>Add to
                                                         cart</span>
                                                 </button>
                                             </div>
                                         </div>
                                         <!-- End Product Action -->
                                     </form>
                                     <div class="display-table shareRow">
                                         <div class="display-table-cell">
                                             <div class="wishlist-btn">
                                                 <a class="wishlist add-to-wishlist" href="#"
                                                     title="Add to Wishlist"><i class="icon anm anm-heart-l"
                                                         aria-hidden="true"></i>
                                                     <span>Add to
                                                         Wishlist</span></a>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <!--End-product-single-->
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!--End Quick View popup-->

 <!-- Newsletter Popup -->
 <div class="newsletter-wrap" id="popup-container">
     <div id="popup-window">
         <a class="btn closepopup"><i class="icon icon anm anm-times-l"></i></a>
         <!-- Modal content-->
         <div class="display-table splash-bg">
             <div class="display-table-cell width40"><img src="assets/images/newsletter-img.jpg"
                     alt="Join Our Mailing List" title="Join Our Mailing List" /> </div>
             <div class="display-table-cell width60 text-center">
                 <div class="newsletter-left">
                     <h2>Join Our Mailing List</h2>
                     <p>Sign Up for our exclusive email list and be
                         the first to know about new products and
                         special offers</p>
                     <form action="#" method="post">
                         <div class="input-group">
                             <input type="email" class="input-group__field newsletter__input" name="EMAIL" value
                                 placeholder="Email address" required>
                             <span class="input-group__btn">
                                 <button type="submit" class="btn newsletter__submit" name="commit"
                                     id="subscribeBtn">
                                     <span class="newsletter__submit-text--large">Subscribe</span>
                                 </button>
                             </span>
                         </div>
                     </form>
                     <ul class="list--inline site-footer__social-icons social-icons">
                         <li><a class="social-icons__link" href="#" title="Facebook"><i
                                     class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
                         <li><a class="social-icons__link" href="#" title="Twitter"><i class="fa fa-twitter"
                                     aria-hidden="true"></i></a></li>
                         <li><a class="social-icons__link" href="#" title="Pinterest"><i class="fa fa-pinterest"
                                     aria-hidden="true"></i></a></li>
                         <li><a class="social-icons__link" href="#" title="Instagram"><i class="fa fa-instagram"
                                     aria-hidden="true"></i></a></li>
                         <li><a class="social-icons__link" href="#" title="YouTube"><i class="fa fa-youtube"
                                     aria-hidden="true"></i></a></li>
                         <li><a class="social-icons__link" href="#" title="Vimeo"><i class="fa fa-vimeo"
                                     aria-hidden="true"></i></a></li>
                     </ul>
                 </div>
             </div>
         </div>
     </div>
 </div>
</div>
 <!-- End Newsletter Popup -->

@endsection
@section('js')
      <!-- Including Jquery -->
      <script src="{{ asset('assets/js/vendor/jquery-3.3.1.min.js')}}"></script>
      <script src="{{ asset('assets/js/vendor/modernizr-3.6.0.min.js')}}"></script>
      <script src="{{ asset('assets/js/vendor/jquery.cookie.js')}}"></script>
      <script src="{{ asset('assets/js/vendor/wow.min.js')}}"></script>
      <!-- Including Javascript -->
      <script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
      <script src="{{ asset('assets/js/plugins.js')}}"></script>
      <script src="{{ asset('assets/js/popper.min.js')}}"></script>
      <script src="{{ asset('assets/js/lazysizes.js')}}"></script>
      <script src="{{ asset('assets/js/main.js')}}"></script>
      <!--Instagram Js-->
      <script src="{{ asset('assets/js/vendor/jquery.instagramFeed.min.js')}}"></script>
      
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

 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 <script>
     $(document).ready(function() {
         // Toggle Password Visibility
         $('#togglePassword').on('click', function() {
             var passwordField = $('#loginPassword');
             var type = passwordField.attr('type') === 'password' ? 'text' : 'password';
             passwordField.attr('type', type);
             $(this).text(type === 'password' ? 'Show' : 'Hide');
         });

         // Handle Register Tab Click
         $('#register-tab').on('click', function() {
             $('.register-banner').addClass('hidden');
         });

         $('#login-tab').on('click', function() {
             $('.register-banner').removeClass('hidden');
         });

         // Preview ID Card
         $('#idVerification').on('change', function(event) {
             var reader = new FileReader();
             reader.onload = function(e) {
                 $('#idPreview').attr('src', e.target.result);
             }
             reader.readAsDataURL(this.files[0]);
         });
     });
 </script>

 <script>
     $(document).ready(function() {
     function updateMargin() {
         var $registerTab = $('#register.tab-pane.fade.active.show');
         var $formRow = $('.row.formRow');
         
         if ($registerTab.hasClass('active')) {
         $formRow.css('margin-top', '0px');
         } else {
         $formRow.css('margin-top', '-100px');
         }
     }

     // Call the function initially
     updateMargin();

     // Optionally, use a MutationObserver or other event-based triggers if necessary
     var observer = new MutationObserver(updateMargin);
     var targetNode = document.querySelector('#register');
     
     if (targetNode) {
         observer.observe(targetNode, { attributes: true, attributeFilter: ['class'] });
     }
     });

 </script>

 <script>
     document.getElementById('idVerification').addEventListener('change', function(event) {
         const file = event.target.files[0];
         if (file) {
             const reader = new FileReader();
             reader.onload = function(e) {
                 document.getElementById('idPreview').src = e.target.result;
             };
             reader.readAsDataURL(file);
         } else {
             document.getElementById('idPreview').src = '#'; // Reset to placeholder if no file
         }
     });
 </script>

 <!-- Login Form Validation and Filtters -->
 <script>
     $(document).ready(function() {
         // Toggle password visibility
         $('#togglePassword').on('click', function() {
             const passwordField = $('#loginPassword');
             const type = passwordField.attr('type') === 'password' ? 'text' : 'password';
             passwordField.attr('type', type);
             $(this).toggleClass('fa-eye fa-eye-slash');
         });

         $('.loginForm').on('submit', function(event) {
             event.preventDefault(); // Prevent form from submitting

             // Clear previous error messages
             $('#emailError').text('');
             $('#passwordError').text('');

             // Get input values
             const email = $('#loginEmail').val().trim();
             const password = $('#loginPassword').val().trim();

             let isValid = true;

             // Email validation
             if (!email) {
                 $('#emailError').text('Email is required.');
                 isValid = false;
             } else if (!validateEmail(email)) {
                 $('#emailError').text('Invalid email format.');
                 isValid = false;
             }

             // Password validation
             if (!password) {
                 $('#passwordError').text('Password is required.');
                 isValid = false;
             }

             if (isValid) {
                 // Proceed with form submission
                 // This is where you can add an AJAX call or any other logic
                 alert('Form is valid! Proceeding with submission.');
             }
         });

         function validateEmail(email) {
             const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
             return re.test(email);
         }
     });
 </script>

 <!-- Register Form Validation and Fillters -->
 <script>
     $(document).ready(function() {
         // Toggle password visibility (if needed)
         $('#togglePassword').on('click', function() {
             const passwordField = $('#registerPassword');
             const type = passwordField.attr('type') === 'password' ? 'text' : 'password';
             passwordField.attr('type', type);
             $(this).toggleClass('fa-eye fa-eye-slash');
         });

         $('.registerForm').on('submit', function(event) {
             event.preventDefault(); // Prevent form from submitting

             // Clear previous error messages
             $('.error-message').text('');

             // Get input values
             const email = $('#registerEmail').val().trim();
             const firstName = $('#firstName').val().trim();
             const lastName = $('#lastName').val().trim();
             const password = $('#registerPassword').val().trim();
             const confirmPassword = $('#confirmPassword').val().trim();
             const mobileNumber = $('#mobileNumber').val().trim();
             const referralCode = $('#referralCode').val().trim();
             const address = $('#address').val().trim();
             const location = $('#location').val().trim();
             const idVerification = $('#idVerification')[0].files.length;
             const termsChecked = $('#terms').is(':checked');
             const marketingChecked = $('#marketing').is(':checked');

             let isValid = true;

             // Email validation
             if (!email) {
                 $('#emailError').text('Email Address is required.');
                 isValid = false;
             } else if (!validateEmail(email)) {
                 $('#emailError').text('Invalid email format.');
                 isValid = false;
             }

             // First Name validation
             if (!firstName) {
                 $('#firstNameError').text('First Name is required.');
                 isValid = false;
             }

             // Last Name validation
             if (!lastName) {
                 $('#lastNameError').text('Last Name is required.');
                 isValid = false;
             }

             // Password validation
             if (!password) {
                 $('#passwordError').text('Password is required.');
                 isValid = false;
             } else if (password.length < 6) {
                 $('#passwordError').text('Password must be at least 6 characters long.');
                 isValid = false;
             }

             // Confirm Password validation
             if (password !== confirmPassword) {
                 $('#confirmPasswordError').text('Passwords do not match.');
                 isValid = false;
             }

             // Mobile Number validation
             if (!mobileNumber) {
                 $('#mobileNumberError').text('Mobile Number is required.');
                 isValid = false;
             } else if (!validatePhoneNumber(mobileNumber)) {
                 $('#mobileNumberError').text('Invalid mobile number format.');
                 isValid = false;
             }

             // ID Verification validation
             if (idVerification === 0) {
                 $('#idVerificationError').text('ID Verification is required.');
                 isValid = false;
             }

             // Terms and Conditions validation
             if (!termsChecked) {
                 $('#termsError').text('You must agree to the terms of service.');
                 isValid = false;
             }

             // If form is valid, you can proceed with form submission
             if (isValid) {
                 alert('Form is valid! Proceeding with submission.');
             }
         });

         function validateEmail(email) {
             const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
             return re.test(email);
         }

         function validatePhoneNumber(number) {
             // Simple phone number validation (e.g., US format)
             const re = /^\+?[1-9]\d{1,14}$/;
             return re.test(number);
         }
     });
 </script>

@endsection