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
               
                     <li>
					
                        <a href="#">
						
							 <button type="button" class="btn btn-info btn-circle "><i class="fa fa-table fa-fw fa-lg"></i></i>
                            </button>
						Personal Information </a>
                        <ul class="nav nav-second-level">
                            
							
                        </ul>
						
						
                       
					   
                        <!-- /.nav-second-level -->
                    </li>
                 
				 <li>
                        <a href="service_credits.php"> <button type="button" class="btn btn-info btn-circle ">
						<i class="fa fa-bar-chart-o fa-fw"></i> </button>Service Credits
						</a>
                      
                        <!-- /.nav-second-level -->
                    </li>
                   
                   
				   		 <li>
                        <a  href="attendance.php"> <button type="button" class="btn btn-info btn-circle "><i class="fa fa-bar-chart-o fa-fw"></i> </button>Attendance
						 </a>
                
                        <!-- /.nav-second-level -->
                    </li>
					     
				   		 <li>
                        <a  href="Department.php"> <button type="button" class="btn btn-info btn-circle "><i class="fa fa-bar-chart-o fa-fw"></i> 
						</button>Department&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<i class="fa fa-chevron-right fa-1x fa-lg"></i>
						 </a>
						 </a>
                
                        <!-- /.nav-second-level -->
                    </li>
					
					     
				   		 <li>
                        <a  href="attendance.php"> <button type="button" class="btn btn-info btn-circle "><i class="fa fa-bar-chart-o fa-fw"></i> </button>Position
						 </a>
                
                        <!-- /.nav-second-level -->
                    </li>
                  
			
                <!-- /#side-menu -->
            </div>
            <!-- /.sidebar-collapse -->
        </nav>
        <!-- /.navbar-static-side -->

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                   <center> <h1 class="page-header">Department</h1></center>
                </div>
                <!-- /.col-lg-12 -->
					<form action="filtered_department.php" method="POST">
					
				<div class="col-lg-5">
				
	    <div class="input-group custom-search-form">
			<span class="input-group-addon input-sm">Filter by Department:</span>
                            <select name="department" class="form-control">
							<option></option>
																<?php	
		$emp=(" select Distinct department from personal_information") or die(mysql_error());
		$fetch_res = $mysqli->query($emp);
		
		while($show = $fetch_res->fetch_array(MYSQLI_ASSOC))
		
		{$id=$show['employee_id'];
		
	?>
							<option value="<?php echo $show['department']; ?>"><?php echo $show['department']; ?></option>
							
							<?php } ?>
							</select>
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="submit" name="submit">
                                    <i class="fa fa-filter fa-fw"></i>
                                </button>
                            </span>
                        </div>
                        </div>
						</form>
						</br>
						</br>
						</br>
            </div>
            <!-- /.row -->
			
						
   <div class="row-blue">
   <div class="row">
 <div class="col-lg-12">
 	
 	 
 	
                    <div class="panel panel-default" >
                        <div class="panel-heading" style="background-color:#46b8da;">
															<?php	
									$department=$_POST['department'];
		$emp=(" select * from personal_information where department='$department'") or die(mysql_error());
		$fetch_res = $mysqli->query($emp);
		
	$show = $fetch_res->fetch_array(MYSQLI_ASSOC)
		
	
		
	?>
                          <b style="color:#fff; font-size:20px;"><?php echo $show['department']; ?>&nbsp;
						  Department</b>
					
                        </div>
                        <!-- /.panel-heading -->
                       <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Picture</th>
                                            <th>Name</th>
                                            <th>Action</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php	
									$department=$_POST['department'];
		$emp=(" select * from personal_information where department like '%$department%'") or die(mysql_error());
		$fetch_res = $mysqli->query($emp);
		
		while($show = $fetch_res->fetch_array(MYSQLI_ASSOC))
		
		{$id=$show['employee_id'];
		
	?>
                                        <tr class="odd gradeX">
                                            <td><img src="upload/<?php  echo $show['image'];?>" alt="Smiley face" height="42" width="42"> </td>
                                            <td><?php  echo $show['firstname']." ".$show['middlename']." ".$show['surname'];  ?></td>
                                            <td>
											<div class="row"style="border:0px solid black; width:400px;">
											<div class="col-lg-2">
											<form	action="edit_personal_information.php" method="post">
											<button type="submit" class="btn btn-outline btn-info">View</button>
											<input type="hidden" name="employee_id" value="<?php echo $show['employee_id']; ?>">
											</form>
											</div>
											
											<div class="col-lg-2">
												<form	action="edit_personal_information.php" method="post">
											<button type="submit" class="btn btn-outline btn-warning">Edit</button>
													<input type="hidden" name="employee_id" value="<?php echo $show['employee_id']; ?>">
											</form>
												</div>
												
												<div class="col-lg-2">
												<form	action="continue.php" method="post">
											<button type="submit" name="continue" class="btn btn-outline btn-primary">Add Information</button>
													<input type="hidden" name="id" value="<?php echo $show['employee_id']; ?>">
											</form>
												</div>
												</div>
                                  
                                        </tr>
                                     <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                                     <button class="btn btn-outline btn-info btn-sm pull-right" data-toggle="modal" data-target="#myModal">
Add Personal Information
</button>
                        </div>
                        <!-- /.panel-body -->
                    						 			           
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
												<input type="date" name="date_of_birth" class="form-control input-sm" />
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

</body>

</html>
