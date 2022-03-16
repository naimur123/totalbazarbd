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
			        <h4 class="h4" style="color:white">Snacks</h4>
		        </div>
	        </div>
	
	       <br/>

			<div class="row">
			
				<div class="col-md-2" align="center">
					<img src="include/images/chips.jpg"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="ChipsCandy.php"><h4>Chips & Candy</h4></a>
				</div>
				
				<div class="col-md-2" align="center">
					<img src="include/images/localsnacks.png"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="LocalSnacks.php"><h4>Local Snacks</h4></a>
				</div>

				<div class="col-md-2" align="center">
					<img src="include/images/noodles.jpg"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="NoodlesPasta.php"><h4>Noodles & Pasta</h4></a>
				</div>
				
				<div class="col-md-2" align="center">
					<img src="include/images/popcorn.jpg"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="PopcornOtherSnacks.php"><h4>Popcorn & Other Snacks</h4></a>
				</div>
				
				<div class="col-md-2" align="center">
					<img src="include/images/DryFood.jpg"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="DryFood.php"><h4>Dry Food</h4></a>
				</div>
				
				<div class="col-md-2" align="center">
					<img src="include/images/soup.jpg"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="Soups.php"><h4>Soups</h4></a>
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