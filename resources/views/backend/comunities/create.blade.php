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
                        <h2 class="content-header-title float-start mb-0">Community</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a
                                        href="{{ route('admin.comunities.index') }}">communities</a>
                                </li>
                                <li class="breadcrumb-item active">Create
                                </li>
                            </ol>
                        </div>
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
                            {{ Form::model($comunities, ['route' => ['admin.comunities.store'], 'role' => 'form',
                              'id'=>'frmLogin', 'autocomplete'=>"off", 'method'=>'post','files' => true]) }}
                                    @csrf
                                    @if($comunities->id)
                                      {!! Form::hidden('id', $comunities->id) !!}
                                    @endif
                                    <div class="row">
                                        <div class="col-md-8 col-12">
                                            <div class="mb-1">
                                                      {!! Form::label('text', 'Text') !!}
                                                        {!! Form::text('text', null,  ['class' => 'form-control', 'autocomplete'=>"off", 'placeholder' => 'Text', 'id' =>
                                                          'name']) !!}
                                                    
                                                    <span class="text-danger validation-class" id="text-error"></span>
                                                </div>
                                        </div>

                                        <div class="col-md-4 col-12">
                                            <div class="mb-1">
                                                <div class="d-flex flex-column">
                                                    <label class="form-check-label mb-50"
                                                     for="customSwitch3">Status</label>
                                                    <div class="form-check form-check-primary form-switch">
                                                    {!! Form::checkbox('status', '1', $comunities->status == '1', ['class' => 'form-check-input', 'id' => 'customSwitch3']) !!}
                                                        </div>
                                                        <span class="text-danger validation-class"
                                                            id="status-error"></span>
                                                </div>
                                            </div>
                                        </div>      <div class="col-md-6 col-12">
                                            <div class="mb-1">
                                                     {!! Form::label('image', 'Image') !!}
                                                        {!! Form::file('image[]', ['class' => 'form-control', 'id' => 'image','multiple']) !!}
                                                <span class="text-danger validation-class" id="image-error"></span>
                                                @if($comunities)
                                                <img width="100px" class="mt-1" src="{{url('public/uploads/comunities/'.$comunities->image)}}" alt="">
                                                @endif
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
                      window.location.href = "{{ route('admin.comunities.index') }}"; 
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
