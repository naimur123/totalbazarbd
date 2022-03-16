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
			        <h4 class="h4" style="color:white">Medicine</h4>
		        </div>
	        </div>
	
	       <br/>
			
			<div class="row">
				
				<div class="col-md-2" align="center">
					<img src="include/images/capsule.png"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="capsul.php"><h4>Capsule</h4></a>
				</div>
				
				<div class="col-md-2" align="center">
					<img src="include/images/cream.png"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="crea.php"><h4>Cream</h4></a>
				</div>
				
				<div class="col-md-2" align="center">
					<img src="include/images/drop.png"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="drop.php"><h4>Drop</h4></a>
				</div>

				
				<div class="col-md-2" align="center">
					<img src="include/images/foreignmedicine.png"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="ForeignMedicine.php"><h4>Foreign Medicine</h4></a>
				</div>
				
				
				<div class="col-md-2" align="center">
					<img src="include/images/HealthyProduct.png"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="healthyproduct.php"><h4>Health Product</h4></a>
				</div>
				
				<div class="col-md-2" align="center">
					<img src="include/images/InjectItem.png"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="injec.php"><h4>Inject Item</h4></a>
				</div>
				
			</div>
			
			<div class="row">

				<div class="col-md-2" align="center">
					<img src="include/images/Liquid.png"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="Liquid.php"><h4>Liquid</h4></a>
				</div>

				<div class="col-md-2" align="center">
					<img src="include/images/medicalaccessories.jpg"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="MedicalAccessories.php"><h4>Medical Accessories</h4></a>
				</div>

				<div class="col-md-2" align="center">
					<img src="include/images/Powder.png"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="powder.php"><h4>Powder</h4></a>
				</div>
				
				<div class="col-md-2" align="center">
					<img src="include/images/Solution.png"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="solutiongroup.php"><h4>Solution</h4></a>
				</div>
				
				<div class="col-md-2" align="center">
					<img src="include/images/Spray.png"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="spraymedicine.php"><h4>Spray</h4></a>
				</div>
				
				<div class="col-md-2" align="center">
					<img src="include/images/Supplementaryy.jpg"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="Supplementary.php"><h4>Supplementary</h4></a>
				</div>
				
			</div>
			
			<div class="row">
				

				
				<div class="col-md-2" align="center">
					<img src="include/images/Suspention.png"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="Suspentionmedicine.php"><h4>Suspension</h4></a>
				</div>
				
				<div class="col-md-2" align="center">
					<img src="include/images/tablet.png"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="tablet.php"><h4>Tablet</h4></a>
				</div>

				
				<div class="col-md-2" align="center">
					<img src="include/images/Vaccine.png"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="Vaccine.php"><h4>Vaccine</h4></a>
				</div>
				
				<div class="col-md-2" align="center">
					<img src="include/images/HomeopathyMedicines.png"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="HomeopathyMedicines.php"><h4>Homeopathy Medicines</h4></a>
				</div>

				
				<div class="col-md-2" align="center">
					<img src="include/images/AyurvedicUnaniMedicine.png"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="AyurvedicUnaniMedicine.php"><h4>Ayurvedic & Unani Medicine</h4></a>
				</div>
				
			</div>
			
		</div>

		
	</div>

</div>




<?php
	include('footer.php');
?>