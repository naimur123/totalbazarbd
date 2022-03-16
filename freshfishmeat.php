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
			        <h4 class="h4" style="color:white">Fresh Fish & Meat</h4>
		        </div>
	        </div>
	
	       <br/>
	       <br/>
			
			<div class="row">
				
				<div class="col-md-2" align="center">
					<img src="include/images/meat.png"  class="img-responsive " style="width:170px; height: 110px"/>
					<a style="color:gray" href="FreshMeat.php"><h4>Fresh Meat</h4></a>
				</div>
				
				<div class="col-md-2" align="center">
					<img src="include/images/freshfish.png"  class="img-responsive " style="width:170px; height: 110px"/>
					<a style="color:gray" href="FreshFish.php"><h4>Fresh Fish</h4></a>
				</div>
				
				<div class="col-md-2" align="center">
					<img src="include/images/dryfish2.jpg"  class="img-responsive " style="width:170px; height: 110px"/>
					<a style="color:gray" href="dryfish.php"><h4>Dry Fish</h4></a>
				</div>
			
			</div>
		
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




<?php
	include('footer.php');
?>