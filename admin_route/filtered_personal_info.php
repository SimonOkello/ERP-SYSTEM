
							
                                      <!DOCTYPE html>
<?php 
include('db_con.php'); 
include('session_admin.php'); 
include('logout.php'); 
include('nav.php'); ?>

            <!-- /.navbar-top-links -->

        </nav>
        <!-- /.navbar-static-top -->

        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="side-menu">
               
			     <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				  <?php	$id=$_SESSION['user_id'];
                     		
										
											$emp=(" select * from personal_information where employee_id=".$id."") or die(mysql_error());
											$fetch_res = $mysqli->query($emp);
											
											$show = $fetch_res->fetch_array(MYSQLI_ASSOC)
											
											
											
										?>
							<img src=" upload/<?php echo $show['image']; ?>" class="img-rounded" height="200px" width="200px" >
							<center><?php echo $show['firstname']." ".$show['surname']; ?></center>
                            </li>
                     <li>
					
                        <a href="personal_info.php" class="active_nav">
						
							 <button type="button" class="btn btn-info btn-circle "><i class="fa fa-table fa-fw fa-lg"></i>
                            </button>
						<b>Employee</b> &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; </a>
                 
                        <!-- /.nav-second-level -->
                    </li>
                 
				 <li>
                        <a href="service_credits.php" class="not_active"> <button type="button" class="btn btn-info btn-circle ">
						<i class="fa fa-table fa-fw fa-lg"></i> </button><b>Service Credits</b>
						</a>
                      
                        <!-- /.nav-second-level -->
                    </li>
                   
				   
                   
				 	 <li>
                        <a  href="attendance.php" class="not_active"> <button type="button" class="btn btn-info btn-circle "><i class="fa fa-table fa-fw fa-lg"></i> </button>
						<b>Attendance</b>
						 </a>
                
                        <!-- /.nav-second-level -->
                 </li>
			
                  
			
                <!-- /#side-menu -->
            </div>
            <!-- /.sidebar-collapse -->
        </nav>
        <!-- /.navbar-static-side -->

        <div id="page-wrapper">
            
            <!-- /.row -->
	
   <div class="row-blue">
         <b style="color:#fff;"><b style="color:#fff; font-size:25px;"> <center>Employees Table</b></center></b>
                       
   <div class="row">
 <div class="col-lg-12">
 	
 	 
 	
                    <div class="panel panel-default" >
                     <div class="panel-heading" style="background-color:#46b8da;">
					
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
						<div class="col-lg-8" style="position:relative; top:-90px;min-height:100px;">
						   	<div class="row-blue-inner" style="overflow:hidden;min-height:100px">
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
									$department=$_POST['department'];
									$position=$_POST['position'];
		$emp=(" select * from personal_information where department like '%$department%' and position like '%$position%'") or die(mysql_error());
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
												 
												
											<div class="col-lg-1" style="margin-left:70px;" >
												<form	action="continue.php" method="post">
											<button type="submit" name="continue" class="btn btn-outline btn-primary">View Information</button>
													<input type="hidden" name="id" value="<?php echo $show['employee_id']; ?>">
											</form>
												</div>
												</div>
												
												 </td>
										
                                  
                                        </tr>
                                     <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                               <!--      <button class="btn btn-outline btn-info btn-sm pull-right" data-toggle="modal" data-target="#myModal">
add employee Information
</button>-->

                                     <button class="btn btn-block btn-outline btn-info btn-sm pull-right" data-toggle="modal" data-target="#user_account">
<strong>Create User Account</strong>
</button>
                        </div>
                        </div>
                        </div>
						
						
                        <!-- /.panel-body -->
                    		<div class="col-lg-3" style="position:relative; top:-90px; left:-13px;">
                <!-- /.col-lg-12 -->
				<form action="filtered_personal_info.php" method="POST">
				
					<div class="row-blue-inner">
	    <div class="input-group custom-search-form">
		
				<label>Filter by Department:</label>

                            <select name="department" class="form-control btn btn-outline pull-right">
							<option value="<?php $pos=$_POST['department'];  echo $pos ;?>"><?php $pos=$_POST['department'];  echo $pos ;?></option>
																<?php	
		$emp=(" select Distinct department from personal_information order by department ASC ") or die(mysql_error());
		$fetch_res = $mysqli->query($emp);
		
		while($show = $fetch_res->fetch_array(MYSQLI_ASSOC))
		
		{$id=$show['employee_id'];
		
	?>
							<option value="<?php echo $show['department']; ?>"><?php echo $show['department']; ?></option>
							
							<?php } ?>
							</select>
                        
                        </div>
              
			  </br>
	    <div class="input-group custom-search-form">
			<label>Filter by Position:</label>

                            <select name="position" class="form-control btn btn-outline  pull-right">
					
					<option value="<?php $dep=$_POST['position'];  echo $dep ;?>"><?php $dep=$_POST['position'];  echo $dep ;?> </option>
																<?php	
		$emp=(" select Distinct position from personal_information order by position ASC") or die(mysql_error());
		$fetch_res = $mysqli->query($emp);
		
		while($show = $fetch_res->fetch_array(MYSQLI_ASSOC))
		
		{$id=$show['employee_id'];
		
	?>
		
							<option value="<?php echo $show['position']; ?>"><?php echo $show['position']; ?></option>
							
							<?php } ?>
							</select>
                      
                        </div></br>
							<button type="submit" name="submit" class="btn btn-block btn-outline btn-primary pull-right">Search</button>
							</br></br>
                        </div>
                       
					
												
						</form>
						 </div>
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
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" style="width:1000px;">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Personal Information</h4>
      </div>
	  <form action="add_personal_info.php" method="POST" enctype="multipart/form-data">
      <div class="modal-body">
