<div class="modal fade" id="edit<?php echo $value ['id']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-md">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">Edit <?php echo $value['faculty_Fname']; ?> Profile</h4>
			</div>
			<div class="modal-body">
				<div class="form-group">
					<form action="../edit_faculty.php" method="POST">
						<div class="Id">
							<input value = "<?php echo $value['faculty_id'];?>" type="hidden" class="form-control" name= "facultyId" placeholder="Faculty Id" required>
							<input value = "<?php echo $value['id'];?>" type="hidden" class="form-control" name= "id" placeholder="Faculty Id" required>
						</div>
						<div class="firstname">
							<label>	First Name*</label>
							<input value = "<?php echo $value['faculty_Fname'];?>" class="form-control" name= "firstname" placeholder="First Name" required>
						</div>
						<div class="middlename">
							<label>Middle Name</label>
							<input value = "<?php echo $value['faculty_Mname'];?>" class="form-control" name= "middlename" placeholder="Middle Name" >
						</div>
						<div class="lastname">
							<label>Last Name*</label>
							<input value = "<?php echo $value['faculty_Lname'];?>" class="form-control" name= "lastname" placeholder="Last Name" required>
						</div>
						<div class="contactnumber">
							<label>Contact Number</label>
							<input value = "<?php echo $value['Contact_num'];?>" type="number" class="form-control" name= "contactnumber" placeholder="Contact Number">
						</div>
						<div class="email">
							<label>Email</label>
							<input value = "<?php echo $value['Email'];?>" class="form-control" name= "email" placeholder="Email">
						</div>
						<div class="col-md-3">
							<label>Designation</label>
							<select name="designation" class="form-control">
								<option><?php echo $value['Designation'];?></option>
								<option>Regular</option>
								<option>Parttime</option>
							</select>
						</div>
						<div class="col-md-3">
							<label>Department</label>
							<select name="department" class="form-control">
								<option><?php echo $value['Department'];?></option>
								<option>COE</option>
								<option>CIT</option>
								<option>SAS</option>
								<option>CBMA</option>
								<option>CFAC</option>
								<option>IIT</option>
							</select>
						</div>
						<div class="col-md-3">
							<label>Campus</label>
							<select name="campus" class="form-control">
								<option><?php echo $value['Campus'];?></option>
								<option>Talisay</option>
								<option>Alijis</option>
								<option>Fortune Town</option>
								<option>Binalbagan</option>
							</select>
						</div>
					</div>
				</div>
				<div class="modal-footer form-group">
						<div class="row">
							<br />
							<br />
							<button type="button" class="btn btn-danger " data-dismiss="modal"><i class="fa fa-close"></i>Close</button>
							<button type="submit"  class="btn btn-primary ">Save</button>
							 
						</div>
					</div>
			</form>	
		</div>
	</div>
</div>