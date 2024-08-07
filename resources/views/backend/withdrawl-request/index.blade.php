
@extends('backend.layouts')

@section('style')

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
    @endsection
@section('content')
<div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-start mb-0">Withdrawl Request</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{  route('admin.dashboard') }}">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active">List
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">


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
                                            <th scope="col" >Name</th>
                                            <th scope="col" >Country</th>
                                            <th scope="col" >Price</th>
                                            <th scope="col" >Number</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="myTable">
                                    @php  $i = 1; @endphp
 
                                        @foreach ($items as $item)
                                            
                                            <tr>
                                                <td>{{$i }}</td>
                                                <td>{{$item->first_name ?? ''}} {{$item->last_name ?? ''}}</td>
                                                <td >{{$item->country}}</td>
                                                <td >{{$item->product_price}}</td>
                                                <td >{{$item->mobile_number}}</td>
                                                <td>
                                                    @if ($item->withdrawl_request == 1)
                                                    <div class="dropdown">
                                                        <button type="button" class="btn btn-sm dropdown-toggle hide-arrow py-0" data-bs-toggle="dropdown">
                                                            <i data-feather="more-vertical"></i>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item approve-request" data-id="{{$item->id}}" href="#">
                                                                <i data-feather="edit-2" class="me-50"></i>
                                                                <span>Approve</span>
                                                            </a>
                                                           
                                                        </div>
                                                    </div>@elseif($item->withdrawl_request == 2)
                                                    <p style="color:green">Paid</p>
                                                    @endif

                                                    
                                                </td>
                                            </tr>
                                            @php
                                                $i++;
                                            @endphp
                                            @endforeach
                                        
                                    </tbody>
                                </table>
                            @include('backend._pagination', ['data' => $items])
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Responsive tables end -->
                </section>

                <!--/ Ajax Sourced Server-side -->
            </div>
        </div>

    </div>
@endsection

@section('script')

<script>
  
    $(document).on('click', '.approve-request', function () {
            var associateId =  $(this).data('id');            
            if (confirm('Are you sure you want to approve withdrawl ?')) {
                $.ajax({
                    url: "{{ url('admin/withdrawl-approve') }}/" + associateId, // Use the url() function
                    type: 'GET',
                    data: {
                        '_token': '{{ csrf_token() }}', // You may need to pass CSRF token
                    },
                    success: function (res) {
                        if (res.status === 200) {
                            toastr.success(res.message);
                            window.location.reload();
                        }
                    },
                    error: function (xhr) {
                        toastr.error('Oops... Something went wrong. Please try again.');
                    }
                });
            }
        });
</script>
<script>
    $(document).ready(function () {
        $('#searchInput').on('input', function () {
            fetch_data($(this).val());
        });
        function fetch_data(query = '') {
            $.ajax({
                url: "{{ route('admin.categories.index') }}",
                method: 'GET',
                data: { search: query },
                dataType: 'html',
                success: function (data) {
                    $('#table-responsive').html(data);
                }
            });
        }
    });
</script>
@endsection