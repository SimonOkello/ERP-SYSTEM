<?php 		
include('db_con.php');



if(isset($_POST['save']))
{

 $training_programs_id=$_POST['training_programs_id'];
 $employee_id=$_POST['employee_id'];
 $dates_from=$_POST['dates_from'];
 $dates_to=$_POST['dates_to'];
 $title_seminar=$_POST['title_seminar'];
 $number_hours=$_POST['number_hours'];
 $conducted=$_POST['conducted'];



$up_emp=("update training_programs set 
 date_from='$dates_from',
 date_to='$dates_to',
 title_seminar='$title_seminar',
 number_hours='$number_hours',
 conducted='$conducted'



 where  training_programs_id='$training_programs_id' ");
 
 
 
 $mysqli->query($up_emp);
header("location:user_training_programs.php?id=".$employee_id."");
}
else if(isset($_POST['delete']))
{

$dep_id=$_POST['dep_id'];
$del_emp=("delete from department where dep_id='$dep_id' ");
$mysqli->query($del_emp);
 header('location:department.php');

}
else { echo "";}



?>
