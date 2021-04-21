<?php
include'connect.php';


$req_id = $_POST['req_id'];
$a = $_FILES['file']['name'];
$ab = $_FILES['file']['tmp_name'];
$location = "".$a;
move_uploaded_file($ab, "../requirements/".$location);
$userid = $_SESSION['id']; 
$a = $conn->lastInsertId();
$sql1 = $conn->prepare("INSERT INTO requirementstatus (id,req_id,designee_id,file) VALUES (?,?,1,?)");
$sql1->execute(array($userid,$req_id,$location));

if($sql){ 													
	echo '
	<script> 														
		window.location = "faculty_passrequirements.php"
	</script>'; 												
}

?>