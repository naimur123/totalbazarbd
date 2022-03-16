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
			        <h4 class="h4" style="color:white">Sports & Athletics</h4>
		        </div>
	        </div>
	
	       <br/>
	       <br/>
			
			<div class="row">
				
				<div class="col-md-2" align="center">
					<img src="include/images/cap.jpg"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="sportsitems.php"><h4>Sports Items</h4></a>
				</div>
				
				<div class="col-md-2" align="center">
					<img src="include/images/cricketacc.jpg"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="AthleticsItems.php"><h4>Athletics Items</h4></a>
				</div>
				
			</div>
			
			
			<div>
				<br/>
				<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
			</div>		
		</div>
		
	</div>

</div>




<?php
	include('footer.php');
?>