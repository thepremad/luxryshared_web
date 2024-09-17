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
                    <form action="{{route('login')}}" id="frmLogin" method="POST"  >
                        @csrf
                        <div class="mb-3">
                            <label for="basic-url" class="form-label">Your email</label>
                            <div class="input-group emailcont-bg">
                                <input type="email" name="email" class="form-control" placeholder="Enter your Email" aria-label="Enter your email" aria-describedby="basic-addon1"  id="emailInput" >
<!--                                 <span class="input-group-text" id="basic-addon1">
                                    <i class="fa-solid fa-check"></i>
                                </span> -->
                                <span class="icon-right" id="validIcon">&#10003;</span>
                            </div>
                            <span class="text-danger validation-class" id="email-error"></span>
                        </div>
                        <div class="mb-3">
                            <label for="password-input" class="form-label">Password</label>
                            <div class="input-group">
                                <input type="password" name="password" class="form-control" id="password-input" placeholder="Enter your Password" aria-label="Password" aria-describedby="basic-addon1" >
                                <span class="input-group-text" id="basic-addon1" onclick="passwordShow()">
                                    <i class="fa-regular fa-eye-slash" id="toggle-icon"></i>
                                </span>
                            </div>
                            <span class="text-danger validation-class" id="password-error"></span>
                        </div>
                        <div class="forgetpassword">
                            <a href="{{url('forgotpw')}}">Forgot Password</a>    
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
      $(document).ready(function () {
      $('#frmLogin').on('submit', function (e) {
          e.preventDefault();
          var $form = $(this);
          var url = $form.attr('action');
          var formData = new FormData($form[0]);
          $('.validation-class').html('');
          $.ajax({
              url: url,
              type: 'POST',
              data: formData,
              processData: false,
              contentType: false,
              beforeSend: function() {
                $('.spinner-loader').css('display', 'block');
                },
              success: function (res) {
                $('.spinner-loader').css('display', 'none');
                  if (res.status === 200) {
                      toastr.success(res.message);
                      window.location.href = "{{ route('home') }}"; 
                  } else if(res.status === 422) {
                    $.each(res.message, function (key, value) {
                            $("#" + key + "-error").text(value[0]);
                        });
                  } else {
                      toastr.error(res.message);
                      $('#error').show().html(res.message);
                  }
              },
              error: function () {     
                $('.spinner-loader').css('display', 'none');
                  toastr.error('Oops... Something went wrong. Please try again.');
              }
          });
      });
  });
</script>


@endsection
