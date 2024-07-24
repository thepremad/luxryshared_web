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
                        <h2 class="content-header-title float-start mb-0">Blog</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a
                                        href="{{ route('admin.blogs.index') }}">Blogs</a>
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
                            {{ Form::model($blogs, ['route' => ['admin.blogs.store'], 'role' => 'form',
                              'id'=>'frmLogin', 'autocomplete'=>"off", 'method'=>'post','files' => true]) }}
                                    @csrf
                                    @if($blogs->id)
                                      {!! Form::hidden('id', $blogs->id) !!}
                                    @endif
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="mb-1">
                                                      {!! Form::label('text', 'Text') !!}
                                                        {!! Form::text('text', null,  ['class' => 'form-control', 'autocomplete'=>"off", 'placeholder' => 'Text', 'id' =>
                                                          'name']) !!}
                                                    
                                                    <span class="text-danger validation-class" id="text-error"></span>
                                                </div>
                                        </div>

                                        <div class="col-md-6 ">
                                        {!! Form::label('category_id', 'Category') !!}
                                        {!! Form::select('category_id', $categories->pluck('name','id'),$blogs->category_id, ['class' => 'form-select
                                         ','id' => 'category_id', 'placeholder' => 'Category']) !!}
                                                    <span class="text-danger validation-class" id="category_id-error"></span>

                                            </div>

                                        <div class="col-md-8 col-12">
                                            <div class="mb-1">
                                            {!! Form::label('description', 'Description') !!}
                                                        {!! Form::textarea('description', null,  ['class' => 'form-control', 'autocomplete'=>"off", 'placeholder' => 'Description', 'id' =>
                                                          'content']) !!}
                                                </div>
                                                <span class="text-danger validation-class" id="description-error"></span>

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
                      window.location.href = "{{ route('admin.blogs.index') }}"; 
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
     <script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>

<script>
ClassicEditor.create( document.querySelector( '#content' ) )
    .catch( error => {
        console.error( error );
    } );
</script>
@endsection
