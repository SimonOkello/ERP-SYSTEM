<?php	include('db_con.php');
if(isset($_POST['continue']))
{
		$id=$_POST['id'];

	
header("location:personal_information.php?id='$id'");

}

else { echo "";}





 
 ?>