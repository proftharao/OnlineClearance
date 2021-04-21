<?php 
include('connect.php');
session_start();

if (!isset($_SESSION['id']) || ($_SESSION['id'] == '')){ ?>
	<script>
		window.location = 'index.php';
	</script>
	<?php
}

$session_id = $_SESSION['id'];

$sql = "SELECT * FROM admin WHERE admin_id = $session_id ";
$query = $conn->prepare($sql);
$query->execute(array($session_id));
$row = $query->fetch();

$name = $row['admin_username'];
?>