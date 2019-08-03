<?php
include('connect.php');
if(isset($_POST['update'])) {
	
	$per_id = $_POST['per_id']; 
	// move_uploaded_file($_FILES["per_img"]["tmp_name"],"uploads/" . $_FILES["per_img"]["name"]);			
	// $location=$_FILES["per_img"]["name"];
	$per_firstname = $_POST['per_firstname'];
	$per_middlename = $_POST['per_middlename'];
	$per_lastname = $_POST['per_lastname'];
	$per_suffix = $_POST['per_suffix'];
	$per_gender = $_POST['per_gender'];
	$per_status = $_POST['per_status'];
	$per_email = $_POST['per_email'];
	$per_date_of_last_appointment = $_POST['per_date_of_last_appointment'];
	$per_civil_status= $_POST['per_civil_status'];
	$per_address = $_POST['per_address'];
	$per_position = $_POST['per_position'];
	$per_benefit = $_POST['per_benefit'];
	$per_eligibility = $_POST['per_eligibility'];
	$per_salary = $_POST['per_salary'];
	$per_designation = $_POST['per_designation'];
	$per_date_of_birth  = $_POST['per_date_of_birth'];
	$per_place_of_birth = $_POST['per_place_of_birth'];
	$per_tin_no = $_POST['per_tin_no'];
	$per_gsis_bp_no = $_POST['per_gsis_bp_no'];
	$per_pagibig_no = $_POST['per_pagibig_no'];
	$per_contact_no = $_POST['per_contact_no'];
	$per_plantilla_no = $_POST['per_plantilla_no'];
	$per_date_of_original_appointment = $_POST['per_date_of_original_appointment'];
	$per_bs_name = $_POST['per_bs_name'];
	$per_bs_year = $_POST['per_bs_year'];
	$per_bs_school = $_POST['per_bs_school'];
	$per_ms_name = $_POST['per_ms_name'];
	$per_ms_with_unit = $_POST['per_ms_with_unit'];
	$per_ms_year = $_POST['per_ms_year'];
	$per_ms_school = $_POST['per_ms_school'];
	$per_dr_name = $_POST['per_dr_name'];
	$per_dr_with_unit = $_POST['per_dr_with_unit'];
	$per_dr_year = $_POST['per_dr_year'];
	$per_dr_school = $_POST['per_dr_school'];
	$per_other_degree = $_POST['per_other_degree'];
	$per_other_year = $_POST['per_other_year'];
	$per_other_school = $_POST['per_other_school'];
	$per_step = $_POST['per_step'];

    // $query = $con->prepare("INSERT INTO tbl_personnel_master_file SELECT * FROM tbl_personnel where per_id = $per_id");
    // $query->execute();


	$add_personnel = $con->prepare("UPDATE tbl_personnel SET per_firstname = ?, per_middlename = ?, per_lastname = ?, per_suffix = ?, per_gender = ?, per_email = ?, per_status = ?, per_salary = ?, per_address = ?, per_position = ?, per_designation = ?, per_benefit = ?, per_date_of_birth = ?, per_place_of_birth = ?, per_civil_status= ?, per_date_of_original_appointment = ?, per_date_of_last_appointment = ?, per_tin_no = ?, per_gsis_bp_no= ?, per_pagibig_no = ?, per_contact_no = ?, per_plantilla_no= ?, per_eligibility = ?, bs_name = ?, bs_year = ?, bs_school = ?, ms_name = ?, ms_with_unit = ?, ms_year = ?, ms_school = ?, dr_name = ?, dr_with_unit = ?, dr_year = ?, dr_school = ?, other_degree = ?, other_year = ?, other_school = ?, date_modified = NOW() WHERE per_id = ?");
	$add_personnel->execute(array($per_firstname, $per_middlename, $per_lastname, $per_suffix, $per_gender, $per_email, $per_status,$per_salary, $per_address, $per_position, $per_designation, $per_benefit, $per_date_of_birth, $per_place_of_birth, $per_civil_status, $per_date_of_original_appointment, $per_date_of_original_appointment, $per_tin_no, $per_gsis_bp_no, $per_pagibig_no, $per_contact_no, $per_plantilla_no, $per_eligibility, $per_bs_name, $per_bs_year, $per_bs_school, $per_ms_name, $per_ms_with_unit, $per_ms_year, $per_ms_school, $per_dr_name, $per_dr_with_unit, $per_dr_year, $per_dr_school, $per_other_degree, $per_other_year, $per_other_school, $per_id));
	echo "<script>alert('Successfully Edited'); window.location='all_personnel.php'</script>";	
}

?>