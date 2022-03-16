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
			        <h4 class="h4" style="color:white">Mahe Ramadan</h4>
		        </div>
	        </div>
	
	       <br/>
	       <br/>
			
			<div class="row">
				
				<div class="col-md-2" align="center">
					<img src="include/images/dailyiftar.jpg"  class="img-responsive " style="width:170px; height: 110px"/>
					<a style="color:gray" href="readyiftar.php"><h4>Ready Iftar</h4></a>
				</div>
				
				<div class="col-md-2" align="center">
					<img src="include/images/ramadanspecial.jpg"  class="img-responsive " style="width:170px; height: 110px"/>
					<a style="color:gray" href="ramadanspecial.php"><h4>Ramadan Special</h4></a>
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