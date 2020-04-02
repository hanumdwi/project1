@extends('layout/main')

@section('title', 'product')

@section('container')

	<title>Edit Data product</title>
</head>
<body>
 
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"><strong>Edit Data product</strong></h3>
            <ul class="panel-controls">
                <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
            </ul>
    </div>
               <div class="panel-body">                                                                        
                <div class="row">
                    <div class="col-md-6">
 
	<a href="productcreate"> Kembali</a>
	
	<br/>
	<br/>
 
	@foreach($product as $p)
	<form action="productupdate" method="post">
		{{ csrf_field() }}

		<input type="hidden" name="id" value="{{ $p->product_id }}"> <br/>
        <div class="form-group">
        <label class="col-md-3 control-label">Category Id</label>
        <div class="col-md-9">                                            
            <div class="input-group">
                <!-- <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                    <input type="text" class="form-control" id="category_id" name="category_id" value="{{ $p->category_id }}"><br/></div>                                            
                        <span class="help-block"></span> -->
                        <select name="category_id" class="form-control" id="category_id">
                                           @foreach($categories as $c)
                                           @if($c->status == 1)
                                           <option value="{{$c->category_id}}">{{$c->category_name}}</option>
                                            @endif
                                           @endforeach                           
                          </select>
                            </div>
                                </div>


        <div class="form-group">
        <label class="col-md-3 control-label">Product Name</label>
        <div class="col-md-9">                                            
            <div class="input-group">
                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                    <input type="text" class="form-control" id="product_name" name="product_name" value="{{ $p->product_name }}"><br/></div>                                            
                        <span class="help-block"></span>
                            </div>
                                </div>

        <div class="form-group">
        <label class="col-md-3 control-label">Product Price</label>
        <div class="col-md-9">                                            
            <div class="input-group">
                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                    <input type="text" class="form-control" id="product_price" name="product_price" value="{{ $p->product_price }}"><br/></div>                                            
                        <span class="help-block"></span>
                            </div>
                                </div>

        <div class="form-group">
        <label class="col-md-3 control-label">Product Stock</label>
        <div class="col-md-9">                                            
            <div class="input-group">
                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                    <input type="text" class="form-control" id="product_stock" name="product_stock" value="{{ $p->product_stock }}"><br/></div>                                            
                        <span class="help-block"></span>
                            </div>
                                </div>

        <div class="form-group">
        <label class="col-md-3 control-label">Explanation</label>
        <div class="col-md-9">                                            
            <div class="input-group">
                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                    <input type="text" class="form-control" id="explanation" name="explanation" value="{{ $p->explanation }}"><br/></div>                                            
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