
@extends('backend.layouts.app')

@section('content')

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
<div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-start mb-0">Users</h2>
                            <div class="breadcrumb-wrapper">
                                <!-- <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{  route('admin.dashboard') }}">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="{{ route('admin.categories.index') }}">Categories</a>
                                    </li>
                                    <li class="breadcrumb-item active">List
                                    </li>
                                </ol> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3" style="text-align: end">
                </div>
            </div>
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

                    <div class="col-12">
                        <div class="card card-company-table">
                            <div class="card-header">
                                <h4 class="card-title"></h4>
                                <div class="col-md-3" style="text-align: end">
                                    <input type="text" id="searchInput" onkeyup="myFunction()"  class="form-control" placeholder="Search">
                                </div>
                            </div>
                            <div class="table-responsive" id="table-responsive">
                                <table class="table mb-0">
                                    <thead class="table-dark">
                                        <tr>
                                            <th scope="col" >#</th>
                                            <th scope="col" >Id</th>
                                            <th scope="col" >Name</th>
                                            <th scope="col" >email</th>
                                            <th>number</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="myTable">
                                    @php  $i = 1; @endphp
 
                                        @foreach ($user as $item)
                                            <tr>
                                                <td>{{$i }}</td>
                                                <td>
                                                <img src="{{ url('public/uploads/image/'.$item->id_image)}}" alt="Toolbar svg" width="50px" />
                                                   
                                                </td>
                                                <td><a href="{{route('admin.user.profile',$item->id)}}">{{ $item->first_name }} {{ $item->last_name }}</a></td>


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
                            @include('backend._pagination', ['data' => $user])

                            {{-- <div class="table-responsive">
                                <tbody>
                                    <!-- ... (your table structure) ... -->
                                </tbody>
                                {{ $categories->links('admin._pagination') }}
                            </div> --}}

                        </div>
                    </div>
                </div>

                <!-- Responsive tables end -->
                </section>

                <!--/ Ajax Sourced Server-side -->
            </div>
        </div>

    </div>

    <!-- END: Content-->
    <!-- END: Content-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

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
<script>
        function myFunction() {
            var input, filter, found, table, tr, td, i, j;
            input = document.getElementById("searchInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td");
                for (j = 0; j < td.length; j++) {
                    if (td[j].innerHTML.toUpperCase().indexOf(filter) > -1) {
                        found = true;
                    }
                }
                if (found) {
                    tr[i].style.display = "";
                    found = false;  
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    </script>

@endsection