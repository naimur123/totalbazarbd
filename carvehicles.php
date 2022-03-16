<?php
	if( ! ini_get('date.timezone') )
    {
        date_default_timezone_set('GMT');
    }
	include('header.php');
?>

<div class="container-fluid">
	
	<div class="row">
		
		
		<div class="col-md-12">

			<br/>
			
			<div class="row">
		        <div class="col-md-12" align="center" style="background-color:gray">
			        <h4 class="h4" style="color:white">Car & Vehicles</h4>
		        </div>
	        </div>
	
	       <br/>
	       <br/>
	
			<div class="row">
				
				<div class="col-md-2" align="center">
					<img src="include/images/car.png"  class="img-responsive " style="width:170px; height: 110px"/>
					<a style="color:gray" href="Car.php"><h4>Car</h4></a>
				</div>
				
				<div class="col-md-2" align="center">
					<img src="include/images/motorbike.jpg"  class="img-responsive " style="width:170px; height: 110px"/>
					<a style="color:gray" href="BikeMotorbike.php"><h4>Bike & Motorbike</h4></a>
				</div>
				
				<div class="col-md-2" align="center">
					<img src="include/images/cardecor.png"  class="img-responsive " style="width:170px; height: 110px"/>
					<a style="color:gray" href="CarDecoration.php"><h4>Car Decoration</h4></a>
				</div>
				
				<div class="col-md-2" align="center">
					<img src="include/images/lubricants.png"  class="img-responsive " style="width:170px; height: 110px"/>
					<a style="color:gray" href="Lubricants.php"><h4>Lubricants</h4></a>
				</div>
				
				<div class="col-md-2" align="center">
					<img src="include/images/carparts.png"  class="img-responsive " style="width:170px; height: 110px"/>
					<a style="color:gray" href="CarsMotorParts.php"><h4>Cars & Motor Parts</h4></a>
				</div>
				
				<div class="col-md-2" align="center">
					<img src="include/images/truck.jpg"  class="img-responsive " style="width:170px; height: 110px"/>
					<a style="color:gray" href="TrackPickupVan.php"><h4>Truck & Pickup Van</h4></a>
				</div>

			</div>
				
			<div>
				<br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
			</div>		
	</div>
		
	</div>

</div>




<?php
	include('footer.php');
?>