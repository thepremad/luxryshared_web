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
                            <h5>LENDING</h5>
                        </div>
                        <div class="dashbord-oneright">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <div class="row">
                                        <div class="col-lg-2 col-md-4">
                                            <img src="{{ asset('frontend/images/lending-img.png') }}" alt="">
                                        </div>
                                        <div class="col-lg-4 col-md-8">
                                            <p>Button tweed blazer</p>
                                        </div>
                                        <div class="col-lg-2 col-md-4">
                                            <p>Jai Singh</p>
                                        </div>
                                        <div class="col-lg-2 col-md-4">
                                            <p>$320</p>
                                        </div>
                                        <div class="col-lg-2 col-md-4">
                                            <span class="accordion-header">
                                                <span class="" type="button" data-bs-toggle="collapse" data-bs-target="#lendingDetailsOne" aria-expanded="false" aria-controls="collapseThree">
                                                    <p>
                                                        <i class="fa-solid fa-caret-right"></i>
                                                        Details
                                                    </p>
                                                </span>
                                              </span>
                                        </div>
                                    </div>
                                  <div id="lendingDetailsOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                      <div class="lending-detailsbody">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-6">
                                                <p>Rental Name</p>
                                                <span>Jai Singh</span>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <p>Product Name</p>
                                                <span>Button tweed blazer</span>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <p>Payment Details</p>
                                                <span>320 AED</span>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <p>Rental Name</p>
                                                <span>Jai Singh</span>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <p>Product Name</p>
                                                <span>Button tweed blazer</span>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <p>Payment Details</p>
                                                <span>320 AED</span>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <p>Rental Name</p>
                                                <span>Jai Singh</span>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <p>Product Name</p>
                                                <span>Button tweed blazer</span>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <p>Payment Details</p>
                                                <span>320 AED</span>
                                            </div>

                                            <div class="col-lg-4 col-md-6">
                                                <button type="button" class="" data-bs-toggle="modal" data-bs-target="#rentorModal">
                                                    Rate Rentor
                                                </button>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <button type="button" class="" data-bs-toggle="modal" data-bs-target="#rateItemModal">
                                                    Rate Item
                                                </button>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <button class="request-btn">
                                                    Request Withdrawal
                                                </button>
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
        </div>
    </div>


    {{--  --}}

    <div class="modal fade" id="rateItemModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="rateitem-modalbody">
                <p>Rate the Item</p>
                <div class="star-rating mb-4">
                    <input type="radio" id="5-stars" name="rating" value="5" />
                    <label for="5-stars" class="star">&#9733;</label>
                    <input type="radio" id="4-stars" name="rating" value="4" />
                    <label for="4-stars" class="star">&#9733;</label>
                    <input type="radio" id="3-stars" name="rating" value="3" />
                    <label for="3-stars" class="star">&#9733;</label>
                    <input type="radio" id="2-stars" name="rating" value="2" />
                    <label for="2-stars" class="star">&#9733;</label>
                    <input type="radio" id="1-star" name="rating" value="1" />
                    <label for="1-star" class="star">&#9733;</label>
                </div>
                <p class="mb-4">Review Item</p>
                <form action="">
                    <textarea class="form-control" aria-label="With textarea" placeholder="Write your review..." rows="5"></textarea>
                    <div class="text-center mt-4 mb-5">
                        <button type="submit">
                            Submit
                        </button>
                    </div>
                </form>
              </div>
            </div>
          </div>
        </div>
    </div>
    <div class="modal fade" id="rentorModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="rateitem-modalbody">
                <p>Rate the Rentor</p>
                <div class="star-rating mb-4">
                    <input type="radio" id="5-stars" name="rating" value="5" />
                    <label for="5-stars" class="star">&#9733;</label>
                    <input type="radio" id="4-stars" name="rating" value="4" />
                    <label for="4-stars" class="star">&#9733;</label>
                    <input type="radio" id="3-stars" name="rating" value="3" />
                    <label for="3-stars" class="star">&#9733;</label>
                    <input type="radio" id="2-stars" name="rating" value="2" />
                    <label for="2-stars" class="star">&#9733;</label>
                    <input type="radio" id="1-star" name="rating" value="1" />
                    <label for="1-star" class="star">&#9733;</label>
                </div>
                <p class="mb-4 mt-4">Feedback</p>
                <form action="">
                    <textarea class="form-control" aria-label="With textarea" placeholder="Write your review..." rows="5"></textarea>
                    <div class="text-center mt-4 mb-5">
                        <button type="submit">
                            Submit
                        </button>
                    </div>
                </form>
              </div>
            </div>
          </div>
        </div>
    </div>

</section>



@endsection