<?php 		
include('db_con.php');



if(isset($_POST['save']))
{
$project_id=$_POST['project_id'];
$proj_name=$_POST['proj_name'];
 $description=$_POST['description'];
 $category=$_POST['category'];
 $client=$_POST['client'];
 $start_date=$_POST['start_date'];
 $end_date=$_POST['end_date'];
 $progress=$_POST['progress'];


$up_emp=("update projects set 
 proj_name='$proj_name',
 description='$description',
 category='$category',
 client='$client',
 start_date='$start_date',
 end_date='$end_date',
 progress='$progress'
 


 where  project_id='$project_id' ");
 
 
 
 $mysqli->query($up_emp);
header("location:projectlist.php");
}
else if(isset($_POST['delete']))
{

$project_id=$_POST['project_id'];
$del_emp=("delete from projects where project_id='$project_id' ");
$mysqli->query($del_emp);
 header('location:projectlist.php');

}
else { mysqli_error();

	;
}



?>
