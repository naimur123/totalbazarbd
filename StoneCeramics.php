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
			        <h4 class="h4" style="color:white">Stone & Ceramics</h4>
		        </div>
	        </div>
	
	       <br/>

			<div class="row">
				
				<div class="col-md-2" align="center">
					<img src="include/images/Stone.jpg"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="Stone.php"><h4>Stone</h4></a>
				</div>
				
				<div class="col-md-2" align="center">
					<img src="include/images/Ceramics.jpg"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="Ceramics.php"><h4>Ceramics</h4></a>
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