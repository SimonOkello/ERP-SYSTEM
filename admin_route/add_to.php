<?php	include('db_con.php');

if(isset($_POST['submit']))
{
 $employee_id=$_POST['employee_id'];
 $title_seminar=$_POST['title_seminar'];
 $dates_from=$_POST['date_from'];
 $dates_to=$_POST['date_to'];
 $number_hours=$_POST['number_hours'];
 $conducted=$_POST['conducted'];

 


 

 

$emp=(" insert into training_programs(employee_id,title_seminar,date_to,date_from,number_hours,conducted)  
     values('$employee_id','$title_seminar','$dates_to','$dates_from','$number_hours','$conducted')");
	$mysqli->query($emp);

		header("location:user_training_programs.php?id=".$employee_id."");
}

else { echo "";}





 
 ?>
