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
			        <h4 class="h4" style="color:white">Breakfast</h4>
		        </div>
	        </div>
	
	       <br/>
	       <br/>
			
			<div class="row">
								
				<div class="col-md-2" align="center">
					<img src="include/images/Biscuit.png"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="BiscuitsChocolate.php"><h4>Biscuits & Chocolate</h4></a>
				</div>
				
				<div class="col-md-2" align="center">
					<img src="include/images/Bread.jpg"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="BreadsCakes.php"><h4>Bread & Cakes</h4></a>
				</div>
				
				<div class="col-md-2" align="center">
					<img src="include/images/Jelly.jpg"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="JamJelly.php"><h4>Jam & Jelly</h4></a>
				</div>
				
				<div class="col-md-2" align="center">
					<img src="include/images/othersbreakfast.jpg"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="OthersBreakfast.php"><h4>Others Breakfast</h4></a>
				</div>

			</div>

			<div>
				<br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> <br/> 
			</div>

		</div>
		
	</div>

</div>




<?php
	include('footer.php');
?>