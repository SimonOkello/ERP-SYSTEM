<?php 		
include('db_con.php');



if(isset($_POST['submit']))
{

//personal info
 $employee_id=$_POST['employee_id'];
 $username=$_POST['username'];
 $new_password=$_POST['new_password'];
 $password=$_POST['password'];
 $employee_id=$_POST['employee_id'];
 $user_id=$_POST['user_id'];

 																									
		$emp=(" select * from user where password = '$password'") or die(mysql_error());
		$fetch_res = $mysqli->query($emp);
		
		$show = $fetch_res->fetch_array(MYSQLI_ASSOC);
		
		$id=$show['employee_id'];
		$pas=$show['password'];
		
	if($password==$pas )
	{
 

$up_emp=("update user set 
 username='$username',
 password='$new_password'


 where  user_id='$user_id' ");
 
 
 
 $mysqli->query($up_emp);
header("location:user_account.php?id=".$employee_id."");

}

else{echo "";}
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

