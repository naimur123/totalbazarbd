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
			        <h4 class="h4" style="color:white">Solution</h4>
		        </div>
	        </div>
	
	       <br/>
	       <br/>
			
			<div class="row">
				
				<div class="col-md-2" align="center">
					<img src="include/images/Solution.jpg"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="IrrigationSolution.php"><h4>Irrigation Solution</h4></a>
				</div>
				
				<div class="col-md-2" align="center">
					<img src="include/images/Solution.jpg"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="Inhalationsolution.php"><h4>Inhalation solution</h4></a>
				</div>
				
				<div class="col-md-2" align="center">
					<img src="include/images/Solution.jpg"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="RespiratorySolution.php"><h4>Respiratory Solution</h4></a>
				</div>

				<div class="col-md-2" align="center">
					<img src="include/images/Solution.jpg"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="Oralsolution.php"><h4>Oral solution</h4></a>
				</div>
				
				<div class="col-md-2" align="center">
					<img src="include/images/Solution.jpg"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="OralSolutionFilm.php"><h4>Oral Solution Film</h4></a>
				</div>
				
				<div class="col-md-2" align="center">
					<img src="include/images/Solution.jpg"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="Solution.php"><h4>Solution</h4></a>
				</div>
				
			</div>
			
		</div>

	</div>

</div>




<?php
	include('footer.php');
?>