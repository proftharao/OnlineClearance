<?php
include 'connect.php';

$id = $_POST['haydi'];

$query = $conn->prepare("UPDATE faculty SET status = ? WHERE id = $id");
	$query->execute(array(1));
	header('location:production/admin1.php');

?>