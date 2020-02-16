<?php
	//session_start();
	include_once('functions.php');

	if(isset($_POST['add'])){
		$firstname = $_POST['firstname'];		//Fulname
		$lastname = $_POST['phone'];			//Phone
		$address = $_POST['address'];			//Address
		$email = $_POST['email'];				//Email
		$comment = $_POST['comment'];			//Comment
		$shoulder = $_POST['shoulder'];			//Shoulder
		$hcl = $_POST['hcl'];					//Half Cut Length
		$bust = $_POST['bust'];					//Bust
		$blousewaist = $_POST['blousewaist'];	//Blouse Waist
		$blouselength = $_POST['blouselength']; //Blouse Length
		$skirtlength = $_POST['skirtlength']; 	//Skirt Length
		$skirtwaist = $_POST['skirtwaist'];		//Skirt Waist
		$hips = $_POST['hips'];					//Hips
		$sliplength = $_POST['sliplength'];		//Slip Length
		$slipround = $_POST['slipround'];		//Slip Round
		$sql = "INSERT INTO customers (fulname, phone, address, email, comment, Shoulder, hcl, bust, blousewaist, blouselength, skirtlength, skirtwaist, hips, sliplength, slipround) VALUES ('$firstname', '$lastname', '$address', '$email', '$comment', '$shoulder', '$hcl', '$bust', '$blousewaist', '$blouselength', '$skirtlength', '$skirtwaist', '$hips', '$sliplength', '$slipround')";
		/*$sql2 = "INSERT INTO measurement (Shoulder) VALUES ('$shoulder')";*/

		//use for MySQLi OOP
		if($db->query($sql)){
			$_SESSION['success'] = 'Member added successfully';
		}
		///////////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member added successfully';
		// }
		//////////////
		
		else{
			$_SESSION['error'] = 'Something went wrong while adding';
		}
	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}
	
	//create an external javascript file for the function and then call it
	//alert("Registration is Successful. Click Ok to input your measurement details");

	header('location: customers.php');
?>
