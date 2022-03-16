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
			        <h4 class="h4" style="color:white">Dairy Food</h4>
		        </div>
	        </div>
	
	       <br/>

			<div class="row">
				
				<div class="col-md-2" align="center">
					<img src="include/images/Eggs.jpg"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="Eggs.php"><h4>Eggs</h4></a>
				</div>
				
				<div class="col-md-2" align="center">
					<img src="include/images/Icecream.jpg"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="Icecream.php"><h4>Icecream</h4></a>
				</div>
							
				<div class="col-md-2" align="center">
					<img src="include/images/milk.png"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="MilkMilkPowder.php"><h4>Milk & Milk Powder</h4></a>
				</div>
				
				<div class="col-md-2" align="center">
					<img src="include/images/Yogurt.jpg"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="Yogurt.php"><h4>Yogurt</h4></a>
				</div>
				
				<div class="col-md-2" align="center">
					<img src="include/images/butter.jpg"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="buttercheese.php"><h4>Butter & Cheese</h4></a>
				</div>
			
			</div>
			
		</div>
		
	</div>
    
    <div class="row">
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
                <br/>
        <br/>
        <br/>
        <br/>
    </div>
    
</div>




<?php
	include('footer.php');
?>