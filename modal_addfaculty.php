<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">Add Faculty</h4>
			</div>
			<div class="modal-body">
				<div class="form-group">
					<form action="admin.php" method="POST">
						<div class="Id">
							<label>	Faculty Id*</label>
							<input type="" class="form-control" name= "facultyId" placeholder="Faculty Id" required>
						</div>
						<div class="firstname">
							<label>	First Name*</label>
							<input class="form-control" name= "firstname" placeholder="First Name" required>
						</div>
						<div class="middlename">
							<label>Middle Name</label>
							<input class="form-control" name= "middlename" placeholder="Middle Name" >
						</div>
						<div class="lastname">
							<label>Last Name*</label>
							<input class="form-control" name= "lastname" placeholder="Last Name" required>
						</div>
						<div class="contactnumber">
							<label>Contact Number</label>
							<input type="number" class="form-control" name= "contactnumber" placeholder="Contact Number">
						</div>
						<div class="email">
							<label>Email</label>
							<input class="form-control" name= "email" placeholder="Email">
						</div>
						<br>
						<div class="col-md-3">
							<label>Designation</label>
							<select name="designation" class="form-control">
								<option>Permanent</option>
								<option>Parttime</option>
							</select>
						</div>
						<div class="col-md-3">
							<label>Department</label>
							<select name="department" class="form-control">
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
								<option>Talisay</option>
								<option>Alijis</option>
								<option>Fortune Towne</option>
								<option>Binalbagan</option>
							</select>
						</div>
					<div class="col-md-3">
							<label>Course Program</label>
							<select name="course" class="form-control">
								<option>BSCE</option>
								<option>BSIT</option>
								<option>BSED</option>
								<option>BEED</option>
								<option>BSIS</option>
								<option>BSHRM</option>
								<option>BS Info Tech</option>
								<option>BTTE</option>
								<option>BSA</option>
								<option>BSBA</option>
								<option>BSOA</option>
								<option>BSE</option>
								<option>BSAccT</option>
								<option>BSF</option>
								<option>BS Crim</option>
							</select>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
						<button type="submit" name="add" class="btn btn-primary">Save</button>
					</div>
				</form>	
			</div>
		</div>
	</div>
</div>