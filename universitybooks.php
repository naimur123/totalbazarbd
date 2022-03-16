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
			        <h4 class="h4" style="color:white">Academic Book</h4>
		        </div>
	        </div>
	
	       <br/>

			<div class="row">
			
				<div class="col-md-2" align="center">
					<img src="include/images/academic.jpg"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="DegreeHons.php"><h4>Degree(Hons.)</h4></a>
				</div>
				
				<div class="col-md-2" align="center">
					<img src="include/images/academic.jpg"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="DegreePass.php"><h4>Degree(Pass)</h4></a>
				</div>

				<div class="col-md-2" align="center">
					<img src="include/images/academic.jpg"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="PostGraduate.php"><h4>Post Graduate</h4></a>
				</div>
				
				<div class="col-md-2" align="center">
					<img src="include/images/academic.jpg"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="MedicalBook.php"><h4>Medical Book</h4></a>
				</div>
				
				<div class="col-md-2" align="center">
					<img src="include/images/academic.jpg"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="EngineeringBook.php"><h4>Engineering Book</h4></a>
				</div>
				
			
				
			</div>

			<div class="row">
				
				<br/><br/><br/><br/>
				<br/><br/><br/><br/>
				<br/><br/><br/><br/>

			</div>
			
		</div>
		
	</div>

</div>




<?php
	include('footer.php');
?>