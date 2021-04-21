<?php
include ('connect.php');

$username = $_POST['teacherId'];
$password = md5($_POST['TeacherPass']);

$sql = "SELECT * FROM faculty WHERE faculty_id = ? AND password = ?";
$query = $conn->prepare($sql);
$query->execute(array($username,$password));
$row = $query->fetch();
$count = $query->rowCount();

$sql1 = "SELECT * FROM deadline WHERE status = ?";
$query1 = $conn->prepare($sql1);
$query1->execute(array(1));
$fetch = $query1->fetch();

$today = date('Y-m-d');
$d_date = $fetch['d_date'];

$dl_exp = date('Y-m-d', strtotime('+1 day'));

if ($today <= $d_date){
	if ($count > 0){
		session_start();
		$_SESSION['id'] = $row['id'];
		$userid = $_SESSION['id'];
		echo 1;
	}else{
		echo 0;
	}
}else{
	echo 2;
}

// $new_password = md5($_POST['new_password']);
// $new_cpassword = md5($_POST['new_cpassword']);

// if ($new_password == $password) {
	
// 	$sql = "UPDATE faculty SET password = ? WHERE id = $userid"
// 	$query->execute(array($status,$id));
// }
// else{
// 	Console.log("ssadasds")
// }
?>