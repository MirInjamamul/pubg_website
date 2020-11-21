<?php 
	session_start();

	require_once("dbcontroller.php");
    $db_handle = new DBController();
    
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Welcome | GoGarena</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

	<!-- Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,700' rel='stylesheet' type='text/css'>

	<!-- Css -->
	<link rel="stylesheet" href="../index_assets/css/nivo-slider.css" type="text/css" />
	<link rel="stylesheet" href="../index_assets/css/owl.carousel.css">
	<link rel="stylesheet" href="../index_assets/css/owl.theme.css">
	<link rel="stylesheet" href="../index_assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../index_assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="../index_assets/css/style.css">
	<link rel="stylesheet" href="../index_assets/css/responsive.css">

	<!-- jS -->
	<script src="../index_assets/js/jquery.min.js" type="text/javascript"></script>
	<script src="../index_assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="../index_assets/js/jquery.nivo.slider.js" type="text/javascript"></script>
	<script src="../index_assets/js/owl.carousel.min.js" type="text/javascript"></script>
	<script src="../index_assets/js/jquery.nicescroll.js"></script>
	<script src="../index_assets/js/jquery.scrollUp.min.js"></script>
	<script src="../index_assets/js/main.js" type="text/javascript"></script>


</head>
<body>


<!-- TOP HEADER Start
    ================================================== -->

	<section id="top">
		<div class="container">
			<div class="row">
				<div class="col-md-7">
					<p class="contact-action"><i class="fa fa-phone-square"></i>IN CASE OF ANY QUESTIONS, CALL THIS NUMBER: <strong>01304389568</strong></p>
				</div>

				<?php 
					if(!(isset($_SESSION['email']))){
				?>
						<div class="col-md-3 clearfix">
							<ul class="login-cart">
								<li>
									<a href="login.php">
										<!--	<i class="fa fa-user"></i> -->
										<img src="../index_assets/images/icons/LoginImage.png">  Login
									</a>
								</li>
							</ul>
						</div>
				<?php		
					}else{
				?>
						<div class="col-md-2">
							<div class="search-box">
								<div class="input-group">
									<ul class="login-cart">
										<li>
											<a data-toggle="modal" data-target="#myModal" href="#">
												<img src="../index_assets/images/icons/LoginImage.png">Welcome <?php echo $_SESSION["name"] ?>
											</a>
										</li>
									</ul>
					    		</div><!-- /.input-group -->
							</div><!-- /.search-box -->
						</div>
				<?php
					}
				?>
				
				
			</div> <!-- End Of /.row -->
		</div>	<!-- End Of /.Container -->


	<!-- MODAL Start
    	================================================== -->

		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
		    	<div class="modal-content">
		    		<div class="modal-header">
		        		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		        		<h4 class="modal-title" id="myModalLabel">USER DASHBOARD</h4>
		      		</div>
			      	<div class="modal-body clearfix">
						<form action="#" method="post" id="create-account_form" class="std">
							<fieldset>
								<a href="userAccount.php"><h3>My Account</h3></a>
								<a href="userOrder.php"><h3>My Order</h3></a>
								<h3>My Wallet</h3>
								<h3>Settings</h3>
								<a href="index.php?dashboard=5"><h3>Logout</h3></a>
							</fieldset>
						</form>
			      	</div>
			      	<div class="modal-footer">
			        	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			      	</div>
		    	</div>
		  	</div>
		</div>
	</section>  <!-- End of /Section -->



	<!-- LOGO Start
    ================================================== -->

	<header>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
				<!--	<font face="">Need A Logo Here</font>
					<a href="#">
						<img src="index_assets/images/logo.png" alt="logo">
					</a> -->
				</div>	<!-- End of /.col-md-12 -->
			</div>	<!-- End of /.row -->
		</div>	<!-- End of /.container -->
	</header> <!-- End of /Header -->




	<!-- MENU Start
    ================================================== -->

	<nav class="navbar navbar-default">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div> <!-- End of /.navbar-header -->

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav nav-main">
						<li class="active"><a href="index.html">HOME</a></li>
						<li class=""><a href="topup.php">TOP-UP</a></li>
						<li><a href="#">SHOP</a></li>
						<li><a href="#">CUSTOM PRACTICE</a></li>
						<li><a href="#">LEADERBOARD</a></li>
						<li><a href="#">CONTACT US</a></li>
					</ul> <!-- End of /.nav-main -->
			</div>	<!-- /.navbar-collapse -->
	</div>	<!-- /.container-fluid -->
