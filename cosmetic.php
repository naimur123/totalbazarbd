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
			        <h4 class="h4" style="color:white">Cosmetics</h4>
		        </div>
	        </div>
	
	       <br/>

			<div class="row">
			
				<div class="col-md-2" align="center">
					<img src="include/images/handwash.png"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="HandWash.php"><h4>Hand Wash</h4></a>
				</div>
				
				<div class="col-md-2" align="center">
					<img src="include/images/LadiesParlorItemsss.png"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="LadiesParlorItems.php"><h4>Ladies Parlor Items</h4></a>
				</div>
				
				<div class="col-md-2" align="center">
					<img src="include/images/Lipstick.jpg"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="Lipstick.php"><h4>Lipstick</h4></a>
				</div>
				
				<div class="col-md-2" align="center">
					<img src="include/images/haircare.png"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="HairCare.php"><h4>Hair Care</h4></a>
				</div>

				
				<div class="col-md-2" align="center">
					<img src="include/images/ShavingItems.png"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="ShavingItems.php"><h4>Shaving Items</h4></a>
				</div>
				
				<div class="col-md-2" align="center">
					<img src="include/images/SkinCareItems.png"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="SkinCareItems.php"><h4>Skin Care Items</h4></a>
				</div>
				
			</div>
			
			<div class="row">
				
				<div class="col-md-2" align="center">
					<img src="include/images/SoapShampoo.png"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="SoapShampoo.php"><h4>Soap & Shampoo</h4></a>
				</div>
				
				<div class="col-md-2" align="center">
					<img src="include/images/TelcomPowder.png"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="TelcomPowder.php"><h4>Telcom Powder</h4></a>
				</div>
				
				<div class="col-md-2" align="center">
					<img src="include/images/TissueNapkin.jpg"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="TissueNapkin.php"><h4>Tissue & Napkin</h4></a>
				</div>
				
				<div class="col-md-2" align="center">
					<img src="include/images/CreamLotion.png"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="CreamLotion.php"><h4>Cream & Lotion</h4></a>
				</div>
				
				<div class="col-md-2" align="center">
					<img src="include/images/Deodorants.png"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="Deodrants.php"><h4>Deodorants</h4></a>
				</div>
				
				<div class="col-md-2" align="center">
					<img src="include/images/FacialItems.png"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="FacialItems.php"><h4>Facial Items</h4></a>
				</div>
				
			</div>
			
			<div class="row">
				
				<div class="col-md-2" align="center">
					<img src="include/images/ImportedCosmeticks.jpg"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="ForeignImportedCosmeticks.php"><h4>Imported Cosmetics</h4></a>
				</div>
				
				<div class="col-md-2" align="center">
					<img src="include/images/OralCare.png"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="OralCare.php"><h4>Oral Care</h4></a>
				</div>
				
			</div>
			
		</div>
		
	</div>

</div>




<?php
	include('footer.php');
?>