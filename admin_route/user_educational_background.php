<!DOCTYPE html>
<?php 
include('db_con.php'); 
include('session_user.php'); 
include('logout.php'); 
 include('nav_user.php');
  ?>
            <!-- /.navbar-top-links -->

        </nav>
        <!-- /.navbar-static-top -->
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
							<img src=" upload/<?php echo $show['image']; ?>" class="img-rounded" height="200px" width="200px">
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
						
                                <a href="user_personal_information.php?id=<?php echo $id; ?>"class="not_active">
							&nbsp;&nbsp;
								Personal Information 
								</a>
							
                            </li>
							       <li>
                                <a href="user_Educational_Background.php ?id=<?php echo $id; ?>" class="active_nav">
								&nbsp;&nbsp;
								Educational Background</a>
                            </li>
							       <li>
                                <a href="user_work_experience.php?id=<?php echo $id; ?>" class="not_active">
						&nbsp;&nbsp;
								Work Experience</a>
                            </li>							       <li>
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
            <div class="row">
             
                <!-- /.col-lg-12 -->
            </div>
			
				  </br>
				  </br>
			   <div class="row-blue">

			      <div class="col-lg-12">
			
                <b style="color:#fff; font-size:25px;"> <center>  Educational Background Information </center></b>
                </div>
			   <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default" >
                       
                        <!-- .panel-heading -->
                        <div class="panel-body">
                            <div class="panel-group" id="accordion">
                                <div class="panel panel-inverse " style="background-color:#46b8da">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseone" style="color:#fff"> <b> Primary Information </b></a>
                                        </h4>
                                    </div>
                                    <div id="collapseone" class="panel-collapse collapse in">
                                        <div class="panel-body" style="background-color:#fff">
                                             <div class="table-responsive">
                                <table class="table table-striped" id="dataTables-example">
                                    <thead>
                                        <tr>
                                             <th>SchoolName</th>
                                            <th>
											Dates From-To</br>
											(YY-MM-DD)
											</th>
                                         
                                            <th>Marks</th>
                                           
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
											<?php	
											$id=$_SESSION['employee_id'];
											$emp=(" select * from elementary where employee_id=".$id."") or die(mysql_error());
											$fetch_res = $mysqli->query($emp);
											
											while($show = $fetch_res->fetch_array(MYSQLI_ASSOC))
											
											{
											
										?>
                                        <tr class="odd gradeX">
                                             <td><?php echo $show['school_name']; ?></td>
											 <td><?php echo $show['dates_from']."</br>".$show['dates_to']; ?></td>
                                            <td><?php echo $show['scholar_academic_honors']; ?></td>
                                     
                                           <td>
                                      
											
											<div class="col-lg-1">
												<form	action="edit_personal_information.php" method="post">
														<button class="btn btn-outline btn-warning" data-toggle="modal" data-target="#myModal<?php echo $show['elementary_id'];?>">
                                Edit
                            </button>
													<input type="hidden" name="employee_id" value="<?php echo $show['employee_id']; ?>">
											</form>
												</div>
												</td>
                                        </tr>
										
							
                            <!-- Modal -->
					
                            <div class="modal fade" id="myModal<?php echo $show['elementary_id'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
										<form action="edit_el.php" method="POST">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"><center>PRIMARY INFORMATION</center></h4>
                                        </div>
									
                                        <div class="modal-body">
                                   
										<div class="input-group input-sm">
												<span class="input-group-addon input-sm">School Name:</span>
												<input type="text" name="school_name" class="form-control input-sm" value="<?php echo $show['school_name'];  ?>"/>
												<input type="hidden" name="el_id" class="form-control input-sm" value="<?php echo $show['elementary_id'];  ?>"/>
														<input type="hidden" name="employee_id" class="form-control input-sm"
											value="<?php
											$id=substr($_GET['id'],1,-1);	
											$rid=$_GET['id'];	
											if(substr($_GET['id'],0,1)=="'" && substr($_GET['id'],-1)=="'" )
											{echo $id;}
											else{ echo $rid;}?>" >
											</div>
													<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Started in:</span>
												<input type="year" name="dates_from" class="form-control input-sm" value="<?php echo $show['dates_from'];  ?>"/>
											</div>

													<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Finished in:</span>
												<input type="year" name="dates_to" class="form-control input-sm" value="<?php echo $show['dates_to'];  ?>"/>
											</div>
				
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Marks:</span>
												<input type="text" name="scholar_academic_honors" class="form-control input-sm"value="<?php echo $show['scholar_academic_honors'];  ?>" />
											</div>
									</div>
								
									
									
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button type="submit" name="save" class="btn btn-primary">Save</button>
                                        </div>
                                    </div>
									</form>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
							
                          
										<?php }; ?>
                                      
                                    </tbody>
                                </table>
               			    <div class="form-group">
                    <div class="col-lg-1 pull-right">
					
 			                <button class="btn btn-outline btn-info btn-sm pull-right" data-toggle="modal" data-target="#Elementary">
