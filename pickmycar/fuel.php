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
//saving transmission type in session variable here
  if(isset($_REQUEST['transmission'])){ $_SESSION['pick']['transmission']= $_REQUEST['transmission']; }
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
   					<h2>Pick your fuel.</h2>
   				</div><!--END col-sm-12 text-center page-title-->
   			</div><!--END row-->
   		</div><!--END container-fluid-->
   		
   		<div class="container-fluid">
   			<div class="row">
				<div class="col-sm-4 col-sm-offset-1 text-center choice-box single-fuel">
					<a href="engine.php?fuel=1">
						<img src="img/fuel/petrol.png" alt="">
						<h3>Petrol</h3>
					</a>
				</div><!--END choice-box single-fuel-->
				<div class="col-sm-4 text-center choice-box single-fuel">
					<a href="engine.php?fuel=2">
						<img src="img/fuel/petrol.png" alt="">
						<h3>Diesel</h3>
					</a>
				</div><!--END choice-box single-fuel-->
				<div class="col-sm-4 text-center choice-box single-fuel">
					<a href="engine.php?fuel=3">
						<img src="img/fuel/petrol.png" alt="">
						<h3>Electric And Hybrid</h3>
					</a>
				</div><!--END choice-box single-fuel-->
  			
				<div class="col-sm-12 text-center btn-global back-btn">
					<a href="transmission.php">BACK</a>
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
