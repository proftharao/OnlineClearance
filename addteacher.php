<?php
include 'connect.php';

if (isset($_POST['add'])){
	$facultyId = $_POST['facultyId'];
	$firstname = $_POST['firstname'];
	$middlename = $_POST['middlename'];
	$lastname = $_POST['lastname'];
	$contactnumber = $_POST['contactnumber'];
	$email = $_POST['email'];
	$designation = $_POST['designation'];
	$department = $_POST['department'];
	$campus = $_POST['campus'];
	$course = $_POST['course'];

	$add = $conn->prepare("INSERT INTO faculty (faculty_id, faculty_Fname, faculty_Mname, faculty_Lname, Contact_num, Email, Designation, Department, Campus, course_program)
		VALUES (?,?,?,?,?,?,?,?,?,?) ");
	$add->execute(array($facultyId,$firstname,$middlename,$lastname,$contactnumber,$email,$designation,$department,$campus,$course));
	
	$a = $conn->lastInsertId();
	$add1 = $conn->prepare("INSERT INTO clearance (id) VALUES (?)");
	$add1->execute(array($a));
	$add2 = $conn->prepare("INSERT INTO pds_personal_information (id) VALUES (?)");
	$add2->execute(array($a));
	$add2 = $conn->prepare("INSERT INTO pds_family_background (id) VALUES (?)");
	$add2->execute(array($a));
	$add2 = $conn->prepare("INSERT INTO pds_educational_background (id) VALUES (?)");
	$add2->execute(array($a));
	$add2 = $conn->prepare("INSERT INTO pds_civil_service (id) VALUES (?)");
	$add2->execute(array($a));
	$add2 = $conn->prepare("INSERT INTO pds_work_experience (id) VALUES (?)");
	$add2->execute(array($a));
	$add2 = $conn->prepare("INSERT INTO pds_voluntary_work (id) VALUES (?)");
	$add2->execute(array($a));
	$add2 = $conn->prepare("INSERT INTO pds_training_program (id) VALUES (?)");
	$add2->execute(array($a));
	$add2 = $conn->prepare("INSERT INTO pds_other_info (id) VALUES (?)");
	$add2->execute(array($a));
}
?>