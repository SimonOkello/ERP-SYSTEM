<!DOCTYPE html>
<?php 
include('db_con.php'); 
include('session_admin.php'); 
include('logout.php'); 
 include('nav.php'); ?>
            <!-- /.navbar-top-links -->
</nav>
        <!-- /.navbar-static-side -->
<STRONG>
   <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
               <ul class="nav" id="side-menu">
               
             
              
                     		 <?php
                     		 	 $user_id=$_SESSION['user_id'];
                     		 $id=$_SESSION['employee_id'];
                     		
										
											$emp=(" select * from personal_information where employee_id=".$id."") or die(mysql_error());
											$fetch_res = $mysqli->query($emp);
											
											$show = $fetch_res->fetch_array(MYSQLI_ASSOC);
											$position=$show['position'];
										?>
                           
                            <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<img src="upload/<?php echo $show['image']; ?>" class="img-rounded" height="200px" width="200px">
                            </li>   		
								<?php /*
					$id=$_SESSION['employee_id'];
					$fetch=$mysqli->query("select * from personal_information where employee_id=".$id."");
					$show=$fetch->fetch_array(MYSQLI_BOTH);
					$_SESSION['employee_id']=$show['employee_id'];
					*/
					?>
			
				
						<li>
					
                        <a href="personal_info.php" class="active_nav">
						
							 <button type="button" class="btn btn-info btn-circle "><i class="fa fa-table fa-fw fa-lg"></i></i>
                            </button>
						<b>Employee</b> &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; </a>
                    

                        <!-- /.nav-second-level -->
                    </li>
                 
				 <li class="active">
                        <a href="#">
                        <button type="button" class="btn btn-info btn-circle "><i class="fa fa-table fa-fw fa-lg"></i> </button>
                        Leave Application<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                           <li >
                        
                                <a href="service_credits.php?id=<?php echo $id; ?>"class="not_active">
                            &nbsp;&nbsp;
                                Leave 
                                </a>
                            
                            </li>
                            <li >
                        
                                <a href="employe_leave.php?id=<?php echo $id; ?>"class="not_active">
                            &nbsp;&nbsp;
                                More Leave Options 
                                </a>
                            
                            </li>
                        </ul>
                    </li>
                   
				   
                   
				 	 <li>
                        <a  href="attendance.php" class="not_active"> <button type="button" class="btn btn-info btn-circle "><i class="fa fa-table fa-fw fa-lg"></i> </button>
						<b>Attendance</b>
						 </a>
                
                        <!-- /.nav-second-level -->
                 </li>

                  <li>
                        <a  href="projectlist.php" class="not_active"> <button type="button" class="btn btn-info btn-circle "><i class="fa fa-table fa-fw fa-lg"></i> </button>
						<b>Project Management</b>
						 </a>
                
                        <!-- /.nav-second-level -->
                 </li>
                  <li>
                        <a  href="recruit.php" class="not_active"> <button type="button" class="btn btn-info btn-circle "><i class="fa fa-table fa-fw fa-lg"></i> </button>
						<b>Recruitment</b>
						 </a>
                
                        <!-- /.nav-second-level -->
                 </li>
                  <li>
                        <a  href="view_houses.php" class="not_active"> <button type="button" class="btn btn-info btn-circle "><i class="fa fa-table fa-fw fa-lg"></i> </button>
						<b>Housing</b>
						 </a>
                
                        <!-- /.nav-second-level -->
                 </li>
                <!-- /#side-menu -->
            </div>
            <!-- /.sidebar-collapse -->
        </nav>
		</STRONG>
        <div id="page-wrapper">
     </br>
			     <div class="row">
           
                <!-- /.col-lg-12 -->
            </div>
			<div class="row-blue">
			<b style="color:#fff; font-size:25px;"> <center>APPLICATIONS & INTERVIEWS</center></b>
			<div class="row">
                <div class="col-lg-12">
				
                    <div class="panel panel-default" >
					
              
										
                        <!-- .panel-heading -->
                        <div class="panel-body">
                            <div class="panel-group" id="accordion">
                                <div class="panel panel-inverse " style="background-color:#46b8da">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseone" style="color:#fff"> <b> Applications </b></a>
                                        </h4>
                                    </div>
                                    <div id="collapseone" class="panel-collapse collapse in">
                                        <div class="panel-body" style="background-color:#fff">
                                             <div class="table-responsive">
                                <table class="table table-striped" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>EMPLOYEE </th>
                                            <th>JOB APPLIED</th>
                                            <th>TELEPHONE</th>
                                            <th>EMAIL</th>
                                            <th>STATUS</th>
                                           
                                          
                                        </tr>
                                    </thead>
                                    <tbody>
										<?php	
										
																		
											$emp=(" select * from application") or die(mysql_error());
											$fetch_res = $mysqli->query($emp);
											
											while($show = $fetch_res->fetch_array(MYSQLI_ASSOC))
											
											{
											
										?>
                                        <tr class="odd gradeX">
										
                                            <td><?php echo $show['firstname']." ".$show['surname']; ?></td>
                                            <td><?php echo  $show['job_code']?></td>
                                            <td><?php echo  $show['telephone']?></td>
                                            <td><?php echo  $show['email']?></td>
                                            <td><?php echo  $show['status']?></td>
                                            <td>	

											<div class="row">
									
											
											<div class="col-lg-2">
												
										<form action="approve.php" method="POST" role="form" class="form-horizontal">
										<div class="form-group">
										    <div class="col-sm-offset-2 col-sm-6">
										      <button type="submit" name="approve" class="btn btn-primary">Approve</button>
										    </div>
										<input type="hidden" name="job_code" value="<?php echo $show['job_code']; ?>"/>
												
										  </div>
										</form>
										
												</div>
													
												</div>
												
												</td>
													<td>	
											<div class="row">
											<div class="col-lg-4">
											<form action="approve.php" method="POST" role="form" class="form-horizontal">
										<div class="form-group">
										    <div class="col-sm-offset-2 col-sm-6">
										      <button type="submit" name="reject" class="btn btn-primary">Reject</button>
										      
										    </div>
										    <input type="hidden" name="job_code" value="<?php echo $show['job_code']; ?>"/>
										
												
										  </div>
										</form>
										
											</div>
											
										
											
												</div>
												</td>
                                        </tr>

                                      	  <?php }; ?>
                                    </tbody>
                                </table>
               			    <div class="form-group">
                    <div class="col-lg-1 pull-right">
								
										<button class="btn btn-outline btn-info btn-sm pull-right" data-toggle="modal" data-target="#newproj">
								New Job
								</button>';
								
                    </div>
                  </div>
                            </div> 
							</div>
                                    </div>
                                </div>
								
								
								  <div class="panel panel-inverse " style="background-color:#46b8da">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" style="color:#fff"> <b>Approved Applications </b></a>
                                        </h4>
                                    </div>
									
                                    <div id="collapseTwo" class="panel-collapse collapse "
                                        <div class="panel-body" style="background-color:#fff">
                                             <div class="table-responsive">
                                <table class="table table-striped" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>JOB CODE.</th>
                                            <th>NAMES</th>
                                            <th>TELEPHONE</th>
                                            <th>EMAIL</th>
                                            <th>RESUME</th>
                                            
                                         
                                          
                                        </tr>
                                    </thead>
                                    <tbody>
										<?php	
										
							
											$emp=(" select * from application where status='Approved'") or die(mysql_error());
											$fetch_res = $mysqli->query($emp);
											
											while($show = $fetch_res->fetch_array(MYSQLI_ASSOC))
											
											{
											
										?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $show['job_code']?></td>
                                            <td><?php echo $show['firstname']."</br>".$show['surname']; ?></td>
                                            <td><?php echo $show['telephone']; ?></td>
                                            <td><?php echo $show['email']; ?></td>
                                            <td><?php echo $show['document']; ?></td>
                                                 
                                            <td>	
											<div class="row">
											<div class="col-lg-4">
										
													  <button class="btn btn-outline btn-warning" data-toggle="modal" data-target="#edit<?php echo $show['job_code']; ?>">
                                Schedule Interview
                            </button>
												
											
										
											</div>
											
										
											
												</div>
												</td>
												<!--<td>
													<div class="row">
											<div class="col-lg-4">
										
													  <button class="btn btn-outline btn-warning" data-toggle="modal" data-target="#spouse<?php echo $show['id']; ?>">
                                Delete
                            </button>
												
											<input type="hidden" name="id" value="<?php echo $show['id']; ?>">
										
											</div>
											
										
											
												</div>
												</td>-->
                                     
                                        </tr>
										
										<div class="modal fade" id="edit<?php echo $show['job_code']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <center><h4 class="modal-title" id="myModalLabel">SCHEDULE INTERVIEW</h4></center>
      </div>
	
      <div class="modal-body">
       <div class="col-lg-12"> 
				      <div class="panel panel-success">
        
             
		
	<form	action="interview.php" method="POST">
									<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Date.:</span>
												<input type="date" name="inter_date" class="form-control input-sm" required/>
											</div>
																				
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Time:</span>
												<input type="time" name="time" class="form-control input-sm" required/>
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm"> Place:</span>
												<input type="text" name="place" class="form-control input-sm" required/>
											</div>										
									</div>
									<input type="hidden" name="job_code" value="<?php echo $show['job_code']; ?>"/>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" name="save" class="btn btn-primary ">Schedule</button>
			</form>
      </div>
    </div><!-- /.modal-content -->

  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</div><!-- /.modal -->


	<div class="modal fade" id="del_spouse<?php echo $show['spouse_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel"></h4>
      </div>
	
      <div class="modal-body">
       <div class="col-lg-12"> 
			
        
             
		
	<form	action="edit_spouse.php" method="POST">
							
												<input type="hidden" name="spouse_id" class="form-control input-sm" value="<?php echo $show['spouse_id']; ?>" >
											
											<input type="hidden" name="employee_id" class="form-control input-sm"
											value="<?php
											$id=substr($_GET['id'],1,-1);	
											$rid=$_GET['id'];	
											if(substr($_GET['id'],0,1)=="'" && substr($_GET['id'],-1)=="'" )
											{echo $id;}
											else{ echo $rid;}?>" >
											
									
      <strong><center> Are you sure you want to delete this data?</center></strong>
										
										
							
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" name="delete" class="btn btn-danger ">Delete</button>
			</form>
      </div>
    </div><!-- /.modal-content -->

  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</div><!-- /.modal -->
                                      <?php }; ?>
                                    </tbody>
									
                                </table>
				  </br>
				  </br>

                            </div> 
							</div>
                                    </div>

										
                                    

                            </div> 
							</div>
                                    </div>
                                </div>								
                            </div>
                        </div>
                        <!-- .panel-body -->

                    </div>
					
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
			   
            <!-- /.row -->

                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            
            <!-- /.row -->
      
            <!-- /.row -->

            <!-- /.row -->
			
            </div>
			
        <!-- /#page-wrapper -->

    </div>
    </div>
    <!-- /#wrapper -->
	


