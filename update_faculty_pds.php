<?php
include 'session.php';
include 'connect.php';

$user_id = $_SESSION['id'];
$surname = $_POST['surname'];
$firstname = $_POST['firstname'];
$middlename = $_POST['middlename'];
$name_extension = $_POST['name_extension'];
$birthday = $_POST['birthday'];
$place_of_birth = $_POST['place_of_birth'];
$sex = $_POST['sex'];
$civil_status = $_POST['civil_status'];
$other_civil_status = $_POST['other_civil_status'];
$citizenship = $_POST['citizenship'];
$height = $_POST['height'];
$weight = $_POST['weight'];
$blood_type = $_POST['blood_type'];
$gsis_id_no = $_POST['gsis_id_no'];
$pagibig_id_no = $_POST['pagibig_id_no'];
$philhealth_no = $_POST['philhealth_no'];
$sss_no = $_POST['sss_no'];
$residential_address = $_POST['residential_address'];
$residential_zipcode = $_POST['residential_zipcode'];
$residential_tel_no = $_POST['residential_tel_no'];
$permanent_address = $_POST['permanent_address'];
$permanent_zipcode = $_POST['permanent_zipcode'];
$permanent_tel_no = $_POST['permanent_tel_no'];
$email = $_POST['email'];
$cellphone_no = $_POST['cellphone_no'];
$agency_employee_no = $_POST['agency_employee_no'];
$tin_no = $_POST['tin_no'];
$spouse_surname = $_POST['spouse_surname'];
$spouse_firstname = $_POST['spouse_firstname'];
$spouse_middlename = $_POST['spouse_middlename'];
$spouse_occupation = $_POST['spouse_occupation'];
$spouse_employer_name = $_POST['spouse_employer_name'];
$spouse_business_address = $_POST['spouse_business_address'];
$spouse_tel_no = $_POST['spouse_tel_no'];
$father_surname = $_POST['father_surname'];
$father_firstname = $_POST['father_firstname'];
$father_middlename = $_POST['father_middlename'];
$mother_surname = $_POST['mother_surname'];
$mother_firstname = $_POST['mother_firstname'];
$mother_middlename = $_POST['mother_middlename'];
$a = $_POST['child_name'];
$b = json_encode($a);
$c = str_replace(array('[',']','"'), '', $b);
$child_name = str_replace(',', '///', $c);
$e = $_POST['child_birthday'];
$f = json_encode($e);
$g = str_replace(array('[',']','"'), '', $f);
$h = str_replace(array('\/'), '/', $g);
$child_birthday = str_replace(',', '///', $h);
$civil_career_service = $_POST['civil_career_service'];
$civil_rating = $_POST['civil_rating'];
$civil_date_of_examination = $_POST['civil_date_of_examination'];
$civil_place_of_examination = $_POST['civil_place_of_examination'];
$civil_license_number = $_POST['civil_license_number'];
$civil_date_of_release = $_POST['civil_date_of_release'];
$work_date_from = $_POST['work_date_from'];
$work_date_to = $_POST['work_date_to'];
$work_position_title = $_POST['work_position_title'];
$work_department = $_POST['work_department'];
$work_monthly_salary = $_POST['work_monthly_salary'];
$work_salary_grade = $_POST['work_salary_grade'];
$work_status_of_appointment = $_POST['work_status_of_appointment'];
$work_govt_service = $_POST['work_govt_service'];
$voluntary_name_and_address = $_POST['voluntary_name_and_address'];
$voluntary_date_from = $_POST['voluntary_date_from'];
$voluntary_date_to = $_POST['voluntary_date_to'];
$voluntary_number_of_hours = $_POST['voluntary_number_of_hours'];
$voluntary_position = $_POST['voluntary_position'];
$training_title = $_POST['training_title'];
$training_date_from = $_POST['training_date_from'];
$training_date_to = $_POST['training_date_to'];
$training_number_of_hours = $_POST['training_number_of_hours'];
$training_conducted = $_POST['training_conducted'];
$other_special_skill = $_POST['other_special_skill'];
$other_non_academic = $_POST['other_non_academic'];
$other_membership = $_POST['other_membership'];
$other_36_a = $_POST['other_36_a'];
$other_36_a_yes = $_POST['other_36_a_yes'];
$other_36_b = $_POST['other_36_b'];
$other_36_b_yes = $_POST['other_36_b_yes'];
$other_37_a = $_POST['other_37_a'];
$other_37_a_yes = $_POST['other_37_a_yes'];
$other_37_b = $_POST['other_37_b'];
$other_37_b_yes = $_POST['other_37_b_yes'];
$other_number_38 = $_POST['other_number_38'];
$other_number_38_yes = $_POST['other_number_38_yes'];
$other_number_39 = $_POST['other_number_39'];
$other_number_39_yes = $_POST['other_number_39_yes'];
$other_number_40 = $_POST['other_number_40'];
$other_number_40_yes = $_POST['other_number_40_yes'];
$other_41_a = $_POST['other_41_a'];
$other_41_a_yes = $_POST['other_41_a_yes'];
$other_41_b = $_POST['other_41_b'];
$other_41_b_yes = $_POST['other_41_b_yes'];
$other_41_c = $_POST['other_41_c'];
$other_41_c_yes = $_POST['other_41_c_yes'];
$references_name = $_POST['references_name'];
$references_address = $_POST['references_address'];
$references_tel_no = $_POST['references_tel_no'];


