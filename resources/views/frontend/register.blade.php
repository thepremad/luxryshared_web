@extends('frontend.layouts.app')

@section('content')


<section>

    <div class="rigester-wp">
        <div class="container">
            <div class="rigester-sec">
                <form action="" id="registerForm">
                    <div class="rigester-con">
                        <ul>
                            <li>
                                <a href="{{ url('login') }}">
                                    Login
                                </a>
                            </li>
                            <li>
                                <strong>Register</strong>
                            </li>
                        </ul>
                        <p>Register With LXRY Shared</p>
                        <div class="mb-3">
                            <label for="basic-url" class="form-label">Email Address</label> <span>*</span>
                            <div class="input-group">
                              <input type="email" placeholder="Enter your Email" class="form-control" id="basic-url" aria-describedby="basic-addon3 basic-addon4" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="basic-url" class="form-label">First Name</label> <span>*</span>
                            <div class="input-group">
                              <input type="text" placeholder="First Name" class="form-control" id="basic-url" aria-describedby="basic-addon3 basic-addon4" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="basic-url" class="form-label">Last Name</label> <span>*</span>
                            <div class="input-group">
                              <input type="text" placeholder="Last Name" class="form-control" id="basic-url" aria-describedby="basic-addon3 basic-addon4" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="basic-url" class="form-label">Password</label>
                            <div class="input-group">
                              <input type="password" placeholder="Creat Password" class="form-control" id="basic-url" aria-describedby="basic-addon3 basic-addon4" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="basic-url" class="form-label">Confirm Password</label>
                            <div class="input-group">
                              <input type="password" placeholder="Confirm Password" class="form-control" id="basic-url" aria-describedby="basic-addon3 basic-addon4" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="basic-url" class="form-label">Mobile Number</label> <span>*</span>
                            <div class="input-group">
                              <input type="number" placeholder="Mobile Number" class="form-control" id="basic-url" aria-describedby="basic-addon3 basic-addon4" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="basic-url" class="form-label">Referral Code</label> <span>*</span>
                            <div class="input-group">
                              <input type="number" placeholder="Referral Code" class="form-control" id="basic-url" aria-describedby="basic-addon3 basic-addon4" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="profileimg" id="profileImg">
                                    <!-- Image will be displayed here -->
                                </div>
                            </div>
                            <div class="col-md-8">
                                <p>Upload Emirates ID Card or Passport <span>*(ID verification to be decided)</span></p>
                                <input type="file" class="form-control" id="fileInput" aria-describedby="basic-addon3 basic-addon4" required>
                            </div>
                        </div>
                        <div class="chackbox-rigester">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    I AGREE TO THE TERMS OF SERVICES AND PRIVACY POLICY.
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                <label class="form-check-label" for="flexCheckChecked">
                                    I AGREE TO RECEIVE MARKETING EMAILS FROM LXRY.
                                </label>
                              </div>
                        </div>
                        <div class="rigester-submitbtn">
                            <button type="submit">REGISTER</button>
                            <p>OR REGISTER USING</p>
                        </div>
                        <div class="rigester-btnfacegoog">
                            <button>
                                <img src="{{ asset('frontend/images/google-logo.png') }}" alt="">
                                <span>Google</span>
                            </button>
                            <button>
                                <img src="{{ asset('frontend/images/facebookicon.png') }}" alt="">
                                <span2>Facebook</span2>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{--  --}}

    <div class="modal fade" id="rigesterSubmit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <span>Enter your OTP</span>
                    <p>Verify it’s you</p>
                    <span2>Enter verification code</span2>
                    <form class="otp-form">
                        <div class="otpinputs-rigester">
                            <div class="title"></div>
                            <div class="otp-input-fields">
                                <input type="number" class="otp__digit otp__field__1" required>
                                <input type="number" class="otp__digit otp__field__2" required>
                                <input type="number" class="otp__digit otp__field__3" required>
                                <input type="number" class="otp__digit otp__field__4" required>
                            </div>
                        </div>
                        <br>
                        <span3>A verification code has been sent to your email, please also check your junk folder.</span3>
                        <br>
                        <button type="submit">
                            Verify
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{--  --}}

</section>

<script>
    document.getElementById('fileInput').addEventListener('change', function(event) {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                const profileImgDiv = document.getElementById('profileImg');
                profileImgDiv.innerHTML = '<img src="' + e.target.result + '" alt="Selected Image">';
            }
            reader.readAsDataURL(file);
        }
    });
</script>

<script>
    document.getElementById('registerForm').addEventListener('submit', function(event) {
        event.preventDefault(); 
        setTimeout(() => {
            var modal = new bootstrap.Modal(document.getElementById('rigesterSubmit'));
            modal.show();
        }, 1000); 
    });
</script>

<script>
    var otp_inputs = document.querySelectorAll(".otp__digit")
        var mykey = "0123456789".split("")
        otp_inputs.forEach((_)=>{
        _.addEventListener("keyup", handle_next_input)
        })
        function handle_next_input(event){
        let current = event.target
        let index = parseInt(current.classList[1].split("__")[2])
        current.value = event.key
        
        if(event.keyCode == 8 && index > 1){
            current.previousElementSibling.focus()
        }
        if(index < 6 && mykey.indexOf(""+event.key+"") != -1){
            var next = current.nextElementSibling;
            next.focus()
        }
        var _finalKey = ""
        for(let {value} of otp_inputs){
            _finalKey += value
        }
        if(_finalKey.length == 6){
            document.querySelector("#_otp").classList.replace("_notok", "_ok")
            document.querySelector("#_otp").innerText = _finalKey
        }else{
            document.querySelector("#_otp").classList.replace("_ok", "_notok")
            document.querySelector("#_otp").innerText = _finalKey
        }
        }
</script>




@endsection