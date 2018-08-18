<?php	include('db_con.php');

if(isset($_POST['save']))
{
 $block=$_POST['block'];	
 $roomNum=$_POST['roomNum'];	
 $noOfrooms=$_POST['noOfrooms'];	
 $employee_id=$_POST['employee_id'];	
 $names=$_POST['names'];
 $telephone=$_POST['telephone'];	
 $date=$_POST['date'];	

 
 
 $room_sub= $noOfrooms - 1 ;	


	$emp=(" insert into allotment(block,roomNum,employee_id,names,date,telephone)  
     values('$block','$roomNum','$employee_id','$names','$date','$telephone')");
	$mysqli->query($emp);
	
	
$up_emp=("update housing set 
noOfrooms='$room_sub'
 where  block='$block' ");
 
 
	$mysqli->query($up_emp);
	header('location:view_houses.php');
}

else { echo "";}

 
 ?>