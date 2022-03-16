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
			        <h4 class="h4" style="color:white">Bricks & Silica</h4>
		        </div>
	        </div>
	
	       <br/>

			<div class="row">
				
				<div class="col-md-2" align="center">
					<img src="include/images/bricks.jpg"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="Bricks.php"><h4>Bricks</h4></a>
				</div>
				
				<div class="col-md-2" align="center">
					<img src="include/images/silica.jpg"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="Silica.php"><h4>Silica</h4></a>
				</div>

			</div>
			
		</div>
		
	</div>
    
    <div class="row">
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
                <br/>
        <br/>
        <br/>
        <br/>
    </div>
    
</div>




<?php
	include('footer.php');
?>