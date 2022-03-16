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
			        <h4 class="h4" style="color:white">Beverages</h4>
		        </div>
	        </div>
	
	       <br/>
	       <br/>
			
			<div class="row">
				
				<div class="col-md-2" align="center">
					<img src="include/images/juice.jpg"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="Juice.php"><h4>Juice & Soft Drinks</h4></a>
				</div>
				
				<div class="col-md-2" align="center">
					<img src="include/images/powderdrinks.jpg"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="Powder.php"><h4>Powder Drinks</h4></a>
				</div>
				
				<div class="col-md-2" align="center">
					<img src="include/images/tea.jpg"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="Tea.php"><h4>Tea & Coffee</h4></a>
				</div>
				
				<div class="col-md-2" align="center">
					<img src="include/images/water.jpg"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="Water.php"><h4>Water</h4></a>
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