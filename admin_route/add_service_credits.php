<?php	include('db_con.php');

if(isset($_POST['save']))
{
 $position=$_POST['position'];
 


 

 

$emp=(" insert into salary(position)  
     values('$position')");
	$mysqli->query($emp);
	header('location:position.php');
}

else { echo "";}

 
 ?>
