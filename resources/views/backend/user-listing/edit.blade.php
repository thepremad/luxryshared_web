@extends('backend.layouts.app')

@section('content')

<style>
    .error {
        color: #a93c3d !important;
        font-weight: 500;
    }

    /* input {
        text-transform: uppercase;
    } */
</style>

<!-- BEGIN: Content-->
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-start mb-0">Edit User</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a>
                                </li>
                                <li class="breadcrumb-item active">edit
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">

            {{-- @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <div class="alert-body">
                            {{$error}}
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endforeach
            @endif --}}

            <!-- Basic multiple Column Form section start -->
            <section id="multiple-column-form">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                {{-- <h4 class="card-title">Create</h4> --}}
                            </div>
                            <div class="card-body">
                                <form class="form" id="frmLogin" action="{{ route('admin.user.store') }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @if ($user->id)
                                     <input type="hidden" name="id" value="{{$user->id}}">
                                    @endif
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="mb-1">
                                                <label class="form-label" for="first-name-column">First Name <span
                                                        class="error"></span></label>
                                                <input type="text" oninput="filterAlphabets(this)" id="first-name-column" value="{{$user->first_name}}" name="first_name"
                                                    class="form-control" placeholder="Name"
                                                    value="{{ old('name') }}" />
                                                    
                                                    <span class="text-danger validation-class" id="first_name-error"></span>
                                                </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="mb-1">
                                                <label class="form-label" for="first-name-column">Last Name <span
                                                        class="error"></span></label>
                                                <input type="text" oninput="filterAlphabets(this)" id="first-name-column" value="{{$user->last_name}}" name="last_name"
                                                    class="form-control" placeholder="Name"
                                                    value="{{ old('name') }}" />
                                                    
                                                    <span class="text-danger validation-class" id="last_name-error"></span>
                                                </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="mb-1">
                                                <label class="form-label" for="first-name-column">Email <span
                                                        class="error"></span></label>
                                                <input type="text" readonly id="first-name-column" value="{{$user->email}}" name="email"
                                                    class="form-control" placeholder="Name"
                                                    value="{{ old('name') }}" />
                                                    
                                                    <span class="text-danger validation-class" id="email-error"></span>
                                                </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="mb-1">
                                                <label class="form-label" for="first-name-column">Number <span
                                                        class="error"></span></label>
                                                <input type="text"  id="first-name-column" value="{{$user->number}}" name="number"
                                                    class="form-control" placeholder="Name"
                                                    value="{{ old('name') }}" />
                                                    
                                                    <span class="text-danger validation-class" id="number-error"></span>
                                                </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="mb-1">
                                                <label class="form-label" for="first-name-column">Id Image <span
                                                        class="error"></span></label>
                                                <input type="file" readonly  id="first-name-column" value="{{$user->id_image}}" name="id_image"
                                                    class="form-control" placeholder="Name"
                                                    value="{{ old('name') }}" />
                                                    <img width="100px" class="mt-1" src="{{url('public/uploads/image/'.$user->id_image)}}" alt="">
                                                </div>
                                        </div>
                                        </div>

                                        

                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary me-1">Submit</button>
                                            <button type="reset" class="btn btn-outline-secondary">Reset</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
        </div>
    </div>
</div>
<!-- END: Content-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

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
                      window.location.href = "{{ route('admin.user.index') }}"; 
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
  function filterAlphabets(inputField) {
      // Remove non-alphabetic characters using a regular expression
      inputField.value = inputField.value.replace(/[^a-zA-Z\s]/g, '');
    }
    </script>

@endsection