</nav>	<!-- End of /.nav -->


	<!-- FEATURES Start
    ================================================== -->

	<section id="features">
		<div class="container">
			<div class="row">
				  
			</div>	<!-- End of /.row -->
		</div>	<!-- End of /.container -->
	</section>	<!-- End of section -->

	
		<!-- PRODUCTS Start
    ================================================== -->

	<section id="products">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="products-heading">
						<h2>COD MOBILE</h2>
					</div>
				</div>
			</div>
			<div class="row">
                <?php
					$product_array = $db_handle->runQuery("SELECT * FROM tblproduct WHERE code = 'coc' ORDER BY id ASC");

					if (!empty($product_array)) { 
						foreach($product_array as $key=>$value){
				?>

				<div class="col-md-3">
					<div class="products">
						<a href="single-product.html">
							<img src="images/product-image.jpg" alt="">
						</a>
						<a href="single-product.html">
							<h4><?php echo $product_array[$key]["name"]; ?></h4>
						</a>
						<p class="price"><?php echo "$".$product_array[$key]["price"]; ?></p>
						<a class="view-link shutter" href="#">
							<i class="#"></i>BUY</a>
					</div>	<!-- End of /.products -->
				</div>	<!-- End of /.col-md-3 -->
                <?php
									}
								}

							?>
			</div>	<!-- End of /.row -->
		</div>	<!-- End of /.container -->
	</section>	<!-- End of Section -->


	
	
<!-- FOOTER Start
    ================================================== -->

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="block clearfix">
						<p>
							####### If you need to add any description , describe here ########
						</p>
						<h4 class="connect-heading">CONNECT WITH US</h4>
						<ul class="social-icon">
							<li>
								<a class="facebook-icon" href="#">
									<i class="fa fa-facebook"></i>
								</a>
							</li>
							<li>
								<a class="plus-icon" href="#">
									<i class="fa fa-google-plus"></i>
								</a>
							</li>
							<li>
								<a class="twitter-icon" href="#">
									<i class="fa fa-twitter"></i>
								</a>
							</li>
							<li>
								<a class="pinterest-icon" href="#">
									<i class="fa fa-pinterest"></i>
								</a>
							</li>
							<li>
								<a class="linkedin-icon" href="#">
									<i class="fa fa-linkedin"></i>
								</a>
							</li>
						</ul>	<!-- End Of /.social-icon -->
					</div>	<!-- End Of /.block -->
				</div> <!-- End Of /.Col-md-4 -->
				<div class="col-md-4">
					<div class="block">
						<h4>GET IN TOUCH</h4>
						<p ><i class="fa  fa-map-marker"></i> <span>Address :</span>new market road,Khalishpur,Khulna,Bangladesh
						</p>
						<p> <i class="fa  fa-phone"></i> <span>Phone:</span> 01304389568 </p>

						<p> <i class="fa  fa-mobile"></i> <span>Mobile:</span> 01304389568</p>

						<p class="mail"><i class="fa  fa-envelope"></i>Eamil: <span>here</span></p>
					</div>	<!-- End Of /.block -->
				</div> <!-- End Of Col-md-3 -->
				<div class="col-md-4">
					<div class="block">
						
					</div>	<!-- End Of /.block -->
				</div> <!-- End Of Col-md-3 -->
			</div> <!-- End Of /.row -->
		</div> <!-- End Of /.Container -->



	<!-- FOOTER-BOTTOM Start
    ================================================== -->

		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						
						<p class="copyright-text pull-left">@2020 Designed by <a href="https://www.facebook.com/injamul.ibnekashem/" target="_blank">Mir Injamamul Ibne Kashem</a> All Rights Reserved </p>
						<p class="copyright-text pull-right">Email For Support <a href="#">injamamul1221@cseku.ac.bd</a></p>
					</div>	<!-- End Of /.col-md-12 -->
				</div>	<!-- End Of /.row -->
			</div>	<!-- End Of /.container -->
		</div>	<!-- End Of /.footer-bottom -->
	</footer> <!-- End Of Footer -->

	<a id="back-top" href="#"></a>
</body>
</html>
