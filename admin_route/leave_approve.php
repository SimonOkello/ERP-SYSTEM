<?php 		
include('db_con.php');



if(isset($_POST['approve']))
{

 
 


$employee_id=$_POST['employee_id'];

$up_emp=("update leave_credits set 
 status='Approved'


 where  employee_id='$employee_id' ");
 
 
 
 $mysqli->query($up_emp);
header("location:employe_leave.php");
}
else if(isset($_POST['reject']))
{
$employee_id=$_POST['employee_id'];
$rej_emp=("update leave_credits set 
 status='Rejected'


 where  employee_id='$employee_id' ");
$mysqli->query($rej_emp);
header("location:employe_leave.php");

}
else { echo "";}



?>
