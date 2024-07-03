@extends('frontend.layouts.app')

@section('content')




<section>

    <div class="container">
        <div class="listitem-head">
            <h5>MIDDLE EAST FIRST PEER TO PEER FASHION SHARING COMMUNITY</h5>    
        </div>
    </div>

</section>

<section>
    
    <div class="container">
        <div class="dashbordcmn-bg">
            <div class="dashbord-cmnconwp">
                    <div class="dashbord-cmnconsec">
                        <div class="row">
                            <div class="col-lg-3 col-md-4">
                                <img src="{{ asset('frontend/images/sarah-safaimg.png') }}" alt="">
                            </div>
                            <div class="col-lg-4 col-md-8">
                                <h3>Sarah Safa</h3>
                                <ul class="mt-4">
                                    <li>
                                        <i class="fa-solid fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-star"></i>
                                    </li>
                                    <li>
                                        12 ratings
                                    </li>
                                </ul>
                                <div class="row mt-4">
                                    <div class="col-md-4" style="width: 33%">
                                        <p>0</p>
                                        <span>ITEMS</span>
                                    </div>
                                    <div class="col-md-4" style="width: 33%">
                                        <p>0</p>
                                        <span>FOLLOWERS</span>
                                    </div>
                                    <div class="col-md-4" style="width: 33%">
                                        <p>0</p>
                                        <span>FOLLOWING</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-12">
                                <ul>
                                    <li>
                                        <button class="btnborder">Credit balance: £0.00</button>
                                    </li>
                                    <li>
                                        <button class="bgbtn">
                                            Give $5 & Get $5
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
            </div>

            <div class="editprofile-dashbordsec">
                <div class="row mt-4">
                    <div class="col-md-4">
                        <div class="dashbord-menus">
                            <a href="#">
                                <ul>
                                    <li>
                                        <img src="{{ asset('frontend/images/dashboard-icon.svg') }}" alt="">
                                    </li>
                                    <li>
                                        Dashboard
                                    </li>
                                </ul>
                            </a>
                            <a href="#">
                                <ul>
                                    <li>
                                        <img src="{{ asset('frontend/images/messages-icon.svg') }}" alt="">
                                    </li>
                                    <li>
                                        Messages
                                    </li>
                                </ul>
                            </a>
                            <a href="#">
                                <ul>
                                    <li>
                                        <img src="{{ asset('frontend/images/lending-icon.svg') }}" alt="">
                                    </li>
                                    <li>
                                        Lending
                                    </li>
                                </ul>
                            </a>
                            <a href="#">
                                <ul>
                                    <li>
                                        <img src="{{ asset('frontend/images/buying-icon.svg') }}" alt="">
                                    </li>
                                    <li>
                                        Buying
                                    </li>
                                </ul>
                            </a>
                            <a href="#">
                                <ul>
                                    <li>
                                        <img src="{{ asset('frontend/images/buying-icon.svg') }}" alt="">
                                    </li>
                                    <li>
                                        Resale
                                    </li>
                                </ul>
                            </a>
                            <a href="#">
                                <ul>
                                    <li>
                                        <img src="{{ asset('frontend/images/wish-listicon.svg') }}" alt="">
                                    </li>
                                    <li>
                                        Wish list
                                    </li>
                                </ul>
                            </a>
                            <a href="#">
                                <ul>
                                    <li>
                                        <img src="{{ asset('frontend/images/edit-profileicon.svg') }}" alt="">
                                    </li>
                                    <li class="active-dashbord">
                                        Edit my profile
                                    </li>
                                </ul>
                            </a>
                            <a href="#">
                                <ul>
                                    <li>
                                        <img src="{{ asset('frontend/images/refer-friendicon.svg') }}" alt="">
                                    </li>
                                    <li>
                                        Refer a friend
                                    </li>
                                </ul>
                            </a>
                            <div class="social-mediaicons mt-4">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <img src="{{ asset('frontend/images/facebook-icon.svg') }}" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="{{ asset('frontend/images/instagram-icon.svg') }}" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="{{ asset('frontend/images/linkedin-icon.svg') }}" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="{{ asset('frontend/images/tik-tokicon.svg') }}" alt="">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="text-center mb-4 mt-4">
                            <h5>Profile Settings</h5>
                        </div>
                        <div class="dashbord-oneright">
                            <div class="dashbord-twoeditp">
                                <p class="mb-5">WELCOME <span>SARAH !</span></p>
                                <strong>Let’s start the renting & lending...</strong><br class="mb-5">
                                <ul class="mt-5">
                                    <li>
                                        <button>Start Lending</button>
                                    </li>
                                    <li>
                                        <button>Start Renting</button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>



@endsection