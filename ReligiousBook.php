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
			        <h4 class="h4" style="color:white">Religious Book</h4>
		        </div>
	        </div>
	
	       <br/>

			<div class="row">
			
				<div class="col-md-2" align="center">
					<img src="include/images/ReligiousBook.jpg"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="Muslims.php"><h4>Muslims</h4></a>
				</div>
				
				<div class="col-md-2" align="center">
					<img src="include/images/gita.jpg"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="Hinduism.php"><h4>Hinduism</h4></a>
				</div>			
				
				<div class="col-md-2" align="center">
					<img src="include/images/bible.png"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="OthersReligion.php"><h4>Others Religion</h4></a>
				</div>	
				
			</div>

			<div class="row">
				
				<br/><br/><br/><br/>
				<br/><br/><br/><br/>
				<br/><br/><br/><br/>

			</div>
			
		</div>
		
	</div>

</div>




<?php
	include('footer.php');
?>