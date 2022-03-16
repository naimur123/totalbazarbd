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
			        <h4 class="h4" style="color:white">Women</h4>
		        </div>
	        </div>
	
	       <br/>
	       <br/>
	
			<div class="row">
				
				<div class="col-md-2" align="center">
					<img src="include/images/girlsdress.png"  class="img-responsive " style="width:170px; height: 110px"/>
					<a style="color:gray" href="GirlsDresses.php"><h4>Girl's Dresses</h4></a>
				</div>
				
				<div class="col-md-2" align="center">
					<img src="include/images/sarees.png"  class="img-responsive " style="width:170px; height: 110px"/>
					<a style="color:gray" href="SareesThan.php"><h4>Sarees & Than</h4></a>
				</div>
				
				<div class="col-md-2" align="center">
					<img src="include/images/burqa.png"  class="img-responsive " style="width:170px; height: 110px"/>
					<a style="color:gray" href="BurqaHijab.php"><h4>Burqa & Hijab</h4></a>
				</div>
				
				<div class="col-md-2" align="center">
					<img src="include/images/ornaments.png"  class="img-responsive " style="width:170px; height: 110px"/>
					<a style="color:gray" href="OrnamentsOthers.php"><h4>Ornaments & Others</h4></a>
				</div>
				
				<div class="col-md-2" align="center">
					<img src="include/images/innerwear.png"  class="img-responsive " style="width:170px; height: 110px"/>
					<a style="color:gray" href="InnerWear.php"><h4>Inner Wear</h4></a>
				</div>
				
				<div class="col-md-2" align="center">
					<img src="include/images/LadiesFootwear.png"  class="img-responsive " style="width:170px; height: 110px"/>
					<a style="color:gray" href="LadiesFootwear.php"><h4>Ladies Footwear</h4></a>
				</div>

			</div>
				
			<div class="row">
			
				<div class="col-md-2" align="center">
					<img src="include/images/LadiesWatch.jpg"  class="img-responsive " style="width:170px; height: 110px"/>
					<a style="color:gray" href="LadiesWatchSunglass.php"><h4>Ladies Watch & Sunglass</h4></a>
				</div>

			</div>		
	</div>
		
	</div>

</div>




<?php
	include('footer.php');
?>