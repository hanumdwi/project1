@extends('layout/main')

@section('title', 'Customer')

@section('container')
   
 <!-- START RESPONSIVE TABLES -->
                <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">

                                <div class="panel-heading">
                                    <h3 class="panel-title">Daftar Product</h3>
                                </div>

                                <div class="panel-body panel-body-table">
                        
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped table-actions">
                                        <a href="productcreate" class="btn btn-info my-3">Tambah Data product</a>
                                            <thead>
                                                <tr>
                                                <th scope="row">#</th>
                                                    <th width="50">Product id</th>
                                                    <th>Category id</th>
                                                    <th>Product Price</th>
                                                    <th>Product Stock</th>
                                                    <th>Explanation</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>                                            
                                                    @foreach($product as $p)
                                                    <tr>
                                                    <th scope="row">{{ $loop->iteration }}</th>
                                                    <td>{{ $p -> product_id }}</td>
                                                    <td>{{ $p -> category_id }}</td>
                                                    <td>{{ $p -> product_price }}</td>
                                                    <td>{{ $p -> product_stock }}</td>
                                                    <td>{{ $p -> explanation }}</td>
                                                    
                                                    <td><a href="productedit{{$p -> product_id}}" class="btn btn-default btn-rounded btn-sm"><span class="fa fa-pencil"></span></a>
                                                    <a href="productdestroy{{$p -> product_id}}" class="btn btn-danger btn-rounded btn-sm" onClick="delete_row('trow_3');"><span class="fa fa-times"></span>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>                                

                                </div>
                            </div>                                                

                        </div>
                    </div>
                    <!-- END RESPONSIVE TABLES -->
                    
                <!-- END PAGE CONTENT WRAPPER -->                                    
                </div>         
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->    
   
@endsection