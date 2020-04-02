@extends('layout/main')

@section('title', 'sales')

@section('container')

<title>Edit Data sales</title>
</head>
<body>
 
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"><strong>Edit Data sales</strong></h3>
            <ul class="panel-controls">
                <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
            </ul>
    </div>
               <div class="panel-body">                                                                        
                <div class="row">
                    <div class="col-md-6">
 
	<a href="salescreate"> Kembali</a>
	
	<br/>
	<br/>
 
	@foreach($sales as $s)
	<form action="salesupdate" method="post">
		{{ csrf_field() }}

		<input type="hidden" name="id" value="{{ $s->nota_id }}"> <br/>
        <div class="form-group">
        <label class="col-md-3 control-label">Category Id</label>
        <div class="col-md-9">                                            
            <div class="input-group">
            <!-- <select name="customer_id" class="form-control" id="customer_id">
                                           @foreach($customer as $cus)
                                           @if($c->status == 1)
                                           <option value="{{$cus->customer_id}}">{{$cus->category_name}}</option>
                                            @endif
                                           @endforeach                           
                          </select> -->
            <select class="form-control" id="customer_id" required="" name="customer_id">

                                                        <option disabled selected="">Pilih Kategori</option>
                                                        @foreach($customer as $cus)
                                                        <option value="{{ $cus->customer_id }}">{{$cus->first_name}}</option>
                                                        @endforeach
                                                        </select>
                            </div>
                                </div>


        <div class="form-group">
        <label class="col-md-3 control-label">sales Name</label>
        <div class="col-md-9">                                            
            <div class="input-group">
            <!-- <select name="user_id" class="form-control" id="user_id">
                                           @foreach($user as $u)
                                           @if($c->status == 1)
                                           <option value="{{$u->user_id}}">{{$u->category_name}}</option>
                                            @endif
                                           @endforeach                           
                          </select> -->
            <select class="form-control" id="user_id" required="" name="user_id">
                                                        <option disabled selected="">Pilih Kategori</option>
                                                        @foreach($user as $u)
                                                        <option value="{{ $u->user_id }}">{{$u->first_name}}</option>
                                                        @endforeach
                                                        </select>
                            </div>
                                </div>

        <div class="form-group">
        <label class="col-md-3 control-label">Nota Date</label>
        <div class="col-md-9">                                            
            <div class="input-group">
                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                    <input type="date" class="form-control" id="nota_date" name="nota_date" value="{{ $s->nota_date }}"><br/></div>                                            
                        <span class="help-block"></span>
                            </div>
                                </div>

        <div class="form-group">
        <label class="col-md-3 control-label">Total Payment</label>
        <div class="col-md-9">                                            
            <div class="input-group">
                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                    <input type="text" class="form-control" id="total_payment" name="total_payment" value="{{ $s->total_payment }}"><br/></div>                                            
                        <span class="help-block"></span>
                            </div>
                                </div>
        
		<button type="submit" class="btn btn-info mt-3">Simpan Data</button>
	</form>
	@endforeach

@endsection

	