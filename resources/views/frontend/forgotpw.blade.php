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
<script>

        $('#forgetPassword').on('submit', function (e) {
            e.preventDefault();
            var $form = $(this);
            var url = "{{ url('api/forgot_password') }}";
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
                    let userId = res.user_id;
                    toastr.success(res.message);
                    window.location.href = "{{url('code-verify')}}" + '/' + userId;
                },
                error: function (xhr) {
    $('.spinner-loader').css('display', 'none');
    if (xhr.status === 422) {
        $('.validation-class').text('');
        var errors = xhr.responseJSON.error || xhr.responseJSON.errors || {};

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
        toastr.error(xhr.responseJSON.error || xhr.message);
        $('#error').show().html(xhr.responseJSON.error || xhr.message);
    }
}
            });
        });
    
</script>
@endsection