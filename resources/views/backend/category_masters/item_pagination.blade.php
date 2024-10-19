<div class="table-responsive" id="table-responsive">
                                <table class="table mb-0">
                                    <thead class="table-dark">
                                        <tr>
                                            <th scope="col" >#</th>
                                            <th scope="col" >title</th>
                                            <th scope="col" >color</th>
                                            <th scope="col" >rrp</th>
                                            <th scope="col" >buy price</th>
                                        </tr>
                                    </thead>
                                    <tbody id="myTable">
                                    @php  $i = 1; @endphp
 
                                        @foreach ($items as $item)
                                            
                                            <tr>
                                                <td>{{$i }}</td>
                                                <td>{{$item->item_title}}</td>
                                                <td>{{$item->color->name ?? ''}}</td>

                                                <td >{{$item->rrp_price}}</td>
                                                <td>{{$item->buy_price}}</td>
                                            </tr>
                                            @php
                                                $i++;
                                            @endphp
                                            @endforeach
                                        
                                    </tbody>
                                </table>
                                </div>
                            @include('backend._pagination', ['data' => $items])