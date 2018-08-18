<?php 		
include('db_con.php');



if(isset($_POST['save']))
{
$id_card=$_POST['id_card'];
$names=$_POST['names'];
 $position=$_POST['position'];
 $telephone=$_POST['telephone'];
 $email=$_POST['email'];
 $address=$_POST['address'];


$up_emp=("update team_members set 
 id_card='$id_card',
 names='$names',
 position='$position',
 telephone='$telephone',
 email='$email',
 address='$address'
 


 where  id_card='$id_card' ");
 
 
 
 $mysqli->query($up_emp);
header("location:projectlist.php");
}
else if(isset($_POST['delete']))
{

$id_card=$_POST['id_card'];
$del_emp=("delete from team_members where id_card='$id_card' ");
$mysqli->query($del_emp);


 header('location:projectlist.php');

}
else { mysqli_error();

	;
}



?>
