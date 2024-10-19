<div class="table-responsive" id="table-responsive">
    <table class="table mb-0">
        <thead class="table-dark">
            <tr>
                <th scope="col" >#</th>
                <th scope="col" >Name</th>
                <th scope="col" >Type</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody id="myTable">
        @php  $i = 1; @endphp

            @foreach ($category_masters as $item)
                
                <tr>
                    <td>{{$i }}</td>
                    
                    <td class="bold"><strong>{{ $item->name }}</strong></td>
                    <td style="    text-transform: uppercase;">{{ $item->type }}</td>
                    <td>
                        <div class="dropdown">
                            <button type="button" class="btn btn-sm dropdown-toggle hide-arrow py-0" data-bs-toggle="dropdown">
                                <i data-feather="more-vertical"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="{{route('admin.category_masters.edit',$item->id)}}">
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
    @include('backend._pagination', ['data' => $category_masters])
</div>


<script>
    feather.replace();
</script>