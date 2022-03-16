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
			        <h4 class="h4" style="color:white">Glass & Interior Items</h4>
		        </div>
	        </div>
	
	       <br/>

			<div class="row">
				
				<div class="col-md-2" align="center">
					<img src="include/images/glass.jpg"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="GlassItems.php"><h4>Glass Items</h4></a>
				</div>
				
				<div class="col-md-2" align="center">
					<img src="include/images/interior.png"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="InteriorItems.php"><h4>Interior Items</h4></a>
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