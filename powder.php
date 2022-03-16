<?php
	if( ! ini_get('date.timezone') )
    {
        date_default_timezone_set('GMT');
    }
	include('header.php');
?>

<div class="container-fluid">
	
	<div class="row">
		
		<div class="col-md-1">
		
		</div>
		
		<div class="col-md-10">
			
			<br/>
			
			<div class="row">
		        <div class="col-md-12" align="center" style="background-color:gray">
			        <h4 class="h4" style="color:white">Powder Medicine</h4>
		        </div>
	        </div>
	
	       <br/>
	       <br/>
			
			<div class="row">
				
				<div class="col-md-2" align="center">
					<img src="include/images/Powder.jpg"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="Scrub.php"><h4>Scrub</h4></a>
				</div>
				
				<div class="col-md-2" align="center">
					<img src="include/images/Powder.jpg"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="Sachet.php"><h4>Sachet</h4></a>
				</div>
				
				<div class="col-md-2" align="center">
					<img src="include/images/Powder.jpg"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="Powde.php"><h4>Powder</h4></a>
				</div>
				
				<div class="col-md-2" align="center">
					<img src="include/images/OralSaline.jpg"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="oralsaline.php"><h4>Oral Saline</h4></a>
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
	    
	    
	</div>
			
		</div>
		
		<div class="col-md-1">
		
		</div>
		
	</div>

</div>




<?php
	include('footer.php');
?>