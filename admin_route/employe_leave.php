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
			<b style="color:#fff; font-size:25px;"> <center>EMPLOYEES AND DAYS ALLOCATION</center></b>
			<div class="row">
                <div class="col-lg-12">
				
                    <div class="panel panel-default" >
					
              
										
                        <!-- .panel-heading -->
                        <div class="panel-body">
                            <div class="panel-group" id="accordion">
                                <div class="panel panel-inverse " style="background-color:#46b8da">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseone" style="color:#fff"> <b> Applied Leaves </b></a>
                                        </h4>
                                    </div>
                                    <div id="collapseone" class="panel-collapse collapse in">
                                        <div class="panel-body" style="background-color:#fff">
                                             <div class="table-responsive">
                                <table class="table table-striped" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>LEAVE TYPE</th>
                                            <th>EMPLOYEE ID</th>
                                            <th>DATE</th>
                                            <th>DAYS</th>
                                            <th>STATUS</th>
                                            
                                          
                                        </tr>
                                    </thead>
                                    <tbody>
										<?php										
											$emp=(" select * from leave_credits") or die(mysql_error());
											$fetch_res = $mysqli->query($emp);
											
											while($show = $fetch_res->fetch_array(MYSQLI_ASSOC))
											
											{
											
										?>
                                        <tr class="odd gradeX">
									
                                            <td><?php echo $show['leave_type']; ?></td>
                                            <td><?php echo $show['employee_id']; ?></td>
                                            <td><?php echo $show['date']; ?></td>
                                            <td><?php echo $show['days']; ?></td>
                                            <td><?php echo $show['status']; ?></td>

                                             <td>   
                                            <div class="row">
                                            <div class="col-lg-4">
                                            <form action="leave_approve.php" method="POST" role="form" class="form-horizontal">
                                        <div class="form-group">
                                            <div class="col-sm-offset-2 col-sm-6">
                                              <button type="submit" name="approve" class="btn btn-primary">Approve</button>
                                             
                                            </div>
                                          <input type="hidden" name="employee_id" value="<?php echo $show['employee_id']; ?>"/>
                                                
                                          </div>
                                        </form>
                                        
                                            </div>
                                            
                                        
                                            
                                                </div>
                                                </td>

                                                <td>    
                                            <div class="row">
                                            <div class="col-lg-4">
                                            <form action="leave_approve.php" method="POST" role="form" class="form-horizontal">
                                        <div class="form-group">
                                            <div class="col-sm-offset-2 col-sm-6">
                                              <button type="submit" name="reject" class="btn btn-primary">Reject</button>
                                              
                                            </div>
                                            <input type="hidden" name="employee_id" value="<?php echo $show['employee_id']; ?>"/> 
                                          </div>
                                        </form>
                                            </div>
                                                </div>
                                                </td>
                                        </tr>

                                      	  <?php }; ?>
                                    </tbody>
                                </table>
                            </div> 
							</div>
                                    </div>
                                </div>
								
								
								  <div class="panel panel-inverse " style="background-color:#46b8da">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" style="color:#fff"> <b>Approved Leaves </b></a>
                                        </h4>
                                    </div>
									
                                    <div id="collapseTwo" class="panel-collapse collapse "
                                        <div class="panel-body" style="background-color:#fff">
                                             <div class="table-responsive">
                                <table class="table table-striped" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            
                                            <th>LEAVE TYPE</th>
                                            <th>EMPLOYEE ID</th>
                                            <th>DATE</th>
                                            <th>DAYS</th>
                                            <th>STATUS</th>
                                         
                                          
                                        </tr>
                                    </thead>
                                    <tbody>
										<?php	
										
							
											$emp=(" select * from leave_credits WHERE status='Approved'") or die(mysql_error());
											$fetch_res = $mysqli->query($emp);
											
											while($show = $fetch_res->fetch_array(MYSQLI_ASSOC))
											
											{
											
										?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $show['leave_type']; ?></td>
                                            <td><?php echo $show['employee_id']; ?></td>
                                            <td><?php echo $show['date']; ?></td>
                                            <td><?php echo $show['days']; ?></td>
                                                 <td><?php echo $show['status']; ?></td>
                                            
                                        </tr>
										
										

	
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
	


<div class="modal fade" id="parent" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel"><center>ASSIGN LEAVE DAYS</center></h4>
      </div>
	
      <div class="modal-body">
       <div class="col-lg-12"> 
				      <div class="panel panel-success">
        
             
		
 <form action="adddays.php" method="POST">
									
											
											      <div class="input-group input-sm">
                                                <span class="input-group-addon input-sm">Employee_id:</span>
                                        <select name="employee_id" class="form-control btn btn-outline pull-right">
                            <option></option>
                                                                <?php   
        $emp=(" select Distinct employee_id from personal_information order by employee_id ASC ") or die(mysql_error());
        $fetch_res = $mysqli->query($emp);
        
        while($show = $fetch_res->fetch_array(MYSQLI_ASSOC))
        
        {$id=$show['employee_id'];
        
    ?>
                            <option value="<?php echo $show['employee_id']; ?>"><?php echo $show['employee_id']; ?></option>
                            
                            <?php } ?>
                            </select>
                                            </div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm"> No. Of Leave Days:</span>
												<input type="text" name="Balance" class="form-control input-sm" required/>
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Date:</span>
												<input type="date" name="date" class="form-control input-sm" required/>
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
