@extends('layout/main')

@section('title', 'Customer')

@section('container')

	<title>Edit Data Customer</title>
</head>
<body>
 
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"><strong>Edit Data Customer</strong></h3>
            <ul class="panel-controls">
                <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
            </ul>
    </div>
               <div class="panel-body">                                                                        
                <div class="row">
                    <div class="col-md-6">
 
	<a href="customercreate"> Kembali</a>
	
	<br/>
	<br/>
 
	@foreach($customer as $cus)
	<form action="customerupdate" method="post">
		{{ csrf_field() }}

		<input type="hidden" name="id" value="{{ $cus->customer_id }}"> <br/>
        <div class="form-group">
        <label class="col-md-3 control-label">First Name</label>
        <div class="col-md-9">                                            
            <div class="input-group">
                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                    <input type="text" class="form-control" id="firstname" name="firstname" value="{{ $cus->first_name }}"><br/></div>                                            
                        <span class="help-block"></span>
                            </div>
                                </div>


        <div class="form-group">
        <label class="col-md-3 control-label">Last Name</label>
        <div class="col-md-9">                                            
            <div class="input-group">
                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                    <input type="text" class="form-control" id="lastname" name="lastname" value="{{ $cus->last_name }}"><br/></div>                                            
                        <span class="help-block"></span>
                            </div>
                                </div>

        <div class="form-group">
        <label class="col-md-3 control-label">Phone</label>
        <div class="col-md-9">                                            
            <div class="input-group">
                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                    <input type="text" class="form-control" id="phone" name="phone" value="{{ $cus->phone }}"><br/></div>                                            
                        <span class="help-block"></span>
                            </div>
                                </div>

        <div class="form-group">
        <label class="col-md-3 control-label">Email</label>
        <div class="col-md-9">                                            
            <div class="input-group">
                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                    <input type="text" class="form-control" id="email" name="email" value="{{ $cus->email }}"><br/></div>                                            
                        <span class="help-block"></span>
                            </div>
                                </div>

        <div class="form-group">
        <label class="col-md-3 control-label">Street</label>
        <div class="col-md-9">                                            
            <div class="input-group">
                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                    <input type="text" class="form-control" id="street" name="street" value="{{ $cus->street }}"><br/></div>                                            
                        <span class="help-block"></span>
                            </div>
                                </div>

        <div class="form-group">
        <label class="col-md-3 control-label">City</label>
        <div class="col-md-9">                                            
            <div class="input-group">
                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                    <input type="text" class="form-control" id="city" name="city" value="{{ $cus->city }}"><br/></div>                                            
                        <span class="help-block"></span>
                            </div>
                                </div>


        <div class="form-group">
        <label class="col-md-3 control-label">State</label>
        <div class="col-md-9">                                            
            <div class="input-group">
                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                    <input type="text" class="form-control" id="state" name="state" value="{{ $cus->state }}"><br/></div>                                            
                        <span class="help-block"></span>
                            </div>
                                </div>

        <div class="form-group">
        <label class="col-md-3 control-label">Zip Code</label>
        <div class="col-md-9">                                            
            <div class="input-group">
                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                    <input type="text" class="form-control" id="zipcode" name="zipcode" value="{{ $cus->zip_code }}"><br/></div>                                            
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