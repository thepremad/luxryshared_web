@extends('frontend.layouts.app')

@section('content')




<section>

    <div class="listitem-wp">
        <div class="container">
            <div class="listitem-headsec pt-3 pb-3 mb-5">
                <div class="listitem-head">
                    <h5>MIDDLE EAST FIRST PEER TO PEER FASHION SHARING COMMUNITY</h5>    
                </div>    
            </div>  
            <br>
              <div class="item-successfullysec">
                <img src="{{ asset('frontend/images/right-icon.png') }}" alt="">
                <h4 class="mt-4 mb-3">Your Item is been  uploaded 
                successfully.</h4>
                <strong>Your Item will be LIVE
                    upon approval from 
                    LXRY Shared admin
                </strong><br><br><br><br>
                <a href="#">
                    Back to Home
                </a>
              </div>
        </div>    
    </div>    

</section>




@endsection