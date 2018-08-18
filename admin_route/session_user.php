<?php
include('db_con.php'); 
session_start();



if(!isset($_SESSION['employee_id']))
{

header('location:../index.php');
}


?>