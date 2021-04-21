<?php
include 'connect.php';

	$id = $_GET['id'];
	$sql = "DELETE FROM requirementstatus WHERE reqstat_id = '$id'";
	$delete = $conn->prepare($sql);
	$delete->execute();
	header('location:production/designee.php');


?>