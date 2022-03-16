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
			        <h4 class="h4" style="color:white">Drop</h4>
		        </div>
	        </div>
	
	       <br/>
	       <br/>
			
			<div class="row">
				
				<div class="col-md-2" align="center">
					<img src="include/images/drop.jpg"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="drops.php"><h4>Drop</h4></a>
				</div>
				
				<div class="col-md-2" align="center">
					<img src="include/images/drop.jpg"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="PediatricDrops.php"><h4>Pediatric Drops</h4></a>
				</div>
				
				<div class="col-md-2" align="center">
					<img src="include/images/drop.jpg"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="Eyedrop.php"><h4>Eye Drops</h4></a>
				</div>
				
				
				
				<div class="col-md-2" align="center">
					<img src="include/images/drop.jpg"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="NasalDrop.php"><h4>Nasal Drop</h4></a>
				</div>
				
				<div class="col-md-2" align="center">
					<img src="include/images/drop.jpg"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="EarDrops.php"><h4>Ear Drops</h4></a>
				</div>
				
			</div>
			
		</div>
		
	</div>

</div>




<?php
	include('footer.php');
?>