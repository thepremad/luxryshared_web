@extends('frontend.layouts.app')

@section('content')


<section>

    <div class="container">
        <div class="listitem-head mb-4">
            <h5>MIDDLE EAST FIRST PEER TO PEER FASHION SHARING COMMUNITY</h5>    
        </div>
    </div>

</section>

<section>

    <div class="cartproduct-wp">
        <div class="container">
            <div class="cartproduct-sec">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Product Details</th>
                        <th scope="col">Price</th>
                        <th scope="col">RENT DURATION</th>
                        <th scope="col">Lender Name</th>
                        <th scope="col">Total</th>
                      </tr>
                    </thead>
                    <tbody>
                        <tr id="cart-item-1">
                            <td>
                                <div class="cartpro-rowone">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <img src="{{ asset('frontend/images/samanimg.png') }}" alt="">
                                        </div>
                                        <div class="col-md-9">
                                            <p>Blue Flower Print Crop Top</p>
                                            <span>Color : Yellow</span><br>
                                            <span>Size : M</span>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>$29.00</td>
                            <td>4</td>
                            <td></td>
                            <td>
                                <div class="cartpro-rowtwo">
                                    <div class="row">
                                        <div class="col-md-6">
                                            $29.00
                                        </div>
                                        <div class="col-md-6 text-end">
                                            <i class="fa-solid fa-trash-can" onclick="removeCartItem('cart-item-1')"></i>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr id="cart-item-1">
                            <td>
                                <div class="cartpro-rowone">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <img src="{{ asset('frontend/images/samanimg.png') }}" alt="">
                                        </div>
                                        <div class="col-md-9">
                                            <p>Blue Flower Print Crop Top</p>
                                            <span>Color : Yellow</span><br>
                                            <span>Size : M</span>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>$29.00</td>
                            <td>
                                <div class="inc-decwp">
                                    <ul>
                                        <li onclick="decbg()">-</li>
                                        <li id="valueBg">1</li>
                                        <li onclick="incBg()">+</li>
                                    </ul>
                                </div>
                            </td>
                            <td></td>
                            <td>
                                <div class="cartpro-rowtwo">
                                    <div class="row">
                                        <div class="col-md-6">
                                            $29.00
                                        </div>
                                        <div class="col-md-6 text-end">
                                            <i class="fa-solid fa-trash-can" onclick="removeCartItem('cart-item-1')"></i>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="cartproduct-searchinputb">
                <div class="row mt-5">
                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <input type="text" class="" placeholder="ADD REFERRAL CODE" aria-label="Username" aria-describedby="basic-addon1">
                            <span class="input-group-text" id="basic-addon1">APPLY</span>
                          </div>
                    </div>
                    <div class="col-md-6 text-end">
                        <button>Proceed To Checkout</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<script>
    function removeCartItem(itemId) {
        var element = document.getElementById(itemId);
        element.parentNode.removeChild(element);
    }
</script>

<script>
    function incBg() {
        let valueElement = document.getElementById('valueBg');
        let currentValue = parseInt(valueElement.textContent);
        valueElement.textContent = currentValue + 1;
    }

    function decbg() {
        let valueElement = document.getElementById('valueBg');
        let currentValue = parseInt(valueElement.textContent);
        if (currentValue > 1) {
            valueElement.textContent = currentValue - 1;
        }
    }
</script>

@endsection