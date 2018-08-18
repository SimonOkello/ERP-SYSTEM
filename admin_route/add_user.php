<?php	include('db_con.php');

if(isset($_POST['submit']))
{
	$employee_id2=$_POST['employee_id'];
 $firstname=$_POST['firstname'];
 
$member_id= strtoupper((substr($firstname,0,3))."-"."0".(($_POST['employee_id'] )));


 $middlename=$_POST['middlename'];
 $surname=$_POST['surname'];
 $username=$_POST['username'];
 $password=$_POST['password'];
 $ext=$_POST['ext'];
 $credits="0";
 $employee_id=($_POST['employee_id'] + "1");
 


$que=$mysqli->query("select * from user where username = '$username' and password = '$password' ");
$result=$que->fetch_array(MYSQLI_ASSOC);
$row=$que->num_rows;
 
 if ($row == 0)
 {
 $emp=(" insert into user(username,password,employee_id)  
     values('$username','$password','$employee_id')");
	$mysqli->query($emp);
	
	$emp=(" insert into service_credits(employee_id,balance,date)  
     values('$employee_id','30',NOW())");
	$mysqli->query($emp);
	
$emp1=(" insert into personal_information(firstname,middlename,surname,member_id,name_extension)  
     values('$firstname','$middlename','$surname','$member_id','$ext')");
	$mysqli->query($emp1);
	
	$emp2=(" insert into employee_details(employee_id)  
								values('$employee_id')");
	$mysqli->query($emp2);
header("location:user_exist.php?id=".$employee_id."");
 }
 else
 {

 
 header("location:user_exist.php?id=".$employee_id."");
 }
 
 
}


else { echo "";}





 
 ?>