<?php
	//session_start();
	include_once('../functions.php');

	if(isset($_POST['edit'])){
		$id 				= $_POST['id'];
		$CustomerName 		= $_POST['CustomerName'];
		$NumberOfCloths 	= $_POST['NumberOfCloths'];
		$RecievedDate 		= $_POST['RecievedDate'];
		$DueDate 			= $_POST['DueDate'];
		$AssignedTailor 	= $_POST['AssignedTailor'];
		$Comment 			= $_POST['Comment'];
		$sql = "UPDATE orders SET CustomerName = '$CustomerName', NumberOfCloths = '$NumberOfCloths', RecievedDate = '$RecievedDate', DueDate = '$DueDate', AssignedTailor = '$AssignedTailor', Comment = '$Comment' WHERE id = '$id'";

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

	header('location: orders.php');

?>