@extends('backend.layouts')
@section('content')

    <div class="app-content content ecommerce-application">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-start mb-0">Product Details</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{  route('admin.dashboard') }}">Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="{{  route('admin.products.index') }}">products</a>
                                    </li>
                                    <li class="breadcrumb-item active">Details
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
                    <div class="mb-1 breadcrumb-right">
                        <div class="dropdown">
                            <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="grid"></i></button>
                            <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="app-todo.html"><i class="me-1" data-feather="check-square"></i><span class="align-middle">Todo</span></a><a class="dropdown-item" href="app-chat.html"><i class="me-1" data-feather="message-square"></i><span class="align-middle">Chat</span></a><a class="dropdown-item" href="app-email.html"><i class="me-1" data-feather="mail"></i><span class="align-middle">Email</span></a><a class="dropdown-item" href="app-calendar.html"><i class="me-1" data-feather="calendar"></i><span class="align-middle">Calendar</span></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- app e-commerce details start -->
                <section class="app-ecommerce-details">
                    <div class="card">
                        <!-- Product Details starts -->
                        <div class="card-body">
                            <div class="row my-2">
                                <div class="col-12 col-md-5 d-flex align-items-center justify-content-center  mb-md-0">
                                    <div  class="d-flex align-items-center justify-content-center">
                                        <img  id="display-div" src="{{url('public/uploads/item/'.$item->mainImag)}}" class="img-fluid product-img" alt="product image" />
                                    </div>
                                </div>
                                <div class="col-12 col-md-7">
                                    <h4>{{$item->item_title}}</h4>
                                    <span class="card-text item-company">By <a href="#" class="company-name">{{$item->brand->name  ?? ''}}</a></span>
                                    <div class="ecommerce-details-price d-flex flex-wrap mt-1">
                                        <h4 class="item-price me-1">{{$item->rrp_price}}</h4>
                                        <ul class="unstyled-list list-inline ps-1 border-start">
                                            <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                            <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                            <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                            <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                                            <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                                        </ul>
                                    </div>
                                    <p class="card-text">Category - <span class="text-success">{{$item->category->name}}</span></p>
                                    <p class="card-text">
                                        {!! asset($item->image_description) ? $item->image_description : '' !!}
                                    </p>
                                    <ul class="product-features list-unstyled">
                                        <li><i class="fa-solid fa-money-bill-wave"></i> <span>4-6 Day Price : {{$item->fourDaysPrice}} Dirham</span></li>
                                        <li><i class="fa-solid fa-money-bill-wave"></i> <span>7-29 Day Price : {{$item->sevenToTwentyNineDayPrice}} Dirham</span></li>
                                        <li><i class="fa-solid fa-money-bill-wave"></i> <span>30+ Day Price : {{$item->thirtyPlusDayPrice}} Dirham</span></li>
                                      
                                    </ul>
                                    <hr />
                                    <div class="product-color-options">
                                        <h6>Colors</h6>
                                        <ul class="list-unstyled mb-0">
                                            <li class="d-inline-block selected">
                                                <div class="color-option b-primary d-flex">
                                                   <div style="padding: 9px 34px;    font-weight: 900;;border-radius: 3px;background:{{$item->color->code ?? ''}}"><span style="color:white">{{$item->color->name ?? ''}}</span></div> 
                                                </div>
                                            </li>
                                            
                                        </ul>
                                    </div>
                                    <hr />
                                    <div class="product-color-options">
                                        <h6>Size</h6>
                                        <ul class="list-unstyled mb-0">
                                            <li class="d-inline-block selected">
                                                <div class="color-option b-primary">
                                                   <div style="border: 1px solid black;padding: 9px 21px;border-radius: 3px">{{$item->size->name ?? ''}} </div>
                                                </div>
                                            </li>
                                            
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    @foreach ($item->itemImage as $val)
                                    <span  class="image-container"><img style=" margin:4px;border: 2px solid black;border-radius: 5px;padding: 6px;" onclick="displayImage(this)" src="{{url('public/uploads/item/'.$val->image)}}" width='85px' alt=""></span>
                                    @endforeach
                                </div>
                            </div>
                        </div>
    
                    </div>
                </section>
                <!-- app e-commerce details end -->

            </div>
        </div>
    </div>
    @endsection


  
    @section('script')

    <!-- END: Page JS-->

    <script>
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })
    </script>
    <script>
    function displayImage(imgElement) {
        var displayDiv = document.getElementById('display-div');
        displayDiv.innerHTML = '';
        displayDiv.src = imgElement.src;
    }
</script>
@endsection