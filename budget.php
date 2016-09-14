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
//saving car type in session variable here

	if(isset($_REQUEST['type'])){ $_SESSION['pick']['type']= $_REQUEST['type']; }
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
   					<h2>What’s your budget?</h2>
   				</div><!--END col-sm-8 logo-->
   			</div><!--END row-->
   		</div><!--END container-fluid-->
   		
   		<div class="container-fluid">
   			<div class="row">
				<div class="col-md-3 col-sm-6 text-center choice-box single-budget">
					<a href="transmission.php?budget=1">
						<img src="img/budgets/budget1.png" alt="">
						<h3>Below 5 Lakhs</h3>
					</a>
				</div>
				<div class="col-md-3 col-sm-6 text-center choice-box single-budget">
					<a href="transmission.php?budget=2">
						<img src="img/budgets/budget2.png" alt="">
						<h3>Between 5-10 Lakhs</h3>
					</a>
				</div>
				<div class="col-md-3 col-sm-6 text-center choice-box single-budget">
					<a href="transmission.php?budget=3">
						<span>Optimal</span>
						<img src="img/budgets/budget3.png" alt="">
						<h3>Between 10-15 Lakhs</h3>
					</a>
				</div>
				<div class="col-md-3 col-sm-6 text-center choice-box single-budget">
					<a href="transmission.php?budget=4">
						<img src="img/budgets/budget4.png" alt="">
						<h3>I want Luxury cars.</h3>
					</a>
				</div>
  			
				<div class="col-sm-12 text-center btn-global back-btn">
					<a href="car-type.php">BACK</a>
				</div><!--END btn-global-->
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
