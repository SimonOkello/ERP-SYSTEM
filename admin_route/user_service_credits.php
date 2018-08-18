<!DOCTYPE html>
<?php 
include('db_con.php'); 
include('session_user.php'); 
include('logout.php'); 
 include('nav_user.php'); ?>

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
			
				
										<li>
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
                                <a href="user_Educational_Background.php ?id=<?php echo $id; ?>" class="not_active">
								&nbsp;&nbsp;
								Educational Background</a>
                            </li>							       <li>
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
	
 <div class="row-blue">
 <div class="row">

 <div class="col-lg-12">
                    <div class="panel panel-default" >
					
                        <div class="panel-heading" style="background-color:#46b8da;">
                          <b style="color:#fff;"><b style="color:#fff; font-size:25px;"> <center>Service Credits Table</center></b></b>
                        </div>
                    
					<!-- /.panel-heading -->
                       <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Picture</th>
                                            <th>Name</th>
                                            <th>Balance</th>
                                            <th>Action</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
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
				service_credits.Balance,
				service_credits.employee_id,
				service_credits.service_credits_id
	
				
		
	
FROM personal_information
 JOIN service_credits 
ON personal_information.employee_id=service_credits.employee_id where service_credits.employee_id =".$id."  ;") or die(mysql_error());
		$fetch_res = $mysqli->query($emp);
		
		while($show = $fetch_res->fetch_array(MYSQLI_ASSOC))
		{
		
	
		
	?>
                                        <tr class="odd gradeX">
                                            <td><img src="upload/<?php  echo $show['image'];?>" alt="Smiley face" height="42" width="42"> </td>
                                            <td><?php  echo $show['firstname']." ".$show['middlename']." ".$show['surname'];  ?></td>
                                            <td><?php  echo $show['Balance'];  ?></td>
                                            <td>
											<div class="row"style="border:0px solid black; width:400px;">
									
											
											
									<div class="col-lg-3">
									  &nbsp; <a data-toggle="modal" href="#leave_credits<?php echo $show['service_credits_id']; ?>" class="btn btn-outline btn-primary"> &nbsp;<i  class="fa fa-minus fa-1x"></i>&nbsp;Leave</a>

												</div>
												
												
													<div class="col-lg-3" style="padding-top:20px;padding-left:25px;">
												
												       
                                    <button type="button" class="btn btn-outline btn-primary dropdown-toggle" data-toggle="dropdown">
                                       View
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu pull-right" role="menu">
                                        <li><a data-toggle="modal"  href="#added_credits_info<?php echo $show['service_credits_id']; ?>" >Added Credits Information</a>
                                        </li>
                                        <li><a data-toggle="modal" href="#leave_credits_info<?php echo $show['service_credits_id']; ?>" >Leave Credits Information</a>
                                        </li>
                                  
                                    </ul>
                                
                                </div>
								
												</div>
                                  
                                        </tr>
									<div class="modal fade" id="add_credits<?php echo $show['service_credits_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
     
        </div>
        <div class="modal-body" style="height:100px; overflow:hidden;">
      


	  
	  	
	
		<form method="POST" action="inc_service_credits.php">
	 
		     <h4 class="modal-title"><center>
		ADD SERVICE CREDITS
			 <div class="row">
			
                </div>
				
				<div class="row">
				
			 <div class="col-lg-12">
	                <div class="form-group">
                
       <div class="form-group">
                  <div class="input-group">
                    <span class="input-group-addon input-sm" >Number of Days:</span>
     
		<input type="text" name="days" class="form-control input-sm" value=""  >
	
                     
                
 
                  </div>
                </div>
			     </div>
                </div>
                </div>
				
				

			 
			
			 </center></h4>
  
		
				
		</br>
        </div>
        <div class="modal-footer">
   <button type="submit" name="save" class="btn btn-primary">Save</button>
		  		          </div>
						  	<input type="hidden" name="old_days" class="form-control input-sm" value="<?php echo $show['Balance']; ?>"  >
		<input type="hidden" name="id" class="form-control input-sm" value="<?php echo $show['service_credits_id']; ?>"  >
		<input type="hidden" name="employee_id" class="form-control input-sm" value="<?php echo $show['employee_id']; ?>"  >

		<input type="hidden" name="date" class="form-control input-sm" value="<?php echo date("m d, Y "); ?>"  >
		 </form>	
 

		
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->

  </div><!-- /.modal -->
  
  
  <div class="modal fade" id="leave_credits<?php echo $show['service_credits_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
     
        </div>
        <div class="modal-body" style="height:250px; overflow:hidden;">
      


	  
	  	
	
		<form method="POST" action="dec_service_credits.php">
	 
		     <h4 class="modal-title"><center>
		LEAVE
			 <div class="row">
			
                </div>
				
				<div class="row">
				
			 <div class="col-lg-12">
	                <div class="form-group">
                
       <div class="form-group">
                  <div class="input-group">
                    <span class="input-group-addon input-sm" >Type of Leave:</span>
     
		
		<select name="leave_type" class="form-control input-sm" id="animal"  />
		  <OPTION value=""></OPTION>
		  <OPTION value="Vacation">Vacation</OPTION>
		  <OPTION value="Sick">Sick</OPTION>
		   <OPTION value="Seminar">Semminar</OPTION>
		  <OPTION value="Training">Training</OPTION>
		  </select>
		  </span>
		   </div>
</br>
		     <div class="input-group">
                    <span class="input-group-addon input-sm">Number of Days::</span>
          <input type="text" class="form-control input-sm" name="days" id="name"   />
                   
                  </div>
				  </br>
			
<div class="input-group">
                    <span class="input-group-addon input-sm">Balance:</span>
          <input type="text" name="Balance" class="form-control input-sm" value="<?php echo $show['Balance']; ?>"  >
                   
                  </div>
				  
				  </br>

		<input type="hidden" name="id" class="form-control input-sm" value="<?php echo $show['service_credits_id']; ?>"  >
		<input type="hidden" name="employee_id" class="form-control input-sm" value="<?php echo $show['employee_id']; ?>"  >

                     
                       <div class="form-group">
                  <div class="input-group">
                    <span class="input-group-addon input-sm" >Date:</span>
     
		<input type="date" name="date" class="form-control input-sm" value=""  >
		
		  </span>
 
                  </div>
                </div>
			     </div>
                </div>
               
				
				

			 
			
			 </center></h4>
  
		
				
		</br>
        </div>
        <div class="modal-footer">
   <button type="submit" name="save" class="btn btn-primary">Save</button>

         	
		  		          </div>
		 </form>	
 

		
      </div><!-- /.modal-content -->
      <?php } ?>
	  
	  			
                                 
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                         
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

	
	<?php	   		


		$emp13=(" 
	select		
		
				add_service_credits.employee_id,
				add_service_credits.date,
				add_service_credits.days,
			
				service_credits.employee_id,
				service_credits.Balance,
				service_credits.service_credits_id
FROM service_credits 
 JOIN add_service_credits 
ON service_credits.employee_id=add_service_credits.employee_id  ;") or die(mysql_error());
		$fetch_res13 = $mysqli->query($emp13);
		
		while($show13 = $fetch_res13->fetch_array(MYSQLI_ASSOC))
		{
		
	
		
	?>
  
  	
  
  	<div class="modal fade"  id="added_credits_info<?php  $emp_id3=$show13['employee_id'];echo $show13['service_credits_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
     
        </div>
        <div class="modal-body">
      


	  

	
		<form method="POST" action="inc_service_credits.php">
	 
	<center>	<b>Added Leave Days</b></center></br>
			 <div class="row">
			
                </div>
	  					<?php	   		


		$emp124=(" 
	select		
		
				add_service_credits.employee_id as lc_id,
				add_service_credits.date,
				add_service_credits.days,
				service_credits.employee_id,
				service_credits.Balance,
				service_credits.service_credits_id
FROM service_credits 
 JOIN add_service_credits 
ON service_credits.employee_id=add_service_credits.employee_id  where add_service_credits.employee_id ='$emp_id3'   ;") or die(mysql_error());
		$fetch_res124 = $mysqli->query($emp124);
		
		while($show124 = $fetch_res124->fetch_array(MYSQLI_ASSOC))
		{
		
	
		
	?>
				<div class="row">
				
			 <div class="col-lg-12">
	                <div class="form-group">
                <div class="col-md-5">
       <div class="form-group">
                  <div class="input-group">
                    <span class="input-group-addon input-sm" >Date:</span>
     
		<input type="text" name="old_days" class="form-control input-sm" value="<?php echo $show124['date'];?>"  disabled>
	
                     
                
 
                  </div>
                </div>
                </div>
					<div class="col-md-3">
				 <div class="form-group">
                  <div class="input-group">
                    <span class="input-group-addon input-sm" >Days:</span>
     
				<input type="text" name="id" class="form-control input-sm" value="<?php echo $show124['days']; ?>"  disabled>
		
                  </div>
                </div>
                </div>
				
		
					
				

			     </div>
                </div>
                </div>
				
					<?php }; ?>

			 			<div class="col-md-5">
				 <div class="form-group">
          
                </div>
                </div>
								<div class="col-md-3">
				 <div class="form-group">
                  <div class="input-group">
                    <span class="input-group-addon input-sm" >Total:</span>
						  					<?php	   		


		$emp123=(" 
SELECT SUM(days) AS added_credits FROM add_service_credits WHERE employee_id='$emp_id3'
") or die(mysql_error());
		$fetch_res123 = $mysqli->query($emp123);
		
		WHILE($show123 = $fetch_res123->fetch_array(MYSQLI_ASSOC)){

	?>
     
				<input type="text" name="id" class="form-control input-sm" value="<?php echo $show123['added_credits']; ?>"  disabled>
				<?php } ?>
		
                  </div>
                </div>
                </div>
								<div class="col-md-4">
				 <div class="form-group">
      
                </div>
                </div>
			
			 </center></h4>
  
		
				
		</br>
        </div>
		
        <div class="modal-footer">

		  		          </div>
		 </form>	
 

	
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->

  </div><!-- /.modal -->
  <?php }; ?>


	<?php	   		


		$emp1=(" 
	select		
		
				leave_credits.employee_id,
			
				service_credits.employee_id,
				service_credits.Balance,
				service_credits.service_credits_id
FROM service_credits 
 JOIN leave_credits 
ON service_credits.employee_id=leave_credits.employee_id  ;") or die(mysql_error());
		$fetch_res1 = $mysqli->query($emp1);
		
		while($show1 = $fetch_res1->fetch_array(MYSQLI_ASSOC))
		{
		
	
		
	?>
  
  	
  
  	<div class="modal fade" id="leave_credits_info<?php  $emp_id=$show1['employee_id'];echo $show1['service_credits_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
     
        </div>
        <div class="modal-body">
      


	  

	
		<form method="POST" action="inc_service_credits.php">
	 
		<center><strong>Leave Credits Information</strong></center></br>
			 <div class="row">
			
                </div>
	  					<?php	   		


		$emp12=(" 
	select		
		
				leave_credits.employee_id as lc_id,
				leave_credits.date,
				leave_credits.days,
				leave_credits.leave_type,
				service_credits.employee_id,
				service_credits.Balance,
				service_credits.service_credits_id
FROM service_credits 
 JOIN leave_credits 
ON service_credits.employee_id=leave_credits.employee_id  where leave_credits.employee_id ='$emp_id'   ;") or die(mysql_error());
		$fetch_res12 = $mysqli->query($emp12);
		
		while($show12 = $fetch_res12->fetch_array(MYSQLI_ASSOC))
		{
		
	
		
	?>
				<div class="row">
				
			 <div class="col-lg-12">
	                <div class="form-group">
                <div class="col-md-5">
       <div class="form-group">
                  <div class="input-group">
                    <span class="input-group-addon input-sm" >Date:</span>
     
		<input type="text" name="date" class="form-control input-sm" value="<?php	echo $show12['date'];?>"  disabled>
	
                     
                
 
                  </div>
                </div>
                </div>
					<div class="col-md-3">
				 <div class="form-group">
                  <div class="input-group">
                    <span class="input-group-addon input-sm" >Days:</span>
     
				<input type="text" name="id" class="form-control input-sm" value="<?php echo $show12['days']; ?>" disabled >
		
                  </div>
                </div>
                </div>
				
							<div class="col-md-4">
				 <div class="form-group">
                  <div class="input-group">
                    <span class="input-group-addon input-sm" >Type:</span>
     
	<input type="text" name="employee_id" class="form-control input-sm" value="<?php $emp_id= $show12['lc_id'];echo $show12['leave_type']; ?>" disabled >


		
                  </div>
                </div>
                </div>
					
				

			     </div>
                </div>
                </div>
				
					<?php }; ?>

			 			<div class="col-md-5">
				 <div class="form-group">
          
                </div>
                </div>
								<div class="col-md-3">
				 <div class="form-group">
                  <div class="input-group">
                    <span class="input-group-addon input-sm" >Total:</span>
						  					<?php	   		


		$emp123=(" 
SELECT SUM(days) AS leave_days FROM leave_credits WHERE employee_id='$emp_id'
") or die(mysql_error());
		$fetch_res123 = $mysqli->query($emp123);
		
		WHILE($show123 = $fetch_res123->fetch_array(MYSQLI_ASSOC)){

	?>
     
				<input type="text" name="id" class="form-control input-sm" value="<?php echo $show123['leave_days']; ?>"  disabled>
				<?php } ?>
		
                  </div>
                </div>
                </div>
								<div class="col-md-4">
				 <div class="form-group">
      
                </div>
                </div>
			
			 </center></h4>
  
		
				
		</br>
        </div>
		
        <div class="modal-footer">

		  		          </div>
		 </form>	
 

	
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->

  </div><!-- /.modal -->
  <?php }; ?>


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
