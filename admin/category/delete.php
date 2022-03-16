<?php

include('db.php');
include("function.php");

if(isset($_POST["user_id"]))
{
	
	$statement = $connection->prepare(
		"DELETE FROM category WHERE cat_id = :id"
	);
	$result = $statement->execute(
		array(
			':id'	=>	$_POST["user_id"]
		)
	);
	
	if(!empty($result))
	{
		echo 'Category Deleted';
	}
	else
	{
		echo 'Category Not Deleted';
	}
}



?>