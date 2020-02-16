<?php
	//session_start();
	include_once('functions.php');

	if(isset($_POST['add'])){
		$Customer_id		= $_POST['Customer_id'];
		$fulname 			= $_POST['fulname'];
		$Shoulder 			= $_POST['Shoulder'];
		$HalfCutLength 		= $_POST['HalfCutLength'];
		$Bust 				= $_POST['Bust'];
		$BlouseWaist 		= $_POST['BlouseWaist'];
		$BlouseLength 		= $_POST['BlouseLength'];
		$SkirtLength 		= $_POST['SkirtLength'];
		$SkirtSkirtWaist 	= $_POST['SkirtSkirtWaist'];
		$Hips 				= $_POST['Hips'];
		$SlipLength 		= $_POST['SlipLength'];
		$SkirtRound 		= $_POST['SkirtRound'];
		//$fulname 	= $_POST['fulname'];

		$sql = "INSERT INTO measurement (Customer_id, fulname, Shoulder, HalfCutLength, Bust, BlouseWaist, BlouseLength, SkirtLength, SkirtWaist, Hips, SlipLength, SlipRound) VALUES ('$Customer_id', '$fulname', '$Shoulder', '$HalfCutLength', '$Bust', '$BlouseWaist', '$BlouseLength', '$SkirtLength', '$SkirtWaist', '$Hips', '$SlipLength', '$SlipRound')";

	// 	$query 		= "SELECT * FROM customers WHERE id='$id' AND fulname='$fulname' LIMIT 1";
	// 	$results 	= mysqli_query($db, $query);

	// if (mysqli_num_rows($results) == 1) { 
	// 	//if the customer id and customer fulname matches with the records at the database the insert into measurement orders
		
	// }else {
	// 		alert("Invalid Customer ID and Customer Fulname!!!");
	// 		header('location:index.php');
	// }

	

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

	header('location: index.php');
?>
