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

	<title>eMobilis Clearance System</title>

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
	<link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
	<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>


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
					<h2>Edit Image</h2>
					<div class="clearfix"></div>
				</div>

				<div class="x_content">
					<div class="row">
						<div class="col-md-4">

						</div>
						<div class="col-md-8">
							<div class="tab-content">
								<form method="POST" enctype = "multipart/form-data">
									<div role="tabpanel" class="tab-pane active" id="1">
										<h4>Image</h4>
										
										<br />
										<h5>Attach Picture Here</h5> 
										<style>
											article, aside, figure, footer, header, hgroup, 
											menu, nav, section { display: block; }
										</style>
										<img id="blah" src="#" alt="your image" />
										<input type="file" name="file" onchange="readURL(this);"> <br />
										<button type="submit" name="files" class="btn btn-primary pull-right">Submit</button>
										<?php
										if(isset($_POST['files']))
										{
											$a = $_FILES['file']['name'];
											$ab = $_FILES['file']['tmp_name'];
											$location = "".$a;
											move_uploaded_file($ab, "../requirements/".$location);

												// $sql = $conn->prepare("INSERT INTO requirement (file) VALUES (?)");
												// $sql->execute(array($location));
											$userid = $_SESSION['id']; 
											$a = $conn->lastInsertId();
												// $sql1 = $conn->prepare("INSERT INTO req_faculty (id,req_id,file) VALUES (?,?,?)");
												// $sql1->execute(array($userid,$a,$location));
											$sql2 = $conn->prepare("UPDATE faculty SET faculty_picture = ? WHERE id = ?");
											$sql2->execute(array($location,$userid));

											if($sql){ 													
												echo '
												<script> 														
													window.location = "edit_picture.php"
												</script>'; 												
											}
										}
										?>
									</div>
								</form>
									<!-- <div role="tabpanel" class="tab-pane" id="2">
										<h4>Attach File Here</h4> <br /> <input type="file" name="">
									</div>
									<div role="tabpanel" class="tab-pane" id="3">
										<h4>Attach File Here</h4> <br /> <input type="file" name="">
									</div>
									<div role="tabpanel" class="tab-pane" id="4">
										<h4>Attach File Here</h4> <br /> <input type="file" name="">
									</div>
									<div role="tabpanel" class="tab-pane" id="5">
										<h4>Attach File Here</h4> <br /> <input type="file" name="">
									</div>
									<div role="tabpanel" class="tab-pane" id="6">
										<h4>Attach File Here</h4> <br /> <input type="file" name="">
									</div>
									<div role="tabpanel" class="tab-pane" id="7">
										<h4>Attach File Here</h4> <br /> <input type="file" name="">
									</div>
									<div role="tabpanel" class="tab-pane" id="8">
										<h4>Attach File Here</h4> <br /> <input type="file" name="">
									</div>
									<div role="tabpanel" class="tab-pane" id="9">
										<h4>Attach File Here</h4> <br /> <input type="file" name="">
									</div>
									<div role="tabpanel" class="tab-pane" id="10">
										<h4>Attach File Here</h4> <br /> <input type="file" name="">
									</div>
									<div role="tabpanel" class="tab-pane" id="11">
										<h4>Attach File Here</h4> <br /> <input type="file" name="">
									</div>
									<div role="tabpanel" class="tab-pane" id="12">
										<h4>Attach File Here</h4> <br /> <input type="file" name="">
									</div>
									<div role="tabpanel" class="tab-pane" id="13">
										<h4>Attach File Here</h4> <br /> <input type="file" name="">
									</div>
									<div role="tabpanel" class="tab-pane" id="14">
										<h4>Attach File Here</h4> <br /> <input type="file" name="">
									</div> -->
									<?php include 'change_pass_modal.php';?>

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


<!-- Custom Theme Scripts -->
<script src="../build/js/custom.min.js"></script>

<script type="text/javascript">
	function readURL(input) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();

			reader.onload = function (e) {
				$('#blah')
				.attr('src', e.target.result)
				.width(150)
				.height(200);
			};

			reader.readAsDataURL(input.files[0]);
		}
	}
</script>
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
</body>
</html>