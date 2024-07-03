@extends('frontend.layouts.app')

@section('content')



<section>

    <div class="container">
        <div class="listitem-head mb-3">
            <h5>MIDDLE EAST FIRST PEER TO PEER FASHION SHARING COMMUNITY</h5>    
        </div>
    </div>

</section>

<section>

    <div class="check-outwp">
        <div class="container">
            <div class="check-outsec order-confirmedsec">
                <div class="row rowbgtop">
                    <div class="col-lg-8">
                        <div class="orderconfirmed-leftwp">
                            <i class="fa-solid fa-check"></i>
                            <h3>Your Order is
                                Confirmed</h3>
                            <button>Message Lender</button>
                            <p>LUXRY Shared Refer a friend & Earn some credit towards your next purchase.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="check-outsecright">
                            <h6>Order Summary</h6>
                            <hr>
                            <div class="row">
                                <div class="col-md-3">
                                    <img src="{{ asset('frontend/images/item1.png') }}" alt="">
                                </div>
                                <div class="col-md-7">
                                    <p>Blue Flower Print Crop Top x 1</p>
                                    <span>Color : <span style="color: rgba(128, 125, 126, 1)">Yellow</span></span>
                                </div>
                                <div class="col-md-2">
                                    <span style="color: rgba(128, 125, 126, 1)">$29.00</span>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-3">
                                    <img src="{{ asset('frontend/images/item2.png') }}" alt="">
                                </div>
                                <div class="col-md-7">
                                    <p>Blue Flower Print Crop Top x 1</p>
                                    <span>Color : <span style="color: rgba(128, 125, 126, 1)">Yellow</span></span>
                                </div>
                                <div class="col-md-2">
                                    <span style="color: rgba(128, 125, 126, 1)">$29.00</span>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-3">
                                    <img src="{{ asset('frontend/images/item3.png') }}" alt="">
                                </div>
                                <div class="col-md-7">
                                    <p>Blue Flower Print Crop Top x 1</p>
                                    <span>Color : <span style="color: rgba(128, 125, 126, 1)">Yellow</span></span>
                                </div>
                                <div class="col-md-2">
                                    <span style="color: rgba(128, 125, 126, 1)">$29.00</span>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <p>Subtotal <span style="color: rgba(128, 125, 126, 1)">( 3 items )</span></p>
                                </div>
                                <div class="col-md-6 text-end">
                                    <p>$513.00</p>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-6">
                                    <p>Savings</p>
                                </div>
                                <div class="col-md-6 text-end">
                                    <p>-$30.00</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <p>Shipping</p>
                                </div>
                                <div class="col-md-6 text-end">
                                    <p>-$5.00</p>
                                </div>
                            </div>
                            <hr>
                            {{-- <div class="mb-3">
                                <label for="basic-url" class="form-label">Enter your Promotional Code</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Enter code" aria-label="Username" aria-describedby="basic-addon1">
                                    <span class="input-group-text" id="basic-addon1">
                                        Apply
                                    </span>
                                </div>
                            </div>    
                            <hr> --}}
                            <div class="row">
                                <div class="col-md-6">
                                    <p>Total</p>
                                </div>
                                <div class="col-md-6 text-end">
                                    <p>$478.00</p>
                                </div>
                            </div>                          
                        </div>
                        <div class="text-end continue-btn">
                            <button>Continue shopping</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>



@endsection