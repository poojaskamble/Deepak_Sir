<?php include("stylesheet.php"); ?>
<body>
	<!-- header -->
	<?php include('header.php');?>
	<!-- //header -->
	<!-- services -->
	<div class="banner-bottom">
		<div class="container">
			<div class="short_w3ls">
				<div class="col-lg-3 col-md-6 col-sm-3 col-xs-12">
                    <ul class="nav nav-pills nav-stacked">
						<li class="payment_menu active"><a data-toggle="pill" href="#OrderSummary">Order Summary</a></li>
                        <li class="payment_menu"><a data-toggle="pill" href="#BillingAddress">Billing Address</a></li>
                        <li class="payment_menu"><a data-toggle="pill" href="#PaymentOption">Payment Options</a></li>
						<li class="payment_menu"><a href="order-confirmation.php">Order Confirmation</a></li>
                    </ul>
				</div>
				<div class="col-lg-9 col-md-6 col-sm-9 col-xs-12">
                    <div class="tab-content">
                        <div id="OrderSummary" class="tab-pane fade in active">
                            <form>
								<h4 class="form-header">Order Summary</h4>
								<div class="col-lg-12 form-background">
									<div class="col-lg-12 cart_details">
										<div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">
                                            <img src="images/g1.jpg" class="img-responsive img-style">
                                        </div>
                                        <div class="col-lg-10 col-md-6 col-sm-6 col-xs-12">
                                            <h4 style="text-transform:uppercase;">Coated Endotracheal Tube Market</h4><br/>
                                            <div>
                                                <p>Quantity : <strong>2</strong></p>
                                                <p>It was popularised in the 1960s with the release of and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>				
                                            </div><br/>
											<div>
                                                 <h4 class="price"><i class="fa fa-dollar"></i> 289</h4>
												<div class="remove_btn pull-right" data-toggle="tooltip" title="Remove"><i class="fa fa-trash-o"></i></div>
                                            </div>
                                        </div>
                                        
									</div>
									<div class="col-lg-12 cart_details">
										<div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">
                                            <img src="images/g1.jpg" class="img-responsive img-style">
                                        </div>
                                        <div class="col-lg-10 col-md-6 col-sm-6 col-xs-12">
                                            <h4 style="text-transform:uppercase;">Coated Endotracheal Tube Market</h4><br/>
                                            <div>
                                                <p>Quantity : <strong>2</strong></p>
                                                <p>It was popularised in the 1960s with the release of and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>				
                                            </div><br/>
											<div>
                                                 <h4 class="price"><i class="fa fa-dollar"></i> 289</h4>
												<div class="remove_btn pull-right" data-toggle="tooltip" title="Remove"><i class="fa fa-trash-o"></i></div>
                                            </div>
                                        </div>
                                        
									</div>
									<div class="col-lg-12 cart_details">
										<div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">
                                            <img src="images/g1.jpg" class="img-responsive img-style">
                                        </div>
                                        <div class="col-lg-10 col-md-6 col-sm-6 col-xs-12">
                                            <h4 style="text-transform:uppercase;">Coated Endotracheal Tube Market</h4><br/>
                                            <div>
                                                <p>Quantity : <strong>2</strong></p>
                                                <p>It was popularised in the 1960s with the release of and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>				
                                            </div><br/>
											<div>
                                                <h4 class="price"><i class="fa fa-dollar"></i> 289</h4>
												<div class="remove_btn pull-right" data-toggle="tooltip" title="Remove"><i class="fa fa-trash-o"></i></div>
                                            </div>
                                        </div>
                                        
									</div>
									<div class="col-lg-12 pull-right">
										<h3 class="pull-right">TOTAL : $1520</h3> 
									</div>
								</div>
								<div class="col-lg-12 set-padding">
									<button class="btn btn-primary primaryBtn pull-right"> PROCEED</button>
								</div>
							</form>
                        </div>
                        <div id="BillingAddress" class="tab-pane fade">
                            <form>
								<h4 class="form-header">Billing Address</h4>
								<div class="col-lg-12 form-background">
                                    <div class="col-lg-6 col-md-6 col-xs-12">
                                        <label class="control-label">Name</label>
                                        <input type="text" name="name" id="name" class="form-control text_input" required/>
                                    </div>
									<div class="col-lg-6 col-md-6 col-xs-12">
                                        <label class="control-label">Phone Number</label>
                                        <input type="text" name="phno" id="phno" class="form-control text_input" required/>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-xs-12">
                                        <label class="control-label">Pincode</label>
                                        <input type="text" name="pincode" id="pincode" class="form-control text_input" required/>
                                    </div>
									<div class="col-lg-6 col-md-6 col-xs-12">
                                        <label class="control-label">Locality</label>
                                        <input type="text" name="locality" id="locality" class="form-control text_input" required/>
                                    </div>
									<div class="col-lg-12 col-md-12 col-xs-12">
                                        <label class="control-label">Address</label>
                                        <textarea class="form-control textBox" name="address" id="address"></textarea>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-xs-12">
                                        <label class="control-label">District/City/Town</label>
                                        <input type="text" name="pincode" id="pincode" class="form-control text_input" required/>
                                    </div>
									<div class="col-lg-6 col-md-6 col-xs-12">
                                        <label class="control-label">State</label>
                                        <input type="text" name="locality" id="locality" class="form-control text_input" required/>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-xs-12">
                                        <label class="control-label">Landmark (Optional)</label>
                                        <input type="text" name="pincode" id="pincode" class="form-control text_input" required/>
                                    </div>
									<div class="col-lg-6 col-md-6 col-xs-12">
                                        <label class="control-label">Alternate Contact Number</label>
                                        <input type="text" name="locality" id="locality" class="form-control text_input" required/>
                                    </div>
									<div class="col-lg-12 form-button">
                                        <button class="btn btn-primary pull-right primaryBtn"> Add Address</button>
                                    </div>
								</div>
							</form>
                        </div>
                        <div id="PaymentOption" class="tab-pane fade">
                            <form>
								<h4 class="form-header">Payment Option</h4>
								<div class="col-lg-12 form-background">
									<div class="row row-center">
                                        <div class="col-lg-4 col-center">
                                            <button class="btn btn-info primaryBtn" style="width:100%">ONLINE PAYMENT</button>
                                        </div>
                                        <div class="col-lg-4 col-center">
                                            <button class="btn btn-info primaryBtn" style="width:100%">PAYPAL</button>
                                        </div>
									</div>	
								</div>
							</form>
                        </div>
                    </div>
				</div>
			</div>
		</div>
	</div>
<!-- //services -->	

	<!-- footer -->
	<?php include('footer.php'); ?>
	<!-- //footer -->
	<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!-- js -->
	<?php include('scripts.php');?>
	<script>
        jQuery(document).ready(function(){
            jQuery('[data-toggle="tooltip"]').tooltip(); 
        });
    </script>
</body>

</html>