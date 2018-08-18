<?php       
include('db_con.php');



if(isset($_POST['save']))
{

//jobs

 $job_code=$_POST['job_code'];
 $job_title=$_POST['job_title'];
 $details=$_POST['details'];
  $department=$_POST['department'];
   $status=$_POST['status'];
 
 





$emp=(" INSERT INTO jobs(job_code,job_title,details,department,status)  
     values('$job_code','$job_title','$details','$department', '$status')");
    $mysqli->query($emp);

        header("location:personal_info.php");
}

else { echo " ";}


?>

