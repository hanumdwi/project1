@extends('layout/main')

@section('title', 'Customer')

@section('container')

                    <!-- START RESPONSIVE TABLES -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">

                                <div class="panel-heading">
                                    <h3 class="panel-title">Daftar Customer</h3>
                                </div>

                                <div class="panel-body panel-body-table">
                        
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped table-actions">
                                        <a href="customercreate" class="btn btn-info my-3">Tambah Data Customer</a>
                                            <thead>
                                                <tr>
                                                <th scope="row">#</th>
                                                    <th width="50">id</th>
                                                    <th>First Name</th>
                                                    <th>Last Name</th>
                                                    <th>Phone</th>
                                                    <th width="100">Email</th>
                                                    <th width="100">Street</th>
                                                    <th width="100">City</th>
                                                    <th width="100">State</th>
                                                    <th width="100">Zip Code</th>
                                                    <th width="100">actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>                                            
                                                    @foreach($customer as $cus)
                                                    <tr>
                                                    <th scope="row">{{ $loop->iteration }}</th>
                                                    <td>{{ $cus -> customer_id }}</td>
                                                    <td>{{ $cus -> first_name }}</td>
                                                    <td>{{ $cus -> last_name }}</td>
                                                    <td>{{ $cus -> phone }}</td>
                                                    <td>{{ $cus -> email }}</td>
                                                    <td>{{ $cus -> street }}</td>
                                                    <td>{{ $cus -> city }}</td>
                                                    <td>{{ $cus -> state }}</td>
                                                    <td>{{ $cus -> zip_code }}</td>
                                                    
                                                    <td><a href="customeredit{{$cus -> customer_id}}" class="btn btn-default btn-rounded btn-sm"><span class="fa fa-pencil"></span></a>
                                                    <a href="customerdestroy" class="btn btn-danger btn-rounded btn-sm" onClick="delete_row('trow_3');"><span class="fa fa-times"></span>
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