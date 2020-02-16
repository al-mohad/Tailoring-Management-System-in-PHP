<?php
	//session_start();
	include_once('../functions.php');

	if(isset($_POST['add'])){
		$CustomerName 		= $_POST['CustomerName'];
		$NumberOfCloths 	= $_POST['NumberOfCloths'];
		$RecievedDate 		= $_POST['RecievedDate'];
		$DueDate 			= $_POST['DueDate'];
		$AssignedTailor 	= $_POST['AssignedTailor'];
		$Comment 			= $_POST['Comment'];
		$sql = "INSERT INTO orders (CustomerName, NumberOfCloths, RecievedDate, DueDate, AssignedTailor, Comment) VALUES ('$CustomerName', '$NumberOfCloths', '$RecievedDate', '$DueDate', '$AssignedTailor', '$Comment')";

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

	header('location: orders.php');
?>