@extends('backend.layouts.app')
@section('content')
<style>
    .cards{
    height: 120px;
    background: #5cd95c;
    color: white;
    font-weight: 900;
    text-align: center;
    padding-top: 42px;
    border-radius: 7px;
    margin: 6px 40px
}
</style>
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
                                <div class="col-md-3 cards">Total Register Count <br><span style="font-size:17px">100</span></div>
                                <div class="col-md-3 cards" style="    background: #e78383;">Total Order Request <br><span style="font-size:17px">100</span></div>
                                <div class="col-md-3 cards" style="    background: #bdbf4cd9;">Register request <br><span style="font-size:17px">100</span></div>
                                <!-- <div class="col-md-3 cards">total Lend Count <br><span style="font-size:17px">100</span></div> -->
                                <div class="col-md-3 cards" style="background: #66cdbfd9;">total Rent Count <br><span style="font-size:17px">100</span></div>
                                <div class="col-md-3 cards" style="background: #5c7dd9;">Total Buy  Count <br><span style="font-size:17px">100</span></div>
                                <div class="col-md-3 cards" style="    background: #cc5cd9;">Total Resale Count <br><span style="font-size:17px">100</span></div>
                             
                            </div>
                        </div>
                        <div class="row mt-5">
                        <div class="table-responsive" id="table-responsive">
                                <table class="table mb-0">
                                    <thead class="table-dark">
                                        <tr>
                                            <th scope="col" >#</th>
                                            <th scope="col" >Id</th>
                                            <th scope="col" >Email</th>
                                            <th scope="col" >Number</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="myTable">
                                    @php  $i = 1; @endphp
 
                                        @foreach ($user as $item)
                                            
                                            <tr>
                                                <td>{{$i }}</td>
                                                <td><img src="{{url('public/uploads/image/'.$item->id_image)}}" width="50px" alt=""></td>

                                                <td >
                                                   {{$item->email}}
                                                </td>
                                                
                                                <td>{{ $item->number }}</td>
                                                <td>
                                                    <div class="dropdown">
                                                        <button type="button" class="btn btn-sm dropdown-toggle hide-arrow py-0" data-bs-toggle="dropdown">
                                                            <i data-feather="more-vertical"></i>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href='#' onclick="approveConformation({{$item->id}})">
                                                                <i data-feather="edit-2" class="me-50"></i>
                                                                <span>Approve</span>
                                                            </a>
                                                            <a class="dropdown-item delete-record" onclick="rejectConformation({{$item->id}})" href="#" >
                                                                <i data-feather="trash" class="me-50"></i>
                                                                <span>Disapprove</span>
                                                            </a>
                                                        </div>
                                                    </div>

                                                    
                                                </td>
                                            </tr>
                                            @php
                                                $i++;
                                            @endphp
                                            @endforeach
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    
                </section>
                


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



