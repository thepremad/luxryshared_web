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
                            <form action="">
                                <h6 class="mb-4">Edit Profile</h6>
                                <div class="row mb-5">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="basic-url" class="form-label">First Name</label>
                                            <div class="input-group mt-1">
                                              <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3 basic-addon4">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="basic-url" class="form-label">Last Name</label>
                                            <div class="input-group mt-1">
                                              <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3 basic-addon4">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="basic-url" class="form-label">Email Address</label>
                                            <div class="input-group mt-1">
                                              <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3 basic-addon4">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="basic-url" class="form-label">Mobile Number</label>
                                            <div class="input-group mt-1">
                                              <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3 basic-addon4">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="basic-url" class="form-label">Password</label>
                                            <div class="input-group mt-1">
                                              <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3 basic-addon4">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="basic-url" class="form-label">File Upload</label>
                                            <div class="input-group mt-1">
                                              <input type="file" class="form-control" id="basic-url" aria-describedby="basic-addon3 basic-addon4">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h6 class="mb-4">Social Links</h6>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="basic-url" class="form-label">Facebook</label>
                                            <div class="input-group mt-1">
                                              <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3 basic-addon4">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="basic-url" class="form-label">Instagram</label>
                                            <div class="input-group mt-1">
                                              <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3 basic-addon4">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="basic-url" class="form-label">Twitter</label>
                                            <div class="input-group mt-1">
                                              <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3 basic-addon4">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="basic-url" class="form-label">Tik Tok</label>
                                            <div class="input-group mt-1">
                                              <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3 basic-addon4">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="mt-4">
                                    Save and continue
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>



@endsection