<div class="table-responsive" id="table-responsive">
    <table class="table mb-0">
        <thead class="table-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">email</th>
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
                                <img id="imgset" src="{{ url('public/uploads/image/' . $item->id_image)}}" alt="Toolbar svg"
                                    width="50px" />
                            </td>
                            <td><a href="{{route('admin.user.show', $item->id)}}">{{ $item->first_name }}
                                    {{ $item->last_name }}</a></td>
                            <td>{{$item->email}}</td>
                            <td>{{ $item->number }}</td>
                            <td>
                                @if ($item->status == '1')
                                    <a href="#" class="btn btn-success">Approved</a>
                                @elseif($item->status == '2')
                                    <a href="#" class="btn btn-danger">Disapprove</a>
                                @else
                                    <div class="dropdown">
                                        <button type="button" class="btn btn-sm dropdown-toggle hide-arrow py-0"
                                            data-bs-toggle="dropdown">
                                            <i data-feather="more-vertical"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item delete-record" data-id="{{$item->id}}" href='#'>
                                                <i data-feather="edit-2" class="me-50"></i>
                                                <span>Approve</span>
                                            </a>
                                            <a class="dropdown-item " onclick="rejectConformation({{$item->id}})" href="#">
                                                <i data-feather="trash" class="me-50"></i>
                                                <span>Disaprove</span>
                                            </a>
                                        </div>
                                    </div>
                                @endif
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