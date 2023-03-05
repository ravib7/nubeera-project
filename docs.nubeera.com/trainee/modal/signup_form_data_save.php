<?php

$fname = $dob = $gender = $email_id = $contact_no = $courseId = $course_names = $district = $state = $country = $address = "";

$date;
$time;
$age;
$admId;
$studPass;

if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['signup'])) {

	include "connect_db.php";


	if (empty($_POST["fname"])) {
	} else {
		$fname = test_input($_POST["fname"]);
		// check if name only contains letters and whitespace
		if (!preg_match("/^[a-zA-Z-' ]*$/", $fname)) {
			$fnameErr = "Only letters and white space allowed";
		}
	}
	// --------------------------------------------------------------------------------------------------
	if (empty($_POST["dob"])) {
		$dobErr = "Date of birth is required";
	} else {
		$dob = $_POST["dob"];
	}
	// --------------------------------------------------------------------------------------------------

	if (empty($_POST["gender"])) {
		$genderErr = "Gender is required";
	} else {
		$gender = $_POST["gender"];
	}
	// --------------------------------------------------------------------------------------------------
	if (empty($_POST["email_id"])) {
		$email_idErr = "Email ID is required";
	} else {
		$email_id = test_input($_POST["email_id"]);

		if (!filter_var($email_id, FILTER_VALIDATE_EMAIL)) {
			$email_idErr = "Invalid email format";
		}
	}
	// --------------------------------------------------------------------------------------------------

	if (empty($_POST["contact_no"])) {
		$contact_noErr = "Contact Number is required";
	} else {
		$contact_no = $_POST["contact_no"];
		if (!preg_match("/^\+[0-9]{2,5} [0-9]{4,10}$/i", $contact_no)) {
			$contact_noErr = "Invalid Contact Number! Please Enter in Specified Format";
		}
	}
	// --------------------------------------------------------------------------------------------------
	if (empty($_POST["courseId"])) {
		$courseIdErr = "Course ID is required";
	} else {
		$courseId = $_POST["courseId"];
	}
	// --------------------------------------------------------------------------------------------------
	if (empty($_POST["course_names"])) {
		$course_namesErr = "Course enrolled for is required";
	} else {
		$course_names = $_POST["course_names"];
	}
	// --------------------------------------------------------------------------------------------------

	if (empty($_POST["district"])) {
		$districtErr = "District is required";
	} else {
		$district = test_input($_POST["district"]);

		if (!preg_match("/^[a-zA-Z-' ]*$/", $district)) {
			$districtErr = "Invalid District Name";
		}
	}
	// --------------------------------------------------------------------------------------------------
	if (empty($_POST["state"])) {
		$stateErr = "State is required";
	} else {
		$state = test_input($_POST["state"]);

		if (!preg_match("/^[a-zA-Z-' ]*$/", $state)) {
			$stateErr = "Invalid State Name";
		}
	}
	// --------------------------------------------------------------------------------------------------
	if (empty($_POST["country"])) {
		$countryErr = "Country is required";
	} else {
		$country = test_input($_POST["country"]);

		if (!preg_match("/^[a-zA-Z-' ]*$/", $country)) {
			$countryErr = "Invalid Country Name";
		}
	}
	// --------------------------------------------------------------------------------------------------
	if (empty($_POST["address"])) {
		$addressErr = "Address is required";
	} else {
		$address = test_input($_POST["address"]);

		if (!preg_match("/^[a-zA-Z-' ]*$/", $address)) {
			$addressErr = "Invalid Address";
		}
	}

	// --------------------------------------------------------------------------------------------------


	function test_input($data)
	{
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
}







            // $admDataInsert = "INSERT INTO admission (`Admission_ID_Pk`, `Full_Name`, `DOB`,`Age`,`Gender`,`Email_ID`,`Contact_No`,`Course_ID_FK`,`Course_Enrolled_For`,`Date`,`Time`,`District`,`State`,`Country`,`Address`) 
            // VALUES('" .$admId . "', '" .$fname. "', '" .$dob. "', '" .$age. "', '" .$gender. "', '" .$email_id . "', '" .$contNo. "', '" .$courseIds. "', '" .$course_names. "', '" .$admDate. "', '" .$admTime. "', '" .$district. "', '" .$state . "', '" .$country. "', '" .$address. "')";

            // $studCredDataInsert = "INSERT INTO students_cred (`Student_ID_FK`, `Student_Pass`) 
            // VALUES('" .$admId. "', '" .$studPass. "')";
