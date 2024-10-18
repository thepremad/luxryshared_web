<!-- Top Header -->
<style>
    .popup {
        display: none;
        position: fixed;
        z-index: 1000;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0, 0, 0, 0.6);
    }

    .popup-content {
        background-color: #fefefe;
        margin: 15% auto;
        padding: 20px;
        border: 1px solid #888;
        width: 80%;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
    }

    .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
    }

</style>

<div class="top-header home8-jewellery-top">
    <div class="container-fluid">
        <div class="row">
            <div class="col-10 col-sm-8 col-md-5 col-lg-4 headerTop-s1">
                <!-- Currency and Language Picker -->
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
            <div class="col-sm-4 col-md-4 col-lg-4 d-none d-lg-none d-md-block d-lg-block headerTop-s2">
                <div class="text-center">
                    <p class="top-header_middle-text">Give 50 AED Get 50 AED. Get 10% off your first order.</p>
                </div>
            </div>
            <div class="col-2 col-sm-4 col-md-3 col-lg-4 text-right headerTop-s3">
                <span class="user-menu d-block d-lg-none"><i class="anm anm-user-al" aria-hidden="true"></i></span>
                <ul class="customer-links list-inline">
                    <li><a href="#">Download App</a></li>
                    <li><a href="#"><img src="{{ asset('assets/img/104490_apple_icon 1.png') }}"></a></li>
                    <li><a href="#"><img src="{{ asset('assets/img/104471_android_icon 1.png') }}"></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="header-wrap animated d-flex home8-jewellery-header">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                <div class="row">
                    <div class="col-3 col-sm-3 col-md-3 col-lg-8 d-block d-lg-none">
                        <button type="button" class="btn--link site-header__menu js-mobile-nav-toggle mobile-nav--open">
                            <i class="icon anm anm-times-l"></i>
                            <i class="anm anm-bars-r"></i>
                        </button>
                    </div>
                    <!-- Search Icon -->
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
                    <!-- End Search Icon -->
                </div>
            </div>
            @if(auth()->user())
                <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                    <div class="listItrm-link">
                        <a href="{{ route('list_item') }}">List an item</a>
                    </div>
                    <div class="site-header__search">
                        <span class=""><a href="{{route('wishlist')}}"><i class="icon anm anm-heart-l"></i></a></span>
                    </div>
                    <div class="site-cart">
                        <a href="{{ route('cart') }}" class="site-header__cart" title="Cart">
                            <i class="icon anm anm-bag-l"></i>
                            <span id="CartCount" class="site-header__cart-count" data-cart-render="item_count">0</span>
                        </a>
                    </div>
                    <div class="site-header__search">
                        <a href="{{route('edit_profile')}}"><span class=""><i class="icon anm anm-user-l"></i></span></a>
                    </div>
                </div>
            @else
                <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                    <div class="site-header__search" >
                        <a href="{{ route('login') }}">
                            <span><i class="icon anm anm-user-l"></i></span>
                        </a>
                    </div>
                </div>
            @endif
        </div>

        <div class="row align-items-center justify-content-center">
            <div class="logo col-3 col-sm-6 col-md-6 col-lg-6 text-center">
                <a href="{{route('home')}}">
                    <img src="{{ asset('assets/img/LXRY logo@2x 2.png') }}" alt="Belle Multipurpose Html Template"
                         title="Belle Multipurpose Html Template" />
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Desktop Menu -->
<nav class="belowlogo" id="AccessibleNav">
    <div class="row mr-0">
        <div class="col-md-10">
            <ul id="siteNav" class="site-nav medium center hidearrow">
                @if (!empty($menu))
                    @foreach ($menu as $val)
                        <li class="lvl1 parent megamenu"><a href='{{$val->link}}'>{{$val->name}} <i class="anm anm-angle-down-l"></i></a></li>
                    @endforeach
                @endif
            </ul>
        </div>
        <div class="col-md-2">
            <span class="header-search"><input type="text" placeholder="Search"></span>
        </div>
    </div>
</nav>
<!-- End Desktop Menu -->

<!-- Mobile Menu -->
<div class="mobile-nav-wrapper" role="navigation">
    <!-- <div class="closemobileMenu"><i class="icon anm anm-times-l pull-right"></i> Close Menu</div> -->
    <ul id="MobileNav" class="mobile-nav">
        @if (!empty($menu))
            @foreach ($menu as $val)
                <li><a href="{{ $val->link }}">{{ $val->name }}</a></li>
            @endforeach
        @endif
    </ul>
</div>
<!-- End Mobile Menu -->

<section class="bg-red text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <span class="bg-red-txt">MIDDLE EAST FIRST PEER TO PEER FASHION SHARING COMMUNITY</span>
            </div>
        </div>
    </div>
</section>

<!-- JavaScript for Mobile Menu Toggle -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const toggleButton = document.querySelector('.js-mobile-nav-toggle');
        const mobileNav = document.querySelector('.mobile-nav-wrapper');
        const closeMenu = document.querySelector('.closemobileMenu');

        toggleButton.addEventListener('click', function() {
            mobileNav.classList.toggle('active');
        });

        closeMenu.addEventListener('click', function() {
            mobileNav.classList.remove('active');
        });

        window.addEventListener('click', function(event) {
            if (!mobileNav.contains(event.target) && !toggleButton.contains(event.target)) {
                mobileNav.classList.remove('active');
            }
        });
    });
</script>

<!-- JavaScript for Profile Login Prompt -->
<script>
    function profile() {
        showLoginPrompt();
    }

    function showLoginPrompt() {
        document.getElementById('loginPrompt').style.display = 'block';
    }

    document.getElementById('closePopup').onclick = function () {
        document.getElementById('loginPrompt').style.display = 'none';
    }

    window.onclick = function (event) {
        if (event.target == document.getElementById('loginPrompt')) {
            document.getElementById('loginPrompt').style.display = 'none';
        }
    }
</script>

<!-- Uncomment if needed -->
<!-- <script>
    function increase(id) {
        alert(id);
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

    function decrease(id) {
        alert('decrease');
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