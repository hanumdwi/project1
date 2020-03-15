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

                    <div class="form-group mb-3">
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
                    
                    <button type="button" class="btn btn-info active">Submit</button>                   
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
                                                <td>Chitos</td>
                                                <td>Rp. 10.000</td>
                                                <td><div class="quantity">
                                                    <span class="qty-minus" onclick="var effect = document.getElementById('qty2'); var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) effect.value--;return false;"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                                    <input type="number" class="qty-text" id="qty2" step="1" min="1" max="300" name="quantity" value="1">
                                                    <span class="qty-plus" onclick="var effect = document.getElementById('qty2'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                                </div></td>
                                                <td>Rp. 10.000</td></tr>
                                            <tr>
                                            <td><button type="button" class="btn btn-danger">
                                            <i class="fa fa-times"></li>
                                                        </button></td>
                                                <td>Piattos</td>
                                                <td>Rp. 5.000</td>
                                                <td><div class="quantity">
                                                    <span class="qty-minus" onclick="var effect = document.getElementById('qty2'); var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) effect.value--;return false;"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                                    <input type="number" class="qty-text" id="qty2" step="1" min="1" max="300" name="quantity" value="1">
                                                    <span class="qty-plus" onclick="var effect = document.getElementById('qty2'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                                </div></td>
                                                <td>Rp. 5.000</td></tr>
                                            <tr>
                                            <td><button type="button" class="btn btn-danger">
                                            <i class="fa fa-times"></li>
                                                        </button></td>
                                                <td>Biskuit Regal</td>
                                                <td>Rp. 20.000</td>
                                                <td><div class="quantity">
                                                    <span class="qty-minus" onclick="var effect = document.getElementById('qty2'); var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) effect.value--;return false;"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                                    <input type="number" class="qty-text" id="qty2" step="1" min="1" max="300" name="quantity" value="1">
                                                    <span class="qty-plus" onclick="var effect = document.getElementById('qty2'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                                </div></td>
                                                <td>Rp. 20.000</td></tr>
                                            </tbody>
                                        </table>
                                    </div>                                
                                
                                    <div class="col-lg-4 mt-5 cart-wrap ftco-animate">
                                    <!-- <th>Metode Pembayaran</th> -->
    				                <div class="payment-method">
                                    <!-- Cash on delivery -->
                                    <div class="custom-control custom-checkbox mr-sm-2">
                                        <input type="radio" name="pilihan" class="custom-control-input" id="cod" checked>
                                        <label class="custom-control-label" for="cod">Cash</label>
                                    </div>
                                    <!-- Paypal -->
                                    <div class="custom-control custom-checkbox mr-sm-2">
                                        <input type="radio" name="pilihan" class="custom-control-input" id="paypal">
                                        <label class="custom-control-label" for="paypal">Paypal<img class="ml-15" src="asset/amado/img/core-img/paypal.png" alt=""></label>
                                    </div>
                                </div>
                                                 
                        <div class="panel panel-default">
                                <div class="panel-heading">
                                </div>
                                <div class="panel-body col-md-2 col-sm-1 col-xs-1">
                                    <table class="table table-hover">
                                    <!-- <th>Carts Total</th> -->
                                        <thead>
                                        
                                        </thead>
                                        <tbody>
                                            <tr>
                                                
                                                <th>Subtotal
                                                <td>Rp. 35.000</td>
                                            </tr>
                                            <tr>
                                                
                                                
                                                <th>PPN
                                                <td>10%</td>
                                            </tr>
                                            <tr>
                                                
                                                <th>Total
                                                <td>Rp. 38.500</td>
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