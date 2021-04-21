<?php 

	include '../connect.php';

	$id = $_POST['session_id'];
	$p = md5($_POST['password']);

	$sql = "UPDATE faculty SET password = ? WHERE id = ?";
	$query = $conn->prepare($sql);
	$query->execute(array($p,$id));

	echo $query->rowCount() > 0 ? 1: 0;
?>