<?php       
include('db_con.php');



if(isset($_POST['save']))
{

//personal info
  $employee_id=$_POST['employee_id'];
 $job_code=$_POST['job_code'];
 $firstname=$_POST['firstname'];
 $surname=$_POST['surname'];
 $dob=$_POST['dob']; 
 $telephone=$_POST['telephone'];
 $email=$_POST['email'];
 $document=$_POST['document'];
 
 





$emp=(" INSERT INTO application(employee_id,job_code,firstname,surname,dob,telephone,email,document)  
     values('$employee_id','$job_code','$firstname','$surname','$dob','$telephone','$email','$document')");
    $mysqli->query($emp);
        header("location:user_personal_information.php?id=".$employee_id."");
}else { echo "";

}

$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);
if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/jpg")
|| ($_FILES["file"]["type"] == "image/pjpeg")
|| ($_FILES["file"]["type"] == "image/x-png")
|| ($_FILES["file"]["type"] == "image/png"))
&& ($_FILES["file"]["size"] < 1000000000000000)
&& in_array($extension, $allowedExts))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br>";

    }
  else
    {
    echo "Upload: " . $_FILES["file"]["name"] . "<br>";
    echo "Type: " . $_FILES["file"]["type"] . "<br>";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";

    if (file_exists("upload/" . $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "upload/" . $_FILES["file"]["name"]);
      echo "Stored in: " . "upload/" . $_FILES["file"]["name"];
	  

      }
    }
  }
else
  {
  echo "Invalid file";
  }
 ?>
?>

