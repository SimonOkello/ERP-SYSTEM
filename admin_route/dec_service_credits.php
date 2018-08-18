<?php	include('db_con.php');

if(isset($_POST['save']))
{
 $id=$_POST['id'];	
 $employee_id=$_POST['employee_id'];	
 $Balance=$_POST['Balance'];	
 $leave_type=$_POST['leave_type'];	
 $days=$_POST['days'];	
 $date=$_POST['date'];	

 
 
 $days_sub= $Balance - $days ;	



	$emp=(" insert into leave_credits(date,days,employee_id,leave_type)  
     values('$date','$days','$employee_id','$leave_type')");
	$mysqli->query($emp);
	
	
$up_emp=("update service_credits set 
Balance='$days_sub'
 where  service_credits_id='$id' ");
 
 
	$mysqli->query($up_emp);
	header('location:user_service_credits.php');
}

else { echo "";}

 
 ?>