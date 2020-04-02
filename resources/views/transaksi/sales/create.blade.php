@extends('layout/main')

@section('container')
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
                    <div class="row">
                        <div class="col-md-12">
                            
                            <form class="form-horizontal" action="salesstore" method="post">
                            @csrf
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Input Data sales</strong></h3>
                                    <ul class="panel-controls">
                                        <li><a href="#" class="panel-remove"><span class="fa fa-times"></span></a></li>
                                    </ul>
                                </div>
                                <div class="panel-body">                                                                        
                                    
                                    <div class="row">
                                        
                                        <div class="col-md-6">
                                            
                                        
                                        <div class="form-group">
                                                <label class="col-md-3 control-label">Customer Name</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                    <select name="customer_id" class="form-control" id="customer_id">
                                           @foreach($customer as $cus)
                                           @if($cus->status == 1)
                                           <option value="{{$cus->customer_id}}">{{$cus->first_name}}</option>
                                            @endif
                                           @endforeach                           
                          </select>
                                                    <!-- <select class="form-control" id="customer_id" required="" name="customer_id">
                                                        <option selected="">Pilih Customer</option>
                                                        @foreach($customer as $cus)
                                                        <option value="{{ $cus->customer_id }}">{{$cus->first_name}}</option>
                                                        @endforeach
                                                        </select> -->
                                                    </div>
                                                    </div>                                            
                                                  
                                                </div>
                                            
                                            
                                        <div class="form-group">
                                       
                                                <label class="col-md-3 control-label">User Id</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                    <select name="user_id" class="form-control" id="user_id">
                                           @foreach($user as $u)
                                           @if($u->status == 1)
                                           <option value="{{$u->user_id}}">{{$u->first_name}}</option>
                                            @endif
                                           @endforeach                           
                          </select>
                                                    <!-- <select class="form-control" id="user_id" required="" name="user_id">
                                                        <option selected="">Pilih User</option>
                                                        @foreach($user as $u)
                                                        <option value="{{ $u->user_id }}">{{$u->first_name}}</option>
                                                        @endforeach
                                                        </select> -->
                                                    </div>                                            
                                                  
                                                </div>
                                            </div>
                                            
                                        <div class="form-group">
                                                <label class="col-md-3 control-label">Nota Date</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="date" class="form-control" id="nota_date" name="nota_date" />
                                                    </div>                                            
                                                  
                                                </div>
                                            </div>
                                        <div class="form-group">
                                                <label class="col-md-3 control-label">Total Payment</label>
                                                <div class="col-md-9">                                            
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                        <input type="text" class="form-control" id="total_payment" name="total_payment" />
                                                    </div>                                            
                                                  
                                                </div>
                                            </div>
                                     
                                            <div class="panel-footer">
                                                                   
                                    <button class="btn btn-primary pull-right">Submit</button>
                                                 
                                </div>
                            </div>
                            </form>
                            </div>
                        </div>
                    </div>                    
                    
                </div>
                <!-- END PAGE CONTENT WRAPPER -->  
                @endsection