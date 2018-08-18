<?php	include('db_con.php');

if(isset($_POST['save']))
{
 $id_card=$_POST['id_card'];
 $names=$_POST['names'];
 $position=$_POST['position'];
 $telephone=$_POST['telephone'];
 $email=$_POST['email'];
 $address=$_POST['address'];
 

$emp=(" insert into team_members(id_card,names,position,telephone,email,address)  
     values('$id_card','$names','$position','$telephone','$email','$address')");
	$mysqli->query($emp);
	header('location:projectlist.php');
}

else { echo "";}





 
 ?>
