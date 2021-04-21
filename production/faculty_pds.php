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
	<!-- CSS -->
	<link href="../production/stylesheet.css" rel="stylesheet">
	<!-- Font Awesome -->
	<link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<!-- NProgress -->
	<link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
	<!-- iCheck -->
	<link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
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
						<?php include 'change_pass_modal.php';?>
					</div>
				</div>
				<!-- /top navigation -->

				<!-- page content -->
				<div class="right_col" role="main">
					<div class="">
						<div class="page-title">
							<div class="title_left">
								<h3>Faculty</h3>
							</div>
						</div>
						<div class="clearfix"></div>
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="x_panel">
								<div class="x_title">
									<h2>Faculty Personal Data Sheet (PDS)</h2>
									<div class="clearfix"></div>
								</div>
								<div class="row">
									
								</div>
								<div class="x_content col-md-12" >
									<form action="../update_faculty_pds.php" method="post" class="form-horizontal form-label-left">
										<div class="container-fluid" style="border: 2px solid">
											<div class="col-md-4">
												CS FORM 212 (Revised 2021)
											</div>
											<div class="col-md-4 pds_header">
												<h2><strong>PERSONAL DATA SHEET</strong></h2>
											</div>
											<div class="col-md-5 pull-right">
												<div class="form-group">
													<label class="control-label col-md-3 col-sm-3 col-xs-12 csc_label">1. CS ID No</label>
													<div class="col-md-9 col-sm-9 col-xs-12">
														<input type="number" class="form-control csc_no" name="cs_id_no" placeholder ="(to be filled up by CSC)">
													</div>
												</div>
											</div>

											<div class="row">
												<div class="col-md-12">
													<ul class="nav nav-pills">
														<li class="active"><a data-toggle="pill" href="#personal_info">I.Personal Information</a></li>
														<li><a data-toggle="pill" href="#family_background">II.Family Background</a></li>
														<li><a data-toggle="pill" href="#educational_background">III.Educational Background</a></li>
														<li><a data-toggle="pill" href="#civil_service">IV.Civil Service Eligibility</a></li>
														<li><a data-toggle="pill" href="#work_experience">V.Work Experience</a></li>
														<li><a data-toggle="pill" href="#voluntary_work">VI.Voluntary Work</a></li>
														<li><a data-toggle="pill" href="#training_programs">VII.Training Programs</a></li>
														<li><a data-toggle="pill" href="#other_information">VIII.Other Information</a></li>
													</ul>
												</div>
											</div>
											<br />
											<div class="tab-content">

												<!-- Personal info tab -->
												<div id="personal_info" class="tab-pane fade in active">
													<div class="row">
														<div class="col-md-12 category_header">
															<h4>I.Personal Information</h4>
														</div>
													</div>
													<div class="row">
														<?php
														$sql = "SELECT * FROM pds_personal_information 
														NATURAL JOIN pds_family_background 
														NATURAL JOIN pds_civil_service
														NATURAL JOIN pds_work_experience 
														NATURAL JOIN pds_voluntary_work 
														NATURAL JOIN pds_training_program
														NATURAL JOIN pds_other_info WHERE id = $userid " ;
														$query = $conn->prepare($sql);
														$query->execute();
														$fetch = $query->fetchAll();

														foreach ($fetch as $key => $value) { ?>
														<div class="col-md-2">
															<div class="col-md-12 bords form-group">
																<label class="control-label" for="surname">2. Surname</label>
																<br />
																<br />
																<label class="control-label">&nbsp;&nbsp;&nbsp;&nbsp;Firstname</label>
																<br />
																<br />
																<label class="control-label">&nbsp;&nbsp;&nbsp;&nbsp;Middlename</label>
															</div>
														</div>

														<div class="col-md-10">
															<div class="col-md-12 form-group">
																<input type="text" name="surname" class="form-control"  value = "<?php echo $value['surname'];?>">
															</div>
															<div class="col-md-12 form-group">
																<input type="text" name="firstname" class="form-control" value = "<?php echo $value['firstname'];?>">
															</div>
															<div class="col-md-6 form-group">
																<input type="text" name="middlename" class="form-control" value = "<?php echo $value['middlename'];?>">
															</div>
															<div class="col-md-6 form-group">
																<label class="control-label col-md-7">3. Name Extension (e.g. Jr., Sr.)
																</label>
																<div class="col-md-5">
																	<input type="text" name="name_extension" class="form-control col-md-7 col-xs-12 " value = "<?php echo $value['name_extension'];?>">
																</div>
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-md-5">
															<div class="row">
																<div class="col-md-8 form-group dob_label">
																	<label class="control-label">4. Date of Birth</label>
																</div>
																<div class="col-md-4 form-group">
																	<input type="text" name="birthday" data-inputmask="'mask': '99/99/9999'" class="form-control dob_input" value = "<?php echo $value['birthday'];?>">
																</div>
															</div>
															<div class="row">
																<div class="col-md-4 form-group dob_label">
																	<label class="control-label">5. Place of Birth</label>
																</div>
																<div class="col-md-8 form-group">
																	<input type="text" class="form-control dob_input" name="place_of_birth" value = "<?php echo $value['place_of_birth'];?>">
																</div>
															</div>
															<div class="row">
																<div class="col-md-4 form-group dob_label">
																	<label class="control-label">6. Sex</label>
																</div>
																<div class="col-md-8 btn-group bords">
																	<label>Male:</label>
																	<input type="radio" class="flat" name="sex" id="genderM" value="M" 
																	<?php 
																	if ($value['sex'] == "M"){
																		echo "checked";
																	} 
																	?>> 
																	<label>Female:</label>
																	<input type="radio" class="flat" name="sex" id="genderF" value="F" 
																	<?php 
																	if ($value['sex'] == "F"){
																		echo "checked";
																	} 
																	?> >
																</div>
															</div>
															<div class="row">
																<div class="col-md-4 form-group dob_label" style="height: 98px">
																	<label class="control-label">7. Civil Status</label>
																</div>
																<div class="col-md-8 btn-group bords">
																	<div class="col-md-4">
																		<label class="radio-inline">
																			<input type="radio" name="civil_status" value="1" 
																			<?php
																			if($value['civil_status'] == 1){
																				echo "checked";
																			}
																			?>
																			><label>Single</label>
																		</label><br />
																		<label class="radio-inline">
																			<input type="radio" name="civil_status" value="2"
																			<?php
																			if($value['civil_status'] == 2){
																				echo "checked";
																			}
																			?>
																			><label>Married</label> 
																		</label><br />
																		<label class="radio-inline">
																			<input type="radio" name="civil_status" value="3"
																			<?php
																			if($value['civil_status'] == 3){
																				echo "checked";
																			}
																			?>
																			><label>Annulled</label> 
																		</label><br />
																	</div>
																	<div class="col-md-7">
																		<label class="radio-inline">
																			<input type="radio" name="civil_status" value="4"
																			<?php
																			if($value['civil_status'] == 4){
																				echo "checked";
																			}
																			?>
																			><label>Widowed</label>
																		</label><br />
																		<label class="radio-inline">
																			<input type="radio" name="civil_status" value="5"
																			<?php
																			if($value['civil_status'] == 5){
																				echo "checked";
																			}
																			?>
																			><label>Seperated</label> 
																		</label><br />
																		<label class="radio-inline">
																			<input type="radio" name="civil_status" value="6"
																			<?php
																			if($value['civil_status'] == 6){
																				echo "checked";
																			}
																			?>
																			>
																			<label>Others, specify 
																				<input type="text" class="col-md-1 pull-right" name="other_civil_status" style="width: 40%;
																				margin-right: -39px; border-top: none; border-left: none; border-right:none; border-bottom: 1px solid;" value="<?php echo $value['other_civil_status']; ?>">
																			</label>
																		</label>
																	</div>
																</div>
															</div>
															<div class="row">
																<div class="col-md-4 form-group dob_label">
																	<label class="control-label">8. Citizenship</label>
																</div>
																<div class="col-md-8 form-group">
																	<input type="text" class="form-control dob_input" name="citizenship" 
																	value="<?php echo $value['citizenship']; ?>">
																</div>
															</div>
															<div class="row">
																<div class="col-md-4 form-group dob_label">
																	<label class="control-label">9. Height (m)</label>
																</div>
																<div class="col-md-8 form-group">
																	<input type="text" class="form-control dob_input" name="height" value="<?php echo $value['height']; ?> m">
																</div>
															</div>
															<div class="row">
																<div class="col-md-4 form-group dob_label">
																	<label class="control-label">10. Weight (kg)</label>
																</div>
																<div class="col-md-8 form-group">
																	<input type="text" class="form-control dob_input" name="weight" value="<?php echo $value['height']; ?> kg">
																</div>
															</div>
															<div class="row">
																<div class="col-md-4 form-group dob_label">
																	<label class="control-label">11. Blood Type</label>
																</div>
																<div class="col-md-8 form-group">
																	<input type="text" class="form-control dob_input" name="blood_type" value="<?php echo $value['blood_type']; ?>">
																</div>
															</div>
															<div class="row">
																<div class="col-md-4 form-group dob_label">
																	<label class="control-label">12. GSIS ID NO.</label>
																</div>
																<div class="col-md-8 form-group">
																	<input type="text" class="form-control dob_input" name="gsis_id_no" value="<?php echo $value['gsis_id_no']; ?>">
																</div>
															</div>
															<div class="row">
																<div class="col-md-4 form-group dob_label">
																	<label class="control-label"><small>13.PAG-IBIG ID NO.</small></label>
																</div>
																<div class="col-md-8 form-group">
																	<input type="text" class="form-control dob_input" name="pagibig_id_no" value="<?php echo $value['pagibig_id_no']; ?>">
																</div>
															</div>
															<div class="row">
																<div class="col-md-4 form-group dob_label">
																	<label class="control-label"><small>14. PHILHEALTH NO.</small></label>
																</div>
																<div class="col-md-8 form-group">
																	<input type="text" class="form-control dob_input" name="philhealth_no" value="<?php echo $value['philhealth_no']; ?>">
																</div>
															</div>
															<div class="row">
																<div class="col-md-4 form-group dob_label">
																	<label class="control-label">15. SSS NO.</label>
																</div>
																<div class="col-md-8 form-group">
																	<input type="text" class="form-control dob_input" name="sss_no" value="<?php echo $value['sss_no']; ?>">
																</div>
															</div>
														</div>
														<div class="col-md-7">
															<div class="row">
																<div class="col-md-3 form-group bords">
																	<label class="control-label">16.Residential Address</label>
																	<br />
																	<label class="control-label pull-right" style="margin-top: 10px">Zip Code</label>
																	<label class="control-label" style="margin-top: 10px">17. Telephone No.</label>
																</div>
																<div class="col-md-9 form-group">
																	<textarea class="form-control" name="residential_address"><?php echo $value['residential_address']; ?></textarea>
																	<input type="number" class="form-control" name="residential_zipcode" value="<?php echo $value['residential_zipcode']; ?>">
																	<input type="text" class="form-control" data-inputmask="'mask' : '(999) 999-9999'"  name="residential_tel_no" value="<?php echo $value['residential_tel_no']; ?>">
																</div>
															</div>
															<div class="row">
																<div class="col-md-3 form-group bords">
																	<label class="control-label">18.Permanent Address</label>
																	<br />
																	<label class="control-label pull-right" style="margin-top: 10px">Zip Code</label>
																	<label class="control-label" style="margin-top: 10px">19. Telephone No.</label>
																</div>
																<div class="col-md-9 form-group">
																	<textarea class="form-control" name="permanent_address"><?php echo $value['permanent_address']; ?></textarea>
																	<input type="number" class="form-control" name="permanent_zipcode" value="<?php echo $value['permanent_zipcode']; ?>">
																	<input type="text" class="form-control" data-inputmask="'mask' : '(999) 999-9999'"  name="permanent_tel_no" value="<?php echo $value['permanent_tel_no']; ?>">
																</div>
															</div>
															<div class="row">
																<div class="col-md-4 form-group dob_label">
																	<label class="control-label">20. Email Address <small>(if any)</small></label>
																</div>
																<div class="col-md-8 form-group">
																	<input type="email" class="form-control dob_input" name="email" value="<?php echo $value['email_address']; ?>">
																</div>
															</div>		
															<div class="row">
																<div class="col-md-4 form-group dob_label">
																	<label class="control-label">21. Cellphone No. <small>(if any)</small></label>
																</div>
																<div class="col-md-8 form-group">
																	<input type="text" class="form-control dob_input" name="cellphone_no" value="<?php echo $value['cellphone_no']; ?>">
																</div>
															</div>
															<div class="row">
																<div class="col-md-4 form-group dob_label">
																	<label class="control-label">22. <small>Agency Employee No.</small></label>
																</div>
																<div class="col-md-8 form-group">
																	<input type="text" class="form-control dob_input" name="agency_employee_no" value="<?php echo $value['agency_employee_no']; ?>">
																</div>
															</div>
															<div class="row">
																<div class="col-md-4 form-group dob_label">
																	<label class="control-label">23. Tin</label>
																</div>
																<div class="col-md-8 form-group">
																	<input type="text" class="form-control dob_input" name="tin_no" value="<?php echo $value['tin_no']; ?>">
																</div>
															</div>
														</div>
													</div>
												</div>
												<!--/ Personal info tab -->

												<!-- Family background tab-->
												<div id="family_background" class="tab-pane fade">
													<div class="row">
														<div class="col-md-12 category_header">
															<h4>II.Family Background</h4>
														</div>
													</div>
													<div class="row">
														<div class="col-md-7">
															<div class="row">
																<div class="col-md-4 bords">
																	<div class="col-xs-6 form-group">
																		<label class="control-label">24.Spouse's </label>
																	</div>
																	<div class="col-xs-6 form-group">
																		<label class="control-label">Surname</label>
																		<br />
																		<br />
																		<label class="control-label">Firstname</label>
																		<br />
																		<br />
																		<label class="control-label">Middlename</label>
																	</div>
																</div>
																<div class="col-md-8">
																	<div class="col-md-12 form-group">
																		<input type="text" name="spouse_surname" class="form-control" value="<?php echo $value['spouse_surname']; ?>">
																	</div>
																	<div class="col-md-12 form-group">
																		<input type="text" name="spouse_firstname" class="form-control"  value="<?php echo $value['spouse_firstname']; ?>">
																	</div>
																	<div class="col-md-12 form-group">
																		<input type="text" name="spouse_middlename" class="form-control"  value="<?php echo $value['spouse_middlename']; ?>">
																	</div>
																</div>
															</div>
															<div class="row">
																<div class="col-md-4 form-group hayt">
																	<label class="control-label">Occupation</label>
																</div>
																<div class="col-md-8">
																	<div class="col-md-12 form-group">
																		<input type="text" name="spouse_occupation" class="form-control"  value="<?php echo $value['spouse_occupation']; ?>">
																	</div>
																</div>
															</div>
															<div class="row">
																<div class="col-md-4 form-group hayt">
																	<label class="control-label">Employer/Bus. Name</label>
																</div>
																<div class="col-md-8">
																	<div class="col-md-12 form-group">
																		<input type="text" name="spouse_employer_name" class="form-control"  value="<?php echo $value['spouse_employer_name']; ?>">
																	</div>
																</div>
															</div>
															<div class="row">
																<div class="col-md-4 form-group hayt">
																	<label class="control-label">Business Address</label>
																</div>
																<div class="col-md-8">
																	<div class="col-md-12 form-group">
																		<input type="text" name="spouse_business_address" class="form-control"  value="<?php echo $value['spouse_business_address']; ?>">
																	</div>
																</div>
															</div>
															<div class="row">
																<div class="col-md-4 form-group hayt">
																	<label class="control-label">Telephone No.</label>
																</div>
																<div class="col-md-8">
																	<div class="col-md-12 form-group">
																		<input type="text" class="form-control" data-inputmask="'mask' : '(999) 999-9999'"  name="spouse_tel_no"  value="<?php echo $value['spouse_tel_no']; ?>">
																	</div>
																</div>
															</div>
															<div class="row">
																<div class="col-md-4 bords">
																	<div class="col-xs-6 form-group">
																		<label class="control-label">26.Father's </label>
																	</div>
																	<div class="col-xs-6 form-group">
																		<label class="control-label">Surname</label>
																		<br />
																		<br />
																		<label class="control-label">Firstname</label>
																		<br />
																		<br />
																		<label class="control-label">Middlename</label>
																	</div>
																</div>
																<div class="col-md-8">
																	<div class="col-md-12 form-group">
																		<input type="text" name="father_surname" class="form-control"  value="<?php echo $value['father_surname']; ?>">
																	</div>
																	<div class="col-md-12 form-group">
																		<input type="text" name="father_firstname" class="form-control"  value="<?php echo $value['father_firstname']; ?>">
																	</div>
																	<div class="col-md-12 form-group">
																		<input type="text" name="father_middlename" class="form-control" value="<?php echo $value['father_middlename']; ?>">
																	</div>
																</div>
															</div>
															<div class="row">
																<div class="col-md-4 bords">
																	<label class="control-label">27.Mother's Maiden Name</label>
																	<div class="col-xs-6 form-group">	
																	</div>
																	<div class="col-xs-6 form-group">
																		<label class="control-label">Surname</label>
																		<br />
																		<br />
																		<label class="control-label">Firstname</label>
																		<br />
																		<br />
																		<label class="control-label">Middlename</label>
																	</div>
																</div>
																<div class="col-md-8">
																	<br />
																	<div class="col-md-12 form-group">
																		<input type="text" name="mother_surname" class="form-control" value="<?php echo $value['mother_surname']; ?>">
																	</div>
																	<div class="col-md-12 form-group">
																		<input type="text" name="mother_firstname" class="form-control" value="<?php echo $value['mother_firstname']; ?>">
																	</div>
																	<div class="col-md-12 form-group">
																		<input type="text" name="mother_middlename" class="form-control" value="<?php echo $value['mother_middlename']; ?>">
																	</div>
																</div>
															</div>
														</div>

														<div class="col-md-5">
															<table class="table table-bordered">
																<thead>
																	<tr>
																		<td>25.Name of child (Write fullname and list all)</td>
																		<td>Date of Birth (mm/dd/yyyy)</td>
																	</tr>
																</thead>
																<tbody class="noc">
																</tbody>
															</table>	
														</div>
													</div>
												</div>
												<!--/ Family background tab-->

												<!-- Educational background tab-->
												<div id="educational_background" class="tab-pane fade">
													<div class="row">
														<div class="col-md-12 category_header">
															<h4>III.Educational Background</h4>
														</div>
													</div>
													<div class="row">
														<table class="table table-bordered">
															<thead>
																<tr>
																	<td>28. Level</td>
																	<td>Name of School <br />(Write in full)</td>
																	<td>Degree Course <br />(Write in full)</td>
																	<td>Year Graduated <br />(if graduated)</td>
																	<td>Highest Grade/Level/Units Earned <br />(if not graduated)</td>
																	<td colspan="2">Inclusive Dates of Attedance 
																		<table class="table table-bordered" style="margin-bottom: 0px;">
																			<tr>
																				<td>From</td>
																				<td>To</td>
																			</tr>
																		</table>
																	</td>
																	<td>Scolarship/Academic honors recieved</td>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td>Elementary</td>
																	<td><input type="text" name="elementary_name_school" class="form-control"></td>
																	<td><input type="text" name="elementary_degree_course" class="form-control"></td>
																	<td><input type="text" name="elementary_year_graduated" data-inputmask="'mask': '99/99/9999'" class="form-control"></td>
																	<td><input type="text" name="elementary_highest_grade" class="form-control"></td>
																	<td><input type="text" name="elementary_date_attendance_from" data-inputmask="'mask': '99/99/9999'" class="form-control"></td>
																	<td><input type="text" name="elementary_date_attendance_to" data-inputmask="'mask': '99/99/9999'" class="form-control"></td>
																	<td><input type="text" name="elementary_scholarship" class="form-control"></td>
																</tr>
																<tr>
																	<td>Secondary</td>
																	<td><input type="text" name="secondary_name_school" class="form-control"></td>
																	<td><input type="text" name="secondary_degree_course" class="form-control"></td>
																	<td><input type="text" name="secondary_year_graduated" data-inputmask="'mask': '99/99/9999'" class="form-control"></td>
																	<td><input type="text" name="secondary_highest_grade" class="form-control"></td>
																	<td><input type="text" name="secondary_date_attendance_from" data-inputmask="'mask': '99/99/9999'" class="form-control"></td>
																	<td><input type="text" name="secondary_date_attendance_to" data-inputmask="'mask': '99/99/9999'" class="form-control"></td>
																	<td><input type="text" name="secondary_scholarship" class="form-control"></td>
																</tr>
																<tr>
																	<td>Vocational / Trade course</td>
																	<td><input type="text" name="vocational_name_school" class="form-control"></td>
																	<td><input type="text" name="vocational_degree_course" class="form-control"></td>
																	<td><input type="text" name="vocational_year_graduated" data-inputmask="'mask': '99/99/9999'" class="form-control"></td>
																	<td><input type="text" name="vocational_highest_grade" class="form-control"></td>
																	<td><input type="text" name="vocational_date_attendance_from" data-inputmask="'mask': '99/99/9999'" class="form-control"></td>
																	<td><input type="text" name="vocational_date_attendance_to" data-inputmask="'mask': '99/99/9999'" class="form-control"></td>
																	<td><input type="text" name="vocational_scholarship" class="form-control"></td>
																</tr>
																<tr>
																	<td>College</td>
																	<td><input type="text" name="college_name_school" class="form-control"></td>
																	<td><input type="text" name="college_degree_course" class="form-control"></td>
																	<td><input type="text" name="college_year_graduated" data-inputmask="'mask': '99/99/9999'" class="form-control"></td>
																	<td><input type="text" name="college_highest_grade" class="form-control"></td>
																	<td><input type="text" name="college_date_attendance_from" data-inputmask="'mask': '99/99/9999'" class="form-control"></td>
																	<td><input type="text" name="college_date_attendance_to" data-inputmask="'mask': '99/99/9999'" class="form-control"></td>
																	<td><input type="text" name="college_name_child" class="form-control"></td>
																</tr>
																<tr>
																	<td>Graduate Studies</td>
																	<td><input type="text" name="graduated_name_school" class="form-control"></td>
																	<td><input type="text" name="graduated_degree_course" class="form-control"></td>
																	<td><input type="text" name="graduated_year_graduated" data-inputmask="'mask': '99/99/9999'" class="form-control"></td>
																	<td><input type="text" name="graduated_highest_grade" class="form-control"></td>
																	<td><input type="text" name="graduated_date_attendance_from" data-inputmask="'mask': '99/99/9999'" class="form-control"></td>
																	<td><input type="text" name="graduated_date_attendance_to" data-inputmask="'mask': '99/99/9999'" class="form-control"></td>
																	<td><input type="text" name="graduated_scholarship" class="form-control"></td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
												<!--/ Educational background tab-->
												<!-- Civil Service tab-->
												<div id="civil_service" class="tab-pane fade">
													<div class="row">
														<div class="col-md-12 category_header">
															<h4>IV.Civil Service Eligibility</h4>
														</div>
													</div>
													<div class="row">
														<table class="table table-bordered">
															<thead>
																<tr>
																	<td>29. Carrer Service/ RA 1080 (Board/Bar)<br />Under Special LAWS/CES/CSEE</td>
																	<td>Rating</td>
																	<td>Date of Examination/Conferment</td>
																	<td>Place of Examination / Conferment</td>
																	<td colspan="2">License (if aplicable)
																		<table class="table table-bordered" style="margin-bottom: 0px;">
																			<tr>
																				<td>Number</td>
																				<td>Date of Release</td>
																			</tr>	
																		</table>
																	</td>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td><input type="text" name="civil_career_service" class="form-control" value="<?php echo $value['career_service']; ?>"></td>
																	<td><input type="text" name="civil_rating" class="form-control" value="<?php echo $value['rating']; ?>"></td>
																	<td><input type="text" name="civil_date_of_examination" data-inputmask="'mask': '99/99/9999'" class="form-control" value="<?php echo $value['date_of_examination']; ?>"></td>
																	<td><input type="text" name="civil_place_of_examination" class="form-control" value="<?php echo $value['place_of_examination']; ?>"></td>
																	<td><input type="text" name="civil_license_number" class="form-control" value="<?php echo $value['license_number']; ?>"></td>
																	<td><input type="text" name="civil_date_of_release" data-inputmask="'mask': '99/99/9999'" class="form-control" value="<?php echo $value['license_date_of_release']; ?>"></td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
												<!--/ Civil Service tab-->
												<!-- Work Experience -->
												<div id="work_experience" class="tab-pane fade">
													<div class="row">
														<div class="col-md-12 category_header">
															<h4>V.Work Experience(Include private employment. Start from your currrent work)</h4>
														</div>
													</div>
													<div class="row">
														<table class="table table-bordered">
															<thead>
																<tr>
																	<td colspan="2">30. Inclusive Dates
																		<br />(mm/dd/yyyy)
																		<table class="table table-bordered" style="margin-bottom: 0px;">
																			<tr>
																				<td>From</td>
																				<td>To</td>
																			</tr>
																		</table>						
																	</td>
																	<td>Position Title <br />(Write in full)</td>
																	<td>Department/Agency/Office/Comapny<br />(Write in full)</td>
																	<td>Monthly Salary</td>
																	<td>Salary Grade & Step Increment(Format "00-0")</td>
																	<td>Status Of Appointment</td>
																	<td>Gov't Service(Yes/No)</td>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td><input type="text" name="work_date_from" data-inputmask="'mask': '99/99/9999'" class="form-control" value="<?php echo $value['work_experience_from']; ?>"></td>
																	<td><input type="text" name="work_date_to" data-inputmask="'mask': '99/99/9999'" class="form-control" value="<?php echo $value['work_experience_to']; ?>"></td>
																	<td><input type="text" name="work_position_title" class="form-control" value="<?php echo $value['position_title']; ?>"></td>
																	<td><input type="text" name="work_department" class="form-control" value="<?php echo $value['department']; ?>"></td>
																	<td><input type="text" name="work_monthly_salary" class="form-control" value="<?php echo $value['monthly_salary']; ?>"></td>
																	<td><input type="text" name="work_salary_grade" data-inputmask="'mask': '99-9'" class="form-control" value="<?php echo $value['salary_grade']; ?>"></td>
																	<td><input type="text" name="work_status_of_appointment" class="form-control" value="<?php echo $value['status_of_appointment']; ?>"></td>
																	<td><input type="text" name="work_govt_service" class="form-control" value="<?php echo $value['govt_service']; ?>"></td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
												<!--/ Work Experience -->
												<!-- Voluntary Work -->
												<div id="voluntary_work" class="tab-pane fade">
													<div class="row">
														<div class="col-md-12 category_header">
															<h4>VI.Voluntary Work or Involvement in Civic / Non-Government / People / Voluntary Origanization</h4>
														</div>
													</div>
													<div class="row">
														<table class="table table-bordered">
															<thead>
																<tr>
																	<td>31. Name & Address of Organization</td>
																	<td colspan="2">Inclusive Dates
																		<br />(mm/dd/yyyy)
																		<table class="table table-bordered" style="margin-bottom: 0px;">
																			<tr>
																				<td>From</td>
																				<td>To</td>
																			</tr>
																		</table>						
																	</td>
																	<td>Number of Hours</td>
																	<td>Position / Nature of Work</td>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td><input type="text" name="voluntary_name_and_address" class="form-control" value="<?php echo $value['name_and_address']; ?>"></td>
																	<td><input type="text" name="voluntary_date_from" data-inputmask="'mask': '99/99/9999'" class="form-control" value="<?php echo $value['voluntary_work_from']; ?>"></td>
																	<td><input type="text" name="voluntary_date_to" data-inputmask="'mask': '99/99/9999'" class="form-control" value="<?php echo $value['voluntary_work_to']; ?>"></td>
																	<td><input type="text" name="voluntary_number_of_hours" class="form-control" value="<?php echo $value['number_of_hours']; ?>"></td>
																	<td><input type="text" name="voluntary_position" class="form-control" value="<?php echo $value['position']; ?>"></td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
												<!--/ Voluntary Work -->
												<!-- Training Programs -->
												<div id="training_programs" class="tab-pane fade">
													<div class="row">
														<div class="col-md-12 category_header">
															<h4>VII.Training Programs (Start from the most recent training.)</h4>
														</div>
													</div>
													<div class="row">
														<table class="table table-bordered">
															<thead>
																<tr>
																	<td>32. Title of Seminar/Conference/Workshop/Short Courses <br />(Write in full)</td>
																	<td colspan="2">Inclusive Dates
																		<br />(mm/dd/yyyy)
																		<table class="table table-bordered" style="margin-bottom: 0px;">
																			<tr>
																				<td>From</td>
																				<td>To</td>
																			</tr>
																		</table>						
																	</td>
																	<td>Number of Hours</td>
																	<td>Conducted / Sponsor By <br />(Write in full)</td>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td><input type="text" name="training_title" class="form-control" value="<?php echo $value['title_of_seminar']; ?>"></td>
																	<td><input type="text" name="training_date_from" data-inputmask="'mask': '99/99/9999'" class="form-control" value="<?php echo $value['training_date_from']; ?>"></td>
																	<td><input type="text" name="training_date_to" data-inputmask="'mask': '99/99/9999'" class="form-control" value="<?php echo $value['training_date_to']; ?>"></td>
																	<td><input type="text" name="training_number_of_hours" class="form-control" value="<?php echo $value['training_number_of_hours']; ?>"></td>
																	<td><input type="text" name="training_conducted" class="form-control" value="<?php echo $value['conducted_by']; ?>"></td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
												<!--/ Training Programs -->
												<!-- Other Information -->
												<div id="other_information" class="tab-pane fade">
													<div class="row">
														<div class="col-md-12 category_header">
															<h4>VIII.Other Information</h4>
														</div>
													</div>
													<div class="row">
														<table class="table table-bordered">
															<thead>
																<tr>
																	<td>33. Special Skills / Hobbies</td>
																	<td>34. Non-Academic Distinction / Recognition<br />(Write in full)</td>
																	<td>35. Membership in Association / Organization<br />(Write in full)</td>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td><input type="text" name="other_special_skill" class="form-control" value="<?php echo $value['other_special_skill']; ?>"></td>
																	<td><input type="text" name="other_non_academic" class="form-control" value="<?php echo $value['other_non_academic']; ?>"></td>
																	<td><input type="text" name="other_membership" class="form-control" value="<?php echo $value['other_membership']; ?>"></td>
																</tr>
																<tr>
																	<td>
																		<p>36. Are you related by consanguinity or affinity to any of the following:</p>
																		<br />
																		<br />
																		<p>a. Within the third degree (for National Government Employees):
																			<br />
																			appointing authority, recommending authority, chief of office/bureau/department or person who has immediate supervision over you in the Office, Bureau or Department where you will be appointed?
																		</p>
																		<br />
																		<br />
																		<br />
																		<p>
																			b. Within the fourth degree (for Local Government Employees):      
																			<br/>                                                        appointing authority or recommending authority where you will be appointed?
																		</p>
																	</td>
																	<td colspan="2">
																		<br />
																		<br />
																		<br />
																		<br />
																		<input type="radio" class="flat" name="other_36_a" id="genderM" value="1" <?php if($value['36_a'] == 1 ){
																			echo "checked"; 
																			} ?>>
																		<label>YES</label> 
																		<input type="radio" class="flat" name="other_36_a" id="genderF" value="0" <?php if($value['36_a'] == 0 ){
																			echo "checked"; 
																			} ?>>
																		<label>NO</label><br />
																		<label>If YES, give details:</label>
																		<textarea class="form-control" name="other_36_a_yes"><?php echo $value['36_a_yes']?></textarea>
																		<input type="radio" class="flat" name="other_36_b" id="genderM" value="1" checked="" <?php if($value['36_b'] == 1 ){
																			echo "checked"; 
																			} ?>>
																		<label>YES</label> 
																		<input type="radio" class="flat" name="other_36_b" id="genderF" value="0" <?php if($value['36_b'] == 0 ){
																			echo "checked"; 
																			} ?>>
																		<label>NO</label><br />
																		<label>If YES, give details:</label>
																		<textarea class="form-control" name="other_36_b_yes"><?php echo $value['36_b_yes']?></textarea>
																	</td>
																	<tr>
																		<td>
																			37. a. Have you ever been formally charged?
																			<br />
																			<br />
																			<br />
																			<br />
																			<br />
																			<br />
																			b. Have you ever been guilty of any administrative offense
																		</td>
																		<td colspan="2">
																			<input type="radio" class="flat" name="other_37_a" id="genderM" value="1" <?php if($value['37_a'] == 1 ){
																			echo "checked"; 
																			} ?>>
																			<label>YES</label> 
																			<input type="radio" class="flat" name="other_37_a" id="genderF" value="0" <?php if($value['37_a'] == 0 ){
																			echo "checked"; 
																			} ?>>
																			<label>NO</label><br />
																			<label>If YES, give details:</label>
																			<textarea class="form-control" name="other_37_a_yes"><?php echo $value['37_a_yes']?></textarea>
																			<input type="radio" class="flat" name="other_37_b" id="genderM" value="1" <?php if($value['37_b'] == 1 ){
																			echo "checked"; 
																			} ?>>
																			<label>YES</label> 
																			<input type="radio" class="flat" name="other_37_b" id="genderF" value="0" <?php if($value['37_b'] == 0 ){
																			echo "checked"; 
																			} ?>>
																			<label>NO</label><br />
																			<label>If YES, give details:</label>
																			<textarea class="form-control" name="other_37_b_yes"><?php echo $value['37_b_yes']?></textarea>
																		</td>
																	</tr>
																	<tr>
																		<td>38. Have you ever been convicted of any crime or violation of any law, decree, ordinance or regulation by any court or tribunal?</td>
																		<td colspan="2">
																			<input type="radio" class="flat" name="other_number_38" id="genderM" value="1" <?php if($value['number_38'] == 1 ){
																			echo "checked"; 
																			} ?>>
																			<label>YES</label> 
																			<input type="radio" class="flat" name="other_number_38" id="genderF" value="0" <?php if($value['number_38'] == 0 ){
																			echo "checked"; 
																			} ?>>
																			<label>NO</label><br />
																			<label>If YES, give details:</label>
																			<textarea class="form-control" name="other_number_38_yes"><?php echo $value['number_38_yes']?></textarea>
																		</td>
																	</tr>
																	<tr>
																		<td>39. Have you ever been separated from the service in any of the following modes: resignation, retirement, dropped from the rolls, dismissal, termination, end of term, finished contract, AWOL or phased out, in the public or private sector?</td>
																		<td colspan="2">
																			<input type="radio" class="flat" name="other_number_39" id="genderM" value="1" <?php if($value['number_39'] == 1 ){
																			echo "checked"; 
																			} ?>>
																			<label>YES</label> 
																			<input type="radio" class="flat" name="other_number_39" id="genderF" value="0" <?php if($value['number_39'] == 0 ){
																			echo "checked"; 
																			} ?>>
																			<label>NO</label><br />
																			<label>If YES, give details:</label>
																			<textarea class="form-control" name="other_number_39_yes"><?php echo $value['number_39_yes']?></textarea>
																		</td>
																	</tr>
																	<tr>
																		<td>40. Have you ever been a candidate in a national or local election (except Barangay election)?</td>
																		<td colspan="2">
																			<input type="radio" class="flat" name="other_number_40" id="genderM" value="1" <?php if($value['number_40'] == 1 ){
																			echo "checked"; 
																			} ?>>
																			<label>YES</label> 
																			<input type="radio" class="flat" name="other_number_40" id="genderF" value="0" <?php if($value['number_40'] == 0 ){
																			echo "checked"; 
																			} ?>>
																			<label>NO</label><br />
																			<label>If YES, give details:</label>
																			<textarea class="form-control" name="other_number_40_yes"><?php echo $value['number_40_yes']?></textarea>
																		</td>
																	</tr>
																	<tr>
																		<td>
																			41. Pursuant to: (a) Indigenous People's Act (RA 8371); (b) Magna Carta for Disabled Persons (RA 7277); and (c) Solo Parents Welfare Act of 2000 (RA 8972), please answer the following items:
																			<br />
																			<br />
																			a. Are you a member of any indigenous group?
																			<br />
																			<br />
																			<br />
																			<br />
																			b. Are you differently abled?
																			<br />
																			<br />
																			<br />
																			c. Are you a solo parent?
																		</td>
																		<td colspan="2">
																			<br />
																			<br />
																			<br />
																			<input type="radio" class="flat" name="other_41_a" id="genderM" value="1" checked="" <?php if($value['41_a'] == 1 ){
																			echo "checked"; 
																			} ?>>
																			<label>YES</label> 
																			<input type="radio" class="flat" name="other_41_a" id="genderF" value="0" <?php if($value['41_a'] == 0 ){
																			echo "checked"; 
																			} ?>>
																			<label>NO</label><br />
																			<label class="radio-inline">
																				<label>If YES, please specify:
																					<input type="text" class="col-md-1 pull-right" name="other_41_a_yes" style="width: 40%; border-top: none; border-left: none; border-right:none; border-bottom: 1px solid;" value="<?php echo $value['41_a_yes']?>">
																				</label>
																			</label>
																			<input type="radio" class="flat" name="other_41_b" id="genderM" value="1" checked="" <?php if($value['41_b'] == 1 ){
																			echo "checked"; 
																			} ?>>
																			<label>YES</label> 
																			<input type="radio" class="flat" name="other_41_b" id="genderF" value="0" <?php if($value['41_b'] == 0 ){
																			echo "checked"; 
																			} ?>>
																			<label>NO</label><br />
																			<label class="radio-inline">
																				<label>If YES, please specify:
																					<input type="text" class="col-md-1 pull-right" name="other_41_b_yes" style="width: 40%; border-top: none; border-left: none; border-right:none; border-bottom: 1px solid;" value="<?php echo $value['41_b_yes']?>">
																				</label>
																			</label>
																			<input type="radio" class="flat" name="other_41_c" id="genderM" value="1" checked="" <?php if($value['41_c'] == 1 ){
																			echo "checked"; 
																			} ?>>
																			<label>YES</label> 
																			<input type="radio" class="flat" name="other_41_c" id="genderF" value="0" <?php if($value['41_a'] == 0 ){
																			echo "checked"; 
																			} ?>>
																			<label>NO</label><br />
																			<label class="radio-inline">
																				<label>If YES, please specify:
																					<input type="text" class="col-md-1 pull-right" name="other_41_c_yes" style="width: 40%; border-top: none; border-left: none; border-right:none; border-bottom: 1px solid;" value="<?php echo $value['41_c_yes']?>">
																				</label>
																			</label>
																		</td>
																	</tr>
																</tr>
																<tr>
																	<td colspan="3">42. References <small>(Person not related by consanguinity or affinity to applicant / appointee)</small></td>
																</tr>
																<tr>
																	<table class="table table-bordered">
																		<thead>
																			<tr>	
																			
																				<td colspan="1">Name</td>
																				<td colspan="1">Address</td>
																				<td colspan="1">Tel. No.</td>
																				
																			</tr>
																		</thead>
																		<tbody>
																			<tr>
																			
																				<td><input type="text" name="references_name" class="form-control" value = "<?php echo $value['references_name']; ?>"></td>
																				<td><input type="text" name="references_address" class="form-control" value = "<?php echo $value['references_address']; ?>"></td>
																				<td><input type="text" name="references_tel_no" data-inputmask="'mask' : '(999) 999-9999'" class="form-control" value = "<?php echo $value['references_tel_no']; ?>"></td>
																				<td rowspan="1">
																					<table class="table table-bordered">
																						<tr>
																							<td>
																								<center>
																									<small>ID picture taken within<br /> the last 6 months<br /> 3.5 cm. X 4.5 cm <br />(passport size)<br /><br />
																										Computer generated <br />or xerox copy of picture<br /> is not acceptable
																									</small>
																								</center>
																							</td>
																							<center>PHOTO</center>
																						</tr>
																					</table>
																				</td>
																			</tr>
																		</tbody>
																		<table class="table table-bordered">
																			<tr>
																				<td>
																					43. I declare under oath that this Personal Data Sheet has been accomplished by me, and is a true, correct and complete statement pursuant to the provisions of pertinent laws, rules and regulations of the Republic of Kenya.<br /><br />
																					I also authorize the agency head / authorized representative to verify / validate the contents stated herein.  I trust that  this information shall remain confidential.
																				</td>
																			</tr>
																		</table>
																		<table class="table table-bordered">
																			<tr>
																				<td><input type="text" name="community_tax" class="form-control"></td>
																				<td rowspan="3"></td>
																				<td rowspan="5"></td>
																			</tr>
																			<tr>
																				<td><center>Community Tax Certification No.</center></td>
																			</tr>
																			<tr>
																				<td><input type="text" name="issued_at" class="form-control"></td>
																			</tr>
																			<tr>
																				<td><center>Issued At</center></td>
																				<td><center>Signature (Sign inside the box)</center></td>
																			</tr>
																			<tr>
																				<td><input type="text" name="issued_on" data-inputmask="'mask': '99/99/9999'" class="form-control"></td>
																				<td><input type="text" name="date_accomplished" data-inputmask="'mask': '99/99/9999'" class="form-control"></td>
																			</tr>
																			<tr>
																				<td><center>Issued On <small>(mm/dd/yyyy)</small></center></td>
																				<td><center>Date Accomplished</center></td>
																				<td><center>Right Thumbmark</center></td>
																			</tr>
																		</table>
																	</table>
																</tr>
																<tr>
																	<td>
																		<div class="col-md-12">
																			<button type="submit" class="btn btn-success pull-right">
																				Save</button>
																			</div>
																		</td>
																	</tr>
																</tbody>
															</table>
														</div>
													</div>
													<!--/ Other Information -->
												</div>
												<?php } ?>
												<div class="col-md-12">
													<div class="pull-right">CS FORM 212 (Revised 2021)</div>
												</div>
											</div>
										</form>
									</div>	<!-- /x content -->
								</div>	<!-- /x panel -->
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

			<!-- iCheck -->
			<script src="../vendors/iCheck/icheck.min.js"></script>
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