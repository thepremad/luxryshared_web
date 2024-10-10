
        <!--Top Header-->
        <style>
    .popup {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1000; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgba(0, 0, 0, 0.4); /* Black w/ opacity */
}

.popup-content {
    background-color: #fefefe;
    margin: 15% auto; /* 15% from the top and centered */
    padding: 20px;
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

.close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}

</style>

        <div class="top-header home8-jewellery-top">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-10 col-sm-8 col-md-5 col-lg-4">
                        <!-- <div class="currency-picker">
                        <span class="selected-currency">USD</span>
                        <ul id="currencies">
                            <li data-currency="INR" class="">INR</li>
                            <li data-currency="GBP" class="">GBP</li>
                            <li data-currency="CAD" class="">CAD</li>
                            <li data-currency="USD" class="selected">USD</li>
                            <li data-currency="AUD" class="">AUD</li>
                            <li data-currency="EUR" class="">EUR</li>
                            <li data-currency="JPY" class="">JPY</li>
                        </ul>
                    </div>
                    <div class="language-dropdown">
                        <span class="language-dd">English</span>
                        <ul id="language">
                            <li class="">German</li>
                            <li class="">French</li>
                        </ul>
                    </div> -->
                        <!-- <p class="phone-no"><i class="anm anm-phone-s"></i> +440 0(111) 044 833</p> -->
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 d-none d-lg-none d-md-block d-lg-block">
                        <div class="text-center">
                            <p class="top-header_middle-text"> Give 50 AED
                                Get 50 AED. Get 10% off your first
                                order.</p>
                        </div>
                    </div>
                    <div class="col-2 col-sm-4 col-md-3 col-lg-4 text-right">
                        <span class="user-menu d-block d-lg-none"><i class="anm anm-user-al"
                                aria-hidden="true"></i></span>
                        <ul class="customer-links list-inline">
                            <li><a href="#">Download App</a></li>
                            <li><a href="#"><img src="{{ asset('assets/img/104490_apple_icon 1.png') }}"></a></li>
                            <li><a href="#"><img src="{{ asset('assets/img/104471_android_icon 1.png') }}"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--End Top Header-->

        <!--Header-->
        <div class="header-wrap animated d-flex home8-jewellery-header">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                        <div class="row">
                            <div class="col-3 col-sm-3 col-md-3 col-lg-8 d-block d-lg-none">
                                <button type="button"
                                    class="btn--link site-header__menu js-mobile-nav-toggle mobile-nav--open">
                                    <i class="icon anm anm-times-l"></i>
                                    <i class="anm anm-bars-r"></i>
                                </button>
                            </div>
                            <!--Search Icon-->
                            <div class="col-3 col-sm-3 col-md-3 col-lg-3 d-none d-lg-block">
                                <div class="site-header__search text-left">
                                    <button type="button" class="search-trigger">AED</button>
                                </div>
                            </div>
                            <div class="col-4 col-sm-4 col-md-4 col-lg-4 d-none d-lg-block">
                                <div class="site-header__search text-left">
                                    <button type="button" class="search-trigger">HOW IT WORKS</button>
                                </div>
                            </div>
                            <!--End Search Icon-->
                        </div>
                    </div>
                    @if(auth()->user())
                    <div class="col-6 col-sm-6 col-md-6 col-lg-6">

                        <div class="listItrm-link">
                            <a href="">List An Item</a>
                        </div>
                        <div class="site-header__search">
                            <span class=""><a href="{{route('wishlist')}}"><i class="icon anm anm-heart-l"></i></a></span>
                        </div>
                        <div class="site-cart">
                            <a href="{{ route('cart') }}" class="site- header__cart" title="Cart">
                                <i class="icon anm anm-bag-l"></i>
                                <span id="CartCount" class="site-header__cart-count"
                                    data-cart-render="item_count">2</span>
                            </a>
                        </div>
                        <div class="site-header__search">
                            <a href="{{route('edit_profile')}}"><span class=""><i class="icon anm anm-user-l"></i></span></a>
                        </div>
                    </div>
                    @else
                    <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                        <div class="site-header__search" onclick="profile()">
                            <span ><i class="icon anm anm-user-l"></i></span>
                            
                        </div>
                    </div>

                    <!-- Login Prompt Popup -->
                    
                    <div id="loginPrompt" class="popup">
                        <div class="popup-content">
                            <span class="close" id="closePopup">&times;</span>
                            <h2>You have to log in</h2>
                            <p>Please log in to continue.</p>
                            <a href="{{ route('login') }}" class="btn btn-primary">Go to Login</a>
                        </div>
                    </div>

                    @endif
                </div>
                <div class="row align-items-center justify-content-center   ">
                    <!--Desktop Logo-->
                    <div class="logo col-3 col-sm-6 col-md-6 col-lg-6 text-center">
                        <a href="{{route('home')}}">
                            <img src="{{ asset('assets/img/LXRY logo@2x 2.png') }}" alt="Belle Multipurpose Html Template"
                                title="Belle Multipurpose Html Template" />
                        </a>
                    </div>
                    <!--End Desktop Logo-->
                </div>
            </div>
        </div>
        <!--Desktop Menu-->
        <nav class="belowlogo" id="AccessibleNav">
            <div class="row mr-0">
                <div class="col-md-10">
                    <ul id="siteNav" class="site-nav medium center hidearrow">

                    @if (!empty($menu))
                    @foreach ($menu as $val)
                        
                        <li class="lvl1 parent megamenu"><a href='{{$val->link}}'>{{$val->name}} <i class="anm anm-angle-down-l"></i></a>
                        
                    </li>
                    @endforeach
                    @endif
                        
                       
                    </ul>
                </div>
                <div class="col-md-2"><span class="header-search"><input type="text" placeholder="Search"></span></div>
            </div>

        </nav>
        <!--End Desktop Menu-->
        <section class="bg-red text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <span class="bg-red-txt">MIDDLE EAST FIRST PEER TO PEER FASHION
                            SHARING COMMUNITY</span>
                    </div>
                </div>
            </div>
        </section>

        <script>
function profile() {
    // Call the function to show the login prompt
    showLoginPrompt();
}

function showLoginPrompt() {
    // Show the login prompt popup
    document.getElementById('loginPrompt').style.display = 'block';
}

// Close the popup when the user clicks on <span> (x)
document.getElementById('closePopup').onclick = function() {
    document.getElementById('loginPrompt').style.display = 'none';
}

// Close the popup when clicking anywhere outside of the popup
window.onclick = function(event) {
    if (event.target == document.getElementById('loginPrompt')) {
        document.getElementById('loginPrompt').style.display = 'none';
    }
}
</script>
<!-- 
<script>
    function increase(id){
        alert(id)
        $.ajax({
            url: "",
            method: 'GET',
            data: {change_status: id},
            dataType: 'html',
            success: function(data) {
             $('#show-items').html(data);
            }
        });
    }

    function decrease(id){
        alert('decrease')
        $.ajax({
            url: "",
            method: 'GET',
            data: {change_status: id},
            dataType: 'html',
            success: function(data) {
             $('#show-items').html(data);
            }
        });
    }

   
</script> -->
        <!--End Header-->
        <!--Mobile Menu-->
        
        <!--End Mobile Menu-->
