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
			        <h4 class="h4" style="color:white">Electrical Items</h4>
		        </div>
	        </div>
	
	       <br/>
	       <br/>
			
			<div class="row">
								
				<div class="col-md-2" align="center">
					<img src="include/images/cable.png"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="Cable.php"><h4>Cable</h4></a>
				</div>
				
				<div class="col-md-2" align="center">
					<img src="include/images/fan.png"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="Fan.php"><h4>Fan</h4></a>
				</div>
				
				<div class="col-md-2" align="center">
					<img src="include/images/lightbulb.jpg"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="LightBulb.php"><h4>Light/Bulb</h4></a>
				</div>
				
				<div class="col-md-2" align="center">
					<img src="include/images/otherelectrical.png"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="OthersItem.php"><h4>Others Item</h4></a>
				</div>

			</div>

		</div>
		
	</div>

</div>




<?php
	include('footer.php');
?>