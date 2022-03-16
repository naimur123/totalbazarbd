<?php
 
//MySQLi Procedural
$conn = mysqli_connect("localhost","totalbazarbd_totalbazarwebsite","Total@1010","totalbazarbd_totalbazarbd");
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
 
?>