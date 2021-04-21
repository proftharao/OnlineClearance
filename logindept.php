<?php
include ('connect.php');

$username = $_POST['deptName'];
$password = md5($_POST['deptPass']);

$sql = "SELECT * FROM designee WHERE password = ? AND username = ?";
$query = $conn->prepare($sql);
$query->execute(array($password,$username));
$row = $query->fetch();
$count = $query->rowCount();

if ($count > 0){
	session_start();
	$_SESSION['id'] = $row['designee_id'];
	echo 1;
}else{
	echo 0;
}
?>