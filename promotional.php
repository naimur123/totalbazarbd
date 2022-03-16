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
			        <h4 class="h4" style="color:white">Promotional Offer</h4>
		        </div>
	        </div>
	
	       <br/>
	       <br/>
			
			<div class="row">
				
				<div class="col-md-2" align="center">
					<img src="include/images/hotdealss.png"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="hotdeals.php"><h4>Hot Deal</h4></a>
				</div>
				
				<div class="col-md-2" align="center">
					<img src="include/images/offer.png"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="offers.php"><h4>Offer</h4></a>
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

		
	</div>

</div>




<?php
	include('footer.php');
?>