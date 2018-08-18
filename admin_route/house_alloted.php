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
            <b style="color:#fff; font-size:25px;"> <center>ALLOTED HOUSE</center></b>
            <div class="row">
                <div class="col-lg-12">
                
                    <div class="panel panel-default" >
                    
              
                                        
                        <!-- .panel-heading -->
                        <div class="panel-body">
                            <div class="panel-group" id="accordion">
                                <div class="panel panel-inverse " style="background-color:#46b8da">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseone" style="color:#fff"> <b> Alloted House </b></a>
                                        </h4>
                                    </div>
                                    <div id="collapseone" class="panel-collapse collapse in">
                                        <div class="panel-body" style="background-color:#fff">
                                             <div class="table-responsive">
                                <table class="table table-striped table-bordered"  id="dataTables-example">
                                    <thead>
                                        <tr>
                                            
                                            <th>BLOCK</th>
                                            <th>ROOM NUMBER</th>
                                             <th>DATE</th>

                                            
                                          
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php  
                                                                           
                                            $emp=(" select * from allotment where employee_id='$employee_id'") or die(mysql_error());
                                            $fetch_res = $mysqli->query($emp);
                                            
                                            while($show = $fetch_res->fetch_array(MYSQLI_ASSOC))
                                            
                                            {
                                            
                                        ?>
                                        <tr class="odd gradeX">
                                    
                                            <td><?php echo  $show['block']?></td>
                                            <td><?php echo  $show['roomNum']?></td>
                                            <td><?php echo  $show['date']?></td>
                                            
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                                        

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