Add Primary Information
</button>
                    </div>
                  </div>
                            </div> 
							</div>
                                    </div>
                                </div>
								
								
								  <div class="panel panel-inverse " style="background-color:#46b8da">
                                    <div class="panel-heading">
                                        </h4>
                                       <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" style="color:#fff"> <b> Secondary Information </b></a>
                                     </div>
                                    <div id="collapseTwo" class="panel-collapse collapse">
                                        <div class="panel-body" style="background-color:#fff">
                                             <div class="table-responsive">
                                <table class="table table-striped" id="dataTables-example">
                                    <thead>
                                       <tr>
                                            <th>SchoolName</th>
                                 			 <th>Dates from-To </br> (Year-Month-Date)</th>
                                            
                                           
                                            
                                            <th>Grade</th>
                                            <th>Action</th>
                                          
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php	$id=$_SESSION['employee_id'];
											$emp=(" select * from secondary where employee_id=".$id."") or die(mysql_error());
											$fetch_res = $mysqli->query($emp);
											
											while($show = $fetch_res->fetch_array(MYSQLI_ASSOC))
											
											{
											
										?>
                                         <tr class="odd gradeX">
                                            <td><?php echo $show['school_name']; ?></td>
											<td><?php echo $show['dates_from']."</br>".$show['dates_to']; ?></td>
                                            <td><?php echo $show['scholar_academic_honors']; ?></td>

                                           <td>
                                    
											
													<div class="col-lg-1">
												<form	action="edit_personal_information.php" method="post">
														<button class="btn btn-outline btn-warning" data-toggle="modal" data-target="#myModal_sec<?php echo $show['secondary_id'];?>">
                                Edit
                            </button>
													<input type="hidden" name="employee_id" value="<?php echo $show['employee_id']; ?>">
											</form>
												</div>
												</td>
                                        </tr>
										
										
										
										<div class="modal fade" id="myModal_sec<?php echo $show['secondary_id'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
										<form action="edit_sec_info.php" method="POST">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"><center>SECONDARY INFORMATION2</center></h4>
                                        </div>
									
                                        <div class="modal-body">
                                   
										<div class="input-group input-sm">
												<span class="input-group-addon input-sm">School Name:</span>
												<input type="text" name="school_name" class="form-control input-sm" value="<?php echo $show['school_name'];  ?>"/>
												<input type="hidden" name="secondary_id" class="form-control input-sm" value="<?php echo $show['secondary_id'];  ?>"/>
														<input type="hidden" name="employee_id" class="form-control input-sm"
											value="<?php
											$id=substr($_GET['id'],1,-1);	
											$rid=$_GET['id'];	
											if(substr($_GET['id'],0,1)=="'" && substr($_GET['id'],-1)=="'" )
											{echo $id;}
											else{ echo $rid;}?>" >
											</div>
													<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Started in:</span>
												<input type="year" name="dates_from" class="form-control input-sm" value="<?php echo $show['dates_from'];  ?>"/>
											</div>			<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Finished in:</span>
												<input type="year" name="dates_to" class="form-control input-sm" value="<?php echo $show['dates_to'];  ?>"/>
											</div>
				
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Grade:</span>
												<input type="text" name="scholar_academic_honors" class="form-control input-sm"value="<?php echo $show['scholar_academic_honors'];  ?>" />
											</div>
              
        
										
										
									</div>
								
									
									
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button type="submit" name="save" class="btn btn-primary">Save</button>
                                        </div>
                                    </div>
									</form>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
										
										
											<?php }; ?>
                                      
                                    </tbody>
                                </table>
               			    <div class="form-group">
                    <div class="col-lg-1 pull-right">
 			                     <button class="btn btn-outline btn-info btn-sm pull-right" data-toggle="modal" data-target="#Secondary">
