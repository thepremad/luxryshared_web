@extends('frontend.layouts.app')

@section('content')




<section>

    <div class="login-wp">
        <div class="container">
            <div class="login-sec forgotpw-sec changepw-wp">
                <img src="{{ asset('frontend/images/forgotwp-bg.png') }}" alt="">
                
                <div class="login-con forgotpw-con pwchanged-succbg">
                    <div class="pwchanged-succhead">
                        <strong>Your Password Has Changed Successfully!</strong>
                    </div>
                    <div class="changepw-inputs">
                        <button><a href="{{url('login')}}" style="color:white">BACK TO LOGIN</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>



@endsection