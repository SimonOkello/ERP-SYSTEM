<?php
include('db_con.php'); 
session_start();



if(isset($_SESSION['user_id']))
{

header('location:admin_route/personal_info.php');
}

else
if(isset($_SESSION['employee_id']))
{

header('location:admin_route/user_personal_information.php');
}



?>