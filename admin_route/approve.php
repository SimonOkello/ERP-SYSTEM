<?php 		
include('db_con.php');



if(isset($_POST['approve']))
{

 
 


$job_code=$_POST['job_code'];

$up_emp=("update application set 
 status='Approved'


 where  job_code='$job_code' ");
 
 
 
 $mysqli->query($up_emp);
header("location:recruit.php");
}
else if(isset($_POST['reject']))
{
	
$job_code=$_POST['job_code'];

$rej_emp=("update application set 
 status='Rejected'


 where  job_code='$job_code' ");
$mysqli->query($rej_emp);
header("location:recruit.php");

}
else { echo "";}



?>