<div class="col-lg-4">
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Firstname:</span>
												<input type="text" name="firstname" class="form-control input-sm" >
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Sex:</span>
												<select name="sex" class="form-control input-sm">
												<option></option>
												<option value="Male">Male</option>
												<option value="Female">Female</option>
												</select>
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Residential Address:</span>
												<textarea name="residential_address" class="form-control input-sm"  rows="1"/></textarea>
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Permanent Address:</span>
												<textarea name="permanent_address"  class="form-control input-sm"  rows="1"> </textarea>
											</div>
											<div class="input-group input-sm">
											  <span class="input-group-addon input-sm">Civil Status</span>
												 <select name="civil_status" class="form-control input-sm" id="animal" >
															<option value=""></option>
															<option value="Male">Single</option>
															<option value="Married">Married</option>
															<option value="Annulled">Annulled</option>
															<option value="Widowed">Widowed</option>
															<option value="Seperated">Seperated</option>
															<option value="Others">Others, specify</option>
														</select>
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Height:</span>
												<input type="text" name="height" class="form-control input-sm" />
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Position:</span>
												<input type="text" name="position" class="form-control input-sm" />
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">GSIS ID No.:</span>
												<input type="text" name="gsis_id_no" class="form-control input-sm" />
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">PhilHealth.:</span>
												<input type="text" name="philhealth_no" class="form-control input-sm" />
											</div>
													<div class="input-group input-sm">
												<span class="input-group-addon input-sm" >Image Upload.:</span>
												<input type="file" name="file" id="file"  class="btn btn-outline btn-success">
											</div>
									</div>
									<div class="col-lg-4">
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Middlename:</span>
												<input type="text" name="middlename" class="form-control input-sm" />
											</DIV>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Date of Birth:</span>
												<input type="date" name="date_of_birth"  class="form-control input-sm" />
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">ZIP Code:</span>
												<input type="text" name="ra_zip_code" class="form-control input-sm" />
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">ZIP Code::</span>
												<input type="text" name="pa_zip_code" class="form-control input-sm" />
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Citizenship:</span>
												<input type="text" name="citizenship" class="form-control input-sm" />
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Weight:</span>
												<input type="text" name="weight" class="form-control input-sm" />
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Department:</span>
												<input type="text" name="department" class="form-control input-sm" />
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Agency Employee No.:</span>
												<input type="text" name="agency_employee_no" class="form-control input-sm" />
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">CSC ID No:</span>
												<input type="cis_no" name="cis_no" class="form-control input-sm" />
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
									<div class="col-lg-4">
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Surname:</span>
												<input type="text" name="surname" class="form-control input-sm" />
												</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Extensions:</span>
												<input type="text" name="surname" class="form-control input-sm" />
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Place of Birth:</span>
												<input type="text" name="place_birth" class="form-control input-sm" />
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Telephone No.:</span>
												<input type="text" name="ra_telephone_no" class="form-control input-sm" />
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Telephone No.:</span>
												<input type="text" name="pa_telephone_no" class="form-control input-sm" />
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">E-Mail Address:</span>
												<input type="text" name="email_address" class="form-control input-sm" />
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Blood Type:</span>
												<input type="text" name="bloodtype" class="form-control input-sm" />
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Cellphone No.:</span>
												<input type="text" name="cellphone_no" class="form-control input-sm" />
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">TIN:</span>
												<input type="text" name="tin" class="form-control input-sm" />
											</div>	
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">SSS No.:</span>
												<input type="text" name="sss_no" class="form-control input-sm" />
											</div>	
											
											<div class="input-group input-sm">
												<span class=" input-group-addon input-sm ">Pag-ibig No.:</span>
												<input type="text" name="pag_ibig_id_no" class="form-control input-sm" />
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

<div class="modal fade" id="user_account" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" style="width:500px;min-height:200px;">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel"><strong><center>USER ACCOUNT</center></strong></h4>
      </div>
	  <form action="add_user.php" method="POST" >
      <div class="modal-body"style="width:500px;height:300px;overflow:hidden">
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
												<div class="row">
											<div class="col-lg-6">
											<div class="input-group input-sm">
												<span class=" input-group-addon input-sm ">Extensions:</span>
												<input type="text" name="ext" class="form-control input-sm" >
																											<?php	
		$emp=(" select * from personal_information order by employee_id asc") or die(mysql_error());
		$fetch_res = $mysqli->query($emp);
		
		while($show = $fetch_res->fetch_array(MYSQLI_ASSOC))
		
		$id=$show['employee_id'];
		
	?>
												<input type="hidden" name="employee_id" class="form-control input-sm" value="<?php echo $id;?>" />
											
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

</html>

