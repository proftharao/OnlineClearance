<?php 
include 'session_designee.php';
include 'connect.php';
// $status = $_POST['status'];
$id = $_POST['id'];
$user_id = $_SESSION['id'];

if($user_id == 1){
	$query = $conn->prepare("UPDATE clearance SET is_accountant_approval = 1 WHERE id = ?"); 	
	$query->execute(array($id));
	header('location:production/designee.php');	
}
elseif ($user_id == 2) {
	$query = $conn->prepare("UPDATE clearance SET is_supply_approval = 1 WHERE id = ?"); 	
	$query->execute(array($id));
	header('location:production/designee.php');
}
elseif ($user_id == 3) {
	$query = $conn->prepare("UPDATE clearance SET is_director_ppf_approval = 1 WHERE id = ?"); 	
	$query->execute(array($id));
	header('location:production/designee.php');
}
elseif ($user_id == 4) {
	$query = $conn->prepare("UPDATE clearance SET is_facfed_approval = 1 WHERE id = ?"); 	
	$query->execute(array($id));
	header('location:production/designee.php');
}
elseif ($user_id == 5) {
	$query = $conn->prepare("UPDATE clearance SET is_cooperative_approval = 1 WHERE id = ?"); 	
	$query->execute(array($id));
	header('location:production/designee.php');
}
elseif ($user_id == 6) {
	$query = $conn->prepare("UPDATE clearance SET is_librarian_approval = 1 WHERE id = ?"); 	
	$query->execute(array($id));
	header('location:production/designee.php');
}
elseif ($user_id == 7) {
	$query = $conn->prepare("UPDATE clearance SET is_registrar_approval = 1 WHERE id = ?"); 	
	$query->execute(array($id));
	header('location:production/designee.php');
}
elseif ($user_id == 8) {
	$query = $conn->prepare("UPDATE clearance SET is_area_approval = 1 WHERE id = ?"); 	
	$query->execute(array($id));
	header('location:production/designee.php');
}
elseif ($user_id == 9) {
	$query = $conn->prepare("UPDATE clearance SET is_dean_approval = 1 WHERE id = ?"); 	
	$query->execute(array($id));
	header('location:production/designee.php');
}
elseif ($user_id == 10) {
	$query = $conn->prepare("UPDATE clearance SET is_executive_approval = 1 WHERE id = ?"); 	
	$query->execute(array($id));
	header('location:production/designee.php');
}
elseif ($user_id == 11) {
	$query = $conn->prepare("UPDATE clearance SET is_hrm_approval = 1 WHERE id = ?"); 	
	$query->execute(array($id));
	header('location:production/designee.php');
}
elseif ($user_id == 12) {
	$query = $conn->prepare("UPDATE clearance SET is_cao_approval = 1 WHERE id = ?"); 	
	$query->execute(array($id));
	header('location:production/designee.php');
}
elseif ($user_id == 13) {
	$query = $conn->prepare("UPDATE clearance SET is_vp_admin_approval = 1 WHERE id = ?"); 	
	$query->execute(array($id));
	header('location:production/designee.php');
}
elseif ($user_id == 14) {
	$query = $conn->prepare("UPDATE clearance SET is_vp_academic_approval = 1 WHERE id = ?"); 	
	$query->execute(array($id));
	header('location:production/designee.php');
}
elseif ($user_id == 15){
	$query = $conn->prepare("UPDATE clearance SET is_head_approval = 1 WHERE id = ?"); 	
	$query->execute(array($id));

	$sql = $conn->prepare("INSERT INTO cleared_teacher(id) VALUES (?) ");
	// $query1 = $conn->prepare($sql);
	$sql->execute(array($id));
	header('location:production/designee.php');
}
else{
	$query = $conn->prepare("UPDATE clearance SET is_area_approval = 1 WHERE id = ?"); 	
	$query->execute(array($id));
	header('location:production/designee.php');
}
?>