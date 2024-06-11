@extends('backend.layouts')

@section('style')
<style>
    .error {
        color: #a93c3d !important;
        font-weight: 500;
    }
    .ck.ck-content.ck-editor__editable.ck-rounded-corners.ck-editor__editable_inline.ck-blurred {
height: 200px !important;
}
p {
    height: 200px;
}
</style>
@endsection
<!-- BEGIN: Content-->
@section('content')
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-start mb-0">Product</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a
                                        href="{{ route('admin.products.index') }}">Product</a>
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
                            {{ Form::model($products, ['route' => ['admin.products.store'], 'role' => 'form',
                              'id'=>'frmLogin', 'autocomplete'=>"off", 'method'=>'post','files' => true]) }}
                                    @csrf
                                    @if($products->id)
                                      {!! Form::hidden('id', $products->id) !!}
                                    @endif
                                    <div class="row">
                                    <div class="col-md-6 ">
                                        {!! Form::label('category_id', 'Category') !!}
                                        {!! Form::select('category_id', $category->pluck('name','id'),$products->category_id, ['class' => 'form-select
                                         ','id' => 'category_id']) !!}
                                                    <span class="text-danger validation-class" id="category_id-error"></span>

                                    </div>

                                    <div class="col-md-6 ">
                                        {!! Form::label('sub_category_id', 'Sub Category') !!}
                                        {!! Form::select('sub_category_id', $sub_category->pluck('name','id'),$products->sub_category_id, ['class' => 'form-select
                                         ','id' => 'sub_category_id']) !!}
                                                    <span class="text-danger validation-class" id="sub_category_id-error"></span>

                                    </div>

                                    <div class="col-md-6 ">
                                        {!! Form::label('brand_id', 'Brand') !!}
                                        {!! Form::select('brand_id', $brand->pluck('name','id'),$products->brand_id, ['class' => 'form-select
                                         ','id' => 'brand_id']) !!}
                                                    <span class="text-danger validation-class" id="brand_id-error"></span>

                                    </div>

                                    <div class="col-md-6 ">
                                        {!! Form::label('color_id', 'Color') !!}
                                        {!! Form::select('color_id', $color->pluck('name','id'),$products->color_id, ['class' => 'form-select
                                         ','id' => 'color_id']) !!}
                                                    <span class="text-danger validation-class" id="color_id-error"></span>

                                    </div>

                                    <div class="col-md-6 ">
                                        {!! Form::label('size_id', 'Size') !!}
                                        {!! Form::select('size_id', $size->pluck('name','id'),$products->size_id, ['class' => 'form-select
                                         ','id' => 'size_id']) !!}
                                                    <span class="text-danger validation-class" id="size_id-error"></span>

                                    </div>

                                    <div class="col-md-6 col-12">
                                            <div class="mb-1">
                                                      {!! Form::label('item_title', 'Title') !!}
                                                        {!! Form::text('item_title', null,  ['class' => 'form-control', 'autocomplete'=>"off", 'placeholder' => 'Title', 'id' =>
                                                          'name','oninput' => 'filterAlphabets(this)']) !!}
                                                    
                                                    <span class="text-danger validation-class" id="item_title-error"></span>
                                                </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                            <div class="mb-1">
                                                     {!! Form::label('mainImag', 'Main Image') !!}
                                                        {!! Form::file('mainImag', ['class' => 'form-control', 'id' => 'Main Image']) !!}
                                                <span class="text-danger validation-class" id="mainImag-error"></span>
                                                @if($products)
                                                <img width="100px" class="mt-1" src="{{url('public/uploads/item/'.$products->mainImag)}}" alt="">
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="mb-1">
                                                     {!! Form::label('image', 'Image') !!}
                                                        {!! Form::file('image[]', ['class' => 'form-control', 'multiple','id' => 'image']) !!}
                                                <span class="text-danger validation-class" id="image-error"></span>
                                                <div class=""></div>
                                                @if($products)
                                                <div style="display:absolute">
                                                @foreach ($item_images as $key => $val )
                                                <img width="100px" class="mt-1" src="{{url('public/uploads/item/'.$val->image)}}" alt="">
                                                <i style="    position: relative;top: -31px;" onclick="removeImage({{$val->id}})" class="fa-solid fa-xmark"></i>
                                                @endforeach
                                                </div>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-md-12 col-12">
                                          div class="mb-1">
                                                      {!! Form::label('image_description', 'Description') !!}

                                                      {!! Form::textarea('image_description', null,  ['class' => 'form-control', 'autocomplete'=>"off", 'placeholder' => 'Buy Price', 'id' =>
                                                       'content']) !!}
                                                    <span class="text-danger validation-class" id="image_description-error"></span>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-8 col-12">
                                            <div class="mb-1">
                                                      {!! Form::label('buy_price', 'Buy Price') !!}
                                                        {!! Form::text('buy_price', null,  ['class' => 'form-control', 'autocomplete'=>"off", 'placeholder' => 'Buy Price', 'id' =>
                                                       'buy_price']) !!}
                                                    
                                                    <span class="text-danger validation-class" id="buy_price-error"></span>
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
                      window.location.href = "{{ route('admin.products.index') }}"; 
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

    function removeImage(id){
        if (confirm('Are you sure you want to remove image ?')) {
                $.ajax({
                    url: "{{ url('admin/remove-image') }}/" + id, // Use the url() function
                    type: 'GET',
                    success: function (res) {
                        if (res.status === 200) {
                            window.location.reload();
                        }
                    },
                    error: function (xhr) {
                        toastr.error('Oops... Something went wrong. Please try again.');
                    }
                });
            }
    }
</script>

@endsection