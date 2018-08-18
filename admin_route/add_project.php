<?php       
include('db_con.php');



if(isset($_POST['save']))
{

//project info
$project_id=$_POST['project_id'];
 $proj_name=$_POST['proj_name'];
 $description=$_POST['description'];
 $category=$_POST['category'];
  $cost=$_POST['cost'];
  $client=$_POST['client'];
   $start_date=$_POST['start_date'];
   $end_date=$_POST['end_date'];
   $progress=$_POST['progress'];
 
 





$emp=(" INSERT INTO projects(project_id,proj_name,description,category,cost,client,start_date,end_date,progress)  
     values('$project_id','$proj_name','$description', '$category','$cost','$client','$start_date', '$end_date','$progress')");
    $mysqli->query($emp);

        header("location:projectlist.php");
}

else { echo " ";}


?>

