<?php

ob_start();
session_start();
require_once 'Database.php';
 
if(isset($_POST['mem']) && isset($_POST['task'])){
//if(1){
	$i=1; 
	$mem=$_POST['mem'];
	$mem='DMP3-005';
	$task=$_POST['task'];
	//$task='Initiation';


  $query="Select * from Report where M_ID='$mem'and Task='$task' and Verified='no'";

    $res= $conn->query($query);     
          	$count = mysqli_num_rows($res);
			if($count>0){
            while($row=mysqli_fetch_array($res)){
		         
           echo"<tr><td>".$row['R_ID']."</td>";
           echo"<td>".$row['Shares']."</td>";
           echo'<td><a href='.$row['Report_File'].'>'.$row['Report_Type'].'</a></td>';
           echo"<td>".$row['Task']."</td>";
           echo "<td><label class='switch'><input type='checkbox' value='".$row['R_ID']."'><div class='slider round'></div></label></td></tr>";
           
		   }
	}
}
?>
