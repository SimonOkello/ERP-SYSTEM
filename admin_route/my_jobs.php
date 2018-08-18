<!DOCTYPE html>
<?php 
include('db_con.php'); 
include('session_user.php'); 
include('logout.php'); 
 include('nav_user.php'); ?>
            <!-- /.navbar-top-links -->

        <!-- /.navbar-static-side -->
<STRONG>
   <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
               <ul class="nav" id="side-menu">
               
              
              
                             <?php 
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
                        JOBS<span class="fa arrow"></span></a>
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
                             <li>
                           
                              <a href="house_alloted.php?id=<?php echo $id; ?>" class="not_active">
                               <button type="button" class="btn btn-info btn-circle ">
                
                                <i class="fa fa-table fa-fw fa-lg"></i> </button>&nbsp;Housing</a>
                            </li>
                                           <li>
                              
                               <a href="user_service_credits.php?id=<?php echo $id; ?>" class="not_active" >
                                <button type="button" class="btn btn-info btn-circle ">
                                <i class="fa fa-table fa-fw fa-lg"></i> </button>&nbsp;Leave Application</a>
                            </li>
                                   <li>
                           
                              <a href="user_attendance.php?id=<?php echo $id; ?>" class="not_active">
                               <button type="button" class="btn btn-info btn-circle ">
                                <i class="fa fa-table fa-fw fa-lg"></i> </button>&nbsp;Attendance</a>
                            </li>
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
            <b style="color:#fff; font-size:25px;"> <center>MY JOBS</center></b>
            <div class="row">
                <div class="col-lg-12">
                
                    <div class="panel panel-default" >
                    
              
                                        
                        <!-- .panel-heading -->
                        <div class="panel-body">
                            <div class="panel-group" id="accordion">
                                <div class="panel panel-inverse " style="background-color:#46b8da">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseone" style="color:#fff"> <b> Applied Jobs </b></a>
                                        </h4>
                                    </div>
                                    <div id="collapseone" class="panel-collapse collapse in">
                                        <div class="panel-body" style="background-color:#fff">
                                             <div class="table-responsive">
                                <table class="table table-striped table-bordered"  id="dataTables-example">
                                    <thead>
                                        <tr>
                                            
                                            <th>JOB CODE</th>
                                            <th>STATUS</th>
                                            <th colspan="3"><center>SCHEDULED INTERVIEW</center></th>

                                            
                                          
                                        </tr>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th>Place</th>
                                            <th>Date</th>
                                            <th>Time</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php  
                                                                           
                                            $emp=(" select * from application where employee_id='$employee_id'") or die(mysql_error());
                                            $fetch_res = $mysqli->query($emp);
                                            
                                            while($show = $fetch_res->fetch_array(MYSQLI_ASSOC))
                                            
                                            {
                                            
                                        ?>
                                        <tr class="odd gradeX">
                                    
                                            <td><?php echo  $show['job_code']?></td>
                                            <td><?php echo  $show['status']?></td>
                                            <td><?php echo  $show['place']?></td>
                                            <td><?php echo  $show['inter_date']?></td>
                                            <td><?php echo  $show['time']?></td>
                                            
                                        </tr>
                                        
 <div class="modal fade" id="apply" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel"><center>APPLY JOB</center></h4>
      </div>
    
      <div class="modal-body">
       <div class="col-lg-12"> 
                      <div class="panel panel-success">
        
             
        
    <form   action="applyjob.php" method="POST">


                                                                                                                    <?php   
        $emp=(" select * from personal_information order by employee_id asc") or die(mysql_error());
        $fetch_res = $mysqli->query($emp);
        
        while($show = $fetch_res->fetch_array(MYSQLI_ASSOC))
        
        $id=$show['employee_id'];
        
    ?>
                                                <input type="hidden" name="employee_id" class="form-control input-sm" value="<?php echo $id;?>" />

                                    <div class="input-group input-sm">
                                                <span class="input-group-addon input-sm">FirstName:</span>
                                                <input type="text" name="firstname" class="form-control input-sm" required/>
                            
                                            </div>
                                        
                                            
                                            <div class="input-group input-sm">
                                                <span class="input-group-addon input-sm"> SurName:</span>
                                                <input type="text" name="surname" class="form-control input-sm" required/>
                                            </div>
                                                <div class="input-group input-sm">
                                                <span class="input-group-addon input-sm"> Date of Birth:</span>
                                                <input type="date" name="dob" class="form-control input-sm" required/>
                                            </div>
                                            <div class="input-group input-sm">
                                                <span class="input-group-addon input-sm">Telephone:</span>
                                                <input type="text" name="telephone" class="form-control input-sm"  required/>
                                            </div>
                                            <div class="input-group input-sm">
                                                <span class="input-group-addon input-sm">Email:</span>
                                                <input type="email" name="email" class="form-control input-sm"  required/>
                                            </div>
                                            
                                            <div class="input-group input-sm">
                                                <span class="input-group-addon input-sm">AJob Applying for:</span>
                                        <select name="job_code" class="form-control btn btn-outline pull-right">
                            <option></option>
                                                                <?php   
        $emp=(" select Distinct job_code from jobs order by job_code ASC ") or die(mysql_error());
        $fetch_res = $mysqli->query($emp);
        
        while($show = $fetch_res->fetch_array(MYSQLI_ASSOC))
        
        {$id=$show['employee_id'];
        
    ?>
                            <option value="<?php echo $show['job_code']; ?>"><?php echo $show['job_code']; ?></option>
                            
                            <?php } ?>
                            </select>
                                            </div>
                                           <div class="input-group input-sm">
                                                <span class="input-group-addon input-sm" >Document Upload.:</span>
                                                <input type="file" name="document" id="file"  class="btn btn-outline btn-success">

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

                                          <?php }; ?>
                                    </tbody>
                                </table>
                            </form>
                    
                            </div> 
                            </div>
                                    </div>
                                </div>




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
