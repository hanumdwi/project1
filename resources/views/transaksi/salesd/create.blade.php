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
                            <!-- <input type="text" class="form-control" id="exampleInputProductID" placeholder="Enter Your Product ID"> -->
                            <input type="text" class="form-control" id="search" name="search" value="" placeholder="Enter Your Product Name!" onkeyup="getModal(event)">

                                <!-- Modal -->
                                <div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>
                                        <div class="modal-body">

                                        <font size="3"> <table class="table table-striped table-bordered mydatatable"></font>
                                        <thead class="thead-dark">
                                            <tr>
                                            <th scope="col">#</th>
                                                    <th>Product Name</th>
                                                    <th>Product Price </th>
                                                    <th>Product Stock</th>
                                                    
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach($product as $p)
                                            <tr>
                                            <th scope="row"><input type="checkbox" id="{{$p->product_id }}" ></th>
                                            <td>{{ $p->product_name}}</td>
                                            <td>{{ $p->product_price}}</td>
                                            <td>{{ $p->product_stock}}</td>
                                            </tr>
                                            @endforeach
                                            </tbody>
                                            </table>

                                        </div> <!-- Tutup Modal Body -->
                                        <div class="modal-footer">
                                        <!-- <button type="button" class="btn btn-success" id="save" > -->
                                        <!-- <svg aria-hidden="true" width="2px" height="2px" focusable="false" data-prefix="far" class=""></svg> Add To Cart</button> -->
                                        <font size="6"><button type="button" class="badge badge-info" data-dismiss="modal">Add</button></font>
                                        <font size="6"><button type="button" class="badge badge-danger" data-dismiss="modal">Back</button></font>
                                        
                                        </div>
                                    </div>
                                    </div>
                                </div>
                        </div>
                        </div>
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
                <!-- <div class="col-md-6"> -->
                <div class="panel panel-default">
                                <div class="panel-body">
                                    <h3>Code Cupon</h3>
                                    <form class="form-horizontal" role="form">
                                    <div class="form-group">
                                        <div class="col-md-20">
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                                <input class="form-control" placeholder=""/>                                                
                                            </div>                                                                                        
                                        </div>                                        
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <div class="btn-group pull-left">
                                                <!-- <button class="btn btn-primary"><span class="fa fa-camera"></span></button>
                                                <button class="btn btn-primary"><span class="fa fa-map-marker"></span></button>
                                                <button class="btn btn-primary"><span class="fa fa-calendar"></span></button> -->
                                            </div>
                                            <div class="pull-right">
                                                <button class="btn btn-info"><span class="fa fa-share"></span>Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                    </form>
                                </div>

                                
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
                                    
<script>
        function getModal(event){
        if(event.keyCode==13){
            $("#tambahModal").modal();
            myFunction();
        }
    }

    function myFunction() {
     document.getElementById("search").value='';
    }

</script>
@endsection