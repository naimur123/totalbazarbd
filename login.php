<?php
	if( ! ini_get('date.timezone') )
    {
        date_default_timezone_set('GMT');
    }
    ob_start();
    include('header.php');
// Include config file
require_once ('include/config/dbconfigin.php');
//include('header.php');
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = 'Please enter email or phone number.';
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST['password']))){
        $password_err = 'Please enter your password.';
    } else{
        $password = trim($_POST['password']);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id,email FROM customer_registration WHERE (email = :pemail and conf_pass=:pconfpass and flag=:pflag) or (phone=:pphone and conf_pass=:pconfpass and flag=:pflag)";
        
        if($stmt = $DB_con->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bindParam(':pemail', $param_username, PDO::PARAM_STR);
			$stmt->bindParam(':pphone', $param_username, PDO::PARAM_STR);
            $stmt->bindParam(':pconfpass', $param_pass, PDO::PARAM_STR);
			$stmt->bindParam(':pflag', $flagid, PDO::PARAM_STR);
            // Set parameters
            $param_username = trim($_POST["username"]);
			$param_pass = trim($_POST["password"]);
            $flagid ='1';
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Check if username exists, if yes then verify password
                if($stmt->rowCount() == 1){
                    if($row = $stmt->fetch()){
                            if(!isset($_SESSION)) 
					{ 
						session_start(); 
					} 
							$_SESSION['full_name'] = $username; 
							$_SESSION['userid'] = $row['id'];
							//$_SESSION['valid'] = true;
							//$_SESSION['timeout'] = time();
                            header("location: index.php");
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $messageerror = 'No account found with that Email or Phone Number.';
					//$_SESSION['msgerror'] = $messageerror;
					
                }
            } else{
                $messageerror = "Oops! Something went wrong. Please try again later.";
            }
        }
        
        // Close statement
        unset($stmt);
    }
    
    // Close connection
    unset($pdo);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Total Bazar BD</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="include/css/menunavbar.css" />
	<link rel="stylesheet" href="include/css/footer.css" />
    
   
</head>


<body>

	<div class="container">
	
		<div class="row">
		<?php
	if(isset($messageerror)){
			?>
            <div class="alert alert-danger">
            	<span class="glyphicon glyphicon-info-sign"></span> <strong><?php echo $messageerror; ?></strong>
            </div>
            <?php
	}
	else if(isset($successMSG)){
		?>
        <div class="alert alert-success">
              <strong><span class="glyphicon glyphicon-info-sign"></span> <?php echo $successMSG; ?></strong>
        </div>
        <?php
	}
	?>   
		</div>
		
		<div class="row">
			
			<div class="col-md-4">
			
			</div>
			
			<div class="col-md-4" align="center">
				<b><h2 class="h2">Customer Login</h2></b>
				<div class="panel panel-default">
					
					<div class="panel-heading">
						<h3 class="panel-title">Please fill in your credentials to login</h3>
					</div>
					
					<div class="panel-body">
						<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
						<div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
							<label>User Email or Phone No.</label>
							<input type="text" name="username" placeholder="Insert Phone Number or Email ID" class="form-control" value="<?php echo $username; ?>">
							<span class="help-block"><?php echo $username_err; ?></span>
						</div>    
						<div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
							<label>User Password</label>
							<input type="password" name="password" class="form-control">
							<span class="help-block"><?php echo $password_err; ?></span>
						</div>
						<div class="form-group">
							<input type="submit" class="btn btn-md btn-block" style="background-color:#08B066;color:#fff;" value="Login">
						</div>
						<div class="form-group"> 
							<p class="lead"><b>Don't have an account? </b><a href="customer_register.php" class="btn btn-md btn-block" style="background-color:#EE3232;color:#fff;">Register Now</a></p>
						</div>
						</form>
					</div>
				
				</div>
			</div>

			<div class="col-md-4">
			
			</div>

		</div>
		
	</div>
    
<?php include('footer.php');?>