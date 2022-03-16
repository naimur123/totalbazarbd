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
			
			<div class="row">
			    
			<br/>
			
			<div class="row">
		        <div class="col-md-12" align="center" style="background-color:gray">
			        <h4 class="h4" style="color:white">Fresh Fruits & Vegetables</h4>
		        </div>
	        </div>
	
	       <br/>
	       <br/>
				
				<div class="col-md-2" align="center">
					<img src="include/images/comfruits.png"  class="img-responsive " style="width:170px; height: 110px"/>
					<a style="color:gray" href="CommonFruits.php"><h4>Common Fruits</h4></a>
				</div>
				
				<div class="col-md-2" align="center">
					<img src="include/images/fruits.jpg"  class="img-responsive " style="width:170px; height: 110px"/>
					<a style="color:gray" href="Seasonalfruits.php"><h4>Seasonal Fruits</h4></a>
				</div>
				
				<div class="col-md-2" align="center">
					<img src="include/images/comvegetable.jpg"  class="img-responsive " style="width:170px; height: 110px"/>
					<a style="color:gray" href="CommonVegetables.php"><h4>Common Vegetables</h4></a>
				</div>
				
				<div class="col-md-2" align="center">
					<img src="include/images/vegetables.jpg"  class="img-responsive " style="width:170px; height: 110px"/>
					<a style="color:gray" href="SeasonalVegetables.php"><h4>Seasonal Vegetables</h4></a>
				</div>
			
			</div>
		
		</div>
		
	</div>
	
	<div class="row">
	    
	    <br/>
	    <br/>
	    <br/><br/>
	    <br/><br/>
	    <br/>
	    <br/>
	    <br/><br/>
	    <br/><br/>
	    <br/><br/>
	    <br/><br/>
	    
	    
	</div>

</div>




<?php
	include('footer.php');
?>