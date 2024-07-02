@extends('frontend.layouts.app')

@section('content')




<section>

    <div class="login-wp">
        <div class="container">
            <div class="login-sec forgotpw-sec changepw-wp">
                <img src="{{ asset('frontend/images/forgotwp-bg.png') }}" alt="">
                
                <div class="login-con forgotpw-con">
                    <strong>Change Password</strong>
                    <div class="changepw-inputs">
                        <form action="">
                            <div class="mb-3">
                                <label for="new-password" class="form-label">Create New Password</label>
                                <div class="input-group">
                                    <input type="password" class="form-control" id="new-password" aria-describedby="basic-addon3">
                                    <span class="input-group-text" id="toggle-new-password"><i class="fa-regular fa-eye-slash"></i></span>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="confirm-password" class="form-label">Confirm New Password</label>
                                <div class="input-group">
                                    <input type="password" class="form-control" id="confirm-password" aria-describedby="basic-addon4">
                                    <span class="input-group-text" id="toggle-confirm-password"><i class="fa-regular fa-eye-slash"></i></span>
                                </div>
                            </div>
                            <button type="submit">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<script>
    document.getElementById('toggle-new-password').addEventListener('click', function() {
        const passwordField = document.getElementById('new-password');
        const icon = this.querySelector('i');
        if (passwordField.type === 'password') {
            passwordField.type = 'text';
            icon.classList.remove('fa-eye-slash');
            icon.classList.add('fa-eye');
        } else {
            passwordField.type = 'password';
            icon.classList.remove('fa-eye');
            icon.classList.add('fa-eye-slash');
        }
    });

    document.getElementById('toggle-confirm-password').addEventListener('click', function() {
        const passwordField = document.getElementById('confirm-password');
        const icon = this.querySelector('i');
        if (passwordField.type === 'password') {
            passwordField.type = 'text';
            icon.classList.remove('fa-eye');
            icon.classList.add('fa-eye-slash');
        } else {
            passwordField.type = 'password';
            icon.classList.remove('fa-eye-slash');
            icon.classList.add('fa-eye');
        }
    });
</script>



@endsection