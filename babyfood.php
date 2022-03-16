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
			        <h4 class="h4" style="color:white">Baby Zone</h4>
		        </div>
	        </div>
	
	       <br/>
	       <br/>
	
			<div class="row">
				
				<div class="col-md-2" align="center">
					<img src="include/images/babyfood.png"  class="img-responsive " style="width:170px; height: 110px"/>
					<a style="color:gray" href="BabyFoodFormula.php"><h4>Baby Food & Formula</h4></a>
				</div>
				
				<div class="col-md-2" align="center">
					<img src="include/images/diaper.png"  class="img-responsive " style="width:170px; height: 110px"/>
					<a style="color:gray" href="DiaperWipes.php"><h4>Diaper & Wipes</h4></a>
				</div>
				
				<div class="col-md-2" align="center">
					<img src="include/images/feeder.png"  class="img-responsive " style="width:170px; height: 110px"/>
					<a style="color:gray" href="FeederNipple.php"><h4>Feeder & Nipple</h4></a>
				</div>
				
				<div class="col-md-2" align="center">
					<img src="include/images/babywear.jpg"  class="img-responsive " style="width:170px; height: 110px"/>
					<a style="color:gray" href="BabyWear.php"><h4>Baby Wear</h4></a>
				</div>
				
				<div class="col-md-2" align="center">
					<img src="include/images/healthbaby.png"  class="img-responsive " style="width:170px; height: 110px"/>
					<a style="color:gray" href="HealthSafetyAccessories.php"><h4>Health & Safety Accessories</h4></a>
				</div>
				
				<div class="col-md-2" align="center">
					<img src="include/images/ttlbabyhealth.png"  class="img-responsive " style="width:170px; height: 110px"/>
					<a style="color:gray" href="TotalBabyHealthCare.php"><h4>Total Baby Health Care</h4></a>
				</div>
			
			</div>
				
			<div>
				<div class="col-md-2" align="center">
					<img src="include/images/toys.png"  class="img-responsive " style="width:170px; height: 110px"/>
					<a style="color:gray" href="GamesToys.php"><h4>Games & Toys</h4></a>
				</div>
			</div>		
	</div>
		
	</div>

</div>




<?php
	include('footer.php');
?>