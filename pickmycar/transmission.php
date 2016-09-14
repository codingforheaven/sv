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
//saving budget in session variable here
  if(isset($_REQUEST['budget'])){ $_SESSION['pick']['budget']= $_REQUEST['budget']; } 
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
   					<h2>Pick your transmission.</h2>
   				</div><!--END col-sm-12 text-center page-title-->
   			</div><!--END row-->
   		</div><!--END container-fluid-->
   		
   		<div class="container-fluid">
   			<div class="row">
				<div class="col-md-3 col-md-offset-3 col-sm-6 text-center choice-box single-transmission">
					<a href="fuel.php?transmission=1">
						<img src="img/transmission/manual.png" alt="">
						<h3>Manual</h3>
					</a>
				</div><!--END choice-box single-transmission-->
				<div class="col-md-3 col-sm-6 text-center choice-box single-transmission">
					<a href="fuel.php?transmission=2">
						<img src="img/transmission/automatic.png" alt="">
						<h3>Automatic</h3>
					</a>
				</div><!--END choice-box single-transmission-->
  			
				<div class="col-sm-12 text-center btn-global back-btn">
					<a href="budget.php">BACK</a>
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
