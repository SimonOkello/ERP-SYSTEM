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



$attendance_admin_query=(" SELECT  personal_information.employee_id ,user.username,user.user_id,user.password,personal_information.position
FROM user
JOIN personal_information
ON user.employee_id=personal_information.employee_id  where  username='$UserName' and password='$Password' and  personal_information.position like '%attendance%' ");

$attendance_admin=$mysqli->query($attendance_admin_query);
$attendance_row= $attendance_admin->fetch_array(MYSQLI_BOTH);
$position=$attendance_row['position'];


$empquery=("select * from user where username='$UserName' and password='$Password'");
$employee=$mysqli->query($empquery);
$empl= $employee->fetch_array(MYSQLI_BOTH);





if ($row > 0){

session_start();
$_SESSION['user_id']=$row['employee_id'];
$_SESSION['UserName']=$UserName;
$user=$_SESSION['UserName'];
$login=$_SESSION['user_id'];

$emp=(" insert into attendance(employee_id,username,login_date)  
     values('$login','$user',NOW())");
	$mysqli->query($emp);
header('location:admin_route/personal_info.php');



}

else if ($empl > 0 && $position!='attendance'){

session_start();
$_SESSION['employee_id']=$empl['employee_id'];
$_SESSION['UserName']=$UserName;
$user=$_SESSION['UserName'];
$employ=$_SESSION['employee_id'];
$emp1=(" insert into attendance(employee_id,username,login_date)  
     values('$employ','$user',NOW())");
	$mysqli->query($emp1);
header("location:admin_route/user_personal_information.php");



}


else if ($attendance_row > 0 && $position=='attendance' ){

session_start();
$_SESSION['admin_attendance']=$attendance_row['employee_id'];
header("location:admin_route/admin_attendance.php");

}








else{
header('location:login_error.php');
?>
   
	
<?php } 

}

?>	