Add Secondary information1
</button>
                    </div>
                  </div>
                            </div> 
							</div>
                                    </div>
                                </div>
								
								
								  
								
								 <div class="panel panel-inverse " style="background-color:#46b8da">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse5" style="color:#fff"><b>  Graduate Studies </b></a>
                                        </h4>
                                    </div>
                                    <div id="collapse5" class="panel-collapse collapse">
                                        <div class="panel-body" style="background-color:#fff">
                                             <div class="table-responsive">
                                <table class="table table-striped" id="dataTables-example">
                                     <thead>
                                       <tr>
                                            <th>UniversityName</th>
                                            <th>Degree Course</th>
                                            <th>Dates from-to <br> (Year-Month-Date)</th>
                                            <th>Year Graduated</th>
                                            <th>Honour Received</th>
                                            <th>Action</th>
                                          
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php	$id=$_SESSION['employee_id'];
											$emp=(" select * from graduate_studies where employee_id=".$id."") or die(mysql_error());
											$fetch_res = $mysqli->query($emp);
											
											while($show = $fetch_res->fetch_array(MYSQLI_ASSOC))
											
											{
											
										?>
                                         <tr class="odd gradeX">
                                            <td><?php echo $show['school_name']; ?></td>
                                            <td><?php echo $show['degree_course']; ?></td>
                                            <td><?php echo $show['dates_from']."</br>".$show['dates_to']; ?></td>
                                            <td><?php echo $show['year_graduated']; ?></td>
                                            <td><?php echo $show['scholar_academic_honors']; ?></td>
                                           <td>
                                    
											
											<div class="col-lg-1">
												
														<button class="btn btn-outline btn-warning" data-toggle="modal" data-target="#myModal_grad<?php echo $show['graduate_studies_id'];?>">
                                Edit
                            </button>
													<input type="hidden" name="employee_id" value="<?php echo $show['employee_id']; ?>">
									
												</div>
												</td>
                                        </tr>
										<div class="modal fade" id="myModal_grad<?php echo $show['graduate_studies_id'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
										<form action="edit_grad_info.php" method="POST">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"><center>GRADUATE STUDIES INFORMATION</center></h4>
                                        </div>
									
                                        <div class="modal-body">
                                   
										<div class="input-group input-sm">
												<span class="input-group-addon input-sm">UniversityName:</span>
												<input type="text" name="school_name" class="form-control input-sm" value="<?php echo $show['school_name'];  ?>"/>
												<input type="hidden" name="graduate_studies_id" class="form-control input-sm" value="<?php echo $show['graduate_studies_id'];  ?>"/>
														<input type="hidden" name="employee_id" class="form-control input-sm"
											value="<?php
											$id=substr($_GET['id'],1,-1);	
											$rid=$_GET['id'];	
											if(substr($_GET['id'],0,1)=="'" && substr($_GET['id'],-1)=="'" )
											{echo $id;}
											else{ echo $rid;}?>" >
											</div>
													<div class="input-group input-sm">
													<span class="input-group-addon input-sm">DEGREE COURSE:</span>
												<input type="text" name="degree_course" class="form-control input-sm" value="<?php echo $show['degree_course'];  ?>"/>
											</div>

												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Started in:</span>
												<input type="year" name="dates_from" class="form-control input-sm" value="<?php echo $show['dates_from'];  ?>"/>
											</div>			<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Finished in:</span>
												<input type="year" name="dates_to" class="form-control input-sm" value="<?php echo $show['dates_to'];  ?>"/>
											</div>
				
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">YEAR GRADUATED:</span>
												<input type="year" name="year_graduated" class="form-control input-sm" value="<?php echo $show['year_graduated'];  ?>" />
											</div>
												
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">HONOUR RECEIVED:</span>
												<input type="text" name="scholar_academic_honors" class="form-control input-sm"value="<?php echo $show['scholar_academic_honors'];  ?>" />
											</div>
              
        
										
										
									</div>
								
									
									
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button type="submit" name="save" class="btn btn-primary">Save</button>
                                        </div>
                                    </div>
									</form>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
										
											<?php }; ?>
                                      
                                    </tbody>
									</table>
									<div class="form-group">
                    <div class="col-lg-1 pull-right">
 			                     <button class="btn btn-outline btn-info btn-sm pull-right" data-toggle="modal" data-target="#Graduate">
