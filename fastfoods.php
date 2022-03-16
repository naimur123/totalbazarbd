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
			        <h4 class="h4" style="color:white">Fast Foods</h4>
		        </div>
	        </div>
	
	       <br/>

			<div class="row">
				
				<div class="col-md-2" align="center">
					<img src="include/images/pizza.jpg"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="BurgerPizza.php"><h4>Burger & Pizza</h4></a>
				</div>
				
				<div class="col-md-2" align="center">
					<img src="include/images/cake.jpg"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="CakePastry.php"><h4>Cake & Pastry</h4></a>
				</div>
				
				<div class="col-md-2" align="center">
					<img src="include/images/frozen.jpg"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="FrozenFastFood.php"><h4>Frozen Fast Food</h4></a>
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
				<br/>
				<br/>
				
			</div>
			
		</div>
		
	</div>

</div>




<?php
	include('footer.php');
?>