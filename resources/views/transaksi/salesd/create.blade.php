@extends('layout/main')

@section('title', 'product')

@section('container')
   
 <!-- START RESPONSIVE TABLES -->
                <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">

                                <div class="panel-heading">
                                    <h3 class="panel-title">Point of Sales</h3>
                                </div>
                                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Product Id</label>
                        <input class="form-control" type="text" placeholder="" readonly>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Category Name</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Product Name</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    
                    <div class="panel panel-default">
                                <div class="panel-heading">
                                   
                                </div>
                                <div class="panel-body">
                                    <table class="table table-striped">
                                                <tr>
                                                <th>&nbsp;</th>
                                                
                                                    <th>Product Name</th>
                                                    <th>Price</th>
                                                    <th>Quantity</th>
                                                    <th>Total</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>                                            
                                            <tr>
                                            <td><button type="button" class="btn btn-danger">
                                            <i class="fa fa-times"></li>
                                                        </button></td>
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>61</td>
                                                
                                                
                                            </tbody>
                                        </table>
                                    </div>                                
                                
                                                                              
                                
                        
                        <div class="panel panel-default">
                                <div class="panel-heading">
                                </div>
                                <div class="panel-body col-md-2 col-sm-1 col-xs-1">
                                    <table class="table table-hover">
                                    <th>Carts Total</th>
                                        <thead>
                                        
                                        </thead>
                                        <tbody>
                                            <tr>
                                                
                                                <th>Subtotal
                                                <td>Rp. 10.000</td>
                                            </tr>
                                            <tr>
                                                
                                                
                                                <th>PPN
                                                <td>10%</td>
                                            </tr>
                                            <tr>
                                                
                                                <th>Total
                                                <td>Rp. 20.000</td>
                                            </tr>
                    </div>
                    <!-- END RESPONSIVE TABLES -->
                    
                <!-- END PAGE CONTENT WRAPPER -->                                    
                </div>         
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->    
        
   
@endsection