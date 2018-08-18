<div class="modal fade" id="edit_myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog"style="width:700px;">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel"><center><strong>Edit Personal Information</strong></center></h4>
      </div>
	  <form action="update_personal_info.php" method="POST" enctype="multipart/form-data">
      <div class="modal-body"  style=" height:450px;overflow:hidden;">
      	<center><img src=" upload/<?php echo $show['image']; ?>" class="img-rounded" height="150px" width="150px"></center>
<div class="col-lg-6">
										<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Firstname:</span>
												<input type="text" name="firstname" class="form-control input-sm" value="<?php echo $show['firstname']; ?>" >
											</div>
											
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Surname:</span>
												<input type="text" name="surname" class="form-control input-sm" value="<?php echo $show['surname']; ?>" >
											</div>
											<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Residential Address:</span>
												<textarea name="residential_address" class="form-control input-sm"  rows="1" ><?php echo $show['residential_address']; ?> </textarea>
											</div>
											<div class="input-group input-sm">
											  <span class="input-group-addon input-sm">Marital Status</span>
												 <select name="civil_status" class="form-control input-sm" id="animal" >
															<option value="<?php echo $show['civil_status']; ?>"><?php echo $show['civil_status']; ?></option>
																<option value="Single">Single</option>
															<option value="Married">Married</option>
															<option value="Annulled">Annulled</option>
															<option value="Widowed">Widowed</option>
															<option value="Seperated">Seperated</option>
															<option value="Others">Others, specify</option>
														</select>
											</div>
												<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Position:</span>
												<input type="text" value="<?php echo $show['position'];  ?>" name="position" class="form-control input-sm" />
											</div>
											<div class="input-group input-sm">
                                                <span class="input-group-addon input-sm" >Change Picture.:</span>
                                                <input type="file" name="file" id="file"  class="btn btn-outline btn-success">

                                            </div>
										
									</div>
									<div class="col-lg-6">
										<div class="input-group input-sm">
												<span class="input-group-addon input-sm">Date of Birth:</span>
												<input type="date" value="<?php echo $show['date_of_birth']; ?>" name="date_of_birth" class="form-control input-sm" />
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
												<input type="hidden" name="employee_id" value="<?php echo $show['employee_id']; ?>"  style="display:none;" />
											<?php }?>
									</DIV>

      </div>
	       <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit"  name="submit" class="btn btn-primary">Save</button>
      </div>

	  </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->