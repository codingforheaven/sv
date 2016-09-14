<?php session_start(); ?>
<!doctype html>
<html class="no-js" lang="">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="apple-touch-icon" href="apple-touch-icon.png">
	<title>PickMyCar</title>
	
	<!--animate CSS-->
	<link rel="stylesheet" href="assets/css/animate.css">
	<!--Bootstrap CSS-->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<!--Main Stylesheet-->
	<link rel="stylesheet" href="assets/css/core.css">
	<!--Responsive CSS-->
	<link rel="stylesheet" href="assets/css/responsive.css">
</head>
   <?php
//saving fuel type in session variable here
  if(isset($_REQUEST['fuel'])){ $_SESSION['pick']['fuel']= $_REQUEST['fuel']; }
  ?>      
<body>
   <div class="fixed-layout">
  		
   		<div class="container-fluid">
   			<div class="row">
   				<div class="col-sm-12 logo">
   					<a href="index.php"><img src="img/logo.png" alt=""></a>
   				</div><!--END col-sm-12 logo-->
   			</div><!--END row-->
   		</div><!--END container-fluid-->
   		
   		<div class="container-fluid">
   			<div class="row">
   				<div class="col-sm-12 text-center page-title">
   					<h2>Bravo! Its time for engine displacement.</h2>
   				</div><!--END col-sm-12 text-center page-title-->
   			</div><!--END row-->
   		</div><!--END container-fluid-->
   		
   		<div class="container-fluid">
   			<div class="row">
				<div class="col-md-3 col-sm-6 text-center choice-box single-engine">
					<a href="features.php?engine=1">
						<h4>1000-<br>2000</h4>
						<h3>cc</h3>
					</a>
				</div><!--END choice-box single-engine-->
				<div class="col-md-3 col-sm-6 text-center choice-box single-engine">
					<a href="features.php?engine=2">
						<h4>2000-<br>3000</h4>
						<h3>cc</h3>
					</a>
				</div><!--END choice-box single-engine-->
				<div class="col-md-3 col-sm-6 text-center choice-box single-engine">
					<a href="features.php?engine=3">
						<h4>3000-<br>4000</h4>
						<h3>cc</h3>
					</a>
				</div><!--END choice-box single-engine-->
				<div class="col-md-3 col-sm-6 text-center choice-box single-engine">
					<a href="features.php?engine=4">
						<h4>Above<br>4000</h4>
						<h3>cc</h3>
					</a>
				</div><!--END choice-box single-engine-->
  			
				<div class="col-sm-12 text-center btn-global back-btn">
					<a href="fuel.php">BACK</a>
				</div><!--END btn-global back-btn-->
   			</div><!--END row-->
   		</div><!--END container-fluid-->
   		
   </div><!--END fixed-layout-->

 


		<!-- jQuery core -->
        <script src="assets/js/jquery.min.js"></script>
        <!--Bootrstrap JS-->
        <script src="assets/js/bootstrap.min.js"></script>
        <!--wow JS-->
        <script src="assets/js/wow.min.js"></script>
        <!--Main JS-->
        <script src="assets/js/main.js"></script>
</body>
</html>