<div class="modal fade" id="newproj" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel"><center>NEW JOB VACANCY</center></h4>
      </div>
	
      <div class="modal-body">
       <div class="col-lg-12"> 
				      <div class="panel panel-success">
        
             
		
 <form action="addjob.php" method="POST">
									<div class="input-group input-sm">
												<span class="input-group-addon input-sm">JobCode::</span>
												<input type="text" name="job_code" class="form-control input-sm" placeholder="eg J001" required/>

											</div>										
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm"> JobTitle:</span>
												<input type="text" name="job_title" class="form-control input-sm" required/>
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm"> Details:</span>
												<input type="text" name="details" class="form-control input-sm" required/>
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Department:</span>
												<input type="text" name="department" class="form-control input-sm" required/>
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Status:</span>
												<input type="text" name="status" class="form-control input-sm" required/>
											</div>

									</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" name="save" class="btn btn-primary ">Save</button>
			</form>
      </div>
    </div><!-- /.modal-content -->

  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</div><!-- /.modal -->



<div class="modal fade" id="spouse" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel"><center>NEW MEMBER</center></h4>
      </div>
	  <form action="new_member.php" method="POST">
      <div class="modal-body">
       <div class="col-lg-12">
				      <div class="panel panel-success">
									<div class="input-group input-sm">
												<span class="input-group-addon input-sm">ID No.:</span>
												<input type="text" name="id_card" class="form-control input-sm" required />
										</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Names:</span>
												<input type="text" name="names" class="form-control input-sm"required />
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Position:</span>
												<input type="text" name="position" class="form-control input-sm" required/>
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Telephone:</span>
												<input type="text" name="telephone" class="form-control input-sm" required/>
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Email:</span>
												<input type="email" name="email" class="form-control input-sm" required/>
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Address:</span>
												<input type="text" name="address" class="form-control input-sm" required/>
											</div>            								
										
									</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" name="save" class="btn btn-primary">Save</button>
      </div>
    </div><!-- /.modal-content -->
	</form>
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
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
