<?php 		
include('db_con.php');



if(isset($_POST['save']))
{

//personal info
 $firstname=$_POST['firstname'];
 $middlename=$_POST['middlename'];
 $surname=$_POST['surname'];
 $name_extension=$_POST['name_extension'];
 $place_birth=$_POST['place_birth'];
 $date_birth=$_POST['date_of_birth'];
 $sex=$_POST['sex'];
 $civil_status=$_POST['civil_status'];
 $department=$_POST['department'];
 $file=$_FILES["file"]["name"];
 $cis_no=$_POST['cis_no'];
 $position=$_POST['position'];
 
 //employee details
 $employee_id=($_POST['employee_id'] + "1");
 $citizenship=$_POST['citizenship'];
 $height=$_POST['height'];
 $weight=$_POST['weight'];
 $bloodtype=$_POST['bloodtype'];
 $gsis_id_no=$_POST['gsis_id_no'];
 $pag_ibig_id_no=$_POST['pag_ibig_id_no'];
 $philhealth_no=$_POST['philhealth_no'];
 $sss_no=$_POST['sss_no'];
 $residential_address=$_POST['residential_address'];
 $ra_zip_code=$_POST['ra_zip_code'];
 $ra_telephone_no=$_POST['ra_telephone_no'];
 $permanent_address=$_POST['permanent_address'];
 $pa_zip_code=$_POST['pa_zip_code'];
 $pa_telephone_no=$_POST['pa_telephone_no'];
 $email_address=$_POST['email_address'];
 $cellphone_no=$_POST['cellphone_no'];
 $agency_employee_no=$_POST['agency_employee_no'];
 $tin=$_POST['tin'];
 





$up_emp=("update personal_information set 
 firstname='$firstname',
 middlename='$middlename',
 surname='$surname',
 name_extension='$name_extension',
 place_birth='$place_birth',
 sex='$sex',
 civil_status='$civil_status',
 department='$department',
 file='$file',
 cis_no='$cis_no',
 position='$position'


 
 where  employee_id='$employee_id' ");
 
 
 
 $mysqli->query($up_emp);
 header('location:personal_information_table.php');
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

