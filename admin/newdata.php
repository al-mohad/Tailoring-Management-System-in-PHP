<?php 
include "functions.php";
$stmt->$db->prepare("INSERT INTO users VALUES('',?,?,?,?,?,?)");

$stmt->bind_param("ssssss", $fulname, $username, $email, $phone, $user_type, $password);

$fulname  = $_POST['fulname'];
$username = $_POST['username'];
$email 	  = $_POST['email'];
$phone    = $_POST['phone'];
$user_type= $_POST['user_type'];
$password = $_POST['password'];

if ($stmt->execute()) {
	echo "Berhasil";
}else{
	echo "Gagal";
}
?>