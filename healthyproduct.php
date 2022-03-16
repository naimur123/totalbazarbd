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
			        <h4 class="h4" style="color:white">Health Product</h4>
		        </div>
	        </div>
	
	       <br/>
	       <br/>
			
			<div class="row">
				
				<div class="col-md-2" align="center">
					<img src="include/images/healthproduct.png"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="HealthProduct.php"><h4>Health Product</h4></a>
				</div>
				
				<div class="col-md-2" align="center">
					<img src="include/images/FirstAidAntiseptic.png"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="FirstAidAntiseptic.php"><h4>First Aid & Antiseptic</h4></a>
				</div>
				
				<div class="col-md-2" align="center">
					<img src="include/images/FamilyPlanning.png"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="FamilyPlanning.php"><h4>Family Planning</h4></a>
				</div>
				
				<div class="col-md-2" align="center">
					<img src="include/images/TotalHealth.png"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="TotalHealth.php"><h4>Total Health</h4></a>
				</div>
				
				<div class="col-md-2" align="center">
					<img src="include/images/AdultDiaper.png"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="OlderHealthCareAdultDiaper.php"><h4>Older Health Care & Adult Diaper</h4></a>
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
	    
	    
	</div>		</div>

		
	</div>

</div>




<?php
	include('footer.php');
?>