<?php
	if( ! ini_get('date.timezone') )
    {
        date_default_timezone_set('GMT');
    }
	include('header.php');
?>

<div class="container-fluid">
	
	<div class="row">
		
		<div class="col-sm-12">
			
			<br/>
			
			<div class="row">
		        <div class="col-md-12" align="center" style="background-color:gray">
			        <h4 class="h4" style="color:white">Cooking</h4>
		        </div>
	        </div>
	
			<br/>
			<div class="row">
				
				<div class="col-md-2" align="center">
					<img src="include/images/attaflour.png"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="AttaFlour.php"><h4>Atta & Flour</h4></a>
				</div>
				
				<div class="col-md-2" align="center">
					<img src="include/images/colorsflavor.png"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="ColorsFlavours.php"><h4>Colors & Flavours</h4></a>
				</div>
				
				<div class="col-md-2" align="center">
					<img src="include/images/ghee.png"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="Ghee.php"><h4>Ghee</h4></a>
				</div>
				
				<div class="col-md-2" align="center">
					<img src="include/images/lentil.jpg"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="LentilDal.php"><h4>Lentil/Dal</h4></a>
				</div>
				
				<div class="col-md-2" align="center">
					<img src="include/images/oil.jpg"  class="img-responsive " style="width:130px; height: 90px"/>
					<a style="color:gray" href="Oil.php"><h4>Oil</h4></a>
				</div>
				
				<div class="col-md-2" align="center">
					<img src="include/images/otherscooking.png"  class="img-responsive " style="width:130px; height: 90px"/>
					<a style="color:gray" href="OthersCookingItems.php"><h4>Others Cooking</h4></a>
				</div>
			
			</div>
			
			<div class="row">

				<div class="col-md-2" align="center">
					<img src="include/images/pickles.png"  class="img-responsive " style="width:130px; height: 90px"/>
					<a style="color:gray" href="PicklesSauces.php"><h4>Pickles & Sauces</h4></a>
				</div>
				
				<div class="col-md-2" align="center">
					<img src="include/images/rice.jpg"  class="img-responsive " style="width:130px; height: 90px"/>
					<a style="color:gray" href="Rice.php"><h4>Rice</h4></a>
				</div>
				
				<div class="col-md-2" align="center">
					<img src="include/images/salt.jpg"  class="img-responsive " style="width:130px; height: 90px"/>
					<a style="color:gray" href="SaltSugar.php"><h4>Salt & Sugar</h4></a>
				</div>
				
				<div class="col-md-2" align="center">
					<img src="include/images/shemai.jpg"  class="img-responsive " style="width:130px; height: 90px"/>
					<a style="color:gray" href="ShemaiShuji.php"><h4>Shemai & Shuji</h4></a>
				</div>
				
				<div class="col-md-2" align="center">
					<img src="include/images/mixedingriedent.png"  class="img-responsive " style="width:130px; height: 90px"/>
					<a style="color:gray" href="SpecialIngredients.php"><h4>Special Ingredients</h4></a>
				</div>
				
				<div class="col-md-2" align="center">
					<img src="include/images/spicies.jpg"  class="img-responsive " style="width:130px; height: 90px"/>
					<a style="color:gray" href="Spices.php"><h4>Spices</h4></a>
				</div>
			
			</div>
			
			<div class="row">
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