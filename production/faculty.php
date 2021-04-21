<?php
include('../session.php');
include('../connect.php');


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<!-- Meta, title, CSS, favicons, etc. -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>eMobilis Mobile Technology Institute</title>

	<!-- Bootstrap -->
	<link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<!-- Font Awesome -->
	<link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<!-- NProgress -->
	<link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
	<!-- jQuery custom content scroller -->
	<link href="../vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css" rel="stylesheet"/>

	<!-- Custom Theme Style -->
	<link href="../build/css/custom.min.css" rel="stylesheet">
	<!-- icon -->
	<link rel="icon" href="../images/green-chmsc-official-logo.png" >
</head>

<body class="nav-md">
	<div class="container body">
		<div class="main_container">
			<div class="col-md-3 left_col menu_fixed">
				<div class="left_col scroll-view">
					<div class="navbar nav_title" style="border: 0;">
						<a href="#" class="site_title"><i class="fa fa-heart"></i> <span>eMobilis Mobile Technology Institute</span></a>
					</div>

					<div class="clearfix"></div>

					<!-- menu profile quick info -->
					<div class="profile">
						<div class="profile_pic">
							<img src="../requirements/<?php echo "$pic";?>" alt="..." class="img-circle profile_img">
						</div>
						<div class="profile_info">
							<span>Welcome,</span>
							<h2><?php echo $name; ?></h2>
						</div>
					</div>
					<!-- /menu profile quick info -->

					<br />

					<!-- sidebar menu -->
					<?php include('sidebar.php'); ?>
					<!-- /sidebar menu -->
				</div>
			</div>

			<!-- top navigation -->
			<div class="top_nav">
				<div class="nav_menu">
					<nav>
						<div class="nav toggle">
							<a id="menu_toggle"><i class="fa fa-bars"></i></a>
						</div>

						<ul class="nav navbar-nav navbar-right">
							<li class="">
								<a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
									<img src="../requirements/<?php echo "$pic";?>" alt=""><?php echo $name; ?>
									<span class=" fa fa-angle-down"></span>
								</a>
								<ul class="dropdown-menu dropdown-usermenu pull-right">
										<!-- <li><a href="javascript:;"> Profile</a></li>
										<li>
											<a href="javascript:;">
												<span class="badge bg-red pull-right">50%</span>
												<span>Settings</span>
											</a>
										</li>
										<li><a href="javascript:;">Help</a></li> -->
										<li><a href="javascript:;" data-toggle="modal" data-target="#change_password">Change Password</a></li>
										<li><a href="../index.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
									</ul>
								</li>
								<li role="presentation" class="dropdown">
									<a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
										<i class="fa fa-envelope-o"></i>
										<span class="badge bg-green">
											<?php
											$userid = $_SESSION['id'];
											$sql = "SELECT * FROM message WHERE id = $userid AND message_status = 0 ";
											$query = $conn->query($sql);
											$count = $query->rowCount();
											echo $count;
											?>
										</span>
									</a>
									<ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
										<li><h5>Message</h5></li><hr>
										<?php
										$userid = $_SESSION['id'];
										$sql = "SELECT * FROM message LEFT JOIN designee ON designee.designee_id = message.designee_id 
										WHERE id = $userid ";
										$query = $conn->prepare($sql);
										$query->execute();
										$count = $query->rowCount();
										$fetch = $query->fetchAll();

										foreach ($fetch as $key => $value) { ?>
										<li>
											<a href = "#message<?php echo $value['message_id'] ?>" data-toggle="modal">
												<span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
												<span>
													<span><?php echo $value['designee_name']; ?></span>
												</span>
												<span class="message">
													<?php echo $value['message_content']; ?>
													<span class="pull-right">
														<?php 
														if($value['message_status'] == 1){
															echo '<i class="fa fa-check-circle-o"></i>';
														}
														else{
															echo '<i class="fa fa-envelope"></i>';
														}
														?>
													</span>
												</span>
											</a>
										</li>

										<?php } ?>
									</ul>
								</li>
							</ul>
						</nav>
						<?php include '../message_modal.php';?>
					</div>
				</div>
				<!-- /top navigation -->

				<?php 
				$sql = "SELECT * FROM deadline ORDER BY id DESC LIMIT 1";
				$query = $conn->prepare($sql);
				$query->execute();
				$fetch = $query->fetch();

				$the_date = date('F d, Y', strtotime($fetch['d_date']));
				?>

				<!-- page content -->
				<div class="right_col" role="main">
					<div class="">
						<div class="page-title">
							<div class="title_left">
								<h3>Faculty </h3>
							</div>
						</div>
						<div class="clearfix"> <small class="pull-right">
							<?php 
							if ($fetch['status'] == 1){
								?>
								Deadline of submission of clearance is on <?php echo $the_date; ?>
								<?php 
							}
							?>
						</small></div>
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="x_panel">
								<div class="x_title">
									<h2>Faculty Clearance</h2>
									<div class="clearfix"></div>
								</div>

								<div class="x_content">
									<div class="row">
										<div class="col-md-12">
											<center>
												Republic of Kenya<br />
												<strong>eMobilis Mobile Technology Institute</strong><br />
												Nairobi, KE
												<br />
												<br />
												<strong>FACULTY/EMPLOYEE CLEARANCE</strong>
												<br />
												<small></small>
											</center>
										</div>
										<div class="row">
											<div class="col-md-3 pull-right">
												<center>______________
													<br />
													Date</center>
												</div>
											</div>
											<div class="row">
												<div class="col-md-3">
													<strong>The Dean of Students</strong><br />
													This College <br />
													Nairobi, KE<br /><br />
													<u><?php echo $name; ?></u>:<br />
												</div>
											</div>
											<div class="row">
												<div class="col-md-12">
													<p>
														I have the honor to inform your good Office that I have satisfactoryily accounted for all money and property accountabilities and that all reports were complied with on dates shown below :
													</p>
													<table class="table table-bordered">
														<thead>
															<tr>
																<td>Forms/Reports</td>
																<td>Date Submitted</td>
																<td>Forms/Reports</td>
																<td>Date Submitted</td>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td><strong>HRM:</strong> C.S.Form 48</td>
																<td><input type="text" name="vocational_year_graduated" data-inputmask="'mask': '99/99/9999'" class="form-control"></td>
																<td><strong>LAB. SCHOOL REQUIREMENTS:</strong></td>
																<td><input type="text" name="vocational_year_graduated" data-inputmask="'mask': '99/99/9999'" class="form-control"></td>
															</tr>
															<tr>
																<td>Form 212</td>
																<td><input type="text" name="vocational_year_graduated" data-inputmask="'mask': '99/99/9999'" class="form-control"></td>
																<td><strong>Form 1</strong></td>
																<td><input type="text" name="vocational_year_graduated" data-inputmask="'mask': '99/99/9999'" class="form-control"></td>
															</tr>
															<tr>
																<td>Sworn Statement of Assets & Liabilities</td>
																<td><input type="text" name="vocational_year_graduated" data-inputmask="'mask': '99/99/9999'" class="form-control"></td>
																<td><strong>Form 137</strong></td>
																<td><input type="text" name="vocational_year_graduated" data-inputmask="'mask': '99/99/9999'" class="form-control"></td>
															</tr>
															<tr>
																<td><strong>REGISTRAR's:</strong> Class Cards</td>
																<td><input type="text" name="vocational_year_graduated" data-inputmask="'mask': '99/99/9999'" class="form-control"></td>
																<td>Form 138</td>
																<td><input type="text" name="vocational_year_graduated" data-inputmask="'mask': '99/99/9999'" class="form-control"></td>
															</tr>
															<tr>
																<td>Grade Sheets</td>
																<td><input type="text" name="vocational_year_graduated" data-inputmask="'mask': '99/99/9999'" class="form-control"></td>
																<td>Ranking List</td>
																<td><input type="text" name="vocational_year_graduated" data-inputmask="'mask': '99/99/9999'" class="form-control"></td>
															</tr>
															<tr>
																<td>Class Records (1st and 2nd Sem w/ Dean's Sig.)</td>
																<td><input type="text" name="vocational_year_graduated" data-inputmask="'mask': '99/99/9999'" class="form-control"></td>
																<td>Orientation List (Lower Levels)</td>
																<td><input type="text" name="vocational_year_graduated" data-inputmask="'mask': '99/99/9999'" class="form-control"></td>
															</tr>
															<tr>
																<td>Section Clearance</td>
																<td><input type="text" name="vocational_year_graduated" data-inputmask="'mask': '99/99/9999'" class="form-control"></td>
																<td>Promotional Report</td>
																<td><input type="text" name="vocational_year_graduated" data-inputmask="'mask': '99/99/9999'" class="form-control"></td>
															</tr>
															<tr>
																<td>List of Students w/ deficiencies</td>
																<td><input type="text" name="vocational_year_graduated" data-inputmask="'mask': '99/99/9999'" class="form-control"></td>
																<td>DEAN's/VP's: Money & Property Report</td>
																<td><input type="text" name="vocational_year_graduated" data-inputmask="'mask': '99/99/9999'" class="form-control"></td>
															</tr>
															<tr>
																<td>List of failures/Drop-outs</td>
																<td><input type="text" name="vocational_year_graduated" data-inputmask="'mask': '99/99/9999'" class="form-control"></td>
																<td>Others</td>
																<td><input type="text" name="vocational_year_graduated" data-inputmask="'mask': '99/99/9999'" class="form-control"></td>
															</tr>
															<tr>
																<td>DBM Form SUC 1-A</td>
																<td><input type="text" name="vocational_year_graduated" data-inputmask="'mask': '99/99/9999'" class="form-control"></td>
																<td></td>
																<td></td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<?php
												$userid = $_SESSION['id'];
												$sql = "SELECT * FROM clearance WHERE id = $userid ";
												$query = $conn->prepare($sql);
												$query->execute();
												$fetch = $query->fetchAll();

												foreach ($fetch as $key => $value) { ?>
												<form action="../update_clearance_until.php" method="post">
													<center>
														<label>Until
															<input type="text" class="col-md-1 pull-right" name="until" data-inputmask="'mask': '99/99/9999'" style="width: 70%;
															border-top: none; border-left: none; border-right:none; border-bottom: 1px solid; margin-right: 1px;" value="<?php echo $value['until']; ?>">
														</label>
														<label>, my mailing address will be
															<input type="text" class="col-md-1 pull-right" name="mailing_address" style="width: 51%;border-top: none;border-left: none;border-right: none;border-bottom: 1px solid;" value="<?php echo $value['mailing_address']; ?>">
														</label>
														<button type="submit" class="btn btn-primary btn-xs">Save</button>
													</center>
												</form>
											</div>
											<div class="col-md-3 pull-right">
												<div class="pull-right">
													<p>Very truly yours,</p>
													<u><?php echo $name; ?></u><br />
													<b>(Print name before signing)</b>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-3 pull-right">
												<div class="pull-right">
													<u><?php echo $designation ?></u><br />
													<b>(Designation)</b>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<div class="row">
													<center><h2>Certification</h2>
														<p>WE HEREBY CERTIFY THAT <?php echo $name; ?> is cleared of all money, property and other accountabilities as of the date indicated.</p>
													</center>
												</div>
												
												<div class="row" style="border:1px solid;">
													<div class="col-md-4">
														<center>
															<?php 
															if ($value['is_accountant_approval'] == 0){
																echo '';
															}else{
																echo '<i class="glyphicon glyphicon-ok"></i>';
															}
															?>
															<br />
															<p>________________________<br />
																<small>Accountant</small>
															</p>
														</center>
													</div>
													<div class="col-md-4">
														<center>
															<?php 
															if ($value['is_cooperative_approval'] == 0){
																echo '';
															}else{
																echo '<i class="glyphicon glyphicon-ok"></i>';
															}
															?>
															<br />
															<p>________________________<br />
																<small>Chairman, Cooperative</small>
															</p>
														</center>
													</div>
													<div class="col-md-4">
														<center>
															<?php 
															if ($value['is_executive_approval'] == 0){
																echo '';
															}else{
																echo '<i class="glyphicon glyphicon-ok"></i>';
															}
															?>
															<br />
															<p>________________________<br />
																<small>Executive Director</small>
															</p>
														</center>
													</div>
													<div class="col-md-4">
														<center>
															<?php 
															if ($value['is_supply_approval'] == 0){
																echo '';
															}else{
																echo '<i class="glyphicon glyphicon-ok"></i>';
															}
															?>
															<br />
															<p>________________________<br />
																<small>Supply Officer</small>
															</p>
														</center>
													</div>
													<div class="col-md-4">
														<center>
															<?php 
															if ($value['is_librarian_approval'] == 0){
																echo '';
															}else{
																echo '<i class="glyphicon glyphicon-ok"></i>';
															}
															?>
															<br />
															<p>________________________<br />
																<small>College Librarian</small>
															</p>
														</center>
													</div>
													<div class="col-md-4">
														<center>
															<?php 
															if ($value['is_hrm_approval'] == 0){
																echo '';
															}else{
																echo '<i class="glyphicon glyphicon-ok"></i>';
															}
															?>
															<br />
															<p>________________________<br />
																<small>Administrative Officer V (HRM)</small>
															</p>
														</center>
													</div>
													<div class="col-md-4">
														<center>
															<?php 
															if ($value['is_director_ppf_approval'] == 0){
																echo '';
															}else{
																echo '<i class="glyphicon glyphicon-ok"></i>';
															}
															?>
															<br />
															<p>________________________<br />
																<small>Director, Physical Plant-Facilities</small>
															</p>
														</center>
													</div>
													<div class="col-md-4">
														<center>
															<?php 
															if ($value['is_registrar_approval'] == 0){
																echo '';
															}else{
																echo '<i class="glyphicon glyphicon-ok"></i>';
															}
															?>
															<br />
															<p>________________________<br />
																<small>Registrar</small>
															</p>
														</center>
													</div>
													<div class="col-md-4">
														<center>
															<?php 
															if ($value['is_cao_approval'] == 0){
																echo '';
															}else{
																echo '<i class="glyphicon glyphicon-ok"></i>';
															}
															?>
															<br />
															<p>________________________<br />
																<small>Chief Administrative Officer(Admin.)</small>
															</p>
														</center>
													</div>
													<div class="col-md-4">
														<center>
															<?php 
															if ($value['is_facfed_approval'] == 0){
																echo '';
															}else{
																echo '<i class="glyphicon glyphicon-ok"></i>';
															}
															?>
															<br />
															<p>________________________<br />
																<small>FACFED-FA/Campus Faculty Club President</small>
															</p>
														</center>
													</div>
													<div class="col-md-4">
														<center>
															<?php 
															if ($value['is_area_approval'] == 0){
																echo '';
															}else{
																echo '<i class="glyphicon glyphicon-ok"></i>';
															}
															?>
															<br />
															<p>________________________<br />
																<small>Area Chairman</small>
															</p>
														</center>
													</div>
													<div class="col-md-4">
														<center>
															<?php 
															if ($value['is_vp_admin_approval'] == 0){
																echo '';
															}else{
																echo '<i class="glyphicon glyphicon-ok"></i>';
															}
															?>
															<br />
															<p>________________________<br />
																<small>Vice-President for Administration</small>
															</p>
														</center>
													</div>
													<div class="col-md-4">
														<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
													</div>
													<div class="col-md-4">
														<center>
															<?php 
															if ($value['is_dean_approval'] == 0){
																echo '';
															}else{
																echo '<i class="glyphicon glyphicon-ok"></i>';
															}
															?>
															<br />
															<p>________________________<br />
																<small>Dean of the College</small>
															</p>
														</center>
													</div>
													<div class="col-md-4">
														<center>
															<?php 
															if ($value['is_vp_academic_approval'] == 0){
																echo '';
															}else{
																echo '<i class="glyphicon glyphicon-ok"></i>';
															}
															?>
															<br />
															<p>________________________<br />
																<small>Vice President for Academic Affairs</small>
															</p>
														</center>
													</div>
												</div>
												<div class="row">
													<h4 style="margin-left:300px">APPROVED:</h4>
													<center>
														<?php 
														if ($value['is_head_approval'] == 0){
															echo '';
														}else{
															echo '<i class="glyphicon glyphicon-ok"></i>';
														}
														?>
														<br />
														<p>________________________<br />
															<small>HEAD OF THE AGENCY</small>
														</p>
													</center>

												</div> 

												<?php include '../modal_designee.php'; ?>
												<?php include 'change_pass_modal.php';?>
												<?php } ?>
											</div>
										</div>
									</div>
								</div><!-- /x content -->
							</div><!-- /x panel -->
						</div>
					</div>
				</div>
				<!-- /page content -->

				<!-- footer content -->
				<footer>
					<div class="pull-right">
						by: OFCS team
					</div>
					<div class="clearfix"></div>
				</footer>
				<!-- /footer content -->
			</div>
		</div>

		<!-- jQuery -->
		<script src="../vendors/jquery/dist/jquery.min.js"></script>
		<!-- Bootstrap -->
		<script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
		<!-- FastClick -->
		<script src="../vendors/fastclick/lib/fastclick.js"></script>
		<!-- NProgress -->
		<script src="../vendors/nprogress/nprogress.js"></script>
		<!-- jQuery custom content scroller -->
		<script src="../vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
		<!-- jquery.inputmask -->
		<script src="../vendors/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>
		<!-- Custom Theme Scripts -->
		<script src="../build/js/custom.min.js"></script>
		<script src="../build/js/md5.js"></script>
		<script>
			$(document).ready(function() {
				$(":input").inputmask();
			});
		</script>
		<!-- jquery.inputmask -->
		<script>
			$(document).ready(function() {
				$(":input").inputmask();

				var sess_id = '<?php echo $userid; ?>';

				$.ajax({
					type: 'POST',
					url: 'get_c.php?sess_id='+sess_id
				})
				.done(function(data){
						// console.log(data);
						var rw = JSON.parse(data);
						var a = rw.cn;
						var b = rw.cbd;

						var arr = a.split('///');
						var arr1 = b.split('///');

						var c = arr.length;
						var msk = "'mask': '99/99/9999'";

						if (c === 0){
							var dv = '<tr class="first">'+
							'<td><input type="text" name="child_name[]" class="form-control"  value=""></td>'+
							'<td><input type="text" name="child_birthday[]" data-inputmask="'+msk+'" class="form-control"  value="">'+
							'</td>'+
							'</tr>'+
							'<tr>'+
							'<td>'+
							'<button name="custom_add_child" class="btn btn-primary add_second">Add</button></td>'+
							'</tr>';
							$('.noc').html(dv);
						}
						if (c === 1){
							var dv = '<tr>'+
							'<td><input type="text" name="child_name[]" class="form-control"  value="'+arr[0]+'"></td>'+
							'<td><input type="text" name="child_birthday[]" data-inputmask="'+msk+'" class="form-control"  value="'+arr1[0]+'">'+
							'</td>'+
							'</tr>'+
							'<tr>'+
							'<td>'+
							'<button name="custom_add_child" class="btn btn-primary add2">Add</button></td>'+
							'</tr>';
							$('.noc').html(dv);
						}
						if (c === 2){
							var dv = '<tr>'+
							'<td><input type="text" name="child_name[]" class="form-control"  value="'+arr[0]+'"></td>'+
							'<td><input type="text" name="child_birthday[]" data-inputmask="'+msk+'" class="form-control"  value="'+arr1[0]+'">'+
							'</td>'+
							'</tr>'+
							'<tr>'+
							'<tr>'+
							'<td><input type="text" name="child_name[]" class="form-control"  value="'+arr[1]+'"></td>'+
							'<td><input type="text" name="child_birthday[]" data-inputmask="'+msk+'" class="form-control"  value="'+arr1[1]+'">'+
							'</td>'+
							'</tr>'+
							'<tr>'+
							'<td>'+
							'<button name="custom_rm_child" id="" class="btn btn-danger rm1">custom_rm_child</button>'+
							'</td>'+
							'<td>'+
							'<button name="custom_add_child" class="btn btn-primary">Add</button></td>'+
							'</tr>';
							$('.noc').html(dv);
						}
						if (c === 3){
							var dv = '<tr>'+
							'<td><input type="text" name="child_name[]" class="form-control"  value="'+arr[0]+'"></td>'+
							'<td><input type="text" name="child_birthday[]" data-inputmask="'+msk+'" class="form-control"  value="'+arr1[0]+'">'+
							'</td>'+
							'</tr>'+
							'<tr>'+
							'<tr>'+
							'<td><input type="text" name="child_name[]" class="form-control"  value="'+arr[1]+'"></td>'+
							'<td><input type="text" name="child_birthday[]" data-inputmask="'+msk+'" class="form-control"  value="'+arr1[1]+'">'+
							'</td>'+
							'</tr>'+
							'<tr>'+
							'<td><input type="text" name="child_name[]" class="form-control"  value="'+arr[2]+'"></td>'+
							'<td><input type="text" name="child_birthday[]" data-inputmask="'+msk+'" class="form-control"  value="'+arr1[2]+'">'+
							'</td>'+
							'</tr>'+
							'<tr>'+
							'<td>'+
							'<button name="custom_rm_child" id="" class="btn btn-danger rm2">Remove</button>'+
							'</td>'+
							'<td>'+
							'<button name="custom_add_child" class="btn btn-primary">Add</button></td>'+
							'</tr>';
							$('.noc').html(dv);
						}
						if (c === 4){
							var dv = '<tr>'+
							'<td><input type="text" name="child_name[]" class="form-control"  value="'+arr[0]+'"></td>'+
							'<td><input type="text" name="child_birthday[]" data-inputmask="'+msk+'" class="form-control"  value="'+arr1[0]+'">'+
							'</td>'+
							'</tr>'+
							'<tr>'+
							'<tr>'+
							'<td><input type="text" name="child_name[]" class="form-control"  value="'+arr[1]+'"></td>'+
							'<td><input type="text" name="child_birthday[]" data-inputmask="'+msk+'" class="form-control"  value="'+arr1[1]+'">'+
							'</td>'+
							'</tr>'+
							'<tr>'+
							'<td><input type="text" name="child_name[]" class="form-control"  value="'+arr[2]+'"></td>'+
							'<td><input type="text" name="child_birthday[]" data-inputmask="'+msk+'" class="form-control"  value="'+arr1[2]+'">'+
							'</td>'+
							'</tr>'+
							'<tr>'+
							'<td><input type="text" name="child_name[]" class="form-control"  value="'+arr[3]+'"></td>'+
							'<td><input type="text" name="child_birthday[]" data-inputmask="'+msk+'" class="form-control"  value="'+arr1[3]+'">'+
							'</td>'+
							'</tr>'+
							'<tr>'+
							'<td>'+
							'<button name="custom_rm_child" id="" class="btn btn-danger rm3">Remove</button>'+
							'</td>'+
							'<td>'+
							'<button name="custom_add_child" class="btn btn-primary add5">Add</button></td>'+
							'</tr>';
							$('.noc').html(dv);
						}
						if (c === 5){
							var dv = '<tr id="one">'+
							'<td><input type="text" name="child_name[]" class="form-control"  value="'+arr[0]+'"></td>'+
							'<td><input type="text" name="child_birthday[]" data-inputmask="'+msk+'" class="form-control"  value="'+arr1[0]+'">'+
							'</td>'+
							'</tr>'+
							'<tr>'+
							'<tr id="two">'+
							'<td><input type="text" name="child_name[]" class="form-control"  value="'+arr[1]+'"></td>'+
							'<td><input type="text" name="child_birthday[]" data-inputmask="'+msk+'" class="form-control"  value="'+arr1[1]+'">'+
							'</td>'+
							'</tr>'+
							'<tr id="three">'+
							'<td><input type="text" name="child_name[]" class="form-control"  value="'+arr[2]+'"></td>'+
							'<td><input type="text" name="child_birthday[]" data-inputmask="'+msk+'" class="form-control"  value="'+arr1[2]+'">'+
							'</td>'+
							'</tr>'+
							'<tr id="four">'+
							'<td><input type="text" name="child_name[]" class="form-control"  value="'+arr[3]+'"></td>'+
							'<td><input type="text" name="child_birthday[]" data-inputmask="'+msk+'" class="form-control"  value="'+arr1[3]+'">'+
							'</td>'+
							'</tr>'+
							'<tr id="five">'+
							'<td><input type="text" name="child_name[]" class="form-control"  value="'+arr[4]+'"></td>'+
							'<td><input type="text" name="child_birthday[]" data-inputmask="'+msk+'" class="form-control"  value="'+arr1[4]+'">'+
							'</td>'+
							'</tr>'+
							'<tr>'+
							'<td>'+
							'<button name="custom_rm_child" id="" class="btn btn-danger rm4">Remove</button>'+
							'</td>'+
							'<td>'+
							'<button style="display: none" name="custom_add_child" class="btn btn-primary add5">Add</button>'+
							'</td>'+
							'</tr>';
							$('.noc').html(dv);
						}


							// $('.rm4').on('click', function(e){
							// 	e.preventDefault();
							// 	$('[name="custom_rm_child"]').removeClass('rm4').addClass('rm3');
							// 	$('.add5').fadeIn('slow');
							// 	$('#five').fadeOut('slow');


							// 	$('.rm3').on('click', function(e){
							// 		e.preventDefault();
							// 		$('[name="custom_rm_child"]').removeClass('rm3').addClass('rm2');
							// 		$('[name="custom_add_child"]').removeClass('add5').addClass('add4');
							// 		$('#four').fadeOut('slow');
							// 	});

							// });
							// $('.add5').on('click', function(e){
							// 	e.preventDefault();
							// 	$('[name="custom_rm_child"]').removeClass('rm3').addClass('rm4');
							// 	$('#five').fadeIn('slow');
							// 	$(this).fadeOut('slow');
							// });

							$('.add_second').on('click', function(){
								$('.first').append('<tr class="first">'+
									'<td><input type="text" name="child_name[]" class="form-control"  value=""></td>'+
									'<td><input type="text" name="child_birthday[]" data-inputmask="'+msk+'" class="form-control"  value="">'+
									'</td>'+
									'</tr>'+
									'<tr>');
							});

							$('.add2').on('click', function(e){
								e.preventDefault();
							});
						});

$('form[name="change_p"]').on('submit', function(e){
	e.preventDefault();

	var sess_pass = '<?php echo $sess_pass; ?>';
	var sess_id = '<?php echo $session_id; ?>';

	var a = $('[name="old_pass"]').val();
	var b = $('[name="new_pass"]').val();
	var c = $('[name="conf_pass"]').val();

	if (md5(a) !== sess_pass){
		$('.edit_pass').text('Please enter your current password');
		$('[name="old_pass"]').val('').focus();
	}else{
		if (b === '' && c !== ''){
			$('.edit_pass').text('Please enter your new password');
		}else if (b !== '' && c === ''){
			$('.edit_pass').text('Please confirm your new password');
		}else if (b === '' && c === ''){
			$('.edit_pass').text('Please fill out the fields');
		}else if (b !== c){
			$('.edit_pass').text('Passwords do not match');
		}else{
			$.ajax({
				type: 'POST',
				url: 'edit_p.php',
				data: {
					session_id: sess_id,
					password: b
				}
			})
			.done(function(data){
				$('form[name="change_p"] input[type="password"]').val('');
				if (data == 1){
					$('.edit_pass').text('Password successfully updated');
				}else{
					$('.edit_pass').text('An error occured. Try again');
				}

				setTimeout(function(){
					location.reload();
				}, 1000 * 3);
			});	
		}
	}

});

});
</script>
<!-- /jquery.inputmask -->
</body>
</html>