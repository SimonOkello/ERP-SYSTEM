<!DOCTYPE html>
<?php 
include('db_con.php'); 
include('session_user.php'); 
include('logout.php'); 
include('nav_user.php'); ?>

            <!-- /.navbar-top-links -->
			<STRONG>
   <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
               <ul class="nav" id="side-menu">
               
              
              
                     		 <?php	$id=$_SESSION['employee_id'];
                     		
										
											$emp=(" select * from personal_information where employee_id=".$id."") or die(mysql_error());
											$fetch_res = $mysqli->query($emp);
											
											$show = $fetch_res->fetch_array(MYSQLI_ASSOC);
											$position=$show['position'];
											
											
										?>
                           
                            <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<img src=" upload/<?php echo $show['image']; ?>"   class="img-rounded" height="200px" width="200px" >
                            </li>   		
								<?php /*
					$id=$_SESSION['employee_id'];
					$fetch=$mysqli->query("select * from personal_information where employee_id=".$id."");
					$show=$fetch->fetch_array(MYSQLI_BOTH);
					$_SESSION['employee_id']=$show['employee_id'];
					*/
					?>
			
				
										<li class="active">
                        <a href="#">
						<button type="button" class="btn btn-info btn-circle "><i class="fa fa-table fa-fw fa-lg"></i> </button>
						PDS Information<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                           <li >
						
                                <a href="user_personal_information.php?id=<?php echo $id; ?>"class="active_nav">
							&nbsp;&nbsp;
								Personal Information 
								</a>
							
                            </li>
							
                            <li>
					
							       <li>
                                <a href="user_Educational_Background.php ?id=<?php echo $id; ?>" class="not_active">
								&nbsp;&nbsp;
								Educational Background</a>
                            </li>
							       <li>
                                <a href="user_work_experience.php?id=<?php echo $id; ?>" class="not_active">
						&nbsp;&nbsp;
								Work Experience</a>
                            </li>
							       <li>
                                <a href="user_training_programs.php?id=<?php echo $id; ?>" class="not_active">
					&nbsp;&nbsp;
								Training Programs</a>
                            </li>
							       <li>
                                <a href="user_account.php?id=<?php echo $id; ?>" class="not_active">
							&nbsp;&nbsp;
								My Account</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
							 <li class="active">
                        <a href="#">
						<button type="button" class="btn btn-info btn-circle "><i class="fa fa-table fa-fw fa-lg"></i> </button>
						Jobs<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                           <li >
						
                                <a href="apply.php?id=<?php echo $id; ?>"class="not_active">
							&nbsp;&nbsp;
								Apply Jobs 
								</a>
							
                            </li>
                            <li >
						
                                <a href="my_jobs.php?id=<?php echo $id; ?>"class="not_active">
							&nbsp;&nbsp;
								My Jobs 
								</a>
							
                            </li>
                        </ul>
                    </li>
                     <li class="active">
                        <a href="#">
						<button type="button" class="btn btn-info btn-circle "><i class="fa fa-table fa-fw fa-lg"></i> </button>
						Leave Application<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                           <li >
						
                                <a href="user_service_credits.php?id=<?php echo $id; ?>"class="not_active">
							&nbsp;&nbsp;
								Apply Leave 
								</a>
							
                            </li>
                            <li >
						
                                <a href="leave_status.php?id=<?php echo $id; ?>"class="not_active">
							&nbsp;&nbsp;
								Leave Status 
								</a>
							
                            </li>
                        </ul>
                    </li>
                     <li>
                           
							  <a href="house_alloted.php?id=<?php echo $id; ?>" class="not_active">
							   <button type="button" class="btn btn-info btn-circle ">
				
								<i class="fa fa-table fa-fw fa-lg"></i> </button>&nbsp;Housing</a>
                            </li>			
							       <li>
                           
							  <a href="user_attendance.php?id=<?php echo $id; ?>" class="not_active">
							   <button type="button" class="btn btn-info btn-circle ">
								<i class="fa fa-table fa-fw fa-lg"></i> </button>&nbsp;Attendance</a>
                            </li>
							 
                        <!-- /.nav-second-level -->



         
                 
                   
                   
                  
                   
                </ul>
                <!-- /#side-menu -->
            </div>
            <!-- /.sidebar-collapse -->
        </nav>
		</STRONG>
      
        <!-- /.navbar-static-side -->

        <div id="page-wrapper">
            
            <!-- /.row -->
	
   <div class="row-blue" style="width:600px;">
   <div class="row">
 <div class="col-lg-12">
 	
 	 
 	
                    <div class="panel panel-default" >
                     <div class="panel-heading" style="background-color:#46b8da;">
					
                          <b style="color:#fff;"><b style="color:#fff; font-size:25px;"> <center>Personal Information</b></center></b>
                        </div>
					   	<div class="row">            </div>
						</br></br>
                <!--   <div class="col-lg-12">
                   <center> <h1 class="page-header">Personal Information</h1></center>
                </div> -->
                <!-- /.col-lg-12 -->

		
            
                <!-- /.col-lg-12 -->
			
				
		<div class="row">
            	
						</br>
						</br>
						</br>
       
                        <!-- /.panel-heading -->
						<div class="col-lg-12" style="position:relative; top:-90px;width:580px;min-height:120px;">
						   	<div class="row-blue-inner" style="overflow:hidden;">
                       <div class="panel-body">
                            <div class="table-responsive" >
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Picture</th>
                                            <th>Name</th>
                                            <th>Action</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody >
									<?php	
									$id=$_SESSION['employee_id'];
		$emp=(" select * from personal_information where employee_id=".$id."") or die(mysql_error());
		$fetch_res = $mysqli->query($emp);
		
		while($show = $fetch_res->fetch_array(MYSQLI_ASSOC))
		
		{$id=$show['employee_id'];
		
	?>
                                        <tr class="odd gradeX" >
                                            <td style="width:20px;padding-left:10px;">
											<?php 
											$image=$show['image'];
											if ($image!=null)
											{
											echo "<img src='upload/$image' height='42' width='42' style='border-radius:3px;'>";
											} 
											else{
											
												echo "<img src='upload/download (1).jpg' height='42' width='42' style='border-radius:3px;'>";
											
											}
												?>
											</td>
                                            <td style="width:200px;"><?php  echo $show['firstname']." ".$show['middlename']." ".$show['surname'];  ?></td>
                                            
											<td>
											<div class="row">
										
											
										<!--	<div class="col-lg-1" >
										<form	action="edit_personal_information.php" method="post">
											<button type="submit" class="btn btn-outline btn-info">View</button>
													<input type="hidden" name="employee_id" value="<?php echo $show['employee_id']; ?>">
											</form>
											</div>-->
												
											<!--<div class="col-lg-1" style="margin-left:50px;margin-right:50px;">
												<form	action="edit_personal_information.php" method="post">
											<button type="submit" class="btn btn-outline btn-warning">Edit</button>
													<input type="hidden" name="employee_id" value="<?php echo $show['employee_id']; ?>">
											</form>
												</div> -->
												 <?php	   		

	$id=$_SESSION['employee_id'];
		$emp=(" 
	select		personal_information.employee_id,
				personal_information.firstname,
				personal_information.middlename,
				personal_information.surname,
				personal_information.sex,
				personal_information.civil_status,
				personal_information.department,
				personal_information.image,
				personal_information.position,
				personal_information.date_of_birth,
				employee_details.employee_id,
				employee_details.residential_address,
				employee_details.ra_telephone_no,
				employee_details.email_address,
				employee_details.agency_employee_no
				
	
FROM personal_information
INNER JOIN employee_details
ON personal_information.employee_id=employee_details.employee_id where personal_information.employee_id=".$id." ;") or die(mysql_error());
		$fetch_res = $mysqli->query($emp);
		
		$show = $fetch_res->fetch_array(MYSQLI_ASSOC);
		

		
	?>
												<?PHP
												$id=$show['employee_id'];
												
												$db=$show['date_of_birth'];
									
												
												if( $db==null )
												{echo
												'
												<div class="col-lg-1" style="margin-left:40px;">
											
											 <button class="btn btn-outline btn-info" data-toggle="modal" data-target="#myModal">Add Information</button>
											 
													<input type="hidden" name="id" value="<?php echo $show["employee_id"];?> 
										
												</div>';
												
												}
												else
												{ echo
										
														
												
												' 
											<div class="col-lg-1" style="margin-left:40px;" >
												<form	action="personal_information.php" method="post">
											 <button class="btn btn-outline btn-info" data-toggle="modal" data-target="#view_myModal">
										View</button>
													<input type="hidden" name="id" value="<?php echo $show["employee_id"]; ?> 
											</form>
												</div>
												
												<div class="col-lg-1" style="margin-left:40px;" >
											
											 <button class="btn btn-outline btn-warning" data-toggle="modal" data-target="#edit_myModal">Edit</button>
													<input type="hidden" name="id" value="<?php echo $show["employee_id"]; ?>
												</div>';
												}
												?>
												
												</div>
												
												 </td>
										
                                  
                                        </tr>	
	<?php include('edit_user_personal_information.php'); ?>
	<?php include('view_user_personal_information.php'); ?>
                                     <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                               <!--      <button class="btn btn-outline btn-info btn-sm pull-right" data-toggle="modal" data-target="#myModal">
add employee Information
</button>-->

                                    <!-- <button class="btn btn-block btn-outline btn-info btn-lg pull-right" data-toggle="modal" data-target="#user_account">
<strong>Add Personal Information</strong>-->
</button>
                        </div>
                        </div>
                        </div>
						
						
                        <!-- /.panel-body -->
                    	
						 <div class="col-md-1">
						 </br>
						 &nbsp;
						 </div>
						 
					</div>
					</div>
	

                        <!-- /.panel-body -->

                    </div>
                    </div>
                    </div>

					
                    </div>
	
	
	
            
            </div>
            <!-- /.row -->
           
            <!-- /.row -->
            
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
	<!-- Button trigger modal -->

<!-- Modal -->








	
	<?php	   		

	$employee_id=$_SESSION['employee_id'];
		$emp=(" 
	select		personal_information.employee_id,
				personal_information.firstname,
				personal_information.middlename,
				personal_information.surname,
				personal_information.sex,
				personal_information.civil_status,
				personal_information.department,
				personal_information.image,
				personal_information.position,
				employee_details.employee_id,
				employee_details.residential_address,
				employee_details.ra_telephone_no,
				employee_details.email_address,
				employee_details.agency_employee_no

FROM personal_information
INNER JOIN employee_details
ON personal_information.employee_id=employee_details.employee_id where personal_information.employee_id='$employee_id' ;") or die(mysql_error());
		$fetch_res = $mysqli->query($emp);
		
		$show = $fetch_res->fetch_array(MYSQLI_ASSOC)
		
	
		
	?>
	

	
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog"style="width:1000px;">
    <div class="modal-content" style=" height:500px;width:900px;margin-left:-50px;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel"><center><strong>Personal Information</strong></center></h4>
      </div>
	  <form action="add_personal_info.php" method="POST" enctype="multipart/form-data">
      <div class="modal-body">
<div class="col-lg-6">
										<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Gender:</span>
												<select name="sex" class="form-control input-sm" required>
												<option></option>
												<option value="Male">Male</option>
												<option value="Female">Female</option>
												</select>
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Residential Address:</span>
													<input type="text" name="residential_address" class="form-control input-sm" required>
											</div>
											<div class="input-group input-sm">
											  <span class="input-group-addon input-sm">Marital Status</span>
												 <select name="civil_status" class="form-control input-sm" id="animal" required>
															<option value=""></option>
															<option value="Single">Single</option>
															<option value="Married">Married</option>
															<option value="Annulled">Annulled</option>
															<option value="Widowed">Widowed</option>
															<option value="Seperated">Seperated</option>
													
														</select>
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Position:</span>
												<input type="text" name="position" class="form-control input-sm" required>
															<input type="hidden" name="employee_id_no" class="form-control input-sm"
											value="<?php
											$id=$_SESSION['employee_id'];
											echo $id;?>" >
										
											</div>
									
											</br>
											</br>
													<div class="input-group input-sm">
												<span class="input-group-addon input-sm" >Image Upload.:</span>
												<input type="file" name="file" id="file"  class="btn btn-outline btn-success">
											</div>
									</div>
									<div class="col-lg-6">
										<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Date of Birth:</span>
												<input type="date" name="date_of_birth" class="form-control input-sm" required>
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Department:</span>
												<input type="text" name="department" class="form-control input-sm" required>
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Employee No.:</span>
												<input type="text" name="agency_employee_no" class="form-control input-sm" required>
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Telephone No.:</span>
												<input type="text" name="ra_telephone_no" class="form-control input-sm" required>
											</div>
										
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">E-Mail Address:</span>
												<input type="text" name="email_address" class="form-control input-sm" required>
											</div>
											
													<?php		
													$query=("SELECT employee_id FROM personal_information ORDER BY employee_id DESC LIMIT 1");
																$result = $mysqli->query($query);
																
															while(	$rowp = $result->fetch_array(MYSQLI_ASSOC))
															{
											
											?>
												<input type="hidden" name="employee_id" value="<?php echo $rowp['employee_id']; ?>"  style="display:none;" />
											<?php }?>
									</DIV>
      </div>
	  </br>
	  </br>
	  </br>
	  	<div class="row">
	  	<div class="col-lg-12">
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit"  name="submit" class="btn btn-primary">Save</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      </div>
      </div>
      </div>
	  </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->



<div class="modal fade" id="user_account" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" style="width:500px;min-height:200px;">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel"><strong><center>USER ACCOUNT</center></strong></h4>
      </div>
	  <form action="add_user.php" method="POST" >
      <div class="modal-body"style="width:500px;height:240px;overflow:hidden">
<div class="col-lg-12">

	<div class="row">
											<div class="col-lg-12">
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Firstname:</span>
												<input type="text" name="firstname" class="form-control input-sm" required>
										</div>	
											</div>	
											</div>	
											
											<div class="row">
											<div class="col-lg-12">
											<div class="input-group input-sm">
												<span class=" input-group-addon input-sm ">Middlename:</span>
												<input type="text" name="middlename" class="form-control input-sm" required>
											</div>	
											</div>	
											</div>	
											
											<div class="row">
											<div class="col-lg-12">
											<div class="input-group input-sm">
												<span class=" input-group-addon input-sm ">Surname:</span>
												<input type="text" name="surname" class="form-control input-sm" required>
											</div>	
											</div>	
											</div>
											</br>	
											
											<div class="row">
											<div class="col-lg-12">
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Username:</span>
												<input type="text" name="username" class="form-control input-sm" required>
											</div>	
											</div>	
											</div>	
											
											<div class="row">
											<div class="col-lg-12">
											<div class="input-group input-sm">
												<span class=" input-group-addon input-sm ">Password:</span>
												<input type="password" name="password" class="form-control input-sm" required>
											</div>	
											</div>	
											</div>	
											
												
											
											
									</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit"  name="submit" class="btn btn-primary">Save</button>
      </div>
	  </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade " id="asdas" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" style="width:500px;height:200px;">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel"><strong><center>USER ACCOUNT</center></strong></h4>
      </div>
	  <form action="add_user.php" method="POST" >
      <div class="modal-body"style="width:500px;height:100px;overflow:hidden">
<div class="col-lg-12">
											<div class="row">
											<div class="col-lg-12">
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Username:</span>
												<input type="text" name="username" class="form-control input-sm" />
												<input type="hidden" name="sex" class="form-control input-sm" value=" " />
											</div>	
											</div>	
											</div>	
											
											<div class="row">
											<div class="col-lg-12">
											<div class="input-group input-sm">
												<span class=" input-group-addon input-sm ">Password:</span>
												<input type="password" name="password" class="form-control input-sm" />
											</div>	
											</div>	
											</div>	
									
											
											
									</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit"  name="submit" class="btn btn-primary">Save</button>
      </div>
	  </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</body>
    <!-- Core Scripts - Include with every page -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <!-- Page-Level Plugin Scripts - Tables -->
    <script src="js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="js/plugins/dataTables/dataTables.bootstrap.js"></script>

    <!-- SB Admin Scripts - Include with every page -->
    <script src="js/sb-admin.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').dataTable();
    });
    </script>
</html>
