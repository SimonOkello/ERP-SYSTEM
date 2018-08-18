<?php 		
include('db_con.php');



if(isset($_POST['save']))
{

//personal info
 $secondary_id=$_POST['secondary_id'];
 $employee_id=$_POST['employee_id'];
 
 $school_name=$_POST['school_name'];
 $dates_from=$_POST['dates_from'];
 $dates_to=$_POST['dates_to'];
 $scholar_academic_honors=$_POST['scholar_academic_honors'];






$up_emp=("update secondary set 
 school_name='$school_name',
 dates_from='$dates_from',
 dates_to='$dates_to',
 scholar_academic_honors='$scholar_academic_honors'

 where  secondary_id='$secondary_id' ");
 
 
 
 $mysqli->query($up_emp);
header("location:user_educational_background.php?id=".$employee_id."");
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

