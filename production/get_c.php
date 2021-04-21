<?php 

$id = $_GET['sess_id'];

include '../connect.php';


$sql = "SELECT * FROM pds_personal_information 
		NATURAL JOIN pds_family_background 
		NATURAL JOIN pds_civil_service
		NATURAL JOIN pds_work_experience 
		NATURAL JOIN pds_voluntary_work 
		NATURAL JOIN pds_training_program
		NATURAL JOIN pds_other_info WHERE id = ? " ;
		$query = $conn->prepare($sql);
		$query->execute(array($id));
		$fetch = $query->fetchAll();

		foreach ($fetch as $key => $value) {
			$data['cn'] =  $value['child_name'];
			$data['cbd'] = $value['child_birthday'];
		}

echo json_encode($data);

?>