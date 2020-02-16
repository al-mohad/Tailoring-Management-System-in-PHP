<?php
	//session_start();
	include_once('../functions.php');

	if(isset($_POST['edit'])){
		$id 			= $_POST['id'];					//Customer ID
		$fulname 		= $_POST['fulname'];			//Fulname
		$phone 			= $_POST['phone'];				//Phone
		$address 		= $_POST['address'];			//Address
		$email 			= $_POST['email'];				//Email
		$user_type 		= $_POST['user_type'];			//user_type
		$username 		= $_POST['username'];			//username
		$dob 			= $_POST['dob'];				//Date Of Birth
		$gender 		= $_POST['gender'];				//gender
		$state 			= $_POST['state'];				//state
		$lga 			= $_POST['lga']; 				//lga
		$maritalstatus 	= $_POST['maritalstatus']; 		//maritalstatus
		$EmployedOn 	= $_POST['EmployedOn'];			//EmployedOn
		$accountname	= $_POST['accountname'];		//accountname
		$accountnumber 	= $_POST['accountnumber'];		//accountmunber
		$salary 		= $_POST['salary'];				//salary
		$sql = "UPDATE users SET fulname = '$fulname', address = '$address', phone = '$phone', email = '$email', user_type = '$user_type', username = '$username', dob= '$dob', gender = '$gender', state = '$state', lga = '$lga', maritalstatus = '$maritalstatus', EmployedOn = '$EmployedOn', accountname ='$accountname', accountnumber = '$accountnumber', salary = '$salary' WHERE id = '$id'";

		//use for MySQLi OOP
		if($db->query($sql)){
			$_SESSION['success'] = 'Member updated successfully';
		}
		///////////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member updated successfully';
		// }
		///////////////
		
		else{
			$_SESSION['error'] = 'Something went wrong in updating member';
		}
	}
	else{
		$_SESSION['error'] = 'Select member to edit first';
	}

	header('location: staff.php');

?>