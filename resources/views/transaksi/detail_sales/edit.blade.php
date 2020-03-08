@extends('layout/main')

@section('title', 'Detail_Sales')

@section('container')

	<title>Edit Data Detail_Sales</title>
</head>
<body>
 
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"><strong>Edit Data Detail_Sales</strong></h3>
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
 
	@foreach($detail_sales as $d)
	<form action="detail_salesupdate" method="post">
		{{ csrf_field() }}

		<input type="hidden" name="id" value="{{ $d->nota_id }}"> <br/>
        <div class="form-group">
        <label class="col-md-3 control-label">Category Name</label>
        <div class="col-md-9">                                            
            <div class="input-group">
                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                    <input type="text" class="form-control" id="category_name" name="category_name" value="{{ $d->category_name }}"><br/></div>                                            
                        <span class="help-block"></span>
                            </div>
                                </div>

		<button type="submit" class="btn btn-info mt-3">Simpan Data</button>
	</form>
	@endforeach

@endsection