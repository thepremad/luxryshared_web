@extends('index')

@section('content')

<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-start mb-0">Profile</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{route('admin.user.index')}}">Users</a>
                                </li>
                                <li class="breadcrumb-item active">Profile
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
          
        </div>
        <div class="content-body">
            <div id="user-profile">
                <!-- profile header -->
                <div class="row">
                    <div class="col-12">
                        <div class="card profile-header mb-2">
                            <!-- profile cover photo -->
                            <img class="card-img-top" src="{{url('public/backend/images/profile/user-uploads/timeline.jpg')}}"
                                alt="User Profile Image" />
                            <!--/ profile cover photo -->

                            <div class="position-relative">
                                <!-- profile picture -->
                                <div class="profile-img-container d-flex align-items-center">
                                    <div class="profile-img">
                                        <img src="{{url('public/uploads/image/'.$user->id_image)}}"
                                            class="rounded img-fluid" alt="Card image" />
                                    </div>
                                    <!-- profile title -->
                                    <div class="profile-title ms-3">
                                        <h2 class="text-white">{{$user->first_name ?? ''}} {{$user->last_name ?? ''}}</h2>
                                        <p class="text-white">Credit Balance : 0</p>
                                    </div>
                                </div>
                            </div>

                            <!-- tabs pill -->
                            <div class="profile-header-nav">
                                <!-- navbar -->
                                <nav
                                    class="navbar navbar-expand-md navbar-light justify-content-end justify-content-md-between w-100">
                                    <button class="btn btn-icon navbar-toggler" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                        aria-expanded="false" aria-label="Toggle navigation">
                                        <i data-feather="align-justify" class="font-medium-5"></i>
                                    </button>

                                    <!-- collapse  -->
                                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                        <div class="profile-tabs d-flex justify-content-between flex-wrap mt-1 mt-md-0">
                                            <ul class="nav nav-pills mb-0">
                                                <li class="nav-item">
                                                    <a class=" btn btn-primary active" href="#">
                                                        <span class="d-none d-md-block">User Profile</span>
                                                        <i data-feather="rss" class="d-block d-md-none"></i>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link fw-bold" href="#">
                                                        <span class="d-none d-md-block">Rental Listing</span>
                                                        <i data-feather="info" class="d-block d-md-none"></i>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link fw-bold" href="#">
                                                        <span class="d-none d-md-block">Lending Listing</span>
                                                        <i data-feather="image" class="d-block d-md-none"></i>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link fw-bold" href="#">
                                                        <span class="d-none d-md-block">Buy Listing</span>
                                                        <i data-feather="users" class="d-block d-md-none"></i>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link fw-bold" href="#">
                                                        <span class="d-none d-md-block">Resale Listing</span>
                                                        <i data-feather="users" class="d-block d-md-none"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </nav>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="card">
                                    <div class="card-header border-bottom">
                                        <h4 class="card-title">Personal Details</h4>
                                    </div>
                                    <div class="card-body pt-2">

                                        <!-- Connections -->
                                        <div class="d-flex mt-2">
                                            <div class="flex-shrink-0">
                                                <img src="{{url('public/backend/images/icons/social/gmail.png')}}" alt="google" class="me-1" height="38" width="38" />
                                            </div>
                                            <div class="d-flex align-item-center justify-content-between flex-grow-1">
                                                <div class="me-1">
                                                    <p class="fw-bolder mb-0">Email</p>
                                                    <span>{{$user->email ?? ''}}</span>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <div class="d-flex mt-2">
                                            <div class="flex-shrink-0">
                                                <img src="{{url('public/backend/images/icons/social/telephone.png')}}" alt="slack" class="me-1" height="38" width="38" />
                                            </div>
                                            <div class="d-flex align-item-center justify-content-between flex-grow-1">
                                                <div class="me-1">
                                                    <p class="fw-bolder mb-0">Number</p>
                                                    <span>{{$user->number ?? ''}}</span>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <div class="d-flex mt-2">
                                            <div class="flex-shrink-0">
                                                <img src="{{url('public/backend/images/icons/social/map.png')}}" alt="github" class="me-1" height="38" width="38" />
                                            </div>
                                            <div class="d-flex align-item-center justify-content-between flex-grow-1">
                                                <div class="me-1">
                                                    <p class="fw-bolder mb-0">Address</p>
                                                    <span>{{$user->address ?? ''}}</span>
                                                </div>
                                              
                                            </div>
                                        </div>
                                        <div class="d-flex mt-2">
                                            <div class="flex-shrink-0">
                                                <img src="{{url('public/backend/images/icons/social/clipboard.png')}}" alt="mailchimp" class="me-1" height="38" width="38" />
                                            </div>
                                            <div class="d-flex align-item-center justify-content-between flex-grow-1">
                                                <div class="me-1">
                                                    <p class="fw-bolder mb-0">Status</p>
                                                    <span>Approved <img src="{{url('public/backend/images/icons/social/check-mark.png')}}" width="20px" alt=""></span>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <div class="d-flex mt-2">
                                            <div class="flex-shrink-0">
                                                <img src="{{url('public/backend/images/icons/social/user.png')}}" alt="asana" class="me-1" height="38" width="38" />
                                            </div>
                                            <div class="d-flex align-item-center justify-content-between flex-grow-1">
                                                <div class="me-1">
                                                    <p class="fw-bolder mb-0">Name</p>
                                                    <span>{{$user->first_name ?? ''}} {{$user->last_name ?? ''}}</span>
                                                </div>
                                              
                                            </div>
                                        </div>
                                        <!-- /Connections -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="card">
                                    <div class="card-header border-bottom">
                                        <h4 class="card-title">Social accounts</h4>
                                    </div>
                                    <div class="card-body pt-2">
                                        <p>Display content from social accounts on your site</p>
                                        <!-- Social Accounts -->
                                        <div class="d-flex mt-2">
                                            <div class="flex-shrink-0">
                                                <img src="{{url('public/backend/images/icons/social/facebook.png')}}" alt="facebook" class="me-1" height="38" width="38" />
                                            </div>
                                            <div class="d-flex justify-content-between flex-grow-1">
                                                <div class="me-1">
                                                    <p class="fw-bolder mb-0">Facebook</p>
                                                    <span>@if ($user->facebook) {{$user->facebook}} @else Not Connected  @endif </span>
                                                </div>
                                                <div class="mt-50 mt-sm-0">
                                                    <button type="button" class="btn btn-icon btn-outline-secondary">
                                                        <i data-feather="link" class="font-medium-3"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-start mt-2">
                                            <div class="flex-shrink-0">
                                                <img src="{{url('public/backend/images/icons/social/twitter.png')}}" alt="twitter" class="me-1" height="38" width="38" />
                                            </div>
                                            <div class="d-flex justify-content-between flex-grow-1">
                                                <div class="me-1">
                                                    <p class="fw-bolder mb-0">Twitter</p>
                                                    <a href="https://twitter.com/pixinvent" target="_blank"><span>@if ($user->twitter) {{$user->twitter}} @else Not Connected  @endif </span></a>
                                                </div>
                                                <div class="mt-50 mt-sm-0">
                                                    <button type="button" class="btn btn-icon btn-outline-secondary">
                                                        <i data-feather="x" class="font-medium-3"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex mt-2">
                                            <div class="flex-shrink-0">
                                                <img src="{{url('public/backend/images/icons/social/linkedin.png')}}" alt="instagram" class="me-1" height="38" width="38" />
                                            </div>
                                            <div class="d-flex justify-content-between flex-grow-1">
                                                <div class="me-1">
                                                    <p class="fw-bolder mb-0">Linkedin</p>
                                                    <a href="https://www.linkedin.com/company/pixinvent" target="_blank">                                                    <span>@if ($user->facebook) {{$user->facebook}} @else Not Connected  @endif </span></a>
                                                </div>
                                                <div class="mt-50 mt-sm-0">
                                                    <button type="button" class="btn btn-icon btn-outline-secondary">
                                                        <i data-feather="x" class="font-medium-3"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex mt-2">
                                            <div class="flex-shrink-0">
                                                <img src="{{url('public/backend/images/icons/social/instagram.png')}}" alt="dribbble" class="me-1" height="38" width="38" />
                                            </div>
                                            <div class="d-flex justify-content-between flex-grow-1">
                                                <div class="me-1">
                                                    <p class="fw-bolder mb-0">Instagram</p>
                                                    <span><span>@if ($user->instagram) {{$user->instagram}} @else Not Connected  @endif </span></span>
                                                </div>
                                                <div class="mt-50 mt-sm-0">
                                                    <button type="button" class="btn btn-icon btn-outline-secondary">
                                                        <i data-feather="link" class="font-medium-3"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex mt-2">
                                            <div class="flex-shrink-0">
                                                <img src="{{url('public/backend/images/icons/social/TikTok.png')}}" alt="behance" class="me-1" height="38" width="38" />
                                            </div>
                                            <div class="d-flex justify-content-between flex-grow-1">
                                                <div class="me-1">
                                                    <p class="fw-bolder mb-0">TikTok</p>
                                                    <span>@if ($user->tiktok) {{$user->tiktok}} @else Not Connected  @endif </span>

                                                </div>
                                                <div class="mt-50 mt-sm-0">
                                                    <button type="button" class="btn btn-icon btn-outline-secondary">
                                                        <i data-feather="link" class="font-medium-3"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /Social Accounts -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ profile header -->

                <!-- profile info section -->
                <section id="profile-info">
                    <div class="row">
                      
                    </div>

@endsection
@section('script')



                    <script src=" {{url('public/backend/js/scripts/pages/page-profile.js')}}">
                    </script>
                    <!-- END: Page JS-->

                    <script>
                        $(window).on('load', function () {
                            if (feather) {
                                feather.replace({
                                    width: 14,
                                    height: 14
                                });
                            }
                        })
                    </script>
                    @endsection