<div class="table-responsive" id="table-responsive">
                                <table class="table mb-0">
                                    <thead class="table-dark">
                                        <tr>
                                            <th scope="col" >#</th>
                                            <th scope="col" >Name</th>
                                            <th scope="col" >Number</th>
                                            <th scope="col" >Email</th>
                                            <th>Message</th>
                                        </tr>
                                    </thead>
                                    <tbody id="myTable">
                                    @php  $i = 1; @endphp
 
                                        @foreach ($inquiries as $item)
                                            
                                            <tr>
                                                <td>{{$i }}</td>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->number }}</td>
                                                <td>{{ $item->email }}</td>
                                                <td>{{ $item->messag }}</td>
                                            </tr>
                                            @php
                                                $i++;
                                            @endphp
                                            @endforeach
                                        
                                    </tbody>
                                </table>
                            </div>
                            @include('backend._pagination', ['data' => $inquiries])