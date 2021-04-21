<?php
include('../session_designee.php');
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

	<title>eMobilis Clearance System</title>

	<!-- Bootstrap -->
	<link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<!-- Font Awesome -->
	<link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<!-- NProgress -->
	<link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
	<!-- jQuery custom content scroller -->
	<link href="../vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css" rel="stylesheet"/>
	<!-- Switchery -->
	<link href="../vendors/switchery/dist/switchery.min.css" rel="stylesheet">

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
							<img src="images/img.jpg" alt="..." class="img-circle profile_img">
						</div>
						<div class="profile_info">
							<span>Welcome,</span>
							<h2><?php echo $name_designee; ?></h2>
						</div>
					</div>
					<!-- /menu profile quick info -->

					<br />

					<!-- sidebar menu -->
					<?php include ('sidebar_designee.php'); ?>
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
									<img src="images/img.jpg" alt=""><?php echo $name_designee; ?>
									<span class=" fa fa-angle-down"></span>
								</a>
								<ul class="dropdown-menu dropdown-usermenu pull-right">
									<!-- 	<li><a href="javascript:;"> Profile</a></li> -->
						<!-- 	<li>
								<a href="javascript:;">
									<span class="badge bg-red pull-right">50%</span>
									<span>Settings</span>
								</a>
							</li> -->
							<!-- <li><a href="javascript:;">Help</a></li> -->
							<li><a href="../index.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
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
					<h3><?php echo $name_designee; ?></h3>
				</div>
			</div>
			<div class="clearfix"></div>
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="x_panel">
					<div class="x_title">
						<h2>Create Requirements</h2>
						<div class="clearfix"></div>
					</div>

					<div class="x_content">
						<div class="row">

							<div class="col-md-9 main">
								<!-- Alert Body -->
								<div class="row">
									<div class="col-md-9">
										<form method="POST">
											<div class="form-group">
												<label>Content</label>
												<textarea class="form-control" rows="10" cols="90" name="message" required></textarea><br />
												<input type="submit" name="save" value="Save" class="btn btn-primary form-control "> 
											</div>
										</form>
									</div>
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
<!-- Switchery -->
<script src="../vendors/switchery/dist/switchery.min.js"></script>

<!-- Custom Theme Scripts -->
<script src="../build/js/custom.min.js"></script>

<?php


	if (isset($_POST['save']))
	{
		$message= $_POST['message'];
		$id = $_SESSION['id'];
		$sql = "INSERT INTO requirement(req_content,designee_id) VALUES(?,?)";
		$query = $conn->prepare($sql);
		$query->execute(array($message,$id));
		$count = $query->rowCount();

		if ($count > 0){
			echo "<script type='text/javascript'>alert('Complete making alert');</script>";
			echo "<script>document.location='designee_addrequirements.php'</script>";
		}else{
			echo "<script type='text/javascript'>alert('Error creating alert!');</script>";
		}
	}

	?>
</body>
</html>