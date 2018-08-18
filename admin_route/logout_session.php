<?php
// Initialize the session.
// If you are using session_name("something"), don't forget it now!
session_start();
include('db_con.php');

$id=$_SESSION['employee_id'];
		
		
	$up_emp=("update attendance set logout_date=NOW() where  employee_id=".$id." ORDER BY logout_date ASC LIMIT 1 ");

 $mysqli->query($up_emp);
 
 
// Finally, destroy the session.
session_destroy();


header('location:../index.php');
?>