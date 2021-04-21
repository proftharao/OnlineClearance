<?php 
include 'session.php';
include 'connect.php';

$userid = $_SESSION['id'];
$until = $_POST['until'];
$mailing_address = $_POST['mailing_address'];

$query = $conn->prepare("UPDATE clearance SET until = ?, mailing_address = ? WHERE id = $userid"); 	
	$query->execute(array($until,$mailing_address));
	header('location:production/faculty.php');	
?>