<div class="table-responsive" id="table-responsive">
                                <table class="table mb-0">
                                    <thead class="table-dark">
                                        <tr>
                                            <th scope="col" >#</th>
                                            <th scope="col" >Image</th>
                                            <th scope="col" >Category</th>
                                            <th scope="col" >Sub Category</th>
                                            <th scope="col" >RRR Price</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="myTable">
                                    @php  $i = 1; @endphp
 
                                        @foreach ($products as $item)
                                            
                                            <tr>
                                                <td>{{$i }}</td>
                                               
                                                <td><img src="{{ url('public/uploads/item/'.$item->mainImag)}}" alt="Toolbar svg" width="50px" /></td>

                                                <td >{{$item->category->name ?? ''}}</td>
                                                <td >{{$item->subCategory->name ?? ''}}</td>
                                                <td >{{$item->rrp_price}}</td>
                                                <td>
                                                    <div class="dropdown">
                                                        <button type="button" class="btn btn-sm dropdown-toggle hide-arrow py-0" data-bs-toggle="dropdown">
                                                            <i data-feather="more-vertical"></i>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="{{route('admin.cities.edit',$item->id)}}">
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
                                </div>
                            @include('backend._pagination', ['data' => $products])