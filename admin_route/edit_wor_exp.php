<?php 		
include('db_con.php');



if(isset($_POST['save']))
{

 $work_experience_id=$_POST['work_experience_id'];
 $employee_id=$_POST['employee_id'];
 $dates_from=$_POST['dates_from'];
 $dates_to=$_POST['dates_to'];
 $position_title=$_POST['position_title'];
 $company_name=$_POST['company_name'];
 $department=$_POST['department'];
 $company_phone=$_POST['company_phone'];


$up_emp=("update work_experience set 
 dates_from='$dates_from',
 dates_to='$dates_to',
 position_title='$position_title',
 company_name='$company_name',
 company_phone='$company_phone',
 department='$department'
 where  work_experience_id='$work_experience_id' ");
 
 $mysqli->query($up_emp);
header("location:user_work_experience.php?id=".$employee_id."");
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
