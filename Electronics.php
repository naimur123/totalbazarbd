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
			        <h4 class="h4" style="color:white">Electronics</h4>
		        </div>
	        </div>
	
	       <br/>
	       <br/>
			
			<div class="row">
								
				<div class="col-md-2" align="center">
					<img src="include/images/computeracc.jpg"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="ComputerAccessories.php"><h4>Computer Accessories</h4></a>
				</div>
				
				<div class="col-md-2" align="center">
					<img src="include/images/desktop.jpg"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="Desktop.php"><h4>Desktop</h4></a>
				</div>
				
				<div class="col-md-2" align="center">
					<img src="include/images/laptop.jpg"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="Laptop.php"><h4>Laptop</h4></a>
				</div>
				
				<div class="col-md-2" align="center">
					<img src="include/images/mobileacc.jpg"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="MobileAccessories.php"><h4>Mobile Accessories</h4></a>
				</div>
				
				<div class="col-md-2" align="center">
					<img src="include/images/MobilePhone.jpg"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="MobilePhone.php"><h4>Mobile Phone</h4></a>
				</div>
				
				<div class="col-md-2" align="center">
					<img src="include/images/refrigerator.png"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="Refrigerator.php"><h4>Refrigerator</h4></a>
				</div>

			</div>
			
			<div class="row">
								
				<div class="col-md-2" align="center">
					<img src="include/images/television.png"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="Television.php"><h4>Television</h4></a>
				</div>
				
				<div class="col-md-2" align="center">
					<img src="include/images/aircondition.jpg"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="AirCondition.php"><h4>Air Condition</h4></a>
				</div>
				
				<div class="col-md-2" align="center">
					<img src="include/images/washingmachine.png"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="washingmachine.php"><h4>Washing Machine</h4></a>
				</div>
				
				<div class="col-md-2" align="center">
					<img src="include/images/microwavewaven.png"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="MicrowaveOven.php"><h4>Microwave Oven</h4></a>
				</div>
				

			</div>

		</div>
		
	</div>

</div>




<?php
	include('footer.php');
?>