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
//saving feature in session variable here
  if(isset($_REQUEST)){ 
    $_SESSION['pick']['feature']= $_REQUEST;

    header("location : processing.php");
     }
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
   				<div class="col-sm-12 text-center info-page-title">
   					<h2>Your results are up! <br>Filling this info can be handy.</h2>
   					<p>We don’t spam <span><img src="img/imo-icon.png" alt=""></span></p>
   				</div><!--END col-sm-12 text-center info-page-title-->
   			</div><!--END row-->
   		</div><!--END container-fluid-->
   		
   		<div class="container">
   			<div class="row">
				<div class="col-md-8 col-md-offset-2 info-form">
					<form method="get" action="processing.php" id="form">
						<div class="form-item">
							<label for="name">Name:</label>
							<input type="text" id="name" name="name" value="<?php
            if(isset($_SESSION['pick']['user_info']['name']))echo $_SESSION['pick']['user_info']['name']; ?>">
						</div><!--END form-item-->
						<div class="form-item">
							<label for="email">Email:</label>
							<input type="text" id="email" name="email" value="<?php
            if(isset($_SESSION['pick']['user_info']['email']))echo $_SESSION['pick']['user_info']['email']; ?>">
						</div><!--END form-item-->
						<div class="form-item">
							<label for="mobile">Mobile:</label>
							<input type="number" id="mobile" name="mobile" value="<?php
            if(isset($_SESSION['pick']['user_info']['mobile']))echo $_SESSION['pick']['user_info']['mobile']; ?>">
						</div><!--END form-item-->
					</form>
				</div><!--END info-form-->
  			
				<div class="col-sm-12 text-center btn-global back-btn">
					<a href="features.php">BACK</a>
          <a href="javascript:document.getElementById('form').submit();">NEXT</a>
				</div><!--END btn-global back-btn-->
   			</div><!--END row-->
   		</div><!--END container-->
   		
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
