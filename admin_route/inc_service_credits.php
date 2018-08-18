<?php	include('db_con.php');

if(isset($_POST['save']))
{
 $employee_id=$_POST['employee_id'];
 $id=$_POST['id'];
 $old_days=$_POST['old_days'];	
 $new_days=$_POST['days'];	
 $date=$_POST['date'];	
 $leave_type=$_POST['leave_type'];	
 
 
 $days= $old_days + $new_days ;	


	 
$emp=(" insert into add_service_credits(date,days,employee_id)  
     values('$date','$new_days','$employee_id')");
	$mysqli->query($emp);
	 
$up_emp=("update service_credits set 
 Balance='$days'
 where  service_credits_id='$id' ");
	$mysqli->query($up_emp);
	
	header('location:service_credits.php');
}

else { echo "";}

 
 ?>