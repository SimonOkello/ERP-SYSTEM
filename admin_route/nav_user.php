<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>HRMS</title>

    <!-- Core CSS - Include with every page -->
		    <link rel="shortcut icon" href="viclogo.jpg">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">


    <!-- Page-Level Plugin CSS - Tables -->
    <link href="css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">

    <!-- SB Admin CSS - Include with every page -->
    <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body>

    <div id="wrapper">

        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0;background-color:#46b8da;">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="user_personal_information.php" style="color:white;"><strong> HUMAN RESOURCE MANAGEMENT SYSTEM</strong></a>
            </div>
            <!-- /.navbar-header -->

<ul class="nav navbar-top-links navbar-right" style="color:white;" >
			<div class="row"style="font-size:18px;color:#777777; padding: 15px 15px;color:white;" ><strong>Hi</strong> 	<?php	 
		
include('db_con.php'); 
	$employee_id=$_SESSION['employee_id'];
		$emp=(" 
	select	* from personal_information where employee_id='$employee_id' ;") or die(mysql_error());
		$fetch_res = $mysqli->query($emp);
		
		while($show = $fetch_res->fetch_array(MYSQLI_ASSOC))
		{
	?> 
	<Strong style="color:white;"> <?php 	echo $show['firstname']." ".$show['surname']; ?></strong>
	<?php }; ?>
	


<li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                           <i class="fa fa-user fa-fw" style="color:white;"></i>   <i class="fa fa-caret-down"style="color:white;"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
					<!--
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
						-->
									 <?php	$id=$_SESSION['employee_id'];
                     		
										
											$emp=(" select * from personal_information where employee_id=".$id."") or die(mysql_error());
											$fetch_res = $mysqli->query($emp);
											
											$show = $fetch_res->fetch_array(MYSQLI_ASSOC);
											$position=$show['position'];
											
											
										?>
					<?php 
					if ($position=="administrative officer IV")		

{ echo					
					
		'<li ><a href="personal_info.php"class="not_active">
								 <button type="button" class="btn btn-info btn-circle ">
								<i class="fa fa-sign-in fa-fw"></i> </button>
								&nbsp; Admin Panel
								</a>
							
                            </li> 	  <li class="divider"></li>';}
							else {  }
							
										
?>
					
                   
						<li><a href="#" data-toggle="modal" data-target="#logout">
						
						 <button type="button" class="btn btn-info btn-circle ">
								<i class="fa fa-sign-out fa-fw"></i></button>&nbsp;&nbsp;&nbsp;Logout</a>
                  
         
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
				
		
                <!-- /.dropdown -->
             
                <!-- /.dropdown -->

                <!-- /.dropdown -->
             
                <!-- /.dropdown -->
					</div>
            </ul>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<div class="col-lg-3"></div>
						
                <!-- /.dropdown -->
             
                <!-- /.dropdown -->

                <!-- /.dropdown -->
             
                <!-- /.dropdown -->
            </ul>
			  </nav>
        <!-- /.navbar-static-top -->

     