<?php
	include('../connect.php');

	$d = $_POST['d_date'];

	$sql = "SELECT * FROM deadline ORDER BY id DESC LIMIT 1";
	$query = $conn->prepare($sql);
	$query->execute();
	$fetch = $query->fetch();
	$id = $fetch['id'];
	
	if ($query->rowCount() > 0){
		$sql1 = "UPDATE deadline SET  status = ? WHERE id = ?";
		$query1 = $conn->prepare($sql1);
		$query1->execute(array(0,$id));
		
		$sql2 = "INSERT INTO deadline(d_date,status) VALUES (?,?)";
		$query2 = $conn->prepare($sql2);
		$query2->execute(array($d,1));
		echo 1;
	}else{
		
		$sql2 = "INSERT INTO deadline(d_date,status) VALUES (?,?)";
		$query2 = $conn->prepare($sql2);
		$query2->execute(array($d,1));
	}
	
?>