Add Graduate Studies information
</button>
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
            </div>
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
    <!-- /#wrapper -->
	
<div class="modal fade" id="Elementary" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel"><center>PRIMARY INFORMATION</center></h4>
      </div>
	  <form action="add_elementary.php" method="POST">
      <div class="modal-body">
       <div class="col-lg-12">
				      <div class="panel panel-success">
        
             
		
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">School Name:</span>
												<input type="text" name="school_name" class="form-control input-sm" />
														
											</div>
										
													<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Started in:</span>
												<input type="year" name="dates_from" class="form-control input-sm" />
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Finished in:</span>
												<input type="year" name="dates_to" class="form-control input-sm" />
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">MARKS:</span>
												<input type="text" name="scholar_academic_honors" class="form-control input-sm" />
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
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" name="save" class="btn btn-primary">Save</button>
      </div>
    </div><!-- /.modal-content -->
	</form>
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</div><!-- /.modal -->

<div class="modal fade" id="Secondary" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel"><center>SECONDARY INFORMATION4</center></h4>
      </div>
	  <form action="add_secondary.php" method="POST">
      <div class="modal-body">
       <div class="col-lg-12">
				      <div class="panel panel-success">
        
             
		

							
								<div class="input-group input-sm">
												<span class="input-group-addon input-sm">School Name:</span>
												<input type="text" name="school_name" class="form-control input-sm" />
													<input type="hidden" name="employee_id" class="form-control input-sm"
											value="<?php
											$id=substr($_GET['id'],1,-1);	
											$rid=$_GET['id'];	
											if(substr($_GET['id'],0,1)=="'" && substr($_GET['id'],-1)=="'" )
											{echo $id;}
											else{ echo $rid;}?>" >
											</div>
													<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Started in:</span>
												<input type="year" name="dates_from" class="form-control input-sm" />
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Finished in:</span>
												<input type="year" name="dates_to" class="form-control input-sm" />
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">GRADE:</span>
												<input type="text" name="scholar_academic_honors" class="form-control input-sm" />
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


<div class="modal fade" id="Graduate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel"><center>GRADUATE STUDIES</center></h4>
      </div>
	  <form action="add_grad.php" method="POST">
      <div class="modal-body">
       <div class="col-lg-12">
				          <div class="panel panel-success">
        
             
		

							
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">School Name:</span>
												<input type="text" name="school_name" class="form-control input-sm" />
													<input type="hidden" name="employee_id" class="form-control input-sm"
											value="<?php
											$id=substr($_GET['id'],1,-1);	
											$rid=$_GET['id'];	
											if(substr($_GET['id'],0,1)=="'" && substr($_GET['id'],-1)=="'" )
											{echo $id;}
											else{ echo $rid;}?>" >
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">DEGREE COURSE:</span>
												<input type="text" name="degree_course" class="form-control input-sm" />
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">YEAR GRADUATED:</span>
												<input type="year" name="year_graduated" class="form-control input-sm" />
											</div>
													<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Started in:</span>
												<input type="year" name="dates_from" class="form-control input-sm" />
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Finished in:</span>
												<input type="year" name="dates_to" class="form-control input-sm" />
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm"> HONOUR RECEIVED:</span>
												<input type="text" name="scholar_academic_honors" class="form-control input-sm" />
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
