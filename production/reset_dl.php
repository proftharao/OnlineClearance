<?php

	include '../connect.php';

	$sql = "SELECT * FROM deadline ORDER BY id DESC LIMIT 1";
	$query = $conn->prepare($sql);
	$query->execute();
	$fetch = $query->fetch();

	$id = $fetch['id'];

	$sql1 = "UPDATE deadline SET status = ? WHERE id = ?";
	$query1 = $conn->prepare($sql1);
	$query1->execute(array(0, $id));

	// $sql2 = "SELECT * FROM clearance";
	// $query2 = $conn->prepare($sql2);
	// $query2->execute();
	// $fetch2 = $query2->fetch();

	// $id1 = $fetch2['clearance_id'];

	// $sql3 = $conn->prepare("UPDATE clearance SET is_accountant_approval = ? WHERE clearance_id = $id1");
	// $sql3 ->execute(array(0));
?>