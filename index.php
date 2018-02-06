<?php include("stylesheet.php"); ?>
<style>
	label {
		-webkit-transition: .2s ease-out;
		transition: .2s ease-out;
		color: #757575;
		position: absolute;
		top: 1.2rem;
		left: 0;
		font-size: 12px;
		cursor: text;
		margin: 0 15px;
	}
	label.active {
		-webkit-transform: translateY(-100%);
		-ms-transform: translateY(-100%);
		transform: translateY(-100%);
		font-size: 10px;
	}
	option{
		padding:15px 20px;
	}
</style>
<body>
	<!-- header -->
	<?php include('header.php');?>
	<!-- banner -->
	<!--<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators 
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1" class=""></li>
			<li data-target="#myCarousel" data-slide-to="2" class=""></li>
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<div class="container">
					<div class="carousel-caption">
						<h3>Graphic Work <span>Designing</span></h3>
						<p>Any successful career starts with good education. Together with us you will have deeper knowledge of the subjects</p>
						<div class="agileits-button top_ban_agile">
							<a class="btn btn-primary btn-lg" href="#" data-toggle="modal" data-target="#myModal">Read More »</a>
						</div>
					</div>
				</div>
			</div>
			<div class="item item2">
				<div class="container">
					<div class="carousel-caption">
						<h3>Financial Analyst <span>Course.</span></h3>
						<p>Any successful career starts with good education. Together with us you will have deeper knowledge of the subjects</p>
						<div class="agileits-button top_ban_agile">
							<a class="btn btn-primary btn-lg" href="#" data-toggle="modal" data-target="#myModal">Read More »</a>
						</div>
					</div>
				</div>
			</div>
			<div class="item item3">
				<div class="container">
					<div class="carousel-caption">
						<h3>Digital Marketing  <span>Course.</span></h3>
						<p>Any successful career starts with good education. Together with us you will have deeper knowledge of the subjects</p>
						<div class="agileits-button top_ban_agile">
							<a class="btn btn-primary btn-lg" href="#" data-toggle="modal" data-target="#myModal">Read More »</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="fa fa-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="fa fa-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
		<!-- The Modal 
	</div>-->
	<!--//banner -->
		<!-- about -->
	<div class="agile-about w3ls-section text-center" id="about">
		<div class="container">
			<div class="row">
                <div class="col-lg-12">
                    <!--<div>
                        <h3 class="heading-agileinfo">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h3>
                    </div>-->
                    <div class="agileits-about-grid">
                        <div class="col-lg-12">
                            <ul class="nav nav-pills">
                              <li class="active"><a href="#">LIGHTWEIGHT MATERIALS</a></li>
                              <li><a href="#">THERAPEUTIC</a></li>
                              <li><a href="#">CANCER DRUGS</a></li>
                              <li><a href="#">CABLE</a></li>
                              <li><a href="#">3D TECHNOLOGY</a></li>
                              <li><a href="#">ELECTRIC MOTOR</a></li>
                              <li><a href="#">HEALTHCARE IT</a></li>
                            </ul>
							<div class="container">
                                <div class="row">
                                    <div class="center-txt">
                                        <div class="col-lg-3  no-padding">
											<div id="searchDiv"></div>
                                            <select class="form-control searchBox" name="category" id="category">
                                                <option value="0"> SELECT CATEGORY</option>
                                                <option value="1"> LIGHTWEIGHT MATERIALS</option>
                                                <option value="2"> THERAPEUTIC</option>
                                                <option value="3"> CANCER DRUGS</option>
                                                <option value="4"> CABLE</option>
                                                <option value="5"> 3D TECHNOLOGY</option>
                                                <option value="6"> ELECTRIC MOTOR</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-5">
											<label for="search_details" id="serachLabel">SEARCH HERE</label>
                                            <input type="text" id="search_details" class="form-control textBox set-margin" aria-describedby="basic-addon2"/>
											
                                        </div>
                                    </div>
                                </div>
                            </div>
						</div>
                    </div>
                    <div class="col-lg-12 details">
                        <!--<div class="col-lg-4">
                            <p> It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        </div>-->
                        <div class="col-lg-12 row-center">
                            <button class="btn btn-warning primaryBtn col-center"> SEARCH</button>
                        </div>
                        <!--<div class="col-lg-4">
                            <p> It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        </div>-->
                    </div>
				</div>
			</div>
		</div>
	</div>
	<!-- //about -->
	<!-- about-bottom -->
	<!-- //about-bottom -->
