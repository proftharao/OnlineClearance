<?php
include('../connect.php');
include('../addteacher.php');
include('../session_admin.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<!-- Meta, title, CSS, favicons, etc. -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>eMobilis Clearance System</title>

	<!-- Bootstrap -->
	<link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<!-- Font Awesome -->
	<link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<!-- NProgress -->
	<link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" media="print" href="print.css" />
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
						<a href="#" class="site_title"><i class="fa fa-heart"></i> <span>eMobilis Clearance System</span></a>
					</div>

					<div class="clearfix"></div>

					<!-- menu profile quick info -->
					<div class="profile">
						<div class="profile_pic">
							<img src="..\img\sample.png" alt="..." class="img-circle profile_img">
						</div>
						<div class="profile_info">
							<span>Welcome,</span>
							<h2><?php echo "$name"; ?></h2>
						</div>
					</div>
					<!-- /menu profile quick info -->

					<br />

					<!-- sidebar menu -->
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
									<img src="..\img\sample.png" alt="">Admin
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
									<li><a href="javascript:;" data-toggle="modal" data-target="#change_pass">Change password</a></li>
									<li><a href="..\index.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
								</ul>
							</li>
							<li role="presentation" class="dropdown">
							</li>
						</ul>
					</nav>
				</div>
			</div>
			<!-- /top navigation -->

			<!-- page content -->
			<div class="right_col" role="main">
				<div class="">
					<div class="page-title">
						<div class="title_left">
							<h3><a href="admin1.php"> <i class="fa fa-arrow-left"></i> Back</a></h3>
						</div>
						<div class="title_right">				

						</div>
					</div>

					<div class="clearfix"></div>
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="x_panel">
							<div class="x_title">
								<h2></h2>
								<div class="row">
									<div class="col-md-12">
										<ul class="nav nav-pills">
											<li class="active"><a data-toggle="pill" href="#pds">Personal Data Sheet</a></li>
											<li><a data-toggle="pill" href="#clearance">Clearance Status</a></li>
										</ul>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="x_content col-md-12" >
								<form action="../update_faculty_pds.php" method="post" class="form-horizontal form-label-left">
									<div class="container-fluid" style="border: 2px solid">
										<div class="tab-content">
											<?php
											$a = $_POST['haydi'];
											$sql = "SELECT * FROM pds_personal_information 
											NATURAL JOIN pds_family_background 
											NATURAL JOIN pds_civil_service
											NATURAL JOIN pds_work_experience 
											NATURAL JOIN pds_voluntary_work 
											NATURAL JOIN pds_training_program
											NATURAL JOIN pds_other_info
											NATURAL JOIN clearance WHERE id = $a "
											;
											$query = $conn->prepare($sql);
											$query->execute();
											$fetch = $query->fetchAll();

											foreach ($fetch as $key => $value) { ?>
											<!-- Personal info tab -->
											<div id="pds" class="tab-pane fade in active">
												<div class="row">
													<div class="col-md-3">
														<small>CS FORM 212 (Revised 2021)</small>
													</div>
													<div class="row">
														<div class="col-md-12">
															<center><h2><strong>PERSONAL DATA SHEET</strong></h2></center>
														</div>
													</div>
													<div class="row">
														<div class="col-md-6">
														</div>
														<div class="col-md-4 pull-right">
															<strong>1.CS ID No. ______________________________</strong>
														</div>
													</div>
													<table class="table table-bordered" style="margin-bottom: 0%;">
														<thead>
															<tr>
																<td colspan="4"><h5><strong>I. Personal Information</strong></h5></td>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td width="15%">2. Surname</td>
																<td colspan="4"><?php echo $value['surname'];?></td>
															</tr>
															<tr>
																<td>First Name</td>
																<td colspan="4"><?php echo $value['firstname'];?></td>
															</tr>
															<tr>
																<td>Middle Name</td>
																<td width="30%"><?php echo $value['middlename'];?></td>
																<td width="17%">3. Name Extension</td>
																<td><?php echo $value['name_extension'];?></td>
															</tr>
															<tr>
																<td>4. Date of Birth</td>
																<td><?php echo $value['birthday'];?></td>
																<td rowspan="2">16. Residential Address</td>
																<td rowspan="2"><?php echo $value['residential_address']; ?></td>
															</tr>
															<tr>
																<td>5. Place of Birth</td>
																<td><?php echo $value['place_of_birth']; ?></td>
															</tr>
															<tr>
																<td>6. Sex</td>
																<td><?php echo $value['sex']; ?></td>
																<td><div class="pull-right">Zip Code</div></td>
																<td><?php echo $value['residential_zipcode']; ?></td>
															</tr>
															<tr>
																<td>7.Civil Status</td>
																<td>
																	<?php 
																	if ($value['civil_status'] === 1) {
																		echo "Single";
																	}elseif ($value['civil_status'] === 2) {
																		echo "Married";
																	}elseif ($value['civil_status'] === 3) {
																		echo "Annuled";
																	}elseif ($value['civil_status'] === 4) {
																		echo "Widowed";
																	}elseif ($value['civil_status'] === 5) {
																		echo "Separated";
																	}else{
																		echo $value['other_civil_status'];;
																	}
																	?>
																</td>
																<td>19. Telephone No.</td>
																<td><?php echo $value['residential_tel_no']; ?></td>
															</tr>
															<tr>
																<td>8. Citizenship</td>
																<td><?php echo $value['citizenship']; ?></td>
																<td rowspan="2">18. Permanent Address</td>
																<td rowspan="2"><?php echo $value['permanent_address']; ?></td>
															</tr>
															<tr>
																<td>9. Height</td>
																<td><?php echo $value['height']; ?> m</td>
															</tr>
															<tr>
																<td>10. Weight</td>
																<td><?php echo $value['weight']; ?> kg</td>
																<td><div class="pull-right">Zip Code</div></td>
																<td><?php echo $value['permanent_zipcode']; ?></td>
															</tr>
															<tr>
																<td>11. Blood Type</td>
																<td>Type <?php echo $value['blood_type']; ?></td>
																<td>19. Telephone No.</td>
																<td><?php echo $value['permanent_tel_no']; ?></td>
															</tr>
															<tr>
																<td>12. GSIS ID NO.</td>
																<td><?php echo $value['gsis_id_no']; ?></td>
																<td>20. Email Address</td>
																<td><?php echo $value['email_address']; ?></td>
															</tr>
															<tr>
																<td>13. PAG-IBIG ID NO.</td>
																<td><?php echo $value['pagibig_id_no']; ?></td>
																<td>21. Cellphone No.</td>
																<td><?php echo $value['cellphone_no']; ?></td>
															</tr>
															<tr>
																<td>14. PHILHEALTH NO.</td>
																<td><?php echo $value['philhealth_no']; ?></td>
																<td>22. Agency Employee No.</td>
																<td><?php echo $value['agency_employee_no']; ?></td>
															</tr>
															<tr>
																<td>15. SSS No.</td>
																<td><?php echo $value['sss_no']; ?></td>
																<td>23. TIN</td>
																<td><?php echo $value['tin_no']; ?></td>
															</tr>
														</tbody>
													</table>
													<table class="table table-bordered" style="margin-bottom: 0%;">
														<thead>
															<tr>
																<td colspan="4"><h5><strong>II. Family Background</strong></h5></td>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td width="15%">24. Spouse's Surname</td>
																<td width="30%"><?php echo $value['spouse_surname']; ?></td>
																<td>25. Name of Child</td>
																<td>Date of Birth</td>
															</tr>
															<tr>
																<td width="15%"><div class="pull-right">Firstname</div></td>
																<td width="30%"><?php echo $value['spouse_firstname']; ?></td>
																<td></td>
																<td></td>
															</tr>
															<tr>
																<td width="15%"><div class="pull-right">Middlename</div></td>
																<td width="30%"><?php echo $value['spouse_middlename']; ?></td>
																<td></td>
																<td></td>
															</tr>
															<tr>
																<td width="15%">Occupation</td>
																<td width="30%"><?php echo $value['spouse_occupation']; ?></td>
																<td></td>
																<td></td>
															</tr>
															<tr>
																<td width="15%">Employer/Bus. Name</td>
																<td width="30%"><?php echo $value['spouse_employer_name']; ?></td>
																<td></td>
																<td></td>
															</tr>
															<tr>
																<td width="15%">Business Address</td>
																<td width="30%"><?php echo $value['spouse_business_address']; ?></td>
																<td></td>
																<td></td>
															</tr>
															<tr>
																<td width="15%">Telephone No.</td>
																<td width="30%"><?php echo $value['spouse_tel_no']; ?></td>
																<td></td>
																<td></td>
															</tr>
															<tr>
																<td width="15%">26. Father Surname</td>
																<td width="30%"><?php echo $value['father_surname']; ?></td>
																<td></td>
																<td></td>
															</tr>
															<tr>
																<td width="15%"><div class="pull-right">Firstname</div></td>
																<td width="30%"><?php echo $value['father_firstname']; ?></td>
																<td></td>
																<td></td>
															</tr>
															<tr>
																<td width="15%"><div class="pull-right">Middlename</div></td>
																<td width="30%"><?php echo $value['father_middlename']; ?></td>
																<td></td>
																<td></td>
															</tr>
															<tr>
																<td colspan="2">Mother's Maiden Name</td>
																<td></td>
																<td></td>
															</tr>
															<tr>
																<td width="15%"><div class="pull-right">Surname</div></td>
																<td width="30%"><?php echo $value['mother_surname']; ?></td>
																<td></td>
																<td></td>
															</tr>
															<tr>
																<td width="15%"><div class="pull-right">Firstname</div></td>
																<td width="30%"><?php echo $value['mother_firstname']; ?></td>
																<td></td>
																<td></td>
															</tr>
															<tr>
																<td width="15%"><div class="pull-right">Middlename</div></td>
																<td width="30%"><?php echo $value['mother_middlename']; ?></td>
																<td></td>
																<td></td>
															</tr>
														</tbody>
													</table>
													<table class="table table-bordered" style="margin-bottom: 0%;">
														<thead>
															<tr>
																<td colspan="8"><h5><strong>III. Educational Background</strong></h5></td>
															</tr>
														</thead>
														<thead>
															<tr>
																<td rowspan="2">28. Level</td>
																<td rowspan="2">Name of School </td>
																<td rowspan="2">Degree Course</td>
																<td rowspan="2">Year Graduated </td>
																<td rowspan="2">Highest Grade/Level/Units Earned</td>
																<td colspan="2">Inclusive Dates of Attedance 
																</td>
																<td rowspan="2">Scolarship/Academic honors recieved</td>
															</tr>
															<tr>
																<td>From</td>
																<td>To</td>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td>Elementary</td>
																<td></td>
																<td></td>
																<td></td>
																<td></td>
																<td></td>
																<td></td>
																<td></td>
															</tr>
															<tr>
																<td>Secondary</td>
																<td></td>
																<td></td>
																<td></td>
																<td></td>
																<td></td>
																<td></td>
																<td></td>
															</tr>
															<tr>
																<td>Vocational / Trade course</td>
																<td></td>
																<td></td>
																<td></td>
																<td></td>
																<td></td>
																<td></td>
																<td></td>
															</tr>
															<tr>
																<td>College</td>
																<td></td>
																<td></td>
																<td></td>
																<td></td>
																<td></td>
																<td></td>
																<td></td>
															</tr>
															<tr>
																<td>Graduate Studies</td>
																<td></td>
																<td></td>
																<td></td>
																<td></td>
																<td></td>
																<td></td>
																<td></td>
															</tr>
														</tbody>
													</table>
													<table class="table table-bordered" style="margin-bottom: 0%;">
														<thead>
															<tr>
																<td colspan="8"><h5><strong>IV. Civil Service Eligibility</strong></h5></td>
															</tr>
														</thead>
														<thead>
															<tr>
																<td rowspan="2">29. Carrer Service/ RA 1080 (Board/Bar)<br />Under Special LAWS/CES/CSEE</td>
																<td rowspan="2">Rating</td>
																<td rowspan="2">Date of Examination/Conferment</td>
																<td rowspan="2">Place of Examination / Conferment</td>
																<td colspan="2">License
																</td>
															</tr>
															<tr>
																<td>Number</td>
																<td>Date of Release</td>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td><?php echo $value['career_service']; ?></td>
																<td><?php echo $value['rating']; ?></td>
																<td><?php echo $value['date_of_examination']; ?></td>
																<td><?php echo $value['place_of_examination']; ?></td>
																<td><?php echo $value['license_number']; ?></td>
																<td><?php echo $value['license_date_of_release']; ?></td>
															</tr>
														</tbody>
													</table>
													<table class="table table-bordered" style="margin-bottom: 0%;">
														<thead>
															<tr>
																<td colspan="8"><h5><strong>V.Work Experience</strong></h5></td>
															</tr>
														</thead>
														<thead>
															<tr>
																<td colspan="2" width="15%">30. Inclusive Dates
																	<br />(mm/dd/yyyy)						
																</td>
																<td rowspan="2" width="20%">Position Title</td>
																<td rowspan="2">Department/Agency/Office/Comapny</td>
																<td rowspan="2">Monthly Salary</td>
																<td rowspan="2" width="10%"><small>Salary Grade & Step Increment(Format "00-0")</small></td>
																<td rowspan="2">Status Of Appointment</td>
																<td rowspan="2">Gov't Service</td>
															</tr>
															<tr>
																<td>From</td>
																<td>To</td>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td><?php echo $value['work_experience_from']; ?></td>
																<td><?php echo $value['work_experience_to']; ?></td>
																<td><?php echo $value['position_title']; ?></td>
																<td><?php echo $value['department']; ?></td>
																<td><?php echo $value['monthly_salary']; ?></td>
																<td><?php echo $value['salary_grade']; ?></td>
																<td><?php echo $value['status_of_appointment']; ?></td>
																<td><?php echo $value['govt_service']; ?></td>
															</tr>
														</tbody>
													</table>
													<table class="table table-bordered" style="margin-bottom: 0%">
														<thead>
															<tr>
																<td colspan="8"><h5><strong>VI.Voluntary Work or Involvement in Civic / Non-Government / People / Voluntary Origanization</strong></h5></td>
															</tr>
														</thead>
														<thead>
															<tr>
																<td rowspan="2">31. Name & Address of Organization</td>
																<td colspan="2">Inclusive Dates
																	<br />(mm/dd/yyyy)						
																</td>
																<td rowspan="2">Number of Hours</td>
																<td rowspan="2">Position / Nature of Work</td>
															</tr>
															<tr>
																<td>From</td>
																<td>To</td>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td><?php echo $value['name_and_address']; ?></td>
																<td><?php echo $value['voluntary_work_from']; ?></td>
																<td><?php echo $value['voluntary_work_to']; ?></td>
																<td><?php echo $value['number_of_hours']; ?></td>
																<td><?php echo $value['position']; ?></td>
															</tr>
														</tbody>
													</table>
													<table class="table table-bordered" style="margin-bottom: 0%">
														<thead>
															<tr>
																<td colspan="8"><h5><strong>VII.Training Programs</strong></h5></td>
															</tr>
														</thead>
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
																<td><?php echo $value['title_of_seminar']; ?></td>
																<td><?php echo $value['training_date_from']; ?></td>
																<td><?php echo $value['training_date_to']; ?></td>
																<td><?php echo $value['training_number_of_hours']; ?></td>
																<td><?php echo $value['conducted_by']; ?></td>
															</tr>
														</tbody>
													</table>
													<table class="table table-bordered">
														<thead>
															<tr>
																<td colspan="8"><h5><strong>VIII.Other Information</strong></h5></td>
															</tr>
														</thead>
														<thead>
															<tr>
																<td>33. Special Skills / Hobbies</td>
																<td>34. Non-Academic Distinction / Recognition<br />(Write in full)</td>
																<td>35. Membership in Association / Organization<br />(Write in full)</td>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td><?php echo $value['other_special_skill']; ?></td>
																<td><?php echo $value['other_non_academic']; ?></td>
																<td><?php echo $value['other_membership']; ?></td>
															</tr>
															<tr>
																<td>
																	<p>36. Are you related by consanguinity or affinity to any of the following:</p>
																</td>
																<td colspan="2"></td>
															</tr>
															<tr>
																<td>
																	<p>a. Within the third degree (for National Government Employees):
																		<br />
																		appointing authority, recommending authority, chief of office/bureau/department or person who has immediate supervision over you in the Office, Bureau or Department where you will be appointed?
																	</p>
																</td>
																<td colspan="2">
																	<?php 
																	if($value['36_a'] == 1 ){
																		echo "YES, "; echo $value['36_a_yes']; 
																	}else{
																		echo "NO"; 
																	}
																	?>
																</td>
															</tr>.
															<tr>
																<td>
																	<p>
																		b. Within the fourth degree (for Local Government Employees):      
																		<br/>                                                        appointing authority or recommending authority where you will be appointed?
																	</p>
																</td>
																<td colspan="2">
																	<?php 
																	if($value['36_b'] == 1 ){
																		echo "YES, "; echo $value['36_b_yes']; 
																	}else{
																		echo "NO"; 
																	}
																	?>
																</td>
															</tr>
															<tr>
																<td>37. a. Have you ever been formally charged?</td>
																<td colspan="2">
																	<?php 
																	if($value['37_a'] == 1 ){
																		echo "YES, "; echo $value['37_a_yes']; 
																	}else{
																		echo "NO"; 
																	}
																	?>
																</td>
															</tr>
															<tr>
																<td> b. Have you ever been guilty of any administrative offense?</td>
																<td colspan="2">
																	<?php 
																	if($value['37_b'] == 1 ){
																		echo "YES, "; echo $value['37_b_yes']; 
																	}else{
																		echo "NO"; 
																	}
																	?>
																</td>
															</tr>
															<tr>
																<td>38. Have you ever been convicted of any crime or violation of any law, decree, ordinance or regulation by any court or tribunal?</td>
																<td colspan="2">
																	<?php 
																	if($value['number_38'] == 1 ){
																		echo "YES, "; echo $value['number_38_yes']; 
																	}else{
																		echo "NO"; 
																	}
																	?>
																</td>
															</tr>	
															<tr>
																<td>39. Have you ever been separated from the service in any of the following modes: resignation, retirement, dropped from the rolls, dismissal, termination, end of term, finished contract, AWOL or phased out, in the public or private sector?</td>
																<td colspan="2">
																	<?php 
																	if($value['number_39'] == 1 ){
																		echo "YES, "; echo $value['number_39_yes']; 
																	}else{
																		echo "NO"; 
																	}
																	?>
																</td>
															</tr>
															<tr>
																<td>40. Have you ever been a candidate in a national or local election (except Barangay election)?</td>
																<td colspan="2">
																	<?php 
																	if($value['number_40'] == 1 ){
																		echo "YES, "; echo $value['number_40_yes']; 
																	}else{
																		echo "NO"; 
																	}
																	?>
																</td>
															</tr>
															<tr>
																<td>41. Pursuant to: (a) Indigenous People's Act (RA 8371); (b) Magna Carta for Disabled Persons (RA 7277); and (c) Solo Parents Welfare Act of 2000 (RA 8972), please answer the following items:</td>
																<td colspan="2"></td>
															</tr>
															<tr>
																<td>a. Are you a member of any indigenous group?</td>
																<td colspan="2">
																	<?php 
																	if($value['41_a'] == 1 ){
																		echo "YES, "; echo $value['41_a_yes']; 
																	}else{
																		echo "NO"; 
																	}
																	?>
																</td>
															</tr>
															<tr>
																<td>b. Are you differently abled?</td>
																<td colspan="2">
																	<?php 
																	if($value['41_b'] == 1 ){
																		echo "YES, "; echo $value['41_b_yes']; 
																	}else{
																		echo "NO"; 
																	}
																	?>
																</td>
															</tr>
															<tr>
																<td>c. Are you a solo parent?</td>
																<td colspan="2">
																	<?php 
																	if($value['41_c'] == 1 ){
																		echo "YES, "; echo $value['41_c_yes']; 
																	}else{
																		echo "NO"; 
																	}
																	?>
																</td>
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
																			<td></td>
																		</tr>
																	</thead>
																	<tbody>
																		<tr>
																			<td><?php echo $value['references_name']; ?></td>
																			<td><?php echo $value['references_address']; ?></td>
																			<td><?php echo $value['references_tel_no']; ?></td>
																			<td rowspan="1">
																				<table class="table table-bordered">
																					<tr>
																						<td rowspan="">
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
																				43. I declare under oath that this Personal Data Sheet has been accomplished by me, and is a true, correct and complete statement pursuant to the provisions of pertinent laws, rules and regulations of the Republic of the Philippines.<br /><br />
																				I also authorize the agency head / authorized representative to verify / validate the contents stated herein.  I trust that  this information shall remain confidential.
																			</td>
																		</tr>
																	</table>
																	<table class="table table-bordered">
																		<tr>
																			<td><input type="text" name="community_tax" class="form-control" disabled=""></td>
																			<td rowspan="3"></td>
																			<td rowspan="5"></td>
																		</tr>
																		<tr>
																			<td><center>Community Tax Certification No.</center></td>
																		</tr>
																		<tr>
																			<td><input type="text" name="issued_at" class="form-control" disabled=""></td>
																		</tr>
																		<tr>
																			<td><center>Issued At</center></td>
																			<td><center>Signature (Sign inside the box)</center></td>
																		</tr>
																		<tr>
																			<td><input type="text" name="issued_on" data-inputmask="'mask': '99/99/9999'" class="form-control" disabled=""></td>
																			<td><input type="text" name="date_accomplished" data-inputmask="'mask': '99/99/9999'" class="form-control" disabled=""></td>
																		</tr>
																		<tr>
																			<td><center>Issued On <small>(mm/dd/yyyy)</small></center></td>
																			<td><center>Date Accomplished</center></td>
																			<td><center>Right Thumbmark</center></td>
																		</tr>
																	</table>
																</table>
															</tr>									
														</tbody>
													</table>
												</div>
											</div>
											<!--/ Personal info tab -->
											<!-- Family background tab-->
											<div id="clearance" class="tab-pane fade">
												<div class="row">
													<div class="col-md-12">
														<?php	
														$sql = "SELECT * FROM faculty WHERE id = $a ";
														$query = $conn->prepare($sql);
														$query->execute(array($a));
														$row = $query->fetch();
														$name = $row['faculty_Fname']. " " . $row['faculty_Mname']. " " . $row['faculty_Lname'];
														$designation = $row['Designation']; 
														$pic = $row['faculty_picture'];
														?>
														<center>
															Republic of the Philippines<br />
															<strong>CARLOS HILADO MEMORIAL STATE COLLEGE</strong><br />
															Talisay City, Negros Occidental
															<br />
															<br />
															<strong>FACULTY/EMPLOYEE CLEARANCE</strong>
															<br />
															<small>(Purpose: Summer Vacation, Retirement, Commutation Maternity Leave, Study Leave, Vacation/Sick Leave)</small>
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
																<strong>The President</strong><br />
																This College <br />
																Talisay City, Negros Occidental<br /><br />
																<u><?php echo $name ?></u>:<br />
															</div>
														</div>
														<div class="row">
															<div class="col-md-12">
																<p>
																	I have the honor to inform your good Office that I have satisfactoryily accounted for all money and property accountabilities and that all reports were complied with on dates shown below :
																</p>
															</div>
														</div>
													</div>
													<div class="row">
														<div class="col-md-12">
															<center>
																<label>Until
																	<input type="text" class="col-md-1 pull-right" name="other_civil_status" style="width: 70%;
																	border-top: none; border-left: none; border-right:none; border-bottom: 1px solid; margin-left: -30px;">
																</label>
																<label>, my mailing address will be
																	<input type="text" class="col-md-1 pull-right" name="other_civil_status" style="width: 51%;border-top: none;border-left: none;border-right: none;border-bottom: 1px solid;">
																</label>
															</center>
														</div>
														<div class="col-md-3 pull-right">
															<div class="pull-right">
																<p>Very truly yours,</p>
																<u><?php echo $name ?></u><br />
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
																<br />
																<br />
																<br />
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
														</div>
													</div>
												</div>
											</div>
											<!--/ Family background tab-->
										</div>
										<?php } ?>
									</div>
								</form>
								<div class="pull-right">
									<button onclick="window.print()" id="btnPrint" class="btn btn-primary btn-m " >
										Print Report
									</button>
								</div>
							</div>	<!-- /x content -->
						</div>		
					</div>
				</div>
			</div>
			<!-- /page content -->

			<!-- footer content -->
			<footer>
				<div class="pull-right">
					by:OFCS team
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
	<!-- Custom Theme Scripts -->
	<script src="../build/js/custom.min.js"></script>
	<script src="../build/js/md5.js"></script>

	<!-- Datatables -->
	<script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
	<script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
	<script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
	<script src="../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
	<script src="../vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
	<script src="../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
	<script src="../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
	<script src="../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
	<script src="../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
	<script src="../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
	<script src="../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
	<script src="../vendors/datatables.net-scroller/js/datatables.scroller.min.js"></script>
	<script src="../vendors/jszip/dist/jszip.min.js"></script>
	<script src="../vendors/pdfmake/build/pdfmake.min.js"></script>
	<script src="../vendors/pdfmake/build/vfs_fonts.js"></script>

	<script type="text/javascript">
		jQuery(function(){
			$('form[action="save_deadline"]').on('submit', function(e){
				e.preventDefault();

				var da = $('input[name="deadline"]').val();

				$.ajax({
					type: 'POST',
					url: 'set_deadline.php',
					data: {d_date: da}
				})
				.done(function(data){
					$('.save_dl').text('Deadline has been set');
					setTimeout(function(){
						location.reload();
					}, 3000);
				});
			});

			$('.reset_dl').on('click', function(e){
				e.preventDefault();

				$.ajax({
					type: 'POST',
					url: 'reset_dl.php'
				})
				.done(function(data){
					$('.save_dl').text('Deadline has been reset');
					setTimeout(function(){
						location.reload();
					}, 3000);
				});
			});

			$('form[name="fchange_p"]').on('submit', function(e){
				e.preventDefault();

				var sess_pass = '<?php echo $a_sess_pass; ?>';
				var sess_id = '<?php echo $a_sess_id; ?>';

				var a = $('[name="old_pass1"]').val();
				var b = $('[name="new_pass1"]').val();
				var c = $('[name="conf_pass1"]').val();

				if (md5(a) !== sess_pass){
					$('.edit_pass1').text('Please enter your current password');
					$('[name="old_pass1"]').val('').focus();
				}else{
					if (b === '' && c !== ''){
						$('.edit_pass1').text('Please enter your new password');
					}else if (b !== '' && c === ''){
						$('.edit_pass1').text('Please confirm your new password');
					}else if (b === '' && c === ''){
						$('.edit_pass1').text('Please fill out the fields');
					}else if (b !== c){
						$('.edit_pass1').text('Passwords do not match');
					}else{
						$.ajax({
							type: 'POST',
							url: 'edit_pass.php',
							data: {
								session_id: sess_id,
								password: b
							}
						})
						.done(function(data){
							$('form[name="change_p"] input[type="password"]').val('');
							if (data == 1){
								$('.edit_pass1').text('Password successfully updated');
							}else{
								$('.edit_pass1').text('An error occured. Try again');
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
	<!-- Datatables -->
	<script>
		$(document).ready(function() {
			var handleDataTableButtons = function() {
				if ($("#datatable-buttons").length) {
					$("#datatable-buttons").DataTable({
						dom: "Bfrtip",
						buttons: [
						{
							extend: "copy",
							className: "btn-sm"
						},
						{
							extend: "csv",
							className: "btn-sm"
						},
						{
							extend: "excel",
							className: "btn-sm"
						},
						{
							extend: "pdf",
							className: "btn-sm"
						},
						{
							extend: "print",
							className: "btn-sm"
						},
						],
						responsive: true
					});
				}
			};

			TableManageButtons = function() {
				"use strict";
				return {
					init: function() {
						handleDataTableButtons();
					}
				};
			}();

			$('#datatable').dataTable();

			$('#datatable-keytable').DataTable({
				keys: true
			});

			$('#datatable-responsive').DataTable();

			$('#datatable-scroller').DataTable({
				ajax: "js/datatables/json/scroller-demo.json",
				deferRender: true,
				scrollY: 380,
				scrollCollapse: true,
				scroller: true
			});

			$('#datatable-fixed-header').DataTable({
				fixedHeader: true
			});

			var $datatable = $('#datatable-checkbox');

			$datatable.dataTable({
				'order': [[ 1, 'asc' ]],
				'columnDefs': [
				{ orderable: false, targets: [0] }
				]
			});
			$datatable.on('draw.dt', function() {
				$('input').iCheck({
					checkboxClass: 'icheckbox_flat-green'
				});
			});

			TableManageButtons.init();
		});
	</script>
	<script>
		function myFunction() {
			window.print();
		}
	</script>
	<!-- /Datatables -->
</body>
</html>
