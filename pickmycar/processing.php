<?php
ob_start();
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
   				<div class="col-sm-12 text-center process-title">
   					<h2>Preparing you results.</h2>
   					<p>Our servers, are analysing your inputs and preparing your results.</p>
   				</div><!--END col-sm-12 text-center process-title-->
   			</div><!--END row-->
   		</div><!--END container-fluid-->
   		
   		<div class="container">
   			<div class="row">
				<div class="col-md-3 col-md-offset-1 col-xs-4 process-photo">
					<img src="img/brain.png" alt="">
				</div><!--END process-photo-->
				<div class="col-md-4 col-xs-4 text-center process-arrow">
					<img src="img/process-arrow.png" alt="">
				</div><!--END process-arrow-->
				<div class="col-md-3 col-xs-4 process-photo">
					<img src="img/clock.png" alt="">
				</div><!--END process-photo-->
  			
				<div class="col-sm-12 text-center btn-global process-btn">
					<a href="result.php">proceed. <img src="img/proceed-icon.png" alt=""></a>
					<p>Click on the above button to see your results.</p>
				</div><!--END btn-global-->
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
<?php

//this condtion just to make sure the data with not inserted in DB twise in case user again reload the page
  if(isset($_SESSION['pick']) && isset($_GET['name'])){
 
  //saving user details in session variable here
  if(isset($_GET['name'])){ $_SESSION['pick']['user_info']= $_REQUEST;}


  //getting all values from session variable array
        //car info
          $type=$_SESSION['pick']['type'];
          $budget=$_SESSION['pick']['budget'];
          $transmission=$_SESSION['pick']['transmission'];
          $fuel=$_SESSION['pick']['fuel'];
          $engine=$_SESSION['pick']['engine'];

        //checking that how many features are picked by user
          if($_SESSION['pick']['feature']['airbags']){$airbags=1;}else{$airbags=0;};
          if($_SESSION['pick']['feature']['abs']){$abs=1;}else{$abs=0;}
          if($_SESSION['pick']['feature']['parking-sensors']){$parking_sensors=1;}else{$parking_sensors=0;}
          if($_SESSION['pick']['feature']['cruise-controls']){$cruise_controls=1;}else{$cruise_controls=0;}
          if($_SESSION['pick']['feature']['sunroof']){$sunroof=1;}else{$sunroof=0;}
          if($_SESSION['pick']['feature']['power-steering']){$power_steering=1;}else{$power_steering=0;}

        //user info
          $name=$_SESSION['pick']['user_info']['name'];
          $email=$_SESSION['pick']['user_info']['email'];
          $mobile=$_SESSION['pick']['user_info']['mobile'];

  //preparing insertion query
    $query="INSERT INTO pick VALUES (NULL,'".$name."','".$email."','".$mobile."',
                                    '".$type."','".$budget."','".$transmission."','".$fuel."','".$engine."',
                                    '".$airbags."','".$abs."','".$parking_sensors."','".$cruise_controls."',
                                    '".$sunroof."','".$power_steering."' )";
  //query execution 
  mysqli_query($connection,$query);


/*....................... Find matched cars coding start............................*/

      //getting default min and max price
          $query="SELECT * FROM pick_budget WHERE id ='$budget' ";
          $result=mysqli_query($connection,$query);
          $row=mysqli_fetch_assoc($result);
          $min_price=$row['min'];
          $max_price=$row['max'];

      //getting default min and max engine cc
          $query="SELECT * FROM pick_engine WHERE id ='$engine' ";
          $result=mysqli_query($connection,$query);
          $row=mysqli_fetch_assoc($result);
          $min_engine=$row['min'];
          $max_engine=$row['max'];

         

        //finding matched car
      
$query=" SELECT * FROM CARS WHERE 
                            car_type_id=$type
                            AND (price >= $min_price AND price <= $max_price) 
                            AND transmission_type_id= $transmission
                            AND fuel_type_id=$fuel
                            AND (engine >= $min_engine AND engine <= $max_engine)
                            AND air_bags=$airbags
                            AND abs=$abs
                            AND parking_sensor=$parking_sensors
                            AND cruise_controls=$cruise_controls
                            AND sunroof=sunroof
                            AND power_steering=$power_steering
                            ";

      $result=mysqli_query($connection,$query);


      while ($row=mysqli_fetch_assoc($result)) {
        # code...
       

      $matched[]=$row['id'];
     
      }
       $_SESSION['matched']=$matched;
       

  header('location:processing.php');
  /*....................... Find matched cars coding END............................*/
                                        
}

  ?>     