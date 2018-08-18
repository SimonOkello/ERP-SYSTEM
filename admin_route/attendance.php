<!DOCTYPE html>
<?php 
include('db_con.php'); 
include('session_admin.php'); 
include('logout.php'); 
 include('nav.php'); ?>
            <!-- /.navbar-top-links -->

        </nav>
        <!-- /.navbar-static-top -->
		
<strong>
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
					
                        <a href="personal_info.php" class="NOT_active">
						
							 <button type="button" class="btn btn-info btn-circle "><i class="fa fa-table fa-fw fa-lg"></i></i>
                            </button>
						<b>Employee</b> &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; </a>
           

                        <!-- /.nav-second-level -->
                    </li>
                 
				 <li>
                        <a href="service_credits.php" class="NOT_active"> <button type="button" class="btn btn-info btn-circle ">
						<i class="fa fa-table fa-fw fa-lg"></i> </button><b>Service Credits</b>
						</a>
                      
                        <!-- /.nav-second-level -->
                    </li>
                   
				   
                   
				 	 <li>
                        <a  href="attendance.php" class="active_nav"> <button type="button" class="btn btn-info btn-circle "><i class="fa fa-table fa-fw fa-lg"></i> </button>
						<b>Attendance</b>
						 </a>
                
                        <!-- /.nav-second-level -->
                 </li>
			
                  
			
                <!-- /#side-menu -->
            </div>
            <!-- /.sidebar-collapse -->
        </nav>
		</strong>
        <!-- /.navbar-static-side -->

        <div id="page-wrapper">
            <div class="row">
          
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
	

  <div class="row-blue">
         <b style="color:#fff; font-size:25px;"> <center>Attendance Table</center></b>
                       
 <div class="row">

 <div class="col-lg-12">
                    <div class="panel panel-default" >
                        <div class="panel-heading" style="background-color:#46b8da;">
             </div>
                        <!-- /.panel-heading -->
                       <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>PICTURE</th>
                                            <th>EMPLOYEE ID</th>
                                            <th>NAME</th>
                                            <th>USERNAME</th>
                                            <th>LOGIN DATE</th>
                                            <th>LOGOUT DATE</th>
                                       
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php	
		$emp=("

			SELECT
			personal_information.firstname,personal_information.surname,
			personal_information.image,attendance.employee_id,attendance.username,
			attendance.login_date,attendance.logout_date
				FROM personal_information
				right JOIN attendance
				ON personal_information.employee_id=attendance.employee_id order by personal_information.firstname ASC ;") or die(mysql_error());
		$fetch_res = $mysqli->query($emp);
		
		while($show = $fetch_res->fetch_array())
		
		{$id=$show['employee_id'];
		
	?>
                                        <tr class="odd gradeX">
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
											 <td><?php	echo $show['employee_id'];  ?></td>
											</td><td><?php  echo $show['firstname']." ".$show['surname'];  ?></td>
                                            <td><?php	echo $show['username'];  ?></td>
                                            <td><?php	echo $show['login_date'];  ?></td>
                                            <td><?php	echo $show['logout_date']; ?></td>
                                   
                                  
                                        </tr>
                                     <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                           
                        </div>
                        <!-- /.panel-body -->
			</div>

            <a href='report.php'><button class='btn btn-outline btn-info btn-lg pull-right'><span> Print Report</span></button></a>
						    
						
                            <!-- /.modal -->
					</div></br></br></br>
								  	       <div class="panel-footer">
										   
                          					    <div class="form-group">
                      <div class="col-lg-2 pull-right">
       
                    </div>
                  </div>
				
                 
							
                        </div>
                        <!-- /.panel-body -->
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

</body>

</html>
