<?php 		
include('db_con.php');



if(isset($_POST['save']))
{
$job_code=$_POST['job_code'];
$place=$_POST['place'];
 $time=$_POST['time'];
 $inter_date=$_POST['inter_date'];
 


$up_emp=("update application set 
 place='$place',
 inter_date='$inter_date',
 time='$time'
 
 


 where  job_code='$job_code' ");
 
 
 
 $mysqli->query($up_emp);
header("location:recruit.php");
}
else { mysqli_error();

	;
}



?>
