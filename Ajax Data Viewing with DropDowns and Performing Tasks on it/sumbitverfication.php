<?php
	
	ob_start();
session_start();
require_once 'Database.php';

	if(isset($_POST['checkedReports']))
	{

	$arr=$_POST['checkedReports'];

	foreach ($arr as $key) {
		$query = "UPDATE report SET Verified='Yes' WHERE R_ID='$key'";

		$res= $conn->query($query);     
        	
	}
}
?>