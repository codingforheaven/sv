<?php require('config.php') ?>
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
   		
   		<div class="container">
   			<div class="row">
   				<div class="col-md-10 col-md-offset-1">
					<div class="suggested-car" id="detail">				
						<div class="col-sm-6 col-xs-12 suggested-car-details">
							<h2>Toyota Fortuner</h2>
							<h4><span>Ex showroom price </span> 3,000,00 INR</h4>
							<h4><span>Mileage</span>21.5</h4>
							<h4><span>Fuel type</span>Petrol</h4>
							<h4><span>Engine displacement</span>1600 cc</h4>
							<div class="btn-global">
								<a href="">Get September offers</a>
							</div>
						</div>
						<div class="col-md-6 col-xs-12 text-right suggested-car-photo">
							<img src="img/home-car.png" alt="">
						</div>
					</div><!--END suggested-car-->
                    
   				</div><!--END col-md-10 col-md-offset-1-->
   			</div><!--END row-->
   		</div><!--END container-fluid-->
   		
   		<div class="container">
   			<div class="row">
   				
                        <?php
                    if(!empty($_GET['q'])){
					
					
						//getting the brand/company
			$query=" SELECT * FROM cars WHERE CONCAT(company,' ',model) LIKE '%".$_GET['q']."%'";
						$result=mysqli_query($connection,$query);
						$rowcount1=mysqli_num_rows($result);
						
						
							if($rowcount1>0){
								?>
                                
                     <div class="col-md-10 col-md-offset-1 popular-car">
   					<h2>Popular cars</h2>
   					<div class="row">
                                <?php
									
									while($row=mysqli_fetch_assoc($result)){
										?>
                                            <div class="col-md-3 col-sm-6">
                                            <a href="<?=$row['id']?>" class="popular-car-box">
                                            <img src="<?php if(!empty($row['image_url'])){
											echo $row['image_url'];
												}else{echo "img/default.png";}
									 			
									 		?>" alt="">
                                            <h4><?php echo ucfirst($row['company'])." ".ucfirst($row['model']);  ?></h4>
                                            </a><!--END popular-car-box-->
                                       		 </div><!--END col-md-3-->
									
									<?php
									}
									
							
									?>
									               
                                </div><!--END popular-car-->
                            </div><!--END row-->
   		
									
									<?php
								
								
								}else{
										?>
								<div class="col-sm-12 text-center not-found">
									<h3>Sorry! Our server can't recognize your input.</h3>
								</div><!--END col-sm-12 text-center not-found-->
								
								<?php
									}
							
	
						
						}else{
							?>
							<div class="col-sm-12 text-center not-found">
									<h3>Sorry! Our server can't recognize your input.</h3>
								</div><!--END col-sm-12 text-center not-found-->
							<?php
		
							}
					
							?>
        
                        
   			</div><!--END row-->
   		</div><!--END container-->
   		
   		

					<div class="col-sm-12 text-center btn-global search-again-submit">
                    <br>
                    <a href="search.php">SEARCH AGAIN</a>
						
					</div><!--END btn-global-->
					
			
  			

   		
   		
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
