@extends('layout/main')

@section('container')
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
                    <div class="row">
                        <div class="col-md-12">
                            
                            <form class="form-horizontal" action="detail_salesstore" method="post">
                            @csrf
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Input Data detail_sales</strong></h3>
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>
                                </div>
                                <div class="panel-body">                                                                        
                                    
                                    <div class="row">
                                        
                                        <div class="col-md-6">
                                            
                                        <div class="form-group">
                                                <label class="col-md-3 control-label">Nota Id</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="text" class="form-control" id="nota_id" name="nota_id" />
                                                    </div>                                            
                                                    <span class="help-block">This is sample of text field</span>
                                                </div>
                                            </div>
                                        <div class="form-group">
                                                <label class="col-md-3 control-label">Product Id</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="text" class="form-control" id="product_id" name="product_id" />
                                                    </div>                                            
                                                    <span class="help-block">This is sample of text field</span>
                                                </div>
                                            </div>
                                        <div class="form-group">
                                                <label class="col-md-3 control-label">Quantity</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="text" class="form-control" id="quantity" name="quantity" />
                                                    </div>                                            
                                                    <span class="help-block">This is sample of text field</span>
                                                </div>
                                            </div>
                                        <div class="form-group">
                                                <label class="col-md-3 control-label">Selling Price</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="text" class="form-control" id="selling_price" name="selling_price" />
                                                    </div>                                            
                                                    <span class="help-block">This is sample of text field</span>
                                                </div>
                                            </div>
                                        <div class="form-group">
                                                <label class="col-md-3 control-label">Discount</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="text" class="form-control" id="discount" name="discount" />
                                                    </div>                                            
                                                    <span class="help-block">This is sample of text field</span>
                                                </div>
                                            </div>
                                        <div class="form-group">
                                                <label class="col-md-3 control-label">Total Price</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="text" class="form-control" id="total_price" name="total_price" />
                                                    </div>                                            
                                                    <span class="help-block">This is sample of text field</span>
                                                </div>
                                            </div>
                                            <div class="panel-footer">
                                    <button class="btn btn-default">Clear Form</button>                                    
                                    <button class="btn btn-primary pull-right">Submit</button>
                                </div>
                            </div>
                            </form>
                            
                        </div>
                    </div>                    
                    
                </div>
                <!-- END PAGE CONTENT WRAPPER -->  
                @endsection