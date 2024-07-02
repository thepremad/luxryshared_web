@extends('frontend.layouts.app')

@section('content')




<section>

    <div class="login-wp">
        <div class="container">
            <div class="login-sec forgotpw-sec">
                <img src="{{ asset('frontend/images/forgotwp-bg.png') }}" alt="">                
                <div class="login-con forgotpw-con">
                    <strong>Code Verification</strong>
                    <p class="mt-5">Enter 4 digit verification code</p>
                    <form class="otp-form">
                        <div class="otpinputs-rigester">
                            <div class="title"></div>
                            <div class="otp-input-fields">
                                <input type="number" class="otp__digit" id="otp-1" maxlength="1" required>
                                <input type="number" class="otp__digit" id="otp-2" maxlength="1" required>
                                <input type="number" class="otp__digit" id="otp-3" maxlength="1" required>
                                <input type="number" class="otp__digit" id="otp-4" maxlength="1" required>
                            </div>                            
                        </div>
                        <br>
                        <br>
                        <button type="submit">
                            Verify
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</section>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const inputs = document.querySelectorAll('.otp__digit');

        inputs.forEach((input, index) => {
            input.addEventListener('input', (e) => {
                if (input.value.length > 1) {
                    input.value = input.value.slice(0, 1); // Ensure only one digit
                }
                if (input.value.length > 0) {
                    if (index < inputs.length - 1) {
                        inputs[index + 1].focus();
                    }
                }
            });

            input.addEventListener('keydown', (e) => {
                if (e.key === 'Backspace' && input.value === '') {
                    if (index > 0) {
                        inputs[index - 1].focus();
                    }
                }
            });
        });
    });
</script>


@endsection