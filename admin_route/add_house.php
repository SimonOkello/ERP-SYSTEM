<?php       
include('db_con.php');



if(isset($_POST['save']))
{

//jobs

 $block=$_POST['block'];
 $noOfrooms=$_POST['noOfrooms'];
 $description=$_POST['description'];
  $status=$_POST['status'];
  
 
 





$emp=(" INSERT INTO housing(block,noOfrooms,description,status)  
     values('$block','$noOfrooms','$description', '$status')");
    $mysqli->query($emp);

        header("location:view_houses.php");
}

else { echo " ";}


?>



