<?php
error_reporting(0);
include('config.php');
  ?>
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
   					<h2>These are the best cars for you, mate!</h2>
   				</div><!--END col-sm-12 text-center page-title-->
   			</div><!--END row-->
   		</div><!--END container-fluid-->
   		
   		<div class="container">
   			<div class="row">
				<div class="col-md-10 col-md-offset-1 results">
					<div class="row">

		<?php
		 if(isset($_SESSION['matched'])){

					 	

					 	$matched=implode(",",$_SESSION['matched']);

					 //getting info of matched cars
					 	$query="SELECT * FROM CARS WHERE id IN ($matched)";
					 	$result=mysqli_query($connection,$query);

					 while ($row=mysqli_fetch_assoc($result)) {
					        # code...
					     ?>
						<div class="col-sm-4">
							<div class="single-result">
								<img src="<?php if(!empty($row['image_url'])){
											echo $row['image_url'];
												}else{echo "img/default.png";}
									 			
									 		?>" alt="">
								<h4><span><?=ucfirst($row['company']);?></span> <?=$row['model'];?></h4>
							</div><!--END single-result-->
						</div><!--END col-sm-4-->

		<?php

					}
		 }

					  ?>


					</div><!--END row-->
				</div><!--END results-->
  			
				<div class="col-sm-12 text-right btn-global btn-book">
					<a href="">Want to book</a>
				</div><!--END btn-global btn-book-->
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
