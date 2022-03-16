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
			        <h4 class="h4" style="color:white">Kitchen Appliance</h4>
		        </div>
	        </div>
	
	       <br/>

			<div class="row">
				
				<div class="col-md-2" align="center">
					<img src="include/images/kitchen.png"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="KitchenFurniture.php"><h4>Kitchen Furniture</h4></a>
				</div>
				
				<div class="col-md-2" align="center">
					<img src="include/images/kitchenCrockeries.png"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="Crockeries.php"><h4>Crockeries</h4></a>
				</div>
							
				<div class="col-md-2" align="center">
					<img src="include/images/PlasticMaterials.png"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="PlasticMaterials.php"><h4>Plastic Materials</h4></a>
				</div>
				
				<div class="col-md-2" align="center">
					<img src="include/images/BlanderMaker.png"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="BlanderMaker.php"><h4>Blander & Maker</h4></a>
				</div>
				
				<div class="col-md-2" align="center">
					<img src="include/images/electrincalAccessories.jpg"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="ElectricalAccessories.php"><h4>Electrical Accessories</h4></a>
				</div>
				
				<div class="col-md-2" align="center">
					<img src="include/images/kitchenAccessories.png"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="OtherAccessories.php"><h4>Other Accessories</h4></a>
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