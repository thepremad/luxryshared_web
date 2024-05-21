@extends('backend.layouts.app')
@section('content')

<div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- Dashboard Ecommerce Starts -->
                <section id="dashboard-ecommerce">
                    <div class="row match-height">
                        <!-- Statistics Card -->
                        <div class="col-xl-8 col-md-6 col-12">
                            <div class="card card-statistics">
                                
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ Statistics Card -->
                    </div>
                    
                </section>
                <!-- Dashboard Ecommerce ends -->
                


<style>
    .Active{
        color: green;
        font-weight: 900;
    }
    .Inactive{
        color: red;
        font-weight: 900;
    }
</style>

 <!-- BEGIN: Content-->
<!-- BEGIN: Content-->

            
            <div class="content-body">

                @if ($errors->any())
                @foreach ($errors->all() as $error)
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <div class="alert-body">
                                            {{$error}}
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endforeach
            @endif


                <!-- Ajax Sourced Server-side -->
                <section id="ajax-datatable">
                     <!-- Responsive tables start -->
                <div class="row" >

                    
                </div>

                <!-- Responsive tables end -->
                
    

    

    <!-- END: Content-->
    <!-- END: Content-->

            </div>
        </div>
    </div>
    <script>
  function approveConformation(id) {
    let con = confirm('Are you sure you want to approve the request?');
    if (con) {
       location.href = "approve-request/" + id; // Concatenating id into the URL
    }
}
function rejectConformation(id) {
    let con = confirm('Are you sure you want to reject the request?');
    if (con) {
       location.href = "reject-request/" + id; // Concatenating id into the URL
    }
}

    </script>
@endsection



