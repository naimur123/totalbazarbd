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
			        <h4 class="h4" style="color:white">Furniture</h4>
		        </div>
	        </div>
	
	       <br/>

			<div class="row">
				
				<div class="col-md-2" align="center">
					<img src="include/images/WoodFurniture.jpg"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="WoodenFurniture.php"><h4>Wooden Furniture</h4></a>
				</div>
				
				<div class="col-md-2" align="center">
					<img src="include/images/SteelFurniture.png"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="SteelFurniture.php"><h4>Steel Furniture</h4></a>
				</div>
							
				<div class="col-md-2" align="center">
					<img src="include/images/PlywoodFurniture.jpg"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="PlywoodFurniture.php"><h4>Plywood Furniture</h4></a>
				</div>
				
				<div class="col-md-2" align="center">
					<img src="include/images/PlasticFurniture.jpg"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="PlasticFurniture.php"><h4>Plastic Furniture</h4></a>
				</div>
				
				<div class="col-md-2" align="center">
					<img src="include/images/OfficeFurniture.png"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="OfficeFurniture.php"><h4>Office Furniture</h4></a>
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