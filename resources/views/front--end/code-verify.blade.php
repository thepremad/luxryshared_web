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
                    <form class="otp-form" id="forgetPassword" >
                        <div class="otpinputs-rigester">
                            <div class="title"></div>
                            <div class="otp-input-fields">
                                <input type="hidden" name="otp" id="oTP">
                                <input type="hidden" name="user_id" value="{{$id}}" id="userID">
                                <input type="number" class="otp__digit" id="otp_1" maxlength="1" required>
                                <input type="number" class="otp__digit" id="otp_2" maxlength="1" required>
                                <input type="number" class="otp__digit" id="otp_3" maxlength="1" required>
                                <input type="number" class="otp__digit" id="otp_4" maxlength="1" required>
                            </div>  
                            <span class="mt-2 text-danger validation-class" id="otp-error"></span>
                         
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
<script>
    $(document).ready(function () {
        

        $('#forgetPassword').on('submit', function (e) {
            e.preventDefault();
             let userId = $('#userID').val()
            var otp = $('#otp_1').val() + $('#otp_2').val() + $('#otp_3').val() + $('#otp_4').val();
            $("#oTP").val(otp);
            var $form = $(this);
            var url = "{{ url('api/verify_otp') }}";
            var formData = new FormData($form[0]);
            $('.validation-class').html('');
            $.ajax({
                url: url,
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                beforeSend: function () {
                    $('.spinner-loader').css('display', 'block');
                },
                success: function (res) {
                    toastr.success(res.message);
                    window.location.href = "{{url('change-pw')}}" + '/' + userId;
                },
                error: function (xhr) {
                    $('.spinner-loader').css('display', 'none');
                    if (xhr.status === 422) {
                        $('.validation-class').text('');
                        var errors = xhr.responseJSON.error;
                        function displayErrors(errors, prefix = '') {
                            $.each(errors, function (key, value) {
                                if (typeof value === 'object' && value !== null) {
                                    displayErrors(value, prefix + key + '.');
                                } else {
                                    $("#" + prefix + key + "-error").text(Array.isArray(value) ? value.join(', ') : value);
                                }
                            });
                        }
                        displayErrors(errors);
                    } else {
                        toastr.error(xhr.otp);
                        $('#error').show().html(xhr.otp);
                    }
                }
            });
        });
    });
</script>
@endsection