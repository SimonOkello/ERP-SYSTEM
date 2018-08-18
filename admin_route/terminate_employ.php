<?php       
include('db_con.php');



if(isset($_POST['terminate']))
{

$employee_id=$_POST['employee_id'];
 $date=$_POST['date'];
 $reason=$_POST['reason'];
  
 





$emp=(" INSERT INTO termination(employee_id,date,reason)  
     values('$employee_id','$date','$reason')");
    $mysqli->query($emp);

        header("location:personal_info.php");
//personal info
 
 
$del_emp=("delete from personal_information where employee_id='$employee_id' ");
$mysqli->query($del_emp);
 header('location:personal_info.php');








}else{
	echo "";
}

 ?>
?>

