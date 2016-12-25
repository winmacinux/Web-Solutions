<?php
ob_start();
session_start();
require_once 'Database.php';
 
//$id=$_SESSION['user'];
$id='DMP3-009';

$query1="Select * from registration1 where Leader_id='$id'";
$res1= $conn->query($query1);

$count1 = mysqli_num_rows($res1);
if($count1>0){
		while($row1=mysqli_fetch_assoc($res1)){
			echo '<option value="'.$row1['Member_id'].'">'.$row1['First_Name'].' '.$row1['Last_Name'].'</option>';
		}
	}else{
    echo'<option value="">No Record</option>';
    }
?>