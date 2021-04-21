<?php
include'connect.php';
include'session_designee.php';


		$id = $_POST['id'];
		$message = $_POST['message'];
		$designee_id = $_SESSION['id'];
		$sql = "INSERT INTO message(designee_id,id,message_content) VALUES(?,?,?)";
		$query = $conn->prepare($sql);
		$query->execute(array($designee_id,$id,$message));
		$count = $query->rowCount();

		if ($count > 0){
			echo "<script type='text/javascript'>alert('Message Sent');</script>";
			echo "<script>document.location='production/designee.php'</script>";
		}else{
			echo "<script type='text/javascript'>alert('Error creating alert!');</script>";
		}

	?>