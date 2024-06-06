@extends('backend.layouts')

@section('style')

<style>
    .error {
        color: #a93c3d !important;
        font-weight: 500;
    }
</style>

@endsection
@section('content')
<!-- BEGIN: Content-->
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-start mb-0">User</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <section id="multiple-column-form">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                {{-- <h4 class="card-title">Create</h4> --}}
                            </div>
                            <div class="card-body">
                            {{ Form::model($user, ['route' => ['admin.user.update_admin_profile'], 'role' => 'form',
                              'id'=>'frmLogin', 'autocomplete'=>"off", 'method'=>'post','files' => true]) }}
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="mb-1">
                                                      {!! Form::label('first_name', 'First Name') !!}
                                                        {!! Form::text('first_name', null,  ['class' => 'form-control', 'autocomplete'=>"off", 'placeholder' => 'First Name', 'id' =>
                                                          'name','oninput' => 'filterAlphabets(this)']) !!}
                                                    
                                                    <span class="text-danger validation-class" id="first_name-error"></span>
                                                </div>
                                        </div>

                                        <div class="col-md-6 col-12">
                                            <div class="mb-1">
                                                      {!! Form::label('last_name', 'Last Name') !!}
                                                        {!! Form::text('last_name', null,  ['class' => 'form-control', 'autocomplete'=>"off", 'placeholder' => 'Last Name', 'id' =>
                                                          'name','oninput' => 'filterAlphabets(this)']) !!}
                                                    
                                                    <span class="text-danger validation-class" id="last_name-error"></span>
                                                </div>
                                        </div>

                                        <div class="col-md-6 col-12">
                                            <div class="mb-1">
                                                      {!! Form::label('email', 'Email') !!}
                                                        {!! Form::text('email', null,  ['class' => 'form-control', 'readonly', 'autocomplete'=>"off", 'placeholder' => 'Email', 'id' =>
                                                          'name']) !!}
                                                    
                                                    <span class="text-danger validation-class" id="email-error"></span>
                                                </div>
                                        </div>

                                
                                        <div class="col-md-6 col-12">
                                            <div class="mb-1">
                                                     {!! Form::label('profile', 'Profile') !!}
                                                        {!! Form::file('profile', ['class' => 'form-control', 'id' => 'image']) !!}
                                                <span class="text-danger validation-class" id="profile-error"></span>
                                                @if ($user->profile)
                                                <img class="mt-1" src="{{url('public/uploads/profile/'.$user->profile)}}" width="100px" alt="">
                                                
                                                @endif


                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="mb-1">
                                                     {!! Form::label('password', 'Password') !!}
                                                        {!! Form::password('password', ['class' => 'form-control', 'id' => 'image', 'placeholder' => 'Password']) !!}
                                                <span class="text-danger validation-class" id="password-error"></span>


                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary me-1">Submit</button>
                                            <button type="reset" class="btn btn-outline-secondary">Reset</button>
                                        </div>
                                    </div>
                                    {!! Form::close() !!}

                            </div>
                        </div>
                    </div>
                </div>

            </section>
            <!-- Basic Floating Label Form section end -->

        </div>
    </div>
</div>
@endsection

@section('script')

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
                      window.location.href = "{{ route('admin.dashboard') }}"; 
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
