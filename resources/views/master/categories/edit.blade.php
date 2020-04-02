@extends('layout/main')

@section('title', 'categories')

@section('container')

	<title>Edit Data category</title>
</head>
<body>
 
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"><strong>Edit Data category</strong></h3>
            <ul class="panel-controls">
                <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
            </ul>
    </div>
               <div class="panel-body">                                                                        
                <div class="row">
                    <div class="col-md-6">
 
	<a href="categorycreate"> Kembali</a>
	
	<br/>
	<br/>
 
	@foreach($categories as $c)
	<form action="categoriesupdate" method="post">
		{{ csrf_field() }}

		<input type="hidden" name="id" value="{{ $c->category_id }}"> <br/>
        <div class="form-group">
        <label class="col-md-3 control-label">Category Name</label>
        <div class="col-md-9">                                            
            <div class="input-group">
                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                    <input type="text" class="form-control" id="category_name" name="category_name" value="{{ $c->category_name }}"><br/></div>                                            
                        <span class="help-block"></span>
                            </div>
                                </div>
        <div class="form-group">
        <label class="col-md-3 control-label">Status</label>
        <div class="col-md-9">                                            
            <div class="input-group">
                <!-- <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                    <input type="text" class="form-control" id="status" name="status" value="{{ $c->status }}"><br/></div>                                            
                        <span class="help-block"></span> -->
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