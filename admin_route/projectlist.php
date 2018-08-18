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
                        <a  href="project.php" class="not_active"> <button type="button" class="btn btn-info btn-circle "><i class="fa fa-table fa-fw fa-lg"></i> </button>
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
			<b style="color:#fff; font-size:25px;"> <center>PROJECTS</center></b>
			<div class="row">
                <div class="col-lg-12">
				
                    <div class="panel panel-default" >
					
              
										
                        <!-- .panel-heading -->
                        <div class="panel-body">
                            <div class="panel-group" id="accordion">
                                <div class="panel panel-inverse " style="background-color:#46b8da">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseone" style="color:#fff"> <b> Project List </b></a>
                                        </h4>
                                    </div>
                                    <div id="collapseone" class="panel-collapse collapse in">
                                        <div class="panel-body" style="background-color:#fff">
                                             <div class="table-responsive">
                                <table class="table table-striped" id="dataTables-example">
                                    <thead>
                                        <tr>
                                        	<th>PROJECT ID</th>
                                            <th>NAME </th>
                                            <th>DESCRIPTION</th>
                                            <th>CATEGORY</th>
                                            <th>CLIENT</th>
                                            <th>DEADLINE</th>
                                            <th>PROGRESS</th>
                                            <th>ASSIGNED TO</th>
                                          
                                        </tr>
                                    </thead>
                                    <tbody>
										<?php	
										
																		
											$emp=(" select * from projects") or die(mysql_error());
											$fetch_res = $mysqli->query($emp);
											
											while($show = $fetch_res->fetch_array(MYSQLI_ASSOC))
											
											{
											
										?>
                                        <tr class="odd gradeX">

											<td><?php echo  $show['project_id']?></td>
                                            <td><?php echo  $show['proj_name']?></td>
                                            <td><?php echo  $show['description']?></td>
                                            <td><?php echo  $show['category']?></td>
                                            <td><?php echo  $show['client']?></td>
                                            <td><?php echo  $show['end_date']?></td>
                                            <td><?php echo  $show['progress']?></td>
                                            <td><?php echo  $show['assigned_to']?></td>
                                            <td>	

											<div class="row">
									
											
											<div class="col-lg-2">
												
											  <button class="btn btn-outline btn-warning" data-toggle="modal" data-target="#proj<?php echo $show['project_id'];?>">
                                Edit
                            </button>
													
										
												</div>
													
												</div>
												
												</td>
												<td>	

											<div class="row">
									
											
											<div class="col-lg-2">
												
											  <button class="btn btn-outline btn-warning" data-toggle="modal" data-target="#assign<?php echo $show['project_id'];?>">
                                Assign
                            </button>
													
										
												</div>
													
												</div>
												
												</td>
												<td>
													
											<div class="row">
									
											
											<div class="col-lg-2">
												
											  <button class="btn btn-outline btn-warning" data-toggle="modal" data-target="#del<?php echo $show['project_id'];?>">
                                Delete
                            </button>
													<input type="hidden" name="project_id" value="<?php echo $show['project_id']; ?>">
										
												</div>
													
												</div>
												</td>
                                        </tr>
										
<div class="modal fade" id="proj<?php echo $show['project_id'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel"><center>EDIT PROJECT</center></h4>
      </div>
	
      <div class="modal-body">
       <div class="col-lg-12"> 
				      <div class="panel panel-success">
        
             
		
	<form	action="edit_project.php" method="post">
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm"> ProjectName:</span>
												<input type="text" name="proj_name" class="form-control input-sm"  value="<?php echo $show['proj_name']; ?>"required/>
												
											</div>
										<div class="input-group input-sm">
												<span class="input-group-addon input-sm"> Desccription:</span>
												<input type="text" name="description" class="form-control input-sm"  value="<?php echo $show['description']; ?>"required/>
												
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm"> Category:</span>
												<input type="text" name="category" class="form-control input-sm"  value="<?php echo $show['category']; ?>"required/>
												
											</div>
										
									<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Client:</span>
												<input type="text" name="client" class="form-control input-sm" value="<?php echo $show['client']; ?>" required/>
									
											
											</div>
																	
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm"> StartDate:</span>
												<input type="date" name="start_date" class="form-control input-sm"  value="<?php echo $show['start_date']; ?>"required/>
												
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm"> EndDate:</span>
												<input type="date" name="end_date" class="form-control input-sm" value="<?php echo $show['end_date']; ?>" required/>
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Progress:</span>
												<input type="text" name="progress" class="form-control input-sm" value="<?php echo $show['progress']; ?>" required/>
											</div>
											<input type="hidden" name="project_id" value="<?php echo $show['project_id']; ?>"/>
										
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

<div class="modal fade" id="assign<?php echo $show['project_id'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel"></h4>
      </div>
	
      <div class="modal-body">
       <div class="col-lg-12"> 
				
        
             
		
	<form	action="assign_project.php" method="post">

							<input type="hidden" name="project_id" value="<?php echo $show['project_id']; ?>"/>
											
																	
									<div class="input-group input-sm">
												<span class="input-group-addon input-sm"> Agent:</span>
												<input type="text" name="assigned_to" class="form-control input-sm" required/>
											</div>
								
      </div>

  <!-- /.modal-content -->
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" name="assign" class="btn btn-danger ">Assign</button>
    </div>
</form>
      </div>
  </div>
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</div><!-- /.modal -->

<div class="modal fade" id="del<?php echo $show['project_id'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel"></h4>
      </div>
	
      <div class="modal-body">
       <div class="col-lg-12"> 
				
        
             
		
	<form	action="edit_project.php" method="post">

							<input type="hidden" name="project_id" value="<?php echo $show['project_id']; ?>"/>
											
																	
									<center><strong>Are you sure you want to delete this data?	</strong></center>
								
      </div>

  <!-- /.modal-content -->
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" name="delete" class="btn btn-danger ">Delete</button>
    </div>
</form>
      </div>
  </div>
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</div><!-- /.modal -->
                                      	  <?php }; ?>
                                    </tbody>
                                </table>
               			    <div class="form-group">
                    <div class="col-lg-1 pull-right">
								
										<button class="btn btn-outline btn-info btn-sm pull-right" data-toggle="modal" data-target="#newproj">
								New Project
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
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" style="color:#fff"> <b>Team Members </b></a>
                                        </h4>
                                    </div>
									
                                    <div id="collapseTwo" class="panel-collapse collapse "
                                        <div class="panel-body" style="background-color:#fff">
                                             <div class="table-responsive">
                                <table class="table table-striped" id="dataTables-example">
                                    <thead>
                                        <tr>
                                           <th>AGENT ID CARD</th>
                                            <th>NAMES</th>
                                            <th>POSITION</th>
                                            <th>TELEPHONE</th>
                                            <th>EMAIL</th>
                                            <th>ADDRESS</th>
                                            
                                         
                                          
                                        </tr>
                                    </thead>
                                    <tbody>
										<?php	
										
							
											$emp=(" select * from team_members") or die(mysql_error());
											$fetch_res = $mysqli->query($emp);
											
											while($show = $fetch_res->fetch_array(MYSQLI_ASSOC))
											
											{
											
										?>
                                        <tr class="odd gradeX">
                                        	<td><?php echo $show['id_card']?></td>
                                            <td><?php echo $show['names']?></td>
                                            <td><?php echo $show['position']; ?></td>
                                            <td><?php echo $show['telephone']; ?></td>
                                            <td><?php echo $show['email']; ?></td>
                                            <td><?php echo $show['address']; ?></td>
                                                 
                                            <td>	
											<div class="row">
											<div class="col-lg-4">
										
													  <button class="btn btn-outline btn-warning" data-toggle="modal" data-target="#edit<?php echo $show['id_card']; ?>">
                                Edit
                            </button>
												
											
										
											</div>
											
										
											
												</div>
												</td>
												<td>
													<div class="row">
											<div class="col-lg-4">
										
													  <button class="btn btn-outline btn-warning" data-toggle="modal" data-target="#del_mem<?php echo $show['id_card']; ?>">
                                Delete
                            </button>
												
											
										
											</div>
											
										
											
												</div>
												</td>
                                     
                                        </tr>
										
										<div class="modal fade" id="edit<?php echo $show['id_card']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <center><h4 class="modal-title" id="myModalLabel">EDIT MEMBER</h4></center>
      </div>
	
      <div class="modal-body">
       <div class="col-lg-12"> 
				      <div class="panel panel-success">
        
             
		
	<form	action="edit_member.php" method="POST">
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">ID Card:</span>
												<input type="text" name="id_card" class="form-control input-sm"  value="<?php echo $show['id_card']; ?>"required/>
											</div>
																				
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Names:</span>
												<input type="text" name="names" class="form-control input-sm"  value="<?php echo $show['names']; ?>"required/>
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm"> Position:</span>
												<input type="text" name="position" class="form-control input-sm" value="<?php echo $show['position']; ?>" required/>
											</div>
											
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Telephone:</span>
												<input type="text" name="telephone" class="form-control input-sm" value="<?php echo $show['telephone']; ?>" required/>
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm"> Email:</span>
												<input type="email" name="email" class="form-control input-sm" value="<?php echo $show['email']; ?>" required/>
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm"> Address:</span>
												<input type="text" name="address" class="form-control input-sm" value="<?php echo $show['address']; ?>" required/>
											</div>
											
              <input type="hidden" name="id_card" value="<?php echo $show['id_card']; ?>"/>
        
										
										
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


	<div class="modal fade" id="del_mem<?php echo $show['id_card']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel"></h4>
      </div>
	
      <div class="modal-body">
       <div class="col-lg-12"> 
			
        
             
		
	<form	action="edit_member.php" method="POST">
							
												<input type="hidden" name="id_card" value="<?php echo $show['id_card']; ?>"/>
											
											
									
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
								               			    <div class="form-group">
                    <div class="col-lg-1 pull-right">
 			                     <button class="btn btn-outline btn-info btn-sm pull-right" data-toggle="modal" data-target="#spouse">
New Member
</button>
                    </div>
                  </div>
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
        <h4 class="modal-title" id="myModalLabel"><center>NEW PROJECT</center></h4>
      </div>
	
      <div class="modal-body">
       <div class="col-lg-12"> 
				      <div class="panel panel-success">
        
             
		
 <form action="add_project.php" method="POST">
 											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">ProjectID::</span>
												<input type="text" name="project_id" class="form-control input-sm" placeholder="eg PRJ001" required/>
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Name::</span>
												<input type="text" name="proj_name" class="form-control input-sm" required/>
											</div>
											
											
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm"> Description:</span>
												<input type="text" name="description" class="form-control input-sm" required/>
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm"> Category:</span>
												<input type="text" name="category" class="form-control input-sm" required/>
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Cost:</span>
												<input type="text" name="cost" class="form-control input-sm" required/>
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Client:</span>
												<input type="text" name="client" class="form-control input-sm" required/>
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">StartDate:</span>
												<input type="date" name="start_date" class="form-control input-sm" required/>
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">EndDate:</span>
												<input type="date" name="end_date" class="form-control input-sm" required/>
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Progress:</span>
												<input type="text" name="progress" class="form-control input-sm" required/>
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
								 		<input type="text" name="id_card" class="form-control input-sm" required/>	
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
