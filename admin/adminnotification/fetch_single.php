<?php
include('db.php');
include('function.php');
if(isset($_POST["user_id"]))
{
	$output = array();
	$statement = $connection->prepare(
		"SELECT * FROM scrolling_notification 
		WHERE id = '".$_POST["user_id"]."' 
		LIMIT 1"
	);
	$statement->execute();
	$result = $statement->fetchAll();
	foreach($result as $row)
	{
	
		$output["coupcode"] = $row["notification"];
		$output["remarks"] = $row["remarks"];
		$output["active"] = $row["status"];
		
	}
	echo json_encode($output);
}
?>