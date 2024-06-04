
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
    #imgset{
    width: 77px !important;
    height: 77px !important;
}
</style>
@endsection

<!-- BEGIN: Content-->
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
                            <h2 class="content-header-title float-start mb-0">Users</h2>
                            <div class="breadcrumb-wrapper">
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
                                                <img  id="imgset" src="{{ url('public/uploads/image/'.$item->id_image)}}" alt="Toolbar svg" width="50px" />
                                                </td>
                                                <td><a href="{{route('admin.user.show',$item->id)}}">{{ $item->first_name }} {{ $item->last_name }}</a></td>
                                                <td >{{$item->email}}</td>
                                                <td>{{ $item->number }}</td>
                                                <td>
                                                    <div class="dropdown">
                                                        <button type="button" class="btn btn-sm dropdown-toggle hide-arrow py-0" data-bs-toggle="dropdown">
                                                            <i data-feather="more-vertical"></i>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href='{{route('admin.user.edit',$item->id)}}'>
                                                                <i data-feather="edit-2" class="me-50"></i>
                                                                <span>Edit</span>
                                                            </a>
                                                            <a class="dropdown-item delete-record" data-id="{{$item->id}}"  href="#" >
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
                            </div>
                            @include('backend._pagination', ['data' => $user])
                    </div>
                </div>
                </section>
            </div>
        </div>

    </div>
@endsection
@section('script')
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
        var csrfToken = document.head.querySelector('meta[name="csrf-token"]').content;

        var input = document.getElementById("searchInput");
        $.ajax({
            url: '{{route('admin.user.serach')}}', // Replace with your server endpoint
            method: 'POST', // You can use 'GET' or 'POST' based on your server-side handling
            data: { val: input.value },
            headers: {
                'X-CSRF-TOKEN': csrfToken
            },
            success: function (res) {
                if (res.status == '200') {
                    $('tbody').empty();
                    let count = 0;
                    res.data.forEach(function (item) {
    count = count + 1;
    var editUrl = '{{ route("admin.user.edit", ":id") }}'.replace(':id', item.id);
    var newRow = `
        <tr>
            <td>${count}</td>
            <td><img id="imgset" src="{{ url('public/uploads/image/') }}/${item.id_image}" alt="User Image"></td>
            <td>${item.first_name} ${item.last_name}</td>
            <td>${item.email}</td>
            <td>${item.number}</td>
            <td>
                <div class="dropdown">
                    <button type="button" class="btn btn-sm dropdown-toggle hide-arrow py-0" data-bs-toggle="dropdown">
                        <i data-feather="more-vertical"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="${editUrl}">
                            <i data-feather="edit-2" class="me-50"></i>
                            <span>Edit</span>
                        </a>
                        <a class="dropdown-item delete-record" data-id="${item.id}" href="#">
                            <i data-feather="trash" class="me-50"></i>
                            <span>Delete</span>
                        </a>
                    </div>
                </div>
            </td>
        </tr>`;
    $('tbody').append(newRow);
});

                }

            },
            error: function (error) {
                console.error(error);
            }
        });
    }
    </script>
    <script>
    $(document).on('click', '.delete-record', function () {
            var associateId =  $(this).data('id');            
            if (confirm('Are you sure you want to delete this user ?')) {
                $.ajax({
                    url: "{{ url('admin/user') }}/" + associateId, // Use the url() function
                    type: 'DELETE',
                    data: {
                        '_token': '{{ csrf_token() }}', // You may need to pass CSRF token
                    },
                    success: function (res) {
                        if (res.status === 200) {
                            toastr.success(res.message);
                            window.location.href =
                                "{{ route('admin.user.index') }}";
                        }
                    },
                    error: function (xhr) {
                        toastr.error('Oops... Something went wrong. Please try again.');
                    }
                });
            }
        });
</script>

@endsection