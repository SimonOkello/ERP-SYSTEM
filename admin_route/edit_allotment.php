<?php 		
include('db_con.php');



if(isset($_POST['save']))
{

//allotnment info
	$employee_id=$_POST['employee_id'];
	$telephone=$_POST['telephone'];
 $block=$_POST['block'];
 $roomNum=$_POST['roomNum'];
 
 $names=$_POST['names'];
 
 
 
 





$up_emp=("update allotment set 
 block='$block',
 roomNum='$roomNum',
 names='$names',
 telephone='$telephone'

 where  employee_id='$employee_id' ");
 
 
 
 $mysqli->query($up_emp);
header("location:view_houses.php");
}
else if(isset($_POST['delete']))
{

$employee_id=$_POST['employee_id'];
$del_emp=("delete from allotment where employee_id='$employee_id' ");
$mysqli->query($del_emp);
 header('location:view_houses.php');

}
else { echo "";}



?>

