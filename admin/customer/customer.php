<?php
	if( ! ini_get('date.timezone') )
    {
        date_default_timezone_set('GMT');
    }
	if(!isset($_SESSION)) 
	{ 
		session_start(); 
	} 
	if(isset($_SESSION['signed_in']))
	{
		include('../header.php');
	} else
	{
		header("Location:../login.php");
	}
?>

<html>
	<head>
		<title>Total Bazar Admin</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
		<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
		<script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
		<link rel="stylesheet" href="../include/css/menunavbar.css" />		
	</head>
	
	<body>
		
		<div class="container-fluid">
			
			<div class="row">
				<h2 class="h2" align="center"><b>Customer Information</b></h2>
			</div>
			
			<div class="row">
				
				
				<div class="col-md-12">
				<div class="table-responsive">
				<br />
				<div align="right">
					<button type="button" id="add_button" data-toggle="modal" data-target="#userModal" class="btn btn-info"><span class="glyphicon glyphicon-plus-sign"></span> Add New Customer</button>
				</div>
				<br />
				<table id="user_data" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>ID</th>
							<th>Full Name</th>
							<th>Email</th>
							<th>Phone</th>
							<th>Address</th>
							<th>Area</th>
							<th>Active</th>
							<th>Edit</th>
							<th>Delete</th>
						</tr>
					</thead>
				</table>
				
			</div>
				
			
			</div>
			
			</div>
		
		</div>
	</body>
</html>

<div id="userModal" class="modal fade">
	<div class="modal-dialog">
		<form method="post" id="user_form" enctype="multipart/form-data">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Add New Customer</h4>

				</div>
				
				<div class="modal-body">
					
					<div class="container-fluid">
						
						<div class="row">
						
							<div class="col-md-3">

							</div>
								
							<div class="col-md-6">
									
					<b style="color:red">***</b><label>Enter Customer Full Name</label>
					<input type="text" name="fullname" id="fullname" class="form-control" />
					<br />
					<label>Enter Customer Email</label>
					<input type="text" name="cusemail" id="cusemail" class="form-control" />
					<br />
					<b style="color:red">***</b><label>Enter Customer Phone</label>
					<input type="text" name="cusphone" id="cusphone" class="form-control" />
					<br />
					<br />
					<b style="color:red">***</b><label>Enter Customer Address</label>
					<input type="text" name="address" id="address" class="form-control" />
					<br />
					
					<b style="color:red">***</b><label> Select Customer Area</label>
						<select class="form-control round" id="cusarea" name="cusarea">
							<option value="">Select Customer Area</option>												
							<?php
									require_once 'config.php';
									$f_value = '1';
									$stmt = $dbcon->prepare('SELECT distinct area_name FROM customer_area where area_flag=:fvalue order by area_name');
									$stmt->bindParam(':fvalue', $f_value);
									$stmt->execute();
        
									while($row=$stmt->fetch(PDO::FETCH_ASSOC))
									{
										extract($row);
							?>
									<option value="<?php echo $area_name; ?>"><?php echo $area_name; ?></option>
							
							<?php
									}
							?>
							</select>
					<br />
					<b style="color:red">***</b><label>Enter Customer Password</label>
					<input type="password" name="cuspass" id="cuspass" class="form-control" />
					<br />		
					<b style="color:red">***</b><label>Select Flag</label>
					<select class="form-control" name="active" id="active">
			      	<option value="">SELECT</option>
			      	<option value="1">Activate</option>
			      	<option value="0">Deactivate</option>
					</select>
					
							</div>
							
							<div class="col-md-3">

							</div>
							
						</div>
					
					</div>
					
					
				</div>
				<div class="modal-footer">
					<input type="hidden" name="user_id" id="user_id" />
					<input type="hidden" name="operation" id="operation" />
					<input type="submit" name="action" id="action" class="btn btn-primary" value="Add" />
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</form>
	</div>
</div>

<script type="text/javascript" language="javascript" >
$(document).ready(function(){
	
	$('#add_button').click(function(){
		$('#user_form')[0].reset();
		$('.modal-title').text("Add New Customer");
		$('#action').val("Add");
		$('#operation').val("Add");
	});

	var dataTable = $('#user_data').DataTable({
		"processing":true,
		"serverSide":true,
		"order":[],
		"ajax":{
			url:"fetch.php",
			type:"POST"
		},
		"columnDefs":[
			{
				"targets":[3,5,6],
				"orderable":false,
			},
		],

	});

	
	$(document).on('submit', '#user_form', function(event){
		event.preventDefault();
		
		var fullname = $('#fullname').val();
		var cusadd = $('#address').val();
		var cusarea = $('#cusarea').val();
		var cusphone = $('#cusphone').val();
		var cuspass = $('#cuspass').val();
		var active = $('#active').val();
		
		if(fullname !='' && cusadd!='' && cusarea!='' && cusphone!='' && cuspass != '' && active != '')
		{
			$.ajax({
				url:"insert.php",
				method:'POST',
				data:new FormData(this),
				contentType:false,
				processData:false,
				success:function(data)
				{
					alert(data);
					$('#user_form')[0].reset();
					$('#userModal').modal('hide');
					dataTable.ajax.reload();
					location.reload();		
				}
			});
		}
		else
		{
			alert("*** Fields are Required");
		}
	});
	
	
	
	$(document).on('click', '.update', function(){
		var user_id = $(this).attr("id");
		$.ajax({
			url:"fetch_single.php",
			method:"POST",
			data:{user_id:user_id},
			dataType:"json",
			success:function(data)
			{
				$('#userModal').modal('show');
				$('#fullname').val(data.fullname);
				$('#address').val(data.address);
				$('#cusarea').val(data.cusarea);
				$('#cusphone').val(data.cusphone);
				$('#cusemail').val(data.cusemail);
				$('#active').val(data.active);
				$('.modal-title').text("Edit Customer Information");
				$('#user_id').val(user_id);
				$('#action').val("Edit");
				$('#operation').val("Edit");
			}
		})
	});
	
	

	$(document).on('click', '.delete', function(){
		var user_id = $(this).attr("id");
		if(confirm("Are you sure you want to delete this?"))
		{
			$.ajax({
				url:"delete.php",
				method:"POST",
				data:{user_id:user_id},
				success:function(data)
				{
					alert(data);
					dataTable.ajax.reload();
				}
			});
		}
		else
		{
			return false;	
		}
	});
	
});
</script>