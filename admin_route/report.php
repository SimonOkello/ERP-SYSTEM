<?php

//connect the database
$conn =mysql_connect("localhost","root","")or die(mysql_error());
$db =mysql_select_db('hr', $conn)or die(mysql_error());

//Enter the headings of the excel columns
$contents="STAFF ID,FIRSTNAME,MIDDLENAME,SURNAME,DEPARTMENT,LOGIN DATE,LOGOUT DATE\n";




$user_query = mysql_query(" 
	select		
				personal_information.firstname,
				personal_information.middlename,
				personal_information.surname,
				personal_information.department,
				
			
				attendance.employee_id,
				attendance.login_date,
				attendance.logout_date
	
				
		
	
FROM personal_information
 JOIN attendance 
ON personal_information.employee_id=attendance.employee_id  ;") or die(mysql_error());





//Mysql query to get records from datanbase


//While loop to fetch the records
while($row = mysql_fetch_array($user_query))
{
$contents.=$row['employee_id'].",";
$contents.=$row['firstname'].",";
$contents.=$row['middlename'].",";
$contents.=$row['surname'].",";
$contents.=$row['department'].",";
$contents.=$row['login_date'].",";
$contents.=$row['login_date']."\n";
}

// remove html and php tags etc.
$contents = strip_tags($contents); 

//header to make force download the file
header("Content-Disposition: attachment; filename=Attendance_Report.xls".date('d-m-Y').".csv");
print $contents;

//For more examples related PHP visit www.webinfoipedia.com and enjoy demo and free download..
?>