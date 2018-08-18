<?php 		
include('db_con.php');



if(isset($_POST['save']))
{

//personal info
	$id=$_POST['id'];
 $block=$_POST['block'];
 $noOfrooms=$_POST['noOfrooms'];
 $description=$_POST['description'];
 $status=$_POST['status'];







$up_emp=("update housing set 
 block='$block',
 noOfrooms='$noOfrooms',
 description='$description',
 status='$status'

 where  id='$id' ");
 
 
 
 $mysqli->query($up_emp);
header("location:view_houses.php");
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

