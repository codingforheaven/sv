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
   				<div class="col-sm-12 text-center search-title">
   					
					<div class="carousel carousel-" data-ride="carousel" id="carousel-id">
						<div class="carousel-inner" role="listbox">
							<div class="item active">
								<h2>Search based on <span>brands</span>.</h2>
							</div><!--END item-->
							<div class="item">
								<h2>Search based on <span style="color:#773F9B;border-color:#773F9B;">models</span>.</h2>
							</div><!--END item-->
						</div><!--END carousel-inner-->
					</div><!--END carousel slide carousel-fade-->
   					
   				</div><!--END col-sm-12 text-center search-title-->
   			</div><!--END row-->
   		</div><!--END container-fluid-->
   		
   		<div class="container">
   			<div class="row">
   				<form action="search-again.php" method="get" class="col-md-10 col-md-offset-1" id="search">
   				
					<div class="col-sm-12 no-padding full-input">
						<textarea id="search-brands" rows="5" name="q"></textarea>
					</div><!--END full-input-->
                    
                    <div class="col-sm-12 text-center btn-global brands-submit">
					<button type="submit" >
						SEARCH
					</button>
				</div><!--END btn-global brands-submit-->
					
				</form><!--END col-md-10 col-md-offset-1-->
				
                
                
                
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
