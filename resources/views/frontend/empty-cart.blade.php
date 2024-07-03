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

    <div class="emptycart-wp">
        <div class="container">
            <div class="emptycart-sec">
                <img src="{{ asset('frontend/images/emptycart.png') }}" alt="">
                <h3>Your cart is empty and sad :(</h3>
                <p>Add something to make it happy!</p>
                <button class="mt-5">Continue Shopping</button>
            </div>
        </div>
    </div>

</section>



@endsection