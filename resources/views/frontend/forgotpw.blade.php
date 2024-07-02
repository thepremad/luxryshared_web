@extends('frontend.layouts.app')

@section('content')




<section>

    <div class="login-wp">
        <div class="container">
            <div class="login-sec forgotpw-sec">
                <img src="{{ asset('frontend/images/forgotwp-bg.png') }}" alt="">
                
                <div class="login-con forgotpw-con">
                    <strong>Forgot Password</strong>
                    <form action="">
                        <div class="mb-3">
                            <label for="basic-url" class="form-label">Your email</label>
                            <div class="input-group emailcont-bg">
                                <input type="email" class="form-control" placeholder="Enter your Email" aria-label="Enter your email" aria-describedby="basic-addon1" required id="emailInput">
                                <span class="icon-right" id="validIcon">&#10003;</span>
                            </div>
                        </div>
                        <button type="submit">
                            SEND CODE
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</section>

<script>
    document.getElementById('emailInput').addEventListener('input', function() {
        const email = this.value;
        const validIcon = document.getElementById('validIcon');
        const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        validIcon.style.display = re.test(email) ? 'block' : 'none';
    });
</script>

@endsection