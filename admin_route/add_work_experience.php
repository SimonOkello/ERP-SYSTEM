<?php	include('db_con.php');

if(isset($_POST['submit']))
{
 $employee_id=$_POST['employee_id'];
 $dates_from=$_POST['dates_from'];
 $dates_to=$_POST['dates_to'];
 $position_title=$_POST['position_title'];
 $company_name=$_POST['company_name'];
 $department=$_POST['department'];
 $company_phone=$_POST['company_phone'];
 


 

 

$emp=(" insert into work_experience(employee_id,dates_from,dates_to,position_title,company_name,company_phone,department)  
     values('$employee_id','$dates_from','$dates_to','$position_title','$company_name','$company_phone','$department')");
	$mysqli->query($emp);
	header('location:user_work_experience.php');
}

else { echo "";}





 
 ?>
