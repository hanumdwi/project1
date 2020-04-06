@extends('layout/main')

@section('title', 'Pegawai')

@section('container')

	<title>Edit Data Pegawai</title>
</head>
<body>
 
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"><strong>Edit Data Pegawai</strong></h3>
            <ul class="panel-controls">
                <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
            </ul>
    </div>
               <div class="panel-body">                                                                        
                <div class="row">
                    <div class="col-md-6">
 
	<a href="pegawaiindex"> Kembali</a>
	
	<br/>
	<br/>
 
	@foreach($pegawai as $u)
	<form action="pegawaiupdate" method="post">
		{{ csrf_field() }}

		<input type="hidden" name="id" value="{{ $u->user_id }}"> <br/>
        <div class="form-group">
        <label class="col-md-3 control-label">First Name</label>
        <div class="col-md-9">                                            
            <div class="input-group">
                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                    <input type="text" class="form-control" id="firstname" name="firstname" value="{{ $u->first_name }}"><br/></div>                                            
                        <span class="help-block"></span>
                            </div>
                                </div>


        <div class="form-group">
        <label class="col-md-3 control-label">Last Name</label>
        <div class="col-md-9">                                            
            <div class="input-group">
                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                    <input type="text" class="form-control" id="lastname" name="lastname" value="{{ $u->last_name }}"><br/></div>                                            
                        <span class="help-block"></span>
                            </div>
                                </div>

        <div class="form-group">
        <label class="col-md-3 control-label">Username</label>
        <div class="col-md-9">                                            
            <div class="input-group">
                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                    <input type="text" class="form-control" id="username" name="username" value="{{ $u->username }}"><br/></div>                                            
                        <span class="help-block"></span>
                            </div>
                                </div>

        <div class="form-group">
        <label class="col-md-3 control-label">Phone</label>
        <div class="col-md-9">                                            
            <div class="input-group">
                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                    <input type="text" class="form-control" id="phone" name="phone" value="{{ $u->phone }}"><br/></div>                                            
                        <span class="help-block"></span>
                            </div>
                                </div>

        <div class="form-group">
        <label class="col-md-3 control-label">Email</label>
        <div class="col-md-9">                                            
            <div class="input-group">
                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                    <input type="text" class="form-control" id="email" name="email" value="{{ $u->email }}"><br/></div>                                            
                        <span class="help-block"></span>
                            </div>
                                </div>

        <div class="form-group">
        <label class="col-md-3 control-label">Password</label>
        <div class="col-md-9">                                            
            <div class="input-group">
                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                    <input type="text" class="form-control" id="password" name="password" value="{{ $u->password }}"><br/></div>                                            
                        <span class="help-block"></span>
                            </div>
                                </div>

        <div class="form-group">
        <label class="col-md-3 control-label">Job Status</label>
        <div class="col-md-9">                                            
            <div class="input-group">
                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                    <input type="text" class="form-control" id="jobstatus" name="jobstatus" value="{{ $u->job_status }}"><br/></div>                                            
                        <span class="help-block"></span>
                            </div>
                                </div>

        <div class="form-group">
        <label class="col-md-3 control-label">Status</label>
        <div class="col-md-9">                                            
            <div class="input-group">
                        <select name="status" id="status" class="form-control col-md-7 col-xs-12">
                        <option value="1">Active</option>
                        <option value="0">Non-Active</option>
                        </select>
                            </div>
                                </div>
        
                                
		<button type="submit" class="btn btn-info mt-3">Simpan Data</button>
	</form>
	@endforeach

@endsection