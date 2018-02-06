<?php include("stylesheet.php"); ?>
<body>
	<!-- header -->
	<?php include('header.php');?>
	<!-- //header -->
	<!-- services -->
	<div class="banner-bottom">
		<div class="container-fluid">
			<div class="w3l_stats_bottom_grid_left">
				<div class="col-lg-12 row-center">
                    <div class="col-md-8 col-xs-12 col-center">
						<div class="shadow">
                            <div class="card-body">
								<div class="success-sign"><i class="fa fa-check fa-3x"></i></div>
                                <h3 class="text-center">Thank You!</h3> <br/>
                                <p class="text-center">We will reach to you with your order <strong>#OrderNo2536987</strong> soon.</p>
                                <br/>
								<div class="text-center">
                                    <a href="index.php">
                                    <button class="btn btn-warning primaryBtn"><i class="fa fa-home"></i> HOME</button>
                                    </a>
                                </div>					
							</div>
                        </div>
                    </div>
					<br/>
					<div class="col-md-8 col-xs-12 col-center">
                        <div class="shadow">
							<div class="card-body">
								<div class="danger-sign"><i class="fa fa-remove fa-3x"></i></div>
                                <h3 class="text-center">Oops!</h3> <br/>
                                <p class="text-center">The order you are looking for are not successfully placed due to payment not done. Please try again.</p>
                                <br/>
                                <div class="text-center"><a href="index.php"><button class="btn btn-warning primaryBtn"><i class="fa fa-home"></i> HOME</button></a></div>
                        	</div>
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
<!-- modal -->
	<div class="modal about-modal fade" id="myModal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header"> 
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
					<h4 class="modal-title">Instruction</h4>
				</div> 
				<div class="modal-body">
					<div class="agileits-w3layouts-info">
						<img src="images/g12.jpg" class="img-responsive" alt="" />
						<p>Duis venenatis, turpis eu bibendum porttitor, sapien quam ultricies tellus, ac rhoncus risus odio eget nunc. Pellentesque ac fermentum diam. Integer eu facilisis nunc, a iaculis felis. Pellentesque pellentesque tempor enim, in dapibus turpis porttitor quis. Suspendisse ultrices hendrerit massa. Nam id metus id tellus ultrices ullamcorper.  Cras tempor massa luctus, varius lacus sit amet, blandit lorem. Duis auctor in tortor sed tristique. Proin sed finibus sem</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //modal -->

	<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!-- js -->
	<?php include('scripts.php');?>
</body>

</html>