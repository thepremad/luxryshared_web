@extends('backend.layouts')
@section('style')

<style>
    .Active {
        color: green;
        font-weight: 900;
    }

    .Inactive {
        color: red;
        font-weight: 900;
    }

    #imgset {
        width: 77px !important;
        height: 77px !important;
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
                        <h2 class="content-header-title float-start mb-0">Users</h2>
                        <div class="breadcrumb-wrapper">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <section id="ajax-datatable">
                <!-- Responsive tables start -->
                <div class="row">

                    <div class="col-12">
                        <div class="card-datatable">
                            <table class="datatables-ajax table-bordered  table table-responsive">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th> Name</th>
                                        <th>Email</th>
                                        <th>Number</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
        </div>
        </section>

    </div>
</div>

</div>
@endsection
@section('script')
<script>
    $(document).ready(function () {
        // $.fn.dataTable.ext.errMode = 'throw'; // Enable detailed error messages
        var table = $('.table-bordered').DataTable({
            destroy: true,
            processing: true,
            serverSide: true,
            ajax: {
                url: "{{ route('admin.user.index') }}",
                data: function (d) {
                    d.first_name = $('#searchInput').val()
                }
            },
            columns: [
                { data: 'first_name', name: 'first_name' },
                { data: 'first_name', name: 'first_name' },
                { data: 'email', name: 'email' },
                { data: 'number', name: 'number' },
                {
                    data: 'action',
                    name: 'action',
                    orderable: true,
                    searchable: true
                },
            ]
        });
        $('form.dt_adv_search input').on('keyup change input', function () {
            table.ajax.reload();
        });
    });
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
    // var currentPage = 1;
    // function myFunction(page = 1) {
    //     var csrfToken = document.head.querySelector('meta[name="csrf-token"]').content;

    //     var input = document.getElementById("searchInput");
    //     $.ajax({
    //         url: '{{route('admin.user.serach')}}', // Replace with your server endpoint
    //         method: 'POST', // You can use 'GET' or 'POST' based on your server-side handling
    //         data: { val: input.value },
    //         headers: {
    //             'X-CSRF-TOKEN': csrfToken
    //         },
    //         success: function (res) {
    //             if (res.status == '200') {
    //                 $('tbody').empty();
    //                 let count = 0;
    //                 res.data.forEach(function (item) {
    //                     count = count + 1;
    //                     var newRow = '<tr>' +
    //                         '<td>' + count + '</td>' +
    //                         '<td><img id="imgset"  src="{{ url("public/uploads/image/") }}/' + item.id_image + '"></td>' +
    //                         '<td>' + item.first_name + ' ' + item.last_name + '</td>' +
    //                         '<td>' + item.email + '</td>' +
    //                         '<td>' + item.number + '</td>' +
    //                         '<td>' +
    //                         '<div class="dropdown">' +
    //                         '<button type="button" class="btn btn-sm dropdown-toggle hide-arrow py-0" data-bs-toggle="dropdown">' +
    //                         '<i data-feather="more-vertical"></i>' +
    //                         '</button>' +
    //                         '<div class="dropdown-menu dropdown-menu-end delete-record" data-id="' + item.id + '">' +
    //                         '<a class="dropdown-item" href="#">' +
    //                         '<i data-feather="edit-2" class="me-50"></i>' +
    //                         '<span>Approve</span>' +
    //                         '</a>' +
    //                         '<a class="dropdown-item" onclick="rejectConformation(' + item.id + ')" href="#">' +
    //                         '<i data-feather="trash" class="me-50"></i>' +
    //                         '<span>Disapprove</span>' +
    //                         '</a>' +
    //                         '</div>' +
    //                         '</div>' +
    //                         '</td>' +

    //                         '</tr>';
    //                     $('tbody').append(newRow);
    //                 });
    //             }

    //         },
    //         error: function (error) {
    //             console.error(error);
    //         }
    //     });
    // }

</script>


<script>

    $(document).on('click', '.delete-record', function () {
        var userId = $(this).data('id');
        if (confirm('Are you sure you want to approve request ?')) {
            $.ajax({
                url: "{{ url('admin/approve-request') }}/" + userId, // Use the url() function
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
@endsection