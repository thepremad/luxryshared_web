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
                            <h2 class="content-header-title float-start mb-0">Country</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{  route('admin.dashboard') }}">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="{{ route('admin.countries.index') }}">countries</a>
                                    </li>
                                    <li class="breadcrumb-item active">List
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3" style="text-align: end">
                    <a href="{{ route('admin.countries.create') }}" class=" btn btn-primary btn-gradient round">Create</a>
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
                                    <input type="text" id="searchInput" onkeyup="myFunction()" class="form-control" placeholder="Search">
                                </div>
                            </div>
                            <div class="table-responsive" id="table-responsive">
                                <table class="table mb-0">
                                    <thead class="table-dark">
                                        <tr>
                                            <th scope="col" >#</th>
                                            <th scope="col" >Name</th>
                                            <th scope="col" >Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="myTable">
                                    @php  $i = 1; @endphp
 
                                        @foreach ($countries as $item)
                                            
                                            <tr>
                                                <td>{{$i }}</td>
                                                <td>{{ $item->name }}</td>

                                                <td >
                                                @if($item->status == '1') 
                                                    <span style="color:green">Active</span> 
                                                @else 
                                                    <span style="color:red">Inactive</span> 
                                                @endif
                                                </td>
                                                <td>
                                                    <div class="dropdown">
                                                        <button type="button" class="btn btn-sm dropdown-toggle hide-arrow py-0" data-bs-toggle="dropdown">
                                                            <i data-feather="more-vertical"></i>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="{{route('admin.countries.edit',$item->id)}}">
                                                                <i data-feather="edit-2" class="me-50"></i>
                                                                <span>Edit</span>
                                                            </a>
                                                            <a class="dropdown-item delete-record" data-id="{{$item->id}}" href="#" >
                                                                <i data-feather="trash" class="me-50"></i>
                                                                <span>Delete</span>
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
                            @include('backend._pagination', ['data' => $countries])
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

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).on('click', '.delete-record', function () {
            var associateId =  $(this).data('id');            
            if (confirm('Are you sure you want to delete this countries ?')) {
                $.ajax({
                    url: "{{ url('admin/countries') }}/" + associateId, // Use the url() function
                    type: 'DELETE',
                    data: {
                        '_token': '{{ csrf_token() }}', // You may need to pass CSRF token
                    },
                    success: function (res) {
                        if (res.status === 200) {
                            toastr.success(res.message);
                            window.location.href =
                                "{{ route('admin.countries.index') }}";
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
                url: "{{ route('admin.countries.index') }}",
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