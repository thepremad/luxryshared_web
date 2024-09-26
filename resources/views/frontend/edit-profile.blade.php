@extends('frontend.layouts.app')
@section('content')

<div id="page-content" class="container-fluid edit-profile">
    <div class="container mt-4">
        <!-- Banner Section -->
        <div class="row banner-section">
            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2">
                <img src="{{asset('assets/images/userProfile/profile_img.png')}}" alt="User Image" class="user-img img-fluid ">
            </div>
            <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10">
                <div class="row">
                    <div class="col-md-12">
                        <h2>{{auth()->user()->first_name.' '. auth()->user()->last_name}}</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <span class="star-rating">
                            <i class="fa-star fa-solid"></i>
                            <i class="fa-star fa-solid"></i>
                            <i class="fa-star fa-solid"></i>
                            <i class="fa-star fa-solid"></i>
                            <i class="fa-star fa-solid"></i>
                        </span>
                        <span class="rating">12 ratings</span>
                        <button class="btn btn-primary ml-2">Credit balance: £0.00</button>
                        <button class="btn btn-secondary ml-2">Give $5 & Get $5</button>
                    </div>
                </div>
                <div class="row mt-5 justify-content-start user-information">
                    <div class="col-md-1 text-center">
                        <h5>{{$itemsCount ?? ''}}</h5>
                        <p>Items</p>
                    </div>
                    <div class="col-md-1 text-center">
                        <h5>100</h5>
                        <p>Followers</p>
                    </div>
                    <div class="col-md-1 text-center">
                        <h5>75</h5>
                        <p>Following</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Content -->
        <div class="row mt-4 py-3 px-2" style="gap: 1%;">

            <!-- Sidebar -->
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3 userProfile-sidebar bg-white rounded-3">
                <ul class="sidebar-nav">

                    <li class="active">
                        <a href="#" data-target="#dashboard">
                            <img src="{{asset('assets/images/icons/Message-2.svg')}}" class="editProfile-icon" alt="Dashboard" />
                            Dashboard
                        </a>
                    </li>

                    <li>
                        <a href="#" data-target="#message">
                            <img src="{{asset('assets/images/icons/Message.svg')}}" class="editProfile-icon" alt="Message" />
                            Message
                        </a>
                    </li>

                    <li>
                        <a href="#" data-target="#renting">
                            <img src="{{asset('assets/images/icons/Rating.svg')}}" class="editProfile-icon" alt="Renting" />
                            Renting
                        </a>
                    </li>

                    <li>
                        <a href="#" data-target="#lending">
                            <img src="{{asset('assets/images/icons/Leading.svg')}}" class="editProfile-icon" alt="Lending" />
                            Lending
                        </a>
                    </li>

                    <li>
                        <a href="#" data-target="#buying">
                            <img src="{{asset('assets/images/icons/Buying.svg')}}" class="editProfile-icon" alt="Buying" />
                            Buying
                        </a>
                    </li>

                    <li>
                        <a href="#" data-target="#resale">
                            <img src="{{asset('assets/images/icons/Resale.svg')}}" class="editProfile-icon" alt="Resale" />
                            Resale
                        </a>
                    </li>

                    <li>
                        <a href="#" data-target="#wishlist">
                            <img src="{{asset('assets/images/icons/Wishlist.svg')}}" class="editProfile-icon" alt="Wish list" />
                            Wish list
                        </a>
                    </li>

                    <li>
                        <a href="#" data-target="#edit-profile">
                            <img src="{{asset('assets/images/icons/Edit Profile.svg')}}" class="editProfile-icon"
                                alt="Edit my profile" />
                            Edit my profile
                        </a>
                    </li>

                    <li>
                        <a href="#" data-target="#reviews">
                            <img src="{{asset('assets/images/icons/Review.svg')}}" class="editProfile-icon" alt="Reviews" />
                            Reviews
                        </a>
                    </li>

                    <li>
                        <a href="#" data-target="#refer-friend">
                            <img src="{{asset('assets/images/icons/Refer a Friend.png')}}" class="editProfile-icon"
                                alt="Refer a friend" />
                            Refer a friend
                        </a>
                    </li>

                </ul>


                <div class="social-icons mt-5">
                    <a href="https://www.facebook.com" target="_blank">
                        <img src="{{asset('assets/images/icons/Facebook.svg')}}" alt="Facebook" />
                    </a>
                    <a href="https://www.instagram.com" target="_blank">
                        <img src="{{asset('assets/images/icons/Instagram.svg')}}" alt="Instagram" />
                    </a>
                    <a href="https://www.linkedin.com" target="_blank">
                        <img src="{{asset('assets/images/icons/Linkedin-2.svg')}}" alt="LinkedIn" />
                    </a>
                    <a href="https://www.tiktok.com" target="_blank">
                        <img src="{{asset('assets/images/icons/Tik Tok.svg')}}" alt="TikTok" />
                    </a>
                </div>

            </div>


            <!-- Content -->
            <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-9 userProfile-contant bg-white pb-5 pt-0 px-0">
                <div id="dashboard" class="content-section active">
                    <div class="row py-4">
                        <h3 class="text-center">Profile Settings</h3>
                    </div>
                    <div class="container-fluid py-5 bg-white rounded">
                        <h3 class="text-center">WELCOME <span style="color: #57110C; font-weight: 600;">{{auth()->user()->first_name}} !</span>
                        </h3>
                        <p class="text-center">Let’s start the renting & lending...</p>
                        <div class="row justify-content-center content-section-inner">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-5">
                                <div class="row justify-content-between mt-5">
                                    <div class="col-12 col-sm-6 col-md-5 mb-3">
                                        <button class="btn btn-primary btn-block">Start Lending</button>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-5 mb-3">
                                        <button class="btn btn-primary btn-block">Start Renting</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="messages" class="content-section">
                    <h3 class="text-center">Messages Content</h3>
                    <p>Content for the Messages section.</p>
                </div>

                <div id="renting" class="content-section">
                    <div class="row py-4">
                        <h3 class="text-center">RENTING</h3>
                    </div>
                    <div class="container-fluid py-2 bg-white rounded" style="padding-left: 0; padding-right: 0;">
                        <div class="row justify-content-start">

                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-4 buyingTable">
                                <table class="table">
                                    <tbody>
                                      @foreach ($rentingData as $val)
                                      
                                        <tr>
                                            <td class="border-0 px-3">
                                                <img src="{{asset('uploads/item/'.$val->mainImag)}}" alt="">
                                            </td>
                                            <td class="border-0 px-3 font-weight-bold">{{$val->productName ?? ''}}</td>
                                            <td class="border-0 px-3 font-weight-bold">{{$val->rentorName ?? ''}}</td>
                                            <td class="border-0 px-3 font-weight-bold">{{$val->paymentDetails ?? ''}}</td>
                                            <td class="border-0 px-3">
                                                <a href="#" class="details-toggle">Details</a>
                                            </td>
                                        </tr>
                                        <tr class="details-content">
                                            <td colspan="5" class="border-0 pt-0 pb-4">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="card border-0">
                                                            <div class="card-body">
                                                                <h5 class="card-title">Lender Name</h5>
                                                                <p class="card-text">{{$val->rentorName ?? ''}}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="card border-0">
                                                            <div class="card-body">
                                                                <h5 class="card-title">Product Name</h5>
                                                                <p class="card-text">{{$val->productName ?? ''}}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="card border-0">
                                                            <div class="card-body">
                                                                <h5 class="card-title">Payment Details</h5>
                                                                <p class="card-text">{{$val->paymentDetails ?? ''}} AED</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="card border-0">
                                                            <div class="card-body">
                                                                <h5 class="card-title">Lender Mobile</h5>
                                                                <p class="card-text">{{$val->RentorMobNumber ?? ''}}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="card border-0">
                                                            <div class="card-body">
                                                                <h5 class="card-title">Booking Date</h5>
                                                                <p class="card-text">{{$val->bookingDate ?? ''}}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="card border-0">
                                                            <div class="card-body">
                                                                <button class="btn btn-primary rateItem">Rate
                                                                    Item</button>
                                                                <div class="modal rateModal">
                                                                    <div class="modal-content">
                                                                        <form class="ratingForm">
                                                                            <label for="rating">Rate the Item: Rate
                                                                                Item</label>
                                                                            <div class="star-rating">
                                                                                <span class="star" data-value="1"><i
                                                                                        class="fa-regular fa-star"></i></span>
                                                                                <span class="star" data-value="2"><i
                                                                                        class="fa-regular fa-star"></i></span>
                                                                                <span class="star" data-value="3"><i
                                                                                        class="fa-regular fa-star"></i></span>
                                                                                <span class="star" data-value="4"><i
                                                                                        class="fa-regular fa-star"></i></span>
                                                                                <span class="star" data-value="5"><i
                                                                                        class="fa-regular fa-star"></i></span>
                                                                            </div>
                                                                            <input type="hidden" class="rating"
                                                                                name="rating" value="0">
                                                                            <label for="review">Review Item:</label>
                                                                            <textarea class="review"
                                                                                placeholder="Write your review" rows="5"
                                                                                style="width: 100%;"></textarea>
                                                                            <button type="submit"
                                                                                class="submit-btn btn btn-success mt-2">Submit</button>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="card border-0">
                                                            <div class="card-body">
                                                                <h5 class="card-title">Lender Email</h5>
                                                                <p class="card-text">{{$val->rentalEmail ?? ''}}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="card border-0">
                                                            <div class="card-body">
                                                                <button class="btn btn-primary rateLender">Rate
                                                                    Lender</button>
                                                                <div class="modal rateModal">
                                                                    <div class="modal-content">
                                                                        <form class="ratingForm">
                                                                            <label for="rating">Rate the Lender: Rate
                                                                                Lender</label>
                                                                            <div class="star-rating">
                                                                                <span class="star" data-value="1"><i
                                                                                        class="fa-regular fa-star"></i></span>
                                                                                <span class="star" data-value="2"><i
                                                                                        class="fa-regular fa-star"></i></span>
                                                                                <span class="star" data-value="3"><i
                                                                                        class="fa-regular fa-star"></i></span>
                                                                                <span class="star" data-value="4"><i
                                                                                        class="fa-regular fa-star"></i></span>
                                                                                <span class="star" data-value="5"><i
                                                                                        class="fa-regular fa-star"></i></span>
                                                                            </div>
                                                                            <input type="hidden" class="rating"
                                                                                name="rating" value="0">
                                                                            <label for="review">Review Lender:</label>
                                                                            <textarea class="review"
                                                                                placeholder="Write your review" rows="5"
                                                                                style="width: 100%;"></textarea>
                                                                            <button type="submit"
                                                                                class="submit-btn btn btn-success mt-2">Submit</button>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                      @endforeach

                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>

                <div id="lending" class="content-section">
                    <div class="row py-4">
                        <h3 class="text-center">LENDING</h3>
                    </div>
                    <div class="container-fluid py-2 bg-white rounded" style="padding-left: 0; padding-right: 0;">
                        <div class="row justify-content-start">

                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-4 buyingTable">
                                <table class="table">
                                    <tbody>
                                        @foreach ($lendingData as $val)
                                        
                                        <tr>
                                            <td class="border-0 px-3">
                                                <img src="{{asset('assets/images/product-images/buying.png')}}" alt="">
                                            </td>
                                            <td class="border-0 px-3 font-weight-bold">{{$val->productName ?? ''}}</td>
                                            <td class="border-0 px-3 font-weight-bold">{{$val->rentorName ?? ''}}</td>
                                            <td class="border-0 px-3 font-weight-bold">{{$val->final_amount ?? ''}}</td>
                                            <td class="border-0 px-3">
                                                <a href="#" class="details-toggle">Details</a>
                                            </td>
                                        </tr>
                                        <tr class="details-content">
                                            <td colspan="5" class="border-0 pt-0 pb-4">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="card border-0">
                                                            <div class="card-body">
                                                                <h5 class="card-title">Rental Name</h5>
                                                                <p class="card-text">{{$val->rentorName ?? ''}}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="card border-0">
                                                            <div class="card-body">
                                                                <h5 class="card-title">Product Name</h5>
                                                                <p class="card-text">{{$val->productName ?? ''}}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="card border-0">
                                                            <div class="card-body">
                                                                <h5 class="card-title">Payment Details</h5>
                                                                <p class="card-text">{{$val->final_amount ?? ''}} AED</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="card border-0">
                                                            <div class="card-body">
                                                                <h5 class="card-title">Rental Mobile</h5>
                                                                <p class="card-text">{{$val->RentorMobNumber ?? ''}}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="card border-0">
                                                            <div class="card-body">
                                                                <h5 class="card-title">Booking Date</h5>
                                                                <p class="card-text">{{$val->bookingDate ?? ''}}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="card border-0">
                                                            <div class="card-body">
                                                                <h5 class="card-title">Rental Period</h5>
                                                                <p class="card-text">{{$val->rental_period ?? ''}}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="card border-0">
                                                            <div class="card-body">
                                                                <h5 class="card-title">Rental Email</h5>
                                                                <p class="card-text">{{$val->rentalEmail ?? ''}}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="card border-0">
                                                            <div class="card-body">
                                                                <h5 class="card-title">Quantity of Product</h5>
                                                                <p class="card-text">{{$val->quantity_of_product ?? ''}}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="card border-0">
                                                            <div class="card-body">
                                                                <h5 class="card-title">Status</h5>
                                                                <p class="card-text">Pending/Paid</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="card border-0">
                                                            <div class="card-body">
                                                                <h5 class="card-title">Final Amount</h5>
                                                                <p class="card-text">256 AED</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row btn-row">
                                                    <div class="col-lg-4">
                                                        <button class="btn btn-primary openModal"
                                                            data-target="rateRentorModal">Rate Rentor</button>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <button class="btn btn-primary openModal"
                                                            data-target="rateItemModal">Rate Item</button>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <button class="btn btn-primary openModal"
                                                            data-target="withdrawalModal">Request Withdrawal</button>
                                                    </div>
                                                </div>

                                                <!-- Rate Rentor Modal -->
                                                <div id="rateRentorModal" class="modal">
                                                    <div class="modal-content">
                                                        <form id="ratingFormRentor">
                                                            <label for="rating">Rate the Rentor: Rate Rentor</label>
                                                            <div id="stars" class="star-rating">
                                                                <span class="star" data-value="1"><i
                                                                        class="fa-regular fa-star"></i></span>
                                                                <span class="star" data-value="2"><i
                                                                        class="fa-regular fa-star"></i></span>
                                                                <span class="star" data-value="3"><i
                                                                        class="fa-regular fa-star"></i></span>
                                                                <span class="star" data-value="4"><i
                                                                        class="fa-regular fa-star"></i></span>
                                                                <span class="star" data-value="5"><i
                                                                        class="fa-regular fa-star"></i></span>
                                                            </div>
                                                            <input type="hidden" id="rating" name="rating" value="0">
                                                            <label for="review">Review Rentor:</label>
                                                            <textarea id="review" placeholder="Write your review"
                                                                rows="10" style="width: 100%;"></textarea>
                                                            <button type="submit" class="submit-btn">Submit</button>
                                                        </form>
                                                    </div>
                                                </div>

                                                <!-- Rate Item Modal -->
                                                <div id="rateItemModal" class="modal">
                                                    <div class="modal-content">
                                                        <form id="ratingFormItem">
                                                            <label for="rating">Rate the Item: Rate Item</label>
                                                            <div id="stars" class="star-rating">
                                                                <span class="star" data-value="1"><i
                                                                        class="fa-regular fa-star"></i></span>
                                                                <span class="star" data-value="2"><i
                                                                        class="fa-regular fa-star"></i></span>
                                                                <span class="star" data-value="3"><i
                                                                        class="fa-regular fa-star"></i></span>
                                                                <span class="star" data-value="4"><i
                                                                        class="fa-regular fa-star"></i></span>
                                                                <span class="star" data-value="5"><i
                                                                        class="fa-regular fa-star"></i></span>
                                                            </div>
                                                            <input type="hidden" id="rating" name="rating" value="0">
                                                            <label for="review">Review Item:</label>
                                                            <textarea id="review" placeholder="Write your review"
                                                                rows="10" style="width: 100%;"></textarea>
                                                            <button type="submit" class="submit-btn">Submit</button>
                                                        </form>
                                                    </div>
                                                </div>

                                                <!-- Request Withdrawal Modal -->
                                                <div id="withdrawalModal" class="modal">
                                                    <div class="modal-content">
                                                        <form id="ratingFormItem">
                                                            <label for="rating">Rate the Item:Request Withdrawal</label>
                                                            <div id="stars" class="star-rating">
                                                                <span class="star" data-value="1"><i
                                                                        class="fa-regular fa-star"></i></span>
                                                                <span class="star" data-value="2"><i
                                                                        class="fa-regular fa-star"></i></span>
                                                                <span class="star" data-value="3"><i
                                                                        class="fa-regular fa-star"></i></span>
                                                                <span class="star" data-value="4"><i
                                                                        class="fa-regular fa-star"></i></span>
                                                                <span class="star" data-value="5"><i
                                                                        class="fa-regular fa-star"></i></span>
                                                            </div>
                                                            <input type="hidden" id="rating" name="rating" value="0">
                                                            <label for="review">Review Item:</label>
                                                            <textarea id="review" placeholder="Write your review"
                                                                rows="10" style="width: 100%;"></textarea>
                                                            <button type="submit" class="submit-btn">Submit</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>

                <div id="buying" class="content-section">
                    <div class="row py-4">
                        <h3 class="text-center">Buying</h3>
                    </div>
                    <div class="container-fluid py-5 bg-white rounded" style="padding-left: 40px; padding-right: 40px;">
                        <div class="row justify-content-start">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <h4 class="text-center orderHeading">Order Details</h4>
                            </div>
                           @foreach ($buyData as $val)
                           
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 mb-4 selling-card">
                                <div class="card border-0">
                                    <img src="{{$val->icon}}" class="card-img-top mb-4"
                                        alt="Product Image">
                                    <div class="card-body p-0">
                                        <h5 class="card-title">Product Heading</h5>
                                        <div class="star-rating mb-2">
                                            <i class="fas fa-star me-1 star-gold"></i>
                                            <i class="fas fa-star me-1 star-gold"></i>
                                            <i class="fas fa-star me-1 star-gold"></i>
                                            <i class="fas fa-star me-1 star-gold"></i>
                                            <i class="fas fa-star me-1 star-gold"></i>
                                        </div>
                                        <p class="card-text">AED 250</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 mb-4 selling-card">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td class="border-0 px-0">Product Name:</td>
                                            <td class="border-0 px-0 font-weight-bold">{{$val->productName ?? ''}}</td>
                                        </tr>
                                        <tr>
                                            <td class="border-0 px-0">Brand:</td>
                                            <td class="border-0 px-0 font-weight-bold">{{$val->products->brand->name ?? ''}}</td>
                                        </tr>
                                        <tr>
                                            <td class="border-0 px-0">Color:</td>
                                            <td class="border-0 px-0 font-weight-bold">{{$val->products->color->name}}</td>
                                        </tr>
                                        <tr>
                                            <td class="border-0 px-0">Size:</td>
                                            <td class="border-0 px-0 font-weight-bold">{{$val->products->size->name ?? ''}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 mb-4 selling-card">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td class="border-0 px-0 text-center">Pricing</td>
                                            <td class="border-0 px-0 font-weight-bold">{{$val->price ?? ''}}</td>
                                        </tr>
                                        <tr>
                                            <td class="border-0 px-0 text-center">Quantity</td>
                                            <td class="border-0 px-0 font-weight-bold">{{$val->quility_of_product ?? ''}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>

                <div id="resale" class="content-section">
                    <div class="row py-4">
                        <h3 class="text-center">Selling</h3>
                    </div>
                    <div class="container-fluid py-5 bg-white rounded" style="padding-left: 40px; padding-right: 40px;">
                        <div class="row justify-content-start">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <h4 class="text-center orderHeading">Order Details</h4>
                            </div>
                            @foreach ($saleData as $val)
                            
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 mb-4 selling-card">
                                <div class="card border-0">
                                    <img src="{{asset('assets/images/product-images/product-1.png')}}" class="card-img-top mb-4"
                                        alt="Product Image">
                                    <div class="card-body p-0">
                                        <h5 class="card-title">Product Heading</h5>
                                        <div class="star-rating mb-2">
                                            <i class="fas fa-star me-1 star-gold"></i>
                                            <i class="fas fa-star me-1 star-gold"></i>
                                            <i class="fas fa-star me-1 star-gold"></i>
                                            <i class="fas fa-star me-1 star-gold"></i>
                                            <i class="fas fa-star me-1 star-gold"></i>
                                        </div>
                                        <p class="card-text">AED {{$val->products->rrp_price ?? ''}}</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 mb-4 selling-card">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td class="border-0 px-0">Product Name:</td>
                                            <td class="border-0 px-0 font-weight-bold">{{$val->products->item_title ?? ''}}</td>
                                        </tr>
                                        <tr>
                                            <td class="border-0 px-0">Brand:</td>
                                            <td class="border-0 px-0 font-weight-bold">{{$val->products->brand->name ?? ''}}</td>
                                        </tr>
                                        <tr>
                                            <td class="border-0 px-0">Color:</td>
                                            <td class="border-0 px-0 font-weight-bold">{{$val->products->color->name ?? ''}}</td>
                                        </tr>
                                        <tr>
                                            <td class="border-0 px-0">Size:</td>
                                            <td class="border-0 px-0 font-weight-bold">{{$val->products->size->name ?? ''}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 mb-4 selling-card">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td class="border-0 px-0 text-center">Pricing</td>
                                            <td class="border-0 px-0 font-weight-bold">{{$val->products->rrp_price ?? ''}}</td>
                                        </tr>
                                        <tr>
                                            <td class="border-0 px-0 text-center">Quantity</td>
                                            <td class="border-0 px-0 font-weight-bold">01</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>

                <div id="wishlist" class="content-section">
                    <div class="row py-4">
                        <h3 class="text-center">Wishlist</h3>
                    </div>
                    <div class="container-fluid py-5 bg-white rounded" style="padding-left: 40px; padding-right: 40px;">
                        <div class="row justify-content-start">
                            @foreach ($wishlist as $val)
                            
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 mb-4 wishlist-card">
                                <div class="card border-0">
                                    <img src="{{asset('uploads/item/'.$val->products->mainImag)}}" class="card-img-top mb-4"
                                        alt="Product Image">
                                    <div class="card-body p-0">
                                        <h5 class="card-title">Product Heading</h5>
                                        <div class="star-rating mb-2">
                                            <i class="fas fa-star me-1 star-gold"></i>
                                            <i class="fas fa-star me-1 star-gold"></i>
                                            <i class="fas fa-star me-1 star-gold"></i>
                                            <i class="fas fa-star me-1 star-gold"></i>
                                            <i class="fas fa-star me-1 star-gold"></i>
                                        </div>
                                        <p class="card-text">AED {{$val->products->rrp_price ?? ''}}</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        
                        </div>
                    </div>
                </div>

                <div id="edit-profile" class="content-section">
                    <div class="row py-4">
                        <h3 class="text-center">Profile Settings</h3>
                    </div>

                    <div class="container-fluid py-2 bg-white rounded">
                        <div class="row justify-content-start py-4">
                            <div class="col-12 mb-4 editProfile-form">

                                <form method="post" action="{{route('edit_web_profile')}}">
                                    @csrf
                                    <h4 class="mt-4">Edit Profile</h4>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="firstName">First Name</label>
                                            <input type="text" value="{{auth()->user()->first_name}}" name="first_name" class="form-control" id="firstName" >
                            <span class="text text-danger" id="wakoo">{{ $errors->first('first_name') }}</span>

                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="lastName">Last Name</label>
                                            <input type="text" name="last_name" value="{{auth()->user()->last_name}}" class="form-control" id="lastName" >
                            <span class="text text-danger" id="wakoo">{{ $errors->first('last_name') }}</span>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="email">Email Address</label>
                                            <input type="email" name="email" value="{{auth()->user()->email}}" class="form-control" id="email" >
                            <span class="text text-danger" id="wakoo">{{ $errors->first('email') }}</span>

                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="mobile">Mobile Number</label>
                                            <input type="number" name="number" value="{{auth()->user()->number}}" class="form-control" id="mobile" >
                            <span class="text text-danger" id="wakoo">{{ $errors->first('number') }}</span>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="password">Password</label>
                                            <input type="password" name="password" class="form-control" id="password" >
                            <span class="text text-danger" id="wakoo">{{ $errors->first('password') }}</span>

                                        </div>
                                        <div class="col-md-6 mb-3 d-flex justify-content-start align-items-center">
                                            <div class="upload-circle-outer">
                                                <div class="upload-circle">
                                                    <input required type="file" name="id_image" accept="image/*" id="fileUpload"
                                                        class="custom-file-upload" onchange="showImage(event)"
                                                        style="display: none;">
                                                    <div class="custom-file-upload"
                                                        onclick="document.getElementById('fileUpload').click();">
                                                        <img src="{{asset('assets/images/icons/cloud.png')}}" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                            <label for="fileUpload" class="ml-3">Emirates ID Card or Passport <span
                                                    class="form-label-required">*</span></label>
                                        </div>
                                    </div>

                                    <h4 class="mt-4">Social Links</h4>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="facebook">Facebook</label>
                                            <input type="url" name="facebook" value="{{auth()->user()->facebook}}" class="form-control" id="facebook">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="instagram">Instagram</label>
                                            <input type="url" name="instagram" class="form-control" value="{{auth()->user()->instagram}}" id="instagram">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="twitter">Twitter</label>
                                            <input type="url" name="twitter" value="{{auth()->user()->twitter}}" class="form-control" id="twitter">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="tiktok">TikTok</label>
                                            <input type="url" name="tiktok" class="form-control" value="{{auth()->user()->tiktok}}" id="tiktok">
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-primary">Save and Continue</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


                <div id="reviews" class="content-section">
                    <h3 class="text-center">Reviews Content</h3>
                    <p>Content for the Reviews section.</p>
                </div>

                <div id="refer-friend" class="content-section">
                    <div class="container-fluid py-5 bg-white rounded">
                        <div class="row justify-content-start py-4">
                            <div class="col-12 mb-4 referFriend">
                                <div class="row flex-column">
                                    <h4>Give $10, Get $10</h4>
                                    <p>Introduce a friend to LXRY Shared and get $10 , they’ll will also get $10 their
                                        first rental.</p>
                                    <h6>Share Your Link</h6>
                                    <div class="row justify-content-end py-5">
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
                                            <button class="btn btn-lg">Copy</button>
                                        </div>
                                    </div>
                                    <div class="row justify-content-start mb-5">
                                        <div class="row justify-content-start">
                                            <a href="https://www.facebook.com" target="_blank" class="social-icon mr-3">
                                                <img src="{{asset('assets/images/icons/Facebook.svg')}}" alt="Facebook">
                                            </a>
                                            <a href="https://www.twitter.com" target="_blank" class="social-icon mr-3">
                                                <img src="{{asset('assets/images/icons/Instagram.svg')}}" alt="Instagram">
                                            </a>
                                            <a href="https://www.instagram.com" target="_blank"
                                                class="social-icon mr-3">
                                                <img src="{{asset('assets/images/icons/Linkedin-2.svg')}}" alt="Linkdin">
                                            </a>
                                            <a href="https://www.linkedin.com" target="_blank" class="social-icon mr-3">
                                                <img src="{{asset('assets/images/icons/Tik Tok.svg')}}" alt="tiktok">
                                            </a>
                                        </div>
                                    </div>
                                    <h6>Other Sharing Options</h6>
                                    <div class="row justify-content-end py-5">
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
                                            <button class="btn btn-lg">Invite</button>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>

<!--Footer-->

<!--End Footer-->
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
                                        <img src="{{asset('assets/images/product-detail-page/camelia-reversible-big1.jpg')}}" alt />
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
                                                    <label class="swatchLbl color medium rectangle" for="swatch-0-red"
                                                        style="background-image:url(assets/images/product-detail-page/variant1-1.jpg')}});"
                                                        title="Red"></label>
                                                </div>
                                                <div data-value="Blue" class="swatch-element color blue available">
                                                    <input class="swatchInput" id="swatch-0-blue" type="radio"
                                                        name="option-0" value="Blue">
                                                    <label class="swatchLbl color medium rectangle" for="swatch-0-blue"
                                                        style="background-image:url(assets/images/product-detail-page/variant1-2.jpg')}});"
                                                        title="Blue"></label>
                                                </div>
                                                <div data-value="Green" class="swatch-element color green available">
                                                    <input class="swatchInput" id="swatch-0-green" type="radio"
                                                        name="option-0" value="Green">
                                                    <label class="swatchLbl color medium rectangle" for="swatch-0-green"
                                                        style="background-image:url(assets/images/product-detail-page/variant1-3.jpg')}});"
                                                        title="Green"></label>
                                                </div>
                                                <div data-value="Gray" class="swatch-element color gray available">
                                                    <input class="swatchInput" id="swatch-0-gray" type="radio"
                                                        name="option-0" value="Gray">
                                                    <label class="swatchLbl color medium rectangle" for="swatch-0-gray"
                                                        style="background-image:url(assets/images/product-detail-page/variant1-4.jpg')}});"
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
                                                                class="fa anm anm-minus-r" aria-hidden="true"></i></a>
                                                        <input type="text" id="Quantity" name="quantity" value="1"
                                                            class="product-form__input qty">
                                                        <a class="qtyBtn plus" href="javascript:void(0);"><i
                                                                class="fa anm anm-plus-r" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-form__item--submit">
                                                <button type="button" name="add" class="btn product-form__cart-submit">
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
                                                <a class="wishlist add-to-wishlist" href="#" title="Add to Wishlist"><i
                                                        class="icon anm anm-heart-l" aria-hidden="true"></i>
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
            <div class="display-table-cell width40"><img src="{{asset('assets/images/newsletter-img.jpg')}}"
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
                                <button type="submit" class="btn newsletter__submit" name="commit" id="subscribeBtn">
                                    <span class="newsletter__submit-text--large">Subscribe</span>
                                </button>
                            </span>
                        </div>
                    </form>
                    <ul class="list--inline site-footer__social-icons social-icons">
                        <li><a class="social-icons__link" href="#" title="Facebook"><i class="fa fa-facebook-official"
                                    aria-hidden="true"></i></a></li>
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
<script src="{{asset('assets/js/vendor/jquery.instagramFeed.min.js')}}"></script>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
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

<script>
    $(document).ready(function () {
        $('.sidebar-nav a').click(function (e) {
            e.preventDefault();
            $('.sidebar-nav li').removeClass('active');

            $(this).parent().addClass('active');
            var target = $(this).data('target');
            $('.content-section').removeClass('active');
            $(target).addClass('active');
        });
    });
</script>

<!-- Details link  -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const toggles = document.querySelectorAll('.details-toggle');

        toggles.forEach(toggle => {
            toggle.addEventListener('click', function (event) {
                event.preventDefault();
                const currentDetailsContent = this.closest('tr').nextElementSibling;

                document.querySelectorAll('.details-content').forEach(details => {
                    if (details !== currentDetailsContent) {
                        details.style.display = 'none'; // Close other details
                    }
                });

                currentDetailsContent.style.display = currentDetailsContent.style.display === 'none' ? 'table-row' : 'none';
            });
        });
    });
</script>

<!-- Rate this Iem -->
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const ratingButtons = document.querySelectorAll('.rateItem, .rateLender');

        ratingButtons.forEach(button => {
            button.addEventListener('click', function () {
                const modal = this.nextElementSibling;
                modal.style.display = "flex";

                const stars = modal.querySelectorAll(".star");
                const ratingInput = modal.querySelector(".rating");

                stars.forEach(star => {
                    star.addEventListener("click", function () {
                        let ratingValue = this.getAttribute("data-value");
                        ratingInput.value = ratingValue;

                        stars.forEach((s, index) => {
                            let starIcon = s.querySelector("i");
                            starIcon.classList.toggle("fa-solid", index < ratingValue);
                            starIcon.classList.toggle("fa-regular", index >= ratingValue);
                        });
                    });
                });

                modal.querySelector('.ratingForm').onsubmit = function (event) {
                    event.preventDefault();
                    let rating = ratingInput.value;
                    let review = modal.querySelector('.review').value;
                    console.log("Rating:", rating);
                    console.log("Review:", review);
                    modal.style.display = "none";
                };
            });
        });

        window.addEventListener('click', function (event) {
            if (event.target.classList.contains('modal')) {
                event.target.style.display = "none";
            }
        });
    });
</script>

<script>
    document.querySelectorAll('.openModal').forEach(button => {
        button.addEventListener('click', function () {
            const targetModalId = this.getAttribute('data-target');
            const modal = document.getElementById(targetModalId);
            modal.style.display = 'block';
        });
    });
    document.querySelectorAll('.close-btn').forEach(button => {
        button.addEventListener('click', function () {
            this.closest('.modal').style.display = 'none';
        });
    });

    window.onclick = function (event) {
        const modals = document.querySelectorAll('.modal');
        modals.forEach(modal => {
            if (event.target == modal) {
                modal.style.display = 'none';
            }
        });
    }
</script>

</div>
@endsection 