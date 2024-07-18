<div class="table-responsive" id="table-responsive">
                                <table class="table mb-0">
                                    <thead class="table-dark">
                                        <tr>
                                            <th scope="col" >#</th>
                                            <th scope="col" >Code</th>
                                            <th scope="col" >Offer</th>
                                            <th scope="col" >User Limit</th>
                                            <th scope="col" >Amount</th>
                                            <th scope="col" >Expire Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="myTable">
                                    @php  $i = 1; @endphp
 
                                        @foreach ($discounts as $item)
                                            
                                            <tr>
                                                <td>{{$i }}</td>
                                                <td>{{$item->code}}</td>
                                                <td>{{config("constants.OFFER.$item->offer_type") }}</td>
                                                <td>{{$item->limit}} </td>
                                                <td>{{$item->offer_type == 2 ? $item->in_per : $item->fix_amount}}{{$item->offer_type == 2 ? '%' : 'Rs'}} </td>
                                                <td >{{$item->exp_date}}</td>
                                                <td>
                                                    <div class="dropdown">
                                                        <button type="button" class="btn btn-sm dropdown-toggle hide-arrow py-0" data-bs-toggle="dropdown">
                                                            <i data-feather="more-vertical"></i>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="{{route('admin.discounts.edit',$item->id)}}">
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
                            @include('backend._pagination', ['data' => $discounts])