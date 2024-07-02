@extends('frontend.layouts.app')

@section('content')




<section>

    <div class="login-wp">
        <div class="container">
            <div class="login-sec">
                <img src="{{ asset('frontend/images/loginbg.png') }}" alt="">
                
                <div class="login-con">
                    <ul>
                        <li>
                            <strong>Login</strong>
                        </li>
                        <li>
                            <a href="{{ url('register') }}">
                                Register
                            </a>
                        </li>
                    </ul>
                    <form action="">
                        <div class="mb-3">
                            <label for="basic-url" class="form-label">Your email</label>
                            <div class="input-group emailcont-bg">
                                <input type="email" class="form-control" placeholder="Enter your Email" aria-label="Enter your email" aria-describedby="basic-addon1" required id="emailInput">
                                <span class="icon-right" id="validIcon">&#10003;</span>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="password-input" class="form-label">Password</label>
                            <div class="input-group">
                                <input type="password" class="form-control" id="password-input" placeholder="Enter your Password" aria-label="Password" aria-describedby="basic-addon1" required>
                                <span class="input-group-text" id="basic-addon1" onclick="passwordShow()">
                                    <i class="fa-regular fa-eye-slash" id="toggle-icon"></i>
                                </span>
                            </div>
                        </div>
                        <div class="forgetpassword">
                            <a href="#">Forgot Password</a>    
                        </div>
                        <button class="submitbtn-login" style="submit">Sign in</button><br>
                    </form>
                    <a href="{{route('google_login')}}"><button>
                        <img src="{{ asset('frontend/images/google-logo.png') }}" alt="">
                        Google
                    </button>  </a>                                       
                </div>
            </div>
        </div>
    </div>

</section>
<script>
    function passwordShow() {
    var passwordInput = document.getElementById('password-input');
    var toggleIcon = document.getElementById('toggle-icon');
    
    if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        toggleIcon.classList.remove('fa-eye-slash');
        toggleIcon.classList.add('fa-eye');
    } else {
        passwordInput.type = 'password';
        toggleIcon.classList.remove('fa-eye');
        toggleIcon.classList.add('fa-eye-slash');
    }
}

</script>

<script>
    document.getElementById('emailInput').addEventListener('input', function() {
        const email = this.value;
        const validIcon = document.getElementById('validIcon');
        const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        validIcon.style.display = re.test(email) ? 'block' : 'none';
    });
</script>
<script>

        $('#frmLogin').on('submit', function (e) {
            e.preventDefault();
            var $form = $(this);
            var url = "{{ url('api/login') }}";
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
                    $('.spinner-loader').css('display', 'none');
                    toastr.success('Login Successfully !');
                    
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
                    }else if(xhr.status === 500){
                    toastr.warning('Admin unable to login!');

                    } else {
                        toastr.error(xhr.message);
                        $('#error').show().html(xhr.message);
                    }
                }
            });
        });
    
    
</script>


@endsection