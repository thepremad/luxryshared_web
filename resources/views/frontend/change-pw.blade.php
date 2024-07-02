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
                        <form action="" id="forgetPassword" >
                            <div class="mb-3">
                                <label for="new-password" class="form-label">Create New Password</label>
                                <div class="input-group">
                                    <input type="password" name="password" class="form-control" id="new-password" aria-describedby="basic-addon3">
                                    <span class="input-group-text" id="toggle-new-password"><i class="fa-regular fa-eye-slash"></i></span>
                                </div>
                            <span class="text-danger validation-class" id="password-error"></span>

                            </div>
                            <input type="hidden" name="user_id" id="userID" value="{{$id}}">
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
<script>
    $(document).ready(function () {
        $('#forgetPassword').on('submit', function (e) {
            e.preventDefault();
            var $form = $(this);
            var url = "{{ url('api/create_password') }}";
            var formData = new FormData($form[0]);
            $('.validation-class').html('');
            let newPass = $('#new-password').val();
            let confPass = $('#confirm-password').val();
             if (newPass == confPass) {
                
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
                    window.location.href = "{{url('pwchanged-succ')}}";
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
                        toastr.error(xhr.message);
                        $('#error').show().html(xhr.message);
                    }
                }
            });
        }else{
            toastr.error('Password and conform password not match');

        }

        });
    });
</script>


@endsection