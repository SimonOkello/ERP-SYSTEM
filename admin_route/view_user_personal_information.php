<div class="modal fade" id="view_myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog"style="width:700px;">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel"><center><strong>View Personal Information</strong></center></h4>
      </div>
	  <center><img src=" upload/<?php echo $show['image']; ?>" class="img-rounded" height="150px" width="150px"></center>
      <div class="modal-body"  style=" height:300px;overflow:hidden;">
												<div class="col-lg-6">
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">FirstName:</span>
												<input type="text" value="<?php echo $show['firstname'];  ?>" name="firstname" class="form-control input-sm" />
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Surname:</span>
												<input type="text" value="<?php echo $show['surname'];  ?>" name="surname" class="form-control input-sm" />
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Position:</span>
												<input type="text" value="<?php echo $show['position'];  ?>" name="position" class="form-control input-sm" />
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Residential Address:</span>
												<input type="text" value="<?php echo $show['residential_address'];  ?>" name="residential_address" class="form-control input-sm" />
											</div>
											<div class="input-group input-sm">
											  <span class="input-group-addon input-sm">Marital Status</span>
												 <select name="civil_status" class="form-control input-sm" id="animal" >
															<option value=""><?php echo $show['civil_status']; ?></option>
														</select>
											</div>

												
									</div>
									<div class="col-lg-6">
										<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Date of Birth:</span>
												<input type="text" value="<?php echo $show['date_of_birth']; ?>" name="date_of_birth" class="form-control input-sm" />
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Department:</span>
												<input type="text" value="<?php echo $show['department']; ?>" name="department" class="form-control input-sm" />
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Employee No.:</span>
												<input type="text"value="<?php echo $show['agency_employee_no']; ?>"  name="agency_employee_no" class="form-control input-sm" />
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Telephone No.:</span>
												<input type="text" value="<?php echo $show['ra_telephone_no']; ?>" name="ra_telephone_no" class="form-control input-sm" />
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">E-Mail Address:</span>
												<input type="text" value="<?php echo $show['email_address']; ?>"name="email_address" class="form-control input-sm" />
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
      </div>
 

    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->