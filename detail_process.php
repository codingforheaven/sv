<?php
require('config.php');


if(isset($_POST['value'])){
	
	
	$id=$_POST['value'];
	
	$query=" SELECT * FROM cars WHERE id=$id";
	$result=mysqli_query($connection,$query);
	$row=mysqli_fetch_assoc($result);
	//getting fuel type
	$fuel_id=$row['fuel_type_id'];
	$q=" SELECT * FROM fuel_type WHERE id=$fuel_id";
	$r=mysqli_query($connection,$q);
	$fuel=mysqli_fetch_assoc($r);

			?>
			
			
					<div class="col-sm-6 col-xs-12 suggested-car-details">
							<h2><?php echo ucfirst($row['company'])." ".ucfirst($row['model']);  ?></h2>
							<h4><span>Ex showroom price</span> <?php echo $row['price']?> INR</h4>
							<h4><span>Mileage</span><?php echo $row['mileage']?></h4>
							<h4><span>Fuel type</span><?php echo $fuel['type']?></h4>
							<h4><span>Engine displacement</span><?php echo $row['engine']?> cc</h4>



							<div class="btn-global">
								<a href="">Get September offers</a>
							</div>
						</div>
						<div class="col-md-6 col-xs-12 text-right suggested-car-photo">
							<img src="<?php if(!empty($row['image_url'])){
											echo $row['image_url'];
												}else{echo "img/default.png";}
									 			
									 		?>" alt="">
						</div>
			
			
			
			
			
			
			
			
			<?php
	
	}



?>
