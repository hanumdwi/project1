@extends('layout/main')

@section('container')
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
                    <div class="row">
                        <div class="col-md-12">
                            
                            <form class="form-horizontal" action="productstore" method="post">
                            @csrf
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Input Data product</strong></h3>
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>
                                </div>
                                <div class="panel-body">                                                                        
                                    
                                    <div class="row">
                                        
                                        <div class="col-md-6">
                                            
                                        <div class="form-group">
                                                <label for="category_id" class="col-md-3 control-label">Category Id</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <select class="form-control" id="category_id" required="" name="category_id">
                                                        <option disabled selected="">Pilih Kategori</option>
                                                        @foreach($categories as $c)
                                                        <option value="{{ $c->category_id }}">{{$c->category_name}}</option>
                                                        @endforeach
                                                        </select>
                                                    </div>                                            
                                                   
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Product Name</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="text" class="form-control" id="product_name" name="product_name" />
                                                    </div>                                            
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Product Price</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="text" class="form-control" id="product_price" name="product_price" />
                                                    </div>                                            
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Product Stock</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="text" class="form-control" id="product_stock" name="product_stock" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Explanation</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="text" class="form-control" id="explanation" name="explanation" />
                                                    </div>
                                                </div>
                                            </div>
                                            
                                </div>
                                <div class="panel-footer">
                                <button class="btn btn-primary pull-right">Submit</button>

                                <!-- <button type="button" class="btn btn-info active">Submit</button>                    -->
                                    <!-- <button class="btn btn-primary pull-left">Submit</button> -->
                                </div>
                            </div>
                            </form>
                            
                        </div>
                    </div>                    
                    
                </div>
                <!-- END PAGE CONTENT WRAPPER -->  
                @endsection