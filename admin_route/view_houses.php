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
               
              
              
                     		 <?php	$id=$_SESSION['employee_id'];
                     		
										
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
                 
				 <li>
                        <a href="service_credits.php" class="not_active"> <button type="button" class="btn btn-info btn-circle ">
						<i class="fa fa-table fa-fw fa-lg"></i> </button><b>Leave</b>
						</a>
                      
                        <!-- /.nav-second-level -->
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
			<b style="color:#fff; font-size:25px;"> <center>STAFF HOUSES</center></b>
			<div class="row">
                <div class="col-lg-12">
				
                    <div class="panel panel-default" >
					
              
										
                        <!-- .panel-heading -->
                        <div class="panel-body">
                            <div class="panel-group" id="accordion">
                                <div class="panel panel-inverse " style="background-color:#46b8da">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseone" style="color:#fff"> <b> View Houses </b></a>
                                        </h4>
                                    </div>
                                    <div id="collapseone" class="panel-collapse collapse in">
                                        <div class="panel-body" style="background-color:#fff">
                                             <div class="table-responsive">
                                <table class="table table-striped" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            
                                            <th>BLOCK</th>
                                            <th>NO. OF ROOMS</th>
                                            <th>DESCRIPTION</th>
                                            <th>STATUS</th>
                                          
                                        </tr>
                                    </thead>
                                    <tbody>
										<?php										
											$emp=(" select * from housing") or die(mysql_error());
											$fetch_res = $mysqli->query($emp);
											
											while($show = $fetch_res->fetch_array(MYSQLI_ASSOC))
											
											{
											
										?>
                                        <tr class="odd gradeX">
									
                                      
                                            <td><?php echo  $show['block']?></td>
                                            <td><?php echo  $show['noOfrooms']?></td>
                                            <td><?php echo  $show['description']?></td>
                                            <td><?php echo  $show['status']?></td>
                                            <td>	

											<div class="row">
									
											
											<div class="col-lg-2">
												
											  <button class="btn btn-outline btn-warning" data-toggle="modal" data-target="#<?php echo $show['id']; ?>">
                                Edit
                            </button>
													<input type="hidden" name="employee_id" value="<?php echo $show['id']; ?>">
										
												</div>
													
												</div>
												</td>
												<td>	

											<div class="row">
									
											
											<div class="col-lg-2">
												
											  <button class="btn btn-outline btn-warning" data-toggle="modal" data-target="#<?php echo $show['block']; ?>">
                                Allot House
                            </button>
													<input type="hidden" name="block" value="<?php echo $show['block']; ?>">
										
												</div>
													
												</div>
												</td>
                                        </tr>
                                        
										
<div class="modal fade" id="<?php echo $show['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel"><center>EDIT HOUSE</center></h4>
      </div>
	
      <div class="modal-body">
       <div class="col-lg-12"> 
				      <div class="panel panel-success">
        
             
		
	<form	action="edit_house.php" method="post">
									<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Block:</span>
												<input type="text" name="block" class="form-control input-sm" value="<?php echo $show['block']; ?>" required/>
									
											
											</div>
											<input type="hidden" name="id" value="<?php echo $show['id']; ?>">
											
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm"> No. Of Rooms:</span>
												<input type="text" name="noOfrooms" class="form-control input-sm"  value="<?php echo $show['noOfrooms']; ?>"required/>
												
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm"> Description:</span>
												<input type="text" name="description" class="form-control input-sm" value="<?php echo $show['description']; ?>" required/>
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Status:</span>
												<input type="text" name="status" class="form-control input-sm" value="<?php echo $show['status']; ?>" required/>
											</div>
										
									</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" name="save" class="btn btn-primary ">Update</button>
			</form>
      </div>
    </div><!-- /.modal-content -->

  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</div><!-- /.modal -->


<div class="modal fade" id="<?php echo $show['block']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel"><center>ALLOT HOUSE</center></h4>
      </div>
	
      <div class="modal-body">
       <div class="col-lg-12"> 
				      <div class="panel panel-success">
        
             
		
	<form	action="Allot_houses.php" method="post">
									<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Block:</span>
												<input type="text" name="block" class="form-control input-sm" required/>
									
											
											</div>
											
											
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm"> Room?:</span>
												<input type="text" name="roomNum" class="form-control input-sm" required/>
												
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm"> Employee:</span>
												<input type="text" name="names" class="form-control input-sm" required/>
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Employee Id:</span>
												<input type="text" name="employee_id" class="form-control input-sm" required/>
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Telephone:</span>
												<input type="text" name="telephone" class="form-control input-sm"  required/>
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Allot Date:</span>
												<input type="date" name="date" class="form-control input-sm"  required/>
											</div>
										
									</div>
								<input type="hidden" name="block" value="<?php echo $show['block']; ?>">
								<input type="hidden" name="noOfrooms" class="form-control input-sm" value="<?php echo $show['noOfrooms']; ?>"  >
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" name="save" class="btn btn-primary ">Allot</button>
			</form>
      </div>
    </div><!-- /.modal-content -->

  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</div><!-- /.modal -->

<div class="modal fade" id="del<?php echo $show['employee_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel"></h4>
      </div>
	
      <div class="modal-body">
       <div class="col-lg-12"> 
				
        
             
		
	<form	action="add_parents.php" method="post">
							
											<input type="hidden" name="employee_id" class="form-control input-sm"
											value="<?php
											$id=substr($_GET['id'],1,-1);	
											$rid=$_GET['id'];	
											if(substr($_GET['id'],0,1)=="'" && substr($_GET['id'],-1)=="'" )
											{echo $id;}
											else{ echo $rid;}?>" >
																	
									<center><strong>Are you sure you want to delete this data?	</strong></center>
								
      </div>

    </div><!-- /.modal-content -->
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" name="delete" class="btn btn-danger ">Delete</button>
			</form>
      </div>
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</div><!-- /.modal -->
                                      	  <?php }; ?>
                                    </tbody>
                                </table>
               			    <div class="form-group">
                    <div class="col-lg-1 pull-right">
								
										<button class="btn btn-outline btn-info btn-sm pull-right" data-toggle="modal" data-target="#parent">
								Add House
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
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" style="color:#fff"> <b>View House Allotment </b></a>
                                        </h4>
                                    </div>
									
                                    <div id="collapseTwo" class="panel-collapse collapse "
                                        <div class="panel-body" style="background-color:#fff">
                                             <div class="table-responsive">
                                <table class="table table-striped" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            
                                            <th>BLOCK</th>
                                            <th>ROOM NUMBER</th>
                                            <th>STAFF ID</th>
                                            <th>STAFF NAME</th>
                                            <th>TELEPHONE</th>
                                            
                                         
                                          
                                        </tr>
                                    </thead>
                                    <tbody>
										<?php	
										
							
											$emp=(" select * from allotment") or die(mysql_error());
											$fetch_res = $mysqli->query($emp);
											
											while($show = $fetch_res->fetch_array(MYSQLI_ASSOC))
											
											{
											
										?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $show['block']; ?></td>
                                            <td><?php echo $show['roomNum']; ?></td>
                                            <td><?php echo $show['employee_id']; ?></td>
                                            <td><?php echo $show['names']; ?></td>
                                            <td><?php echo $show['telephone']; ?></td>
                                                
                                            <td>	
											<div class="row">
											<div class="col-lg-4">
										
													  <button class="btn btn-outline btn-warning" data-toggle="modal" data-target="#spouse<?php echo $show['employee_id']; ?>">
													  	<input type="hidden" name="employee_id" value="<?php echo $show['employee_id']; ?>">
                                Edit
                            </button>
												
											
										
											</div>
											
										
											
												</div>
												</td>
												<td>	
											<div class="row">
											<div class="col-lg-4">
										
													  <button class="btn btn-outline btn-warning" data-toggle="modal" data-target="#del_spouse<?php echo $show['employee_id']; ?>">
													  	<input type="hidden" name="employee_id" value="<?php echo $show['employee_id']; ?>">
                                Delete
                            </button>
												
											
										
											</div>
											
										
											
												</div>
												</td>
                                     
                                        </tr>
										
										<div class="modal fade" id="spouse<?php echo $show['employee_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">View House Allotment</h4>
      </div>
	
      <div class="modal-body">
       <div class="col-lg-12"> 
				      <div class="panel panel-success">
        
             
		
	<form	action="edit_allotment.php" method="POST">
									<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Block:</span>
												<input type="text" name="block" class="form-control input-sm" value="<?php echo $show['block']; ?>" required/>
									
											
											</div>
																							
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Room Number:</span>
												<input type="text" name="roomNum" class="form-control input-sm"  value="<?php echo $show['roomNum']; ?>"required/>
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm"> Staff Name:</span>
												<input type="text" name="names" class="form-control input-sm" value="<?php echo $show['names']; ?>" required/>
											</div>
											
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Telephone:</span>
												<input type="text" name="telephone" class="form-control input-sm" value="<?php echo $show['telephone']; ?>" required/>
											</div>

									</div>
									<input type="hidden" name="employee_id" value="<?php echo $show['employee_id']; ?>">
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


	<div class="modal fade" id="del_spouse<?php echo $show['employee_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel"></h4>
      </div>
	
      <div class="modal-body">
       <div class="col-lg-12"> 
			
        
             
		
	<form	action="edit_allotment.php" method="POST">
							
												<input type="hidden" name="employee_id" class="form-control input-sm" value="<?php echo $show['employee_id']; ?>" >
											
											
											
									
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
	


<div class="modal fade" id="parent" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel"><center>ADD HOUSE</center></h4>
      </div>
	
      <div class="modal-body">
       <div class="col-lg-12"> 
				      <div class="panel panel-success">
        
             
		
 <form action="add_house.php" method="POST">
									<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Block::</span>
												<input type="text" name="block" class="form-control input-sm" required/>
									
											
											</div>
											
											
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm"> No. Of Rooms:</span>
												<input type="text" name="noOfrooms" class="form-control input-sm" required/>
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm"> Description:</span>
												<input type="text" name="description" class="form-control input-sm" required/>
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
        <h4 class="modal-title" id="myModalLabel"><center>ALLOT HOUSE</center></h4>
      </div>
	  <form action="Allot_houses.php" method="POST">
      <div class="modal-body">
       <div class="col-lg-12">
				      <div class="panel panel-success">
									<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Block:</span>
												<input type="text" name="spouse_firstname" class="form-control input-sm" required />
												<input type="hidden" name="employee_id" class="form-control input-sm"
											value="<?php
											$id=substr($_GET['id'],1,-1);	
											$rid=$_GET['id'];	
											if(substr($_GET['id'],0,1)=="'" && substr($_GET['id'],-1)=="'" )
											{echo $id;}
											else{ echo $rid;}?>" >
										</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Room Number:</span>
												<input type="text" name="spouse_middlename" class="form-control input-sm"required />
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Staff Name:</span>
												<input type="text" name="spouse_surname" class="form-control input-sm" required/>
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Telephone:</span>
												<input type="text" name="occupation" class="form-control input-sm" required/>
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Status:</span>
												<input type="text" name="employer_bus_name" class="form-control input-sm" required/>
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
