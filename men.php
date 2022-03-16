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
			        <h4 class="h4" style="color:white">Men</h4>
		        </div>
	        </div>
	
	       <br/>
	       <br/>
	
			<div class="row">
				
				<div class="col-md-2" align="center">
					<img src="include/images/shirt.png"  class="img-responsive " style="width:170px; height: 110px"/>
					<a style="color:gray" href="ShirtTShirt.php"><h4>Shirt & T-Shirt</h4></a>
				</div>
				
				<div class="col-md-2" align="center">
					<img src="include/images/pant.png"  class="img-responsive " style="width:170px; height: 110px"/>
					<a style="color:gray" href="PantShorts.php"><h4>Pant & Shorts</h4></a>
				</div>
				
				<div class="col-md-2" align="center">
					<img src="include/images/gentsfootwear.jpg"  class="img-responsive " style="width:170px; height: 110px"/>
					<a style="color:gray" href="GentsFootwear.php"><h4>Gent's Footwear</h4></a>
				</div>
				
				<div class="col-md-2" align="center">
					<img src="include/images/sunglass.png"  class="img-responsive " style="width:170px; height: 110px"/>
					<a style="color:gray" href="SunglassWristWatch.php"><h4>Sunglass & Wrist Watch</h4></a>
				</div>
				
				<div class="col-md-2" align="center">
					<img src="include/images/trousers.jpg"  class="img-responsive " style="width:170px; height: 110px"/>
					<a style="color:gray" href="TrousersOthers.php"><h4>Trousers & Others</h4></a>
				</div>
				
				<div class="col-md-2" align="center">
					<img src="include/images/suits.png"  class="img-responsive " style="width:170px; height: 110px"/>
					<a style="color:gray" href="SuitsBlazers.php"><h4>Suits & Blazers</h4></a>
				</div>

			</div>
				
			<div class="row">
			
				<div class="col-md-2" align="center">
					<img src="include/images/pangabi.jpg"  class="img-responsive " style="width:170px; height: 110px"/>
					<a style="color:gray" href="PanjabiSherwani.php"><h4>Panjabi & Sherwani</h4></a>
				</div>

			</div>		
	</div>
		
	</div>

</div>




<?php
	include('footer.php');
?>