$query = $conn->prepare("UPDATE pds_personal_information SET surname = ?, firstname = ?, middlename = ?, name_extension = ?, birthday = ?, place_of_birth = ?, sex = ?, civil_status = ?, other_civil_status = ?, citizenship = ?, height = ?, weight = ?, blood_type = ?, gsis_id_no = ?, pagibig_id_no = ?, philhealth_no = ?, sss_no = ?, residential_address = ?, residential_zipcode = ?, residential_tel_no = ?, permanent_address = ?, permanent_zipcode = ?, permanent_tel_no = ?, email_address = ?, cellphone_no = ?, agency_employee_no = ?, tin_no = ? WHERE id = $user_id"); 	
$query->execute(array($surname,$firstname,$middlename,$name_extension,$birthday,$place_of_birth,$sex,$civil_status,$other_civil_status,$citizenship,$height,$weight,$blood_type,$gsis_id_no,$pagibig_id_no,$philhealth_no,$sss_no,$residential_address,$residential_zipcode,$residential_tel_no,$permanent_address,$permanent_zipcode,$permanent_tel_no,$email,$cellphone_no,$agency_employee_no,$tin_no));

$query2 = $conn->prepare("UPDATE pds_family_background SET spouse_surname = ?, spouse_firstname = ?, spouse_middlename = ?, spouse_occupation = ?, spouse_employer_name = ?, spouse_business_address = ?, spouse_tel_no = ?, father_surname = ?, father_firstname = ?, father_middlename = ?, mother_surname = ?, mother_firstname = ?, mother_middlename = ?, child_name = ?, child_birthday = ? WHERE id = $user_id");
$query2->execute(array($spouse_surname,$spouse_firstname,$spouse_middlename,$spouse_occupation,$spouse_employer_name,$spouse_business_address,$spouse_tel_no,$father_surname,$father_firstname,$father_middlename,$mother_surname,$mother_firstname,$mother_middlename,$child_name,$child_birthday));

$query3 = $conn->prepare("UPDATE pds_civil_service SET career_service = ?, rating = ?, date_of_examination = ?, place_of_examination = ?, license_number = ?, license_date_of_release = ? WHERE id = $user_id");
$query3->execute(array($civil_career_service,$civil_rating,$civil_date_of_examination,$civil_place_of_examination,$civil_license_number,$civil_date_of_release));

$query4 = $conn->prepare("UPDATE pds_work_experience SET work_experience_from = ?,work_experience_to = ?, position_title = ?, department = ?, monthly_salary = ?, salary_grade = ?, status_of_appointment = ?, govt_service = ? WHERE id = $user_id");
$query4->execute(array($work_date_from,$work_date_to,$work_position_title,$work_department,$work_monthly_salary,$work_salary_grade,$work_status_of_appointment,$work_govt_service));

$query5 = $conn->prepare("UPDATE pds_voluntary_work SET name_and_address = ?, voluntary_work_from = ?, voluntary_work_to = ?, number_of_hours = ?, position = ? WHERE id = $user_id");
$query5->execute(array($voluntary_name_and_address,$voluntary_date_from,$voluntary_date_to,$voluntary_number_of_hours,$voluntary_position));

$query6 = $conn->prepare("UPDATE pds_training_program SET title_of_seminar = ?, training_date_from = ?, training_date_to = ?, training_number_of_hours = ?, conducted_by = ? WHERE id = $user_id ");
$query6 ->execute(array($training_title,$training_date_from,$training_date_to,$training_number_of_hours,$training_conducted));

$query7 = $conn->prepare("UPDATE pds_other_info SET other_special_skill = ?, other_non_academic = ?, other_membership = ?, 36_a = ?, 36_a_yes = ?, 36_b = ?, 36_b_yes = ?, 37_a = ?, 37_a_yes = ?, 37_b = ?, 37_b_yes = ?, number_38 = ?, number_38_yes = ?, number_39 = ?, number_39_yes = ?, number_40 = ?, number_40_yes = ?, 41_a = ?, 41_a_yes = ?, 41_b = ?, 41_b_yes = ?, 41_c = ?, 41_c_yes = ?, references_name = ?, references_address = ?, references_tel_no = ?");
$query7->execute(array($other_special_skill,$other_non_academic,$other_membership,$other_36_a,$other_36_a_yes,$other_36_b,$other_36_b_yes,$other_37_a,$other_37_a_yes,$other_37_b,$other_37_b_yes,$other_number_38,$other_number_38_yes,$other_number_39,$other_number_39_yes,$other_number_40,$other_number_40_yes,$other_41_a,$other_41_a_yes,$other_41_b,$other_41_b_yes,$other_41_c,$other_41_c_yes,$references_name,$references_address,$references_tel_no));

header('location:production/faculty_pds.php');
?>