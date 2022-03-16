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
					<a style="color:gray" href="PrePrimaryBook.php"><h4>Pre-Primary Book</h4></a>
				</div>

				<div class="col-md-2" align="center">
					<img src="include/images/academic.jpg"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="EnglishMedium.php"><h4>English Medium</h4></a>
				</div>
				
				<div class="col-md-2" align="center">
					<img src="include/images/academic.jpg"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="schoolbooks.php"><h4>School Books</h4></a>
				</div>
				
				<div class="col-md-2" align="center">
					<img src="include/images/academic.jpg"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="AcademicBookHSC.php"><h4>HSC Books</h4></a>
				</div>
				
				<div class="col-md-2" align="center">
					<img src="include/images/academic.jpg"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="universitybooks.php"><h4>University Books</h4></a>
				</div>
										
				<div class="col-md-2" align="center">
					<img src="include/images/academic.jpg"  class="img-responsive" style="width:130px; height: 90px"/>
					<a style="color:gray" href="MadrashaBook.php"><h4>Madrasha Books</h4></a>
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