<!-- stats -->
	<div class="stats">
		<div class="container">
		<h3 class="heading-agileinfo">We are on your side.<strong> Always. </strong><br/>With 25 insurers and 100+ products to choose from, Coverfox works actively to find a </h3>
			<div class="col-md-12 w3layouts_stats_left w3_counter_grid">
				With 25 insurers and 100+ products to choose from, Coverfox works actively to find a plan that is ideal for you—basically, the best one, the right one. From providing you with all the right information to offering unbiased comparisons, we do it all. Hey, you don't even need to engage with the insurer yourself.
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //stats -->
	<!-- services -->
<div class="services">
		<h3 class="heading-agileinfo">What we offer<span>When Climbing The Carrer Ladder </span></h3>
	<div class="container">
		<div class="services-top-grids">
			<div class="col-md-4">
            	<img src="images/g11.jpg" width="100%" height="150px" alt="test">
				<div class="grid1">
					<h4>Undergraduate Study</h4>
					<p>Lorem ipsum dolor sit amet, Sed ut perspiciatis unde omnis iste natus error sit voluptatem </p>
				</div>
			</div>
			<div class="col-md-4">
            	<img src="images/g11.jpg" width="100%" height="150px" alt="test">
				<div class="grid1">
					<h4>Professional Study</h4>
					<p>Lorem ipsum dolor sit amet, Sed ut perspiciatis unde omnis iste natus error sit voluptatem </p>
				</div>
			</div>
			<div class="col-md-4">
            	<img src="images/g11.jpg" width="100%" height="150px" alt="test">
				<div class="grid1">
					<h4>Programs</h4>
					<p>Lorem ipsum dolor sit amet, Sed ut perspiciatis unde omnis iste natus error sit voluptatem </p>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="services-bottom-grids">
			<div class="col-md-4">
            	<img src="images/g11.jpg" width="100%" height="150px" alt="test">
				<div class="grid1">
					<h4>Online Learning</h4>
					<p>Lorem ipsum dolor sit amet, Sed ut perspiciatis unde omnis iste natus error sit voluptatem </p>
				</div>
			</div>
			<div class="col-md-4">
            	<img src="images/g11.jpg" width="100%" height="150px" alt="test">
				<div class="grid1">
					<h4>Summer Session</h4>
					<p>Lorem ipsum dolor sit amet, Sed ut perspiciatis unde omnis iste natus error sit voluptatem </p>
				</div>
			</div>
			<div class="col-md-4">
            	<img src="images/g11.jpg" width="100%" height="150px" alt="test">
				<div class="grid1">
					<h4>Global Education</h4>
					<p>Lorem ipsum dolor sit amet, Sed ut perspiciatis unde omnis iste natus error sit voluptatem </p>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- //services -->
<!-- news -->
	<div class="news">
		<div class="container">  
				<h2 class="heading-agileinfo">News & Events<span>Exclusive Holidays for Any Travelers</span></h2>
			<div class="news-agileinfo"> 
				<div class="news-w3row"> 
					<div class="wthree-news-grids">
						<div class="col-md-5 col-xs-5">
							<img src="images/g7.jpg" class="img-responsive img-style" alt=""/>
						</div>
						<div class="col-md-7 col-xs-7 datew3-agileits-info ">
							<h5><a href="#" data-toggle="modal" data-target="#myModal">Sit amet justo vitae</a></h5>
							<h6>3/01/2018</h6>
							<p>Proin euismod vehicula vestibulum. Fusce ullamcorper aliquet dolor id egestas. Nulla leo purus, facilisis non cursus ut, egestas sed ipsum.Fusce ullamcorper aliquet dolor id egestas. Nulla leo purus, facilisis non cursus ut, egestas sed ipsum.Fusce ullamcorper aliquet dolor id egestas. Nulla leo purus, facilisis non cursus ut, egestas sed ipsum.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					
					
					<div class="wthree-news-grids news-grids-mdl">
						<div class="col-md-5 col-xs-5 datew3-agileits-fltrt">
							<img src="images/g10.jpg" class="img-responsive img-style" alt=""/>
						</div>
						<div class="col-md-7 col-xs-7 datew3-agileits-info datew3-agileits-info-fltlft">
							<h5><a href="#" data-toggle="modal" data-target="#myModal">Fusce scelerisque</a></h5>
							<h6>5/01/2018</h6>
							<p>Proin euismod vehicula vestibulum. Fusce ullamcorper aliquet dolor id egestas. Nulla leo purus, facilisis non cursus ut, egestas sed ipsum.Fusce ullamcorper aliquet dolor id egestas. Nulla leo purus, facilisis non cursus ut, egestas sed ipsum.Fusce ullamcorper aliquet dolor id egestas. Nulla leo purus, facilisis non cursus ut, egestas sed ipsum.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="clearfix"> </div>
				</div>
				
			</div>
		</div>
	</div>
	<!-- //news -->

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
	<script>
            jQuery("#category").dropdown();
       
	</script>
</body>

</html>