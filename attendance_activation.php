	<?php
	include('db_con.php');



if (isset($_POST['save'])){

$UserName=$_POST['user'];
$Password=$_POST['pass'];
$ao="Administrative Officer IV";



$admin_query=(" SELECT user.username,user.user_id,user.password,personal_information.employee_id,personal_information.position
FROM user
JOIN personal_information
ON user.employee_id=personal_information.employee_id  where  username='$UserName' and password='$Password' and  personal_information.position like '%administrative officer IV%' ");

$admin=$mysqli->query($admin_query);
$row= $admin->fetch_array(MYSQLI_BOTH);





$empquery=("select * from user where username='$UserName' and password='$Password'");
$employee=$mysqli->query($empquery);
$empl= $employee->fetch_array(MYSQLI_BOTH);





if ($row > 0){

session_start();
$_SESSION['user_id']=$row['user_id'];
header('location:admin_route/personal_info.php');



}

else if ($empl > 0){

session_start();
$_SESSION['employee_id']=$empl['employee_id'];
$keys =$_SESSION['employee_id'];
header("location:admin_route/user_personal_information.php?id=".$keys."");



}






else{
header('location:login_error.php');
?>
   
	
<?php } 

}

?>	