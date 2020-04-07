@php 
                    $no = 1;
                    $totalPrice = 0;
                    $totalQty = 0;
                    $total = 0;
                @endphp
                @forelse($detail_sales as $row)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $row->product->product_name }}</td>
                    <td>Rp {{ number_format($row->product_price) }}</td>
                    <td>{{ $row->quantity }} Item</td>
                    <td>Rp {{ number_format($row->product_price * $row->quantity) }}</td>
                </tr>

                @php
                    $totalPrice += $row->product_price;
                    $totalQty += $row->quantity;
                    $total += ($row->product_price * $row->quantity);
                @endphp
                @empty
                <tr>
                    <td colspan="5" class="text-center">Tidak ada data</td>
                </tr>
                @endforelse
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <td>Rp {{ number_format($totalPrice) }}</td>
                    <td>{{ number_format($totalQty) }} Item</td>
                    <td>Rp {{ number_format($total) }}</td>
                </tr>
            </tfoot>

            <div class="x_content">
 <form class="form-horizontal form-label-left" action="#" method="POST">
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Customer Name</label>
                                        <div class="col-md-1">                                                                                
                                            <select class="form-control select" data-live-search="true">
                                                @foreach($customer as $cus)
                                                <option value="{{ $cus -> customer_id }}">{{ $cus -> first_name }}</option>
                                                @endforeach  
                                            </select>
                                        </div>
                                    </div>
                            
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">User Name</label>
                                        <div class="col-md-1">                                                                                
                                            <select class="form-control select" data-live-search="true">
                                                @foreach($pegawai as $u)
                                                <option value="{{ $u -> user_id }}">{{ $u -> first_name }}</option>
                                                @endforeach  
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Nota Date</label>
                                        <div class="col-md-2">                   
                                                        <input type="date" class="form-control" id="nota_date" name="nota_date" />
                                                    </div>   
                                    </div>
                                    <br>