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
            <div class="check-outsec mt-5">
                <div class="row rowbgtop">
                    <div class="col-lg-8">
                        <div class="check-outsecleft">
                            <div class="mb-5">
                                <ul>
                                    <li><span></span></li>
                                    <li>
                                        <h5>Check Out</h5>
                                    </li>
                                </ul>
                            </div>
                            <p>Billing Details</p>
                            <div class="row mt-5 mb-5">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="basic-url" class="form-label">First Name*</label>
                                        <div class="input-group">
                                        <input type="text" class=" " id="basic-url" aria-describedby="basic-addon3 basic-addon4" placeholder="First Name">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="basic-url" class="form-label">Last Name*</label>
                                        <div class="input-group">
                                        <input type="text" class=" " id="basic-url" aria-describedby="basic-addon3 basic-addon4" placeholder="Last Name">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="basic-url" class="form-label">Country / Region*</label>
                                        <div class="input-group">
                                        <input type="text" class=" " id="basic-url" aria-describedby="basic-addon3 basic-addon4" placeholder="Country / Region">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="basic-url" class="form-label">Company Name</label>
                                        <div class="input-group">
                                        <input type="text" class=" " id="basic-url" aria-describedby="basic-addon3 basic-addon4" placeholder="Company Name">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="basic-url" class="form-label">Street Address*</label>
                                        <div class="input-group">
                                        <input type="text" class=" " id="basic-url" aria-describedby="basic-addon3 basic-addon4" placeholder="House number and street name">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="basic-url" class="form-label">Apt, suite, unit</label>
                                        <div class="input-group">
                                        <input type="text" class=" " id="basic-url" aria-describedby="basic-addon3 basic-addon4" placeholder="apartment, suite, unit, etc. (optional)">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="basic-url" class="form-label">City*</label>
                                        <div class="input-group">
                                        <input type="text" class=" " id="basic-url" aria-describedby="basic-addon3 basic-addon4" placeholder="Town / City">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="basic-url" class="form-label">State*</label>
                                        <div class="input-group">
                                            <select class="" aria-label="Default select example">
                                                <option selected>State</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                              </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="basic-url" class="form-label">Postal Code*</label>
                                        <div class="input-group">
                                        <input type="text" class=" " id="basic-url" aria-describedby="basic-addon3 basic-addon4" placeholder="Postal Code">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="basic-url" class="form-label">Phone*</label>
                                        <div class="input-group">
                                        <input type="text" class=" " id="basic-url" aria-describedby="basic-addon3 basic-addon4" placeholder="Phone">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button>
                                Continue to delivery
                            </button>
                            <div class="form-check check-checkbtn mt-3 mb-4">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    Save my information for a faster checkout
                                </label>
                            </div>
                            <hr>
                            <div class="shipping-addresswp mt-5 mb-4">
                                <h6>Shipping Address</h6>
                                <p>Select the address that matches your card or payment method.</p>
                            </div>
                            <div class="shipping-addresswpbox mb-5">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Same as Billing address
                                    </label>
                                  </div>
                                  <hr>
                                  <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Use a different shipping address
                                    </label>
                                  </div>
                            </div>
                            <hr>
                            <div class="shipping-methodwp mt-5">
                                <h6>Shipping Method</h6>
                                <div class="row mt-5">
                                    <div class="col-md-1">
                                        <img src="{{ asset('frontend/images/item1.png') }}" alt="">
                                    </div>
                                    <div class="col-md-4">
                                        <p>Blue Flower Print Crop Top x 1</p>
                                        <span>Color : <span style="color: rgba(128, 125, 126, 1)">Yellow</span></span>
                                    </div>
                                    <div class="col-md-1">
                                        <span style="color: rgba(128, 125, 126, 1); font-weight: 500">$29.00</span>
                                    </div>
                                    <div class="col-md-6">
                                        <span style="color: rgba(60, 66, 66, 1)">LXRY Shared Guaranteed Delivery | Arrives by Monday, June 7</span>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-1">
                                        <img src="{{ asset('frontend/images/item2.png') }}" alt="">
                                    </div>
                                    <div class="col-md-4">
                                        <p>Blue Flower Print Crop Top x 1</p>
                                        <span>Color : <span style="color: rgba(128, 125, 126, 1)">Yellow</span></span>
                                    </div>
                                    <div class="col-md-1">
                                        <span style="color: rgba(128, 125, 126, 1); font-weight: 500">$29.00</span>
                                    </div>
                                    <div class="col-md-6">
                                        <span style="color: rgba(60, 66, 66, 1)">LXRY Shared Guaranteed Delivery | Arrives by Monday, June 7</span>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-1">
                                        <img src="{{ asset('frontend/images/item3.png') }}" alt="">
                                    </div>
                                    <div class="col-md-4">
                                        <p>Blue Flower Print Crop Top x 1</p>
                                        <span>Color : <span style="color: rgba(128, 125, 126, 1)">Yellow</span></span>
                                    </div>
                                    <div class="col-md-1">
                                        <span style="color: rgba(128, 125, 126, 1); font-weight: 500">$29.00</span>
                                    </div>
                                    <div class="col-md-6">
                                        <span style="color: rgba(60, 66, 66, 1)">LXRY Shared Guaranteed Delivery | Arrives by Monday, June 7</span>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="payment-methodwp mt-5">
                                <h6>Payment Method</h6>
                                <p>All transactions are secure and encrypted.</p>
                                <div class="payment-methodbox mt-5 mb-5">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="payment" id="flexRadioDefault1" checked>
                                        <label class="form-check-label" for="">
                                            <h6>Credit Card</h6>
                                            <p>We accept all major credit cards.</p>
                                        </label>
                                        <ul class="mt-4">
                                            <li>
                                                <img src="{{ asset('frontend/images/pay.svg') }}" alt="">
                                            </li>
                                            <li>
                                                <img src="{{ asset('frontend/images/visa.svg') }}" alt="">
                                            </li>
                                        </ul>
                                        <div class="row mt-4">
                                            <div class="col-md-6">
                                                <div class="input-group mb-4">
                                                    <input type="text" class="form-control" placeholder="Card number" aria-label="Username" aria-describedby="basic-addon1">
                                                  </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-group mb-4">
                                                    <input type="text" class="form-control" placeholder="Name of card" aria-label="Username" aria-describedby="basic-addon1">
                                                  </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-group mb-4">
                                                    <input type="text" class="form-control" placeholder="Expiration date (MM/YY)" aria-label="Username" aria-describedby="basic-addon1">
                                                  </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="security-code input-group mb-4">
                                                    <input type="password" class="form-control" id="passwordField" placeholder="Security Code" aria-label="Username" aria-describedby="basic-addon1">
                                                    <span class="input-group-text" id="basic-addon1">
                                                        <i class="fas fa-eye-slash" id="togglePassword"></i>
                                                    </span>
                                                    {{-- <div class="input-group-append">
                                                        <span class="input-group-text">
                                                        </span>
                                                    </div> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="payment" id="flexRadioDefault2">
                                        <label class="form-check-label" for="">
                                          <h6>Cash on delivery</h6>
                                          <p>Pay with cash upon delivery.</p>
                                        </label>
                                      </div>
                                      <hr>
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="payment" id="flexRadioDefault3">
                                        <label class="form-check-label" for="">
                                          <h6>Paypol</h6>
                                        </label>
                                      </div>
                                </div>
                                <button class="mb-5">Pay Now</button>
                            </div>
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
                            <div class="mb-3">
                                <label for="basic-url" class="form-label">Enter your Promotional Code</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Enter code" aria-label="Username" aria-describedby="basic-addon1">
                                    <span class="input-group-text" id="basic-addon1">
                                        Apply
                                    </span>
                                </div>
                            </div>    
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <p>Total</p>
                                </div>
                                <div class="col-md-6 text-end">
                                    <p>$478.00</p>
                                </div>
                            </div>                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>


<script>
   const togglePassword = document.querySelector('#togglePassword');
    const passwordField = document.querySelector('#passwordField');

    togglePassword.addEventListener('click', function (e) {
        // toggle the type attribute
        const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordField.setAttribute('type', type);
        
        // toggle the eye icon
        if (type === 'password') {
            togglePassword.classList.add('fa-eye-slash');
            togglePassword.classList.remove('fa-eye');
        } else {
            togglePassword.classList.remove('fa-eye-slash');
            togglePassword.classList.add('fa-eye');
        }
    });
</script>


@endsection