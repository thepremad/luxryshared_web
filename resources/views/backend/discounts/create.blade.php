@extends('backend.layouts')

@section('style')

<style>
    .error {
        color: #a93c3d !important;
        font-weight: 500;
    }
</style>
@php
$offer = config('constants.OFFER');
@endphp

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
                        <h2 class="content-header-title float-start mb-0">Discount</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a
                                        href="{{ route('admin.discounts.index') }}">Discounts</a>
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
                            {{ Form::model($discounts, ['route' => ['admin.discounts.store'], 'role' => 'form',
                              'id'=>'frmLogin', 'autocomplete'=>"off", 'method'=>'post','files' => true]) }}
                                    @csrf
                                    @if($discounts->id)
                                      {!! Form::hidden('id', $discounts->id) !!}
                                    @endif
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="mb-1">
                                                      {!! Form::label('text', 'Code') !!}
                                                        {!! Form::text('code', null,  ['class' => 'form-control', 'autocomplete'=>"off", 'placeholder' => 'Code', 'id' =>
                                                          'name']) !!}
                                                    
                                                    <span class="text-danger validation-class" id="code-error"></span>
                                                </div>
                                        </div>
                                        <div class="col-md-6 ">
                                              {!! Form::label('date', 'Expire Date') !!}
                                              {!! Form::date('exp_date', null, ['class' => 'form-select
                                              ', 'placeholder' => 'Offer']) !!}
                                                    <span class="text-danger validation-class" id="exp_date-error"></span>

                                        </div>
                                        <div class="col-md-6 ">
                                              {!! Form::label('category_id', 'Offer') !!}
                                              {!! Form::select('offer_type', $offer,null, ['class' => 'form-select
                                              ','id' => 'offer_type']) !!}
                                                    <span class="text-danger validation-class" id="category_id-error"></span>

                                        </div>
                                        <div class="col-md-6 ">
                                              {!! Form::label('category_id', 'Categoy ') !!}
                                              {!! Form::select('category_id', $category->pluck('name','id'),null, ['class' => 'form-select 
                                              ','id' => 'category_id']) !!}
                                                    <span class="text-danger validation-class" id="category_id-error"></span>

                                        </div>
                                        <div class="col-md-6 col-12 d-none" id="inPer">
                                            <div class="mb-1">
                                                      {!! Form::label('text', 'In Percent') !!}
                                                        {!! Form::text('in_per', null,  ['class' => 'form-control', 'autocomplete'=>"off", 'placeholder' => 'In Percent', 'id' =>
                                                          'name']) !!}
                                                    
                                                    <span class="text-danger validation-class" id="in_per-error"></span>
                                                </div>
                                        </div>
                                      
                                        <div class="col-md-6 col-12 d-none" id="fix_amountt">
                                            <div class="mb-1">
                                                      {!! Form::label('fix_amount', 'Fix Amount') !!}
                                                        {!! Form::number('fix_amount', null,  ['class' => 'form-control', 'autocomplete'=>"off", 'placeholder' => 'Fix Amount', 'id' =>
                                                          'name']) !!}
                                                    
                                                    <span class="text-danger validation-class" id="fix_amount-error"></span>
                                                </div>
                                        </div>
                                        <div class="col-6">
                                            <label class="form-label" for="default-select-multi">Product</label>
                                            <div class="mb-1">
                                                <select class="select2 form-select" name="product_id[]" multiple="multiple" id="products_data">
                                                   
                                                </select>
                                            </div>
                                            <span class="text-danger validation-class" id="product_id-error"></span>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="mb-1">
                                                      {!! Form::label('limit', 'Limit') !!}
                                                        {!! Form::number('limit', null,  ['class' => 'form-control', 'autocomplete'=>"off", 'placeholder' => 'Code', 'id' =>
                                                          'name']) !!}
                                                    
                                                    <span class="text-danger validation-class" id="limit-error"></span>
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
            <meta name="csrf-token" content="{{ csrf_token() }}">
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
                      window.location.href = "{{ route('admin.discounts.index') }}"; 
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

<script>
$('#offer_type').on('change', function() {
    var selectedValue = $(this).val();
    if (selectedValue == 1) {
        $('#fix_amountt').removeClass('d-none');
        $('#inPer').addClass('d-none');
    } else if (selectedValue == 2) {
        $('#inPer').removeClass('d-none');
        $('#fix_amountt').addClass('d-none');
    }
});
$('#category_id').on('change', function() {
    var selectedValue = $(this).val();
    var csrfToken = $('meta[name="csrf-token"]').attr('content');
    $.ajax({
            url: '{{ route('admin.disounts.get_product') }}',
            method: 'POST',
            data: { id: selectedValue },
            headers: {
                'X-CSRF-TOKEN': csrfToken
            },
            success: function (response) {
                $('#products_data').empty();
                response.data.forEach(function (item) {
                    console.log(item);
                    var newRow = '<option value="' + item.id + '">' + item.item_title + '</option>';
                    $('#products_data').append(newRow);
                });
            },

            error: function (error) {
                console.error(error);
            }
        });
});
</script>
@endsection
