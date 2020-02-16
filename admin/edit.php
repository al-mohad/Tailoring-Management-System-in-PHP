<?php
	//session_start();
	include_once('../functions.php');

	if(isset($_POST['edit'])){
		$id 			= $_POST['id'];					//Customer ID
		$fulname 		= $_POST['fulname'];			//Fulname
		$phone 			= $_POST['phone'];				//Phone
		$address 		= $_POST['address'];			//Address
		$email 			= $_POST['email'];				//Email
		$comment 		= $_POST['comment'];			//Comment
		$shoulder 		= $_POST['shoulder'];			//Shoulder
		$hcl 			= $_POST['hcl'];				//Half Cut Length
		$bust 			= $_POST['bust'];				//Bust
		$blousewaist 	= $_POST['blousewaist'];		//Blouse Waist
		$blouselength 	= $_POST['blouselength']; 		//Blouse Length
		$skirtlength 	= $_POST['skirtlength']; 		//Skirt Length
		$skirtwaist 	= $_POST['skirtwaist'];			//Skirt Waist
		$hips 			= $_POST['hips'];				//Hips
		$sliplength 	= $_POST['sliplength'];			//Slip Length
		$slipround 		= $_POST['slipround'];			//Slip Round
		$sql = "UPDATE customers SET fulname = '$fulname', address = '$address', phone = '$phone', email = '$email', comment = '$comment', shoulder = '$shoulder', hcl = '$hcl', bust = '$bust', blousewaist = '$blousewaist', blouselength = '$blouselength', skirtlength = '$skirtlength', skirtwaist = '$skirtwaist', hips ='$hips', sliplength = '$sliplength', slipround = '$slipround' WHERE id = '$id'";

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

	header('location: customers.php');

?>