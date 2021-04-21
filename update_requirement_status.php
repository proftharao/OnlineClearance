<?php 
include 'session_designee.php';
include 'connect.php';
// $status = $_POST['status'];
$a = $_POST['haydi'];
$user_id = $_SESSION['id'];

	$query = $conn->prepare("UPDATE requirementstatus SET status = 1 WHERE id = $a AND designee_id = $user_id"); 	
	$query->execute(array($a,$user_id));
	header('location:production/designee.php');	
?>