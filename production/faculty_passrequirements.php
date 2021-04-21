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

	<title>Carlos Hilado Memorial State College </title>

	<!-- Bootstrap -->
	<link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<!-- CSS -->
	<link href="../production/stylesheet.css" rel="stylesheet">
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
						<a href="#" class="site_title"><i class="fa fa-heart"></i> <span>CHMSC</span></a>
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

				<!-- <li role="presentation" class="dropdown">
					<a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
						<i class="fa fa-envelope-o"></i>
						<span class="badge bg-green">6</span>
					</a>
					<ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
						<li>
							<a>
								<span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
								<span>
									<span>John Smith</span>
									<span class="time">3 mins ago</span>
								</span>
								<span class="message">
									Film festivals used to be do-or-die moments for movie makers. They were where...
								</span>
							</a>
						</li>
						<li>
							<a>
								<span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
								<span>
									<span>John Smith</span>
									<span class="time">3 mins ago</span>
								</span>
								<span class="message">
									Film festivals used to be do-or-die moments for movie makers. They were where...
								</span>
							</a>
						</li>
						<li>
							<a>
								<span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
								<span>
									<span>John Smith</span>
									<span class="time">3 mins ago</span>
								</span>
								<span class="message">
									Film festivals used to be do-or-die moments for movie makers. They were where...
								</span>
							</a>
						</li>
						<li>
							<a>
								<span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
								<span>
									<span>John Smith</span>
									<span class="time">3 mins ago</span>
								</span>
								<span class="message">
									Film festivals used to be do-or-die moments for movie makers. They were where...
								</span>
							</a>
						</li>
						<li>
							<div class="text-center">
								<a>
									<strong>See All Alerts</strong>
									<i class="fa fa-angle-right"></i>
								</a>
							</div>
						</li>
					</ul>
				</li> -->
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
				<h3>Faculty</h3>
			</div>
		</div>
		<div class="clearfix"></div>
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="x_panel">
				<div class="x_title">
					<h2>Faculty Clearance</h2>
					<div class="clearfix"></div>
				</div>

				<div class="x_content tae">
					<div class="row">
						<div class="col-md-12" style="margin-left:10px">

								<!-- Personal info tab -->
									<div class="row">
										<h4>Requirements</h4>
										<ol>
											<?php
											$sql = "SELECT * FROM requirement NATURAL JOIN designee";
											$query = $conn->prepare($sql);
											$query->execute();
											$fetch = $query->fetchAll();

											foreach ($fetch as $key => $value) { ?>
											<li>
												<a href = "#edit<?php echo $value ['req_id']?>" data-toggle="modal">
													<?php echo $value['req_content'] ?>
												</a>
											</li>
											<?php include '../modal_pass_req.php'; ?>
											<?php } ?>
										</ol>
										<?php


										if(isset($_POST['files']))
										{
											$req_id = $_POST['req_id'];
											$designee_id = $_POST['designee_id'];
											$a = $_FILES['file']['name'];
											$ab = $_FILES['file']['tmp_name'];
											$location = "".$a;
											move_uploaded_file($ab, "../requirements/".$location);
											$userid = $_SESSION['id']; 
											$sql1 = $conn->prepare("INSERT INTO requirementstatus (id,req_id,designee_id,file) VALUES (?,?,?,?)");
											$sql1->execute(array($userid,$req_id,$designee_id,$location));
											if($sql1){ 													
												echo '
												<script> 														
													window.location = "faculty_passrequirements.php"
												</script>'; 												
											}
										}
										?>
								<!--/ Personal info tab -->
							</div>
						</div>
					</div>
				</div><!-- /x content -->
			</div><!-- /x panel -->
		</div>
	</div>
</div>
</div>
<!-- /page content -->

<!-- footer content -->
<footer>
	<div class="pull-right">
		by: Donard haha
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

<!-- Custom Theme Scripts -->
<script src="../build/js/custom.min.js"></script>
</body>
</html>