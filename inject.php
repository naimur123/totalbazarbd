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
			        <h4 class="h4" style="color:white">Inject</h4>
		        </div>
	        </div>
	
	       <br/>
	       <br/>
			
			<div class="row">
				
				<div class="col-md-2" align="center">
					<img src="include/images/inject.jpg"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="Injection.php"><h4>Injection</h4></a>
				</div>
				
				<div class="col-md-2" align="center">
					<img src="include/images/inject.jpg"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="Saline.php"><h4>Saline</h4></a>
				</div>
				
				<div class="col-md-2" align="center">
					<img src="include/images/inject.jpg"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="Infusion.php"><h4>Infusion</h4></a>
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