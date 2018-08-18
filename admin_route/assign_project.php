<?php 		
include('db_con.php');



if(isset($_POST['assign']))
{
$project_id=$_POST['project_id'];
 $assigned_to=$_POST['assigned_to'];


$up_emp=("update projects set 
 assigned_to='$assigned_to'
 
 


 where  project_id='$project_id' ");
 
 
 
 $mysqli->query($up_emp);
header("location:projectlist.php");
}
else { mysqli_error();

	;
}



?>
