@extends('layout/main')

@section('title', 'User')

@section('container')

                    <!-- START RESPONSIVE TABLES -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">

                                <div class="panel-heading">
                                    <h3 class="panel-title">Daftar User</h3>
                                </div>

                                <div class="panel-body panel-body-table">
                        
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped table-actions">
                                        <a href="usercreate" class="btn btn-info my-3">Tambah Data User</a>
                                            <thead>
                                                <tr>
                                                <th scope="row">#</th>
                                                    <th width="50">id</th>
                                                    <th>First Name</th>
                                                    <th>Last Name</th>
                                                    <th>Phone</th>
                                                    <th width="100">Email</th>
                                                    <th width="100">Password</th>
                                                    <th width="100">Job Status</th>
                                                    <th width="100">actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>                                            
                                                    @foreach($user as $u)
                                                    <tr>
                                                    <th scope="row">{{ $loop->iteration }}</th>
                                                    <td>{{ $u -> user_id }}</td>
                                                    <td>{{ $u -> first_name }}</td>
                                                    <td>{{ $u -> last_name }}</td>
                                                    <td>{{ $u -> phone }}</td>
                                                    <td>{{ $u -> email }}</td>
                                                    <td>{{ $u -> password }}</td>
                                                    <td>{{ $u -> job_status }}</td>
                                                    
                                                    <td><a href="useredit{{$u -> user_id}}" class="btn btn-default btn-rounded btn-sm"><span class="fa fa-pencil"></span></a>
                                                   <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                                    delete
                                                    </button>

                                                    <!-- Modal -->
                                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                      <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                          <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                              <span aria-hidden="true">&times;</span>
                                                            </button>
                                                          </div>
                                                          <div class="modal-body">
                                                            ...
                                                          </div>
                                                          <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <a href="userdestroy{{$u -> user_id}}" class="btn btn-danger btn-rounded btn-sm"><span class="fa fa-times"></span><button type="button" class="btn btn-primary">Save changes</button></a>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <a href="userdestroy{{$u -> user_id}}" class="btn btn-danger btn-rounded btn-sm" onClick="delete_row('trow_3');"><span class="fa fa-times"></span></a>
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
