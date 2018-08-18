<?php	include('db_con.php');

if(isset($_POST['submit']))
{






//personal info
$firstname=$_POST['firstname'];
 $surname=$_POST['surname'];
 $date_of_birth=$_POST['date_of_birth'];
 $civil_status=$_POST['civil_status'];
 $department=$_POST['department'];
 $position=$_POST['position'];
 $file=$_FILES["file"]["name"];
 
 //employee details
$employee_id=$_POST['employee_id'];
$employee_id_no=($_POST['employee_id'] + "1");
 $residential_address=$_POST['residential_address'];
 $ra_telephone_no=$_POST['ra_telephone_no'];
 $email_address=$_POST['email_address'];
 $agency_employee_no=$_POST['agency_employee_no'];
 




	
$up_emp=("update personal_information set 
 
 date_of_birth='$date_of_birth',
 firstname='$firstname',
 surname='$surname',
 image='$file',
 civil_status='$civil_status',
 department='$department',
 position='$position'



 where  employee_id='$employee_id' ");

 $mysqli->query($up_emp);
 

$up_emp1=("update employee_details set 
 residential_address='$residential_address',
 ra_telephone_no='$ra_telephone_no',
 email_address='$email_address',
 agency_employee_no='$agency_employee_no'
 


 where  employee_id='$employee_id' ");

 $mysqli->query($up_emp1);
	

	
	
	header("location:user_personal_information.php");
	
	
	
	
}

else { echo "";
}

 

 
 ?>
