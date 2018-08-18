<?php	include('db_con.php');

if(isset($_POST['submit']))
{
 $employee_id=$_POST['employee_id'];
 $special_skills=$_POST['special_skills'];
 $non_academic_distinctions_recognition=$_POST['non_academic_distinctions_recognition'];
 $membership_association_organization=$_POST['membership_association_organization'];



$emp=(" insert into other_information(employee_id,special_skills,non_academic_distinctions_recognition,membership_association_organization)  
     values('$employee_id','$special_skills','$non_academic_distinctions_recognition','$membership_association_organization')");
	$mysqli->query($emp);

		header("location:user_other_information.php?id=".$employee_id."");
}

else { echo "";}





 
 ?>
