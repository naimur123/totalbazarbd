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
			        <h4 class="h4" style="color:white">Cement & Paint</h4>
		        </div>
	        </div>
	
	       <br/>

			<div class="row">
				
				<div class="col-md-2" align="center">
					<img src="include/images/cement.png"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="PortlandCement.php"><h4>Portland Cement</h4></a>
				</div>
				
				<div class="col-md-2" align="center">
					<img src="include/images/GrayOthersCement.png"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="GrayOthersCement.php"><h4>Gray & Others Cement</h4></a>
				</div>
							
				<div class="col-md-2" align="center">
					<img src="include/images/paints.png"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="CompositeCement.php"><h4>Paints</h4></a>
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