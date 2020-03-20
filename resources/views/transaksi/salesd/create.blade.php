@extends('layout/main')

@section('title', 'product')

@section('container')
   
 <!-- START RESPONSIVE TABLES -->
 <div class="row">
                        <div class="col-md-15 col-sm-15 col-xs-15">
                            <!-- <div class="panel panel-default"> -->
                                <!-- <div class="panel-heading"> -->
                                    <h3 class="panel-title">Point of Sales</h3>
                                    <br>
                                    <br>
                                <!-- </div> -->
                                
 <div class="x_content">
                    <form class="form-horizontal form-label-left" action="#" method="POST">

                      <div class="item form-group ">
                        <label class="control-label col-md-2 col-sm-2 col-xs-2" for="categoriesid"> Categories Id<span class="required">*</span>
                        </label>
                        <div class="col-md-3 col-sm-3 col-xs-3">
                          <input id="categoriesid" class="form-control col-md-3 col-xs-3" data-validate-length-range="6" 
                          data-validate-words="2" name="categoriesid" readonly required="required" 
                          type="text">
                        </div>

                        <label class="control-label col-md-3 col-sm-3 col-xs-3" for="categoriesname"> Categories Name <span class="required">*</span>
                        </label>
                        <div class="col-md-3 col-sm-3 col-xs-3">
                           <select name="categoriesid" class="form-control" id="categoriesid">
                                           @foreach($categories as $c)
                                           <option value="{{ $c -> category_id }}">{{ $c -> category_name }}</option>
                                           @endforeach                           
                          </select>
                        </div>
                      </div>
                      <form>
                      <div class="panel panel-default"> 
                                <div class="panel-heading">
                        <div class="form-group">
                            <label for="exampleInputProductID"></label>
                            <input type="text" class="form-control" id="exampleInputProductID" placeholder="Enter Your Product ID">
                        </div>
                        </div>
                     </form>
                    <!-- <div class="form-group mb-3">
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
                    </form> -->
                    
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

                                    <div class="row justify-content-end">
    			<div class="col-lg-4 mt-5 cart-wrap ftco-animate">
    				<div class="cart-total mb-3">
    					<h3>Choose Your Payment</h3>
                         <!-- Cash on delivery -->
                         <div class="custom-control custom-checkbox mr-sm-2">
                                        <input type="radio" name="pilihan" class="custom-control-input" id="cod" checked>
                                        <label class="custom-control-label" for="cod">Cash</label>
                                    </div>
                                    <!-- Paypal -->
                                    <div class="custom-control custom-checkbox mr-sm-2">
                                        <input type="radio" name="pilihan" class="custom-control-input" id="paypal">
                                        <label class="custom-control-label" for="paypal">Paypal<img class="ml-15" src="asset/amado/img/core-img/paypal.png" alt=""></label>
                              
                                        </div></label>
    					<!-- <p>Enter your coupon code if you have one</p> -->
  						<form action="#" class="info">
	              <div class="form-group">
	              	
	              </div>
	            </form>
    				</div>
    				<!-- <p><a href="checkout.html" class="btn btn-primary py-3 px-4">Apply Coupon</a></p> -->
    			</div>
    			<div class="col-lg-4 mt-5 cart-wrap ftco-animate">
                <label class="control-label col-md-5 col-sm-5 col-xs-5" for="categoriesname">
                                  <div class="payment-method">
                                  <h3>Coupon Code</h3>
                                    
    				</div>
    				<!-- <p><a href="checkout.html" class="btn btn-primary py-3 px-4">Estimate</a></p> -->
    			</div>
    			<div class="col-lg-4 mt-5 cart-wrap ftco-animate">
    				<div class="cart-total mb-3">
                    <table class="table table-hover">
                    <h3>Charts Total</h3>
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
    		</div>
			</div>

                                
                            </div>
                                <!-- <div class="x_content">
                                    <form class="form-horizontal form-label-left" action="#" method="POST">
                                    <div class="col-lg-4 mt-5 cart-wrap ftco-animate"> -->
                                    <!-- <th>Metode Pembayaran</th> -->
    				                
                                
                                        
                                                            
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                    </form>
                    <!-- END RESPONSIVE TABLES -->
                    
                <!-- END PAGE CONTENT WRAPPER -->                                    
                       
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->    
                                    
        
   
@endsection