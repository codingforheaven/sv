<?php require('config.php'); ?>
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
	<!--growl CSS-->
	<link href="assets/css/jquery.growl.css" rel="stylesheet" type="text/css" />
</head>
       
<body>
   <div class="fixed-layout">
  		
   		<div class="container-fluid">
   			<div class="row">
   				<div class="col-sm-8 logo">
   					<a href="index.php"><img src="img/logo.png" alt=""></a>
   				</div><!--END col-sm-8 logo-->
   				<div class="col-sm-4 text-right contact-btn">
					<a href="#" id="contact">Contact</a>
   				</div><!--END col-sm-4 text-right contact-btn-->
   			</div><!--END row-->
   		</div><!--END container-fluid-->
   	
   		<div class="container-fluid">
   			<div class="row">
   				<div class="col-sm-12 text-center promo-home">
   					<h2>Cars trending now…</h2>
   					<?php
   					$query="SELECT * FROM cars ORDER BY RAND() LIMIT 1";
   					$result=mysqli_query($connection,$query);
   					$row=mysqli_fetch_assoc($result);
   					?>
   					<img src="<?php if(!empty($row['image_url'])){
											echo $row['image_url'];
												}else{echo "img/home-car.png";}
									 			
									 		?>" alt="">
   					<div class="btn-global search-btn">
   						<a href="search.php">SEARCH A CAR</a>
   					</div>
   					<div class="btn-global">
   						<a href="car-type.php" data-transition="slide">PICK MY CAR</a>
   					</div><!--END btn-global pick-btn-->
   					<p>Know the best car based on your interest.</p>
   				</div><!--END col-sm-12 text-center promo-home-->
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
        <!--growl JS-->
        <script src="assets/js/jquery.growl.js" type="text/javascript"></script>
</body>
</html>
