<?php
include'../connect.php';


		$admin_username = $_POST['admin_username'];
		$sql = "INSERT INTO admin(admin_username) VALUES(?)";
		$query = $conn->prepare($sql);
		$query->execute(array($admin_username));
		header('location:admin1.php')
?>