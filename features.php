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
//saving engine cc in session variable here
  if(isset($_REQUEST['engine'])){ $_SESSION['pick']['engine']= $_REQUEST['engine']; }
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
   					<h2>Choose your features!</h2>
   				</div><!--END col-sm-12 text-center page-title-->
   			</div><!--END row-->
   		</div><!--END container-fluid-->
   		
   		<div class="container">
   			<div class="row">
   			<form action="info.php" method="get" id="form">
   			
				<div class="col-sm-4 text-center choice-box single-feature">
					<input name="airbags" type="checkbox" id="feature-1" value="1" <?php
						if(isset($_SESSION['pick']['feature']['airbags']))echo "checked";
					?>></input>

					<label for="feature-1">Airbags</label>
				</div><!--END choice-box single-feature-->
				
				<div class="col-sm-4 text-center choice-box single-feature">
					<input name="abs" type="checkbox" id="feature-2" value="1" <?php
						if(isset($_SESSION['pick']['feature']['abs']))echo "checked";
					?>></input>
					<label for="feature-2">ABS</label>
				</div><!--END choice-box single-feature-->
				
				<div class="col-sm-4 text-center choice-box single-feature">
					<input name="parking-sensors" type="checkbox" id="feature-3" value="1" <?php
						if(isset($_SESSION['pick']['feature']['parking-sensors']))echo "checked";
					?>></input>
					<label for="feature-3">Parking sensors</label>
				</div><!--END choice-box single-feature-->
				
				<div class="col-sm-4 text-center choice-box single-feature">
					<input name="cruise-controls" type="checkbox" id="feature-4" value="1" <?php
						if(isset($_SESSION['pick']['feature']['cruise-controls']))echo "checked";
					?>></input>
					<label for="feature-4">Cruise controls</label>
				</div><!--END choice-box single-feature-->
				
				<div class="col-sm-4 text-center choice-box single-feature">
					<input name="sunroof" type="checkbox" id="feature-5"  value="1" <?php
						if(isset($_SESSION['pick']['feature']['sunroof']))echo "checked";
					?>>
					<label for="feature-5">Sunroof</label>
				</div><!--END choice-box single-feature-->
		
				<div class="col-sm-4 text-center choice-box single-feature">
					<input name="power-steering" type="checkbox" id="feature-6" value="1" <?php
						if(isset($_SESSION['pick']['feature']['power-steering']))echo "checked";
					?>></input>
					<label for="feature-6">Power steering</label>
				</div><!--END choice-box single-feature-->
  			</form>
  			
			<div class="col-sm-12 text-center btn-global next-back-btn">
				<a href="engine.php">BACK</a>

				<a href="javascript:document.getElementById('form').submit();">NEXT</a>
			</div><!--END btn-global next-back-btn-->
  			
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
