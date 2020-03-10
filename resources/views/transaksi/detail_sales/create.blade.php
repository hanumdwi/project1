@extends('layout/main')

@section('container')

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Vegefoods - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="asset/vegfoods/https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="asset/vegfoods/https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="asset/vegfoods/https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="asset/vegfoods/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="asset/vegfoods/css/animate.css">
    
    <link rel="stylesheet" href="asset/vegfoods/css/owl.carousel.min.css">
    <link rel="stylesheet" href="asset/vegfoods/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="asset/vegfoods/css/magnific-popup.css">

    <link rel="stylesheet" href="asset/vegfoods/css/aos.css">

    <link rel="stylesheet" href="asset/vegfoods/css/ionicons.min.css">

    <link rel="stylesheet" href="asset/vegfoods/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="asset/vegfoods/css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="asset/vegfoods/css/flaticon.css">
    <link rel="stylesheet" href="asset/vegfoods/css/icomoon.css">
    <link rel="stylesheet" href="asset/vegfoods/css/style.css">
  </head>
  <body>

  <div class="x_content">
                    <form class="form-horizontal form-label-left" action="#" method="POST">

                      <div class="item form-group ">
                        <label class="control-label col-md-2 col-sm-1 col-xs-1" for="categoriesid"> Categories Id <span class="required">*</span>
                        </label>
                        <div class="col-md-5 col-sm-5 col-xs-5">
                          <input id="categoriesid" class="form-control col-md-5 col-xs-5" data-validate-length-range="6" 
                          data-validate-words="2" name="categoriesid" readonly required="required" 
                          type="text">
                        </div>
					   </div>
					   
						<div class="item form-group ">
                        <label class="control-label col-md-2 col-sm-1 col-xs-1" for="categoriesname"> Categories Name <span class="required">*</span>
                        </label>
                        <div class="col-md-5 col-sm-5 col-xs-5">
						<select class="form-control select">
                                                <option>Categories Name 1</option>
                                                <option>Categories Name 2</option>
                                                <option>Categories Name 3</option>
                                                <option>Categories Name 4</option>
                                                <option>Categories Name 5</option>
                                            </select>
                        </div>
                      </div>  

					  <div class="item form-group ">
                        <label class="control-label col-md-2 col-sm-1 col-xs-1" for="categoriesname"> Product Name <span class="required">*</span>
                        </label>
						<div class="col-md-5 col-sm-5 col-xs-5">
                          <input id="categoriesid" class="form-control col-md-5 col-xs-5" data-validate-length-range="6" 
                          data-validate-words="2" name="categoriesid"
                          type="text">
                    </form>
                  </div>

    <section class="ftco-section ftco-cart">
			<div class="container">
				<div class="row">
    			<div class="col-md-12 ftco-animate">
    				<div class="cart-list">
	    				<table class="table">
						    <thead class="thead-dark">
						      <tr class="text-center">
						        <th>&nbsp;</th>
						       
						        <th>Product name</th>
						        <th>Price (Rp)</th>
						        <th width="20px">Quantity</th>
						        <th>Total</th>
						      </tr>
						    </thead>
						    <tbody>
						      <tr class="text-center">
						        <td class="product-remove"><a href="#"><span class="ion-ios-close"></span></a></td>
						        
						     
						        <td class="product-name">
						        	<h3>Bell Pepper</h3>
						        	<p>Far far away, behind the word mountains, far from the countries</p>
						        </td>
						        
						        <td class="price">40.900</td>
						        
								<td class="qty">
                                            <div class="qty-btn d-flex">
                                                
                                                <div class="quantity">
                                                    <span class="qty-minus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) effect.value--;return false;"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                                    <input type="number" class="qty-text" id="qty" step="1" min="1" max="300" name="quantity" value="1">
                                                    <span class="qty-plus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                                </div>
                                            </div>
                                        </td>
						        
						        <td class="total">40.900</td>
						      </tr><!-- END TR-->

						      <tr class="text-center">
						        <td class="product-remove"><a href="#"><span class="ion-ios-close"></span></a></td>
						        						        
						        <td class="product-name">
						        	<h3>Bayam</h3>
						        	<p>Far far away, behind the word mountains, far from the countries</p>
						        </td>
						        
						        <td class="price">15.000</td>
						    
						        <td class="qty">
                                            <div class="qty-btn d-flex">
                                                
                                                <div class="quantity">
                                                    <span class="qty-minus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) effect.value--;return false;"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                                    <input type="number" class="qty-text" id="qty" step="1" min="1" max="300" name="quantity" value="1">
                                                    <span class="qty-plus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                                </div>
												
                                            </div>
                                        </td>
						        
						        <td class="total">15.000</td>
						      </tr><!-- END TR-->
						    </tbody>
						  </table>
					  </div>
    			</div>
    		</div>
    		<div class="row justify-content-end">
    			<div class="col-lg-4 mt-5 cart-wrap ftco-animate">
    				<div class="cart-total mb-3">
    					<h3>Coupon Code</h3>
    					<p>Enter your coupon code if you have one</p>
  						<form action="#" class="info">
	              <div class="form-group">
	              	<label for="">Coupon code</label>
	                <input type="text" class="form-control text-left px-3" placeholder="">
	              </div>
	            </form>
    				</div>
    				<p><a href="asset/vegfoods/checkout.html" class="btn btn-primary py-3 px-4">Apply Coupon</a></p>
    			</div>
    			<div class="col-lg-4 mt-5 cart-wrap ftco-animate">
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
    
    			</div>
    			<div class="col-lg-4 mt-5 cart-wrap ftco-animate">
    				<div class="cart-total mb-3">
    					<h3>Cart Totals</h3>
    					<p class="d-flex">
    						<span>Subtotal</span>
    						<span>20.600</span>
    					</p>
    					<p class="d-flex">
    						<span>PPN</span>
    						<span>10%</span>
    					</p>
    					<p class="d-flex">
    						<span>Discount</span>
    						<span>3.000</span>
    					</p>
    					<hr>
    					<p class="d-flex total-price">
    						<span>Total</span>
    						<span>170.600</span>
    					</p>
    				</div>
    				<p><a href="asset/vegfoods/checkout.html" class="btn btn-primary py-3 px-4">Proceed to Checkout</a></p>
    			</div>
    		</div>
			</div>
		</section>

		
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
						  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						</p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="asset/vegfoods/js/jquery.min.js"></script>
  <script src="asset/vegfoods/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="asset/vegfoods/js/popper.min.js"></script>
  <script src="asset/vegfoods/js/bootstrap.min.js"></script>
  <script src="asset/vegfoods/js/jquery.easing.1.3.js"></script>
  <script src="asset/vegfoods/js/jquery.waypoints.min.js"></script>
  <script src="asset/vegfoods/js/jquery.stellar.min.js"></script>
  <script src="asset/vegfoods/js/owl.carousel.min.js"></script>
  <script src="asset/vegfoods/js/jquery.magnific-popup.min.js"></script>
  <script src="asset/vegfoods/js/aos.js"></script>
  <script src="asset/vegfoods/js/jquery.animateNumber.min.js"></script>
  <script src="asset/vegfoods/js/bootstrap-datepicker.js"></script>
  <script src="asset/vegfoods/js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="asset/vegfoods/js/google-map.js"></script>
  <script src="asset/vegfoods/js/main.js"></script>

  <script>
		$(document).ready(function(){

		var quantitiy=0;
		   $('.quantity-right-plus').click(function(e){
		        
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());
		        
		        // If is not undefined
		            
		            $('#quantity').val(quantity + 1);

		          
		            // Increment
		        
		    });

		     $('.quantity-left-minus').click(function(e){
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());
		        
		        // If is not undefined
		      
		            // Increment
		            if(quantity>0){
		            $('#quantity').val(quantity - 1);
		            }
		    });
		    
		});
	</script>

  </body>
</html>
@endsection