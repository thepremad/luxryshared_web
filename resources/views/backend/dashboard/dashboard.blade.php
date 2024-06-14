@extends('backend.layouts')

@section('style')
<style>
     .cards {
        height: 120px;
        background: #5cd95c;
        color: white;
        font-weight: 900;
        text-align: center;
        padding-top: 42px;
        border-radius: 7px;
        margin: 6px 40px
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
        </div>
        <div class="content-body">
            <!-- Dashboard Ecommerce Starts -->
            <section id="dashboard-ecommerce">
                <div class="row match-height">
                    <!-- Statistics Card -->
                    <div class="col-md-3 cards">Total Register Count <br><span style="font-size:17px">{{$userCount}}</span></div>
                    <div class="col-md-3 cards" style="    background: #e78383;">Total Order Request <br><span
                            style="font-size:17px">__</span></div>
                    <div class="col-md-3 cards" style="    background: #bdbf4cd9;">Register request <br><span
                            style="font-size:17px">__</span></div>
                    <!-- <div class="col-md-3 cards">total Lend Count <br><span style="font-size:17px">100</span></div> -->
                    <div class="col-md-3 cards" style="background: #66cdbfd9;">total Rent Count <br><span
                            style="font-size:17px">__</span></div>
                    <div class="col-md-3 cards" style="background: #5c7dd9;">Total Buy Count <br><span
                            style="font-size:17px">__</span></div>
                    <div class="col-md-3 cards" style="    background: #cc5cd9;">Total Resale Count <br><span
                            style="font-size:17px">__</span></div>

                </div>
        </div>
        <div class="row mt-5">
            <div class="table-responsive" id="table-responsive">
                <table class="table mb-0">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Id</th>
                            <th scope="col">Email</th>
                            <th scope="col">Number</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody id="myTable">
                        @php  $i = 1; @endphp

                        @foreach ($user as $item)

                                                <tr>
                                                    <td>{{$i }}</td>
                                                    <td><img id="imgset" src="{{url('public/uploads/image/' . $item->id_image)}}" alt=""></td>

                                                    <td>
                                                        {{$item->email}}
                                                    </td>

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
        </div>
    </div>

    </section>
</div>
</div>
@endsection

@section('script')
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

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

