<?php 

	include '../connect.php';

	$id = $_POST['session_id'];
	$p = md5($_POST['password']);

	$sql = "UPDATE admin SET password = ? WHERE admin_id = ?";
	$query = $conn->prepare($sql);
	$query->execute(array($p,$id));

	echo $query->rowCount() > 0 ? 1: 0;
?>